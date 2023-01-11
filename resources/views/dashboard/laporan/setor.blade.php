@extends('dashboard.layouts.main')
@section('container')
@include('sweetalert::alert')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h2 class="h2">Data SPPT Setor</h2>
    </div>
    <a href="{{ route('exportSetorLaporan') }}">Export</a>
    <div class="d-flex justify-content-center">
        <div class="row">
            <div class="col-6">
                <form action="{{ route('exportSetorLaporan') }}" method="GET">
                    <input type="text" id="min" name="min">
                    <input type="text" id="min" name="min">
                    <button class="warning">Cetak Setor</button>
                </form>
            </div>
            <div class="col-6">
                <input type="text" id="max" name="max">
                <input type="text" id="max" name="max">
            </div>
        </div>
    </div>
    {{-- <div class="row my-3 border-bottom col-md-9">

        <div class="table-data__tool mb-3">

            <div class="table-data__tool-right mr-5">
                <div class="row">
                
                    <div class="col-6">
                        <div class="form-group">
                            <label for="cc-exp" class="control-label mb-1">Tanggal Awal</label>
                            <input id="tgl_awal" name="tgl_awal" type="date" class="form-control cc-exp">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="cc-exp" class="control-label mb-1">Tanggal Akhir</label>
                            <input id="tgl_akhir" name="tgl_akhir" type="date" class="form-control cc-exp">
                        </div>
                    </div>
                </div>
                    <div class="col-lg-2 mt-2">
                        <a href="/dashboard/sppt/create" class="btn btn-primary"> <i class="bi bi-printer-fill"></i> Print</a>
                    </div>
            </div>
        </div>
    </div> --}}

    <div class="table-responsive col-md-9">
        <table class="table">
        <thead class="table-dark">
            <tr class="">
            <th scope="col">No</th>
            <th scope="col">NOP/Nama/Alamat OP/Alamat WP/Jenis/Luas/Tahun</th>
            <th scope="col">Pajak</th>
            <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sppts as $sppt)
            <tr class="border-bottom">
            <td>{{ $loop->iteration }}</td>
            <td>
                <ul>
                <li class="list-unstyled">NOP : {{ $sppt->nop }}</li>
                <li class="list-unstyled">Nama : {{ $sppt->nama }}</li>
                <li class="list-unstyled">Alamat OP : {{ $sppt->alamat_op }}</li>
                <li class="list-unstyled">Alamat WP : {{ $sppt->alamat_wp }}</li>
                <li class="list-unstyled ">Jenis Pajak : {{ $sppt->jenis_pajak }}</li>
                <li class="list-unstyled">Luas : {{ $sppt->luas }} m<sup>2</sup></li>
                <li class="list-unstyled ">Tahun : {{ $sppt->tahun}}</li>
                </ul>
            </td>
            <td>{{ $sppt->pajak }} </td>
            <td scope="row">
                <span class="p-1 text-white rounded {{ ($sppt->keterangan === 'Lunas')? 'bg-success' : (($sppt->keterangan === 'Petugas')? 'bg-warning' : 'bg-danger') }} ">{{ $sppt->keterangan }}</span>
            </td>
            
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
@endsection