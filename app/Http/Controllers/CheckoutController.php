<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use APP_URL;
use Illuminate\Support\Facades\Validator;

class CheckoutController extends Controller
{
    public static function index(Request $request)
    {
        // dd($request);
        $cart = Cart::cartInnerJoinProduct();
        // dd($cart);

        if ($cart->isEmpty()) {
            return redirect()->back()->with('error', 'Giỏ hàng của bạn đang trống!');
        }
        $totalMoney = 0;
        foreach ($cart as &$item) {
            $item->total = (!empty($item->sale_price) ? $item->price - $item->sale_price : $item->price) * $item->qty;
            $totalMoney += $item->total;
        }
        // dd($totalMoney);

        return view('client.checkout.index', ["cart" => $cart, "totalMoney" => $totalMoney]);
    }


    //thanh toan momo


    public function execPostRequest($url, $data)
    {
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        $result = curl_exec($ch);
        $error = curl_error($ch);
        curl_close($ch);

        return [
            'result' => $result,
            'error' => $error,
        ];
    }

    public function momo_payment(Request $request)
    {
        $products = $request->input('products');
        // dd($request); 
        session([
            "products" => $products,
            "province_name" => $request->province_name,
            "district_name" => $request->district_name,
            "total_momo" => $request->total_amount,
            "name" => $request->name,
            "address" => $request->address,
            "phone" => $request->phone,
            "email" => $request->email,
        ]);


        $validator = Validator::make(session()->all(), [
            'name' => 'required|max:255',
            'province_name' => 'required',
            'district_name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required',
        ], [
            'name.required' => 'Tên là bắt buộc',
            'name.max' => 'Tên tối đa 255 ký tự',
            'province_name.required' => 'Tên tỉnh là bắt buộc',
            'district_name.required' => 'Tên quận/huyện là bắt buộc',
            'address.required' => 'Địa chỉ là bắt buộc',
            'phone.required' => 'Số điện thoại là bắt buộc',
            'email.required' => 'Email là bắt buộc',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->back()
                ->withErrors($validator)
                ->withInput();
        }


        // dd(session());   
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

        $partnerCode = env('MOMO_PARTNER_CODE');
        $accessKey = env('MOMO_ACCESS_KEY');
        $secretKey = env('MOMO_SECRET_KEY');

        $orderInfo = "Thanh toán qua MoMo";
        $amount = $request->input('total_amount', 10000); // Giá trị mặc định nếu không truyền
        $orderId = time() . "";
        $redirectUrl = route('checkout.success');
        // dd($redirectUrl);
        $ipnUrl = env('MOMO_IPN_URL');
        $extraData = "";

        $requestId = time() . "";
        $requestType = "payWithATM";

        // Tạo chuỗi để ký
        $rawHash = "accessKey=" . $accessKey .
            "&amount=" . $amount .
            "&extraData=" . $extraData .
            "&ipnUrl=" . $ipnUrl .
            "&orderId=" . $orderId .
            "&orderInfo=" . $orderInfo .
            "&partnerCode=" . $partnerCode .
            "&redirectUrl=" . $redirectUrl .
            "&requestId=" . $requestId .
            "&requestType=" . $requestType;

        $signature = hash_hmac("sha256", $rawHash, $secretKey);

        $data = [
            'partnerCode' => $partnerCode,
            'partnerName' => "Test",
            'storeId' => "MomoTestStore",
            'requestId' => $requestId,
            'amount' => $amount,
            'orderId' => $orderId,
            'orderInfo' => $orderInfo,
            'redirectUrl' => $redirectUrl,
            'ipnUrl' => $ipnUrl,
            'lang' => 'vi',
            'extraData' => $extraData,
            'requestType' => $requestType,
            'signature' => $signature,

        ];

        // Gửi yêu cầu tới MoMo
        $response = $this->execPostRequest($endpoint, json_encode($data));
        $result = $response['result'];
        $error = $response['error'];

        // Xử lý phản hồi
        $jsonResult = json_decode($result, true);

        if ($error) {
            return response()->json([
                'status' => 'error',
                'message' => 'Lỗi kết nối đến MoMo: ' . $error
            ]);
        }

        if (!isset($jsonResult['payUrl'])) {
            return response()->json([
                'status' => 'error',
                'message' => 'Phản hồi không hợp lệ từ MoMo.',
                'response' => $jsonResult
            ]);
        }

        return redirect()->to($jsonResult['payUrl']);
    }

    public function checkout_success(Request $request)
    {
        // Get the payment details from the request
        $orderId = $request->input('orderId');
        $orderInfo = $request->input('orderInfo');
        $signature = $request->input('signature');
        $amount = $request->input('amount');

        // $price = session('total_momo') / session('qty');
        $user = auth()->user();
        $order = $user->orders()->create([
            "name" => session('name'),
            "code" => $orderId,
            "address" => session('address'),
            "email" => session('email'),
            "phone" => session('phone'),
        ]);
        // dd(session('products'));

        foreach (session('products') as $product) {
            // dd($product);
            $order->orderDetail()->create([
                "qty" => $product['qty'],
                "price" => $product['price'],
                "total" => $amount,
                "product_id" => $product['product_id'],
            ]);
        }

        $user->address()->create([
            "email" => session('email'),
            "province" => session('province_name'),
            "district" => session('district_name'),
            "name" => session('name'),
            "address" => session('address'),
            "phone" => session('phone'),
        ]);


        $successMessage = "Thanh toán thành công!<br>
        <strong>Mã đơn hàng:</strong> $orderId <br>
        <strong>Thông tin đơn hàng:</strong> $orderInfo <br>
        <strong>Số tiền:</strong> $amount VND";

        session()->flash('success_message', $successMessage);

        return redirect()->route('home');
    }

    public function checkout_ipn() {}
}
