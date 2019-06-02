@extends('layout/master')
@section('title','Trang chủ')
@section('content')


<div class="row">
  <h4 class="fix-title">
    Trang chủ
    <small>Quản lý khóa luận tốt nghiệp</small>
  </h4>
</div>

<!-- Your Page Content Here -->

<!-- Master -->

<div class="row">
  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <a href="{{ asset('khoaluan/dskhoaluan') }}"><i class="mdi mdi-cube text-danger icon-lg"></i></a>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Khóa luận</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$kl}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0">
          <i class="mdi mdi-alert-octagon mr-1" aria-hidden="true"></i> Có {{$kl}} khóa luận
        </p>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <a href="{{ asset('qlbaocao/qlbaocao') }}"><i class="mdi mdi-receipt text-warning icon-lg"></i></a>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Báo cáo</p>
            <div class="fluid-container">
              @php $c=0; @endphp
              @php $d=0; @endphp
              @foreach($tk as $bc)
              @if($bc->bao_cao != null)
              @php $c=$c+1; @endphp
              @else
              @php $d=$d+1; @endphp
              @endif
              @endforeach
              <h3 class="font-weight-medium text-right mb-0">{{(int)(100/($c+$d)*$c)}}%</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0">
          <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i> {{(int)(100/($c+$d)*$c)}}% hoàn thành báo cáo
        </p>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        <div class="clearfix">
          <div class="float-left">
            <a href="{{ asset('thanhvien/dsthanhvien') }}"><i class="mdi mdi-account-location text-info icon-lg"></i></a>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Sinh viên</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$tv}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0">
          <i class="mdi mdi-reload mr-1" aria-hidden="true"></i> Có {{$tv}} sinh viên
        </p>
      </div>
    </div>
  </div>

  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
    <div class="card card-statistics">
      <div class="card-body">
        @php $a=0; @endphp
        @foreach($tk as $check)
        @if($check->bao_cao != null && $check->diem1 != null && $check->diem2 != null && $check->diem3 != null && $check->diem4 != null)
        @php $a++; @endphp
        @endif
        @endforeach
        <div class="clearfix">
          <div class="float-left">
            <i class="mdi mdi-poll-box text-success icon-lg"></i>
          </div>
          <div class="float-right">
            <p class="mb-0 text-right">Đã hoàn thành khóa luận</p>
            <div class="fluid-container">
              <h3 class="font-weight-medium text-right mb-0">{{$a}}</h3>
            </div>
          </div>
        </div>
        <p class="text-muted mt-3 mb-0">
          <i class="mdi mdi-calendar mr-1" aria-hidden="true"></i> {{$a}} sinh viên đã hoàn thành khóa luận
        </p>
      </div>
    </div>
  </div>


</div>

<div class="row">
  <div class="col-lg-7 grid-margin stretch-card">
    <!--weather card-->
    <div class="card card-weather">
      <div class="card-body">
        <div class="weather-date-location">
          <h3>Thứ Năm</h3>
          <p class="text-gray">
            <span class="weather-date">{{$ngay}} Tháng {{$thang}}, {{$nam}}</span>
            <span class="weather-location">Hà Nội, Việt Nam</span>
          </p>
        </div>
        <div class="weather-data d-flex">
          <div class="mr-auto">
            <h4 class="display-3">28
              <span class="symbol">&deg;</span>C</h4>
              <p>
                Nhiều mây
              </p>
            </div>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="d-flex weakly-weather">
            <div class="weakly-weather-item">
              <p class="mb-0">
                Chủ Nhật
              </p>
              <i class="mdi mdi-weather-cloudy"></i>
              <p class="mb-0">
                30°
              </p>
            </div>
            <div class="weakly-weather-item">
              <p class="mb-1">
                Thứ Hai
              </p>
              <i class="mdi mdi-weather-hail"></i>
              <p class="mb-0">
                31°
              </p>
            </div>
            <div class="weakly-weather-item">
              <p class="mb-1">
                Thứ Ba
              </p>
              <i class="mdi mdi-weather-partlycloudy"></i>
              <p class="mb-0">
                28°
              </p>
            </div>
            <div class="weakly-weather-item">
              <p class="mb-1">
                Thứ Tư
              </p>
              <i class="mdi mdi-weather-pouring"></i>
              <p class="mb-0">
                30°
              </p>
            </div>
            <div class="weakly-weather-item">
              <p class="mb-1">
                Thứ Năm
              </p>
              <i class="mdi mdi-weather-pouring"></i>
              <p class="mb-0">
                29°
              </p>
            </div>
            <div class="weakly-weather-item">
              <p class="mb-1">
                Thứ Sáu
              </p>
              <i class="mdi mdi-weather-snowy-rainy"></i>
              <p class="mb-0">
                31°
              </p>
            </div>
            <div class="weakly-weather-item">
              <p class="mb-1">
                Thứ Bảy
              </p>
              <i class="mdi mdi-weather-snowy"></i>
              <p class="mb-0">
                32°
              </p>
            </div>
          </div>
        </div>
      </div>
      <!--weather card ends-->
    </div>
    <div class="col-lg-5 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title mb-4">Liên hệ thư ký</h5>
          <div class="fluid-container">
            @foreach($lh as $thuky)
            <div class="row ticket-card mt-3 pb-2 border-bottom pb-3 mb-3">
              <div class="col-md-1">
                <img class="img-sm rounded-circle mb-4 mb-md-0" src="{{ asset('lib/storage/app/avatar/'.$thuky->anh_thanhvien) }}" alt="profile image">
              </div>
              <div class="ticket-details col-md-9">
                <div class="d-flex">
                  <p class="text-dark font-weight-semibold mr-2 mb-0 no-wrap" style="margin-left: 10px;">{{ $thuky->ten_thanhvien }}</p>
                  <p class="text-primary mr-1 mb-0">[{{ $thuky->ma_thanhvien }}]</p>
                </div>
                <p class="text-gray ellipsis mb-2" style="margin-left: 10px;">Số điện thoại: 0{{ $thuky->so_dienthoai }}</p>
                <p class="text-gray ellipsis mb-0" style="margin-left: 10px;">Email: {{ $thuky->email }}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h2 class="card-title text-primary">Lịch bảo vệ hôm nay</h2>
          <div class="row">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Tên sinh viên</th>
                    <th>Đề tài</th>
                    <th>Thời gian</th>
                    <th>Phòng</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($kla as $kls)
                  @if(date('Y-m-d', strtotime($kls->thoi_gian)) == $l)
                  <tr>
                    <td>{{$kls->thanhvien->ten_thanhvien}}</td>
                    <td>{{$kls->de_tai}}</td>
                    <td>{{date('H:i', strtotime($kls->thoi_gian))}}</td>
                    <td>{{$kls->phong}}</td>
                  </tr>
                  @endif
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>

          <div class="row"></div>

          <h2 class="card-title text-primary fix-p">Lịch bảo vệ ngày mai</h2>
          <div class="row">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Tên sinh viên</th>
                    <th>Đề tài</th>
                    <th>Thời gian</th>
                    <th>Phòng</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($kla as $kls)
                  @if(date('Y-m-d', strtotime($kls->thoi_gian)) == $r)
                  <tr>
                    <td>{{$kls->thanhvien->ten_thanhvien}}</td>
                    <td>{{$kls->de_tai}}</td>
                    <td>{{date('H:i', strtotime($kls->thoi_gian))}}</td>
                    <td>{{$kls->phong}}</td>
                  </tr>
                  @endif
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Master -->
  @endsection

