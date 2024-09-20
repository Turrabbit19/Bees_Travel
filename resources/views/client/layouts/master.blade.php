<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<!-- Mirrored from bplugins.net/triptopia/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Sep 2024 08:34:34 GMT -->

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta name="description" content="Travel, Tour and Hotel Booking" />
    <meta name="keywords" content="booking, travel, tour, hotel, bootstrap" />
    <meta name="author" content="Asaduzzaman Sarker" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Triptopia - Travel Agency</title>
    <link rel="icon" href="{{ asset('style/client/img/favicon.png') }}" type="image/png" />

    @include('client.layouts.style')
</head>

<body>
    <div class="preloader">
        <div class="preloader__img">
            <img src="{{ asset('style/client/img/logo-dark.png') }}" alt="image" />
        </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-overlay z-3">
        <div class="container">
            <a href="index-2.html" class="logo d-block"><img src="{{ asset('style/client/img/logo-dark.png') }}"
                    alt="logo" class="logo__img" /> </a><button class="navbar-toggler" type="button"
                data-bs-toggle="collapse" data-bs-target="#primaryMenu" aria-controls="primaryMenu"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="primaryMenu">
                <ul class="navbar-nav justify-content-end align-items-lg-center w-100">
                    <li class="nav-item has-sub active ms-lg-auto">
                        <a class="nav-link fs-14" href="#">Home</a>
                        <ul class="list sub-menu">
                            <li class="sub-menu__list">
                                <a href="index-2.html" class="link sub-menu__link fs-14">Home 1</a>
                            </li>
                            <li class="sub-menu__list">
                                <a href="index-3.html" class="link sub-menu__link fs-14">Home 2</a>
                            </li>
                            <li class="sub-menu__list">
                                <a href="index-4.html" class="link sub-menu__link fs-14">Home 3</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub">
                        <a class="nav-link fs-14" href="#">Blog</a>
                        <ul class="list sub-menu">
                            <li class="sub-menu__list">
                                <a href="blog.html" class="link sub-menu__link fs-14">Blog</a>
                            </li>
                            <li class="sub-menu__list">
                                <a href="blog-details.html" class="link sub-menu__link fs-14">Blog Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub">
                        <a class="nav-link fs-14" href="#">Destination</a>
                        <ul class="list sub-menu">
                            <li class="sub-menu__list">
                                <a href="destination.html" class="link sub-menu__link fs-14">Destination</a>
                            </li>
                            <li class="sub-menu__list">
                                <a href="destination-details.html" class="link sub-menu__link fs-14">Destination
                                    Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub">
                        <a class="nav-link fs-14" href="#">Pages</a>
                        <ul class="list sub-menu">
                            <li class="sub-menu__list">
                                <a href="about.html" class="link sub-menu__link fs-14">About</a>
                            </li>
                            <li class="sub-menu__list">
                                <a href="pricing.html" class="link sub-menu__link fs-14">Pricing</a>
                            </li>
                            <li class="sub-menu__list">
                                <a href="faq.html" class="link sub-menu__link fs-14">FAQ</a>
                            </li>
                            <li class="sub-menu__list">
                                <a href="checkout.html" class="link sub-menu__link fs-14">Checkout</a>
                            </li>
                            <li class="sub-menu__list">
                                <a href="checkout-confirm.html" class="link sub-menu__link fs-14">Checkout Confirm</a>
                            </li>
                            <li class="sub-menu__list">
                                <a href="sign-up.html" class="link sub-menu__link fs-14">Sign Up</a>
                            </li>
                            <li class="sub-menu__list">
                                <a href="forget-password.html" class="link sub-menu__link fs-14">Forget Password</a>
                            </li>
                            <li class="sub-menu__list">
                                <a href="terms.html" class="link sub-menu__link fs-14">Terms & Condition</a>
                            </li>
                            <li class="sub-menu__list">
                                <a href="error.html" class="link sub-menu__link fs-14">404</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link fs-14" href="contact.html">Contact</a>
                    </li>
                    <li class="nav-item ms-lg-auto">
                        <ul class="list list-row gap-2">
                            @if (Route::has('login'))
                                @auth
                                    @if (Auth::user()->type == 'admin')
                                        <li><a href="{{ route('admin.') }}"
                                                class="btn btn-success text-white fs-14">Database</a>
                                        </li>
                                    @endif
                                    <li><a href="{{ route('logout') }}"
                                            class="btn btn-success text-white fs-14">Logout</a></li>
                                @else
                                    <li><a href="{{ route('login') }}" class="btn btn-success text-white fs-14">Login</a>
                                    </li>
                                    <li><a href="{{ route('register') }}"
                                            class="btn btn-success text-white fs-14">Register</a>
                                    </li>
                                @endauth
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <!-- /Blog --><!-- Footer CTA  -->
    <div class="footer-cta">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div
                        class="footer-cta__content section-space-md-y bg-success rounded-4 px-4 px-md-8 px-xl-15 px-xxl-26">
                        <div class="row g-4 align-items-center">
                            <div class="col-lg-6">
                                <h2 class="text-light">Get our pro offers</h2>
                                <p class="mb-0 text-light max-text-12">
                                    Create a visual identity for your company, and an overall
                                    branding that stands out.
                                </p>
                            </div>
                            <div class="col-lg-6">
                                <div class="d-flex py-2 px-3 bg-white rounded-1">
                                    <input type="text" class="form-control flex-grow-1 border-0 rounded-0"
                                        placeholder="Enter your email" />
                                    <button type="submit" class="btn btn-dark rounded-1 flex-shrink-0 rounded-0">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Footer CTA  --><!-- Footer  -->
    <footer class="footer-1">
        <div class="section-space-md-y border-bottom">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <a href="index-2.html" class="logo d-block mb-3"><img
                                src="{{ asset('style/client/img/logo-dark.png') }}" alt="logo"
                                class="logo__img" /></a>
                        <p class="mb-6">
                            Hello, we are Lift Media. Our goal is to translate the positive
                            effects from revolutionizing
                        </p>
                        <ul class="list list-row gap-3 flex-wrap">
                            <li>
                                <a href="#" class="link d-inline-block text-dark hover:text-primary"><i
                                        class="bi bi-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#" class="link d-inline-block text-dark hover:text-primary"><i
                                        class="bi bi-pinterest"></i></a>
                            </li>
                            <li>
                                <a href="#" class="link d-inline-block text-dark hover:text-primary"><i
                                        class="bi bi-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#" class="link d-inline-block text-dark hover:text-primary"><i
                                        class="bi bi-twitter"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5>About</h5>
                        <ul class="list gap-2">
                            <li>
                                <a href="#" class="link d-inline-block text-dark hover:text-primary">About
                                    Us</a>
                            </li>
                            <li>
                                <a href="#" class="link d-inline-block text-dark hover:text-primary">Our
                                    Services</a>
                            </li>
                            <li>
                                <a href="#" class="link d-inline-block text-dark hover:text-primary">Privacy
                                    Policy</a>
                            </li>
                            <li>
                                <a href="#" class="link d-inline-block text-dark hover:text-primary">Terms &
                                    Conditions</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5>Contact</h5>
                        <ul class="list gap-2">
                            <li>
                                <a href="#"
                                    class="link d-inline-flex align-items-center gap-2 text-dark hover:text-primary"><span
                                        class="d-inline-block flex-shrink-0"><i class="bi bi-telephone-fill"></i>
                                    </span><span class="d-inline-block flex-grow-1">+012 345 67890</span></a>
                            </li>
                            <li>
                                <a href="#"
                                    class="link d-inline-flex align-items-center gap-2 text-dark hover:text-primary"><span
                                        class="d-inline-block flex-shrink-0"><i class="bi bi-envelope-fill"></i>
                                    </span><span class="d-inline-block flex-grow-1">cxqxs@example.com</span></a>
                            </li>
                            <li>
                                <a href="#"
                                    class="link d-inline-flex align-items-center gap-2 text-dark hover:text-primary"><span
                                        class="d-inline-block flex-shrink-0"><i class="bi bi-geo-alt-fill"></i>
                                    </span><span class="d-inline-block flex-grow-1">123 Street, New York,
                                        USA</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <h5>Gallery</h5>
                        <ul class="list list-row gap-2 flex-wrap">
                            <li>
                                <a href="#" class="link d-inline-block w-20"><img
                                        src="{{ asset('style/client/img/gallery-img-1.png') }}" alt="image"
                                        class="img-fluid" /></a>
                            </li>
                            <li>
                                <a href="#" class="link d-inline-block w-20"><img
                                        src="{{ asset('style/client/img/gallery-img-2.png') }}" alt="image"
                                        class="img-fluid" /></a>
                            </li>
                            <li>
                                <a href="#" class="link d-inline-block w-20"><img
                                        src="{{ asset('style/client/img/gallery-img-3.png') }}" alt="image"
                                        class="img-fluid" /></a>
                            </li>
                            <li>
                                <a href="#" class="link d-inline-block w-20"><img
                                        src="{{ asset('style/client/img/gallery-img-4.png') }}" alt="image"
                                        class="img-fluid" /></a>
                            </li>
                            <li>
                                <a href="#" class="link d-inline-block w-20"><img
                                        src="{{ asset('style/client/img/gallery-img-5.png') }}" alt="image"
                                        class="img-fluid" /></a>
                            </li>
                            <li>
                                <a href="#" class="link d-inline-block w-20"><img
                                        src="{{ asset('style/client/img/gallery-img-6.png') }}" alt="image"
                                        class="img-fluid" /></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="py-6">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="mb-0 text-center">
                            &copy; 2024 Triptopia. All rights reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    @include('client.layouts.script')
</body>

</html>
