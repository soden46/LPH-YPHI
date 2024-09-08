@extends('layouts.home.master', [
    'title' => 'Profile Yayasan Produk Halal INDONESIA',
    'pageTitle' => 'Profile Yayasan Produk Halal INDONESIA',
])
@section('content')
    <!-- Profile Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-4" style="text-transform: uppercase; font-size: 3rem;">Visi & Misi LPH YPHI</h1>
            </div>

            <!-- Visi & Misi Start -->
            <div class="row mt-5">
                <!-- Card for Visi -->
                <div class="col-lg-6 col-md-12 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title text-center" style="font-size: 2.5rem; text-transform: uppercase;">Visi
                            </h5>
                            <p class="card-text" style="text-align: left;">{!! $visi !!}</p>
                        </div>
                    </div>
                </div>

                <!-- Card for Misi -->
                <div class="col-lg-6 col-md-12 mb-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title text-center" style="font-size: 2.5rem; text-transform: uppercase;">Misi
                            </h5>
                            <p class="card-text" style="text-align: left;">{!! $misi !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Visi & Misi End -->

            <!-- Sejarah Start -->
            <div class="text-center mx-auto wow fadeInUp mt-4" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-4" style="text-transform: uppercase; font-size: 3rem;">Sejarah</h1>
            </div>
            <div class="row mt-5">
                <!-- Card for Sejarah -->
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100">
                        <div class="card-body">
                            <p class="card-text" style="text-align: left; line-height: 1.6; margin-bottom: 1rem;">
                                {!! $sejarah !!}</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Sejarah End -->

        </div>
    </div>
    <!-- Profile End -->
@endsection
