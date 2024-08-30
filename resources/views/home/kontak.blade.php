@extends('layouts.home.master', [
    'title' => 'Kontak Kami',
    'pageTitle' => 'Kontak Kami',
])

@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-4 mb-4" style="text-transform: uppercase; font-size: 3rem;">Kontak Kami</h1>
            </div>
            <div class="row">
                <!-- Kolom Kiri -->
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="contact-info border p-4 rounded">
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-map-marker-alt fa-2x mr-3"></i>
                            <div>
                                <h5>Alamat</h5>
                                <p>Jl. Contoh Alamat No.123, Kota, Negara</p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-envelope fa-2x mr-3"></i>
                            <div>
                                <h5>Email</h5>
                                <p><a href="mailto:info@example.com">info@example.com</a></p>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-3">
                            <i class="fas fa-phone fa-2x mr-3"></i>
                            <div>
                                <h5>Nomor HP</h5>
                                <p>+62 123 456 789</p>
                            </div>
                        </div>
                        <div class="map-container border rounded">
                            <iframe src="https://www.google.com/maps/embed?pb=YOUR_MAP_EMBED_URL" width="550"
                                height="310" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>

                <!-- Kolom Kanan -->
                <div class="col-lg-6">
                    <div class="contact-info border p-4 rounded">
                        <form action="{{ route('contact.send') }}" method="POST">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name">Nama Lengkap</label>
                                <input type="text" id="name" name="name" class="form-control border" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control border" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="subject">Subjek</label>
                                <input type="text" id="subject" name="subject" class="form-control border" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="message">Isi Pesan</label>
                                <textarea id="message" name="message" class="form-control border" rows="5" required></textarea>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-primary btn-lg w-100">Kirim Pesan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .map-container {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
        }

        .contact-info {
            background: #f8f9fa;
            border-top: 2px solid #007bff;
            /* Biru untuk border atas */
            border-bottom: 2px solid #007bff;
            /* Biru untuk border bawah */
        }

        .contact-info h5 {
            margin: 0;
            font-weight: 600;
        }

        .contact-info p {
            margin: 0;
        }

        .form-control.border {
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
        }

        .form-group label {
            font-weight: bold;
        }
    </style>
@endsection
