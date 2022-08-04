<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \App\Sewa;
use \App\Bayar as Model;
use \App\User;
use \App\RuangStudio;

class BayarController extends Controller
{
    private $viewPrefix = "bayar";
    private $routePrefix = "bayar";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // if (request()->filled('q')) {
        //     $models = Model::search(request('q'))->paginate(100);
        // }else{
        //     $models = Model::orderBy('id', 'desc')->paginate(100);
        // } 
        $jumlahPendapatan = Model::sum('total_bayar');
        $models = Model::latest()->paginate(15);
        $data['models'] = $models;
        $data['routePrefix'] = $this->routePrefix;
        $data['jumlahPendapatan'] = $jumlahPendapatan;
        return view($this->viewPrefix . '_index', $data);
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
       
        $sewaId = $request->sewa_id;
        $totalBayar = $request->total_bayar;
        $booking = Sewa::findOrFail($sewaId);
        // if ($booking->status == "Accepted"){
        //     flash("Data Booking Sudah Diterima");
        //     return back();
        // }
        $bayar = new Model();
        $bayar->sewa_id = $sewaId;
        $bayar->total_bayar = $request->total_bayar;
        $bayar->status = $request->status;
        $bayar->diterima_oleh = Auth::user()->name;
        $bayar->save();
        flash("Konfirmasi Berhasil")->success();
        return back();             
            // $requestData = $request->validate([
            //     'sewa_id' => 'required',
            //     'status' => 'required',
            //     'total_bayar' => 'numeric',
            //     'diterima_oleh' => 'nullable',
            // ]);
            // // $data['model'] = Model::findOrFail ($id);
            // // $data['model'] = $model;
            // $requestData['diterima_oleh'] = Auth::user()->id;
            // // Model::where('id', $id)->update($requestData);
            // Model::create($requestData);
            // flash("Data Booking Telah Dikonfirmasi");
            // return back();

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
        $model = Model::findOrFail($id);
        $model->delete();
        flash("Data Berhasil Dihapus");
        return back();
    }
}
