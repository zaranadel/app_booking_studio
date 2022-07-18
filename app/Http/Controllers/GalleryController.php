<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use \App\Gallery as Model;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    private $viewPrefix = "gallery";
    private $routePrefix = "gallery";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (request()->filled('q')) {
        //     $models = Model::search(request('q'))->paginate(100);
        // } else {
        //     $models = Model::orderBy('id', 'desc')->paginate(100);
        // }
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
        $data['namaTombol'] = 'Upload';
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
            'foto_gallery' => 'nullable|image|mimes:jpg,png,jpeg|max:2000',
            'nama' => 'required',
            'merek' => 'required', 
            'deskripsi' => 'nullable',           
        ]);
        if ($request->hasFile('foto_gallery')){
            $requestData['foto_gallery'] =  $request->file('foto_gallery')->store('public/images');
        }

        Model::create($requestData);   
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
        $data['namaTombol'] = 'Detail';
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
            'foto_gallery' => 'required|image|mimes:jpg, png, jpeg|max:2000',
            'nama' => 'required',
            'merek' => 'required',
            
            
        ]);
        $model = Model::findOrFail($id);
        $model->gallery = $request->gallery;
        $model->nama = $request->nama;
        $model->merek = $request->merek;        
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
        $model = Model::findOrFail($id);
        $model->delete();
        flash("Data Berhasil Dihapus");
        return back();
    }
}
