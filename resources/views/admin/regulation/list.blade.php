@extends('admin.main')

@section('content')
    <div class="card-body" class="container mt-5">

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">ID</th>
                    <th scope="col">Tên Quy Định</th>
                    <th scope="col" style="width: 100px">Kích Hoạt</th>
                    <th scope="col" style="width: 100px">Cập Nhập</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($regulations as $key => $regulation)
                <tr>
                    <td>{{ $regulation->id }}</td>
                    <td>{{ $regulation->content }}</td>
                    <td>{!! \App\Helpers\Helper::active($regulation->active) !!}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/regulation/edit/{{ $regulation->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm"
                            onclick="removeRow({{ $regulation->id }}, '/admin/regulation/destroy')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $regulations->links() !!}
    </div>
@endsection
