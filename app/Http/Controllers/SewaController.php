<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Sewa as Model;
use Session;

class SewaController extends Controller
{
    private $viewPrefix = "sewa";
    private $routePrefix = "sewa";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $models = Model::latest()->paginate(10);
        $data['models'] = $models;
        $data['routePrefix'] = $this->routePrefix;
        return view($this->viewPrefix . '_index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Model();
        $data['model'] = $model;
        $data['method'] = 'POST';
        $data['route'] = $this->routePrefix . '.store';
        $data['namaTombol'] = 'Simpan';
        return view($this->viewPrefix . '_form', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'ruangstudio_id' => 'required',
            'nohp' => 'required|min:6|max:15',
            'tgl_sewa' => 'required|after:yesterday',
            'jam_sewa' => 'required|after:now',
        ]);
        $cek = Sewa::where('ruangstudio_id',$request->ruangstudio_id)
                ->where('tgl_sewa',$request->tgl_sewa)
                ->where('jam_sewa',$request->jam_sewa)
                ->count();

                if ($cek > 0) {
                    return back()->with(['keterangan' => 'Lapang sudah ada yang booking','tipe' => 'danger']);
                }else{
                    Sewa::create([
                        'nama' => $request->nama,
                        'id' => Session::get('id'),
                        'nohp' => $request->nohp,
                        'ruangstudio_id' => $request->ruangstudio_id,
                        'tgl_sewa' => $request->tgl_sewa,
                        'status' => '2',
                        'jam_sewa' => $request->jam_sewa
                    ]);
                    return back()->with(['keterangan' => 'Booking berhasil','tipe' => 'success']);
                }

        $model = new Model();
        $model->nama = $request->nama;
        $model->nohp = $request->nohp;
        $model->tgl_sewa = $request->tgl_sewa;
        $model->jam_sewa = $request->jam_sewa;
        $model->save();
        flash("Data berhasil disimpan");
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data['model'] = Model::findOrFail ($id);
        return view($this->viewPrefix . '_show', $data);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $model = Model::findOrFail($id);
        $data['model'] = $model;
        $data['method'] = 'PUT';
        $data['route'] = [$this->routePrefix . '.update', $id];
        $data['namaTombol'] = 'Update';
        return view($this->viewPrefix . '_form', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_ruangstudio' => 'required|numeric|unique:id_ruangstudio,' .  $id,
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpg, png, jpeg|max:2000',
            'deskripsi' => 'required',
        ]);
        $model = Model::findOrFail($id);
        $model->id_ruangstudio = $request->id_ruangstudio;
        $model->harga = $request->harga;
        $model->gambar = $request->gambar;
        $model->deskripsi = $request->deskripsi;
        
        $model->save();
        flash("Data berhasil diupdate");
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //if($id == 1){
            //flash("Akun Pemilik Tidak Dapat Dihapus!!")->error();
            //return back();
       // }
        $model = Model::findOrFail($id);
        $model->delete();
        flash("Data Berhasil Dihapus");
        return back();
    }
}
