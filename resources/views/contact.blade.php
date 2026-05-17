@extends('layouts.app')

@section('title', 'Contact - Aditya Pratama Putra')


@section('content')
<section class="contact">
    <div class="container">
        <div class="section-title">
            <h2>Contact</h2>
            <p style="color:#94a3b8;">Silakan kirim pesan ke saya</p>
        </div>

        <div class="contact-wrapper">
            <!-- Contact Information -->
            <div class="contact-info">
                <div class="info-item">
                    <i class="bx bx-phone"></i>
                    <div>
                        <span>Telepon</span>
                        <p>081391664927</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="bx bx-envelope"></i>
                    <div>
                        <span>Email</span>
                        <p>adityapratama170504@gmail.com</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="bx bx-map"></i>
                    <div>
                        <span>Lokasi</span>
                        <p>Bekasi, Indonesia</p>
                    </div>
                </div>

                <div class="info-item">
                    <i class="bx bxl-linkedin-square"></i>
                    <div>
                        <span>LinkedIn</span>
                        <p>
                            <a href="https://www.linkedin.com/in/aditya-pratama-putra-525a54366/" target="_blank">
                                Kunjungi Profil
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="contact-form">
                @if(session('error'))
                    <div class="alert error">
                        <i class='bx bx-error-circle'></i>
                        <div>{{ session('error') }}</div>
                    </div>
                @endif

                @if(session('success'))
                    <div class="success-overlay" id="successOverlay">
                        <div class="success-card">
                            <div class="success-icon">
                                <i class='bx bx-check'></i>
                            </div>
                            <h3>Pesan Terkirim!</h3>
                            <p class="sub">Terima kasih. Saya akan segera menghubungi kamu.</p>
                            <button class="btn-close-success" onclick="closeSuccess()">
                                <i class='bx bx-x'></i> Tutup
                            </button>
                            <div class="progress-bar" id="progressBar"></div>
                        </div>
                    </div>
                @endif

                <form action="{{ url('/contact') }}" method="POST">
                    @csrf
                    <input type="text" name="name" placeholder="Nama" required value="{{ old('name') }}">
                    <input type="email" name="email" placeholder="Email" required value="{{ old('email') }}">
                    <input type="text" name="subject" placeholder="Subject" required value="{{ old('subject') }}">
                    <textarea name="message" rows="5" placeholder="Pesan" required>{{ old('message') }}</textarea>
                    <button type="submit">
                        <i class="bx bx-send"></i> Kirim Pesan
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection

@section('scripts')
<script>
function closeSuccess() {
    const overlay = document.getElementById("successOverlay");
    if (overlay) {
        overlay.style.opacity = "0";
        overlay.style.transition = "opacity 0.3s ease";
        setTimeout(() => overlay.remove(), 300);
    }
}

@if(session('success'))
    setTimeout(() => closeSuccess(), 7000);
@endif
</script>
@endsection
