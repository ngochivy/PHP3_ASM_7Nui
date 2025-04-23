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
            $adminMail->Body = "
<html>
<head>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            padding: 30px;
            margin: 0;
        }
        .container {
            background-color: #ffffff;
            border-radius: 8px;
            padding: 25px 30px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        }
        h2 {
            color: #333333;
            margin-bottom: 20px;
        }
        p {
            font-size: 15px;
            color: #444444;
            line-height: 1.6;
        }
        .label {
            font-weight: bold;
            color: #555555;
        }
        .footer {
            margin-top: 30px;
            font-size: 13px;
            color: #888888;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>📬 Thông báo liên hệ từ khách hàng</h2>

        <p><span class='label'>Họ và tên:</span> {$request->name}</p>
        <p><span class='label'>Email:</span> {$request->email}</p>
        <p><span class='label'>Lời nhắn:</span><br>{$request->message}</p>

        <div class='footer'>
            Email này được gửi từ biểu mẫu liên hệ trên website. Nếu bạn không phải là người quản trị, vui lòng bỏ qua.
        </div>
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
            $userMail->Body = "
<html>
<head>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 30px;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            max-width: 600px;
            margin: auto;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
        }
        h2 {
            color: #4CAF50;
            margin-bottom: 15px;
        }
        p {
            font-size: 15px;
            color: #444444;
            line-height: 1.6;
        }
        blockquote {
            font-style: italic;
            margin: 15px 0;
            padding-left: 15px;
            border-left: 4px solid #4CAF50;
            color: #555;
        }
        .footer {
            margin-top: 30px;
            font-size: 13px;
            color: #999999;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class='container'>
        <h2>📥 Xin cảm ơn bạn đã liên hệ</h2>

        <p>Xin chào <strong>{$request->name}</strong>,</p>

        <p>Chúng tôi đã nhận được tin nhắn của bạn và sẽ phản hồi trong thời gian sớm nhất.</p>

        <p><strong>Nội dung bạn đã gửi:</strong></p>
        <blockquote>{$request->message}</blockquote>

        <p>Trân trọng,<br><strong>Kidol</strong> 💖</p>

        <div class='footer'>
            Đây là email tự động, vui lòng không phản hồi lại email này.
        </div>
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
