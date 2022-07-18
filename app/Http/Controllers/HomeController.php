<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RuangStudio;
use App\User;
use App\Gallery;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {        
            $jumlah_ruangstudio = RuangStudio::all()->count();
            $jumlah_user = User::all()->count();
            $jumlah_alatmusik = Gallery::all()->count();
             return view('home', compact('jumlah_ruangstudio', 'jumlah_user', 'jumlah_alatmusik'));   
    }
    
}
