@extends('layouts.main')

@section('content')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
    
<div class="card-body">
    <h6 class="card-title">Data Master Obat
        <a href="/tambah_master_obat" class="btn btn-primary float-right mb-5"><i class="link-icon" data-feather="plus"></i>Tambah Data</a>
    </h6>
  
    <div class="table-responsive">
    <table id="dataTableExample" class="table">
        <thead>
        <tr>
            <th width="4%">No</th>
            <th>Nama Obat</th>
            <th>Nama Obat</th>
            <th>Nomor Batch Obat</th>
            <th>Waktu Create</th>
            <th>Waktu Update</th>
            <th width="10%">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach ($data as  $row)  
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->kode_obat }}</td>
            <td>{{ $row->nama_obat }}</td>
            <td>{{ $row->no_obat }}</td>
            <td>{{ $row->created_at->isoFormat('dddd, D MMMM Y') }}</td>
            <td>{{ $row->updated_at->isoFormat('dddd, D MMMM Y') }}</td>
            <td>
                <a href="edit_master_obat/{{ $row->id }}/edit_master_obat" class="btn btn-xs float-right btn-primary"><i class="fa fa-edit"></i></a>
                <form action="/hapus_master_obat/{{ $row->id }}" method="post">
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
    @include('sweetalert::alert')

</div>
</div>
    
@endsection