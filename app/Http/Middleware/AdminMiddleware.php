<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check() && Auth::user()->is_admin) {
            return $next($request);
        }

        return $this->createForbiddenResponse();
    }

    /**
     * Tạo response 403 với chuyển hướng tự động
     */
    protected function createForbiddenResponse(): Response
    {
        $html = <<<'HTML'
        <!DOCTYPE html>
        <html lang="vi">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="refresh" content="4; url=/" />
            <title>403 - Truy cập bị từ chối</title>
            <style>
                * {
                    margin: 0;
                    padding: 0;
                    box-sizing: border-box;
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }
                body {
                    background-color: #f8f9fa;
                    color: #343a40;
                    display: flex;
                    justify-content: center;
                    align-items: center;
                    height: 100vh;
                    text-align: center;
                    padding: 20px;
                }
                .container {
                    max-width: 600px;
                    padding: 40px;
                    background: white;
                    border-radius: 10px;
                    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                }
                h1 {
                    color: #dc3545;
                    margin-bottom: 20px;
                    font-size: 2.5rem;
                }
                p {
                    margin-bottom: 15px;
                    font-size: 1.1rem;
                    line-height: 1.6;
                }
                .countdown {
                    font-weight: bold;
                    color: #007bff;
                    font-size: 1.3rem;
                }
                .logo {
                    margin-bottom: 20px;
                    max-width: 150px;
                }
            </style>
        </head>
        <body>
            <div class="container">
                <h1>403 - Truy cập bị từ chối</h1>
                <p>Bạn không có quyền truy cập vào trang quản trị này.</p>
                <p>Hệ thống sẽ tự động chuyển hướng về trang chủ sau <span class="countdown">4</span> giây...</p>
                <p>Hoặc <a href="/" style="color: #007bff; text-decoration: none;">nhấn vào đây</a> để về trang chủ ngay</p>
            </div>

            <script>
                // Countdown đồng bộ với meta refresh
                let seconds = 4;
                const countdownElement = document.querySelector('.countdown');
                const timer = setInterval(() => {
                    seconds--;
                    countdownElement.textContent = seconds;
                    if (seconds <= 0) {
                        clearInterval(timer);
                    }
                }, 1000);
            </script>
        </body>
        </html>
        HTML;

        return new Response($html, 403);
    }
}