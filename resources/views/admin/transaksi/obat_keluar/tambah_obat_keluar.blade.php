@extends('layouts.main')

@section('content')
<div class="page-content">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-primary">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Data </a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Obat Masuk</li>
        </ol>
      </nav>
    

    <div class="row mt-3 mb-2">
        <div class="col-md-10">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Data  Master Obat!</strong> Silahkan tambah data!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div> 
         </div>
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">
                <h6 class="card-header">Tambah Obat masuk
            
                    <a href="/obat_masuk" class=" btn btn-primary float-right">
                        <i class="link-icon" data-feather="corner-up-left"></i>
                        Kembali
                    </a>
                </h6>
                <form method="POST" enctype="multipart/form-data" action="{{ url('/simpan_obat_keluar') }}">
                    @csrf
                    <div class="card-body">
                           
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kode Transaksi</label>
                                <input type="text" name="kd_transaksi_ok" class="form-control"  placeholder="Kode_Obat" required>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="js-example-basic-single w-100 form-control" name="id_master">
                                    <option  value="" hidden>--Pilih kategori--</option>
                                    @foreach ($master as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_obat }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="js-example-basic-single w-100 form-control" name="id_obat">
                                    <option  value="" hidden>--Pilih kategori--</option>
                                    @foreach ($obat as $data)
                                    <option value="{{ $data->id }}">{{ $data->stok_awal }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jumlah Masuk</label>
                                <input type="number"  name="jumlah_keluar"class="form-control" placeholder="Jumlah Masuk" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tanggal Kadaluwarsa</label>
                                <input type="date" name="tanggal_exp" class="form-control "  placeholder="" data-date-end-date="0d">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Keterangan</label>
                                <input type="text" name="keterangan" class="form-control"  placeholder="Keterangan" required>
                            </div>
                            
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-1"><i class="link-icon mr-3" data-feather="briefcase"></i>
                                Simpan Data</button>
                            <a href="/obat" class="btn btn-danger"><i class="link-icon mr-1" data-feather="refresh-ccw"></i>Batalkan</a>
                        </div>
                        </form>
                    
            </div>
    
@endsection