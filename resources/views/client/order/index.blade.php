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
                                                <th>Mã đơn hàng</th>
                                                <th>Email</th>
                                                <th>Số điện thoại</th>
                                                <th>Địa chỉ</th>
                                                <th>Thời gian</th>
                                                <th>Trạng thái</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($order) > 0)
                                                @foreach ($order as $o)
                                                    <tr>
                                                        <td>{{ $o->id }}</td>
                                                        <td>{{ $o->code }}</td>
                                                        <td>{{ $o->email }}</td>
                                                        <td>{{ $o->phone }}</td>
                                                        <td>{{ $o->address }}</td>
                                                        <td>{{ $o->created_at->setTimezone('Asia/Ho_Chi_Minh')->format('H:i d/m/Y') }}
                                                        </td>
                                                        <td><a href=""
                                                                class="check-btn sqr-btn ">{{ $o->status }}</a></td>
                                                        <td>
                                                            <div class="d-flex gap-2">
                                                                <a href="{{ route('order.detail', $o->id) }}"
                                                                    class="btn btn-sm"
                                                                    style="background-color:#f379a7;color:white">Xem</a>
                                                                <a href="{{ route('order.delete', $o->id) }}"
                                                                    class="btn btn-sm confirm-action"
                                                                    style="background-color:#f379a7;color:white"
                                                                    data-title="Xác nhận hủy?"
                                                                    data-text="Bạn có muốn hủy đơn hàng"
                                                                    data-confirmButton = "Xác nhận"
                                                                    data-cancelButton = "Hủy">Hủy</a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td colspan="7" class="text-center">Không có đơn hàng nào</td>
                                                </tr>
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End My Account Wrapper ==-->
    </main>
@endsection

@push('javascript')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const clearCartBtn = document.querySelector('.confirm-action');

            clearCartBtn.addEventListener('click', function(e) {
                e.preventDefault(); // Ngăn hành động mặc định

                const title = this.dataset.title || 'Bạn chắc chứ?';
                const text = this.dataset.text || 'Thao tác này không thể hoàn tác.';
                const confirmText = this.dataset.confirmButton || 'Xác nhận';
                const cancelText = this.dataset.cancelButton || 'Hủy';
                const img = this.dataset.img;

                Swal.fire({
                    title: title,
                    text: text,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: confirmText,
                    cancelButtonText: cancelText
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = clearCartBtn.href;
                    }
                });
            });
        });
    </script>
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
    @if (session('error'))
        <script>
            Swal.fire({
                title: "Thất bại!",
                text: "{{ session('error') }}",
                icon: "error",
                confirmButtonText: "OK",
                timer: 2500
            });
        </script>
    @endif

@endpush
