@extends('layouts.app')

@section('title', 'Cart')

@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb" style="margin-left: 28vh;">
                            <li class="breadcrumb-item">
                                Cart
                            </li>
                            <li class="breadcrumb-item">
                                
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row  justify-content-center">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details mt-1">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h1>Hi, Rafli Aryansyah</h1>
                            <p>Selamat menikmati perjalanan.</p>
                        <div class="attendee">
                            <table class="table table-responsive-sm text-center">
                                <thead>
                                    <tr>
                                        <td>Picture</td>
                                        <td>Travel Name</td>
                                        <td>DOE Passport</td>
                                        <td>Total Price</td>
                                        <td>Status</td>
                                        <td></td>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)                            
                                    <tr>
                                        <td>
                                            <img src="{{ Storage::url($item->travel_package->galleries[1]->image) }}" alt="Name Account" height="60" class="rounded-circle">
                                        </td>
                                        <td class="align-middle">
                                            {{ $item->travel_package->title }}
                                        </td>
                                        <td class="align-middle">
                                            {{ $item->details[0]->doe_passport }}
                                        </td>
                                        <td class="align-middle">
                                            ${{ $item->travel_package->price }},00
                                        </td>
                                        <td class="align-middle">
                                            @if ( $item->transaction_status == 'PENDING')
                                                <span class="badge badge-warning">
                                            @elseif ( $item->transaction_status == 'IN_CART')
                                                <span class="badge badge-info">
                                            @elseif ( $item->transaction_status == 'SUCCESS')
                                                <span class="badge badge-success">
                                            @elseif ( $item->transaction_status == 'FAILED')
                                                <span class="badge badge-secondary">
                                            @elseif ( $item->transaction_status == 'CANCEL')
                                                <span class="badge badge-dark">
                                            @else
                                            <span>
                                            @endif
                                                {{ $item->transaction_status }}
                                            
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                Tidak ada Pembelian
                                            </td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection