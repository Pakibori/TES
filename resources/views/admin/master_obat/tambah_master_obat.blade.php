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
                    <a href="/master_obat" class=" btn btn-primary float-right">
                        <i class="link-icon" data-feather="corner-up-left"></i>
                        Kembali
                    </a>
                 
                </h6>
                <div class="card-body">
                        

                        <form method="POST" enctype="multipart/form-data" action="{{ url('/simpan_master_obat') }}">
                            @csrf 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kode Obat</label>
                                <input type="text"  name="kode_obat"class="form-control" placeholder="Nama Obat" required>
                            </div>
                           
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nama Obat</label>
                                <input type="text" name="nama_obat" class="form-control"  placeholder="Stck Awal" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Nomor Batch Obat</label>
                                <input type="text" name="no_obat" class="form-control"  placeholder="Stck Awal" required>
                            </div>
                                             
                            <button type="submit" class="btn btn-primary mr-1"><i class="link-icon mr-3" data-feather="briefcase"></i>
                                Simpan Data</button>
                            <a href="/obat" class="btn btn-danger"><i class="link-icon mr-1" data-feather="refresh-ccw"></i>Batalkan</a>
                        </form>
                    

                </div>
            </div>
    
@endsection