<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

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
            return response()->json([
                'message' => 'Bạn cần đăng nhập để bình luận.'
            ], 401);
        }

        $user = Auth::user();
        $productId = $request->route('slug'); // lấy ID sản phẩm từ route

        // Kiểm tra user đã từng mua sản phẩm này chưa
        $hasPurchased = DB::table('orders')
            ->join('order_details', 'orders.id', '=', 'order_details.order_id')
            ->where('orders.user_id', $user->id)
            ->where('order_details.product_id', $productId)
            ->exists();

        if (! $hasPurchased) {
            return response()->json([
                'message' => 'Bạn cần mua sản phẩm này để bình luận.'
            ], 403); // 403 Forbidden

        }

        return $next($request); // chuyển tiếp nếu đã mua
    }
}
