@extends('admin.layouts.master')

@section('title')
    Chỉnh sửa tour
@endsection

@section('content')
<form action="{{ route('admin.tours.update', $tour) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
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
                            <label for="name" class="form-label">Tên tour</label>
                            <input type="text" id="name" class="form-control" name="name" value="{{ old('name', $tour->name) }}" placeholder="Nhập tên tour" required>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Giá tour</label>
                            <input type="number" id="price" class="form-control" name="price" value="{{ old('price', $tour->price) }}" placeholder="Nhập giá tour" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Mô tả tour</label>
                            <textarea name="description" id="ckeditor-classic" class="form-control" placeholder="Nhập mô tả tour" required>{{ old('description', $tour->description) }}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="place_id" class="form-label">Địa điểm</label>
                            <select name="place_id" id="place_id" class="form-control" required>
                                <option value="">Chọn địa điểm</option>
                                @foreach($places as $id => $name)
                                    <option value="{{ $id }}" {{ $id == $tour->place_id ? 'selected' : '' }}>{{ $name }}</option>
                                @endforeach
                            </select>
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
                                    <p class="text-muted">Cập nhật hình ảnh chính của tour.</p>
                                    <input type="file" id="img_thumb" class="form-control-file" name="img_thumb">
                                    @if($tour->img_thumb)
                                        <img src="{{ Storage::url($tour->img_thumb) }}" alt="Hình ảnh tour" width="123" class="mt-2">
                                    @endif
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-4">
                                    <h5 class="fs-14 mb-1">Thư viện hình ảnh</h5>
                                    <p class="text-muted">Cập nhật hình ảnh thư viện của tour.</p>
                                    <input type="file" name="galleries[]" multiple class="form-control-file">

                                    @foreach ($tour->galleries as $gallery)
                                        <img src="{{ Storage::url($gallery->image) }}" alt="Gallery Image" width="123" class="mt-2">
                                    @endforeach
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
                        <div id="extra-features">
                            <div class="mb-3">
                                <label for="extra_features" class="form-label">Các tính năng thêm</label>
                                <div id="extra-features-list">
                                    @foreach($tour->extraFeatures as $index => $feature)
                                        <div class="row mb-2 extra-feature">
                                            <div class="col-md-6">
                                                <input type="text" name="extra_features[{{ $index }}][name]" class="form-control" placeholder="Tên tính năng" value="{{ old('extra_features.' . $index . '.name', $feature['name']) }}">
                                            </div>
                                            <div class="col-md-6">
                                                <input type="number" name="extra_features[{{ $index }}][price]" class="form-control" placeholder="Giá thêm" value="{{ old('extra_features.' . $index . '.price', $feature['price']) }}">
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <button type="button" class="btn btn-success add-extra-feature">Thêm tính năng</button>
                            </div>
                        </div>
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
                            <label for="is_active" class="form-label">Trạng thái</label>
                            <select class="form-control form-select-lg mb-3" id="is_active" name="is_active" required>
                                <option value="" selected>------- Trạng thái -------</option>
                                <option value="1" {{ $tour->is_active ? 'selected' : '' }}>Hoạt động</option>
                                <option value="0" {{ !$tour->is_active ? 'selected' : '' }}>Không hoạt động</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="sku" class="form-label">Mã tour</label>
                            <input type="text" class="form-control" name="sku" value="{{ old('sku', $tour->sku) }}" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-center mb-3">
                        <button type="submit" class="btn btn-primary">Cập nhật</button>
                        <a href="{{ route('admin.tours.index') }}" class="btn btn-success ml-2">Danh sách</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<script>
document.addEventListener('DOMContentLoaded', function () {
    let extraFeatureCount = {{ count($tour->extraFeatures) }};
    const addExtraFeatureButton = document.querySelector('.add-extra-feature');
    const extraFeaturesList = document.getElementById('extra-features-list');

    addExtraFeatureButton.addEventListener('click', function () {
        extraFeatureCount++;
        const newFeature = `
            <div class="row mb-2 extra-feature">
                <div class="col-md-6">
                    <input type="text" name="extra_features[${extraFeatureCount}][name]" class="form-control" placeholder="Tên tính năng">
                </div>
                <div class="col-md-6">
                    <input type="number" name="extra_features[${extraFeatureCount}][price]" class="form-control" placeholder="Giá thêm">
                </div>
            </div>
        `;
        extraFeaturesList.insertAdjacentHTML('beforeend', newFeature);
    });
});
</script>
@endsection
