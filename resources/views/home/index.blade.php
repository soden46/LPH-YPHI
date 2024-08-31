@extends('layouts.home.master', [
    'title' => 'Yayasan Produk Halal Indonesia',
    'pageTitle' => 'Yayasan Produk Halal Indonesia',
])
@section('content')
    <!-- Header Start -->
    <div class="container-fluid hero-header py-2 mb-2">
        <div class="container py-4">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 mb-2 animated slideInDown" style="font-size: 3rem;">Yayasan Produk Halal INDONESIA
                    </h1>
                    <p class="animated slideInDown">Daftar Sertifikasi halal mandiri lebih cepat dan mudah.</p>
                    <a href="https://ptsp.halal.go.id/" class="btn btn-primary py-3 px-4 mt-3 animated slideInDown">Daftar
                        Disini</a>
                </div>
                <div class="col-lg-6 animated slideInUp">
                    <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;"
                        src="{{ asset('assets/img/hero-1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <!-- Didukung Oleh Start -->
    <div class="container-xxl bg-light py-5 my-5" style="margin-top: 0px;">
        <div class="container py-2">
            <div class="row g-5 align-items-center">
                <div class="col-lg-2 col-md-12">
                    <p class="fs-4 text-secondary mb-0"><b>Didukung Oleh:</b></p>
                </div>
                <div class="col-lg-10 col-md-12">
                    <div class="row g-5">
                        <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid mb-4" src="img/logo-partner1.png" alt="Partner 1">
                            {{-- <p class="fs-5 text-primary mb-0">Partner 1</p> --}}
                        </div>
                        <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.3s">
                            <img class="img-fluid mb-4" src="img/logo-partner2.png" alt="Partner 2">
                            {{-- <p class="fs-5 text-primary mb-0">Partner 2</p> --}}
                        </div>
                        <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.5s">
                            <img class="img-fluid mb-4" src="img/logo-partner3.png" alt="Partner 3">
                            {{-- <p class="fs-5 text-primary mb-0">Partner 3</p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Didukung Oleh End -->

    <!-- Tentang Start -->
    <div class="faqs">
        <div class="container">
            <div class="content">
                <img src="{{ asset('assets/img/hero-1.png') }}" alt="Barista" class="faq-img">
                <div class="text-content">
                    <h1>Tentang LPH YPHI</h1>
                    <p>Yayasan Produk Halal Indonesia (YPHI) Didirikan oleh Dr. Muhammad Yanis Musdja dan dibantu oleh
                        Rahmat
                        SH, MH, Ir, Dadi Sutardi, SH. Pendirian YPHI sangat didukung oleh Ikatan Cendekiawan Muslim
                        Indonesia (ICMI) DKI Jakarta yang pada waktu itu Ketua ICMI DKI dijabat oleh Andi Anzhar Cakra
                        Wijaya SH dan Sekretris ICMI DKI Ir. Akhmad Sanusi dan Wakil Ketua ICMI DKI Jakarta Dr. Muhammad
                        Yanis Musdja. Pada awal YPHI berdiri, misi YPHI adalah untuk membantu penyusunan UU Jaminan Produk
                        halal, dimana pada waktu itu Dr. Muhammad Yanis Musdja sebagai Dosen HALAL SAINS UIN Syarif
                        YPHI dan mewakili Lembaga Masyarakat (YPHI) diminta oleh Kemenag RI untuk membantu
                        penyusunan UU Jaminan Produk Halal.</p>
                    <a href="{{ url('/profile') }}" class="btn btn-success">Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Tentang End -->

    <!-- Tugas Start -->
    <div class="faqs">
        <div class="container">
            <div class="content">
                <div class="text-content">
                    <h1>Mengapa Harus Memilih LPH YPHI</h1>
                    <p>LPH YPHI memiliki misi untuk Menjadi Lembaga Pemeriksa Halal yang profesional berdasarkan sains dan
                        teknologi terkini dengan standar internasional.
                    </p>
                    <p>LPH YPHI lebih banyak melakukan training tentang produk halal untuk Tingkat Nasional dan
                        Internasional yang bekerja sama dengan Lembaga Halal YARSI dibawah pimpinan Prof. Dr. Jurnalis Udin
                        dan Dr. Anna P. Roswim, termasuk untuk analisis kehalalan produk, dimana pada saat ini Universitas
                        YARSI adalah salah satu Universitas yang paling bagus dan lengkap peralatannya untuk analisis produk
                        halal. Disamping itu YPHI membantu Prof. Dr. Sapta Nirwandar menerbitkan Majalah Halal Lifestyle
                        pada awal tahun 2014, dan Prof. Dr. Sapta Nirwandar selalu mendorong dan menfasilitasi agar YPHI
                        segera mempunyai LPH.</p>
                    <p>Untuk mendirikan LPH YPHI telah diadakan kerja sama sejak awal tahun 2015 dengan PT. RAFA TOPAZ UTAMA
                        dibawah pimpinan Ir. RUDI ANTONI yang bergerak dalam bidang pengadaan dan supplier alat-alat
                        analisis kimia dan peralatan kesehatan di Rumah Sakit. Kerjasama ini difasilitasi oleh Pimpinan
                        Kawasan Industri Pulogadung (JIEP), karena itu LPH YPHI kerja sama dengan PT. RAFA TOPAZ UTAMA
                        sekretariatnya dan laboratoriumnya didirikan di Kawasan Industri Pulogadung (JIEP).
                    </p>
                    <p>
                        Untuk melakukan pengembangan analisis kehalalan produk YPHI telah melakukan kerja sama dengan Korea
                        Testing Laboratory (KTL). Piagam kerjasa ditandatangani di Seoul pada tanggal 29 Juli 2016, dan KTL
                        telah menghibahkan ke YPHI sejumlah alat analisis halal seperti PCR, GCMS, HPLC dan beberapa
                        peralatan lainnya. Sedangkan untuk penempatannya di laboratorium dibantu oleh PT. RAFA TOPAZ UTAMA.
                        Begitu juga dengan Lembaga Halal Thailand, YPHI telah melakukan Perjanjian Kerjasama yang dibuat di
                        Bangkok, Thailand pada tanggal 25 Desember 2015, perjanjian kerjasama ini dibuat untuk saling
                        membantu dalam berbagai aspek yang menyangkut kehalalan produk.
                    </p>
                    <a href="https://ptsp.halal.go.id/" class="btn btn-success">Daftar Sekarang</a>
                </div>
                <img src="{{ asset('assets/img/hero-1.png') }}" alt="Barista" class="faq-img">
            </div>
        </div>
    </div>
    <!-- Tugas End -->

    <!-- Proses Sertifikasi Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-4">Proses Sertifikasi</h1>
                <p class="text-primary fs-5 mb-5">Alur Proses Sertifikasi</p>
            </div>
            <div class="timeline">
                <div class="timeline-grid">
                    <!-- Kolom Kiri -->
                    <div class="timeline-column">
                        <div class="timeline-item">
                            <div class="timeline-hexagon">
                                <img src="{{ asset('assets/img/pelaku-usaha.png') }}" alt="Pemilik Usaha" width="72px">
                            </div>
                            <div class="timeline-content">
                                <h5>1. Pemilik Usaha</h5>
                                <p>Pelaku Usaha melakukan pendaftaran melalui PTSP Halal (https://ptsp.halal.go.id) dan
                                    melengkapi persyaratan serta memasukkan jenis layanan dan produk yang akan didaftarkan,
                                    kemudian memilih LPH YPHI sebagai Lembaga Pemeriksa Halal.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-hexagon">
                                <img src="{{ asset('assets/img/bpjph.png') }}" alt="BPJPH" width="72px">
                            </div>
                            <div class="timeline-content">
                                <h5>2. BPJPH</h5>
                                <p>BPJPH (Badan Penyelenggara Jaminan Produk Halal) memeriksa kelengkapan dokumen
                                    persyaratan dan produk/layanan yang diajukan pemilik usaha. Jika sesuai akan dikirim ke
                                    LPH YPHI.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-hexagon">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="LPH YPHI" width="72px">
                            </div>
                            <div class="timeline-content">
                                <h5>3. LPH YPHI</h5>
                                <p>LPH YPHI akan menginput biaya pemeriksaan terhadap produk/layanan yang diajukan
                                    oleh Pemilik usaha untuk diterbitkan invoice oleh BPJPH. Biaya terdiri dari Biaya
                                    Pemeriksaan, Biaya Pengujian, Biaya Akomodasi</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-hexagon">
                                <img src="{{ asset('assets/img/pelaku-usaha.png') }}" alt="Pemilik Usaha" width="72px">
                            </div>
                            <div class="timeline-content">
                                <h5>4. Pemilik Usaha</h5>
                                <p>Pelaku Usaha akan melakukan Pembayaran atas Invoice yang telah diterbitkan oleh BPJPH dan
                                    oleh LPH.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Kolom Kanan -->
                    <div class="timeline-column">
                        <div class="timeline-item">
                            <div class="timeline-hexagon">
                                <img src="{{ asset('assets/img/bpjph.png') }}" alt="BPJPH" width="72px" width="72px">
                            </div>
                            <div class="timeline-content">
                                <h5>5. BPJPH</h5>
                                <p>BPJPH akan memeriksa pembayaran yang dilakukan oleh Pelaku Usaha, jika sesuai BPJPH akan
                                    menerbitkan STTD (surat tanda terima pendaftaran), dan prosesnya dikirim ke LPH
                                    YPHI.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-hexagon">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="LPH YPHI" width="72px">
                            </div>
                            <div class="timeline-content">
                                <h5>6. LPH YPHI</h5>
                                <p>LPH YPHI melakukan Pemeriksaan dan/atau Menguji Kehalalan Produk yang diusulkan
                                    oleh Pemilik Usaha, dan membuat Laporan hasil pemeriksaan. Kemudian mengirimkan Laporan
                                    ke Komisi Fatwa MUI melalui aplikasi sihalal untuk dilakukan Sidang Fatwa Penetapan
                                    Kehalalan Produk.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-hexagon">
                                <img src="{{ asset('assets/img/mui.png') }}" alt="LPH YPHI" width="72px">
                            </div>
                            <div class="timeline-content">
                                <h5>7. MUI</h5>
                                <p>MUI (Majelis Ulama Indonesia) memberikan fatwa kehalalan Produk, dan akan mengeluarkan
                                    Surat Ketetapan Halal atas Produk/Jasa yang diusulkan oleh Pelaku Usaha.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-hexagon">
                                <img src="{{ asset('assets/img/bpjph.png') }}" alt="BPJPH" width="72px">
                            </div>
                            <div class="timeline-content">
                                <h5>8. BPJPH</h5>
                                <p>BPJPH menerbitkan sertifikat Halal, dan Pelaku Usaha dapat mengunduhnya melalui aplikasi
                                    PTSP Halal (https://ptsp.halal.go.id).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
