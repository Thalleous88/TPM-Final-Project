<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechnoScape</title>
    
    <link rel="stylesheet" href="{{ asset('css/landingpage.css') }}">
    <script src="{{ asset('js/landingpage.js') }}"></script>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar">
        <div class="logo">
            <img src="{{ asset('landingpage_assets/logo-technoscape.png') }}" alt="logo">
        </div>
        <div class="navbar-item hero"><a href="#hero">Hero</a></div>
        <div class="navbar-item about"><a href="#about">About</a></div>
        <div class="navbar-item prizes"><a href="#champion-prizes">Champion Prizes</a></div>
        <div class="navbar-item faq"><a href="#faq">FAQ</a></div>
        <div class="navbar-item login"><a href="login.html">Log In</a></div>
      </nav>

    <section id="hero">
        <!-- Logo -->
        <div class="hero-header">
            <img src="{{ asset('landingpage_assets/logo-technoscape.png') }}" alt="TechnoScape Logo" class="logo" id="logo-1">
            <p>TechnoScape</p>
            <span class="divider">×</span>
            <img src="{{ asset('landingpage_assets/logo-teleperformance.png') }}" alt="Teleperformance Logo" class="logo" id="logo-2">
            <p>Teleperformance</p>
        </div>
  
        <!-- Main Content -->
        <div class="hero-content">
            <h1 class="title">HACKATHON <span>8.0</span></h1>
            <p class="description">Bridging the Digital Divide: Building <br> Solutions for a Better World</p>
            <div class="hero-container">
                <div class="period">
                    <p>PERIOD TIME</p>
                </div>
                <a href="register.html" class="register-button">REGISTER HERE!</a>
            </div>
        </div>
  
      <!-- Decorative Elements -->
        <div class="hero-decorations">
            <img src="{{ asset('landingpage_assets/star.png') }}" class="decoration star" alt="">
            <img src="{{ asset('landingpage_assets/smiley.png') }}" class="decoration smile" alt="">
            <img src="{{ asset('landingpage_assets/left-tag.png') }}" class="decoration lefttag" alt="">
            <img src="{{ asset('landingpage_assets/right-tag.png') }}" class="decoration righttag" alt="">
            <img src="{{ asset('landingpage_assets/bling.png') }}" class="decoration bling" alt="">
            <img src="{{ asset('landingpage_assets/heart.png') }}" class="decoration heart" alt="">
        </div>
    </section>

    <section id="about"></section>
    <section id="champion-prizes"></section>
    <section id="why-should-join-us"></section>
    <section id="faq"></section>
    <section id="media-partner"></section>
    <section id="contact-us"></section>

    <!-- Footer -->
    <footer>

    </footer>
    
</body>
</html>