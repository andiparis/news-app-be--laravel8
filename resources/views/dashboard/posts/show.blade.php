@extends('dashboard.layouts.main')

@section('container')

<div class="container">
  <div class="row my-3">
    <div class="col-lg-8">
      <h2 class="mb-3">{{ $post->title }}</h2>
      <a href="/dashboard/posts" class="btn btn-success">Back to my posts</a>
      <a href="" class="btn btn-warning">Edit</a>
      <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
        @method('delete')
        @csrf
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to delete this post?')">Delete</button>
      </form>
      <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" class="img-fluid mt-3">

      <article class="my-3 fs-5">
        {!! $post->body !!}
      </article>
    </div>
  </div>
</div>

@endsection