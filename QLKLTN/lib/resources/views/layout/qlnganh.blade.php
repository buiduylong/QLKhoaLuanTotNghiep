@extends('layout/master')
@section('title', 'Quản lý ngành')
@section('content')

<div class="row">
  <h4 class="fix-title">
   Quản lý ngành
   <small>Các ngành có trong mỗi khoa ở Đại học Thăng Long</small>
 </h4>
</div>

<div class="row">
  <div class="box">
    <div class="form-control">
      <h4>Thêm ngành mới</h4>                  
      <form role="form" method="post">              
        @csrf
        <div class="form-group">
          <label class="col-md-2 fix-label">Khoa</label>

          <div class="col-md-10 fix-col">               
            <select class="form-control" name="khoa_nganh" required>
              <option value="unselect">Lựa chọn khoa</option>
              @foreach($khoalist as $khoa)
              <option value="{{$khoa->id_khoa}}">{{$khoa->ten_khoa}}</option>
              @endforeach
            </select>
            @if(session('thongbao2'))
            <div class="alert alert-danger">{{session('thongbao2')}}</div>
            @endif
          </div>
        </div>

        <div class="form-group">
          <label class="col-md-2 fix-label">Tên ngành</label>

          <div class="col-md-10 fix-col">
            <input type="text" class="form-control" name="ten_nganh" placeholder="Nhập ngành mới" value="{{old('ten_nganh')}}">
            @if($errors->has('ten_nganh'))
            <div class="alert alert-danger">{{$errors->first('ten_nganh')}}</div>
            @endif
          </div>
        </div>
        <button type="submit" class="btn btn-success">Thêm</button>
        <button type="reset" class="btn btn-primary">Làm mới</button>
      </form>
    </div>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <div class="row">
      <div class="col-md-4">
        <h3 class="fix-title">Các ngành hiện có</h3>
      </div>
      <div class="col-md-8" id="select">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <select class="form-control" name="khoa_nganh" rel="khoa">
                <option value="unselect" selected="">Lựa chọn khoa</option>
                @foreach($khoalist as $khoa)
                <option value="{{$khoa->id_khoa}}">{{$khoa->ten_khoa}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <button type="submit" rel="submit" class="btn btn-primary">Lọc</button>
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
          <thead>
            <tr>
              <th>Ngành</th>
              <th>Thuộc khoa</th>
              <th>Sửa</th>                        
              <th>Xóa</th>
            </tr>
          </thead>

          <tbody>
            @foreach($nganhlist as $nganh)
            <tr>
              <td>{{ $nganh->ten_nganh }}</td>
              <td>{{ $nganh->ten_khoa }}</td>
              <td><a href="{{ asset('qlnganh/sua_nganh/'.$nganh->id_nganh) }}"><span class="fa fa-pencil"></span></a></td>
              <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('qlnganh/xoa_nganh/'.$nganh->id_nganh) }}"><span class="fa fa-times"></span></a></td>
            </tr>
            @endforeach   
          </tbody>

          <!-- Popup -->

        </table>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="margin-top: 10px;">
          {{ $nganhlist->links() }}
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>
    
  </div>
</div>
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
        url: "{{ url('/ajax/khoa') }}",
        data: obj
      }).done(function(data){
        $('[rel="indulieu"]').html(data);
      });

    });

  });

</script>
@endsection