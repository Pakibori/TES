<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

use function Ramsey\Uuid\v1;

class ManajemenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manajemen()
    {
        $user = User::all();
        return view('admin.manajemen.manajemen',compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah_user()
    {
        $user = User::all();
        return view('admin.manajemen.tambah_user',compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan_manajemen_user(Request $request)
    {

         $data = User::create([
            'name'          => $request->name,
            'username'      => $request->username,
            'email'         => $request->email,
            'password'      => bcrypt($request->password),
            'level'         =>$request->level,
            // 'foto '         =>$request->foto,
            'created_at'     =>('y:m:d'),
            'updated_at'    =>('y:m:d'),


        ]);
        return redirect('/manajemen')->with('success','Data user berhasil ditambahkan');
    }
        // if($request->hasFile('foto')){
        // //     $request->file('foto')->move('gambar/', $request->file('foto')->getClientOriginalName());
        // //     $data->foto = $request->file('foto')->getClientOriginalName();

        //     $data->save();
        

      


      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_user($id)
    {
        $data = User ::find($id);
        return view('admin.manajemen.edit_user', compact('data'));
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_simpan_user(Request $request, $id)
    {
        $user = User::find($id);

        $user->name       =$request->name;
        $user->username   =$request->username;
        $user->email      =$request->email;
        $user->password   = bcrypt ($request->password);
        $user->level      =$request->level;
        $user->created_at = date('y:m:d');
        $user->updated_at = date('y:m:d');
       
        $user->save();
        return redirect('/manajemen')->with('success','Data user berhasil ditambahkan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus_user($id)
    {
        $user = User::fin($id);
        $user->delete();

        return redirect('/manajemen')->with('success','Data user berhasil ditambahkan');

    }
}
