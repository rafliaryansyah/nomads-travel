@extends('layouts.app')

@section('title', 'NOMADS | HOME')
    
@section('content')
<header class="text-center">
    <h1>Explorer The Beautiful World
      <br/>
      As Easy One Click
    </h1>
    <p class="mt-3">
      You will see beautiful
      <br/>
      moment you never see before
    </p>
    <a href="{{ url('register') }}" class="btn btn-get-started px-4 mt-4">Get Started</a>
  </header>

  <main>
    <div class="container">
      <section class="section-stats row justify-content-center"></section>
    </div>

    
    <div class="container">
      <section class="section-stats row justify-content-center">
        <div class="col-3 col-md-2 stats-detail">
          <h2>{{ $user }} K</h2>
          <p>Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>0</h2>
          <p>Countries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>0</h2>
          <p>Hotel</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>0</h2>
          <p>Partners</p>
        </div>
      </section>
    </div>

    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>Wisata Popular</h2>
            <p>Something that you never try
            <br/>
            before in this world
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-popular-content" id="popularContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
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
          <div class="col-sm-6 col-md-4 col-lg-3">
            <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ asset('frontend/assets/images/more.png') }}');">
              <div class="travel-country">And many more..</div>
                <div class="travel-location">asdas</div>
                <div class="travel-button mt-auto">
                <a href="{{ route('products') }}" class="btn btn-travel-details px-4">More ...</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section class="section-networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Our Networks</h2>
            <p>Companies are trusted us
            <br />
            more than just a trip
            </p>
          </div>
          <div class="col-md-8 text-center">
            <img src="frontend/assets/images/partner.png" alt="Partners Logo" class="img-partner">
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonial-heading">
      <div class="container">
        <div class="row">
          <div class="col text-center">
            <h2>They Are Loving Us</h2>
            <p>
              Moments were giving them
              <br>
              the best experience
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section section-testimonial-content"  id="testimonialContent">
      <div class="container">
        <div class="section-popular-travel row justify-content-center">
          @foreach ($comments as $comment)
          <div class="col-sm-6 col-md-6 col-lg-4">
            <div class="card card-testimonial text-center">
              <div class="testimonial-center">
                <img src="https://ui-avatars.com/api/?name={{ $comment->user->name }}&background=081D4E&color=fff&rounded=true&size=1024" alt="">
                <h3 class="my-4">{{ $comment->user->name }}</h3>
                <p class="testimonial">
                  “ {{ $comment->comment }} “ 
                </p>
              </div>
              <hr>
              <p class="trip-to mt-2">
                Trip to <strong>{{ $comment->travel_package->title }}</strong>
              </p>
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center">
          <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
            I Need Help
          </a>
          <a href="{{ url('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
            Get Started
          </a>
        </div>
      </div>
    </section>
</main>
@endsection