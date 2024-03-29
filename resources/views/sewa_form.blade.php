@extends('layouts.app_adminlte')
<title>Form Booking</title>
@section('content')
<style>
   section {
       background-image: url('{{ asset("img/bgmusic.jpg") }}');
       background-size: cover;
       opacity: ;
   }
   .content {
    height: 165%;
  }
   .card {
       margin-top: 70px;
       
       box-shadow: 10px 10px 15px rgba(255, 255, 255, 0.5), 
            -10px -10px 15px rgba(70, 70, 70, 0.12);
   }
</style>


    <!-- Main content -->
    <section class="content">
      
            <div class="card ml-6" style="width: 40rem; margin: 0 auto;">
                <div class="card-header bg-dark" style="font-size: 16px" >FORM BOOKING RUANG STUDIO</div>

                <div class="card-body" style="font-size: 14px">
                    {!! Form::model($model, ['route' => $route, 'method' => $method,'files' => true]) !!}


                    <div class="form-group">
                        <label for="nama">NAMA BAND</label>
                        {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Band']) !!}
                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                     </div>
                     

                     <div class="form-group">
                        <label for="ruangstudio_id">RUANG STUDIO</label>
                        {!! Form::select('ruangstudio_id', $ruangstudioList, null, ['class' => 'form-control', 'placeholder' => '-- Pilih Ruang Studio --']) !!}
                        <span class="text-danger">{{ $errors->first('ruangstudio_id') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="telp">NOMOR HP</label>
                        {!! Form::number('telp', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nomor HP']) !!}
                        <span class="text-danger">{{ $errors->first('telp') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="tgl_sewa">TANGGAL BOOKING</label>
                       {!! Form::date('tgl_sewa', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('tgl_sewa') }}</span>
                     </div>
                     {{-- <div class="form-group">
                        <label for="tgl_sewa">TANGGAL BOOKING</label>
                        {!! Form::text('tgl_sewa', null, ['class' => 'form-control', 'autofocus' => true]) !!}
                        <span class="text-danger">{{ $errors->first('tgl_sewa') }}</span>
                     </div> --}}

                     {{-- <div class="form-control-wrapper">
                        <input type="text" id="datepicker" class="form-control col-md-6" name="tgl_sewa" placeholder="Tanggal Booking" autocomplete="off" />
                    </div> --}}

                   {{-- <div class="form-group">
                     <label for="jam_sewa">JAmbOOKING</label>
                     {!! Form::time('jam_sewa', null, ['class' => 'form-control']) !!}
                     <span class="text-danger">{{ $errors->first('jam_sewa') }}</span>
                   </div> --}}

                     <div class="form-group">
                        <label for="jam_sewa">JAM BOOKING</label>                      
                       <select name="jam_sewa" class="form-control col-md-6">
                        <option disabled selected>-- Pilih Jam Booking --</option>
                       <option value="08:00:00">08:00 - 09:00 AM</option>
                       <option value="09:00:00">09:00 - 10:00 AM</option>
                       <option value="10:00:00">10:00 - 11:00 AM</option>
                       <option value="11:00:00">11:00 - 12:00 AM</option>
                       <option value="12:00:00">12:00 - 13:00 PM</option>
                       <option value="13:00:00">13:00 - 14:00 PM</option>
                       <option value="14:00:00">14:00 - 15:00 PM</option>
                       <option value="15:00:00">15:00 - 16:00 PM</option>
                       <option value="16:00:00">16:00 - 17:00 PM</option>
                       <option value="17:00:00">17:00 - 18:00 PM</option>
                       <option value="18:00:00">18:00 - 19:00 PM</option>
                       <option value="19:00:00">19:00 - 20:00 PM</option>
                       <option value="20:00:00">20:00 - 21:00 PM</option>
                       <option value="21:00:00">21:00 - 22:00 PM</option>
                       {{-- <option value="22:00:00">22:00 PM</option>   --}}
                     </select>
                        <span class="text-danger">{{ $errors->first('jam_sewa') }}</span>
                     </div>

                     
                     
                     <hr/>
                     <div class="form-group">
                        <label for="total_bayar">Bayar Uang DP (Rp.)</label>                      
                       <select name="total_bayar" class="form-control col-md-6">
                        
                       <option value="10000">Rp. 10.000</option>
                       
                     </select>
                        <span class="text-danger">{{ $errors->first('total_bayar') }}</span>
                     </div>
                     {{-- <div class="form-group">
                        <label for="total_bayar">Bayar Uang DP (Rp.)</label>
                        <small id="#" class="form-text text-muted">(Optional)</small>
                        {!! Form::number('total_bayar', null, ['class' => 'form-control', 'placeholder' => 'Contoh:100000']) !!}
                        <small id="#" class="text-danger">*Kosongkan jika tidak membayar</small>
                        <span class="text-danger">{{ $errors->first('total_bayar') }}</span>
                     </div> --}}


                  
                     <div class="dropright">
                        <button class="btn btn-secondary dropdown-toggle bg-info" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Info Pilihan BANK
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" >BRI     : <u> 3263-01-012057-53-9</u></a>
                          {{-- <a class="dropdown-item" >BCA</a> --}}
                          <a class="dropdown-item" >MANDIRI : <u> 113-00-1522616-1</u></a>
                        </div>
                      </div>

                     <div class="form-group">
                        <label for="bank">NAMA BANK TUJUAN</label>
                        <small id="#" class="form-text text-muted">(Optional)</small>
                        {!! Form::text('bank', null, ['class' => 'form-control', 'placeholder' => 'Contoh : BRI']) !!}
                        {{-- <small id="#" class="text-danger">*Required</small> --}}
                        <span class="text-danger">{{ $errors->first('bank') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="bukti_bayar">UPLOAD BUKTI PEMBAYARAN</label>
                        {!! Form::file('bukti_bayar', ['class' => 'custom-file']) !!}
                        <small id="#" class="form-text text-muted">Upload gambar (jpg/png/jpeg)</small>

                        <span class="text-danger">{{ $errors->first('bukti_bayar') }}</span>
                     </div>

                     
                     {!! Form::submit($namaTombol, ['class' => 'btn btn-primary']) !!}
                     <a href="/sewa" class="btn btn-primary"><i class="fa fa-backward"></i> Kembali</a>
                    {!! Form::close() !!}
                   
                    
                </div>
            </div>
         </div>
        </section>
        <!-- /.content -->
@endsection
