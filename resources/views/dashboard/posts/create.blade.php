@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Create New Post</h1>
</div>

<div class="col-lg-8">
  <form action="/dashboard/posts" method="post">
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control">
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" name="slug" id="slug" class="form-control">
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select name="category_id" id="category" class="form-select">
        @foreach ($categories as $category)
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <input type="hidden" name="body" id="body">
      <trix-editor input="body"></trix-editor>
    </div>
    <button type="submit" class="btn btn-primary">Create Post</button>
  </form>
</div>

<script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  // title.addEventListener('change', () =>
  //   fetch('/dashboard/posts/checkSlug?title=' + title.value)
  //     .then(response => response.json())
  //     .then(data => slug.value = data.slug)
  // );
  title.addEventListener('change', () => {
    const slugValue = title.value.trim().toLowerCase().replace(/\s+/g, '-');
    slug.value = slugValue;
  });

  document.addEventListener('trix-file-accept', (e) => e.preventDefault());
</script>
@endsection