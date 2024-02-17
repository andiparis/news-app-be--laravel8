@extends('layouts.main')

@section('container')
  <h1 class="mb-5">{{ $title }}</h1>

  <div class="container">
    <div class="row">
      @isset($categories)
        @foreach ($categories as $category)
          <div class="col-md-4">
            <a href="/posts?category={{ $category->slug }}">
              <div class="card bg-dark text-white">
                <img src="https://source.unsplash.com/500x500?{{ $category->name }}" class="card-img">
                <div class="card-img-overlay d-flex align-items-center p-0">
                  <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0.5);">{{ $category->name }}</h5>
                </div>
              </div>
            </a>
          </div>
        @endforeach
      @endisset

      @isset($authors)
        @foreach ($authors as $author)
          <ul>
            <li>
              <h2><a href="/posts?author={{ $author->username }}">{{ $author->name }}</a></h2>
            </li>
          </ul>
        @endforeach
      @endisset
    </div>
  </div>
@endsection