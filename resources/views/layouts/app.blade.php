<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Sistem Informasi Berkas</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

  <!-- iCheck -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('template') }}/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('template') }}/plugins/summernote/summernote-bs4.min.css">

  {{-- Custom CSS --}}

  <link rel="stylesheet" href="{{ asset('css/style.css') }}">

  <style>
    /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

/* Firefox */
input[type=number] {
  -moz-appearance: textfield;
}
  </style>
  @yield("css")
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-primary navbar-dark">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      {{-- <li class="nav-item d-none d-sm-inline-block">
        <a href="" class="nav-link">{{ $title }}</a>
      </li> --}}
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto mx-5">
            <div class="user-panel d-flex">
                <div class="image">
                  {{-- <img src="{{ asset('template') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
                </div>
              </div>
        </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('template') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">SIBUK</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <span class="border-bottom"></span>
          @if(Auth::user()->role == "user")
          <li class="nav-item">
            <a href="/profile" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Profile
              </p>
            </a>
          </li>
          <span class="border-bottom"></span>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              {{-- <i class="nav-icon fas fa-tachometer-alt"></i> --}}
              <i class="nav-icon fas fa-building"></i>
              <p>
                Bidang
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview" style="display: none;">
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Bidang PPSDA
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="/ppsda" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>PPSDA</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/ppsda/keperluan-pbb" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>PPSDA - PBB</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/ppsda/keterangan-harga-bangunan" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>PPSDA - KHB</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/ppsda/keterangan-memiliki-bangunan" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>PPSDA - KMB</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/ppsda/keterangan-memiliki-tanah" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>PPSDA - KMT</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/ppsda/keterangan-njop" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>PPSDA - NJOP</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Bidang KESOS
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="/kesos" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>KESOS</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/kesos/skck" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>KESOS - SKCK</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/kesos/keterangan-usaha" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>KESOS - Keterangan Usaha</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/kesos/pengantar-nikah" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>KESOS - Pengantar Nikah</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Bidang TAPEM
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview" style="display: none;">
                  <li class="nav-item">
                    <a href="/tapem" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>TAPEM</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/tapem/formulir-pendaftaran-perpindahan-penduduk" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>TAPEM - FPPP</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/tapem/formulir-meminta-surat-keterangan" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>TAPEM - FMSK</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="/tapem/formulir-keterangan-kurang-mampu" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>TAPEM - FKKM</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul>
          </li>
          <span class="border-bottom"></span>
          <li class="nav-item mt-2">
            <a href="/history" class="nav-link">
              <i class="nav-icon fas fa-history"></i>
              <p>
                History
              </p>
            </a>
          </li>
          <span class="border-bottom"></span>
          <li class="nav-item mt-2">
            <a href="/kritik-dan-saran" class="nav-link">
              <i class="nav-icon fas fa-comment-dots"></i>
              <p>
                Kritik dan Saran
              </p>
            </a>
          </li>
          <span class="border-bottom"></span>
          @elseif (Auth::user()->role == 'admin')
          {{-- halaman admin --}}
          <li class="nav-item mt-2">
            <a href="/berkas-masuk" class="nav-link">
              <i class="nav-icon fas fa-file-upload"></i>
              <p>
                Berkas Masuk
              </p>
            </a>
          </li>
          <span class="border-bottom"></span>
          <li class="nav-item mt-2">
            <a href="/kelola-user" class="nav-link">
              <i class="nav-icon fas fa-users""></i>
              <p>
                Kelola User
              </p>
            </a>
          </li>
          <span class="border-bottom"></span>
          <li class="nav-item mt-2">
            <a href="/admin/kritik-dan-saran" class="nav-link">
              <i class="nav-icon fas fa-comment-dots"></i>
              <p>
                Kritik dan Saran
              </p>
            </a>
          </li>
          <span class="border-bottom"></span>
          @endif
          <li class="nav-item mt-2">
            <a href="/logout" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
          <span class="border-bottom"></span>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      @yield("content")
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('template') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('template') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!-- ChartJS -->
<script src="{{ asset('template') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('template') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('template') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('template') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('template') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('template') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('template') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('template') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="{{ asset('template') }}/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('template') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('template') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('template') }}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('template') }}/dist/js/pages/dashboard.js"></script>

@yield("script")
</body>
</html>
