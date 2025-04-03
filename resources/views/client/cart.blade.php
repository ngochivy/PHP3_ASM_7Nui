@extends('client.layouts.master')

@section('meta_title')
    Giỏ hàng
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
                            <h2 class="title">Giỏ hàng</h2>
                            <div class="bread-crumbs"><a href="/"> Trang chủ </a><span class="breadcrumb-sep"> //
                                </span><span class="active"> Giỏ hàng</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Page Title Area ==-->

        <!--== Start Cart Area Wrapper ==-->
        <section class="product-area cart-page-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="section-title text-center">
                            <h2 class="title"
                                style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">Giỏ
                                hàng của bạn</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-table-wrap">
                            <div class="cart-table table-responsive">
                                <table>
                                    @if (empty($cart) || count($cart) == 0)
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                <strong>Giỏ hàng của bạn đang trống.</strong>
                                            </td>
                                        </tr>
                                    @else
                                        <thead>
                                            <tr>
                                                <th class="width-thumbnail"></th>
                                                <th class="width-name"
                                                    style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">
                                                    Sản phẩm</th>
                                                <th
                                                    class="width-price"style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">
                                                    Đơn giá</th>
                                                <th
                                                    class="width-quantity"style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">
                                                    Số lượng</th>
                                                <th
                                                    class="width-subtotal"style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">
                                                    Thành tiền</th>
                                                <th class="width-remove"></th>
                                            </tr>
                                        </thead>
                                        <tbody>


                                            @foreach ($cart as $item)
                                                <tr>
                                                    <td class="product-thumbnail">
                                                        <a href="shop-single-product.html">
                                                            <img src="{{ asset("storage/{$item['thumbnail']}") }}"
                                                                alt="Image">
                                                        </a>
                                                    </td>
                                                    <td class="product-name">
                                                        <h5><a
                                                                href="/product_detail/{{ $item['slug'] }}">{{ $item['title'] }}</a>
                                                        </h5>
                                                    </td>
                                                    <td class="product-price">
                                                        <span
                                                            class="amount">{{ number_format($item['price'] - $item['sale_price']) }}</span>
                                                    </td>
                                                    <td class="cart-quality">
                                                        <div class="product-details-quality">
                                                            <input type="number" class="input-text quantity-change"
                                                                step="1" min="1" max="100" name="qty"
                                                                value="{{ $item['qty'] }}" data-id="{{ $item['id'] }}"
                                                                title="Số lượng" placeholder="">
                                                        </div>
                                                    </td>
                                                    <td class="product-total">
                                                        <span>{{ number_format($item['total']) }}</span>
                                                    </td>
                                                    <td class="product-remove">
                                                        @if (!empty($cart) && count($cart) > 0)
                                                            <a href="{{ route('cart.clear') }}" class="btn btn-danger"
                                                                onclick="return confirm('Bạn có chắc chắn muốn xóa toàn bộ giỏ hàng?');">
                                                                <i class="ion-ios-trash-outline">
                                                                </i>
                                                            </a>
                                                        @endif
                                                    </td>
                                                </tr>
                                            @endforeach
                                    @endif
                                    </tbody>

                                </table>
                            </div>
                        </div>
                        <div class="cart-shiping-update-wrapper">
                            <div class="cart-shiping-btn continure-btn">
                                <a class="btn btn-link" href="/product"><i class="ion-ios-arrow-left"></i> Tiếp tục mua
                                    hàng</a>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4">
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="cart-calculate-discount-wrap mb-40">
                            <h4>Tính phí vận chuyển</h4>
                            <div class="calculate-discount-content">
                                <div class="select-style">
                                    <select class="select-active">
                                        <option>Việt Nam</option>
                                        <option>Hoa Kỳ</option>
                                        <option>Nhật Bản</option>
                                        <option>Hàn Quốc</option>
                                        <option>Trung Quốc</option>
                                    </select>
                                </div>
                                <div class="select-style">
                                    <select class="select-active">
                                        <option>Tỉnh/Thành phố</option>
                                        <option>Hà Nội</option>
                                        <option>TP.Hồ Chí Minh</option>
                                        <option>Đà Nẵng</option>
                                        <option>Hải Phòng</option>
                                    </select>
                                </div>
                                <div class="input-style">
                                    <input type="text" placeholder="Quận/Huyện">
                                </div>
                                <div class="input-style">
                                    <input type="text" placeholder="Mã bưu điện">
                                </div>
                                <div class="calculate-discount-btn">
                                    <a class="btn btn-link" href="#/">Cập nhật</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="cart-calculate-discount-wrap mb-40">
                            <h4>Mã giảm giá</h4>
                            <div class="calculate-discount-content">
                                <p>Nhập mã giảm giá nếu bạn có</p>
                                <div class="input-style">
                                    <input type="text" placeholder="Nhập mã giảm giá">
                                </div>
                                <div class="calculate-discount-btn">
                                    <a class="btn btn-link" href="#/">Áp dụng</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="grand-total-wrap">
                            <div class="grand-total-content">
                                <h3>Tạm tính <span>{{ number_format($totalMoney) }}</span></h3>
                                <div class="grand-shipping">
                                    <span>Vận chuyển</span>
                                    <ul>
                                        <li><input type="radio" name="shipping" value="info"
                                                checked="checked"><label>Miễn phí vận chuyển</label></li>
                                        <li><input type="radio" name="shipping" value="info"><label>Phí cố định:
                                                <span>50.000₫</span></label></li>
                                        <li><input type="radio" name="shipping" value="info"><label>Nhận tại cửa
                                                hàng: <span>0₫</span></label></li>
                                    </ul>
                                </div>
                                <div class="shipping-country">
                                    <p>Giao hàng tới Việt Nam</p>
                                </div>
                                <div class="grand-total">
                                    <h4>Tổng cộng <span>{{ number_format($totalMoney) }}</span></h4>
                                </div>
                            </div>
                            <div class="grand-total-btn">
                                <a class="btn btn-link" href="shop-checkout.html">Tiến hành thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Cart Area Wrapper ==-->
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
