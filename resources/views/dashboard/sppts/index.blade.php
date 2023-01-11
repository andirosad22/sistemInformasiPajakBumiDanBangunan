@extends('dashboard.layouts.main')

@section('container')
@include('sweetalert::alert')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h2 class="h2">Data SPPT</h2>
    </div>
    <div class="row my-3 border-bottom col-md-9">
        <div class="col-lg-2 mb-2">
        <a href="/dashboard/sppt/create" class="btn btn-success">+ Tambah</a>
        </div>
        
        <div class="col-lg-2 mb-2">
        <a href="/dashboard/sppt/import" class="btn btn-primary">+ Impor</a>
        </div>
    </div>

    <div class="table-responsive col-md-9">
        <table class="table">
        <thead class="table-dark">
            <tr class="">
            <th scope="col">No</th>
            <th scope="col">NOP/Nama/Alamat OP/Alamat WP/Jenis/Luas/Tahun</th>
            <th scope="col">Pajak</th>
            <th scope="col">Aksi</th>
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
            <td>
                <a href="/dashboard/sppt/{{ $sppt->nop }}" title="Lihat SPPT"><i class="bi bi-eye text-success" style="font-size: 20px"></i></a>
                <a href="/dashboard/sppt/{{ $sppt->nop }}/edit" title="Ubah SPPT"><i class="bi bi-pencil-square " style="color: blue; font-size: 20px"></i></a>
                <form action="/dashboard/sppt/{{ $sppt->nop }}" method="POST" class="d-inline">
                @method('DELETE')   
                @csrf
                <button class=" p-0 border-0 "title="Hapus SPPT" onclick="return confirm('yakin mau di hapus?')"><i class="bi bi-trash3 text-danger" style="font-size: 20px"></i></button>
                </form>
            </td>
            <td scope="row">
                <span class="p-1 text-white rounded {{ ($sppt->keterangan === 'Lunas')? 'bg-success' : (($sppt->keterangan === 'Petugas')? 'bg-warning' : 'bg-danger') }} ">{{ $sppt->keterangan }}</span>
            </td>
            
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
@endsection