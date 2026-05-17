<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Data - Admin Dashboard</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
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
