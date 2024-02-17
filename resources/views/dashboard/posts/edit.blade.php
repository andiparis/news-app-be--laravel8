@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Edit Post</h1>
</div>

<div class="col-lg-8">
  <form action="/dashboard/posts/{{ $post->slug }}" method="post" enctype="multipart/form-data" class="mb-5">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="title" class="form-label">Title</label>
      <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title', $post->title) }}" required autofocus>
      @error('title')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="slug" class="form-label">Slug</label>
      <input type="text" name="slug" id="slug" class="form-control @error('slug') is-invalid @enderror" value="{{ old('slug', $post->slug) }}" required>
      @error('slug')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="category" class="form-label">Category</label>
      <select name="category_id" id="category" class="form-select" required>
        @foreach ($categories as $category)
        @if (old('category_id', $post->category_id) == $category->id)
        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
        @endforeach
      </select>
    </div>
    <div class="mb-3">
      <label for="image" class="form-label">Post Image</label>
      <input type="hidden" name="old_image" value="{{ $post->image }}">
      @if ($post->image)
      <img src="{{ asset('storage/' . $post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
      @else
      <img class="img-preview img-fluid mb-3 col-sm-5">
      @endif
      <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror" onchange="imgPreview()">
      @error('image')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>
    <div class="mb-3">
      <label for="body" class="form-label">Body</label>
      <input type="hidden" name="body" id="body" value="{{ old('body', $post->body) }}">
      <trix-editor input="body"></trix-editor>
      @error('body')
      <p class="text-danger">{{ $message }}</p>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Update Post</button>
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

  const imgPreview = () => {
    const img = document.querySelector("#image");
    const imgPreview = document.querySelector('.img-preview');

    imgPreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(img.files[0]);
    oFReader.onload = (oFREvent) => imgPreview.src = oFREvent.target.result;
  }
</script>
@endsection