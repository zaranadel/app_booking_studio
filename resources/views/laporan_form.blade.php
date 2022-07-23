@extends('layouts.app_adminlte')
<title>Laporan</title>
@section('content')


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
