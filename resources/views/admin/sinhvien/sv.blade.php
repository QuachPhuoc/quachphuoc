@extends('admin.app')
@section('content')


<style>
    .padding{
    margin-right: 25px;
    }


#customers {
  font-family: Arial, Helvetica, sans-serif;
  width: 100%;
  
}


#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 1px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 10px;
  padding-bottom: 10px;
  text-align: left;
  background-color: #3b7ddd;
  color: white;
}

.alert {
  padding: 15px;
  background-color: rgb(233, 7, 56);
  color: white;
}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 20px;
  line-height: 15px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
}
</style>
@if(Session('error'))
    <div class="alert">
        
            {{Session('error')}}
           <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
    </div>

@endif

                    <div class="row">
                        <div class="col-12">
							<div class="card">
								<div class="card-header">
                                    
									<h3 class="card-title">Thông tin Sinh Viên</h3>
								</div>
                                
								<div class="table-responsive">
									<table  id="customers">
										<thead>
											<tr>										
												<th scope="col">Mã số SV<g/th>
												<th scope="col">Tên Lớp</th>
												<th scope="col">Họ và tên</th>
                                                <th scope="col">Ngày Sinh</th>
                                                <th scope="col">Điện thoại</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">Ghi Chú</th>
                                                <th scope="col">Ngày tạo</th>
                                                <th scope="col">Ngày sửa</th>
                                                <th scope="col">Chỉnh sửa</th>
											</tr>
										</thead>
										<tbody>
                                        @foreach($Sv as $value)
											<tr>
												                        <td>{{$value->id}}</td>
												                        <td>{{ $value->lop->tenlop }}</td>
                                                <td>{{ $value->hovaten }}</td>
                                                <td>{{ $value->ngaysinh }}</td>
                                                <td>{{ $value->dienthoai }}</td>
                                                <td>{{ $value->email }}</td>
                                                <td>{{ $value->ghichu }}</td>
                                                <td>{{ $value->created_at }}</td>
                                                <td>{{ $value->updated_at }}</td>
												<td class="table-action">
												    <a href="{{ url('/admin/sv/update/' . $value->id) }}" class="padding"><i class="align-middle" data-feather="edit-2"></i></a>
												    <a href="{{ url('admin/sv/delete/' . $value->id) }}"><i class="align-middle" data-feather="trash"></i></a>
											    </td>
											</tr>
                                            @endforeach
										</tbody>
									</table>
								</div>
							</div>
            
                             <a href="{{url('/admin/sv/add')}}"><img src="https://img.icons8.com/ultraviolet/40/000000/new-by-copy.png"/></a>                                       
                            <a href="{{url('admin/sv/export/')}}"><img src="https://img.icons8.com/color/48/000000/ms-excel.png"/></a>
                            <a href="#" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" ><i class="fas fa-file-import"></i> Nhập từ Excel</a>
						</div>
                    </div>


                    <form action="{{url('/admin/sv/import')}}" method="post" enctype="multipart/form-data">
	@csrf
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<h5 class="modal-title" id="exampleModalLabel">Nhập từ excel</h5>
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			  <span aria-hidden="true">&times;</span>
			</button>
		  </div>
		  <div class="modal-body">
			
			  <div class="form-group">
				<label for="recipient-name" class="col-form-label">Chọn tập tin excel</label>
				<input type="file" class="form-control-file" id="TapTinExcel" name="TapTinExcel">
			  </div>
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-dismiss="modal">Hùy bỏ</button>
			<button type="submit" class="btn btn-primary">Nhập</button>
		  </div>
		</div>
	  </div>
	</div>
</form>


@endsection