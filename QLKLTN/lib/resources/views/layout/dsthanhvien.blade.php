@extends('layout/master')
@section('title', 'Danh sách thành viên')
@section('content')
<div class="row">
  <h4 class="fix-title">
    Quản lý thành viên
    <small>Danh sách thành viên</small>
  </h4>
</div>

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-2">
          <h4 class="card-title">Danh sách thành viên</h4>
        </div>

        <div class="col-md-3">
          <div class="form-group">
            <form action="{{asset('thanhvien/timkiem2')}}" role="search" method="get" class="sidebar-form">
              <div class="input-group">
                <input type="text" name="result2" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                  <button type="text" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                  </button>
                </span>
              </div>
            </form>
          </div>
        </div>

        <div id="select" class="col-md-7">
          <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <select class="form-control" name="quyen">
                  <option value="0" selected="">Lựa chọn quyền</option>
                  <option value="1">Thư ký</option>
                  <option value="2">Giáo viên</option>
                  <option value="3">Sinh viên</option>
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <select class="form-control" name="khoa" rel="khoa">
                  <option value="0" selected="">Lựa chọn khoa</option>
                  @foreach($khoa as $khoa)
                  <option value="{{$khoa->id_khoa}}">{{$khoa->ten_khoa}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
                <select class="form-control" name="trang_thai" rel="trang_thai">
                  <option value="0" selected="">Trạng thái</option>
                  <option value="1">Đã đăng ký</option>
                  <option value="2">Chưa đăng ký</option>
                </select>
              </div>      
            </div>
            <div class="col-md-1">
              <button type="submit" rel="submit" class="btn btn-primary">Lọc</button>
            </div>
          </div>
          <div class="row">
            <div class=col-md-4>
              <div class="form-group">
                <select class="form-control" name="bomon">
                  <option value="0" selected="">Lựa chọn bộ môn</option>
                  @foreach($bomonlist as $bomon)
                  <option value="{{$bomon->id_bomon}}">{{$bomon->ten_bomon}}</option>
                  @endforeach
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>

      @if(session('thongbao'))
      <div class="alert alert-success">{{session('thongbao')}}</div>
      @endif
      <div rel="indulieu">
        <div class="table-responsive">
          <table class="table table-bordered">
            <form method="post">
              @csrf
              @if(Auth::user()->quyen != 3)
              <thead>
                <tr>
                  <th>Mã cá nhân</th>
                  <th>Họ và tên</th>
                  <th>Lớp</th>
                  <th>Quyền</th>
                  <th>Chi tiết</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
              </thead>
              <tbody>
                @foreach($dstv as $row)
                <tr>
                  <td>{{ $row->ma_thanhvien }}</td>
                  <td>{{ $row->ten_thanhvien }}</td>
                  <td>{{ $row->lop }}</td>
                  <td>
                    @if($row->quyen == 1) {{'Thư ký'}}  
                    @elseif($row->quyen == 2) {{'Giáo viên'}} 
                    @elseif($row->quyen == 3) {{'Sinh viên'}} 
                    @endif
                  </td>
                  <td>
                    <span data-id="{{ $row->id }}" class="fa fa-search" rel="chitiettv"></span>
                  </td>
                  <td>
                    @if($row->quyen != 1)<a href="{{ asset('thanhvien/sua_thanhvien/'.$row->id)}}"><span class="fa fa-pencil"></span></a>
                    @elseif(Auth::user()->id == $row->id)<a href="{{ asset('thanhvien/sua_thanhvien/'.$row->id)}}"><span class="fa fa-pencil"></span></a>
                    @endif
                  </td>
                  <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('thanhvien/xoa_thanhvien/'.$row->id)}}"><span class="fa fa-times"></span></a></td>
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
                @foreach($dstv as $row)
                <tr>
                  <td>{{ $row->ma_thanhvien }}</td>
                  <td>{{ $row->ten_thanhvien }}</td>
                  <td>{{ $row->lop }}</td>
                  <td>
                    @if($row->quyen == 1) {{'Thư ký'}}  
                    @elseif($row->quyen == 2) {{'Giáo viên'}} 
                    @elseif($row->quyen == 3) {{'Sinh viên'}} 
                    @endif
                  </td>
                  <td><span data-id="{{ $row->id }}" class="fa fa-search" rel="chitiettv"></span></td>
                </tr>
                @endforeach
              </tbody>
              @endif
              
            </form>
          </table>
        </div>
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4" style="margin-top: 10px;">
            {{ $dstv->links() }}
          </div>
          <div class="col-md-4"></div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Popup -->
<div class="modal fade" id="myModal" role="dialog">
</div>
<!-- End Popup -->
@endsection
@section('script')
<script type="text/javascript">
  $(document).ready(function(){

    $('[rel="submit"]').click(function(){

      var select = $('#select select');
      var obj = {};
      for(var i = 0; i < select.length; i++){
        obj[$(select[i]).attr('name')] = $(select[i]).val();
      }

      $.ajax({
        url: "{{ url('/ajax/tv') }}",
        data: obj
      }).done(function(data){
        $('[rel="indulieu"]').html(data);
      });

    });

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
@stop
