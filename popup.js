document.addEventListener("DOMContentLoaded", function() {
    var images = [
        "/@4rum/images/ASLogo14.jpg",
        "/@4rum/images/AstylesLogo.jpg",
        "/@4rum/images/ASLogo.jpg"
    ];
    
    var currentIndex = 0;
    var headerElement = document.getElementById("header");
    
    if (headerElement) {
        // Áp dụng CSS cần thiết cho header
        headerElement.style.backgroundSize = "cover";
        headerElement.style.backgroundPosition = "center";
        headerElement.style.transition = "background-image 1s ease-in-out";
        
        // Ẩn logo mặc định nếu có để hiển thị slide background rõ hơn
        var imgElement = headerElement.querySelector(".logo-image img");
        if (imgElement) {
            imgElement.style.opacity = "0";
        }
        
        // Gán ảnh đầu tiên
        headerElement.style.backgroundImage = "url('" + images[currentIndex] + "')";
        
        // Bắt đầu khoảng thời gian chuyển ảnh
        setInterval(function() {
            currentIndex = (currentIndex + 1) % images.length;
            headerElement.style.backgroundImage = "url('" + images[currentIndex] + "')";
        }, 5000); // 5 giây
    }
});