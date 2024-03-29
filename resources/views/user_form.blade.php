@extends('layouts.app_adminlte')
<title>FORM USER</title>
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
   .card {
       margin-top: 1px;
       
       box-shadow: 10px 10px 15px rgba(255, 255, 255, 0.5), 
            -10px -10px 15px rgba(70, 70, 70, 0.12);
   }
</style>


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header bg-dark">Edit Data User</div>

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
                        
                        {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '(Optional)']) !!}
                        <small>*Kosongkan Password Jika Tidak Ingin Diganti</small>
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                     </div>

                     <div class="form-group">
                        <label for="password_confirmation">Konfirmasi Password</label>
                        {!! Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => '(Optional)']) !!}
                        <span class="text-danger">{{ $errors->first('password_confirmation') }}</span>
                     </div>

                     <div class="form-group">
                      <label for="akses">Akses</label>
                      {!! Form::select('akses', [
                        'pelanggan' => 'Pelanggan',
                        'admin' => 'Admin',
                      ], null, ['class' => 'form-control']) !!}
                      <span class="text-danger">{{ $errors->first('akses') }}</span>
                   </div>

                   

                     {!! Form::submit($namaTombol, ['class' => 'btn btn-primary']) !!}
                     <a href="/user" class="btn btn-primary"><i class="fa fa-backward"></i> Kembali</a>

                    {!! Form::close() !!}
                    
                </div>
            </div>
        </section>
        <!-- /.content -->
      
@endsection
