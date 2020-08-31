@extends('layouts.admin')

@section('content')

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
      <h1 class="h3 mb-0 text-gray-800">Edit Paket Travel {{ $item->title }}</h1>
    </div>

    <div class="card shadow">
        <div class="card-body">
            <form action="{{ route('transaction.update', $item->id) }}" method="POST">
            @method('patch')
            @csrf
            <div class="form-group">
                <label for="transaction_status">Status Transaksi</label>
                <select name="transaction_status" class="form-control" required>
                    <option value="{{ $item->transaction_status }}">
                        Jangan diubah ({{ $item->transaction_status }})
                    </option>
                    <option value="IN_CART">IN_CART</option>
                    <option value="PENDING">Pending</option>
                    <option value="SUCCESS">Success</option>
                    <option value="CANCEL">Cancel</option>
                    <option value="FAILED">Failed</option>
                </select>
            </div>
            <button class="btn btn-primary btn-block" type="submit">
                Ubah
            </button>
            </form>
        </div>
    </div>
    
  </div>

@endsection