<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\obat;
use App\Models\Kategori;
use App\Models\master;
use Illuminate\Support\Facades\DB;

// date_default_timezone_set('Asia/Jakarta');

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function obat()
    {   
        // $obat = Obat::join('kategori','kategori.id','=','obat.id_kategori')
        // ->select('obat.*', 'kategori.nama_kategori','kategori.nama_satuan')
        // ->get();

        $obat = DB::table('obat')
        ->join('kategori', 'kategori.id', '=', 'obat.id_kategori')
        ->join('master', 'master.id', '=', 'obat.id_master')
        ->select('obat.*', 'kategori.nama_kategori','kategori.nama_satuan','master.nama_obat',
        'master.kode_obat','master.no_obat')
        ->get();

        $kategori = Kategori::all();
        $data = Master::all();
        return view('admin.master.obat', compact('obat','kategori','data'));

       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        $kategori = Kategori::all();
        $data = Master::all();
        return view('admin.master.tambah',compact('kategori','data','kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function obat_store(Request $request)
    {
        Obat::create([
            'id_master'               =>$request->id_master,
            'id_kategori'             => $request->id_kategori,
            'stok'                    => $request->stok,
            'lemari'                    => $request->lemari,
            'rak'                    => $request->rak,
            'stok_awal'               => $request->stok_awal,
            'created_at'              => date('Y-m-d H:i:s' ,($request->created_at)),
            'updated_at'              => date('Y-m-d H:i:s' ,($request->updated_at)),
        ]);

        return redirect('/obat')->with('success', 'Data  obat Berhasil ditambahkan');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::all();
        $master = Master::all();
        $data = Obat::find($id);
        return view('admin.master.edit', compact('data','kategori','master'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_simpan_obat(Request $request, $id)
    {
        $obat = Obat::find($id);
        $obat->id                  = $request->id;
        $obat->id_master           = $request->id_master;
        $obat->id_kategori         = $request->id_kategori;
        $obat->lemari              = $request->lemari;
        $obat->rak                 = $request->rak;
        $obat->stok                = $request->stok;
        $obat->stok_awal           = $request->stok_awal;
        $obat->updated_at          = date('Y-m-d H:i:s',($request->updated_at));
        $obat->save();
        return redirect('/obat')->with('success', 'Data Berhasil Diubah');
    }
    
    // public function edit_simpan_obat(Request $request,  $id){
    //     $rules = [
    //         'id_kategori'       =>'required',
    //         'nama_obat'         =>'required',
    //         'no_batch'          =>'required',
    //         'stok'              =>'required',
    //         'stok_awal'         =>'required',       
    //    ];

    //     $validatedData['id_user'] = auth()->user()->id;
    //     $validatedData = $request->validate($rules);
    //     obat::where('id', $request->id)
    //     ->update($validatedData);
    //     return redirect('/obat')->with('success','Data Berhasil');

    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function Obat_hapus($id)
    {   
        $user = Master::all();
        $row = Obat::find($id);
        $row->delete();
        return redirect('/obat')->with('success', 'Data Berhasil Dihapus');
    }
    
    
}
