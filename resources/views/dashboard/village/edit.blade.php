@extends('dashboard.layouts.main')

@section('container')

<div class="row">
    <div class="col-lg-10 mt-5">
        <div class="card">
            <div class="card-header">
                <strong><i class="bi bi-pencil-square text-primary" style="font-size: 20px"></i></i> Ubah Data Village [{{ $village->nama }}] </strong>
            </div>
            <form action="/dashboard/village/{{ $village->username }}" method="post">
                @method('put')
                @csrf
                <div class="card-body card-block">

                                        
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nama</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ Request::is('dashboard/datavillage/create')? old('nama'):$village->nama   }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Username</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="username" class="form-control @error('username') is-invalid @enderror" value="{{ Request::is('dashboard/datavillage/create')? old('username'):$village->username }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Alamat</label>
                        </div>
                        <div class="col-12 col-md-9">
                        <input type="text"  name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ Request::is('dashboard/datavillage/create')? old('alamat'):$village->alamat }}">
                        @error('alamat')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                        @enderror
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Kontak</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number"  name="kontak" class="form-control @error('kontak') is-invalid @enderror" value="{{ Request::is('dashboard/datavillage/create')? old('kontak'):$village->kontak }}">
                            @error('kontak')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>                    
                    
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Deskripsi</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" type-currency="IDR" value="{{ Request::is('dashboard/datavillage/create')? old('deskripsi'):$village->deskripsi }}">
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm float-end">UBAH
                    </button> 
                    <a href="/dashboard/village" class="btn btn-danger btn-sm " title="tidak jadi ubah"><i class="bi bi-chevron-double-left"></i>Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection