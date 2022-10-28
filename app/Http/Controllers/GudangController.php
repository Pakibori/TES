<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GudangController extends Controller
{
    public function gudang()
    {
        return view('gudang.gudang');
    }
}
