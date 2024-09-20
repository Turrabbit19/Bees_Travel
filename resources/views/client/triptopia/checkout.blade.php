@extends('client.layouts.master')

@section('content')
    <div class="banner section-space-y">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="section-space-md-y text-center">
                        <h1 class="h2 text-light">CHECKOUT</h1>
                        <ul class="list list-row list-dot list-dot-md justify-content-center">
                            <li>
                                <a href="index-2.html" class="link text-light hover:text-primary">Home</a>
                            </li>
                            <li>
                                <a href="#" class="link text-primary hover:text-primary">CHECKOUT</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-space-y">
        <div class="container">
            <form action="{{ route('checkout.process') }}" method="POST">
                @csrf
                <div class="row g-4">
                    <div class="col-md-8">
                        <h2>Xác nhận và thanh toán</h2>
                        <hr />
                        <div class="d-flex align-items-center gap-3 my-6">
                            <span
                                class="d-grid place-content-center w-6 h-6 rounded-circle bg-primary text-light fs-14 flex-shrink-0">1</span>
                            <h6 class="mb-0 flex-grow-1">Thông tin xác nhận</h6>
                        </div>
                        <div class="row g-4">
                            <div class="col-12">
                                <input type="text" class="form-control border-secondary bg-secondary"
                                    placeholder="Họ và tên" name="name" value="{{ Auth::user()->name }}" />
                            </div>
                            <div class="col-12">
                                <input type="text" class="form-control border-secondary bg-secondary"
                                    placeholder="Địa chỉ" name="address" required />
                            </div>
                            <div class="col-md-6">
                                <input type="email" class="form-control border-secondary bg-secondary" placeholder="Email"
                                    name="email" value="{{ Auth::user()->email }}" required />
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control border-secondary bg-secondary"
                                    placeholder="Số điện thoại" name="phone" required />
                            </div>
                        </div>
                        <hr class="my-6" />
                        <div class="d-flex align-items-center gap-3 my-6">
                            <span
                                class="d-grid place-content-center w-6 h-6 rounded-circle bg-primary text-light fs-14 flex-shrink-0">2</span>
                            <h6 class="mb-0 flex-grow-1">Phương thức thanh toán</h6>
                        </div>
                        <ul class="list gap-4">
                            <li>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center gap-3">
                                            <div
                                                class="form-check form-check-modifier form-check--primary-subtle flex-grow-1 gap-3">
                                                <input class="form-check-input" type="radio" name="paymentMethod"
                                                    id="paymentOption1" value="1" />
                                                <label class="form-check-label" for="paymentOption1">
                                                    <span class="d-block fw-semibold ff-1">Pay with Paypal </span>
                                                    <span class="d-block fs-14">You will be redirected to PayPal website to
                                                        complete your purchase securely</span>
                                                </label>
                                            </div>
                                            <div class="d-inline-block flex-shrink-0">
                                                <img src="{{ asset('style/client/img/icon-paypal.png') }}" alt="image"
                                                    class="img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center gap-3 mb-6">
                                            <div
                                                class="form-check form-check-modifier form-check--primary-subtle flex-grow-1 gap-3">
                                                <input class="form-check-input" type="radio" name="paymentMethod"
                                                    id="paymentOption2" value="2" />
                                                <label class="form-check-label" for="paymentOption2">
                                                    <span class="d-block fw-semibold ff-1">Credit / Debit Card </span>
                                                    <span class="d-block fs-14">We support Mastercard, Visa, Discover and
                                                        Stripe.</span>
                                                </label>
                                            </div>
                                            <div class="d-inline-block flex-shrink-0">
                                                <img src="{{ asset('style/client/img/icon-visa.png') }}" alt="image"
                                                    class="img-fluid" />
                                            </div>
                                        </div>
                                        <div class="row g-4">
                                            <div class="col-12">
                                                <label class="form-label fs-14 ff-1 text-dark text-opacity-60">Card
                                                    Number</label>
                                                <input type="text" class="form-control border-secondary bg-secondary"
                                                    placeholder="XXXX XXXX XXXX XXXX" name="card_number" />
                                            </div>
                                            <div class="col-12">
                                                <label class="form-label fs-14 ff-1 text-dark text-opacity-60">Card
                                                    Holder</label>
                                                <input type="text" class="form-control border-secondary bg-secondary"
                                                    placeholder="Peter Parker" name="card_holder" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label fs-14 ff-1 text-dark text-opacity-60">Expiration
                                                    Date</label>
                                                <input type="text" class="form-control border-secondary bg-secondary"
                                                    placeholder="MM/YY" name="expiration_date" />
                                            </div>
                                            <div class="col-md-6">
                                                <label class="form-label fs-14 ff-1 text-dark text-opacity-60">CVC</label>
                                                <input type="text" class="form-control border-secondary bg-secondary"
                                                    placeholder="****" name="cvc" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="d-flex align-items-center gap-3 mb-6">
                                    <span
                                        class="d-grid place-content-center w-6 h-6 rounded-circle bg-primary text-light fs-14 flex-shrink-0">3</span>
                                    <h6 class="mb-0 flex-grow-1">Hóa đơn</h6>
                                </div>
                                <div class="d-flex align-items-center gap-4">
                                    <div
                                        class="w-10 h-10 rounded overflow-hidden d-grid place-content-center flex-shrink-0">
                                        <img src="{{ Storage::url($tour['image']) }}" alt="image" class="img-fluid" />
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0 fs-16">
                                            <a href="#"
                                                class="link text-dark hover:text-primary">{{ $tour['name'] }}</a>
                                        </h6>
                                        <ul class="list list-row gap-1 align-items-center">
                                            <li>
                                                <span class="text-warning fs-14 d-block"><i
                                                        class="bi bi-star-fill"></i></span>
                                            </li>
                                            <li>
                                                <span class="text-dark fs-12 d-block">5.0
                                                    <span class="d-inline-block text-dark text-opacity-60">(234
                                                        reviews)</span></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <hr class="my-6" />
                                <div class="d-flex align-items-center justify-content-between mb-4">
                                    <h6 class="mb-0 fs-14 fw-normal text-opacity-60 text-dark">VAT</h6>
                                    <h6 class="mb-0">$ 1</h6>
                                </div>
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0 fs-14 fw-normal text-opacity-60 text-dark">Giảm giá</h6>
                                    <h6 class="mb-0">$ 0</h6>
                                </div>
                                <hr class="my-6" />
                                <div class="d-flex align-items-center justify-content-between">
                                    <h6 class="mb-0">Total</h6>
                                    <h6 class="mb-0">$ {{ $booking['totalPayment'] + 1 }}</h6>
                                </div>

                                <button type="submit"
                                    class="btn btn-primary justify-content-center ff-1 text-light w-100 mt-6">Hoàn tất
                                    thanh toán</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
