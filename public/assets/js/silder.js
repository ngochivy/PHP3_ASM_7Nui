$(document).ready(function(){
    $('.category-slider').slick({
        slidesToShow: 7,  // Hiển thị 7 mục mỗi lần
        slidesToScroll: 1, // Cuộn từng mục
        autoplay: true,  // Tự động chuyển đổi
        autoplaySpeed: 2000,  // Tốc độ chuyển đổi (2s)
        arrows: false,  // Tắt nút điều hướng
        responsive: [
            {
                breakpoint: 1200,  // Khi chiều rộng nhỏ hơn 1200px
                settings: {
                    slidesToShow: 6  // Hiển thị 6 mục
                }
            },
            {
                breakpoint: 992,  // Khi chiều rộng nhỏ hơn 992px
                settings: {
                    slidesToShow: 5  // Hiển thị 5 mục
                }
            },
            {
                breakpoint: 768,  // Khi chiều rộng nhỏ hơn 768px
                settings: {
                    slidesToShow: 4  // Hiển thị 4 mục
                }
            },
            {
                breakpoint: 480,  // Khi chiều rộng nhỏ hơn 480px
                settings: {
                    slidesToShow: 2  // Hiển thị 2 mục
                }
            }
        ]
    });
});
