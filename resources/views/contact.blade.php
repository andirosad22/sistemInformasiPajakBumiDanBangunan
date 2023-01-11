@extends('layouts.main')
@section('container')
<h2>makan</h2>
    <main>
        <div class="container py-4 text-center">
          <header class="pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <i class="bi bi-person-rolodex mx-4"></i>  Kontak Kami
            </a>
          </header>
          <div class="p-5 mb-4 bg-light rounded-3 ">
            <div class="container-fluid py-5 d-flex flex-column align-items-center">
              <h1 class="display-5 fw-bold"> SPBBD Bangbayang</h1>
              <p class="col-md-8 fs-4">
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci exercitationem quidem ipsa libero voluptates optio repudiandae soluta eligendi quasi eius voluptate quibusdam ducimus saepe, eos quisquam? Veniam assumenda nam ipsum.
              </p>

              <a href="" class="btn btn-primary btn-lg">Lebih Banyak</a>
            </div>
          </div>
      
          <div class="row align-items-md-stretch">
            <div class="col-md-6">
              <div class="h-100 p-3 text-white shadow-lg rounded-3 d-flex flex-column align-items-center" style="background: linear-gradient(blue,orange, red)">
                <i class="bi bi-geo-alt-fill" style="font-size: 50px; "></i>
                <h2>Alamat</h2>
                <p>
                  jalan Eyang Purwa No. 66 Bangbayang, Bantarkawung, Brebes
                </p>
                <button class="btn btn-outline-light" type="button">Kunjungi</button>
              </div>
            </div>
            <div class="col-md-6">
              <div class="h-100 p-3 bg-light text-white border rounded-3 d-flex flex-column align-items-center border-0" style="background: linear-gradient(blue,orange, red)">
                <i class="bi bi-geo-alt-fill " style="font-size: 50px;"></i>
                <h2>kontak</h2>
                <p>
                  WA / 083837269266
                </p>
                <button class="btn btn-outline-secondary" type="button">Telphon</button>
              </div>
            </div>
          </div>
      
          <div class="row mt-4 p-5  d-flex w-100 justify-content-between ">
            <div class="col-md-2" style="background: #a099ff">
              <i class="bi bi-door-open" style="font-size: 50px; color: blue"></i>
              <p class="mb-0">senin - sabtu</p>
              <p>Jam 08:00 - 16:00</p>
            </div>

            <div class="col-md-2" style="background: #ff99ff">
              <i class="bi bi-door-open" style="font-size: 50px; color: rgb(0, 162, 255)"></i>
              <p class="mb-0">Jumat</p>
              <p>Jam 08:00 - 11:00</p>
            </div>

            <div class="col-md-2" style="background: #fffd99">
              <i class="bi bi-door-open" style="font-size: 50px; color: rgb(0, 162, 255)"></i>
              <p class="mb-0">Jumat</p>
              <p>Jam 08:00 - 11:00</p>
            </div>

            <div class="col-md-2 ml-2 rounded-3" style="background: #ff9999">
              <i class="bi bi-door-open" style="font-size: 50px; color: rgb(0, 162, 255)"></i>
              <p class="mb-0">Jumat</p>
              <p>Jam 08:00 - 11:00</p>
            </div>
          </div>

        </div>
      </main>
@endsection