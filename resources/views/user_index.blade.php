@extends('layouts.app_adminlte')
<title>Data User</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header bg-dark">Data User</div>

                <div class="card-body">
                    <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                    <a href="useradmin/create" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah User</a>
                        </div>

                        <div class="col-md-4 ml-auto col-sm">
                            <div class="input-group ">
                            {!! Form::open(['method' => 'GET']) !!}
                                <div class="custom-file ">
                                {!! Form::text('q', request('q'), ['class' => 'form-control', 'placeholder' => 'Cari Nama atau Email']) !!}
                                </div>
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-info" style="width: 100%"><i class="fa fa-search"></i> </button>
                                {{-- {!! Form::submit('Pencarian', ['class' => 'btn btn-primary']) !!} --}}
                                </div>
                                {!! Form::close() !!}
                            </div>
                           
                        </div>
                    </div>
                </div>

                   

                    <table class="table table-light table-striped table-bordered table-hover" style="font-size: 14px">
                        <thead class="table bg-dark">
                            <tr>
                                <th>NO</th>
                                <th>NAMA</th> 
                                <th>E-MAIL</th>                                     
                                <th>TANGGAL BERGABUNG</th>
                                {{-- <th>KETERANGAN</th> --}}
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->name }}</td>                                                                    
                                   
                                    {{-- <td>{{ $item->akses }}</td> --}}
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->created_at->translatedFormat('d F Y') }}</td>
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
