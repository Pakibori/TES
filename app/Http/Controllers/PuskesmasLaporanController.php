<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\puskesmas_lplpo;
use App\Models\master;
use App\Models\kategori;
use App\Models\obat;
use App\Models\kadaluwarsa;
use App\Models\user;
use App\Models\pustu;
use Illuminate\Support\Facades\DB;

class PuskesmasLaporanController extends Controller
{
    public function cetak_laporan_lplpo(){
        $puskesmas_lplpo = DB::table('puskesmas_lplpo')
        ->join('master', 'master.id', '=', 'puskesmas_lplpo.id_master')
        ->join('kategori', 'kategori.id', '=', 'puskesmas_lplpo.id_kategori')
        ->select('puskesmas_lplpo.*', 'master.nama_obat', 'master.no_obat','kode_obat',
        'kategori.nama_kategori','kategori.nama_satuan')
        ->get();
        $master =  master::all();
        $kategori = Kategori::all();
        return view('puskesmas.laporan.cetak_laporan_lplpo',compact('puskesmas_lplpo','master','kategori'));
    }
    public function cetak_data_filter(Request $request){
        $tanggal_mulai = $request->tanggal_mulai;
        $tanggal_selesai = $request->tanggal_selesai;

        if($tanggal_mulai AND $tanggal_selesai){
            $puskesmas_lplpo = DB::table('puskesmas_lplpo')
            ->join('master', 'master.id', '=', 'puskesmas_lplpo.id_master')
            ->join('kategori', 'kategori.id', '=', 'puskesmas_lplpo.id_kategori')
            ->select('puskesmas_lplpo.*', 'master.nama_obat', 'master.no_obat','kode_obat',
            'kategori.nama_kategori','kategori.nama_satuan')
            ->whereBetween('puskesmas_lplpo.created_at',[$tanggal_mulai,$tanggal_selesai])
            ->get();

        }else{
            $puskesmas_lplpo = DB::table('puskesmas_lplpo')
            ->join('master', 'master.id', '=', 'puskesmas_lplpo.id_master')
            ->join('kategori', 'kategori.id', '=', 'puskesmas_lplpo.id_kategori')
            ->select('puskesmas_lplpo.*', 'master.nama_obat', 'master.no_obat','kode_obat',
            'kategori.nama_kategori','kategori.nama_satuan')
            ->get();
        }
        $master =  master::all();
        $kategori = Kategori::all();
        return view('puskesmas.laporan.cetak_data_filter',compact('puskesmas_lplpo','master','kategori',
        'tanggal_mulai','tanggal_selesai'));
    }
}
