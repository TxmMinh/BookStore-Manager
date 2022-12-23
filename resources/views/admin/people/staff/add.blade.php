@extends('admin.main')

@section('content')
    <form action="" method="POST">
        @csrf {{-- token --}}
        <div class="card-body">

            <div class="form-group">
                <label for="menu">Tên Nhân Viên</label>
                <input type="text" name="name" class="form-control" id="menu" placeholder="Nhập Tên Nhân Viên">
            </div>

            <div class="form-group">
                <label>Giới Tính</label>
                <input type="text" name="gender" class="form-control" class="form-control">
            </div>

            <div class="form-group">
                <label>Số Điện Thoại</label>
                <input type="text" name="phone_number" class="form-control" class="form-control">
            </div>

            <div class="form-group">
                <label>Ngày Sinh Nhật</label>
                <input type="date" name="birth_of_date" class="form-control" class="form-control">
            </div>

            <div class="form-group">
                <label>Địa Chỉ</label>
                <input type="text" name="address" class="form-control" class="form-control">
            </div>

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Nhân Viên</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection


