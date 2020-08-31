@extends('layouts.auth')

@section('content')

<main class="login-container">
    <div class="container">
        <div class="row page-login d-flex align items-center">
            <div class="section-right col-12 col-md-4 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="{{ url('frontend/assets/images/logo.png') }}" alt="" class="w-50 mb-4">
                        </div>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="form-group">

                                <label for="email">Fullname</label>

                                <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="" aria-describedby="" required autocomplete="email" autofocus value="">
                                
                                @error('name')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="email">Username</label>

                                <input type="text" class="form-control @error('email') is-invalid @enderror" id="" name="username" aria-describedby="" required autocomplete="email" autofocus>

                                @error('username')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="email">Email Address</label>

                                <input type="email" class="form-control @error('email') is-invalid @enderror" id="" name="email" aria-describedby="" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="password">Password</label>

                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="" name="password" name="" required autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                            </div>

                            <div class="form-group">

                                <label for="password">Confirm Password</label>

                                <input type="password" class="form-control" id="" name="password_confirmation" required autocomplete="current-password">

                            </div>

                            <button class="btn btn-login btn-block" type="submit">
                                Register
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection


{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Fullname') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
