@extends('layouts.app_adminlte')
<title>Ruang Studio</title>
@section('content')
<style>
    section {
        background-image: url('{{ asset("img/bgmusic.jpg") }}');
        background-size: cover;
        opacity: ;
    }
    .content {
    height: 100%;
  }
    .card {
        margin-top: 1px;
        
        box-shadow: 10px 10px 15px rgba(255, 255, 255, 0.5), 
             -10px -10px 15px rgba(70, 70, 70, 0.12);
    }
 </style>


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header bg-dark">RUANG STUDIO</div>

                <div class="card-body">
                    <div class="container">
                        <div class="row">
                    @if (auth()->user()->akses == 'admin')
                    <div class="col-md-4">
                    <a href="{{ route($routePrefix .'.create') }}" class="btn btn-primary mb-3"><i class="fa fa-plus"></i> Tambah Ruang Studio</a>
                </div>
                    @endif

                    {{-- <div class="row"> --}}
                        <div class="col-md-4 ml-auto col-sm">
                            <div class="input-group">
                            {!! Form::open(['method' => 'GET']) !!}
                                <div class="custom-file">
                                {!! Form::text('q', request('q'), ['class' => 'form-control', 'placeholder' => 'Berdasarkan nama...']) !!}
                                </div>                               
                                
                                <div class="input-group-append">
                                    <button class="btn btn-info" style="width: 100%"><i class="fa fa-search"></i></button>
                                    
                                {{-- {!! Form::submit('Pencarian', ['class' => 'btn btn-primary']) !!} --}}
                                </div>
                            
                            {!! Form::close() !!}
                        </div>
                    </div>
                    {{-- </div> --}}
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

                    <table class="table table-light table-striped table-bordered text-center table-hover" style="font-size: 16px">
                        <thead class="table bg-dark">
                            <tr>
                                <th>NO.</th>
                                <th>NAMA RUANGAN</th>
                                <th>FOTO</th>
                                <th>HARGA SEWA PER JAM</th>
                                <th>DETAIL</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($models as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->namaruangstudio }}</td>
                                    <td><img src="{{ \Storage::url($item->gambar ?? 'images/no-image.png') }}" width="55"></td>
                                    <td>Rp. {{ number_format($item->harga, 0, ",", ".") }}</td>
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
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center">Ruang Studio Tidak Ada</td>
                                </tr>
                            @endforelse
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                    <a href="{{ route('sewa.create') }}" class="btn btn-outline-primary mt-3"><i class="fa fa-book"></i> Booking Studio</a>
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
