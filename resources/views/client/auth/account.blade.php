@extends('client.layouts.master')

@section('meta_title')
    Tài khoản
@endsection

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
                                <a href="/">Trang chủ</a>
                                <span class="breadcrumb-sep"> // </span>
                                <span class="active">Tài Khoản Của Tôi</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== Kết thúc Khu vực Tiêu đề Trang ==-->

        <!--== Bắt đầu Khu vực Đăng nhập / Đăng ký ==-->
        <section class="login-register-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 login-register-border">
                        <div class="login-register-content">
                            <div class="login-register-title mb-30">
                                <h2>Đăng nhập</h2>
                                <p>Chào mừng trở lại! Vui lòng nhập tên người dùng và mật khẩu để đăng nhập.</p>
                            </div>
                            <div class="login-register-style login-register-pr">
                                <form action="#" method="post">
                                    <div class="login-register-input">
                                        <input type="text" name="user-name"
                                            placeholder="Tên người dùng hoặc địa chỉ email">
                                    </div>
                                    <div class="login-register-input">
                                        <input type="password" name="user-password" placeholder="Mật khẩu">
                                        <div class="forgot">
                                            <a href="#">Quên mật khẩu?</a>
                                        </div>
                                    </div>
                                    <div class="remember-me-btn">
                                        <input type="checkbox">
                                        <label>Ghi nhớ tôi</label>
                                    </div>
                                    <div class="btn-style-3">
                                        <button class="btn" onclick="window.location.href='my-account.html'"
                                            type="button">
                                            Đăng nhập
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="login-register-content login-register-pl">
                            <div class="login-register-title mb-30">
                                <h2>Đăng ký</h2>
                                <p>Tạo tài khoản mới ngay hôm nay để tận hưởng trải nghiệm mua sắm cá nhân hóa.</p>
                            </div>
                            <div class="login-register-style">
                                <form action="#" method="post">
                                    <div class="login-register-input">
                                        <input type="text" name="user-name" placeholder="Tên người dùng">
                                    </div>
                                    <div class="login-register-input">
                                        <input type="text" name="user-email" placeholder="Địa chỉ email">
                                    </div>
                                    <div class="login-register-input">
                                        <input type="password" name="user-password" placeholder="Mật khẩu">
                                    </div>
                                    <div class="login-register-paragraph">
                                        <p>Dữ liệu cá nhân của bạn sẽ được sử dụng để hỗ trợ trải nghiệm của bạn trên trang
                                            web này,
                                            quản lý quyền truy cập vào tài khoản của bạn và cho các mục đích khác được mô tả
                                            trong
                                            <a href="#">chính sách bảo mật</a> của chúng tôi.
                                        </p>
                                    </div>
                                    <div class="btn-style-3">
                                        <button class="btn" onclick="window.location.href='my-account.html'"
                                            type="button">
                                            Đăng ký
                                        </button>
                                    </div>
                                </form>
                                <div class="register-benefits">
                                    <h3>Đăng ký ngay hôm nay để nhận những lợi ích:</h3>
                                    <p>Bảo vệ người mua của Loke giúp bạn yên tâm từ lúc đặt hàng đến khi nhận hàng. Đăng ký
                                        hoặc đăng nhập để:</p>
                                    <ul>
                                        <li><i class="pe-7s-check icons"></i> Thanh toán nhanh chóng</li>
                                        <li><i class="pe-7s-check icons"></i> Theo dõi đơn hàng dễ dàng</li>
                                        <li><i class="pe-7s-check icons"></i> Lưu giữ lịch sử mua hàng</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== Kết thúc Khu vực Đăng nhập / Đăng ký ==-->
    </main>
@endsection

