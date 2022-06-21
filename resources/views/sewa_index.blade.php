@extends('layouts.app_adminlte')
<title>Data Booking</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Data Booking</div>

                <div class="card-body">
                   
                    <table class="table table-light table-striped">
                        <thead>
                            <tr>
                               
                                <th>KODE STUDIO</th>
                                <th>DI SEWA OLEH</th>
                                <th>TOTAL BAYAR</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $item)
                                <tr>
                                    {{-- , 0, ",", "." --}}
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->user->name }}</td>
                                    {{-- <td>{{ $item->ruangstudio->harga }}</td> --}}
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
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
