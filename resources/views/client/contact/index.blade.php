@extends('client.layouts.master')
@section('meta_title')
Liên hệ
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
              <h2 class="title">Liên hệ</h2>
              <div class="bread-crumbs"><a href="index.html"> Trang chủ </a><span class="breadcrumb-sep"> // </span><span class="active"> Liên hệ</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Contact Area ==-->
    <section class="contact-area">
      <div class="container">
        <div class="contact-page-wrap">
          <div class="row">
            <div class="col-lg-10 m-auto">
              <div class="contact-info-items text-center">
                <div class="row row-gutter-80">
                  <div class="col-sm-6 col-md-4">
                    <div class="contact-info-item">
                      <div class="icon">
                        <img class="icon-img" src="assets/img/icons/5.png" alt="Icon">
                      </div>
                      <h2>Địa chỉ</h2>
                      <div class="content">
                        <p>D1/49, đường số 32, KDC Hoàng Quân, Thường Thạnh, Cái Răng</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="contact-info-item mt-xs-30">
                      <div class="icon">
                        <img class="icon-img" src="assets/img/icons/6.png" alt="Icon">
                      </div>
                      <h2>Số điện thoại</h2>
                      <div class="content">
                        <a href="tel://+00123456789">0349632079</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6 col-md-4">
                    <div class="contact-info-item mt-sm-30">
                      <div class="icon">
                        <img class="icon-img" src="assets/img/icons/7.png" alt="Icon">
                      </div>
                      <h2>Email / Web</h2>
                      <div class="content">
                        <a href="mailto://demo@example.com">kidol@gmail.com</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <div class="contact-map-area">              
              <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1964.701169802676!2d105.75928071838531!3d9.983585453979124!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1743414280615!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-10 m-auto">
              <div class="contact-form">
                <form class="contact-form-wrapper" id="contact-form" action="https://whizthemes.com/mail-php/raju/arden/mail.php" method="post">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="section-title">
                        <h2 class="title">Liên hệ</h2>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input class="form-control" type="text" name="con_name" placeholder="Họ và tên *">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input class="form-control" type="email" name="con_email" placeholder="Email *">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <input class="form-control" type="text" placeholder="Tiêu đề ">
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <textarea class="form-control" name="con_message" placeholder="Lời nhắn"></textarea>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group text-center">
                            <button class="btn btn-theme" type="submit">Gửi</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
              <!-- Message Notification -->
              <div class="form-message"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Contact Area ==-->
  </main>
@endsection



@push('javascript')
<script src="{{asset ('assets/js/modernizr.js')}}"></script>
<!--=== jQuery Min Js ===-->
<script src="{{asset ('assets/js/jquery-main.js')}}"></script>
<!--=== jQuery Migration Min Js ===-->
<script src="{{asset ('assets/js/jquery-migrate.js')}}"></script>
<!--=== Popper Min Js ===-->
<script src="{{asset ('assets/js/popper.min.js')}}"></script>
<!--=== Bootstrap Min Js ===-->
<script src="{{asset ('assets/js/bootstrap.min.js')}}"></script>
<!--=== jquery Appear Js ===-->
<script src="{{asset ('assets/js/jquery.appear.js')}}"></script>
<!--=== jquery Swiper Min Js ===-->
<script src="{{asset ('assets/js/swiper.min.js')}}"></script>
<!--=== jquery Fancybox Min Js ===-->
<script src="{{asset ('assets/js/fancybox.min.js')}}"></script>
<!--=== jquery Aos Min Js ===-->
<script src="{{asset ('assets/js/aos.min.js')}}"></script>
<!--=== jquery Slicknav Js ===-->
<script src="{{asset ('assets/js/jquery.slicknav.js')}}"></script>
<!--=== jquery Countdown Js ===-->
<script src="{{asset ('assets/js/jquery.countdown.min.js')}}"></script>
<!--=== jquery Tippy Js ===-->
<script src="{{asset ('assets/js/tippy.all.min.js')}}"></script>
<!--=== Isotope Min Js ===-->
<script src="{{asset ('assets/js/isotope.pkgd.min.js')}}"></script>
<!--=== Parallax Min Js ===-->
<script src="{{asset ('assets/js/parallax.min.js')}}"></script>
<!--=== Slick  Min Js ===-->
<script src="{{asset ('assets/js/slick.min.js')}}"></script>
<!--=== jquery Wow Min Js ===-->
<script src="{{asset ('assets/js/wow.min.js')}}"></script>
<!--=== jquery Zoom Min Js ===-->
<script src="{{asset ('assets/js/jquery-zoom.min.js')}}"></script>

<!--=== Custom Js ===-->
<script src="{{asset ('assets/js/custom.js')}}"></script>

@endpush