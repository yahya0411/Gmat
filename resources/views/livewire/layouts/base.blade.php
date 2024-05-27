<!DOCTYPE html>
<head>
    @livewireStyles
<link rel="stylesheet" href="/plugins/jquery-ui/jquery-ui.min.css">
    <!-- Font Awesome -->
    <link rel="icon" type="image/png" href="l.png" />
  <title>E-Post</title>
    <link rel="stylesheet" href="/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="/dist/css/ionicons.min.css">

    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="/plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
        <!-- data table -->
        <link rel="stylesheet" href="/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
        <link rel="stylesheet" href="/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
        <link rel="stylesheet" href="plugins/chart.js/Chart.css">
        <link rel="stylesheet" href="plugins/toastr/toastr.min.css">
        <link rel="stylesheet" href="dist/css/adminlte.min.css">

        <link rel="stylesheet" href="/MyStyle/style.css">
@stack('styles')



    </head>
    <body class="sidebar-mini layout-navbar-fixed layout-footer-fixed layout-fixed">
         <!-- Preloader -->
{{--  <div class="preloader flex-column justify-content-center align-items-center">
    <h1 style="color: #003C71">G-Mat</h1>
    <img class="animation__wobble" src="icons/logo-round.png" alt="Gmat" height="80" width="80">
  </div>--}}
        <div class="wrapper">
            <div class="flex-column justify-content-center align-items-center" style="height: 0px;">
                <img class="animation__shake" src="logo.png" alt="E-Post" height="60" width="60" style="display: none;">
                </div>
            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                 {{--   <li class="nav-item d-none d-sm-inline-block">
                        <a href="index3.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a href="#" class="nav-link">Contact</a>
                    </li>--}}
                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Notifications Dropdown Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link" data-toggle="dropdown" href="#">
                            <i class="far fa-bell"></i>
                            <span class="badge badge-warning navbar-badge">15</span>
                        </a>

                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                            <i class="fas fa-expand-arrows-alt"></i>
                        </a>
                    </li>

                </ul>
            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar sidebar-primary elevation-4 sidebar-dark-Olive">
                <!-- Brand Logo -->
                <a href="index3.html" class="brand-link">
                    <img src="logo-round.png" alt="E-Post" class="brand-image img-circle elevation-3" style="opacity: .8">
                    <span class="brand-text font-weight">
                        E-Post</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                        </div>
                        <div class="info">
                            <a href="#" class="d-block">Admin</a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">
                        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                                 with font-awesome or any other icon font library -->
                                 <li class="nav-item">
                                    <a href="/dashboard" class="nav-link">
                                      <i class="nav-icon fas fa-tachometer-alt"></i>
                                      <p>
                                        Tableau de bord
                                      </p>
                                    </a>
                                  </li>
                                 <li class="nav-header">Gestion de Materiel</li>
                                 <li class="nav-item">
                                    <a href="" class="nav-link">
                                      <i class="nav-icon fas fa-boxes"></i>
                                      <p>
                                        Magasin
                                      </p>
                                    </a>
                                  </li>
                                 <li class="nav-item">
                                    <a href="" class="nav-link">
                                      <i class="nav-icon fas fa-box"></i>
                                      <p>
                                        Arrivage
                                      </p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="materiel" class="nav-link">
                                      <i class="nav-icon fas fa-laptop"></i>
                                      <p>
                                        Equipement Informatique
                                      </p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="" class="nav-link">
                                      <i class="nav-icon fas fa-credit-card"></i>
                                      <p>
                                       TPE
                                      </p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="" class="nav-link">
                                      <i class="nav-icon fas fa-recycle"></i>
                                      <p>
                                       Consommable
                                      </p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-file-export"></i>
                                      <p>
                                        Mouvement
                                        <i class="right fas fa-angle-left"></i>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                        <a href="./index.html" class="nav-link">
                                          <i class="nav-icon fas fa-history"></i>
                                          <p>Historique</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="./index2.html" class="nav-link">
                                          <i class="nav-icon fas fa-file-pdf"></i>
                                          <p>Bon de sortie</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="./index2.html" class="nav-link">
                                          <i class="nav-icon fas fa-file-pdf"></i>
                                          <p>Decharge</p>
                                        </a>
                                      </li>
                                    </ul>
                                  </li>
                                 <li class="nav-header">Gestion d'etablisements</li>
                                 <li class="nav-item">
                                    <a href="/bureau" wire:navigate class="nav-link">
                                      <i class="nav-icon fas fa-building"></i>
                                      <p>
                                        Bureau de poste
                                      </p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="bureau.index" class="nav-link">
                                      <i class="nav-icon fas fa-city"></i>
                                      <p>
                                        Sous-direction
                                      </p>
                                    </a>
                                  </li>
                                  <li class="nav-item">
                                    <a href="#" class="nav-link">
                                      <i class="nav-icon fas fa-users"></i>
                                      <p>
                                        Client externe
                                        <i class="right fas fa-angle-left"></i>
                                      </p>
                                    </a>
                                    <ul class="nav nav-treeview">
                                      <li class="nav-item">
                                        <a href="/commercant" wire:navigate class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Commercant</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="/at" wire:navigate class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Algerie Telecom</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="/mobilis" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>Mobilis</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="/ems" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>EMS</p>
                                        </a>
                                      </li>
                                      <li class="nav-item">
                                        <a href="/sntf" class="nav-link">
                                          <i class="far fa-circle nav-icon"></i>
                                          <p>SNTF</p>
                                        </a>
                                      </li>
                                        <li class="nav-item">
                                            <a href="./index3.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>AAPI</p>
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="./index3.html" class="nav-link">
                                                <i class="far fa-circle nav-icon"></i>
                                                <p>SAA</p>
                                            </a>
                                        </li>
                                    </ul>
                                  </li>
                                  <li class="nav-header">Configuration</li>
                                  <li class="nav-item">
                                     <a href="" class="nav-link">
                                       <i class="nav-icon fas fa-cogs"></i>
                                       <p>
                                         Configuration
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
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0">@yield('nom_page')</h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <!--       <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active">@yield('title')</li>
                                </ol> -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">

                      {{$slot}}

                    </div><!--/. container-fluid -->
                </section>
                <!-- /.content -->
            </div>

            <!-- Main Footer -->
            <footer class="main-footer">
                 <strong>Tous droits réservés Copyright &copy; @php echo date("Y");@endphp <a href="https://www.poste.dz">Algerie Poste</a>.</strong>

                <div class="float-right d-none d-sm-inline-block">
                    <b style="color: #003C71">E-Post</b>
                </div>
            </footer>
        </div>
        <!-- ./wrapper -->
        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
        <script>
            $.widget.bridge('uibutton', $.ui.button);
          </script>
        <!-- Bootstrap 4 -->
        <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="plugins/chart.js/Chart.min.js"></script>

        <!-- Sparkline -->
        <script src="plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="plugins/moment/moment.min.js"></script>
        <script src="plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="plugins/summernote/summernote-bs4.min.js"></script>

        <script src="plugins/datatables/jquery.dataTables.js"></script>
        <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
        <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
        <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
        <script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
         <script src="plugins/select2/js/select2.full.min.js"></script>
        <script src="plugins/jszip/jszip.min.js"></script>
        <script src="plugins/pdfmake/pdfmake.min.js"></script>
        <script src="plugins/pdfmake/vfs_fonts.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
        <script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
        <script src="plugins/toastr/toastr.min.js"></script>

        <!-- overlayScrollbars -->
        <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="dist/js/adminlte.js"></script>
        @stack('script')

        <!-- AdminLTE for demo purposes -->
        {{--
        <script src="dist/js/demo.js"></script>
        --}}
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->


        @livewireScripts
        </body>
        </html>
