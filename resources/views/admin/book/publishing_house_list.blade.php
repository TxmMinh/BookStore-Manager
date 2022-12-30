@extends('admin.main')

@section('content')
    <div class="card-body" class="container mt-5">

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">ID</th>
                    <th scope="col">Nhà Xuất Bản</th>
                    <th scope="col" style="width: 100px">Cập Nhập</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($publishing_houses as $key => $publishing_house)
                <tr>
                    <td>{{ $publishing_house->id }}</td>
                    <td>{{ $publishing_house->name }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/publishing_house/edit/{{ $publishing_house->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm"
                            onclick="removeRow({{ $publishing_house->id }}, '/admin/publishing_house/destroy')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $publishing_houses->links() !!}

    </div>
@endsection
