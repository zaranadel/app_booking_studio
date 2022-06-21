<?php

namespace App\Http\Controllers;

use \App\User as Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserProfilController extends Controller
{
    private $viewPrefix = "userprofil";
    private $routePrefix = "userprofil";
    
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $id = Auth::user()->id;
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
            'telp' => 'required|numeric|min:13',
            'password' => 'nullable|confirmed',
            
        ]);
        $model = Model::findOrFail($id);
        $model->name = $request->name;
        $model->email = $request->email;
        $model->telp = $request->telp;
        if ($request->password) {
            $model->password = bcrypt($request->password);
        } else {
            unset($request['password']);
        }
        
        $model->save();
        flash("Data berhasil diupdate");
        return back();
    }    
}
