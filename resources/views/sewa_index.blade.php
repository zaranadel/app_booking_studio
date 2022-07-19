@extends('layouts.app_adminlte')
<title>Booking</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">DATA BOOKING</div>

                <div class="card-body">
                   
                    <table class="table table-light table-striped table-bordered" style="font-size: 14px">
                        <thead>
                            <tr>
                                <th>NO.</th>
                                <th>NAMA BAND</th>
                                {{-- <th>RUANG STUDIO</th> --}}
                                <th>NOMOR TELEPON</th>
                                <th>TGL BOOKING</th>
                                <th>JAM MULAI</th> 
                                <th>JAM SELESAI</th> 
                                {{-- <th>TOTAL BAYAR (Rp.)</th>    --}}
                                <th>STATUS</th>                             
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $item)
                                <tr>                   
                                    <td>{{ $loop->iteration }}</td>                 
                                    <td>{{ $item->nama }}</td>
                                    {{-- <td>{{ $item->ruangstudio->namaruangstudio }}</td> --}}
                                    <td>{{ $item->telp }}</td>
                                    <td>{{ $item->tgl_sewa }}</td>
                                    <td>{{ $item->jam_sewa }}</td>
                                    <td>{{ $item->selesai_sewa }}</td>
                                    {{-- <td>{{ $item->total_bayar }}</td> --}}
                                    <td></td>
                                    {{-- <td>{{ number_format($item->harga, 0, ",", ".") }}</td> --}}
                                    <td>
                                        {!! Form::open(['route' => [$routePrefix .'.destroy', $item->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Anda Yakin ?")']) !!}

                                        @if (auth()->user()->akses == 'admin')
                                        {{-- <a href="{{ route($routePrefix .'.edit', $item->id) }}" class="btn btn-warning "><i class="fa fa-edit"></i> </a> --}}

                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                                        @endif
                                        

                                        <a href="{{ route($routePrefix.'.show', $item->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> </a>

                                        
                                       
                                        
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <a href="{{ route('sewa.create') }}" class="btn btn-primary">Booking Studio</a> --}}
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
