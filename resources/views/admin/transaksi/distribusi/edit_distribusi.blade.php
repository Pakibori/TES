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

                        <form method="POST" enctype="multipart/form-data" action="/edit_simpan_distribusi/{{ $distribusi->id }}">
                            @csrf 
                            <input type="hidden" value="{{ $distribusi->id}}" name="id" required>
                            
                            <div class="form-group">
                                <label>Obat</label>
                                <select class="js-example-basic-single w-100 form-control" name="id_master" value="{{ $distribusi->id_master }}">
                                    <option  value="" hidden>--Pilih kategori--</option>
                                    @foreach ($master as $data)
                                    <option value="{{ $data->id }}">{{ $data->nama_obat }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="form-group">
                                <label>Nama Puskesmas</label>
                                <select class="js-example-basic-single w-100 form-control" name="id_user" value="$distribusi->id_user">
                                    <option  value="" hidden>--Pilih kategori--</option>
                                    @foreach ($user as $data)
                                    <option value="{{ $data->id }}">{{ $data->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jumlah Distribusi</label>
                                <input type="number" value="{{ $distribusi->jumlah_distribusi }}"  name="jumlah_distribusi"class="form-control" placeholder="Nama Kategori">
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hari Tanggal</label>
                                        <input type="date" value="{{ $distribusi->tanggal_distribusi }}"  name="tanggal_distribusi"class="form-control" placeholder="Nama Kategori">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Kadaluwarsa</label>
                                        <input type="date" value="{{ $distribusi->tanggal_exp_date }}"  name="tanggal_exp_date"class="form-control" placeholder="Nama Kategori">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Keterangan</label>
                                <textarea class="form-control" value="{{ $distribusi->keterangan_distribusi }}"name="keterangan_distribusi" rows="5" placeholder="Keterangan ..."></textarea>
                            </div>
                          
                          
                            
                            <button type="submit" class="btn btn-primary mr-1"><i class="link-icon mr-3" data-feather="briefcase"></i>
                                Simpan Data</button>
                            <a href="/distribusi" class="btn btn-danger"><i class="link-icon mr-1" data-feather="refresh-ccw"></i>Batalkan</a>
                        </form>


                </div>
            </div>
    
@endsection