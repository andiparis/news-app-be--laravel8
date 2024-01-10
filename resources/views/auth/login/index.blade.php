@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-auth">
      <h1 class="h3 mb-3 fw-normal text-center">Login</h1>

      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
      @if(session()->has('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif

      <form action="/login" method="post">
        @csrf
        <div class="form-floating">
          <input type="email" name="email" id="email" class="form-control rounded-top @error('email') rounded-bottom is-invalid @enderror" value="{{ old('email') }}" placeholder="Email address" required autofocus>
          <label for="email">Email address</label>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="form-floating">
          <input type="password" name="password" id="password" class="form-control rounded-bottom @error('password') rounded-top is-invalid @enderror" placeholder="Password" required>
          <label for="password">Password</label>
          @error('password')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button type="submit" class="w-100 btn btn-lg btn-primary mt-3">Login</button>
        <small class="d-block mt-3">Not registered? <a href="/register">Register Now!</a></small>
      </form>
    </main>
  </div>
</div>

@endsection