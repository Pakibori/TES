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
                <h6 class="card-header">Tambah Obat 
                    <a href="/obat" class=" btn btn-primary float-right">
                        <i class="link-icon" data-feather="corner-up-left"></i>
                        Kembali
                    </a>
                </h6>
                <div class="card-body">
                        
                    
                        <form method="POST" enctype="multipart/form-data" action="{{ url('/obat_store') }}">
                            @csrf 
                            <div class="form-group">
                                <label for="exampleInputPassword1">Pilih Obat</label>
                                <select class="js-example-basic-single w-100 form-control" id="id_master" name="id_master" required>
                                    <option  value="" hidden>--Data Obat--</option>
                                    @foreach ($data as $data)    
                                    <option value="{{ $data->id }}">{{ $data->nama_obat }}</option>
                                    @endforeach
                                </select>
                            </div>
                           
                            <div class="form-group">
                                <label>Kategori</label>
                                <select class="js-example-basic-single w-100 form-control" name="id_kategori">
                                    <option  value="" hidden>--Pilih kategori--</option>
                                    @foreach ($kategori as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_kategori }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kode Lemari</label>
                                <input type="text" name="lemari" class="form-control"  placeholder="Lemari">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Kode Rak</label>
                                <input type="text" name="rak" class="form-control"  placeholder="Rak">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Stok Obat</label>
                                <input type="number" name="stok" class="form-control"  placeholder="Stck Awal">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Stok Awal</label>
                                <input type="number" name="stok_awal" class="form-control"  placeholder="Stck Awal">
                            </div>
                            
                            
                            <button type="submit" class="btn btn-primary mr-1"><i class="link-icon mr-3" data-feather="briefcase"></i>
                                Simpan Data</button>
                            <a href="/obat" class="btn btn-danger"><i class="link-icon mr-1" data-feather="refresh-ccw"></i>Batalkan</a>
                        </form>
                    

                </div>
            </div>
    
@endsection