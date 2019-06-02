@extends('layout/master')
@section('title', 'Tìm kiếm thành viên')
@section('content')
<div class="row">
  <h4 class="fix-title">
    Tìm kiếm thành viên
    <small>Danh sách tìm kiếm thành viên</small>
  </h4>
</div>

<div class="col-lg-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <div class="row">
        <div class="col-md-2">
          <h4 class="card-title">Danh sách tìm kiếm</h4>
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

        <div class="col-md-1"></div>

        <div id="select" class="col-md-5">
          <div class="row">
            <div class="col-md-5">
              <div class="form-group">
                <select name="khoa" rel="khoa" class="form-control">
                  <option value="unselect" selected="">Lựa chọn khoa</option>
                  @foreach($khoalist as $khoa)
                  <option value="{{$khoa->id_khoa}}">{{$khoa->ten_khoa}}</option>
                  @endforeach
                </select>
              </div>
            </div>
            <div class="col-md-5">
              <div class="form-group">
                <select name="trang_thai" rel="trang_thai" class="form-control">
                  <option value="unselect" selected="">Trạng thái sinh viên</option>
                  <option value="1">Đã đăng ký</option>
                  <option value="2">Chưa đăng ký</option>
                </select>
              </div> 
            </div>
            <div class="col-md-2">
              <button type="submit" rel="submit" class="btn btn-primary">Lọc</button>
            </div>
          </div>          
        </div>
      </div>

      <div rel="indulieu">
        <div class="table-responsive">
          <table class="table table-bordered">
            <form method="get">
              @if(Auth::user()->quyen != 3)
              <thead>
                <tr>
                  <th>Mã cá nhân</th>
                  <th>Họ và tên</th>
                  <th>Quyền</th>
                  <th>Chi tiết</th>
                  <th>Sửa</th>
                  @if(Auth::user()->quyen == 1)<th>Xóa</th> @endif
                </tr>
              </thead>
              <tbody>
                @foreach($items2 as $row)
                <tr>
                  <td>{{$row->ma_thanhvien}}</td>
                  <td>{{$row->ten_thanhvien}}</td>
                  <td>
                    @if($row->quyen == 1) {{'Thư ký'}}  
                    @elseif($row->quyen == 2) {{'Giáo viên'}} 
                    @elseif($row->quyen == 3) {{'Sinh viên'}} 
                    @endif
                  </td>
                  <td><span data-id="{{ $row->id }}" class="fa fa-search" rel="chitiettv"></span></td>
                  <td>
                    @if($row->quyen != 1)<a href="{{ asset('thanhvien/sua_thanhvien/'.$row->id)}}"><span class="fa fa-pencil"></span></a>
                    @elseif(Auth::user()->id == $row->id)<a href="{{ asset('thanhvien/sua_thanhvien/'.$row->id)}}"><span class="fa fa-pencil"></span>
                      @endif
                    </td>
                    @if(Auth::user()->quyen == 1)
                    <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('thanhvien/xoa_thanhvien/'.$row->id)}}"><span class="fa fa-times"></span></a>
                    </td>
                    @endif
                  </tr>
                  @endforeach
                </tbody>

                @else
                <thead>
                  <tr>
                    <th>Mã cá nhân</th>
                    <th>Họ và tên</th>
                    <th>Quyền</th>
                    <th>Chi tiết</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($dstv as $row)
                  <tr>
                    <td>{{ $row->ma_thanhvien }}</td>
                    <td>{{ $row->ten_thanhvien }}</td>
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
  @endsection
  