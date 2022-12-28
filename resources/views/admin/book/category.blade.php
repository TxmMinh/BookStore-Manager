@extends('admin.main')

@section('content')

    {{-- Nhập Sách --}}
    <form action="" method="POST">
        @csrf {{-- token --}}
        <div class="card-body">

            <div class="form-group">
                <label>Thể Loại</label>
                <input type="text" name="name" class="form-control" id="menu" placeholder="Nhập Tên Thể Loại">
            </div>

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Thể Loại</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection

