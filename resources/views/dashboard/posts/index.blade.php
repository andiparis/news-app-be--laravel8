@extends('dashboard.layouts.main')

@section('container')
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">My Posts</h1>
  </div>

  @if (session()->has('success'))
    <div class="alert alert-success" role="alert">
      {{ session('success') }}
    </div>
  @endif

  <div class="table-responsive">
    <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create new post</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <td scope="col">#</td>
          <td scope="col">Title</td>
          <td scope="col">Category</td>
          <td scope="col">Action</td>
        </tr>
      </thead>
      <tbody>

        @foreach ($posts as $post)
          <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $post->title }}</td>
            <td>{{ $post->category->name }}</td>
            <td>
              <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info">Show</a>
              <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning">Edit</a>
              <form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are you sure to delete this post?')">Delete</button>
              </form>
            </td>
          </tr>
        @endforeach

      </tbody>
    </table>
  </div>
@endsection