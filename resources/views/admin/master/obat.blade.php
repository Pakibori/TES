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
                <h6 class="card-header">Data Table
                    <a href="" class=" btn btn-success float-right"><i class="link-icon" data-feather="refresh-ccw"></i>
                        Refresh
                    </a>
                    <a href="/tambah" class=" btn btn-primary float-right"><i class="link-icon" data-feather="folder-plus"></i>
                        Tambah Obat
                    </a>
                   
                </h6>
                <div class="card-body">
                   
           
                   
                    <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th>Kode Obat</th>
                            <th>Nama Obat</th>
                            <th>Kategori</th>
                            <th>Satuan</th>
                            <th>No Batch</th>
                            <th>Kode Lamari</th>
                            <th>Kode Rak</th>
                            <th>Stok Obat</th>   
                            <th>Stok Awal</th>   
                            <th width="12%">Aksi</th>
                           
                        </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($obat as  $row)                                 
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $row->kode_obat }}</td>
                                <td>{{ $row->nama_obat }}</td>
                                <td>{{ $row->nama_kategori }}</td>
                                <td>{{ $row->nama_satuan }}</td>
                                <td>{{ $row->no_obat}}</td>
                                <td>{{ $row->lemari}}</td>
                                <td>{{ $row->rak}}</td>
                                <td>{{ $row->stok}}</td>
                                <td>{{ $row->stok_awal}}</td>                
                                <td>
                                    <a href="edit/{{ $row->id }}/edit" class="btn btn-xs float-right btn-outline-warning btn-primary"><i class="fa fa-edit"></i></a>
                                    <form action="/obat/{{ $row->id }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-xs float-right" value="delete"><i class="fa fa-trash"></i>
                                    </form>
                            </td>
                           
                        </tr>          
                        @endforeach	
                        </tbody>
                    </table>
                </div>
                </div>
                </div>
            </div>

    
@endsection