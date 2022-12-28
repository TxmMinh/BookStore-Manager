@extends('admin.main')

@section('content')

    {{-- Nhập Sách --}}
    <form action="" method="POST">
        @csrf {{-- token --}}
        <div class="card-body">

            <div class="form-group">
                <label>Nhà Xuất Bản</label>
                <input type="text" name="name" class="form-control" placeholder="Nhập Tên Nhà Xuất Bản">
            </div>

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Nhà Xuất Bản</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection

