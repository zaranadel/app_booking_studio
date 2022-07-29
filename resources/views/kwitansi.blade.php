<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('adminlte') }}/dist/css/adminlte.min.css">
    <title> Kwitansi {{ $model->sewa->nama }}</title>
</head>
<body>
    <h3 class="text-center mb-4"> KWITANSI</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table">
                    <tr>
                        <td>
                            Nama Band : {{ $model->sewa->nama }}
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
                        <td>: Rp. {{ number_format($model->total_bayar, 0, ",", ".") }}</td>
                    </tr>
                    <tr>
                        <td>
                            Status
                        </td>
                        <td>: {{$model->status }}</td>
                    </tr>
                </table>
                <div class="row">
                    <div class="col-md-9">
                        Terbilang : {{ $model->getJumlahTerbilang() }}
                    </div>
                    <div class="col-md-3">
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
</body>
</html>