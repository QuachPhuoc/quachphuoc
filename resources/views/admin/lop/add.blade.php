@extends('admin.app')
@section('content')

<div class="h2">Thêm Lớp</div>
<form action="{{url('/admin/lop/add')}}" method="post">
@csrf
    <div class="input-group mb-3">
    <input type="text" class="form-control" name="tenlop">
    </div>
    <div class="form-group">
    <select class="form-select" aria-label="Default select example" name="khoa_id">
        <option selected>Chọn khoa</option>
    @foreach($khoa as $value)
        <option value="{{$value->id}}">{{$value->tenkhoa}}</option>
    @endforeach
</select>
                                    
    </div>
    <input type="submit" class="form-control" value="Thêm">
</form>
@endsection