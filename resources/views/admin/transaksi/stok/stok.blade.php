@extends('layouts.main')

@section('content')
<div class="page-content">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb bg-inverse-primary">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Data </a></li>
          <li class="breadcrumb-item active" aria-current="page">Data Stok Obat</li>
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
                <h6 class="card-header">Data Stok Obat</h6>
                <div class="card-body">   
                    <div class="kotak-cetak mb-4">
                        <button class=" button-print btn btn-primary"> <i class="link-icon mr-2" data-feather="printer"></i>Print</button>
                        <button class=" button-pdf btn btn-danger "> <i class="link-icon mr-2" data-feather="refresh-cw"></i>Pdf</button>
                        <button class=" button-exel btn btn-warning"> <i class="link-icon mr-2" data-feather="file-text"></i>Export Exel</button>
                    </div>                           
                    <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th>Kode Obat</th>
                            <th>Kategori</th>
                            <th>Nama Obat</th>
                            <th>No Batch</th>   
                            <th>Jumlah Masuk</th>    
                            <th>Stok</th>   
                            <th>Tanggal EXP</th> 
                            <th>Created</th>                           
                        </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($obat_masuk as  $row)                                 
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->kode_obat }}</td>
                                <td>{{ $row->nama_kategori }}</td>
                                <td>{{ $row->nama_obat }}</td>
                                <td>{{ $row->no_batch }}</td>
                                <td>{{ $row->jumlah_masuk }}</td>
                                <td>{{ $row->stok }}</td>
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
            </div>

    
@endsection