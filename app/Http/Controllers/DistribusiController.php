<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\distribusi;
use App\Models\obat;
use App\Models\Master;
use Illuminate\Support\Facades\DB;

use App\Models\User;

class DistribusiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function distribusi()
    {
        // $distribusi = Distribusi::join('users','users.id','=','distribusi.id_user')
        //             ->select('distribusi.*','users.name','users.level')
        //             ->get();
        // $users =  User::all();
        // return view('admin.transaksi.distribusi.distribusi', compact('distribusi','users'));
       
        $distribusi = DB::table('distribusi')
        ->join('users', 'users.id', '=', 'distribusi.id_user')
        ->join('master', 'master.id', '=', 'distribusi.id_master')
        ->select('distribusi.*', 'users.name','master.nama_obat','master.kode_obat','master.no_obat')
        ->get();
        $users = User::all();
        $master = Master::all();
         return view('admin.transaksi.distribusi.distribusi', compact('distribusi','users','master'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah_distribusi()
    {
        $distribusi = Distribusi::all();
        $master = Master::all();
        $user = User::all();
        return view('admin.transaksi.distribusi.tambah_distribusi', compact('distribusi','master','user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan_distribusi(Request $request)
    {
            Distribusi::create([
                'id_master'                  =>$request->id_master,
                'id_user'                    =>$request->id_user,
                'jumlah_distribusi'          =>$request->jumlah_distribusi,
                'tanggal_distribusi'         =>$request->tanggal_distribusi,
                'keterangan_distribusi'      =>$request->keterangan_distribusi,
                'tanggal_exp_date'           =>$request->tanggal_exp_date,
                'created_at'                 =>date('Y-m-d H:i:s', ($request->create_at)),
                'updated_at'                 =>date('Y-m-d H:i:s', ($request->updated_at)),
            ]);
            return redirect('/distribusi')->with('success','Data berhasil ditambahkan');

    }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_distribusi($id)
    {

        $distribusi = Distribusi::find($id);
        $user = User::all();
        $master = Master::all();
        
        return view('admin.transaksi.distribusi.edit_distribusi',compact('distribusi','user','master'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_simpan_distribusi(Request $request, $id)
    {
        $distribusi = Distribusi::find($id);

        $distribusi->id                        =$request->id;
        $distribusi->id_master                        =$request->id_master;
        $distribusi->id_user                        =$request->id_user;
        $distribusi->jumlah_distribusi              =$request->jumlah_distribusi;
        $distribusi->tanggal_distribusi             =$request->tanggal_distribusi;
        $distribusi->tanggal_exp_date               =$request->tanggal_exp_date;
        $distribusi->keterangan_distribusi          =$request->keterangan_distribusi;
        $distribusi->updated_at                     = date('Y-m-d H:i:s');
        $distribusi->save();

        return redirect('/distribusi')->with('success','Data berhasil diupdate');
    }   


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus_distribusi($id)
    {
        $row = distribusi::find($id);
        $row->delete();
        return redirect('/distribusi')->with('success', 'Data Berhasil Dihapus');
    }
}

