@extends('layouts.app_adminlte')
<title>Form Konfirmasi Booking</title>
@section('content')
<style>
   section {
       background-image: url('{{ asset("img/bgmusic.jpg") }}');
       background-size: cover;
       opacity: 0.9;
   }
   .card {
       margin-top: 10px;
       
       box-shadow: 10px 10px 15px rgba(255, 255, 255, 0.5), 
            -10px -10px 15px rgba(70, 70, 70, 0.12);
   }
</style>


    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-lg-4 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3></h3>  
                  <p>Akun Pemesan : {{ $model->user->email }}</p>
                  <p>Total Bayar : Rp. {{ number_format($model->total_bayar, 0, ",", ".")  ?? 'Tidak Bayar' }}</p>
                  <p>Tanggal Booking : {{ $model->tgl_sewa->translatedFormat('d F Y') }}</p>
                  <p>Jam Booking : {{ $model->jam_sewa }}</p>
                  <p>Harga Ruang Studio : Rp. {{ number_format($model->ruangstudio->harga, 0, ",", ".") }}</p>
                  <h5>Status : <u>{{ $model->status ?? 'Belum Dikonfirmasi' }}</u></h5>
               
                </div>
                
                
              </div>            
            </div>

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                  <div class="inner">
                    <h5>Bukti Bayar</h5>  
                   
                    @if ($method == "PUT")
                    <img src="{{ \Storage::url($model->bukti_bayar  ?? 'images/no-image.png') }}" width="150">
                    @endif
                    
                    {!! Form::hidden('bukti_bayar', $model->bukti_bayar, []) !!}
                  </div>
                  
                </div>            
              </div>
  
            </div>
      
            <div class="card">
                <div class="card-header bg-dark" style="font-size: 16px" >FORM KONFIRMASI BOOKING STUDIO</div>
                @if ($model->status == "Diterima")
                    <div class="bg-success" style="text-align: center">
                        <h4>SUDAH DIKONFIRMASI</h4>
                    </div>
                @else
                <div class="card-body" style="font-size: 14px">
                    {!! Form::model($model, ['route' => $route, 'method' => $method,'files' => true]) !!}


                    
                    {!! Form::hidden('total_bayar', $model->total_bayar, []) !!}
                    {!! Form::hidden('tgl_sewa', $model->tgl_sewa, []) !!}
                    {!! Form::hidden('ruangstudio_id', $model->ruangstudio_id, []) !!}
                    {!! Form::hidden('jam_sewa', $model->jam_sewa, []) !!}
                    {!! Form::hidden('bank', $model->bank, []) !!}
                    {!! Form::hidden('telp', $model->telp, []) !!}
                    {!! Form::hidden('nama', $model->nama, []) !!}
                    {!! Form::hidden('user_id', $model->user_id, []) !!}
                    
                     <div class="form-group">
                        <label for="status">Konfirmasi Admin</label>                      
                       <select name="status" class="form-control col-md-6">
                        <option disabled selected>-- Pilih Aksi --</option>
                       <option value="Diterima">Diterima</option>
                       <option value="Ditolak">Ditolak</option>
                       
                       
                       
                     </select>
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                     </div>
                     <hr/>
                     {!! Form::submit($namaTombol, ['class' => 'btn btn-success']) !!}
                     
                    {!! Form::close() !!}
                   
                    
                </div>
                @endif
                <a href="/sewa" class="btn btn-primary"><i class="fa fa-backward"></i> Kembali</a>
                

              

                
            </div>
           
         </div>
        </section>
        <!-- /.content -->
@endsection
