@extends('layouts.app_adminlte')

@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Tambah Ruang Studio</div>

                <div class="card-body">
                    {!! Form::model($model, ['route' => $route, 'method' => $method]) !!}
                    
                     <div class="form-group">
                        <label for="id">KODE RUANG STUDIO</label>
                        {!! Form::text('id', null, ['class' => 'form-control', 'autofocus' => true]) !!}
                        <span class="text-danger">{{ $errors->first('id') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="foto">GAMBAR</label>
                        {!! Form::file('foto', ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('foto') }}</span>
                     </div>

                     
                     

                     {!! Form::submit($namaTombol, ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
