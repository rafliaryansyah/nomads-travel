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
                                    <img src="https://ui-avatars.com/api/?name={{ $user->username }}&background=081D4E&color=fff&rounded=true&size=1024" alt="" class="w-25 mb-4">
                                </div>
                                <form action="{{ route('user.profile.update') }}" method="POST">
                                    @method('patch')
                                    @csrf
                                    <div class="form-group">
        
                                        <label for="name">Fullname</label>
        
                                        <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="" aria-describedby="" required autocomplete="name" autofocus value="{{ $user->name }}">
                                        
                                        @error('name')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
        
                                    </div>
        
                                    <div class="form-group">
        
                                        <label for="username">Username</label>
        
                                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="" name="username" aria-describedby="" required autocomplete="username" autofocus value="{{ $user->username }}" readonly>
        
                                        @error('username')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
        
                                    </div>
        
                                    <div class="form-group">
        
                                        <label for="email">Email Address</label>
        
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="" name="email" aria-describedby="" required autocomplete="email" autofocus value="{{ $user->email }}">
        
                                        @error('email')
                                        <span class="invalid-feedback">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
        
                                    </div>
        
                                    <button class="btn btn-login btn-block" type="submit">
                                        Ubah
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