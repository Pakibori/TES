@extends('layouts.main')

@section('content')
<div class="page-content">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-primary">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Data </a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Obat Keluar</li>
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
                <h6 class="card-header">Data Obat Keluar
                    <a href="/tambah_obat_keluar" class=" btn btn-primary float-right">
                        <i class="link-icon" data-feather="plus"></i>
                        Tambah Obat Keluar
                    </a>
                </h6>
                
                <div class="card-body">                   
                    <button type="button"class=" btn btn-primary  float-right mb-5">
                        <i class="link-icon" data-feather="printer"></i> PRINT
                     </button>
                    
                     <button type="button"class="btn btn-primary float-right mb-5 mr-2">EXPORT EXEL
                        <i class="link-icon" data-feather="file-text"></i>
                     </button>
                     <button type="button"class="btn btn-danger float-right mb-5 mr-2">EXPORT PDF
                        <i class="link-icon" data-feather="file-text"></i>
                     </button>
                   
           
                   
                    <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th>Kode Transaksi</th>
                            <th>Kode Obat</th>
                            <th>Nama Obat</th>
                            <th>Jumlah<br> Keluar</th> 
                            <th>Stok</th>     
                            <th>Stok Awal</th>
                            <th>Tanggal EXP</th> 
                            <th>Created</th>                           
                        </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($obat_keluar as  $row)                                 
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->kd_transaksi_ok }}</td>
                                <td>{{ $row->kode_obat }}</td>
                                <td>{{ $row->nama_obat }}</td>     
                                <td>{{ $row->jumlah_keluar }}</td>
                                <td>{{ $row->stok }}</td>
                                <td>{{ $row->stok_awal }}</td>
                                <td>{{ $row->tanggal_exp }}</td>
                                <td>{{ $row->created_at }}</td>                                
                            </tr>          
                            @endforeach	
                            </tbody>
                         </table>
                     </div>
                   
                </div>
                </div>
            </div>

    
@endsection