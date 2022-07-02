@extends('layouts.app_adminlte')
<title>Ruang Studio</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Ruang Studio</div>

                <div class="card-body">
                    @if (auth()->user()->akses == 'admin')
                    <a href="{{ route($routePrefix .'.create') }}" class="btn btn-primary">Tambah Ruang Studio</a>
                    @endif
                    <table class="table table-light table-striped">
                        <thead>
                            <tr>
                                <th>NAMA RUANGAN</th>
                                <th>GAMBAR</th>
                                <th>HARGA SEWA/JAM</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $item)
                                <tr>
                                    <td>{{ $item->namaruangstudio }}</td>
                                    <td>{{ $item->foto }}</td>
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
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ route('sewa.create') }}" class="btn btn-primary mt-3">Booking Studio</a>
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
