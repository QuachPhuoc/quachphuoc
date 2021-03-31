@extends('admin.app')
@section('content')
<style>
    .padding{
    margin-right: 20px;
    }
</style>

                    <div class="row">
                        <div class="col-12">
							<div class="card">
								<div class="card-header">
                                    
									<h3 class="card-title">Thông tin khoa</h3>
								</div>
                                
								<div class="table-responsive">
									<table class="table mb-0">
										<thead>
											<tr>
												
												<th scope="col">Mã khoa<g/th>
												<th scope="col">Tên khoa</th>
                                                <th scope="col">Ngày tạo</th>
                                                <th scope="col">Ngày sửa</th>
                                                <th scope="col">Chỉnh sửa</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($khoa as $value)
											<tr>
												<td>{{$value->id}}</td>
											
                                                <td>{{ $value->tenkhoa }}</td>
                                                <td>{{ $value->created_at }}</td>
                                                <td>{{ $value->updated_at }}</td>
												<td class="table-action">
				
												    <a href="{{ url('/admin/khoa/update/' . $value->id) }}" class="padding"><i class="align-middle" data-feather="edit-2"></i></a>
														<a href="{{ url('admin/khoa/delete/' . $value->id) }}"><i class="align-middle" data-feather="trash"></i></a>
											    </td>
											</tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
                            <a class="btn btn-primary" href="{{url('/admin/khoa/add')}}" >Thêm</a>
						</div>
                    </div>


@endsection