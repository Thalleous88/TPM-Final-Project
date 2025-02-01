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
            <div class="faq-header">
                <h1>FAQ</h1>
            </div>

            <div class="faq-container">
                <div class="faq-content">
                    <div class="faq-item">
                        <button class="faq-question">
                            Apakah Hackathon 8.0 gratis?
                            <span class="arrow"
                                ><img
                                    src="landingpage_assets/dropdown.png"
                                    alt="arrow"
                            /></span>
                        </button>
                        <div class="faq-answer">
                            <p>
                                Hackathon 8.0 adalah acara
                                <strong>berbayar</strong>. Setiap tim harus
                                melakukan pembayaran sesuai periode:
                                <br />
                                <strong
                                    >1. Early Bird (30 Mei - 3 Juni
                                    2025)</strong
                                >
                                <br />
                                Binusian: Rp. 190.000, Non-Binusian: Rp. 210.000
                                <br />
                                <strong
                                    >2. Harga Biasa (4 Juni - 30 Juni
                                    2025)</strong
                                ><br />
                                Binusian: Rp. 200.000, Non-Binusian: Rp. 225.000
                            </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Kapan batas waktu untuk pendaftaran?
                            <span class="arrow"
                                ><img
                                    src="landingpage_assets/dropdown.png"
                                    alt="arrow"
                            /></span>
                        </button>
                        <div class="faq-answer">
                            <p>
                                Batas waktu pendaftaran adalah
                                <strong>30 Juni 2025</strong>.
                            </p>
                        </div>
                    </div>

                    <div class="faq-item">
                        <button class="faq-question">
                            Bisakah bergabung lebih dari 1 tim?
                            <span class="arrow"
                                ><img
                                    src="landingpage_assets/dropdown.png"
                                    alt="arrow"
                            /></span>
                        </button>
                        <div class="faq-answer">
                            <p>
                                <strong>Tidak</strong>, peserta hanya
                                diperbolehkan
                                <strong>bergabung dalam satu tim</strong>. Jika
                                lebih dari satu tim, peserta tidak akan
                                terdaftar sebagai peserta Hackathon 8.0.
                            </p>
                        </div>
                    </div>

                    <!-- Show More FAQ -->
                    <div class="faq-hidden">
                        <div class="faq-item">
                            <button class="faq-question">
                                Apa saja persyaratan untuk berpartisipasi di
                                Hackathon 8.0?
                                <span class="arrow"
                                    ><img
                                        src="landingpage_assets/dropdown.png"
                                        alt="arrow"
                                /></span>
                            </button>
                            <div class="faq-answer">
                                <p>
                                    Peserta hanya dapat bergabung dalam
                                    <strong>1 tim (maksimal 4 orang)</strong>.
                                    <br /><br />
                                    Peserta adalah warga negara indonesia
                                    berusia <strong>18-25 tahun</strong>.
                                    <br /><br />
                                    Peserta harus menyerahkan dokumen yang
                                    dibutuhkan pada halaman pendaftaran
                                    Hackathon, seperti: <br />
                                    1. <strong>CV</strong> (
                                    <i>Curriculum Vitae</i> ) <br />
                                    2. <strong>Portfolio</strong> (tidak wajib)
                                    <br />
                                    3. <strong>Non-Binusian</strong>: KTP
                                    (KTP/SIM/dll) <br />
                                    4. <strong>Binusian</strong>: Kartu Binusian
                                    (Kartu Flazz)
                                </p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question">
                                Jika saya tidak memiliki dasar pemrograman atau
                                desain, bolehkah saya berpartisipasi?
                                <span class="arrow"
                                    ><img
                                        src="landingpage_assets/dropdown.png"
                                        alt="arrow"
                                /></span>
                            </button>
                            <div class="faq-answer">
                                <p>
                                    Peserta tanpa latar bekanag pemrograman atau
                                    dasar coding dan desain
                                    <strong
                                        >diperbolehkan untuk
                                        berpartisipasi</strong
                                    >
                                    pada acara Hackathon. Namun, akan ada
                                    seleksi untuk menentukan tim yang akan
                                    lolos.
                                </p>
                            </div>
                        </div>

                        <div class="faq-item">
                            <button class="faq-question">
                                Jika saya tidak memenuhi syarat atau tidak lolos
                                seleksi, bagaimana dengan biaya pendaftarannya?
                                <span class="arrow"
                                    ><img
                                        src="landingpage_assets/dropdown.png"
                                        alt="arrow"
                                /></span>
                            </button>
                            <div class="faq-answer">
                                <p>
                                    Kami akan mengembalikan
                                    <strong>100%</strong> biaya pendaftaran,
                                    jika peserta tidak memenuhi syarat atau
                                    tidak lolos seleksi untuk acara ini.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <p class="faq-more">Show More</p>

            <!-- Decorative Elements -->
            <div class="faq-decorations">
                <img
                    src="landingpage_assets/questionmark.png"
                    class="decoration questionmark"
                    alt="questionmark decoration"
                />
                <img
                    src="landingpage_assets/sparkle1.png"
                    class="decoration sparkle1"
                    alt="sparkle decoration"
                />
                <img
                    src="landingpage_assets/smileysparkle.png"
                    class="decoration smileysparkle"
                    alt="smile decoration"
                />
            </div>
        </section>

        <section id="media-partner">
            <div class="media-header">
                <img
                    src="landingpage_assets/ribbon.png"
                    alt="ribbon background"
                    class="ribbon"
                />
                <h1 class="media-title">MEDIA PARTNER</h1>
            </div>

            <div class="media-container">
                <!-- Baris 1 -> Bergerak ke kanan -->
                <div class="logo-track track-1">
                    <div class="logos">
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/kuatbaca.png"
                                    alt="KuatBaca"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/digitalskola.png"
                                    alt="Digital Skola"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/kerja.png"
                                    alt="1Kerja"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/codingstudio.png"
                                    alt="Coding Studio"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/himti.png"
                                    alt="HIMTI Binus"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/po.png"
                                    alt="PO Binus"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="logos">
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/kuatbaca.png"
                                    alt="KuatBaca"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/digitalskola.png"
                                    alt="Digital Skola"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/kerja.png"
                                    alt="1Kerja"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/codingstudio.png"
                                    alt="Coding Studio"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/himti.png"
                                    alt="HIMTI Binus"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/po.png"
                                    alt="PO Binus"
                                />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Baris 2 - Bergerak ke kiri -->
                <div class="logo-track track-2">
                    <div class="logos">
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/kuatbaca.png"
                                    alt="KuatBaca"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/digitalskola.png"
                                    alt="Digital Skola"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/kerja.png"
                                    alt="1Kerja"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/codingstudio.png"
                                    alt="Coding Studio"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/himti.png"
                                    alt="HIMTI Binus"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/po.png"
                                    alt="PO Binus"
                                />
                            </div>
                        </div>
                    </div>

                    <div class="logos">
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/kuatbaca.png"
                                    alt="KuatBaca"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/digitalskola.png"
                                    alt="Digital Skola"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/kerja.png"
                                    alt="1Kerja"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/codingstudio.png"
                                    alt="Coding Studio"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/himti.png"
                                    alt="HIMTI Binus"
                                />
                            </div>
                        </div>
                        <div class="logo-box">
                            <div class="logo-header">
                                <div class="browser-buttons">
                                    <div class="yellow"></div>
                                    <div class="red"></div>
                                    <div class="green"></div>
                                </div>
                            </div>
                            <div class="logo-img">
                                <img
                                    src="landingpage_assets/medpar-logo/po.png"
                                    alt="PO Binus"
                                />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact-us">
            <div class="contact-header">
                <h1 class="contact-title">CONTACT US</h1>
            </div>
            <div class="contact-container">
                <form id="contactForm">
                    <div class="form-left">
                        <div class="input-group">
                            <label for="name">
                                <img
                                    src="landingpage_assets/name.png"
                                    alt="name icon"
                                />
                                Nama</label
                            >
                            <input type="text" id="name" name="name" required />
                        </div>
                        <div class="input-group">
                            <label for="email"
                                ><img
                                    src="landingpage_assets/email.png"
                                    alt="email icon"
                                />
                                Email</label
                            >
                            <input
                                type="email"
                                id="email"
                                name="email"
                                required
                            />
                        </div>
                        <button type="submit" class="submit-btn">Submit</button>
                    </div>

                    <div class="form-right">
                        <div class="input-group">
                            <label for="subject"
                                ><img
                                    src="landingpage_assets/subject.png"
                                    alt="subject icon"
                                />
                                Subject</label
                            >
                            <input
                                type="text"
                                id="subject"
                                name="subject"
                                required
                            />
                        </div>
                        <div class="input-group">
                            <label for="message"
                                ><img
                                    src="landingpage_assets/message.png"
                                    alt="message icon"
                                />
                                Message</label
                            >
                            <textarea
                                id="message"
                                name="message"
                                required
                            ></textarea>
                        </div>
                    </div>
                </form>
            </div>

            <div id="popup" class="popup">
                <div class="popup-content">
                    <img
                        src="landingpage_assets/done.png"
                        alt="done"
                        class="popup-icon"
                    />
                    <p>Message has been sent!</p>
                </div>
            </div>

            <!-- Decorative Elements -->
            <div class="contactus-decorations">
                <img
                    src="landingpage_assets/tag-contactus.png"
                    class="decoration tag"
                    alt="tag decoration"
                />
                <img
                    src="landingpage_assets/sparkle-contactus.png"
                    class="decoration sparkle"
                    alt="sparkle decoration"
                />
            </div>
        </section>

        <!-- Footer -->
        <footer>
            <div class="footer-container">
                <div class="footer-left">
                    <p>Powered and Organized by</p>
                    <img
                        src="landingpage_assets/footer/footerlogo.png"
                        alt="BNCC Logo"
                        class="bncc-logo"
                    />
                </div>

                <div class="footer-right">
                    <p class="find-us">Find Us</p>
                    <div class="social-icons">
                        <a
                            href="https://www.instagram.com/bnccbinus/"
                            target="_blank"
                            ><img
                                src="landingpage_assets/footer/insta.png"
                                alt="Instagram"
                        /></a>
                        <a href="https://bncc.net/#contact" target="_blank"
                            ><img
                                src="landingpage_assets/footer/email.png"
                                alt="Email"
                        /></a>
                        <a href="https://twitter.com/BNCC_Binus" target="_blank"
                            ><img
                                src="landingpage_assets/footer/twitter.png"
                                alt="Twitter"
                        /></a>
                        <a
                            href="https://www.facebook.com/bina.nusantara.computer.club/"
                            target="_blank"
                            ><img
                                src="landingpage_assets/footer/facebook.png"
                                alt="Facebook"
                        /></a>
                        <a
                            href="https://www.linkedin.com/company/bina-nusantara-computer-club/mycompany/"
                            target="_blank"
                            ><img
                                src="landingpage_assets/footer/linkedin.png"
                                alt="LinkedIn"
                        /></a>
                    </div>
                </div>
            </div>

            <div class="footer-links">
                <a href="https://www.binus.edu/privacy-policy/" target="_blank">Privacy Policy</a>  | 
                <a href="https://en.wikipedia.org/wiki/Terms_of_service" target="_blank">Terms of Service</a>
            </div>

            <p class="footer-bottom">
                All Rights Reserved BNCC 2024 © Bina Nusantara Computer Club
            </p>
        </footer>

        <script src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
        <script>
            emailjs.init("YOUR_PUBLIC_KEY"); // Ganti pakai Public Key dari EmailJS
        </script>
        <script src="landingpage.js"></script>
    </body>
</html>