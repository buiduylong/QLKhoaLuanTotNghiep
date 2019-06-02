@extends('layout/master')
@section('title', 'Quản lý khoa')
@section('content')

<div class="row">
  <h3 class="fix-title">
    Quản lý khoa
    <small>Các khoa có trong Đại học Thăng Long</small>
  </h3>
</div>

<section class="content">
  <!-- Your Page Content Here -->

  <!-- Master -->
  <div class="row">
    <div class="box">
      <div class="form-control">
        <h4>Thêm khoa mới</h4>                  
        <form method="post">              
          @csrf
          <div class="form-group">
            <label class="col-md-2 fix-label">Tên khoa</label>

            <div class="col-md-10 fix-col">
              <input type="text" class="form-control" name="ten_khoa" placeholder="Nhập khoa mới" value="{{old('ten_khoa')}}">
              @if($errors->has('ten_khoa'))
              <div class="alert alert-danger">{{$errors->first('ten_khoa')}}</div>
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
        <h3 class="fix-title">Các khoa hiện có</h3>
      </div>
      @if(session('thongbao'))
      <div class="alert alert-success">{{session('thongbao')}}</div>
      @endif
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Khoa</th>
              <th>Sửa</th>                        
              <th>Xóa</th>
            </tr>
          </thead>
          <tbody>
            @foreach($khoalist as $khoa)
            <tr>
              <td>{{ $khoa->ten_khoa }}</td>
              <td><a href="{{ asset('qlkhoa/sua_khoa/'.$khoa->id_khoa) }}"><span class="fa fa-pencil"></span></a></td>
              <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('qlkhoa/xoa_khoa/'.$khoa->id_khoa) }}"><span class="fa fa-times"></span></a></td>
            </tr>
            @endforeach        
          </tbody>

          <!-- Popup -->

        </table>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="margin-top: 10px;">
          {{ $khoalist->links() }}
        </div>
        <div class="col-md-4"></div>
      </div>                  
    </div>
  </div>

  <!-- End Master -->

</section>
@endsection