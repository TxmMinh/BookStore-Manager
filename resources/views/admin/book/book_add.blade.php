@extends('admin.main')

@section('content')

    {{-- Nhập Sách --}}
    <form action="" method="POST">
        @csrf {{-- token --}}
        <div class="card-body">

            <div class="form-group">
                <label>Tên Sách</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập Tên Sách">
            </div>

            <div class="form-group">
                <label>Nhà Xuất Bản</label>
                <select class="form-control" name="publishing_house_id">
                    @foreach ($publishing_houses as $publishing_house)
                        <option value="{{ $publishing_house->id }}">{{ $publishing_house->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Tác Giả</label>
                <select class="form-control" name="author_id">
                    @foreach ($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Thể Loại</label>
                <select class="form-control" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Sách Mới</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection

