@extends('layouts.app_adminlte')
<title>Tambah Admin</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Tambah Admin</div>

                <div class="card-body">
                    {!! Form::model($model, ['route' => $route, 'method' => $method]) !!}
                    
                     <div class="form-group">
                        <label for="name">NAMA</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'autofocus' => true]) !!}
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="email">EMAIL</label>
                        {!! Form::email('email', null, ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="password">Password</label>
                        {!! Form::password('password', ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                     </div>

                     <div class="form-group">
                      <label for="akses">Daftar Sebagai</label>
                      {!! Form::select('akses', [
                        'admin' => 'admin',
                      ], null, ['class' => 'form-control']) !!}
                      <span class="text-danger">{{ $errors->first('akses') }}</span>
                   </div>

                   

                     {!! Form::submit($namaTombol, ['class' => 'btn btn-primary']) !!}

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </section>
        <!-- /.content -->
      
@endsection
