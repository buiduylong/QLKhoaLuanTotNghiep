<form id="frm" method="post">
  @csrf
  <input type="hidden" name="id" id="id" value="{{$kl->id_khoaluan}}">
  <div class="modal-dialog">

    <!-- Popup content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Điểm khóa luận</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <div class="modal-body">
        <label class="col-sm-8 control-label">Chủ tịch: 
          @if($kl->thietlap_khoaluan==null)
          <select class="form-control" disabled="disabled" style="-moz-appearance: none; -webkit-appearance: none; appearance: none;">
            <option value="" selected=""></option>
            @foreach($hd as $tv)
            @php $check = 0;  @endphp
            @foreach($kl->giaovien as $gv)
            @if($tv->thanhvien->id === $gv->id && $gv->pivot->chuc_vu === 1)
            @php $check = $gv->id; @endphp
            @endif
            @endforeach
            <option value="{{$tv->thanhvien->id}}" @if($check === $tv->thanhvien->id ) selected @endif>{{ $tv->thanhvien->ten_thanhvien }}</option>
            @endforeach
          </select>
          @else
          <select class="form-control" disabled="disabled" style="-moz-appearance: none; -webkit-appearance: none; appearance: none;">
            <option value="{{$tl->hd1}}">{{$tl->thanhvien1->ten_thanhvien}}</option>
          </select>
          @endif
        </label>
        @if(Auth::user()->quyen==1)
        <input type="text" class="col-sm-2" style="width: 60px;" name="diem1" required value="{{$kl->diem1}}">
        <input type="text" class="col-sm-2" style="width: 48px;" name="ts1" required value="{{$kl->ts1}}">%
        @else
        <input type="text" class="col-sm-2" style="width: 60px;" name="diem1" value="{{$kl->diem1}}" disabled="disabled">
        <input type="text" class="col-sm-2" style="width: 48px;" name="ts1" value="{{$kl->ts1}}" disabled="disabled">%
        @endif
      </div>

      <div class="modal-body">
        <label class="col-sm-8 control-label">Giáo viên hướng dẫn:
          @if($kl->thietlap_khoaluan==null)
          <select class="form-control" disabled="disabled" style="-moz-appearance: none; -webkit-appearance: none; appearance: none;">
            <option value="" selected=""></option>
            @foreach($hd as $tv)
            @php $check = 0;  @endphp
            @foreach($kl->giaovien as $gv)
            @if($tv->thanhvien->id === $gv->id && $gv->pivot->chuc_vu === 2)
            @php $check = $gv->id; @endphp
            @endif
            @endforeach
            <option value="{{$tv->thanhvien->id}}" @if($check === $tv->thanhvien->id ) selected @endif>{{ $tv->thanhvien->ten_thanhvien }}</option>
            @endforeach
          </select>
          @else
          <select class="form-control" disabled="disabled" style="-moz-appearance: none; -webkit-appearance: none; appearance: none;">
            <option value="{{$tl->hd2}}">{{$tl->thanhvien2->ten_thanhvien}}</option>
          </select>
          @endif
        </label>
        @if(Auth::user()->quyen==1)
        <input type="text" class="col-sm-2" style="width: 60px;" name="diem2" required value="{{$kl->diem2}}">
        <input type="text" class="col-sm-2" style="width: 48px;" name="ts2" required value="{{$kl->ts2}}">%
        @else
        <input type="text" class="col-sm-2" style="width: 60px;" name="diem2" value="{{$kl->diem2}}" disabled="disabled">
        <input type="text" class="col-sm-2" style="width: 48px;" name="ts2" value="{{$kl->ts2}}" disabled="disabled">%
        @endif
      </div>

      <div class="modal-body">
        <label class="col-sm-8 control-label">Phản biện: 
          @if($kl->thietlap_khoaluan==null)
          <select class="form-control" disabled="disabled" style="-moz-appearance: none; -webkit-appearance: none; appearance: none;">
            <option value="" selected=""></option>
            @foreach($hd as $tv)
            @php $check = 0;  @endphp
            @foreach($kl->giaovien as $gv)
            @if($tv->thanhvien->id === $gv->id && $gv->pivot->chuc_vu === 3)
            @php $check = $gv->id; @endphp
            @endif
            @endforeach
            <option value="{{$tv->thanhvien->id}}" @if($check === $tv->thanhvien->id ) selected @endif>{{ $tv->thanhvien->ten_thanhvien }}</option>
            @endforeach
          </select>
          @else
          <select class="form-control" disabled="disabled" style="-moz-appearance: none; -webkit-appearance: none; appearance: none;">
            <option value="{{$tl->hd3}}">{{$tl->thanhvien3->ten_thanhvien}}</option>
          </select>
          @endif
        </label>
        @if(Auth::user()->quyen==1)
        <input type="text" class="col-sm-2" style="width: 60px;" name="diem3" required value="{{$kl->diem3}}">
        <input type="text" class="col-sm-2" style="width: 48px;" name="ts3" required value="{{$kl->ts3}}">%
        @else
        <input type="text" class="col-sm-2" style="width: 60px;" name="diem3" value="{{$kl->diem3}}" disabled="disabled">
        <input type="text" class="col-sm-2" style="width: 48px;" name="ts3" value="{{$kl->ts3}}" disabled="disabled">%
        @endif
      </div>

      <div class="modal-body">
        <label class="col-sm-8 control-label">Thư ký: 
          @if($kl->thietlap_khoaluan==null)
          <select class="form-control" disabled="disabled" style="-moz-appearance: none; -webkit-appearance: none; appearance: none;">
            <option value="" selected=""></option>
            @foreach($hd as $tv)
            @php $check = 0;  @endphp
            @foreach($kl->giaovien as $gv)
            @if($tv->thanhvien->id === $gv->id && $gv->pivot->chuc_vu === 4)
            @php $check = $gv->id; @endphp
            @endif
            @endforeach
            <option value="{{$tv->thanhvien->id}}" @if($check === $tv->thanhvien->id ) selected @endif>{{ $tv->thanhvien->ten_thanhvien }}</option>
            @endforeach
          </select>
          @else
          <select class="form-control" disabled="disabled" style="-moz-appearance: none; -webkit-appearance: none; appearance: none;">
            <option value="{{$tl->hd4}}">{{$tl->thanhvien4->ten_thanhvien}}</option>
          </select>
          @endif
        </label>
        @if(Auth::user()->quyen==1)
        <input type="text" class="col-sm-2" style="width: 60px;" name="diem4" required value="{{$kl->diem4}}">
        <input type="text" class="col-sm-2" style="width: 48px;" name="ts4" required value="{{$kl->ts4}}">%
        @else
        <input type="text" class="col-sm-2" style="width: 60px;" name="diem4" value="{{$kl->diem4}}" disabled="disabled">
        <input type="text" class="col-sm-2" style="width: 48px;" name="ts4" value="{{$kl->ts4}}" disabled="disabled">%
        @endif
      </div>

      <div class="modal-body">
        @if(Auth::user()->quyen == 1) 
        <input  type="submit" name="submit" rel="submit" class="btn btn-primary" value="Cập nhật">
        @endif
      </div>

      <div class="modal-body">
        <label class="col-sm-3"></label>
        <label class="col-sm-6">{{-- 
          @if(!($kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)))
          <p id="textScope" style="color: blue; font-weight: bold; text-align: center; text-transform: uppercase; font-size: 18px">chưa có điểm</p>
          @elseif($kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)) --}}
          <p style="color: red; font-weight: bold; text-align: center; text-transform: uppercase; font-size: 18px">Tổng điểm = <span id="textScope">{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</span>
          </p>
          {{-- @endif --}}
        </label>
        <label class="col-sm-3"></label>
      </div>        

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Hủy</button>
      </div>
    </div>

  </div>
</form>

<script type="text/javascript">
  $(document).ready(function(){
    $('[rel="submit"]').click(function(event){
      event.preventDefault();
      var $data = $('form#frm').serialize();
      $.ajax({
        type : 'POST',
        dataType: 'json',
        url: "{{ url('/khoaluan/dskhoaluan') }}",
        data: $data,
        success : function(response){
          $('[data-id="{{ $kl->id_khoaluan }}"]').parents('td:eq(0)').prev().text(response.result)
          $('#textScope').text(response.result)
        },
        error : function(XMLHttpRequest, textStatus, errorThrown) {}
      });
    });
  });
</script>