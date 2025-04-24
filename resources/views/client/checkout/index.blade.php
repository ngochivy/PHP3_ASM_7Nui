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
                                        <input type="text" id="nameInput" name="name" placeholder="Nguyễn Văn A" value="{{old('name')}}">
                                        @foreach ($errors->get('name') as $error)
                                            <span class="form-text text-danger">
                                                {{ $error }}
                                            </span>
                                        @endforeach
                                    </div>
                                </div>
                                <!-- Province -->
                                <div class="col-12">
                                    <div class="billing-select mb-20">
                                        <label>Thành phố / Tỉnh <abbr class="required">*</abbr></label>
                                        <div class="select-style">
                                            <select class="select-active" id="province" name="province" value="{{old('province_name')}}">
                                                <option value="">Chọn tỉnh/thành</option>
                                                <!-- ... options ... -->
                                            </select>
                                            @foreach ($errors->get('province_name') as $error)
                                                <span class="form-text text-danger">
                                                    {{ $error }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!-- Address -->
                                <div class="col-12">
                                    <div class="billing-info mb-20">
                                        <label>Địa chỉ <abbr class="required">*</abbr></label>
                                        <input id="addressInput" class="billing-address" type="text" name="address" value="{{old('address')}}"
                                            placeholder="Ví dụ: Số 123, đường ABC" required>
                                    </div>
                                    @foreach ($errors->get('address') as $error)
                                        <span class="form-text text-danger">
                                            {{ $error }}
                                        </span>
                                    @endforeach
                                </div>
                                <!-- District -->
                                <div class="col-12">
                                    <div class="billing-select mb-20">
                                        <label>Huyện <abbr class="required">*</abbr></label>
                                        <div class="select-style">
                                            <select class="select-active" id="district" name="district" value="{{old('district_name')}}">
                                                <option value="">Chọn huyện/quận</option>
                                                <!-- ... options ... -->
                                            </select>
                                            @foreach ($errors->get('district_name') as $error)
                                                <span class="form-text text-danger">
                                                    {{ $error }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <!-- Phone -->
                                <div class="col-12">
                                    <div class="billing-info mb-20">
                                        <label>Số điện thoại <abbr class="required">*</abbr></label>
                                        <input id="phoneInput" type="text" name="phone" placeholder="0123 456 789" value="{{old('phone')}}"
                                            required>
                                    </div>
                                    @foreach ($errors->get('phone') as $error)
                                        <span class="form-text text-danger">
                                            {{ $error }}
                                        </span>
                                    @endforeach
                                </div>
                                <!-- Email -->
                                <div class="col-12">
                                    <div class="billing-info mb-20">
                                        <label>Email <abbr class="required">*</abbr></label>
                                        <input id="emailInput" type="email" name="email" placeholder="email@example.com" value="{{old('email')}}"
                                            required>
                                    </div>
                                    @foreach ($errors->get('email') as $error)
                                        <span class="form-text text-danger">
                                            {{ $error }}
                                        </span>
                                    @endforeach
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
                                <h3>Giỏ hàng của bạn</h3>
                                <div class="your-order-wrap">
                                    <div class="your-order-info-wrap">
                                        <div class="your-order-product">
                                            @foreach ($cart as $index => $item)
                                                <div class="card mb-3">
                                                    <div
                                                        class="card-body d-flex align-items-center justify-content-between">
                                                        <div class="form-check me-3">
                                                            <input type="checkbox" class="form-check-input select-product"
                                                                data-product_id="{{ $item->product_id }}"
                                                                data-title="{{ $item->title }}"
                                                                data-qty="{{ $item->qty }}"
                                                                data-total="{{ $item->total }}"
                                                                data-price="{{ $item->price - $item->sale_price }}">
                                                        </div>
                                                        <div class="d-flex align-items-center flex-grow-1">
                                                            <img src="{{ asset("storage/{$item->thumbnail}") }}"
                                                                alt="Hình ảnh" class="img-thumbnail me-3"
                                                                style="width: 80px; height: 80px; object-fit: cover;">
                                                            <div>
                                                                <h6 class="mb-1">{{ $item->title }}</h6>
                                                                <div>Số lượng: {{ $item->qty }}</div>
                                                                <div>Giá:
                                                                    {{ number_format($item->price - $item->sale_price) }}
                                                                    VND</div>
                                                                <strong>Tổng: {{ number_format($item->total) }}
                                                                    VND</strong>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach

                                            {{-- Input hidden cho thông tin sản phẩm được chọn --}}
                                            <div id="selected-products-container"></div>
                                        </div>


                                        <h3 class="item-right text-end">
                                            <b>Tổng cộng <span id="total_amount"
                                                    name="total_amount">{{ number_format($totalMoney) }}
                                                    VND</span></b>
                                        </h3>
                                    </div>

                                    <div class="payment-method">
                                        <h5>Phương thức thanh toán</h5>
                                        <div class="pay-top sin-payment sin-payment-3">
                                            <input id="payment-method-4" class="input-radio" type="radio"
                                                value="momo" name="payment_method">
                                            <label for="payment-method-4">Thanh toán bằng Momo</label>
                                            <div class="payment-box payment_method_bacs">
                                                <p>Thanh toán qua Momo; bạn có thể thanh toán qua Momo</p>
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
    <script>
        const checkboxes = document.querySelectorAll('.select-product');
        const container = document.getElementById('selected-products-container');
        const totalDisplay = document.getElementById('total_amount');

        checkboxes.forEach((checkbox) => {
            checkbox.addEventListener('change', () => {
                updateSelectedProducts();
            });
        });

        function updateSelectedProducts() {
            container.innerHTML = '';
            let total = 0;
            let selectedIndex = 0;

            checkboxes.forEach((checkbox) => {
                if (checkbox.checked) {
                    const product_id = checkbox.dataset.product_id;
                    const title = checkbox.dataset.title;
                    const price = checkbox.dataset.price;
                    const qty = checkbox.dataset.qty;
                    const total_price = parseInt(checkbox.dataset.total);

                    total += total_price;

                    container.innerHTML += `
                        <input type="hidden" name="products[${selectedIndex}][product_id]" value="${product_id}">
                        <input type="hidden" name="products[${selectedIndex}][title]" value="${title}">
                        <input type="hidden" name="products[${selectedIndex}][price]" value="${price}">
                        <input type="hidden" name="products[${selectedIndex}][qty]" value="${qty}">
                        <input type="hidden" name="products[${selectedIndex}][total]" value="${total_price}">
                        <input type="hidden" name="total_amount" value="${total_price}">
                    `;
                    selectedIndex++;
                }
            });

            totalDisplay.textContent = total.toLocaleString('vi-VN') + ' VND';
            document.getElementById('total_amount').value = total;
        }
    </script>
@endpush
