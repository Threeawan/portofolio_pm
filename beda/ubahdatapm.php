<?php
if(isset($_POST['ubah'])){
	$query = mysqli_query($koneksi, "update foto_pm set tanggal_upload='".$_POST['tanggal_upload']."', keterangan='".$_POST['keterangan']."' where id='".$_SESSION['id']."'");	
	if(file_exists($_FILES['foto']['tmp_name'])){
		move_uploaded_file($_FILES['foto']['tmp_name'],'assets/img/user/'.'.jpg');
	}
?>
<script>alert('Data Berhasil Diubah')</script>
<script>window.location='penghubung.php?nav=foto_pmdata'</script>

<?php
}
?>

<?php
$query = mysqli_query($koneksi, "select tanggal_upload, keterangan from foto_pm where id='".$_SESSION['id']."'");
while($data = mysqli_fetch_array($query)){
	$tanggal_upload = $data['tanggal_upload'];
	$keterangan = $data['keterangan'];
	
}
?>



<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <h4 class="card-header-title">Ubah Foto PM</h4>
							<div class="card-header-btn">
								<a href="#" data-toggle="card-expand" class="btn btn-success"><i class="fa fa-expand"></i></a>
								<a href="#" data-toggle="card-refresh" class="btn btn-warning"><i class="fa fa-redo"></i></a>
								<a href="#" data-toggle="card-remove" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
							</div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						
							<form method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label for="exampleInputName">Tanggal Upload</label>
									<input type="date" id="demo-hor-inputemail" class="form-control" value="<?php echo $tanggal_upload;?>" name="tanggal_upload">
								</div>
								
								<div class="form-group">
									<label for="exampleInputPassword1">Foto</label>
									<input type="file" id="demo-hor-inputpass" class="form-control" name="foto" value="<?php echo $foto;?>">
								</div>
								
								<div class="form-group">
									<label for="exampleInputName">Keterangan</label>
									<input type="text" id="demo-hor-inputemail" class="form-control" value="<?php echo $keterangan;?>" name="keterangan">
								</div>
								
								
								<button class="btn btn-info" name="ubah" type="submit">Ubah</button>
							</form>
						</div>
						<!-- END card-body -->
					</div>
					