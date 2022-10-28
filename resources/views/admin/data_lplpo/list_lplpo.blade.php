@extends('layouts.main')

@section('content')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">LPLPO</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data LPLPO PUSKESMAS ATAU PUSTU</li>
        </ol>
    </nav>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Data  Master LPLPO Puskesmas Atau Pustu!</strong> Silahkan tambah data!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
    <h6 class="card-title card-header">Data LPLPO Puskesmas atau Putsu</h6>
<div class="card-body">

        <div class="table-responsive">
            <table id="dataTableExample" class="table">
                <thead>
                <tr>
                    <th width="4%">No</th>
                    <th>Nama Puskesmas</th>
                    <th>Hari Tanggal</th>
                    <th>Status Permintantaan</th>
                    <th>No Telp</th>
                    <th width="2%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($pustu as $data)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $data->nama_pus }}</td>
                    <td>{{ $data->no_telp_pus }}</td>
                    <td>{{ $data->kepala_pus }}</td>
                    <td>{{ $data->created_at }}</td>
                    <td>
                        <a href="{{ url('lihat_lplpo') }}">  <i class="link-icon" data-feather="edit"></i></a>
                        <a href="{{ url('lihat_lplpo') }}">  <i class="link-icon" data-feather="eye"></i></a>
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