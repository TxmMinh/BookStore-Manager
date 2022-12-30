@extends('admin.main')

@section('content')
    <div class="card-body" class="container mt-5">

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">ID</th>
                    <th scope="col">Tháng</th>
                    <th scope="col">Tên Sách</th>
                    <th scope="col">Tác Giả</th>
                    <th scope="col">Thể Loại</th>
                    <th scope="col">Nhà Xuất Bản</th>
                    <th scope="col">Số lượng tồn</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $key => $book)
                <tr>
                    <td>{{ $book->id }}</td>
                    <td>{{ date('F', strtotime($book->created_at)) }}</td>
                    <td>{{ $book->name }}</td>
                    <td>{{ $book->authors->name }}</td>
                    <td>{{ $book->categories->name }}</td>
                    <td>{{ $book->publishing_houses->name }}</td>
                    <td>{{ $book->number }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $books->links() !!}

    </div>
@endsection
