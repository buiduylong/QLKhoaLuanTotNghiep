<div class="table table-responsive">
  <table class="table table-bordered">
    <thead style="width: 95%;">
      <tr>
        <th>Mã sinh viên</th>
        <th>Tên sinh viên</th>
        <th>Lớp</th>
        <th>Đề tài</th>
        <th>Giáo viên hướng dẫn</th>
        <th>Thời gian đăng ký</th>
        <th>Thời gian bảo vệ</th>
        <th>Điểm</th>
        @if(Auth::user()->quyen == 1)<th>Cập nhật điểm</th>@endif
      </tr>
    </thead>

    <tbody>
      @if($row > 0)
      @foreach($khoaluanlist as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row1))
      @foreach($khoaluanlist1 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row3))
      @foreach($khoaluanlist3 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row4))
      @foreach($khoaluanlist4 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row5))
      @foreach($khoaluanlist5 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row12))
      @foreach($khoaluanlist12 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row13))
      @foreach($khoaluanlist13 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row14))
      @foreach($khoaluanlist14 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row15))
      @foreach($khoaluanlist15 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row34))
      @foreach($khoaluanlist34 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row35))
      @foreach($khoaluanlist35 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row45))
      @foreach($khoaluanlist45 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row123))
      @foreach($khoaluanlist123 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row124))
      @foreach($khoaluanlist124 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row125))
      @foreach($khoaluanlist125 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row134))
      @foreach($khoaluanlist134 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row135))
      @foreach($khoaluanlist135 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row145))
      @foreach($khoaluanlist145 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row345))
      @foreach($khoaluanlist345 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row1234))
      @foreach($khoaluanlist1234 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row1235))
      @foreach($khoaluanlist1235 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @elseif(isset($row1245))
      @foreach($khoaluanlist1245 as $kl)
      @if($kl->huongdan != null && $kl->de_tai != null && $kl->thoi_gian != null)
      <tr>
        <td>{{$kl->thanhvien->ma_thanhvien}}</td>
        <td>{{$kl->thanhvien->ten_thanhvien}}</td>
        <td>{{$kl->thanhvien->lop}}</td>
        <td>{{$kl->de_tai}}</td>
        <td>{{$kl->huongdan->ten_thanhvien}}</td>
        <td>{{ date('d/m/Y', strtotime($kl->created_at))}}</td>
        <td>{{ date('d/m/Y H:i', strtotime($kl->thoi_gian))}}</td>
        <td>{{$kl->diem1*($kl->ts1/100)+$kl->diem2*($kl->ts2/100)+$kl->diem3*($kl->ts3/100)+$kl->diem4*($kl->ts4/100)}}</td>
        @if(Auth::user()->quyen == 1) <td><a><span class="mdi mdi-refresh" data-id="{{$kl->id_khoaluan}}" rel="capnhatdiem"></span></a></td> @endif
      </tr>
      @endif
      @endforeach

      @endif
    </tbody>
  </table>
</div>

<!-- Popup -->
<div class="modal fade" id="myModal" role="dialog">
</div>
<!-- End Popup -->

<script type="text/javascript">
  $(document).ready(function(){

    $('[rel="capnhatdiem"]').click(function(){

      let id = $(this).data('id');

      $.ajax({
        url: "{{ url('/ajax/capnhatdiem') }}",
        data: { id: id }
      }).done(function(data){
        console.log(data)
        $('#myModal').html(data);
        $('#myModal').modal('show');
      });

    });
  });
</script>

     