@extends('dashboard.layouts.main')

@section('container')
<div class="row">
  <div class="col-lg-10 mt-5">
      <div class="card">
          <div class="card-header">
              <strong><i class="bi bi-pencil-square text-primary" style="font-size: 20px"></i></i> Ubah Data SPPT [{{ $sppt->nama }}] </strong>
          </div>
          <form action="/dashboard/receivepayment/{{ $sppt->nop }}/edit" method="post">
              @method('put')
              @csrf
              <div class="card-body card-block">

                <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">NOP</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="number"  name="nop" class="form-control @error('nop') is-invalid @enderror" value="{{ $sppt->nop }}"{{ Request::is('dashboard/datasppt/create')? 'autofocus':''}} readonly>
                  </div>
              </div>
              
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Nama</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text"  name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ Request::is('dashboard/datasppt/create')? old('nama'):$sppt->nama   }}" readonly>
                      @error('nama')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>
              </div>
              
              <div class="row form-group">
                  <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Pajak</label>
                  </div>
                  <div class="col-12 col-md-9">
                      <input type="text"  name="pajak" class="form-control @error('pajak') is-invalid @enderror" value="{{ Request::is('dashboard/datasppt/create')? old('pajak'):$sppt->pajak }}" readonly>
                      @error('pajak')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>
              </div>
    
              <div class="row form-group">
                  <div class="col-12 col-md-9">
                      <input type="hidden"  name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="Petugas" readonly>
                      @error('keterangan')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                  </div>
              </div>

              </div>
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary btn-sm float-end">Bayar
                  </button> 

                  <a href="/dashboard/receivepayment" class="btn btn-danger btn-sm " title="tidak jadi ubah"><i class="bi bi-chevron-double-left"></i>Kembali</a>
              </div>
          </form>
      </div>
  </div>
</div>
@endsection