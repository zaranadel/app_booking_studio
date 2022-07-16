@extends('layouts.app_adminlte')
<title>Data User</title>
@section('content')


    <!-- Main content -->
    <section class="content">           
                    {{-- <div class="card">
                        <div class="card-header">DETAIL BOOKING</div>
                                        
                    </div>  --}}

                    <div class="row">
                        <div class="col-md-12">                                                    
                        <div class="card card text-white bg-secondary mb-1">
                            <div class="card-header">DATA BOOKING</div>  
                            <table class="table bg-light">                                
                                    <tr>
                                        <td width="25%">Booking Atas Nama</td>
                                        <td>: {{ $model->nama }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <td>Ruang Studio Yang Di Booking</td>
                                        <td>: {{ $model->ruangstudio->namaruangstudio }}</td>
                                    </tr> --}}
                                    <tr>
                                        <td>Tanggal Booking</td>
                                        <td>: {{ $model->tgl_sewa->translatedFormat('d F Y') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jam Mulai Booking</td>
                                        <td>: {{ $model->jam_sewa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jam Selesai Booking</td>
                                        <td>: {{ $model->selesai_sewa }}</td>
                                    </tr>
                                    <tr>
                                        <td>Status Konfirmasi</td>
                                        <td>: {{ $model->status }}</td>
                                    </tr>
                            </table>                                          
                        </div> 
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card text-center">
                                <div class="card-header bg-dark">
                                    Info Biaya Booking
                                </div>
                                <div class="card-body">                                    
                                    <table>
                                        <tr>
                                            <td>Nama Ruang Studio</td>
                                            <th>: {{ $model->ruangstudio->namaruangstudio }}</th>
                                        </tr>
                                        <tr>
                                            <td>Harga Booking Per Jam</td>
                                            <th>: Rp. {{ $model->ruangstudio->harga}}</th>
                                        </tr>           
                                    </table>
                                    <hr/>
                                    <table>                                        
                                        <tr>
                                            <td>Durasi Booking</td>
                                            <th>: .... Jam </th>
                                        </tr>
                                        <tr>
                                            <td>Total Bayar (Optional)</td>
                                            <th>: </th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    BELUM TAU
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">Title</h5>
                                    <p class="card-text">Content</p>
                                </div>
                            </div>
                        </div>
                    </div>
                   

            </section>
        <!-- /.content -->

@endsection
