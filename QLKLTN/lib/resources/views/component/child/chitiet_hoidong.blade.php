<div class="modal-dialog">

  <!-- Popup content-->
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>

    <div class="modal-body">
      <div align="center">
        <h3><b>{{ $cthd->ten_hoidong }}</b></h3>
      </div>

      <ul class="list-group list-group-unbordered">
        <li class="list-group-item">
          <b>Khoa</b> <a class="pull-right">{{ $cthd->khoa->ten_khoa }}</a>
        </li>
        <li class="list-group-item">
          <b>Chủ tịch</b> 
          <a class="pull-right">{{$data['chutich']}}</a>
        </li>
        <li class="list-group-item">
          <b>Giáo viên hướng dẫn</b> 
          <a class="pull-right">{{$data['gvhd']}}</a>
        </li>
        <li class="list-group-item">
          <b>Phản biện</b> 
          <a class="pull-right">{{$data['phanbien']}}</a>
        </li>
        <li class="list-group-item">
          <b>Thư ký</b> 
          <a class="pull-right">{{$data['thuky']}}</a>
        </li>
      </ul>
    </div>                  

    <div class="modal-footer">
      <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
    </div>
  </div>

</div>