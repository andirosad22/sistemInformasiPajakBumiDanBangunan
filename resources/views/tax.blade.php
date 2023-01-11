@extends('layouts.main')
@section('container')


<div class="row justify-content-center">
  <div class="col-md-6">
    <a href="">
      <img class="mb-4" src="/image/logo/logoDesa.png" width="204.8px" height="197px" alt="Logo Desa">
    </a>
    <h1 class="h3 mb-3 fw-normal">Cek PBB</h1>
    <form action="/taxcheck">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="NOP(33329020...)" name="search" value="{{ request('search') }}">
        <button class="btn btn-outline-primary" type="submit">Cari</button>
      </div>
    </form>
  </div>
</div>


<div class="col-lg-12">
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col" class="hpnotampil">NOP</th>
      <th scope="col">Nama</th>
      <th scope="col">Tahun</th>
      <th scope="col">Pajak</th>
      <th scope="col">Keterangan</th>
      <th scope="col">Petugas</th>
    </tr>
  </thead>
  <tbody>
    @if ($sppts === "Null")
    @else
        
    @foreach ($sppts as $sppt)
      
    <tr>
      <th scope="row">{{ $loop->iteration }}</th>
      <td scope="row" class="hpnotampil">{{ $sppt['nop'] }}</td>
      <td scope="row">{{ $sppt['nama'] }}</td>
      <td scope="row">{{ $sppt['tahun'] }}</td>
      <td scope="row">Rp.{{ $sppt['pajak'] }}</td>
      <td scope="row"> <span class="p-2 text-white rounded {{ ($sppt['keterangan']==='Lunas')?'bg-info':(($sppt['keterangan']==='Petugas')?'bg-warning':'bg-danger') }} ">{{ $sppt['keterangan'] }}</span></td>
      <td scope="row">{{ $sppt->user->name }}</td>
    </tr>
    @endforeach
    @endif
    

  </tbody>
</table>
</div>
<div class="" style="margin-top: 170px"></div>
@endsection