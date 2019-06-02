@extends('layout/master')
@section('title', 'Thống kê dạng bảng')
@section('content')
<div class="row">
	<div class="col-md-6">
		<h4 class="fix-title">
			Thống kê
			<small>Thống kê theo dạng bảng</small>
		</h4>
	</div>
	<div class="col-md-6">
		<div class="row" id="select">
			<div class="col-md-4">
				<div class="form-group">
					<select name="nam_khoaluan" class="form-control">
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
	</div>
</div>

<div class="card">
	<div class="card-body">
		<div class="table-responsive" rel="indulieu">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>STT</th>
						<th>Ngành</th>
						<th>Số lượng đăng ký</th>
						<th>Số lượng hoàn thành</th>
						<th>Số lượng hoàn thành đúng hạn</th>
						<th>Tỷ lệ hoàn thành</th>
						<th>Tỷ lệ hoàn thành đúng hạn</th>
					</tr>
				</thead>
				<tbody>
					@php $a = 1; @endphp
					@foreach($nganhlist as $nganh)
					<tr>
						@php $SLHoanThanh=0; $SLHoanThanhDungHan = 0; @endphp
						<td>{{ $a }}</td>
						<td>{{ $nganh->ten_nganh }}</td>
						<td>{{ $nganh->khoaluan->count() }} Sinh Viên</td>
						
						@foreach($nganh->khoaluan as $row)
							@if($row->diem1 != null && $row->diem2 != null && $row->diem3 != null && $row->diem4 != null)
								@php $SLHoanThanh++; @endphp
							@endif
						@endforeach
						<td>{{$SLHoanThanh}} Sinh Viên</td>

						@foreach($nganh->khoaluan as $row)
							@php
								$date1 = new DateTime($row->created_at);
								$date2 = new DateTime($row->updated_at);
								$interval = $date1->diff($date2);
							@endphp
							@if($row->diem1 != null && $row->diem2 != null && $row->diem3 != null && $row->diem4 != null)
								@if($interval->m < 6)
									@php $SLHoanThanhDungHan++; @endphp
								@endif
							@endif
						@endforeach
						<td>{{$SLHoanThanhDungHan}} Sinh Viên</td>
						
						<td>
							@if($SLHoanThanh==0)
							0% 
							@else
							{{($SLHoanThanh/$nganh->khoaluan->count())*100}}%
							@endif
						</td>

						<td>
							@if($SLHoanThanhDungHan==0)
							0% 
							@else
							{{($SLHoanThanhDungHan/$nganh->khoaluan->count())*100}}%
							@endif
						</td>
					</tr>
					@php $a++; @endphp
					@endforeach
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
				url: "{{ url('/ajax/thongketyle') }}",
				data: obj
			}).done(function(data){
				$('[rel="indulieu"]').html(data);
			});

		});

	});
</script>
@endsection