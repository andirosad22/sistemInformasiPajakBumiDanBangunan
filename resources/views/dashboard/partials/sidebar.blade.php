<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse bg-dark text-white mt-0">
    {{-- <div class="position-sticky" style="height: 100vh">
        
      <ul class="nav flex-column w-100">
        <li class="align-self-center w-100 pt-3 d-flex flex-column align-items-center">
            <a class="text-decoration-none text-white {{ Request::is('dashboard/user*')? 'active':'' }}" href="/dashboard/user">
              <i class="bi bi-person-circle" style="font-size: 100px; color: rgb(205, 208, 211)"></i>
              <img src="/image/user/profil/profilgmail.png" class="rounded-circle shadow" width="120" height="120" alt="photo user">
            </a>
            <h6 class="mt-3">{{ auth()->user()->name }}</h6>
              <small>083837269266</small>
        </li>
        <li class="nav-item navbar-dark">
          <a class="nav-link {{ Request::is('dashboard')? 'active':'' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            <i class="bi bi-laptop" style="font-size: 20px">  </i>Dashboard
            <hr class="bg-secondary">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/datasppt*')? 'active':'' }}" href="/dashboard/datasppt">
            <span data-feather="file"></span>
            <i class="bi bi-file-earmark-text" style="font-size: 20px"></i>
            Data SPPT
            <hr class="bg-secondary">
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/terimapembayaran*')? 'active':'' }}" href="/dashboard/terimapembayaran">
            <span data-feather="file"></span>
            <i class="bi bi-cash mr-3" style="font-size: 20px"></i>
            Terima Pembayaran
            <hr class="bg-secondary">
          </a>
        </li>
      </ul>
      
      <div class="navbar-nav bg-danger " style="margin-top: 100px">
        <div class="nav-item text-nowrap">
          <form action="/keluar" method="POST">
              @csrf
              <button type="submit" class="nav-link px-3 border-0 text-white bg-danger ">Keluar <i class="bi bi-box-arrow-right text-white"></i> </button>
          </form>
        </div>
      </div>
      

    </div> --}}

    <div class="d-flex flex-column flex-shrink-0 px-3">
      <div class="row py-3 border-bottom mb-4" style="background: #2a3035">
        <div class="col-md-3" >
          <a href="/dashboard/officers/{{ auth()->user()->username }}">
            <img src="/image/user/profil/profilgmail.png" class="rounded-circle" width="50px" alt="">
          </a>
        </div>
        <div class="col-md-9">
          <a class="text-white text-decoration-none" href="/dashboard/officers/{{ auth()->user()->username }}">
            <h6>{{ auth()->user()->name }}</h6>
          </a>
          <small>{{ auth()->user()->email }}</small>
        </div>
      </div>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a href="/dashboard" class="nav-link text-white {{ Request::is('dashboard')? 'active':'' }}" aria-current="page">
            <i class="bi bi-speedometer2"></i>
            Dashboard
          </a>
        </li>
        <li>
          <a href="/dashboard/sppt" class="nav-link text-white {{ Request::is('dashboard/sppt*')? 'active':'' }}">
            <i class="bi bi-layers"></i>
            Data Sppt
          </a>
        </li>
        <li>
          <a href="/dashboard/receivepayment" class="nav-link text-white {{ Request::is('dashboard/receivepayment*')? 'active':'' }}">
            <i class="bi bi-cash"></i>
            Terima Pembayaran
          </a>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white {{ Request::is('dashboard/laporan')? 'active':'' }}" href="/dashboard/laporan" id="navbarNavDarkDropdown" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-file-text"></i> Laporan</a>
          <ul class="dropdown-menu dropdown-menu-dark " aria-labelledby="navbarNavDarkDropdown">
            <li><a class="dropdown-item {{ Request::is('dashboard/terhutang')? 'active':'' }}" href="/dashboard/terhutang"><i class="bi bi-cash-stack"></i> Terhutang</a></li>
            <li><a class="dropdown-item {{ Request::is('dashboard/lunas')? 'active':'' }}" href="/dashboard/lunas"> <i class="bi bi-cash"></i> Lunas</a></li>
            <li><a class="dropdown-item {{ Request::is('dashboard/setor')? 'active':'' }}" href="/dashboard/setor"> <i class="bi bi-clipboard2"></i> Setor</a></li>
            <li><a class="dropdown-item {{ Request::is('dashboard/rekapitulasi')? 'active':'' }}" href="/dashboard/rekapitulasi"> <i class="bi bi-clipboard2-minus"></i> Rekapitulasi</a></li>
            @can('kor_pokja')
            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted ">
              <span>Koordinator Pokja</span>
            </h6>
            <li><a class="dropdown-item " href="/dashboard/laporan/terhutang">Laporan</a></li>
            @endcan
          </ul>
        </li>

      </ul>

      @can('admin')
          
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted ">
        <span>Administrator</span>
      </h6>
      <ul class="nav nav-pills flex-column mb-auto">
        <li>
          <a href="/dashboard/officers" class="nav-link text-white {{ Request::is('dashboard/officers*')? 'active':'' }}">
            <i class="bi bi-person"></i>
            Pokja
          </a>
        </li>
        <li>
          <a href="/dashboard/village" class="nav-link text-white {{ Request::is('dashboard/village*')? 'active':'' }}">
            <i class="bi bi-person"></i>
            Profil Desa
          </a>
        </li>

      </ul>
      @endcan

      <div>
        <hr>
        <form action="/logout" method="POST">
          @csrf
          <button type="submit" class="nav-link border-0 w-100 rounded text-white shadow botton1 mb" style="background:orangered">Keluar <i class="bi bi-box-arrow-right"></i></button>
      </form>
      </div>
    </div>
</nav>


    
  