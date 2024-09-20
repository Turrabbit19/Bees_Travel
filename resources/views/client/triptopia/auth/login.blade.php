@extends('client.layouts.master')

@section('content')
    <!-- Banner -->
    <div class="banner section-space-y">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-space-md-y text-center">
                        <h1 class="h2 text-light">Login</h1>
                        <ul class="list list-row list-dot list-dot-md justify-content-center">
                            <li><a href="index-2.html" class="link text-light hover:text-primary">Home</a></li>
                            <li><a href="#" class="link text-primary hover:text-primary">Login</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Banner -->
    <!-- Form login -->
    <div class="section-space-y">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6"><img src="{{ asset('style/client/img/login-img.png') }}" alt="image"
                        class="img-fluid"></div>

                @if (session('message'))
                    <div class="alert alert-warning">
                        {{ session('message') }}
                    </div>
                @endif

                <div class="col-md-6">
                    <h4>Welcome Again 👋</h4>
                    <p class="mb-8 text-dark text-opacity-60">Please login here</p>
                    <div class="row g-4">
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
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
                            <div class="col-12"><button type="submit"
                                    class="btn btn-primary text-light justify-content-center w-100">Đăng nhập</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Form login -->
@endsection
