@extends('admin.main')

@section('content')

    {{-- Nhập Sách --}}
    <form action="" method="POST">
        @csrf {{-- token --}}
        <div class="card-body">
            <div class="form-group">
                <label for="menu">Khách Hàng</label>
                <select class="form-control" name="customer_id">
                    <option value="0" disabled style="color: rgb(5, 5, 242)">Tên - Số Điện Thoại - Email - Địa Chỉ - Tổng Nợ</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}">{{ $client->name }} - {{ $client->phone_number }} - {{ $client->email }} - {{ $client->address }} - {{ $client->tong_no }}</option>
                    @endforeach
                </select>
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

