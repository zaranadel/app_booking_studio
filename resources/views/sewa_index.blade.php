@extends('layouts.app_adminlte')

@section('js')
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, 
                "lengthChange": false, 
                "autoWidth": false,
                
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
@endsection
<title>Booking</title>
@section('content')


    <!-- Main content -->
    <section class="content">
            <div class="card">
                <div class="card-header bg-dark">DATA BOOKING</div>

                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <h5> Pastikan waktu booking yang ingin anda pesan tersedia  <i class="fas fa-bullhorn"></i></h5>
                        </div>

                        <div class="col-md-4">
                            {!! Form::open(['route' => 'sewa.index', 'method' => 'GET']) !!}
                            <div class="input-group mb-3 w-100">
                                {!! Form::selectMonth('bulan', request('bulan'), ['class' => 'form-control', 'placeholder' => 'Pilih Bulan']) !!}

                                {!! Form::selectRange('tahun', date('Y'), 2021, request('tahun'), ['class' => "form-control", 'placeholder' => 'Pilih Tahun'])!!}
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-info">
                                        <i class="fa fa-search"></i>
                                    </button>
                                    {{-- {!! Form::submit('Tampil Data', ['class' => 'btn btn-info']) !!} --}}
                                </div>
                            </div>
                        </div>

                    </div>
                    
                    <table class="table table-light table-striped table-bordered" style="font-size: 12px" id="example1">                        
                        <thead>
                            <tr>
                                <th>NO.</th>
                                <th>NAMA BAND</th>
                                <th>RUANG STUDIO</th>
                                <th>NOMOR TELEPON</th>
                                <th>TGL BOOKING</th>
                                <th>JAM MULAI</th> 
                                <th>JAM SELESAI</th> 
                                {{-- <th>TOTAL BAYAR (Rp.)</th>    --}}
                                <th>STATUS</th>
                                @if (auth()->user()->akses == 'admin')                             
                                <th>AKSI</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($models as $item)
                                <tr>                   
                                    <td>{{ $loop->iteration }}</td>                 
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->ruangstudio->namaruangstudio }}</td>
                                    <td>{{ $item->telp }}</td>
                                    <td>{{ $item->tgl_sewa->translatedFormat('d F Y') }}</td>
                                    <td>{{ $item->jam_sewa }}</td>
                                    <td>{{ $item->selesai_sewa }}</td>
                                    {{-- <td>{{ $item->total_bayar }}</td> --}}
                                    <td>{{ $item->bayar->status }}</td>
                                    {{-- <td>{{ number_format($item->harga, 0, ",", ".") }}</td> --}}
                                    @if (auth()->user()->akses == 'admin')
                                    <td>
                                        {!! Form::open(['route' => [$routePrefix .'.destroy', $item->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Anda Yakin ?")']) !!}

                                        
                                        {{-- <a href="{{ route($routePrefix .'.edit', $item->id) }}" class="btn btn-warning "><i class="fa fa-edit"></i> </a> --}}

                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                                        
                                        

                                        <a href="{{ route($routePrefix.'.show', $item->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> </a>

                                        
                                       
                                        
                                        {!! Form::close() !!}
                                    </td>
                                    @endif
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{-- <a href="{{ route('sewa.create') }}" class="btn btn-primary">Booking Studio</a> --}}
                </div>
            </div>
        </section>
        <!-- /.content -->
@endsection
