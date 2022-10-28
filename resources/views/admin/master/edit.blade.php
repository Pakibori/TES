@extends('layouts.main')

@section('content')
<div class="page-content">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-primary">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Data </a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Master Obat</li>
        </ol>
      </nav>
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Data  Master Obat!</strong> Silahkan tambah data!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <div class="row">
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">                              
                <h6 class="card-header">Edit Data Obat </h6> 
                    <form method="POST" enctype="multipart/form-data" action="/edit_simpan_obat/{{ $data->id }}">
                            @csrf 
                         <div class="card-body">
                            <input type="hidden" value="{{ $data->id }}"  name="id" required>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Pilih Obat</label>
                                <select class="js-example-basic-single w-100 form-control" name="id_master" id="id_master">
                                    <option  value="" hidden>--Pilih Obat--</option>     
                                    @foreach ($master as $data)  
                                    <option value="{{ $data->id }}">{{ $data->nama_obat }}</option>                                     
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="js-example-basic-single w-100 form-control" id="nama_kategori" name="id_kategori">
                                    <option  value="" hidden>--Pilih Kategori--</option>  
                                    @foreach ($kategori as $d)
                                    <option value="{{ $d->id }}">{{ $d->nama_kategori }}</option> 
                                    @endforeach                             
                                </select>
                            </div> 
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kode Lemari</label>
                                <input type="text" name="lemari" class="form-control"  value="{{ $data->lemari }}" placeholder="Kode Lemari" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kode Rak</label>
                                <input type="text" name="rak" class="form-control" value=" {{ $data->rak  }}" placeholder="Kode Rak" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jumlah Stok Obat</label>
                                <input type="number" value="{{ $data->stok }}"  name="stok"class="form-control" placeholder="Stok Awal" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jumlah Stok Awal</label>
                                <input type="number" value="{{ $data->stok_awal }}"  name="stok_awal"class="form-control" placeholder="Stok Awal" required>
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