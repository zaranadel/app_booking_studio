@extends('layouts.app_adminlte')
<title>Form Booking</title>
@section('content')
<style>
   section {
       background-image: url('{{ asset("img/bgmusic.jpg") }}');
       background-size: cover;
       opacity: 0.9;
   }
   .card {
       margin-top: 70px;
       
       box-shadow: 10px 10px 15px rgba(255, 255, 255, 0.5), 
            -10px -10px 15px rgba(70, 70, 70, 0.12);
   }
</style>


    <!-- Main content -->
    <section class="content">
      
            <div class="card ml-6" style="width: 40rem; margin: 0 auto;">
                <div class="card-header bg-dark" style="font-size: 16px" >FORM BOOKING RUANG STUDIO</div>
                {!! Form::model($model, ['route' => $route, 'method' => $method]) !!}
                {!! Form::text('ruangstudio_id', $model->ruangstudio_id, []) !!}
                {!! Form::text('user_id', $model->user_id, []) !!}
                {!! Form::text('nama', $model->nama, []) !!}
                {!! Form::text('telp', $model->telp, []) !!}
                {!! Form::text('bank', $model->bank, []) !!}
                {!! Form::text('tgl_sewa', $model->tgl_sewa, []) !!}
                {!! Form::text('jam_sewa', $model->jam_sewa, []) !!}
                {!! Form::text('total_bayar', $model->total_bayar, []) !!}
                <div class="form-group">
                    <label for="status">APPROVE BOOKING</label>
                   {{-- {!! Form::select('jam_sewa', [ --}}
                   <select name="status" class="form-control col-md-12">
                    <option disabled selected>-- Pilih Status --</option>
                   <option value="Diterima">Diterima</option>
                   <option value="Ditolak">Ditolak</option>
                 </select>
                    <span class="text-danger">{{ $errors->first('status') }}</span>
                 </div>
                 {!! Form::submit($namaTombol, ['class' => 'btn btn-primary ']) !!}
                                        
                 {!! Form::close() !!}
                
            </div>
         </div>
        </section>
        <!-- /.content -->
@endsection
