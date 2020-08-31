@extends('layouts.app')
@section('title', 'Detail Travel')

@section('content')

<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active">
                                Paket Travel    /
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row mx-auto">
                <div class="col-lg-3 pl-lg-0">
                    <div class="card card-details mb-1">
                        <h2>By Location</h2>
                        <table class="trip-informations">
                            <tr>
                                <th>
                                    <a href="/travel-package">
                                        All
                                    </a>
                                </th>
                            </tr>
                            @foreach ($categories as $category)
                                <tr>
                                    <th>
                                        <a href="{{ route('travel.category', $category->slug) }}">
                                            {{ $category->name }}
                                        </a>
                                    </th>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
                <div class="col-lg-9 pl-lg-0">
                    <div class="card card-details mb-1">
                        <section class="section-popular-content" id="popularContent" style="min-height: 380px;">
                            <div class="container">
                              <div class="section-popular-travel row" >
                                @foreach ($items as $item)
                                <div class="col-sm-6 col-md-4 col-lg-3" >
                                    <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                                        <div class="travel-country">{{ $item->location }}</div>
                                        <div class="travel-location">{{ $item->title }}</div>
                                        <div class="travel-button mt-auto">
                                        <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-2">Detail</a>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                              </div>
                            </div>
                        </section>
                </div>
            </div>
        </div>
    </section>
</main>
    
@endsection