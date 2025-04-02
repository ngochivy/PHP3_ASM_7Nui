<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    public function index()
    {
      

        return view('client.cart');
    }
    /** Xu ly them moi voi gio hang */
    public function store(Request $request)
    {
        // Kiểm tra giỏ hàng nếu chưa có thì tạo giỏ hàng trống
        if (!Session::exists('cart')) {
            Session::put('cart', []);
        }

        // Lấy giỏ hàng hiện tại từ session
        $cart = Session::get('cart');

        // Định nghĩa biến kiểm tra sản phẩm có trong giỏ hàng chưa
        $inCart = false;

        // Trường hợp 1: Sản phẩm đã có trong giỏ hàng -> tăng số lượng
        foreach ($cart as &$item) {
            if (isset($item['id']) && $item['id'] == $request->id) {
                $item['qty'] += $request->qty;
                $inCart = true;
                break;
            }
        }

        // Trường hợp 2: Sản phẩm chưa có trong giỏ hàng -> thêm mới vào giỏ hàng
        if (!$inCart) {
            $cart[] = [
                "id"  => $request->id,
                "qty" => $request->qty,
            ];
        }

        // Lưu lại giỏ hàng vào session đúng định dạng
        Session::put('cart', $cart);

        print_r($cart); // Debug giỏ hàng để kiểm tra

        // Lấy sản phẩm từ database để redirect (bỏ comment nếu cần)
        $product = Product::find($request->id);
        // return redirect('/product_detail/' . $product->slug)->with('success', 'Sản phẩm đã được thêm vào giỏ hàng thành công');
    }
}
