<form action="" method="get">
	<div class="card" id='indl'>
		<div class="card-body">
			@csrf
			<div class="row">
				<h4 class="text-uppercase fix-title"><b>bộ môn {{ $data[0]->khoa->ten_khoa }}</b></h4>
			</div>							
			@php $i=0; @endphp
				<p class="text-uppercase fix-p3" align="center">
					<b>bảng điểm KLTN ngành {{ $data[$i]->nganh->ten_nganh }}</b>
				</p>
			@php $i++; @endphp
			<p class="text-uppercase" align="center">
				<b>
					<i>
						Kỳ @if($ky[0] == 1) {{ 'I' }} @elseif($ky[0] == 2) {{ 'II' }} @elseif($ky[0] == 3) {{ 'III' }} @endif
						Nhóm @if($nhom[0] == 1) {{ '1' }} @elseif($nhom[0] == 2) {{ '2' }} @elseif($nhom[0] == 3) {{ '3' }} @endif
						Năm @if($nam[0] == $namlist->id_nam) {{ $namlist->nam }} @endif
					</i>
				</b>
			</p>

			<div class="row">
				<table style="width:99%" align="center">
					<tr>
						<th>STT</th>
						<th>MSV</th>
						<th>HỌ VÀ TÊN</th> 
						<th>ĐIỂM</th>
						<th>BẰNG CHỮ</th>
					</tr>
					@php
					$i=1;
					@endphp
					@foreach($data as $value)
					<tr>
						<td>{{ $i }}</td>
						<td>{{ $value->ma_thanhvien }}</td>
						<td>{{ $value->ten_thanhvien }}</td>
						<td>{{ diemtk($value) }}</td>
						<td>{{ convert_number_to_words(diemtk($value)) }}</td>
					</tr>
					@php
					$i++;
					@endphp
					@endforeach
				</table>
			</div>

			<div class="row">
				<div class="col-md-8"></div>

				<div class="col-md-4 fix-p" align="center">
					<h4>Giáo viên chấm điểm</h4>

					<p class="fix-p2"></p>


				</div>
			</div>

			<a onclick="printContent('indl')" id="printbtn" target="_blank" class="btn btnprn btn-success fix-button"><i class="fa fa-print"></i>In</a>
			<a href="{{ asset('bienban/bienban_diemkl') }}" id="cancelbtn" class="btn btn-secondary pull-right">Hủy</a>
			
		</div>
	</div>
</form>
<script type="text/javascript">
	function printContent(printdivname){
		var newstr = document.getElementById(printdivname).innerHTML;
		var oldstr = document.body.innerHTML;
		document.body.innerHTML = newstr;
		window.print();
		document.body.innerHTML = oldstr;
		return false;
	}
</script>
