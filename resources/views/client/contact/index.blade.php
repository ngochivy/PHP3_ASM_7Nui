@extends('client.layouts.master')
@section('meta_title')
Liên hệ
@endsection

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
              {{-- Thông báo thành công --}}
              @if(session('success'))
              <div class="alert alert-success">{{ session('success') }}</div>
              @endif

              {{-- Thông báo lỗi --}}
              @if(session('error'))
              <div class="alert alert-danger">{{ session('error') }}</div>
              @endif
              @if (session('errorformat'))
              <div style="color: red; font-weight: bold;">
                {{ session('errorformat') }}
              </div>
              @endif



              <form class="contact-form-wrapper" id="contact-form" action="{{ route('contact.send') }}" method="POST">
                @csrf
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
                          <input class="form-control @error('name') is-invalid @enderror" type="text" name="name" placeholder="Họ và tên *" value="{{ old('name') }}">
                          @error('name')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input class="form-control @error('email') is-invalid @enderror" type="text" name="email" placeholder="Email *" value="{{ old('email') }}">
                          @error('email')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
                        </div>
                      </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <textarea class="form-control @error('message') is-invalid @enderror" name="message" placeholder="Lời nhắn">{{ old('message') }}</textarea>
                          @error('message')
                          <div class="invalid-feedback">{{ $message }}</div>
                          @enderror
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