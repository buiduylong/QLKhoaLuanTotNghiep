@extends('layout/master')
@section('title', 'Đăng ký làm KLTN')
@section('content')
<div class="row">
	<h4 class="fix-title">Quản lý khóa luận tốt nghiệp
		<small>Đăng ký làm khóa luận tốt nghiệp</small>
	</h4>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">
			<h4 class="fix-title">Đăng ký làm khóa luận tốt nghiệp</h4>
		</div>
		@if(session('thongbao'))
		<div class="alert alert-success">{{session('thongbao')}}</div>
		@endif
		@if(session('thongbao2'))
		<div class="alert alert-danger">{{session('thongbao2')}}</div>
		@endif
		@if(session('thongbao3'))
		<div class="alert alert-danger">{{session('thongbao3')}}</div>
		@endif
		<form method="post">
			@csrf
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
					<select name="nam_khoaluan" class="form-control">
						<option value="unselect" selected="">Lựa chọn năm</option>
						@foreach($khoaluan as $kl)
						<option value="{{$kl->id_nam}}">{{$kl->nam}}</option>
						@endforeach
					</select>
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Đề tài khóa luận</label>

				<div class="col-md-10 fix-col">
					<input type="text" class="form-control" name="de_tai" placeholder="Điền tên đề tài hoặc chọn đề tài có sẵn">
					<select class="form-control" data-live-search="true" name="chon_detai">
						<option value="unselect" selected="">Lựa chọn đề tài</option>
						@foreach($detailist as $detai)
						<option value="{{$detai->ten_detai}}">{{$detai->ten_detai}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<p><i>*Liên lạc với Thư ký nếu muốn hủy đăng ký làm khóa luận tốt nghiệp</i></p>										
			<button type="submit" class="btn btn-success">Đăng ký</button>
			<button type="reset" class="btn btn-primary">Làm lại</button>
			<a href="{{ asset('khoaluan/dskhoaluan') }}" class="btn btn-secondary pull-right">Hủy</a>   
		</form>      
	</div>							
</div>
@endsection