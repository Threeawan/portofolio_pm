<?php
include('koneksi.php');
session_start();

if(isset($_POST['blogin'])){
	$query = mysqli_query($koneksi, "select id, username, password, hak_akses from login where username='".$_POST['username']."'");
	if(mysqli_num_rows($query)==0){
		?>
        <script>alert('Username tidak ditemukan');</script>
        <?php
	}
	else{
		while($data = mysqli_fetch_array($query)){
			$id = $data['id'];
			$password = $data['password'];
			$akses = $data['hak_akses'];
			
		}
		if($_POST['password']!=$password){
			?>
            <script>alert('Password tidak cocok');</script>
            <?php
		}
		
		else{
			$_SESSION['id']=$id;
			$_SESSION['akses']=$akses;
			$_SESSION['nama']=$_POST['username'];
		
			?>
            <script>alert('Anda Berhasil Login, Selamat Datang <?php echo $_SESSION['nama'];?>');</script>
            
	<?php
	if($_SESSION['akses']=='User'){	
	
	?>
	
    <script>window.location="penghubung.php?nav=bakunjungan";</script>
	<?php
	}
	?>
	
	
	
	<?php
	if($_SESSION['akses']=='Admin'){
	
	?>
	<script>window.location='penghubung.php?nav=user';</script>
	<?php
	}
	?>
	
	<?php
	if($_SESSION['akses']==''){
	
	?>
	<script>window.location='penghubung.php?nav=uploadlegalitas';</script>
	<?php
	}
	?>
	
	<?php
	if($_SESSION['akses']=='Cabang'){
	
	?>
	<script>window.location='penghubung.php?nav=uploadserver';</script>
	<?php
	}
	?>
	
	
	<?php
	if($_SESSION['akses']=='Viewer'){
	
	?>
	<script>window.location='penghubung.php?nav=grafik';</script>
	<?php
	}
	?>
	
	
	
	
	
	<?php
		}
		?>
		
	<?php
	}
}
	
	?>


<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/admetro/page_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 06:53:04 GMT -->
<head>
<link  href="bni.jpg" rel="shortcut icon" />
	<meta charset="utf-8" />
	<title>PREVENTIVE MAINTENANCE</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="assets/css/app.min.css" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
	<!-- BEGIN #app -->
	<div id="app" class="app app-full-height app-without-header">
		<!-- BEGIN login -->
		<div class="login">
			<!-- BEGIN login-cover -->
			<div class="login-cover"></div>
			<!-- END login-cover -->
			<!-- BEGIN login-content -->
			<div class="login-content">
				<!-- BEGIN login-brand -->
				<div class="login-brand">
					
				</div>
				<!-- END login-brand -->
				<h3 class="m-b-20"><span>Login</span></h3>
				<!-- BEGIN login-desc -->
				<div class="login-desc m-b-30">
					
				</div>
				<!-- END login-desc -->
				<!-- BEGIN login-form -->
				<form method="POST" name="login_form">
					<div class="form-group">
						<label>Username <span class="text-danger"></span></label>
						<input type="text" class="form-control" value="" name="username" required/>
					</div>
					<div class="form-group">
						<label>Password <span class="text-danger"></span></label>
						<input type="password" class="form-control" value="" name="password" required/>
					</div>
					<div class="m-b-30">
						
					</div>
					<div class="d-flex align-items-center">
						<button name="blogin" type="submit" class="btn btn-primary width-150 btn-rounded">Login</button>
						<a href="lupa.php" class="btn btn-success width-150 btn-rounded"> Lupa Password</a>
						
					</div>
				</form>
				<!-- END login-form -->
				
			</div>
			<!-- END login-content -->
		</div>
		<!-- END login -->
		
		<!-- BEGIN btn-scroll-top -->
		<a href="#" data-click="scroll-top" class="btn-scroll-top fade"><i class="fa fa-arrow-up"></i></a>
		<!-- END btn-scroll-top -->
	</div>
	<!-- END #app -->
	
	<!-- BEGIN theme-panel -->
	<div class="theme-panel">
		
		<div class="theme-panel-content">
			<div class="widget-list mb-0">
				
				<div class="widget-list-item">
					<div class="widget-list-content">
						<div>Gradient Theme</div>
						<div class="theme-list row">
							<div class="theme-list-item"></a></div>
							<div class="theme-list-item"></a></div>
							<div class="theme-list-item"></a></div>
							<div class="theme-list-item"></a></div>
							<div class="theme-list-item"></a></div>
							<div class="theme-list-item"><a href="#" class="bg-gradient-green" data-theme="app-theme-gradient-green" data-toggle="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Gradient Green"></a></div>
							<div class="theme-list-item"><a href="#" class="bg-gradient-cyan" data-theme="app-theme-gradient-cyan" data-toggle="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Gradient Aqua"></a></div>
							<div class="theme-list-item"><a href="#" class="bg-gradient-blue" data-theme="app-theme-gradient-blue" data-toggle="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Gradient Blue"></a></div>
							<div class="theme-list-item"><a href="#" class="bg-gradient-purple" data-theme="app-theme-gradient-purple" data-toggle="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Gradient Purple"></a></div>
							<div class="theme-list-item"><a href="#" class="bg-gradient-indigo" data-theme="app-theme-gradient-indigo" data-toggle="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Gradient Indigo"></a></div>
							<div class="theme-list-item"><a href="#" class="bg-gradient-black" data-theme="app-theme-gradient-black" data-toggle="theme-selector" data-toggle="tooltip" data-trigger="hover" data-container="body" data-title="Gradient Black"></a></div>
						</div>
					</div>
				</div>
				<div class="widget-list-item">
					<div class="widget-list-content">
						Fixed Sidebar
					</div>
					<div class="widget-list-action">
						<div class="switcher switcher-success pull-left">
							<input type="checkbox" name="sidebar_fixed" id="sidebar_fixed" value="1" checked />
							<label for="sidebar_fixed"></label>
						</div>
					</div>
				</div>
				<div class="widget-list-item">
					<div class="widget-list-content">
						Light Sidebar
					</div>
					<div class="widget-list-action">
						<div class="switcher switcher-success pull-left">
							<input type="checkbox" name="sidebar_light" id="sidebar_light" value="1" />
							<label for="sidebar_light"></label>
						</div>
					</div>
				</div>
				<div class="widget-list-item">
					<div class="widget-list-content">
						Fixed Header
					</div>
					<div class="widget-list-action">
						<div class="switcher switcher-success pull-left">
							<input type="checkbox" name="header_fixed" id="header_fixed" value="1" checked />
							<label for="header_fixed"></label>
						</div>
					</div>
				</div>
				<div class="widget-list-item">
					<div class="widget-list-content">
						Dark Header
					</div>
					<div class="widget-list-action">
						<div class="switcher switcher-success pull-left">
							<input type="checkbox" name="header_dark" id="header_dark" value="1" />
							<label for="header_dark"></label>
						</div>
					</div>
				</div>
				<div class="widget-list-item">
					<div class="widget-list-content">
						<a href="#" class="btn btn-silver btn-block btn-rounded btn-sm" data-click="reset-theme-setting">Reset Setting</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END theme-panel -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/js/app.min.js"></script>
	<!-- ================== END BASE JS ================== -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53034621-1', 'auto');
	  ga('send', 'pageview');

	</script>
</body>

<!-- Mirrored from seantheme.com/admetro/page_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 13 Aug 2019 06:53:04 GMT -->
</html>

<?php

?>