@extends('layout/master')
@section('title', 'Sửa đề tài')
@section('content')
<div class="row">
	<h4 class="fix-title">Quản lý đề tài
		<small>Sửa đề tài khóa luận tốt nghiệp</small>
	</h4>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">
			<h4 class="fix-title">Sửa đề tài khóa luận tốt nghiệp</h4>
		</div>
		<form method="post">
			@csrf
			<div class="form-group">
				<label class="col-md-2 fix-label">Đề tài khóa luận</label>

				<div class="col-md-10 fix-col">
					<input type="text" class="form-control" name="ten_detai" value="{{$detai->ten_detai}}">
					@if($errors->has('ten_detai'))
						<div class="alert alert-danger">{{$errors->first('ten_detai')}}</div>
						@endif
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Kỳ</label>

				<div class="col-md-10 fix-col">
					<select class="form-control" name="ky">
						<option value="{{$detai->ky}}">
							@if($detai->ky==1) Kỳ I
							@elseif($detai->ky==2) Kỳ II 
							@else Kỳ III 
							@endif
						</option>
						<option value="1">Kỳ I</option>
						<option value="2">Kỳ II</option>
						<option value="3">Kỳ III</option>
					</select>									
				</div>
			</div>

			<div class="form-group">
				<label class="col-md-2 fix-label">Nhóm</label>

				<div class="col-md-10 fix-col">
					<select class="form-control" name="nhom">
						<option value="{{$detai->nhom}}">
							@if($detai->nhom==1) Nhóm 1
							@elseif($detai->nhom==2) Nhóm 2
							@else($detai->nhom==3) Nhóm 3 
							@endif
						</option>
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
						@foreach($namlist as $nam)
						<option value="{{$nam->id_nam}}" @if($detai->nam_detai == $nam->id_nam) selected @endif>{{$nam->nam}}
						</option>
						@endforeach
					</select>									
				</div>
			</div>						

			<button type="submit" class="btn btn-success">Sửa</button>
			<a href="{{ asset('detai/dsdetai') }}" class="btn btn-secondary pull-right">Hủy</a>   
		</form>      
	</div>							
</div>
@endsection