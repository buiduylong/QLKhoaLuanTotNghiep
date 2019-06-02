<div id="check">
	<div class="card">
		<div class="card-body">
			<h4>Chọn sinh viên đã bảo vệ khóa luận tốt nghiệp để in bảng điểm</h4>
			
			@if(isset($row12))
				@foreach($thanhvien12 as $tv)
					@if($tv->diem1 != null && $tv->diem2 != null && $tv->diem3 != null && $tv->diem4 != null)
					<p><input type="checkbox" name="sinhvien" value="{{ $tv->thanhvien->id }}">{{$tv->thanhvien->ma_thanhvien}} - {{$tv->thanhvien->ten_thanhvien}}</p>
					@endif
				@endforeach

			@elseif(isset($row1))
				@foreach($thanhvien1 as $tv)
					@if($tv->diem1 != null && $tv->diem2 != null && $tv->diem3 != null && $tv->diem4 != null)
					<p><input type="checkbox" name="sinhvien" value="{{ $tv->thanhvien->id }}">{{$tv->thanhvien->ma_thanhvien}} - {{$tv->thanhvien->ten_thanhvien}}</p>
					@endif
				@endforeach
			@endif
			
			<h4>Chọn kỳ, nhóm và năm bảo vệ khóa luận</h4>
			<div class="row">
				<div class="col-md-2">
					<div class="form-group">
						<select name="ky" id="ky" class="form-control">
							<option value="unselect" selected="">Lựa chọn kỳ</option>
							<option value="1">Kỳ I</option>
							<option value="2">Kỳ II</option>
							<option value="3">Kỳ III</option>
						</select>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<select name="nhom" id="nhom" class="form-control">
							<option value="unselect" selected="">Lựa chọn nhóm</option>
							<option value="1">Nhóm 1</option>
							<option value="2">Nhóm 2</option>
							<option value="3">Nhóm 3</option>
						</select>
					</div>
				</div>
				<div class="col-md-2">
					<div class="form-group">
						<select name="nam" id="nam" class="form-control">
							<option value="unselect" selected="">Lựa chọn năm</option>
							@foreach($namlist as $nam)
							<option value="{{$nam->id_nam}}">{{$nam->nam}}</option>
							@endforeach
						</select>
					</div>
				</div>
			</div>
			
			<button type="submit" rel="submit" class="btn btn-primary">Xác nhận</button>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('[rel="submit"]').click(function(){
			var checked = $('#check input:checked');
			var obj = {sinhvien: [], ky: [], nhom: [], nam: []}
			checked.each(function(index, check){
				obj.sinhvien.push($(check).val())
			})
			obj.ky.push($('#ky').val())
			obj.nhom.push($('#nhom').val())
			obj.nam.push($('#nam').val())
			$.ajax({
				url: "{{ url('/ajax/bienban_diemkl') }}",
				data: obj
			}).done(function(data){
				$('[rel="indulieu"]').html(data);
			});
		});
	});
</script>