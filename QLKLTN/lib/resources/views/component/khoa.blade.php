<table class="table table-bordered">
	<thead>
		<tr>
			<th>Ngành</th>
			<th>Thuộc khoa</th>
			<th>Sửa</th>
			<th>Xóa</th>
		</tr>
	</thead>
	<tbody >
		@foreach($khoalist as $nganh)
		<tr>
			<td>{{$nganh->ten_nganh}}</td>
			<td>{{$nganh->ten_khoa}}</td>
			<td><a href="{{ asset('qlnganh/sua_nganh/'.$nganh->id_nganh) }}"><span class="fa fa-pencil"></span></a></td>
			<td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('qlnganh/xoa_nganh/'.$nganh->id_nganh) }}"><span class="fa fa-times"></span></a></td>
		</tr>
		@endforeach
	</tbody>
</table>