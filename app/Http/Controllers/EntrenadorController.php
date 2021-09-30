<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntrenadorController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('components.entrenadores');
    }
}
