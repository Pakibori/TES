@extends('layouts.main')

@section('content')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Tables</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Laporan LPLPO</li>
        </ol>
    </nav>

    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
<div class="card">
    <h6 class="card-header">Tambah Data LPLPO
    
          <button type="button" class="btn btn-primary float-lg-right mr-1"data-toggle="modal" data-target=".bd-example-modal-lg">
            <i class="link-icon" data-feather="filter"></i> FILTER DATA</button>
    </form>
        <a href="/cetak_data_filter" class="btn btn-primary float-lg-right mr-1">  <i class="link-icon" data-feather="printer"></i>Print</a>
        <a href="#" class="btn btn-danger float-lg-right mr-1">  <i class="link-icon" data-feather="file"></i>PDF</a>
        <a href="#" class="btn btn-danger float-lg-right mr-1">  <i class="link-icon" data-feather="file"></i>EXEL</a>

    </h6>
<div class="card-body">       
    <div class="table-responsive">
        <table id="dataTableExample" class="table">
            <thead>
            <tr>
                <th width="2%">No</th>
                <th>Kode Obat</th>
                <th>Nama Obat</th>
                <th>Kategori</th>
                <th>Satuan</th>

                <th>Sisa<br> Stok</th>
                <th>Stok <br>Opname</th>
                <th>Permintaan </th>
                <th>Pemberian</th>
                <th>Katerangan</th>
                <th>Create</th>
            </tr>
            </thead>
            
            <tbody>
                @php $no=1; @endphp
                @foreach ($puskesmas_lplpo as  $data)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $data->kode_obat }}</td>
                <td>{{ $data->nama_obat }}</td>
                <td>{{ $data->nama_kategori }}</td>
                <td>{{ $data->nama_satuan }}</td>
                <td>{{ $data->sisa_stok }}</td>
                <td>{{ $data->stok_opname }}</td>
                <td>{{ $data->permintaan }}</td>
                <td>{{ $data->pemberian }}</td>
                <td>{{ $data->keterangan}}</td>
                <td>{{ date('d F y:i:s', strtotime($data->created_at))}}</td>
            </tr>   
            @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">FILTER LAPORAN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form role="form" action="/laporan_filter" method="GET" target="blank">
                <div class="input-group mb-3">
                 <label for="" class="col-4">Dari Tanggal</label>
                    <input type="date" class="form-control"
                    placeholder="Dari Tanggal" name="tanggal_mulai" autocomplete="off" required>
                 </div>
                 <div class="input-group mb-4">
                    <span for="" class="col-4">Sampai Tanggal</span>
                       <input type="date" class="form-control"
                       placeholder="Sampai Tanggal" name="tanggal_selesai"  autocomplete="off" required>
                      
                    </div>
                    <div class="input-group">
                        <label for="" class="col-4"></label>
                        <button type="submit" class="btn btn-primary btn-hover"> <i class="link-icon" data-feather="filter"></i> FILTER DATA</button>
                    </div>
              
            </form>
          </div>
         
      </div>
    </div>
  </div>
@endsection

</script>