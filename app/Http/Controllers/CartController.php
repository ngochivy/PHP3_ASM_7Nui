<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    /** Lấy giỏ hàng từ Cookie */
    private function getCart()
    {
        $cart = json_decode(Cookie::get('cart', '[]'), true); // Giải mã JSON từ cookie // Nếu Cookie không tồn tại, thì cho '[rỗng]'.
        return is_array($cart) ? $cart : []; // Đảm bảo trả về mảng
    }

    /** Hiển thị giỏ hàng */
    public function index()
    {
        $cart = $this->getCart();
        $totalMoney = 0;

        foreach ($cart as &$item) {
            $product = Product::find($item['id']);
            if ($product) {
                $item['thumbnail'] = $product->thumbnail;
                $item['title'] = $product->title;
                $item['slug'] = $product->slug;
                $item['sale_price'] = $product->sale_price ?? 0;
                $item['price'] = $product->price;
                $item['total'] = (($item['sale_price']) ? $item['price'] - $item['sale_price'] : $item['price']) * $item['qty'];

                $totalMoney += $item['total'];
            }
        }

        return view('client.cart', [
            'cart' => $cart,
            'totalMoney' => $totalMoney
        ]);
    }

    /** Thêm sản phẩm vào giỏ hàng */
    public function store(Request $request)
    {
        $cart = $this->getCart();
        $inCart = false;

        // Nếu sản phẩm đã tồn tại, tăng số lượng
        foreach ($cart as &$item) {
            if ($item['id'] == $request->id) {
                $item['qty'] += $request->qty;
                $inCart = true;
                break;
            }
        }

        // Nếu sản phẩm chưa tồn tại, thêm mới
        if (!$inCart) {
            $cart[] = [
                "id"  => $request->id,
                "qty" => $request->qty,
            ];
        }

        // Lưu giỏ hàng vào cookie (30 ngày)
        cookie()->queue('cart', json_encode($cart), 60 * 24 * 30);

        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');
    }

 // Xoas tung sp ra khoi gio hang
    public function remove($id)
    {
        $cart = $this->getCart();
        $cart = array_filter($cart, function ($item) use ($id) {    
            return $item['id'] != $id;
        });

        // Cập nhật lại giỏ hàng trong cookie
        cookie()->queue('cart', json_encode($cart), 60 * 24 * 30);

        return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng');
    }

    // Xoa all sp ra khoi gio hang
    public function clear()
    {
        cookie()->queue(Cookie::forget('cart'));
        return redirect()->back()->with('success', 'Xóa toàn bộ sản phẩm thành công');
    }




}
