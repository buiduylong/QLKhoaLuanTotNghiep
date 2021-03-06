@extends('layout/master')
@section('title', 'Xác nhận bảo vệ KLTN')
@section('content')

<div class="row">
	<h4 class="fix-title">
		Quản lý khóa luận tốt nghiệp
		<small>Xác nhận bảo vệ khóa luận tốt nghiệp</small>
	</h4>
</div>


<div class="row" id="select">
	<div class="col-md-2">
		<div class="form-group">
			<select name="khoa" rel="khoa" class="form-control">
				<option value="0" selected="">Lựa chọn khoa</option>
				@foreach($khoalist as $khoa)
				<option value="{{$khoa->id_khoa}}">{{$khoa->ten_khoa}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<select name="nganh" rel="nganh" class="form-control">
			</select>
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<select name="ky" class="form-control">
				<option value="0" selected="">Lựa chọn kỳ</option>
				<option value="1">Kỳ I</option>
				<option value="2">Kỳ II</option>
				<option value="3">Kỳ III</option>
			</select>
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<select name="nhom" class="form-control">
				<option value="0" selected="">Lựa chọn nhóm</option>
				<option value="1">Nhóm 1</option>
				<option value="2">Nhóm 2</option>
				<option value="3">Nhóm 3</option>
			</select>
		</div>
	</div>
	<div class="col-md-2">
		<div class="form-group">
			<select name="nam_khoaluan" class="form-control">
				<option value="0" selected="">Lựa chọn năm</option>
				@foreach($namlist as $nam)
				<option value="{{$nam->id_nam}}">{{$nam->nam}}</option>
				@endforeach
			</select>
		</div>
	</div>
	<div class="col-md-2">
		<button type="submit" rel="submit" class="btn btn-primary">Lọc</button>
	</div>
</div>

@if(session('thongbao'))
	<div class="alert alert-success">{{session('thongbao')}}</div>
@endif

<div class="card">
	<div class="card-body">
		<div class="row">                
			<h4 class="card-title fix-title">Các khóa luận tốt nghiệp đã đăng ký</h4>
		</div>
		<div class="table-responsive" rel="indulieu">
			<img width="100%" height="100%" src="{{asset('lib/storage/app/avatar/anh-cho.jpg')}}">
		</div>                  
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){

		$('[rel="submit"]').click(function(){

			var select = $('#select select');
			var obj = {};
			for(var i = 0; i < select.length; i++){
				obj[$(select[i]).attr('name')] = $(select[i]).val();
			}

			$.ajax({
				url: "{{ url('/ajax/xacnhankl') }}",
				data: obj
			}).done(function(data){
				$('[rel="indulieu"]').html(data);
			});

		});

		$('[rel="khoa"]').change(function(){
			var id = $(this).val();
			$.ajax({
				url: "{{ url('/ajax/nganh') }}",
				data: { idkhoa: id }
			}).done(function(data){
				$('[rel="nganh"]').html(data)
				console.log(data);
			});

		});

	});
</script>
@endsection
