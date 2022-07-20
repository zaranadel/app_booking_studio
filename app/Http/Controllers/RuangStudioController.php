<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use \App\RuangStudio as Model;
use App\Sewa;

class RuangStudioController extends Controller
{
    private $viewPrefix = "ruangstudio";
    private $routePrefix = "ruangstudio";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (request()->filled('q')) {
            $models = Model::search(request('q'))->paginate(100);
        }else{
            $models = Model::orderBy('id', 'desc')->paginate(100);
        }        
        // $models = Model::latest()->paginate(10);
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
        $requestData = $request->validate([
            'namaruangstudio' => 'required',
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2000',
            'deskripsi' => 'nullable',
        ]);
        if ($request->hasFile('gambar')){
            $requestData['gambar'] = $request->file('gambar')->store('public/images');
        }
        Model::create($requestData);


        // $model = new Model();
        // $model->namaruangstudio = $request->namaruangstudio;
        // $model->harga = $request->harga;
        // $model->gambar = $request->gambar;
        // $model->deskripsi = $request->deskripsi;
        // $model->save();
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
        $requestData = $request->validate([
            // 'id_ruangstudio' => 'required|numeric|unique:id_ruangstudio,' .  $id,
            // 'no_ruangstudio' => 'required',
            // 'harga' => 'required|numeric',
            // 'gambar' => 'nullable|image|mimes:jpg, png, jpeg|max:2000',
            // 'deskripsi' => 'required',
            'namaruangstudio' => 'required' .$id,
            'harga' => 'required|numeric',
            'gambar' => 'nullable|image|mimes:jpg,png,jpeg|max:2000',
            'deskripsi' => 'nullable',
        ]);
        if ($request->hasFile('gambar')){
            $requestData['gambar'] = $request->file('gambar')->store('public/images');
            // $model = Model::findOrFail($id);

        }
       
        Model::where('id', $id)->update($requestData);
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
        $model = Model::findOrFail($id);
        $model->delete();
        flash("Data Berhasil Dihapus");
        return back();
    }
}
