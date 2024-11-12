<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Account Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffffff;
            color: #000000;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #000000;
        }
        h1 {
            text-align: center;
            color: #000000;
        }
        p {
            font-size: 16px;
            line-height: 1.5;
        }
        .highlight {
            font-weight: bold;
            font-size: 18px;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
            color: #555555;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Welcome, {{ $name }}!</h1>
        <p>We are pleased to inform you that your account has been successfully created.</p>
        <p>Your login details are as follows:</p>
        <p><span class="highlight">Email:</span> {{ $user->email }}</p>
        <p><span class="highlight">Password:</span> <strong>{{ $password }}</strong></p>
        <p>We recommend that you log in and change your password for security reasons.</p>
        <div class="footer">
            <p>Thank you for choosing our service.</p>
        </div>
    </div>
</body>
</html>
