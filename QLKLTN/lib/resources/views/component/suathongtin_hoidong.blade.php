<div class="modal-dialog">
  <!-- Popup content-->
  <div class="modal-content">
    <div class="modal-header">
      <h4 class="modal-title">Sửa thành viên hội đồng</h4>
      <button type="button" class="close" data-dismiss="modal">&times;</button>
    </div>
    <form method="post" id="frm">
      <input type="hidden" name="id" id="id" value="{{$hd->id_hoidong}}">
      @csrf
      <div class="form-group">
        <label class="col-md-2 fix-label">Kỳ</label>

        <div class="col-md-10 fix-col">
          <select name="ky" class="form-control">
            <option value="{{$hd->ky}}">
              @if($hd->ky == 1) Kỳ I
              @elseif($hd->ky == 2) Kỳ II 
              @else Kỳ III 
              @endif
            </option>
            <option value="1">Kỳ I</option>
            <option value="2">Kỳ II</option>
            <option value="3">Kỳ III</option>
          </select>                
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 fix-label">Nhóm</label>

        <div class="col-md-10 fix-col">
          <select name="nhom" class="form-control">
            <option value="{{$hd->nhom}}">
              @if($hd->nhom == 1) Nhóm 1 
              @elseif($hd->nhom == 2) Nhóm 2 
              @else Nhóm 3 
              @endif
            </option>
            <option value="1">Nhóm 1</option>
            <option value="2">Nhóm 2</option>
            <option value="3">Nhóm 3</option>
          </select>                
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-2 fix-label">Năm</label>

        <div class="col-md-10 fix-col">
          <select name="nam_hoidong" class="form-control">
            <option value="{{$hd->nam_hoidong}}">{{$hd->nam->nam}}</option>
            @foreach($namlist as $nam)
            <option value="{{$nam->id_nam}}">{{$nam->nam}}</option>
            @endforeach
          </select>
        </div>
      </div>

      <div class="modal-footer">
        <button id="send" rel="submit" type="submit" name="submit" class="btn btn-success">Sửa</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
      </div>
    </form>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('[rel="submit"]').click(function(){
      var $data = $('form#frm').serialize();
      $.ajax({
        type : 'POST',
        dataType: 'json',
        url: "{{ url('/qlhoidong/dshoidong') }}",
        data: $data,
        success : function($json){
          alert($json.msg);
          if($json.error == false)
            window.location = $json.url;
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) {}
      });
    });
  });
</script>