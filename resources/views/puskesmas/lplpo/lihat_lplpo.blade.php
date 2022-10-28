
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>LAPORAN</title>
</head>
<body>
    <style>
        body{
            font-family: 'Times New Roman', Times, serif;
            background-color: #f1f1f1;
        }
        .garis{
            width: 100%;
            height: 1px;
            margin-top: 4px;
            overflow: auto;
            border: 2px solid;
            background-color: black;
        }
        .col-md-10{
            line-height: 1px;
        }
        .col-md-10 h3{
            line-height: 24px;
            font-style: bold;
            margin-bottom: -1px;
        }
        .col-md-10 h4{
            font-style: bold;
            margin-bottom: 2px;
        }
        .col-md-10 p{
            font-family: Quicksand;
            font-style: none;
            font-size: 14px;
            margin-top: 4px;
            line-height: 2px;
        }
        .body{
            font-size: 12px;
            margin-top: 4%;
        }
    </style>

       <div class="col-md-9 mx-auto  card card-body mb-5 grid-margin stretch-card">
        <div class="col-md-4">
            <a href="/lplpo" class="btn btn-primary float-lg-right mb-4">  <i class=" fa fa-undo"></i> Kembali</a>
         </div>
        <center>
            <div class="row">
                <div class="col-md-1">
                    <img src="{{ asset('gambar/logo.png') }}" alt="" width="140%">
                </div>
                <div class="col-md-10">
                    <h3>PEMERINTAH KABUPATEN MAMBERAMO RAYA</h3>
                    <h4>DINAS KESEHATAN INSTALASI GUDANG FARMASI</h4>
                    <p> Alamat : Jl. Demianus Kyuew-Kyuew. SH, Kamp Kasonaweja, Distrik Mamberamo Tengah Kode Pos : 98218</p>
                </div>
                <div class="col-md-1">
                    <img src="{{ asset('gambar/dinas.png') }}" alt="" width="100%">
                </div>
                <div class="garis"></div>
            </div>
        </center>
        <div class="body">

           <div class="row">
            <div class="col-md-4">
                <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">NAMA PUSKESMAS </th>
                        <th width="1%">:</th>
                        <th scope="col">BONOI</th>  
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">ALAMAT</th>
                        <th width="1%">:</th>
                        <td>KAMPUNG BONOI</td>
                      </tr>
                    </tbody>
               </table>
            </div>
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th>BULAN LAPORAN</th>
                        <th width="1%">:</th>
                        <th scope="col">November</th>  
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">BULAN PERMINTAAN</th>
                        <th width="1%">:</th>
                        <td>DESEMBER</td>
                      </tr>
                    </tbody>
               </table>
            </div>
           </div>
            <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Obat</th>
                    <th scope="col">Nama Obat</th>
                    <th scope="col">No.Batch</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Satuan</th>
                    <th scope="col">Persediaan</th>
                    <th scope="col">Penerimaan</th>
                    <th scope="col">Pemakaian</th>
                    <th scope="col">Sisa<br> Stok</th>
                    <th scope="col">Otok <br>Opname</th>
                    <th scope="col">Permintaan</th>
                    <th scope="col">Pemberian</th>
                    <th scope="col">Keterangan</th>
                  </tr>
                </thead>
                <tbody style="text-align: center">
                    @php $no=1; @endphp
                    @foreach ($puskesmas_lplpo as  $data)
                  <tr>
                    <th scope="row">{{ $no++ }}</th>
                    <td>{{ $data->kode_obat }}</td>
                    <td style="text-align: none">{{ $data->nama_obat }}</td>
                    <td>{{ $data->no_obat }}</td>
                    <td>{{ $data->nama_kategori }}</td>                  
                    <td>{{ $data->nama_satuan }}</td>
                    <td>{{ $data->persediaan }}</td>
                    <td>{{ $data->penerimaan }}</td>
                    <td>{{ $data->pemakaian }}</td>
                    <td>{{ $data->sisa_stok }}</td>
                    <td>{{ $data->stok_opname }}</td>
                    <td>{{ $data->permintaan }}</td>
                    <td>{{ $data->pemberian }}</td>
                    <td>{{ $data->keterangan }}</td>
                  </tr>
                  @endforeach
                </tbody>
           </table>
           <center>
            <div class="row">

                <p class="text-muted" style="text-align:right;">Jayapura 23 Oktober 2022</p>
                <div class="col-md-4">
                    <table class="table table-borderless" style="text-align: center;">
                        <thead>
                        <tr>
                            <th scope="col">Mengetahui <br>Kepala Dinas Kesehatan</th>            
                        </thead>
                        <tbody>
                        <tr>
                            <td>................... <BR> NIP : ....................</td>   
                        </tr>
                        </tbody>
                </table>
                </div>
                <div class="col-md-4">
                    <table class="table table-borderless" style="text-align: center;">
                        <thead>
                        <tr>
                            <th scope="col">Mangetehui <br>Kepala Gudang Instalasi farmasi</th>   
                        </thead>
                        <tbody>
                        <tr>
                            <td>................... <BR> NIP : ....................</td>
                        </tr>
                        </tbody>
                </table>
                </div>
                <div class="col-md-4">
                    <table class="table table-borderless" style="text-align: center;">
                        <thead>
                        <tr>
                            <th>Mengetahui<br> Kepala Puskesmas Bonoi</th>  
                        </thead>
                        <tbody>
                        <tr>      
                            <td>................... <BR> NIP : ....................</td>
                        </tr>
                        </tbody>
                </table>
                </div>
            </div>
        </center>
        </div>
        <div class="col-md-5 mx-auto" style="font-family: Quicksand">
            <a href="#" class="btn btn-primary float-lg-right">  <i class=" fa fa-print"></i> Print</a>
            <a href="#" class="btn btn-primary float-lg-right">  <i class=" fa fa-file"></i> Expot Exel</a>
            <a href="#" class="btn btn-primary float-lg-right">  <i class=" fa fa-file"></i> Expot PDF</a>
        </div>
    </div>
</body>
</html>