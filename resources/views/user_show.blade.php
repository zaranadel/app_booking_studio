@extends('layouts.app_adminlte')
<title>Data User</title>
@section('content')


    <!-- Main content -->
    <section class="content">           
                    <div class="card">
                        <div class="card-header">PROFIL DETAIL : {{ ($model->name) }}</div>
                        <div class="card-body">
                            <table class="table table-striped mb-4">
                                <thead>
                                    <tr>
                                        <td width="20%">ID</td>
                                        <td>: {{ $model->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>NAMA</td>
                                        <td>: {{ $model->name }}</td>
                                    </tr>
                                    <tr>
                                        <td>EMAIL</td>
                                        <td>: {{ $model->email }}</td>
                                    </tr>                  
                                    <tr>
                                        <td>TANGGAL BUAT</td>
                                        <td>: {{ $model->created_at->format('d/m/y H:i') }}</td>
                                    </tr>
                                    <tr>
                                        <td>KETERANGAN</td>
                                        <td>: {{ $model->akses }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <td>TANGGAL UPDATE</td>
                                        <td>: {{ $model->updated_at->format('d/m/y H:i') }}</td>
                                    </tr> --}}
                                    
                                </thead>  
                            </table>
                            <a href="/user" class="btn btn-danger" >Kembali</a>
                        </div>                    
                    </div> 
            </section>
        <!-- /.content -->

@endsection
