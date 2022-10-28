<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;
use App\Models\obat_masuk;
use App\Models\kategori;
use App\Models\obat_keluar;

class StokController extends Controller
{
    public function stok()
   
    {
        $obat_masuk = Obat_Masuk::join('obat','obat.id', '=', 'obat_masuk.id_obat')
                    ->join('kategori','kategori.id', '=','obat.id_kategori')
                    ->select('obat_masuk.*','kategori.nama_kategori','obat_masuk.jumlah_masuk','obat.nama_obat','obat.stok')
                    ->get();

         $obat = Obat::all();
         $obat_keluar = Obat_keluar::all();
        
         return view('admin.transaksi.stok.stok', compact('obat','obat_masuk','obat_keluar'));
    }
}
