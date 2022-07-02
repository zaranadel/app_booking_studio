@extends('layouts.app_adminlte')
<title>Tambah Admin</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">EDIT PROFIL</div>

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
                        <label for="telp">NOMOR TELEPON</label>
                        {!! Form::number('telp', null, ['class' => 'form-control', 'autofocus' => true]) !!}
                        <span class="text-danger">{{ $errors->first('telp') }}</span>
                     </div>
                     <h6>Kosongkan Password Jika Tidak Ingin Diganti</h6>
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

                     

                   

                     {!! Form::submit($namaTombol, ['class' => 'btn btn-primary']) !!}
                     <a href="/home" class="btn btn-primary">Kembali</a>

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </section>
        <!-- /.content -->
      
@endsection