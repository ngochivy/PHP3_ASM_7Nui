@extends('client.layouts.master')

@section('meta_title')
Chi tiết bài viết
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
    <!-- Phần tiêu đề -->
    <section class="page-title-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 m-auto">
                    <div class="page-title-content text-center">
                        <h2 class="title">Bài viết</h2>
                        <div class="bread-crumbs">
                            <a href="/">Trang chủ</a>
                            <span class="breadcrumb-sep"> // </span>
                            <span class="active">Bài viết</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nội dung bài viết -->
    <section class="blog-details-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="post-details-content">
                        <div class="post-details-body">
                            @if($blog->image)
                            <div class="thumb">
                                <img class="w-100" src="{{ asset('storage/'.$blog->image) }}" alt="{{ $blog->title }}">
                            </div>
                            @endif

                            <div class="content">
                                <div class="meta">
                                    Tác giả: <a class="author" href="#">{{ $blog->author_name }}</a>
                                    <span class="dots"></span>
                                    <span class="post-date">{{ date('d/m/Y', strtotime($blog->created_at)) }}</span>
                                </div>
                                <h4 class="title">{{ $blog->title }}</h4>

                                <!-- Hiển thị nội dung HTML -->
                                <div class="post-content">
                                    {!! $blog->content !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Phần bài viết liên quan -->
                    @if(count($relatedBlogs) > 0)
                    <div class="related-posts mt-5">
                        <h3>Bài viết liên quan</h3>
                        <div class="row">
                            @foreach($relatedBlogs as $related)
                            <div class="col-md-4">
                                <div class="related-post">
                                    @if($related->image)
                                    <img src="{{ asset('storage/'.$related->image) }}" alt="{{ $related->title }}" class="img-fluid">
                                    @endif
                                    <h5><a href="{{ route('blog.show', $related->id) }}">{{ $related->title }}</a></h5>
                                    <small>{{ date('d/m/Y', strtotime($related->created_at)) }}</small>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <div class="comment-area">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="comment-view-area">
                                    <h2 class="title">3 Bình luận</h2>
                                    <div class="comment-content">
                                        <div class="single-comment">
                                            <div class="author-info">
                                                <div class="thumb">
                                                    <img src="assets/img/blog/details/1.png" alt="Ảnh đại diện">
                                                </div>
                                                <div class="author-details border-bottom">
                                                    <ul>
                                                        <li>Aidyn Cody <span> - 25/05/2121</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <a class="btn-theme" href="#/">Trả lời</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content comment-content-style2">
                                        <div class="single-comment">
                                            <div class="author-info">
                                                <div class="thumb">
                                                    <img src="assets/img/blog/details/2.png" alt="Ảnh đại diện">
                                                </div>
                                                <div class="author-details">
                                                    <ul>
                                                        <li>Jivan Cody <span> - 25/05/2121</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <a class="btn-theme" href="#/">Trả lời</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="comment-content">
                                        <div class="single-comment">
                                            <div class="author-info">
                                                <div class="thumb pt-38">
                                                    <img src="assets/img/blog/details/3.png" alt="Ảnh đại diện">
                                                </div>
                                                <div class="author-details border-top pt-37">
                                                    <ul>
                                                        <li>Rose Cody <span> - 25/05/2121</span></li>
                                                    </ul>
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                                    <a class="btn-theme" href="#/">Trả lời</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-form-wrap mb-lg-0">
                                    <form class="comment-form-wrapper" id="comment-form" action="#" method="post">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="section-title m-0">
                                                    <h2 class="title" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">Để lại bình luận</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" placeholder="Họ tên *" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <input class="form-control" type="email" placeholder="Email *" required>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" placeholder="Tiêu đề (Không bắt buộc)">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <textarea class="form-control" placeholder="Nội dung bình luận" required></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <button class="btn btn-theme" type="submit" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">Gửi bình luận</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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