@extends('admin.layouts.master')

@section('title')
    Sửa địa điểm
@endsection

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.places.update', $place) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Name:</label>
                    <input type="text" id="name" class="form-control" name="name" value="{{ $place->name }}">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image:</label>
                    <input type="file" id="image" class="form-control-file" name="image">
                    <div class="text-center mt-3">
                        @if ($place->image)
                            <img src="{{ Storage::url($place->image) }}" alt="{{ $place->name }}" width="321">
                        @else
                            <p>Chưa có hình ảnh</p>
                        @endif
                    </div>
                </div>

                <div class="mb-3">
                    <label for="is_active" class="form-label">Trạng thái:</label>
                    <br>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active1" value="1"
                            {{ $place->is_active == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active1">Hoạt động</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="is_active" id="is_active2" value="0"
                            {{ $place->is_active == 0 ? 'checked' : '' }}>
                        <label class="form-check-label" for="is_active2">Không hoạt động</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-warning">Cập nhật</button>
                <a href="{{ route('admin.places.index') }}" class="btn btn-success text-decoration-none text-white">Danh
                    sách</a>
            </form>
        </div>
    </div>
@endsection
