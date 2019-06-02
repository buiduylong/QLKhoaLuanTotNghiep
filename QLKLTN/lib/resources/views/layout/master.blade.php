<!DOCTYPE html>
<html>
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>@yield('title') - Hệ thống quản lý KLTN</title>
  <!-- plugins:css -->
  <base href="{{ asset('public/layout')}}/">
  <link rel="stylesheet" href="vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.addons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png"/>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/css/bootstrap-select.min.css" />
  <style type="text/css">
  @media print {
    #printbtn {
      display :  none;
    }

    #cancelbtn {
      display: none;
    }
  }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>

</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
        <a class="navbar-brand brand-logo" href="{{ asset('trangchu')}}">
          <img src="images/logo1.png" alt="logo" />
        </a>
        <a class="navbar-brand brand-logo-mini" href="{{ asset('trangchu')}}">
          <img src="images/logo-mini.svg" alt="logo" />
        </a>
      </div>

      <div class="navbar-menu-wrapper d-flex align-items-center">
        <ul class="navbar-nav navbar-nav-right">
          @if(Auth::user()->quyen == 1)
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <i class="mdi mdi-file-document-box"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
              <div class="dropdown-item">
                <p class="mb-0" style="margin-left: 25px;">Quy trình thực hiện
                </p>
              </div>

              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item" href="{{ asset('khoaluan/dangkykl')}}">
                <i class="menu-icon fa fa-pencil-square"></i>
                <span class="menu-title">1. Đăng ký KLTN</span>
              </a>
              
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item" href="{{ asset('khoaluan/xacnhankl')}}">
                <i class="menu-icon fa fa-check-circle"></i>
                <span class="menu-title">2. Xác nhận bảo vệ KLTN</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item" href="{{ asset('qlbaocao/qlbaocao') }}">
                <i class="menu-icon fa fa-upload"></i>
                <span class="menu-title">3. Đăng tải báo cáo</span>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item" href="{{ asset('khoaluan/dskhoaluan')}}">
                <i class="menu-icon fa fa-eraser"></i>
                <span class="menu-title">4. Cập nhật điểm</span>
              </a>
              <div class="dropdown-divider"></div>
              
            </div>
          </li>
          @endif
          @if(Auth::user()->quyen != 2)
          <li class="nav-item dropdown">
            <a onclick="viewMessage()" class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
              <i class="mdi mdi-bell"></i>
              @if($dem > 0)
              <span id="so_tb" class="count">{{ $dem }}</span>
              @endif
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <a class="dropdown-item">
                <p class="mb-0 font-weight-normal float-right" align="center">Bạn có {{ $dem }} thông báo mới
                </p>
              </a>
              @if(Auth::user()->quyen != 2)
              @foreach($tb as $thongbao)
              <div class="dropdown-divider"></div>
              <div class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-check-circle-outline mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <a  href="{{asset('khoaluan/xacnhankl')}}"><h6 class="preview-subject font-weight-medium text-dark">{{ $thongbao->noi_dung }}</h6></a>
                  @php
                  $date1 = $thongbao->created_at;
                  $date2 = $time;
                  $diff = abs(strtotime($date2) - strtotime($date1));

                  $years = floor($diff / (365*60*60*24));
                  $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                  $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24) / (60*60*24));
                  $hours = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24) / (60*60));
                  $minutes = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60) / 60);
                  $seconds = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24 - $days*60*60*24 - $hours*60*60 - $minutes*60));
                  @endphp
                  <p class="font-weight-light small-text">
                    @if($days > 0 && $hours > 0 && $minutes > 0)
                    {{$days}} ngày {{$hours}} giờ {{$minutes}} phút trước
                    @elseif($hours > 0 && $minutes > 0)
                    {{$hours}} giờ {{$minutes}} phút trước
                    @elseif($minutes > 0)
                    {{$minutes}} phút trước
                    @elseif($seconds > 0 && $seconds < 61)
                    Vài giây trước
                    @endif
                  </p>
                </div>
              </div>
              @endforeach
              
              @endif
            </div>
          </li>
          @endif
          <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
              <span class="profile-text">Xin chào, {{ Auth::user()->ten_thanhvien }}</span>
              <img class="img-xs rounded-circle" src="{{ asset('lib/storage/app/avatar/'.Auth::user()->anh_thanhvien) }}" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
              <div class="profile-image" align="center">
                <img class="profile-user-img img-responsive img-circle" src="{{ asset('lib/storage/app/avatar/'.Auth::user()->anh_thanhvien) }}" alt="profile image">
                <p></p>
                <p class="profile-name" align="center">{{ Auth::user()->ten_thanhvien }}</p>
                <p align="center">
                  <small class="designation text-muted">
                    @if(Auth::user()->quyen == 1){{ 'Thư ký' }}
                    @elseif(Auth::user()->quyen == 2){{ 'Giáo viên' }}
                    @else{{ 'Sinh viên' }}
                    @endif
                  </small>
                </p>                    
              </div>
              @if(Auth::user()->quyen == 3)
              <a class="dropdown-item mt-2" align="center" href="{{ asset('khoaluan/khoaluancanhan') }}">
                Khóa luận của bạn
              </a>
              <a class="dropdown-item" align="center" href="{{ asset('thanhvien/sua_thanhvien/'.Auth::user()->id) }}">
                Thông tin cá nhân
              </a>              
              <a class="dropdown-item" align="center" href="{{asset('logout')}}">
                Đăng xuất
              </a>
              @elseif(Auth::user()->quyen == 2)
              <a class="dropdown-item mt-2" align="center" href="{{ asset('khoaluan/gvhdkhoaluan') }}">
                Khóa luận đang hướng dẫn
              </a>
              <a class="dropdown-item" align="center" href="{{ asset('thanhvien/sua_thanhvien/'.Auth::user()->id) }}">
                Thông tin cá nhân
              </a>              
              <a class="dropdown-item" align="center" href="{{asset('logout')}}">
                Đăng xuất
              </a>
              @else
              <a class="dropdown-item" align="center" href="{{ asset('thanhvien/sua_thanhvien/'.Auth::user()->id) }}">
                Thông tin cá nhân
              </a>              
              <a class="dropdown-item" align="center" href="{{asset('logout')}}">
                Đăng xuất
              </a>
              @endif
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="{{ asset('lib/storage/app/avatar/'.Auth::user()->anh_thanhvien) }}" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">{{ Auth::user()->ten_thanhvien }}</p>
                  <div>
                    <small class="designation text-muted">@if(Auth::user()->quyen == 1){{ 'Thư ký' }}
                      @elseif(Auth::user()->quyen == 2){{ 'Giáo viên' }}
                      @else{{ 'Sinh viên' }}
                    @endif</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>

          <form action="{{asset('timkiem/')}}" role="search" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="result" class="form-control" placeholder="Search...">
              <span class="input-group-btn">
                <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
          </form>

          @if(Auth::user()->quyen == 1)
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
              <i class="menu-icon fa fa-user"></i>
              <span class="menu-title">Quản lý thành viên</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic1">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('thanhvien/dsthanhvien')}}">Danh sách thành viên</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('thanhvien/them_thanhvien')}}">Thêm thành viên</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('thanhvien/import_thanhvien')}}">Import file danh sách</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
              <i class="menu-icon fa fa-book"></i>
              <span class="menu-title">Quản lý KLTN</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic2">
              <ul class="nav flex-column sub-menu">
                @if(Auth::user()->quyen == 3)
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('khoaluan/dangkykl')}}">Đăng kí KLTN</a>
                </li>
                @endif
                @if(Auth::user()->quyen == 1)
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('khoaluan/xacnhankl')}}">Xác nhận KLTN</a>
                </li>
                @endif
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('khoaluan/dskhoaluan')}}">Danh sách KLTN</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ asset('detai/dsdetai') }}">
              <i class="menu-icon fa fa-briefcase"></i>
              <span class="menu-title">Danh sách đề tài gợi ý</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic4" aria-expanded="false" aria-controls="ui-basic4">
              <i class="menu-icon fa fa-group"></i>
              <span class="menu-title">Quản lý hội đồng chấm</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic4">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('qlhoidong/them_tvhoidong')}}">Thêm thành viên hội đồng</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('qlhoidong/thietlap_hoidong')}}">Thiết lập hội đồng</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('qlhoidong/dshoidong')}}">Danh sách thành viên</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('qlhoidong/danhsachhoidong')}}">Danh sách hội đồng</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic5" aria-expanded="false" aria-controls="ui-basic5">
              <i class="menu-icon mdi mdi-24px mdi-file-word"></i>
              <span class="menu-title">Quản lý biên bản</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic5">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('bienban/bienban_danhgia') }}">Bản đánh giá</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('bienban/bienban_diemkl') }}">Bảng điểm KLTN</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('bienban/bienban_chamdiem') }}">Biên bản chấm điểm</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ asset('qlbaocao/qlbaocao') }}">
              <i class="menu-icon fa fa-folder-open"></i>
              <span class="menu-title">Quản lý báo cáo</span>
            </a>
          </li>
          
          @if(Auth::user()->quyen == 1)
          <li class="nav-item">
            <a class="nav-link" href="{{ asset('qlkhoa/qlkhoa') }}">
              <i class="menu-icon fa fa-university"></i>
              <span class="menu-title">Quản lý khoa</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ asset('qlnganh/qlnganh') }}">
              <i class="menu-icon mdi mdi-24px mdi-buffer"></i>
              <span class="menu-title">Quản lý ngành</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{ asset('qlbomon/') }}">
              <i class="menu-icon mdi mdi-24px mdi-library"></i>
              <span class="menu-title">Quản lý bộ môn</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ asset('qlnam/qlnam') }}">
              <i class="menu-icon mdi mdi-24px mdi-calendar"></i>
              <span class="menu-title">Quản lý năm</span>
            </a>
          </li>
          @endif
          
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic6">
              <i class="menu-icon mdi mdi-24px mdi-chart-pie"></i>
              <span class="menu-title">Thống kê</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic6">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('thongke/thongkebieudo') }}">Thống kê dạng biểu đồ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('thongke/thongkebang') }}">Thống kê dạng bảng</a>
                </li>
              </ul>
            </div>
          </li>
          @endif

          @if(Auth::user()->quyen == 2)
          <li class="nav-item">
            <a class="nav-link" href="{{ asset('thanhvien/dsthanhvien')}}">
              <i class="menu-icon fa fa-user"></i>
              <span class="menu-title">Danh sách thành viên</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
              <i class="menu-icon fa fa-briefcase"></i>
              <span class="menu-title">Quản lý đề tài</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic3">
              <ul class="nav flex-column sub-menu">
                @if(Auth::user()->quyen == 2)
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('detai/them_detai')}}">Thêm đề tài gợi ý</a>
                </li>
                @endif
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('detai/dsdetai')}}">Danh sách đề tài gợi ý</a>
                </li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ asset('khoaluan/dskhoaluan')}}">
              <i class="menu-icon fa fa-book"></i>
              <span class="menu-title">Danh sách KLTN</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic6" aria-expanded="false" aria-controls="ui-basic6">
              <i class="menu-icon mdi mdi-24px mdi-chart-pie"></i>
              <span class="menu-title">Thống kê</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic6">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('thongke/thongkebieudo') }}">Thống kê dạng biểu đồ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ asset('thongke/thongkebang') }}">Thống kê dạng bảng</a>
                </li>
              </ul>
            </div>
          </li>
          @endif

          @if(Auth::user()->quyen == 3)
          <li class="nav-item">
            <a class="nav-link" href="{{ asset('khoaluan/dangkykl')}}">
              <i class="menu-icon fa fa-pencil"></i>
              <span class="menu-title">Đăng ký KLTN</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ asset('khoaluan/dskhoaluan')}}">
              <i class="menu-icon fa fa-book"></i>
              <span class="menu-title">Danh sách KLTN</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ asset('detai/dsdetai')}}">
              <i class="menu-icon fa fa-briefcase"></i>
              <span class="menu-title">Danh sách đề tài gợi ý</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="{{ asset('qlbaocao/qlbaocao') }}">
              <i class="menu-icon fa fa-folder-open"></i>
              <span class="menu-title">Tài liệu tham khảo</span>
            </a>
          </li>
          
          @endif
        </ul>
      </nav>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">

          <!-- Master -->

          @yield('content')

          <!-- End master -->

        </div>       

        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="container-fluid clearfix">
            <span class="text d-block text-center text-sm-left d-sm-inline-block">Copyright © 2019
              <a href="http://thanglong.edu.vn/" target="_blank">Trường Đại học Thăng Long</a>. Bản quyền thuộc về <strong>Bùi Duy Long</strong>.</span>
              <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"><strong>Khóa luận tốt nghiệp</strong></span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <script src="vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <script src="js/chart.js"></script>
    <script src="js/maps.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="js/jquery.loadingModal.min.js"></script>
    <script src="js/loader.js"></script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    <!-- End custom js for this page-->
    @yield('script')
    <script>
      function viewMessage()
      {
        dataString = [
        @foreach($tb as $thongbao)
        {{ $thongbao->id_thongbao }},
        @endforeach
        ]; 
        var jsonString = JSON.stringify(dataString);

        $.ajax({
          type: "get",
          url: "{{ asset('/ajax/trangthai') }}",
          data: {data : jsonString},
          dataType: 'text',
          success: function(data) {
            if(data=="OK")
            {
             $("#so_tb").text("").removeClass("count");
           }
         }
       });
      }
    </script>
  </body>

  </html>
