@extends('dashboard.layouts.main')

@section('container')
  


  <div class="container-fluid">
    <div class="row border-bottom my-5">
        <div class="col-md-12">
            <div class="overview-wrap">
                <h2 class="title-1">Dashboard</h2>
            </div>
        </div>
    </div>
    <div class="row m-t-25">
      <div class="col-sm-6 col-lg-3">
          <div class="bg-lineargradien1 text-center py-4 rounded-3">
              <div class="overview__inner">
                <div class="overview-box clearfix">
                  <div class="icon">
                      <i class="zmdi zmdi-account-o"></i>
                  </div>
                  <div class="text">
                      <span class="desc">Jumlah NOP</span>
                      <h2 class="number">21</h2>
                      <span class="desc">PBB (Rp.)</span>
                      <h4 class="number">Rp. 200.000</h4>
                  </div>
                  <hr>
                  <a href="#" class="text-decoration-none text-white-50">
                  Lihat Data<i class="bi bi-chevron-double-right"></i>
                  </a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-sm-6 col-lg-3">
      <div class="bg-lineargradien2 text-center py-4 rounded-3">
          <div class="overview__inner">
            <div class="overview-box clearfix">
              <div class="icon">
                  <i class="zmdi zmdi-account-o"></i>
              </div>
              <div class="text">
                  <span class="desc">Lunas</span>
                  <h2 class="number">21</h2>
                  <span class="desc">PBB (Rp.)</span>
                  <h4 class="number">Rp. 200.000</h4>
              </div>
              <hr>
              <a href="#" class="text-decoration-none text-white-50">
              Lihat Data<i class="bi bi-chevron-double-right"></i>
              </a>
            </div>
          </div>
      </div>
    </div>

    <div class="col-sm-6 col-lg-3">
      <div class="bg-lineargradien3 text-center py-4 rounded-3">
          <div class="overview__inner">
            <div class="overview-box clearfix">
              <div class="icon">
                  <i class="zmdi zmdi-account-o"></i>
              </div>
              <div class="text">
                  <span class="desc">Terhutang</span>
                  <h2 class="number">21</h2>
                  <span class="desc">PBB (Rp.)</span>
                  <h4 class="number">Rp. 200.000</h4>
              </div>
              <hr>
              <a href="#" class="text-decoration-none text-white-50">
              Lihat Data<i class="bi bi-chevron-double-right"></i>
              </a>
            </div>
          </div>
      </div>
    </div>

    <div class="col-sm-6 col-lg-3">
      <div class="bg-lineargradien4 text-center py-4 rounded-3">
          <div class="overview__inner">
            <div class="overview-box clearfix">
              <div class="icon">
                  <i class="zmdi zmdi-account-o"></i>
              </div>
              <div class="text">
                  <span class="desc">Persentase Lunas</span>
                  <h3 class="number">21 %</h3>
                  <span class="desc">Persentase Terhutang</span>
                  <h3>79 %</h3>
              </div>
              <hr>
              <a href="#" class="text-decoration-none text-white-50">
              Lihat Data<i class="bi bi-chevron-double-right"></i>
              </a>
            </div>
          </div>
      </div>
    </div>

  </div>
</div>

@endsection