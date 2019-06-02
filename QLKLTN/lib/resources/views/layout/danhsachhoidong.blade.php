@extends('layout/master')
@section('title', 'Danh sách hội đồng')
@section('content')
<div class="row">
	<h4 class="fix-title">Quản lý hội đồng
		<small>Danh sách hội dồng chấm khóa luận</small>
	</h4>
</div>

<div class="card">
	<div class="card-body">
		<div class="row">
			<h4 class="fix-title">Danh sách hội dồng chấm khóa luận</h4>
		</div>

		@if(session('thongbao'))
		<div class="alert alert-success">{{session('thongbao')}}</div>
		@endif

		<form  method="get">
			@csrf
			<div class="table-responsive">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Tên hội đồng</th>
							<th>Kỳ</th>
							<th>Nhóm</th>
							<th>Năm</th>
							<th>Chi tiết</th>
							<th>Sửa</th>
							<th>Xóa</th>
						</tr>
					</thead>
					<tbody>
						@foreach($dshd as $dshoidong)
						<tr role="row">
							<td>{{$dshoidong->ten_hoidong}}</td>
							<td>
								@if($dshoidong->ky == 1) Kỳ I 
								@elseif($dshoidong->ky == 2) Kỳ II 
								@else Kỳ III 
								@endif
							</td>
							<td> 
								@if($dshoidong->nhom == 1) Nhóm 1 @endif 
								@if($dshoidong->nhom == 2) Nhóm 2 @endif 
								@if($dshoidong->nhom == 3) Nhóm 3 @endif
							</td>
							<td>{{$dshoidong->nam}}</td>
							<td>
								<a><span class="fa fa-search" data-id="{{$dshoidong->id_thietlap}}" rel="chitiet_hoidong"></span></a>
							</td>
							<td><a href="{{ asset('qlhoidong/sua_hoidong/'.$dshoidong->id_thietlap) }}"><span class="fa fa-pencil"></span></a></td>
							<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_hoidong/'.$dshoidong->id_thietlap)}}"><span class="fa fa-times"></span></a></td>
						</tr>
						@endforeach
					</tbody>
					<div class="modal fade" id="myModal" role="dialog">
					</div>
				</table>
			</div>
		</form>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('[rel="chitiet_hoidong"]').click(function(){

			let id = $(this).data('id');

			$.ajax({
				url: "{{ url('/ajax/chitiet_hoidong') }}",
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
