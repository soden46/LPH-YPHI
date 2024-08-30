    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Yayasan Produk Halal Indonesia</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
            content="Lembaga Pemeriksa Halal Yayasan Produk Halal Indonesia (YPHI) adalah lembaga profesional yang menyediakan layanan pemeriksaan halal berdasarkan sains dan teknologi terkini dengan standar internasional. Misi kami adalah menyediakan analisis kehalalan produk yang jujur, amanah, independen, kredibel, dan menjaga kerahasiaan produk pelaku usaha.">
        <meta name="keywords"
            content="Halal, Lembaga Pemeriksa Halal, YPHI, Sertifikasi Halal, Analisis Halal, Produk Halal, Lembaga Halal Indonesia">
        <meta name="author" content="Lembaga Pemeriksa Halal Yayasan Produk Halal Indonesia">
        <meta property="og:title" content="Lembaga Pemeriksa Halal Yayasan Produk Halal Indonesia">
        <meta property="og:description"
            content="YPHI adalah lembaga pemeriksa halal profesional di Indonesia yang menggunakan sains dan teknologi terkini. Kami menyediakan layanan pemeriksaan halal yang jujur, amanah, dan kredibel.">
        <meta property="og:url" content="https://LPH-YPHI.com">
        <meta property="og:image" content="/assets/img/logo.png">
        <meta property="og:type" content="website">
        <meta name="twitter:card" content="/assets/img/logo.png">
        <meta name="twitter:title" content="Lembaga Pemeriksa Halal Yayasan Produk Halal Indonesia">
        <meta name="twitter:description"
            content="YPHI adalah lembaga pemeriksa halal profesional di Indonesia dengan fokus pada analisis kehalalan produk menggunakan teknologi terkini.">
        <meta name="twitter:image" content="/assets/img/logo.png">

        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-generic" href="/favicon.ico">
        <link rel="manifest" href="/site.webmanifest">

        <!-- Google Font -->
        <link
            href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap"
            rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="{{ asset('assets/lib/animate/animate.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
        <!--404 CSS-->
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
        <!-- Template Stylesheet -->
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    </head>

    <body>
        <!-- Nav Bar Start -->
        @include('layouts.home.navbar')
        <!-- Nav Bar End -->
        <!-- Content Start-->
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- Content End -->
        <!-- Footer Start -->
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-about">
                            <h2>LPH YPHI</h2>
                            <p>
                                Yayasan Produk Halal Indonesia (YPHI)Didirikan oleh Dr. Muhammad Yanis Musdja dan
                                dibantu oleh Rahmat
                                SH, MH, Ir, Dadi Sutardi, SH. Pendirian YPHI sangat didukung oleh Ikatan Cendekiawan
                                Muslim
                                Indonesia (ICMI) DKI Jakarta yang pada waktu itu Ketua ICMI DKI dijabat oleh Andi Anzhar
                                Cakra
                                Wijaya SH dan Sekretris ICMI DKI Ir. Akhmad Sanusi dan Wakil Ketua ICMI DKI Jakarta Dr.
                                Muhammad
                                Yanis Musdja. Pada awal YPHI berdiri, misi YPHI adalah untuk membantu penyusunan UU
                                Jaminan Produk
                                halal, dimana pada waktu itu Dr. Muhammad Yanis Musdja sebagai Dosen HALAL SAINS UIN
                                Syarif
                                Hidayatullah dan mewakili Lembaga Masyarakat (YPHI) diminta oleh Kemenag RI untuk
                                membantu
                                penyusunan UU Jaminan Produk Halal.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 d-flex justify-content-center">
                        <div class="footer-link">
                            <h2>Menu</h2>
                            <a href="{{ url('/') }}">Home</a>
                            <a href="{{ url('/profile') }}">Profile</a>
                            <a href="{{ url('/struktur-organisasi') }}">Struktur
                                Organisasi</a>
                            <a href="{{ url('/auditor') }}">Auditor Halal</a>
                            <a href="{{ url('/proses-sertifikasi') }}">Proses
                                Sertifikasi</a>
                            <a href="{{ url('/kontak') }}">Kontak</a>
                            <div name="syarifsoden" style="text-align:center;display: none;"><a
                                    href="https://syarifsoden.blogspot.com/">Syarif Soden</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="footer-contact">
                            <h2>Get In Touch</h2>
                            <p><i class="fa fa-map-marker-alt"></i><a
                                    href="https://goo.gl/maps/6edT9xCVWra5Q4bb7">Sentrum Space. Jl. S. Hartono Jl.
                                    Kaliurang Timur No.KM 10, Gondangan, Sardonoharjo, Kec. Ngaglik, Kabupaten Sleman,
                                    Daerah Istimewa Yogyakarta</a></p>
                            <p><i class="fa fa-phone-alt"></i>0813-2719-2837</p>
                            <p><i class="fa fa-envelope"></i>info@bentogroupindonesia.com</p>
                            <div class="footer-social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook-f"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15814.442879205526!2d110.4018482!3d-7.7248477!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb93133ac1166d07c!2sSentrum%20Space!5e0!3m2!1sid!2sid!4v1671466824319!5m2!1sid!2sid"
                        width="800" height="200" style="border:0;" allowfullscreen="false" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe></center>
                </div>
            </div>
        </div>
        </div>
        <!-- Footer End -->

        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('assets/lib/easing/easing.min.js') }}"></script>
        <script src="{{ asset('assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('assets/lib/isotope/isotope.pkgd.min.js') }}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('assets/js/main.js') }}"></script>
    </body>

    </html>
