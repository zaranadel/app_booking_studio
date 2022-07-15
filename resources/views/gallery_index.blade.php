@extends('layouts.app_adminlte')
<title>Gallery Studio</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Gallery Alat Musik Studio</div>

                <div class="card-body">
                    @if (auth()->user()->akses == 'admin')
                    <a href="{{ route($routePrefix .'.create') }}" class="btn btn-primary mb-2">Tambah Data Gallery</a>
                    @endif
                    <table class="table table-light table-striped table-bordered" style="font-size: 14px">
                        <thead>
                            <tr>
                                <th>FOTO</th>
                                <th>NAMA ALAT</th>
                                <th>MEREK</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $item)
                                <tr>
                                    <td>{{ $item->gallery }}</td>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->merek }}</td> 
                                    @if (auth()->user()->akses == 'admin')                                   
                                    <td>
                                        {!! Form::open(['route' => [$routePrefix .'.destroy', $item->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Anda Yakin ?")']) !!}

                                       
                                        <a href="{{ route($routePrefix .'.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> </a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                                      
                                        
                                        {!! Form::close() !!}
                                        @endif 
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
