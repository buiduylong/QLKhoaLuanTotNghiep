@extends('layout/master')
@section('title', 'Sửa khoa')
@section('content')

<div class="row">
	<h4 class="fix-title">
		Quản lý khoa
		<small>Sửa khoa</small>
	</h4>
</div>

<section class="content">
	<div class="card">
		<div class="card-body">
			<div class="row">                
				<h4 class="card-title fix-title">Sửa khoa</h4>
			</div>

			<form method="post">
				@csrf
				<div class="form-group">
					<label class="col-md-2 fix-label">Tên khoa</label>

					<div class="col-md-10 fix-col">
						<input type="text" class="form-control" name="ten_khoa" value="{{$khoalist->ten_khoa}}">
						@if($errors->has('ten_khoa'))
						<div class="alert alert-danger">{{$errors->first('ten_khoa')}}</div>
						@endif
					</div>
				</div>
				<button type="submit" class="btn btn-success">Sửa</button>
				<a href="{{ asset('qlkhoa/qlkhoa') }}" class="btn btn-secondary pull-right">Hủy</a>	
			</form>							
		</div>
	</div>
</section>
@endsection