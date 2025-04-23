<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Cache;

class ThrottleFormSubmission
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
{
    $ip = $request->ip(); // hoặc dùng user ID nếu đã đăng nhập
    $cacheKey = 'form_submission_count_' . $ip;

    $maxAttempts = 5;
    $decaySeconds = 300; // 5 phút

    $data = Cache::get($cacheKey, ['count' => 0, 'expires_at' => now()->addSeconds($decaySeconds)]);

    // Nếu hết thời gian thì reset
    if (now()->greaterThan($data['expires_at'])) {
        $data = ['count' => 0, 'expires_at' => now()->addSeconds($decaySeconds)];
    }

    // Kiểm tra số lần gửi
    if ($data['count'] >= $maxAttempts) {
        $remaining = $data['expires_at']->diffInSeconds(now());
        return redirect()->back()->with('error', 'Bạn đã gửi quá nhiều lần. Hãy thử lại sau ' . ceil($remaining / 60) . ' phút.');
    }

    // Tăng số lần gửi
    $data['count']++;
    Cache::put($cacheKey, $data, $data['expires_at']);

    return $next($request);
}
}
