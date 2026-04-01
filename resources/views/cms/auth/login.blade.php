<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>دخول لوحة المحتوى</title>
    <link href="https://fonts.googleapis.com/css2?family=Tajawal:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body { margin:0; min-height:100vh; display:flex; align-items:center; justify-content:center; font-family:'Tajawal',sans-serif;
            background:linear-gradient(135deg,#0B1140,#1e3a8a); }
        .box { background:#fff; padding:2rem; border-radius:16px; width:100%; max-width:400px; box-shadow:0 25px 50px rgba(0,0,0,.25); }
        h1 { margin:0 0 1.25rem; font-size:1.15rem; text-align:center; color:#0B1140; }
        label { display:block; margin-bottom:.35rem; font-size:.9rem; color:#64748b; }
        input { width:100%; padding:.65rem; border:1px solid #e2e8f0; border-radius:8px; margin-bottom:1rem; font:inherit; }
        .btn { width:100%; padding:.7rem; border:none; border-radius:8px; background:#2563eb; color:#fff; font:inherit; font-weight:600; cursor:pointer; }
        .err { color:#b91c1c; font-size:.85rem; margin-top:-.5rem; margin-bottom:.75rem; }
    </style>
</head>
<body>
<div class="box">
    <h1>لوحة محتوى الموقع</h1>
    <form method="post" action="{{ route('cp.login') }}">
        @csrf
        <label for="email">البريد</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username">
        @error('email')<div class="err">{{ $message }}</div>@enderror
        <label for="password">كلمة المرور</label>
        <input id="password" type="password" name="password" required autocomplete="current-password">
        <label style="display:flex;align-items:center;gap:.5rem;margin-bottom:1rem;"><input type="checkbox" name="remember" value="1"> تذكرني</label>
        <button type="submit" class="btn">دخول</button>
    </form>
</div>
</body>
</html>
