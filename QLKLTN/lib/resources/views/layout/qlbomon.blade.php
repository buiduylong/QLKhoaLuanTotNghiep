@extends('layout/master')
@section('title', 'Quản lý bộ môn')
@section('content')

<div class="row">
  <h3 class="fix-title">
    Quản lý bộ môn
    <small>Các bộ môn có trong Đại học Thăng Long</small>
  </h3>
</div>

<section class="content">
  <!-- Your Page Content Here -->

  <!-- Master -->
  <div class="row">
    <div class="box">
      <div class="form-control">
        <h4>Thêm bộ môn mới</h4>                  
        <form method="post">              
          @csrf
          <div class="form-group">
            <label class="col-md-2 fix-label">Tên bộ môn</label>

            <div class="col-md-10 fix-col">
              <input type="text" class="form-control" name="ten_bomon" placeholder="Nhập khoa mới" value="{{old('ten_bomon')}}">
              @if($errors->has('ten_bomon'))
              <div class="alert alert-danger">{{$errors->first('ten_bomon')}}</div>
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
        <h3 class="fix-title">Các bộ môn hiện có</h3>
      </div>
      @if(session('thongbao'))
      <div class="alert alert-success">{{session('thongbao')}}</div>
      @endif
      <div class="table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Bộ môn</th>
              <th>Sửa</th>                        
              <th>Xóa</th>
            </tr>
          </thead>
          <tbody>
            @foreach($bomonlist as $bomon)
            <tr>
              <td>{{ $bomon->ten_bomon }}</td>
              <td><a href="{{ asset('qlbomon/sua_bomon/'.$bomon->id_bomon) }}"><span class="fa fa-pencil"></span></a></td>
              <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{ asset('qlbomon/xoa_bomon/'.$bomon->id_bomon) }}"><span class="fa fa-times"></span></a></td>
            </tr>
            @endforeach        
          </tbody>

          <!-- Popup -->

        </table>
      </div>
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" style="margin-top: 10px;">
          {{ $bomonlist->links() }}
        </div>
        <div class="col-md-4"></div>
      </div>                  
    </div>
  </div>

  <!-- End Master -->

</section>
@endsection