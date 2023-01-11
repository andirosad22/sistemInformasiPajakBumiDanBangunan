@extends('dashboard.layouts.main')
@section('container')
@include('sweetalert::alert')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h2 class="h2">Data SPPT Rekapitulasi</h2>
    </div>
    {{-- <div class="row my-3 border-bottom col-md-9">
        <div class="col-lg-2 mb-2">
        <a href="/dashboard/sppt/create" class="btn btn-success"> <i class="bi bi-printer-fill"></i> Print</a>
        </div>
        
        <div class="col-lg-2 mb-2">
        <a href="#" class="btn btn-primary"><i class="bi bi-person-fill"></i> {{ Str::length($sppts) }}</a>
        </div>
    </div> --}}
    <div class="table-responsive col-md-10">
        <table class="table">
        <thead class="table-dark">
            <tr class="">
            <th scope="col">Jummlah NOP</th>
            <th scope="col">Total Pajak</th>
            <th scope="col">Lunas</th>
            <th scope="col">pajak(Rp)</th>
            <th scope="col">Terhutang</th>
            <th scope="col">pajak(Rp)</th>
            <th scope="col">Persentase</th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-bottom">
            <td>
                10
            </td>
            <td>Rp. 2.000.000</td>
            <td>4</td>
            <td>Rp. 500.000</td>
            <td>6</td>
            <td>Rp. 1.500.000</td>
            <td>35%</td>
            </tr>
        </tbody>
        </table>
        </div>
@endsection