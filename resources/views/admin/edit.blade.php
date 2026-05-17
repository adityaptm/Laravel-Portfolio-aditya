<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data - Admin Dashboard</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <style>
    body {
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #020617;
        color: #f1f5f9;
    }
    .form-container {
      max-width: 600px;
      margin: 50px auto;
      background: #111827;
      border: 1px solid #1e293b;
      padding: 30px;
      border-radius: 12px;
    }
    .form-header {
      margin-bottom: 25px;
      text-align: center;
    }
    .form-header h2 {
      color: #f1f5f9;
      margin: 0;
    }
    .form-group {
      margin-bottom: 15px;
    }
    .form-group label {
      display: block;
      color: #94a3b8;
      margin-bottom: 5px;
      font-size: 0.9rem;
    }
    .form-group input, .form-group textarea {
      width: 100%;
      padding: 10px;
      background: #020617;
      border: 1px solid #1e293b;
      border-radius: 6px;
      color: white;
      box-sizing: border-box;
    }
    .btn-save {
      background: #10b981;
      color: #020617;
      border: none;
      padding: 12px 20px;
      border-radius: 6px;
      cursor: pointer;
      font-weight: 600;
      width: 100%;
      margin-top: 10px;
    }
    .btn-back {
      display: block;
      text-align: center;
      margin-top: 15px;
      color: #94a3b8;
      text-decoration: none;
      font-size: 0.9rem;
    }
    .btn-back:hover {
        color: #10b981;
    }
    .alert {
        padding: 10px;
        border-radius: 6px;
        margin-bottom: 15px;
    }
    .alert.error {
        background: rgba(239, 68, 68, 0.1);
        border: 1px solid #ef4444;
        color: #ef4444;
    }
  </style>
</head>
<body>

<div class="container">
  <div class="form-container">
    <div class="form-header">
      <h2>Edit Data Pesan</h2>
      <p style="color: #94a3b8;">Perbarui detail pesan ID: {{ $message->id }}</p>
    </div>

    @if($errors->any())
        <div class="alert error">Semua field wajib diisi!</div>
    @endif

    <form method="POST" action="{{ url('/admin/edit/'.$message->id) }}">
      @csrf
      <div class="form-group">
        <label>Nama</label>
        <input type="text" name="name" value="{{ $message->name }}" required>
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="email" name="email" value="{{ $message->email }}" required>
      </div>
      <div class="form-group">
        <label>Subject</label>
        <input type="text" name="subject" value="{{ $message->subject }}" required>
      </div>
      <div class="form-group">
        <label>Pesan</label>
        <textarea name="message" rows="5" required>{{ $message->message }}</textarea>
      </div>
      <button type="submit" class="btn-save">Perbarui Data</button>
    </form>

    <a href="{{ url('/admin/dashboard') }}" class="btn-back">
      <i class='bx bx-arrow-back'></i> Kembali ke Dashboard
    </a>
  </div>
</div>

</body>
</html>
