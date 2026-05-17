<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin - Aditya.dev</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
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
