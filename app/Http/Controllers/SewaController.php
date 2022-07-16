<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use \App\Sewa as Model;
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
    public function index()
    {        
        $models = Model::latest()->paginate(15);
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
            'selesai_sewa' => 'required',
            'tgl_sewa' => 'required|after:yesterday', 
            'status' => 'nullable',       
            // 'dibuat_oleh'=>'required'  ,
        ]);
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
        Model::create($requestData);
        flash("Data Booking Berhasil Dibuat");
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
        $data['model'] = Model::findOrFail ($id);
        return view($this->viewPrefix . '_show', $data);
            // $model = \App\Sewa::findOrFail($id);
            // $data['model'] = $model;
            // return view('sewa_show');
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
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' .  $id,
            
            'password' => 'nullable|confirmed',
            
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
}
