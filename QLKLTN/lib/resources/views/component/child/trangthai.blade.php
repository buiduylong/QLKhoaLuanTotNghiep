<div class="modal-dialog">
	<!-- Modal content-->
	<div class="modal-content">
		<form method="post" id="frm" >
			<input type="hidden" name="id" id="id" value="{{$thongbao->id_thongbao}}">
			<div class="modal-header">
				<h4 class="modal-title">Thay đổi trạng thái của thông báo</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			<div class="modal-body">
				<div class="radio">
					<label>
						<input required="" type="radio" @if($thongbao->trangthai == 1) checked="" @endif name="trangthai" value=1>Đã duyệt
					</label>
				</div><br>
				<div class="radio">
					<label>
						<input required="" type="radio" @if($thongbao->trangthai != 1) checked="" @endif name="trangthai" value=0>Chưa duyệt
					</label>
				</div>
			</div>
			<div class="modal-footer">
				<input id="send" rel="submit" type="submit" name="submit" class="btn btn-primary" value="Cập nhật">
				<button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
			</div>
			{{csrf_field()}}
		</form>
	</div>
</div>

@section('script')
<script type="text/javascript">
	$(document).ready(function(){
		$('[rel="submit"]').click(function(){
			var $data = $('form#frm').serialize();
			$.ajax({
				type : 'POST',
				dataType: 'json',
				url: "{{ url('thongbao') }}",
			});
		});

	});
</script>
@stop