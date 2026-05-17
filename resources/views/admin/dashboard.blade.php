<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Pesan - Aditya.dev</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <style>
    body {
        margin: 0;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #020617;
        color: #f1f5f9;
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 20px;
    }
    .navbar {
        background-color: #111827;
        padding: 15px 0;
        border-bottom: 1px solid #1e293b;
    }
    .navbar .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    .logo {
        font-size: 24px;
        font-weight: 700;
        color: #f1f5f9;
    }
    .logo span {
        color: #10b981;
    }
    .nav-menu {
        list-style: none;
        display: flex;
        gap: 20px;
        margin: 0;
        padding: 0;
    }
    .nav-link {
        color: #94a3b8;
        text-decoration: none;
        font-size: 1rem;
        transition: 0.3s;
    }
    .nav-link:hover, .nav-link.active {
        color: #10b981;
    }
    .dashboard-container {
      padding: 40px 0;
    }
    .dashboard-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 30px;
    }
    .section-title h2 {
        margin: 0;
        color: #10b981;
    }
    .section-title p {
        margin: 5px 0 0;
        color: #94a3b8;
    }
    .btn-primary {
        background: #10b981;
        color: #020617;
        padding: 10px 20px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
        display: inline-flex;
        align-items: center;
        gap: 5px;
    }
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 20px;
      margin-bottom: 40px;
    }
    .stat-card {
      background: #111827;
      border: 1px solid #1e293b;
      padding: 20px;
      border-radius: 12px;
      display: flex;
      align-items: center;
      gap: 15px;
    }
    .stat-card i {
      font-size: 2.5rem;
      color: #10b981;
    }
    .stat-info h3 {
      font-size: 0.9rem;
      color: #94a3b8;
      margin: 0 0 5px;
    }
    .stat-info p {
      font-size: 1.5rem;
      font-weight: 700;
      color: #f1f5f9;
      margin: 0;
    }
    .table-container {
      background: #111827;
      border: 1px solid #1e293b;
      border-radius: 12px;
      overflow-x: auto;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      text-align: left;
    }
    th {
      background: #0f172a;
      padding: 15px 20px;
      color: #94a3b8;
      font-size: 0.85rem;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      border-bottom: 1px solid #1e293b;
    }
    td {
      padding: 15px 20px;
      color: #f1f5f9;
      font-size: 0.9rem;
      border-bottom: 1px solid #1e293b;
      vertical-align: top;
    }
    tr:last-child td {
      border-bottom: none;
    }
    tr:hover td {
      background: rgba(16, 185, 129, 0.03);
    }
    .btn-action {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      width: 34px;
      height: 34px;
      border-radius: 6px;
      text-decoration: none;
      transition: 0.3s;
      font-size: 1.1rem;
    }
    .btn-edit {
      color: #fbbf24;
      background: rgba(251, 191, 36, 0.1);
    }
    .btn-edit:hover {
      background: #fbbf24;
      color: white;
    }
    .btn-delete {
      color: #ef4444;
      background: rgba(239, 68, 68, 0.1);
    }
    .btn-delete:hover {
      background: #ef4444;
      color: white;
    }
    .action-buttons {
      display: flex;
      gap: 8px;
    }
    .message-content {
      max-width: 300px;
      white-space: pre-wrap;
      word-break: break-word;
    }
    .empty-state {
      text-align: center;
      padding: 50px;
      color: #94a3b8;
    }
    .empty-state i {
      font-size: 3rem;
      margin-bottom: 15px;
      display: block;
    }
    .alert.success {
        background: rgba(16, 185, 129, 0.1);
        border: 1px solid rgba(16, 185, 129, 0.3);
        color: #10b981;
        padding: 1rem;
        border-radius: 6px;
        margin-bottom: 1.5rem;
    }
  </style>
</head>
<body>

<nav class="navbar">
  <div class="container">
    <div class="logo">Aditya<span>.dev</span></div>
    <ul class="nav-menu">
      <li><a href="{{ url('/') }}" class="nav-link">Home Web</a></li>
      <li><a href="{{ url('/admin/dashboard') }}" class="nav-link active">Dashboard</a></li>
      <li><a href="{{ url('/admin/logout') }}" class="nav-link" style="color: #ef4444;"><i class='bx bx-log-out'></i> Logout</a></li>
    </ul>
  </div>
</nav>

<div class="container dashboard-container">
  <div class="dashboard-header">
    <div class="section-title" style="text-align: left; margin-bottom: 0;">
      <h2>Message Dashboard</h2>
      <p>Kelola pesan yang masuk dari pengunjung</p>
    </div>
  </div>

  @if(session('success'))
      <div class="alert success">{{ session('success') }}</div>
  @endif

  <div class="stats-grid">
    <div class="stat-card">
      <i class='bx bx-envelope'></i>
      <div class="stat-info">
        <h3>Total Pesan</h3>
        <p>{{ count($messages) }}</p>
      </div>
    </div>
  </div>

  <div class="table-container">
    @if(count($messages) > 0)
    <table>
      <thead>
        <tr>
          <th>Nama</th>
          <th>Kontak</th>
          <th>Subject</th>
          <th>Pesan</th>
          <th>Tanggal</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach($messages as $row)
        <tr>
          <td>
            <strong>{{ $row->name }}</strong>
          </td>
          <td>
            <div style="font-size: 0.85rem; color: #94a3b8;">{{ $row->email }}</div>
          </td>
          <td>{{ $row->subject }}</td>
          <td>
            <div class="message-content">{{ Str::limit($row->message, 100) }}</div>
          </td>
          <td>
             <div style="font-size: 0.85rem; color: #94a3b8;">{{ $row->created_at->format('d M Y H:i') }}</div>
          </td>
          <td>
            <div class="action-buttons">
              <a href="{{ url('/admin/edit/'.$row->id) }}" class="btn-action btn-edit" title="Edit">
                <i class='bx bx-edit-alt'></i>
              </a>
              <a href="{{ url('/admin/delete/'.$row->id) }}" class="btn-action btn-delete" title="Delete" 
                 onclick="return confirm('Apakah Anda yakin ingin menghapus pesan ini?')">
                <i class='bx bx-trash'></i>
              </a>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
    @else
    <div class="empty-state">
      <i class='bx bx-mail-send'></i>
      <p>Belum ada pesan yang masuk.</p>
    </div>
    @endif
  </div>
</div>

</body>
</html>
