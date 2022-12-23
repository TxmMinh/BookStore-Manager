@extends('admin.main')

@section('content')
    <div class="card-body" class="container mt-5">

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">ID</th>
                    <th scope="col">Tên Khách Hàng</th>
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">Địa Chỉ</th>
                    <th scope="col">Email</th>
                    <th scope="col">Ngày Nhập</th>
                    <th scope="col">Tiền Thu</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($receipts as $key => $receipt)
                <tr>
                    <td>{{ $receipt->id }}</td>
                    <td>{{ $receipt->customer_name }}</td>
                    <td>{{ $receipt->phone_number }}</td>
                    <td>{{ $receipt->address }}</td>
                    <td>{{ $receipt->email }}</td>
                    <td>{{ $receipt->date }}</td>
                    <td>{{ $receipt->money }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $receipts->links() !!}

    </div>
@endsection
