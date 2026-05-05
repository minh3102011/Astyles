"""
Custom HTTP server for the Astyles.Org backup site.
Fixes the directory URL problem: ensures trailing slash redirect 
so relative CSS/JS paths resolve correctly in the browser.
"""
import http.server
import os
import mimetypes
from urllib.parse import unquote
from pathlib import Path

PORT = 8000
ROOT = Path(__file__).parent.resolve()

# Register additional MIME types
mimetypes.add_type('text/css', '.css')
mimetypes.add_type('application/javascript', '.js')
mimetypes.add_type('text/html', '.php')
mimetypes.add_type('image/x-icon', '.ico')

class Handler(http.server.BaseHTTPRequestHandler):
    """Minimal HTTP handler that properly handles directory indexing."""
    
    def do_HEAD(self):
        """Handle HEAD requests same as GET but without body."""
        self.do_GET(head_only=True)
    
    def do_POST(self):
        """Handle POST requests same as GET (static archive)."""
        self.do_GET()
    
    def do_GET(self, head_only=False):
        # Parse the URL path (strip query and fragment)
        url_path = self.path.split('?')[0].split('#')[0]
        decoded = unquote(url_path)
        
        # Security: prevent path traversal
        clean = decoded.lstrip('/')
        fs_path = (ROOT / clean).resolve()
        if not str(fs_path).startswith(str(ROOT)):
            self.send_error(403)
            return
        
        # CASE 1: Directory WITHOUT trailing slash → 301 redirect
        if fs_path.is_dir() and not url_path.endswith('/'):
            redirect_url = url_path + '/'
            self.send_response(301)
            self.send_header('Location', redirect_url)
            self.send_header('Cache-Control', 'no-cache')
            self.end_headers()
            return
        
        # CASE 2: Directory WITH trailing slash → serve index.html
        if fs_path.is_dir():
            index = fs_path / 'index.html'
            if not index.is_file():
                index = fs_path / 'index.php'
            if index.is_file():
                self._serve_file(index, head_only)
                return
            # No index file - send 404
            self.send_error(404, f'No index.html in {url_path}')
            return
        
        # CASE 3: Regular file
        if fs_path.is_file():
            self._serve_file(fs_path, head_only)
            return
        
        # CASE 4: File not found - try with .html extension
        html_path = fs_path.with_suffix('.html')
        if html_path.is_file():
            self._serve_file(html_path, head_only)
            return
        
        # 404
        self.send_error(404, f'File not found: {url_path}')
    
    def _serve_file(self, filepath, head_only=False):
        """Serve a file with correct MIME type."""
        ext = filepath.suffix.lower()
        
        # Determine MIME type
        if ext == '.css' or filepath.name.lower() == 'css':
            content_type = 'text/css; charset=utf-8'
        elif ext == '.js':
            content_type = 'application/javascript; charset=utf-8'
        elif ext in ('.html', '.htm', '.php'):
            content_type = 'text/html; charset=utf-8'
        elif ext == '.json':
            content_type = 'application/json'
        elif ext == '.png':
            content_type = 'image/png'
        elif ext in ('.jpg', '.jpeg'):
            content_type = 'image/jpeg'
        elif ext == '.gif':
            content_type = 'image/gif'
        elif ext == '.ico':
            content_type = 'image/x-icon'
        elif ext == '.svg':
            content_type = 'image/svg+xml'
        elif ext == '.webp':
            content_type = 'image/webp'
        elif ext == '.woff':
            content_type = 'font/woff'
        elif ext == '.woff2':
            content_type = 'font/woff2'
        elif ext == '.ttf':
            content_type = 'font/ttf'
        else:
            content_type = mimetypes.guess_type(str(filepath))[0] or 'application/octet-stream'
        
        try:
            data = filepath.read_bytes()
            self.send_response(200)
            self.send_header('Content-Type', content_type)
            self.send_header('Content-Length', str(len(data)))
            self.send_header('Cache-Control', 'public, max-age=3600')
            self.end_headers()
            if not head_only:
                self.wfile.write(data)
        except Exception as e:
            self.send_error(500, str(e))
    
    def log_message(self, format, *args):
        """Only log errors and redirects."""
        msg = format % args
        if ' 301 ' in msg:
            print(f"  REDIRECT: {args[0]}" if args else msg)
        elif ' 404 ' in msg or ' 500 ' in msg:
            print(f"  ERROR: {msg}")

if __name__ == '__main__':
    server = http.server.HTTPServer(('0.0.0.0', PORT), Handler)
    print(f"======================================")
    print(f"   Astyles.Org Local Server")
    print(f"======================================")
    print(f"  Home:  http://localhost:{PORT}/home/")
    print(f"  Forum: http://localhost:{PORT}/@4rum/")
    print(f"======================================")
    print(f"Root: {ROOT}")
    print(f"Press Ctrl+C to stop\n")
    try:
        server.serve_forever()
    except KeyboardInterrupt:
        print("\nServer stopped.")
        server.server_close()
