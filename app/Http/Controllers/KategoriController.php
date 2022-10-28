<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

date_default_timezone_set('Asia/Jakarta');
class KategoriController extends Controller
{
    public function kategori()
    {
        
        $kategori = Kategori::all();
        return view('admin.kategori.kategori', compact('kategori'));
    }

    public function tambah_kategori()
    {
        
        return view('admin.kategori.tambah_kategori');
    }

    public function simpan_kategori(Request $request)
    {
       Kategori::create([
            
            'nama_kategori' => $request->nama_kategori,
            'nama_satuan' => $request->nama_satuan,
            'created_at'    =>  date('Y-m-d  H:i:s'),
            'updated_at'    =>  date('Y-m-d  H:i:s'),
        ]);
        return redirect('/kategori')->with('success', 'Data Berhasil disimpan');
      
       


    }
          
    public function edit_kategori($id)
    {
        $data = Kategori::find($id);
        return view('admin.kategori.edit_kategori', compact('data'));
        
    }

    public function edit_simpan_kategori(Request $request, $id)
    {
        $kategori = Kategori::find($id);
        $kategori->nama_kategori = $request->nama_kategori;
        $kategori->nama_satuan = $request->nama_satuan;
        $kategori->updated_at = date ('Y-m-d  H:i:s');
        $kategori->save(); 
        return redirect('/kategori')->with('success', 'Data Berhasil diubah');

    }


    public function hapus_kategori($id)
    {
        $kategori = Kategori::find($id);
        $kategori->delete();
        return redirect('/kategori')->with('success','Data Berhasil dihapus');
    }
}
