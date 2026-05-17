@extends('layouts.app')

@section('title', 'About - Aditya Pratama Putra')

@section('styles')
<style>
    .about-highlights {
        margin-top: 1.5rem;
    }
    .about-highlights h4 {
        color: #10b981;
        font-size: 0.85rem;
        text-transform: uppercase;
        letter-spacing: 0.07em;
        margin-bottom: 0.8rem;
    }
    .about-highlights ul {
        list-style: none;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    .about-highlights ul li {
        color: #94a3b8;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
        gap: 0.6rem;
    }
    .about-highlights ul li::before {
        content: "";
        display: inline-block;
        width: 6px;
        height: 6px;
        border-radius: 50%;
        background: #10b981;
        flex-shrink: 0;
    }
</style>
@endsection

@section('content')
<section id="about" class="about">
    <div class="container">
        <div class="section-title">
            <h2>Tentang Saya</h2>
            <p>Mengenal lebih dekat</p>
        </div>
        <div class="about-wrapper">
            <div class="about-text">
                <h3>Web Developer &amp; IoT Developer</h3>
                <p>
                    Mahasiswa Teknik Informatika di Universitas Paramadina (semester
                    6) dengan minat yang kuat di bidang Pengembangan Web dan
                    Internet of Things (IoT). Berpengalaman sebagai Intern Tata
                    Kelola TI dan Forensik Digital di Otoritas Jasa Keuangan (OJK).
                    Terampil dalam mengembangkan aplikasi web menggunakan WordPress,
                    PHP Native, dan MySQL (CRUD), serta membangun sistem IoT
                    menggunakan MQTT dengan integrasi Node-RED dan visualisasi data
                    melalui Grafana. Aktif terlibat dalam penulisan ilmiah dengan
                    publikasi di jurnal terakreditasi nasional yang diindeks oleh
                    SINTA.
                </p>

                <div class="about-highlights">
                    <h4>Pencapaian</h4>
                    <ul>
                        <li>2 publikasi ilmiah di jurnal nasional terindeks SINTA 5</li>
                        <li>IPK 3.95 / 4.00 di Universitas Paramadina</li>
                        <li>Pengembangan 10+ proyek web dan IoT</li>
                        <li>Pengalaman Magang Instansi di Otoritas Jasa Keuangan</li>
                        <li>Aktif di kegiatan organisasi kampus</li>
                    </ul>
                </div>
            </div>

            <div class="about-info">
                <div class="info-item">
                    <i class="bx bx-map"></i>
                    <div>
                        <span>Lokasi</span>
                        <p>Bekasi, Jawa Barat</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="bx bxs-graduation"></i>
                    <div>
                        <span>Pendidikan</span>
                        <p>Universitas Paramadina</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="bx bx-award"></i>
                    <div>
                        <span>IPK</span>
                        <p>3.95</p>
                    </div>
                </div>
                <div class="info-item">
                    <i class="bx bx-briefcase"></i>
                    <div>
                        <span>Status</span>
                        <p>Mahasiswa Aktif</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
