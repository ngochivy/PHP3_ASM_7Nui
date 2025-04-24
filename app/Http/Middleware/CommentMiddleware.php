<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;
use App\Models\Product; // thêm dòng này ở đầu

class CommentMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login') // Chuyển hướng đến trang đăng nhập
                ->with('error', 'Bạn cần đăng nhập để bình luận.');
        } 

        $user = Auth::user();
        $slug = $request->route('slug'); // Lấy slug từ URL

        $product = Product::where('slug', $slug)->first();

        if (! $product) {
            return response()->json([
                'message' => 'Sản phẩm không tồn tại.'
            ], 404);
        }

        $productId = $product->id;


        // Kiểm tra user đã từng mua sản phẩm này chưa
        $hasPurchased = DB::table('orders')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->where('orders.user_id', $user->id)
            ->where('order_details.product_id', $productId)
            ->where('orders.status', 'Hoàn thành - Đã nhận hàng')
            ->exists();
        if (! $hasPurchased) {
            return redirect()->back()->with('error', 'Bạn cần mua sản phẩm này để bình luận');
        }
        return $next($request);
    }
}
