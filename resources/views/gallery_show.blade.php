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
                        <div class="card card text-white mb-1">
                            <div class="card-header bg-danger">DETAIL FOTO</div> 
                            <div class="card-body bg-dark"> 
                            <img class="mb-3" src="{{ \Storage::url($model->foto_gallery ?? 'images/no-image.png') }}" style="width: auto" {{-- width="500" --}}>
                            
                            <table class="table table-dark">
                                                           
                                    <tr>
                                        <td width="25%">Nama Alat Musik</td>
                                        <td>: {{ $model->nama }}</td>
                                    </tr>                                    
                                    <tr>
                                        <td>Merek Alat Musik</td>
                                        <td>: {{ $model->merek }}</td>
                                    </tr>  
                                    <tr>
                                        <td>Deskripsi</td>
                                        <td>: {{ $model->deskripsi }}</td>
                                    </tr>                                  
                            </table>     
                        </div> 
                        <a href="/gallery" class="btn btn-info" >Kembali</a>                                    
                        </div> 
                    </div>
                    </div>

                    {{-- <div class="row">
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
                                            <th>: Rp. {{ $model->ruangstudio->harga}}</th>
                                        </tr>           
                                    </table>
                                    <hr/>
                                    <table>                                        
                                        <tr>
                                            <td>Durasi Booking</td>
                                            <th>: .... Jam </th>
                                        </tr>
                                        <tr>
                                            <td>Total Bayar (Optional)</td>
                                            <th>: </th>
                                        </tr>
                                    </table>
                                </div>
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
                    </div> --}}

                    <!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Detail Gambar Ruang Studio</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <img src="{{ \Storage::url($model->ruangstudio->gambar ?? 'images/no-image.png') }}" width="100%">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div>
                   

            </section>
        <!-- /.content -->

@endsection
