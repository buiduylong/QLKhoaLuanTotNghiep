@extends('layout/master')
@section('title', 'Thêm đề tài')
@section('content')
<div class="row">
	<h4 class="fix-title">Quản lý đề tài
		<small>Thêm đề tài khóa luận tốt nghiệp</small>
	</h4>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">
			<h4 class="fix-title">Thêm đề tài khóa luận tốt nghiệp</h4>
		</div>
		@if(session('thongbao2'))
        <div class="alert alert-danger">{{session('thongbao2')}}</div>
    	@endif
		<form method="post">
			@csrf
			<div class="form-group">
				<label class="col-md-2 fix-label">Đề tài khóa luận</label>

				<div class="col-md-10 fix-col">
					<input type="text" class="form-control" name="ten_detai" placeholder="Điền tên đề tài" value="{{ old('ten_detai') }}">
					@if($errors->has('ten_detai'))
					<div class="alert alert-danger">{{$errors->first('ten_detai')}}</div>
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
					<select name="nam_detai" class="form-control">
						<option value="unselect" selected="">Lựa chọn năm</option>
						@foreach($nam as $namm)
						<option value="{{$namm->id_nam}}">{{$namm->nam}}</option>
						@endforeach
					</select>									
				</div>
			</div>						

			<button type="submit" class="btn btn-success">Thêm</button>
			<a href="{{ asset('detai/dsdetai') }}" class="btn btn-secondary pull-right">Hủy</a>     
		</form>    
	</div>							
</div>
@endsection