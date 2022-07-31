@extends('layouts.app_adminlte')
<head>
<title>Beranda</title>
</head>
@section('content')
<style>
  section {
      background-image: url('{{ asset("img/bgmusic.jpg") }}');
      background-size: cover;
      opacity: ;
  }

  .content {
    height: 100%;
  }
  .card {
      margin-top: 70px;
      
      box-shadow: 10px 10px 15px rgba(255, 255, 255, 0.5), 
           -10px -10px 15px rgba(70, 70, 70, 0.12);
  }
</style>


    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6">
              <h1 class="m-0"><b> Dashboard</b></h1>
            </div><!-- /.col -->
            
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

      

        {{-- <div class="card-header">
          <h3 class="card-title">Selamat Datang, {{ Auth::user()->name }}</h3>

          
        </div> --}}

      

        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{ $jumlah_ruangstudio }}</h3>

                <p>Ruang Studio</p>
              </div>
              <div class="icon">
                <i class="fa fa-door-closed"></i>
              </div>
              <a href="/home" class="small-box-footer"><i class="fas fa-dragon-red mb-4"></i></a>
            </div>            
          </div>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{ $jumlah_user }}</sup></h3>

                <p>Pendaftaran User</p>
              </div>
              <div class="icon">
                <i class="fa fa-user-plus"></i>
              </div>
              <a href="home" class="small-box-footer"><i class="fa fa-red-dragon mb-4"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{ $jumlah_alatmusik }}++</h3>

                <p>Jenis Alat Musik</p>
              </div>
              <div class="icon">
                <i class="fa fa-drum"></i>
              </div>
              <a href="home" class="small-box-footer"><i class="fa fa-red-dragon mb-4"></i></a>
            </div>
          </div>
          </div>

          <div class="row">
            <div class="col-lg-12 col-6">
              <!-- small box -->
              <div class="small-box" style="background-color: blueviolet">
                <div class="inner">
                  <h3></h3>
                <img src="" alt="">
                  
                </div>
                <div class="icon">
                  <i class=""></i>
                </div>
                <a href="#" class="small-box-footer"><i class="fas fa-dragon-red mb-4"></i></a>
              </div>            
            </div>
            </div>

            <div class="row">
              <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box" style="background-color: whitesmoke">
                  <div class="inner">
                    <h5 style="color: blue">Jadwal Buka Traxx Studio Musik</h5>
                    <h6>Senin - Sabtu</h6>
                    <hr>
                    <h6>Jam Operasional</h6>
                    <p>08.00 AM - 22.00 PM</p>
                    <br>
                    <div>
                      <a href="/sewa"  class="btn btn-outline-dark" style="width: 100%"><h5>BOOK NOW!</h5></a>
                    
                  </div>
                  </div>
                  <div class="icon">
                    <i class=""></i>
                  </div>
                  <a href="/ruangstudio" class="small-box-footer"><i class="fas fa-dragon-red mb-4"></i></a>
                </div>            
              </div>

             

              </div>

              

          <!-- Calendar -->
          {{-- <div class="card bg-gradient-success">
            <div class="card-header border-0">

              <h3 class="card-title">
                <i class="far fa-calendar-alt"></i>
                Calendar
              </h3>
              <!-- tools card -->
              <div class="card-tools">
                <!-- button with a dropdown -->
                <div class="btn-group">
                  <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                    <i class="fas fa-bars"></i>
                  </button>
                  <div class="dropdown-menu" role="menu">
                    <a href="#" class="dropdown-item">Add new event</a>
                    <a href="#" class="dropdown-item">Clear events</a>
                    <div class="dropdown-divider"></div>
                    <a href="#" class="dropdown-item">View calendar</a>
                  </div>
                </div>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pt-0">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.card-body -->
          </div> --}}

        <!-- /.card-body -->
        
        <!-- /.card-footer-->
     
      <!-- /.card -->

    </section>
    
    
    <!-- /.content -->
  </div>
  
@endsection
