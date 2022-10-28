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
                <h6 class="card-header" >Data Obat Masuk
                    <a href="/tambah_obat_masuk" class=" btn btn-primary float-lg-right">
                        <i class="link-icon" data-feather="plus"></i>
                        Tambah Transaksi
                    </a>
                </h6>
                
                <div class="card-body">
                    <button type="button"class="btn btn-info  float-lg-right">
                        <i class="link-icon" data-feather="printer"></i>
                     </button>
                     <button type="button"class="btn btn-danger float-lg-right">
                        <i class="link-icon" data-feather="file"></i>
                     </button>
                     <button type="button"class="btn btn-primary float-lg-right mb-2">
                        <i class="link-icon" data-feather="file-text"></i>
                     </button>
                   
                    <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th>No.Transaksi</th>
                            <th>Kode Obat</th>
                            <th>Nama Obat</th>
                            <th>Stok Awal</th>
                            <th>Jumlah Masuk</th>
                            <th>Total Stok</th>
                            <th>Tanggal EXP</th>
                     
                        </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($obat_masuk as  $row)                                 
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->kd_transaksi }}</td>
                                <td>{{ $row->kode_obat }}</td>
                                <td>{{ $row->nama_obat }}</td>
                                <td>{{ $row->stok_awal }}</td>
                                <td>{{ $row->jumlah_masuk }}</td>
                                <td>{{ $row->stok }}</td>
                                <td>{{ $row->tanggal_exp }}</td>
                             
                                                             
                            </tr>          
                            @endforeach	
                            </tbody>
                         </table>
                     </div>
                </div>
                </div>
            </div>

    
@endsection