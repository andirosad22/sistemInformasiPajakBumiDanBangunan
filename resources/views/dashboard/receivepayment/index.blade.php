@extends('dashboard.layouts.main')
@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Terima Pembayaran</h1>
  </div>
  <div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">
                <strong>Terima Pembayaran</strong>
            </div>
            <div class="card-body card-block">
                <div class="row form-group">
                    <div class="col-12 col-md-9">
                        <form action="/dashboard/receivepayment">
                            <div class="input-group mb-3">
                              <input type="text" class="form-control" placeholder="NOP(33329020...)" name="search" value="{{ request('search') }}">
                              <button class="btn btn-outline-primary" type="submit">Cari</button>
                            </div>
                          </form>
                    </div>
                    <div class="col-12 col-md-9">
                        <table class="table ">
                            <thead class="table-dark">
                              <tr class="">
                                <th scope="col">No</th>
                                <th scope="col">NOP</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Bayar</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($sppts as $sppt)
                              <tr class="border-bottom">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $sppt->nop }}</td>
                                <td>{{ $sppt->nama }}</td>
                                @if ($sppt->keterangan == 'Belum Bayar')   
                                <td>
                                  <a href="/dashboard/receivepayment/{{ $sppt->nop }}" title="Klik bayar"><i class="bi bi-cash text-white bg-success px-4 rounded" style="font-size: 20px;"></i></a>
                                </td>                                
                                @else
                                <td><span class="bg-warning py-1 px-2 rounded text-white" title="Sudah Bayar">{{ $sppt->keterangan }}</span></td>
                                @endif
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection