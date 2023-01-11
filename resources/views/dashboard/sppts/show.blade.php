@extends('dashboard.layouts.main')

@section('container')

<div class="row">
    <div class="col-lg-10 mt-5">
        <div class="card">
            <div class="card-header">
                <strong><i class="fa fa-edit"></i><i class="bi bi-eye text-primary" style="font-size: 20px"></i></i> Tampil [{{ $sppt->nama }}]</strong>
            </div>
                <div class="card-body card-block">

                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">NOP</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number"  name="nop" class="form-control" value="{{ $sppt->nop   }}">
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Nama</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="nama" class="form-control" value="{{ $sppt->nama}}">
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Alamat OP</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="alamat_op" class="form-control" value="{{ $sppt->alamat_op }}">
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Alamat WP</label>
                        </div>
                        <div class="col-12 col-md-9">
                        <input type="text"  name="alamat_wp" class="form-control" value="{{ $sppt->alamat_wp }}">
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Luas</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="number"  name="luas" class="form-control" value="{{ $sppt->luas }}">
                        </div>
                    </div>
                    <div class="row form-group">
                    
                        <div class="col col-md-3">
                            <label for="jenis_pajak" class="form-control-label">Jenis Pajak</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <select name="jenis_pajak" class="form-select">
                                <option value="Bumi">{{ $sppt->jenis_pajak }}</option>
                            </select>
                        </div>
                    </div>
                    
                    
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Pajak</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="pajak" class="form-control" type-currency="IDR" value="{{ $sppt->pajak }}">
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Tahun</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="tahun" class="form-control" value="{{ $sppt->tahun }}">                            
                        </div>
                    </div>
                    
                    <div class="row form-group">
                        <div class="col col-md-3">
                            <label for="text-input" class=" form-control-label">Keterangan</label>
                        </div>
                        <div class="col-12 col-md-9">
                            <input type="text"  name="keterangan" class="form-control" value="Belum Bayar" readonly>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <a href="/dashboard/sppt" class="btn btn-danger btn-sm " title="tidak jadi ubah"><i class="bi bi-chevron-double-left"></i>Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection