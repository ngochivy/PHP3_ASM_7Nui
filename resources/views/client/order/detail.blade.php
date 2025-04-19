@extends('client.layouts.master');

@section('meta_title')
    Đơn hàng của tôi
@endsection

@section('content')
    <main class="main-content">
        <!--== Start Page Title Area ==-->
        <section class="page-title-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 m-auto">
                        <div class="page-title-content text-center">
                            <h2 class="title">Đơn hàng của tôi</h2>
                            <div class="bread-crumbs"><a href="{{ route('home') }}"> Trang chủ </a><span
                                    class="breadcrumb-sep"> //
                                </span><span class="active"> Đơn hàng của tôi</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Page Title Area ==-->

        <!--== Start My Account Wrapper ==-->
        <section class="my-account-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <div class="section-title text-center">
                            <h2 class="title">Đơn hàng của tôi</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="" id="orders" role="tabpanel" aria-labelledby="">
                            <div class="myaccount-content">
                                <h3>Lịch sử mua hàng</h3>
                                <div class="myaccount-table table-responsive text-center">
                                    <table class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>ID</th>
                                                <th>Hình ảnh</th>
                                                <th>Tên sản phẩm</th>
                                                <th>Giá</th>
                                                <th>Số lượng</th>
                                                <th>Tổng tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order_detail as $od)
                                                <tr>
                                                    <td>{{$od->id}}</td>
                                                    <td><img src="{{asset ('storage/'.$od->thumbnail)}}" width="50" alt=""></td>
                                                    <td>{{$od->title}}</td>
                                                    <td>{{number_format($od->price)}} đ</td>
                                                    <td>{{$od->qty}}</td>
                                                    <td>{{number_format($od->total)}} đ</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{route('order.index')}}" class="btn btn-sm mt-5" style="background-color:#f379a7;color:white">Quay lại</a>

            </div>
        </section>
        <!--== End My Account Wrapper ==-->
    </main>
@endsection
