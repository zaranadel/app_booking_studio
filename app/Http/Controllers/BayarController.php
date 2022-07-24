<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Sewa;
use \App\Bayar as Model;

class BayarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $status = $request->status;
        // $bayar = $request->total_bayar;
        // $sewaId = $request->sewa_id;
        // $sewa = Sewa::findOrFail($sewaId);
        // if ($sewa->status == "Diterima"){
        //     flash("Data Booking Sudah Di Approve");
        //     return back();
        // }
            // 
            // $data['model'] = Model::findOrFail ($id);
           
            // $total->sewa_id = $sewaId;
            // $total->status = $status;
            // $total->total_bayar = $bayar;
            // $total->diterima_oleh = Auth::user()->name;
             
            $requestData = $request->validate([
                'sewa_id' => 'required',
                'status' => 'required',
                'total_bayar' => 'numeric',
                'diterima_oleh' => 'nullable',
            ]);
            // $data['model'] = Model::findOrFail ($id);
            // $data['model'] = $model;
            $requestData['diterima_oleh'] = Auth::user()->id;
            Model::create($requestData);
            flash("Data Booking Telah Dikonfirmasi");
            return back();

    //    $status = $request->status;
    //    $sewaId = $request->sewa_id;
    //    $bayar = new Bayar();
    //    $bayar = $diterima_oleh = Auth::user()->name;
      
    //    $bayar->
    //    $bayar = $request->status;
    //    $bayar = $diterima_oleh = Auth::user()->name;
    //    $bayar->save();
    //    flash('Sudah Dikonfirmasi');
    //    return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
