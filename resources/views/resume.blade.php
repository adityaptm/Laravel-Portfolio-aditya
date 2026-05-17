@extends('layouts.app')

@section('title', 'Resume - Aditya Pratama Putra')

@section('content')
<div class="resume-page">
    <div class="container">
        <div class="section-title">
            <h2>Resume</h2>
            <p>Pendidikan, keahlian, dan pengalaman saya</p>
        </div>

        <div class="resume-grid">
            <div class="resume-col-left">
                <div class="resume-section">
                    <div class="resume-section-title">Summary</div>

                    <div class="resume-name">Aditya Pratama Putra</div>
                    <p class="resume-summary-text">
                        Mahasiswa S1 Teknik Informatika dengan IPK 3.95 yang berfokus
                        pada Web Development dan IoT. Aktif dalam penelitian ilmiah
                        dengan publikasi di jurnal nasional terakreditasi SINTA 5.
                        Berpengalaman di lingkungan industri dengan disiplin kerja dan
                        standar kualitas tinggi.
                    </p>

                    <ul class="resume-contact-list">
                        <li>
                            <i class="bx bx-map"></i>
                            Setu, Jawa Barat, Indonesia
                        </li>
                        <li>
                            <i class="bx bxl-whatsapp"></i>
                            <a href="https://wa.me/6281391664927" target="_blank">
                                +62 813-9166-4927
                            </a>
                        </li>
                        <li>
                            <i class="bx bxl-github"></i>
                            <a href="https://github.com/adityaptm" target="_blank">
                                github.com/adityaptm
                            </a>
                        </li>
                        <li>
                            <i class="bx bxl-linkedin-square"></i>
                            <a href="https://www.linkedin.com/in/aditya-pratama-putra-525a54366/" target="_blank">
                                linkedin.com/in/aditya-pratama-putra
                            </a>
                        </li>
                        <li>
                            <i class="bx bxl-instagram"></i>
                            <a href="https://www.instagram.com/adityaptmptr_/" target="_blank">
                                @adityaptmptr_
                            </a>
                        </li>
                    </ul>
                </div>

                <div class="resume-section">
                    <div class="resume-section-title">Pendidikan</div>

                    <div class="resume-timeline">
                        <div class="tl-item">
                            <div class="tl-dot"></div>
                            <div class="tl-body">
                                <div class="tl-title">S1 Teknik Informatika</div>
                                <div class="tl-date">Sep 2023 – Sep 2027 (Expected)</div>
                                <div class="tl-sub">Universitas Paramadina, Jakarta</div>
                                <p class="tl-desc">
                                    <strong>IPK:</strong> 3.95 / 4.00 &mdash; Fokus pada Web
                                    Development dan IoT. Aktif menulis karya ilmiah dan
                                    menerbitkan artikel di jurnal nasional terakreditasi SINTA
                                    5.
                                </p>
                            </div>
                        </div>

                        <div class="tl-item">
                            <div class="tl-dot"></div>
                            <div class="tl-body">
                                <div class="tl-title">Teknik &amp; Bisnis Sepeda Motor</div>
                                <div class="tl-date">Jul 2019 – Jun 2022</div>
                                <div class="tl-sub">SMK Mitra Industri MM2100, Bekasi</div>
                                <p class="tl-desc">
                                    <strong>Nilai:</strong> 80 / 100 &mdash; Pengalaman PKL
                                    industri, terbiasa dengan SOP, kedisiplinan, dan quality
                                    check.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="resume-section">
                    <div class="resume-section-title">Keahlian</div>

                    <div class="resume-skills-block">
                        <!-- Hard Skills -->
                        <div>
                            <div class="resume-skill-group-title">
                                <i class="bx bx-code-alt"></i> Hard Skills
                            </div>
                            <div class="resume-skill-tags">
                                <span class="resume-skill-tag">PHP Native</span>
                                <span class="resume-skill-tag">JavaScript</span>
                                <span class="resume-skill-tag">Python</span>
                                <span class="resume-skill-tag">C#</span>
                                <span class="resume-skill-tag">C++</span>
                                <span class="resume-skill-tag">HTML5</span>
                                <span class="resume-skill-tag">CSS3</span>
                                <span class="resume-skill-tag">SQL / MySQL</span>
                                <span class="resume-skill-tag">IoT</span>
                                <span class="resume-skill-tag">MQTT</span>
                                <span class="resume-skill-tag">Node-RED</span>
                                <span class="resume-skill-tag">Grafana</span>
                                <span class="resume-skill-tag">WordPress</span>
                                <span class="resume-skill-tag">GitHub</span>
                                <span class="resume-skill-tag">Figma</span>
                                <span class="resume-skill-tag">Canva</span>
                                <span class="resume-skill-tag">UML</span>
                                <span class="resume-skill-tag">Cisco Packet Tracer</span>
                                <span class="resume-skill-tag">Penulisan Ilmiah</span>
                                <span class="resume-skill-tag">Metodologi Penelitian</span>
                            </div>
                        </div>

                        <!-- Soft Skills -->
                        <div>
                            <div class="resume-skill-group-title">
                                <i class="bx bx-user"></i> Soft Skills
                            </div>
                            <div class="resume-skill-tags">
                                <span class="resume-skill-tag">Pemecahan Masalah</span>
                                <span class="resume-skill-tag">Berpikir Kritis</span>
                                <span class="resume-skill-tag">Kerja Sama Tim</span>
                                <span class="resume-skill-tag">Komunikasi</span>
                                <span class="resume-skill-tag">Adaptasi</span>
                                <span class="resume-skill-tag">Manajemen Waktu</span>
                                <span class="resume-skill-tag">Kreativitas</span>
                                <span class="resume-skill-tag">Etos Kerja</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="resume-col-right">
                <div class="resume-section">
                    <div class="resume-section-title">Pengalaman</div>

                    <div class="resume-timeline">
                        <div class="tl-item">
                            <div class="tl-dot"></div>
                            <div class="tl-body">
                                <div class="tl-title">
                                    Magang – IT Governance &amp; Digital Forensik
                                </div>
                                <div class="tl-date">Februari 2026 – Maret 2026</div>
                                <div class="tl-sub">Otoritas Jasa Keuangan, Jakarta</div>
                                <ul class="tl-bullets">
                                    <li>
                                        Membuat Dokumentasi Operasional dalam akreditasi
                                        laboratorium forensik digital
                                    </li>
                                    <li>Membuat Video Animasi Budaya Kerja OJK</li>
                                    <li>Mengikuti pelatihan forensik digital</li>
                                </ul>
                            </div>
                        </div>

                        <div class="tl-item">
                            <div class="tl-dot"></div>
                            <div class="tl-body">
                                <div class="tl-title">
                                    Divisi Mandis – Paramadina Social Care
                                </div>
                                <div class="tl-date">Oct 2024 – Present</div>
                                <div class="tl-sub">Universitas Paramadina, Jakarta</div>
                                <ul class="tl-bullets">
                                    <li>
                                        Mengidentifikasi dan mendata kebutuhan logistik di
                                        lokasi bencana.
                                    </li>
                                    <li>
                                        Mengatur distribusi bantuan agar tepat sasaran dan
                                        efisien.
                                    </li>
                                    <li>
                                        Berkoordinasi dengan tim lapangan untuk memastikan
                                        respons cepat.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tl-item">
                            <div class="tl-dot"></div>
                            <div class="tl-body">
                                <div class="tl-title">
                                    Panitia Festival Ramadhan – Divisi Logistik
                                </div>
                                <div class="tl-date">2024</div>
                                <div class="tl-sub">Universitas Paramadina, Jakarta</div>
                                <ul class="tl-bullets">
                                    <li>
                                        Bertanggung jawab atas pengadaan dan distribusi
                                        perlengkapan acara.
                                    </li>
                                    <li>
                                        Memastikan ketersediaan logistik selama pelaksanaan
                                        festival.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tl-item">
                            <div class="tl-dot"></div>
                            <div class="tl-body">
                                <div class="tl-title">
                                    Panitia PMB (Penerimaan Mahasiswa Baru) – Divisi Logistik
                                </div>
                                <div class="tl-date">2024</div>
                                <div class="tl-sub">Universitas Paramadina, Jakarta</div>
                                <ul class="tl-bullets">
                                    <li>
                                        Mengelola kebutuhan logistik untuk kegiatan penerimaan
                                        mahasiswa baru.
                                    </li>
                                    <li>
                                        Memastikan kelancaran acara orientasi dan registrasi.
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="tl-item">
                            <div class="tl-dot"></div>
                            <div class="tl-body">
                                <div class="tl-title">Magang – Technician &amp; QC</div>
                                <div class="tl-date">May 2022 – Feb 2023</div>
                                <div class="tl-sub">PT. IML Technology, Bekasi</div>
                                <ul class="tl-bullets">
                                    <li>
                                        Menjalankan proses kerja sesuai standar operasional
                                        perusahaan.
                                    </li>
                                    <li>
                                        Melakukan pengecekan kualitas hasil produksi secara
                                        berkala.
                                    </li>
                                    <li>Bekerja secara kolaboratif dalam tim produksi.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="tl-item">
                            <div class="tl-dot"></div>
                            <div class="tl-body">
                                <div class="tl-title">
                                    Praktik Kerja Lapangan – PT. Cable Tech
                                </div>
                                <div class="tl-date">Jun 2021 – Oct 2021</div>
                                <div class="tl-sub">PT. Cable Tech, Bekasi</div>
                                <ul class="tl-bullets">
                                    <li>
                                        Membantu proses produksi sesuai spesifikasi teknis.
                                    </li>
                                    <li>Melakukan pengecekan kualitas produk akhir.</li>
                                </ul>
                            </div>
                        </div>

                        <div class="tl-item">
                            <div class="tl-dot"></div>
                            <div class="tl-body">
                                <div class="tl-title">
                                    Praktik Kerja Lapangan – PT. Asahi Best Base Indonesia
                                </div>
                                <div class="tl-date">Nov 2020 – Feb 2021</div>
                                <div class="tl-sub">
                                    PT. Asahi Best Base Indonesia, Bekasi
                                </div>
                                <ul class="tl-bullets">
                                    <li>Menjalankan pekerjaan sesuai standar operasional.</li>
                                    <li>Menerapkan prinsip kerja 5S di lingkungan kerja.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
