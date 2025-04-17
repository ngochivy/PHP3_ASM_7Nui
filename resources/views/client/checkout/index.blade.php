@extends('client.layouts.master')
@section('meta_title')
    Thanh toán
@endsection
@push('stylesheet')
@endpush



@section('content')
    <main class="main-content">
        <!--== Start Page Title Area ==-->
        <section class="page-title-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12 m-auto">
                        <div class="page-title-content text-center">
                            <h2 class="title">Thanh toán</h2>
                            <div class="bread-crumbs"><a href="index.html"> Trang chủ </a><a href="index.html">// Giỏ hàng
                                </a><span class="breadcrumb-sep"> // </span><span class="active"> thanh toán</span></div>
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
                    <div class="col-lg-5">
                        <div class="billing-info-wrap">
                            <h3>Chi tiết thanh toán</h3>
                            <div class="row">
                                <!-- Hidden name (có thể set giá trị động từ server hoặc JS) -->
                                <div class="col-12">
                                    <div class="billing-info mb-20">
                                        <label>Tên <abbr class="required">*</abbr></label>
                                        <input type="text" id="nameInput" name="name" placeholder="Nguyễn Văn A">
                                    </div>
                                </div>
                                <!-- Province -->
                                <div class="col-12">
                                    <div class="billing-select mb-20">
                                        <label>Thành phố / Tỉnh <abbr class="required">*</abbr></label>
                                        <div class="select-style">
                                            <select class="select-active" id="province" name="province">
                                                <option value="">Chọn tỉnh/thành</option>
                                                <!-- ... options ... -->
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <!-- Address -->
                                <div class="col-12">
                                    <div class="billing-info mb-20">
                                        <label>Địa chỉ <abbr class="required">*</abbr></label>
                                        <input id="addressInput" class="billing-address" type="text" name="address"
                                            placeholder="Ví dụ: Số 123, đường ABC" required>
                                    </div>
                                </div>
                                <!-- District -->
                                <div class="col-12">
                                    <div class="billing-select mb-20">
                                        <label>Huyện <abbr class="required">*</abbr></label>
                                        <div class="select-style">
                                            <select class="select-active" id="district" name="district">
                                                <option value="">Chọn huyện/quận</option>
                                                <!-- ... options ... -->
                                            </select>

                                        </div>
                                    </div>
                                </div>
                                <!-- Phone -->
                                <div class="col-12">
                                    <div class="billing-info mb-20">
                                        <label>Số điện thoại <abbr class="required">*</abbr></label>
                                        <input id="phoneInput" type="text" name="phone" placeholder="0123 456 789"
                                            required>
                                    </div>
                                </div>
                                <!-- Email -->
                                <div class="col-12">
                                    <div class="billing-info mb-20">
                                        <label>Email <abbr class="required">*</abbr></label>
                                        <input id="emailInput" type="email" name="email" placeholder="email@example.com"
                                            required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form id="checkoutForm" action="{{ route('momo_payment') }}" method="POST">
                            @csrf
                            <input type="hidden" name="province_name" id="province_name">
                            <input type="hidden" name="district_name" id="district_name">
                            <div class="your-order-area">
                                <h3>Đơn của bạn</h3>
                                <div class="your-order-wrap">
                                    <div class="your-order-info-wrap">
                                        <div class="your-order-title">
                                            <h4>Sản phẩm <span>Tổng cộng</span></h4>
                                        </div>

                                        <div class="your-order-product">
                                            @foreach ($cart as $item)
                                                <ul>
                                                    <li><img src="{{ asset("storage/{$item->thumbnail}") }}"
                                                            style="max-width:100px;margin-right:10px;">
                                                        <span>{{ $item->title }} × {{ $item->qty }}</span>
                                                        <span>{{ number_format($item->total) }} VND</span>
                                                    </li>
                                                </ul>
                                                <div class="your-order-total">
                                                    <input type="hidden" name="product_id" value="{{ $item->product_id }}">
                                                    <input type="hidden" name="total_momo" value="{{ $item->total }}">
                                                    <input type="hidden" name="title" value="{{ $item->title }}">
                                                    <input type="hidden" name="qty" value="{{ $item->qty }}">
                                                </div>
                                            @endforeach
                                        </div>
                                        <h3 class="item-right text-end">
                                            <b>Tổng cộng <span>{{ number_format($totalMoney) }} VND</span></b>
                                        </h3>
                                    </div>
                                    <div class="payment-method">
                                        <h5>Phương thức thanh toán</h5>

                                        <div class="pay-top sin-payment">
                                            <input id="payment-method-3" class="input-radio" type="radio"
                                                value="cod" name="payment_method">
                                            <label for="payment-method-3">Thanh toán khi nhận hàng</label>
                                            <div class="payment-box payment_method_bacs">
                                                <p>Thanh toán bằng tiền mặt khi nhận hàng.</p>
                                            </div>
                                        </div>

                                        <div class="pay-top sin-payment sin-payment-3">
                                            <input id="payment-method-4" class="input-radio" type="radio"
                                                value="momo" name="payment_method">
                                            <label for="payment-method-4">Thanh toán bằng Momo <img alt=""
                                                    src=""></label>
                                            <div class="payment-box payment_method_bacs">
                                                <p>Thanh toán qua Momo; bạn có thể thanh toán qua Momo</p>
                                            </div>
                                        </div>

                                        <div class="pay-top sin-payment sin-payment-4">
                                            <input id="payment-method-5" class="input-radio" type="radio"
                                                value="vnpay" name="payment_method">
                                            <label for="payment-method-5">Thanh toán bằng VnPay <img alt=""
                                                    src=""></label>
                                            <div class="payment-box payment_method_bacs">
                                                <p>Thanh toán qua VnPay; bạn có thể thanh toán qua VnPay</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="place-order">
                                    <button type="submit" class="btn btn-primary">Đặt hàng</button>
                                </div>
                            </div>
                        </form>

                    </div>

                </div>
            </div>
        </section>
        <!--== End Checkout Area Wrapper ==-->
    </main>
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



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js"
        integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const host = "https://provinces.open-api.vn/api/";
        var callAPI = (api) => {
            return axios.get(api)
                .then((response) => {
                    renderData(response.data, "province");
                });
        }
        callAPI('https://provinces.open-api.vn/api/?depth=1');
        var callApiDistrict = (api) => {
            return axios.get(api)
                .then((response) => {
                    renderData(response.data.districts, "district");
                });
        }
        var callApiWard = (api) => {
            return axios.get(api)
                .then((response) => {
                    renderData(response.data.wards, "ward");
                });
        }

        var renderData = (array, select) => {
            let row = ' <option disable value="">Chọn</option>';
            array.forEach(element => {
                row += `<option value="${element.code}">${element.name}</option>`
            });
            document.querySelector("#" + select).innerHTML = row
        }

        $("#province").change(() => {
            callApiDistrict(host + "p/" + $("#province").val() + "?depth=2");
            printResult();
        });
        $("#district").change(() => {
            callApiWard(host + "d/" + $("#district").val() + "?depth=2");
            printResult();
        });
        $("#ward").change(() => {
            printResult();
        })

        var printResult = () => {
            const provinceText = $("#province option:selected").text();
            const districtText = $("#district option:selected").text();

            if ($("#district").val() != "" && $("#province").val() != "" &&
                $("#ward").val() != "") {
                let result = $("#province option:selected").text() +
                    " | " + $("#district option:selected").text() + " | " +
                    $("#ward option:selected").text();
                $("#result").text(result)

                $("#province_name").val(provinceText);
                $("#district_name").val(districtText);
            }



        }
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('checkoutForm').addEventListener('submit', function(e) {
                e.preventDefault();

                const fields = [{
                        id: 'nameInput',
                        name: 'name'
                    },
                    {
                        id: 'province',
                        name: 'province'
                    },
                    {
                        id: 'addressInput',
                        name: 'address'
                    },
                    {
                        id: 'district',
                        name: 'district'
                    },
                    {
                        id: 'phoneInput',
                        name: 'phone'
                    },
                    {
                        id: 'emailInput',
                        name: 'email'
                    }
                ];

                fields.forEach(f => {
                    const el = document.getElementById(f.id);
                    if (el) {
                        const hiddenInput = document.createElement('input');
                        hiddenInput.type = 'hidden';
                        hiddenInput.name = f.name;
                        hiddenInput.value = el.value;
                        this.appendChild(hiddenInput);
                    }
                });

                this.submit(); // Gửi lại form sau khi gắn input
            });
        });
    </script>

    {{-- thành công khi thanh toán --}}
    <!-- Auto trigger the toast -->
@endpush
