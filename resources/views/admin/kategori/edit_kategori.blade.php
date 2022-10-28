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
      

    <div class="row">
        <div class="col-md-10 mt-4">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Data  Master Obat!</strong> Silahkan tambah data!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
        <div class="col-md-10 grid-margin stretch-card">
            
            <div class="card">                              
                <h6 class="card-header">Tambah Kategori </h6> 
                <div class="card-body">

                        <form method="POST" enctype="multipart/form-data" action="/edit_simpan_kategori/{{ $data->id }}">
                            @csrf 
                            <input type="hidden" value="{{ $data->id}}" name="id" required>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Kategori</label>
                                <input type="text" value="{{ $data->nama_kategori }}"  name="nama_kategori"class="form-control" placeholder="Nama Kategori">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Kategori</label>
                                <input type="text" value="{{ $data->nama_satuan }}"  name="nama_satuan"class="form-control" placeholder="Nama Kategori">
                            </div>
                          
                          
                            
                            <button type="submit" class="btn btn-primary mr-1"><i class="link-icon mr-3" data-feather="briefcase"></i>
                                Simpan Data</button>
                            <a href="/kategori" class="btn btn-danger"><i class="link-icon mr-1" data-feather="refresh-ccw"></i>Batalkan</a>
                        </form>


                </div>
            </div>
    
@endsection