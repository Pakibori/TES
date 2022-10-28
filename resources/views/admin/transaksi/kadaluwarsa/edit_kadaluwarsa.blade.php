@extends('layouts.main')

@section('content')
<div class="page-content">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-primary">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Data </a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Master Obat Kadaluwarsa</li>
        </ol>
      </nav>
    <div class="row">
        <div class="col-md-10">
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                <strong>Data  Master kadaluwarsa!</strong> Silahkan tambah data!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
             </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-10 grid-margin stretch-card">
            <div class="card">                              
                <h6 class="card-header">Tambah kadaluwarsa </h6> 
              

                    <form method="POST" enctype="multipart/form-data" action="/edit_simpan_kadaluwarsa/{{ $kadaluwarsa->id }}">
                        @csrf 
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Kode Obat</label>
                                    <input type="text" value=" {{ $kadaluwarsa->kode_exp }} "name="kode_exp"class="form-control" placeholder="Kode EXP" required>
                                </div>
                                <div class="form-group">
                                    <label>Obat</label>
                                    <select class="js-example-basic-single w-100 form-control" name="id_master" 
                                    value="{{ $kadaluwarsa->id_master }}">
                                        <option  value="" hidden>--Pilih kategori--</option>
                                        @foreach ($master as $data)
                                        <option value="{{ $data->id }}">{{ $data->nama_obat }}</option>
                                        @endforeach
                                    </select>
                                </div>   
                               
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Tanggal Kadaluwarsa</label>
                                        <select class="js-example-basic-single w-100 form-control" name="id_obat_masuk" value="{{ $kadaluwarsa->id_obat_masuk }}">
                                            <option  value="" hidden>--Pilih Tanggal--</option>
                                            @foreach ($obat_masuk as $data)
                                            <option value="{{ $data->id }}">{{ $data->tanggal_exp }}</option>
                                            @endforeach
                                        </select>
                                    </div>  
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hari Tanggal</label>
                                        <input type="date" value="{{ $kadaluwarsa->tanggal_exp}}"  name="tanggal_exp"class="form-control" placeholder="" required>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Jumlah Kadaluwarsa</label>
                                        <input type="number" value="{{ $kadaluwarsa->jumlah }}" name="jumlah"class="form-control" placeholder="Jumlah" required>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Katerangan</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" value="{{ $kadaluwarsa->keterangan }}" name="keterangan" rows="8"></textarea>
                            </div>                          
                            
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-1"><i class="link-icon mr-3" data-feather="briefcase"></i>
                                Simpan Data</button>
                            <a href="/kadaluwarsa" class="btn btn-danger"><i class="link-icon mr-1" data-feather="refresh-ccw"></i>Batalkan</a>
                        </div>    
                    </form>
                
            </div>
    
@endsection