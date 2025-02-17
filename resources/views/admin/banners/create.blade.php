@extends('admin.layouts.master')

@section('title')
    Thêm Banner
@endsection

@section('content')
<div class="card shadow mb-4">
    <div class="card-body">
<form action="{{route('admin.banners.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Name:</label>
        <input type="text" id="name" class="form-control" name="name">
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Image:</label>
        <input type="file" id="image" class="form-control-file" name="image">
        @error('image')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
      <div class="mb-3">
        <label for="is_active" class="form-label">Trạng thái:</label>
        <br>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="is_active" id="is_active" value="1">
          <label class="form-check-label" for="inlineRadio1">Hoạt động</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="is_active" id="is_active" value="0">
          <label class="form-check-label" for="is_active">Không hoạt động</label>
        </div>
        @error('is_active')
            <span class="text-danger">{{ $message }}</span>
        @enderror
      </div>
    <button type="submit" class="btn btn-primary">Thêm mới</button>
    <button class="btn btn-success"><a href="{{route('admin.banners.index')}}" class="text-decoration-none text-white">Danh sách</a></button>
  </form>
    </div>
</div>
@endsection