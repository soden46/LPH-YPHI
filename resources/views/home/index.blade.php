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
                        @foreach ($partner as $index => $p)
                            <div class="col-lg-4 col-md-6 text-center wow fadeIn" data-wow-delay="0.{{ $index * 2 + 1 }}s">
                                <img class="img-fluid mb-4" src="{{ asset('storage/' . $p->logo_partner) }}"
                                    alt="{{ $p->nama_partner }}">
                                {{-- <p class="fs-5 text-primary mb-0">{{ $p->nama_partner }}</p> --}}
                            </div>
                        @endforeach
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
                    <p>{!! $tentang !!}</p>
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
                    <p>{!! $mengapa !!}</p>
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
                                <p>LPH YPHI kemudian menetapkan biaya pemeriksaan yang mencakup Biaya Pemeriksaan, Biaya
                                    Pengujian, dan Biaya Akomodasi, kemudian BPJPH menerbitkan invoice untuk pelaku usaha.
                                </p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-hexagon">
                                <img src="{{ asset('assets/img/pelaku-usaha.png') }}" alt="Pemilik Usaha" width="72px">
                            </div>
                            <div class="timeline-content">
                                <h5>4. Pemilik Usaha</h5>
                                <p>Pemilik usaha lalu melakukan pembayaran sesuai dengan invoice yang diterbitkan oleh
                                    BPJPH.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Kolom Kanan -->
                    <div class="timeline-column">
                        <div class="timeline-item">
                            <div class="timeline-hexagon">
                                <img src="{{ asset('assets/img/bpjph.png') }}" alt="BPJPH" width="72px"
                                    width="72px">
                            </div>
                            <div class="timeline-content">
                                <h5>5. BPJPH</h5>
                                <p>BPJPH memverifikasi pembayaran yang dilakukan, dan jika pembayaran sudah sesuai, BPJPH
                                    menerbitkan Surat Tanda Terima Pendaftaran (STTD) dan melanjutkan proses ke LPH YPHI
                                    untuk pemeriksaan lebih lanjut.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-hexagon">
                                <img src="{{ asset('assets/img/logo.png') }}" alt="LPH YPHI" width="72px">
                            </div>
                            <div class="timeline-content">
                                <h5>6. LPH YPHI</h5>
                                <p>LPH YPHI selanjutnya akan melakukan inspeksi lapangan dan pengujian laboratorium untuk
                                    memastikan produk sesuai dengan syariat Islam.</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-hexagon">
                                <img src="{{ asset('assets/img/mui.png') }}" alt="LPH YPHI" width="72px">
                            </div>
                            <div class="timeline-content">
                                <h5>7. MUI</h5>
                                <p>MUI akan mengadakan sidang fatwa berdasarkan hasil pemeriksaan dari LPH YPHI, dan jika
                                    produk dinyatakan halal, fatwa tersebut menjadi dasar untuk penerbitan sertifikat halal.
                                </p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-hexagon">
                                <img src="{{ asset('assets/img/bpjph.png') }}" alt="BPJPH" width="72px">
                            </div>
                            <div class="timeline-content">
                                <h5>8. BPJPH</h5>
                                <p>BPJPH akan menerbitkan sertifikat halal berdasarkan fatwa MUI dan mengunggahnya ke sistem
                                    PTSP Halal, dan Pelaku Usaha dapat mengunduhnya melalui aplikasi
                                    PTSP Halal (https://ptsp.halal.go.id).</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
