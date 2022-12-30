@extends('admin.main')

@section('content')
    <div class="card-body" class="container mt-5">
        @php
            $doanh_thu = 0;

        @endphp
        @foreach ($bills as $key => $bill)
        @php
            $doanh_thu += $bill->sum_money;
        @endphp
        @endforeach
        <table class="table table-bordered mb-5">
            <thead>
                <tr class="table-success">
                    <th scope="col">Tháng</th>
                    <th scope="col">Tổng Doanh Thu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ date('F', strtotime($bill->created_at)) }}</td>
                    <td>{{ $doanh_thu }}</td>
                </tr>
            </tbody>
        </table>

        {{-- Pagination --}}
        {!! $bills->links() !!}

    </div>
@endsection
