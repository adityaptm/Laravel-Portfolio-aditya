@extends('layouts.app')

@section('title', 'Contact - Aditya Pratama Putra')

@section('styles')
<style>
    /* Success Modal Overlay */
    .success-overlay {
        position: fixed;
        inset: 0;
        background: rgba(2, 6, 23, 0.85);
        display: flex;
        align-items: center;
        justify-content: center;
        z-index: 9999;
        padding: 1rem;
        animation: fadeInOverlay 0.3s ease;
    }

    @keyframes fadeInOverlay {
        from { opacity: 0; }
        to   { opacity: 1; }
    }

    .success-card {
        background: #111827;
        border: 1px solid #1e293b;
        border-radius: 12px;
        padding: 2.5rem 2rem 2rem;
        max-width: 440px;
        width: 100%;
        text-align: center;
        box-shadow: 0 10px 25px rgba(16, 185, 129, 0.15);
        animation: slideUp 0.35s cubic-bezier(.22,.68,0,1.2);
        position: relative;
    }

    @keyframes slideUp {
        from { transform: translateY(40px); opacity: 0; }
        to   { transform: translateY(0);    opacity: 1; }
    }

    /* Checkmark circle */
    .success-icon {
        width: 72px;
        height: 72px;
        border-radius: 50%;
        background: #020617;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto 1.25rem;
        border: 2px solid #10b981;
        animation: popIn 0.4s 0.2s cubic-bezier(.22,.68,0,1.4) both;
    }

    @keyframes popIn {
        from { transform: scale(0); opacity: 0; }
        to   { transform: scale(1); opacity: 1; }
    }

    .success-icon i {
        font-size: 36px;
        color: #10b981;
    }

    .success-card h3 {
        font-size: 1.35rem;
        font-weight: 700;
        color: #f1f5f9;
        margin: 0 0 0.35rem;
    }

    .success-card p.sub {
        font-size: 0.9rem;
        color: #94a3b8;
        margin: 0 0 1.5rem;
    }

    /* Detail rows */
    .success-details {
        background: #020617;
        border: 1px solid #1e293b;
        border-radius: 10px;
        padding: 1rem 1.25rem;
        text-align: left;
        margin-bottom: 1.5rem;
    }

    .detail-row {
        display: flex;
        gap: 10px;
        padding: 0.45rem 0;
        border-bottom: 1px solid #1e293b;
        align-items: flex-start;
    }

    .detail-row:last-child {
        border-bottom: none;
    }

    .detail-row i {
        font-size: 16px;
        color: #10b981;
        margin-top: 2px;
        flex-shrink: 0;
    }

    .detail-row .label {
        font-size: 11px;
        font-weight: 600;
        color: #64748b;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        display: block;
        margin-bottom: 1px;
    }

    .detail-row .value {
        font-size: 0.875rem;
        color: #f1f5f9;
        word-break: break-word;
    }

    /* Close button */
    .btn-close-success {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        background: #10b981;
        color: #020617;
        border: none;
        border-radius: 6px;
        padding: 12px 2rem;
        font-size: 0.9rem;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s;
    }

    .btn-close-success:hover {
        background: #059669;
    }

    /* Progress bar auto-close */
    .progress-bar {
        position: absolute;
        bottom: 0;
        left: 0;
        height: 4px;
        background: #10b981;
        border-radius: 0 0 12px 12px;
        animation: shrink 7s linear forwards;
    }

    @keyframes shrink {
        from { width: 100%; }
        to   { width: 0%; }
    }

    /* Error Alert */
    .alert.error {
        display: flex;
        align-items: flex-start;
        gap: 8px;
        background: rgba(239, 68, 68, 0.1);
        border: 1px solid rgba(239, 68, 68, 0.3);
        color: #ef4444;
        padding: 1rem;
        border-radius: 6px;
        margin-bottom: 1.5rem;
    }

    .alert.error i {
        font-size: 18px;
        flex-shrink: 0;
        margin-top: 1px;
    }
</style>
@endsection

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
