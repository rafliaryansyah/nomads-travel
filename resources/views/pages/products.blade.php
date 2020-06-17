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
                            <li class="breadcrumb-item">
                                Paket Travel
                            </li>
                            <li class="breadcrumb-item active">
                                Products
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-3">
                    <div class="card card-details card-right">
                        <h2>By Category</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Sumatra</th>
                            </tr>   
                            <tr>
                                <th width="50%">Borneo</th>
                            </tr>
                            <tr>
                                <th width="50%">Java</th>
                            </tr>
                            <tr>
                                <th width="50%">Sulawesi</th>
                            </tr>
                            <tr>
                                <th width="50%">Papua</th>
                            </tr>
                        </table>
                        <h2 class="mt-2">By Price</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">$0 - $100</th>
                            </tr>   
                            <tr>
                                <th width="50%">$100 - $500</th>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="col-lg-9 pl-lg-0">
                    <div class="card card-details mb-1">
                        <section class="section-popular-content" id="popularContent">
                            <div class="container">
                              <div class="section-popular-travel row justify-content-center" style="min-height: 100px !important;">
                                @foreach ($items as $item)
                                <div class="col-sm-6 col-md-4 col-lg-3">
                                  <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ $item->galleries->count() ? Storage::url($item->galleries->first()->image) : '' }}');">
                                    <div class="travel-country">{{ $item->location }}</div>
                                      <div class="travel-location">{{ $item->title }}</div>
                                      <div class="travel-button mt-auto">
                                      <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">View Details</a>
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