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
    <h6 class="card-title">Data STATUS KONFIRMASI
        <a href="/tambah_status" class="btn btn-primary float-right mb-5"><i class="link-icon" data-feather="plus"></i>Tambah Data</a>
    </h6>
  
    <div class="table-responsive">
    <table id="dataTableExample" class="table">
        <thead>
        <tr>
            <th width="4%">No</th>
            <th>Status Admin</th>
            <th>Status Dinas</th>
            <th>Status Gudang</th>
            <th>Puskesmas atau Pustu</th>
            <th width="10%">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach ($data as  $row)  
        <tr>
            <td>{{ $no++ }}</td>
            <td><span  class="badge badge-pill badge-danger p-2">{{ $row->status_admin }}</span></td>
            <td><span  class="badge badge-pill badge-success p-2">{{ $row->status_dinas }}</span></td>
            <td>
                <span class="badge badge-pill badge-primary p-2">{{ $row->status_gudang }}</span>
            </td>
            <td><span  class="badge badge-pill badge-warning p-2">{{ $row->status_puskesmas }}</span></td>
         
            <td>
                <a href="edit_status/{{ $row->id }}/edit_status" class="btn btn-xs float-right btn-primary"><i class="fa fa-edit"></i></a>
                <form action="/hapus_status/{{ $row->id }}" method="post">
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