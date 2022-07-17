@extends('layouts.app_adminlte')

@section('content')


    <!-- Main content -->
    <section class="content">           
                    <div class="card">
                        <div class="card-header">PROFIL DETAIL RUANG STUDIO</div>
                        <div class="card-body">
                            <img src="{{ \Storage::url($model->gambar ?? 'images/no-image.png') }}" width="150">
                            <table class="table table-striped table-sm">
                                <thead>
                                    
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

                            
                            
                            
                            {{-- <button class="btn btn-primary">Booking</button>     --}}
                            
                            <a href="/ruangstudio" class="btn btn-primary">Kembali</a>
                        </div> 
                                           
                    </div> 
            </section>
        <!-- /.content -->

@endsection
