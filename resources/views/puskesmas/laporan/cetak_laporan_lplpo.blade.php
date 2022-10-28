<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <meta name="csrf-token" content="{{ csrf_token }}"> --}}
    <style>
        table.static {
            padding: 2px;
            position: absolute;
            border: 1px solid rgb(0, 0, 0);
            margin-top: -7%;
            height: auto;
            padding: 10%;
        }
        body{font-family: 'Times New Roman', Times, serif}
        .rangkasurat
         {
            width: 1000px;
            margin:0 auto;
            background-color: #fff;
            height: 400px;
            padding-left: 10px;
        }
        table
        {
            border-bottom: 5px solid #000;
            padding: 2px;
        }
        #table1
        {
            border-bottom: 5px solid rgb(251, 248, 248);
            padding: 2px;
            
        }
        .tengah {
            text-align: center; 
            line-height: 5px;
        }
        .tengah h4{
            font-family: quicksand;
        }
        .kotak-ttd{
            width: 20%;
            margin-left: 5%;
            padding: 20px;
            position: absolute;
            margin-top: 2%;
            overflow: auto;
            height: auto;
            text-align: center;
        

        }
        .kotak-ttd1{
            width: 20%;
            margin-left: 25%;
            padding: 20px;
            position: absolute;
            margin-top: 2%;
            float: left;
            height: auto;
            text-align: center;
        

        }
        .kotak-ttd2{
            width: 20%;
            margin-left: 47%;
            padding: 20px;
            position: absolute;
            margin-top: 2%;
            float: left;
            height: auto;
            text-align: center;
        

        }
        .kotak-ttd3{
            width: 20%;
            margin-left: 68%;
            padding: 20px;
            position: absolute;
            margin-top: 2%;
            float: left;
            text-align: center;
            height: auto;
        

        }
        .kotak-tanggal{
            width: 20%;
            margin-left: 66%;
            padding: 20px;
            position: absolute;
            float: left;
            text-align: center;
            height: auto;
            margin-top: 2%;
        

        }
        .kotak-nama-pus1{
            width: 20%;
            margin-left: 5%;
            margin-top: -10%;
            padding: 20px;
            position: absolute;
            background-color: blue;
            overflow: auto;
            height: auto;
            text-align: center;
        

        }
        .kotak-nama-pus2{
            width: 20%;
            margin-left: 68%;
            padding: 20px;
            position: absolute;
            background-color: rgb(77, 255, 0);
            float: left;
            text-align: center;
            height: auto;
        

        }
    </style>
    <title>LAPORAN BUKU PAJANG</title>
</head>
<body>
    <div class="rangkasurat">
        <table width="110%">
            <tr>
            <td><img src="{{ asset('gambar/logo.png') }}" width="100px"></td>
            <td class="tengah">
                <h2>PEMERINTAH KABUPATEN MAMBERAMO RAYA</h2>
                <h2>DINAS KESEHATAN INSTALASI GUDANG FARMASI</h2>
                <h4>Alamat : Jl Demianus Kyeuw-Kyeuw, SH Kasonaweja Mamberamo Raya, Kode Pos: 98213</h4>
            </td>
            <td><img src="{{ asset('gambar/dinas.png') }}" width="80px"></td>
            </tr>
        </table>
            <center>  <h3>LAPORAN PEMAKAIAN DAN LEMBAR <BR>PERMINTAAN OBAT (LPLPO)</h3></center>
    </div>


        <table class="static" align="left" rules="all" border="2px" style="width: 99%">
            <tr style="padding: 3px">
                <th>No </th>
                <th>Kode Obat</th>
                <th >Nama Obat</th>
                <th>No.Batch</th>
                <th>Kategori</th>
                <th>Satuan</th>
                <th>Persediaan</th>
                <th>Penerimaan</thpe=>
                <th>Pemakaian</th>
                <th>Sisa<br> Stok</th>
                <th>Otok <br>Opname</th>
                <th>Permintaan</th>
                <th>Pemberian</th>
                <th>Keterangan</th>
            </tr>
            @php
            $nomor = 1;
            @endphp
            @foreach($puskesmas_lplpo as $data)
            <tr style="padding:3px">
                <th scope="row">{{ $nomor++}}</th>
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
        </table>
        <div class="kotak-tanggal">
            <span>Kasonaweja, 29 Oktober 2022</span>
       
        </div>
       <div class="kotak-ttd">
           <span>Mengetahui<br></span>
            <span>Kepala Dinas Kesehatan<br></span>
            <span>Kabupaten Mamberamo Raya</span>
            <br><br><br>
            <h5>LEVINA KREY, S.iT.,MPH<br> NIP : 196508111988012003</h5>
       </div>
       <div class="kotak-ttd1">
            <span><br></span>
            <span>Yang Menyerahkan<br></span>
            <span>Kepala Instalasi</span>
            <br><br><br>
            <h5>AHMAD MAARIF, S.Farm.,Apt<br> NIP : 198910012015051001</h5>
        </div>
        <div class="kotak-ttd2">
            <span> <br></span>
            <span>kepala Puskesmas<br></span>
            <br><br><br>
            <h5>dr. MARIO KORWA<br> NIP : 19870530 201505 1 001</h5>
           
        </div>
        <div class="kotak-ttd3">
            <span><br></span>
            <span>Yang Menerima<br></span>
            <span>Penanggung Jawab</span>
            <br><br><br>
            <h5>NURMINA MILE, A.md<br> NIP : 198700104 201805 2 002</h5>
        </div>

    <script type="text/javascript">
        window.print();
    </script>
</body>
</html>