@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Location Category <strong>{{ $category->name }}</strong></h1>
    </div>

    <div class="col-lg-6">
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('category.update', $category->id) }}" method="POST">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="name">Location Category</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ $category->name }}">
                    @error('name') <div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <button class="btn btn-primary btn-block" type="submit">
                    Ubah
                </button>
                </form>
            </div>
        </div>
    </div>
    
  </div>

@endsection