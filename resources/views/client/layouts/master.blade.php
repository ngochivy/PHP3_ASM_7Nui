<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta_title', 'Trang chủ')</title>


    @stack('stylesheet')
</head>

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
                                <a href="tel://+00123456789"><i class="fa fa-phone"></i> +00 123 456 789</a>
                                <a href="mailto:demo@example.com"><i class="fa fa-envelope"></i> demo@example.com</a>

                                <!-- Dropdown Tài Khoản -->
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        <i class="fa fa-user"></i> Tài Khoản
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/profile"><i class="fa fa-user"></i> Tài
                                                Khoản Của Tôi</a></li>
                                        <li><a class="dropdown-item" href="/orders"><i class="fa fa-shopping-cart"></i>
                                                Đơn Hàng Của Tôi</a></li>
                                        <li><a class="dropdown-item" href="/account"><i class="fa fa-user-plus"></i>
                                                Đăng Ký/<i class="fa fa-sign-in"></i> Đăng Nhập</a></li>
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
                                        <a href="index.html">
                                            <img class="logo-main" src="{{ asset('assets/img/logo.png') }}"
                                                alt="Logo" />
                                            <img class="logo-light" src="{{ asset('assets/img/logo.png') }}"
                                                alt="Logo" />
                                        </a>
                                    </div>
                                </div>
                                <div class="header-align-center">
                                    <div class="header-search-box">
                                        <form action="#" method="post">
                                            <div class="form-input-item">
                                                <label for="search" class="sr-only">Tìm kiếm</label>
                                                <input type="text" id="search" placeholder="Tìm kiếm mọi thứ">
                                                <button type="submit" class="btn-src">
                                                    <i class="pe-7s-search"></i>
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="header-align-right">
                                    <div class="header-action-area">
                                        <div class="header-action-wishlist">
                                            <button class="btn-wishlist"
                                                onclick="window.location.href='shop-wishlist.html'">
                                                <i class="pe-7s-like"></i>
                                            </button>
                                        </div>
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
                                <a href="index.html">
                                    <img class="logo-main" src="{{ asset('assets/img/logo.png') }}" alt="Logo" />
                                    <img class="logo-light" src="{{ asset('assets/img/logo.png') }}" alt="Logo" />
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 sticky-md-none">
                            <div class="header-navigation-area d-none d-md-block">
                                <ul class="main-menu nav position-relative">
                                    <li><a class="ml--2" href="/">Trang Chủ</a></li>
                                    <li><a href="about.html">Giới Thiệu</a></li>
                                    <li class="has-submenu"><a href="index.html">Trang</a>
                                        <ul class="submenu-nav">
                                            <li><a href="shop-cart.html">Giỏ Hàng</a></li>
                                            <li><a href="shop-checkout.html">Thanh Toán</a></li>
                                            <li><a href="my-account.html">Tài Khoản Của Tôi</a></li>
                                            <li><a href="shop-wishlist.html">Danh Sách Yêu Thích</a></li>
                                            <li><a href="shop-compare.html">So Sánh</a></li>
                                            <li><a href="login-register.html">Đăng Nhập / Đăng Ký</a></li>
                                            <li><a href="coming-soon.html">Sắp Ra Mắt</a></li>
                                            <li><a href="page-not-found.html">404</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu"><a href="shop.html">Cửa Hàng</a>
                                        <ul class="submenu-nav">
                                            <li><a href="shop-3-column.html">Cửa Hàng 3 Cột</a></li>
                                            <li><a href="shop.html">Cửa Hàng 4 Cột</a></li>
                                            <li><a href="shop-left-sidebar.html">Cửa Hàng Bên Trái</a></li>
                                            <li><a href="shop-right-sidebar.html">Cửa Hàng Bên Phải</a></li>
                                            <li><a href="shop.html">Cửa Hàng Không Sidebar</a></li>
                                            <li><a href="shop-single-product.html">Chi Tiết Sản Phẩm</a></li>
                                            <li><a href="shop-single-product-variable.html">Sản Phẩm Biến Thể</a></li>
                                            <li><a href="shop-single-product-grouped.html">Sản Phẩm Nhóm</a></li>
                                        </ul>
                                    </li>
                                    <li class="has-submenu"><a href="blog.html">Blog</a>
                                        <ul class="submenu-nav">
                                            <li><a href="blog.html">Blog 3 Cột</a></li>
                                            <li><a href="blog-4-column.html">Blog 4 Cột</a></li>
                                            <li><a href="blog-left-sidebar.html">Blog Bên Trái</a></li>
                                            <li><a href="blog-right-sidebar.html">Blog Bên Phải</a></li>
                                            <li><a href="blog.html">Blog Không Sidebar</a></li>
                                            <li><a href="blog-details.html">Chi Tiết Blog Bên Trái</a></li>
                                            <li><a href="blog-details-right-sidebar.html">Chi Tiết Blog Bên Phải</a>
                                            </li>
                                            <li><a href="blog-details-no-sidebar.html">Chi Tiết Blog Không Sidebar</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="/contact">Contact</a></li>
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
                                <div class="header-action-wishlist">
                                    <button class="btn-wishlist" onclick="window.location.href='shop-wishlist.html'">
                                        <i class="pe-7s-like"></i>
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
                                    <p>Lorem ipsum dolor sit amet, consecl adipisicing elit, sed do eiusmod teml
                                        incididunt ut labore et dolore magna aliqua Ut enim</p>
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
                                            <li><a href="about.html">- Giới thiệu</a></li>
                                            <li><a href="blog.html">- Blog</a></li>
                                            <li><a href="index.html">- Diễn giả</a></li>
                                            <li><a href="contact.html">- Liên hệ</a></li>
                                            <li><a href="index.html">- Vé</a></li>
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
                                            <li><a href="index.html">- Jesco</a></li>
                                            <li><a href="shop.html">- Cửa hàng</a></li>
                                            <li><a href="contact.html">- Liên hệ chúng tôi</a></li>
                                            <li><a href="login-register.html">- Đăng nhập</a></li>
                                            <li><a href="index.html">- Trợ giúp</a></li>
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
                                    <p><i class="fa fa-copyright"></i> 2021 <span>KIDOL. </span> Được tạo với <i
                                            class="fa fa-heart"></i> bởi <a target="_blank"
                                            href="https://www.hasthemes.com/">HasThemes</a></p>
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
                            <h3>Shopping Cart</h3>
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
                                <li class="single-product-cart">
                                    <div class="cart-img">
                                        <a href="shop-single-product.html"><img
                                                src="{{ asset('assets/img/shop/details/nav2.jpg') }}"
                                                alt=""></a>
                                    </div>
                                    <div class="cart-title">
                                        <h4><a href="shop-single-product.html">Bruder Toys Mini Ships </a></h4>
                                        <span> 1 × <span class="price"> $59.00 </span></span>
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
                                <a class="cart-btn" href="shop-cart.html">view cart</a>
                                <a class="checkout-btn" href="shop-checkout.html">checkout</a>
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

@stack('javascript')

</html>
