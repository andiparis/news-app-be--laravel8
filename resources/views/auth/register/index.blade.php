@extends('layouts.main')

@section('container')
  <div class="row justify-content-center">
    <div class="col-lg-5">
      <main class="form-auth">
        <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
        <form action="/register" method="post">
          @csrf
          <div class="form-floating">
            <input type="name" name="name" id="name" class="form-control rounded-top @error('name') rounded-bottom is-invalid @enderror" value="{{ old('name') }}" placeholder="Name" required>
            <label for="name">Name</label>
            @error('name')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="username" name="username" id="username" class="form-control @error('username') rounded-top rounded-bottom is-invalid @enderror" value="{{ old('username') }}" placeholder="Username" required>
            <label for="username">Username</label>
            @error('username')
              <div class="invalid-feedback">
                {{ $message }}
              </div>
            @enderror
          </div>
          <div class="form-floating">
            <input type="email" name="email" id="email" class="form-control @error('email') rounded-top rounded-bottom is-invalid @enderror" value="{{ old('email') }}" placeholder="Email address" required>
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
          <button type="submit" class="w-100 btn btn-lg btn-primary mt-3">Register</button>
          <small class="d-block mt-3">Already registered? <a href="/login">Login</a></small>
        </form>
      </main>
    </div>
  </div>
@endsection