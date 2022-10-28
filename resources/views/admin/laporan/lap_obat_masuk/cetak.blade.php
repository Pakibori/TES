@extends('layouts.main')

@section('content')
<div class="page-content">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-primary">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Data </a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Obat Masuk</li>
        </ol>
      </nav>
      @if($message= Session::get('success'))
      <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ $message }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>   
      @endif
     
   

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <H5 class="card-header">Laporan  Obat Masuk</H5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="span">Tanggal Awal</label>
                                <input type="date" class="form-control" name="tanggal_awal" id="tanggal_awal">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="label">Tanggal Akhir</label>
                                <input type="date" class="form-control" name="tanggal_akhir" id="tanggal_akhir">
                            </div>
                            <div class="from-group">                
                        </div>
                        </div>
                    </div>     
                    <a href=""onclick="this.href='/cetak_data/'+document.getElemenById('tanggal_awal').value +
                    '/' + document.getElemenById('tanggal_akhir').value" target="_blank" class="btn btn-primary float-right"><i class="link-arrow" data-feather="printer"></i> CETAK LAPORAN TRANSAKSI OBAT MASUK</a>                         
                </div>
               
            </div>
             
             </div>
           
        </div>
     </div>

    
@endsection