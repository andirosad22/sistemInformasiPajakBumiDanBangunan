@extends('dashboard.layouts.main')

@section('container')    
    <div class="container mt-5 " style="background: #f5f5f5">
        <div class="row">
            <div class="col-lg-5">
                <form action="/dashboard/sppt/import" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="mb-3">
                    <label for="importexcel" class="form-label">Default file input example</label>
                    <input class="form-control" name="importExcel" type="file" id="importexcel">
                </div>
                <button type="submit" class="btn btn-primary mb-3" value="Import">Submit</button>
                </form>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <ol>
            <li>Gunakan Ms.Office Excell untuk input data</li>
            <li>Isi pada baris pertama dengan angka nol</li>
            <li>
                Isi kolom A dengan Nomor Urut pada DHKP
            </li>
            <li>Isi kolom B dengan Nomor Objek Pajak (NOP)</li>
            <li>Isi kolom C dengan Nama Wajib Pajak </li>
            <li>Isi kolom D dengan Luas Bumi</li>
            <li>Isi kolom D dengan Luas Bumi</li>
            <li>Isi kolom E dengan Luas Bangunan</li>
            <li>Isi kolom F dengan Nominal Pajak PBB</li>
            <li>Isi kolom G dengan Alamat Objek Pajak</li>
            <li>Isi kolom H dengan Alamat Wajib Pajak</li>
            <li>Isi kolom I dengan keterangan = Belum Bayar </li>
            <li>Lihat Contoh Pengisian dibawah ini </li>

        </ol>
    </div>
@endsection