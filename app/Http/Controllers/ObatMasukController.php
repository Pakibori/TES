<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;
use App\Models\master;
use App\Models\obat_masuk;
use App\Models\kategori;
use App\Models\obat_keluar;
use Illuminate\Support\Facades\DB;

class ObatMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function obat_masuk()
   
    {
        // $obat_masuk = Obat_Masuk::join('master','master.id', '=', 'obat_masuk.id_master')
        //             ->join('obat','obat.id', '=','obat.id_master')
        //             ->select('obat_masuk.*',
        //             'obat_masuk.jumlah_masuk','master.nama_obat','obat.stok','obat.stok_awal')
        //             ->get();

        $obat_masuk = DB::table('obat_masuk')
            ->join('master', 'obat_masuk.id_master', '=', 'master.id')
            ->join('obat', 'obat_masuk.id_obat', '=', 'obat.id')
            ->select('obat_masuk.*', 'obat.stok_awal', 'obat.stok','master.kode_obat',
            'master.nama_obat','obat.stok')
            ->get();

         $obat = Obat::all();
         $master = Master::all();
        //  $obat_masuk = obat_masuk::all();
        
         return view('admin.transaksi.obat_masuk.obat_masuk', compact('obat','obat_masuk','master'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah_obat_masuk()
   
    {
        $master = Master::all();
        $obat = Obat::all();
        $obat_masuk = obat_masuk::all();
        // $kategori = Kategori::all();
        

        // $data = DB::table('obat_masuk')->select(DB::raw('MAX(RIGHT(kode_obat,4)) as kode'));
        // $kd="";
        // if($data->count()>0){
        //     foreach($data->get()as $k){
        //         $temp = ((int)$k->kode)+1;
        //         $kd = sprintf("%04s", $temp);
        //     }
        // }else{
        //     $kd = "0001";
        // }
        return view('admin.transaksi.obat_masuk.tambah_obat_masuk', compact('obat_masuk','master','obat'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan_obat_masuk(Request $request)
    {

       obat_masuk::create([

            'id_master'          => $request->id_master,
            'kd_transaksi'          => $request->kd_transaksi,
            'id_obat'            => $request->id_obat,
            'no_batch'            => $request->no_batch,  
            'nama_obat'          => $request->nama_obat,   
            'jumlah_masuk'       => $request->jumlah_masuk,
            'tanggal_exp'        => $request->tanggal_exp,
            'keterangan'         => $request->keterangan,
    
        ]);

        $obat = Obat::find($request->id_obat);

        $obat->stok +=$request->jumlah_masuk;
        $obat->save();

        return redirect('/obat_masuk')->with('success', 'Data Berhasil disimpan!');


    }


    public function cetak(){
        $obat = Obat::all();
        $obat_masuk = obat_masuk::all();
        // $kategori = Kategori::all();
        return view('admin.laporan.lap_obat_masuk.cetak', compact('obat','obat_masuk'));
    }


 
}
