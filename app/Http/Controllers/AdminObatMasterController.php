<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\master;
use App\Models\Kategori;
use App\Models\User;

class AdminObatMasterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function master_obat()
    {
        $data = master::all();
        return view('admin.master_obat.master_obat',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah_master_obat()
    {
        return view('admin.master_obat.tambah_master_obat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan_master_obat(Request $request)

    {
        Master::create([
            'id'                =>$request->id,
            'kode_obat'        => $request->kode_obat,
            'nama_obat'          => $request->nama_obat,
            'no_obat'           => $request->no_obat,
            'created_at' => date('Y-m-d H:i:s' ,($request->created_at)),
            'updated_at' => date('Y-m-d H:i:s' ,($request->updated_at)),
        ]);
        return redirect('/master_obat')->with('success', 'Data  obat Berhasil ditambahkan');

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_master_obat($id)
    {
      
        $data = Master::find($id);
        return view('admin.master_obat.edit_master_obat',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_simpan_master_obat(Request $request, $id)
    {
        $master                 = master::find($id);
        $master->id             = $request->id;
        $master->kode_obat      = $request->kode_obat;
        $master->nama_obat      = $request->nama_obat;
        $master->no_obat        = $request->no_obat;
        $master->updated_at     = date('Y-m-d H:i:s' , strtotime($request->updated_at));
        $master->save();
        return redirect('/master_obat')->with('success', 'Data Berhasil Diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus_master_obat($id)
    {
        $row = master ::find($id);
        $row->delete();
        return redirect('/master_obat')->with('success', 'Data Berhasil Dihapus');
    }
}
