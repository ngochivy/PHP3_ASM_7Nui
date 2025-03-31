@extends('client.layouts.master')

@section('meta_title')
    Hồ sơ
@endsection

@push('stylesheet')
    <!--== Favicon ==-->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

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
    <!--== Rangeslider CSS ==-->
    <link href="{{ asset('assets/css/rangeslider.css') }}" rel="stylesheet" />
    <!--== Main Style CSS ==-->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
@endpush

@section('content')
    <main class="main-content">
        <!--== Bắt đầu Khu vực Tiêu đề Trang ==-->
        <section class="page-title-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 m-auto">
                        <div class="page-title-content text-center">
                            <h2 class="title">Tài Khoản Của Tôi</h2>
                            <div class="bread-crumbs">
                                <a href="/"> Trang Chủ </a>
                                <span class="breadcrumb-sep"> // </span>
                                <span class="active"> Tài Khoản Của Tôi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== Kết thúc Khu vực Tiêu đề Trang ==-->

        <!--== Bắt đầu Trình bao bọc Tài Khoản Của Tôi ==-->
        <section class="my-account-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="section-title text-center">
                            <h2 class="title">Tài Khoản Của Tôi</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="myaccount-page-wrapper">
                            <div class="row">
                                <div class="col-lg-3 col-md-4">
                                    <nav>
                                        <div class="myaccount-tab-menu nav nav-tabs" id="nav-tab" role="tablist">
                                            <button class="nav-link active" id="dashboad-tab" data-bs-toggle="tab"
                                                data-bs-target="#dashboad" type="button" role="tab"
                                                aria-controls="dashboad" aria-selected="true">Bảng điều khiển</button>
                                            <button class="nav-link" id="orders-tab" data-bs-toggle="tab"
                                                data-bs-target="#orders" type="button" role="tab"
                                                aria-controls="orders" aria-selected="false"> Đơn hàng</button>
                                            <button class="nav-link" id="download-tab" data-bs-toggle="tab"
                                                data-bs-target="#download" type="button" role="tab"
                                                aria-controls="download" aria-selected="false">Tải xuống</button>
                                            <button class="nav-link" id="payment-method-tab" data-bs-toggle="tab"
                                                data-bs-target="#payment-method" type="button" role="tab"
                                                aria-controls="payment-method" aria-selected="false">Phương thức thanh
                                                toán</button>
                                            <button class="nav-link" id="address-edit-tab" data-bs-toggle="tab"
                                                data-bs-target="#address-edit" type="button" role="tab"
                                                aria-controls="address-edit" aria-selected="false">Địa chỉ</button>
                                            <button class="nav-link" id="account-info-tab" data-bs-toggle="tab"
                                                data-bs-target="#account-info" type="button" role="tab"
                                                aria-controls="account-info" aria-selected="false">Chi tiết tài
                                                khoản</button>
                                            <button class="nav-link" onclick="window.location.href='login-register.html'"
                                                type="button">Đăng xuất</button>
                                        </div>
                                    </nav>
                                </div>
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="nav-tabContent">
                                        <div class="tab-pane fade show active" id="dashboad" role="tabpanel"
                                            aria-labelledby="dashboad-tab">
                                            <div class="myaccount-content">
                                                <h3>Bảng điều khiển</h3>
                                                <div class="welcome">
                                                    <p>Xin chào, <strong>Alex Tuntuni</strong> (Nếu không phải
                                                        <strong>Tuntuni!</strong>
                                                        <a href="login-register.html" class="logout"> Đăng xuất</a>)
                                                    </p>
                                                </div>
                                                <p class="mb-0">Từ bảng điều khiển tài khoản của bạn, bạn có thể dễ dàng
                                                    kiểm tra & xem
                                                    các đơn hàng gần đây, quản lý địa chỉ giao hàng và thanh toán, cũng như
                                                    chỉnh sửa
                                                    mật khẩu và chi tiết tài khoản của mình.</p>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="orders" role="tabpanel"
                                            aria-labelledby="orders-tab">
                                            <div class="myaccount-content">
                                                <h3>Đơn hàng</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Đơn hàng</th>
                                                                <th>Ngày</th>
                                                                <th>Trạng thái</th>
                                                                <th>Tổng cộng</th>
                                                                <th>Hành động</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>1</td>
                                                                <td>22 Tháng 8, 2018</td>
                                                                <td>Chờ xử lý</td>
                                                                <td>$3000</td>
                                                                <td><a href="shop-cart.html"
                                                                        class="check-btn sqr-btn">Xem</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>2</td>
                                                                <td>22 Tháng 7, 2018</td>
                                                                <td>Đã duyệt</td>
                                                                <td>$200</td>
                                                                <td><a href="shop-cart.html"
                                                                        class="check-btn sqr-btn">Xem</a></td>
                                                            </tr>
                                                            <tr>
                                                                <td>3</td>
                                                                <td>12 Tháng 6, 2017</td>
                                                                <td>Đang giữ</td>
                                                                <td>$990</td>
                                                                <td><a href="shop-cart.html"
                                                                        class="check-btn sqr-btn">Xem</a></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="download" role="tabpanel"
                                            aria-labelledby="download-tab">
                                            <div class="myaccount-content">
                                                <h3>Tải xuống</h3>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>Sản phẩm</th>
                                                                <th>Ngày</th>
                                                                <th>Hết hạn</th>
                                                                <th>Tải xuống</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Kidol - Mẫu thương mại điện tử cửa hàng đồ chơi trẻ em
                                                                </td>
                                                                <td>22 Tháng 8, 2022</td>
                                                                <td>Có</td>
                                                                <td><a href="#/" class="check-btn sqr-btn"><i
                                                                            class="fa fa-cloud-download"></i> Tải xuống</a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>HasTech - Mẫu kinh doanh Profolio</td>
                                                                <td>12 Tháng 9, 2022</td>
                                                                <td>Không bao giờ</td>
                                                                <td><a href="#/" class="check-btn sqr-btn"><i
                                                                            class="fa fa-cloud-download"></i> Tải xuống</a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Các phần khác giữ nguyên -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== Kết thúc Trình bao bọc Tài Khoản Của Tôi ==-->
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
