@extends('layouts.auth')

@section('content')

<main class="login-container">
    <div class="container">
        <div class="row page-login d-flex align items-center">
            <div class="section-left col-12 col-md-6 mt-5">
                <h1 class="mb-4">We explore the new <br>life much better</h1>
                <img src="{{ url('frontend/assets/images/login-image.png') }}" alt="" class="w-75 d-none d-sm-flex">
            </div>
            <div class="section-right col-12 col-md-4  mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ url('frontend/assets/images/logo.png') }}" alt="" class="w-50 mb-4">
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email Address</label>
                                <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="" value="{{ old('password') }}" name="password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                            </div>
                            <div class="form-group form-check">
                                <input type="checkbox" class="form-control-input" id="remember" {{ old( 'remember') ? 'checked' : '' }}>
                                <label for="" class="from-check-label">Remember Me</label>
                            </div>
                            <button class="btn btn-login btn-block" type="submit">
                                Sig In
                            </button>
                            
                            
                            @if (Route::has('password.request'))
                            <p class="text-center">
                                <a href="{{ route('register') }}" class="btn btn-link">
                                    Registrasi
                                </a>
                            </p>
                            <p class="text-center">
                                <a href="{{ route('password.request') }}" class="btn btn-link">
                                    Saya lupa password
                                </a>
                            </p>
                            @endif
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
