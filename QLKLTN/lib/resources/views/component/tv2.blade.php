<div class="table-responsive">
  @if(Auth::user()->quyen != 3)
  <table class="table table-bordered">
    <div class="row" id="select2">
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control" name="bomon">
            <option value="0" selected="">Lựa chọn bộ môn</option>
            @foreach($bomonlist as $bomon)
            <option value="{{$bomon->id_bomon}}">{{$bomon->ten_bomon}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <button type="submit" rel="submit" class="btn btn-primary">Chọn</button>
      </div>
    </div>
    @if(isset($row14))
    <thead>
      <tr>
        <th>Mã cá nhân</th>
        <th>Họ và tên</th>
        <th>Bộ môn</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Học vị</th>
        <th>Sửa</th>
        @if(Auth::user()->quyen == 1) <th>Xóa</th> @endif
      </tr>
    </thead>
    @foreach($tvlist14 as $tv)
    <tr>
      <td>{{$tv->ma_thanhvien}}</td>
      <td>{{$tv->ten_thanhvien}}</td>
      <td>{{$tv->ten_bomon}}</td>
      <td>{{$tv->so_dienthoai}}</td>
      <td>{{$tv->email}}</td>
      <td>{{$tv->hocvi}}</td>
      <td><a href="{{ asset('thanhvien/sua_thanhvien/'.$tv->id)}}"><span class="fa fa-pencil"></span></a></td>
      @if(Auth::user()->quyen == 1)
      <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('thanhvien/xoa_thanhvien/'.$tv->id)}}"><span class="fa fa-times"></span></span></a></td>
      @endif
    </tr>
    @endforeach
    @endif
  </table>
  
  @else
  <table class="table table-bordered" rel="indulieu">
    <div class="row" id="select2">
      <div class="col-md-3">
        <div class="form-group">
          <select class="form-control" name="bomon">
            <option value="0" selected="">Lựa chọn bộ môn</option>
            @foreach($bomonlist as $bomon)
            <option value="{{$bomon->id_bomon}}">{{$bomon->ten_bomon}}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="col-md-1">
        <button type="submit" rel="submit" class="btn btn-primary">Chọn</button>
      </div>
    </div>
    @if(isset($row14))
    <thead>
      <tr>
        <th>Mã cá nhân</th>
        <th>Họ và tên</th>
        <th>Bộ môn</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Học vị</th>
        @if(Auth::user()->quyen == 1)
        <th>Sửa</th>
        <th>Xóa</th>
        @endif
      </tr>
    </thead>
    @foreach($tvlist14 as $tv)
    <tr>
      <td>{{$tv->ma_thanhvien}}</td>
      <td>{{$tv->ten_thanhvien}}</td>
      <td>{{$tv->ten_bomon}}</td>
      <td>{{$tv->so_dienthoai}}</td>
      <td>{{$tv->email}}</td>
      <td>{{$tv->hocvi}}</td>
      @if(Auth::user()->quyen == 1)
      <td><a href="{{ asset('thanhvien/sua_thanhvien/'.$tv->id)}}"><span class="fa fa-pencil"></span></a></td>
      <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('thanhvien/xoa_thanhvien/'.$tv->id)}}"><span class="fa fa-times"></span></span></a></td>
      @endif
    </tr>
    @endforeach
    @endif


  </table>
  @endif
</div>

