<?php
session_start();
	$koneksi = mysqli_connect("localhost", "root", "", "pmbni");
	//$koneksi = mysqli_connect("localhost", "root", "", "pmbni");
?>

<?php
if(!isset($_SESSION['id'])){
	?>
	<script>window.location='login.php';</script>
	<?php
}
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/admetro/chart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 06:52:32 GMT -->
<head>
    <link  href="bni.jpg" rel="shortcut icon" />
	<meta charset="utf-8" />
	<title>REGION OFFICE 04</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="assets/css/app.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<link href="assets/plugins/datatables.net-autofill-bs4/css/autoFill.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatables.net-colreorder-bs4/css/colReorder.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatables.net-fixedcolumns-bs4/css/fixedColumns.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatables.net-fixedheader-bs4/css/fixedHeader.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatables.net-keytable-bs4/css/keyTable.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatables.net-rowgroup-bs4/css/rowGroup.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatables.net-rowreorder-bs4/css/rowReorder.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatables.net-scroller-bs4/css/scroller.bootstrap4.min.css" rel="stylesheet" />
	<link href="assets/plugins/datatables.net-select-bs4/css/select.bootstrap4.min.css" rel="stylesheet" />
</head>
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app app-header-fixed app-sidebar-fixed">
		<!-- BEGIN #header -->
		<header id="header" class="app-header">
			<!-- BEGIN navbar-toggle-minify -->
			<button type="button" class="navbar-toggle navbar-toggle-minify" data-click="sidebar-minify">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<!-- END navbar-toggle-minify -->
			<!-- BEGIN navbar-header -->
			<div class="navbar-header">
				<a href="index.html" class="navbar-brand">
					BNI 46 
						   
				</a>
				
				<button type="button" class="navbar-toggle" data-click="sidebar-toggled">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- END navbar-header -->
			<!-- BEGIN navbar-nav -->
			<ul class="navbar-nav navbar-right">
				<li class="nav-item">
					
				</li>
				<li class="nav-item dropdown">
					<a href="#" data-toggle="dropdown" data-display="static" class="nav-link">
						
						
					<ul class="dropdown-menu dropdown-menu-right dropdown-menu-lg pt-0 pb-0">
						<li class="dropdown-header"><a href="#" class="dropdown-close">&times;</a>Today</li>
						<li class="dropdown-message">
							<a href="#">
								<div class="icon"><i class="fab fa-apple bg-primary"></i></div>
								<div class="info">
									<h4 class="title">App Store <span class="time">Just now</span></h4>
									<p class="desc">Your iOS application has been approved</p>
								</div>
							</a>
						</li>
						<li class="dropdown-message">
							<a href="#">
								<div class="icon"><i class="fab fa-android bg-success"></i></div>
								<div class="info">
									<h4 class="title">Google Play <span class="time">5 min ago</span></h4>
									<p class="desc">Your android application has been approved</p>
								</div>
							</a>
						</li>
						<li class="dropdown-message">
							<a href="#">
								<div class="icon"><i class="fab fa-github bg-muted"></i></div>
								<div class="info">
									<h4 class="title">Github  <span class="time">12 min ago</span></h4>
									<p class="desc">Error with notifications from Private Repos</p>
								</div>
							</a>
						</li>
						<li class="dropdown-header"><a href="#" class="dropdown-close">&times;</a>Yesterday</li>
						<li class="dropdown-message">
							<a href="#">
								<div class="icon"><i class="fa fa-envelope bg-purple"></i></div>
								<div class="info">
									<h4 class="title">Gmail  <span class="time">12:50pm</span></h4>
									<p class="desc">You have 2 unread email</p>
								</div>
							</a>
						</li>
						<li class="dropdown-message">
							<a href="#">
								<div class="icon"><div class="img" style="background-image: url(assets/img/user-2.jpg)"></div></div>
								<div class="info">
									<h4 class="title">Corey  <span class="time">10:20am</span></h4>
									<p class="desc">There's so much room for activities!</p>
								</div>
							</a>
						</li>
						<li class="dropdown-message">
							<a href="#">
								<div class="icon"><i class="fab fa-twitter bg-gradient-aqua"></i></div>
								<div class="info">
									<h4 class="title">Twitter  <span class="time">12:50pm</span></h4>
									<p class="desc">@sergiolucas: Most rain in the last two days: 85mm Gabo Island (March)</p>
								</div>
							</a>
						</li>
					</ul>
				</li>
				<li class="nav-item dropdown">
					<a href="#" data-toggle="dropdown" data-display="static" class="nav-link">
						
					</a>
					<ul class="dropdown-menu dropdown-menu-right dropdown-menu-md pt-0 pb-0">
						<li class="dropdown-header">Notifications Settings</li>
						<li class="dropdown-setting">
							<div class="icon"><i class="fa fa-envelope text-muted"></i></div>
							<div class="info">Email</div>
							<div class="option">
								<div class="switcher switcher-success">
									<input type="checkbox" name="setting_1" id="setting_1" checked />
									<label for="setting_1"></label>
								</div>
							</div>
						</li>
						<li class="dropdown-setting">
							<div class="icon"><i class="fa fa-desktop text-muted"></i></div>
							<div class="info">Desktop & Mobile</div>
							<div class="option">
								<div class="switcher switcher-success">
									<input type="checkbox" name="setting_2" id="setting_2" checked />
									<label for="setting_2"></label>
								</div>
							</div>
						</li>
						<li class="dropdown-setting">
							<div class="icon"><i class="fa fa-comment-alt text-muted"></i></div>
							<div class="info">Text message</div>
							<div class="option">
								<div class="switcher switcher-success">
									<input type="checkbox" name="setting_3" id="setting_3" />
									<label for="setting_3"></label>
								</div>
							</div>
						</li>
						<li class="dropdown-header">Privacy Settings</li>
						<li class="dropdown-setting">
							<div class="icon"><i class="fa fa-list-ul text-muted"></i></div>
							<div class="info">Public friends list</div>
							<div class="option">
								<div class="switcher switcher-success">
									<input type="checkbox" name="setting_4" id="setting_4" />
									<label for="setting_4"></label>
								</div>
							</div>
						</li>
						<li class="dropdown-setting">
							<div class="icon"><i class="fa fa-user-secret text-muted"></i></div>
							<div class="info">Public profile page</div>
							<div class="option">
								<div class="switcher switcher-success">
									<input type="checkbox" name="setting_5" id="setting_5" checked />
									<label for="setting_5"></label>
								</div>
							</div>
						</li>
					</ul>
				</li>
				
			
			
			
			
				<li class="nav-item dropdown">
					<a href="#" data-toggle="dropdown" data-display="static" class="nav-link">
						
							<img src="assets/img/bni.jpg" alt="" />
							
					
							
						</span>
						<span class="d-none d-md-block">Laporan Preventive Maintenance <b class="caret"></b></span>
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						
						<a class="dropdown-item" href="login.php">Log Out</a>
					</div>
				</li>
			</ul>
			<!-- END navbar-nav -->
			<!-- BEGIN navbar-search -->
			<div class="navbar-search">
				<form action="#" method="POST" name="navbar_search_form">
					<div class="form-group">
						<div class="icon"><i class="fa fa-search"></i></div>
						<input type="text" class="form-control" id="header-search" placeholder="Search admetro..." />
						<div class="icon">
							<a href="#" data-dismiss="search-bar" class="right-icon"><i class="fa fa-times"></i></a>
						</div>
					</div>
				</form>
			</div>
			<!-- END navbar-search -->
		</header>
		<!-- END #header -->
		
		<!-- BEGIN #sidebar -->
		<?php
		include('sidebar.php');
		?>
		<!-- END scrollbar -->
		</sidebar>
		<!-- END #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="app-content">
			<!-- BEGIN row -->
			<?php
			include('route.php');
			?>
		


		
			<!-- END row -->
		</div>
		<!-- end #content -->
		
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->
	
	<!-- BEGIN theme-panel -->
	<div class="theme-panel">
		<a href="#" data-click="theme-panel-expand" class="theme-collapse-btn"><i class="fa fa-cog"></i></a>
		
	</div>
	<!-- END theme-panel -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/js/app.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/plugins/chart.js/dist/Chart.min.js"></script>
	<script src="assets/js/demo/chart.demo.js"></script>
	
	<script src="assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables.net-autofill/js/dataTables.autoFill.min.js"></script>
	<script src="assets/plugins/datatables.net-autofill-bs4/js/autoFill.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="assets/plugins/datatables.net-buttons/js/buttons.colVis.min.js"></script>
	<script src="assets/plugins/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="assets/plugins/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="assets/plugins/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="assets/plugins/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
	<!-- 	<script src="assets/plugins/datatables.net-colreorder/js/dataTables.colReorder.min.js"></script>
	<script src="assets/plugins/datatables.net-colreorder-bs4/js/colReorder.bootstrap4.min.js"></script>
	 -->
	<script src="assets/plugins/datatables.net-fixedcolumns/js/dataTables.fixedColumns.min.js"></script>
	<script src="assets/plugins/datatables.net-fixedcolumns-bs4/js/fixedColumns.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
	<script src="assets/plugins/datatables.net-fixedheader-bs4/js/fixedHeader.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
	<script src="assets/plugins/datatables.net-keytable-bs4/js/keyTable.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables.net-rowgroup/js/dataTables.rowGroup.min.js"></script>
	<script src="assets/plugins/datatables.net-rowgroup-bs4/js/rowGroup.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
	<script src="assets/plugins/datatables.net-scroller-bs4/js/scroller.bootstrap4.min.js"></script>
	<script src="assets/plugins/datatables.net-select/js/dataTables.select.min.js"></script>
	<script src="assets/plugins/datatables.net-select-bs4/js/select.bootstrap4.min.js"></script>
	<script src="assets/js/demo/table-data.demo.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
</body>

<!-- Mirrored from seantheme.com/admetro/chart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 06:52:33 GMT -->
</html>