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
    <h6 class="card-header">Data Puskesmas Pustu</h6>
<div class="card-body">
    <a href="" class=" btn btn-success mb-4"><i class="link-icon" data-feather="refresh-ccw"></i>
        Refresh
    </a>
    <a href="/tambah_pustu" class=" btn btn-primary  mb-4"><i class="link-icon" data-feather="user"></i>
        Tambah Puskesmas
    </a>
    <button type="button"class="btn-print btn btn-primary  mb-4">
        <i class="link-icon" data-feather="printer"></i> PRINT
     </button>
     <button type="button"class="btn btn-danger  mb-4">
        <i class="link-icon" data-feather="refresh-ccw"></i> PDF
     </button>
     <button type="button"class="btn btn-primary  mb-4">EXPORT EXEL
        <i class="link-icon" data-feather="file-text"></i>
     </button>
   
   
    <div class="table-responsive">
    <table id="dataTableExample" class="table">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Puskesmas</th>
            <th>Email</th>
            <th>No Telp</th>
            <th>Kepala Puskesmas</th>
            <th>Created</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
            @php $no=1; @endphp
            @foreach($pustu as $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->nama_pus }}</td>
                <td>{{ $data->email_pus }}</td>
                <td>{{ $data->no_telp_pus }}</td>
                <td>{{ $data->kepala_pus }}</td>
                <td>{{ $data->created_at }}</td>
                <td>
                    <a href="edit_pustu/{{ $data->id }}/edit_pustu" class="btn btn-xs  btn-outline-warning"><i class="fa fa-edit"></i></a>
                    <a href="#ModalhapusPustu{{ $data->id }}" type="button" class="btn btn-danger   btn-xs btn-outline-success" data-toggle="modal">
                        <i class="fa fa-trash"></i>
                      </>
                </td>
            </tr>
                
            @endforeach
        
        </tbody>
    </table>
    </div>
    @foreach ($pustu as  $row)
    <div class="modal fade" id="ModalhapusPustu{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus ObaT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="GET" enctype="multipart/form-data" action="/pustu/{{ $row->id }}/hapus_pustu">
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
</div>
</div>
    
@endsection