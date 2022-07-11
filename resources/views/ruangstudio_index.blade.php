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

                    <div class="row">
                        <div class="col-md-8">
                            <div class="input-group mb-3">
                            {!! Form::open(['method' => 'GET']) !!}
                                <div class="custom-file">
                                {!! Form::text('q', request('q'), ['class' => 'form-control']) !!}
                                </div>
                                <div class="input-group-append">
                                {!! Form::submit('Pencarian', ['class' => 'btn btn-primary']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>

                    {{-- <div class="card-tools">
                        <form action="/ruangstudio/search" class="form-inline" method="GET">
                            <input type="search" name="search" class="form-control float-right" placeholder="ss">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </form>

                    </div> --}}

                    <table class="table table-light table-striped table-bordered" style="font-size: 14px">
                        <thead>
                            <tr>
                                <th>NAMA RUANGAN</th>
                                <th>GAMBAR</th>
                                <th>HARGA SEWA PER JAM (Rp.)</th>
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
                                        <a href="{{ route($routePrefix .'.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> </a>

                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                                        @endif
                                        

                                        <a href="{{ route($routePrefix.'.show', $item->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> </a>

                                        
                                       
                                        
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
