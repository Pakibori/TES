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
    <h6 class="card-title card-header">Lihat Data LPLPO Puskesmas atau Putsu</h6>
        <div class="card-body">
            <a href="/lplpo" class=" btn btn-success mb-4"><i class="link-icon" data-feather="refresh-ccw"></i>
                Kembali
            </a>
           <div class="row">
            <div class="col-md-10 mx-auto">
                <H6 class="text-center">LAPORAN PAMAKIAN DAN LEMBAR PERMINTAAN OBAT <BR> (LPLPO)</H6>
                    

            </div>
           </div>
        </div>
        <div class="card-body">
        <div class="row">
                <div class="col-6 mb-4">
                    <div class="table-responsive">
                        <table id="basicExample" class="table table-bordered">
                            <thead>
                            <tr>
                                <th width="6%">Puskesmas</th>
                                <th width="1%">: </th>
                                <th>Puksesmas Bonoi</th>      
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Kabupaten</td>
                                <td>:</td>
                                <td>Mamberamo Raya</td>
                            </tr>   
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-6 mb-4">
                    <div class="table-responsive">
                        <table id="basicExample" class="table table-bordered">
                            <thead>
                            <tr>
                                <th>PELAPORAN BULANAN</th>
                                <th width="1%">: </th>
                                <th>JANUARI 2022</th>      
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td width="5%">PERMINTAAN BULANAN</td>
                                <td>:</td>
                                <td>MARET 2022</td>
                            </tr>
                    
                            </tbody>
                        </table>
                    </div>
            </div>
        </div>


            <div class="table-responsive">
            <table id="dataTableExample" class="table table-bordered">
                <thead>
                <tr>
                    <th width="4%" scope="col">No</th>
                    <th>Kode<br> LPLPO</th>
                    <th>Nama Obat</th>
                    <th>Satuan <br>Kemasan</th>
                    <th>Stok<br> Awal</th>
                    <th>Penerimaan</th>
                    <th>Persediaan</th>
                    <th>Pemakaian</th>
                    <th>Sisa<br> Stok</th>
                    <th>Stok<br> Opname</th>
                    <th>Permintaan</th>
                    <th>Pemberian</th>
                
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td scope="col">1</td>
                    <td>20</td>
                    <td>20</td>
                    <td>20</td>
                    <td>20</td>
                    <td>20</td>
                    <td>20</td>
                    <td>20</td>
                    <td>20</td>
                    <td>20</td>
                    <td>20</td> 
                    <td>20</td>
                </tr>
        
                </tbody>
            </table>
        </div>

    <div class="row kotak-validasi">
        <div class="card-body">
            <div class="col-xm-6">
                <h3>Status Validasi LPLPO</h3>
                    <form action="" method="post">
                        <div class="fom-group">
                            <select type="text" name="status" id="satus" class="form-control" required>
                                <option value="" hidden >--Konfrimasi Status Permintaan LPLPO--</option>
                                <option value="">Sedang menyiapkan</option>
                                <option value="">Sudah Bisa diambil</option>
                            </select>
                        </div>
                        <button type="submit"class="button-validasi"> Validasi LPLPO</button>
                    </form>
                </div>  
                {{--  <button type="submit"class="button-print bg-success"><i class="link-icon" data-feather="printer"></i></button>
                <button type="submit"class="button-exl bg-info"><i class="link-icon" data-feather="file"></i></button>
                <button type="submit"class="button-pdf bg-primary"><i class="link-icon" data-feather="file-text"></i></button>  --}}
                <button class=" button-print btn btn-primary"> <i class="link-icon mr-2" data-feather="printer"></i>Print</button>
                <button class=" button-exel btn btn-danger "> <i class="link-icon mr-2" data-feather="refresh-cw"></i> Export Pdf</button>
                <button class=" button-exel btn btn-danger"> <i class="link-icon mr-2" data-feather="file-text"></i>Export Exel</button>
            </div>
           
        </div>
     
        </div>
    </div>
    @include('sweetalert::alert')
    
@endsection