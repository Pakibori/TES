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
                <h6 class="card-header">Tambah Kategori </h6> 
              

                    <form method="POST" enctype="multipart/form-data" action="/edit_simpan_pustu/{{ $data->id }}">
                        @csrf 
                            <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Puskesmas atau Pustu</label>
                                <input type="text" value="{{ $data->nama_pus }}" name="nama_pus"class="form-control" placeholder="Nama Puskesmas atau Pustu" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email Puskesmas atau Pustu</label>
                                <input type="email"  value="{{ $data->email_pus }}" name="email_pus"class="form-control" placeholder="Email Puskesmas atau Pustu" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Alamat Puskesmas atau Pustu</label>
                                <input type="text" value="{{ $data->alamat_pus }}"  name="alamat_pus"class="form-control" placeholder="Alamat Puskesmas atau Pustu" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">No. Telp Puskesmas atau Pustu</label>
                                <input type="number" value="{{ $data->no_telp_pus }}" name="no_telp_pus"class="form-control" placeholder="No Telp Puskesmas atau Pustu" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Kepala Puskesmas atau Pustu</label>
                                <input type="text"value="{{ $data->kepala_pus }}"  name="kepala_pus"class="form-control" placeholder="Nama kepala Pustukesmas atau Pustu" required>
                            </div>                          
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-1"><i class="link-icon mr-3" data-feather="briefcase"></i>
                                Simpan Data</button>
                            <a href="/pustu" class="btn btn-danger"><i class="link-icon mr-1" data-feather="refresh-ccw"></i>Batalkan</a>
                        </div>    
                    </form>         
            </div>
@endsection