@extends('admin.main')

@section('content')
    <form action="" method="POST">
        @csrf {{-- token --}}
        <div class="card-body">

            <div class="form-group">
                <label for="menu">Tên Khánh Hàng</label>
                <input type="text" name="name" class="form-control" id="menu" placeholder="Nhập Tên Khánh Hàng">
            </div>

            <div class="form-group">
                <label>Số Điện Thoại</label>
                <input type="number" name="phone_number" class="form-control" class="form-control">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" class="form-control">
            </div>

            <div class="form-group">
                <label>Địa Chỉ</label>
                <input type="text" name="address" class="form-control" class="form-control">
            </div>

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Khánh Hàng</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection


