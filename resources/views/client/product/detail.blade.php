@extends('client.layouts.master')

@section('meta_title')
    Trang chi tiết sản phẩm
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
                            <h2 class="title">Chi tiết sản phẩm</h2>
                            <div class="bread-crumbs"><a href="index.html"> Trang chủ </a><span class="breadcrumb-sep"> //
                                </span><span class="active"> Chỉ tiết sản phẩm </span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Page Title Area ==-->

        <!--== Start Shop Area ==-->
        <section class="product-single-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-8 offset-md-2 col-lg-6 offset-lg-0">
                        <div class="single-product-slider">
                            <div class="single-product-thumb">
                                <div class="swiper-container single-product-thumb-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide zoom zoom-hover">
                                            <div class="thumb-item">
                                                <a class="lightbox-image" data-fancybox="gallery"
                                                    href="assets/img/shop/details/1.jpg">
                                                    <img src="{{ asset("storage/{$product->thumbnail}") }}" alt="Image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide zoom zoom-hover">
                                            <div class="thumb-item">
                                                <a class="lightbox-image" data-fancybox="gallery"
                                                    href="assets/img/shop/details/2.jpg">
                                                    <img src="{{ asset("storage/{$product->thumbnail}") }}" alt="Image">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="swiper-slide zoom zoom-hover">
                                            <div class="thumb-item">
                                                <a class="lightbox-image" data-fancybox="gallery"
                                                    href="assets/img/shop/details/3.jpg">
                                                    <img src="{{ asset("storage/{$product->thumbnail}") }}" alt="Image">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="single-product-nav">
                                <div class="swiper-container single-product-nav-slider">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="nav-item">
                                                <img src="{{ asset("storage/{$product->thumbnail}") }}" alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="nav-item">
                                                <img src="{{ asset("storage/{$product->thumbnail}") }}" alt="Image">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="nav-item">
                                                <img src="{{ asset("storage/{$product->thumbnail}") }}" alt="Image">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="single-product-info">
                            <h4 class="title">{{ $product->name }}</h4>

                            <div class="product-rating">
                                <div class="rating">
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                                <div class="review">
                                    <a href="#/">( 5 Đánh giá của khách hàng )</a>
                                </div>
                            </div>

                            <div class="single-product-featured">
                                <ul>
                                    <li><i class="fa fa-check"></i> Miễn phí vận chuyển</li>
                                    <li><i class="fa fa-check"></i> Hỗ trợ 24/7</li>
                                    <li><i class="fa fa-check"></i> Hoàn tiền</li>
                                </ul>
                            </div>
                            <p class="product-desc">{{ $product->description }}</p>
                            <div class="prices">
                                <span class="old-price"
                                    style="text-decoration: line-through; font-size:20px; color: gray;">{{ $product->price }}vnđ</span>
                                <span class="new-price"
                                    style="color: red; font-weight: bold;">{{ number_format($product->price - $product->sale_price) }}vnđ</span>
                            </div>
                            <form action="/cart" method="POST">
                                @csrf
                                <input type="hidden" name="id" value="{{ $product->id }}">
                                <div class="quick-product-action">
                                    <div class="action-top">
                                        <div class="pro-qty">
                                            <input type="text" id="qty" name="qty" title="Số lượng"
                                                value="1" />
                                        </div>
                                        <button type="submit" class="btn btn-theme">Thêm vào giỏ hàng</button>
                                    </div>
                                </div>
                            </form>
                            {{-- @if (session('success'))
                                <div class="alert alert-success mt-2">
                                    {{ session('success') }}
                                </div>
                            @endif --}}
                            <div class="widget">
                                <h3 class="title">Danh mục: {{ $product->category->name }}</h3>

                            </div>

                            <div class="widget">
                                <h3 class="title">Chia sẻ:</h3>
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
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product-description-review">
                                <ul class="nav nav-tabs product-description-tab-menu" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="product-aditional-tab" data-bs-toggle="tab"
                                            data-bs-target="#commentProduct" type="button" role="tab"
                                            aria-selected="false">Thông tin</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="product-desc-tab" data-bs-toggle="tab"
                                            data-bs-target="#productDesc" type="button" role="tab"
                                            aria-controls="productDesc" aria-selected="true">Mô tả</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="product-review-tab" data-bs-toggle="tab"
                                            data-bs-target="#productReview" type="button" role="tab"
                                            aria-controls="productReview" aria-selected="false">Đánh giá (03)</button>
                                    </li>
                                </ul>
                                <div class="tab-content product-description-tab-content" id="myTabContent">
                                    <div class="tab-pane fade" id="commentProduct" role="tabpanel"
                                        aria-labelledby="product-aditional-tab">
                                        <div class="product-desc">
                                            <p>Sản phẩm được thiết kế với chất lượng cao, đảm bảo sự hài lòng của khách
                                                hàng.
                                                Vật liệu an toàn, bền bỉ và phù hợp với mọi lứa tuổi.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="productDesc" role="tabpanel"
                                        aria-labelledby="product-desc-tab">
                                        <div class="product-desc">
                                            <p>Sản phẩm này mang lại trải nghiệm tuyệt vời, giúp phát triển tư duy sáng tạo
                                                và kỹ năng cá nhân. Chất liệu cao cấp, an toàn cho người sử dụng.</p>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="productReview" role="tabpanel"
                                        aria-labelledby="product-review-tab">
                                        <div class="product-review">
                                            <div class="review-header">
                                                <h4 class="title">Đánh giá của khách hàng</h4>
                                                <div class="review-info">
                                                    <ul class="review-rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <span class="review-caption">Dựa trên 1 đánh giá</span>
                                                    <span class="review-write-btn">Viết đánh giá</span>
                                                </div>
                                            </div>
                                            <div class="product-review-form">
                                                <h4 class="title">Viết đánh giá</h4>
                                                <form action="#" method="post">
                                                    <div class="review-form-content">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="reviewFormName">Tên</label>
                                                                    <input class="form-control" id="reviewFormName"
                                                                        type="text" placeholder="Nhập tên của bạn"
                                                                        required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="reviewFormEmail">Email</label>
                                                                    <input class="form-control" id="reviewFormEmail"
                                                                        type="email"
                                                                        placeholder="john.smith@example.com"
                                                                        required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="rating">
                                                                    <span class="rating-title">Đánh giá</span>
                                                                    <span>
                                                                        <a class="fa fa-star-o" href="#/"></a>
                                                                        <a class="fa fa-star-o" href="#/"></a>
                                                                        <a class="fa fa-star-o" href="#/"></a>
                                                                        <a class="fa fa-star-o" href="#/"></a>
                                                                        <a class="fa fa-star-o" href="#/"></a>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="reviewReviewTitle">Tiêu đề đánh giá</label>
                                                                    <input class="form-control" id="reviewReviewTitle"
                                                                        type="text"
                                                                        placeholder="Đặt tiêu đề cho đánh giá của bạn"
                                                                        required="">
                                                                </div>
                                                            </div>
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="reviewFormTextarea">Nội dung đánh giá
                                                                        <span>(1500 ký tự)</span></label>
                                                                    <textarea class="form-control textarea" id="reviewFormTextarea" name="comment" rows="7"
                                                                        placeholder="Viết nhận xét của bạn tại đây" required=""></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group pull-right">
                                                                    <button class="btn btn-theme" type="submit">Gửi đánh
                                                                        giá</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="review-content">
                                                <div class="review-item">
                                                    <ul class="review-rating">
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star"></i></li>
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    </ul>
                                                    <h4 class="title">Cobus Bester</h4>
                                                    <h5 class="review-date"><span>Cobus Bester</span> vào <span>03 Tháng 3,
                                                            2021</span></h5>
                                                    <p>Rất mong chờ để sử dụng sản phẩm này! Cập nhật chủ đề của bạn ngay!
                                                    </p>
                                                    <a class="review-report" href="#/">Báo cáo vi phạm</a>
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
        <!--== End Shop Area ==-->

        <!--== Start Shop Area ==-->


        <!--== End Shop Area ==-->
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Thành công!",
                text: "{{ session('success') }}",
                icon: "success",
                confirmButtonText: "OK",
                timer: 2500
            });
        </script>
    @endif

@endpush
