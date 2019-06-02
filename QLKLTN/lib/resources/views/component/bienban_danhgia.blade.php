<form action="" method="get">
	<div class="card" id='indl'>
		<div class="card-body">
			@csrf
			<div class="row">
				<div class="col-md-12">
					<p align="center" class="fix-p3"><b>ĐẠI HỌC THĂNG LONG</b></p>
					<h5 align="center" class="fix-p4 text-uppercase"><u><b>BỘ MÔN {{ $data[0]->khoa->ten_khoa }}</b></u></h5>
				</div>

			</div>

			<h2 align="center" class="fix-p6 fix-p"><b>BẢN ĐÁNH GIÁ KHÓA LUẬN TỐT NGHIỆP</b></h2>
			
			@foreach($data as $value)
			<div class="row">
				<div class="col-md-2">
					<p class="fix-p7">Tên đề tài:</p>
				</div>
				<div class="col-md-10">
					{{ $value->laydiem->de_tai }}
				</div>
			</div>

			<div class="row">
				<div class="col-md-2">
					<p class="fix-p7">Họ và tên sinh viên:</p>
				</div>
				<div class="col-md-10">
					{{ $value->ten_thanhvien }}
				</div>
			</div>

			<div class="row">
				<div class="col-md-1">
					<p class="fix-p7">Khóa:</p>
				</div>
				<div class="col-md-1">
					{{ $value->lop }}
				</div>
				<div class="col-md-2">
					<p class="fix-p7">Mã sinh viên:</p>
				</div>
				<div class="col-md-1">
					{{ $value->ma_thanhvien }}
				</div>
			</div>

			<div class="row">
				<div class="col-md-2">
					<p class="fix-p7">Ngày bảo vệ:</p>
				</div>
				<div class="col-md-5">
					{{ date('d-m-Y', strtotime($value->laydiem->thoi_gian))}}
				</div>
			</div>
			@endforeach

			<p class="fix-p3 fix-p" align="center"><b>KẾT QUẢ ĐÁNH GIÁ CỦA THÀNH VIÊN HỘI ĐỒNG</b></p>

			<div class="row">
				<div class="col-md-4">
					<p class="fix-p7"><b>Các phần được đánh giá:</b></p>
				</div>										
			</div>

			<div class="row">
				<div class="col-md-4">
					<p class="fix-p7">1. Điểm tài liệu (Cho thang diểm 10)</p>
				</div>

				<div class="col-md-1">
					{{ $diem[0] }}
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<p class="fix-p7">2. Điểm bảo vệ (Cho thang diểm 10)</p>
				</div>

				<div class="col-md-1">
					{{ $diem[1] }}
				</div>
			</div>

			<div class="row">
				<div class="col-md-4">
					<p class="fix-p7">3. Điểm chương trình (Cho thang diểm 10)</p>
				</div>

				<div class="col-md-1">
					{{ $diem[2] }}
				</div>
			</div>

			<p class="fix-p7"><i>Phần dành cho thư ký:  Hệ số điểm của tài liệu là 4, hệ số điểm bảo vệ là 3, hệ số điểm chương trình là 3</i></p>

			<div class="row">
				<div class="col-md-4">
					<p class="fix-p7 fix-p"><b>KẾT QUẢ CUỐI CÙNG</b></p>
				</div>

				<div class="col-md-1 fix-p">
					@if($diem[0] != null && $diem[1] != null && $diem[2] != null)
						{{diemdanhgia($diem)}}
					@endif
				</div>
			</div>

			<div class="row">
				<div class="col-md-6 fix-bottom" align="center">

				</div>

				<div class="col-md-6 fix-bottom fix-p" align="center">
					<b>THÀNH VIÊN HỘI ĐỒNG</b>
				</div>
			</div>

			<div class="row">
				<a onclick="printContent('indl')" id="printbtn" target="_blank" class="btn btnprn btn-success fix-button"><i class="fa fa-print"></i>In</a>
				<a href="{{ asset('bienban/bienban_danhgia') }}" id="cancelbtn" class="btn btn-secondary pull-right">Hủy</a>
			</div>
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
