@extends('layouts.app')

@section('title', 'Projects - Aditya Pratama Putra')

@section('content')
<section id="projects" class="projects">
    <div class="container">
        <div class="section-title">
            <h2>Project</h2>
            <p>Karya yang telah saya buat</p>
        </div>

        <div class="projects-grid">
            <article class="project-card">
                <div class="project-image" data-image="{{ asset('assets/figma.png') }}">
                    <img src="{{ asset('assets/figma.png') }}" alt="MajorPath UI/UX Design" />
                    <div class="project-overlay">
                        <i class="bx bx-search-alt-2"></i>
                    </div>
                </div>
                <div class="project-content">
                    <h3>MajorPath - Rekomendasi Jurusan Kuliah</h3>
                    <p>
                        Desain UI/UX menggunakan Figma untuk web aplikasi yang
                        membantu siswa SMA memilih jurusan kuliah.
                    </p>
                    <div class="project-tags">
                        <span>Figma</span><span>UI/UX Design</span><span>Prototype</span>
                    </div>
                    <div class="project-buttons">
                        <a href="https://www.figma.com/design/kRctgXio6Saf2V5HKvCOkj/MAJORPATH?node-id=0-1" target="_blank" class="btn btn-outline">
                            <i class="bx bx-link-external"></i> Lihat Proyek
                        </a>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image" data-image="{{ asset('assets/mjpath.png') }}">
                    <img src="{{ asset('assets/mjpath.png') }}" alt="MajorPath Website" />
                    <div class="project-overlay">
                        <i class="bx bx-search-alt-2"></i>
                    </div>
                </div>
                <div class="project-content">
                    <h3>MajorPath - Website</h3>
                    <p>
                        Website rekomendasi jurusan kuliah berbasis PHP Native dan
                        MySQL.
                    </p>
                    <div class="project-tags">
                        <span>PHP Native</span><span>MySQL</span><span>JavaScript</span>
                    </div>
                    <div class="project-buttons">
                        <a href="https://majorpath.infinityfreeapp.com/index.php" target="_blank" class="btn btn-outline">
                            <i class="bx bx-link-external"></i> Lihat Proyek
                        </a>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image" data-image="{{ asset('assets/Cavallery.png') }}">
                    <img src="{{ asset('assets/Cavallery.png') }}" alt="Website E-Commerce" />
                    <div class="project-overlay">
                        <i class="bx bx-search-alt-2"></i>
                    </div>
                </div>
                <div class="project-content">
                    <h3>Website E-Commerce</h3>
                    <p>
                        Website toko online menggunakan WordPress dengan fitur
                        manajemen produk dan checkout.
                    </p>
                    <div class="project-tags">
                        <span>WordPress</span><span>WooCommerce</span>
                    </div>
                    <div class="project-buttons">
                        <a href="https://cavallery.id" target="_blank" class="btn btn-outline">
                            <i class="bx bx-link-external"></i> Lihat Proyek
                        </a>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image" data-image="{{ asset('assets/smartdapur.png') }}">
                    <img src="{{ asset('assets/smartdapur.png') }}" alt="Smart Dapur" />
                    <div class="project-overlay">
                        <i class="bx bx-search-alt-2"></i>
                    </div>
                </div>
                <div class="project-content">
                    <h3>Smart Dapur</h3>
                    <p>
                        Aplikasi memasak berbasis web dengan fitur CRUD untuk
                        manajemen resep dan bahan makanan.
                    </p>
                    <div class="project-tags">
                        <span>PHP Native</span><span>MySQL</span><span>CRUD</span>
                    </div>
                    <div class="project-buttons">
                        <a href="http://itproject.infinityfree.me/" target="_blank" class="btn btn-outline">
                            <i class="bx bx-link-external"></i> Lihat Proyek
                        </a>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image" data-image="{{ asset('assets/dashboard_incitrack.png') }}">
                    <img src="{{ asset('assets/dashboard_incitrack.png') }}" alt="Incitrack" />
                    <div class="project-overlay">
                        <i class="bx bx-search-alt-2"></i>
                    </div>
                </div>
                <div class="project-content">
                    <h3>Incitrack</h3>
                    <p>
                        Sistem pelaporan kecelakaan berbasis web dengan pengelolaan
                        database dan perancangan UML.
                    </p>
                    <div class="project-tags">
                        <span>PHP</span><span>MySQL</span><span>UML</span>
                    </div>
                    <div class="project-buttons">
                        <a href="http://itproject.infinityfree.me/" target="_blank" class="btn btn-outline">
                            <i class="bx bx-link-external"></i> Lihat Proyek
                        </a>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image" data-image="{{ asset('assets/videoIOT.gif') }}">
                    <img src="{{ asset('assets/videoIOT.gif') }}" alt="Sistem Otomatis Katup IoT" />
                    <div class="project-overlay">
                        <i class="bx bx-search-alt-2); }"></i>
                    </div>
                </div>
                <div class="project-content">
                    <h3>Sistem Otomatis Katup IoT</h3>
                    <p>
                        Sistem IoT untuk membuka dan menutup katup otomatis
                        menggunakan MQTT, Node-RED, dan Grafana.
                    </p>
                    <div class="project-tags">
                        <span>MQTT</span><span>NodeJS</span><span>JavaScript</span>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image" data-image="{{ asset('assets/unity.png') }}">
                    <img src="{{ asset('assets/unity.png') }}" alt="Game Prototype Unity" />
                    <div class="project-overlay">
                        <i class="bx bx-search-alt-2"></i>
                    </div>
                </div>
                <div class="project-content">
                    <h3>Game Prototype</h3>
                    <p>
                        Prototype game 2D sebagai media pembelajaran menggunakan Unity
                        Engine dan C#.
                    </p>
                    <div class="project-tags">
                        <span>Unity</span><span>C#</span>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image" data-image="{{ asset('assets/game1.png') }}">
                    <img src="{{ asset('assets/game1.png') }}" alt="Jumping Adventure" />
                    <div class="project-overlay">
                        <i class="bx bx-search-alt-2"></i>
                    </div>
                </div>
                <div class="project-content">
                    <h3>Mini Games - Jumping Adventure</h3>
                    <p>
                        Mini game 2D platformer berbasis HTML5 Canvas dengan sistem
                        skor dan rintangan.
                    </p>
                    <div class="project-tags">
                        <span>HTML5</span><span>CSS</span><span>JavaScript</span>
                    </div>
                    <div class="project-buttons">
                        <a href="https://cavallery.id/game-bibir-erine-yang-telah-dicuri/" target="_blank" class="btn btn-primary">
                            <i class="bx bx-play-circle"></i> Mainkan Game
                        </a>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image" data-image="{{ asset('assets/game2.png') }}">
                    <img src="{{ asset('assets/game2.png') }}" alt="Grasshopper Collector" />
                    <div class="project-overlay">
                        <i class="bx bx-search-alt-2"></i>
                    </div>
                </div>
                <div class="project-content">
                    <h3>Mini Games - Grasshopper Collector</h3>
                    <p>
                        Game sederhana menangkap belalang dengan sistem skor dan
                        kontrol keyboard.
                    </p>
                    <div class="project-tags">
                        <span>HTML</span><span>CSS</span><span>JavaScript</span>
                    </div>
                    <div class="project-buttons">
                        <a href="https://cavallery.id/game-belalang-erine-yang-membangkang/" target="_blank" class="btn btn-primary">
                            <i class="bx bx-play-circle"></i> Mainkan Game
                        </a>
                    </div>
                </div>
            </article>

            <article class="project-card">
                <div class="project-image" data-image="{{ asset('assets/game3.png') }}">
                    <img src="{{ asset('assets/game3.png') }}" alt="Zombie Escape" />
                    <div class="project-overlay">
                        <i class="bx bx-search-alt-2"></i>
                    </div>
                </div>
                <div class="project-content">
                    <h3>Mini Games - Zombie Escape</h3>
                    <p>
                        Game survival 2D menghindari zombie hingga mencapai istana
                        dengan sistem skor jarak.
                    </p>
                    <div class="project-tags">
                        <span>HTML5</span><span>CSS</span><span>JavaScript</span>
                    </div>
                    <div class="project-buttons">
                        <a href="https://cavallery.id/game-erineinetherland/" target="_blank" class="btn btn-primary">
                            <i class="bx bx-play-circle"></i> Mainkan Game
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</section>
@endsection
