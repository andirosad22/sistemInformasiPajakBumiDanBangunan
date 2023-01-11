@extends('dashboard.layouts.main')

@section('container')
@include('sweetalert::alert')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3">
    <h2 class="h2">Data Pokja</h2>
    </div>
    <div class="row my-3 border-bottom col-md-9">
        <div class="col-lg-2 mb-2">
        <a href="/dashboard/officers/create" class="btn btn-success"><i class="bi bi-person-plus"></i> Tambah</a>
        </div>
    </div>

    <div class="table-responsive col-md-9">
        <table class="table">
        <thead class="table-dark">
            <tr class="">
                <th scope="col">No</th>
            <th scope="col">Gambar</th>
            <th scope="col">Nama</th>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">Jenis User</th>
            <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
                @foreach ($users as $user)
            <tr class="border-bottom">
            <td>{{ $loop->iteration }}</td>
            <td>
                @if ($user['image'])
                <img src="" alt="">
                @else
                <i class="bi bi-person-bounding-box fs-2"></i>
                @endif
            </td>
            <td>{{ $user['name'] }}</td>
            <td>{{ $user['username'] }}</td>
            <td>{{ $user['email'] }}</td>
            <td>{{ $user['jenis_user'] }}</td>
            <td>
                <form action="/dashboard/officers/{{ $user->username }}" method="POST" class="d-inline">
                    @method('DELETE')   
                    @csrf
                    <button class=" p-0 border-0 "title="Hapus SPPT" onclick="return confirm('yakin mau di hapus?')"><i class="bi bi-trash3 text-danger" style="font-size: 20px"></i></button>
                </form>
            </td>            
            </tr>
            @endforeach
        </tbody>
        </table>
        </div>
@endsection