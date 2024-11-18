<?php
if(isset($_POST['simpan'])){
	$query = mysqli_query($koneksi, "insert into foto_bak (tanggal_upload, keterangan)values('".$_POST['tanggal_upload']."', '".$_POST['keterangan']."')");	
	if(file_exists($_FILES['foto']['tmp_name'])){
		move_uploaded_file($_FILES['foto']['tmp_name'],'assets/img/user/'.'.jpg,.png');
	}
?>
<script>alert('Foto Berhasil Disimpan')</script>
<script>window.location='penghubung.php?nav=foto_bakdata'</script>
<?php
}
?>

<?php
$query = mysqli_query($koneksi, "select tanggal_upload, keterangan from foto_bak where id='".$_SESSION['id']."'");
while($data = mysqli_fetch_array($query)){
	$tanggal_upload = $data['tanggal_upload'];
	$keterangan = $data['keterangan'];
	
}
?>



<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <h4 class="card-header-title">Simpan Foto BAK</h4>
							<div class="card-header-btn">
								<a href="#" data-toggle="card-expand" class="btn btn-success"><i class="fa fa-expand"></i></a>
								<a href="#" data-toggle="card-refresh" class="btn btn-warning"><i class="fa fa-redo"></i></a>
								<a href="#" data-toggle="card-remove" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
							</div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						
							<form action="" method="POST" enctype="multipart/form-data">
								<div class="form-group">
									<label for="exampleInputName">Tanggal Upload</label>
									<input type="date" id="demo-hor-inputemail" class="form-control" name="tanggal_upload">
								</div>
								
								
								<div class="form-group">
									<label>Foto</label>
									<input type="file" class="form-control" name="foto">
								</div>
								
								
								<div class="form-group">
									<label for="exampleInputName">Keterangan</label>
									<input type="text" id="keterangan" class="form-control" name="keterangan">
								</div>
								
								<button class="btn btn-info" name="simpan" type="submit" value="simpan">Simpan</button>
							</form>
						</div>
						<!-- END card-body -->
					</div>
					