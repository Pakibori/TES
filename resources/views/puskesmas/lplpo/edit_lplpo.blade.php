@extends('layouts.main')

@section('content')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
    <h6 class="card-header">Tambah Data LPLPO
        <a href="/lplpo" class="btn btn-danger float-lg-right">  <i class="link-icon" data-feather="corner-up-left"></i>Tambah Data LPLPO</a>

    </h6>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="/edit_simpan_lplpo/{{ $puskesmas_lplpo->id }}">
            @csrf 
            <input type="hidden" name="id" value="{{ $puskesmas_lplpo->id }}">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Kode LPLPO</label>
                        <input type="text" name="kode_lplpo"  class="form-control" value="{{ $puskesmas_lplpo->kode_lplpo }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Pilih Obat </label>
                    <select name="id_master" id="id_master" class="js-example-basic-single w-100"  value="{{ $puskesmas_lplpo->id_master }}">
                        <option value="" hidden>--Pilih Obat--</option>
                        @foreach ($master as $data )    
                        <option value="{{ $data->id }}">{{ $data->nama_obat }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Kategori</label>
                    <select name="id_kategori" id="id_kategori" class="js-example-basic-single w-100">
                        <option value="" hidden>--Pilih Obat--</option>
                        @foreach ($kategori as $data )    
                        <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                        @endforeach
                    </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Penerimaan Obat </label>
                        <input type="number"  name="penerimaan" class="form-control" placeholder="Kode LPLPO"  value="{{ $puskesmas_lplpo->penerimaan }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Persediaan Obat </label>
                        <input type="number"  name="persediaan" class="form-control" placeholder="Kode LPLPO"  value="{{ $puskesmas_lplpo->persediaan }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Pemakaian Obat </label>
                        <input type="number"  name="pemakaian" class="form-control" placeholder="pemakaian"  value="{{ $puskesmas_lplpo->pemakaian }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Sisa Stok Obat </label>
                        <input type="number"  name="sisa_stok" class="form-control" placeholder="pemakaian"  value="{{ $puskesmas_lplpo->sisa_stok }}">
                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Stok Opname </label>
                        <input type="number"  name="stok_opname" class="form-control" placeholder="pemakaian"  value="{{ $puskesmas_lplpo->stok_opname }}">
                    </div>
                </div>
               
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Pemberian </label>
                        <input type="number"  name="pemberian" class="form-control" placeholder="Pemberian"  value="{{ $puskesmas_lplpo->pemberian }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Permintaan Obat </label>
                        <input type="number"  name="permintaan" class="form-control" placeholder="Permintaan" value="{{ $puskesmas_lplpo->permintaan }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Status </label>
                        <input type="text"  name="status" class="form-control" placeholder="Status"  value="{{ $puskesmas_lplpo->status }}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="">Keterangan </label>
                        <input type="text"  name="keterangan" class="form-control" placeholder="Keterangan"  value="{{ $puskesmas_lplpo->keterangan }}">
                    </div>
                </div> 

            </div>
             <button class="btn btn-primary float-right mt-3"type="submit">   <i class="link-icon" data-feather="user"></i>Simpan Data</button>
        </form>
        

    
    </div>
</div>
    
@endsection