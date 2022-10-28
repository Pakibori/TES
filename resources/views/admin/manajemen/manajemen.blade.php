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
            <h6 class="card-header">Data Manajemen User</h6>
            <div class="card-body">
                <a href="" class=" btn btn-success mb-4"><i class="link-icon" data-feather="refresh-ccw"></i>
                    Refresh
                </a>
                <a href="{{ url('/tambah_user') }}" class=" btn btn-primary mb-4"><i class="link-icon" data-feather="user-plus"></i>
                    Tambah User
                </a>
                <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Level</th>
                            <th>Created</th>
                          
                         
                            <th width="3%">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($user as $row )
                                
                        
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $row->name }}</td>
                            <td>{{ $row->username }}</td>
                            <td>{{ $row->email }}</td>
                            <td>{{ $row->level }}</td>
                            <td>{{ $row->created_at }}</td>
                          
                           
                            <td>
                                <a href="edit_user/{{ $row->id }}/edit_user" class="btn btn-primary btn-xs  btn-outline-warning"><i class="fa fa-edit"></i></a>
                                <a href="#ModalManajemen{{ $row->id }}" type="button" class="btn btn-danger btn-xs  btn-outline-success" data-toggle="modal">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>

                        </tr>
                        @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
    <!-- Modal -->
    @foreach ($user as  $row)
    <div class="modal fade" id="ModalManajemen{{ $row->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Hapus Manajemen User</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="GET" enctype="multipart/form-data" action="/manajemen/{{ $row->id }}/hapus_user">
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
       
      
   

    
@endsection