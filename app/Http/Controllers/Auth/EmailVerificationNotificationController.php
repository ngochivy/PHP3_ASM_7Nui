<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
use App\Models\User;

class EmailVerificationNotificationController extends Controller
{
    /**
     * Send a new email verification notification.
     */
    public function store(Request $request): RedirectResponse
    {
        if ($request->user()->hasVerifiedEmail()) {
            return redirect()->intended(route('dashboard', absolute: false));
        }

        // Gửi lại email xác minh
        $request->user()->sendEmailVerificationNotification();

        // Kích hoạt sự kiện Registered (mặc dù không phải là hành động đăng ký mới)
        event(new Registered($request->user()));

        return back()->with('status', 'verification-link-sent');
    }
}