<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HRIS</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ url('') }}/backend/plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ url('') }}/backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ url('') }}/backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ url('') }}/backend/plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ url('') }}/backend/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="{{ url('') }}/backend/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ url('') }}/backend/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ url('') }}/backend/plugins/summernote/summernote-bs4.min.css">
    <link rel="stylesheet" href="{{ url('') }}/backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    {{-- Main CSS --}}
    <link rel="stylesheet" href="{{ asset('style/main.css') }}">
    {{-- SweetAlert --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ url('') }}/backend/dist/img/Logo.png" alt="AdminLTELogo"
                height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="/" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>

                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true"
                        href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ url('') }}/backend/dist/img/Logo.png" alt="AdminLTE Logo"
                    class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">HRIS</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ url('') }}/backend/dist/img/admin.jpg" class="img-circle elevation-2"
                            alt="Admin Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->nama }}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                        <li class="nav-item {{ Request::is('/') ? 'menu-open' : '' }}">
                            <a href="{{ url('') }}/" class="nav-link">
                                <i class="nav-icon fas fa-home"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('profil') ? 'menu-open' : '' }}">
                            <a href="{{ url('') }}/profil" class="nav-link">
                                <i class="nav-icon fas fa-sitemap"></i>
                                <p>
                                    Struktur Organisasi
                                </p>
                            </a>
                        </li>
                        <li class="nav-item {{ Request::is('karyawan*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    Karyawan
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('') }}/karyawan" class="nav-link">
                                        <i
                                            class="{{ Request::is('karyawan') ? 'fas' : 'far' }} fa-circle nav-icon"></i>
                                        <p>Karyawan Kontrak</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('') }}/permanen" class="nav-link">
                                        <i
                                            class="{{ Request::is('permanen') ? 'fas' : 'far' }} fa-circle nav-icon"></i>
                                        <p>Karyawan Permanen</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ Request::is('kandidat*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user-plus"></i>
                                <p>
                                    Kandidat
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('') }}/kandidat" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Karyawan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('') }}/kandidat" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Outsourcing</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ Request::is('soal*') ? 'menu-open' : '' }}">
                            <a href="#" class="nav-link">
                                <i class="bi bi-clipboard-check-fill"></i>
                                <p style="margin-left: 8px">
                                    Interview
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ route('soal') }}" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Master Soal</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    Record Karyawan
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="{{ url('') }}/cuti" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Cuti Karyawan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item {{ Request::is('jadwal-pelatihan*') ? 'menu-open' : '' }}">
                            <a href="{{ route('jadwal-pelatihan') }}" class="nav-link">
                                <i class="nav-icon fas fa-graduation-cap"></i>
                                <p>
                                    Jadwal Pelatihan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Hak Akses
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="pages/tables/simple.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Admin</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <hr>
                        <li class="nav-item">
                            <a href="{{ route('logout') }}" class="nav-link text-danger">
                                <i class="nav-icon fas fa-user"></i>
                                <p>
                                    Logout
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        @yield('konten')
        <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2024 <a href="https://adminlte.io">HRIS</a>.</strong>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ url('') }}/backend/plugins/jquery/jquery.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ url('') }}/backend/plugins/jquery-ui/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->
    <script src="{{ url('') }}/backend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- ChartJS -->
    <script src="{{ url('') }}/backend/plugins/chart.js/Chart.min.js"></script>
    <!-- Sparkline -->
    <script src="{{ url('') }}/backend/plugins/sparklines/sparkline.js"></script>
    <!-- JQVMap -->
    <script src="{{ url('') }}/backend/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ url('') }}/backend/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ url('') }}/backend/plugins/jquery-knob/jquery.knob.min.js"></script>
    <!-- daterangepicker -->
    <script src="{{ url('') }}/backend/plugins/moment/moment.min.js"></script>
    <script src="{{ url('') }}/backend/plugins/daterangepicker/daterangepicker.js"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ url('') }}/backend/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
    </script>
    <!-- Summernote -->
    <script src="{{ url('') }}/backend/plugins/summernote/summernote-bs4.min.js"></script>
    <!-- overlayScrollbars -->
    <script src="{{ url('') }}/backend/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
    <!-- AdminLTE App -->
    <script src="{{ url('') }}/backend/dist/js/adminlte.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ url('') }}/backend/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('') }}/backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ url('') }}/backend/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ url('') }}/backend/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="{{ url('') }}/backend/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ url('') }}/backend/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ url('') }}/backend/plugins/jszip/jszip.min.js"></script>
    <script src="{{ url('') }}/backend/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ url('') }}/backend/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ url('') }}/backend/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ url('') }}/backend/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ url('') }}/backend/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <!-- <script src="{{ url('') }}/backend/dist/js/demo.js"></script> -->
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="{{ url('') }}/backend/dist/js/pages/dashboard.js"></script>

    <script>
        $(function() {
            $('#myTable').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
            $("#example1").DataTable({
                "paging": true,
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

        });
    </script>
    @stack('scripts')

</body>

</html>
