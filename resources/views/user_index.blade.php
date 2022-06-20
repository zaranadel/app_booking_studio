@extends('layouts.app_adminlte')
<title>Data User</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Data User</div>

                <div class="card-body">
                    <a href="{{ route($routePrefix .'.create') }}" class="btn btn-primary">Tambah Admin</a>
                    <table class="table table-light table-striped">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th>                                
                                {{-- <th>TANGGAL BUAT</th> --}}
                                <th>KETERANGAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>                                                                    
                                    {{-- <td>{{ $item->created_at->format ('d/m/Y H:i') }}</td> --}}
                                    <td>{{ $item->akses }}</td>
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
