@extends('layouts.app_adminlte')
<title>Detail Booking</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Detail Booking</div>

                <div class="card-body">
                   
                    <table class="table table-light table-striped">
                        <thead>
                            <tr>
                                <th>NAMA PEMESAN</th>
                                {{-- <th>RUANG STUDIO</th> --}}
                                <th>NOMOR TELEPON</th>
                                <th>TGL BOOKING</th>
                                <th>WAKTU BOOKING</th> 
                                <th>TOTAL BAYAR</th>  
                                <th>STATUS</th>                              
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                                <tr>                                    
                                    <td>{{ $model->nama }}</td>
                                    {{-- <td>{{ $model->$ruangstudio->namaruangstudio }}</td> --}}
                                    <td>{{ $model->telp->format('numeric') }}</td>
                                    <td>{{ $model->tgl_sewa->format('d/m/y H:i') }}</td>
                                    <td>{{ $model->jam_sewa }}</td>
                                    <td>{{ $model->total_bayar }}</td>
                                    <td>{{ number_format($item->harga, 0, ",", ".") }}</td>
                                    <td>
                                        {!! Form::open(['route' => [$routePrefix .'.destroy', $item->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Anda Yakin ?")']) !!}

                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                                        
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                           
                        </tbody>
                    </table>
                    {{-- <a href="{{ route('sewa.create') }}" class="btn btn-primary">Booking Studio</a> --}}
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
