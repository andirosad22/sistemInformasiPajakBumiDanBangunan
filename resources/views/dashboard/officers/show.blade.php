@extends('dashboard.layouts.main')

@section('container')

<div class="row">
    <div class="col-lg-10 mt-5">
        <div class="card">
            <div class="card-header">
                <strong><i class="bi bi-person-fill" style="font-size: 20px; color:gray"></i></i> Profil </strong>
                <a class="btn btn-primary float-end" href="/dashboard/user/{{ auth()->user()->username }}/edit">Ubah</a>
            <div class="card-body text-center">
                <img class="rounded-circle" src="/image/user/profil/profilgmail.png" width="200px" alt="">
            <h5>{{ auth()->user()->name }}</h5>
            <span>{{ auth()->user()->email }}</span>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection