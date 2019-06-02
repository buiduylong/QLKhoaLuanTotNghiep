<form action="" method="get">
	@csrf
	<div class="card" id='indl'>
		<div class="card-body">
			<div class="row">
				<div class="col-md-3">
					<p align="center" class="fix-p3"><b>ĐẠI HỌC THĂNG LONG</b></p>
					<h5 align="center" class="fix-p4 text-uppercase"><u><b>BỘ MÔN {{ $thanhvien->khoa->ten_khoa }}</b></u></h5>
				</div>

				<div class="col-md-4"></div>

				<div class="col-md-5">
					<p align="center" class="fix-p3"><b>CỘNG HÒA XÃ HỘI CHỦ NGHĨA VIỆT NAM</b></p>
					<h5 align="center" class="fix-p4"><u><b>ĐỘC LẬP - TỰ DO - HẠNH PHÚC</b></u></h5>
					<p align="center" class="fix-p5"><i>Hà Nội, ngày {{ $ngay }} tháng {{ $thang }} năm {{ $nam }}</i></p>
				</div>
			</div>

			<h2 align="center" class="fix-p6"><b>BIÊN BẢN CHẤM KHÓA LUẬN TỐT NGHIỆP</b></h2>

			<p class="fix-p7"><b>I. THÀNH PHẦN HỘI ĐỒNG</b></p>	
			
			
				<div class="row">
					<div class="col-md-3">
						<p class="fix-p7">1. Chủ tịch:</p>
					</div>
					<div class="col-md-5">
						@if($thanhvien->laydiem->thietlap_khoaluan!=null)
							{{ $thanhvien->laydiem->thietlap->thanhvien1->ten_thanhvien }}
						@else
							{{ $giaovien[0]->ten_thanhvien }}
						@endif
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<p class="fix-p7">2. Giáo viên hướng dẫn:</p>
					</div>
					<div class="col-md-5">
						@if($thanhvien->laydiem->thietlap_khoaluan!=null)
							{{ $thanhvien->laydiem->thietlap->thanhvien2->ten_thanhvien }}
						@else
							{{ $giaovien[1]->ten_thanhvien }}
						@endif
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<p class="fix-p7">3. Phản biện:</p>
					</div>
					<div class="col-md-5">
						@if($thanhvien->laydiem->thietlap_khoaluan!=null)
							{{ $thanhvien->laydiem->thietlap->thanhvien3->ten_thanhvien }}
						@else
							{{ $giaovien[2]->ten_thanhvien }}
						@endif
					</div>
				</div>

				<div class="row">
					<div class="col-md-3">
						<p class="fix-p7">4. Thư ký:</p>
					</div>
					<div class="col-md-5">
						@if($thanhvien->laydiem->thietlap_khoaluan!=null)
							{{ $thanhvien->laydiem->thietlap->thanhvien4->ten_thanhvien }}
						@else
							{{ $giaovien[3]->ten_thanhvien }}
						@endif
					</div>
				</div>

			<p class="fix-p7"><b>II. CÁC THÔNG TIN VỀ SINH VIÊN</b></p>

		
			<div class="row">
				<div class="col-md-2">
					<p class="fix-p7">1. Sinh viên:</p>
				</div>

				<div class="col-md-4">
					{{ $thanhvien->ten_thanhvien }}
				</div>
			</div>

			<div class="row">
				<div class="col-md-1">
					<p class="fix-p7">2. Lớp:</p>
				</div>

				<div class="col-md-1">
					{{ $thanhvien->lop }}
				</div>

				<div class="col-md-2">
					<p class="fix-p7">Mã sinh viên: </p>
				</div>

				<div class="col-md-2">
					{{ $thanhvien->ma_thanhvien }}
				</div>

				<div class="col-md-1">
					<p class="fix-p7">Ngành: </p>
				</div>

				<div class="col-md-5">
					{{ $thanhvien->nganh->ten_nganh }}
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<p class="fix-p7">3. Tên đề tài khóa luận: </p>
				</div>

				<div class="col-md-9">
					{{ $thanhvien->laydiem->de_tai }}
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<p class="fix-p7">4. Giáo viên hướng dẫn: </p>
				</div>

				<div class="col-md-9">
					@if($thanhvien->laydiem->thietlap_khoaluan!=null)
					{{ $thanhvien->laydiem->thietlap->thanhvien2->ten_thanhvien }}
					@else
					{{ $giaovien[1]->ten_thanhvien }}
					@endif
				</div>										
			</div>

			<p class="fix-p7"><b>III. XÁC NHẬN CỦA HỘI ĐỒNG CHẤM</b></p>
			
			<div class="row">
				<div class="col-md-2">
					<p class="fix-p7">1. Sinh viên:</p>
				</div>
				<div class="col-md-5">
					{{ $thanhvien->ten_thanhvien }}
				</div>
			</div>			

			<p class="fix-p7">đã thực hiện đầy đủ các yêu cầu của việc viết khóa luận và đã bảo vệ công khai trước Hội đồng chấm khóa luận của Trường Đại học Thăng Long.</p>

			<p class="fix-p7">2. Buổi bảo vệ chính thức khóa luận tốt nghiệp có sự tham gia đầy đủ của các thành viên đã được nêu tên trong Hội đồng.</p>

			<p class="fix-p7">3. Khóa luận tốt nghiệp được đánh giá khách quan và chính xác cho từng phần đánh giá. Hội đồng công nhận kết quả bảo vệ sau:</p>

			<div class="row">
				<div class="col-md-3">
					<p class="fix-p7">Điểm trung bình bằng số: </p>
				</div>

				<div class="col-md-9">
					{{ diemtk($thanhvien) }}
				</div>
			</div>

			<div class="row">
				<div class="col-md-3">
					<p class="fix-p7">Điểm trung bình bằng chữ: </p>
				</div>

				<div class="col-md-9">
					{{ convert_number_to_words(diemtk($thanhvien)) }}
				</div>
			</div>
			

			<div class="row">
				<div class="col-md-6 fix-bottom" align="center">
					<b>THƯ KÝ</b>
				</div>

				<div class="col-md-6 fix-bottom" align="center">
					<b>CHỦ TỊCH HỘI ĐỒNG</b>
				</div>
			</div>

			<div class="row">
				<a onclick="printContent('indl')" id="printbtn" target="_blank" class="btn btnprn btn-success fix-button"><i class="fa fa-print"></i>In</a>
				<a href="{{ asset('bienban/bienban_chamdiem') }}" id="cancelbtn" class="btn btn-secondary pull-right">Hủy</a>
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