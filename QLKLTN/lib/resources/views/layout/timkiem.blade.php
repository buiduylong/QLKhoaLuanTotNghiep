@extends('layout/master')
@section('title', 'Tìm kiếm KLTN')
@section('content')
<div class="row">
	<h4 class="fix-title">
		Tìm kiếm
		<small>Danh sách tìm kiếm</small>
	</h4>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">                
			<h4 class="card-title fix-title">Khóa luận được tìm kiếm theo từ khóa: <b>{{$keyword}}</b></h4>
		</div>
		<div class="table table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Mã sinh viên</th>
						<th>Tên sinh viên</th>
						<th>Đề tài</th>
						<th>Giáo viên hướng dẫn</th>
						<th>Thời gian bảo vệ</th>
						<th>Phòng</th>
						<th>Điểm</th>
						<th>Cập nhật điểm</th>
					</tr>
				</thead>
				<tbody>
					@foreach($items as $item)
					<tr role="row" class="odd">
						<td>{{$item->ma_thanhvien}}</td>
						<td>{{$item->ten_thanhvien}}</td>
						<td>{{$item->de_tai}}</td>
						<td>
							@foreach($tv as $tvs) 
							@if($tvs->id == $item->giao_vien) {{$tvs->ten_thanhvien}} @endif 
							@endforeach
						</td>
						<td>{{$item->thoi_gian}}</td>
						<td>{{$item->phong}}</td>
						<td>{{$item->diem1*($item->ts1/100)+$item->diem2*($item->ts2/100)+$item->diem3*($item->ts3/100)+$item->diem4*($item->ts4/100)}}</td>
						<td><a><span class="mdi mdi-refresh" data-id="{{$item->id_khoaluan}}" rel="timkiem"></span></a></td>
					</tr>
					@endforeach
					
					
				</tbody>


			</table>
		</div>
	</div>
</div>
<div class="modal fade" id="myModal" role="dialog">

</div>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function(){

		$('[rel="timkiem"]').click(function(){

			let id = $(this).data('id');

			$.ajax({
				url: "{{ url('/ajax/timkiem') }}",
				data: { id: id }
			}).done(function(data){
				console.log(data)
				$('#myModal').html(data);
				$('#myModal').modal('show');
			});

		});
	});
</script>
@endsection