<!--== Start Sidebar Cart Menu ==-->
<aside class="sidebar-cart-modal">
    <div class="sidebar-cart-inner">
        <div class="sidebar-cart-content">
            <a class="cart-close" href="javascript:void(0);"><i class="pe-7s-close"></i></a>
            <div class="sidebar-cart-all">
                <div class="cart-header">
                    <h3>Giỏ Hàng</h3>
                    <div class="close-style-wrap">
                        <span class="close-style close-style-width-1 cart-close"></span>
                    </div>
                </div>
                <div class="cart-content cart-content-padding">
                    @foreach ($cart as $item)
                    <ul>
                        <li class="single-product-cart">
                            <div class="cart-img">
                                <img src="{{ asset("storage/{$item->product->thumbnail}") }}" alt="Image">
                            </div>
                            <div class="cart-title">
                                <h4><a href="/product_detail/{{ $item->product->slug }}">{{ $item->product->title }}</a></h4>
                                <span>{{ $item->qty }} × 
                                    <span class="amount">
                                        {{ number_format($item->product->price - $item->product->sale_price) }}
                                    </span>
                                </span>
                            </div>
                            <div class="cart-delete">
                                <a href="#"><i class="pe-7s-trash icons"></i></a>
                            </div>
                        </li>
                    </ul>
                    @endforeach
                </div>

                <!-- Nút cố định dưới cùng -->
                <div class="cart-checkout-btn">
                    <a class="cart-btn" href="/cart">Xem giỏ hàng</a>
                    <a class="checkout-btn" href="/checkout">Thanh toán</a>
                </div>
            </div>
        </div>
    </div>
</aside>
<div class="sidebar-cart-overlay"></div>
<!--== End Sidebar Cart Menu ==-->



<link rel="stylesheet" href="{{ asset('assets/css/thanhcuon.css') }}">