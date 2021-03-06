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
                                Details
                            </li>
                        </ol>
                    </nav>
                </div>
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
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details mb-1">
                        <h1>{{ $item->title }}</h1>
                        <p>
                            {{ $item->location }}
                        </p>
                        @if ($item->galleries->count() > 0)
                        <div class="gallery">
                            <div class="xzoom-container">
                                <img src="{{ Storage::url($item->galleries->first()->image) }}" class="xzoom" id="xzoom-default" xoriginal="{{ Storage::url($item->galleries->first()->image) }}">
                            </div>  
                            <div class="xzoom-thumbs">
                                @foreach ($item->galleries as $gallery)
                                <a href="{{ Storage::url($gallery->image ) }}">
                                    <img src="{{ Storage::url($gallery->image) }}" class="xzoom-gallery" width="128" xpreview="{{ Storage::url($gallery->image) }}">
                                </a>
                                @endforeach
                            </div>
                        </div>
                        @endif
                        <h2>About Destination</h2>
                        {!! $item->about !!}
                        <div class="features row">
                            <div class="col-md-4">
                                <img src="{{ url('frontend/assets/images/ic_event.png') }}" alt="Logo Event" class="features-image">
                                <div class="description">
                                    <h3>Featured Event</h3>
                                    <p>{{ $item->featured_event }}</p>
                                </div>
                            </div>
                            <div class="col-md-4 border-left">
                                <img src="{{ url('frontend/assets/images/ic_bahasa.png') }}" alt="" class="features-image">
                                <div class="description">
                                  <h3>Language</h3>
                                  <p>{{ $item->language }}</p>
                                </div>
                              </div>
                            <div class="col-md-4 border-left">
                                <div class="description">
                                    <img src="{{ url('frontend/assets/images/ic_foods.png') }}" alt="Logo Foods" class="features-image">
                                    <div class="description">
                                        <h3>Foods</h3>
                                        <p>{{ $item->foods }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Trip Infomartion</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Date of Depatures</th>
                                <th width="50%" class="text-right">
                                    {{ \Carbon\Carbon::create($item->date_of_detapture)->format('F n, Y') }}
                                </th>
                            </tr>
                            <tr>
                                <th width="50%">Duration</th>
                                <th width="50%" class="text-right">{{ $item->duration }}</th>
                            </tr>
                            <tr>
                                <th width="50%">Type</th>
                                <th width="50%" class="text-right">{{ $item->type }}</th>
                            </tr>
                            <tr>
                                <th width="50%">Price</th>
                                <th width="50%" class="text-right">$ {{ $item->price }},00 / Person</th>
                            </tr>
                        </table>
                    </div>
                    <div class="join-cointainer">
                        @auth
                            <form action="{{ route('checkout_process', $item->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-block btn-join-now mt-3 py-2">Join Now</button>
                            </form>
                        @endauth
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                Login or Register to Join
                            </a>
                        @endguest
                    </div>
                </div>
            </div>
            <div class="row mt-2">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details mb-1">
                        @auth
                            <form action="{{ route('detail.comment.store', $item) }}" method="post">
                                @csrf
                                @method('POST')
                                <textarea class="form-control" id="" name="comment" cols="30" rows="2" placeholder="Berikan komentar anda...">{{ old('comment') }}</textarea>
                                <button class="btn btn-block btn-join-now" type="submit">Komentar!</button>
                            </form>
                        @endauth
                        @guest
                            <a href="{{ route('login') }}" class="btn btn-block btn-join-now mt-3 py-2">
                                Login or Register for comment
                            </a>
                        @endguest
                        <h1 class="mt-3">Komentar mereka...</h1>
                            @foreach ($item->comment()->get() as $comment)
                                <div class="form-group row container mt-3">
                                        <div class="text-left ml-2">
                                            {{ $comment->user->name }}
                                            <br>
                                            <p>{{ $comment->comment }}</p>
                                        </div>
                                </div>
                            @endforeach
                          </div>
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