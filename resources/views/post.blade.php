@extends('layouts.main')

@section('container')

<h2>{{ $post->title }}</h2>
<p>
  By <a href="#">{{ $post->user->name }}</a>
  in <a href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a>
</p>
{!! $post->body !!}

<a href="/posts" class="d-block mt-3">Back to posts</a>

@endsection