@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-auth">
      <h1 class="h3 mb-3 fw-normal text-center">Register</h1>
      <form action="" method="post">
        <div class="form-floating">
          <input type="name" name="name" id="name" class="form-control" placeholder="Name">
          <label for="name">Name</label>
        </div>
        <div class="form-floating">
          <input type="username" name="username" id="username" class="form-control rounded-top" placeholder="Username">
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" id="email" class="form-control" placeholder="Email address">
          <label for="email">Email address</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" id="password" class="form-control rounded-bottom" placeholder="Password">
          <label for="password">Password</label>
        </div>
        <button type="submit" class="w-100 btn btn-lg btn-primary mt-3">Register</button>
        <small class="d-block mt-3">Already registered? <a href="/login">Login</a></small>
      </form>
    </main>
  </div>
</div>

@endsection