@extends('admin.main')

@section('content')

    {{-- Nhập Sách --}}
    <form action="" method="POST">
        @csrf {{-- token --}}
        <div class="card-body">
            <div class="form-group">
                <label>Tên Khách Hàng</label>
                <input type="text" name="customer_name" class="form-control" >
            </div>

            <div class="form-group">
                <label>Số Điện Thoại</label>
                <input type="text" name="phone_number" class="form-control" >
            </div>

            <div class="form-group">
                <label>Địa Chỉ</label>
                <input type="text" name="address" class="form-control" id="menu" >
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="text" name="email" class="form-control" >
            </div>

            <div class="form-group">
                <label>Ngày Nhập</label>
                <input type="date" name="date" class="form-control" >
            </div>

            <div class="form-group">
                <label>Tiền thu</label>
                <input type="text" name="money" class="form-control" >
            </div>

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection

