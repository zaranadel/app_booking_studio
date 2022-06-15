@extends('layouts.app_adminlte')

@section('content')


    <!-- Main content -->
    <section class="content">           
                    <div class="card">
                        <div class="card-header">PROFIL DETAIL RUANG STUDIO</div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <td>GAMBAR</td>
                                        <td>: {{ $model->foto }}</td>
                                    </tr>
                                    <tr>
                                        <td>HARGA</td>
                                        <td>: {{ $model->harga }}</td>
                                    </tr>
                                    <tr>
                                        <td>DESKRIPSI</td>
                                        <td>: {{ $model->deskripsi }}</td>
                                    </tr>
                                    
                                </thead>
                            </table>
                            
                            <div>
                                <button class="btn btn-primary">Booking</button>    
                            </div>
                        </div> 
                                           
                    </div> 
            </section>
        <!-- /.content -->

@endsection
