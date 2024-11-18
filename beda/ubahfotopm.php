<?php
if(isset($_POST['hapus'])){
	$query = mysqli_query($koneksi, "delete from foto_pm where id='".$_GET['id']."'");	
	
?>
<script>alert('Foto Berhasil Dihapus')</script>
<script>window.location='penghubung.php?nav=foto_pmdata'</script>

<?php
}
?>

<?php
$query = mysqli_query($koneksi, "select tanggal_upload, foto, keterangan from foto_pm where id='".$_SESSION['id']."'");
while($data = mysqli_fetch_array($query)){
	$tanggal_upload = $data['tanggal_upload'];
	$foto = $data['foto'];
	$keterangan = $data['keterangan'];
	
}
?>



<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <h4 class="card-header-title">Hapus Foto PM</h4>
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
									<input type="date" id="demo-hor-inputemail" class="form-control" name="tanggal_upload" value="<?php echo $tanggal_upload;?>">
								</div>
								
								
								<div class="form-group">
									<label>Foto</label>
									<input type="file" class="form-control" name="foto" value="<?php echo $foto;?>">
								</div>
								
								
								<div class="form-group">
									<label for="exampleInputName">Keterangan</label>
									<input type="text" class="form-control" name="keterangan" value="<?php echo $keterangan;?>">
								</div>
								
								<button class="btn btn-danger" name="hapus" type="submit">Hapus</button>
							</form>
						</div>
						<!-- END card-body -->
					</div>
					