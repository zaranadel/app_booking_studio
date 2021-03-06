@extends('layouts.app_adminlte')
<title>Data Bayar</title>
@section('content')
<style>
    section {
        background-image: url('{{ asset("img/bgmusic.jpg") }}');
        background-size: cover;
        opacity: ;
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
                <div class="card-header bg-dark">Data Pembayaran</div>
                
                <div class="card-body">
                    {{-- <h4>Total Pendapatan : </h4> --}}
                    <div class="container">
                        <div class="row">
               
                
                                </div>
                            
              
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

                    <table class="table table-light table-striped table-bordered text-center table-hover" style="font-size: 14px" >
                        <thead class="table bg-dark">
                            <tr>
                                <th>NO.</th>
                                <th>ID SEWA</th>
                                <th>NAMA BAND</th>
                                
                                {{-- <th>HARGA STUDIO</th> --}}
                                <th>TANGGAL MAIN</th>
                                <th>TOTAL BAYAR</th>
                                <th>STATUS</th>
                                <th>PRINT</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->sewa_id }}</td>
                                    <td>{{ $item->sewa->nama }}</td>
                                    {{-- <td>{{ $item->ruangstudio->harga }}</td> --}}
                                    <td>{{ $item->sewa->tgl_sewa->translatedFormat('d F Y') }}</td>
                                    {{-- <td>{{ $item->ruangstudio->harga }}</td> --}}
                                    <td>Rp. {{ number_format($item->total_bayar, 0, ",", ".") }}</td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        {{-- {!! Form::open(['route' => [$routePrefix .'.destroy', $item->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Anda Yakin ?")']) !!}

                                        @if (auth()->user()->akses == 'admin')
                                        <a href="{{ route($routePrefix .'.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> </a>

                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                                        @endif --}}
                                        

                                        <a href="{{ route('kwitansi.show', $item->id) }}" target="blank"><i class="fa fa-print"></i> </a>

                                        
                                       
                                        
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
