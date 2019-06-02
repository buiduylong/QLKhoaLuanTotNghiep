<div id="check">
	<div class="card">
		<div class="card-body">
			<h4>Chọn sinh viên đã bảo vệ khóa luận tốt nghiệp để in bản đánh giá:</h4>
			
			@if(isset($row12))
			@foreach($thanhvien12 as $tv)
				
				@if($tv->diem1 != null && $tv->diem2 != null && $tv->diem3 != null && $tv->diem4 != null)
					<p><input type="radio" name="sinhvien" value="{{ $tv->thanhvien->id }}">{{$tv->thanhvien->ma_thanhvien}} - {{$tv->thanhvien->ten_thanhvien}}</p>

				@endif

			@endforeach

			@elseif(isset($row1))
			@foreach($thanhvien1 as $tv)
				@if($tv->diem1 != null && $tv->diem2 != null && $tv->diem3 != null && $tv->diem4 != null)
					<p><input type="radio" name="sinhvien" value="{{ $tv->thanhvien->id }}">{{$tv->thanhvien->ma_thanhvien}} - {{$tv->thanhvien->ten_thanhvien}}</p>

				@endif
			@endforeach
			@endif

			<div class="row">
				<div class="col-md-4">
					<p class="fix-p7"><b>Các phần được đánh giá:</b></p>
				</div>										
			</div>

			<div class="row">
				<div class="col-md-4">
					<p class="fix-p7">1. Điểm tài liệu (Cho thang diểm 10)</p>
				</div>

				<div class="col-md-4 fix-col">
					<input type="text" id="diem1" name="diem1" class="form-control"> 
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<p class="fix-p7">2. Điểm bảo vệ (Cho thang diểm 10)</p>
				</div>

				<div class="col-md-4 fix-col">
					<input type="text" id="diem2" name="diem2" class="form-control"> 
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<p class="fix-p7">3. Điểm chương trình (Cho thang diểm 10)</p>
				</div>

				<div class="col-md-4 fix-col">
					<input type="text" id="diem3" name="diem3" class="form-control"> 
				</div>
			</div>

			<p class="fix-p7"><i>Phần dành cho thư ký:  Hệ số điểm của tài liệu là 4, hệ số điểm bảo vệ là 3, hệ số điểm chương trình là 3</i></p>
			<button type="submit" rel="submit" class="btn btn-primary">Xác nhận</button>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		
		$('[rel="submit"]').click(function(){
			var checked = $('#check input:checked');
			var obj = {sinhvien: [],diem : []}
			checked.each(function(index, check){
				obj.sinhvien.push($(check).val())
			})
			obj.diem.push($('#diem1').val())
			obj.diem.push($('#diem2').val())
			obj.diem.push($('#diem3').val())
			$.ajax({
				url: "{{ url('/ajax/bienban_danhgia') }}",
				data: obj
			}).done(function(data){
				$('[rel="indulieu"]').html(data);
			});
		});
	});
</script>