@extends('layouts.app_adminlte')
<title>Data User</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header">Data User</div>

                <div class="card-body">
                    <a href="useradmin/create" class="btn btn-primary mb-3">Tambah Admin</a>

                    <div class="row">
                        <div class="col-md-8">
                            <div class="input-group mb-2">
                            {!! Form::open(['method' => 'GET']) !!}
                                <div class="custom-file">
                                {!! Form::text('q', request('q'), ['class' => 'form-control', 'placeholder' => 'Search...']) !!}
                                </div>
                                <div class="input-group-append">
                                {!! Form::submit('Pencarian', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>

                    {{-- <div class="row">
                        <div class="col-md-8">
                            {!! Form::open(['method' => "GET"]) !!}
                            <div class="input-group mb-3">
                                <div class="custom-file">
                                    {!! Form::text('q', request('q'), ['class' => 'form-control', 'placeholder' => 'Pencarian berdasarkan nama atau hak akses']) !!}
                                </div>
                                <div class="input-group-append">
                                    {!! Form::submit('pencarian', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div> --}}

                    <table class="table table-light table-striped table-bordered" style="font-size: 14px">
                        <thead>
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th> 
                                <th>E-MAIL</th>                                     
                                {{-- <th>TANGGAL BUAT</th> --}}
                                {{-- <th>KETERANGAN</th> --}}
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>                                                                    
                                    {{-- <td>{{ $item->created_at->format ('d/m/Y H:i') }}</td> --}}
                                    {{-- <td>{{ $item->akses }}</td> --}}
                                    <td>{{ $item->email }}</td>
                                    <td>
                                        {!! Form::open(['route' => [$routePrefix .'.destroy', $item->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Anda Yakin ?")']) !!}

                                        <a href="{{ route($routePrefix .'.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> </a>

                                        <a href="{{ route($routePrefix.'.show', $item->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> </a>
                                       
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                                        
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {!! $models->links() !!}
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
