@extends('client.layouts.master')

@section('content')
    <main class="main-content">
        <div class="banner section-space-y">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="section-space-md-y text-center">
                            <h1 class="h2 text-light">Xác nhận</h1>
                            <ul class="list list-row list-dot list-dot-md justify-content-center">
                                <li><a href="index-2.html" class="link text-light hover:text-primary">Trang chủ</a></li>
                                <li><a href="#" class="link text-primary hover:text-primary">Xác nhận</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="thank-you-area section-space-y-axis-100">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Xác minh địa chỉ email của bạn') }}</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('Một liên kết xác minh mới đã được gửi đến địa chỉ email của bạn.') }}
                                </div>
                            @endif

                            {{ __('Trước khi tiếp tục, vui lòng kiểm tra email của bạn để lấy liên kết xác minh.') }}
                            {{ __('Nếu bạn không nhận được email') }},
                            <form class="d-inline" method="POST" action="#">
                                @csrf
                                <button type="submit"
                                    class="btn btn-link p-0 m-0 align-baseline">{{ __('bấm vào đây để được gửi một yêu cầu khác') }}</button>.
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
