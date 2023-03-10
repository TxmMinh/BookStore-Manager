@extends('admin.main')

@section('content')
    <div class="card-body" class="container mt-5">

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">ID</th>
                    <th scope="col">Tên Nhân Viên</th>
                    <th scope="col">Giới Tính</th>
                    <th scope="col">Số Điện Thoại</th>
                    <th scope="col">Ngày Sinh</th>
                    <th scope="col">Địa Chỉ</th>
                    <th scope="col" style="width: 100px">Cập Nhập</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($staffs as $key => $staff)
                <tr>
                    <td>{{ $staff->id }}</td>
                    <td>{{ $staff->name }}</td>
                    <td>{{ $staff->gender }}</td>
                    <td>{{ $staff->phone_number }}</td>
                    <td>{{ $staff->birth_of_date }}</td>
                    <td>{{ $staff->address }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="/admin/staff/edit/{{ $staff->id }}">
                            <i class="fas fa-edit"></i>
                        </a>
                        <a href="#" class="btn btn-danger btn-sm"
                            onclick="removeRow({{ $staff->id }}, '/admin/staff/destroy')">
                            <i class="fas fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $staffs->links() !!}
    </div>
@endsection
