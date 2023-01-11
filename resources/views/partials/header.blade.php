<nav class="navbar navbar-expand-lg navbar-dark position-fixed w-100 top-0" style="background: #1C149B; z-index: 999;" aria-label="Ninth navbar example">
    <div class="container-xl">
      <a class="navbar-brand" href="/">SPBB-Bangbayang</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample07XL" aria-controls="navbarsExample07XL" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample07XL">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Home")? "active":"" }} " aria-current="page" href="/">Beranda</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === "Contact")? "active":"" }} " aria-current="page" href="/contact">Kontak</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === "About")? "active":"" }} " aria-current="page" href="/about">Tentang</a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{ ($title === "Tax Check")? "active":"" }} " aria-current="page" href="/taxcheck">Cek Pajak</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/keluar" method="POST">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Keluar</button>
                </form>
            </ul>
          </li>
            @else
              <li class="nav-item">
                <a href="/login" class="nav-link {{ ($title === "Login")? "active":"" }}"><i class="bi bi-box-arrow-in-right"></i> Masuk</a>
              </li>
          @endauth
        </ul>

      </div>
    </div>
  </nav>