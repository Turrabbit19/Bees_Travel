@extends('client.layouts.master')

@section('content')
    <div class="banner section-space-y">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-space-md-y text-center">
                        <h1 class="h2 text-light">Hóa đơn</h1>
                        <ul class="list list-row list-dot list-dot-md justify-content-center">
                            <li>
                                <a href="index-2.html" class="link text-light hover:text-primary">Trang chủ</a>
                            </li>
                            <li>
                                <a href="#" class="link text-primary hover:text-primary">Hóa đơn</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /Banner -->
    <div class="section-space-y">
        <div class="container">
            <div class="row g-4 align-items-center">
                <div class="col-md-6">
                    <img src="{{ Storage::url($tour['image']) }}" alt="image" class="img-fluid" />
                </div>
                <div class="col-md-6">
                    <h2>Thành công 🎉</h2>
                    <div class="d-flex align-items-center gap-4">
                        <div class="flex-grow-1">
                            <h6 class="mb-0 fs-16">
                                <a href="#" class="link text-dark hover:text-primary">{{ $tour['name'] }}</a>
                            </h6>
                            <ul class="list list-row gap-1 align-items-center">
                                <li>
                                    <span class="text-warning fs-14 d-block"><i class="bi bi-star-fill"></i></span>
                                </li>
                                <li>
                                    <span class="text-dark fs-12 d-block">5.0
                                        <span class="d-inline-block text-dark text-opacity-60">(234 reviews)</span></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="my-12">
                        <div class="card checkout-card">
                            <div class="card-body">
                                <h6 class="mb-6">Booking Details</h6>
                                <ul class="list gap-3">
                                    <li>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div
                                                class="d-flex align-items-center gap-2 text-dark text-opacity-60 flex-grow-1 fs-14">
                                                <span class="d-inline-block flex-shrink-0"><i
                                                        class="bi bi-calendar-date"></i> </span><span
                                                    class="d-inline-block flex-grow-1 ff-1">Ngày khởi hành</span>
                                            </div>
                                            <div class="text-dark fs-14 flex-shrink-0">
                                                {{ $booking['checkIn'] }}
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div
                                                class="d-flex align-items-center gap-2 text-dark text-opacity-60 flex-grow-1 fs-14">
                                                <span class="d-inline-block flex-shrink-0"><i
                                                        class="bi bi-calendar-date"></i> </span><span
                                                    class="d-inline-block flex-grow-1 ff-1">Ngày kết thúc</span>
                                            </div>
                                            <div class="text-dark fs-14 flex-shrink-0">
                                                {{ $booking['checkOut'] }}
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div
                                                class="d-flex align-items-center gap-2 text-dark text-opacity-60 flex-grow-1 fs-14">
                                                <span class="d-inline-block flex-shrink-0"><i class="bi bi-people"></i>
                                                </span><span class="d-inline-block flex-grow-1 ff-1">Người tham gia</span>
                                            </div>
                                            <div class="text-dark fs-14 flex-shrink-0">{{ $booking['quantity'] }} người
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-footer">
                                <ul class="list gap-3">
                                    <li>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div
                                                class="d-flex align-items-center gap-2 text-dark text-opacity-60 flex-grow-1 fs-14">
                                                <span class="d-inline-block flex-shrink-0"><i class="bi bi-box-seam"></i>
                                                </span><span class="d-inline-block flex-grow-1 ff-1">Booking code</span>
                                            </div>
                                            <div class="text-dark fs-14 flex-shrink-0">
                                                {{ $tour['sku'] }}
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div
                                                class="d-flex align-items-center gap-2 text-dark text-opacity-60 flex-grow-1 fs-14">
                                                <span class="d-inline-block flex-shrink-0"><i
                                                        class="bi bi-calendar-date"></i> </span><span
                                                    class="d-inline-block flex-grow-1 ff-1">Booking day</span>
                                            </div>
                                            <div class="text-dark fs-14 flex-shrink-0">
                                                {{ now() }}
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div
                                                class="d-flex align-items-center gap-2 text-dark text-opacity-60 flex-grow-1 fs-14">
                                                <span class="d-inline-block flex-shrink-0"><i class="bi bi-receipt"></i>
                                                </span><span class="d-inline-block flex-grow-1 ff-1">Total</span>
                                            </div>
                                            <div class="text-dark fs-14 flex-shrink-0">${{ $booking['totalPayment'] }}</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div
                                                class="d-flex align-items-center gap-2 text-dark text-opacity-60 flex-grow-1 fs-14">
                                                <span class="d-inline-block flex-shrink-0"><i class="bi bi-wallet2"></i>
                                                </span><span class="d-inline-block flex-grow-1 ff-1">Payment method</span>
                                            </div>
                                            <div class="text-dark fs-14 flex-shrink-0">Paypal</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center gap-4 flex-wrap">
                        <a href="index-2.html" class="btn btn-light">Back Home </a><a href="#"
                            class="btn btn-primary text-light">Download Invoice</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
