<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Reset Password</title>
</head>
<body style="font-family: Arial, sans-serif; background:#f6f6f6; padding:20px;">
<div style="max-width:600px; margin:0 auto; background:#fff; border-radius:8px; overflow:hidden; box-shadow:0 1px 3px rgba(0,0,0,0.1);">
  <div style="background:#4f46e5; color:#fff; padding:20px;">
    <h2 style="margin:0">Reset Your Password</h2>
  </div>
  <div style="padding:20px; color:#333;">
    <p>Hi {{ $name }},</p>
    <p>You requested a password reset. Click the button below to set a new password. This link will expire in {{ $expire }} minutes.</p>
    <p style="text-align:center; margin:30px 0;">
      <a href="{{ $url }}" style="background:#4f46e5;color:#fff;padding:12px 18px;border-radius:6px;text-decoration:none;display:inline-block;">Reset Password</a>
    </p>
    <p>If you didn't request a password reset, you can safely ignore this email.</p>
    <p style="font-size:12px;color:#666;margin-top:18px;">— The Team</p>
  </div>
</div>
</body>
</html>
