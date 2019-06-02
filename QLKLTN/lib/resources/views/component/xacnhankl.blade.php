<table class="table table-bordered">
	<thead>
		<tr>
			<th>Mã sinh viên</th>
			<th>Tên sinh viên</th>
			<th>Đề tài</th>
			<th>Giáo viên hướng dẫn</th>
			<th>Thời gian bảo vệ</th>
			<th>Phòng</th>
			<th>Xác nhận</th>
			<th>Xóa</th>
		</tr>
	</thead>
	<tbody>
		@if($row > 0)
		@foreach($khoaluanlist as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row1))
		@foreach($khoaluanlist1 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row3))
		@foreach($khoaluanlist3 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row4))
		@foreach($khoaluanlist4 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row5))
		@foreach($khoaluanlist5 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row12))
		@foreach($khoaluanlist12 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row13))
		@foreach($khoaluanlist13 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row14))
		@foreach($khoaluanlist14 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row15))
		@foreach($khoaluanlist15 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row34))
		@foreach($khoaluanlist34 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row35))
		@foreach($khoaluanlist35 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row45))
		@foreach($khoaluanlist45 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row123))
		@foreach($khoaluanlist123 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row124))
		@foreach($khoaluanlist124 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row125))
		@foreach($khoaluanlist125 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row134))
		@foreach($khoaluanlist134 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row135))
		@foreach($khoaluanlist135 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row145))
		@foreach($khoaluanlist145 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row345))
		@foreach($khoaluanlist345 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row1234))
		@foreach($khoaluanlist1234 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row1235))
		@foreach($khoaluanlist1235 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach

		@elseif(isset($row1245))
		@foreach($khoaluanlist1245 as $xn)
		@if($xn->diem1 == null && $xn->diem2 == null && $xn->diem3 == null && $xn->diem4 == null)
		<tr>
			@if($xn->de_tai != null and $xn->thoi_gian != null and $xn->phong != null and $xn->huongdan != null)
			<td>{{$xn->thanhvien->ma_thanhvien}}</td>
			@else
			<td style="background: red;">{{$xn->thanhvien->ma_thanhvien}}</td>
			@endif
			<td>{{$xn->thanhvien->ten_thanhvien}}</td>
			<td>{{$xn->de_tai}}</td>
			<td>@if($xn->huongdan != null) {{$xn->huongdan->ten_thanhvien}} @endif</td>
			<td>{{$xn->thoi_gian}}</td>
			<td>{{$xn->phong}}</td>
			<td><a><span data-id="{{ $xn->id_khoaluan }}" rel="xacnhankl2" class="mdi mdi-24px mdi-refresh" ></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('khoaluan/xoa_dangkykl/'.$xn->id_khoaluan)}}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endif
		@endforeach
		@endif
	</tbody>
</table>
<!-- Popup -->
<div class="modal fade" id="myModal" role="dialog">
</div>

<script type="text/javascript">
  $(document).ready(function(){
    
    $('[rel="xacnhankl2"]').click(function(){

    let id = $(this).data('id');

    $.ajax({
      url: "{{ url('/ajax/xacnhankl2') }}",
      data: { id: id }
    }).done(function(data){
      console.log(data)
      $('#myModal').html(data);
      $('#myModal').modal('show');
    });
    
  });
  });
</script>