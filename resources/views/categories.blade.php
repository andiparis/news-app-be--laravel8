@extends('layouts.main')

@section('container')

<h1 class="mb-5">{{ $title }}</h1>

<article class="mb-4">
  <ul>
    @isset($categories)
    @foreach ($categories as $category)
    <li>
      <h2><a href="/category/{{ $category->slug }}">{{ $category->name }}</a></h2>
    </li>
    @endforeach
    @endisset

    @isset($authors)
    @foreach ($authors as $author)
    <li>
      <h2><a href="/author/{{ $author->username }}">{{ $author->name }}</a></h2>
    </li>
    @endforeach
    @endisset
  </ul>
</article>

@endsection