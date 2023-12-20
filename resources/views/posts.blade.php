@extends('layouts.main')

@section('container')

@foreach ($posts as $post)
<h2>
  <a href="/post/{{ $post->slug }}">{{ $post->title }}</a>
</h2>
<h5>{{ $post->author }}</h5>
<p>{{ $post->excerpt }}</p>
@endforeach

@endsection