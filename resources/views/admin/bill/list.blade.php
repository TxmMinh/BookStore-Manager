@extends('admin.main')

@section('content')
    <div class="card-body" class="container mt-5">

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">ID</th>
                    <th scope="col">Khách Hàng</th>
                    <th scope="col">Nhân Viên</th>
                    <th scope="col">Tổng Tiền</th>
                    <th scope="col">Tiền Khách Trả</th>
                    <th scope="col">Tiền Khách Nợ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($bills as $key => $bill)
                <tr>
                    <td>{{ $bill->id }}</td>
                    <td>{{ $bill->customer_id }}</td>
                    <td>{{ $bill->staff_id }}</td>
                    <td>{{ $bill->sum_money }}</td>
                    <td>{{ $bill->payment }}</td>
                    <td>{{ $bill->debt }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $bills->links() !!}
    </div>
@endsection
