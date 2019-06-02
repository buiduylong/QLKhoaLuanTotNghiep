@extends('layout/master')
@section('title', 'Khóa luận cá nhân')
@section('content')
<div class="row">
	<h4 class="fix-title">
		Thông tin khóa luận cá nhân
		<small>Khóa luận của bạn</small>
	</h4>
</div>

<div class="card">
	<div class="card-body">
		<h4 class="fix-title">Khóa luận của bạn</h4>
		<div class="table-responsive">
			<table class="table table-bordered">
				
				@foreach($kl as $kls)
				<div class="col-md-6">

					<h5 align="center">{{$kls->de_tai}}</h5>
					<ul style="list-style-type: none;">
						<li><a>Phòng: <span class="pull-right badge badge-danger">{{$kls->phong}}</span></a></li>
						<li><a>Thời gian: <span class="pull-right badge badge-warning">{{$kls->thoi_gian}}</span></a></li>
						<li><a>Năm: <span class="pull-right badge badge-info">{{$kls->nam->nam}}</span></a></li>
						<li>@if($kls->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$kls->bao_cao) }}">Báo cáo: <span class="pull-right fa fa-download"></span></a>
							@else <a onclick="return alert('Không có file báo cáo')">Báo cáo: <span class="pull-right fa fa-download" style=""></span></a>
							@endif
						</li>
						<li><a>Điểm: <span class="pull-right badge badge-danger" data-id="{{$kls->id_khoaluan}}" rel="diemkhoaluan">{{$kls->diem1*($kls->ts1/100)+$kls->diem2*($kls->ts2/100)+$kls->diem3*($kls->ts3/100)+$kls->diem4*($kls->ts4/100)}}</span></a></li>
					</ul>
				</div>
				@endforeach
				<div class="modal fade" id="myModal" role="dialog">

				</div>
				
			</table>
		</div>
	</div>
</div>

@endsection
@section('script')
<script type="text/javascript">
	$(document).ready(function(){

		$('[rel="diemkhoaluan"]').click(function(){

			let id = $(this).data('id');

			$.ajax({
				url: "{{ url('/ajax/capnhatdiem') }}",
				data: { id: id }
			}).done(function(data){
				console.log(data)
				$('#myModal').html(data);
				$('#myModal').modal('show');
			});

		});
	});
</script>
@stop