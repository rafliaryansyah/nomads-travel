@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('travel-package.update', $item->id) }}" method="POST">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{ $item->title }}">
                @error('title') <div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" id="location" value="{{ $item->location }}">
                @error('location') <div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="about">About</label>
                <textarea name="about" id="about" rows="10" class="d-block w-100 form-control @error('about') is-invalid @enderror">{{ $item->about }}</textarea>
                @error('about') <div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="featured_event">Featured Event</label>
                <input type="text" class="form-control @error('featured_event') is-invalid @enderror" name="featured_event" id="featured_event" value="{{ $item->featured_event }}">
                @error('featured_event') <div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="language">Language</label>
                <input type="text" class="form-control @error('language') is-invalid @enderror" name="language" id="language" value="{{ $item->language }}">
                @error('language') <div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="foods">Foods</label>
                <input type="text" class="form-control @error('foods') is-invalid @enderror" name="foods" id="foods" value="{{ $item->foods }}">
                @error('foods') <div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="depatured_date">Depatured Date</label>
                <input type="date" class="form-control @error('depatured_date') is-invalid @enderror" name="depatured_date" id="depatured_date" value="{{ $item->depatured_date }}">
                @error('depatured_date') <div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="duration">Duration</label>
                <input type="text" class="form-control @error('duration') is-invalid @enderror" name="duration" id="duration" value="{{ $item->duration }}">
                @error('duration') <div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="type">Type</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type" id="type" value="{{ $item->type }}">
                @error('type') <div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label for="price">price</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price" id="price" value="{{ $item->price }}">
                @error('price') <div class="invalid-feedback">{{ $message }}</div>@enderror
            </div>
            <button class="btn btn-primary btn-block" type="submit">
                Ubah
            </button>
            </form>
        </div>
    </div>
    
  </div>

@endsection