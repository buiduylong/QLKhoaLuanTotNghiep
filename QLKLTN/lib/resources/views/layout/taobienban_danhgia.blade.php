<!DOCTYPE html>
<html>
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tạo biên bản đánh giá KLTN | Hệ thống quản lý KLTN</title>
	<!-- plugins:css -->
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
	<link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
	<div class="container-scroller">
		<!-- partial:../../partials/_navbar.html -->
		<nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
			<div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
				<a class="navbar-brand brand-logo" href="trangchu.html">
					<img src="images/logo1.png" alt="logo" />
				</a>
				<a class="navbar-brand brand-logo-mini" href="trangchu.html">
					<img src="images/logo-mini.svg" alt="logo" />
				</a>
			</div>

			<div class="navbar-menu-wrapper d-flex align-items-center">
				<ul class="navbar-nav navbar-nav-left header-links d-none d-md-flex">
					<li class="nav-item">
						<a href="trangchu.html" class="nav-link">Trang chủ</a>
					</li>
				</ul>
				<ul class="navbar-nav navbar-nav-right">
					<li class="nav-item dropdown">
						<a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
							<i class="mdi mdi-file-document-box"></i>
							<span class="count">7</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
							<div class="dropdown-item">
								<p class="mb-0 font-weight-normal float-left">You have 7 unread mails
								</p>
								<span class="badge badge-info badge-pill float-right">View all</span>
							</div>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<img src="images/faces/face4.jpg" alt="image" class="profile-pic">
								</div>
								<div class="preview-item-content flex-grow">
									<h6 class="preview-subject ellipsis font-weight-medium text-dark">David Grey
										<span class="float-right font-weight-light small-text">1 Minutes ago</span>
									</h6>
									<p class="font-weight-light small-text">
										The meeting is cancelled
									</p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<img src="images/faces/face2.jpg" alt="image" class="profile-pic">
								</div>
								<div class="preview-item-content flex-grow">
									<h6 class="preview-subject ellipsis font-weight-medium text-dark">Tim Cook
										<span class="float-right font-weight-light small-text">15 Minutes ago</span>
									</h6>
									<p class="font-weight-light small-text">
										New product launch
									</p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<img src="images/faces/face3.jpg" alt="image" class="profile-pic">
								</div>
								<div class="preview-item-content flex-grow">
									<h6 class="preview-subject ellipsis font-weight-medium text-dark"> Johnson
										<span class="float-right font-weight-light small-text">18 Minutes ago</span>
									</h6>
									<p class="font-weight-light small-text">
										Upcoming board meeting
									</p>
								</div>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown">
						<a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-toggle="dropdown">
							<i class="mdi mdi-bell"></i>
							<span class="count">4</span>
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
							<a class="dropdown-item">
								<p class="mb-0 font-weight-normal float-left">You have 4 new notifications
								</p>
								<span class="badge badge-pill badge-warning float-right">View all</span>
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-success">
										<i class="mdi mdi-alert-circle-outline mx-0"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<h6 class="preview-subject font-weight-medium text-dark">Application Error</h6>
									<p class="font-weight-light small-text">
										Just now
									</p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-warning">
										<i class="mdi mdi-comment-text-outline mx-0"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<h6 class="preview-subject font-weight-medium text-dark">Settings</h6>
									<p class="font-weight-light small-text">
										Private message
									</p>
								</div>
							</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item preview-item">
								<div class="preview-thumbnail">
									<div class="preview-icon bg-info">
										<i class="mdi mdi-email-outline mx-0"></i>
									</div>
								</div>
								<div class="preview-item-content">
									<h6 class="preview-subject font-weight-medium text-dark">New user registration</h6>
									<p class="font-weight-light small-text">
										2 days ago
									</p>
								</div>
							</a>
						</div>
					</li>
					<li class="nav-item dropdown d-none d-xl-inline-block">
						<a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
							<span class="profile-text">Xin chào, Bùi Duy Long</span>
							<img class="img-xs rounded-circle" src="images/faces/face1.jpg" alt="Profile image">
						</a>
						<div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
							<div class="profile-image" align="center">
								<img class="rounded-circle" src="images/faces/face1.jpg" alt="profile image">
								<p class="profile-name " align="center">Bùi Duy Long</p>
								<p align="center"><small class="designation text-muted">Thư Ký</small></p>                    
							</div>
							<a class="dropdown-item mt-2" href="thongtin_thanhvien.html">
								Thông tin cá nhân
							</a>              
							<a class="dropdown-item" href="#">
								Đăng xuất
							</a>
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
									<img src="images/faces/face1.jpg" alt="profile image">
								</div>
								<div class="text-wrapper">
									<p class="profile-name">Bùi Duy Long</p>
									<div>
										<small class="designation text-muted">Thư Ký</small>
										<span class="status-indicator online"></span>
									</div>
								</div>
							</div>
						</div>
					</li>

					<form action="" role="search" method="get" class="sidebar-form">
						<div class="input-group">
							<input type="text" name="result" class="form-control" placeholder="Search...">
							<span class="input-group-btn">
								<button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
								</button>
							</span>
						</div>
					</form>

					<li align="center">Quy trình thực hiện</li>

					<li class="nav-item">
						<a class="nav-link" href="dangkykl.html">
							<i class="menu-icon fa fa-pencil-square"></i>
							<span class="menu-title">1. Đăng ký KLTN</span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="xacnhankl.html">
							<i class="menu-icon fa fa-check-circle"></i>
							<span class="menu-title">2. Xác nhận bảo vệ KLTN</span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="sua_baocao.html">
							<i class="menu-icon fa fa-upload"></i>
							<span class="menu-title">3. Đăng tải báo cáo</span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="dskhoaluan.html">
							<i class="menu-icon fa fa-eraser"></i>
							<span class="menu-title">4. Cập nhật điểm</span>
						</a>
					</li>

					<li align="center">Các chức năng</li>

					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#ui-basic1" aria-expanded="false" aria-controls="ui-basic1">
							<i class="menu-icon fa fa-user"></i>
							<span class="menu-title">Quản lý thành viên</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="ui-basic1">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item">
									<a class="nav-link" href="them_thanhvien.html">Thêm thành viên</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="dsthanhvien.html">Danh sách thành viên</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="import_thanhvien.html">Import file danh sách</a>
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
								<li class="nav-item">
									<a class="nav-link" href="dangkykl.html">Đăng kí KLTN</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="xacnhankl.html">Xác nhận bảo vệ KLTN</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="dskhoaluan.html">Danh sách KLTN</a>
								</li>
							</ul>
						</div>
					</li>

					<li class="nav-item">
						<a class="nav-link" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic3">
							<i class="menu-icon fa fa-briefcase"></i>
							<span class="menu-title">Quản lý đề tài</span>
							<i class="menu-arrow"></i>
						</a>
						<div class="collapse" id="ui-basic3">
							<ul class="nav flex-column sub-menu">
								<li class="nav-item">
									<a class="nav-link" href="them_detai.html">Thêm đề tài gợi ý</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="dsdetai.html">Danh sách đề tài gợi ý</a>
								</li>
							</ul>
						</div>
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
									<a class="nav-link" href="them_tvhoidong.html">Thêm thành viên hội đồng</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="thietlap_hoidong.html">Thiết lập hội đồng</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="dshoidong.html">Danh sách hội đồng</a>
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
									<a class="nav-link" href="taobienban_danhgia.html">Bản đánh giá</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="taobienban_chamdiem.html">Biên bản chấm điểm</a>
								</li>

								<li class="nav-item">
									<a class="nav-link" href="taobienban_diemkl.html">Biên bản điểm KLTN</a>
								</li>

							</ul>
						</div>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="qlbaocao.html">
							<i class="menu-icon fa fa-folder-open"></i>
							<span class="menu-title">Quản lý báo cáo</span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="qlkhoa.html">
							<i class="menu-icon fa fa-university"></i>
							<span class="menu-title">Quản lý khoa</span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="qlnganh.html">
							<i class="menu-icon mdi mdi-24px mdi-buffer"></i>
							<span class="menu-title">Quản lý ngành</span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="qlnam.html">
							<i class="menu-icon mdi mdi-24px mdi-calendar"></i>
							<span class="menu-title">Quản lý năm</span>
						</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" href="thongke.html">
							<i class="menu-icon mdi mdi-24px mdi-chart-pie"></i>
							<span class="menu-title">Thống kê</span>
						</a>
					</li>

				</ul>
			</nav>

			<!-- partial -->
			<div class="main-panel">
				<div class="content-wrapper">

					<!-- Master -->
					<form action="bienban_danhgia.html" method="">
						<div class="row">
							<h3 class="fix-title">Lựa chọn và điền các thông tin cần thiết để tạo <strong>BIÊN BẢN ĐÁNH GIÁ KHÓA LUẬN TỐT NGHIỆP</strong></h3>
						</div>
						<div class="card">
							<div class="card-body">
								<form action="" method="get">
									<div class="row">
										<div class="col-md-12">
											<p align="center" class="fix-p3"><b>ĐẠI HỌC THĂNG LONG</b></p>
										<h5 align="center" class="fix-p4"><u><b>BỘ MÔN TIN HỌC</b></u></h5>
										</div>
										
									</div>

									<h2 align="center" class="fix-p6 fix-p"><b>BIÊN BẢN ĐÁNH GIÁ KHÓA LUẬN TỐT NGHIỆP</b></h2>

									<div class="row">
										<div class="col-md-2">
											<p class="fix-p7">Tên đề tài:</p>
										</div>
										<div class="col-md-10">
											<input class="form-control" type="text" name="" placeholder="Điền tên đề tài">
										</div>
									</div>

									<div class="row">
										<div class="col-md-2">
											<p class="fix-p7">Họ và tên sinh viên:</p>
										</div>
										<div class="col-md-10">
											<input class="form-control" type="text" name="" placeholder="Điền họ và tên sinh viên">
										</div>
									</div>

									<div class="row">
										<div class="col-md-1">
											<p class="fix-p7">Lớp:</p>
										</div>
										<div class="col-md-1">
											<input class="form-control" type="text" name="" placeholder="Điền lớp của sinh viên">
										</div>
										<div class="col-md-2">
											<p class="fix-p7">Mã sinh viên:</p>
										</div>
										<div class="col-md-1">
											<input class="form-control" type="text" name="" placeholder="Điền mã sinh viên">
										</div>
									</div>

									<div class="row">
										<div class="col-md-2">
											<p class="fix-p7">Ngày bảo vệ:</p>
										</div>
										<div class="col-md-5">
											<input class="form-control" type="text" name="" placeholder="Điền ngày bảo vệ">
										</div>
									</div>

									<p class="fix-p3 fix-p" align="center"><b>KẾT QUẢ ĐÁNH GIÁ CỦA THÀNH VIÊN HỘI ĐỒNG</b></p>

									<div class="row">
										<div class="col-md-4">
											<p class="fix-p7"><b>Các phần được đánh giá:</b></p>
										</div>										
									</div>

									<div class="row">
										<div class="col-md-4">
											<p class="fix-p7">1. Điểm tài liệu (Cho thang diểm 10)</p>
										</div>

										<div class="col-md-1">
											<input class="form-control" type="text" name="">
										</div>
									</div>

									<div class="row">
										<div class="col-md-4">
											<p class="fix-p7">2. Điểm bảo vệ (Cho thang diểm 10)</p>
										</div>

										<div class="col-md-1">
											<input class="form-control" type="text" name="">
										</div>
									</div>

									<div class="row">
										<div class="col-md-4">
											<p class="fix-p7">3. Điểm chương trình (Cho thang diểm 10)</p>
										</div>

										<div class="col-md-1">
											<input class="form-control" type="text" name="">
										</div>
									</div>

									<p class="fix-p7"><i>Phần dành cho thư ký:  Hệ số điểm của tài liệu là 4, hệ số điểm bảo vệ là 3, hệ số điểm chương trình là 3</i></p>

									<div class="row">
										<div class="col-md-4">
											<p class="fix-p7 fix-p"><b>KẾT QUẢ CUỐI CÙNG</b></p>
										</div>

										<div class="col-md-1 fix-p">
											<input class="form-control" type="text" name="">
										</div>
									</div>

									<div class="row">
										<div class="col-md-6 fix-bottom" align="center">
											
										</div>

										<div class="col-md-6 fix-bottom fix-p" align="center">
											<b>THÀNH VIÊN HỘI ĐỒNG</b>
										</div>
									</div>

									<div class="row">
										<button type="submit" class="btn btn-success fix-button">Tạo</button>
										<button type="reset" class="btn btn-secondary pull-right">Làm lại</button>
									</div>

								</form>
								<!-- End master -->
							</div>					
						</div>

					</div>        

					<!-- content-wrapper ends -->
					<!-- partial:../../partials/_footer.html -->
					<footer class="footer">
						<div class="container-fluid clearfix">
							<span class="text d-block text-center text-sm-left d-sm-inline-block">Copyright © 2018
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
			<script src="js/dashboard.js"></script>
			<!-- End custom js for this page-->
		</body>

		</html>
