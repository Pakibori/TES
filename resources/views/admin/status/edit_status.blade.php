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
                <h6 class="card-header">Tambah Status
                    <a href="/status" class=" btn btn-primary float-right">
                        <i class="link-icon" data-feather="corner-up-left"></i>
                        Kembali
                    </a>
                 
                </h6>
                <div class="card-body">
                        

                        <form method="POST" enctype="multipart/form-data" action="/edit_simpan_status/{{ $data->id }}">
                            @csrf 
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status Admin</label>
                                <input type="text"  name="status_admin"class="form-control" value="{{ $data->status_admin }}" placeholder="Status Admin" required>
                            </div>
                           
                            <div class="form-group">
                                <label for="exampleInputPassword1">Status Dinas</label>
                                <input type="text" name="status_dinas" class="form-control" value="{{ $data->status_dinas }}"  placeholder="Status Kepala dinas" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Status Gudang</label>
                                <input type="text" name="status_gudang" class="form-control" value="{{ $data->status_dinas }}" placeholder="Status kepala gudang" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Status Puskesmas Pustu</label>
                                <input type="text" name="status_puskesmas" class="form-control" value="{{ $data->status_puskesmas }}"  placeholder="Status Puksesmas" required>
                            </div>
                                             
                            <button type="submit" class="btn btn-primary mr-1"><i class="link-icon mr-3" data-feather="briefcase"></i>
                                Simpan Data</button>
                            <a href="/status" class="btn btn-danger"><i class="link-icon mr-1" data-feather="refresh-ccw"></i>Batalkan</a>
                        </form>
                    

                </div>
            </div>
    
@endsection