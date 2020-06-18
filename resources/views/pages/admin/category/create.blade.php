@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Tambah Lokasi Category</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="col-lg-6">
        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('category.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Location Category</label>
                    <input type="text" class="form-control" name="name" id="title" value="{{ old('title') }}" required maxlength="32" required>
                </div>
                <button class="btn btn-primary btn-block" type="submit">
                    Simpan
                </button>
                </form>
            </div>
        </div>
    </div>
    
  </div>

@endsection