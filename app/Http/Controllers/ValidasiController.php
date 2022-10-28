<?php

namespace App\Http\Controllers;

use App\Models\lplpo;
use App\Models\obat;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ValidasiController extends Controller
{
    //
    public function validasi_lplpo(){

        $lplpo = DB::table('lplpo')
        ->join('obat','obat.id','=','lplpo.id_obat')
        ->join('status','id_status','=','lplpo.id_status')
        ->select('lplpo.*','obat.nama_obat','status.status_puskesmas')
        ->get();
        $obat = Obat::all();
        $user = User::all();
        $lplpo = lplpo::all();
        
        return view('puskesmas.data_lplpo.valiidasi.validasi_lplpo',compact('lplpo','obat','user'));
    }
    
}
