<div class="table-responsive">
	@if(Auth::user()->quyen != 3)
	<table class="table table-bordered">
		@if(isset($row14))
		<thead>
			<tr>
				<th>Mã cá nhân</th>
				<th>Họ và tên</th>
				<th>Học vị</th>
				<th>Bộ môn</th>
				<th>Số điện thoại</th>
				<th>Sửa</th>
				@if(Auth::user()->quyen == 1)
				<th>Xóa</th>
				@endif
			</tr>
		</thead>
		<tbody>
			@foreach($tvlist14 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->hocvi}}</td>
				<td>{{$tv->ten_bomon}}</td>
				<td>{{$tv->so_dienthoai}}</td>
				<td><a href="{{ asset('thanhvien/sua_thanhvien/'.$tv->id)}}"><span class="fa fa-pencil"></span></a></td>
				@if(Auth::user()->quyen == 1)
				<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('thanhvien/xoa_thanhvien/'.$tv->id)}}"><span class="fa fa-times"></span></a></td>
				@endif
			</tr>
			@endforeach
		</tbody>
		@elseif(isset($row01))
		<thead>
			<tr>
				<th>Mã cá nhân</th>
				<th>Họ và tên</th>
				<th>Học vị</th>
				<th>Bộ môn</th>
				<th>Số điện thoại</th>
				<th>Sửa</th>
				@if(Auth::user()->quyen == 1)
				<th>Xóa</th>
				@endif
			</tr>
		</thead>
		<tbody>
			@foreach($tvlist01 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->hocvi}}</td>
				<td>{{$tv->ten_bomon}}</td>
				<td>{{$tv->so_dienthoai}}</td>
				<td><a href="{{ asset('thanhvien/sua_thanhvien/'.$tv->id)}}"><span class="fa fa-pencil"></span></a></td>
				@if(Auth::user()->quyen == 1)
				<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('thanhvien/xoa_thanhvien/'.$tv->id)}}"><span class="fa fa-times"></span></a></td>
				@endif
			</tr>
			@endforeach
		</tbody>
		@elseif(isset($row4))
		<thead>
			<tr>
				<th>Mã cá nhân</th>
				<th>Họ và tên</th>
				<th>Học vị</th>
				<th>Bộ môn</th>
				<th>Số điện thoại</th>
				<th>Sửa</th>
				@if(Auth::user()->quyen == 1)
				<th>Xóa</th>
				@endif
			</tr>
		</thead>
		<tbody>
			@foreach($tvlist4 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->hocvi}}</td>
				<td>{{$tv->ten_bomon}}</td>
				<td>{{$tv->so_dienthoai}}</td>
				<td><a href="{{ asset('thanhvien/sua_thanhvien/'.$tv->id)}}"><span class="fa fa-pencil"></span></a></td>
				@if(Auth::user()->quyen == 1)
				<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('thanhvien/xoa_thanhvien/'.$tv->id)}}"><span class="fa fa-times"></span></a></td>
				@endif
			</tr>
			@endforeach
		</tbody>
		@else
		<thead>
			<tr>
				<th>Mã cá nhân</th>
				<th>Họ và tên</th>
				<th>Lớp</th>
				<th>Quyền</th>
				<th>Chi tiết</th>
				<th>Sửa</th>
				@if(Auth::user()->quyen == 1) <th>Xóa</th> @endif
			</tr>
		</thead>
		<tbody>
			@if(isset($row))
			@foreach($tvlist as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->lop}}</td>
				<td>@if($tv->quyen == 1){{'Thư ký'}}
					@elseif($tv->quyen == 2){{'Giáo viên'}}
					@else {{'Sinh viên'}}
					@endif
				</td>
				<td><span data-id="{{ $tv->id }}" class="fa fa-search" rel="chitiettv"></span></td>
				<td><a href="{{ asset('thanhvien/sua_thanhvien/'.$tv->id)}}"><span class="fa fa-pencil"></span></a></td>
				@if(Auth::user()->quyen == 1)
				<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('thanhvien/xoa_thanhvien/'.$tv->id)}}"><span class="fa fa-times"></span></a></td>
				@endif
			</tr>
			@endforeach

			@elseif(isset($row1))
			@foreach($tvlist1 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->lop}}</td>
				<td>@if($tv->quyen == 1){{'Thư ký'}}
					@elseif($tv->quyen == 2){{'Giáo viên'}}
					@else {{'Sinh viên'}}
					@endif
				</td>
				<td><span data-id="{{ $tv->id }}" class="fa fa-search" rel="chitiettv"></span></td>
				<td><a href="{{ asset('thanhvien/sua_thanhvien/'.$tv->id)}}"><span class="fa fa-pencil"></span></a></td>
				@if(Auth::user()->quyen == 1)
				<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('thanhvien/xoa_thanhvien/'.$tv->id)}}"><span class="fa fa-times"></span></span></a></td>
				@endif
			</tr>
			@endforeach

			@elseif(isset($row2))
			@foreach($tvlist2 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->lop}}</td>
				<td>@if($tv->quyen == 1){{'Thư ký'}}
					@elseif($tv->quyen == 2){{'Giáo viên'}}
					@else {{'Sinh viên'}}
					@endif
				</td>
				<td><span data-id="{{ $tv->id }}" class="fa fa-search" rel="chitiettv"></span></td>
				<td><a href="{{ asset('thanhvien/sua_thanhvien/'.$tv->id)}}"><span class="fa fa-pencil"></span></a></td>
				@if(Auth::user()->quyen == 1)
				<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('thanhvien/xoa_thanhvien/'.$tv->id)}}"><span class="fa fa-times"></span></span></a></td>
				@endif
			</tr>
			@endforeach

			@elseif(isset($row3))
			@foreach($tvlist3 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->lop}}</td>
				<td>@if($tv->quyen == 1){{'Thư ký'}}
					@elseif($tv->quyen == 2){{'Giáo viên'}}
					@else {{'Sinh viên'}}
					@endif
				</td>
				<td><span data-id="{{ $tv->id }}" class="fa fa-search" rel="chitiettv"></span></td>
				<td><a href="{{ asset('thanhvien/sua_thanhvien/'.$tv->id)}}"><span class="fa fa-pencil"></span></a></td>
				@if(Auth::user()->quyen == 1)
				<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('thanhvien/xoa_thanhvien/'.$tv->id)}}"><span class="fa fa-times"></span></span></a></td>
				@endif
			</tr>
			@endforeach

			@elseif(isset($row12))
			@foreach($tvlist12 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->lop}}</td>
				<td>@if($tv->quyen == 1){{'Thư ký'}}
					@elseif($tv->quyen == 2){{'Giáo viên'}}
					@else {{'Sinh viên'}}
					@endif
				</td>
				<td><span data-id="{{ $tv->id }}" class="fa fa-search" rel="chitiettv"></span></td>
				<td><a href="{{ asset('thanhvien/sua_thanhvien/'.$tv->id)}}"><span class="fa fa-pencil"></span></a></td>
				@if(Auth::user()->quyen == 1)
				<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('thanhvien/xoa_thanhvien/'.$tv->id)}}"><span class="fa fa-times"></span></span></a></td>
				@endif
			</tr>
			@endforeach

			@elseif(isset($row13))
			@foreach($tvlist13 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->lop}}</td>
				<td>@if($tv->quyen == 1){{'Thư ký'}}
					@elseif($tv->quyen == 2){{'Giáo viên'}}
					@else {{'Sinh viên'}}
					@endif
				</td>
				<td><span data-id="{{ $tv->id }}" class="fa fa-search" rel="chitiettv"></span></td>
				<td><a href="{{ asset('thanhvien/sua_thanhvien/'.$tv->id)}}"><span class="fa fa-pencil"></span></a></td>
				@if(Auth::user()->quyen == 1)
				<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('thanhvien/xoa_thanhvien/'.$tv->id)}}"><span class="fa fa-times"></span></span></a></td>
				@endif
			</tr>
			@endforeach

			@elseif(isset($row23))
			@foreach($tvlist23 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->lop}}</td>
				<td>@if($tv->quyen == 1){{'Thư ký'}}
					@elseif($tv->quyen == 2){{'Giáo viên'}}
					@else {{'Sinh viên'}}
					@endif
				</td>
				<td><span data-id="{{ $tv->id }}" class="fa fa-search" rel="chitiettv"></span></td>
				<td><a href="{{ asset('thanhvien/sua_thanhvien/'.$tv->id)}}"><span class="fa fa-pencil"></span></a></td>
				@if(Auth::user()->quyen == 1)
				<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('thanhvien/xoa_thanhvien/'.$tv->id)}}"><span class="fa fa-times"></span></span></a></td>
				@endif
			</tr>
			@endforeach

			@endif
		</tbody>
		@endif
	</table>
	
	@else
	<table class="table table-bordered">
		@if(isset($row14))
		<thead>
			<tr>
				<th>Mã cá nhân</th>
				<th>Họ và tên</th>
				<th>Học vị</th>
				<th>Bộ môn</th>
				<th>Số điện thoại</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tvlist14 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->hocvi}}</td>
				<td>{{$tv->ten_bomon}}</td>
				<td>{{$tv->so_dienthoai}}</td>
			</tr>
			@endforeach
		</tbody>
		@elseif(isset($row01))
		<thead>
			<tr>
				<th>Mã cá nhân</th>
				<th>Họ và tên</th>
				<th>Học vị</th>
				<th>Bộ môn</th>
				<th>Số điện thoại</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tvlist01 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->hocvi}}</td>
				<td>{{$tv->ten_bomon}}</td>
				<td>{{$tv->so_dienthoai}}</td>
			</tr>
			@endforeach
		</tbody>
		@elseif(isset($row4))
		<thead>
			<tr>
				<th>Mã cá nhân</th>
				<th>Họ và tên</th>
				<th>Học vị</th>
				<th>Bộ môn</th>
				<th>Số điện thoại</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tvlist4 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->hocvi}}</td>
				<td>{{$tv->ten_bomon}}</td>
				<td>{{$tv->so_dienthoai}}</td>
			</tr>
			@endforeach
		</tbody>
		@else
		<thead>
			<tr>
				<th>Mã cá nhân</th>
				<th>Họ và tên</th>
				<th>Lớp</th>
				<th>Quyền</th>
				<th>Chi tiết</th>
			</tr>
		</thead>
		<tbody>
			@if(isset($row))
			@foreach($tvlist as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->lop}}</td>
				<td>@if($tv->quyen == 1){{'Thư ký'}}
					@elseif($tv->quyen == 2){{'Giáo viên'}}
					@else {{'Sinh viên'}}
					@endif
				</td>
				<td><span data-id="{{ $tv->id }}" class="fa fa-search" rel="chitiettv"></span></td>
			</tr>
			@endforeach

			@elseif(isset($row1))
			@foreach($tvlist1 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->lop}}</td>
				<td>@if($tv->quyen == 1){{'Thư ký'}}
					@elseif($tv->quyen == 2){{'Giáo viên'}}
					@else {{'Sinh viên'}}
					@endif
				</td>
				<td><span data-id="{{ $tv->id }}" class="fa fa-search" rel="chitiettv"></span></td>
			</tr>
			@endforeach

			@elseif(isset($row2))
			@foreach($tvlist2 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->lop}}</td>
				<td>@if($tv->quyen == 1){{'Thư ký'}}
					@elseif($tv->quyen == 2){{'Giáo viên'}}
					@else {{'Sinh viên'}}
					@endif
				</td>
				<td><span data-id="{{ $tv->id }}" class="fa fa-search" rel="chitiettv"></span></td>
			</tr>
			@endforeach

			@elseif(isset($row3))
			@foreach($tvlist3 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->lop}}</td>
				<td>@if($tv->quyen == 1){{'Thư ký'}}
					@elseif($tv->quyen == 2){{'Giáo viên'}}
					@else {{'Sinh viên'}}
					@endif
				</td>
				<td><span data-id="{{ $tv->id }}" class="fa fa-search" rel="chitiettv"></span></td>
			</tr>
			@endforeach

			@elseif(isset($row12))
			@foreach($tvlist12 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->lop}}</td>
				<td>@if($tv->quyen == 1){{'Thư ký'}}
					@elseif($tv->quyen == 2){{'Giáo viên'}}
					@else {{'Sinh viên'}}
					@endif
				</td>
				<td><span data-id="{{ $tv->id }}" class="fa fa-search" rel="chitiettv"></span></td>
			</tr>
			@endforeach

			@elseif(isset($row13))
			@foreach($tvlist13 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->lop}}</td>
				<td>@if($tv->quyen == 1){{'Thư ký'}}
					@elseif($tv->quyen == 2){{'Giáo viên'}}
					@else {{'Sinh viên'}}
					@endif
				</td>
				<td><span data-id="{{ $tv->id }}" class="fa fa-search" rel="chitiettv"></span></td>
			</tr>
			@endforeach

			@elseif(isset($row23))
			@foreach($tvlist23 as $tv)
			<tr>
				<td>{{$tv->ma_thanhvien}}</td>
				<td>{{$tv->ten_thanhvien}}</td>
				<td>{{$tv->lop}}</td>
				<td>@if($tv->quyen == 1){{'Thư ký'}}
					@elseif($tv->quyen == 2){{'Giáo viên'}}
					@else {{'Sinh viên'}}
					@endif
				</td>
				<td><span data-id="{{ $tv->id }}" class="fa fa-search" rel="chitiettv"></span></td>
			</tr>
			@endforeach

			@endif
		</tbody>
		@endif
	</table>
	@endif
</div>

<script type="text/javascript">
	$(document).ready(function(){
		// $('[rel="submit"]').click(function(){

		// 	var select = $('#select2 select');
		// 	var obj = {};
		// 	for(var i = 0; i < select.length; i++){
		// 		obj[$(select[i]).attr('name')] = $(select[i]).val();
		// 	}

		// 	$.ajax({
		// 		url: "{{ url('/ajax/tv2') }}",
		// 		data: obj
		// 	}).done(function(data){
		// 		$('[rel="indulieu"]').html(data);
		// 	});

		// });

		$('[rel="chitiettv"]').click(function(){

			let id = $(this).data('id');

			$.ajax({
				url: "{{ url('/ajax/chitiettv') }}",
				data: { id: id }
			}).done(function(data){
				console.log(data)
				$('#myModal').html(data);
				$('#myModal').modal('show');
			});

		});
	});
</script>