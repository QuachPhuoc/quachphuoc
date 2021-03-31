
@extends('admin.app')
@section('content')
<div class="card">
    <form action="{{url('/admin/khoa/add')}}" method="post">
    @csrf
    
        <input type="text" class="form-control" name="tenkhoa">
        <input type="submit" class="form-control" value="Thêm">
    </form>
</div>
@endsection