@extends('layout/master')
@section('title', 'Quản lý năm')
@section('content')
<div class="row">
	<h4 class="fix-title">
		Quản lý năm
		<small>Quản lý năm</small>
	</h4>
</div>

<div class="row">
	<div class="box">
		<div class="form-control">
			<h4>Thêm năm</h4>                  
			<form role="form" method="post">
				@csrf
				<div class="form-group">
					<label class="col-md-2 fix-label">Năm học</label>
					<div class="col-md-10 fix-col">
						<input type="text" class="form-control" name="nam" placeholder="Nhập năm học mới" value="{{old('nam')}}">
						@if($errors->has('nam'))
						<div class="alert alert-danger">{{$errors->first('nam')}}</div>
						@endif
					</div>
				</div>
				<button type="submit" name="submit" class="btn btn-success">Thêm</button>
				<button type="reset" class="btn btn-primary">Làm mới</button>
			</form>
		</div>
	</div>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">
			<div class="col-md-4">
				<h4 class="fix-title">Các năm hiện có</h4>
			</div>
		</div>
		@if(session('thongbao'))
            <div class="alert alert-success">{{session('thongbao')}}</div>
        @endif
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Năm</th>
						<th>Sửa</th>                        
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					@foreach($nam as $row)
					<tr>
						<td>{{$row->nam}}</td>
						<td><a href="{{ asset('qlnam/sua_nam/'.$row->id_nam) }}"><span class="fa fa-pencil"></span></a></td>
						<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('qlnam/xoa_nam/'.$row->id_nam) }}"><span class="fa fa-times"></span></a></td>
					</tr>
					@endforeach    
				</tbody>

				<!-- Popup -->

			</table>
		</div>
		<div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4" style="margin-top: 10px;" align="center">
            {{ $nam->links() }}
          </div>
          <div class="col-md-4"></div>
        </div>                
	</div>
</div>

@endsection