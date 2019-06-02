@extends('layout/master')
@section('title', 'Sửa năm')
@section('content')
<div class="row">
	<h4 class="fix-title">
		Quản lý năm
		<small>Sửa năm</small>
	</h4>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">                
			<h4 class="card-title fix-title">Sửa năm</h4>
		</div>

		<form method="post">
			@csrf
			<div class="form-group">
				<label class="col-md-2 fix-label">Năm</label>

				<div class="col-md-10 fix-col">
					<input type="text" class="form-control" name="nam" value="{{$nam->nam}}">
					@if($errors->has('nam'))
					<div class="alert alert-danger">{{$errors->first('nam')}}</div>
					@endif
				</div>
			</div>
			<button type="submit" name="submit" class="btn btn-success">Sửa</button>
			<a href="{{ asset('qlnam/qlnam') }}" class="btn btn-secondary pull-right">Hủy</a>
		</form>								
	</div>
</div>
@endsection