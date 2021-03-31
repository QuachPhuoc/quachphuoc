
@extends('admin.app')
@section('content')


	<div class="card">
		<div class="card-header">Xóa lớp</div>
		<div class="card-body">
			<form action="{{ url('/admin/khoa/delete/' . $khoa->id) }}" method="post">
				@csrf

				<p>Bạn có muốn xóa  {{ $khoa->tenkhoa }} này không?</p>
				<button type="submit" class="btn btn-danger"><i class="fal fa-save"></i> Xác nhận xóa</button>
			</form>
		</div>
	</div>
@endsection
