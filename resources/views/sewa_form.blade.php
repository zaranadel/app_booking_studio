@extends('layouts.app_adminlte')
<title>Tambah Admin</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Form Booking</div>

                <div class="card-body">
                    {!! Form::model($model, ['route' => $route, 'method' => $method]) !!}
                    
                     <div class="form-group">
                        <label for="nama">NAMA</label>
                        {!! Form::text('nama', null, ['class' => 'form-control', 'autofocus' => true]) !!}
                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="nohp">NO. TELP</label>
                        {!! Form::number('nohp', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('nohp') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="">Nama Lapang</label>
                    <select name="ruangstudio_id" class="form-control col-md-6" required="">
                        <option disabled selected>Pilih Lapang</option>
                        @foreach ($ruangstudio as $l)
                    <option value="{{$l->ruangstudio_id}}">{{$l->nama_ruangstudio." - ". Fungsi::getRupiah($l->harga)}}</option>
                        @endforeach
                    </select>
                    </div>

                    <div class="clear-fix">&nbsp;</div>

<div class="form-control-wrapper">
    <input type="text" id="datepicker" class="form-control col-md-6" name="tgl_sewa" placeholder="Tanggal Booking" autocomplete="off" />
</div>

<div class="clear-fix">&nbsp;</div>

                     <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                     </div>

                     <div class="form-group">
                      <label for="akses">Daftar Sebagai</label>
                      {!! Form::select('akses', [
                        'admin' => 'admin',
                        'pelanggan' => 'pelanggan',
                      ], null, ['class' => 'form-control']) !!}
                      <span class="text-danger">{{ $errors->first('akses') }}</span>
                   </div>

                   

                     {!! Form::submit($namaTombol, ['class' => 'btn btn-primary']) !!}
                     <a href="/user" class="btn btn-primary">Kembali</a>

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </section>
        <!-- /.content -->
      
@endsection
