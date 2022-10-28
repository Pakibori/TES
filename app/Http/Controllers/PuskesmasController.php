<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\obat;
use App\Models\Kategori;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class PuskesmasController extends Controller
{
    public function puskesmas()
    {
       
        return view('puskesmas.puskesmas');
    }



    public function masuk()
    {
        // $obat = Obat::join('kategori','kategori.id','=','obat.id_kategori')
        // ->select('obat.*', 'kategori.nama_kategori')
        // ->get();
        $obat = DB::table('obat')
        ->join('kategori', 'kategori.id', '=', 'obat.id_kategori')
        ->join('users', 'users.id', '=', 'obat.id_user')
        ->select('obat.*', 'kategori.nama_kategori','kategori.nama_satuan', 'users.level')
        ->get();

        $kategori = Kategori::all();
        return view('puskesmas.data_transaksi.obat_masuk.masuk', compact('obat','kategori'));
    }
    public function tambah_masuk()
    {    
        $obat   =   obat ::all();
        $user = User::all();
        $kategori = Kategori::all();
        return view('puskesmas.data_transaksi.obat_masuk.tambah_masuk', compact('obat','kategori','user'));
    }

    public function simpan_masuk (Request $request){
        $validatedData = $request->validate([
            'id_kategori'       =>'required',
            'nama_obat'         =>'required',
            'no_batch'          =>'required',
            'stok'              =>'required',
            'stok_awal'         =>'required',
            
        ]);

        $validatedData['id_user'] = auth()->user()->id;

        obat::create($validatedData);
        return redirect('/masuk')->with('success','Data Berhasil');
    }
    // public function simpan_masuk(Request $request)
    // {
    //     Obat::create([

    //         'id_kategori'        => $request->id_kategori,
    //         'id_user'               =>$request->id_user,
    //         'nama_obat'          => $request->nama_obat,
    //         'no_batch'           => $request->no_batch,
    //         'stok'               => $request->stok,
    //         'stok_awal'               => $request->stok_awal,
    //         'created_at' => date('Y-m-d H:i:s'),
    //         'updated_at' => date('Y-m-d H:i:s'),
    //     ]);

    //     return redirect('/masuk')->with('success', 'Data  obat Berhasil ditambahkan');

    // }
    public function edit_masuk($id)
    {
        $kategori = Kategori::all();
        $data = User::all();
        $data = Obat::find($id);
        return view('puskesmas.data_transaksi.obat_masuk.edit_masuk', compact('data','data','kategori'));
    }

    public function simpan_masuk_edit(Request $request,  $id){
        $rules = [
            'id_kategori'       =>'required',
            'nama_obat'         =>'required',
            'no_batch'          =>'required',
            'stok'              =>'required',
            'stok_awal'         =>'required',       
       ];

        $validatedData['id_user'] = auth()->user()->id;
        $validatedData = $request->validate($rules);
        obat::where('id', $request->id)
        ->update($validatedData);
        return redirect('/masuk')->with('success','Data Berhasil');

    }


    // public function simpan_masuk_edit(Request $request, $id)
    // {
        

    //     $obat = Obat::find($id);
    //     $obat->id           =$request->id;
    //     $obat->id_user           =$request->id_user;
    //     $obat->id_kategori   = $request->id_kategori;
    //     $obat->nama_obat     = $request->nama_obat;
    //     $obat->no_batch      = $request->no_batch;
    //     $obat->stok          = $request->stok;
    //     $obat->stok_awal          = $request->stok_awal;
    //     $obat->updated_at    = date('Y-m-d H:i:s');
    //     // $obat->updated_at    = date('y-m-d H:i:s');
    //     $obat->save();

    //     return redirect('/masuk')->with('success', 'Data Berhasil Diubah');
    // }



    public function hapus_masuk($id)
    {
        $row = Obat::find($id);
        $row->delete();
        return redirect('/masuk')->with('success', 'Data Berhasil Dihapus');
    }
  
}
