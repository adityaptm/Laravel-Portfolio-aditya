<!doctype html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard Pesan - Aditya.dev</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
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
