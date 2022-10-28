<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DinasController extends Controller
{
    public function dinas()
    {
        return view('dinas.dinas');
    }
}
