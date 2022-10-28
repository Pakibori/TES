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
                <h6 class="card-header">Data Distribusi
                    <a href="" class=" btn btn-success  float-right "><i class="link-icon" data-feather="refresh-ccw"></i>
                        Refresh
                    </a>
                    <a href="/tambah_distribusi" class="mr-1 btn btn-primary float-right"><i class="link-icon" data-feather="monitor"></i>
                        Tambah Distribusi
                    </a>
                </h6>
                
                
                
                <div class="card-body">   
                    <div class="kotak-cetak mb-4">
                        
                      
                    </div>                           
                    <div class="table-responsive">
                    <table id="dataTableExample" class="table">
                        <thead>
                        <tr>
                            <th width="3%">No</th>
                            <th>Nama Puskesmas</th>
                            <th>Jumlah Distribusi</th>   
                            <th>Tanggal EXP</th> 
                            <th>Katerangan</th>   
                            <th>Created</th>                           
                            <th width="10%">Aksi</th> 
                        </tr>
                        </thead>
                        <tbody>
                            @php $no=1; @endphp
                            @foreach ($distribusi as  $row)                                 
                            <tr>
                                <td>{{ $no++ }}</td>

                                <td>{{ $row->name }}</td>
                                <td>{{ $row->jumlah_distribusi }}</td>
                                <td>{{ date('d F Y', strtotime($row->tanggal_exp_date)) }}</td>
                                <td>{{ $row->keterangan_distribusi }}</td>
                                <td>{{ date('d F Y', strtotime($row->created_at)) }}</td>                               
                                <td>
                                    <a href="/edit_distribusi/{{ $row->id }}/edit_distribusi" class="btn btn primary float-right btn-outline btn-primary btn-xs"><i class="fa fa-edit"></i></a>   
                                    <form action="/hapus_distribusi/{{ $row->id }}" method="post">
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
            </div>

    
@endsection