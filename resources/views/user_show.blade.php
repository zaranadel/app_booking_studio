@extends('layouts.app_adminlte')
<title>Data User</title>
@section('content')


    <!-- Main content -->
    <section class="content">           
                    <div class="card">
                        <div class="card-header">PROFIL DETAIL : {{ strtoupper ($model->name) }}</div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td>ID</td>
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
                                </thead>
                            </table>
                        </div>                    
                    </div> 
            </section>
        <!-- /.content -->

@endsection
