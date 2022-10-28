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
    <h5 class="card-header">Data Kadaluwarsa
        <a href="/tambah_kadaluwarsa" class=" btn btn-primary float-right "><i class="link-icon" data-feather="user"></i>
            Tambah Kadaluwarsa
        </a>
        <a href="" class=" btn btn-success  float-right mr-1 "><i class="link-icon" data-feather="refresh-ccw"></i>
            Refresh
        </a>
      
    </h5>


<div class="card-body">
    <div class="table-responsive">
    <table id="dataTableExample" class="table">
        <thead>
        <tr>
            <th>NO</th>
            <th>Kode Obat</th>
            <th>Nama Obat</th>
            <th>Jumlah</th>
            <th>Tanggal EXP DATE</th>
            <th>Keterangan</th>
            <th width="10%">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach ($kadaluwarsa as  $row)    
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->kode_exp }}</td>
            <td>{{ $row->nama_obat }}</td>
            <td>{{ $row->jumlah }}</td>
            <td>{{ $row->tanggal_exp }}</td>
            <td>{{ $row->keterangan}}</td>
            <td>
                <a href="/edit_kadaluwarsa/{{ $row->id }}/edit_kadaluwarsa" class="btn btn primary btn-outline  float-right btn-primary btn-xs"><i class="fa fa-edit"></i></a>   
                <form action="/hapus_kadaluwarsa/{{ $row->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-xs float-right" value="delete"><i class="fa fa-trash"></i>
                </form>
            </td>
        </tr>
        @endforeach	
      
        </tbody>
    </table>
                
    <!-- Modal -->
    @foreach ($kadaluwarsa as  $row)
    <div class="modal fade" id="ModalhapusKadaluwarsa{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Distribusi</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="GET" enctype="multipart/form-data" action="/kadaluwarsa/{{ $row->id }}/hapus_kadaluwarsa">
                @csrf
                <div class="modal-body">
                   <input id="addUsername" value="{{ $row->id }}" name="id" type="hidden" required>
                    <div class="form-group">
                        <h5> Apakah Anda ingin menghapus data ini?
                    </div>                                          
                </div>
                <div class="modal-footer">
                    <button type="button"id="addRowButton" class="btn btn-danger" data-dismiss="modal"><i class="link-icon" data-feather="x"></i></button>
                    <button type="submit" class="btn btn-danger"><i class="link-icon" data-feather="trash"></i></button>
                </div>
            </form>
        </div>
        @endforeach
    </div>
    @include('sweetalert::alert')

</div>
</div>
    
@endsection