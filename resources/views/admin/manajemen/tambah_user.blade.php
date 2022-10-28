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
              

                    <form method="POST" enctype="multipart/form-data" action="{{ url('/simpan_manajemen_user') }}">
                        @csrf 
                            <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text"  name="username"class="form-control" placeholder="Userama" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Lengkap</label>
                                <input type="text"  name="name"class="form-control" placeholder="Nama" required>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="email"  name="email"class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label>Level</label>
                                <select class="js-example-basic-single w-100 form-control" name="level" required>
                                    <option  value="" hidden>--Pilih Level--</option>                        
                                    <option value="admin">admin</option>
                                    <option value="dinas">dinas</option>
                                    <option value="gudang">gudang</option>
                                    <option value="puskesmas">puskesmas</option>
                                    
                                </select>
                            </div>   
                              <div class="form-group">
                                <label for="exampleInputEmail1">Sandi</label>
                                <input type="password"name="password"class="form-control" placeholder="Sandi" required>
                            </div>
                           
                            
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary mr-1"><i class="link-icon mr-3" data-feather="briefcase"></i>
                                Simpan Data</button>
                            <a href="/kategori" class="btn btn-danger"><i class="link-icon mr-1" data-feather="refresh-ccw"></i>Batalkan</a>
                        </div>    
                    </form>


                
            </div>
    
@endsection