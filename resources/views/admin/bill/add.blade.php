@extends('admin.main')

@section('content')

    {{-- Nhập Sách --}}
    <form action="" method="POST">
        @csrf {{-- token --}}
        <div class="card-body">
            <div class="form-group">
                <label>Mã Hóa Đơn</label>
                <input type="text" name="mahoadon" class="form-control" placeholder="Nhập Mã Hóa Đơn">
            </div>

            <div class="form-group">
                <label>Tên Khách Hàng</label>
                <input type="text" name="customer" class="form-control" placeholder="Nhập Tên Khách Hàng">
            </div>

            <div class="form-group">
                <label>Ngày Nhập</label>
                <input type="date" name="data" class="form-control" id="menu" placeholder="Nhập Tên Tác Giả">
            </div>

            <div class="form-group">
                <label>Tổng Tiền</label>
                <input type="text" name="sum_money" class="form-control" >
            </div>

            <div class="form-group">
                <label>Tiền Khách Trả</label>
                <input type="text" name="tien_tra" class="form-control" >
            </div>

            <div class="form-group">
                <label>Tiền Khách Nợ</label>
                <input type="text" name="tien_no" class="form-control" >
            </div>

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection

