@extends('layout/master')
@section('title', 'Biên bản đánh giá KLTN')
@section('content')
<h4>CHỌN CÁC THÔNG TIN CẦN THIẾT ĐỂ TẠO BẢN ĐÁNH GIÁ KHÓA LUẬN TỐT NGHIỆP</h4>
<div class="row" id="select">
	<div class="col-md-2">
		<div class="form-group">
			<select class="form-control" name="khoa" rel="khoa">
				<option value="unselect" selected="">Lựa chọn khoa</option>
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
		<button type="submit" rel="submit" class="btn btn-primary">Chọn</button>
	</div>
</div>
<div rel="indulieu">
	
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
				url: "{{ url('/ajax/dssv_danhgia') }}",
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