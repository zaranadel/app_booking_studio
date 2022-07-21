@extends('layouts.app_adminlte')
<title>Tambah Gallery</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header bg-dark">Tambah Gallery Ruang Studio</div>

                <div class="card-body">
                    {!! Form::model($model, ['route' => $route, 'method' => $method,'files' => true]) !!}

                    
                     <div class="form-group">
                        <label for="nama">NAMA ALAT</label>
                        {!! Form::text('nama', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama']) !!}
                        <span class="text-danger">{{ $errors->first('nama') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="merek">NAMA MEREK</label>
                        {!! Form::text('merek', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama Merek']) !!}
                        <span class="text-danger">{{ $errors->first('merek') }}</span>
                     </div>
                     
                     <div class="form-group">
                        <label for="foto_gallery">TAMBAH FOTO</label>
                        {!! Form::file('foto_gallery', ['class' => 'custom-file']) !!}
                        <small id="#" class="form-text text-muted">Upload gambar (jpg/png/jpeg)</small>

                        <span class="text-danger">{{ $errors->first('foto_gallery') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="deskripsi">DESKRIPSI</label>
                        {!! Form::text('deskripsi', null, ['class' => 'form-control', 'placeholder' => '(Optional)', 'text-area']) !!}
                    
                        <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                     </div>

                     

                    
                     {!! Form::submit($namaTombol, ['class' => 'btn btn-primary']) !!}
                     <a href="/gallery" class="btn btn-primary"><i class="fa fa-backward"></i> Kembali</a>
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
