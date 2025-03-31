@extends('client.layouts.master')
@section('meta_title')
Giới Thiệu
@endsection
@push('stylesheet')
<link rel="shortcut icon" href="{{ asset('assets/img/favicon.ico') }}" type="image/x-icon" />

<!--== Google Fonts ==-->
<link href="https://fonts.googleapis.com/css?family=Fredoka+One:400" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!--== Bootstrap CSS ==-->
<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
<!--== Font-awesome Icons CSS ==-->
<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
<!--== Pe Icon 7 Min Icons CSS ==-->
<link href="{{ asset('assets/css/pe-icon-7-stroke.min.css') }}" rel="stylesheet" />
<!--== Ionicons CSS ==-->
<link href="{{ asset('assets/css/ionicons.css') }}" rel="stylesheet" />
<!--== Animate CSS ==-->
<link href="{{ asset('assets/css/animate.css') }}" rel="stylesheet" />
<!--== Aos CSS ==-->
<link href="{{ asset('assets/css/aos.css') }}" rel="stylesheet" />
<!--== FancyBox CSS ==-->
<link href="{{ asset('assets/css/jquery.fancybox.min.css') }}" rel="stylesheet" />
<!--== Slicknav CSS ==-->
<link href="{{ asset('assets/css/slicknav.css') }}" rel="stylesheet" />
<!--== Swiper CSS ==-->
<link href="{{ asset('assets/css/swiper.min.css') }}" rel="stylesheet" />
<!--== Slick CSS ==-->
<link href="{{ asset('assets/css/slick.css') }}" rel="stylesheet" />
<!--== Main Style CSS ==-->
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
@endpush



@section('content')
<main class="main-content">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 m-auto">
                    <div class="page-title-content text-center">
                        <h2 class="title">Về Chúng Tôi</h2>
                        <div class="bread-crumbs"><a href="index.html">Trang Chủ</a><span class="breadcrumb-sep"> // </span><span class="active">Về Chúng Tôi</span></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Kết thúc Khu Vực Tiêu Đề Trang ==-->

    <!--== Bắt đầu Khu Vực Chia Cắt Wrapper ==-->
    <section class="divider-area divider-style3-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-6" data-aos="fade-right" data-aos-duration="1000">
                    <div class="thumb">
                        <img src="assets/img/divider/4.png" alt="Hình Ảnh">
                        <div class="shape-group">
                            <div class="shape-style1">
                                <img src="assets/img/divider/shape3.png" alt="Hình Ảnh">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6" data-aos="fade-up" data-aos-duration="1000">
                    <div class="divider-content">
                        <h4 class="subtitle">Chào Bạn!</h4>
                        <h2 class="title">"Niềm vui và học hỏi cùng đồ chơi an toàn cho trẻ em!"</h2>
                        <p>Chúng tôi cung cấp các sản phẩm đồ chơi an toàn, thú vị và phát triển cho trẻ em ở mọi độ tuổi. Với bộ sưu tập đa dạng từ các món đồ chơi giáo dục đến các sản phẩm giải trí, mỗi món đồ chơi đều được lựa chọn kỹ càng để giúp trẻ em phát triển tư duy, khả năng sáng tạo và kỹ năng vận động. Sản phẩm của chúng tôi không chỉ giúp trẻ em vui chơi mà còn hỗ trợ quá trình học hỏi, khám phá thế giới xung quanh. Chúng tôi cam kết đảm bảo chất lượng và sự an toàn tuyệt đối, mang đến cho bạn sự yên tâm khi lựa chọn sản phẩm cho con em mình. Đến với cửa hàng của chúng tôi, bạn sẽ tìm thấy những món đồ chơi phù hợp với mọi sở thích và nhu cầu phát triển của trẻ, giúp bé yêu vui vẻ và học hỏi mỗi ngày.</p>
                        <a class="btn-theme" href="contact.html">Liên Hệ Với Chúng Tôi</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Kết thúc Khu Vực Chia Cắt Wrapper ==-->

    <!--== Bắt đầu Khu Vực Logo Thương Hiệu ==-->
    <div class="brand-logo-area brand-logo-default-area" data-aos="fade-up" data-aos-duration="1000">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="swiper-container brand-logo-slider-container">
                        <div class="swiper-wrapper brand-logo-slider">
                            <div class="swiper-slide brand-logo-item">
                                <a href="#/"><img src="assets/img/brand-logo/1.png" alt="Logo Thương Hiệu"></a>
                            </div>
                            <div class="swiper-slide brand-logo-item">
                                <a href="#/"><img src="assets/img/brand-logo/2.png" alt="Logo Thương Hiệu"></a>
                            </div>
                            <div class="swiper-slide brand-logo-item">
                                <a href="#/"><img src="assets/img/brand-logo/3.png" alt="Logo Thương Hiệu"></a>
                            </div>
                            <div class="swiper-slide brand-logo-item">
                                <a href="#/"><img src="assets/img/brand-logo/4.png" alt="Logo Thương Hiệu"></a>
                            </div>
                            <div class="swiper-slide brand-logo-item">
                                <a href="#/"><img src="assets/img/brand-logo/5.png" alt="Logo Thương Hiệu"></a>
                            </div>
                            <div class="swiper-slide brand-logo-item">
                                <a href="#/"><img src="assets/img/brand-logo/6.png" alt="Logo Thương Hiệu"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--== Kết thúc Khu Vực Logo Thương Hiệu ==-->

    


    <!--== Bắt đầu Khu Vực Đánh Giá ==-->
    <section class="testimonial-area testimonial-default-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="title">Đánh Giá</h2>
                        <div class="desc">
                            <p>Đánh giá của khách hàng là yếu tố quan trọng giúp chúng tôi không ngừng cải thiện và nâng cao chất lượng dịch vụ.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="1300">
                <div class="col-lg-12">
                    <div class="swiper-container testimonial-slider-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="client-content">
                                        <div class="inner-content">
                                            <div class="icon">
                                                <img src="assets/img/icons/1.png" alt="Hình Ảnh">
                                            </div>
                                            <p>Tôi rất hài lòng với sản phẩm mà mình đã mua. Chất lượng vượt trội và dịch vụ khách hàng rất tận tâm. Tôi chắc chắn sẽ quay lại mua sắm thêm!</p>
                                        </div>
                                        <div class="shape-group">
                                            <div class="shape-style1">
                                                <img src="assets/img/testimonial/shape1.png" alt="Hình Ảnh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-info">
                                        <div class="thumb">
                                            <img src="assets/img/testimonial/1.png" alt="Hình Ảnh">
                                        </div>
                                        <div class="desc">
                                            <h4 class="title">Nguyễn Nhật Huy</h4>
                                            <p>Khách Hàng</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="client-content">
                                        <div class="inner-content">
                                            <div class="icon">
                                                <img src="assets/img/icons/1.png" alt="Hình Ảnh">
                                            </div>
                                            <p>Mua sắm tại cửa hàng này thật tuyệt vời! Sản phẩm đa dạng, phù hợp với nhu cầu của gia đình tôi, và giao hàng rất nhanh chóng. Tôi rất ấn tượng!</p>
                                        </div>
                                        <div class="shape-group">
                                            <div class="shape-style1">
                                                <img src="assets/img/testimonial/shape1.png" alt="Hình Ảnh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-info">
                                        <div class="thumb">
                                            <img src="assets/img/testimonial/2.png" alt="Hình Ảnh">
                                        </div>
                                        <div class="desc">
                                            <h4 class="title">Ngô Chí Vỹ</h4>
                                            <p>Khách Hàng</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="client-content">
                                        <div class="inner-content">
                                            <div class="icon">
                                                <img src="assets/img/icons/1.png" alt="Hình Ảnh">
                                            </div>
                                            <p>Dịch vụ khách hàng tuyệt vời và luôn sẵn sàng hỗ trợ khi tôi cần. Đồ chơi rất an toàn và thú vị cho các bé. Đây sẽ là địa chỉ tin cậy của tôi trong tương lai.</p>
                                        </div>
                                        <div class="shape-group">
                                            <div class="shape-style1">
                                                <img src="assets/img/testimonial/shape1.png" alt="Hình Ảnh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-info">
                                        <div class="thumb">
                                            <img src="assets/img/testimonial/3.png" alt="Hình Ảnh">
                                        </div>
                                        <div class="desc">
                                            <h4 class="title">Nguyễn Hoàng Nam</h4>
                                            <p>Khách Hàng</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="client-content">
                                        <div class="inner-content">
                                            <div class="icon">
                                                <img src="assets/img/icons/1.png" alt="Hình Ảnh">
                                            </div>
                                            <p>Có rất nhiều biến thể có sẵn, nhưng hầu hết đã bị thay đổi theo một cách nào đó, bằng cách chèn sự hài hước.</p>
                                        </div>
                                        <div class="shape-group">
                                            <div class="shape-style1">
                                                <img src="assets/img/testimonial/shape1.png" alt="Hình Ảnh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-info">
                                        <div class="thumb">
                                            <img src="assets/img/testimonial/1.png" alt="Hình Ảnh">
                                        </div>
                                        <div class="desc">
                                            <h4 class="title">Trần Nhựt Linh</h4>
                                            <p>Khách Hàng</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="client-content">
                                        <div class="inner-content">
                                            <div class="icon">
                                                <img src="assets/img/icons/1.png" alt="Hình Ảnh">
                                            </div>
                                            <p>Có rất nhiều biến thể của đoạn văn Lorem Ipsum có sẵn, nhưng hầu hết đã bị thay đổi theo một cách nào đó, bằng cách chèn sự hài hước.</p>
                                        </div>
                                        <div class="shape-group">
                                            <div class="shape-style1">
                                                <img src="assets/img/testimonial/shape1.png" alt="Hình Ảnh">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="client-info">
                                        <div class="thumb">
                                            <img src="assets/img/testimonial/3.png" alt="Hình Ảnh">
                                        </div>
                                        <div class="desc">
                                            <h4 class="title">Lê Hoàng Khang</h4>
                                            <p>Khách Hàng</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="thumb-style bg-img" data-bg-img="assets/img/testimonial/shape2.png"></div>
    </section>
    <!--== Kết thúc Khu Vực Đánh Giá ==-->

    <!--== Bắt đầu Khu Vực Chia Cắt Wrapper ==-->
    <section class="divider-area divider-style4-area" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="divider-wrap bg-img" data-bg-img="assets/img/photos/bg1.png">
                        <div class="row align-items-center">
                            <div class="col-lg-6 position-relative">
                                <div class="content">
                                    <h2>Đăng Ký Nhận Các Ưu Đãi & Tin Tức Đặc Biệt</h2>
                                </div>
                                <div class="shape-group">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="newsletter-form">
                                    <form action="#">
                                        <input class="form-control" type="email" placeholder="Nhập Email Của Bạn">
                                        <button class="btn btn-theme" type="submit">Đăng Ký</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Kết thúc Khu Vực Chia Cắt Wrapper ==-->

</main>
@endsection



@push('javascript')
<script src="{{asset ('assets/js/modernizr.js')}}"></script>
<!--=== jQuery Min Js ===-->
<script src="{{asset ('assets/js/jquery-main.js')}}"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="{{asset ('assets/js/jquery-migrate.js')}}"></script>
<!--=== Popper Min Js ===-->
<script src="{{asset ('assets/js/popper.min.js')}}"></script>
<!--=== Bootstrap Min Js ===-->
<script src="{{asset ('assets/js/bootstrap.min.js')}}"></script>
<!--=== jquery Appear Js ===-->
<script src="{{asset ('assets/js/jquery.appear.js')}}"></script>
<!--=== jquery Swiper Min Js ===-->
<script src="{{asset ('assets/js/swiper.min.js')}}"></script>
<!--=== jquery Fancybox Min Js ===-->
<script src="{{asset ('assets/js/fancybox.min.js')}}"></script>
<!--=== jquery Aos Min Js ===-->
<script src="{{asset ('assets/js/aos.min.js')}}"></script>
<!--=== jquery Slicknav Js ===-->
<script src="{{asset ('assets/js/jquery.slicknav.js')}}"></script>
<!--=== jquery Countdown Js ===-->
<script src="{{asset ('assets/js/jquery.countdown.min.js')}}"></script>
<!--=== jquery Tippy Js ===-->
<script src="{{asset ('assets/js/tippy.all.min.js')}}"></script>
<!--=== Isotope Min Js ===-->
<script src="{{asset ('assets/js/isotope.pkgd.min.js')}}"></script>
<!--=== Parallax Min Js ===-->
<script src="{{asset ('assets/js/parallax.min.js')}}"></script>
<!--=== Slick  Min Js ===-->
<script src="{{asset ('assets/js/slick.min.js')}}"></script>
<!--=== jquery Wow Min Js ===-->
<script src="{{asset ('assets/js/wow.min.js')}}"></script>
<!--=== jquery Zoom Min Js ===-->
<script src="{{asset ('assets/js/jquery-zoom.min.js')}}"></script>

<!--=== Custom Js ===-->
<script src="{{asset ('assets/js/custom.js')}}"></script>

@endpush