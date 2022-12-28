@extends('admin.main')

@section('content')

    {{-- Nhập Sách --}}
    <form action="" method="POST">
        @csrf {{-- token --}}
        <div class="card-body">

            <div class="form-group">
                <label>Tác Giả</label>
                <input type="text" name="name" class="form-control" id="menu" placeholder="Nhập Tên Tác Giả">
            </div>

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Tác Giả</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection

