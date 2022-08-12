<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('adminlte') }}/dist/css/adminlte.min.css">
    <title> Kwitansi {{ $model->sewa->nama }}</title>
</head>
<body style="background-color: rgb(255, 191, 0)">
    <h3 class="text-center mb-4">KWITANSI</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <td>
                            Nama Band 
                        </td>
                        <td>
                        : {{ $model->sewa->nama }}
                        </td>
                       
                    </tr>
                    <tr>
                        <td >
                            Tanggal Main
                        </td>
                        <td>: {{$model->sewa->tgl_sewa->translatedFormat('d F Y') }}</td>
                    </tr>
                    <tr>
                        <td >
                            Total Bayar
                        </td>
                        <td>: <b>Rp. {{ number_format($model->total_bayar, 0, ",", ".") }}</td></b>
                    </tr>
                    <tr>
                        <td>
                            Keterangan
                        </td>
                        <td>: <b>{{$model->status }}</td></b>
                    </tr>
                </table>
                <div class="row">
                    <div class="col-md-9">
                        @if ($model->total_bayar== null)
                            Terbilang : <b>-</b>
                        @else
                        Terbilang : <b>{{ $model->getJumlahTerbilang() }}</b>    
                        @endif
                        
                    </div>
                    <div class="col-md-3" style="text-align: center">
                        Jambi, {{ date('d F Y') }}
                        <br/>
                        <br/>
                        <br/>
                        <u>{{ Auth::user()->name }}</u><br/>
                        (Admin)
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