@extends('layouts.app_adminlte')
<title>Data Bayar</title>
@section('content')
<style>
    section {
        background-image: url('{{ asset("img/bgmusic.jpg") }}');
        background-size: cover;
        opacity: ;
    }
    .content {
     height: 120%;
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
                <div class="card-header bg-dark">DATA PEMBAYARAN</div>
                
                <div class="card-body">
                    {{-- <h4>Total Pendapatan : </h4> --}}
                    <div class="container">
                        <div class="row">
               
                
                                </div>
                            
              
                </div>
               <h3 class="mb-3">Total Pendapatan : <div class="badge badge-success">Rp. {{ number_format($jumlahPendapatan,0,",",".") }}</div></h3>
            

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

                    <table class="table table-light table-striped table-bordered table-hover" style="font-size: 14px" >
                        <thead class="table bg-dark">
                            <tr>
                                <th>NO.</th>
                                {{-- <th>ID SEWA</th> --}}
                                <th>NAMA BAND</th>
                                
                                {{-- <th>HARGA STUDIO</th> --}}
                                <th>TANGGAL MAIN</th>
                                <th>TOTAL BAYAR</th>
                                <th>KETERANGAN</th>
                                <th>AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($models as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    {{-- <td>{{ $item->sewa_id }}</td> --}}
                                    <td>@if ($item->sewa->nama === null)
                                        <div class="badge badge-danger">Data Sewa Telah Dihapus</div> 
                                        @endif
                                        {{ $item->sewa->nama }}</td>


                                    {{-- <td>{{ $item->ruangstudio->harga }}</td> --}}
                                    <td>@if ($item->sewa->tgl_sewa === null)
                                        <div class="badge badge-danger">Data Sewa Telah Dihapus</div> 
                                        @else
                                        {{ $item->sewa->tgl_sewa->translatedFormat('d F Y')}}</td>
                                        @endif
                                    {{-- <td>{{ $item->ruangstudio->harga }}</td> --}}

                                    


                                    <td>Rp. {{ number_format($item->total_bayar, 0, ",", ".") }}
                                        
                                      
                                    
                                    </td>
                                    <td>{{ $item->status }}</td>
                                    <td>
                                        {!! Form::open(['route' => [$routePrefix .'.destroy', $item->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Anda Yakin ?")']) !!}
                                        
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                                        
                                        
                                        
                                       
                                        
                                        {!! Form::close() !!}
                                        @if ($item->sewa->nama === null)
                                        {{-- <button class="btn btn-danger">
                                            <a href="{{ route('kwitansi.show', $item->id) }}" target="blank"><i class="fa fa-print"></i> </a>
                                        </button> --}}
                                        @else
                                        <button class="btn btn-light">
                                            <a href="{{ route('kwitansi.show', $item->id) }}" target="blank"><i class="fa fa-print"></i> </a>
                                        </button>
                                        @endif
                                       
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center">Data Pembayaran Tidak Ada</td>
                                </tr>
                            @endforelse
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
