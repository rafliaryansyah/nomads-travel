@extends('layouts.app')
@section('title', 'Profile User')

@section('content')

<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row  ">
                <div class="col p-0" >
                    <nav>
                        <ol class="breadcrumb" style="margin-left: 32vh;">
                            <li class="breadcrumb-item active">
                                User Profile
                            </li>
                            <li class="breadcrumb-item active">
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row  justify-content-center">
                <div class="col-lg-6 pl-lg-0">
                    <div class="card card-details mb-1">
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
    </section>
</main>
    
@endsection