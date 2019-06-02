@extends('layout/master')
@section('title', 'Import thành viên')
@section('content')
<div class="row">
	<h4 class="fix-title">Quản lý thành viên
		<small>Import thành viên</small>
	</h4>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">
			<h4 class="fix-title">Import thành viên</h4>
		</div>
		@if(session('thongbao3'))
		<div class="alert alert-danger">{{session('thongbao3')}}</div>
		@endif
		<form method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label class="col-md-2 fix-label">Chọn file</label>

				<div class="col-md-10 fix-col">
					<input class="btn" type="file" name="import" required="">
					@if(session('ma_thanhvien'))
					<div class="alert alert-danger">{{session('ma_thanhvien')}}</div>
					@endif
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label"></label>

				<div class="col-md-10 fix-col">								
					<small style="font-style: italic;">*File danh sách mẫu</small>
					<a href="{{ asset('lib/storage/app/report/MauImport.xlsx') }}"><span style="font-size: 20px;" class="fa fa-cloud-download"></span></a>
				</div>
			</div>

			{{-- <div class="form-group">
				<label class="col-md-2 fix-label">Khoa</label>

				<div class="col-md-10 fix-col">
					<select required name="khoa_thanhvien" rel="khoa" class="form-control">
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
					<select required name="nganh_thanhvien" rel="nganh" class="form-control">
					</select>
				</div>
			</div> --}}

			<button type="submit" class="btn btn-success">Thêm</button>
			<button type="reset" class="btn btn-primary">Làm lại</button>
			<a href="{{asset('thanhvien/dsthanhvien')}}" class="btn btn-secondary pull-right">Hủy</a>      
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
@endsection