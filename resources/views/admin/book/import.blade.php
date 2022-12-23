@extends('admin.main')

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label for="menu">Sách</label>
                <select class="form-control" name="book_code">
                    <option value="0" disabled style="color: rgb(5, 5, 242)">Name - Author - Category</option>
                    @foreach ($books as $book)
                        <option value="{{ $book->id }}">{{ $book->name }} - {{ $book->authors->name }} - {{ $book->categories->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Nhân Viên</label>
                <select class="form-control" name="staff_code">
                    @foreach ($staffs as $staff)
                        <option value="{{ $staff->id }}">{{ $staff->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label>Số lượng Nhập</label>
                <input type="number" name="extra_number" class="form-control">
            </div>

            <div class="form-group">
                <label>Đơn Giá Nhập</label>
                <input type="number" name="unit_import" class="form-control" >
            </div>

            <div class="form-group">
                <label>Ngày Nhập</label>
                <input type="date" name="date" class="form-control">
            </div>

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Sách</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection

