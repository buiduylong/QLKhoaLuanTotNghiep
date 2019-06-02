@extends('layout/master')
@section('title', 'Thêm thành viên hội đồng')
@section('content')
<div class="row">
	<h4 class="fix-title">Quản lý hội đồng
		<small>Thêm thành viên hội dồng chấm khóa luận</small>
	</h4>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">
			<h4 class="fix-title">Thêm thành viên hội dồng chấm khóa luận</h4>
		</div>
		
		@if(session('thongbao2'))
		<div class="alert alert-danger">{{session('thongbao2')}}</div>
		@endif

		@if(session('thongbao3'))
		<div class="alert alert-danger">{{session('thongbao3')}}</div>
		@endif

		<form method="post">
			@csrf
			<div class="form-group">
				<label class="col-md-2 fix-label">Khoa</label>

				<div class="col-md-10 fix-col">
					<select name="khoa" rel="khoa" class="form-control" value="{{ old('khoa') }}">
						<option value="unselect" selected="">Lựa chọn khoa</option>
						@foreach($khoalist as $khoa)
						<option value="{{$khoa->id_khoa}}">{{$khoa->ten_khoa}}</option>
						@endforeach
					</select>
					@if($errors->has('khoa'))
					<div class="alert alert-danger">{{$errors->first('khoa')}}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Ngành</label>

				<div class="col-md-10 fix-col">
					<select name="nganh" rel="nganh" class="form-control" value="{{ old('nganh') }}">
					</select>
					@if($errors->has('nganh'))
					<div class="alert alert-danger">{{$errors->first('nganh')}}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Giáo viên</label>

				<div class="col-md-10 fix-col">
					<select required name="thanhvien_hoidong" rel="giaovien" class="form-control" value="{{ old('thanhvien_hoidong') }}">
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Kỳ</label>

				<div class="col-md-10 fix-col">
					<select name="ky" class="form-control" value="{{ old('ky') }}">
						<option value="unselect" selected="">Lựa chọn kỳ</option>
						<option value="1">Kỳ I</option>
						<option value="2">Kỳ II</option>
						<option value="3">Kỳ III</option>
					</select>									
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Nhóm</label>

				<div class="col-md-10 fix-col">
					<select name="nhom" class="form-control" value="{{ old('nhom') }}">
						<option value="unselect" selected="">Lựa chọn nhóm</option>
						<option value="1">Nhóm 1</option>
						<option value="2">Nhóm 2</option>
						<option value="3">Nhóm 3</option>
					</select>									
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Năm</label>

				<div class="col-md-10 fix-col">
					<select name="nam_hoidong" class="form-control" value="{{ old('nam') }}">
						<option value="unselect" selected="">Lựa chọn năm</option>
						@foreach($namlist as $nam)
						<option value="{{$nam->id_nam}}">{{$nam->nam}}</option>
						@endforeach
					</select>								
				</div>
			</div>						

			<button type="submit" class="btn btn-success">Thêm</button>
			<button type="reset" class="btn btn-primary">Làm mới</button>
			<a href="{{ asset('qlhoidong/dshoidong')}}" class="btn btn-secondary pull-right">Hủy</a>
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


			$('[rel="nganh"]').change(function(){
				var id2 = $(this).val();
				$.ajax({
					url: "{{ url('/ajax/giaovien') }}",
					data: { idnganh: id2 }
				}).done(function(data){
					$('[rel="giaovien"]').html(data)
				});

			});
		});
	});

</script>
@endsection