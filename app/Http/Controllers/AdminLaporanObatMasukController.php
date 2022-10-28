<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;
use App\Models\obat_masuk;
use App\Models\obat_keluar;
use App\Models\kategori;


class AdminLaporanObatMasukController extends Controller
{
    public function cetak()
   
    {
        $obat_masuk = Obat_Masuk::join('obat','obat.id', '=', 'obat_masuk.id_obat')
                    ->join('kategori','kategori.id', '=','obat.id_kategori')
                    ->select('obat_masuk.*','kategori.nama_kategori','kategori.nama_satuan',
                    'obat_masuk.jumlah_masuk','obat.nama_obat','obat.stok','no_batch','obat.stok_awal')
                    ->get();

         $obat = Obat::all();
         $kategori = kategori::all();
        
         return view('admin.laporan.lap_obat_masuk.cetak', compact('obat','obat_masuk','kategori'));
    }

    public function cetak_data($tanggal_awal, $tanggal_akhir)
    {
        dd(["Tanggal Awal : ".$tanggal_awal, "Tanggal Akhir:".$tanggal_akhir]);

        

    }
}
