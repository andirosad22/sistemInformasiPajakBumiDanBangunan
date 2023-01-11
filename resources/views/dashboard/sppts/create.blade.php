@extends('dashboard.layouts.main')

@section('container')


<div class="row">
    <div class="col-lg-10 mt-5">
        <div class="card">
            <div class="card-header">
                <strong><i class="fa fa-edit"></i> <i class="bi bi-pencil text-info" style="font-size: 20px"></i></i> Tambah Data SPPT</strong>
            </div>
            <form action="/dashboard/sppt" method="post">
                @csrf
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">NOP</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="nop" class="form-control @error('nop') is-invalid @enderror" value="{{ old('nop') }}" autofocus>
                            @error('nop')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nama</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama') }}">
                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Alamat OP</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="alamat_op" class="form-control @error('alamat_op') is-invalid @enderror" value="{{ old('alamat_op') }}">
                            @error('alamat_op')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Alamat WP</label>
                        </div>
                        <div class="col-12 col-md-9">
                        <input type="text"  name="alamat_wp" class="form-control @error('alamat_wp') is-invalid @enderror" value="{{ old('alamat_wp') }}">
                        @error('alamat_wp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                        @enderror
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Luas</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number"  name="luas" class="form-control @error('luas') is-invalid @enderror" value="{{ old('luas') }}">
                            @error('luas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="row form-group">
                    
                        <div class="col col-md-3">
                            <label for="jenis_pajak" class="form-control-label">Jenis Pajak</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="jenis_pajak" class="form-select">
                                <option value="Bumi">Bumi</option>
                                <option value="Bangunan">Bangunan</option>
                            </select>
                        </div>
                    </div>
                    
                    
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Pajak</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="pajak" class="form-control @error('pajak') is-invalid @enderror" type-currency="IDR" value="{{ old('pajak') }}">
                            @error('pajak')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Tahun</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ old('tahun') }}">
                            @error('tahun')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Keterangan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="Belum Bayar" readonly>
                            @error('keterangan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm float-end">SUBMIT
                    </button> 
                    <a href="/dashboard/sppt" class="btn btn-danger btn-sm " title="tidak jadi ubah"><i class="bi bi-chevron-double-left"></i>Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection