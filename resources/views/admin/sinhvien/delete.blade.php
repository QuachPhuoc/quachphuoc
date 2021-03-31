
@extends('admin.app')
@section('content')


	<div class="card">
		<div class="card-header">Xóa Thông tin sinh viên</div>
		<div class="card-body">
			<form action="{{ url('/admin/sv/delete/' . $Sv->id) }}" method="post">
				@csrf
                
				<p>Bạn có muốn xóa thông tin  {{ $Sv->hovaten }} này không?</p>
				<button type="submit" class="btn btn-danger"><i class="fal fa-save"></i> Xác nhận xóa</button>
			</form>
		</div>
	</div>
@endsection
