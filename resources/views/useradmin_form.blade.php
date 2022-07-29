@extends('layouts.app_adminlte')
<title>Tambah Admin</title>
@section('content')
<style>
   section {
       background-image: url('{{ asset("img/bgmusic.jpg") }}');
       background-size: cover;
       opacity: ;
   }
   .card {
       margin-top: 1px;
       
       box-shadow: 10px 10px 15px rgba(255, 255, 255, 0.5), 
            -10px -10px 15px rgba(70, 70, 70, 0.12);
   }
</style>


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header bg-dark">Tambah Admin</div>

                <div class="card-body">
                    {!! Form::model($model, ['route' => $route, 'method' => $method]) !!}
                    
                     <div class="form-group">
                        <label for="name">NAMA</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'autofocus' => true, 'placeholder' => 'Masukkan Nama']) !!}
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="email">EMAIL</label>
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'user@example.com']) !!}
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                     </div>
                   
                     <div class="form-group">
                        <label for="password">Password</label>
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => 'Masukkan Password']) !!}
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => 'Konfirmasi Password']) !!}
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                     </div>

                     <div class="form-group">
                      <label for="akses">Daftar Sebagai</label>
                      {!! Form::select('akses', [
                        'admin' => 'Admin',
                      ], null, ['class' => 'form-control']) !!}
                      <span class="text-danger">{{ $errors->first('akses') }}</span>
                   </div>

                   

                     {!! Form::submit($namaTombol, ['class' => 'btn btn-primary ml-1',]) !!}  
                     <a href="/user" class="btn btn-primary"><i class="fa fa-backward"></i> Kembali</a>                   
                    {!! Form::close() !!}
                    
                </div>
            </div>
        </section>
        <!-- /.content -->
      
@endsection
