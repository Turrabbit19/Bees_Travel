@extends('client.layouts.master')

@section('content')
    <div class="banner section-space-y">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-space-md-y text-center">
                        <h1 class="h2 text-light">Destination Details</h1>
                        <ul class="list list-row list-dot list-dot-md justify-content-center">
                            <li>
                                <a href="index-2.html" class="link text-light hover:text-primary">Home</a>
                            </li>
                            <li>
                                <a href="#" class="link text-light hover:text-primary">Pages</a>
                            </li>
                            <li>
                                <a href="#" class="link text-primary hover:text-primary">Destination Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Banner -->
    <div class="section-space-top section-space-md-bottom">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <img src="{{ Storage::url($tour->img_thumb) }}" alt="image" class="img-fluid" />
                </div>
                <div class="col-lg-4">
                    <div class="row g-4">
                        @foreach ($tour->galleries as $glrs)
                            <div class="col-md-6 col-lg-12">
                                <img src="{{ Storage::url($glrs->image) }}" alt="image" class="img-fluid" />
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-lg-8">
                    <ul class="list list-row flex-wrap row-gap-1 column-gap-4 align-items-center">
                        <li>
                            <span class="badge bg-success-subtle text-success-emphasis ff-1">5.0</span>
                        </li>
                        <li>
                            <span class="badge bg-primary-subtle text-primary-emphasis ff-1">Perfect</span>
                        </li>
                        <li>
                            <span class="badge bg-info-subtle text-info-emphasis ff-1">Hotels</span>
                        </li>
                        <li>
                            <span class="badge bg-danger-subtle text-danger-emphasis ff-1">Building</span>
                        </li>
                        <li>
                            <span class="badge bg-success-subtle text-success-emphasis ff-1">Top Value</span>
                        </li>
                        <li>
                            <ul class="list list-row gap-1">
                                <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                                <li class="text-warning"><i class="bi bi-star-fill"></i></li>
                            </ul>
                        </li>
                    </ul>
                    <h1 class="h2 mt-4 mb-6">
                        {{ $tour->name }}
                    </h1>
                    <ul class="nav flex-nowrap tab-underline border-bottom">
                        <li>
                            <button class="btn btn-sm active" data-bs-toggle="tab" data-bs-target="#hoteDescription"
                                type="button">
                                Mô tả
                            </button>
                        </li>
                        <li>
                            <button class="btn btn-sm" data-bs-toggle="tab" data-bs-target="#hotelFeatures" type="button">
                                Tính năng
                            </button>
                        </li>
                        <li>
                            <button class="btn btn-sm" data-bs-toggle="tab" data-bs-target="#hotelVirtual" type="button">
                                Virtual
                            </button>
                        </li>
                        <li>
                            <button class="btn btn-sm" data-bs-toggle="tab" data-bs-target="#hotelPrice" type="button">
                                Price history
                            </button>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="hoteDescription">
                            <div class="card border-0">
                                <div class="card-body px-0">
                                    <p class="mb-0">
                                        {{ $tour->description }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hotelFeatures">
                            <div class="card border-0">
                                <div class="card-body px-0">
                                    <p class="mb-0">
                                        Arabian Park Hotel is a great choice for travellers
                                        looking for a 3 star hotel in Dubai. It is located in Bur
                                        Dubai. This Hotel stands out as one of the highly recom.2
                                        kms, Al Wasl Indoor Stadium (1.2 kms), Dubai Mall (5.4
                                        kms), Jumeirah Beach Park (9.6 kms) and Jumeirah Public
                                        Beach (15.8 kms).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hotelVirtual">
                            <div class="card border-0">
                                <div class="card-body px-0">
                                    <p class="mb-0">
                                        Arabian Park Hotel is a great choice for travellers
                                        looking for a 3 star hotel in Dubai. It is located in Bur
                                        Dubai. This Hotel stands out as one of the highly recom.2
                                        kms, Al Wasl Indoor Stadium (1.2 kms), Dubai Mall (5.4
                                        kms), Jumeirah Beach Park (9.6 kms) and Jumeirah Public
                                        Beach (15.8 kms).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="hotelPrice">
                            <div class="card border-0">
                                <div class="card-body px-0">
                                    <p class="mb-0">
                                        Arabian Park Hotel is a great choice for travellers
                                        looking for a 3 star hotel in Dubai. It is located in Bur
                                        Dubai. This Hotel stands out as one of the highly recom.2
                                        kms, Al Wasl Indoor Stadium (1.2 kms), Dubai Mall (5.4
                                        kms), Jumeirah Beach Park (9.6 kms) and Jumeirah Public
                                        Beach (15.8 kms).
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="pt-8">
                        <h5>Hotel features</h5>
                        <ul class="list list-row flex-wrap row-gap-1 column-gap-6 align-items-center">
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="d-inline-block flex-shrink-0"><i class="bi bi-wifi"></i> </span><span
                                        class="d-inline-block">Wifi</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="d-inline-block flex-shrink-0"><i class="bi bi-tsunami"></i> </span><span
                                        class="d-inline-block">Swimming</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="d-inline-block flex-shrink-0"><i class="bi bi-cup-hot-fill"></i>
                                    </span><span class="d-inline-block">Breakfast</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="d-inline-block flex-shrink-0"><i class="bi bi-people"></i> </span><span
                                        class="d-inline-block">Kids bed</span>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center gap-2">
                                    <span class="d-inline-block flex-shrink-0"><i
                                            class="bi bi-arrows-collapse-vertical"></i> </span><span
                                        class="d-inline-block">4m x 6m</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="py-8">
                        <h5>Amenities</h5>
                        <div class="row g-4">
                            <div class="col-md-6 col-xl-4">
                                <ul class="list gap-3">
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="d-inline-block flex-shrink-0"><i class="bi bi-wifi"></i>
                                            </span><span class="d-inline-block">Wifi</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="d-inline-block flex-shrink-0"><i class="bi bi-tsunami"></i>
                                            </span><span class="d-inline-block">Swimming</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="d-inline-block flex-shrink-0"><i class="bi bi-cup-hot-fill"></i>
                                            </span><span class="d-inline-block">Breakfast</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="d-inline-block flex-shrink-0"><i class="bi bi-people"></i>
                                            </span><span class="d-inline-block">Kids bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="d-inline-block flex-shrink-0"><i
                                                    class="bi bi-arrows-collapse-vertical"></i> </span><span
                                                class="d-inline-block">4m x 6m</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-6 col-xl-4">
                                <ul class="list gap-3">
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="d-inline-block flex-shrink-0"><i class="bi bi-wifi"></i>
                                            </span><span class="d-inline-block">Wifi</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="d-inline-block flex-shrink-0"><i class="bi bi-tsunami"></i>
                                            </span><span class="d-inline-block">Swimming</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="d-inline-block flex-shrink-0"><i class="bi bi-cup-hot-fill"></i>
                                            </span><span class="d-inline-block">Breakfast</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="d-inline-block flex-shrink-0"><i class="bi bi-people"></i>
                                            </span><span class="d-inline-block">Kids bed</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center gap-2">
                                            <span class="d-inline-block flex-shrink-0"><i
                                                    class="bi bi-arrows-collapse-vertical"></i> </span><span
                                                class="d-inline-block">4m x 6m</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <a href="#" class="link btn btn-success text-light">More Details</a>
                    <div class="pt-8">
                        <div class="accordion accordion-separate accordion-rounded-0 accordion-faq-2 gap-6"
                            id="accordion-separate">
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-20 fw-semibold rounded px-0" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#accordion-r1" aria-expanded="true">
                                        What destinations do you offer tours to
                                    </button>
                                </h2>
                                <div id="accordion-r1" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordion-separate">
                                    <div class="accordion-body px-0">
                                        Quisque rutrum. Aenean imperdi. Etiam ultricies nisi vel
                                        augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                                        Etiam rhoncus. Maecenas tempus, tellus eget.
                                    </div>
                                </div>
                            </div>
                            <hr class="m-0" />
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-20 fw-semibold rounded px-0 collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#accordion-r2"
                                        aria-expanded="false">
                                        What types of service do you provide?
                                    </button>
                                </h2>
                                <div id="accordion-r2" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-separate">
                                    <div class="accordion-body px-0">
                                        Quisque rutrum. Aenean imperdi. Etiam ultricies nisi vel
                                        augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                                        Etiam rhoncus. Maecenas tempus, tellus eget.
                                    </div>
                                </div>
                            </div>
                            <hr class="m-0" />
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-20 fw-semibold rounded px-0 collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#accordion-r3"
                                        aria-expanded="false">
                                        What is included in the tour package?
                                    </button>
                                </h2>
                                <div id="accordion-r3" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-separate">
                                    <div class="accordion-body px-0">
                                        Quisque rutrum. Aenean imperdi. Etiam ultricies nisi vel
                                        augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                                        Etiam rhoncus. Maecenas tempus, tellus eget.
                                    </div>
                                </div>
                            </div>
                            <hr class="m-0" />
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button fs-20 fw-semibold rounded px-0 collapsed"
                                        type="button" data-bs-toggle="collapse" data-bs-target="#accordion-r4"
                                        aria-expanded="false">
                                        What should I pack for my trip?
                                    </button>
                                </h2>
                                <div id="accordion-r4" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion-separate">
                                    <div class="accordion-body px-0">
                                        Quisque rutrum. Aenean imperdi. Etiam ultricies nisi vel
                                        augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.
                                        Etiam rhoncus. Maecenas tempus, tellus eget.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <ul class="list gap-6 p-md-4 p-xl-6">
                        <li>
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <h4 class="mb-0">
                                    {{ number_format($tour->price) }}$
                                    <span class="d-inline-block fs-16 fw-normal">/night</span>
                                </h4>
                            </div>
                        </li>
                        <li>
                            <div class="row g-4 align-items-center">
                                <div class="col-md-6">
                                    <label class="form-label fw-medium">Check In</label>
                                    <input type="date"
                                        class="form-control bg-secondary rounded border border-secondary" id="check-in"
                                        required />
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-medium">Check Out</label>
                                    <input type="date"
                                        class="form-control bg-secondary rounded border border-secondary" id="check-out"
                                        required />
                                </div>
                                <div class="col-12">
                                    <label class="form-label fw-medium">Số lượng</label>
                                    <select class="form-select bg-secondary rounded border border-secondary"
                                        id="quantity">
                                        <option value="0" selected>0</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                            </div>
                        </li>
                        <li>
                            <span class="d-block fw-medium mb-3">Extra Features</span>
                            <ul class="list gap-2">
                                @foreach ($tour->extraFeatures as $index => $efs)
                                    <li>
                                        <div class="form-check form-check-modifier form-check--success gap-2 w-100">
                                            <input class="form-check-input" type="checkbox" id="ef-{{ $index }}"
                                                data-price="{{ $efs->price }}" />
                                            <label class="form-check-label flex-grow-1" for="ef-{{ $index }}">
                                                <span
                                                    class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                                    <span class="d-inline-block flex-grow-1">{{ $efs->name }}</span>
                                                    <span
                                                        class="d-inline-block flex-shrink-0">${{ number_format($efs->price) }}</span>
                                                </span>
                                            </label>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                        <li>
                            <span class="d-block fw-medium mb-3">Price</span>
                            <div class="rounded-3 bg-secondary p-4" id="price-details">
                                <ul class="list gap-3">
                                    <li>
                                        <span class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                            <span class="d-inline-block flex-grow-1 text-dark text-opacity-50"
                                                id="nights-label">0 Night</span>
                                            <span class="d-inline-block flex-shrink-0"
                                                id="night-price">${{ number_format($tour->price) }}</span>
                                        </span>
                                    </li>
                                    <li>
                                        <span class="d-flex align-items-center justify-content-between gap-2 flex-wrap">
                                            <span class="d-inline-block flex-grow-1">Total payment</span>
                                            <span class="d-inline-block flex-shrink-0"
                                                id="total-payment">${{ number_format($tour->price) }}</span>
                                        </span>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <button class="btn btn-success text-light w-100 justify-content-center" id="book-button">
                                Đặt vé ngay!
                            </button>
                        </li>
                        <li>
                            <span class="d-block text-center text-dark text-opacity-50">You will not get charged yet</span>
                        </li>
                    </ul>
                </div>

                <script>
                    const checkInInput = document.getElementById('check-in');
                    const checkOutInput = document.getElementById('check-out');
                    const quantitySelect = document.getElementById('quantity');
                    const checkboxes = document.querySelectorAll('input[type="checkbox"]');
                    const nightPriceElement = document.getElementById('night-price');
                    const totalPaymentElement = document.getElementById('total-payment');
                    const nightsLabel = document.getElementById('nights-label');

                    function calculateTotal() {
                        let checkInDate = new Date(checkInInput.value);
                        let checkOutDate = new Date(checkOutInput.value);
                        let nights = 0;

                        if (checkInInput.value && checkOutInput.value && checkOutDate > checkInDate) {
                            nights = Math.ceil((checkOutDate - checkInDate) / (1000 * 3600 * 24));
                        }

                        let total = 0;
                        if (nights > 0) {
                            total = parseFloat('{{ $tour->price }}') * nights * parseInt(quantitySelect.value);
                            nightPriceElement.textContent = `$${(parseFloat('{{ $tour->price }}') * nights).toFixed(2)}`;
                        } else {
                            nightPriceElement.textContent = `$0`;
                        }

                        checkboxes.forEach(checkbox => {
                            if (checkbox.checked) {
                                total += parseFloat(checkbox.getAttribute('data-price'));
                            }
                        });

                        totalPaymentElement.textContent = `$${total.toFixed(2)}`;
                        nightsLabel.textContent = `${nights} Night${nights !== 1 ? 's' : ''}`;
                    }

                    checkInInput.addEventListener('change', calculateTotal);
                    checkOutInput.addEventListener('change', calculateTotal);
                    quantitySelect.addEventListener('change', calculateTotal);
                    checkboxes.forEach(checkbox => {
                        checkbox.addEventListener('change', calculateTotal);
                    });

                    document.getElementById('book-button').addEventListener('click', function() {
                        const checkIn = checkInInput.value;
                        const checkOut = checkOutInput.value;
                        const quantity = quantitySelect.value;

                        const extraFeatures = Array.from(checkboxes)
                            .filter(checkbox => checkbox.checked)
                            .map(checkbox => {
                                const nameWithPrice = checkbox.labels[0].textContent.trim();
                                const name = nameWithPrice.replace(/(\s*\$[0-9]+.*)/, '').trim(); // Xóa giá và chỉ lấy tên
                                return {
                                    name: name,
                                };
                            });

                        const totalPayment = totalPaymentElement.textContent.replace('$', '');

                        const tour = {
                            id: '{{ $tour->id }}',
                            name: '{{ $tour->name }}',
                            price: '{{ $tour->price }}',
                            image: '{{ $tour->img_thumb }}',
                            sku: '{{ $tour->sku }}',
                        };

                        fetch('{{ route('saveBooking') }}', {
                                method: 'POST',
                                headers: {
                                    'Content-Type': 'application/json',
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute(
                                        'content')
                                },
                                body: JSON.stringify({
                                    checkIn,
                                    checkOut,
                                    quantity,
                                    extraFeatures,
                                    totalPayment,
                                    tour // Thêm tour vào đây
                                })
                            })
                            .then(response => response.json())
                            .then(data => {
                                if (data.success) {
                                    window.location.href = `{{ route('checkout') }}`;
                                } else {
                                    console.error('Error:', data.message);
                                }
                            })
                            .catch(error => console.error('Error:', error));
                    });
                </script>


            </div>
        </div>
    </div>
    <div class="section-space-md-top section-space-bottom">
        <div class="section-space-md-bottom text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <span class="d-block text-primary">Tending Destination</span>
                        <h2 class="mb-0">The most searched for cities on Tourice</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-xl-3">
                    <div class="card popular-card h-100">
                        <div class="card-body p-4 popular-card__body">
                            <a href="destination-details.html" class="link d-block mb-6"><img
                                    src="assets/img/reservation-img-1.png" alt="image"
                                    class="img-fluid w-100 rounded" /></a>
                            <h6 class="card-title fs-18">
                                <a href="destination-details.html"
                                    class="link d-inline-block text-dark hover:text-primary">Hotel Sea Crown</a>
                            </h6>
                            <ul class="list list-row gap-1 align-items-center">
                                <li>
                                    <span class="text-warning fs-14 d-block"><i class="bi bi-star-fill"></i></span>
                                </li>
                                <li>
                                    <span class="text-dark fs-12 d-block">4.8 (122 reviews)</span>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mt-6">
                                <h5 class="mb-0">
                                    $150<span class="fs-14 fw-normal">/Person</span>
                                </h5>
                                <a href="destination-details.html" class="link btn btn-primary fs-14 text-light">Book
                                    Trip</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card popular-card h-100">
                        <div class="card-body p-4 popular-card__body">
                            <a href="destination-details.html" class="link d-block mb-6"><img
                                    src="assets/img/reservation-img-2.png" alt="image"
                                    class="img-fluid w-100 rounded" /></a>
                            <h6 class="card-title fs-18">
                                <a href="destination-details.html"
                                    class="link d-inline-block text-dark hover:text-primary">Long Beach Hotel</a>
                            </h6>
                            <ul class="list list-row gap-1 align-items-center">
                                <li>
                                    <span class="text-warning fs-14 d-block"><i class="bi bi-star-fill"></i></span>
                                </li>
                                <li>
                                    <span class="text-dark fs-12 d-block">4.8 (122 reviews)</span>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mt-6">
                                <h5 class="mb-0">
                                    $150<span class="fs-14 fw-normal">/Person</span>
                                </h5>
                                <a href="destination-details.html" class="link btn btn-primary fs-14 text-light">Book
                                    Trip</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card popular-card h-100">
                        <div class="card-body p-4 popular-card__body">
                            <a href="destination-details.html" class="link d-block mb-6"><img
                                    src="assets/img/reservation-img-3.png" alt="image"
                                    class="img-fluid w-100 rounded" /></a>
                            <h6 class="card-title fs-18">
                                <a href="destination-details.html"
                                    class="link d-inline-block text-dark hover:text-primary">Majestic Maldives</a>
                            </h6>
                            <ul class="list list-row gap-1 align-items-center">
                                <li>
                                    <span class="text-warning fs-14 d-block"><i class="bi bi-star-fill"></i></span>
                                </li>
                                <li>
                                    <span class="text-dark fs-12 d-block">4.8 (122 reviews)</span>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mt-6">
                                <h5 class="mb-0">
                                    $150<span class="fs-14 fw-normal">/Person</span>
                                </h5>
                                <a href="destination-details.html" class="link btn btn-primary fs-14 text-light">Book
                                    Trip</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="card popular-card h-100">
                        <div class="card-body p-4 popular-card__body">
                            <a href="destination-details.html" class="link d-block mb-6"><img
                                    src="assets/img/reservation-img-1.png" alt="image"
                                    class="img-fluid w-100 rounded" /></a>
                            <h6 class="card-title fs-18">
                                <a href="destination-details.html"
                                    class="link d-inline-block text-dark hover:text-primary">Breathtaking Bali</a>
                            </h6>
                            <ul class="list list-row gap-1 align-items-center">
                                <li>
                                    <span class="text-warning fs-14 d-block"><i class="bi bi-star-fill"></i></span>
                                </li>
                                <li>
                                    <span class="text-dark fs-12 d-block">4.8 (122 reviews)</span>
                                </li>
                            </ul>
                            <div class="d-flex align-items-center flex-wrap gap-2 justify-content-between mt-6">
                                <h5 class="mb-0">
                                    $150<span class="fs-14 fw-normal">/Person</span>
                                </h5>
                                <a href="destination-details.html" class="link btn btn-primary fs-14 text-light">Book
                                    Trip</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
