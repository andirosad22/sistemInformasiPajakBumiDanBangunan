@extends('dashboard.layouts.main')
@section('container')
<div class="row">
    <div class="col-lg-10 mt-5">
        <div class="card">
            <div class="card-header">
                <strong><i class="bi bi-pencil-square text-primary" style="font-size: 20px"></i></i> Ubah Data SPPT [{{ $sppt->nama }}] </strong>
            </div>
            <form action="/dashboard/sppt/{{ $sppt->nop }}" method="post">
                @method('put')
                @csrf
                <div class="card-body card-block">
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">NOP</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number"  name="nop" class="form-control @error('nop') is-invalid @enderror" value="{{ Request::is('dashboard/datasppt/create')? old('nama'):$sppt->nop   }}"{{ Request::is('dashboard/datasppt/create')? 'autofocus':''}}>
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
                            <input type="text"  name="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ Request::is('dashboard/datasppt/create')? old('nama'):$sppt->nama   }}">
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
                            <input type="text"  name="alamat_op" class="form-control @error('alamat_op') is-invalid @enderror" value="{{ Request::is('dashboard/datasppt/create')? old('alamat_op'):$sppt->alamat_op }}">
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
                        <input type="text"  name="alamat_wp" class="form-control @error('alamat_wp') is-invalid @enderror" value="{{ Request::is('dashboard/datasppt/create')? old('alamat_wp'):$sppt->alamat_wp }}">
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
                            <input type="number"  name="luas" class="form-control @error('luas') is-invalid @enderror" value="{{ Request::is('dashboard/datasppt/create')? old('luas'):$sppt->luas }}">
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
                                <option value="Bumi">{{ $sppt->jenis_pajak }}</option>
                                @if ( $sppt->jenis_pajak == 'Bangunan')
                                <option value="Bumi">Bumi</option>
                                @elseif($sppt->jenis_pajak == 'Bumi')
                                <option value="Bangunan">Bangunan</option>
                                @endif
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Pajak</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="pajak" class="form-control @error('pajak') is-invalid @enderror" type-currency="IDR" value="{{ Request::is('dashboard/datasppt/create')? old('pajak'):$sppt->pajak }}">
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
                            <input type="text"  name="tahun" class="form-control @error('tahun') is-invalid @enderror" value="{{ Request::is('dashboard/datasppt/create')? old('tahun'):$sppt->tahun }}">
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
                            <input type="text"  name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{$sppt->keterangan}}" readonly>
                            @error('keterangan')
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
                    <a href="/dashboard/sppt" class="btn btn-danger btn-sm " title="tidak jadi ubah"><i class="bi bi-chevron-double-left"></i>Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection