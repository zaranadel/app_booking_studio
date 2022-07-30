@extends('layouts.app_adminlte')

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
  </style>

    <!-- Main content -->
    <section class="content">           
                    <div class="card text-white">
                        <div class="card-header bg-danger">PROFIL DETAIL RUANG STUDIO</div>
                        <div class="card-body bg-dark">
                            <img class="mb-3" src="{{ \Storage::url($model->gambar ?? 'images/no-image.png') }}" width="500">
                            <table class="table table-dark">
                                <thead>
                                   
                                    <tr>
                                        <td width="25%">HARGA</td>
                                        <td>: {{ number_format($model->harga, 0, ",", ".") }} / Jam</td>
                                        
                                    </tr>
                                    <tr>
                                        <td>DESKRIPSI</td>
                                        <td>: {{ $model->deskripsi }}</td>
                                    </tr>
                                    
                                </thead>
                            </table>

                            
                            
                            
                            {{-- <button class="btn btn-primary">Booking</button>     --}}
                            
                            <a href="/ruangstudio" class="btn btn-info mt-3"><i class="fa fa-backward"></i> Kembali</a>
                        </div> 
                                           
                    </div> 
            </section>
        <!-- /.content -->

@endsection
