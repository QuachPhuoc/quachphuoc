
@extends('admin.app')
@section('content')

<link rel="stylesheet" href="">
<div class="card">
    <form action="{{url('/admin/khoa/update/' . $khoa->id)}}" method="post">
    @csrf
   
        <input type="text" class="form-control" name="tenkhoa" value="{{$khoa->tenkhoa}}">
        <input type="submit" class="form-control" value="Sửa">
    </form>
</div>
@endsection