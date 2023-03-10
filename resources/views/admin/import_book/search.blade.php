@extends('admin.main')

@section('content')
    <div class="card-body" class="container mt-5">
        <table class="table table-bordered mb-5" id="search_table">
            <thead>
                <tr class="table-success">
                    <th scope="col">ID</th>
                    <th scope="col">Tên Sách</th>
                    <th scope="col">Tên Nhân Viên</th>
                    <th scope="col">Số Lượng Nhập</th>
                    <th scope="col">Đơn Giá Nhập</th>
                    <th scope="col">Đơn Giá Bán</th>
                    <th scope="col">Ngày Nhập</th>
                    <th scope="col">Cập Nhập</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($import_books as $key => $import_book)
                <tr>
                    <td>{{ $import_book->id }}</td>
                    <td>{{ $import_book->books->name }}</td>
                    <td>{{ $import_book->staffs->name }}</td>
                    <td>{{ $import_book->extra_number }}</td>
                    <td>{{ $import_book->unit_import }}</td>
                    <td>{{ $import_book->price }}</td>
                    <td>{{ $import_book->created_at->format('d/m/Y') }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/import_book/edit/{{ $import_book->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm"
                            onclick="removeRow({{ $import_book->id }}, '/admin/import_book/destroy')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $import_books->links() !!}
    </div>

@endsection
