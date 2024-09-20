@extends('client.layouts.master')

@section('content')
    <!-- Banner -->
    <div class="banner section-space-y">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-space-md-y text-center">
                        <h1 class="h2 text-light">Sign Up</h1>
                        <ul class="list list-row list-dot list-dot-md justify-content-center">
                            <li><a href="index-2.html" class="link text-light hover:text-primary">Home</a></li>
                            <li><a href="#" class="link text-primary hover:text-primary">Sign Up</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Banner -->
    <!-- Register -->
    <div class="section-space-y">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6"><img src="{{ asset('style/client/img/sign-up-img.png') }}" alt="image"
                        class="img-fluid"></div>
                <div class="col-md-6">
                    <h4>Register Yourself</h4>
                    <p class="mb-8 text-dark text-opacity-60">Please Sign Up here</p>
                    <div class="row g-4">
                        <form action="{{ route('register') }}" method="POST">
                            @csrf
                            <div class="col-12"><input type="text" class="form-control border-secondary bg-secondary"
                                    placeholder="Name" name="name"></div>
                            
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <br>
                            <div class="col-12"><input type="email" class="form-control border-secondary bg-secondary"
                                    placeholder="Email" name="email"></div>
                           
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <br>
                            <div class="col-12"><input type="password" class="form-control border-secondary bg-secondary"
                                    placeholder="Password" name="password"></div>
                           
                            @error('password')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <br>
                            <div class="col-12"><input type="password" class="form-control border-secondary bg-secondary"
                                    placeholder="Re-password" name="password_confirmation"></div>
                            
                            @error('password_confirmation')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <br>
                            <div class="col-12"><button class="btn btn-primary text-light justify-content-center w-100">Send
                                    Message</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Register -->
@endsection
