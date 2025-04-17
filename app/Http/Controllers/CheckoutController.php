<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\PaymentMethod;
use Illuminate\Http\Request;
use APP_URL;

class CheckoutController extends Controller
{
    public static function index(Request $request)
    {
        // dd($request);
        $cart = Cart::cartInnerJoinProduct();
        // dd($cart);
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
        // dd($request->all());
        session([
            "product_id" => $request->product_id,
            "province_name" => $request->province_name,
            "district_name" => $request->district_name,
            "total_momo" => $request->total_momo,
            "title" => $request->title,
            "qty" => $request->qty,
            "name" => $request->name,
            "address" => $request->address,
            "phone" => $request->phone,
            "email" => $request->email,
        ]);

        // dd(session());   
        $endpoint = "https://test-payment.momo.vn/v2/gateway/api/create";

        $partnerCode = env('MOMO_PARTNER_CODE');
        $accessKey = env('MOMO_ACCESS_KEY');
        $secretKey = env('MOMO_SECRET_KEY');

        $orderInfo = "Thanh toán qua MoMo";
        $amount = $request->input('total_momo', 10000); // Giá trị mặc định nếu không truyền
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

        // DB::transaction() chạy một đóng gói các truy vấn 
        // nếu có bất kỳ exception nào được ném ra, 
        // toàn bộ transaction sẽ tự động bị rollback và exception được propagate trở lại 

        $price = session('total_momo') / session('qty');
        // $user = auth()->user();
        // $order = $user->orders()->create([
        //     // "province_name"=> $request->province_name,
        //     // "district_name"=> $request->district_name,
        //     // "total_momo"=> $request->total_momo,
        //     // "title"=> $request->title,
        //     // 
        //     "name" => session('name'),
        //     "address" => session('address'),
        //     "phone" => session('phone'),
        //     "status" => "Chờ duyệt",
        //     "user_id" => 1,
        // ]);

        // $order->orderDetail([
        //     "qty" => session('qty'),
        //     "price" => $price,
        //     "product_id" => session('product_id'),
        // ]);


        // $user->address::create([
        //     "email" => session('email'),
        //     "province" => session('province_name'),
        //     "district" => session('district_name'),
        //     "name" => session('name'),
        //     "address" => session('address'),
        //     "phone" => session('phone'),
        //     "status" => "Active",
        // ]);



        // Get the payment details from the request
        $orderId = $request->input('orderId');
        $orderInfo = $request->input('orderInfo');
        $signature = $request->input('signature');
        $amount = $request->input('amount');

        $successMessage = "Thanh toán thành công!<br>
        <strong>Mã đơn hàng:</strong> $orderId <br>
        <strong>Thông tin đơn hàng:</strong> $orderInfo <br>
        <strong>Số tiền:</strong> $amount VND";

        session()->flash('success_message', $successMessage);

        // Redirect to the page where you want to show the success message (could be the homepage or order details page)
        return redirect()->route('home');
    }

    public function checkout_ipn() {}


    // http://127.0.0.1:8000/checkout?
    // partnerCode=MOMOBKUN20180529&
    // orderId=1744743431&
    // requestId=1744743431&
    // amount=200000&
    // orderInfo=Thanh+to%C3%A1n+qua+MoMo&
    // orderType=momo_wallet&
    // transId=4397298023&
    // resultCode=0&
    // message=Successful.&
    // payType=napas&
    // responseTime=1744743716783
    // &extraData=&
    // signature=0a43b72404fb1618a484751da2cffd32e335cc0ec71ddfd1b832dbc69ae686b5
}
