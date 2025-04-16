@extends('client.layouts.master')
@section('meta_title')
Thanh toán
@endsection

@section('content')
<main class="main-content">
    <!--== Start Page Title Area ==-->
    <section class="page-title-area">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-12 m-auto">
            <div class="page-title-content text-center">
              <h2 class="title">Thanh toán</h2>
              <div class="bread-crumbs"><a href="index.html"> Trang chủ </a><a href="index.html">// Giỏ hàng </a><span class="breadcrumb-sep"> // </span><span class="active"> thanh toán</span></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== End Page Title Area ==-->

    <!--== Start Checkout Area Wrapper ==-->
    <section class="product-area shop-checkout-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto">
            <div class="section-title text-center">
              <h2 class="title">Thanh toán</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="checkout-coupon-wrap mb-65 mb-md-40">
              <p class="cart-page-title"><i class="ion-ios-pricetag-outline"></i> Bạn có mã giảm giá không? <a class="checkout-coupon-active" href="#/">nhấn vào đây để nhận mã cho bạn</a></p>
              <div class="checkout-coupon-content">
                <form action="#">
                  <p>If you have a coupon code, please apply it below.</p>
                  <input type="text" placeholder="Coupon code">
                  <button type="submit">Apply coupon</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-7">
            <div class="billing-info-wrap">
              <h3>chi tiết thanh toán</h3>
              <div class="row">
                <div class="col-12">
                  <div class="billing-info mb-20">
                    <label>Họ <abbr class="required" title="required">*</abbr></label>
                    <input type="text">
                  </div>
                </div>
                <div class="col-12">
                  <div class="billing-info mb-20">
                    <label>Tên <abbr class="required" title="required">*</abbr></label>
                    <input type="text">
                  </div>
                </div>
              
                <div class="col-12">
                  <div class="billing-select mb-20">
                    <label>Thành phố | tỉnh thành <abbr class="required" title="required">*</abbr></label>
                    <div class="select-style">
                      <select class="select-active">
                        <option>An Giang</option>
                        <option>Kiên Giang</option>
                        <option>Bến Tre</option>
                        <option>Trà Vinh</option>
                        <option>Cà Mau</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="billing-info mb-20">
                    <label>Địa chỉ <abbr class="required" title="required">*</abbr></label>
                    <input class="billing-address" placeholder="số nhà" type="text">
                    
                  </div>
                </div>
              
                <div class="col-12">
                  <div class="billing-select mb-20">
                    <label>Huyện <abbr class="required" title="required">*</abbr></label>
                    <div class="select-style">
                      <select class="select-active">
                        <option>Tri Tôn</option>
                        <option>Thoại Sơn</option>
                        <option>Chợ Mới</option>
                        <option>Châu Phú</option>
                        <option>Tân Phú</option>
                      </select>
                    </div>
                  </div>
                </div>
            
                </div>
                <div class="col-12">
                  <div class="billing-info mb-20">
                    <label>Số điện thoại <abbr class="required" title="required">*</abbr></label>
                    <input type="text">
                  </div>
                </div>
                <div class="col-12">
                  <div class="billing-info mb-20">
                    <label>Email <abbr class="required" title="required">*</abbr></label>
                    <input type="text">
                  </div>
                </div>
              
              
              <div class="additional-info-wrap">
                <label>Ghi chú ( nếu có)</label>
                <textarea placeholder="Notes about your order, e.g. special notes for delivery. " name="message"></textarea>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
  <div class="your-order-area">
    <h3>Đơn của bạn</h3>
    <div class="your-order-wrap">
      <div class="your-order-info-wrap">
        <div class="your-order-title">
          <h4>Sản phẩm <span>Tổng cộng</span></h4>
        </div>
        <div class="your-order-product">
          <ul>
            <li>Áo hoodie Brother Hoodies màu xám × 4 <span>$140.00</span></li>
            <li>Áo T-shirt Enjoy The Rest × 1 <span>$39.59</span></li>
          </ul>
        </div>
        <div class="your-order-subtotal">
          <h3>Tổng cộng <span>$617.59</span></h3>
        </div>
        <div class="your-order-shipping">
          <span>Phí vận chuyển</span>
          <ul>
            <li><input type="radio" name="shipping" value="info" checked="checked"><label>Vận chuyển miễn phí</label></li>
            <li><input type="radio" name="shipping" value="info" checked="checked"><label>Phí cố định: <span>$100.00</span></label></li>
            <li><input type="radio" name="shipping" value="info" checked="checked"><label>Nhận hàng tại địa phương: <span>$120.00</span></label></li>
          </ul>
        </div>
        <div class="your-order-total">
          <h3>Tổng cộng <span>$617.59</span></h3>
        </div>
      </div>
      <div class="payment-method">
        <div class="pay-top sin-payment">
          <input id="payment_method_1" class="input-radio" type="radio" value="cheque" checked="checked" name="payment_method">
          <label for="payment_method_1">Chuyển khoản ngân hàng trực tiếp</label>
          <div class="payment-box payment_method_bacs">
            <p>Chuyển tiền trực tiếp vào tài khoản ngân hàng của chúng tôi. Vui lòng sử dụng ID đơn hàng của bạn làm tham chiếu thanh toán. Đơn hàng của bạn sẽ không được vận chuyển cho đến khi số tiền được xác nhận trong tài khoản của chúng tôi.</p>
          </div>
        </div>
        <div class="pay-top sin-payment">
          <input id="payment-method-2" class="input-radio" type="radio" value="cheque" name="payment_method">
          <label for="payment-method-2">Thanh toán bằng séc</label>
          <div class="payment-box payment_method_bacs">
            <p>Vui lòng gửi séc tới Tên cửa hàng, Địa chỉ cửa hàng, Thành phố, Tỉnh / Quận, Mã bưu điện của cửa hàng.</p>
          </div>
        </div>
        <div class="pay-top sin-payment">
          <input id="payment-method-3" class="input-radio" type="radio" value="cheque" name="payment_method">
          <label for="payment-method-3">Thanh toán khi nhận hàng</label>
          <div class="payment-box payment_method_bacs">
            <p>Thanh toán bằng tiền mặt khi nhận hàng.</p>
          </div>
        </div>
        <div class="pay-top sin-payment sin-payment-3">
          <input id="payment-method-4" class="input-radio" type="radio" value="cheque" name="payment_method">
          <label for="payment-method-4">PayPal <img alt="" src="assets/img/icons/payment-3.png"><a href="#">PayPal là gì?</a></label>
          <div class="payment-box payment_method_bacs">
            <p>Thanh toán qua PayPal; bạn có thể thanh toán bằng thẻ tín dụng nếu không có tài khoản PayPal.</p>
          </div>
        </div>
      </div>
      <div class="payment-condition">
        <p>Dữ liệu cá nhân của bạn sẽ được sử dụng để xử lý đơn hàng, hỗ trợ trải nghiệm của bạn trên trang web này và cho các mục đích khác được mô tả trong <a href="#">chính sách bảo mật</a> của chúng tôi.</p>
      </div>
      <div class="payment-checkbox">
        <input class="checkout-toggle" type="checkbox">
        <span>Gửi đến địa chỉ khác? <a href="#">Điều khoản và điều kiện *</a></span>
      </div>
    </div>
    <div class="place-order">
      <a href="#/">Đặt hàng</a>
    </div>
  </div>
</div>

        </div>
      </div>
    </section>
    <!--== End Checkout Area Wrapper ==-->
  </main>
@endsection
