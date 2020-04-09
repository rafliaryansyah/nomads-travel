@extends('layouts.app')

@section('title', 'Detail')

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
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details mb-1">
                        <h1>Nusa Peninda</h1>
                        <p>
                            Republic of Indonesia Raya
                        </p>
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{ url('frontend/assets/images/details-1.jpg') }}" class="xzoom" id="xzoom-default" xoriginal="{{ url('frontend/assets/images/details-1.jpg') }}">
                            </div>  
                            <div class="xzoom-thumbs">
                                <a href="{{ url('frontend/assets/images/details-1.jpg') }}">
                                    <img src="{{ url('frontend/assets/images/details-1.jpg') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/assets/images/details-1.jpg') }}">
                                </a>
                                <a href="{{ url('frontend/assets/images/details-1.jpg') }}">
                                    <img src="{{ url('frontend/assets/images/details-1.jpg') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/assets/images/details-1.jpg') }}">
                                </a>
                                <a href="{{ url('frontend/assets/images/details-1.jpg') }}">
                                    <img src="{{ url('frontend/assets/images/details-1.jpg') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/assets/images/details-1.jpg') }}">
                                </a>
                                <a href="{{ url('frontend/assets/images/details-1.jpg') }}">
                                    <img src="{{ url('frontend/assets/images/details-1.jpg') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/assets/images/details-1.jpg') }}">
                                </a>
                                <a href="{{ url('frontend/assets/images/details-1.jpg') }}">
                                    <img src="{{ url('frontend/assets/images/details-1.jpg') }}" class="xzoom-gallery" width="128" xpreview="{{ url('frontend/assets/images/details-1.jpg') }}">
                                </a>
                            </div>
                        </div>
                        <h2>About Destination</h2>
                        <p>Nusa Peninda is an island southeast of Indonesia's Bali and a district of Klungkung Regency that includes the neighouring small island of Nusa Lembongan. The  Badung Strait separates the island and Bali. The interior of Nusa Penida is hilly with a maximum altitude of 524 metres. It is drier than the nearby Island of Bali.</p>
                        <p>Bali and a district of Klungkung Regency that includes the neighouring small island of Nusa Lembongan. The  Badung Strait separates the island and Bali.</p>
                        <div class="features row">
                            <div class="col-md-4">
                                <img src="{{ url('frontend/assets/images/ic_event.png') }}" alt="Logo Event" class="features-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>Tari Kecak</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{ url('frontend/assets/images/ic_bahasa.png') }}" alt="" class="features-image">
                                <div class="description">
                                  <h3>Language</h3>
                                  <p>Bahasa Indonesia</p>
                                </div>
                              </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <img src="{{ url('frontend/assets/images/ic_foods.png') }}" alt="Logo Foods" class="features-image">
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>Local Foods</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Members are going</h2>
                        <div class="members my-2">
                            <img src="{{ url('frontend/assets/images/members.png') }}" alt="" class="member-image">
                        </div>
                        <hr>
                        <h2>Trip Infomartion</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Depatures</th>
                                <th width="50%" class="text-right">22 April, 2020</th>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <th width="50%" class="text-right">5D 4N</th>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <th width="50%" class="text-right">Private Trip</th>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <th width="50%" class="text-right">$90,00 / Person</th>
                            </tr>
                        </table>
                    </div>
                    <div class="join-cointainer">
                        <a href="checkout.html" class="btn btn-block btn-join-now py-2">
                            Join Now
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
    
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/assets/libraries/xzoom/dist/xzoom.css') }}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/assets/libraries/xzoom/dist/xzoom.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>
@endpush