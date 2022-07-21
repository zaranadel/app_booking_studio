<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use \App\Sewa as Model;
use App\RuangStudio;
use App\Bayar;
// use \App\RuangStudio;

class SewaController extends Controller
{
    private $viewPrefix = "sewa";
    private $routePrefix = "sewa";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {        
        if ($request->filled('bulan') && $request->filled('tahun')){
            $models = Model::whereMonth('tgl_sewa', $request->bulan)->whereYear('tgl_sewa', $request->tahun)->latest()->get();
        } 
        else{
            $models = Model::latest()->get();
        }        
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
        $data['namaTombol'] = 'Booking';
        $data['ruangstudioList'] = \App\RuangStudio::pluck('namaruangstudio', 'id');
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
        $requestData = $request->validate([
            'nama' => 'required',
            'telp' => 'required|numeric', 
            'ruangstudio_id'=>'required',
            'total_bayar' => 'nullable|numeric',
            'jam_sewa' => 'required',
            'bank' => 'nullable',
            'selesai_sewa' => 'required',
            'tgl_sewa' => 'required|after:yesterday', 
            'status' => 'nullable',

            // 'dibuat_oleh'=>'required'  ,
        ]);
        $requestData['user_id'] = Auth::user()->id;
        $cek = Model::where('ruangstudio_id', $request->ruangstudio_id)
                    ->where('tgl_sewa', $request->tgl_sewa)
                    ->where('jam_sewa', $request->jam_sewa)
                    ->count();

                    if ($cek > 0){
                        // return back()->with(['keterangan' => 'Ruang Studio Sudah Ada Yang Booking', 'tipe' => 'danger']);
                        flash('Ruang Studio Sudah Ada Yang Booking')->error();
                        return back();
                    }else{
                        Model::create($requestData);
                        
                        flash('Booking Berhasil, Tinggal Menunggu Approve Dari Admin');
                        return back();
                    };

        
        // dd($requestData);
        // $model = new Model();
        // $model->nama = $request->nama;
        // $model->telp = $request->telp;
        // $model->ruangstudio_id =$request->ruangstudio->id;
        // $model->total_bayar = $request->total_bayar;
        // $model->jam_sewa = $request->jam_sewa;
        // $model->tgl_sewa = $request->tgl_sewa;
        // $model->namaruangstudio = $request->namaruangstudio;
        // $model->status = 'proses';
        // $model->save();
        // $requestData['dibuat_oleh'] = Auth::user()->id;
        // Model::create($requestData);
        // flash("Data Booking Berhasil Dibuat");
        return redirect()->route('sewa.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $model = \App\Sewa::findOrFail($id);
        $data['model'] = $model;

        $modelBayar = new \App\Bayar();
        $data['modelBayar'] = $modelBayar;
        $data['method'] = 'POST';
        $data['route'] = 'bayar.store';
        return view($this->viewPrefix . '_show', $data);
    }

    // public function showData($id)
    // {
    //     $data['model'] = Model::findOrFail ($id);
    //     return view('sewa_show', $data);
    // }
    
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
        $requestData = $request->validate([
            
        ]);
        $model = Model::findOrFail($id);
        $model->name = $request->name;
        $model->email = $request->email;
        
        if ($request->password) {
            $model->password = bcrypt($request->password);
        }
        
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
        // if($id == 1){
        //     flash("Akun Pemilik Tidak Dapat Dihapus!!")->error();
        //     return back();
        // }
        $model = Model::findOrFail($id);
        $model->delete();
        flash("Data Berhasil Dihapus");
        return back();
    }

    public function cetakForm(){
        return view('laporan_form');
    }

    public function cetakLaporanPertanggal($tglawal, $tglakhir){

        $cetakperTanggal = Model::with('ruangstudio')->whereBetween('tgl_sewa', [$tglawal, $tglakhir])->latest()->get();
        return view('cetak-laporan-pertanggal', compact('cetakperTanggal'));

    }
}
