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
                <label>Tên Nhà Xuất Bản</label>
                <input type="text" name="publishing_house" class="form-control" placeholder="Nhập Tên Nhà Xuất Bản">
            </div>

            <div class="form-group">
                <label>Tác Giả</label>
                <input type="text" name="author" class="form-control" id="menu" placeholder="Nhập Tên Tác Giả">
            </div>

            <div class="form-group">
                <label>Thể Loại</label>
                <input type="text" name="category" class="form-control" placeholder="Nhập Tên Thể Loại">
            </div>

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Sách Mới</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection

