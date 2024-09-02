<div class="nav-bar">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand"></a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon" style="color:rgb(0, 187, 255)"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <div class="logo d-flex align-items-center">
                        <a href="/" class="d-flex align-items-center">
                            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" height="46">
                            <p class="logo-text mb-0 ml-2 text-white"><b>LPH-YPHI</b></p>
                        </a>
                    </div>
                    <a href="{{ url('/') }}"
                        class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                    <a href="{{ url('/profile') }}"
                        class="nav-item nav-link {{ Request::is('profile') ? 'active' : '' }}">Profile</a>
                    <a href="{{ url('/struktur-organisasi') }}"
                        class="nav-item nav-link {{ Request::is('struktur-organisasi') ? 'active' : '' }}">Struktur
                        Organisasi</a>
                    <a href="{{ url('/auditor') }}"
                        class="nav-item nav-link {{ Request::is('auditor') ? 'active' : '' }}">Auditor Halal</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ Request::is('proses-sertifikasi') || Request::is('proses-pencabutan-sertifikasi') ? 'active' : '' }}"
                            href="#" id="alurSertifikasiDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Alur Sertifikasi
                        </a>
                        <div class="dropdown-menu" aria-labelledby="alurSertifikasiDropdown">
                            <a href="{{ url('/proses-sertifikasi') }}"
                                class="dropdown-item {{ Request::is('proses-sertifikasi') ? 'active' : '' }}">Proses
                                Pengajuan Sertifikasi</a>
                            <a href="{{ url('/proses-pencabutan-sertifikasi') }}"
                                class="dropdown-item {{ Request::is('proses-pencabutan-sertifikasi') ? 'active' : '' }}">Proses
                                Pencabutan Sertifikasi</a>
                        </div>
                    </li>

                    <a href="{{ url('/kontak') }}"
                        class="nav-item nav-link {{ Request::is('kontak') ? 'active' : '' }}">Kontak</a>
                    <a href="https://ptsp.halal.go.id/" target="_blank"
                        class="nav-item nav-link sihalal-link">SIHALAL</a>

                </div>
            </div>
    </div>


    {{-- <div class="navbar-nav mr-1 d-inline-block">
                    <a class="nav-item nav-link" href="{{ route('login') }}">Masuk</a>
                </div>
                <div class="navbar-nav mr-1 d-inline-block">
                    <a class="nav-item nav-link" href="{{ route('register') }}">Daftar</a>
                </div> --}}
</div>
</nav>
</div>
</div>
