@extends('layout/master')
@section('title', 'Thiết lập hội đồng')
@section('content')
<div class="row">
	<h4 class="fix-title">Quản lý hội đồng
		<small>Thiết lập hội dồng chấm khóa luận</small>
	</h4>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">
			<h4 class="fix-title">Thiết lập hội dồng chấm khóa luận</h4>
		</div>

		@if(session('thongbao4'))
		<div class="alert alert-danger">{{session('thongbao4')}}</div>
		@endif

		@if(session('thongbao5'))
		<div class="alert alert-danger">{{session('thongbao5')}}</div>
		@endif

		<form method="post">
			@csrf
			<div class="form-group">
				<label class="col-md-2 fix-label">Tên hội đồng</label>

				<div class="col-md-10 fix-col">
					<input type="text" name="ten_hoidong" class="form-control" placeholder="Nhập tên hội đồng" value="{{ old('ten_hoidong') }}">
					@if($errors->has('ten_hoidong'))
					<div class="alert alert-danger">{{$errors->first('ten_hoidong')}}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Kỳ</label>

				<div class="col-md-10 fix-col">
					<select name="ky" class="form-control">
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
					<select name="nhom" class="form-control">
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
					<select name="nam_thietlap" class="form-control">
						<option value="unselect" selected="">Lựa chọn năm</option>
						@foreach($namlist as $nam)
						<option value="{{$nam->id_nam}}">{{$nam->nam}}</option>
						@endforeach
					</select>									
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Khoa</label>

				<div class="col-md-10 fix-col">
					<select name="khoatl" class="form-control" rel="khoa">
						<option value="unselect" selected="">Lựa chọn khoa</option>
						@foreach($khoalist as $khoa)
						<option value="{{$khoa->id_khoa}}">{{$khoa->ten_khoa}}</option>
						@endforeach
					</select>								
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Ngành</label>

				<div class="col-md-10 fix-col">
					<select name="nganhtl" class="form-control" rel="nganh">
					</select>									
				</div>
			</div>

			<div class="form-group">
				<label>Lựa chọn giáo viên để thiết lập hội đồng:</label>
			</div>
			
			<div class="form-group">
				<label class="col-md-2 fix-label">Chủ tịch</label>

				<div class="col-md-10 fix-col">
					<select required="" name="hd1" class="form-control" rel="giaovien">
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Giáo viên hướng dẫn</label>

				<div class="col-md-10 fix-col">
					<select required="" name="hd2" class="form-control" rel="giaovien">
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Phản biện</label>

				<div class="col-md-10 fix-col">
					<select required="" name="hd3" class="form-control" rel="giaovien">
					</select>	
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Thư ký</label>

				<div class="col-md-10 fix-col">
					<select required="" name="hd4" class="form-control" rel="giaovien">
					</select>
				</div>
			</div>


			<button type="submit" class="btn btn-success">Thiết lập</button>
			<button type="reset" name="reset" class="btn btn-primary">Làm mới</button>
			<a href="{{ asset('qlhoidong/danhsachhoidong')}}" class="btn btn-secondary pull-right">Hủy</a>
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