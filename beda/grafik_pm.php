<?php
if(isset($_POST['ubah'])){
	mysqli_query($koneksi, "update grafik_pm set nilai='".$_POST['januari']."' where bulan='Januari'");
	mysqli_query($koneksi, "update grafik_pm set nilai='".$_POST['februari']."' where bulan='Februari'");
	mysqli_query($koneksi, "update grafik_pm set nilai='".$_POST['maret']."' where bulan='Maret'");
	mysqli_query($koneksi, "update grafik_pm set nilai='".$_POST['april']."' where bulan='April'");
	mysqli_query($koneksi, "update grafik_pm set nilai='".$_POST['mei']."' where bulan='Mei'");
	mysqli_query($koneksi, "update grafik_pm set nilai='".$_POST['juni']."' where bulan='Juni'");
	mysqli_query($koneksi, "update grafik_pm set nilai='".$_POST['juli']."' where bulan='Juli'");
	mysqli_query($koneksi, "update grafik_pm set nilai='".$_POST['agustus']."' where bulan='Agustus'");
	mysqli_query($koneksi, "update grafik_pm set nilai='".$_POST['september']."' where bulan='September'");
	mysqli_query($koneksi, "update grafik_pm set nilai='".$_POST['oktober']."' where bulan='Oktober'");
	mysqli_query($koneksi, "update grafik_pm set nilai='".$_POST['november']."' where bulan='November'");
	mysqli_query($koneksi, "update grafik_pm set nilai='".$_POST['desember']."' where bulan='Desember'");
		
?>
<script>alert("Data Berhasil Simpan");</script>
<script>window.location='penghubung.php?nav=grafik'</script>
<?php
}
?>


<?php
$januari = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_pm where bulan='Januari'");
		while($data = mysqli_fetch_array($query)){
			$januari = $data['nilai'];
		}

$februari = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_pm where bulan='Februari'");
		while($data = mysqli_fetch_array($query)){
			$februari = $data['nilai'];
		}

$maret = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_pm where bulan='Maret'");
		while($data = mysqli_fetch_array($query)){
			$maret = $data['nilai'];
		}



$april = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_pm where bulan='April'");
		while($data = mysqli_fetch_array($query)){
			$april = $data['nilai'];
		}


$mei = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_pm where bulan='Mei'");
		while($data = mysqli_fetch_array($query)){
			$mei = $data['nilai'];
		}


$juni = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_pm where bulan='Juni'");
		while($data = mysqli_fetch_array($query)){
			$juni = $data['nilai'];
		}

$juli = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_pm where bulan='Juli'");
		while($data = mysqli_fetch_array($query)){
			$juli = $data['nilai'];
		}

$agustus = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_pm where bulan='Agustus'");
		while($data = mysqli_fetch_array($query)){
			$agustus = $data['nilai'];
		}

$september = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_pm where bulan='September'");
		while($data = mysqli_fetch_array($query)){
			$september = $data['nilai'];
		}

$oktober = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_pm where bulan='Oktober'");
		while($data = mysqli_fetch_array($query)){
			$oktober = $data['nilai'];
		}

$november = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_pm where bulan='November'");
		while($data = mysqli_fetch_array($query)){
			$november = $data['nilai'];
		}

$desember = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_pm where bulan='Desember'");
		while($data = mysqli_fetch_array($query)){
			$desember = $data['nilai'];
		}
?>

<div class="col-lg-11">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
							<h4 class="card-header-title">Input Skala PM</h4>
							<div class="card-header-btn">
								<a href="#" data-toggle="card-expand" class="btn btn-success"><i class="fa fa-expand"></i></a>
								<a href="#" data-toggle="card-refresh" class="btn btn-warning"><i class="fa fa-redo"></i></a>
								<a href="#" data-toggle="card-remove" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
							</div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
							
							<form class="form-horizontal m-t-20" method="POST">
								<div class="form-group row m-b-10">
									
									
								</div>
								<div class="form-group row m-b-5">
									<label for="inputPassword3" class="col-sm-10 col-form-label">Januari</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" value="<?php echo $januari;?>" name="januari">
									</div>
								</div>
								
								
								<div class="form-group row m-b-5">
									<label for="inputPassword3" class="col-sm-10 col-form-label">Februari</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" value="<?php echo $februari;?>" name="februari">
									</div>
								</div>
								
								<div class="form-group row m-b-5">
									<label for="inputPassword3" class="col-sm-10 col-form-label">Maret</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" value="<?php echo $maret;?>" name="maret">
									</div>
								</div>
								
								<div class="form-group row m-b-5">
									<label for="inputPassword3" class="col-sm-10 col-form-label">April</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" value="<?php echo $april;?>" name="april">
									</div>
								</div>
								
								<div class="form-group row m-b-5">
									<label for="inputPassword3" class="col-sm-10 col-form-label">Mei</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" value="<?php echo $mei;?>" name="mei">
									</div>
								</div>
								
								<div class="form-group row m-b-5">
									<label for="inputPassword3" class="col-sm-10 col-form-label">Juni</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" value="<?php echo $juni;?>" name="juni">
									</div>
								</div>
								
								<div class="form-group row m-b-5">
									<label for="inputPassword3" class="col-sm-10 col-form-label">Juli</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" value="<?php echo $juli;?>" name="juli">
									</div>
								</div>
								
								<div class="form-group row m-b-5">
									<label for="inputPassword3" class="col-sm-10 col-form-label">Agustus</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" value="<?php echo $agustus;?>" name="agustus">
									</div>
								</div>
								
								<div class="form-group row m-b-5">
									<label for="inputPassword3" class="col-sm-10 col-form-label">September</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" value="<?php echo $september;?>" name="september">
									</div>
								</div>
								
								<div class="form-group row m-b-5">
									<label for="inputPassword3" class="col-sm-10 col-form-label">Oktober</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" value="<?php echo $oktober;?>" name="oktober">
									</div>
								</div>
								
								<div class="form-group row m-b-5">
									<label for="inputPassword3" class="col-sm-10 col-form-label">November</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" value="<?php echo $november;?>" name="november">
									</div>
								</div>
								
								<div class="form-group row m-b-5">
									<label for="inputPassword3" class="col-sm-10 col-form-label">Desember</label>
									<div class="col-sm-12">
										<input type="text" class="form-control" value="<?php echo $desember;?>" name="desember">
									</div>
								</div>
								
								
								
								
								
								
								<div class="form-group row m-b-10">
									<div class="offset-sm-3 col-sm-9">
										<div class="checkbox">
											<input type="checkbox" id="remember_me">
											
										</div>
									</div>
								</div>
								
								
								<div class="form-group row m-b-0">
									<div class="offset-sm-11 col-sm-5">
										<button class="btn btn-success" type="submit" name="ubah">Simpan</button>
									</div>
								</div>
							</form>
						</div>
						<!-- END card-body -->
					</div>
				</div>