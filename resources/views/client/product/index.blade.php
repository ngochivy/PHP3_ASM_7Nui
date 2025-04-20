@extends('client.layouts.master')

@section('meta_title')
Sản phẩm
@endsection



@section('content')
<main class="main-content">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 m-auto">
                    <div class="page-title-content text-center">
                        <h2 class="title">Sản Phẩm</h2>
                        <div class="bread-crumbs">
                            <a href="index.html"> Trang chủ </a><span class="breadcrumb-sep"> //</span>
                            <span class="active"> Sản phẩm</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Shop Area Wrapper ==-->
    <div class="product-area product-grid-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-0 order-lg-1">
                    <div class="shop-toolbar-wrap">
                        <div class="product-showing-status">
                            <p class="count-result"><span id="current-count">12</span> Sản phẩm trong tổng số <span
                                    id="total-count">30</span></p>
                        </div>
                        <!-- <div class="product-view-mode">
                                <nav>
                                    <div class="nav nav-tabs active" id="nav-tab" role="tablist">
                                        <button class="nav-link active" id="column-three-tab" data-bs-toggle="tab"
                                            data-bs-target="#column-three" type="button" role="tab"
                                            aria-controls="column-three" aria-selected="true"><i class="fa fa-th"></i></button>
                                        <button class="nav-link" id="nav-list-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-list" type="button" role="tab"
                                            aria-controls="nav-list" aria-selected="false"><i class="fa fa-list"></i></button>
                                        <button class="nav-link" id="column-two-tab" data-bs-toggle="tab"
                                            data-bs-target="#column-two" type="button" role="tab"
                                            aria-controls="column-two" aria-selected="true"><i class="fa fa-th-large"></i></button>
                                    </div>
                                </nav>
                            </div> -->
                        <div class="product-sorting-menu product-sorting">
                            <span class="current">Sắp xếp theo:
                                <span>
                                    @switch($currentSort ?? 'default')
                                    @case('newest')
                                    Mới nhất
                                    @break

                                    @case('oldest')
                                    Cũ nhất
                                    @break

                                    @case('price_desc')
                                    Giá giảm dần
                                    @break

                                    @case('price_asc')
                                    Giá tăng dần
                                    @break

                                    @default
                                    Mặc định
                                    @endswitch
                                    <i class="fa fa-angle-down"></i>
                                </span>
                            </span>
                            <ul>
                                <li class="{{ ($currentSort ?? 'default') == 'default' ? 'active' : '' }}">
                                    <a href="?sort=default">Sắp xếp theo mặc định</a>
                                </li>
                                <li class="{{ ($currentSort ?? '') == 'newest' ? 'active' : '' }}">
                                    <a href="?sort=newest">Sắp xếp theo mới nhất</a>
                                </li>
                                <li class="{{ ($currentSort ?? '') == 'oldest' ? 'active' : '' }}">
                                    <a href="?sort=oldest">Sắp xếp theo cũ nhất</a>
                                </li>
                                <li class="{{ ($currentSort ?? '') == 'price_desc' ? 'active' : '' }}">
                                    <a href="?sort=price_desc">Sắp xếp theo giá giảm dần <i
                                            class="lastudioicon-arrow-up"></i></a>
                                </li>
                                <li class="{{ ($currentSort ?? '') == 'price_asc' ? 'active' : '' }}">
                                    <a href="?sort=price_asc">Sắp xếp theo giá tăng dần <i
                                            class="lastudioicon-arrow-down"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="column-three" role="tabpanel"
                            aria-labelledby="column-three-tab">
                            <div class="row" id="product-list">
                                @foreach ($products as $p)
                                <div class="col-md-4 mb-4">
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <img src="{{ asset('storage/' . $p->thumbnail) }}" alt="Image">
                                            <div class="product-action">
                                                <!-- <a class="action-quick-view" href="shop-cart.html"><i
                                                        class="ion-ios-cart"></i></a> -->
                                                <a class="action-quick-view" href="/product_detail/{{ $p->slug }}"><i
                                                        class="ion-arrow-expand"></i></a>
                                                <a class="action-quick-view">
                                                    @php
                                                    $isInComparison = isset($comparisonProducts) && $comparisonProducts->contains('id', $p->id);
                                                    $reachedLimit = isset($comparisonCount) && $comparisonCount >= 4;
                                                    @endphp

                                                    @if(!$isInComparison && !$reachedLimit)
                                                    <form action="{{ route('compare.add', $p->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        <button type="submit" class="compare-btn" title="Thêm vào so sánh"
                                                            style="background: transparent; border: none; padding: 0; margin: 0; color: inherit; cursor: pointer;">
                                                            <i class="ion-shuffle"></i>
                                                        </button>
                                                    </form>
                                                    @else
                                                    <button class="compare-btn" title="{{ $isInComparison ? 'Đã thêm vào so sánh' : 'Đạt giới hạn 4 sản phẩm' }}"
                                                        style="background: transparent; border: none; padding: 0; margin: 0; color: #ccc; cursor: not-allowed;"
                                                        disabled>
                                                        <i class="ion-shuffle"></i>
                                                    </button>
                                                    @endif
                                                </a>

                                            </div>
                                        </div>
                                        <div class="product-info text-center">
                                            <span href="/category">{{ $p->category->name }}</span>
                                            <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <h4 class="title">
                                                <a
                                                    href="/product_detail/{{ $p->slug }}">{{ Str::limit($p->title, 40) }}</a>
                                            </h4>
                                            <div class="prices">
                                                <span class="old-price"
                                                    style="text-decoration: line-through; color: gray;">{{ number_format($p->price) }}vnđ</span>
                                                <span class="new-price"
                                                    style="color: red; font-weight: bold;">{{ number_format($p->price - $p->sale_price) }}vnđ</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="pagination-area mb-md-50">
                                {{ $products->onEachSide(1)->links('pagination::bootstrap-4') }}
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-3 order-1 order-lg-0">
                    <div class="sidebar-area shop-sidebar-area">
                        <div class="widget-item">
                            <div class="widget-title">
                                <h3 class="title">Danh mục sản phẩm</h3>
                            </div>
                            <div class="widget-body">
                                <div class="widget-categories">
                                    <ul>
                                        <li>
                                            <a href="/product"
                                                @isset($currentCategory)
                                                @if ($currentCategory->id == 0) class="active" @endif
                                                @endisset>
                                                Tất cả sản phẩm
                                            </a>
                                        </li>
                                        @foreach ($category as $c)
                                        <li>
                                            <a href="{{ route('category.products', $c->id) }}"
                                                @isset($currentCategory)
                                                @if ($currentCategory->id == $c->id) class="active" @endif
                                                @endisset>
                                                {{ $c->name }} ({{ $c->products->count() }})
                                            </a>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--== End Shop Area Wrapper ==-->
</main>
@endsection


@push('javascript')
<!--=== Phan Trang ===-->
<script src="{{ asset('assets/js/phantrang.js') }}"></script>

<script>
    $(document).ready(function() {
        // Đóng/mở dropdown
        $('.product-sorting .current').click(function() {
            $(this).next('ul').toggle();
        });

        // Đóng dropdown khi click ra ngoài
        $(document).click(function(e) {
            if (!$(e.target).closest('.product-sorting').length) {
                $('.product-sorting ul').hide();
            }
        });
    });
</script>
@endpush