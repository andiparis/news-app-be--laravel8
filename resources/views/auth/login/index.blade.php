@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-auth">
      <h1 class="h3 mb-3 fw-normal text-center">Login</h1>
      <form action="" method="post">
        <div class="form-floating">
          <input type="email" name="email" id="email" class="form-control rounded-top" placeholder="Email address">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" id="password" class="form-control rounded-bottom" placeholder="Password">
          <label for="password">Password</label>
        </div>
        <button type="submit" class="w-100 btn btn-lg btn-primary mt-3">Login</button>
        <small class="d-block mt-3">Not registered? <a href="/register">Register Now!</a></small>
      </form>
    </main>
  </div>
</div>

@endsection