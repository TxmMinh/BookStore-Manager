@extends('admin.main')

@section('content')
    <div class="card-body" class="container mt-5">

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">ID</th>
                    <th scope="col">Mã Hóa Đơn</th>
                    <th scope="col">Tên Sách</th>
                    <th scope="col">Tên Thể Loại</th>
                    <th scope="col">Số Lượng Bán</th>
                    <th scope="col">Đơn Giá Bán</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($buys as $key => $buy)
                <tr>
                    <td>{{ $buy->id }}</td>
                    <td>{{ $buy->mahoadon }}</td>
                    <td>{{ $buy->books->name }}</td>
                    <td>{{ $buy->category }}</td>
                    <td>{{ $buy->number_buy }}</td>
                    <td>{{ $buy->unit_buy }}</td>

                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $buys->links() !!}
    </div>
@endsection
