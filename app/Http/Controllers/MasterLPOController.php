<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\status;
use App\Models\obat;
use App\Models\user;
use App\Models\lplpo;
use Illuminate\Support\Facades\DB;

class MasterLPOController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function validasi_lplpo()
    {
        
        $lplpo = DB::table('lplpo')
                ->join('obat','obat.id','=','lplpo.id_obat')
                ->join('pustu','pustu.id','=','lplpo.id_pustu')
                ->select('lplpo.*','obat.nama_obat','pustu.nama_pus','pustu.no_telp_pus',
                'alamat_pus')
                ->get();

        //    $status = DB::table('status')
        //         ->join('users','users.id','=','status.id_user')
        //         // ->join('lplpo','lplpo.id','=','status.id','status_puskesmas')
        //         ->select('status.*','users.name','users.email')
        //         ->get();
            $user =    user:: all();
        
        return view('puskesmas.valiidasi.validasi_lplpo' , compact('status','user'));
    }
     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function tambah_validasi(Request $request)

    {
        $status = Status::all();
        $user = User::all();
        return view('puskesmas.valiidasi.tambah_validasi' , compact('status','user'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan_validasi(Request $request)
    {
        status::create([
            'id_user'                  =>$request->id_user,
            'kode_lplpo'               =>$request->kode_lplpo,
            'bulan_laporan'            =>$request->bulan_laporan,
            'bulan_berikut'            =>$request->bulan_berikut,
            'status_puskesmas'         =>$request->status_puskesmas,
            'status_admin'             =>$request->status_admin,
            'status_kp_gudang'         =>$request->status_kp_gudang,

            'created_at'               =>date('Y-m-d H:i:s', ($request->create_at)),
            'updated_at'               =>date('Y-m-d H:i:s', ($request->updated_at)),


        ]);
        return redirect('/validasi_lplpo')->with('success','Data berhasil ditambahkan');

    }
     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function lihat_validasi($id)
    {   
        $status  = status::where('id','$id')->first();
        $user = User::all();
        $lplpo = lplpo::all();
        return view('puskesmas.valiidasi.lihat_validasi' , compact('status','user','lplpo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_validasi($id)
    {
        $data  = status::find($id);
        $user = User::all();
        $lplpo = lplpo::all();
        return view('puskesmas.valiidasi.edit_validasi' , compact('data','lplpo','user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_simpan_validasi(Request $request, $id)
    {
        
        $status = status::find($id);

        $status->id       =$request->id;
        $status->id_user   =$request->id_user;
        $status->kode_lplpo      =$request->kode_lplpo;
        $status->bulan_laporan    = $request->bulan_laporan;
        $status->bulan_berikut      =$request->bulan_berikut;
        $status->status_admin       =$request->status_admin;
        $status->status_puskesmas   =$request->status_puskesmas;
        $status->status_kp_gudang   = $request->status_kp_gudang;
        $status->created_at = date('y:m:d');
        $status->updated_at = date('y:m:d');
        $status->save();
        return redirect('/validasi_lplpo')->with('confim','Data berhasil ditambahkan');
    }



    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function lihat_status($id)
    {
        $status  = status::where('id','$id')->first();
        $user = User::all();
        $lplpo = lplpo::all();
        return view('puskesmas.valiidasi.lihat_status' , compact('status','user','lplpo'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus_validasi_lplpo($id)
    {
        $data  = status::find($id);
        $data->delete();
        return redirect('/validasi_lplpo')->with('success','Data Berhasil dihapus');
    }
}
