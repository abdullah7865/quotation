<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Password Reset Request</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .email-container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            text-align: center;
            padding-bottom: 20px;
            border-bottom: 1px solid #e1e1e1;
        }
        .email-header img {
            max-width: 150px;
            height: auto;
        }
        .email-content {
            padding: 20px;
        }
        h1 {
            color: #333;
            font-size: 24px;
            margin-top: 0;
        }
        p {
            margin: 0 0 15px;
        }
        a.button {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            color: #ffffff;
            background-color: #1a73e8;
            border-radius: 5px;
            text-align: center;
            text-decoration: none;
        }
        .email-footer {
            margin-top: 20px;
            font-size: 12px;
            color: #777;
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="email-header">
            <img src="{{ asset('build/assets/images/app-logo.svg') }}" alt="Company Logo">
        </div>
        <div class="email-content">
            <h1>Password Reset Request</h1>
            <p>Hello {{ $name }},</p>
            <p>We received a request to reset your password. Please click the button below to create a new password:</p>
            <p><a href="{{ $resetUrl }}" class="button">Reset Password</a></p>
            <p>If you did not request this password reset, please disregard this email.</p>
            <p>Thank you</p>
        </div>
        <div class="email-footer">
            &copy; {{ date('Y') }} Portal. All rights reserved.
        </div>
    </div>
</body>
</html>
