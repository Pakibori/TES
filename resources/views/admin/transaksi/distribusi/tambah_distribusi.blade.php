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
        <div class="col-md-10">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Data  Master Obat!</strong> Silahkan tambah data!
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
      </div>
    </div>
    </div>

    <div class="row">
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">                              
                <h6 class="card-header">Tambah Kategori </h6> 
              

                    <form method="POST" enctype="multipart/form-data" action="{{ url('/simpan_distribusi') }}">
                        @csrf 
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Obat</label>
                                    <select class="js-example-basic-single w-100 form-control" name="id_master" id="id_master">
                                        <option  value="" hidden>--Pilih kategori--</option>
                                        @foreach ($master as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_obat }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Nama Puskesmas</label>
                                    <select class="js-example-basic-single w-100 form-control" name="id_user">
                                        <option  value="" hidden>--Pilih kategori--</option>
                                        @foreach ($user as $data)
                                        <option value="{{ $data->id }}">{{ $data->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Jumlah Distribusi</label>
                                <input type="number"  name="jumlah_distribusi"class="form-control" placeholder=" Jumlah Distribusi" required>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Tanggal Distribusi</label>
                                        <input type="date"  name="tanggal_distribusi"class="form-control" placeholder="" required>
                                    </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tanggal kadaluwarsa</label>
                                            <input type="date"  name="tanggal_exp_date"class="form-control" placeholder="" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea1">Keterangan</label>
                                    <textarea class="form-control" name="keterangan_distribusi" id="exampleFormControlTextarea1" rows="8" required></textarea>
                                </div>                          
                            
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-1"><i class="link-icon mr-3" data-feather="briefcase"></i>
                                Simpan Data</button>
                            <a href="/distribusi" class="btn btn-danger"><i class="link-icon mr-1" data-feather="refresh-ccw"></i>Batalkan</a>
                        </div>    
                    </form>
                
            </div>

@endsection