@extends('layouts.app_adminlte')
<title>Form Booking</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Form Booking Ruang Studio</div>

                <div class="card-body">
                    {!! Form::model($model, ['route' => $route, 'method' => $method,'files' => true]) !!}


                    <div class="form-group">
                        <label for="nama">NAMA PEMESAN</label>
                        {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama']) !!}
                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                     </div>


                     <div class="form-group">
                        <label for="ruangstudio_id">RUANG STUDIO</label>
                        {!! Form::select('ruangstudio_id', $ruangstudioList, null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('ruangstudio_id') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="telp">NOMOR TELEPON</label>
                        {!! Form::number('telp', null, ['class' => 'form-control', 'placeholder' => '08xxxxxxxxxx']) !!}
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

                     <div class="form-group">
                        <label for="jam_sewa">MULAI JAM</label>
                       {!! Form::select('jam_sewa', [
                       '08:00:00' => '08.00',
                       '09:00:00' => '09.00',
                       '10:00:00' => '10.00',
                       '11:00:00' => '11.00',
                       '12:00:00' => '12.00',
                       '13:00:00' => '13.00',
                       '14:00:00' => '14.00',
                       '15:00:00' => '15.00',
                       '16:00:00' => '16.00',
                       '17:00:00' => '17.00',
                       '18:00:00' => '18.00',
                       '19:00:00' => '19.00',
                       '20:00:00' => '20.00',
                       '21:00:00' => '21.00',
                       '22:00:00' => '22.00',
                       ], null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('jam_sewa') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="jam_sewa">SELESAI JAM</label>
                       {!! Form::select('selesai_sewa', [
                       '08:00:00' => '08.00',
                       '09:00:00' => '09.00',
                       '10:00:00' => '10.00',
                       '11:00:00' => '11.00',
                       '12:00:00' => '12.00',
                       '13:00:00' => '13.00',
                       '14:00:00' => '14.00',
                       '15:00:00' => '15.00',
                       '16:00:00' => '16.00',
                       '17:00:00' => '17.00',
                       '18:00:00' => '18.00',
                       '19:00:00' => '19.00',
                       '20:00:00' => '20.00',
                       '21:00:00' => '21.00',
                       '22:00:00' => '22.00',
                       ], null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('selesai_sewa') }}</span>
                     </div>
                     <h6>Kosongkan jika tidak membayar DP</h6>
                     <div class="form-group">
                        <label for="total_bayar">TOTAL BAYAR (Rp.)</label>
                        {!! Form::number('total_bayar', null, ['class' => 'form-control', 'placeholder' => '(optional)']) !!}
                        <span class="text-danger">{{ $errors->first('total_bayar') }}</span>
                     </div>


                     {!! Form::submit($namaTombol, ['class' => 'btn btn-primary']) !!}
                     <a href="/ruangstudio" class="btn btn-primary">Kembali</a>
                    {!! Form::close() !!}
                    
                </div>
            </div>
           
        </section>
        <!-- /.content -->
@endsection
