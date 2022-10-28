@if(auth()->user()->level =="admin")
<nav class="sidebar">
    <div class="sidebar-header">
      <a href="/home" class="sidebar-brand">
        DASHBOARD<span></span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  
    <div class="sidebar-body">
      <center>
        {{--  <img src="{{ asset('gambar/'.$data->foto) }}" alt="" width="50%" class="mt-3">  --}}
        <img src="{{ asset('admin/user1.png') }}" alt=""width="40%" class="mt-3">
    </center>
    <center>
      <span class="mt-3 text-muted">{{ auth()->user()->name }}</span>
    </center>
      <ul class="nav">
        <li class="nav-item nav-category">Dashboard</li>
        <li class="nav-item">
          <a href="/home" class="nav-link">
            <i class="link-icon" data-feather="briefcase"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">Peringatan</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Warning</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="#" class="nav-link">Peringatan Stok</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Kadaluwarsa</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Kadaluwarsa</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">Data Master</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#master" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="briefcase"></i>
            <span class="link-title">Data Master</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="master">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="/master_obat" class="nav-link">Data Master Obat</a>
              </li>
              <li class="nav-item">
                <a href="/kategori" class="nav-link">Data Kategori</a>
              </li>
              <li class="nav-item">
                <a href="/obat" class="nav-link">Data Stok Obat</a>
              </li>           
              <li class="nav-item">
                <a href="/status" class="nav-link">Data STATUS</a>
              </li>   
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">Data Transaksi</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#Transaksi" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="briefcase"></i>
            <span class="link-title">TRANSAKSI DATA</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="Transaksi">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="/obat_masuk" class="nav-link">OBAT MASUK</a>
              </li>
              <li class="nav-item">
                <a href="/stok" class="nav-link">STOK OBAT</a>
              </li>
              <li class="nav-item">
                <a href="/obat_keluar" class="nav-link">OBAT KELAUR</a>
              </li>
              <li class="nav-item">
                <a href="/distribusi" class="nav-link">DISTRIBUSI</a>
              </li>
              <li class="nav-item">
                  <a href="/kadaluwarsa" class="nav-link">KADALUWARSA</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">PEMUSNAHAN</a>
                </li>     
            </ul>
          </div>
        </li>

        <li class="nav-item nav-category">DATA LPLPO</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#lplpo" role="button" aria-expanded="false" aria-controls="lplpo">
            <i class="link-icon" data-feather="briefcase"></i>
            <span class="link-title">Data LPLPO</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="lplpo">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="/list_lplpo" class="nav-link">Data LPLPO</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Validasi LPLPO</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Laporan LPLPO</a>
              </li>
                  
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a href="/pustu" class="nav-link">
            <i class="link-icon" data-feather="message-square"></i>
            <span class="link-title">Data Puskesmas</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="/manajemen" class="nav-link">
            <i class="link-icon" data-feather="settings"></i>
            <span class="link-title">Manajemen User</span>
          </a>
        </li>
        <li class="nav-item nav-category">Laporan</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#laporan" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="printer"></i>
            <span class="link-title">Laporan</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="laporan">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="/cetak" class="nav-link">Obat Masuk</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">STOK OBAT</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">OBAT KELAUR</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">DISTRIBUSI</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">KADALUWARSA</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">PEMUSNAHAN</a>
                </li>     
                <li class="nav-item">
                  <a href="#" class="nav-link">LPLPO PUSKESMAS</a>
                </li>  
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="unlock"></i>
            <span class="link-title">Manajemen Akun</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('logout') }}" class="nav-link">
            <i class="link-icon" data-feather="log-out"></i>
            <span class="link-title">Keluar</span>
          </a>
        </li>

       
       
      </ul>
    </div>
  </nav>
  @endif



  


  @if(auth()->user()->level =="gudang")
  <nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        DASHBOARD<span></span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  
    <div class="sidebar-body">
      <center>
        {{--  <img src="{{ asset('gambar/'.$row->foto) }}" alt="" width="50%" class="mt-3">  --}}
        <img src="{{ asset('admin/user1.png') }}" alt=""width="40%" class="mt-3">
    </center>
    <center>
      <span class="mt-3 text-muted">{{ auth()->user()->name }}</span>
    </center>
      <ul class="nav">
        <li class="nav-item nav-category">Dashboard</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="briefcase"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">Peringatan</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Warning</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="#" class="nav-link">Peringatan Stok</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Kadaluwarsa</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Kadaluwarsa</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">Data Master</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#master" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="briefcase"></i>
            <span class="link-title">Data Master</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="master">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="#" class="nav-link">Data Stok Obat</a>
              </li>
             
            </ul>
          </div>
        </li>
      
        <li class="nav-item nav-category">DATA LPLPO</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#lplpo" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="briefcase"></i>
            <span class="link-title">Data LPLPO</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="lplpo">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="#" class="nav-link">Data LPLPO</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Validasi LPLPO</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Laporan LPLPO</a>
              </li>
                  
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="message-square"></i>
            <span class="link-title">Data Puskesmas</span>
          </a>
        </li>
        <li class="nav-item nav-category">Laporan</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#laporan" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="printer"></i>
            <span class="link-title">Laporan</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="laporan">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="#" class="nav-link">OBAT MASUK</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">STOK OBAT</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">OBAT KELAUR</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">DISTRIBUSI</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">KADALUWARSA</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">PEMUSNAHAN</a>
                </li>     
                <li class="nav-item">
                  <a href="#" class="nav-link">LPLPO PUSKESMAS</a>
                </li>  
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="unlock"></i>
            <span class="link-title">Manajemen Akun</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('logout') }}" class="nav-link">
            <i class="link-icon" data-feather="log-out"></i>
            <span class="link-title">Keluar</span>
          </a>
        </li>

       
       
      </ul>
    </div>
  </nav>

  @endif




  

  @if(auth()->user()->level =="dinas")
  <nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        DASHBOARD<span></span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  
    <div class="sidebar-body">
      <center>
        {{--  <img src="{{ asset('gambar/'.$data->foto) }}" alt="" width="50%" class="mt-3">  --}}
        <img src="{{ asset('admin/user1.png') }}" alt=""width="40%" class="mt-3">
    </center>
    <center>
      <span class="mt-3 text-muted">{{ auth()->user()->name }}</span>
    </center>
      <ul class="nav">
        <li class="nav-item nav-category">Dashboard</li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="briefcase"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
        <li class="nav-item nav-category">Peringatan</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#emails" role="button" aria-expanded="false" aria-controls="emails">
            <i class="link-icon" data-feather="mail"></i>
            <span class="link-title">Warning</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="emails">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="#" class="nav-link">Peringatan Stok</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Kadaluwarsa</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Kadaluwarsa</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item nav-category">Data Master</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#master" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="briefcase"></i>
            <span class="link-title">Data Master</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="master">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="#" class="nav-link">Data Stok Obat</a>
              </li>       
           
            </ul>
          </div>
        </li>
      
        <li class="nav-item nav-category">DATA LPLPO</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#lplpo" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="briefcase"></i>
            <span class="link-title">Data LPLPO</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="lplpo">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="#" class="nav-link">Data LPLPO</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Validasi LPLPO</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">Laporan LPLPO</a>
              </li>
                  
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="message-square"></i>
            <span class="link-title">Data Puskesmas</span>
          </a>
        </li>
        <li class="nav-item nav-category">Laporan</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#laporan" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="printer"></i>
            <span class="link-title">Laporan</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="laporan">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="#" class="nav-link">OBAT MASUK</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">STOK OBAT</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">OBAT KELAUR</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">DISTRIBUSI</a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">KADALUWARSA</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">PEMUSNAHAN</a>
                </li>     
                <li class="nav-item">
                  <a href="#" class="nav-link">LPLPO PUSKESMAS</a>
                </li>   
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="unlock"></i>
            <span class="link-title">Manajemen Akun</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('logout') }}" class="nav-link">
            <i class="link-icon" data-feather="log-out"></i>
            <span class="link-title">Keluar</span>
          </a>
        </li>

       
       
      </ul>
    </div>
  </nav>

  @endif


























  @if(auth()->user()->level =="puskesmas")
  <nav class="sidebar">
    <div class="sidebar-header">
      <a href="#" class="sidebar-brand">
        DASHBOARD<span></span>
      </a>
      <div class="sidebar-toggler not-active">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  
    <div class="sidebar-body">
      <center>
      <img src="{{ asset('admin/user1.png') }}" alt=""width="40%" class="mt-3">
     
    </center>
    <center>
      <span class="mt-3 text-muted">{{ auth()->user()->name }}</span>
    </center>
      <ul class="nav">
        <li class="nav-item nav-category">Dashboard</li>
        <li class="nav-item">
          <a href="/puskesmas" class="nav-link">
            <i class="link-icon" data-feather="briefcase"></i>
            <span class="link-title">Dashboard</span>
          </a>
        </li>
      
        <li class="nav-item nav-category">Data Transaksi</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#Transaksi" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="briefcase"></i>
            <span class="link-title">TRANSAKSI DATA</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="Transaksi">
            <ul class="nav sub-menu">
              <li class="nav-item">
                  <a href="#" class="nav-link">KADALUWARSA</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">PEMUSNAHAN</a>
                </li>     
            </ul>
          </div>
        </li>

        <li class="nav-item nav-category">DATA LPLPO</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#lplpo" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="briefcase"></i>
            <span class="link-title">Data LPLPO</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="lplpo">
            <ul class="nav sub-menu">
            <li class="nav-item">
                <a href="/lplpo" class="nav-link">Data LPLPO</a>
              </li>  
              <li class="nav-item">
                <a href="#" class="nav-link">Validasi LPLPO</a>
              </li>
              <li class="nav-item">
                <a href="/laporan" class="nav-link">Laporan LPLPO</a>
              </li>
                  
            </ul>
          </div>
        </li>
        
        <li class="nav-item nav-category">Laporan</li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#laporan" role="button" aria-expanded="false" aria-controls="uiComponents">
            <i class="link-icon" data-feather="printer"></i>
            <span class="link-title">Laporan</span>
            <i class="link-arrow" data-feather="chevron-down"></i>
          </a>
          <div class="collapse" id="laporan">
            <ul class="nav sub-menu">
              <li class="nav-item">
                <a href="#" class="nav-link">KADALUWARSA</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">PEMUSNAHAN</a>
              </li>     
              <li class="nav-item">
                <a href="/cetak_laporan_lplpo" class="nav-link">LAPORAN LPLPO</a>
              </li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="link-icon" data-feather="unlock"></i>
            <span class="link-title">Manajemen Akun</span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{ url('logout') }}" class="nav-link">
            <i class="link-icon" data-feather="log-out"></i>
            <span class="link-title">Keluar</span>
          </a>
        </li>       
       
      </ul>
    </div>
  </nav>

  @endif