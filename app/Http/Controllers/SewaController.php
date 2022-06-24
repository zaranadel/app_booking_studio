<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use \App\Sewa as Model;

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
        $request->validate([
            'nama' => 'required',
            'ruangstudio_id' => 'required',
            'telp' => 'required|numeric', 
            'jam_sewa' => 'required|after:now',
            'tgl_sewa' => 'required|after:yesterday',           
        ]);

        $ruangstudio = \App\RuangStudio::findOrFail($request->ruangstudio_id);
        // dd($request->all());
        $user = \App\User::query();
        if($request->filled('namaruangstudio')){
            $user = $user->where('namaruangstudio', $request->namaruangstudio);
        }

        $user = $user->get();
        foreach ($user as $item){
            $sewa = new Sewa();
            // $sewa->ruangstudio_id = $request->ruangstudio_id;
            $sewa->user_id = $item->id;
            $sewa->telp = $request->telp;
            $sewa->namaruangstudio = $ruangstudio->namaruangstudio;
            $sewa->harga = $ruangstudio->$harga;
            $sewa->tgl_sewa = $request->tgl_sewa;
            $sewa->jam_sewa = $request->jam_sewa;
            $sewa->save();
            

        }
        

        // $cek = Sewa::where('ruangstudio_id',$request->ruangstudio_id)
        //         // ->where('tgl_sewa',$request->tgl_sewa)
        //         ->where('jam_sewa',$request->jam_sewa)
        //         ->count();

        //         if ($cek > 0) {
        //             return back()->with(['keterangan' => 'Lapang sudah ada yang booking','tipe' => 'danger']);
        //         }else{
        //             Sewa::create([
        //                 'nama' => $request->nama,
        //                 'id' => Session::get('id'),
        //                 'telp' => $request->telp,
        //                 'ruangstudio_id' => $request->ruangstudio_id,
        //                 // 'tgl_sewa' => $request->tgl_sewa,
        //                 'jam_sewa' => $request->jam_sewa
        //             ]);
        //             return back()->with(['keterangan' => 'Booking berhasil','tipe' => 'success']);
        //         }

        // $requestData['user_id'] = Auth::user()->id;

    }

    //     $model = new Model();
    //     $model->nama = $request->nama;
    //     $model->ruangstudio_id = $request->ruangstudio;
    //     $model->telp = $request->telp;
        
    //     $model->save();
    //     flash("Data berhasil disimpan");
    //     return back();
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
