@extends('admin.layouts.master')

@section('title')
    Xem chi tiết tour
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- Left content -->
        <div class="col-xl-8 col-lg-7">
            <div class="card shadow mb-4">
                <a href="#collapseTourInfo" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseTourInfo">
                    <h6 class="m-0 font-weight-bold text-primary">Thông tin tour</h6>
                </a>
                <div class="collapse show" id="collapseTourInfo">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Tên tour</label>
                            <p>{{ $tour->name }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Giá tour</label>
                            <p>{{ number_format($tour->price, 0, ',', '.') }} VNĐ</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mô tả tour</label>
                            <p>{!! $tour->description !!}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Địa điểm</label>
                            <p>{{ $tour->place->name }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tour gallery -->
            <div class="card shadow mb-4">
                <a href="#collapseTourGallery" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseTourGallery">
                    <h6 class="m-0 font-weight-bold text-primary">Hình ảnh tour</h6>
                </a>
                <div class="collapse show" id="collapseTourGallery">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <h5 class="fs-14 mb-1">Hình ảnh chính</h5>
                                    @if($tour->img_thumb)
                                        <img src="{{ Storage::url($tour->img_thumb) }}" alt="Hình ảnh tour" width="123">
                                    @else
                                        <p>Chưa có hình ảnh chính</p>
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <h5 class="fs-14 mb-1">Thư viện hình ảnh</h5>
                                    @if($tour->galleries->isEmpty())
                                        <p>Chưa có hình ảnh thư viện</p>
                                    @else
                                        @foreach ($tour->galleries as $gallery)
                                            <img src="{{ Storage::url($gallery->image) }}" alt="Gallery Image" width="123" class="mt-2">
                                        @endforeach
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Extra features -->
            <div class="card shadow mb-4">
                <a href="#collapseExtraFeatures" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseExtraFeatures">
                    <h6 class="m-0 font-weight-bold text-primary">Tính năng thêm</h6>
                </a>
                <div class="collapse show" id="collapseExtraFeatures">
                    <div class="card-body">
                        @if($tour->extraFeatures->isEmpty())
                            <p>Chưa có tính năng thêm</p>
                        @else
                            <ul class="list-group">
                                @foreach($tour->extraFeatures as $feature)
                                    <li class="list-group-item">
                                        <strong>Tên tính năng:</strong> {{ $feature->name }}<br>
                                        <strong>Giá thêm:</strong> {{ number_format($feature->price, 0, ',', '.') }} VNĐ
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-4 col-lg-5">
            <div class="card shadow mb-4">
                <a href="#collapseStatus" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="collapseStatus">
                    <h6 class="m-0 font-weight-bold text-primary">Trạng thái tour</h6>
                </a>
                <div class="collapse show" id="collapseStatus">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Trạng thái</label>
                            <p>{{ $tour->is_active ? 'Hoạt động' : 'Không hoạt động' }}</p>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Mã tour</label>
                            <p>{{ $tour->sku }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
