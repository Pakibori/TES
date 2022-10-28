<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\master;
use App\Models\obat;
use App\Models\obat_masuk;
use App\Models\obat_keluar;
use App\Models\Kategori;
use Illuminate\Support\Facades\DB;

class ObatKeluarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function obat_keluar()
   
    {
        // $obat_keluar = Obat_Keluar::join('obat','obat.id', '=', 'obat_keluar.id_obat')
        //             ->join('kategori','kategori.id', '=','obat.id_kategori')
        //             ->select('obat_keluar.*','kategori.nama_kategori','kategori.nama_satuan','obat_keluar.jumlah_keluar',
        //             'obat.nama_obat','obat.stok','obat.no_batch','obat.stok_awal')
        //             ->get();
        $obat_keluar = DB::table('obat_keluar')
        ->join('master', 'obat_keluar.id_master', '=', 'master.id')
        ->join('obat', 'obat_keluar.id_obat', '=', 'obat.id')
        ->select('obat_keluar.*', 'obat.stok_awal', 'obat.stok','master.kode_obat',
        'master.nama_obat','obat.stok')
        ->get();

         $obat = Obat::all();
         $master = master::all();
         return view('admin.transaksi.obat_keluar.obat_keluar', compact('obat','obat_keluar','master'));
    }

    public function tambah_obat_keluar()
   
    {
        $obat = Obat::all();
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
        $master = master::all();
        $obat_keluar = obat_keluar::all();
        return view('admin.transaksi.obat_keluar.tambah_obat_keluar', compact('obat_keluar','obat','master'));

    }

    // public function ajax(Request $request){
    //     $id_obat['id_obat'] = $request->id_obat;
    //     $ajax_obat          = Obat::where('id','$id_obat')->get();

    //     return view('admin.transaksi.obat_keluar.ajax', compact('ajax_obat'));
        
    // }

    public function simpan_obat_keluar(Request $request)
    {
     
        $obat = Obat::find($request->id_obat);

        if($obat->stok < $request->jumlah_keluar)
        {
           
            return redirect('/tambah_obat_keluar')->with('error', 'Data melebihi kapasistas stok!'); 
        }
        else
        {
            obat_keluar::create([

          
                'id_master'          => $request->id_master,
                'id_obat'            => $request->id_obat,
                'kd_transaksi_ok'    => $request->kd_transaksi_ok,
                'jumlah_keluar'      => $request->jumlah_keluar,
                'keterangan'         => $request->keterangan,
                'tanggal_exp'        => $request->tanggal_exp,
        
            ]);

            $obat->stok -=$request->jumlah_keluar;
            $obat->save();

        return redirect('/obat_keluar')->with('success', 'Data Berhasil disimpan!');
        }

    }
}
