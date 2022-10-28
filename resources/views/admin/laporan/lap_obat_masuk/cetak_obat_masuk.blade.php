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
                            <th>No.<br> Transaksi</th>
                            <th>Kategori</th>
                            <th>Satuan</th>
                            <th>Nama<br> Obat</th>
                            <th>No<br> Batch</th>   
                            <th>Stok<br> Masuk</th> 
                            <th>Stok<br> Awal</th>  
                            <th>Stok</th>   
                            <th>Tanggal<br> EXP</th> 
                            <th>Katerangan</th> 
                            {{--  <th>Created</th>                             --}}
                        </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($obat_masuk as  $row)                                 
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->kode_obat }}</td>
                                <td>{{ $row->nama_kategori }}</td>
                                <td>{{ $row->nama_satuan }}</td>
                                <td>{{ $row->nama_obat }}</td>
                                <td>{{ $row->no_batch }}</td>
                                <td>{{ $row->jumlah_masuk }}</td>
                                <td>{{ $row->stok_awal }}</td>
                                <td>{{ $row->stok }}</td>
                                <td>{{ date('d F Y', strtotime($row->tanggal_exp)) }}</td>
                                <td>{{ $row->keterangan }}</td>
                                {{--  <td>{{date('d F Y', strtotime($row->created_at)) }}</td>                                  --}}
                            </tr>          
                            @endforeach	
                            </tbody>
                         </table>
                     </div>
                      </div>
                    </div>
                </div>
                </div>
            </div>

    
@endsection