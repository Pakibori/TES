@extends('layouts.main')

@section('content')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
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
                <h6 class="card-header">Data Kategori
                    <a href="" class=" btn btn-success float-right"><i class="link-icon" data-feather="refresh-ccw"></i>
                        Refresh
                    </a>
                    <a href="{{ url('/tambah_kategori') }}" class=" btn btn-primary  float-right"><i class="link-icon" data-feather="briefcase"></i>
                        Tambah Obat
                    </a>
                </h6>
                <div class="card-body">
                  
   
    <div class="table-responsive">
    <table id="dataTableExample" class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Kategori</th>
            <th>Satuan</th>
            <th>Created</th>
            <th>Updated</th>
            <th  width="15%">Aksi</th>
        </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach ($kategori as  $row)
        <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $row->nama_kategori }}</td>
            <td>{{ $row->nama_satuan }}</td>
            <td>{{ $row->created_at->isoFormat('dddd, D MMMM Y') }}</td>
            <td>{{ $row->updated_at->isoFormat('dddd, D MMMM Y') }}</td>
            <td>
                <form action="/hapus_kategori/{{ $row->id }}" method="post">
                    @csrf
                    @method('delete')
                    <a href="edit_kategori/{{ $row->id }}/edit_kategori"  class="btn btn-primary  float-right btn-xs btn-outline-warning"><i class="fa fa-edit"></i></a>
                    <button type="submit" class="btn btn-danger btn-xs float-right" value="delete"><i class="fa fa-trash"></i>
                </form>
            </td>
        </tr>
        @endforeach	  
      
        </tbody>
     </table>
    </div>
            <!-- Modal -->
            @foreach ($kategori as  $row)
     <div class="modal fade" id="ModalObat{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="GET" enctype="multipart/form-data" action="/kategori/{{ $row->id }}/hapus_kategori">
                @csrf
                <div class="modal-body">
                   <input id="addUsername" value="{{ $row->id }}" name="id" type="hidden" required>
                    <div class="form-group">
                        <h5> Apakah Anda ingin menghapus data ini?
                    </div>                                          
                </div>
                <div class="modal-footer">
                    <button type="button"id="addRowButton" class="btn btn-danger" data-dismiss="modal"><i class="link-icon" data-feather="x"></i></button>
                    <button type="submit" class="btn btn-primary"><i class="link-icon" data-feather="trash"></i></button>
                </div>
            </div>
        </div>
        @endforeach
        </div>
    </div>
    @endsection
    </div>
</div>
    