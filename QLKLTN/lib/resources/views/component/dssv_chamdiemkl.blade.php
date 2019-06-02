<div id="check">
	<div class="card">
		<div class="card-body">
			<h4>Chọn một sinh viên đã bảo vệ khóa luận tốt nghiệp để in bản chấm điểm:</h4>
			
			@if(isset($row12))
			@foreach($thanhvien12 as $tv)
					@if($tv->diem1 != null && $tv->diem2 != null && $tv->diem3 != null && $tv->diem4 != null)
					<p><input type="radio" name="sinhvien" value="{{ $tv->thanhvien->id }}"> {{$tv->thanhvien->ma_thanhvien}} - {{$tv->thanhvien->ten_thanhvien}}</p>
					@endif
				
			@endforeach

			@elseif(isset($row1))
			@foreach($thanhvien1 as $tv)
			@if($tv->diem1 != null && $tv->diem2 != null && $tv->diem3 != null && $tv->diem4 != null)
			<p><input type="radio" name="sinhvien" value="{{ $tv->thanhvien->id }}"> {{$tv->thanhvien->ma_thanhvien}} - {{$tv->thanhvien->ten_thanhvien}}</p>
			@endif
			@endforeach
			@endif

			<button type="submit" rel="submit" class="btn btn-primary">Xác nhận</button>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('[rel="submit"]').click(function(){
			var checked = $('#check input:checked');
			var obj = {sinhvien: []}
			checked.each(function(index, check){
				obj.sinhvien.push($(check).val())
			})
			$.ajax({
				url: "{{ url('/ajax/bienban_chamdiemkl') }}",
				data: obj
			}).done(function(data){
				$('[rel="indulieu"]').html(data);
			});
		});
	});
</script>