<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PHPMailer\PHPMailer\PHPMailer;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    public static function index()
    {
        return view('client.contact.index');
    }

    public function sendEmail(Request $request)
    {
        // Validate input data
        $validator = Validator::make($request->all(), [
            'name'    => 'required|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|max:1000',
        ], [
            'name.required'    => 'Vui lòng nhập tên của người gửi',
            'name.max'         => 'Tên không được quá 255 ký tự',
            'email.required'   => 'Vui lòng nhập email của bạn',
            'email.email'      => 'Email không hợp lệ',
            'email.max'        => 'Email không được quá 255 ký tự',
            'message.required' => 'Vui lòng nhập lời nhắn',
            'message.max'      => 'Lời nhắn không được quá 1000 ký tự',
        ]);

        // Kiểm tra lỗi validation
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        try {
            // === GỬI MAIL CHO ADMIN ===
            $adminMail = new PHPMailer(true);
            $adminMail->isSMTP();
            $adminMail->Host       = env('MAIL_HOST');
            $adminMail->SMTPAuth   = true;
            $adminMail->Username   = env('MAIL_USERNAME');
            $adminMail->Password   = env('MAIL_PASSWORD');
            $adminMail->Port       = env('MAIL_PORT');
            $adminMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $adminMail->CharSet    = 'UTF-8';  // Set charset to UTF-8

            $adminMail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $adminMail->addAddress(env('MAIL_FROM_ADDRESS'));

            $adminMail->isHTML(true);
            $adminMail->Subject = '=?UTF-8?B?' . base64_encode('Tin nhắn liên hệ mới từ website') . '?=';
            $adminMail->Body    = "
                <html>
                <head>
                    <style>
                        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; }
                        .container { background-color: #ffffff; border-radius: 8px; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
                        h3 { color: #4CAF50; }
                        p { font-size: 14px; color: #333333; }
                        .footer { font-size: 12px; color: #999999; }
                        .button { background-color: #4CAF50; color: #ffffff; padding: 10px 20px; border-radius: 5px; text-decoration: none; }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <h3>Thông tin khách gửi:</h3>
                        <p><strong>Họ tên:</strong> {$request->name}</p>
                        <p><strong>Email:</strong> {$request->email}</p>
                        <p><strong>Lời nhắn:</strong> {$request->message}</p>
                        <p class='footer'>Nếu bạn không phải là người quản trị website, vui lòng bỏ qua email này.</p>
                    </div>
                </body>
                </html>
            ";

            $adminMail->send();

            // === GỬI MAIL CHO NGƯỜI DÙNG ===
            $userMail = new PHPMailer(true);
            $userMail->isSMTP();
            $userMail->Host       = env('MAIL_HOST');
            $userMail->SMTPAuth   = true;
            $userMail->Username   = env('MAIL_USERNAME');
            $userMail->Password   = env('MAIL_PASSWORD');
            $userMail->Port       = env('MAIL_PORT');
            $userMail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $userMail->CharSet    = 'UTF-8';  // Set charset to UTF-8

            $userMail->setFrom(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
            $userMail->addAddress($request->email, $request->name);

            $userMail->isHTML(true);
            $userMail->Subject = '=?UTF-8?B?' . base64_encode('Cảm ơn bạn đã liên hệ Kidol') . '?=';
            $userMail->Body    = "
                <html>
                <head>
                    <style>
                        body { font-family: Arial, sans-serif; background-color: #f4f4f4; margin: 0; padding: 20px; }
                        .container { background-color: #ffffff; border-radius: 8px; padding: 20px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); }
                        h3 { color: #4CAF50; }
                        p { font-size: 14px; color: #333333; }
                        .footer { font-size: 12px; color: #999999; }
                        .button { background-color: #4CAF50; color: #ffffff; padding: 10px 20px; border-radius: 5px; text-decoration: none; }
                    </style>
                </head>
                <body>
                    <div class='container'>
                        <p>Xin chào <strong>{$request->name}</strong>,</p>
                        <p>Chúng tôi đã nhận được tin nhắn của bạn:</p>
                        <blockquote>{$request->message}</blockquote>
                        <p>Chúng tôi sẽ phản hồi sớm nhất có thể.</p>
                        <p class='footer'>Trân trọng,<br>Kidol</p>
                    </div>
                </body>
                </html>
            ";

            $userMail->send();

          
            return redirect()->back()->with('success', 'Gửi email thành công!');
        } catch (\Exception $e) {
            
            return redirect()->back()->with('error', 'Không gửi được email. Lỗi: ' . $e->getMessage());
        }
    }
}
