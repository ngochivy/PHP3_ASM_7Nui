@extends('client.layouts.master')

@section('meta_title')
    Trang chi tiết sản phẩm
@endsection



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
                            <p class="product-desc">{!! $product->description !!} </p>
                            <div class="prices">
                                <span class="old-price"
                                    style="text-decoration: line-through; font-size:20px; color: gray;">{{ number_format($product->price) }}vnđ</span>
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
                                        <button class="nav-link active" id="product-desc-tab" data-bs-toggle="tab"
                                            data-bs-target="#productDesc" type="button" role="tab"
                                            aria-controls="productDesc" aria-selected="true">Mô tả</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="product-review-tab" data-bs-toggle="tab"
                                            data-bs-target="#productReview" type="button" role="tab"
                                            aria-controls="productReview" aria-selected="false">Bình Luận</button>
                                    </li>
                                </ul>
                                <div class="tab-content product-description-tab-content" id="myTabContent">

                                    <div class="tab-pane fade show active" id="productDesc" role="tabpanel"
                                        aria-labelledby="product-desc-tab">
                                        <div class="product-desc" style="text-align:left">
                                            <p>{!! $product->content !!}</p>
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
                                                <h4 class="title"></h4>
                                                <form action="{{ route('binhluan', $product->id) }}" method="POST">
                                                    @csrf
                                                    <div class="review-form-content">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="rating">
                                                                    <span class="rating-title">Tôi cho sản phẩm này:</span>
                                                                    <div class="star-rating">
                                                                        <input type="hidden" name="rating"
                                                                            id="rating" value="0">
                                                                        <a href="#" class="fa fa-star-o"
                                                                            data-value="1"></a>
                                                                        <a href="#" class="fa fa-star-o"
                                                                            data-value="2"></a>
                                                                        <a href="#" class="fa fa-star-o"
                                                                            data-value="3"></a>
                                                                        <a href="#" class="fa fa-star-o"
                                                                            data-value="4"></a>
                                                                        <a href="#" class="fa fa-star-o"
                                                                            data-value="5"></a>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <textarea class="form-control" id="content" cols="30" name="content" rows="6"
                                                                        placeholder="Nhập bình luận của bạn tại đây..." required>{{ old('content') }}</textarea>
                                                                    @foreach ($errors->get('content') as $error)
                                                                        <span
                                                                            class="error-message">{{ $error }}</span>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group pull-right">
                                                                    <button class="btn btn-theme" type="submit">Bình
                                                                        luận</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>

                                            </div>
                                            <div class="review-content">
                                                <div class="review-item">
                                                    @foreach ($product->comments as $comment)
                                                        <!-- Hiển thị danh sách bình luận -->
                                                        <div id="review-content" class="review-content">
                                                            <div class="review-item border rounded p-3 mb-3 shadow-sm">
                                                                <h5 class="review-date">
                                                                    <ul class="review-rating">
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star"></i></li>
                                                                        <li><i class="fa fa-star-o"></i></li>
                                                                    </ul>
                                                                    <span style="font-weight: 1000">
                                                                        {{ optional($comment->user)->name ?? 'Người dùng' }}
                                                                    </span>
                                                                    <span style="font-weight: 400">
                                                                        đã bình luận vào
                                                                        {{ $comment->created_at->setTimezone('Asia/Ho_Chi_Minh')->format('H:i d/m/Y') }}
                                                                    </span>
                                                                </h5>

                                                                <p class="mb-2">{{ $comment->content }}</p>
                                                                @auth
                                                                    @if (auth()->user()->id === $comment->user_id)
                                                                        <div class="d-flex justify-content-end gap-2">
                                                                            <!-- Nút xóa -->
                                                                            <a href="{{ route('comment.delete', $comment->id) }}"
                                                                                class="btn btn-danger confirm-action"
                                                                                data-title="Xác nhận xóa?"
                                                                                data-text = 'Bạn có muốn xóa sản phẩm'
                                                                                data-confirmButton = "Xác nhận"
                                                                                data-cancelButton = "Hủy">
                                                                                <i class="ion-ios-trash-outline"></i>
                                                                            </a>
                                                                        </div>
                                                                    @endif
                                                                @endauth
                                                            </div>
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
        </section>
        <!--== End Shop Area ==-->

        <!--== Start Shop Area ==-->


        <!--== End Shop Area ==-->
    </main>
@endsection

@push('javascript')
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
    <!-- SweetAlert2 -->
    <script>
        src = "https://cdn.jsdelivr.net/npm/sweetalert2@11" >
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.querySelectorAll('.confirm-action').forEach(function(btn) {
                btn.addEventListener('click', function(e) {
                    e.preventDefault(); // Ngăn chuyển trang ngay lập tức

                    const title = this.dataset.title || 'Xác nhận?';
                    const text = this.dataset.text || 'Bạn có chắc chắn không?';
                    const confirmButton = this.dataset.confirmbutton || 'Xác nhận';
                    const cancelButton = this.dataset.cancelbutton || 'Hủy';

                    Swal.fire({
                        title: title,
                        text: text,
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonText: confirmButton,
                        cancelButtonText: cancelButton,
                        confirmButtonColor: '#d33', // Màu đỏ
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = this.href;
                        }
                    });
                });
            });
        });
    </script>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stars = document.querySelectorAll('.star-rating a');
            const ratingInput = document.getElementById('rating');

            stars.forEach((star, index) => {
                star.addEventListener('click', function(e) {
                    e.preventDefault();
                    const rating = this.dataset.value;
                    ratingInput.value = rating;

                    // reset tất cả sao
                    stars.forEach(s => s.classList.remove('fa-star'));
                    stars.forEach(s => s.classList.add('fa-star-o'));

                    // đổi sao đã chọn thành màu vàng
                    for (let i = 0; i < rating; i++) {
                        stars[i].classList.remove('fa-star-o');
                        stars[i].classList.add('fa-star');
                    }
                });
            });
        });
    </script>



@endpush
