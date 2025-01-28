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
        <div class="navbar-item login"><a href="{{ route('login') }}">Log In</a></div>
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
                <a href="{{ route('register') }}" class="register-button">REGISTER HERE!</a>
            </div>
        </div>
  
      <!-- Decorative Elements -->
        <div class="hero-decorations">
            <img src="{{ asset('landingpage_assets/star.png') }}" class="decoration star" alt="">
            <img src="{{ asset('landingpage_assets/smiley.png') }}" class="decoration smile" alt="">
            <img src="{{ asset('landingpage_assets/left-tag.png') }}" class="decoration lefttag" alt="">
            <img src="{{ asset('landingpage_assets/sparkle2-tag.png') }}" class="decoration righttag" alt="">
            <img src="{{ asset('landingpage_assets/bling.png') }}" class="decoration bling" alt="">
            <img src="{{ asset('landingpage_assets/heart.png') }}" class="decoration heart" alt="">
        </div>
    </section>

    <section id="about">
        <!-- About Content -->
        <div class="about-outer-box">
            <div class="about-inner-box">
                <div class="about-header">
                    <h1>ABOUT HACKATHON</h1>
                    <div class="about-header-mini-boxes">
                        <div
                            class="about-header-mini-box"
                            id="mini-box-1"
                        ></div>
                        <div
                            class="about-header-mini-box"
                            id="mini-box-2"
                        ></div>
                        <div
                            class="about-header-mini-box"
                            id="mini-box-3"
                        ></div>
                    </div>
                </div>
                <div class="about-content">
                    <p>
                        Hackathon is
                        <strong>the peak event of TechnoScape</strong> that
                        forms a <strong>36-hour coding competition</strong>.
                        It challenges participants to
                        <strong
                            >create innovative applications or
                            websites</strong
                        >
                        to solve real-world problems. Participants will have
                        the opportunity to get insights from mentors in the
                        business, technology, and design
                        <strong>mentoring sessions</strong>.
                    </p>
                    <a
                        href="https://drive.google.com/file/d/1pek9JMPvDaEhAl6UcfSpHH3lG8JQXjzz/view"
                        class="guidebook-btn"
                        target="_blank"
                        >GUIDEBOOK</a
                    >
                </div>
            </div>
        </div>

        <!-- Decorative Elements -->
        <div class="about-decorations">
            <img
                src="{{ asset('landingpage_assets/lightning.png') }}"
                class="decoration lighting"
                alt="lightning decoration"
            />
        </div>
    </section>
    <section id="champion-prizes">
        <!-- Champion Header -->
        <div class="prizes-header">
            <div class="prizes-title">
                <h1>CHAMPION PRIZES</h1>
            </div>
            <div class="total-title">
                <p class="total-prize">
                    Total Hadiah <br />
                    <strong>Rp. 15.000.000,-</strong>
                </p>
            </div>
            <div class="prizes-decorations">
                <img
                    src="{{ asset('landingpage_assets/sparkle1.png') }}"
                    class="decoration sparkle1"
                    alt="sparkle decoration"
                />
            </div>
        </div>

        <!-- Prize content -->
        <div class="prizes-cards">
            <!-- Trophy Decoration -->
            <div class="trophy-decorations">
                <img
                    src="{{ asset('landingpage_assets/trophy1.png') }}"
                    alt="Juara 1"
                    class="decoration trophy1"
                />
                <img
                    src="{{ asset('landingpage_assets/trophy2.png') }}"
                    alt="Juara 2"
                    class="decoration trophy2"
                />
                <img
                    src="{{ asset('landingpage_assets/trophy3.png') }}"
                    alt="Juara 3"
                    class="decoration trophy3"
                />
            </div>

            <!-- Card Juara 2 -->
            <div class="prize-card second-place">
                <div class="prize-info">
                    <div class="prize-detail">
                        <img
                            src="{{ asset('landingpage_assets/money.png') }}"
                            alt="money-img"
                        />
                        <p>Rp. 4.500.000</p>
                    </div>
                    <div class="prize-detail">
                        <img
                            src="{{ asset('landingpage_assets/merchandise.png') }}"
                            alt="merchandise-img"
                        />
                        <p>Merchandise</p>
                    </div>
                    <div class="prize-detail">
                        <img
                            src="{{ asset('landingpage_assets/certificate.png') }}"
                            alt="certificate-img"
                        />
                        <p>Certificate</p>
                    </div>
                </div>
            </div>
            <!-- Card Juara 1 -->
            <div class="prize-card first-place">
                <div class="prize-info">
                    <div class="prize-detail">
                        <img
                            src="{{ asset('landingpage_assets/money.png') }}"
                            alt="money-img"
                        />
                        <p>Rp. 8.000.000</p>
                    </div>
                    <div class="prize-detail">
                        <img
                            src="{{ asset('landingpage_assets/merchandise.png') }}"
                            alt="merchandise-img"
                        />
                        <p>Merchandise</p>
                    </div>
                    <div class="prize-detail">
                        <img
                            src="{{ asset('landingpage_assets/certificate.png') }}"
                            alt="certificate-img"
                        />
                        <p>Certificate</p>
                    </div>
                </div>
            </div>
            <!-- Card Juara 3 -->
            <div class="prize-card third-place">
                <div class="prize-info">
                    <div class="prize-detail">
                        <img
                            src="{{ asset('landingpage_assets/money.png') }}"
                            alt="money-img"
                        />
                        <p>Rp. 2.500.000</p>
                    </div>
                    <div class="prize-detail">
                        <img
                            src="{{ asset('landingpage_assets/merchandise.png') }}"
                            alt="merchandise-img"
                        />
                        <p>Merchandise</p>
                    </div>
                    <div class="prize-detail">
                        <img
                            src="{{ asset('landingpage_assets/certificate.png') }}"
                            alt="certificate-img"
                        />
                        <p>Certificate</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="why-join">
        <div class="why-header">
            <h1>WHY SHOULD JOIN US ?</h1>
        </div>
        <div class="why-card">
            <h2>
                NETWORKING
                <span
                    ><img
                        src="{{ asset('landingpage_assets/networking.png') }}"
                        alt="networking-img"
                /></span>
            </h2>
            <p>
                Peserta mendapatkan kesempatan untuk terkoneksi secara
                offline maupun online dengan peserta lain, mentor, dan juri
                Hackathon, yang memungkinkan mereka untuk berbagi ide,
                mendapatkan masukan konstruktif, serta memperluas jaringan
                profesional dan kolaborasi, baik dalam suasana tatap muka
                langsung maupun melalui platform digital, guna mendukung
                kelancaran proses inovasi dan pengembangan proyek selama
                berlangsungnya acara tersebut.
            </p>
        </div>
    </section>

    <section id="faq">

    </section>

    <section id="media-partner"></section>
    <section id="contact-us"></section>

    <!-- Footer -->
    <footer>

    </footer>
    
</body>
</html>