@extends('layouts.app_adminlte')
<title>Laporan</title>
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
      margin-top: 1px;
      
      box-shadow: 10px 10px 15px rgba(255, 255, 255, 0.5), 
           -10px -10px 15px rgba(70, 70, 70, 0.12);
  }
</style>


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header bg-dark">Cetak Laporan</div>
                  <h3 class="ml-3"><br>Print Data Booking</h3>               
            
            <div class="card-body">
              <div class="input-group mb-4">
                  <label for="label">Tanggal Awal </label>
                  <input type="date" name="tglawal" id="tglawal" class="form-control ml-4">
              </div>
              <div class="input-group mb-3">
                  <label for="label">Tanggal Akhir </label>
                  <input type="date" name="tglakhir" id="tglakhir" class="form-control ml-3">
            </div>
            <a href="" onclick="this.href='/cetak-laporan-booking-pertanggal/'+document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value" target="blank" class="btn btn-primary col-md-12">Print     <i class="fa fa-print"></i> </a>
          </div>
        </div>
        </section>
        <!-- /.content -->
@endsection
