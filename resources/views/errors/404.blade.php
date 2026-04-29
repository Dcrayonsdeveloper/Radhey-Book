<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>404 - Page Not Found | Radhey Book</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&family=Orbitron:wght@700;900&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #0a0a1a 0%, #1a1a2e 50%, #16213e 100%);
            color: #fff;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 20px;
        }
        .error-container { max-width: 600px; }
        .error-code {
            font-family: 'Orbitron', sans-serif;
            font-size: 120px;
            font-weight: 900;
            background: linear-gradient(135deg, #d4af37, #f5d060);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            line-height: 1;
            margin-bottom: 16px;
        }
        .error-title {
            font-family: 'Orbitron', sans-serif;
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 16px;
        }
        .error-text {
            color: #b0b0b0;
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 40px;
        }
        .error-actions { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
        .btn {
            display: inline-flex;
            align-items: center;
            padding: 14px 32px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 15px;
            text-decoration: none;
            transition: all 0.3s;
        }
        .btn-gold {
            background: linear-gradient(135deg, #d4af37, #f5d060);
            color: #0a0a1a;
        }
        .btn-gold:hover { transform: translateY(-2px); box-shadow: 0 8px 25px rgba(212,175,55,0.4); }
        .btn-outline {
            border: 2px solid rgba(212,175,55,0.5);
            color: #d4af37;
            background: transparent;
        }
        .btn-outline:hover { background: rgba(212,175,55,0.1); border-color: #d4af37; }
        @media (max-width: 480px) {
            .error-code { font-size: 80px; }
            .error-title { font-size: 22px; }
            .error-actions { flex-direction: column; }
            .btn { justify-content: center; }
        }
    </style>
</head>
<body>
    <div class="error-container">
        <div class="error-code">404</div>
        <h1 class="error-title">Page Not Found</h1>
        <p class="error-text">The page you're looking for doesn't exist or has been moved. Don't worry, let's get you back on track.</p>
        <div class="error-actions">
            <a href="{{ url('/') }}" class="btn btn-gold">Go to Homepage</a>
            <a href="{{ url('/contact') }}" class="btn btn-outline">Contact Us</a>
        </div>
    </div>
</body>
</html>
