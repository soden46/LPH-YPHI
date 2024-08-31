@extends('layouts.home.master', [
    'title' => 'Proses Sertifikasi',
    'pageTitle' => 'Proses Sertifikasi',
])
@section('content')
    <!-- Proses Sertifikasi Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-4" style="text-transform: uppercase; font-size: 3rem;">Proses Sertifikasi</h1>
            </div>

            <!-- Proses Sertifikasi Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="timeline">
                        <div class="timeline-grid">
                            <!-- Kolom Kiri -->
                            <div class="timeline-column">
                                <div class="timeline-item">
                                    <div class="timeline-hexagon">
                                        <img src="{{ asset('assets/img/pelaku-usaha.png') }}" alt="Pemilik Usaha"
                                            width="72px">
                                    </div>
                                    <div class="timeline-content">
                                        <h5>1. Pemilik Usaha</h5>
                                        <p>Pelaku Usaha melakukan pendaftaran melalui PTSP Halal (https://ptsp.halal.go.id)
                                            dan
                                            melengkapi persyaratan serta memasukkan jenis layanan dan produk yang akan
                                            didaftarkan,
                                            kemudian memilih LPH YPHI sebagai Lembaga Pemeriksa Halal.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-hexagon">
                                        <img src="{{ asset('assets/img/logo-bpjph.png') }}" alt="BPJPH" width="72px">
                                    </div>
                                    <div class="timeline-content">
                                        <h5>2. BPJPH</h5>
                                        <p>BPJPH (Badan Penyelenggara Jaminan Produk Halal) memeriksa kelengkapan dokumen
                                            persyaratan dan produk/layanan yang diajukan pemilik usaha. Jika sesuai akan
                                            dikirim ke
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
                                            oleh Pemilik usaha untuk diterbitkan invoice oleh BPJPH. Biaya terdiri dari
                                            Biaya
                                            Pemeriksaan, Biaya Pengujian, Biaya Akomodasi</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-hexagon">
                                        <img src="{{ asset('assets/img/pelaku-usaha.png') }}" alt="Pemilik Usaha"
                                            width="72px">
                                    </div>
                                    <div class="timeline-content">
                                        <h5>4. Pemilik Usaha</h5>
                                        <p>Pelaku Usaha akan melakukan Pembayaran atas Invoice yang telah diterbitkan oleh
                                            BPJPH dan
                                            oleh LPH.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- Kolom Kanan -->
                            <div class="timeline-column">
                                <div class="timeline-item">
                                    <div class="timeline-hexagon">
                                        <img src="{{ asset('assets/img/logo-bpjph.png') }}" alt="BPJPH" width="72px"
                                            width="72px">
                                    </div>
                                    <div class="timeline-content">
                                        <h5>5. BPJPH</h5>
                                        <p>BPJPH akan memeriksa pembayaran yang dilakukan oleh Pelaku Usaha, jika sesuai
                                            BPJPH akan
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
                                            oleh Pemilik Usaha, dan membuat Laporan hasil pemeriksaan. Kemudian mengirimkan
                                            Laporan
                                            ke Komisi Fatwa MUI melalui aplikasi sihalal untuk dilakukan Sidang Fatwa
                                            Penetapan
                                            Kehalalan Produk.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-hexagon">
                                        <img src="{{ asset('assets/img/mui.png') }}" alt="LPH YPHI" width="72px">
                                    </div>
                                    <div class="timeline-content">
                                        <h5>7. MUI</h5>
                                        <p>MUI (Majelis Ulama Indonesia) memberikan fatwa kehalalan Produk, dan akan
                                            mengeluarkan
                                            Surat Ketetapan Halal atas Produk/Jasa yang diusulkan oleh Pelaku Usaha.</p>
                                    </div>
                                </div>
                                <div class="timeline-item">
                                    <div class="timeline-hexagon">
                                        <img src="{{ asset('assets/img/logo-bpjph.png') }}" alt="BPJPH" width="72px">
                                    </div>
                                    <div class="timeline-content">
                                        <h5>8. BPJPH</h5>
                                        <p>BPJPH menerbitkan sertifikat Halal, dan Pelaku Usaha dapat mengunduhnya melalui
                                            aplikasi
                                            PTSP Halal (https://ptsp.halal.go.id).</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Proses Sertifikasi End -->
@endsection
