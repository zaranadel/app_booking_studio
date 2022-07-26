<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>{{ env('APP_NAME') }}</title>
  <link rel="shortcut icon" href="{{ asset('adminlte/Asset 2.png') }}" type="image/x-icon">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('adminlte') }}/dist/css/adminlte.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="{{ asset('adminlte') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  @yield('css')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
     

      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
     
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      {{-- <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
          
        </a>
      </li> --}}
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-image : linear-gradient(to right, rgb(46, 46, 46), rgb(16, 56, 83)); position: fixed;">
    <!-- Brand Logo -->
    <a href="{{ route('home') }}" class="brand-link">
      <img src="img/Asset 1.png" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Traxx Studio Musik</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        <div class="info">
          <a href="{{ route('userprofil.edit',0) }}" class="d-block">Hai, {{ \Auth::user()->name }} <i class="fa fa-edit"></i></a>
          <h6 style="color: white">{{ \Auth::user()->akses }}</h6>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('home') }}" class="nav-link {{ request()->is('home*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>            
          </li> 
          
          @if (auth()->user()->akses == 'admin')
          <li class="nav-item">
            <a href="{{ route('user.index') }}" class="nav-link {{ request()->is('user*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data User
              </p>
            </a>            
          </li>
          @endif

          @if (auth()->user()->akses == 0)
          <li class="nav-item">
            <a href="{{ route('sewa.index') }}" class="nav-link {{ request()->is('sewa') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Tabel Booking
              </p>
            </a>            
          </li>
          @endif

          {{-- @if (auth()->user()->akses == 0)
          <li class="nav-item">
            <a href="{{ route('sewa.index') }}" class="nav-link {{ request()->is('sewa') ? 'active' : '' }}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Agenda Data Booking
              </p>
            </a>            
          </li>
          @endif --}}

          <li class="nav-item">            
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-guitar"></i>
              <p>
                Ruang Studio
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>  
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('ruangstudio.index') }}" class="nav-link {{ request()->is('ruangstudio*') ? 'active' : '' }}">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Profil Ruang Studio
                  </p>
                </a>            
              </li>            
            
            <li class="nav-item">
              <a href="{{ route('sewa.create') }}" class="nav-link {{ request()->is('sewa/create') ? 'active' : '' }}">
                <i class="far fa-circle nav-icon"></i>
                <p>
                  Form Booking
                </p>
              </a> 
            </li>

           
            </ul>           
            </li>

        

          
          

          

          <li class="nav-item">
            <a href="{{ route('gallery.index') }}" class="nav-link {{ request()->is('gallery*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-image"></i>
              <p>
                Gallery Studio
              </p>
            </a>            
          </li>
          
          @if (auth()->user()->akses == 'admin')
          <li class="nav-item">
            <a href="{{ route('cetak-laporan-booking-form') }}" class="nav-link {{ request()->is('laporan*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Laporan
              </p>
            </a>            
          </li>
          @endif

          @if (auth()->user()->akses == 'admin')
          <li class="nav-item">
            <a href="{{ route('bayar.index') }}" class="nav-link {{ request()->is('laporan*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-file"></i>
              <p>
                Data Pembayaran
              </p>
            </a>            
          </li>
          @endif

          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link {{ request()->is('logout*') ? 'active' : '' }}">
              <i class="nav-icon fas fa-sign-out-alt"></i>
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
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        @include('flash::message')
        
      </div><!-- /.container-fluid -->
    </section>
  @yield('content')
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
<script src="{{ asset('adminlte') }}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('adminlte') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('adminlte') }}/dist/js/adminlte.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="{{ asset('adminlte') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/jszip/jszip.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/pdfmake/pdfmake.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/pdfmake/vfs_fonts.js"></script>
<script src="{{ asset('adminlte') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('adminlte') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('adminlte') }}/plugins/daterangepicker/daterangepicker.js"></script>
@yield('js')
</body>
</html>
