@extends('layouts.app_adminlte')

@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Tambah Ruang Studio</div>

                <div class="card-body">
                    {!! Form::model($model, ['route' => $route, 'method' => $method,'files'=>true]) !!}

                     <div class="form-group">
                        <label for="foto">GAMBAR</label>
                        {!! Form::file('foto', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('foto') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="harga">HARGA/JAM</label>
                        {!! Form::text('harga', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('harga') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="deskripsi">DESKRIPSI</label>
                        {!! Form::text('deskripsi', null, ['class' => 'form-control', 'autofocus' => true]) !!}
                        <span class="text-danger">{{ $errors->first('deskripsi') }}</span>
                     </div>


                     {!! Form::submit($namaTombol, ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
