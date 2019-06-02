<div class="table-responsive">
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>Mã sinh viên</th>
				<th>Tên sinh viên</th>
				<th>Lớp</th>
				<th>Đề tài</th>
				<th>Trạng thái</th>
				@if(Auth::user()->quyen == 1)<th>Lưu trữ</th>@endif
				<th>Tải xuống</th>
				@if(Auth::user()->quyen != 3)
				<th>Công khai</th>
				@if(Auth::user()->quyen == 1)
				<th>Xóa</th>
				@endif
				@endif
			</tr>
		</thead>
		<tbody>
			<form method="post" enctype="multipart/form-data" id="sub">
				@csrf
				@if($row > 0)
				@foreach($khoaluanlist as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row1))
				@foreach($khoaluanlist1 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row3))
				@foreach($khoaluanlist3 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row4))
				@foreach($khoaluanlist4 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row5))
				@foreach($khoaluanlist5 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row12))
				@foreach($khoaluanlist12 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row13))
				@foreach($khoaluanlist13 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row14))
				@foreach($khoaluanlist14 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row15))
				@foreach($khoaluanlist15 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row34))
				@foreach($khoaluanlist34 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row35))
				@foreach($khoaluanlist35 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row45))
				@foreach($khoaluanlist45 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row123))
				@foreach($khoaluanlist123 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row124))
				@foreach($khoaluanlist124 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row125))
				@foreach($khoaluanlist125 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row134))
				@foreach($khoaluanlist134 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row135))
				@foreach($khoaluanlist135 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row145))
				@foreach($khoaluanlist145 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row345))
				@foreach($khoaluanlist345 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row1234))
				@foreach($khoaluanlist1234 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row1235))
				@foreach($khoaluanlist135 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@elseif(isset($row1245))
				@foreach($khoaluanlist1245 as $baocao)
				<tr role="row" class="odd">
					@if($baocao->de_tai != null && $baocao != 'unselect')
					<td>{{$baocao->thanhvien->ma_thanhvien}}</td>
					<td>{{$baocao->thanhvien->ten_thanhvien}}</td>
					<td>{{$baocao->thanhvien->lop}}</td>
					<td>{{$baocao->de_tai}}</td>
					@if($baocao->bao_cao != null)
					<td>Đã nộp</td> 
					@else
					<td>Chưa nộp</td>
					@endif
					@if(Auth::user()->quyen == 1) 
					<td><a href="{{asset('qlbaocao/sua_baocao/'.$baocao->id_khoaluan)}}"><span class="fa fa-folder-open"></span></a></td> 
					@endif

					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@else
					@if($baocao->pub == 1)
					<td>
						@if($baocao->bao_cao != null)<a href="{{ asset('lib/storage/app/report/'.$baocao->bao_cao) }}"><span class="fa fa-download"></span></a>
						@endif
					</td>
					@endif
					@endif
					@if(Auth::user()->quyen != 3)
					<td>
						@if($baocao->bao_cao != null)
							@if($baocao->pub == 1)
							<a><span class="mdi mdi-24px mdi-check-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@else
							<a><span class="mdi mdi-24px mdi-close-circle-outline" data-id="{{ $baocao->id_khoaluan }}" rel="congkhai"></span></a>
							@endif
						@else
							<a><span class="mdi mdi-24px mdi-file-excel-box"></span></a>
						@endif
					</td>
					@if(Auth::user()->quyen == 1)
					<td>
						<a href="{{asset('qlbaocao/xoa_baocao/'.$baocao->id_khoaluan)}}" onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')"><span class="fa fa-times"></span></a>
					</td>
					@endif
					@endif
				</tr>
				@endif
				@endforeach

				@endif
			</form>
		</tbody>
		<div class="modal fade" id="myModal" role="dialog">
		</div>
	</table>
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('[rel="congkhai"]').click(function(){

      let id = $(this).data('id');
      
      $.ajax({
        url: "{{ url('/ajax/congkhai') }}",
        data: { id: id }
      }).done(function(data){
        console.log(data)
        $('#myModal').html(data);
        $('#myModal').modal('show');
      });

    });
  });
</script>