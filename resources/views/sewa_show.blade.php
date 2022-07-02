@extends('layouts.app_adminlte')
<title>Booking</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Booking</div>

                <div class="card-body">
                   
                    <table class="table table-light table-striped">
                        <thead>
                            <tr>
                                <th>NAMA PEMESAN</th>
                                <th>RUANG STUDIO</th>
                                <th>NOMOR TELEPON</th>
                                <th>TGL BOOKING</th>
                                <th>WAKTU BOOKING</th> 
                                <th>TOTAL BAYAR</th>                                
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                                <tr>                                    
                                    <td>{{ $model->nama }}</td>
                                    <td>{{ $model->$ruangstudio->namaruangstudio }}</td>
                                    <td>{{ $model->telp->format('numeric') }}</td>
                                    <td>{{ $model->tgl_sewa->format('d/m/y H:i') }}</td>
                                    <td>{{ $model->jam_sewa }}</td>
                                    <td>{{ $model->total_bayar }}</td>
                                    <td>{{ number_format($item->harga, 0, ",", ".") }}</td>
                                    <td>
                                        {!! Form::open(['route' => [$routePrefix .'.destroy', $item->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Anda Yakin ?")']) !!}

                                        @if (auth()->user()->akses == 'admin')
                                        <a href="{{ route($routePrefix .'.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>

                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                                        @endif
                                        

                                        <a href="{{ route($routePrefix.'.show', $item->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Detail</a>

                                        
                                       
                                        
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