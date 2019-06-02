<div class="modal-dialog">

  <!-- Popup content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <div class="modal-body">

      <div class="profile-image" align="center">
        <img class="profile-user-img img-responsive img-circle" src="{{asset('lib/storage/app/avatar/'.$ct->anh_thanhvien)}}" alt="profile image" align="center">
      </div>

      <div align="center">
        <strong>{{ $ct->ten_thanhvien }}</strong>
        <p>{{ $ct->ma_thanhvien }}</p>
      </div>

      <ul class="list-group list-group-unbordered">
        <li class="list-group-item">
          <b>Khoa</b> <a class="pull-right">{{ $ct->khoa->ten_khoa }}</a>
        </li>
        <li class="list-group-item">
          <b>Ngành</b> <a class="pull-right">{{ $ct->nganh->ten_nganh }}</a>
        </li>
        <li class="list-group-item">
          <b>Quyền hạn</b> <a class="pull-right">
            @if($ct->quyen == 1) {{'Thư ký'}}  
            @elseif($ct->quyen == 2) {{'Giáo viên'}} 
            @elseif($ct->quyen == 3) {{'Sinh viên'}} 
          @endif</a>
        </li>
        @if($ct->quyen == 3)
        <li class="list-group-item">
          <b>Trạng thái đăng ký KLTN</b> <a class="pull-right">
            @if($ct->trangthai == 1) {{ 'Đã đăng ký' }}
            @else {{ 'Chưa đăng ký' }}
          @endif</a>
        </li>
        @endif

      </ul>
    </div>                  

    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
    </div>
  </div>

</div>