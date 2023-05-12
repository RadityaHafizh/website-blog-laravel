@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit User</h1>
  </div>

  <div class="col-lg-8">
  <form method="post" action="/dashboard/users/{{ auth()->user()->username }}" class="mb-5" enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" autofocus required value="{{ old('name', auth()->user()->name) }}">
      @error('name')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
      
    </div>
    <div class="mb-3">
      <label for="username" class="form-label">username</label>
      <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username', auth()->user()->username) }}">
      @error('username')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="image" class="form-label @error('image') is-invalid @enderror">User Image</label>
      <input type="hidden" name="oldImage" value="{{ auth()->user()->image }}">
      @if (auth()->user()->image)
        <img src="{{ asset('storage/' . auth()->user()->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
      @else
        <img class="img-preview img-fluid mb-3 col-sm-5">
      @endif
      
      <input class="form-control" type="file" id="image" name="image" onchange="previewImage()">
      @error('image')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <div class="mb-3">
      <label for="email" class="form-label">email</label>
      <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', auth()->user()->email) }}">
      @error('email')
      <div class="invalid-feedback">
        {{ $message }}
      </div>
      @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update User</button>
  </form>
</div>

{{-- <script>
  const title = document.querySelector('#title');
  const slug = document.querySelector('#slug');

  title.addEventListener('change', function(){
    fetch('/dashboard/posts/checkSlug?title=' + title.value)
      .then(response => response.json())
      .then(data => slug.value = data.slug)
  });
</script> --}}

@endsection