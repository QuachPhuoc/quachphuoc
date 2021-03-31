@extends('admin.app')
@section('content')

<link rel="stylesheet" href="">
<div class="card">
    <form action="{{url('/admin/lop/update/' . $lop->id)}}" method="post">
    @csrf
   
    <div class="form-group">
    <select class="form-select" aria-label="Default select example" name="khoa_id">
        <option selected>Chọn khoa</option>
    @foreach($khoa as $value)
        <option value="{{$value->id}}">{{$value->tenkhoa}}</option>
    @endforeach
</select>
       <br>                             
    </div>
        <input type="text" class="form-control" name="tenlop" value="{{$lop->tenlop}}">
        <input type="submit" class="form-control" value="Sửa">
    </form>
</div>
@endsection