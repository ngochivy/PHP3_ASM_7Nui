@extends('client.layouts.master')

@section('meta_title')
Trang chủ
@endsection

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


    <!--== End Category Area Wrapper ==-->

    <!--== Start Product Tab Area Wrapper ==-->
    <section class="product-area product-style1-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="title">Sản Phẩm Mới</h2>
                        <div class="desc">
                            <p>Khám phá những sản phẩm mới nhất và ưu đãi hấp dẫn</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="product-tab-content">

                        <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up"
                            data-aos-duration="1000">
                            @foreach ($category as $index => $c)
                            @if ($index % 4 == 0 && $index != 0)
                    </div> <!-- Đóng div của nhóm cũ -->
                    @endif
                    @if ($index % 4 == 0)
                    <div class="row w-100"> <!-- Mở div mới mỗi khi có 4 phần tử -->
                        @endif
                        <li class="nav-item col-3" role="presentation">
                            <button class="nav-link" id="category-{{ $c->id }}-tab" data-bs-toggle="tab"
                                data-bs-target="#category-{{ $c->id }}" type="button" role="tab"
                                aria-controls="category-{{ $c->id }}"
                                aria-selected="true">{{ $c->name }}</button>
                        </li>
                        @endforeach
                        </ul>


                        <div class="tab-content" id="myTabContent" data-aos="fade-up" data-aos-duration="1300">
                            <div class="tab-pane fade show active" id="our-features" role="tabpanel"
                                aria-labelledby="our-features-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="product-list">
                                            <div class="row">
                                                @foreach ($product->take(8) as $p) <!-- Giới hạn số lượng sản phẩm hiển thị là 8 -->
                                                <div class="col-lg-3 col-md-4 col-sm-6">
                                                    <!-- Start Product Item -->
                                                    <div class="product-item">
                                                        <div class="product-thumb">
                                                            <img src="{{ asset('storage/' . $p->thumbnail) }}" alt="Image">
                                                            <div class="product-action">
                                                                <a class="action-quick-view" href="shop-cart.html"><i class="ion-ios-cart"></i></a>
                                                                <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>
                                                                <a class="action-quick-view" href="shop-compare.html"><i class="ion-shuffle"></i></a>
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
                                                            <h4 class="title">
                                                                <a href="/product_detail/{{ $p->slug }}">{{ Str::limit($p->title, 30) }}</a>
                                                            </h4>
                                                            <div class="prices">
                                                                <span class="old-price" style="text-decoration: line-through; color: gray;">
                                                                    {{ number_format($p->price) }}vnđ
                                                                </span>
                                                                <span class="new-price" style="color: red; font-weight: bold;">
                                                                    {{ number_format($p->price - $p->sale_price) }}vnđ
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- End Product Item -->
                                                </div>
                                                @endforeach
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
                        <h2 class="title">Ưu Đãi Của Ngày</h2>
                        <p><span>GIẢM ĐẾN 35%</span> Cho Tất Cả Các Sản Phẩm Dành Cho Trẻ Em</p>
                        <div class="countdown-content">
                            <ul class="countdown-timer">
                                <li><span class="days">00</span>
                                    <p class="days_text">Ngày</p>
                                </li>
                                <li><span class="hours">00</span>
                                    <p class="hours_text">Giờ</p>
                                </li>
                                <li><span class="minutes">00</span>
                                    <p class="minutes_text">Phút</p>
                                </li>
                                <li><span class="seconds">00</span>
                                    <p class="seconds_text">Giây</p>
                                </li>
                            </ul>
                        </div>
                        <a class="btn-theme" href="shop.html">Mua Ngay</a>
                    </div>
                </div>
            </div>
            <div class="shape-group">
                <div class="shape-style3">
                    <img src="assets/img/divider/1.png" alt="Hình ảnh">
                </div>
                <div class="shape-style4">
                    <img src="assets/img/divider/2.png" alt="Hình ảnh">
                </div>
            </div>
        </div>
        <div class="shape-group">
            <div class="shape-style1" data-bg-img="assets/img/divider/shape1.png"></div>
            <div class="shape-style2" data-bg-img="assets/img/divider/shape2.png"></div>
        </div>
    </section>
    <!--== Kết thúc khu vực phân cách ==-->


    <!--== Bắt đầu khu vực danh mục ==-->
    <section class="category-area product-category2-area" data-aos="fade-up" data-aos-duration="1000">
        <div class="container">
            <div class="row category-items2">
                <div class="col-md-6">
                    <div class="category-item">
                        <div class="thumb">
                            <img class="w-100" src="assets/img/category/4.png" alt="Hình ảnh">
                            <div class="content">
                                <div class="contact-info">
                                    <h2 class="title text-white">Bộ Sưu Tập</h2>
                                    <h4 class="price text-white">Giảm Giá <span>20%</span></h4>
                                </div>
                                <a class="btn-theme" href="shop.html">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="category-item mt-sm-50">
                        <div class="thumb">
                            <img class="w-100" src="assets/img/category/5.png" alt="Hình ảnh">
                            <div class="content">
                                <div class="contact-info">
                                    <h2 class="title">Bộ Sưu Tập</h2>
                                    <h4 class="price">Giảm Giá <span>30%</span></h4>
                                </div>
                                <a class="btn-theme" href="shop.html">Mua Ngay</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== Kết thúc khu vực danh mục ==-->

    <!--== End Category Area Wrapper ==-->

    <!--== Start Product Tab Area Wrapper ==-->
    <section class="product-area product-style2-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 m-auto">
                    <div class="section-title text-center" data-aos="fade-up" data-aos-duration="1000">
                        <h2 class="title">Sản Phẩm Đang Hot</h2>
                        <div class="desc">
                            <p>Khám phá những sản phẩm mới nhất và ưu đãi hấp dẫn</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="product-tab1-slider" data-aos="fade-up" data-aos-duration="1500">
                        @foreach ($product as $p)
                        <div class="slide-item">
                            <!-- Start Product Item -->



                            <div class="product-item">

                                <div class="product-thumb">
                                    <img src="{{ asset('storage/' . $p->thumbnail) }}" alt="Image">
                                    <div class="product-action">
                                        <a class="action-quick-view" href="shop-cart.html"><i class="ion-ios-cart"></i></a>
                                        <a class="action-quick-view" href="javascript:void(0)"><i class="ion-arrow-expand"></i></a>

                                        <a class="action-quick-view" href="shop-compare.html"><i class="ion-shuffle"></i></a>
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
                                    <a href="/product_detail/{{ $p->slug }}">{{ Str::limit($p->title, 30) }}</a>
                                    <div class="prices">
                                        <span class="old-price" style="text-decoration: line-through; color: gray;">{{ number_format($p->price) }}vnđ</span>
                                        <span class="new-price" style="color: red; font-weight: bold;">{{ number_format($p->price -  $p->sale_price) }}vnđ</span>
                                    </div>
                                </div>

                            </div>

                            <!-- End Product Item -->
                        </div>
                        @endforeach

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
                        <h2 class="title">Bài Viết Mới Nhất</h2>
                        <div class="desc">
                            <p>Khám phá những sản phẩm mới nhất và ưu đãi hấp dẫn</p>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row" data-aos="fade-up" data-aos-duration="1300">
                @foreach ($blog as $b)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <!--== Start Blog Post Item ==-->
                    <div class="post-item">
                        <div class="thumb">
                            <a href="blog-details.html"><img src="{{ asset('storage/' . $b->image) }}" alt="Image"></a>
                        </div>
                        <div class="content">
                            <div class="meta">Bởi, <a class="author" href="/blog">Hoàng Nam </a><span
                                    class="dots"></span><span class="post-date">{{ $b->created_at }}</span></div>
                            <h4 class="title">
                                <a href="/product_detail/{{ $b->slug }}">{{ Str::limit($b->title, 20) }}</a>
                            </h4>
                            <a class="btn-theme" href="/blog/{{ $b->id }}">Đọc Thêm</a>
                        </div>
                    </div>
                    <!--== End Blog Post Item ==-->
                </div>

                @endforeach
            </div>
        </div>
    </section>

    <!--== End Blog Area Wrapper ==-->
</main>

@if (session('success_message'))
<div id="successPopup"
    class="position-fixed top-50 start-50 translate-middle bg-white border border-success shadow-lg rounded-4 p-4"
    style="z-index: 1000; width: 100%; max-width: 550px; transition: opacity 0.5s ease;">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="text-success mb-0">🎉 Thanh toán thành công!</h5>
        <button type="button" class="btn-close" onclick="document.getElementById('successPopup').remove()"
            aria-label="Close"></button>
    </div>
    <div class="table-responsive">
        {!! session('success_message') !!}
    </div>
    <div class="mt-4 text-end">
        <a href="{{ url('/product') }}" class="btn btn-outline-success btn-sm">Tiếp tục mua hàng</a>
        {{-- <a href="{{ url('/order/' . $orderId) }}" class="btn btn-success btn-sm">Xem đơn hàng</a> --}}
    </div>
</div>
@endif


@endsection

@push('javascript')
<Script>
    document.addEventListener('DOMContentLoaded', function() {
        // Show success toast if session message exists
        @if(session('success_message'))
        const toastEl = document.getElementById('toast');
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
        @endif

        // Success Popup fade-out and remove after 5 seconds
        const popup = document.getElementById('successPopup');
        if (popup) {
            setTimeout(() => {
                popup.style.opacity = '0';
                setTimeout(() => popup.remove(), 500); // fade-out rồi xoá
            }, 5000); // after 5 seconds
        }
    });
</Script>


@endpush