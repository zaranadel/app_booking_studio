<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use \App\User as Model;

class UserAdminController extends Controller
{
    private $viewPrefix = "useradmin";
    private $routePrefix = "useradmin";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $models = Model::latest()->paginate(15);
        // $data['models'] = $models;
        // $data['routePrefix'] = $this->routePrefix;
        // return view($this->viewPrefix . '_index', $data);
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
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'akses' => 'nullable',
            
            'password' => 'required|confirmed',
            

        ]);
        $model = new Model();
        $model->name = $request->name;
        $model->email = $request->email;
        $model->akses = $request->akses;
        
        $model->password = bcrypt($request->password);
        
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
        // $data['model'] = Model::findOrFail ($id);
        // return view($this->viewPrefix . '_show', $data);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $model = Model::findOrFail($id);
        // $data['model'] = $model;
        // $data['method'] = 'PUT';
        // $data['route'] = [$this->routePrefix . '.update', $id];
        // $data['namaTombol'] = 'Update';
        // return view($this->viewPrefix . '_form', $data);
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
        // $request->validate([
        //     'name' => 'required',
        //     'email' => 'required|email|unique:users,email,' .  $id,
        //     'telp' => 'required|numeric|min:13',
        //     'password' => 'nullable|confirmed',
            
        // ]);
        // $model = Model::findOrFail($id);
        // $model->name = $request->name;
        // $model->email = $request->email;
        // $model->telp = $request->telp;
        // if ($request->password) {
        //     $model->password = bcrypt($request->password);
        // }
        
        // $model->save();
        // flash("Data berhasil diupdate");
        // return back();
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
        // $model = Model::findOrFail($id);
        // $model->delete();
        // flash("Data Berhasil Dihapus");
        // return back();
    }
}
