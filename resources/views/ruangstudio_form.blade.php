@extends('layouts.app_adminlte')
<title>Tambah Ruang</title>
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

 </style>

    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header bg-dark">Ruang Studio</div>

                <div class="card-body">
                    {!! Form::model($model, ['route' => $route, 'method' => $method,'files' => true]) !!}


                    <div class="form-group">
                        <label for="namaruangstudio">NAMA RUANG STUDIO</label>
                        {!! Form::text('namaruangstudio', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama']) !!}
                        <span class="text-danger">{{ $errors->first('namaruangstudio') }}</span>
                     </div>

                     @if ($method == "PUT")
                         <img src="{{ \Storage::url($model->gambar) }}" width="150"/>
                     @endif

                     <div class="form-group">
                        <label for="gambar">GAMBAR</label>
                        {!! Form::file('gambar', ['class' => 'custom-file']) !!}
                        <span class="text-danger">{{ $errors->first('gambar') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="harga">HARGA / JAM (Rp.)</label>
                        {!! Form::text('harga', null, ['class' => 'form-control', 'placeholder' => 'Contoh: 50000']) !!}
                        <span class="text-danger">{{ $errors->first('harga') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="deskripsi">DESKRIPSI</label>
                        {!! Form::textarea('deskripsi', null, ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Masukkan Deskripsi', 'rows' => 3]) !!}
                        <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                     </div>


                     {!! Form::submit($namaTombol, ['class' => 'btn btn-primary']) !!}
                     <a href="/ruangstudio" class="btn btn-primary"><i class="fa fa-backward"></i> Kembali</a>
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
