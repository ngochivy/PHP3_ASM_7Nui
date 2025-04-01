@extends('client.layouts.master')

@section('meta_title')
Bài Viết
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
<!--== Start Blog Area Wrapper ==-->
<section class="blog-area blog-grid-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-content-area">
                    <div class="row">

                        @foreach ($blogs as $b)
                        <div class="col-sm-6">
                            <!--== Start Blog Post Item ==-->
                            <div class="post-item">
                                <div class="thumb">
                                    <a href="/blog/{{ $b->id }}"><img src="{{ asset("storage/{$b->image}") }}" alt="Image" style="height: 270px; width: auto;"></a>
                                </div>
                                <div class="content">
                                    <div class="meta">Tác giả: <a class="author" href="blog.html">{{ $b->author_name }} </a><span class="dots"></span><span class="post-date">{{ $b->created_at }}</span></div>
                                    <h4 class="title" style="display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                        <a href="/blog/{{ $b->id }}" style="color: inherit; text-decoration: none;">{{ $b->title }}</a>
                                    </h4>
                                    <a class="btn-theme" href="/blog/{{ $b->id }}">Xem thêm</a>
                                </div>
                            </div>
                            <!--== End Blog Post Item ==-->
                        </div>
                        @endforeach



                    </div>
                    <div class="row mb-md-50">
                        <div class="col-lg-12">
                            <div class="pagination-area">
                                <nav>
                                    <ul class="page-numbers">
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
            </div>
            <div class="col-lg-4">
                <div class="sidebar-area blog-sidebar-area">
                    <div class="widget-item">
                        <div class="widget-body">
                            <div class="widget-search-box">
                                <form action="#" method="post">
                                    <div class="form-input-item">
                                        <label for="search2" class="sr-only">Tìm kiếm</label>
                                        <input type="text" id="search2" placeholder="Tìm kiếm">
                                        <button type="submit" class="btn-src">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="widget-item widget-item2">
                        <div class="widget-title blog-post-title">
                            <h3 class="title" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">Lưu trữ</h3>
                        </div>
                        <div class="widget-body">
                            <div class="widget-archives">
                                <ul>
                                    <li><a href="blog.html">Tháng 1/2018</a></li>
                                    <li><a href="blog.html">Tháng 2/2019</a></li>
                                    <li><a href="blog.html">Tháng 3/2020</a></li>
                                    <li><a href="blog.html">Tháng 4/2021</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="widget-item">
                        <div class="widget-title blog-post-title">
                            <h3 class="title" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">Bài viết gần đây</h3>
                        </div>
                        <div class="widget-body">
                            @foreach ($blogs as $b)
                            <div class="widget-blog-post">
                                <div class="thumb">
                                    <a href="/blog/{{ $b->id }}"><img src="{{ asset("storage/{$b->image}") }}" alt="Image" style="width:100px; height: auto;"></a>
                                </div>
                                <div class="content">
                                    <span>{{ $b->created_at }}</span>
                                    <h4><a href="/blog/{{ $b->id }}">{{ $b->title }}</a></h4>
                                </div>
                                @endforeach


                            </div>
                        </div>
                        <!-- <div class="widget-item widget-item2">
                            <div class="widget-title blog-post-title">
                                <h3 class="title" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">Danh mục</h3>
                            </div>
                            <div class="widget-body">
                                <div class="widget-categories">
                                    <ul>
                                        <li><a href="blog.html">Đồ chơi trẻ em</a></li>
                                        <li><a href="blog.html">Quần áo trẻ em</a></li>
                                        <li><a href="blog.html">Tã lót trẻ em</a></li>
                                        <li><a href="blog.html">Sách trẻ em</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                        <div class="widget-item">
                            <div class="widget-title blog-post-title">
                                <h3 class="title" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">Đăng ký nhận tin</h3>
                            </div>
                            <div class="widget-body">
                                <div class="widget-newsletter">
                                    <div class="newsletter-form">
                                        <form action="#">
                                            <input class="form-control" type="email" placeholder="Nhập email của bạn">
                                            <button class="btn btn-theme" type="submit" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">Đăng ký ngay</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="widget-item widget-item2 mb-md-0">
                            <div class="widget-title blog-post-title">
                                <h3 class="title" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-weight: bold;">Thẻ</h3>
                            </div>
                            <div class="widget-body">
                                <div class="widget-tags">
                                    <ul>
                                        <li><a href="blog.html">Trẻ em</a></li>
                                        <li><a class="babyfashion" href="blog.html">Thời trang trẻ em</a></li>
                                        <li><a class="toy" href="blog.html">Đồ chơi</a></li>
                                        <li><a href="blog.html">Đồ chơi trẻ em</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
</section>
<!--== End Blog Area Wrapper ==-->
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