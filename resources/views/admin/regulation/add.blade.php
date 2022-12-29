@extends('admin.main')

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label>Mã Quy Định</label>
                <input type="number" name="extra_number" class="form-control">
            </div>

            <div class="form-group">
                <label>Tên Quy Định</label>
                <input type="number" name="unit_import" class="form-control" >
            </div>

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Sách</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection

