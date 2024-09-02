@extends('layouts.home.master', [
    'title' => 'Proses Pengajuan Sertifikasi Halal',
    'pageTitle' => 'Proses Pengajuan Sertifikasi Halal',
])

@section('content')
    <!-- Proses Pengajuan Sertifikasi Halal Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-4" style="text-transform: uppercase; font-size: 3rem;">Proses Pengajuan Sertifikasi Halal
                </h1>
            </div>

            <div class="post-content py-5">
                <!-- Persiapan Data -->
                <div class="post-section mb-2">
                    <h2>Persiapan Data</h2>
                    <p>Untuk mendapatkan sertifikasi Halal, pastikan usaha Anda memiliki Nomor Induk Berusaha (NIB) yang
                        dapat didaftarkan melalui OSS di <a href="https://www.oss.go.id">www.oss.go.id</a>. Selanjutnya,
                        pastikan produk yang akan disertifikasi sudah tersedia dan siap untuk proses penilaian. Jika usaha
                        Anda berbentuk perusahaan, penting untuk menunjuk seorang Penyelia Halal yang akan memastikan
                        seluruh proses produksi sesuai dengan syariat Islam. Setelah semua persiapan ini lengkap, Anda dapat
                        mengajukan sertifikasi Halal melalui situs PTSP SI Halal di <a
                            href="https://ptsp.halal.go.id">ptsp.halal.go.id</a>.</p>
                </div>

                <!-- Pendaftaran di PTSP Halal -->
                <div class="post-section mb-2">
                    <h2>Pendaftaran di PTSP Halal</h2>
                    <p>Untuk mendaftar, ikuti langkah-langkah berikut:</p>
                    <ol>
                        <li>- Akses situs PTSP SI Halal di <a href="https://ptsp.halal.go.id">ptsp.halal.go.id</a>.</li>
                        <li>- Klik tombol "Create an Account" di bawah tombol "LOGIN". </li>
                        <li>- Jika sudah memiliki akun, langsung
                            masukkan username dan password Anda, lalu klik "Login".</li>
                        <li>- Pilih tipe user "Pelaku Usaha".</li>
                        <li>- Masukkan Nama, alamat email, dan password.</li>
                        <li>- Ikuti langkah-langkah selanjutnya untuk menyelesaikan pendaftaran akun.</li>
                    </ol>
                </div>

                <!-- Data yang Perlu Disiapkan -->
                <div class="post-section mb-2">
                    <h2>Data yang Perlu Disiapkan</h2>
                    <ul>
                        <li>- Profil Anda / Perusahaan Anda.</li>
                        <li>- Data Penanggung Jawab.</li>
                        <li>- Aspek Legal, seperti NPWP, NIB, dan lainnya.</li>
                        <li>- Data Pabrik.</li>
                        <li>- Outlet.</li>
                        <li>- Penyelia Halal.</li>
                    </ul>
                </div>

                <!-- Mekanisme Sertifikasi -->
                <div class="post-section mb-2">
                    <h2>Mekanisme Sertifikasi Halal</h2>
                    </br>
                    <h3>1. Mekanisme Reguler</h3>
                    <p>Mekanisme reguler adalah proses sertifikasi Halal yang melibatkan pemeriksaan menyeluruh oleh lembaga
                        sertifikasi yang diakui, seperti BPJPH dan LPPOM MUI. Proses ini mencakup beberapa tahapan:</p>
                    <ul>
                        <li><b>- Pengajuan Permohonan:</b> Pelaku usaha mengajukan permohonan sertifikasi Halal melalui
                            sistem online
                            PTSP SI Halal atau langsung ke lembaga sertifikasi.</li>
                        <li><b>- Pemeriksaan Dokumen:</b> Dokumen yang diajukan, termasuk daftar bahan dan proses produksi,
                            akan
                            diperiksa oleh auditor Halal.</li>
                        <li><b>- Audit Lapangan:</b> Audit lapangan dilakukan untuk memastikan seluruh proses produksi
                            sesuai dengan
                            syariat Islam.</li>
                        <li><b>- Sidang Fatwa Halal:</b> Hasil audit dikaji dalam sidang fatwa oleh MUI untuk menentukan
                            status
                            kehalalan produk.</li>
                        <li><b>- Penerbitan Sertifikat Halal:</b> Jika semua tahapan berhasil dilalui dan produk dinyatakan
                            halal,
                            sertifikat Halal akan diterbitkan.</li>
                    </ul>
                    </br>
                    <h3>2. Mekanisme Self Declare</h3>
                    <p>Mekanisme self declare adalah proses sertifikasi Halal yang lebih sederhana dan ditujukan untuk
                        pelaku usaha kecil dan mikro (UMKM). Proses ini lebih cepat dan tidak memerlukan audit ketat:</p>
                    <ul>
                        <li><b>- Persyaratan:</b> Pelaku usaha harus memastikan bahwa seluruh bahan yang digunakan dan
                            proses
                            produksi sudah jelas kehalalannya.</li>
                        <li><b>- Pendaftaran:</b> Proses pendaftaran dilakukan melalui sistem online dengan prosedur yang
                            lebih
                            sederhana.</li>
                        <li><b>- Deklarasi Halal:</b> Pelaku usaha menandatangani pernyataan di bawah sumpah bahwa produknya
                            halal.
                        </li>
                        <li><b>- Pengawasan:</b> Pemerintah tetap melakukan pengawasan dan bisa melakukan audit jika
                            diperlukan.</li>
                    </ul>
                </div>

                <!-- Proses Permohonan Sertifikasi Halal -->
                <div class="post-section mt-2">
                    <h2>3. Proses Permohonan Sertifikasi Halal</h2>
                    <p>Proses permohonan sertifikasi Halal di Indonesia diatur oleh beberapa peraturan perundang-undangan,
                        yang terutama mengacu pada Undang-Undang No. 33 Tahun 2014 tentang Jaminan Produk Halal (UU JPH).
                        Proses ini memerlukan waktu sekitar 21 hari kerja dari awal pendaftaran hingga penerbitan
                        sertifikat, dengan catatan semua persyaratan dan tahapan dipenuhi tepat waktu:</p>

                    <ul>
                        <li><b>- Pendaftaran dan Pengajuan Permohonan:</b> Pemilik usaha mendaftar dan mengajukan permohonan
                            sertifikasi halal melalui PTSP Halal dengan melampirkan dokumen persyaratan.</li>
                        <li><b>- Pemeriksaan Dokumen oleh BPJPH:</b> BPJPH memeriksa kelengkapan dan kesesuaian dokumen yang
                            diajukan, dan jika dokumen lengkap serta sesuai, BPJPH meneruskannya ke LPH yang ditunjuk.</li>

                        <li><b>- Penetapan Biaya dan Penerbitan Invoice:</b> LPH kemudian menetapkan biaya pemeriksaan,
                            kemudian
                            BPJPH menerbitkan invoice untuk pelaku usaha.</li>

                        <li><b>- Pembayaran Biaya Sertifikasi:</b> Pemilik usaha melakukan pembayaran sesuai dengan invoice
                            yang
                            diterbitkan oleh BPJPH.</li>

                        <li><b>- Verifikasi Pembayaran dan Penerbitan STTD:</b> Setelah pembayaran diverifikasi, BPJPH
                            menerbitkan
                            Surat Tanda Terima Pendaftaran (STTD).</li>

                        <li><b>- Pemeriksaan dan Pengujian Produk oleh LPH:</b> LPH melakukan inspeksi lapangan dan
                            pengujian
                            laboratorium untuk memastikan produk sesuai dengan syariat Islam.</li>

                        <li><b>- Fatwa Halal oleh MUI:</b> MUI mengadakan sidang fatwa dan jika produk dinyatakan halal,
                            fatwa
                            tersebut menjadi dasar untuk penerbitan sertifikat halal.</li>

                        <li><b>- Penerbitan Sertifikat Halal oleh BPJPH:</b> BPJPH menerbitkan sertifikat halal dan
                            mengunggahnya
                            ke
                            sistem PTSP Halal, di mana pelaku usaha dapat mengunduhnya.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Mekanisme Sertifikasi Halal End -->
@endsection
