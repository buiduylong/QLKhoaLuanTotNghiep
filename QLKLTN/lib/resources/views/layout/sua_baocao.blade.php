@extends('layout/master')
@section('title', 'Lưu trữ báo cáo')
@section('content')

<div class="row">
	<h4 class="fix-title">
		Quản lý báo cáo
		<small>Lưu trữ báo cáo</small>
	</h4>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">
			<h4 class="card-title fix-title">Lưu trữ báo cáo</h4>
		</div>

		<form method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label class="col-md-2 fix-label">File báo cáo</label>

				<div class="col-md-10 fix-col">
					<input type="file" class="btn" name="bao_cao">
				</div>
			</div>
			<button type="submit" class="btn btn-success">Lưu</button>
			<a href="{{ asset('qlbaocao/qlbaocao') }}" class="btn btn-secondary pull-right">Hủy</a>	
		</form>
	</div>
</div>

@endsection