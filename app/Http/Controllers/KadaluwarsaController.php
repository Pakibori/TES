<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kadaluwarsa;
use App\Models\kategori;
use App\Models\master;
use App\Models\obat_masuk;
use Illuminate\Support\Facades\DB;

class KadaluwarsaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kadaluwarsa()
    {
        $kadaluwarsa = DB::table('kadaluwarsa')
            ->join('master', 'master.id', '=', 'kadaluwarsa.id_master')
            ->join('obat_masuk', 'obat_masuk.id', '=', 'kadaluwarsa.id_obat_masuk')
            ->select('kadaluwarsa.*', 'master.nama_obat', 'obat_masuk.tanggal_exp')
            ->get();

        // $kadaluwarsa = kadaluwarsa:: JOIN('obat','obat.id','=','kadaluwarsa.id_obat')
        //             ->select('kadaluwarsa.*','obat.nama_obat','obat.id_kategori')
        //             ->get();
        $obat_masuk =  obat_masuk::all();
        $master     = master::all();

        return view('admin.transaksi.kadaluwarsa.kadaluwarsa', compact('kadaluwarsa','obat_masuk','master'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah_kadaluwarsa()
    {
        $obat_masuk = obat_masuk::all();
        $master  = master::all();
        return view('admin.transaksi.kadaluwarsa.tambah_kadaluwarsa', compact('obat_masuk','master'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan_kadaluwarsa(Request $request)
    {
            kadaluwarsa::create([
                'id_master'       =>$request->id_master,
                'kode_exp'     =>$request->kode_exp,
                'id_obat_masuk' =>$request->id_obat_masuk,
                'jumlah'        =>$request->jumlah,
                'keterangan'    =>$request->keterangan,
                'created_at'    =>date('Y-m-d H:i:s', ($request->create_at)),
                'updated_at'    =>date('Y-m-d H:i:s', ($request->updated_at)),
            ]);
            return redirect('/kadaluwarsa')->with('success','Data berhasil ditambahkan');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_kadaluwarsa($id)
    {
        $kadaluwarsa = Kadaluwarsa::find($id);
        $obat_masuk = obat_masuk::all();
        $master       = Master::all();
        return view('admin.transaksi.kadaluwarsa.edit_kadaluwarsa', compact('obat_masuk','master','kadaluwarsa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_simpan_kadaluwarsa(Request $request, $id)
    {
        $kadaluwarsa = Kadaluwarsa::find($id);

        $kadaluwarsa->id            = $request->id;
        $kadaluwarsa->id_master     = $request->id_master;
        $kadaluwarsa->kode_exp     = $request->kode_exp;
        $kadaluwarsa->id_obat_masuk = $request->id_obat_masuk;
        $kadaluwarsa->jumlah        = $request->jumlah;
        $kadaluwarsa->keterangan    = $request->keterangan;
        $kadaluwarsa->updated_at    = date('Y-m-d H:i:s');
        $kadaluwarsa->save();
        return redirect('/kadaluwarsa')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus_kadaluwarsa($id)
    {
        $row  = Kadaluwarsa::find($id);
        $row->delete();
        return redirect('/kadaluwarsa')->with('success','Data Berhasil dihapus');

    }
}
