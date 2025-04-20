@extends('client.layouts.master')

@section('meta_title', 'So sánh sản phẩm')

@section('content')
<div class="container py-5">
    <h1 class="mb-4 text-center">So sánh sản phẩm</h1>

    <!-- Thông báo sẽ hiển thị ở góc phải trên -->
    <div class="notification-wrapper" style="position: fixed; top: 20px; right: 20px; z-index: 9999; width: 350px;">
        @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert" style="box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: transparent; border: none;">
                <span aria-hidden="true" style="font-size: 1.5rem; line-height: 1; opacity: 0.7;">&times;</span>
            </button>
        </div>
        @endif

        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: transparent; border: none;">
                <span aria-hidden="true" style="font-size: 1.5rem; line-height: 1; opacity: 0.7;">&times;</span>
            </button>
        </div>
        @endif

        @if($products->count() > 0 && $current_count >= $max_items)
        <div class="alert alert-warning alert-dismissible fade show" role="alert" style="box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
            Bạn đã đạt tối đa {{ $max_items }} sản phẩm để so sánh
            <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="background: transparent; border: none;">
                <span aria-hidden="true" style="font-size: 1.5rem; line-height: 1; opacity: 0.7;">&times;</span>
            </button>
        </div>
        @endif
    </div>

    @if($products->count() > 0)
    <div class="table-responsive">
        <table class="table table-bordered comparison-table">
            <thead class="thead-light">
                <tr>
                    <th style="width: 25%">Tiêu chí</th>
                    @foreach($products as $product)
                    <th>
                        <div class="product-header">
                            <div class="product-image text-center mb-3">
                                <img src="{{ asset('storage/' . $product->thumbnail) }}" alt="{{ $product->title }}" class="img-fluid" style="max-height: 150px;">
                            </div>
                            <h5 class="text-center">{{ $product->title }}</h5>
                            <form action="{{ route('compare.remove', $product->id) }}" method="POST" class="text-center mt-2">
                                @csrf
                                <button type="submit" class="btn btn-sm btn-outline-danger">Xóa</button>
                            </form>
                        </div>
                    </th>
                    @endforeach
                </tr>
            </thead>
            <tbody>
                <!-- Giá gốc -->
                <tr>
                    <td>Giá gốc</td>
                    @foreach($products as $product)
                    <td class="text-center">{{ number_format($product->price) }}đ</td>
                    @endforeach
                </tr>

                <!-- Giá khuyến mãi -->
                <tr>
                    <td>Giá khuyến mãi</td>
                    @foreach($products as $product)
                    <td class="text-center">
                        @if($product->sale_price > 0)
                        <span class="text-danger font-weight-bold">{{ number_format($product->price - $product->sale_price) }}đ</span>
                        <div class="text-success small mt-1">
                            Giảm {{ number_format($product->sale_price) }}đ
                        </div>
                        @else
                        <span class="text-muted">Không có KM</span>
                        @endif
                    </td>
                    @endforeach
                </tr>

                <!-- Danh mục -->
                <tr>
                    <td>Danh mục</td>
                    @foreach($products as $product)
                    <td class="text-center">{{ $product->category->name ?? 'N/A' }}</td>
                    @endforeach
                </tr>

                <!-- Mô tả ngắn -->
                <tr>
                    <td>Mô tả</td>
                    @foreach($products as $product)
                    <td>{{ Str::limit(strip_tags($product->content), 250) }}</td>
                    @endforeach
                </tr>

                <!-- Nút hành động -->
                <tr>
                    <td></td>
                    @foreach($products as $product)
                    <td class="text-center">
                        <a href="/product_detail/{{ $product->slug }}" class="btn btn-primary btn-sm">
                            Xem chi tiết
                        </a>
                    </td>
                    @endforeach
                </tr>
            </tbody>
        </table>
    </div>

    <div class="text-right mt-4">
        <form action="{{ route('compare.clear') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">
                <i class="fa fa-trash"></i> Xóa tất cả
            </button>
        </form>
    </div>
    @else
    <div class="alert alert-info text-center">
        <i class="fa fa-info-circle"></i> Bạn chưa có sản phẩm nào để so sánh
        <a href="/product" class="alert-link">Quay lại cửa hàng</a>
    </div>
    @endif
</div>




<style>
    .comparison-table {
        font-size: 0.9rem;
    }

    .comparison-table th {
        vertical-align: middle !important;
        text-align: center;
        background-color: #f8f9fa;
    }

    .comparison-table td {
        vertical-align: middle;
        padding: 12px;
    }

    .product-header {
        padding: 10px;
    }

    .product-image img {
        max-width: 100%;
        height: auto;
    }

    .text-danger {
        color: #dc3545 !important;
        font-weight: 600;
    }

    .text-success {
        color: #28a745 !important;
    }

    /* Style mới cho thông báo */
    .notification-item {
        position: relative;
        margin-bottom: 10px;
        padding: 15px 20px;
        border-radius: 4px;
        opacity: 0;
        transform: translateX(-100%);
        transition: all 0.3s ease;
    }

    .notification-item.show {
        opacity: 1;
        transform: translateX(0);
    }

    /* Style cho nút đóng */
    .alert .close {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        padding: 0;
        color: inherit;
    }

    .alert .close:hover {
        opacity: 1;
    }

    /* Hiệu ứng fade */
    .alert.fade {
        transition: opacity 0.15s linear;
    }

    .alert.fade.show {
        opacity: 1;
    }
</style>



<!-- Load jQuery + Bootstrap Bundle (gồm Popper + JS) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>


<script>
    $(document).ready(function() {
        // Auto close alert sau 6s
        setTimeout(function() {
            $('.alert').alert('close');
        }, 6000);

        // Cho phép đóng tay bằng nút X
        $(document).on('click', '.alert .close', function() {
            $(this).closest('.alert').alert('close');
        });
    });
</script>

@endsection