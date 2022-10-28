<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\puskesmas_lplpo;
use App\Models\master;
use App\Models\kategori;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\TryCatch;

class PuskesmasLPLPOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function lplpo()

    {
       
        // $puskesmas_lplpo = Puskesmas_lplpo::join('master','master.id','=','puskesmas_lplpo.id_master')
        //             ->select('puskesmas_lplpo.*','master.nama_obat')
        //             ->get();
        $puskesmas_lplpo = DB::table('puskesmas_lplpo')
        ->join('master', 'master.id', '=', 'puskesmas_lplpo.id_master')
        ->join('kategori', 'kategori.id', '=', 'puskesmas_lplpo.id_kategori')
        ->select('puskesmas_lplpo.*', 'master.nama_obat', 'master.no_obat','master.kode_obat',
        'kategori.nama_kategori','kategori.nama_satuan')
        ->get();
        $master =  master::all();
        $kategori = Kategori::all();
        return view('puskesmas.lplpo.lplpo', compact('master','puskesmas_lplpo','kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah_lplpo()
    {
        $master = master::all();
        $kategori = Kategori::all();
        return view('puskesmas.lplpo.tambah_lplpo', compact('master','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan_data_lplpo(Request $request)
    {
        puskesmas_lplpo::create([
            'id'                       =>$request->id,
            'id_master'                  =>$request->id_master,
            'id_kategori'               =>$request->id_kategori,
            'kode_lplpo'               =>$request->kode_lplpo,
            'penerimaan'               =>$request->penerimaan,
            'persediaan'               =>$request->persediaan,
            'pemakaian'                =>$request->pemakaian,
            'sisa_stok'                =>$request->sisa_stok,
            'stok_opname'              =>$request->stok_opname,
            'permintaan'               =>$request->permintaan,
            'pemberian'                =>$request->pemberian,
            'keterangan'               =>$request->keterangan,
            'status'                   =>$request->status,
            'created_at'               =>date('Y-m-d H:i:s', ($request->created_at)),
            'updated_at'               =>date('Y-m-d H:i:s', ($request->updated_at)),


        ]);
        return redirect('/lplpo')->with('success','Data berhasil ditambahkan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_lplpo($id)
    {
        $puskesmas_lplpo = Puskesmas_lplpo::find($id);
        $master = master::all();
        $kategori = Kategori::all();
        return view('puskesmas.lplpo.edit_lplpo', compact('puskesmas_lplpo','master','kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_simpan_lplpo(Request $request, $id)
    {   
        
        $puskesmas_lplpo = Puskesmas_lplpo::find($id);
        $puskesmas_lplpo->id            = $request->id;
        $puskesmas_lplpo->id_master       = $request->id_master;
        $puskesmas_lplpo->id_kategori       = $request->id_kategori;
        $puskesmas_lplpo->kode_lplpo     = $request->kode_lplpo;
        $puskesmas_lplpo->penerimaan    = $request->penerimaan;
        $puskesmas_lplpo->pemakaian     = $request->pemakaian;
        $puskesmas_lplpo->sisa_stok     = $request->sisa_stok;
        $puskesmas_lplpo->stok_opname   = $request->stok_opname;
        $puskesmas_lplpo->permintaan    = $request->permintaan;
        $puskesmas_lplpo->pemberian     = $request->pemberian;
        $puskesmas_lplpo->keterangan    = $request->keterangan;
        $puskesmas_lplpo->updated_at    = date('Y-m-d H:i:s');
        $puskesmas_lplpo->save();
        return redirect('/lplpo')->with('success','Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus_lplpo($id)
    {
        $data  = puskesmas_lplpo::find($id);
        $data->delete();
        return redirect('/lplpo')->with('success','Data Berhasil dihapus');
    }


    public function lihat_lplpo(){
        
        // $puskesmas_lplpo = Puskesmas_lplpo::join('master','master.id','=','puskesmas_lplpo.id_master')
        //             // ->join('obat','obat.id','=','puskesmas_lplpo.id_obat')
        //             ->select('puskesmas_lplpo.*','master.nama_obat','master.no_obat')
        //             ->get();
        $puskesmas_lplpo = DB::table('puskesmas_lplpo')
        ->join('master', 'master.id', '=', 'puskesmas_lplpo.id_master')
        ->join('kategori', 'kategori.id', '=', 'puskesmas_lplpo.id_kategori')
        ->select('puskesmas_lplpo.*', 'master.nama_obat', 'master.no_obat','kode_obat',
        'kategori.nama_kategori','kategori.nama_satuan')
        ->get();
        $master =  master::all();
        $kategori = Kategori::all();
        return view('puskesmas.lplpo.lihat_lplpo ',compact('puskesmas_lplpo','master','kategori'));
    }


    public function laporan(){
        
        $puskesmas_lplpo = DB::table('puskesmas_lplpo')
        ->join('master', 'master.id', '=', 'puskesmas_lplpo.id_master')
        ->join('kategori', 'kategori.id', '=', 'puskesmas_lplpo.id_kategori')
        ->select('puskesmas_lplpo.*', 'master.nama_obat', 'master.no_obat','kode_obat',
        'kategori.nama_kategori','kategori.nama_satuan')
        ->get();
        $master =  master::all();
        $kategori = Kategori::all();
        return view('puskesmas.laporan.laporan ',compact('puskesmas_lplpo','master','kategori'));
    }

    public function laporan_filter(Request $request){
        
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

        return view('puskesmas.laporan.laporan ',compact('puskesmas_lplpo','master','kategori','tanggal_mulai','tanggal_selesai'));
         
    }

}
