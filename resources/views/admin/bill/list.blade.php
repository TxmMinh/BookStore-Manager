@extends('admin.main')

@section('content')
    <div class="card-body" class="container mt-5">

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">ID</th>
                    <th scope="col">Mã Hóa Đơn</th>
                    <th scope="col">Tên Khách Hàng</th>
                    <th scope="col">Ngày Nhập</th>
                    <th scope="col">Tổng Tiền</th>
                    <th scope="col">Tiền Khách Trả</th>
                    <th scope="col">Tiền Khách Nợ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bills as $key => $bill)
                <tr>
                    <td>{{ $bill->id }}</td>
                    <td>{{ $bill->mahoadon }}</td>
                    <td>{{ $bill->customer }}</td>
                    <td>{{ $bill->data }}</td>
                    <td>{{ $bill->sum_money }}</td>
                    <td>{{ $bill->tien_tra }}</td>
                    <td>{{ $bill->tien_no }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $bills->links() !!}
    </div>
@endsection
