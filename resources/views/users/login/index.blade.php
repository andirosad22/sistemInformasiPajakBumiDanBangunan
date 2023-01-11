@extends('layouts.main')
@section('container')
<div class="row justify-content-center" style="height: 79vh;">
    <div class="col-md-5">

      @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <i class="bi bi-check-circle-fill"></i>
          {{ session('success') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
      @if (session()->has('masukGagal'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
          <i class="bi bi-check-circle-fill"></i>
          {{ session('masukGagal') }}
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif
        <main class="form-signin">
            {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="login SIPBBD" width="72" height="57"> --}}
            <h1 class="h3 mb-3 fw-normal text-center">Masuk SIPBBD</h1>
            <form action="/login" method="POST">
              @csrf
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com"  autofocus value="{{ old('email') }}" required>
                <label for="email">Alamat Email</label>

                @error('email')
                    <div class="invalid-feed">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password">
                <label for="password" required>Password</label>
                @error('email')
                    <div class="invalid-feed">
                      {{ $message }}
                    </div>
                @enderror
              </div>
              <button class="w-100 btn btn-lg btn-primary" type="submit">Masuk</button>
            </form>
            <small>Belum daftar? daftar di <a href="/registration">sinih</a> </small>
          </main>
    </div>
</div>
@endsection