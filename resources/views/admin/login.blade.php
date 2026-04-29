<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | Radhey Book</title>
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Orbitron:wght@700;900&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            background: #0a0a1a;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-image: radial-gradient(circle at 20% 50%, rgba(212,175,55,0.05) 0%, transparent 50%),
                              radial-gradient(circle at 80% 50%, rgba(96,165,250,0.05) 0%, transparent 50%);
        }
        .login-card {
            background: linear-gradient(135deg, #1a1a2e, #16213e);
            border: 1px solid rgba(212,175,55,0.2);
            border-radius: 16px;
            padding: 48px 40px;
            width: 100%;
            max-width: 420px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.5);
        }
        .login-logo {
            text-align: center;
            margin-bottom: 32px;
        }
        .login-logo .brand {
            font-family: 'Orbitron', sans-serif;
            font-size: 28px;
            font-weight: 900;
            background: linear-gradient(135deg, #d4af37, #f5d060);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .login-logo .sub {
            color: #b8b8b8;
            font-size: 14px;
            margin-top: 4px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        .form-group label {
            display: block;
            color: #b8b8b8;
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 6px;
        }
        .form-group input {
            width: 100%;
            padding: 12px 16px;
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 8px;
            color: #fff;
            font-size: 14px;
            font-family: 'Poppins', sans-serif;
            transition: border-color 0.3s;
        }
        .form-group input:focus {
            outline: none;
            border-color: #d4af37;
        }
        .form-group input::placeholder {
            color: #8a8a8a;
        }
        .remember-row {
            display: flex;
            align-items: center;
            gap: 8px;
            margin-bottom: 24px;
        }
        .remember-row input[type="checkbox"] {
            accent-color: #d4af37;
            width: 16px;
            height: 16px;
        }
        .remember-row label {
            color: #b8b8b8;
            font-size: 13px;
            cursor: pointer;
        }
        .btn-login {
            width: 100%;
            padding: 14px;
            background: linear-gradient(135deg, #d4af37, #f5d060);
            color: #0f0f17;
            border: none;
            border-radius: 8px;
            font-size: 15px;
            font-weight: 600;
            font-family: 'Poppins', sans-serif;
            cursor: pointer;
            transition: transform 0.2s, box-shadow 0.2s;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(212,175,55,0.3);
        }
        .alert {
            padding: 12px 16px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 13px;
        }
        .alert-error {
            background: rgba(239,68,68,0.15);
            border: 1px solid rgba(239,68,68,0.3);
            color: #f87171;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            color: #b8b8b8;
            font-size: 13px;
            text-decoration: none;
        }
        .back-link:hover { color: #d4af37; }
        @media (max-width: 480px) {
            body { padding: 16px; }
            .login-card { padding: 32px 24px; }
            .login-logo .brand { font-size: 24px; }
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-logo">
            <div class="brand">RADHEY BOOK</div>
            <div class="sub">Admin Panel</div>
        </div>

        @if(session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div class="form-group">
                <label>Email Address</label>
                <input type="email" name="email" value="{{ old('email') }}" placeholder="xyz@gmail.com" required autofocus>
                @error('email')<span style="color:#f87171;font-size:12px">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label>Password</label>
                <div style="position:relative;">
                    <input type="password" name="password" id="login-password" placeholder="Enter password" required style="padding-right:45px;">
                    <button type="button" onclick="var p=document.getElementById('login-password');var e=this;if(p.type==='password'){p.type='text';e.innerHTML='&#128065;&#65039;';}else{p.type='password';e.innerHTML='&#128065;';}" style="position:absolute;right:10px;top:50%;transform:translateY(-50%);background:none;border:none;cursor:pointer;font-size:18px;color:#888;padding:4px;">&#128065;</button>
                </div>
                @error('password')<span style="color:#f87171;font-size:12px">{{ $message }}</span>@enderror
            </div>
            <div class="remember-row">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </div>
            <button type="submit" class="btn-login">Sign In</button>
        </form>
        <a href="{{ route('home') }}" class="back-link">&larr; Back to Website</a>
    </div>
</body>
</html>
