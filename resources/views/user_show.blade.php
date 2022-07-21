@extends('layouts.app_adminlte')
<title>Data User</title>
@section('content')


    <!-- Main content -->
    <section class="content">           
                    <div class="card">
                        <div class="card-header bg-dark">PROFIL DETAIL  {{ strtoupper($model->name) }}</div>
                        <div class="card-body">
                            <table class="table table-striped mb-4">
                                <thead>
                                    <tr>
                                        <td width="20%">ID</td>
                                        <td>: {{ $model->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>NAMA</td>
                                        <td>: {{ strtoupper($model->name) }}</td>
                                    </tr>
                                    <tr>
                                        <td>EMAIL</td>
                                        <td>: {{ $model->email }}</td>
                                    </tr>                  
                                    <tr>
                                        <td>TANGGAL BUAT AKUN</td>
                                        <td>: {{ $model->created_at->translatedFormat('d F Y')}}</td>
                                    </tr>
                                    <tr>
                                        <td>KETERANGAN</td>
                                        <td>: {{ strtoupper($model->akses) }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <td>TANGGAL UPDATE</td>
                                        <td>: {{ $model->updated_at->format('d/m/y H:i') }}</td>
                                    </tr> --}}
                                    
                                </thead>  
                            </table>
                            
                            <a href="/user" class="btn btn-primary"><i class="fa fa-backward"></i> Kembali</a>
                        </div>                    
                    </div> 
            </section>
        <!-- /.content -->

@endsection
