@extends('layouts.app_adminlte')
<title>Tambah Ruang</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Tambah Ruang Studio</div>

                <div class="card-body">
                    {!! Form::model($model, ['route' => $route, 'method' => $method,'files' => true]) !!}


                     <div class="form-group">
                        <label for="gambar">GAMBAR</label>
                        {!! Form::file('gambar', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('gambar') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="harga">HARGA / JAM</label>
                        {!! Form::text('harga', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('harga') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="deskripsi">DESKRIPSI</label>
                        {!! Form::text('deskripsi', null, ['class' => 'form-control', 'autofocus' => true]) !!}
                        <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                     </div>


                     {!! Form::submit($namaTombol, ['class' => 'btn btn-primary']) !!}
                     <a href="/ruangstudio" class="btn btn-primary">Kembali</a>
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
