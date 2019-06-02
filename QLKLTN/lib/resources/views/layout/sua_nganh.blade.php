@extends('layout/master')
@section('title', 'Sửa ngành')
@section('content')
<div class="row">
	<h4 class="fix-title">
		Quản lý ngành
		<small>Sửa ngành</small>
	</h4>
</div>

<div class="row">
	<div class="box">
		<div class="form-control">
			<h3>Sửa ngành</h3>                  
			<form method="post">
				@csrf
				<div class="form-group">
					<label class="col-md-2 fix-label">Khoa</label>
					<div class="col-md-10 fix-col">
						<select name="khoa_nganh" class="form-control">
							@foreach($khoalist as $khoa)
							<option value="{{$khoa->id_khoa}}" @if($nganh->khoa_nganh == $khoa->id_khoa) selected @endif>{{$khoa->ten_khoa}}</option>
							@endforeach
						</select>
					</div>
				</div>	
				<div class="form-group">
					<label class="col-md-2 fix-label">Tên ngành</label>
					<div class="col-md-10 fix-col">
						<input type="text" class="form-control" name="ten_nganh" value="{{$nganh->ten_nganh}}">
						@if($errors->has('ten_nganh'))
						<div class="alert alert-danger">{{$errors->first('ten_nganh')}}</div>
						@endif
					</div>
				</div>
				
				<button type="submit" name="submit" class="btn btn-primary">Sửa</button>
				<a href="{{ asset('qlnganh/qlnganh') }}" class="btn btn-secondary pull-right">Hủy</a>	
			</form>
		</div>
	</div>
</div>

@endsection