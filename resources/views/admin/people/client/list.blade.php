@extends('admin.main')

@section('content')
    <div class="card-body" class="container mt-5">

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">ID</th>
                    <th scope="col">Tên Khách Hàng</th>
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">Email</th>
                    <th scope="col">Tổng Nợ</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $key => $client)
                <tr>
                    <td>{{ $client->id }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ $client->phone_number }}</td>
                    <td>{{ $client->email }}</td>
                    <td>{{ $client->tong_no }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $clients->links() !!}
    </div>
@endsection
