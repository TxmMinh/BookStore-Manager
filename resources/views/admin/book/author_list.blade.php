@extends('admin.main')

@section('content')
    <div class="card-body" class="container mt-5">

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">ID</th>
                    <th scope="col">Tác Giả</th>
                    <th scope="col" style="width: 100px">Cập Nhập</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $key => $author)
                <tr>
                    <td>{{ $author->id }}</td>
                    <td>{{ $author->name }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/author/edit/{{ $author->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm"
                            onclick="removeRow({{ $author->id }}, '/admin/author/destroy')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $authors->links() !!}

    </div>
@endsection
