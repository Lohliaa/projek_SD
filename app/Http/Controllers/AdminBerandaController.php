<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminBerandaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('adminBeranda.index');
    }
}
