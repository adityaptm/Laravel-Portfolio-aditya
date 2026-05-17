<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Aditya Pratama Putra - Portfolio')</title>
    
    <!-- Boxicons -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
    
    <!-- Devicon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css" />
    
    <!-- CSS Eksternal -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    
    @yield('styles')
</head>
<body>
    <!-- IMAGE MODAL -->
    <div id="imageModal" class="image-modal">
        <span class="close-modal">&times;</span>
        <img id="modalImage" alt="Full size image" />
    </div>

    <!-- NAVBAR -->
    <nav class="navbar" id="navbar">
        <div class="container">
            <div class="logo">Aditya<span>.dev</span></div>
            <ul class="nav-menu" id="navMenu">
                <li><a href="{{ url('/') }}" class="nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a></li>
                <li><a href="{{ url('/about') }}" class="nav-link {{ Request::is('about') ? 'active' : '' }}">About</a></li>
                <li><a href="{{ url('/resume') }}" class="nav-link {{ Request::is('resume') ? 'active' : '' }}">Resume</a></li>
                <li><a href="{{ url('/project') }}" class="nav-link {{ Request::is('project') ? 'active' : '' }}">Portfolio</a></li>
                <li><a href="{{ url('/contact') }}" class="nav-link {{ Request::is('contact') ? 'active' : '' }}">Contact</a></li>
            </ul>
            <div class="hamburger" id="hamburger">
                <span></span><span></span><span></span>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer-bottom">
                <div class="footer-social">
                    <a href="https://www.linkedin.com/in/aditya-pratama-putra-525a54366/" target="_blank" title="LinkedIn"><i class="bx bxl-linkedin-square"></i></a>
                    <a href="https://github.com/adityaptm" target="_blank" title="GitHub"><i class="bx bxl-github"></i></a>
                    <a href="https://www.instagram.com/adityaptmptr_/" target="_blank" title="Instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://wa.me/6281391664927" target="_blank" title="WhatsApp"><i class="bx bxl-whatsapp"></i></a>
                </div>
                <p>&copy; {{ date('Y') }} Aditya Pratama Putra. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <!-- JS Eksternal -->
    <script src="{{ asset('js/script.js') }}"></script>
    @yield('scripts')
</body>
</html>
