@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">User</h1>
  </div>

  @if (session()->has('success'))
  <div class="alert alert-success col-lg-6" role="alert">
    {{ session('success') }}
  </div>
  @endif

  @if (session()->has('deleted'))
  <div class="alert alert-danger col-lg-6" role="alert">
    {{ session('deleted') }}
  </div>
  @endif

  

  <div class="col-lg-6">
    @if (auth()->user()->image)
    <img src="{{ asset('storage/' . auth()->user()->image) }}" class=" img-fluid mb-3 col-sm-5 d-block">
  @else
    <img class="img-preview img-fluid mb-3 col-sm-5">
  @endif
    <h4>Name : {{ auth()->user()->name }}</h4>
    <h6>Username : {{ auth()->user()->username }}</h6>
    <p>Email :{{ auth()->user()->email }}</p>
  </div>

  <a href="/dashboard/users/{{ auth()->user()->username }}/edit" class="btn bg-warning"> <span data-feather="edit"></span> Edit</a>

@endsection