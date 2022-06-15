@extends('layouts.app_adminlte')

@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Ruang Studio</div>

                <div class="card-body">
                    <a href="{{ route($routePrefix .'.create') }}" class="btn btn-primary">Tambah Ruang Studio</a>
                    <table class="table table-light table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>KODE RUANG STUDIO</th>
                                <th>GAMBAR</th>
                                <th>DESKRIPSI</th>
                                <th>HARGA SEWA/JAM</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->foto }}</td>
                                    <td>{{ $item->deskripsi }}</td>
                                    <td>{{ number_format($item->harga, 0, ",", ".") }}</td>
                                    <td>
                                        {!! Form::open(['route' => [$routePrefix .'.destroy', $item->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Anda Yakin ?")']) !!}

                                        <a href="{{ route($routePrefix .'.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> Edit</a>

                                        <a href="{{ route($routePrefix.'.show', $item->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> Detail</a>
                                       
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                                        
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
