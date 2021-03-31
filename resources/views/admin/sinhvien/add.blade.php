@extends('admin.app')
@section('content')

<div class="col-md-12">
<div class="card">
<div class="card-header">
<h5 class="card-title" >THÊM THÔNG TIN SINH VIÊN</h5>
<form action="{{url('/admin/sv/add')}}" method="post">
</div>
<div class="card-body">


<div class="row">
<div class="mb-3 col-md-6">
<label class="form-label" for="inputEmail4">Họ và tên</label>
<input type="text" class="form-control" id="inputEmail4" placeholder="Họ và tên" name="hovaten">
</div>
@csrf
    <div class="mb-3 col-md-4">
<label class="form-label" for="inputState">Chọn lớp</label>
<select id="inputState" class="form-control" name="lop_id">
@foreach($lop as $value)
        <option value="{{$value->id}}">{{$value->tenlop}}</option>
    @endforeach
</select>                                
    </div>
<div class="mb-3 col-md-6">
<label class="form-label" for="inputPassword4">Ngày sinh</label>
<input type="date" class="form-control" id="inputPassword4" placeholder="" name="ngaysinh">
</div>
</div>
<div class="mb-3">
<label class="form-label" for="inputAddress">Điện thoại</label>
<input type="" class="form-control" id="inputAddress" placeholder="Phone" name="dienthoai">
</div>
<div class="mb-3">
<label class="form-label" for="inputEmail4">Email</label>
<input type="email" class="form-control" id="inputEmail4" placeholder="Your Email" name="email">
</div>
<div class="row">
<div class="mb-3 col-md-6">
<label class="form-label" for="inputCity">Ghi chú</label>
<input type="text" class="form-control" id="inputCity" name="ghichu">
</div>


<div class="mb-3">
<label class="form-label" class="form-check m-0">
<input type="checkbox" class="form-check-input">
<span class="form-check-label">Check me out</span>
</label>
</div>
<button type="submit" class="btn btn-primary">Thêm</button>
</form>
</div>
</div>
</div>
@endsection