@extends('layout/master')
@section('title', 'Sửa thành viên')
@section('content')
<div class="row">
	<h4 class="fix-title">Quản lý thành viên
		<small>Sửa thành viên</small>
	</h4>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">
			<h4 class="fix-title">Sửa thành viên</h4>
		</div>

		<form method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label class="col-md-2 fix-label">Mã cá nhân</label>

				<div class="col-md-10 fix-col">
					<input type="text" class="form-control" name="ma_thanhvien" value="{{ $thanhvien->ma_thanhvien }}">
					@if($errors->has('ma_thanhvien'))
					<div class="alert alert-danger">{{$errors->first('ma_thanhvien')}}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Họ và tên</label>

				<div class="col-md-10 fix-col">
					<input type="text" class="form-control" name="ten_thanhvien" value="{{ $thanhvien->ten_thanhvien }}">
					@if($errors->has('ten_thanhvien'))
					<div class="alert alert-danger">{{$errors->first('ten_thanhvien')}}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Mật khẩu</label>

				<div class="col-md-10 fix-col">
					<input type="password" class="form-control" name="password" value="{{ $thanhvien->password }}">
					@if($errors->has('password'))
					<div class="alert alert-danger">{{$errors->first('password')}}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Ảnh đại diện</label>

				<div class="col-md-10 fix-col">
					<input class="btn" name="anh_thanhvien" type="file" onchange="changeImg(this)">
					<img width="150px" src="{{asset('lib/storage/app/avatar/'.$thanhvien->anh_thanhvien)}}">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Ngày sinh</label>

				<div class="col-md-10 fix-col">
					<input type="date" class="form-control" name="ngaysinh" value="{{ $thanhvien->ngaysinh }}">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Email</label>

				<div class="col-md-10 fix-col">
					<input type="email" class="form-control" name="email" value="{{ $thanhvien->email }}">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Số điện thoại</label>

				<div class="col-md-10 fix-col">
					<input type="text" class="form-control" name="so_dienthoai" value="{{ $thanhvien->so_dienthoai }}">
				</div>
			</div>

			@if(Auth::user()->quyen == 1)
			<div class="form-group">
				<label class="col-md-2 fix-label">Học vị</label>

				<div class="col-md-10 fix-col">
					<input type="text" class="form-control" name="hocvi" value="{{ $thanhvien->hocvi }}">
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Quyền</label>

				<div class="col-md-10 fix-col">
					<select class="form-control" name="quyen">
						<option value="1" @if($thanhvien->quyen==1) selected @endif>Thư ký</option>
						<option value="2" @if($thanhvien->quyen==2) selected @endif>Giáo viên</option>
						<option value="3" @if($thanhvien->quyen==3) selected @endif>Sinh viên</option>
					</select>									
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Khoa</label>

				<div class="col-md-10 fix-col">								
					<select class="form-control" name="khoa_thanhvien" rel="khoa">
						@foreach($khoalist as $khoa)
						<option value="{{$khoa->id_khoa}}" @if($thanhvien->khoa_thanhvien == $khoa->id_khoa) selected @endif>{{$khoa->ten_khoa}}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Ngành</label>

				<div class="col-md-10 fix-col">								
					<select name="nganh_thanhvien" rel="nganh" class="form-control">
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Bộ môn</label>

				<div class="col-md-10 fix-col">								
					<select class="form-control" name="bomon_thanhvien">
						<option value="0">Lựa chọn bộ môn</option>
						@foreach($bomonlist as $bomon)
						<option value="{{$bomon->id_bomon}}" @if($thanhvien->bomon_thanhvien == $bomon->id_bomon) selected @endif>{{$bomon->ten_bomon}}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Khóa</label>

				<div class="col-md-10 fix-col">
					<input type="text" class="form-control" name="lop" value="{{$thanhvien->lop}}">
				</div>
			</div>
			
			@else
			<input type="hidden" name="khoa_thanhvien" value="{{Auth::user()->khoa_thanhvien}}">
			<input type="hidden" name="nganh_thanhvien" value="{{Auth::user()->nganh_thanhvien}}">
			<input type="hidden" name="quyen" value="{{Auth::user()->quyen}}">
			<input type="hidden" name="lop" value="{{Auth::user()->lop}}">
			<input type="hidden" name="hocvi" value="{{Auth::user()->hocvi}}">
			<input type="hidden" name="bomon_thanhvien" value="{{Auth::user()->bomon_thanhvien}}">
			@endif
			<button type="submit" class="btn btn-success">Sửa</button>
			<button type="reset" class="btn btn-primary">Làm lại</button>
			<a href="{{ asset('thanhvien/dsthanhvien') }}" class="btn btn-secondary pull-right">Hủy</a>
		</form>       
	</div>							
</div>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){

		function select()
		{
			var id = $('[rel="khoa"] :selected').val();
			$.ajax({
				url: "{{ url('/ajax/nganh') }}",
				data: { idkhoa: id, idnganh: {{ $thanhvien->nganh_thanhvien }} }
			}).done(function(data2){
				$('[rel="nganh"]').html(data2)
			});
		}

		select();
		$('[rel="khoa"]').change(function(){
			select();

		});

	});

</script>
@endsection
