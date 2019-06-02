<table class="table table-bordered">
	<thead>
		<tr>
			<th>Đề tài</th>
			<th>Khoa</th>
			<th>Ngành</th>
			<th>Năm</th>
			<th>Giáo viên hướng dẫn</th>
			<th>Đã được chọn</th>
			@if(Auth::user()->quyen == 2)
			<th>Sửa</th>
			<th>Xóa</th>
			@endif
		</tr>
	</thead>
	<tbody>
		@if($row > 0)
		@foreach($detailist as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row1))
		@foreach($detailist1 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row3))
		@foreach($detailist3 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row4))
		@foreach($detailist4 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row5))
		@foreach($detailist5 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row12))
		@foreach($detailist12 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row13))
		@foreach($detailist13 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row14))
		@foreach($detailist14 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row15))
		@foreach($detailist15 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row34))
		@foreach($detailist34 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row35))
		@foreach($detailist35 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row45))
		@foreach($detailist45 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row123))
		@foreach($detailist123 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row124))
		@foreach($detailist124 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row125))
		@foreach($detailist125 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row134))
		@foreach($detailist134 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row135))
		@foreach($detailist135 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row145))
		@foreach($detailist145 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row345))
		@foreach($detailist345 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row1234))
		@foreach($detailist1234 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row1235))
		@foreach($detailist1235 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@elseif(isset($row1245))
		@foreach($detailist1245 as $detai)
		<tr>
			<td>{{$detai->ten_detai}}</td>
			<td>{{$detai->thanhvien->khoa->ten_khoa}}</td>
			<td>{{$detai->thanhvien->nganh->ten_nganh}}</td>
			<td>{{$detai->nam->nam}}</td>
			<td>{{$detai->thanhvien->ten_thanhvien}}</td>
			<td>
				@php $a=0; @endphp
				@foreach($kllist as $kl)
				@if($kl->de_tai == $detai->ten_detai)
				@php $a=$a+1; @endphp
				@endif
				@endforeach
				{{$a}} lần
			</td>
			@if(Auth::user()->quyen == 2)
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a href="{{asset('detai/sua_detai/'.$detai->id_detai)}}"><span class="fa fa-pencil"></span></a>
				@else
				<span></span>
				@endif
			</td>
			<td>
				@if($detai->thanhvien->id == Auth::user()->id)
				<a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('detai/xoa_detai/'.$detai->id_detai)}}"><span class="fa fa-times"></span></a>
				@else
				<span></span>
				@endif
			</td>
			@endif
		</tr>
		@endforeach

		@endif
	</tbody>
</table>