@if (Auth::User()->role === 'Admin')
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <div class="sidebar-brand-icon d-flex align-items-center justify-content-center">
            <img src="{{ asset('assets/img/logo.png') }}" alt="Logo" width="" height="80"></img>
        </div>
        <a class="sidebar-brand d-flex align-items-center justify-content-center">
            <div class=" sidebar-brand-text mx-3">
                <p>{{ Auth::user()->nama }}</p>
            </div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">
        <!-- Nav Item -->
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.profile.index') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Profile</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.partner.index') }}">
                <i class="fa fa-handshake-o"></i>
                <span>Partner</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.visi.index') }}">
                <i class="fa fa-building-o"></i>
                <span>Visi Misi</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.kontak.index') }}">
                <i class="fas fa-fw fa-users"></i>
                <span>Kontak</span>
            </a>
        </li>
    </ul>
@endcan
