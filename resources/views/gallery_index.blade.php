@extends('layouts.app_adminlte')
<title>Gallery Studio</title>
@section('content')
<style>
  section {
      background-image: url('{{ asset("img/bgmusic.jpg") }}');
      background-size: cover;
      opacity: ;
  }
  .content {
     height: 150%;
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
                <div class="card-header bg-dark">GALLERY ALAT MUSIK STUDIO</div>

                <div class="card-body">
                    @if (auth()->user()->akses == 'admin')
                    <a href="{{ route($routePrefix .'.create') }}" class="btn btn-info mb-4"><i class="fa fa-plus"></i> Tambah Data Gallery</a>
                    @endif
                    <table class="table table-striped table-bordered table-hover" style="font-size: 14px">
                        <thead class="thead-dark text-center">
                            <tr>
                                <th>FOTO</th>
                                <th>NAMA ALAT</th>
                                <th>MEREK</th>                               
                                <th>DESKRIPSI</th>
                                {{-- @if (auth()->user()->akses == 'admin') --}}
                                <th>AKSI</th>
                                {{-- @endif --}}
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($models as $item)
                                <tr>
                                    
                                    <td class="text-center"><img src="{{ \Storage::url($item->foto_gallery ?? 'images/no-image.png') }}" width="110"></td>
                                    <td class="text-center">{{ $item->nama }}</td>
                                    <td class="text-center">{{ $item->merek }}</td> 
                                    <td class="text-left">{{ $item->deskripsi }}</td> 
                                    
                                    <td>
                                      @if (auth()->user()->akses == 'admin')                                   
                                        {!! Form::open(['route' => [$routePrefix .'.destroy', $item->id], 'method' => 'DELETE', 'onsubmit' => 'return confirm("Anda Yakin ?")']) !!}

                                       
                                        <a href="{{ route($routePrefix .'.edit', $item->id) }}" class="btn btn-warning"><i class="fa fa-edit"></i> </a>
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> </button>
                                        @endif
                                        <a href="{{ route($routePrefix.'.show', $item->id) }}" class="btn btn-info"><i class="fa fa-eye"></i> </a>
                                        
                                      
                                        
                                        {!! Form::close() !!}
 
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="8" class="text-center">Ruang Studio Tidak Ada</td>
                                </tr>
                            @endforelse
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- <!-- Modal -->
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
            <img src="{{ \Storage::url($item->foto_gallery ?? 'images/no-image.png') }}" width="100%">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          
        </div>
      </div>
    </div>
  </div> --}}
        </section>
        <!-- /.content -->
@endsection
