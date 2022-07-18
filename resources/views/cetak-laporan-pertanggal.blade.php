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
                <p align="center"><b>Laporan Data Booking Ruang Studio Per Tanggal</b> </p>
                <div class="card-body">                  
                   
                    <table class="static" align="center" rules="all" border="1px" style="width: 95%">
                       
                            <tr>
                                <th>NO.</th>
                                <th>NAMA BAND</th>
                                {{-- <th>RUANG STUDIO</th> --}}
                                <th>NOMOR TELEPON</th>
                                <th>TGL BOOKING</th>
                                <th>JAM MULAI</th> 
                                <th>JAM SELESAI</th> 
                                {{-- <th>TOTAL BAYAR (Rp.)</th>    --}}
                                <th>STATUS</th>                             
                                
                            </tr>
                        
               
                            @foreach ($cetakperTanggal as $item)
                                <tr align="center">                   
                                    <td>{{ $loop->iteration }}</td>                 
                                    <td>{{ $item->nama }}</td>
                                    {{-- <td>{{ $item->ruangstudio->namaruangstudio }}</td> --}}
                                    <td>{{ $item->telp }}</td>
                                    <td>{{ $item->tgl_sewa }}</td>
                                    <td>{{ $item->jam_sewa }}</td>
                                    <td>{{ $item->selesai_sewa }}</td>
                                    <td>{{ $item->status }}</td>    
                                </tr>
                            @endforeach
                     
                    </table>
                    {{-- <a href="{{ route('sewa.create') }}" class="btn btn-primary">Booking Studio</a> --}}
                </div>
            </div>

            <script type="text/javascript">
                window.print();
            </script>
            </body>
            </html>

