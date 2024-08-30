<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title style="text-transform: uppercase;">Yayasan Produk Halal Indonesia - LPH YPHI</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="Lembaga Pemeriksa Halal Yayasan Produk Halal Indonesia (YPHI) adalah lembaga profesional yang menyediakan layanan pemeriksaan halal berdasarkan sains dan teknologi terkini dengan standar internasional. Misi kami adalah menyediakan analisis kehalalan produk yang jujur, amanah, independen, kredibel, dan menjaga kerahasiaan produk pelaku usaha.">
    <meta name="keywords"
        content="Halal, Lembaga Pemeriksa Halal, YPHI, Sertifikasi Halal, Analisis Halal, Produk Halal, Lembaga Halal Indonesia">
    <meta name="author" content="Lembaga Pemeriksa Halal Yayasan Produk Halal Indonesia">
    <meta property="og:title" content="Lembaga Pemeriksa Halal Yayasan Produk Halal Indonesia">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @can('admin')
        <title>Admin | {{ $title ?? 'Dashboard' }}</title>
    @endcan
    <!-- Custom fonts for this template-->
    <link href="{{ asset('template/backend/sb-admin-2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet"
        type="text/css">
    <script src="https://kit.fontawesome.com/5fafd18292.js" crossorigin="anonymous"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{ asset('assets/template/backend/sb-admin-2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <!--Trix Editor CSS-->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/trix.css') }}">

    <style type="text/css">
        trix-toolbar [data-trix-button-group="file-tools"] {
            dysplay: none;
        }
    </style>
    @stack('css')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        @include('layouts.beckend.dashboard.sidebar')
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                @include('layouts.beckend.dashboard.navbar')
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">{{ $pageTitle ?? '' }}</h1>
                    @yield('content')
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website {{ date('Y') }}</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Yakin Logout ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form method="POST" action="/logout">
                        @csrf
                        <button type="submit" class="btn btn-primary">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets/template/backend/sb-admin-2') }}/vendor/jquery/jquery.min.js"></script>
    <script src="{{ asset('assets/template/backend/sb-admin-2') }}/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/template/backend/sb-admin-2') }}/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/template/backend/sb-admin-2') }}/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/template/backend/sb-admin-2') }}/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/template/backend/sb-admin-2') }}/js/demo/chart-area-demo.js"></script>
    <script src="{{ asset('assets/template/backend/sb-admin-2') }}/js/demo/chart-pie-demo.js"></script>
    <script type="text/javascript" src="{{ asset('assets/js/trix.js') }}"></script>
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    @stack('js')
</body>

</html>
