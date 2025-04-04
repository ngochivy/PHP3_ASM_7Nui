@extends('client.layouts.master')

@section('meta_title')
Xác thực email
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
<style>
    .footer-area {
        display: none !important;
    }
</style>

<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Cảm ơn bạn đã đăng ký! Trước khi bắt đầu, vui lòng xác thực địa chỉ email bằng cách nhấp vào liên kết chúng tôi vừa gửi cho bạn. Nếu không nhận được email, chúng tôi sẽ gửi lại cho bạn một email khác.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('Một liên kết xác thực mới đã được gửi đến địa chỉ email bạn đã đăng ký.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Gửi lại email xác thực') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Đăng xuất') }}
            </button>
        </form>
    </div>
</x-guest-layout>
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