@extends('layouts.app_adminlte')
<title>Data User</title>
@section('content')


    <!-- Main content -->
    <section class="content">           
                    {{-- <div class="card">
                        <div class="card-header">DETAIL BOOKING</div>
                                        
                    </div>  --}}

                    <div class="row">
                        <div class="col-md-12">                                                    
                        <div class="card text-white bg-dark mb-1">
                            <div class="card-header">DATA BOOKING</div>  
                            <table class="table table-borderless table-striped table-hover">
                                    <tr>
                                        <td>Akun Pemesan</td>
                                        <td>: {{ $model->user->email }}</td>
                                    </tr>                           
                                    <tr>
                                        <td width="25%">Nama Band</td>
                                        <td>: {{ $model->nama }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <td>Ruang Studio Yang Di Booking</td>
                                        <td>: {{ $model->ruangstudio->namaruangstudio }}</td>
                                    </tr> --}}
                                    <tr>
                                        <td>Tanggal Booking</td>
                                        <td>: {{ $model->tgl_sewa->translatedFormat('d F Y') }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jam Mulai Booking</td>
                                        <td>: {{ $model->jam_sewa }}</td>
                                    </tr>
                                    {{-- <tr>
                                        <td>Jam Selesai Booking</td>
                                        <td>: {{ $model->selesai_sewa }}</td>
                                    </tr> --}}
                                    <tr>
                                        <td>Status Konfirmasi</td>
                                        <td>: {{ $model->bayar->status }}</td>
                                    </tr>
                            </table>                                          
                        </div> 
                    </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card text-center">
                                <div class="card-header bg-dark">
                                    Info Biaya Booking
                                </div>
                                <div class="card-body">                                    
                                    <table>
                                        <tr>
                                            <td>Nama Ruang Studio</td>
                                            <th>: {{ $model->ruangstudio->namaruangstudio }}</th>
                                        </tr>
                                        <tr>
                                            <td>Harga Booking Per Jam</td>
                                            {{-- <th>: Rp. {{ $model->ruangstudio->harga}}</th> --}}
                                            <th>: Rp. {{ number_format($model->ruangstudio->harga, 0, ",", ".") }}</th>
                                        </tr>           
                                    </table>
                                    <hr/>
                                    <table>                                        
                                        {{-- <tr>
                                            <td>Durasi Booking</td>
                                            <th>: .... Jam </th>
                                        </tr> --}}
                                        <tr>
                                            <td>Total Bayar (Optional)</td>
                                            <th>: Rp. {{ number_format($model->total_bayar, 0, ",", ".") }}</th>
                                        </tr>
                                        <tr>
                                            <td>Sisa Bayar</td>
                                            <th>: Rp. {{ number_format($model->total_bayar, 0, ",", ".") }}</th>
                                        </tr>
                                    </table>
                                    <hr/>
                                    <H5>Form Konfirmasi Booking</H5>
                                    {!! Form::model($modelBayar, ['route' => $route, 'method' => $method]) !!}
                                    {!! Form::hidden('sewa_id', $model->id, []) !!}
                                    {!! Form::hidden('total_bayar', $model->total_bayar, []) !!}
                                    <div class="form-group">
                                        <label for="status">Approve Booking?</label>
                                       {{-- {!! Form::select('jam_sewa', [ --}}
                                       <select name="status" class="form-control col-md-12">
                                        <option disabled selected>-- Pilih Status --</option>
                                       <option value="Diterima">Diterima</option>
                                       <option value="Ditolak">Ditolak</option>
                                     </select>
                                        <span class="text-danger">{{ $errors->first('status') }}</span>
                                     </div>

                                        {!! Form::submit('Konfirmasi', ['class' => 'btn btn-primary ']) !!}
                                        
                                    {!! Form::close() !!}
                                    
                                </div>
                                <a href="/sewa" class="btn btn-primary"><i class="fa fa-backward"></i> Kembali</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card text-center">
                                <div class="card-header bg-danger">
                                    Ruang Studio {{ $model->ruangstudio->namaruangstudio }}
                                </div>
                                <div class="card-body bg-dark">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModalLong">
                                    Detail Gambar Ruang Studio
                                  </button>
                                </div>
                              
                            </div>
                        </div>
                    </div>

                    {!! Form::open(['route' => ['sewa.create', $model->status], 'method' => 'POST', 'onsubmit' => 'return confirm("Anda Yakin ?")']) !!}
                    

                    <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-light">
        <div class="modal-header bg-danger">
          <h5 class="modal-title" id="exampleModalLongTitle">Detail Gambar Ruang Studio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img src="{{ \Storage::url($model->ruangstudio->gambar ?? 'images/no-image.png') }}" width="100%">
            <hr>
            <div>
                <p>{{ $model->ruangstudio->deskripsi }}</p>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-info" data-dismiss="modal"><i class="fa fa-backward"></i> Kembali</button>
          
        </div>
      </div>
    </div>
  </div>
                   

            </section>
        <!-- /.content -->

@endsection
