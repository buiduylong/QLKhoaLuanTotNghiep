@extends('layout/master')
@section('title', 'Sửa bộ môn')
@section('content')

<div class="row">
	<h4 class="fix-title">
		Quản lý bộ môn
		<small>Sửa bộ môn</small>
	</h4>
</div>

<section class="content">
	<div class="card">
		<div class="card-body">
			<div class="row">                
				<h4 class="card-title fix-title">Sửa bộ môn</h4>
			</div>

			<form method="post">
				@csrf
				<div class="form-group">
					<label class="col-md-2 fix-label">Tên bộ môn</label>

					<div class="col-md-10 fix-col">
						<input type="text" class="form-control" name="ten_bomon" value="{{$bomonlist->ten_bomon}}">
						@if($errors->has('ten_bomon'))
						<div class="alert alert-danger">{{$errors->first('ten_bomon')}}</div>
						@endif
					</div>
				</div>
				<button type="submit" class="btn btn-success">Sửa</button>
				<a href="{{ asset('qlbomon') }}" class="btn btn-secondary pull-right">Hủy</a>	
			</form>							
		</div>
	</div>
</section>
@endsection