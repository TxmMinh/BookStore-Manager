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
                    <th scope="col">Tiền Thu</th>
                    <th scope="col">Ngày Nhập</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($receipts as $key => $receipt)
                <tr>
                    <td>{{ $receipt->id }}</td>
                    <td>{{ $receipt->clients->name }}</td>
                    <td>{{ $receipt->clients->phone_number }}</td>
                    <td>{{ $receipt->clients->address }}</td>
                    <td>{{ $receipt->clients->email }}</td>
                    <td>{{ $receipt->money }}</td>
                    <td>{{ $receipt->created_at->format('d/m/Y') }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $receipts->links() !!}

    </div>
@endsection
