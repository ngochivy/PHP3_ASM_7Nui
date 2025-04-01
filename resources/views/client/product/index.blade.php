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
        <!--== Start Page Title Area ==-->
        <section class="page-title-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 m-auto">
                        <div class="page-title-content text-center">
                            <h2 class="title">Sản Phẩm</h2>
                            <div class="bread-crumbs"><a href="index.html"> Trang chủ  </a><span class="breadcrumb-sep"> //
                                </span><span class="active"> Sản phẩm</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Page Title Area ==-->

        <!--== Start Shop Area Wrapper ==-->
        <div class="product-area product-grid-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 order-0 order-lg-1">
                        <div class="shop-toolbar-wrap">
                            <div class="product-showing-status">
                                <p class="count-result"><span id="current-count">12</span> Sản phẩm trong tổng số <span id="total-count">30</span></p>
                            </div>
                            <div class="product-view-mode">
                                <nav>
                                    <div class="nav nav-tabs active" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="column-three-tab" data-bs-toggle="tab"
                                            data-bs-target="#column-three" type="button" role="tab"
                                            aria-controls="column-three" aria-selected="true"><i class="fa fa-th"></i></button>
                                        <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-list" type="button" role="tab"
                                            aria-controls="nav-list" aria-selected="false"><i class="fa fa-list"></i></button>
                                        <button class="nav-link" id="column-two-tab" data-bs-toggle="tab"
                                            data-bs-target="#column-two" type="button" role="tab"
                                            aria-controls="column-two" aria-selected="true"><i class="fa fa-th-large"></i></button>
                                    </div>
                                </nav>
                            </div>
                            <div class="product-sorting-menu product-sorting">
                                <span class="current">Sắp xếp theo: <span> Mặc định <i class="fa fa-angle-down"></i></span></span>
                                <ul>
                                    <li class="active"><a href="#">Sắp xếp theo mặc định</a></li>
                                    <li><a href="#">Sắp xếp theo phổ biến</a></li>
                                    <li><a href="#">Sắp xếp theo đánh giá</a></li>
                                    <li><a href="#">Sắp xếp theo mới nhất</a></li>
                                    <li><a href="#">Sắp xếp theo giá: <i class="lastudioicon-arrow-up"></i></a></li>
                                    <li><a href="#">Sắp xếp theo giá: <i class="lastudioicon-arrow-down"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="column-three" role="tabpanel" aria-labelledby="column-three-tab">
                                <div class="row" id="product-list">
                                    @foreach($products as $p )
                                    <div class="col-md-4 mb-4">
                                        <div class="product-item">
                                            <div class="product-thumb">
                                                <img src="{{ asset('storage/' . $p->thumbnail) }}" alt="Image">
                                                <div class="product-action">
                                                    <a class="action-quick-view" href="shop-cart.html"><i class="ion-ios-cart"></i></a>
                                                    <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                    <a class="action-quick-view" href="shop-compare.html"><i class="ion-shuffle"></i></a>
                                                </div>
                                            </div>
                                            <div class="product-info text-center">
                                                <span href="/category">{{ $p->category->name }}</span> 
                                                <div class="rating">
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                    <span class="fa fa-star"></span>
                                                </div>                            
                                                <h4 class="title">
                                                    <a href="/product_detail/{{ $p->slug }}">{{ Str::limit($p->title, 30) }}</a> 
                                                </h4>
                                                <div class="prices">
                                                    <span class="old-price" style="text-decoration: line-through; color: gray;">{{ number_format($p->price) }}vnđ</span>
                                                    <span class="new-price" style="color: red; font-weight: bold;">{{ number_format($p->price -  $p->sale_price) }}vnđ</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="pagination-area mb-md-50">
                                    <nav>
                                        <ul class="page-numbers justify-content-end">
                                            <li>
                                                <a class="page-number active" href="blog.html">1</a>
                                            </li>
                                            <li>
                                                <a class="page-number" href="blog.html">2</a>
                                            </li>
                                            <li>
                                                <a class="page-number" href="blog.html">3</a>
                                            </li>
                                            <li>
                                                <a class="page-number next" href="blog.html">
                                                    <i class="fa fa-angle-right"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 order-1 order-lg-0">
                        <div class="sidebar-area shop-sidebar-area">
                            <div class="widget-item">
                                <div class="widget-title">
                                    <h3 class="title">Danh mục sản phẩm</h3>
                                </div>
                                <div class="widget-body">
                                    <div class="widget-categories">
                                        <ul>
                                            @foreach($category as $c)
                                            <li><a href="shop.html">{{ $c->name }}</a></li>
                                            @endforeach
                                           
                                           
                                    </div>
                                </div>
                            </div>
                            <div class="widget-item">
                                <div class="widget-filter">
                                    <div class="widget-title">
                                        <h3 class="title">Lọc theo giá</h3>
                                    </div>
                                    <div class="widget-body">
                                        <div class="widget-price-filter">
                                            <div class="slider-labels">
                                                <div class="caption">
                                                    <span id="slider-range-value1"></span>
                                                </div>
                                                <span class="range-separator"></span>
                                                <div class="caption">
                                                    <span id="slider-range-value2"></span>
                                                </div>
                                            </div>
                                            <div class="slider-range" id="slider-range"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                      
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!--== End Shop Area Wrapper ==-->
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


    <!--=== Phan Trang ===-->
    <script src="{{ asset('assets/js/phantrang.js') }}"></script>
    
@endpush
