<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Mã giáo viên</th>
        <th>Tên giáo viên</th>
        <th>Khoa</th>
        <th>Kỳ</th>
        <th>Nhóm</th>
        <th>Năm</th>
        <th>Sửa</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
      @if($row > 0)
      @foreach($hoidonglist as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row1))
      @foreach($hoidonglist1 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row3))
      @foreach($hoidonglist3 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row4))
      @foreach($hoidonglist4 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row5))
      @foreach($hoidonglist5 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row12))
      @foreach($hoidonglist12 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row13))
      @foreach($hoidonglist13 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row14))
      @foreach($hoidonglist14 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row15))
      @foreach($hoidonglist15 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row34))
      @foreach($hoidonglist34 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row35))
      @foreach($hoidonglist35 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row45))
      @foreach($hoidonglist45 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row123))
      @foreach($hoidonglist123 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row124))
      @foreach($hoidonglist124 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row125))
      @foreach($hoidonglist125 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row134))
      @foreach($hoidonglist134 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row135))
      @foreach($hoidonglist135 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row145))
      @foreach($hoidonglist145 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row345))
      @foreach($hoidonglist345 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row1234))
      @foreach($hoidonglist1234 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row1235))
      @foreach($hoidonglist1235 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @elseif(isset($row1245))
      @foreach($hoidonglist1245 as $hoidong)
      <tr role="row">
        <td>{{$hoidong->thanhvien->ma_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->ten_thanhvien}}</td>
        <td>{{$hoidong->thanhvien->khoa->ten_khoa}}</td>
        <td>
          @if($hoidong->ky == 1) Kỳ I 
          @elseif($hoidong->ky == 2) Kỳ II 
          @else Kỳ III 
          @endif
        </td>
        <td>
          @if($hoidong->nhom == 1) Nhóm 1 @endif 
          @if($hoidong->nhom == 2) Nhóm 2 @endif 
          @if($hoidong->nhom == 3) Nhóm 3 @endif
        </td>
        <td>{{$hoidong->nam->nam}}</td>
        <td><a><span class="fa fa-pencil" data-id="{{$hoidong->id_hoidong}}" rel="suathongtin_hoidong"></span></a></td>
        <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa hay không?')" href="{{asset('qlhoidong/xoa_tvhd/'.$hoidong->id_hoidong)}}"><span class="fa fa-times"></span></a></td>
      </tr>
      @endforeach

      @endif
     {{--  @endif --}}
    </tbody>

    <!-- Popup -->
    <div class="modal fade" id="myModal" role="dialog">
    </div>
    <!-- End Popup -->
  </table>
</div>

<script type="text/javascript">
  $(document).ready(function(){

    $('[rel="suathongtin_hoidong"]').click(function(){

      let id = $(this).data('id');

      $.ajax({
        url: "{{ url('/ajax/suathongtin_hoidong') }}",
        data: { id: id }
      }).done(function(data){
        console.log(data)
        $('#myModal').html(data);
        $('#myModal').modal('show');
      });

    });
  });
</script>