<sidebar id="sidebar" class="app-sidebar">
			<!-- BEGIN scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- BEGIN nav -->
				<ul class="nav">
					<li class="nav-profile">
						<div class="profile-img">
							<img style="width:70px;height:50px" src="assets/img/user/<?php echo $_SESSION['nama']; ?>.jpg" onerror="this.src='assets/img/BNI46.jpg'"/>
						</div>
						<div class="profile-info">
							<h4><a href="?nav=ubahprofil"><?php echo $_SESSION['nama']; ?></a></h4>
							
						</div>
					</li>
				
				
						<ul class="nav-submenu">
							<li><a href="email_inbox.html">Inbox</a></li>
							<li><a href="email_compose.html">Compose</a></li>
							<li><a href="email_detail.html">Detail</a></li>
						</ul>
					
                    
						<?php
						if($_SESSION['akses']=='Admin' ||$_SESSION['akses']=='User'||$_SESSION['akses']=='Viewer'){
						?>
					<li class="has-sub <?php if(isset($_GET['nav'])&&$_GET['nav']=='grafikbatang'||isset($_GET['nav'])&&$_GET['nav']=='grafik'){ ?>active<?php } ?>">
						<a href="#">
							<span class="nav-icon"><i class="fa fa-chart-bar bg-gradient-purple text-white"></i></span>
                        
							<span class="nav-text">Grafik</span> 
							<span class="nav-caret"><b class="caret"></b></span>
						</a>
						<ul class="nav-submenu">


						<?php
							if($_SESSION['akses']=='User'||$_SESSION['akses']=='Admin'||$_SESSION['akses']=='Viewer'){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='grafik'){ ?>class="active"<?php } ?>><a href="?nav=grafik"><span class="nav-text">Preventive Maintenance</span></a></li>
							<?php
							}
							?>
							
							
							
							
							
							
							
							
							
							
							
							
							
						

							<?php
							if($_SESSION['akses']=='User'||$_SESSION['akses']=='Admin'||$_SESSION['akses']=='Viewer'){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='grafikbatang'){ ?>class="active"<?php } ?>><a href="?nav=grafikbatang"><span class="nav-text">Berita Acara Kunjungan</span></a></li>
							<?php
							}
							?>

							
						</ul>
					</li>
<?php
						}
?>
	
	
	<?php
		if($_SESSION['akses']=='Admin' ||$_SESSION['akses']=='User'){
	?>

				
					<li class="has-sub <?php if(isset($_GET['nav'])&&$_GET['nav']=='powersystem'||isset($_GET['nav'])&&$_GET['nav']=='bakunjungan'||isset($_GET['nav'])&&$_GET['nav']=='uploadgambar'||isset($_GET['nav'])&&$_GET['nav']=='uploadgambarbak'||isset($_GET['nav'])&&$_GET['nav']=='tandaterimabarang'||isset($_GET['nav'])&&$_GET['nav']=='penilaian'||isset($_GET['nav'])&&$_GET['nav']=='pcclient'||isset($_GET['nav'])&&$_GET['nav']=='serverhardware'||isset($_GET['nav'])&&$_GET['nav']=='inventorynetwork'||isset($_GET['nav'])&&$_GET['nav']=='komunikasi'||isset($_GET['nav'])&&$_GET['nav']=='uploadlegalitas'||isset($_GET['nav'])&&$_GET['nav']=='surat'||isset($_GET['nav'])&&$_GET['nav']=='user'||isset($_GET['nav'])&&$_GET['nav']=='uploadserver'||isset($_GET['nav'])&&$_GET['nav']=='surat_tugas'||isset($_GET['nav'])&&$_GET['nav']=='review'){ ?>active<?php } ?>">
						<a href="#">
							<span class="nav-icon"><i class="fa fa-table bg-gradient-green text-white"></i></span>
                        
							<span class="nav-text">Input</span> 
							<span class="nav-caret"><b class="caret"></b></span>
						</a>
						<ul class="nav-submenu">



						<?php
						if($_SESSION['akses']=='Admin'){
						?>
                        <li <?php if(isset($_GET['nav'])&&$_GET['nav']=='user'){ ?>class="active"<?php } ?>><a href="?nav=user"><span class="nav-text">User</span></a></li>
						<?php
						}
						?>


							<?php
							if($_SESSION['akses']=='User'||$_SESSION['akses']=='Admin'){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='powersystem'){ ?>class="active"<?php } ?>><a href="?nav=powersystem"><span class="nav-text">Preventive Maintenance</span></a></li>
							<?php
							}
							?>



							

							<?php
							if($_SESSION['akses']==''){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='inventorynetwork'){ ?>class="active"<?php } ?>><a href="?nav=inventorynetwork"><span class="nav-text">Inventory Network</span></a></li>
							<?php
							}
							?>


							<?php
							if($_SESSION['akses']==''){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='serverhardware'){ ?>class="active"<?php } ?>><a href="?nav=serverhardware"><span class="nav-text">Server Hardware</span></a></li>
							<?php
							}
							?>


							<?php
							if($_SESSION['akses']==''){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='komunikasi'){ ?>class="active"<?php } ?>><a href="?nav=komunikasi"><span class="nav-text">Komunikasi</span></a></li>
							<?php
							}
							?>



							<?php
							if($_SESSION['akses']=='User'||$_SESSION['akses']=='Admin'){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='bakunjungan'){ ?>class="active"<?php } ?>><a href="?nav=bakunjungan"><span class="nav-text">Berita Acara Kunjungan</span></a></li>
							<?php
							}
							?>

							<!--<?php
							if($_SESSION['akses']=='User'||$_SESSION['akses']=='Admin'){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='review'){ ?>class="active"<?php } ?>><a href="?nav=review"><span class="nav-text">Hasil Review</span></a></li>
							<?php
							}
							?>-->
							
							<!--<?php
							if($_SESSION['akses']=='User'||$_SESSION['akses']=='Admin'){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='surat'){ ?>class="active"<?php } ?>><a href="?nav=surat"><span class="nav-text">Surat</span></a></li>
							<?php
							}
							?>-->
							
							

							<?php
							if($_SESSION['akses']==''||$_SESSION['akses']==''||$_SESSION['akses']==''){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='uploadgambar'){ ?>class="active"<?php } ?>><a href="penghubung.php?nav=uploadgambar"><span class="nav-text">Upload Foto PM</span></a></li>
							<?php
							}
							?>
							
							
							<?php
							if($_SESSION['akses']==''||$_SESSION['akses']==''||$_SESSION['akses']==''){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='uploadgambarbak'){ ?>class="active"<?php } ?>><a href="penghubung.php?nav=uploadgambarbak"><span class="nav-text">Upload Foto BAK</span></a></li>
							<?php
							}
							?>
							
							
							
							<?php
							if($_SESSION['akses']==''||$_SESSION['akses']==''||$_SESSION['akses']==''){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='uploadlegalitas'){ ?>class="active"<?php } ?>><a href="penghubung.php?nav=uploadlegalitas"><span class="nav-text">Upload Legalitas</span></a></li>
							<?php
							}
							?>
							
							<!--<?php
							if($_SESSION['akses']=='User'||$_SESSION['akses']=='Admin'||$_SESSION['akses']=='Cabang'){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='uploadserver'){ ?>class="active"<?php } ?>><a href="penghubung.php?nav=uploadserver"><span class="nav-text">Upload Server</span></a></li>
							<?php
							}
							?>-->



							<?php
							if($_SESSION['akses']=='Admin'||$_SESSION['akses']=='User'){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='tandaterimabarang'){ ?>class="active"<?php } ?>><a href="?nav=tandaterimabarang"><span class="nav-text">Tanda Terima Barang</span></a></li>
							<?php
							}
							?>


							<?php
							if($_SESSION['akses']==''){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='penilaian'){ ?>class="active"<?php } ?>><a href="?nav=penilaian"><span class="nav-text">Penilaian</span></a></li>
							<?php
							}
							?>



							<?php
							if($_SESSION['akses']==''){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='pcclient'){ ?>class="active"<?php } ?>><a href="?nav=pcclient"><span class="nav-text">PC Client</span></a></li>

							<?php
							}
							?>

						
						</ul>
					</li>
					
					
<?php
		}
		
		?>
			
					
					<li class="has-sub <?php if(isset($_GET['nav'])&&$_GET['nav']=='powersystemdata'||isset($_GET['nav'])&&$_GET['nav']=='bakunjungandata'||isset($_GET['nav'])&&$_GET['nav']=='tampilgambar'||isset($_GET['nav'])&&$_GET['nav']=='tampilgambarbak'||isset($_GET['nav'])&&$_GET['nav']=='inventorynetworkdata'||isset($_GET['nav'])&&$_GET['nav']=='serverhardwaredata'||isset($_GET['nav'])&&$_GET['nav']=='komunikasidata'||isset($_GET['nav'])&&$_GET['nav']=='tandaterimabarangdata'||isset($_GET['nav'])&&$_GET['nav']=='penilaiandata'||isset($_GET['nav'])&&$_GET['nav']=='pcclientdata'||isset($_GET['nav'])&&$_GET['nav']=='tampillegalitas'||isset($_GET['nav'])&&$_GET['nav']=='suratdata'||isset($_GET['nav'])&&$_GET['nav']=='tampilserver'||isset($_GET['nav'])&&$_GET['nav']=='surat_tugas_data'||isset($_GET['nav'])&&$_GET['nav']=='hasilreviewdata'){ ?>active<?php } ?>">
						<a href="#">
							<span class="nav-icon"><i class="fa fa-file-alt bg-gradient-orange text-white"></i></span>
							<span class="nav-text">Data</span> 
							<span class="nav-caret"><b class="caret"></b></span>
						</a>
						<ul class="nav-submenu">

							<?php
							if($_SESSION['akses']=='User'||$_SESSION['akses']=='Admin'||$_SESSION['akses']=='Viewer'){
							?>

							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='powersystemdata'){ ?>class="active"<?php } ?>><a href="?nav=powersystemdata"><span class="nav-text">Preventive Maintenance</span></a></li>
							<?php
							}
							?>



							<?php
							if($_SESSION['akses']==''){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='inventorynetworkdata'){ ?>class="active"<?php } ?>><a href="?nav=inventorynetworkdata"><span class="nav-text">Inventory Network</span></a></li>
							<?php
							}
							?>

							<?php
							if($_SESSION['akses']==''){
							?>
							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='serverhardwaredata'){ ?>class="active"<?php } ?>><a href="?nav=serverhardwaredata"><span class="nav-text">Server Hardware</span></a></li>
							<?php
							}
							?>

							<?php
							if($_SESSION['akses']==''){
							?>

                          <li <?php if(isset($_GET['nav'])&&$_GET['nav']=='komunikasidata'){ ?>class="active"<?php } ?>><a href="?nav=komunikasidata"><span class="nav-text">Komunikasi</span></a></li>
                     	    <?php
							}
							?>


							<?php
							if($_SESSION['akses']=='User'||$_SESSION['akses']=='Admin'||$_SESSION['akses']=='Viewer'){
							?>
                           <li <?php if(isset($_GET['nav'])&&$_GET['nav']=='bakunjungandata'){ ?>class="active"<?php } ?>><a href="?nav=bakunjungandata"><span class="nav-text">Berita Acara Kunjungan</span></a></li>
                            <?php
							}
							?>

							<!--<?php
							if($_SESSION['akses']=='User'||$_SESSION['akses']=='Admin'||$_SESSION['akses']=='Viewer'){
							?>
                           <li <?php if(isset($_GET['nav'])&&$_GET['nav']=='hasilreviewdata'){ ?>class="active"<?php } ?>><a href="?nav=hasilreviewdata"><span class="nav-text">Hasil Review</span></a></li>
                            <?php
							}
							?>-->
							
							<!--<?php
							if($_SESSION['akses']=='Admin'||$_SESSION['akses']==''||$_SESSION['akses']==''){
							?>
                           <li <?php if(isset($_GET['nav'])&&$_GET['nav']=='suratdata'){ ?>class="active"<?php } ?>><a href="penghubung.php?nav=suratdata"><span class="nav-text">Surat</span></a></li>
                            <?php
							}
							?>-->
							
							
							
							
							
							<?php
							if($_SESSION['akses']==''||$_SESSION['akses']==''||$_SESSION['akses']==''){
							?>
                           <li <?php if(isset($_GET['nav'])&&$_GET['nav']=='tampilgambar'){ ?>class="active"<?php } ?>><a href="penghubung.php?nav=tampilgambar"><span class="nav-text">Foto PM</span></a></li>
                            <?php
							}
							?>
							
							<?php
							if($_SESSION['akses']==''||$_SESSION['akses']==''||$_SESSION['akses']==''){
							?>
                           <li <?php if(isset($_GET['nav'])&&$_GET['nav']=='tampilgambarbak'){ ?>class="active"<?php } ?>><a href="penghubung.php?nav=tampilgambarbak"><span class="nav-text">Foto BAK</span></a></li>
                            <?php
							}
							?>
							
							
							
							<?php
							if($_SESSION['akses']==''||$_SESSION['akses']==''||$_SESSION['akses']==''){
							?>
                           <li <?php if(isset($_GET['nav'])&&$_GET['nav']=='tampillegalitas'){ ?>class="active"<?php } ?>><a href="penghubung.php?nav=tampillegalitas"><span class="nav-text">File Legalitas</span></a></li>
                            <?php
							}
							?>
							
							
							<!--<?php
							if($_SESSION['akses']=='User'||$_SESSION['akses']=='Admin'||$_SESSION['akses']=='Cabang'){
							?>
                           <li <?php if(isset($_GET['nav'])&&$_GET['nav']=='tampilserver'){ ?>class="active"<?php } ?>><a href="penghubung.php?nav=tampilserver"><span class="nav-text">Foto Server</span></a></li>
                            <?php
							}
							?>-->
							
							
							
							<?php
							if($_SESSION['akses']=='Admin'||$_SESSION['akses']=='User'){
							?>

							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='tandaterimabarangdata'){ ?>class="active"<?php } ?>><a href="?nav=tandaterimabarangdata"><span class="nav-text">Tanda Terima Barang</span></a></li>
							 <?php
							}
							?>

							<?php
							if($_SESSION['akses']==''){
							?>

							<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='penilaiandata'){ ?>class="active"<?php } ?>><a href="?nav=penilaiandata"><span class="nav-text">Penilaian</span></a></li>
							<?php
							}
							?>

							<?php
							if($_SESSION['akses']==''){
							?>

                          	<li <?php if(isset($_GET['nav'])&&$_GET['nav']=='pcclientdata'){ ?>class="active"<?php } ?>><a href="?nav=pcclientdata"><span class="nav-text">PC Client</span></a></li>
                          	<?php
							}
							?>
                                
						</ul>
					</li>
		
					
            
                     <li>
						<a href="login.php">
						<span class="nav-icon"><i class="fa fa-map-marker-alt bg-gradient-blue text-white"></i></span>
							<span class="nav-text">Logout</span>
                            
						</a>
					</li>
                    
         
					
					
					<br />
                    	<br />
                        	<br />
                            	<br />
                                	<br />
                                    	<br />
                                        	<br />
                                            	<br />
                                                	<br />
                                                    	<br />
 
                    
					
					
				
					<?php
					include('copyright.php');
					?>
				</ul>
				<!-- END nav -->
			</div>
		