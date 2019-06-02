@extends('layout/master')
@section('title', 'Thêm thành viên')
@section('content')
<div class="row">
	<h4 class="fix-title">Quản lý thành viên
		<small>Thêm thành viên</small>
	</h4>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">
			<h4 class="fix-title">Thêm thành viên</h4>
		</div>
		@if(session('thongbao2'))
		<div class="alert alert-danger">{{session('thongbao2')}}</div>
		@endif

		<form method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label class="col-md-2 fix-label">Mã cá nhân</label>

				<div class="col-md-10 fix-col">
					<input type="text" class="form-control" name="ma_thanhvien" placeholder="Nhập mã" value="{{old('ma_thanhvien')}}">
					@if($errors->has('ma_thanhvien'))
					<div class="alert alert-danger">{{$errors->first('ma_thanhvien')}}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Họ và tên</label>

				<div class="col-md-10 fix-col">
					<input type="text" class="form-control" name="ten_thanhvien" placeholder="Nhập họ và tên" value="{{old('ten_thanhvien')}}">
					@if($errors->has('ten_thanhvien'))
					<div class="alert alert-danger">{{$errors->first('ten_thanhvien')}}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Mật khẩu</label>

				<div class="col-md-10 fix-col">
					<input type="text" class="form-control" name="password" placeholder="Nhập mật khẩu" value="{{old('password')}}">
					@if($errors->has('password'))
					<div class="alert alert-danger">{{$errors->first('password')}}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Ngày sinh</label>

				<div class="col-md-10 fix-col">
					<input type="date" name="ngaysinh" class="form-control" value="{{old('ngaysinh')}}">
					@if($errors->has('ngaysinh'))
					<div class="alert alert-danger">{{$errors->first('ngaysinh')}}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Ảnh đại diện</label>

				<div class="col-md-10 fix-col">
					<input class="btn" type="file" name="anh_thanhvien" onchange="changeImg(this)">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Quyền</label>

				<div class="col-md-10 fix-col">
					<select class="form-control" name="quyen" value="{{old('quyen')}}">
						<option value="unselect" selected="">Lựa chọn quyền</option>
						<option value="1">Thư ký</option>
						<option value="2">Giáo viên</option>
						<option value="3">Sinh viên</option>
					</select>									
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Khoa</label>

				<div class="col-md-10 fix-col">								
					<select class="form-control" name="khoa_thanhvien" value="{{old('khoa_thanhvien')}}" rel="khoa" required>
						<option value="unselect" selected="">Lựa chọn khoa</option>
						@foreach($khoa as $khoaa)
						<option value="{{$khoaa->id_khoa}}">{{$khoaa->ten_khoa}}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Ngành</label>

				<div class="col-md-10 fix-col">								
					<select class="form-control" name="nganh_thanhvien" value="{{old('nganh_thanhvien')}}" rel="nganh">
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Lớp</label>

				<div class="col-md-10 fix-col">
					<input type="text" class="form-control" name="lop" placeholder="Nhập Khóa" value="{{old('lop')}}">
					@if($errors->has('lop'))
					<div class="alert alert-danger">{{$errors->first('lop')}}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Email</label>

				<div class="col-md-10 fix-col">
					<input type="email" class="form-control" name="email" placeholder="Nhập Email" value="{{old('email')}}">
					@if($errors->has('email'))
					<div class="alert alert-danger">{{$errors->first('email')}}</div>
					@endif
				</div>
			</div>
			<button type="submit" name="submit" class="btn btn-success">Thêm</button>
			<button type="reset" class="btn btn-primary">Làm lại</button>
			<a href="{{ asset('thanhvien/dsthanhvien') }}" class="btn btn-secondary pull-right">Hủy</a>
		</form>     
	</div>							
</div>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){

		$('[rel="khoa"]').change(function(){
			var id = $(this).val();
			$.ajax({
				url: "{{ url('/ajax/nganh') }}",
				data: { idkhoa: id }
			}).done(function(data){
				$('[rel="nganh"]').html(data)
			});

		});

	});

</script>
@stop


