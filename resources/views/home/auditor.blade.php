@extends('layouts.home.master', [
    'title' => 'Auditor Halal LPH YPHI',
    'pageTitle' => 'Auditor Halal LPH YPHI',
])
@section('content')
    <!-- Proses Sertifikasi Start -->
    <div class="container-xxl py-4">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-4" style="text-transform: uppercase; font-size: 3rem;">AUDITOR HALAL</h1>
            </div>

            <!-- Cards Start -->
            <div class="row mt-5">
                <!-- Card 1 -->
                <div class="col-lg-6 col-md-12 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 text-center">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <!-- Ikon Pria Menggunakan Kopiah dan Jas -->
                            <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;"
                                src="{{ asset('assets/img/auditor-p.png') }}" alt="" width="90px">
                            <h5 class="card-title mt-3">Dr. Apt. Muhammad Yanis Musdja</h5>
                            <p class="card-text">Auditor</p>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-lg-6 col-md-12 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card h-100 text-center">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <!-- Ikon Wanita Menggunakan Hijab dan Jas -->
                            <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;"
                                src="{{ asset('assets/img/auditor-w.png') }}" alt="" width="90px">
                            <h5 class="card-title mt-3">Eva Hayati SP</h5>
                            <p class="card-text">Auditor</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cards Row 2 -->
            <div class="row">
                <!-- Card 3 -->
                <div class="col-lg-6 col-md-12 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 text-center">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <!-- Ikon Wanita Menggunakan Hijab dan Jas -->
                            <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;"
                                src="{{ asset('assets/img/auditor-w.png') }}" alt="" width="90px">
                            <h5 class="card-title mt-3">Dr. Afifah Mayangsari</h5>
                            <p class="card-text">Auditor</p>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-lg-6 col-md-12 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 text-center">
                        <div class="card-body d-flex flex-column align-items-center justify-content-center">
                            <!-- Ikon Pria Menggunakan Kopiah dan Jas -->
                            <img class="img-fluid animated pulse infinite" style="animation-duration: 3s;"
                                src="{{ asset('assets/img/auditor-p.png') }}" alt="" width="90px">
                            <h5 class="card-title mt-3">Muhammad Ihsan Muttaqin, SSI, MSc</h5>
                            <p class="card-text">Auditor</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Cards End -->

        </div>
    </div>
    <!-- Proses Sertifikasi End -->
@endsection
