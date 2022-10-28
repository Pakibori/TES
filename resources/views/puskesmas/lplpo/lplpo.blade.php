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
    <h6 class="card-header">Tambah Data LPLPO
        <a href="/tambah_lplpo" class="btn btn-primary float-lg-right">  <i class="link-icon" data-feather="plus"></i>Tambah Data LPLPO</a>

    </h6>
<div class="card-body">

    <div class="table-responsive">
        <table id="dataTableExample" class="table">
            <thead>
            <tr>
                <th width="2%">No</th>
                <th>Kode LPLPO</th>
                <th>Status</th>
                <th>Created</th>
                <th width="15%">Aksi</th>
            </tr>
            </thead>
            
            <tbody>
                @php $no=1; @endphp
                @foreach ($puskesmas_lplpo as  $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->kode_lplpo }}</td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->created_at}}</td>
                <td>
                    <a href="/edit_lplpo/{{ $data->id }}/edit_lplpo" class="float-right  btn-xs btn btn-primary"> <i class=" fa fa-edit"></i></a>
                    <a href="/lihat_lplpo" class="float-right  btn-xs btn btn-info"> <i class="fa fa-eye"></i></a>
                    <form action="/hapus_lplpo/{{ $data->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class=" float-right btn btn-danger btn-xs" value="delete"><i class="fa fa-trash"></i>
                    </form>
                </td>
            </tr>   
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
    
@endsection