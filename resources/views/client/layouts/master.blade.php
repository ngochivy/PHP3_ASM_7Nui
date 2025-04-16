<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta_title', 'Trang chủ')</title>
    
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
    @stack('stylesheet')
</head>
<style>

</style>

<body>

    <div class="wrapper home-default-wrapper">

        <!--== Start Preloader Content ==-->
        <div class="preloader-wrap">
            <div class="preloader">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <header class="header-wrapper">
            <div class="header-top">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12 col-sm-5 col-md-4 col-lg-6">
                            <div class="header-info-left">
                                <p>Miễn phí đổi trả và giao hàng miễn phí</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-7 col-md-8 col-lg-6 sm-pl-0 xs-pl-15 header-top-right">
                            <div class="header-info d-flex align-items-center gap-3">
                                <a href="tel://+00123456789"><i class="fa fa-phone"></i> +84 979 888 888</a>
                                <a href="mailto:demo@example.com"><i class="fa fa-envelope"></i> kidol@gmail.com</a>

                                <!-- Dropdown Tài Khoản -->
                                <!-- Dropdown Tài Khoản -->
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-user"></i>
                                        @auth
                                            {{ Auth::user()->name }}
                                            <!-- Hoặc Auth::user()->username tùy thuộc vào field trong database -->
                                        @else
                                            Tài Khoản
                                        @endauth
                                    </a>

                                    <ul class="dropdown-menu">
                                        @auth
                                            <!-- Hiển thị khi đã đăng nhập -->
                                            <li style="padding: 0; margin: 0;"><a class="dropdown-item" href="/profile"
                                                    style="padding: 8px 16px; display: block;"><i class="fa fa-user"></i>
                                                    Tài Khoản Của Tôi</a></li>
                                            <li style="padding: 0; margin: 0;"><a class="dropdown-item" href="/orders"
                                                    style="padding: 8px 16px; display: block;"><i
                                                        class="fa fa-shopping-cart"></i> Đơn Hàng Của Tôi</a></li>
                                            <li style="padding: 0; margin: 0;">
                                                <form method="POST" action="{{ route('logout') }}"
                                                    style="margin: 0; padding: 0; display: block;">
                                                    @csrf
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                        onclick="event.preventDefault(); this.closest('form').submit();"
                                                        style="margin-left: -0px; padding: 8px 16px; display: block; border-left: 0;">
                                                        <i class="fa fa-sign-out"></i> Đăng Xuất
                                                    </a>
                                                </form>
                                            </li>
                                        @else
                                            <!-- Hiển thị khi chưa đăng nhập -->
                                            <li style="padding: 0; margin: 0;"><a class="dropdown-item"
                                                    href="{{ route('register') }}"
                                                    style="padding: 8px 16px; display: block;"><i
                                                        class="fa fa-user-plus"></i> Đăng Ký</a></li>
                                            <li style="padding: 0; margin: 0;"><a class="dropdown-item"
                                                    href="{{ route('login') }}"
                                                    style="padding: 8px 16px; display: block;"><i class="fa fa-sign-in"></i>
                                                    Đăng Nhập</a></li>
                                        @endauth
                                    </ul>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="header-middle">
                <div class="container">
                    <div class="row row-gutter-0 align-items-center">
                        <div class="col-12">
                            <div class="header-align">
                                <div class="header-align-left">
                                    <div class="header-logo-area">
                                        <a href="/">
                                            <img class="logo-main" src="{{ asset('assets/img/logo.png') }}"
                                                alt="Logo" />
                                            <img class="logo-light" src="{{ asset('assets/img/logo.png') }}"
                                                alt="Logo" />
                                        </a>
                                    </div>
                                </div>
                                <div class="header-align-center">
                                    <div class="header-search-box">
                                        <form action="{{ route('products.search') }}" method="GET">
                                            <div class="form-input-item">
                                                <label for="search" class="sr-only">Tìm kiếm...</label>
                                                <input type="text" name="query" id="search"
                                                    placeholder="Tìm kiếm..." value="{{ request('query') }}">
                                                <button type="submit" class="btn-src">
                                                    <i class="pe-7s-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-align-right">
                                    <div class="header-action-area">
                                        <div class="header-action-cart">
                                            <button class="btn-cart cart-icon">
                                                <span class="cart-count">01</span>
                                                <i class="pe-7s-shopbag"></i>
                                            </button>
                                        </div>
                                        <button class="btn-menu d-md-none">
                                            <i class="ion-navicon"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-area header-default sticky-header">
                <div class="container">
                    <div class="row row-gutter-0 align-items-center">
                        <div class="col-4 col-sm-6 col-lg-2">
                            <div class="header-logo-area">
                                <a href="/">
                                    <img class="logo-main" src="{{ asset('assets/img/logo.png') }}"
                                        alt="Logo" />
                                    <img class="logo-light" src="{{ asset('assets/img/logo.png') }}"
                                        alt="Logo" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 sticky-md-none">
                            <div class="header-navigation-area d-none d-md-block">
                                <ul class="main-menu nav position-relative">
                                    <li><a class="ml--2" href="/">Trang Chủ</a></li>
                                    <li class="has-submenu"><a href="/product">Sản Phẩm</a>
                                        <ul class="submenu-nav">
                                            @php
                                                use App\Models\Category;
                                                $category = Category::all();
                                            @endphp
                                            @foreach ($category as $c)
                                                <li><a href="/product">{{ $c->name }}<span></span></a></li>
                                            @endforeach
                                        </ul>
                                    </li>


                                    <li><a href="/about">Giới thiệu</a></li>


                                    <li><a href="/blog">Bài viết</a></li>
                                    <li><a href="/contact">Liên hệ</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-8 col-sm-6 col-lg-2">
                            <div class="header-action-area">
                                <div class="header-action-search">
                                    <button class="btn-search btn-search-menu">
                                        <i class="pe-7s-search"></i>
                                    </button>
                                </div>
                                <div class="header-action-login">
                                    <button class="btn-login" onclick="window.location.href='login-register.html'">
                                        <i class="pe-7s-users"></i>
                                    </button>
                                </div>
                                <div class="header-action-cart">
                                    <button class="btn-cart cart-icon">
                                        <span class="cart-count">01</span>
                                        <i class="pe-7s-shopbag"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        @yield('content')

        <footer class="footer-area default-style">
            <div class="footer-main">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-lg-3">
                            <div class="widget-item item-style3">
                                <div class="about-widget">
                                    <a class="footer-logo" href="index.html">
                                        <img src="{{ asset('assets/img/logo-light.png') }}" alt="Logo">
                                    </a>
                                    <p>Chúng tôi cung cấp những sản phẩm chất lượng cao, phục vụ khách hàng tốt nhất.
                                    </p>
                                    <div class="widget-social-icons">
                                        <a href="#"><i class="ion-social-twitter"></i></a>
                                        <a href="#"><i class="ion-social-tumblr"></i></a>
                                        <a href="#"><i class="ion-social-facebook"></i></a>
                                        <a href="#"><i class="ion-social-instagram-outline"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-2">
                            <div class="widget-item item-style1">
                                <h4 class="widget-title">Liên kết nhanh</h4>
                                <h4 class="widget-title widget-collapsed-title collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#dividerId-1">Liên kết nhanh</h4>
                                <div id="dividerId-1" class="collapse widget-collapse-body">
                                    <nav class="widget-menu-wrap">
                                        <ul class="nav-menu nav item-hover-style">
                                            <li><a href="index.html">- Hỗ trợ</a></li>
                                            <li><a href="index.html">- Đường dây trợ giúp</a></li>
                                            <li><a href="index.html">- Khóa học</a></li>
                                            <li><a href="about.html">- Giới thiệu</a></li>
                                            <li><a href="index.html">- Sự kiện</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-lg-2">
                            <div class="widget-item item-style1">
                                <h4 class="widget-title">Trang khác</h4>
                                <h4 class="widget-title widget-collapsed-title collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#dividerId-2">Trang khác</h4>
                                <div id="dividerId-2" class="collapse widget-collapse-body">
                                    <nav class="widget-menu-wrap item-hover-style">
                                        <ul class="nav-menu nav">
                                            <li><a href="/about">- Giới thiệu</a></li>
                                            <li><a href="/blog">- Bài viết</a></li>
                                            <li><a href="/contact">- Liên hệ</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-lg-2">
                            <div class="widget-item item-style2">
                                <h4 class="widget-title">Công ty</h4>
                                <h4 class="widget-title widget-collapsed-title collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#dividerId-3">Công ty</h4>
                                <div id="dividerId-3" class="collapse widget-collapse-body">
                                    <nav class="widget-menu-wrap item-hover-style">
                                        <ul class="nav-menu nav">
                                            <li><a href="/product">- Cửa hàng</a></li>
                                            <li><a href="/contact">- Liên hệ</a></li>
                                            <li><a href="/login">- Đăng nhập</a></li>
                                            <li><a href="/index">- Trợ giúp</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-lg-3">
                            <div class="widget-item">
                                <h4 class="widget-title">Thông tin cửa hàng</h4>
                                <h4 class="widget-title widget-collapsed-title collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#dividerId-4">Thông tin cửa hàng</h4>
                                <div id="dividerId-4" class="collapse widget-collapse-body">
                                    <p class="widget-address">2005 Địa chỉ của bạn. <br>896, Địa chỉ 10010, HGJ
                                    </p>
                                    <ul class="widget-contact-info">
                                        <li>Điện thoại/Fax: <a href="tel://0123456789">0123456789</a></li>
                                        <li>Email: <a href="mailto://demo@example.com">demo@example.com</a></li>
                                    </ul>
                                    <div class="widget-payment-info">
                                        <div class="thumb">
                                            <a href="index.html"><img
                                                    src="{{ asset('assets/img/photos/payment1.png') }}"
                                                    alt="Image"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="footer-bottom-content">
                        <div class="row text-center">
                            <div class="col-sm-12">
                                <div class="widget-copyright">
                                    <p><i class="fa fa-copyright"></i> 2025 <span>KIDOL. </span><i href=""> Nam
                                            - Khang - Linh - Vỹ</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-shape bg-img" data-bg-img="{{ asset('assets/img/photos/footer1.png') }}"></div>
        </footer>

        <!--== End Footer Area Wrapper ==-->

        <!--== Scroll Top Button ==-->
        <div class="scroll-to-top"><span class="fa fa-angle-double-up"></span></div>

        <!--== Start Product Quick View ==-->
        <aside class="product-quick-view-modal">
            <div class="product-quick-view-inner">
                <div class="product-quick-view-content">
                    <button type="button" class="btn-close">
                        <span class="pe-7s-close"><i class="lastudioicon-e-remove"></i></span>
                    </button>
                    <div class="row row-gutter-0">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="thumb">
                                <img src="{{ asset('assets/img/shop/quick-view1.jpg') }}" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="single-product-info">
                                <h4 class="title">Jigsaw Puzzles For Kids</h4>
                                <div class="prices">
                                    <span class="price">$120.59</span>
                                </div>
                                <div class="product-rating">
                                    <div class="rating">
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                        <span class="fa fa-star"></span>
                                    </div>
                                    <div class="review">
                                        <a href="#/">( 5 Customer Review )</a>
                                    </div>
                                </div>
                                <div class="single-product-featured">
                                    <ul>
                                        <li><i class="fa fa-check"></i> Free Shipping</li>
                                        <li><i class="fa fa-check"></i> Support 24/7</li>
                                        <li><i class="fa fa-check"></i> Money Return</li>
                                    </ul>
                                </div>
                                <p class="product-desc">Lorem ipsum dolor sit amet, consect adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quisll exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duisol
                                    aute irure dolor in reprehenderit.</p>
                                <div class="quick-product-action">
                                    <div class="action-top">
                                        <div class="pro-qty">
                                            <input type="text" id="quantity" title="Quantity" value="01" />
                                        </div>
                                        <button class="btn btn-theme">Add to Cart</button>
                                        <a class="btn-wishlist" href="shop-wishlist.html">Add to Wishlist</a>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h3 class="title">SKU:</h3>
                                    <div class="widget-tags">
                                        <span>Ch-256xl</span>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h3 class="title">Categories:</h3>
                                    <div class="widget-tags">
                                        <a href="blog.html">Toys.</a>
                                        <a href="blog.html">Dresss</a>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h3 class="title">Tag:</h3>
                                    <div class="widget-tags">
                                        <a href="blog.html">Toys,</a>
                                        <a href="blog.html">Dress</a>
                                    </div>
                                </div>
                                <div class="widget">
                                    <h3 class="title">Share:</h3>
                                    <div class="widget-tags widget-share">
                                        <span class="fa fa-facebook"></span>
                                        <span class="fa fa-dribbble"></span>
                                        <span class="fa fa-pinterest-p"></span>
                                        <span class="fa fa-twitter"></span>
                                        <span class="fa fa-linkedin"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas-overlay"></div>
        </aside>
        <!--== End Product Quick View ==-->

        <!--== Start Aside Search Menu ==-->
        <div class="search-box-wrapper">
            <div class="search-box-content-inner">
                <div class="search-box-form-wrap">
                    <div class="search-note">
                        <p>Start typing and press Enter to search</p>
                    </div>
                    <form action="#" method="post">
                        <div class="search-form position-relative">
                            <label for="search-input" class="sr-only">Search</label>
                            <input type="search" class="form-control" placeholder="Search" id="search-input">
                            <button class="search-button"><i class="pe-7s-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!--== End Aside Search Menu ==-->
            <a href="javascript:;" class="search-close"><i class="pe-7s-close"></i></a>
        </div>
        <!--== End Aside Search Menu ==-->

        <!--== Start Sidebar Cart Menu ==-->
        <aside class="sidebar-cart-modal">
            <div class="sidebar-cart-inner">
                <div class="sidebar-cart-content">
                    <a class="cart-close" href="javascript:void(0);"><i class="pe-7s-close"></i></a>
                    <div class="sidebar-cart-all">


                        <div class="cart-header">
                            <h3>Giỏ hàng</h3>
                            <div class="close-style-wrap">
                                <span class="close-style close-style-width-1 cart-close"></span>
                            </div>
                        </div>
                        <div class="cart-content cart-content-padding">
                            <ul>
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="shop-single-product.html"><img
                                                src="{{ asset('assets/img/shop/details/nav1.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h4><a href="shop-single-product.html">Jigsaw Puzzles For Kids </a></h4>
                                        <span> 1 × <span class="price"> $12.00 </span></span>
                                    </div>
                                    <div class="cart-delete">
                                        <a href="#/"><i class="pe-7s-trash icons"></i></a>
                                    </div>
                                </li>

                            </ul>
                            <div class="cart-total">
                                <h4>Subtotal: <span>$278.90</span></h4>
                            </div>


                            <div class="cart-checkout-btn">
                                <a class="cart-btn" href="/cart">Xem giỏ hàng</a>
                                <a class="checkout-btn" href="/checkout">Thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>
        <div class="sidebar-cart-overlay"></div>
        <!--== End Sidebar Cart Menu ==-->

        <!--== Start Side Menu ==-->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-inner">
                <div class="off-canvas-overlay d-none"></div>
                <!-- Start Off Canvas Content Wrapper -->
                <div class="off-canvas-content">
                    <!-- Off Canvas Header -->
                    <div class="off-canvas-header">
                        <div class="close-action">
                            <button class="btn-close"><i class="pe-7s-close"></i></button>
                        </div>
                    </div>

                    <div class="off-canvas-item">
                        <!-- Start Mobile Menu Wrapper -->
                        <div class="res-mobile-menu">
                            <!-- Note Content Auto Generate By Jquery From Main Menu -->
                        </div>
                        <!-- End Mobile Menu Wrapper -->
                    </div>
                    <!-- Off Canvas Footer -->
                    <div class="off-canvas-footer"></div>
                </div>
                <!-- End Off Canvas Content Wrapper -->
            </div>
        </aside>
        <!--== End Side Menu ==-->
    </div>
</body>

<script src="{{ asset('assets/js/modernizr.js') }}"></script>
<!--=== jQuery Min Js ===-->
<script src="{{ asset('assets/js/jquery-main.js') }}"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="{{ asset('assets/js/jquery-migrate.js') }}"></script>
<!--=== Popper Min Js ===-->
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<!--=== Bootstrap Min Js ===-->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!--=== jquery Appear Js ===-->
<script src="{{ asset('assets/js/jquery.appear.js') }}"></script>
<!--=== jquery Swiper Min Js ===-->
<script src="{{ asset('assets/js/swiper.min.js') }}"></script>
<!--=== jquery Fancybox Min Js ===-->
<script src="{{ asset('assets/js/fancybox.min.js') }}"></script>
<!--=== jquery Aos Min Js ===-->
<script src="{{ asset('assets/js/aos.min.js') }}"></script>
<!--=== jquery Slicknav Js ===-->
<script src="{{ asset('assets/js/jquery.slicknav.js') }}"></script>
<!--=== jquery Countdown Js ===-->
<script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
<!--=== jquery Tippy Js ===-->
<script src="{{ asset('assets/js/tippy.all.min.js') }}"></script>
<!--=== Isotope Min Js ===-->
<script src="{{ asset('assets/js/isotope.pkgd.min.js') }}"></script>
<!--=== Parallax Min Js ===-->
<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
<!--=== Slick  Min Js ===-->
<script src="{{ asset('assets/js/slick.min.js') }}"></script>
<!--=== jquery Wow Min Js ===-->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!--=== jquery Zoom Min Js ===-->
<script src="{{ asset('assets/js/jquery-zoom.min.js') }}"></script>

<!--=== Custom Js ===-->
<script src="{{ asset('assets/js/custom.js') }}"></script>
@stack('javascript')
</html>
