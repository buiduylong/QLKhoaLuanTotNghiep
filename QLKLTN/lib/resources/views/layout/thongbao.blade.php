@extends('layout/master')
@section('title', 'Quản lý thông báo')
@section('content')
<div class="card">
	<div class="card-body">
		@if(session('thongbao'))
		<div class="alert alert-success">{{ session('thongbao') }}</div>
		@endif
		<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>Từ sinh viên</th>
						<th>Nội dung</th>
						<th>Trạng thái</th>
						<th>Xóa</th>
					</tr>
				</thead>
				<tbody>
					<form method="post" enctype="multipart/form-data" id="sub">
						@csrf
						
						@foreach($listthanhvien as $thongbao)
							@if($thongbao->id_nhan == Auth::user()->id)
							<tr role="row" class="odd">
								<td>{{$thongbao->ten_thanhvien}}</td>
								<td>{{ $thongbao->noi_dung }}</td>
								<td>
									@if($thongbao->trangthai == 1)<span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $thongbao->id_thongbao }}" rel="trangthai"></span> 
									@else <span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $thongbao->id_thongbao }}" rel="trangthai"></span>
									@endif
								</td>
								<td>
									<a href="{{asset('thongbao/xoa_thongbao/'.$thongbao->id_thongbao)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
								</td>
							</tr>
							@endif
						@endforeach
						
					</form>
				</tbody>
				<div class="modal fade" id="myModal" role="dialog">
				</div>
			</table>
		</div>
	</div>
	<div>
		
	</div>
</div>
@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function(){

		$('[rel="trangthai"]').click(function(){

			let id = $(this).data('id');

			$.ajax({
				url: "{{ url('/ajax/trangthai') }}",
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

