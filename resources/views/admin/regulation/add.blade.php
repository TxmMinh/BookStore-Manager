@extends('admin.main')

@section('content')
    <form action="" method="POST">
        @csrf
        <div class="card-body">

            <div class="form-group">
                <label>Tên Quy Định</label>
                <input type="text" name="content" class="form-control" >
            </div>

            <div class="form-group">
                <label>Kích hoạt</label>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="1" type="radio" id="active" name="active"
                        checked="">
                    <label for="active" class="custom-control-label">Yes</label>
                </div>
                <div class="custom-control custom-radio">
                    <input class="custom-control-input" value="0" type="radio" id="no_active" name="active">
                    <label for="no_active" class="custom-control-label">No</label>
                </div>
            </div>

        </div>

        <!-- /.card-body -->

        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Thêm Quy Định</button>
        </div>

        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
    </form>
@endsection

