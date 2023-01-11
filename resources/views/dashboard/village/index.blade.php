@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col-lg-10 mt-5">
        <div class="card">
            <div class="card-header">
                <strong><i class="fa fa-edit"></i> <i class="bi bi-pencil text-info" style="font-size: 20px"></i></i> Profile Desa</strong><br>
                {{-- <a href="/dashboard/officers" class="btn btn-danger btn-sm " title="tidak jadi ubah"><i class="bi bi-chevron-double-left"></i> Kembali</a> --}}
                <a href="/dashboard/village/{{ $village->username }}/edit" class="btn btn-primary btn-sm float-end" title="tidak jadi ubah"><i class="bi bi-pencil-square"></i> ubah</a>
            </div>
            <form action="/dashboard/officers" method="post">
                @csrf
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nama Desa</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="nama_desa" class="form-control @error('nama_desa') is-invalid @enderror" value="Desa Bangbayang" readonly>
                            @error('nama_desa')
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
                            <input type="text"  name="username" class="form-control @error('username') is-invalid @enderror" value="desabangbayang" readonly>
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
                            <input type="text"  name="alamat" class="form-control @error('alamat') is-invalid @enderror" value="jalan Eyang Purwa No. 66 Bangbayang, Bantarkawung, Brebes" readonly>
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
                            <input type="text"  name="kontak" class="form-control @error('kontak') is-invalid @enderror" value="083837269266" readonly>
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
                            <input type="text"  name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" value="Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci exercitationem quidem ipsa libero voluptates optio repudiandae soluta eligendi quasi eius voluptate quibusdam ducimus saepe, eos quisquam? Veniam assumenda nam ipsum." readonly>
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection