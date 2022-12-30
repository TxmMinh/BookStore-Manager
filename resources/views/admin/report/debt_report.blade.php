@extends('admin.main')

@section('content')
    <div class="card-body" class="container mt-5">

        <table class="table table-bordered mb-5" id="search_table">
            <thead>
                <tr class="table-success">
                    <th scope="col">Tháng</th>
                    <th scope="col">Tên Khách Hàng</th>
                    <th scope="col">Nợ Đầu</th>
                    <th scope="col">Phát Sinh</th>
                    <th scope="col">Nợ Cuối</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($clients as $key => $client)
                <tr>
                    <td>{{ date('F', strtotime($client->created_at)) }}</td>
                    <td>{{ $client->name }}</td>
                    <td>{{ 0 }}</td>
                    <td>{{ $client->tong_no }}</td>
                    <td>{{ $client->tong_no }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $clients->links() !!}

    </div>
@endsection
