<!DOCTYPE html>
<html lang="en">

<head>
<title>Traxx Studio Musik</title>

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
                <p align="center" style="background-color: red"><b>LAPORAN DATA BOOKING TRAXX STUDIO MUSIK</b> </p>
                <div class="card-body">                  
                   
                    <table class="static" align="center" rules="all" border="1px" style="width: 95%">
                       
                            <tr>
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
                                    <td>{{ $item->bayar->status }}</td>    
                                </tr>
                            @endforeach
                     
                    </table>
                    {{-- <a href="{{ route('sewa.create') }}" class="btn btn-primary">Booking Studio</a> --}}
                </div>
                <div>
                    <h3>Traxx Studio Musik</h3>
                    <p>Pemilik,</p>
                    <br>
                    <br>
                    <p>Hadiwibowo Ramadhan </p>
                <hr/>
                </div>
                </div>
            </div>

            <script type="text/javascript">
                window.print();
            </script>
            </body>
            </html>

