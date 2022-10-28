@extends('layouts.main')

@section('content')
<div class="page-content">

    <nav class="page-breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">DASHBOARD HOME</a></li>
            <li class="breadcrumb-item active" aria-current="page">HALAMAN DASHBOARD</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-12 col-xl-12 stretch-card">
          <div class="row flex-grow">
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">Data LPLPO</h6>
                  </div>
                  <div class="row">
                    <div class="col-6 col-md-12 col-xl-5">
                      <h3 class="mb-2">100</h3>
                      <div class="d-flex align-items-baseline">
                        <p class="text-success">
                          <span>Jumlah</span>
                          <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                        </p>
                      </div>
                    </div>
                    <div class="col-6 col-md-12 col-xl-7">
                      <div id="apexChart1" class="mt-md-3 mt-xl-0"></div>
                    </div>
                  </div>
                </div>
                <a href="#" class="card-header bg-info"><i data-feather="eye" class="icon-sm mr-2"></i>Lihat Detail</a>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">DATA LPLPO</h6>
                   
                  </div>
                  <div class="row">
                    <div class="col-6 col-md-12 col-xl-5">
                      <h3 class="mb-2">100</h3>
                      <div class="d-flex align-items-baseline">
                        <p class="text-danger">
                          <span>Transaksi</span>
                          <i data-feather="arrow-down" class="icon-sm mb-1"></i>
                        </p>
                      </div>
                    </div>
                    <div class="col-6 col-md-12 col-xl-7">
                      <div id="apexChart2" class="mt-md-3 mt-xl-0"></div>
                    </div>
                  </div>
                </div>
                <a href="#" class="card-header bg-info"><i data-feather="eye" class="icon-sm mr-2"></i>Lihat Detail</a>
              </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex justify-content-between align-items-baseline">
                    <h6 class="card-title mb-0">Manajemen USER</h6>
                  </div>
                  <div class="row">
                    <div class="col-6 col-md-12 col-xl-5">
                      <h3 class="mb-2">100</h3>
                      <div class="d-flex align-items-baseline">
                        <p class="text-success">
                          <span>Jumlah</span>
                          <i data-feather="arrow-up" class="icon-sm mb-1"></i>
                        </p>
                      </div>
                    </div>
                    <div class="col-6 col-md-12 col-xl-7">
                      <div id="apexChart3" class="mt-md-3 mt-xl-0"></div>
                    </div>
                  </div>
                </div>
                <a href="#" class="card-header bg-info"><i data-feather="eye" class="icon-sm mr-2"></i>Lihat Detail</a>
              </div>
            </div>
          </div>
        </div>
      </div> <!-- row -->

      

     

</div>
@include('sweetalert::alert')  
@endsection