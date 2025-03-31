@extends('client.layouts.master')

@section('meta_title')
    Trang chủ
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
        <!--== Start Hero Area Wrapper ==-->
        <section class="home-slider-area slider-default">
            <div class="home-slider-content">
                <div class="swiper-container home-slider-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <!-- Bắt đầu mục trình chiếu -->
                            <div class="home-slider-item">
                                <div class="thumb-one bg-img" data-bg-img="assets/img/slider/1.jpg"></div>
                                <div class="slider-content-area">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="content">
                                                    <div class="inner-content">
                                                        <h2>Cửa hàng trẻ em & mua sắm trực tuyến tốt nhất</h2>
                                                        <p>Hãy dành tặng những món quà tuyệt vời cho con bạn mỗi ngày</p>
                                                        <a href="shop.html" class="btn-theme">Mua Ngay</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <img class="thumb-two" src="assets/img/slider/2.png" alt="Hình ảnh">
                                    <img class="thumb-three" src="assets/img/slider/3.png" alt="Hình ảnh">
                                    <img class="thumb-four" src="assets/img/photos/3.png" alt="Hình ảnh">
                                </div>
                                <div class="shape-top bg-img" data-bg-img="assets/img/photos/1.png"></div>
                                <div class="shape-bottom bg-img" data-bg-img="assets/img/photos/2.png"></div>
                            </div>
                            <!-- Kết thúc mục trình chiếu -->
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--== End Hero Area Wrapper ==-->

        <!--== Start Category Area Wrapper ==-->
        <section class="category-area product-category1-area" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="row category-items1">
                    <div class="col-sm-6 col-md-4">
                        <div class="category-item">
                            <div class="thumb thumb-style1">
                                <img src="assets/img/category/1.png" alt="Hình ảnh">
                                <div class="content">
                                    <div class="contact-info">
                                        <h2 class="title">Đầm Cho Bé</h2>
                                        <h4 class="price">$32.00</h4>
                                    </div>
                                    <a class="btn-link" href="shop.html">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="category-item mt-xs-25">
                            <div class="thumb thumb-style2">
                                <img src="assets/img/category/2.png" alt="Hình ảnh">
                                <div class="content">
                                    <div class="contact-info">
                                        <h2 class="title">Đồ Chơi Cho Bé</h2>
                                        <h4 class="price">$25.00</h4>
                                    </div>
                                    <a class="btn-link" href="shop.html">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="category-item mt-sm-25">
                            <div class="thumb thumb-style3">
                                <img src="assets/img/category/3.png" alt="Hình ảnh">
                                <div class="content">
                                    <div class="contact-info">
                                        <h2 class="title">Gấu Bông</h2>
                                        <h4 class="price">$18.00</h4>
                                    </div>
                                    <a class="btn-link" href="shop.html">Mua Ngay</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--== End Category Area Wrapper ==-->

        <!--== Start Product Tab Area Wrapper ==-->
        <section class="product-area product-style1-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m-auto">
                        <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                            <h2 class="title">Sản Phẩm Mới</h2>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt ut
                                    labore et dolore magna aliqua</p>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="product-tab-content">
                            <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up"
                                data-aos-duration="1000">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="our-features-tab" data-bs-toggle="tab"
                                        data-bs-target="#our-features" type="button" role="tab"
                                        aria-controls="our-features" aria-selected="true">All Items</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="best-sellers-tab" data-bs-toggle="tab"
                                        data-bs-target="#best-sellers" type="button" role="tab"
                                        aria-controls="best-sellers" aria-selected="false">Baby Dress</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link mr-0" id="new-items-tab" data-bs-toggle="tab"
                                        data-bs-target="#new-items" type="button" role="tab"
                                        aria-controls="new-items" aria-selected="false">Baby Toys</button>
                                </li>
                            </ul>

                            <div class="tab-content" id="myTabContent" data-aos="fade-up" data-aos-duration="1300">
                                <div class="tab-pane fade show active" id="our-features" role="tabpanel"
                                    aria-labelledby="our-features-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="product">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/1.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Funskool Teddy</a>
                                                                </h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/2.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a href="shop-single-product.html">Baby
                                                                        Play Sets</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/3.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Jigsaw Puzzles For
                                                                        Kids</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/4.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Abstract Girl
                                                                        Dress</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/5.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Bruder Toys Mini
                                                                        Ships</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/6.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Abstract Boy
                                                                        Dress</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/7.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Funskool Teddy
                                                                        Pink</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/8.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a href="shop-single-product.html">Toys
                                                                        Box For Baby</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="best-sellers" role="tabpanel"
                                    aria-labelledby="best-sellers-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="product">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/5.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Bruder Toys Mini
                                                                        Ships</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/6.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Abstract Boy
                                                                        Dress</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/7.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Funskool Teddy
                                                                        Pink</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/8.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a href="shop-single-product.html">Toys
                                                                        Box For Baby</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/1.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Funskool Teddy</a>
                                                                </h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/2.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a href="shop-single-product.html">Baby
                                                                        Play Sets</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/3.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Jigsaw Puzzles For
                                                                        Kids</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/4.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Abstract Girl
                                                                        Dress</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="new-items" role="tabpanel"
                                    aria-labelledby="new-items-tab">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="product">
                                                <div class="row">
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/1.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Funskool Teddy</a>
                                                                </h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/2.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a href="shop-single-product.html">Baby
                                                                        Play Sets</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/3.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Jigsaw Puzzles For
                                                                        Kids</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/4.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Abstract Girl
                                                                        Dress</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/5.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Bruder Toys Mini
                                                                        Ships</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/6.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Abstract Boy
                                                                        Dress</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/7.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a
                                                                        href="shop-single-product.html">Funskool Teddy
                                                                        Pink</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                                        <!-- Start Product Item -->
                                                        <div class="product-item">
                                                            <div class="product-thumb">
                                                                <img src="assets/img/shop/8.png" alt="Image">
                                                                <div class="product-action">
                                                                    <a class="action-quick-view" href="shop-cart.html"><i
                                                                            class="ion-ios-cart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="javascript:void(0)"><i
                                                                            class="ion-arrow-expand"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-wishlist.html"><i
                                                                            class="ion-heart"></i></a>
                                                                    <a class="action-quick-view"
                                                                        href="shop-compare.html"><i
                                                                            class="ion-shuffle"></i></a>
                                                                </div>
                                                            </div>
                                                            <div class="product-info">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                </div>
                                                                <h4 class="title"><a href="shop-single-product.html">Toys
                                                                        Box For Baby</a></h4>
                                                                <div class="prices">
                                                                    <span class="price">$190.12</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- End Product Item -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Tab Area Wrapper ==-->

        <!--== Start Divider Area Wrapper ==-->
        <section class="divider-area divider-style1-area bg-img" data-bg-img="assets/img/divider/bg1.png"
            data-aos="fade-up" data-aos-duration="1000">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="divider-content">
                            <h2 class="title">Deal Of The Day</h2>
                            <p><span>UPTO 35% OFF </span> On All Other Baby Products</p>
                            <div class="countdown-content">
                                <ul class="countdown-timer">
                                    <li><span class="days">00</span>
                                        <p class="days_text">Days</p>
                                    </li>
                                    <li><span class="hours">00</span>
                                        <p class="hours_text">Hours</p>
                                    </li>
                                    <li><span class="minutes">00</span>
                                        <p class="minutes_text">MINUTES</p>
                                    </li>
                                    <li><span class="seconds">00</span>
                                        <p class="seconds_text">SECONDS</p>
                                    </li>
                                </ul>
                            </div>
                            <a class="btn-theme" href="shop.html">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="shape-group">
                    <div class="shape-style3">
                        <img src="assets/img/divider/1.png" alt="Image">
                    </div>
                    <div class="shape-style4">
                        <img src="assets/img/divider/2.png" alt="Image">
                    </div>
                </div>
            </div>
            <div class="shape-group">
                <div class="shape-style1" data-bg-img="assets/img/divider/shape1.png"></div>
                <div class="shape-style2" data-bg-img="assets/img/divider/shape2.png"></div>
            </div>
        </section>
        <!--== End Divider Area Wrapper ==-->

        <!--== Start Category Area Wrapper ==-->
        <section class="category-area product-category2-area" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="row category-items2">
                    <div class="col-md-6">
                        <div class="category-item">
                            <div class="thumb">
                                <img class="w-100" src="assets/img/category/4.png" alt="Image">
                                <div class="content">
                                    <div class="contact-info">
                                        <h2 class="title text-white">Collection</h2>
                                        <h4 class="price text-white">Flat <span>20%</span> Off</h4>
                                    </div>
                                    <a class="btn-theme" href="shop.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-item mt-sm-50">
                            <div class="thumb">
                                <img class="w-100" src="assets/img/category/5.png" alt="Image">
                                <div class="content">
                                    <div class="contact-info">
                                        <h2 class="title">Collection</h2>
                                        <h4 class="price">Flat <span>30%</span> Off</h4>
                                    </div>
                                    <a class="btn-theme" href="shop.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Category Area Wrapper ==-->

        <!--== Start Product Tab Area Wrapper ==-->
        <section class="product-area product-style2-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 m-auto">
                        <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                            <h2 class="title">Trending Product</h2>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt ut
                                    labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="product-tab1-slider" data-aos="fade-up" data-aos-duration="1500">
                            <div class="slide-item">
                                <!-- Start Product Item -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <img src="assets/img/shop/9.png" alt="Image">
                                        <div class="product-action">
                                            <a class="action-quick-view" href="shop-cart.html"><i
                                                    class="ion-ios-cart"></i></a>
                                            <a class="action-quick-view" href="javascript:void(0)"><i
                                                    class="ion-arrow-expand"></i></a>
                                            <a class="action-quick-view" href="shop-wishlist.html"><i
                                                    class="ion-heart"></i></a>
                                            <a class="action-quick-view" href="shop-compare.html"><i
                                                    class="ion-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="title"><a href="shop-single-product.html">Funskool Teddy Brown</a>
                                        </h4>
                                        <div class="prices">
                                            <span class="price">$190.12</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            </div>
                            <div class="slide-item">
                                <!-- Start Product Item -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <img src="assets/img/shop/10.png" alt="Image">
                                        <div class="product-action">
                                            <a class="action-quick-view" href="shop-cart.html"><i
                                                    class="ion-ios-cart"></i></a>
                                            <a class="action-quick-view" href="javascript:void(0)"><i
                                                    class="ion-arrow-expand"></i></a>
                                            <a class="action-quick-view" href="shop-wishlist.html"><i
                                                    class="ion-heart"></i></a>
                                            <a class="action-quick-view" href="shop-compare.html"><i
                                                    class="ion-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="title"><a href="shop-single-product.html">Newborn Kit Set</a></h4>
                                        <div class="prices">
                                            <span class="price">$190.12</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            </div>
                            <div class="slide-item">
                                <!-- Start Product Item -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <img src="assets/img/shop/11.png" alt="Image">
                                        <div class="product-action">
                                            <a class="action-quick-view" href="shop-cart.html"><i
                                                    class="ion-ios-cart"></i></a>
                                            <a class="action-quick-view" href="javascript:void(0)"><i
                                                    class="ion-arrow-expand"></i></a>
                                            <a class="action-quick-view" href="shop-wishlist.html"><i
                                                    class="ion-heart"></i></a>
                                            <a class="action-quick-view" href="shop-compare.html"><i
                                                    class="ion-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="title"><a href="shop-single-product.html">Classic Fisher Gift</a>
                                        </h4>
                                        <div class="prices">
                                            <span class="price">$190.12</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            </div>
                            <div class="slide-item">
                                <!-- Start Product Item -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <img src="assets/img/shop/12.png" alt="Image">
                                        <div class="product-action">
                                            <a class="action-quick-view" href="shop-cart.html"><i
                                                    class="ion-ios-cart"></i></a>
                                            <a class="action-quick-view" href="javascript:void(0)"><i
                                                    class="ion-arrow-expand"></i></a>
                                            <a class="action-quick-view" href="shop-wishlist.html"><i
                                                    class="ion-heart"></i></a>
                                            <a class="action-quick-view" href="shop-compare.html"><i
                                                    class="ion-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="title"><a href="shop-single-product.html">Sassy Crib and Floor
                                                Mirror</a></h4>
                                        <div class="prices">
                                            <span class="price">$190.12</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            </div>
                            <div class="slide-item">
                                <!-- Start Product Item -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <img src="assets/img/shop/9.png" alt="Image">
                                        <div class="product-action">
                                            <a class="action-quick-view" href="shop-cart.html"><i
                                                    class="ion-ios-cart"></i></a>
                                            <a class="action-quick-view" href="javascript:void(0)"><i
                                                    class="ion-arrow-expand"></i></a>
                                            <a class="action-quick-view" href="shop-wishlist.html"><i
                                                    class="ion-heart"></i></a>
                                            <a class="action-quick-view" href="shop-compare.html"><i
                                                    class="ion-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="title"><a href="shop-single-product.html">Funskool Teddy Brown</a>
                                        </h4>
                                        <div class="prices">
                                            <span class="price">$190.12</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            </div>
                            <div class="slide-item">
                                <!-- Start Product Item -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <img src="assets/img/shop/10.png" alt="Image">
                                        <div class="product-action">
                                            <a class="action-quick-view" href="shop-cart.html"><i
                                                    class="ion-ios-cart"></i></a>
                                            <a class="action-quick-view" href="javascript:void(0)"><i
                                                    class="ion-arrow-expand"></i></a>
                                            <a class="action-quick-view" href="shop-wishlist.html"><i
                                                    class="ion-heart"></i></a>
                                            <a class="action-quick-view" href="shop-compare.html"><i
                                                    class="ion-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="title"><a href="shop-single-product.html">Newborn Kit Set</a></h4>
                                        <div class="prices">
                                            <span class="price">$190.12</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            </div>
                            <div class="slide-item">
                                <!-- Start Product Item -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <img src="assets/img/shop/11.png" alt="Image">
                                        <div class="product-action">
                                            <a class="action-quick-view" href="shop-cart.html"><i
                                                    class="ion-ios-cart"></i></a>
                                            <a class="action-quick-view" href="javascript:void(0)"><i
                                                    class="ion-arrow-expand"></i></a>
                                            <a class="action-quick-view" href="shop-wishlist.html"><i
                                                    class="ion-heart"></i></a>
                                            <a class="action-quick-view" href="shop-compare.html"><i
                                                    class="ion-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="title"><a href="shop-single-product.html">Classic Fisher Gift</a>
                                        </h4>
                                        <div class="prices">
                                            <span class="price">$190.12</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            </div>
                            <div class="slide-item">
                                <!-- Start Product Item -->
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <img src="assets/img/shop/12.png" alt="Image">
                                        <div class="product-action">
                                            <a class="action-quick-view" href="shop-cart.html"><i
                                                    class="ion-ios-cart"></i></a>
                                            <a class="action-quick-view" href="javascript:void(0)"><i
                                                    class="ion-arrow-expand"></i></a>
                                            <a class="action-quick-view" href="shop-wishlist.html"><i
                                                    class="ion-heart"></i></a>
                                            <a class="action-quick-view" href="shop-compare.html"><i
                                                    class="ion-shuffle"></i></a>
                                        </div>
                                    </div>
                                    <div class="product-info">
                                        <div class="rating">
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                            <span class="fa fa-star"></span>
                                        </div>
                                        <h4 class="title"><a href="shop-single-product.html">Sassy Crib and Floor
                                                Mirror</a></h4>
                                        <div class="prices">
                                            <span class="price">$190.12</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Product Item -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Product Tab Area Wrapper ==-->

        <!--== Start Blog Area Wrapper ==-->
        <section class="blog-area blog-default-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6 m-auto">
                        <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                            <h2 class="title">Latest Blog</h2>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod incididunt ut
                                    labore et dolore magna aliqua. </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" data-aos="fade-up" data-aos-duration="1300">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--== Start Blog Post Item ==-->
                        <div class="post-item">
                            <div class="thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/1.jpg" alt="Image"></a>
                            </div>
                            <div class="content">
                                <div class="meta">By, <a class="author" href="blog.html">June Cha </a><span
                                        class="dots"></span><span class="post-date">25 May, 2121</span></div>
                                <h4 class="title">
                                    <a href="blog-details.html">Baby Planet's toys makes learning so easy</a>
                                </h4>
                                <a class="btn-theme" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                        <!--== End Blog Post Item ==-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--== Start Blog Post Item ==-->
                        <div class="post-item mt-xs-30">
                            <div class="thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/2.jpg" alt="Image"></a>
                            </div>
                            <div class="content">
                                <div class="meta">By, <a class="author" href="blog.html">June Cha </a><span
                                        class="dots"></span><span class="post-date">July 24, 2022</span></div>
                                <h4 class="title">
                                    <a href="blog-details.html">Mother revolves around her children</a>
                                </h4>
                                <a class="btn-theme" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                        <!--== End Blog Post Item ==-->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <!--== Start Blog Post Item ==-->
                        <div class="post-item mt-md-30">
                            <div class="thumb">
                                <a href="blog-details.html"><img src="assets/img/blog/3.jpg" alt="Image"></a>
                            </div>
                            <div class="content">
                                <div class="meta">By, <a class="author" href="blog.html">June Cha </a><span
                                        class="dots"></span><span class="post-date">January 28, 2022</span></div>
                                <h4 class="title">
                                    <a href="blog-details.html">Learn while you grow toys Baby Planet</a>
                                </h4>
                                <a class="btn-theme" href="blog-details.html">Read More</a>
                            </div>
                        </div>
                        <!--== End Blog Post Item ==-->
                    </div>
                </div>
            </div>
        </section>
        <!--== End Blog Area Wrapper ==-->
    </main>
@endsection

@push('javascript')
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
@endpush
