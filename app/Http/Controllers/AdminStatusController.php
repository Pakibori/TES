<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\status;
use Faker\Core\Uuid;

class AdminStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function status()
    {   
        $data = Status::orderBy('id','asc')->get();
        return view('admin.status.status',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah_status()
    {
        return view('admin.status.tambah_status');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan_status(Request $request)
    {
        // $this-> validate($request,[
        //     'staus_admin'=>'required',
        //     'status_dinas'=> 'required',
        //     'status_gudang'=>'required',
        //     'status_puskesmas'=>'required'
        // ]);
        Status::create([
            'id'               =>$request->id,
            'status_admin'             => $request->status_admin,
            'status_gudang'             => $request->status_gudang,
            'status_dinas'             => $request->status_dinas,
            'status_puskesmas'             => $request->status_puskesmas,
            
            'created_at'              => date('Y-m-d H:i:s' ,($request->created_at)),
            'updated_at'              => date('Y-m-d H:i:s' ,($request->updated_at)),
        ]);
        return redirect('/status')->with('success','Data Status Berhasil ditambahkan');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_status($id)
    {
        $data  = status::find($id);

        return view('admin.status.edit_status' , compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_simpan_status(Request $request, $id)
    {
        $data = Status::find($id);
        $data->id            =$request->id;
        $data->status_admin      =$request->status_admin;
        $data->status_dinas      =$request->status_dinas;
        $data->status_gudang      =$request->status_gudang;
        $data->status_puskesmas      =$request->status_puskesmas;

        $data->updated_at    = date('Y-m-d H:i:s',($request->updated_at));
        $data->save();
        return redirect('/status')->with('success', 'Data Berhasil Diubah');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus_status($id)
    {
  
        $row = status::find($id);
        $row->delete();
        return redirect('/status')->with('success', 'Data Berhasil Dihapus');
    }
}
