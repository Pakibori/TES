<?php

use App\Http\Controllers\AdminLaporanObatMasukController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\GudangController;
use App\Http\Controllers\DinasController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PuskesmasController;
use App\Http\Controllers\ManajemenController;
use App\Http\Controllers\ObatMasukController;
use App\Http\Controllers\ObatKeluarController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\AdminLPLPOController;
use App\Http\Controllers\AdminObatMasterController;
use App\Http\Controllers\AdminStatusController;
use App\Http\Controllers\PustuController;
use App\Http\Controllers\DistribusiController;
use App\Http\Controllers\KadaluwarsaController;
use App\Http\Controllers\PuskesmasLaporanController;
use App\Http\Controllers\PuskesmasLPLPOController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




    Route::get('/',[LoginController::class, 'login']);
    Route::post('/proses_login',[LoginController::class, 'proses_login']);
    Route::get('/logout',[LoginController::class, 'logout']);
    
    Route::group(['middleware'=>['auth']], function(){

        Route::group(['middleware'=> ['cek_login:admin']], function(){
            Route::get('/home',[HomeController::class, 'home']);
            Route::get('/manajemen',[ManajemenController::class,'manajemen']);
            Route::get('/tambah_user',[ManajemenController::class,'tambah_user']);
            Route::post('/simpan_manajemen_user',[ManajemenController::class,'simpan_manajemen_user']);
            Route::get('/edit_user/{id}/edit_user',[ManajemenController::class,'edit_user']);
            Route::post('/edit_simpan_user/{id}',[ManajemenController::class,'edit_simpan_user']);
            Route::get('/manajemen/{id}/hapus_user',[ManajemenController::class,'Hapus_user']);


            Route::get('/obat',[ObatController::class, 'obat']);
            Route::get('/tambah',[ObatController::class, 'tambah']);
            Route::post('/obat_store',[ObatController::class, 'obat_store']);
            Route::get('/edit/{id}/edit',[ObatController::class, 'edit']);
            Route::post('/edit_simpan_obat/{id}',[ObatController::class, 'edit_simpan_obat']);
            Route::delete('/obat/{id}',[ObatController::class, 'obat_hapus']);


            Route::get('/kategori',[KategoriController::class,'kategori']);
            Route::get('/tambah_kategori',[KategoriController::class,'tambah_kategori']);
            Route::post('/simpan_kategori',[KategoriController::class,'simpan_kategori']);
            Route::get('/edit_kategori/{id}/edit_kategori',[KategoriController::class,'edit_kategori']);
            Route::post('/edit_simpan_kategori/{id}',[KategoriController::class,'edit_simpan_kategori']);
            Route::delete('/hapus_kategori/{id}',[KategoriController::class,'hapus_kategori']);

            Route::get('/master_obat',[AdminObatMasterController::class,'master_obat']);
            Route::get('/tambah_master_obat',[AdminObatMasterController::class,'tambah_master_obat']);
            Route::post('/simpan_master_obat',[AdminObatMasterController::class,'simpan_master_obat']);
            Route::get('/edit_master_obat/{id}/edit_master_obat',[AdminObatMasterController::class,'edit_master_obat']);
            Route::post('/edit_simpan_master_obat/{id}',[AdminObatMasterController::class,'edit_simpan_master_obat']);
            Route::delete('/hapus_master_obat/{id}',[AdminObatMasterController::class,'hapus_master_obat']);



            Route::get('/obat_masuk',[ObatMasukController::class,'obat_masuk']);
            Route::get('/tambah_obat_masuk',[ObatMasukController::class,'tambah_obat_masuk']);
            Route::post('simpan_obat_masuk',[ObatMasukController::class,'simpan_obat_masuk']);

            Route::get('/stok',[StokController::class,'stok']);

            Route::get('/obat_keluar',[ObatKeluarController::class,'obat_keluar']);
            Route::get('/tambah_obat_keluar',[ObatKeluarController::class,'tambah_obat_keluar']);
            Route::post('/simpan_obat_keluar',[ObatKeluarController::class,'simpan_obat_keluar']);


            Route::get('/distribusi',[DistribusiController::class,'distribusi']);
            Route::get('/tambah_distribusi',[DistribusiController::class,'tambah_distribusi']);
            Route::post('/simpan_distribusi',[DistribusiController::class,'simpan_distribusi']);
            Route::get('/edit_distribusi/{id}/edit_distribusi',[DistribusiController::class,'edit_distribusi']);
            Route::post('/edit_simpan_distribusi/{id}',[DistribusiController::class,'edit_simpan_distribusi']);
            Route::delete('/hapus_distribusi/{id}',[DistribusiController::class,'hapus_distribusi']);


            Route::get('/kadaluwarsa',[KadaluwarsaController::class,'kadaluwarsa']);
            Route::get('/tambah_kadaluwarsa',[KadaluwarsaController::class,'tambah_kadaluwarsa']);
            Route::post('/simpan_kadaluwarsa',[KadaluwarsaController::class,'simpan_kadaluwarsa']);
            Route::get('/edit_kadaluwarsa/{id}/edit_kadaluwarsa',[KadaluwarsaController::class,'edit_kadaluwarsa']);
            Route::post('/edit_simpan_kadaluwarsa/{id}',[KadaluwarsaController::class,'edit_simpan_kadaluwarsa']);
            Route::delete('/hapus_kadaluwarsa/{id}',[KadaluwarsaController::class,'hapus_kadaluwarsa']);

            // Route::get('/lplpo',[LPLPOController::class,'lplpo']);
            // Route::get('/lihat_lplpo',[LPLPOController::class,'lihat_lplpo']);

            Route::get('/list_lplpo',[AdminLPLPOController::class,'admin_lplpo']);

            Route::get('/status',[AdminStatusController::class,'status']);
            Route::get('/tambah_status',[AdminStatusController::class,'tambah_status']);
            Route::post('/simpan_status',[AdminStatusController::class,'simpan_status']);
            Route::get('/edit_status/{id}/edit_status',[AdminStatusController::class,'edit_status']);
            Route::post('/edit_simpan_status/{id}',[AdminStatusController::class,'edit_simpan_status']);
            Route::delete('/hapus_status/{id}',[AdminStatusController::class,'hapus_status']);








            Route::get('/pustu',[PustuController::class,'pustu']);
            Route::get('/tambah_pustu',[PustuController::class,'tambah_pustu']);
            Route::post('/simpan_pustu',[PustuController::class,'simpan_pustu']);
            Route::get('/edit_pustu/{id}/edit_pustu',[PustuController::class,'edit_pustu']);
            Route::post('/edit_simpan_pustu/{id}/',[PustuController::class,'edit_simpan_pustu']);
            Route::get('/pustu/{id}/hapus_pustu',[PustuController::class,'hapus_pustu']);


            //LAPORAN OBAT ADMIN GUDANG FAARMASI
            
            Route::get('/cetak',[ObatMasukController::class,'cetak']);
            Route::get('/cetak_obat_masuk',[ObatMasukController::class,'cetak_obat_masuk']);
            Route::get('/print/{tanggal_awal}/{tanggal_akhir}',[ObatMasukController::class,'print']);
        
        });





            
        Route::group(['middleware'=> ['cek_login:dinas']], function(){
            Route::get('/dinas',[DinasController::class, 'dinas']);


        });







            Route::group(['middleware'=> ['cek_login:gudang']], function(){
                Route::get('/gudang',[GudangController::class, 'gudang']);
    
    
            });
    



            Route::group(['middleware'=> ['cek_login:puskesmas']], function(){
                Route::get('/puskesmas',[PuskesmasController::class, 'puskesmas']);
                Route::get('/masuk',[PuskesmasController::class, 'masuk']);
                Route::get('/tambah_masuk',[PuskesmasController::class, 'tambah_masuk']);
                Route::post('/simpan_masuk',[PuskesmasController::class, 'simpan_masuk']);
                Route::get('/edit_masuk/{id}/edit_masuk',[PuskesmasController::class, 'edit_masuk']);
                Route::post('/simpan_masuk_edit/{id}',[PuskesmasController::class, 'simpan_masuk_edit']);
                Route::delete('/masuk/{id}/',[PuskesmasController::class, 'hapus_masuk']);

                Route::get('/lplpo',[PuskesmasLPLPOController::class,'lplpo']);
                Route::get('/tambah_lplpo',[PuskesmasLPLPOController::class,'tambah_lplpo']);
                Route::post('/simpan_data_lplpo',[PuskesmasLPLPOController::class ,'simpan_data_lplpo']);
                Route::get('/edit_lplpo/{id}/edit_lplpo',[PuskesmasLPLPOController::class,'edit_lplpo']);
                Route::post('/edit_simpan_lplpo/{di}',[PuskesmasLPLPOController::class,'edit_simpan_lplpo']);
                Route::delete('/hapus_lplpo/{id}',[PuskesmasLPLPOController::class,'hapus_lplpo']);
                Route::get('/lihat_lplpo',[PuskesmasLPLPOController::class,'lihat_lplpo']);
                Route::get('/laporan',[PuskesmasLPLPOController::class,'laporan']);
                Route::get('/laporan_filter' ,[PuskesmasLPLPOController::class,'laporan_filter']);

                //laporan Puskesmas
                Route::get('/cetak_laporan_lplpo',[PuskesmasLaporanController::class,'cetak_laporan_lplpo']);
                Route::get('/cetak_data_filter',[PuskesmasLaporanController::class,'cetak_data_filter']);


            




            });
      
    });
