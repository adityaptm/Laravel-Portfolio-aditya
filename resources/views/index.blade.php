@extends('layouts.app')

@section('title', 'Aditya Pratama Putra - Portfolio')

@section('styles')
<style>
    .hero-stats {
        display: flex;
        gap: 2rem;
        margin-top: 2rem;
        flex-wrap: wrap;
    }
    .stat-item {
        text-align: center;
    }
    .stat-item h3 {
        font-size: 2rem;
        color: #10b981;
        margin: 0;
    }
    .stat-item p {
        font-size: 0.85rem;
        color: #94a3b8;
        margin: 0;
    }

    .quick-info-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 1.5rem;
    }
    .quick-info-table td {
        padding: 10px 14px;
        border: 1px solid #1e293b;
        color: #94a3b8;
        font-size: 0.9rem;
    }
    .quick-info-table td:first-child {
        color: #10b981;
        font-weight: 600;
        width: 160px;
        background: #111827;
    }
    .tech-list {
        list-style: none;
        display: flex;
        flex-wrap: wrap;
        gap: 0.6rem;
        margin-top: 0.8rem;
        padding: 0;
    }
    .tech-list li {
        background: rgba(16, 185, 129, 0.1);
        border: 1px solid rgba(16, 185, 129, 0.3);
        color: #10b981;
        padding: 4px 14px;
        border-radius: 20px;
        font-size: 0.82rem;
        font-weight: 600;
    }
    .info-section {
        background: #020617;
        padding: 60px 0;
    }
    .info-inner {
        max-width: 720px;
        margin: 0 auto;
    }
    .tech-heading {
        color: #f1f5f9;
        font-size: 1rem;
        margin: 2rem 0 0.8rem;
    }
</style>
@endsection

@section('content')
<!-- Hero Section -->
<section id="home" class="hero">
    <div class="container">
        <div class="hero-wrapper">
            <div class="hero-content">
                <h3>Halo, Saya</h3>
                <h1>Aditya Pratama Putra</h1>
                <h2 class="typing-wrapper">
                    <span id="typing-text"></span>
                    <span class="cursor">|</span>
                </h2>
                <p>
                    Mahasiswa Teknik Informatika dengan passion di Web Development,
                    Digital Forensik, dan Internet of Things
                </p>

                <div class="hero-buttons">
                    <a href="{{ url('/project') }}" class="btn btn-secondary">Lihat Project</a>
                    <a href="{{ asset('assets/cv-adit.pdf') }}" class="btn btn-primary" download>
                        <i class="bx bx-download"></i> Download CV
                    </a>
                </div>

                <div class="social-links">
                    <a href="https://www.linkedin.com/in/aditya-pratama-putra-525a54366/" target="_blank" title="LinkedIn"><i class="bx bxl-linkedin-square"></i></a>
                    <a href="https://github.com/adityaptm" target="_blank" title="GitHub"><i class="bx bxl-github"></i></a>
                    <a href="https://www.instagram.com/adityaptmptr_/" target="_blank" title="Instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://wa.me/6281391664927" target="_blank" title="WhatsApp"><i class="bx bxl-whatsapp"></i></a>
                    <a href="mailto:adityapratama170504@gmail.com" title="Email"><i class="bx bx-envelope"></i></a>
                </div>

                <div class="hero-stats">
                    <div class="stat-item">
                        <h3>10+</h3>
                        <p>Projects</p>
                    </div>
                    <div class="stat-item">
                        <h3>2</h3>
                        <p>Publikasi</p>
                    </div>
                    <div class="stat-item">
                        <h3>3.95</h3>
                        <p>IPK</p>
                    </div>
                </div>
            </div>

            <div class="hero-image">
                <div class="profile-image">
                    <img src="{{ asset('assets/profile_adit.png') }}" alt="Aditya Pratama Putra" />
                    <div class="profile-border"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Info Section -->
<section class="info-section">
    <div class="container">
        <div class="section-title">
            <h2>Info Singkat</h2>
            <p>Ringkasan profil saya</p>
        </div>
        <div class="info-inner">
            <table class="quick-info-table">
                <tbody>
                    <tr>
                        <td><i class="bx bx-user"></i> Nama</td>
                        <td>Aditya Pratama Putra</td>
                    </tr>
                    <tr>
                        <td><i class="bx bxs-graduation"></i> Pendidikan</td>
                        <td>S1 Teknik Informatika – Universitas Paramadina</td>
                    </tr>
                    <tr>
                        <td><i class="bx bx-map"></i> Lokasi</td>
                        <td>Bekasi, Jawa Barat</td>
                    </tr>
                    <tr>
                        <td><i class="bx bx-award"></i> IPK</td>
                        <td>3.95 / 4.00</td>
                    </tr>
                    <tr>
                        <td><i class="bx bx-envelope"></i> Email</td>
                        <td>
                            <a href="mailto:adityapratama170504@gmail.com" style="color: #10b981">adityapratama170504@gmail.com</a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="bx bx-phone"></i> Telepon</td>
                        <td>
                            <a href="tel:081391664927" style="color: #10b981">0813 9166 4927</a>
                        </td>
                    </tr>
                    <tr>
                        <td><i class="bx bx-code-alt"></i> Keahlian</td>
                        <td>PHP, JavaScript, MySQL, IoT, WordPress</td>
                    </tr>
                    <tr>
                        <td><i class="bx bx-link"></i> GitHub</td>
                        <td>
                            <a href="https://github.com/adityaptm" target="_blank" style="color: #10b981">github.com/adityaptm</a>
                        </td>
                    </tr>
                </tbody>
            </table>

            <h3 class="tech-heading">Teknologi yang Saya Gunakan</h3>
            <ul class="tech-list">
                <li>PHP Native</li>
                <li>JavaScript</li>
                <li>MySQL</li>
                <li>HTML5 &amp; CSS3</li>
                <li>WordPress</li>
                <li>MQTT</li>
                <li>Node-RED</li>
                <li>Grafana</li>
                <li>Figma</li>
                <li>Python</li>
                <li>C#</li>
                <li>GitHub</li>
            </ul>
        </div>
    </div>
</section>
@endsection
