@extends('admin.layouts.master')

@section('title')
    Sản phẩm
@endsection

@section('create-btn')
    <a href="{{ route('admin.tours.create') }}" class="btn btn-primary btn-icon-split">
        <span class="icon text-white-50">
            <i class="fas fa-arrow-right"></i>
        </span>
        <span class="text">Thêm</span>
    </a>
@endsection

@section('content')
    @if (session('success'))
        <div class="text-center text-success">
            <span>{{ session('success') }}</span>
        </div>
    @endif

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                @if (count($tours) > 0)
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên tour</th>
                                <th>Slug</th>
                                <th>Mã tour</th>
                                <th>Ảnh đại diện</th>
                                <th>Giá</th>
                                <th>Trạng thái</th>
                                <th>Ngày tạo</th>
                                <th>Ngày cập nhật</th>
                                <th>Chi tiết</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tours as $index => $tour)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $tour->name }}</td>
                                    <td>{{ $tour->slug }}</td>
                                    <td>{{ $tour->sku }}</td>
                                    <td>
                                        @if($tour->img_thumb)
                                            <img src="{{ Storage::url($tour->img_thumb) }}" alt="{{ $tour->name }}" width="123">
                                        @else
                                            <p>Không có ảnh</p>
                                        @endif
                                    </td>
                                    <td>{{ number_format($tour->price) }}</td>
                                    <td>
                                        {!! $tour->is_active 
                                            ? '<span class="badge bg-success text-white">Hoạt động</span>' 
                                            : '<span class="badge bg-danger text-white">Không hoạt động</span>' !!}
                                    </td>
                                    <td>{{ date_format($tour->created_at, 'd/m/Y H:i:s') }}</td>
                                    <td>{{ $tour->updated_at == $tour->created_at ? '' : date_format($tour->updated_at, 'd/m/Y H:i:s') }}</td>
                                    <td><a href="{{ route('admin.tours.show', $tour) }}"><button class="btn btn-info">
                                        <span class="icon text-white">
                                            <i class="fas fa-eye"></i>
                                        </span>
                                    </button></a></td>
                                    <td><a href="{{ route('admin.tours.edit', $tour) }}"><button class="btn btn-warning">
                                        <span class="icon text-white">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                    </button></a></td>
                                    <td>
                                        <form action="{{ route('admin.tours.destroy', $tour) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa không?!??')">
                                                <span class="icon text-white">
                                                    <i class="fas fa-trash"></i>
                                                </span>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="d-flex justify-content-center align-items-center">
                        <p>Không có tour nào được tìm thấy.</p>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
