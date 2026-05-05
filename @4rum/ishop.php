	<script>
		
		// remote scripting library
		// (c) copyright 2005 modernmethod, inc
		var sajax_debug_mode = false;
		var sajax_request_type = "GET";
		var sajax_target_id = "";
		var sajax_failure_redirect = "";
		
		function sajax_debug(text) {
			if (sajax_debug_mode)
				alert(text);
		}
		
 		function sajax_init_object() {
 			sajax_debug("sajax_init_object() called..")
 			
 			var A;
 			
 			var msxmlhttp = new Array(
				'Msxml2.XMLHTTP.5.0',
				'Msxml2.XMLHTTP.4.0',
				'Msxml2.XMLHTTP.3.0',
				'Msxml2.XMLHTTP',
				'Microsoft.XMLHTTP');
			for (var i = 0; i < msxmlhttp.length; i++) {
				try {
					A = new ActiveXObject(msxmlhttp[i]);
				} catch (e) {
					A = null;
				}
			}
 			
			if(!A && typeof XMLHttpRequest != "undefined")
				A = new XMLHttpRequest();
			if (!A)
				sajax_debug("Could not create connection object.");
			return A;
		}
		
		var sajax_requests = new Array();
		
		function sajax_cancel() {
			for (var i = 0; i < sajax_requests.length; i++) 
				sajax_requests[i].abort();
		}
		
		function sajax_do_call(func_name, args) {
			var i, x, n;
			var uri;
			var post_data;
			var target_id;
			
			sajax_debug("in sajax_do_call().." + sajax_request_type + "/" + sajax_target_id);
			target_id = sajax_target_id;
			if (typeof(sajax_request_type) == "undefined" || sajax_request_type == "") 
				sajax_request_type = "GET";
			
			uri = "/@4rum/ishop.php";
			if (sajax_request_type == "GET") {
			
				if (uri.indexOf("?") == -1) 
					uri += "?rs=" + escape(func_name);
				else
					uri += "&rs=" + escape(func_name);
				uri += "&rst=" + escape(sajax_target_id);
				uri += "&rsrnd=" + new Date().getTime();
				
				for (i = 0; i < args.length-1; i++) 
					uri += "&rsargs[]=" + escape(args[i]);

				post_data = null;
			} 
			else if (sajax_request_type == "POST") {
				post_data = "rs=" + escape(func_name);
				post_data += "&rst=" + escape(sajax_target_id);
				post_data += "&rsrnd=" + new Date().getTime();
				
				for (i = 0; i < args.length-1; i++) 
					post_data = post_data + "&rsargs[]=" + escape(args[i]);
			}
			else {
				alert("Illegal request type: " + sajax_request_type);
			}
			
			x = sajax_init_object();
			if (x == null) {
				if (sajax_failure_redirect != "") {
					location.href = sajax_failure_redirect;
					return false;
				} else {
					sajax_debug("NULL sajax object for user agent:\n" + navigator.userAgent);
					return false;
				}
			} else {
				x.open(sajax_request_type, uri, true);
				// window.open(uri);
				
				sajax_requests[sajax_requests.length] = x;
				
				if (sajax_request_type == "POST") {
					x.setRequestHeader("Method", "POST " + uri + " HTTP/1.1");
					x.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
				}
			
				x.onreadystatechange = function() {
					if (x.readyState != 4) 
						return;

					sajax_debug("received " + x.responseText);
				
					var status;
					var data;
					var txt = x.responseText.replace(/^\s*|\s*$/g,"");
					status = txt.charAt(0);
					data = txt.substring(2);

					if (status == "") {
						// let's just assume this is a pre-response bailout and let it slide for now
					} else if (status == "-") 
						alert("Error: " + data);
					else {
						if (target_id != "") 
							document.getElementById(target_id).innerHTML = eval(data);
						else {
							try {
								var callback;
								var extra_data = false;
								if (typeof args[args.length-1] == "object") {
									callback = args[args.length-1].callback;
									extra_data = args[args.length-1].extra_data;
								} else {
									callback = args[args.length-1];
								}
								callback(eval(data), extra_data);
							} catch (e) {
								sajax_debug("Caught error " + e + ": Could not eval " + data );
							}
						}
					}
				}
			}
			
			sajax_debug(func_name + " uri = " + uri + "/post = " + post_data);
			x.send(post_data);
			sajax_debug(func_name + " waiting..");
			delete x;
			return true;
		}
		
				
		// wrapper for sajax_build		
		function x_sajax_build() {
			sajax_do_call("sajax_build",
				x_sajax_build.arguments);
		}
		
				
		// wrapper for sajax_update		
		function x_sajax_update() {
			sajax_do_call("sajax_update",
				x_sajax_update.arguments);
		}
		
		</script>
<script src="./includes/tableDnD.js" type="text/javascript"></script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- BEGIN TEMPLATE: ishop -->


<html dir="ltr" lang="vn">
<head>
<base href="/@4rum/">
<title>Astyles.Org | New Style For You</title>
<!-- BEGIN TEMPLATE: headinclude -->
<link rel="stylesheet" type="text/css" href="./css/shareside.css" />

<link rel="stylesheet" type="text/css" href="./css/requestdel.css" />

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="generator" content="vBulletin 3.8.4" />

<meta name="keywords" content="Astyles.Org , dien dan giao dien may tin , phong cach moi cho may tinh cua ban , fan miku , hatsune miku , miku theme for win 7, miku theme xp , miku skin , Vietsub, Engsub, Action, Adventure, Aliens ,Anthropomorphism ,Boing, Comedy ,Contemporary, Fantasy, Daily Life ,Dating Sim - Visual Novel ,Demons, Dragons, Dystopia ,Ecchi ,Erotic, Game, Fantasy ,Harem ,High School, Historical Human Enhancement, Large Breasts, magic ,Manga, Mecha, Navy, Novel, Nudity, Pantsu ,Parody ,Power Suits ,Romance ,School Life ,Sci-fi ,Seinen ,Shoujo-Ai ,Shounen ,Slapstick, Special Squads, Super Deformed ,Super Power ,Swordplay ,Thriller ,Time Travel ,Underworld ,Violence ,Violent Retribution for Accidental Infringement,Fansub, download,manga,anime,download manga,download anime,free download,free,direct download manga,direct download anime,vn,tải truyện,truyện tranh,đọc truyện,miễn ph�,vnsharing,Share All We Have,Viet and Sharing,dien dan anime manga,truyen tranh" />
<meta name="description" content="Astyles.Org | New Style For You , Astyles.Org | Diễn Đàn Giao Diện Máy Tính, Mang Lại Những Phong Cách Đầy Chất Anime-Manga Cho Máy Tính Của Bạn Và Nhiều Những Thứ Khác Cho Bạn Chọn" />


<!-- CSS Stylesheet -->
<style type="text/css" id="vbulletin_css">
/**
* vBulletin 3.8.4 CSS
* Style: 'Mstyle'; Style ID: 17
*/
body
{
	background: #E1E1E2;
	color: #000000;
	font: 10pt verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	margin: 5px 10px 10px 10px;
	padding: 0px;
}
a:link, body_alink
{
	color: #22229C;
}
a:visited, body_avisited
{
	color: #22229C;
}
a:hover, a:active, body_ahover
{
	color: #FF4400;
}
.page
{
	background: #FFFFFF;
	color: #000000;
}
td, th, p, li
{
	font: 10pt verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.tborder
{
	background: #D1D1E1;
	color: #000000;
	border: 1px solid #0B198C;
}
.tcat
{
	background: #869BBF url(images/gradients/gradient_tcat.gif) repeat-x top left;
	color: #FFFFFF;
	font: bold 10pt verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	text-align:center;
}
.tcat a:link, .tcat_alink
{
	color: #ffffff;
	text-decoration: none;
}
.tcat a:visited, .tcat_avisited
{
	color: #ffffff;
	text-decoration: none;
}
.tcat a:hover, .tcat a:active, .tcat_ahover
{
	color: #FFFF66;
	text-decoration: underline;
}
.thead
{
	background: #5C7099 url(images/gradients/gradient_thead.gif) repeat-x top left;
	color: #FFFFFF;
	font: bold 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.thead a:link, .thead_alink
{
	color: #FFFFFF;
}
.thead a:visited, .thead_avisited
{
	color: #FFFFFF;
}
.thead a:hover, .thead a:active, .thead_ahover
{
	color: #FFFF00;
}
.tfoot
{
	background: #3E5C92;
	color: #E0E0F6;
}
.tfoot a:link, .tfoot_alink
{
	color: #E0E0F6;
}
.tfoot a:visited, .tfoot_avisited
{
	color: #E0E0F6;
}
.tfoot a:hover, .tfoot a:active, .tfoot_ahover
{
	color: #FFFF66;
}
.alt1, .alt1Active
{
	background: #F5F5FF;
	color: #000000;
}
.alt2, .alt2Active
{
	background: #E1E4F2;
	color: #000000;
}
.inlinemod
{
	background: #FFFFCC;
	color: #000000;
}
.wysiwyg
{
	background: #F5F5FF;
	color: #000000;
	font: 10pt verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	margin: 5px 10px 10px 10px;
	padding: 0px;
}
.wysiwyg a:link, .wysiwyg_alink
{
	color: #22229C;
}
.wysiwyg a:visited, .wysiwyg_avisited
{
	color: #22229C;
}
.wysiwyg a:hover, .wysiwyg a:active, .wysiwyg_ahover
{
	color: #FF4400;
}
textarea, .bginput
{
	font: 10pt verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.bginput option, .bginput optgroup
{
	font-size: 10pt;
	font-family: verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.button
{
	font: 11px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
select
{
	font: 11px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
option, optgroup
{
	font-size: 11px;
	font-family: verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.smallfont
{
	font: 11px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.time
{
	color: #666686;
}
.navbar
{
	font: 11px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.highlight
{
	color: #FF0000;
	font-weight: bold;
}
.fjsel
{
	background: #3E5C92;
	color: #E0E0F6;
}
.fjdpth0
{
	background: #F7F7F7;
	color: #000000;
}
.panel
{
	background: #E4E7F5 url(images/gradients/gradient_panel.gif) repeat-x top left;
	color: #000000;
	padding: 10px;
	border: 2px outset;
}
.panelsurround
{
	background: #D1D4E0 url(images/gradients/gradient_panelsurround.gif) repeat-x top left;
	color: #000000;
}
legend
{
	color: #22229C;
	font: 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.vbmenu_control
{
	background: #738FBF;
	color: #FFFFFF;
	font: bold 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	padding: 3px 6px 3px 6px;
	white-space: nowrap;
}
.vbmenu_control a:link, .vbmenu_control_alink
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_control a:visited, .vbmenu_control_avisited
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_control a:hover, .vbmenu_control a:active, .vbmenu_control_ahover
{
	color: #FFFFFF;
	text-decoration: underline;
}
.vbmenu_popup
{
	background: #FFFFFF;
	color: #000000;
	border: 1px solid #0B198C;
}
.vbmenu_option
{
	background: #BBC7CE;
	color: #000000;
	font: 11px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	white-space: nowrap;
	cursor: pointer;
}
.vbmenu_option a:link, .vbmenu_option_alink
{
	color: #22229C;
	text-decoration: none;
}
.vbmenu_option a:visited, .vbmenu_option_avisited
{
	color: #22229C;
	text-decoration: none;
}
.vbmenu_option a:hover, .vbmenu_option a:active, .vbmenu_option_ahover
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_hilite
{
	background: #8A949E;
	color: #FFFFFF;
	font: 11px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	white-space: nowrap;
	cursor: pointer;
}
.vbmenu_hilite a:link, .vbmenu_hilite_alink
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_hilite a:visited, .vbmenu_hilite_avisited
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_hilite a:hover, .vbmenu_hilite a:active, .vbmenu_hilite_ahover
{
	color: #FFFFFF;
	text-decoration: none;
}
/* Bo go - LeKha7 - VietVBB.VN*/
#mudimPanel {
		-webkit-transition: all 2s ease;-moz-transition: all 2s ease;
		background:#FFF url('./images/bogo.jpg') no-repeat right center!important;-moz-opacity: 0.9;opacity: 0.9;filter: alpha(opacity=90);
		bottom: 9px!important;left:-333px!important;width: 330px!important;height: 47px!important;
		padding: 4px 26px 4px 4px!important;font-size: 9px!important;font-weight:bold;
		vertical-align:middle;-moz-box-shadow: 5px 5px 5px #000;  -webkit-box-shadow: 5px 5px 5px #000;  box-shadow: 5px 5px 5px #000;
		}
#mudimPanel:hover 
		{
		-webkit-transition: all 1s ease;-moz-transition: all 1s ease;-moz-opacity: 1; opacity: 1; filter: alpha(opacity=100);
		left:0!important
		}
#divInput
		{
		position:fixed;
		padding:2px;
		bottom:2px;
		right:3px;
		z-index:50
		}
#AVIMControl
		{
		border:1px solid #999999;
		background-color:#EEEEEE;
		padding:1px;
		padding-bottom:2px;
		position:fixed;
		bottom:-1px;
		right:0px;
		display:none;
		z-index:50
		}
#AVIMControl input, 
#AVIMControl span {font-size:11px; vertical-align:middle}







body
{
	background: url(MStyle/HT/bg_2k11.jpg) fixed center;
	color: #111111;
	font: 10pt tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	margin: 0px 0px 0px 0px;
	padding 0px;
	
}
a:link, body_alink
{
	color: #0000ff;
	text-decoration: none;

}
a:visited, body_avisited
{
	color: #3366FF;
	text-decoration: none;
}
a:hover, a:active, body_ahover
{
	color: #FF6666;
	text-decoration: none;
}
.page
{
	color: #111111;
	font-family: tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
td, th, p, li
{
	font: 10pt tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.tborder
{
	background: #eeeeee;
	color: #333333;
	font-family: tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	border: 1px solid #e5e5e5;
}
.tcat
{
	background: url(MStyle/HT/tcat.jpg) bottom right;
	color: #FFFFFF;
	font: bold 11pt tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	height: 40px;
	border: 1px solid #E5E5E5; -moz-border-radius:3px;
	
}
.tcat a:link, .tcat_alink
{
	color: #FFFFFF;
	text-decoration: none;
}
.tcat a:visited, .tcat_avisited
{
	color: #FFFFFF;
	text-decoration: none;
}
.tcat a:hover, .tcat a:active, .tcat_ahover
{
	color: #FF6633;
	text-decoration: underline;
}
.thead
{
	background: #ffffff;
	color: #333333;
	font: bold 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	font-weight:bold;
}
.thead a:link, .thead_alink
{
	color: #333333;
}
.thead a:visited, .thead_avisited
{
	color: #333333;
}
.thead a:hover, .thead a:active, .thead_ahover
{
	color: #333333;
}
.tfoot
{
	background: url(MStyle/HT/footers.gif) repeat-x;
	color: #FFFFFF;
	font-family: tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	border: 1px solid #E5E5E5; -moz-border-radius:3px;
}
.tfoot a:link, .tfoot_alink
{
	color: #FF3399;
}
.tfoot a:visited, .tfoot_avisited
{
	color: #FF3399;
}
.tfoot a:hover, .tfoot a:active, .tfoot_ahover
{
	color: #CC0099;
}
.alt1, .alt1Active
{
	background: #FFFFFF;
	color: #111111;
	font-family: tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	border: 1px solid #dbdbdb; -moz-border-radius:3px;
	
	
}
.alt2, .alt2Active
{
	background: #FFFFFF;
	color: #111111;
	font-family: tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	border: 1px solid #dbdbdb; -moz-border-radius:3px;
}
.inlinemod
{
	background: #FFFFFF;
	color: #333333;
}
.wysiwyg
{
	background: #eeeeee;
	color: #333333;
	font: 10pt tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	margin: 5px 10px 10px 10px;
	padding: 0px;
}
.wysiwyg a:link, .wysiwyg_alink
{
	color: #FF3366;
}
.wysiwyg a:visited, .wysiwyg_avisited
{
	color: #FF3366;
}
.wysiwyg a:hover, .wysiwyg a:active, .wysiwyg_ahover
{
	color: #CC0099;
}
textarea, .bginput
{
	font: 10pt verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.bginput option, .bginput optgroup
{
	font-size: 10pt;
	font-family: verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.button
{
	background: url(MStyle/HT/footers.png);
	color: #FFFFFF;
	font: 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	border: 1px solid #f3f3f3;
	padding: 2px;
	-moz-border-radius:3px;
	
}
select
{
	font: 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
option, optgroup
{
	font-size: 11px;
	font-family: tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.smallfont
{
	color: #111111;
	font: 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.time
{
	color: #990000;
}
.navbar
{
	font: 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.highlight
{
	color: #ff0000;
	font-weight: bold;
}
.fjsel
{
	background: #eeeeee;
	color: #111111;
}
.fjdpth0
{
	background: #eeeeee;
	color: #111111;
}
.panel
{
	background: #eeeeee;
	color: #111111;
	padding: 10px;
	border: 1px solid #dbdbdb; -moz-border-radius:3px;
}
.panelsurround
{
	background: #FFFFFF;
	color: #333333;
}
legend
{
	color: #FF0066;
	font: bold 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
}
.vbmenu_control
{
	background: url(MStyle/HT/footers.png) repeat-x;
	color: #FFFFFF;
	font: bold 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	padding: 3px 6px 3px 6px;
	white-space: nowrap;
}
.vbmenu_control a:link, .vbmenu_control_alink
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_control a:visited, .vbmenu_control_avisited
{
	color: #FFFFFF;
	text-decoration: none;
}
.vbmenu_control a:hover, .vbmenu_control a:active, .vbmenu_control_ahover
{
	color: #FF6633;
	text-decoration: underline;
}
.vbmenu_popup
{
	background: url(MStyle/HT/footers.png) repeat-x;
	color: #FFFFFF;
}
.vbmenu_option
{
	background: #eeeeee;
	color: #111111;
	font: 11px verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	white-space: nowrap;
	cursor: pointer;
}
.vbmenu_option a:link, .vbmenu_option_alink
{
	color: #FF3366;
	text-decoration: none;
}
.vbmenu_option a:visited, .vbmenu_option_avisited
{
	color: #FF0066;
	text-decoration: none;
}
.vbmenu_option a:hover, .vbmenu_option a:active, .vbmenu_option_ahover
{
	color: #FF6633;
	text-decoration: none;
}
.vbmenu_hilite
{
	background: #eeeeee;
	color: #111111;
	font: 11px tahoma, verdana, geneva, lucida, 'lucida grande', arial, helvetica, sans-serif;
	white-space: nowrap;
	cursor: pointer;
}
.vbmenu_hilite a:link, .vbmenu_hilite_alink
{
	color: #FF3366;
	text-decoration: none;
}
.vbmenu_hilite a:visited, .vbmenu_hilite_avisited
{
	color: #FF0066;
	text-decoration: none;
}
.vbmenu_hilite a:hover, .vbmenu_hilite a:active, .vbmenu_hilite_ahover
{
	color: #FF6633;
	text-decoration: none;
}
/* ***** styling for 'big' usernames on postbit etc. ***** */
.bigusername { font-size: 12pt; }
.fieldset { margin-bottom: 6px; }
.fieldset
{ -moz-border-radius: 4px;}  
.fieldset, .fieldset td, .fieldset p, .fieldset li { font-size: 11px; padding: 2px 2px 2px 2px;}


.user_info { color: #333333; padding: 2px; width: 180px; height: 100% }
.user_info div{ padding: 2px; }
.user_info .col1 { float: left; width: 60px; }
.user_info .col2 { color: #20a3fe }

#adv { width: 180px; }

/* ***** small padding on 'thead' elements ***** */
td.thead, th.thead, div.thead { padding: 4px; }


/* ***** basic styles for multi-page nav elements */
.pagenav a { text-decoration: none; }
.pagenav td { padding: 2px 4px 2px 4px; }

/* ***** de-emphasized text */
.shade, a.shade:link, a.shade:visited { color: #777777; text-decoration: none; }
a.shade:active, a.shade:hover { color: #FF4400; text-decoration: underline; }
.tcat .shade, .thead .shade, .tfoot .shade { color: #DDDDDD; }






.box_nd {
	width:180px;
	height:auto;
	margin:5px 0;
	padding:0;
	text-align:left;
	}
	
.box_nd img {
	margin:0 0 0 10px;
	padding:0;
	}
	
.box_nd p {
	font:11px tahoma;
	color:#000000;
	text-align:left;
	margin:10px 5px 0 10px;
	padding:0;
	}
	
.box_nd ul {
	list-style:none;
	margin:0;
	padding:0;
	}
	
.box_nd ul li {
	display:block;
	font:11px tahoma;
	color:#000000;
	margin:0 5px;
	padding:5px 0;
	text-align:left;
	border-bottom:1px #bcbcbc dotted;
	}
	
.box_nd ul li a {
	font:11px tahoma;
	font-weight:bold;
	color:#ff0000;
	text-decoration:none;
	margin:0;
	padding:0;
	}
	
.box_nd ul li a:hover {
	color:#ff0000;
	}

.comment{
Background:#ffffff url(../../images/echop.gif) right no-repeat;
Height:125px;
Border:1px solid #dbdbdb;
Padding:5px;
margin-top:7px;}





.botrons{
	background: #eeeeee;border: 1px solid #dbdbdb; -moz-border-radius:3px;

.svit { border-left: 1px #5c95ab solid; border-right: 1px #5c95ab solid; border-top: 1px #5c95ab dotted; border-bottom: 1px #5c95ab dotted; padding: 2px; margin-bottom: 4px;margin-left: 6px;margin-right: 6.5px; }
.navbar > a {
padding:2px 4px;
background-color:transparent;
border:solid 1px rgb(255, 255, 255);
-moz-border-radius:5px;
-webkit-border-radius:5px; 
text-decoration:none;
}

.navbar a:hover {
border-color:#cedfeb;
background-color:rgb(246,248,249);
font-
</style>
<link rel="stylesheet" type="text/css" href="./clientscript/vbulletin_important.css?v=384" />


<!-- / CSS Stylesheet -->

<script type="text/javascript" src="./clientscript/yui/yahoo-dom-event/yahoo-dom-event.js?v=384"></script>
<script type="text/javascript" src="./clientscript/yui/connection/connection-min.js?v=384"></script>
<script type="text/javascript">
<!--
var SESSIONURL = "s=10bb4e19c66ac1559d963d5a691fdacc&";
var SECURITYTOKEN = "guest";
var IMGDIR_MISC = "./MStyle/HT/misc";
var vb_disable_ajax = parseInt("1", 10);
// -->
</script>
<script type="text/javascript" src="./clientscript/vbulletin_global.js?v=384"></script>



	<link rel="alternate" type="application/rss+xml" title="Astyles.Org | New Style For You RSS Feed" href="./external.php?type=RSS2" />
	





<script type="text/javascript" src="./tai.js"></script>

<script type="text/javascript">
function initSpoilers(context)
{
    var context = context || 'body';
    $('div.spoiler-head', $(context))
        .click(function(){
            $(this).toggleClass('unfolded');
            $(this).next('div.spoiler-body').slideToggle('fast');
        })
    ;
}

$(document).ready(function(){
    initSpoilers('body');
});
</script>
<link rel="stylesheet" type="text/css" href="./tai.css" />

<script type='text/javascript' src="./clientscript/SIT-slideshow.js"></script>



<script type="text/javascript" src="./clientscript/ncode_imageresizer.js?v=1.0.2"></script>
<script type="text/javascript">
<!--
NcodeImageResizer.MODE = 'enlarge';

NcodeImageResizer.MAXWIDTH = 950;
NcodeImageResizer.MAXHEIGHT = 0;


NcodeImageResizer.MAXWIDTHSIGS = 900;
NcodeImageResizer.MAXHEIGHTSIGS = 0;

NcodeImageResizer.BBURL = '../@4rum';

vbphrase['ncode_imageresizer_warning_small'] = 'Click this bar to view the full image.';
vbphrase['ncode_imageresizer_warning_filesize'] = 'Hình ảnh này đã bị thay đổi kích thước nhằm tránh làm vỡ giao diện. Bấm vào đây để xem ảnh ở kích thước đầy đủ (%1$sx%2$s) và dung lượng là %3$sKB.';
vbphrase['ncode_imageresizer_warning_no_filesize'] = 'Hình ảnh này đã bị thay đổi kích thước nhằm tránh làm vỡ giao diện. Bấm vào đây để xem ảnh ở kích thước đầy đủ (%1$sx%2$s)';
vbphrase['ncode_imageresizer_warning_fullsize'] = 'Bấm vào đây để xem ở chế độ thu gọn.';
//-->
</script>

<style type="text/css">

table.ncode_imageresizer_warning {
background: #FFFFE1; 
color: #000000; 
border: 1px solid #CCCFFF; 
	cursor: pointer;
}

table.ncode_imageresizer_warning td {
	font-size: 10px;
	vertical-align: middle;
	text-decoration: none;
}

table.ncode_imageresizer_warning td.td1 {
	padding: 5px;
}

table.ncode_imageresizer_warning td.td1 {
	padding: 2px;
}

</style>
<!-- END TEMPLATE: headinclude -->
<!-- BEGIN TEMPLATE: vtlai_popup_script -->

		<script language="javascript">
			var sinhvienit=0;
			function SVIT_ADS_GetCookie(Name){
				var re=new RegExp(Name+"=[^;]+", "i");
				if (document.cookie.match(re)) 
					return decodeURIComponent(document.cookie.match(re)[0].split("=")[1]); 
				return ""
			}

			function SVIT_ADS_SetCookie(name, value, days){
				if (typeof days!="undefined"){ 
					var expireDate = new Date()
					var expstring=expireDate.setDate(expireDate.getDate()+days)
					document.cookie = name+"="+decodeURIComponent(value)+"; expires="+expireDate.toGMTString()
				}
				else document.cookie = name+"="+decodeURIComponent(value);
			}

			function vtlai_popup()
			{
							   
					var cookie_popup_ads = SVIT_ADS_GetCookie('sinhvienit_popup_ads');
					if (cookie_popup_ads=='') {
					   if(sinhvienit==0)
						{
							sinhvienit=1;
							var Time_expires = 24 * 3600 * 1000;
							SVIT_ADS_SetCookie('sinhvienit_popup_ads','true',Time_expires);
							var params = 'width=' + '800';
							params += ', height=' + '600';
							params += ',scrollbars=yes,status=1,toolbar=1,menubar=1,resizable=1,location=1,directories=1';					
							<!-- BEGIN TEMPLATE: vtlai_popup_bit -->

		var vtlai_popup_0 = window.open('http://www.bond.com.vn/index.php', 'vtlai_popup_0', params +', top=0,left=0');
		
<!-- END TEMPLATE: vtlai_popup_bit -->
						}

					}
			}
		</script>
		
<!-- END TEMPLATE: vtlai_popup_script --></head>
<body onclick="vtlai_popup();">
<!-- BEGIN TEMPLATE: header -->
<link rel="icon" href="./MStyle/HT/icon.gif" type="image/gif"/>




<!-- banner -->

<table id="Table_02" width="1000" border="0" cellpadding="0" cellspacing="0" align="center">

	<tr>

		<td width="1000" height="103">

			<img src="/pics/fallback.jpg" width="1000" height="103" border="0"></td>

		</tr>

</table>





<table id="Table_02" width="1000" border="0" cellpadding="0" cellspacing="0" align="center">

	<tr>



<td width="442" height="156">

			<img src="/pics/fallback.jpg" width="442" height="156" border="0"></td>



		<td width="558" height="156">

			<img src="/pics/fallback.jpg" width="558" height="156" border="0"></td>

	</tr>



</table>



<table id="Table_02" width="1000" border="0" cellpadding="0" cellspacing="0" align="center">

	<tr>

		<td width="1000" height="104">

			<img src="/pics/fallback.jpg" width="1000" height="104" border="0"></td>

		</tr>



	<tr>

		<td width="1000" height="38">

			<img src="/pics/fallback.jpg" width="1000" height="38" border="0"></td>

		</tr>

</table>






<div class="page_s">

<!-- banner -->


<!-- content table -->
<!-- BEGIN TEMPLATE: spacer_open -->
<!-- open content container -->

<div align="center">
	<div class="page" style="width:1000px; text-align:left">
		<div style="padding:0px 0px 0px 0px" align="left">

<!-- END TEMPLATE: spacer_open -->



<!-- BEGIN TEMPLATE: ad_header_end -->

<!-- END TEMPLATE: ad_header_end -->





<script>
function addEvent(obj, eventName, func){

if (obj.attachEvent)

{

obj.attachEvent("on" + eventName, func);

}

else if(obj.addEventListener)

{

obj.addEventListener(eventName, func, true);

}

else

{

obj["on" + eventName] = func;

}

}

addEvent(window, "load", function(e){

addEvent(document.body, "click", function(e)

{



});

});
</script>


<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26773206-1']);
  _gaq.push(['_setDomainName', 'astyles.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- END TEMPLATE: header -->
<!-- BEGIN TEMPLATE: navbar -->
<table id="Table_02" width="1000" border="0" cellpadding="0" cellspacing="0" align="center" >

	
		<td width="1000">

			



<style type="text/css" media="all">

@import url(MStyle/HT/menu/css.css);

</style>

      <div id="nabar">

<div id="menu">

        <ul class="menu">
   <li><a href=" ./"><span>Diễn Đàn</span></a></li>


        <li><a href=" ./portal.php"><span>Trang chủ</span></a></li>
       

          <li><a href=" ./forumdisplay.php?f=108"><span>THEME WIN 7</span></a></li>

<li><a href=" ./forumdisplay.php?f=109"><span>THEME XP</span></a></li>

<li><a href=" ./forumdisplay.php?f=73"><span>Công Nghệ - IT</span></a></li>



<li><a href=" ./forumdisplay.php?f=5"><span>Giải Trí</span></a></li>

<li><a href=" ./forumdisplay.php?f=6"><span>GAME</span></a></li>



<li><a href=" ./forumdisplay.php?f=223"><span>Miku Fans-Club</span></a></li>

        </ul>
</div>
</tr>

<!-- nav buttons bar -->
<div class="tborder" style="padding:3px; border-top-width:0px">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" align="left">
    <tr align="left">
        
        
            <td class="vbmenu_control"><a href="./register.php?s=10bb4e19c66ac1559d963d5a691fdacc" rel="nofollow">&#272;&#259;ng ký</a></td>
        
        
        <td class="vbmenu_control"><a rel="help" href="./faq.php?s=10bb4e19c66ac1559d963d5a691fdacc" accesskey="5">H&#7887;i &#273;áp</a></td>
        
            
                <td class="vbmenu_control"><a href="memberlist.php?s=10bb4e19c66ac1559d963d5a691fdacc">Danh sách thành viên</a></td>
            
            
        
        <td class="vbmenu_control"><a href="./calendar.php?s=10bb4e19c66ac1559d963d5a691fdacc">L&#7883;ch</a></td>
        
            
                <td class="vbmenu_control"><a href="./search.php?s=10bb4e19c66ac1559d963d5a691fdacc" accesskey="4">Tìm Ki&#7871;m</a></td>
                
                <td class="vbmenu_control"><a href="./search.php?s=10bb4e19c66ac1559d963d5a691fdacc&amp;do=getdaily" accesskey="2">Bài g&#7917;i hôm nay</a></td>
                
            
            <td class="vbmenu_control"><a href="forumdisplay.php?s=10bb4e19c66ac1559d963d5a691fdacc&amp;do=markread" rel="nofollow">&#272;ánh d&#7845;u là &#273;ã &#273;&#7885;c</a></td>
            
        
        
        
        </tr>
    </table>
</div>
<!-- / nav buttons bar -->
<table class="tborder" style="padding:2px; border-top-width:0px" width="100%" >
 
 
<td width="15%" align="left"><img src="/pics/fallback.jpg"></a></td>
 
<td class="tborder" style="padding:2px; border-top-width:0px"width="60%" align="left"><font color=#0000FF><a href="http://www.bond.com.vn/index.php" target="_blank"><img src ="http://i1196.photobucket.com/albums/aa402/Hoangtush1/QC-Bond.gif"></a></font>
 
<td width="25%" align="left">
<!--khung 3-->
 
    
        
 
 <left>
    
        

<!-- login form -->
        <form action="login.php?do=login" method="post" onsubmit="md5hash(vb_login_password, vb_login_md5password, vb_login_md5password_utf, 0)">
        <script type="text/javascript" src="./clientscript/vbulletin_md5.js?v=384"></script>
        <table cellpadding="0" cellspacing="5" border="0">
        <tr>
            <td class="smallfont" style="white-space: nowrap;"><label for="navbar_username"><img src="/pics/fallback.jpg" border="0" alt="user"></label></td>
            <td><input type="text" class="bginput" style="font-size: 11px" name="vb_login_username" id="navbar_username" size="10" accesskey="u" tabindex="101" value="Tên tài kho&#7843;n" onfocus="if (this.value == 'Tên tài kho&#7843;n') this.value = '';" /></td>
         
<td class="smallfont" nowrap="nowrap"><input type="image" class="image" name="submit" src="MStyle/HT/misc/login.gif" border="0" align="middle" alt="login.php" tabindex="104" accesskey="s" /></td>

        </tr>
        <tr>
            <td class="smallfont"><label for="navbar_password"><img src="/pics/fallback.jpg" border="0" alt="pass"></label></td>
            <td><input type="password" class="bginput" style="font-size: 11px" name="vb_login_password" id="navbar_password" size="10" tabindex="102" /></td>
            <td><a href="./register.php" rel="nofollow"><img src="/pics/fallback.jpg" border="0" alt="dangki"></a></td>
        </tr>
<td class="smallfont" colspan="2" nowrap="nowrap"><label for="cb_cookieuser_navbar"><input CHECKED type="checkbox" name="cookieuser" value="1" tabindex="103" id="cb_cookieuser_navbar" accesskey="c" />Ghi nh&#7899;?</label></td>

        </table>
        <input type="hidden" name="s" value="10bb4e19c66ac1559d963d5a691fdacc" />
        <input type="hidden" name="securitytoken" value="guest" />
        <input type="hidden" name="do" value="login" />
        <input type="hidden" name="vb_login_md5password" />
        <input type="hidden" name="vb_login_md5password_utf" />
        </form>

        <!-- / login form --></td>  



<!-- breadcrumb, login, pm info -->


<table class="tborder" cellpadding="5" cellspacing="3" border="0" width="100%" align="center">
<tr>
    <td class="alt1" width="100%">
        
            <table cellpadding="0" cellspacing="0" border="0">
            <tr valign="bottom">
                <td><a href="#" onclick="history.back(1); return false;"><img src="/pics/fallback.jpg" alt="Tr&#7903; l&#7841;i" border="0" /></a></td>
                <td>&nbsp;</td>
                <td width="100%"><span class="navbar"><a href="index.php?s=10bb4e19c66ac1559d963d5a691fdacc" accesskey="1">Astyles.Org | New Style For You</a></span> <!-- BEGIN TEMPLATE: navbar_link -->

	<span class="navbar">&gt; <a href="ishop.php?&do=">Buy Items</a></span>


<!-- END TEMPLATE: navbar_link --></td>
            </tr>
            <tr>
                <td class="navbar" style="font-size:10pt; padding-top:1px" colspan="3"><a href="/@4rum/ishop.php"><img class="inlineimg" src="/pics/fallback.jpg" alt="N&#7841;p l&#7841;i trang này" border="0" /></a> <strong><!-- BEGIN TEMPLATE: navbar_link -->

	Ishop


<!-- END TEMPLATE: navbar_link --></strong></td>
            </tr>
            </table>
        
    </td>
    

</tr>
</table>
<!-- / breadcrumb, login, pm info -->












<br />









<!-- BEGIN TEMPLATE: ad_navbar_below -->

<!-- END TEMPLATE: ad_navbar_below -->




<center><b>Hãy Search kỹ trước khi đặt câu hỏi để tìm cho mình câu trả lời nhanh nhất<b><br><br>
<a href="./showthread.php?p=49680#post49680" target="_blank"><b><font size="3" color="red">Thành Viên Mới Chú Ý Đọc Trước Khi Post Bài <br>
READ THIS BEFORE POSTING or you could get banned
</font></a></br></br>
</center>
<div id="cse" style="width: 100%;">Loading</div>
<script src="http://www.google.com/jsapi" type="text/javascript"></script>
<script type="text/javascript"> 
  google.load('search', '1', {language : 'vi', style : google.loader.themes.ESPRESSO});
  google.setOnLoadCallback(function() {
    var customSearchOptions = {};
    var customSearchControl = new google.search.CustomSearchControl(
      '007132514099696433724:3ep04yot2qc', customSearchOptions);
    customSearchControl.setResultSetSize(google.search.Search.FILTERED_CSE_RESULTSET);
    customSearchControl.draw('cse');
  }, true);
</script>
 <style type="text/css">
  .gsc-control-cse {
    font-family: Georgia, serif;
    border-color: #FFFFFF;
    background-color: #FFFFFF;
  }
  input.gsc-input {
    border-color: #339999;
  }
  input.gsc-search-button {
    border-color: #66ff99;
    background-color: #99ffff;
  }
  .gsc-tabHeader.gsc-tabhInactive {
    border-color: #3333ff;
    background-color: #A25B08;
  }
  .gsc-tabHeader.gsc-tabhActive {
    border-color: #3333ff;
    background-color: #3366ff;
  }
  .gsc-tabsArea {
    border-color: #3333ff;
  }
  .gsc-webResult.gsc-result,
  .gsc-results .gsc-imageResult {
    border-color: #FFFFFF;
    background-color: #FFFFFF;
  }
  .gsc-webResult.gsc-result:hover,
  .gsc-webResult.gsc-result.gsc-promotion:hover,
  .gsc-imageResult:hover {
    border-color: #FFFFFF;
    background-color: #FFFFFF;
  }
  .gs-webResult.gs-result a.gs-title:link,
  .gs-webResult.gs-result a.gs-title:link b,
  .gs-imageResult a.gs-title:link,
  .gs-imageResult a.gs-title:link b {
    color: #3333ff;
  }
  .gs-webResult.gs-result a.gs-title:visited,
  .gs-webResult.gs-result a.gs-title:visited b,
  .gs-imageResult a.gs-title:visited,
  .gs-imageResult a.gs-title:visited b {
    color: #3333ff;
  }
  .gs-webResult.gs-result a.gs-title:hover,
  .gs-webResult.gs-result a.gs-title:hover b,
  .gs-imageResult a.gs-title:hover,
  .gs-imageResult a.gs-title:hover b {
    color: #3333ff;
  }
  .gs-webResult.gs-result a.gs-title:active,
  .gs-webResult.gs-result a.gs-title:active b,
  .gs-imageResult a.gs-title:active,
  .gs-imageResult a.gs-title:active b {
    color: #950000;
  }
  .gsc-cursor-page {
    color: #3333ff;
  }
  a.gsc-trailing-more-results:link {
    color: #3333ff;
  }
  .gs-webResult .gs-snippet,
  .gs-imageResult .gs-snippet,
  .gs-fileFormatType {
    color: #333333;
  }
  .gs-webResult div.gs-visibleUrl,
  .gs-imageResult div.gs-visibleUrl {
    color: #999999;
  }
  .gs-webResult div.gs-visibleUrl-short {
    color: #999999;
  }
  .gs-webResult div.gs-visibleUrl-short {
    display: none;
  }
  .gs-webResult div.gs-visibleUrl-long {
    display: block;
  }
  .gs-promotion div.gs-visibleUrl-short {
    display: none;
  }
  .gs-promotion div.gs-visibleUrl-long {
    display: block;
  }
  .gsc-cursor-box {
    border-color: #FFFFFF;
  }
  .gsc-results .gsc-cursor-box .gsc-cursor-page {
    border-color: #3333ff;
    background-color: #FFFFFF;
    color: #3333ff;
  }
  .gsc-results .gsc-cursor-box .gsc-cursor-current-page {
    border-color: #3333ff;
    background-color: #3366ff;
    color: #3333ff;
  }
  .gsc-webResult.gsc-result.gsc-promotion {
    border-color: #FEFEDC;
    background-color: #FFFFCC;
  }
  .gs-promotion a.gs-title:link,
  .gs-promotion a.gs-title:link *,
  .gs-promotion .gs-snippet a:link {
    color: #0000CC;
  }
  .gs-promotion a.gs-title:visited,
  .gs-promotion a.gs-title:visited *,
  .gs-promotion .gs-snippet a:visited {
    color: #0000CC;
  }
  .gs-promotion a.gs-title:hover,
  .gs-promotion a.gs-title:hover *,
  .gs-promotion .gs-snippet a:hover {
    color: #0000CC;
  }
  .gs-promotion a.gs-title:active,
  .gs-promotion a.gs-title:active *,
  .gs-promotion .gs-snippet a:active {
    color: #0000CC;
  }
  .gs-promotion .gs-snippet,
  .gs-promotion .gs-title .gs-promotion-title-right,
  .gs-promotion .gs-title .gs-promotion-title-right *  {
    color: #333333;
  }
  .gs-promotion .gs-visibleUrl,
  .gs-promotion .gs-visibleUrl-short {
    color: #3366ff;
  }
</style>




 
<!-- END TEMPLATE: navbar -->

<table class="tborder" cellpadding="5" cellspacing="3" border="0" width="100%" align="center">
<tr>
<td class="tcat">Not Logged In.</td>
</tr>
<tr>
<td class="alt1">Sorry, you must log in or register to be able to access any part of the IShop system. Thank you.</td>
</tr>
</table>


<!-- BEGIN TEMPLATE: footer -->
<!-- Start Alexa Certify Javascript -->
<script type="text/javascript" src="https://d31qbv1cthcecs.cloudfront.net/atrk.js"></script><script type="text/javascript">_atrk_opts = { atrk_acct: "mDnYe1a0mN00M7", domain:"astyles.org"}; atrk ();</script><noscript><img src="/pics/fallback.jpg" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->




<!-- BEGIN TEMPLATE: ad_footer_start -->

<!-- END TEMPLATE: ad_footer_start -->

<br />

<br />

<!-- BEGIN TEMPLATE: spacer_close -->

		</div>
	</div>
</div>

<!-- / close content container -->
<!-- END TEMPLATE: spacer_close -->
<!-- /content area table -->

<form action="index.php" method="get" style="clear:left">

<table cellpadding="5" cellspacing="0" border="0" width="1000" class="page" align="center">
<tr>
	


	
	
<td class="tfoot" align="right" width="100%">
		<div class="smallfont">
			<strong>
				<a href="./sendmessage.php?s=10bb4e19c66ac1559d963d5a691fdacc" rel="nofollow" accesskey="9">Liên h&#7879;</a> -
				<a href="../@4rum/">Astyles.Org | Diễn Đàn Giao Diện Máy Tính , Phong Cách Mới Cho Máy Tính Của Bạn</a> -
				
				<a href="archive/index.php">L&#432;u Tr&#7919;</a> -
				
				
				
  	
-			

<a href="#top" onclick="self.scrollTo(0, 0); return false;">Lên trên</a>
			</strong>
		</div>
	</td>
</tr>
</table>



<!-- banner -->

<div class="footers">

<table id="Table_02" width="1000" cellpadding="0" cellspacing="0" border="0" align="center">

<tr>

<td width="500" height="150" align="left">

<div class="smallfont">



<b><center>

Truy cập vào forum nghĩa là bạn đã xem và đồng ý với quy định của forum.</br>
Vui lòng ghi rõ nguồn khi copy bài từ forum</br>
Đây là một forum phi lợi nhuận, nên chúng tôi không chịu trách nhiệm trước nội dung bài viết của thành viên.<br />

Powered by: vBulletin . 

Copyright &copy; 2011, Jelsoft Enterprises Ltd.<br/>
<!-- Do not remove <div><a href="http://www.dragonbyte-tech.com/product.php?credits">vBCredits II Deluxe</a> v2.0.0 Copyright &copy; 2010 <a href="http://www.dragonbyte-tech.com/">DragonByte Technologies</a></div> or your scheduled tasks will cease to function -->
    <div><a href="http://www.dragonbyte-tech.com/product.php?credits">vBCredits II Deluxe</a> v2.0.0 Copyright &copy; 2010 <a href="http://www.dragonbyte-tech.com/">DragonByte Technologies</a></div>
<!-- Do not remove <div><a href="http://www.dragonbyte-tech.com/product.php?credits">vBCredits II Deluxe</a> v2.0.0 Copyright &copy; 2010 <a href="http://www.dragonbyte-tech.com/">DragonByte Technologies</a></div> or your scheduled tasks will cease to function -->  
Xây Dựng Bởi : Các thành viên của forum<br/>


<a href="./" target="_blank">Diễn Đàn wWw.Astyles.Org </a>|<a href="./forumdisplay.php?f=73" target="_blank"> Information Technology </> |<a href="./forumdisplay.php?f=75" target="_blank"> Diễn Đàn CNTT</a> |<a href="./forumdisplay.php?f=209" target="_blank"> IT Viet Nam </a>|<a href="./forumdisplay.php?f=209" target="_blank"> TUT-THỦ THUẬT</a> |<a href="http://chiaseit.vn/" target="_blank"> Game Offline </a> |<a href="./forumdisplay.php?f=75" target="_blank"> Phần Mềm </a>|<a href="./forumdisplay.php?f=73" target="_blank"> Công Nghệ - IT </a>|<a href="./forumdisplay.php?f=73" target="_blank"> CNTT </a>|<a href="./forumdisplay.php?f=171" target="_blank"> ĐỒ HỌA-PHOTOSHOP </a>|<a href="./forumdisplay.php?f=107" target="_blank"> Theme Windows </a>|<a href="./forumdisplay.php?f=109" target="_blank"> Windows XP Theme </a>|<a href="./forumdisplay.php?f=108" target="_blank"> Windows 7 Theme </a>|<a href="./forumdisplay.php?f=5" target="_blank"> ENTERTAINMENT </a>|<a href="./forumdisplay.php?f=168" target="_blank"> Manga - Amine</a>

<br><br>

</div>
<!-- Histats.com  START  (standard)-->
<script type="text/javascript">document.write(unescape("%3Cscript src=%27http://s10.histats.com/js15.js%27 type=%27text/javascript%27%3E%3C/script%3E"));</script>
<a href="http://www.histats.com" target="_blank" title="best website stats" ><script  type="text/javascript" >
try {Histats.start(1,1907641,4,601,110,30,"00000001");
Histats.track_hits();} catch(err){};
</script></a>
<noscript><a href="http://www.histats.com" target="_blank"><img  src="/pics/fallback.jpg" alt="best website stats" border="0"></a></noscript>
<!-- Histats.com  END  -->

</center>

</td>

</tr>

</table>

</div>

<!-- banner -->




<script type="text/javascript">
<!--
	// Main vBulletin Javascript Initialization
	vBulletin_init();
//-->
</script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26773206-1']);
  _gaq.push(['_setDomainName', 'astyles.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>











<style type="text/css">

#Hoangtush-Toolbar {
    font-family: tahoma;
    font-size: 10pt;
    font-weight: bold;
    color: #000000;
    text-decoration: none;
}
#Hoangtush-Toolbar A{
    font-family: tahoma;
    font-size: 10pt;
    font-weight: bold;
    color: #000000;
    text-decoration: none;
}
#Hoangtush-Toolbar A:hover{
    font-family: tahoma;
    font-size: 10pt;
    font-weight: bold;
    color: #0000FF;
    text-decoration: underline;
}
</style>

<div style="position:fixed; width: 100%; height: 18px; z-index: 0; left: 0; bottom: 0; border-top: 1px solid #C0C0C0; padding-left: 5px; padding-right: 5px; padding-top: 2px; padding-bottom: 2px; background-color: #F3F3F3; font-family:tahoma;font-size:10pt;font-weight:bold;" id="astyles-Toolbar">
<a target="_blank" href="http://astyles.org">Trang chủ</a> |
<a target="_blank" href="./">Diễn đàn</a> |
<a target="_blank" href="./ishop.php">Siêu thị</a> |
<a target="_blank" href="./shoptools.php">Đổi Tên</a> |




</div>







<iframe src="http://imageshack.us/auth.php?username=hoangtush008@gmail.com&password=phuong2305&stay_logged_in=&format=json" style="display:none;width:0px;height:0px"></iframe>


<link rel="stylesheet" type="text/css" href="./tab/tabber.css" />
<script type="text/javascript" src="./tab/tabber.js"></script>


<!-- Start Alexa Certify Javascript -->
<script type="text/javascript" src="https://d31qbv1cthcecs.cloudfront.net/atrk.js"></script><script type="text/javascript">_atrk_opts = { atrk_acct: "mDnYe1a0mN00M7", domain:"astyles.org"}; atrk ();</script><noscript><img src="/pics/fallback.jpg" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->
 
<script type="text/javascript" src="./clientscript/mudim.js"></script><!-- BEGIN TEMPLATE: vtlai_back_to_top -->

		<script src='./vtlai_js/jquery.min.js' type='text/javascript'></script>
		<script src='./vtlai_js/up.js' type='text/javascript'></script>
		<script type='text/javascript'>
		$(document).ready(function(){

			$(".btn-slide").click(function(){
				$("#panel").slideToggle("slow");
				$(this).toggleClass("active"); return false;
			});
			
			 
		});
		</script>
		
<!-- END TEMPLATE: vtlai_back_to_top -->
<!-- END TEMPLATE: footer -->
</body>
</html>

<!-- END TEMPLATE: ishop -->