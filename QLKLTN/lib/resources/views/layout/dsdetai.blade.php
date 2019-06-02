@extends('layout/master')
@section('title', 'Danh sách đề tài')
@section('content')

<div class="row">
	<h4 class="fix-title">
		Quản lý đề tài
		<small>Danh sách đề tài</small>
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
			<select name="nam_detai" class="form-control">
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

<div class="card">
	<div class="card-body">
		<div class="row">                
			<h4 class="card-title fix-title">Các đề tài được giáo viên hướng dẫn gợi ý</h4>
		</div>
		@if(session('thongbao'))
		<div class="alert alert-success">{{session('thongbao')}}</div>
		@endif
		<div class="table-responsive" rel="indulieu">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Đề tài</th>
						<th>Khoa</th>
						<th>Ngành</th>
						<th>Năm</th>
						<th>Giáo viên hướng dẫn</th>
						<th>Đã được chọn</th>
						@if(Auth::user()->quyen == 2)
						<th>Sửa</th>
						<th>Xóa</th>
						@endif
					</tr>
				</thead>
				<tbody>
					<form method="get">
						@foreach($detailist as $detai)
						<tr>
							<td>{{$detai->ten_detai}}</td>
							<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
							<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
							<td>{{$detai->nam->nam}}</td>
							<td>{{$detai->thanhvien->ten_thanhvien}}</td>
							<td>
								@php $a=0; @endphp
								@foreach($kllist as $kl)
								@if($kl->de_tai == $detai->ten_detai)
								@php $a=$a+1; @endphp
								@endif
								@endforeach
								{{$a}} lần
							</td>
							@if(Auth::user()->quyen == 2)
							<td>
								@if($detai->thanhvien->id == Auth::user()->id)
								<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
								@else
								<span></span>
								@endif
							</td>
							<td>
								@if($detai->thanhvien->id == Auth::user()->id)
								<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
								@else
								<span></span>
								@endif
							</td>
							@endif
						</tr>
						@endforeach
					</form>                
				</tbody>
			</table>
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
				url: "{{ url('/ajax/locdetai') }}",
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
