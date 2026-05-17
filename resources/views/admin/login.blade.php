<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin - Aditya.dev</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <style>
    body.login-page {
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      background: #020617;
      padding: 20px;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    .login-card {
      background: #111827;
      border: 1px solid #1e293b;
      padding: 40px;
      border-radius: 16px;
      width: 100%;
      max-width: 400px;
      box-shadow: 0 10px 25px rgba(16, 185, 129, 0.1);
    }
    .login-header {
      text-align: center;
      margin-bottom: 30px;
    }
    .login-header .logo {
      font-size: 24px;
      font-weight: 700;
      color: #f1f5f9;
    }
    .login-header .logo span {
      color: #10b981;
    }
    .login-header h2 {
      font-size: 1.8rem;
      color: #f1f5f9;
      margin-bottom: 8px;
    }
    .login-header p {
      color: #94a3b8;
      font-size: 0.9rem;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      color: #94a3b8;
      font-size: 0.85rem;
      margin-bottom: 8px;
    }
    .form-group input {
      width: 100%;
      padding: 12px 16px;
      background: #020617;
      border: 1px solid #1e293b;
      border-radius: 8px;
      color: #f1f5f9;
      font-size: 0.95rem;
      transition: 0.3s;
      box-sizing: border-box;
    }
    .form-group input:focus {
      border-color: #10b981;
      outline: none;
      box-shadow: 0 0 0 2px rgba(16, 185, 129, 0.2);
    }
    .btn-login {
      width: 100%;
      background: #10b981;
      color: #020617;
      border: none;
      padding: 14px;
      border-radius: 8px;
      font-size: 1rem;
      font-weight: 700;
      cursor: pointer;
      transition: 0.3s;
      margin-top: 10px;
    }
    .btn-login:hover {
      background: #059669;
      transform: translateY(-2px);
    }
    .error-alert {
      background: rgba(239, 68, 68, 0.1);
      border: 1px solid #ef4444;
      color: #ef4444;
      padding: 12px;
      border-radius: 8px;
      font-size: 0.85rem;
      margin-bottom: 20px;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .back-to-home {
      display: block;
      text-align: center;
      margin-top: 25px;
      color: #64748b;
      text-decoration: none;
      font-size: 0.85rem;
      transition: 0.3s;
    }
    .back-to-home:hover {
      color: #10b981;
    }
  </style>
</head>
<body class="login-page">

  <div class="login-card">
    <div class="login-header">
      <div class="logo" style="margin-bottom: 15px;">Aditya<span>.dev</span></div>
      <h2>Admin Login</h2>
      <p>Silakan masuk untuk mengakses dashboard</p>
    </div>

    @if(session('error'))
      <div class="error-alert">
        <i class='bx bx-error-circle'></i>
        {{ session('error') }}
      </div>
    @endif

    <form method="POST" action="{{ url('/admin/login') }}">
      @csrf
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" placeholder="Masukkan username (admin)" required>
      </div>

      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="Masukkan password (admin123)" required>
      </div>

      <button type="submit" class="btn-login">Masuk ke Dashboard</button>
    </form>

    <a href="{{ url('/') }}" class="back-to-home">
      <i class='bx bx-left-arrow-alt'></i> Kembali ke Beranda
    </a>
  </div>

</body>
</html>
