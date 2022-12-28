@extends('admin.main')

@section('content')
    <div class="card-body" class="container mt-5">

        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">ID</th>
                    <th scope="col">Nhà Xuất Bản</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($publishing_houses as $key => $publishing_house)
                <tr>
                    <td>{{ $publishing_house->id }}</td>
                    <td>{{ $publishing_house->name }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $publishing_houses->links() !!}

    </div>
@endsection
