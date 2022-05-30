<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Evidence;
use App\Problem;
use App\Pasien;

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
        $pasien = Pasien::all()->count();
        $evidence = Evidence::all()->count();
        $problem = Problem::all()->count();
        // $evidence = Evidence::where('status', 'Pasif')->count();
        // $aktif = Pegawai::where('status', 'Aktif')->count();
                    
        return view('home', ['pasien' => $pasien, 'evidence' => $evidence, 'problem' => $problem]);

    }
}
