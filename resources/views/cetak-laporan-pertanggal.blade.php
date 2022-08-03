<!DOCTYPE html>
<html lang="en">

<head>
<title>Traxx Studio Musik</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('adminlte') }}/dist/css/adminlte.min.css">
<style>
    table.static{
        position: relative;
        border: 1px solid black;
    }
</style>
</head>



    <!-- Main content -->
   <body>
    
   
            <div class="form-group">
                
                <div class="card-body">                  
                    <p align="center" style="background-color: red"><b>LAPORAN DATA BOOKING TRAXX STUDIO MUSIK </b> </p>
                    <table class="static" align="center" rules="all" border="1px" style="width: 95%">
                       
                            <tr style="text-align: center">
                                <th>NO.</th>
                                <th>NAMA BAND</th>
                                <th>RUANG STUDIO</th>
                                <th>NOMOR TELEPON</th>
                                <th>TANGGAL MAIN</th>
                                <th>JAM MAIN</th> 
                                {{-- <th>JAM SELESAI</th>  --}}
                                {{-- <th>TOTAL BAYAR (Rp.)</th>    --}}
                                <th>STATUS</th>                             
                                
                            </tr>
                        
               
                            @foreach ($cetakperTanggal as $item)
                                <tr align="center">                   
                                    <td>{{ $loop->iteration }}</td>                 
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->ruangstudio->namaruangstudio }}</td>
                                    <td>{{ $item->telp }}</td>
                                    <td>{{ $item->tgl_sewa->translatedFormat('d F Y') }}</td>
                                    <td>{{ $item->jam_sewa }}</td>
                                    {{-- <td>{{ $item->selesai_sewa }}</td> --}}
                                    <td>{{ $item->status ?? 'Pending' }}</td>    
                                </tr>
                            @endforeach
                     
                    </table>
                    {{-- <a href="{{ route('sewa.create') }}" class="btn btn-primary">Booking Studio</a> --}}
                    <div class="row mt-5">
                        <div class="col-md-9">
                           
                        </div>
                        <div class="col-md-3">
                            <h3>Traxx Studio Musik</h3>
                            Jambi, {{ date('d F Y') }}
                            <br/>
                            <br/>
                            <br/>
                            {{-- <u>{{ Auth::user()->name }}</u><br/>
                            (Admin) --}}
                        </div>
                    </div>
                </div>
               
                </div>
            </div>

            <script type="text/javascript">
                window.print();
            </script>
            </body>
            </html>

