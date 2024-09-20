@extends('client.layouts.master')

@section('content')
    <!-- Hero -->
    <div class="hero-1 section-space-md-bottom">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-space-md-bottom">
                        <div class="row justify-content-center">
                            <div class="col-xl-10 text-center">
                                <h1>Discover the world, one adventure at a time</h1>
                                <p class="mb-12 max-text-14 mx-auto">
                                    Experience bespoke itineraries and unparalleled
                                    service.Explore the world without breaking the bank.
                                </p>
                                <div class="d-flex align-items-center justify-content-center flex-wrap gap-4">
                                    <a href="contact.html" class="btn btn-dark">Contact Us </a><a href="pricing.html"
                                        class="btn btn-outline-dark">Get Quote</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="hero-1__content">
                        <div class="hero-1__filter mt-auto">
                            <div
                                class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 g-3 g-xl-4 align-items-end justify-content-center">
                                <div class="col">
                                    <label class="d-block text-light mb-1">Destination</label>
                                    <select class="form-select">
                                        <option selected="selected">Instanbul</option>
                                        <option value="1">Bangladesh</option>
                                        <option value="2">India</option>
                                        <option value="3">China</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="d-block text-light mb-1">Duration</label>
                                    <select class="form-select">
                                        <option selected="selected">4 Days</option>
                                        <option value="1">2 Days</option>
                                        <option value="2">6 Days</option>
                                        <option value="3">8 Days</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="d-block text-light mb-1">Travel Type</label>
                                    <select class="form-select">
                                        <option selected="selected">Adventure</option>
                                        <option value="1">Luxury</option>
                                        <option value="2">Family</option>
                                        <option value="3">Adventure</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <label class="d-block text-light mb-1">Travellers</label>
                                    <select class="form-select">
                                        <option selected="selected">04</option>
                                        <option value="1">01</option>
                                        <option value="2">02</option>
                                        <option value="3">03</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <button class="btn btn-primary text-light w-100 text-center justify-content-center">
                                        Find Availability
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Hero --><!-- About -->
    <div class="section-space-md-top section-space-bottom">
        <div class="container">
            <div class="row g-4 justify-content-xxl-between">
                <div class="col-lg-6">
                    <span class="d-block fs-14 text-primary fw-medium mb-1">GET TO KNOW US</span>
                    <h2>Experience the World With Triptopia</h2>
                    <p class="mb-8">
                        Triptopia was born out of a shared passion for exploration and a
                        desire to create meaningful travel experiences. We believe travel
                        is more than just visiting a place;
                    </p>
                    <div class="px-8 py-6 bg-success-subtle">
                        <span class="d-block mb-0 h5 max-text-10">The world is a book and those who do not travel read only
                            one
                            page.</span>
                    </div>
                    <div class="my-8">
                        <ul class="list gap-4">
                            <li class="d-flex gap-2 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('style/client/img/icon-plane.png') }}" alt="image"
                                        class="img-fluid" />
                                </div>
                                <div class="flex-grow-1 fs-18 fw-medium">
                                    To curate personalized itineraries
                                </div>
                            </li>
                            <li class="d-flex gap-2 align-items-center">
                                <div class="flex-shrink-0">
                                    <img src="{{ asset('style/client/img/icon-plane.png') }}" alt="image"
                                        class="img-fluid" />
                                </div>
                                <div class="flex-grow-1 fs-18 fw-medium">
                                    We believe travel fosters understanding
                                </div>
                            </li>
                        </ul>
                    </div>
                    <a href="about.html" class="btn btn-primary text-light">Discover More</a>
                </div>
                <div class="col-lg-6 col-xxl-5">
                    <div class="position-relative z-1">
                        <img src="{{ asset('style/client/img/about-img-1.png') }}" alt="image" class="img-fluid" />
                        <img src="{{ asset('style/client/img/about-img-2.png') }}" alt="image"
                            class="img-fluid d-none d-xxl-block position-absolute bottom-30 left-0 translate-middle-x" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /About --><!-- Top Destination  -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="section-space-md-y px-4 px-sm-6 px-xxl-12 bg-secondary rounded-3">
                    <div class="section-space-md-bottom">
                        <div class="row justify-content-center">
                            <div class="col-md-10 col-lg-8">
                                <div class="text-center">
                                    <span class="d-block mb-1 fs-14 text-primary fw-medium">TOP DESTINATION</span>
                                    <h2>Search a best place in the world</h2>
                                    <p class="mb-0 max-text-18 mx-auto">
                                        Our dating website offers a range of features and benifits
                                        that make finding love online simple and enjoyable. With
                                        our advanced matching algorithm
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row g-4">
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="border rounded p-6 p-md-8 transition hover:bg-white">
                                <a href="destination-details.html"
                                    class="link d-grid place-content-center w-18 h-18 rounded overflow-hidden"><img
                                        src="{{ asset('style/client/img/top-destination-img-1.png') }}" alt="image"
                                        class="img-fluid w-100 h-100 object-fit-cover" /></a>
                                <h6 class="mt-4 mb-0">
                                    <a href="destination-details.html" class="link text-dark hover:text-primary">Batu, East
                                        Java</a>
                                </h6>
                                <span class="d-block fs-14">86 Destinations</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="border rounded p-6 p-md-8 transition hover:bg-white">
                                <a href="destination-details.html"
                                    class="link d-grid place-content-center w-18 h-18 rounded overflow-hidden"><img
                                        src="{{ asset('style/client/img/top-destination-img-2.png') }}" alt="image"
                                        class="img-fluid w-100 h-100 object-fit-cover" /></a>
                                <h6 class="mt-4 mb-0">
                                    <a href="destination-details.html" class="link text-dark hover:text-primary">Kuta</a>
                                </h6>
                                <span class="d-block fs-14">86 Destinations</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="border rounded p-6 p-md-8 transition hover:bg-white">
                                <a href="destination-details.html"
                                    class="link d-grid place-content-center w-18 h-18 rounded overflow-hidden"><img
                                        src="{{ asset('style/client/img/top-destination-img-3.png') }}" alt="image"
                                        class="img-fluid w-100 h-100 object-fit-cover" /></a>
                                <h6 class="mt-4 mb-0">
                                    <a href="destination-details.html" class="link text-dark hover:text-primary">Surabaya,
                                        East Java</a>
                                </h6>
                                <span class="d-block fs-14">86 Destinations</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="border rounded p-6 p-md-8 transition hover:bg-white">
                                <a href="destination-details.html"
                                    class="link d-grid place-content-center w-18 h-18 rounded overflow-hidden"><img
                                        src="{{ asset('style/client/img/top-destination-img-4.png') }}" alt="image"
                                        class="img-fluid w-100 h-100 object-fit-cover" /></a>
                                <h6 class="mt-4 mb-0">
                                    <a href="destination-details.html" class="link text-dark hover:text-primary">Malang,
                                        East Java</a>
                                </h6>
                                <span class="d-block fs-14">86 Destinations</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="border rounded p-6 p-md-8 transition hover:bg-white">
                                <a href="destination-details.html"
                                    class="link d-grid place-content-center w-18 h-18 rounded overflow-hidden"><img
                                        src="{{ asset('style/client/img/top-destination-img-4.png') }}" alt="image"
                                        class="img-fluid w-100 h-100 object-fit-cover" /></a>
                                <h6 class="mt-4 mb-0">
                                    <a href="destination-details.html" class="link text-dark hover:text-primary">Doemg,
                                        Central Java</a>
                                </h6>
                                <span class="d-block fs-14">86 Destinations</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="border rounded p-6 p-md-8 transition hover:bg-white">
                                <a href="destination-details.html"
                                    class="link d-grid place-content-center w-18 h-18 rounded overflow-hidden"><img
                                        src="{{ asset('style/client/img/top-destination-img-5.png') }}" alt="image"
                                        class="img-fluid w-100 h-100 object-fit-cover" /></a>
                                <h6 class="mt-4 mb-0">
                                    <a href="destination-details.html" class="link text-dark hover:text-primary">Nusa Dua,
                                        Lombok</a>
                                </h6>
                                <span class="d-block fs-14">86 Destinations</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="border rounded p-6 p-md-8 transition hover:bg-white">
                                <a href="destination-details.html"
                                    class="link d-grid place-content-center w-18 h-18 rounded overflow-hidden"><img
                                        src="{{ asset('style/client/img/top-destination-img-2.png') }}" alt="image"
                                        class="img-fluid w-100 h-100 object-fit-cover" /></a>
                                <h6 class="mt-4 mb-0">
                                    <a href="destination-details.html"
                                        class="link text-dark hover:text-primary">Bandung,West Java</a>
                                </h6>
                                <span class="d-block fs-14">86 Destinations</span>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-4 col-xl-3">
                            <div class="border rounded p-6 p-md-8 transition hover:bg-white">
                                <a href="destination-details.html"
                                    class="link d-grid place-content-center w-18 h-18 rounded overflow-hidden"><img
                                        src="{{ asset('style/client/img/top-destination-img-1.png') }}" alt="image"
                                        class="img-fluid w-100 h-100 object-fit-cover" /></a>
                                <h6 class="mt-4 mb-0">
                                    <a href="destination-details.html" class="link text-dark hover:text-primary">Watatobi,
                                        Sumatera</a>
                                </h6>
                                <span class="d-block fs-14">86 Destinations</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Top Destination  --><!-- Team  -->
    <div class="section-space-top section-space-md-bottom">
        <div class="section-space-md-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="text-center">
                            <span class="d-block mb-1 fs-14 text-primary fw-medium">OUR TEAM</span>
                            <h2 class="mb-0">Meet the Creative Minds Behind Triptopia</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="team-card px-6 px-md-9 py-8 py-md-10 position-relative z-1 rounded">
                        <div class="team-card__img rounded-circle mx-auto position-relative z-1">
                            <img src="{{ asset('style/client/img/team-1.png') }}" alt="image"
                                class="img-fluid w-100 h-100 object-fit-cover" />
                        </div>
                        <div class="team-card__content mt-8 text-center transition">
                            <h4 class="text-light mb-2">Vasili Ilmaz</h4>
                            <span class="d-block text-light fs-14">Web Developer</span>
                        </div>
                        <div class="team-card__overlay text-center px-6 px-md-10 px-xxl-15 py-8 py-md-10 transition">
                            <h4 class="text-light mb-2">Vasili Ilmaz</h4>
                            <span class="d-block text-light fs-14">Web Developer </span><span
                                class="d-block text-light fs-14 my-6">I’ll will help you to build strategy from scratch
                                till
                                deliver</span>
                            <ul class="list list-row justify-content-center flex-wrap gap-3">
                                <li>
                                    <a href="#" class="link d-block text-light hover:text-primary"><i
                                            class="bi bi-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="link d-block text-light hover:text-primary"><i
                                            class="bi bi-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="link d-block text-light hover:text-primary"><i
                                            class="bi bi-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="link d-block text-light hover:text-primary"><i
                                            class="bi bi-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-card px-6 px-md-9 py-8 py-md-10 position-relative z-1 rounded">
                        <div class="team-card__img rounded-circle mx-auto position-relative z-1">
                            <img src="{{ asset('style/client/img/team-2.png') }}" alt="image"
                                class="img-fluid w-100 h-100 object-fit-cover" />
                        </div>
                        <div class="team-card__content mt-8 text-center transition">
                            <h4 class="text-light mb-2">Veronica</h4>
                            <span class="d-block text-light fs-14">Product Designer</span>
                        </div>
                        <div class="team-card__overlay text-center px-6 px-md-10 px-xxl-15 py-8 py-md-10 transition">
                            <h4 class="text-light mb-2">Veronica</h4>
                            <span class="d-block text-light fs-14">Product Designer </span><span
                                class="d-block text-light fs-14 my-6">I’ll will help you to build strategy from scratch
                                till
                                deliver</span>
                            <ul class="list list-row justify-content-center flex-wrap gap-3">
                                <li>
                                    <a href="#" class="link d-block text-light hover:text-primary"><i
                                            class="bi bi-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="link d-block text-light hover:text-primary"><i
                                            class="bi bi-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="link d-block text-light hover:text-primary"><i
                                            class="bi bi-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="link d-block text-light hover:text-primary"><i
                                            class="bi bi-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="team-card px-6 px-md-9 py-8 py-md-10 position-relative z-1 rounded">
                        <div class="team-card__img rounded-circle mx-auto position-relative z-1">
                            <img src="{{ asset('style/client/img/team-3.png') }}" alt="image"
                                class="img-fluid w-100 h-100 object-fit-cover" />
                        </div>
                        <div class="team-card__content mt-8 text-center transition">
                            <h4 class="text-light mb-2">Lion jhonson</h4>
                            <span class="d-block text-light fs-14">Web Developer</span>
                        </div>
                        <div class="team-card__overlay text-center px-6 px-md-10 px-xxl-15 py-8 py-md-10 transition">
                            <h4 class="text-light mb-2">Lion jhonson</h4>
                            <span class="d-block text-light fs-14">Web Developer </span><span
                                class="d-block text-light fs-14 my-6">I’ll will help you to build strategy from scratch
                                till
                                deliver</span>
                            <ul class="list list-row justify-content-center flex-wrap gap-3">
                                <li>
                                    <a href="#" class="link d-block text-light hover:text-primary"><i
                                            class="bi bi-facebook"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="link d-block text-light hover:text-primary"><i
                                            class="bi bi-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="link d-block text-light hover:text-primary"><i
                                            class="bi bi-pinterest"></i></a>
                                </li>
                                <li>
                                    <a href="#" class="link d-block text-light hover:text-primary"><i
                                            class="bi bi-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Team  --><!-- About  -->
    <div class="section-space-md-y">
        <div class="section-space-md-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="text-center">
                            <span class="d-block mb-1 fs-14 text-primary fw-medium">GET TO KNOW US</span>
                            <h2>Experience the World With Triptopia</h2>
                            <p class="mb-0 max-text-18 mx-auto">
                                Our dating website offers a range of features and benifits
                                that make finding love online simple and enjoyable. With our
                                advanced matching algorithm
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3 order-md-2 order-lg-1">
                    <div class="row g-4 h-100">
                        <div class="col-12">
                            <div class="mb-4">
                                <img src="{{ asset('style/client/img/icon-about-1.png') }}" alt="image"
                                    class="img-fluid" />
                            </div>
                            <h5 class="mb-2">Luxury Trip</h5>
                            <p class="mb-0">
                                Our algorithm connects you with like-minded partners using
                                your interests.
                            </p>
                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <img src="{{ asset('style/client/img/icon-about-2.png') }}" alt="image"
                                    class="img-fluid" />
                            </div>
                            <h5 class="mb-2">Affordable Budget</h5>
                            <p class="mb-0">
                                Your safety is a priority. We ensure strict security for your
                                information.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-md-1 order-lg-2">
                    <img src="{{ asset('style/client/img/about-img-3.png') }}" alt="image" class="img-fluid" />
                </div>
                <div class="col-md-6 col-lg-3 order-md-3">
                    <div class="row g-4 h-100">
                        <div class="col-12">
                            <div class="mb-4">
                                <img src="{{ asset('style/client/img/icon-about-3.png') }}" alt="image"
                                    class="img-fluid" />
                            </div>
                            <h5 class="mb-2">Personalized approach</h5>
                            <p class="mb-0">
                                Effortlessly navigate and find your perfect match with our
                                user-friendly interface.
                            </p>
                        </div>
                        <div class="col-12">
                            <div class="mb-4">
                                <img src="{{ asset('style/client/img/icon-about-4.png') }}" alt="image"
                                    class="img-fluid" />
                            </div>
                            <h5 class="mb-2">Experienced Guide</h5>
                            <p class="mb-0">
                                Our team is available 24/7 to assist you with any queries or
                                concern.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /About  --><!-- Popular Destination  -->
    <div class="section-space-md-y">
        <div class="section-space-md-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="text-center">
                            <span class="d-block mb-1 fs-14 text-primary fw-medium">Popular Tour</span>
                            <h2 class="mb-0">See Destinations You’ll Love To Visit</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-12">
                    <ul class="nav nav-pills column-gap-4 row-gap-2 justify-content-center popular-nav mb-4">
                        <li class="nav-item">
                            <button class="nav-link rounded-pill active" data-bs-toggle="pill"
                                data-bs-target="#dayLongTabs" type="button">
                                Day Long Tour
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rounded-pill" data-bs-toggle="pill" data-bs-target="#adventureTabs"
                                type="button">
                                Adventure Trip
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rounded-pill" data-bs-toggle="pill" data-bs-target="#groupTabs"
                                type="button">
                                Group Tour
                            </button>
                        </li>
                        <li class="nav-item">
                            <button class="nav-link rounded-pill" data-bs-toggle="pill" data-bs-target="#soloTabs"
                                type="button">
                                Solo tour
                            </button>
                        </li>
                    </ul>
                </div>
                <div class="col-12">
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="dayLongTabs">
                            <div class="row g-4">
                                @foreach ($tours as $ts)
                                    <div class="col-md-6 col-lg-4">
                                        <div class="card popular-card h-100">
                                            <img src="{{ Storage::url($ts->img_thumb) }}" alt="image"
                                                class="card-img-top" />
                                            <button type="button"
                                                class="btn btn-light btn-icon btn-sm rounded-circle position-absolute top-4 end-4">
                                                <i class="bi bi-suit-heart"></i>
                                            </button>
                                            <div class="card-body popular-card__body">
                                                <span class="d-flex align-items-center gap-1 fs-14 mb-2"><span
                                                        class="flex-shrink-0 d-block text-primary"><i
                                                            class="bi bi-geo-alt-fill"></i> </span><span
                                                        class="d-block flex-grow-1">{{ $ts->place->name }}</span></span>
                                                <h6 class="card-title">
                                                    <a href="#"
                                                        class="link d-inline-block text-dark hover:text-primary">{{ $ts->name }}</a>
                                                </h6>
                                                <ul class="list list-row gap-1 align-items-center">
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-dark fs-12 d-block">5.0(35)</span>
                                                    </li>
                                                </ul>
                                                <div
                                                    class="d-flex align-items-center flex-wrap gap-2 justify-content-between mt-6">
                                                    <h5 class="mb-0">
                                                        ${{ number_format($ts->price) }}<span
                                                            class="fs-14 fw-normal">/Person</span>
                                                    </h5>
                                                    <a href="{{ route('tour', ['tour' => $ts->slug]) }}"
                                                        class="link btn btn-primary fs-14 text-light">Book Trip</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="adventureTabs">
                            <div class="row g-4">
                                @foreach ($tours as $ts)
                                    <div class="col-md-6 col-lg-4">
                                        <div class="card popular-card h-100">
                                            <img src="{{ Storage::url($ts->img_thumb) }}" alt="image"
                                                class="card-img-top" />
                                            <button type="button"
                                                class="btn btn-light btn-icon btn-sm rounded-circle position-absolute top-4 end-4">
                                                <i class="bi bi-suit-heart"></i>
                                            </button>
                                            <div class="card-body popular-card__body">
                                                <span class="d-flex align-items-center gap-1 fs-14 mb-2"><span
                                                        class="flex-shrink-0 d-block text-primary"><i
                                                            class="bi bi-geo-alt-fill"></i> </span><span
                                                        class="d-block flex-grow-1">{{ $ts->place->name }}</span></span>
                                                <h6 class="card-title">
                                                    <a href="#"
                                                        class="link d-inline-block text-dark hover:text-primary">{{ $ts->name }}</a>
                                                </h6>
                                                <ul class="list list-row gap-1 align-items-center">
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-dark fs-12 d-block">5.0(35)</span>
                                                    </li>
                                                </ul>
                                                <div
                                                    class="d-flex align-items-center flex-wrap gap-2 justify-content-between mt-6">
                                                    <h5 class="mb-0">
                                                        ${{ number_format($ts->price) }}<span
                                                            class="fs-14 fw-normal">/Person</span>
                                                    </h5>
                                                    <a href="{{ route('tour', ['tour' => $ts->slug]) }}"
                                                        class="link btn btn-primary fs-14 text-light">Book Trip</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="groupTabs">
                            <div class="row g-4">
                                @foreach ($tours as $ts)
                                    <div class="col-md-6 col-lg-4">
                                        <div class="card popular-card h-100">
                                            <img src="{{ Storage::url($ts->img_thumb) }}" alt="image"
                                                class="card-img-top" />
                                            <button type="button"
                                                class="btn btn-light btn-icon btn-sm rounded-circle position-absolute top-4 end-4">
                                                <i class="bi bi-suit-heart"></i>
                                            </button>
                                            <div class="card-body popular-card__body">
                                                <span class="d-flex align-items-center gap-1 fs-14 mb-2"><span
                                                        class="flex-shrink-0 d-block text-primary"><i
                                                            class="bi bi-geo-alt-fill"></i> </span><span
                                                        class="d-block flex-grow-1">{{ $ts->place->name }}</span></span>
                                                <h6 class="card-title">
                                                    <a href="#"
                                                        class="link d-inline-block text-dark hover:text-primary">{{ $ts->name }}</a>
                                                </h6>
                                                <ul class="list list-row gap-1 align-items-center">
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-dark fs-12 d-block">5.0(35)</span>
                                                    </li>
                                                </ul>
                                                <div
                                                    class="d-flex align-items-center flex-wrap gap-2 justify-content-between mt-6">
                                                    <h5 class="mb-0">
                                                        ${{ number_format($ts->price) }}<span
                                                            class="fs-14 fw-normal">/Person</span>
                                                    </h5>
                                                    <a href="{{ route('tour', ['tour' => $ts->slug]) }}"
                                                        class="link btn btn-primary fs-14 text-light">Book Trip</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="soloTabs">
                            <div class="row g-4">
                                @foreach ($tours as $ts)
                                    <div class="col-md-6 col-lg-4">
                                        <div class="card popular-card h-100">
                                            <img src="{{ Storage::url($ts->img_thumb) }}" alt="image"
                                                class="card-img-top" />
                                            <button type="button"
                                                class="btn btn-light btn-icon btn-sm rounded-circle position-absolute top-4 end-4">
                                                <i class="bi bi-suit-heart"></i>
                                            </button>
                                            <div class="card-body popular-card__body">
                                                <span class="d-flex align-items-center gap-1 fs-14 mb-2"><span
                                                        class="flex-shrink-0 d-block text-primary"><i
                                                            class="bi bi-geo-alt-fill"></i> </span><span
                                                        class="d-block flex-grow-1">{{ $ts->place->name }}</span></span>
                                                <h6 class="card-title">
                                                    <a href="#"
                                                        class="link d-inline-block text-dark hover:text-primary">{{ $ts->name }}</a>
                                                </h6>
                                                <ul class="list list-row gap-1 align-items-center">
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-warning fs-14 d-block"><i
                                                                class="bi bi-star-fill"></i></span>
                                                    </li>
                                                    <li>
                                                        <span class="text-dark fs-12 d-block">5.0(35)</span>
                                                    </li>
                                                </ul>
                                                <div
                                                    class="d-flex align-items-center flex-wrap gap-2 justify-content-between mt-6">
                                                    <h5 class="mb-0">
                                                        ${{ number_format($ts->price) }}<span
                                                            class="fs-14 fw-normal">/Person</span>
                                                    </h5>
                                                    <a href="{{ route('tour', ['tour' => $ts->slug]) }}"
                                                        class="link btn btn-primary fs-14 text-light">Book Trip</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Popular Destination  --><!-- Top Spot  -->
    <div class="section-space-md-top section-space-bottom">
        <div class="section-space-md-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="text-center">
                            <span class="d-block mb-1 fs-14 text-primary fw-medium">Top Destination</span>
                            <h2 class="mb-0">Unveiling World's Top Travel Hotspots</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-sm-6 col-md-8">
                    <div class="position-relative rounded overflow-hidden">
                        <img src="{{ asset('style/client/img/top-spot-img-1.png') }}" alt="image"
                            class="img-fluid w-100 h-100 object-fit-cover" />
                        <a href="destination.html"
                            class="link position-absolute top-0 start-0 w-100 h-100 p-4 p-md-6 p-xl-8 bg-dark bg-opacity-20 d-flex flex-column justify-content-end"><span
                                class="d-block h5 text-white fw-medium mb-1">Pryde mountains </span><span
                                class="d-block fs-14 text-white">Prydelands, 100 Trips</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="position-relative rounded overflow-hidden">
                        <img src="{{ asset('style/client/img/top-spot-img-2.png') }}" alt="image"
                            class="img-fluid w-100 h-100 object-fit-cover" />
                        <a href="destination.html"
                            class="link position-absolute top-0 start-0 w-100 h-100 p-4 p-md-6 p-xl-8 bg-dark bg-opacity-20 d-flex flex-column justify-content-end"><span
                                class="d-block h5 text-white fw-medium mb-1">Eiffel Tower </span><span
                                class="d-block fs-14 text-white">France, 150 Trips</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="position-relative rounded overflow-hidden">
                        <img src="{{ asset('style/client/img/top-spot-img-3.png') }}" alt="image"
                            class="img-fluid w-100 h-100 object-fit-cover" />
                        <a href="destination.html"
                            class="link position-absolute top-0 start-0 w-100 h-100 p-4 p-md-6 p-xl-8 bg-dark bg-opacity-20 d-flex flex-column justify-content-end"><span
                                class="d-block h5 text-white fw-medium mb-1">Iceland </span><span
                                class="d-block fs-14 text-white">Prydelands, 100 Trips</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="position-relative rounded overflow-hidden">
                        <img src="{{ asset('style/client/img/top-spot-img-4.png') }}" alt="image"
                            class="img-fluid w-100 h-100 object-fit-cover" />
                        <a href="destination.html"
                            class="link position-absolute top-0 start-0 w-100 h-100 p-4 p-md-6 p-xl-8 bg-dark bg-opacity-20 d-flex flex-column justify-content-end"><span
                                class="d-block h5 text-white fw-medium mb-1">Jammu Kashmir </span><span
                                class="d-block fs-14 text-white">Prydelands, 100 Trips</span></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="position-relative rounded overflow-hidden">
                        <img src="{{ asset('style/client/img/top-spot-img-5.png') }}" alt="image"
                            class="img-fluid w-100 h-100 object-fit-cover" />
                        <a href="destination.html"
                            class="link position-absolute top-0 start-0 w-100 h-100 p-4 p-md-6 p-xl-8 bg-dark bg-opacity-20 d-flex flex-column justify-content-end"><span
                                class="d-block h5 text-white fw-medium mb-1">Bosphorus Trip </span><span
                                class="d-block fs-14 text-white">Prydelands, 100 Trips</span></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section-space-md-top">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="text-center">
                            <a href="destination.html" class="btn btn-dark btn-lg fs-14">See All Top Spots</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Top Spot  --><!-- Trending Destination  -->
    <div class="section-space-y bg-secondary">
        <div class="section-space-md-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="text-center">
                            <span class="d-block mb-1 fs-14 text-primary fw-medium">Tending Destination</span>
                            <h2 class="mb-0">The most searched for cities on Triptopia</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">
                @foreach ($tours as $t)
                    <div class="col-md-6 col-xl-4">
                        <div class="d-flex flex-wrap flex-md-nowrap align-items-center gap-6 p-6 rounded-3 bg-white">
                            <a href="{{ route('tour', ['tour' => $t->slug]) }}"
                                class="d-inline-block flex-shrink-0 link"><img src="{{ Storage::url($t->img_thumb) }}"
                                    alt="image" class="img-fluid rounded-3" width="100" /></a>
                            <div class="flex-grow-1">
                                <h6>{{ $t->name }}</h6>
                                <ul class="list list-row gap-1 align-items-center mb-1">
                                    <li>
                                        <span class="text-warning fs-14 d-block"><i class="bi bi-star-fill"></i></span>
                                    </li>
                                    <li><span class="text-dark fs-14 d-block">5.0(35)</span></li>
                                </ul>
                                <h6 class="mb-4">
                                    ${{ $t->price }}<span class="fs-14 fw-normal">/night</span>
                                </h6>
                                <a href="{{ route('tour', ['tour' => $t->slug]) }}"
                                    class="link btn btn-sm btn-success text-light">Book
                                    Now</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- /Trending Destination  --><!-- Feedback -->
    <div class="section-space-y">
        <div class="section-space-md-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                        <div class="text-center">
                            <span class="d-block mb-1 fs-14 text-primary fw-medium">Testimonial</span>
                            <h2 class="mb-0">What Our Traveller Said About Us</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10">
                    <div class="feedback-slider-1-container position-relative">
                        <div class="swiper feedback-slider-1">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div
                                        class="feedback-1 text-center border border-success rounded px-4 py-6 px-sm-15 py-sm-15 px-md-20">
                                        <div
                                            class="feedback-1__img d-grid place-content-center w-20 h-20 mx-auto rounded-circle overflow-hidden position-relative mb-6">
                                            <img src="{{ asset('style/client/img/team-1.png') }}" alt="image"
                                                class="img-fluid w-100 h-100 object-fit-cover" />
                                        </div>
                                        <div class="feedback-1__body">
                                            <p class="mb-6 max-text-20 mx-auto">
                                                I can't thank Triptopia enough for helping me find
                                                love! Initially, I was hesitant about online dating,
                                                but this platform changed my perspective entirely. The
                                                user-friendly interface, personalized matches, and the
                                                welcoming community made me feel at ease from the very
                                                beginning.
                                            </p>
                                            <h6 class="mb-2">Berk Arisoy</h6>
                                            <span class="d-block fs-14">Product Designer</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div
                                        class="feedback-1 text-center border border-success rounded px-4 py-6 px-sm-15 py-sm-15 px-md-20">
                                        <div
                                            class="feedback-1__img d-grid place-content-center w-20 h-20 mx-auto rounded-circle overflow-hidden position-relative mb-6">
                                            <img src="{{ asset('style/client/img/team-2.png') }}" alt="image"
                                                class="img-fluid w-100 h-100 object-fit-cover" />
                                        </div>
                                        <div class="feedback-1__body">
                                            <p class="mb-6 max-text-20 mx-auto">
                                                I can't thank Triptopia enough for helping me find
                                                love! Initially, I was hesitant about online dating,
                                                but this platform changed my perspective entirely. The
                                                user-friendly interface, personalized matches, and the
                                                welcoming community made me feel at ease from the very
                                                beginning.
                                            </p>
                                            <h6 class="mb-2">Peter Parker</h6>
                                            <span class="d-block fs-14">Co-Founder</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-button-prev feedback-1__prev">
                            <i class="bi bi-arrow-left"></i>
                        </div>
                        <div class="swiper-button-next feedback-1__next">
                            <i class="bi bi-arrow-right"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Feedback --><!-- FAQ -->
    <div class="section-space-y bg-secondary">
        <div class="section-space-md-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                        <span class="d-block mb-1 fs-14 text-primary fw-medium">FAQ</span>
                        <h2 class="mb-0">Unpacking Your Travel Questions</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-5">
                    <img src="{{ asset('style/client/img/faq-img-1.png') }}" alt="image" class="img-fluid" />
                </div>
                <div class="col-lg-7">
                    <div class="accordion accordion-separate accordion-rounded-0 accordion-faq gap-6"
                        id="accordion-separate">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fs-20 fw-semibold" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordion-r1" aria-expanded="true">
                                    What destinations do you offer tours to
                                </button>
                            </h2>
                            <div id="accordion-r1" class="accordion-collapse collapse show"
                                data-bs-parent="#accordion-separate">
                                <div class="accordion-body">
                                    Triptopia offers a range of services including web
                                    development, software development, IT consulting, digital
                                    marketing.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fs-20 fw-semibold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordion-r2" aria-expanded="false">
                                    What types of service do you provide?
                                </button>
                            </h2>
                            <div id="accordion-r2" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-separate">
                                <div class="accordion-body">
                                    Triptopia offers a range of services including web
                                    development, software development, IT consulting, digital
                                    marketing.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fs-20 fw-semibold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordion-r3" aria-expanded="false">
                                    What is included in the tour package?
                                </button>
                            </h2>
                            <div id="accordion-r3" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-separate">
                                <div class="accordion-body">
                                    Triptopia offers a range of services including web
                                    development, software development, IT consulting, digital
                                    marketing.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button fs-20 fw-semibold collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#accordion-r4" aria-expanded="false">
                                    What should I pack for my trip?
                                </button>
                            </h2>
                            <div id="accordion-r4" class="accordion-collapse collapse"
                                data-bs-parent="#accordion-separate">
                                <div class="accordion-body">
                                    Triptopia offers a range of services including web
                                    development, software development, IT consulting, digital
                                    marketing.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /FAQ --><!-- Blog -->
    <div class="section-space-y">
        <div class="section-space-md-bottom text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7 col-xxl-6">
                        <span class="d-block mb-1 fs-14 text-primary fw-medium">Blog</span>
                        <h2 class="mb-0">Tips and Tricks for Planning Your Dream Trip</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-4">
                    <div class="card popular-card h-100">
                        <a href="blog-details.html" class="link d-inline-block"><img
                                src="{{ asset('style/client/img/blog-img-1.png') }}" alt="image"
                                class="card-img-top" /></a>
                        <div class="w-14 p-2 rounded-1 bg-primary text-light text-center position-absolute top-6 start-6">
                            <span class="d-block fw-semibold">03 </span><span class="d-block">Aug</span>
                        </div>
                        <div class="card-body popular-card__body">
                            <span class="d-block mb-2 fs-14 text-primary">Solo Travel</span>
                            <h6 class="card-title">
                                <a href="blog-details.html"
                                    class="link d-inline-block text-dark hover:text-primary">Tracing Ancient Ruins and
                                    Roman Relics</a>
                            </h6>
                            <div class="d-flex align-items-center gap-4 mt-6">
                                <div
                                    class="w-10 h-10 rounded-circle overflow-hidden d-grid place-content-center flex-shrink-0">
                                    <img src="{{ asset('style/client/img/user-img-1.png') }}" alt="image"
                                        class="img-fluid" />
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 fs-16">Robert Fox</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card popular-card h-100">
                        <a href="blog-details.html" class="link d-inline-block"><img
                                src="{{ asset('style/client/img/blog-img-2.png') }}" alt="image"
                                class="card-img-top" /></a>
                        <div class="w-14 p-2 rounded-1 bg-primary text-light text-center position-absolute top-6 start-6">
                            <span class="d-block fw-semibold">03 </span><span class="d-block">Aug</span>
                        </div>
                        <div class="card-body popular-card__body">
                            <span class="d-block mb-2 fs-14 text-primary">Cody Fisher</span>
                            <h6 class="card-title">
                                <a href="blog-details.html"
                                    class="link d-inline-block text-dark hover:text-primary">Honoring History in the Land
                                    of Heroes</a>
                            </h6>
                            <div class="d-flex align-items-center gap-4 mt-6">
                                <div
                                    class="w-10 h-10 rounded-circle overflow-hidden d-grid place-content-center flex-shrink-0">
                                    <img src="{{ asset('style/client/img/user-img-2.png') }}" alt="image"
                                        class="img-fluid" />
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 fs-16">Cody Fisher</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="card popular-card h-100">
                        <a href="blog-details.html" class="link d-inline-block"><img
                                src="{{ asset('style/client/img/blog-img-3.png') }}" alt="image"
                                class="card-img-top" /></a>
                        <div class="w-14 p-2 rounded-1 bg-primary text-light text-center position-absolute top-6 start-6">
                            <span class="d-block fw-semibold">03 </span><span class="d-block">Aug</span>
                        </div>
                        <div class="card-body popular-card__body">
                            <span class="d-block mb-2 fs-14 text-primary">Group Tour</span>
                            <h6 class="card-title">
                                <a href="blog-details.html"
                                    class="link d-inline-block text-dark hover:text-primary">Witnessing Sunrise Amongst
                                    the Statues</a>
                            </h6>
                            <div class="d-flex align-items-center gap-4 mt-6">
                                <div
                                    class="w-10 h-10 rounded-circle overflow-hidden d-grid place-content-center flex-shrink-0">
                                    <img src="{{ asset('style/client/img/user-img-3.png') }}" alt="image"
                                        class="img-fluid" />
                                </div>
                                <div class="flex-grow-1">
                                    <h6 class="mb-0 fs-16">Jerome Bell</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
