<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
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
        // return Cart::cartInnerJoinProduct();
        $cart = Cart::cartInnerJoinProduct();
        $totalMoney = 0;
        foreach ($cart as &$item) {
            $item->total = (($item->sale_price) ? $item->price - $item->sale_price : $item->price) * $item->qty;
            $totalMoney += $item->total;
        }

        // dd($cart);
        return view('client.cart', [
            'cart' => $cart,
            'totalMoney' => $totalMoney
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:products,id',
            'qty' => 'required|integer|min:1',
        ]);
    
        $productId = $request->id;
        $qty = $request->qty;
        $userId = Auth::id();
    
        $cartItem = Cart::where('user_id', $userId)
                        ->where('product_id', $productId)
                        ->first();
    
        if ($cartItem) {
            $cartItem->qty += $qty;
            $cartItem->save();
        } else {
            Cart::create([
                'qty' => $qty,
                'user_id' => $userId,
                'product_id' => $productId,
            ]);
        }
    
        return redirect()->back()->with('success', 'Sản phẩm đã được thêm vào giỏ hàng');
    }
    

    public function updateQty(Request $request)
    {
        $request->validate([
            'id' => 'required|integer|exists:products,id',
            'qty' => 'required|integer|min:1',
        ]);
        // dd($request);
        $cartItem = Cart::where('user_id', 1)
            ->where('product_id', $request->id)
            ->first();

        if ($cartItem) {
            $cartItem->qty = $request->qty;
            $cartItem->save();

            return response()->json([
                'success' => true,
                'message' => 'Cập nhật số lượng thành công',
                'totalQty' => $cartItem->qty,
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Không tìm thấy sản phẩm trong giỏ hàng',
        ]);
    }



    // Xoas tung sp ra khoi gio hang
    public function delete($id)
    {
        Cart::find($id)->delete();

        return redirect()->back()->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng');
    }

    // Xoa all sp ra khoi gio hang
    public function clear(Request $request)
    {
        $cartItems = Cart::all();

        if ($cartItems->isNotEmpty()) {
            Cart::truncate()->delete();
            return redirect()->back()->with('success', 'Xóa toàn bộ sản phẩm thành công');
        }

        return redirect()->back()->with('error', 'Không có sản phẩm nào để xóa');
    }
}
