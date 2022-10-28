<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\pustu;

class AdminLPLPOController extends Controller
{
    public function admin_lplpo()
    {
        $pustu = Pustu::all();
        return view('admin.data_lplpo.list_lplpo', compact('pustu'));
    }
}
