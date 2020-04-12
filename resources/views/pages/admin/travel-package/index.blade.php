@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Paket Travel</h1>
      <a href="{{ route('travel-package.create') }}" class="btn btn-sm btn-primary shadow-sm">
          <i class="fas fa fw fa-plus fa-sm text-white-50"></i> Tambah Paket Travel
      </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-border" width="100%" cellspa>
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Title</td>
                            <td>Location</td>
                            <td>Type</td>
                            <td>Depatured Date</td>
                            <td>Type</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->location}}</td>
                                <td>{{ $item->type }}</td>
                                <td>{{ $item->depatured_date}}</td>
                                <td>{{ $item->type}}</td>
                                <td>
                                    <a href="{{ route('travel-package.edit', $item->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i>
                                    </a>
                                    <form action="{{ route('travel-package.destroy', $item->id) }}" method="POST" class=" d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="7">
                                    Data Kosong
                                </td>
                            </tr>
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    

  </div>

@endsection