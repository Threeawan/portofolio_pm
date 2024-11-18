<?php
if(isset($_POST['hapus'])){
	$query = mysqli_query($koneksi, "delete from foto where id='".$_GET['id']."'");	
	
?>
<script>alert('Foto Berhasil Dihapus')</script>
<script>window.location='penghubung.php?nav=tampilgambarbak'</script>

<?php
}
?>

<?php
$query = mysqli_query($koneksi, "select tanggal_upload, uploader, nama, ukuran from foto where id='".$_GET['id']."'");
while($data = mysqli_fetch_array($query)){

	$tanggal_upload = $data['tanggal_upload'];
	$uploader = $data['uploader'];
	$nama = $data['nama'];
	$ukuran = $data['ukuran'];
	
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
						
							<form method="POST">
							
							
							<div class="form-group">
									<label for="exampleInputName">Tanggal Upload</label>
									<input type="date" class="form-control" value="<?php echo $tanggal_upload;?>"  readonly="tanggal_upload">
								</div>
								
								
								<div class="form-group">
									<label for="exampleInputName">Uploader</label><br>
									<select name="uploader" id="uploader">
									<option <?php echo ($uploader=='Dwi')?"selected":""?>>Dwi</option>
									<option <?php echo ($uploader=='Gusti')?"selected":""?>>Gusti</option>
									<option <?php echo ($uploader=='Tryawan')?"selected":""?>>Tryawan</option>
									</select>
								</div>
								
								
								<div class="form-group">
									<label for="exampleInputName">Nama</label>
									<input type="text" class="form-control" value="<?php echo $nama;?>"  readonly="readonly">
								</div>
								
								
								<div class="form-group">
									<label for="exampleInputName">Ukuran</label>
									<input type="text" class="form-control" readonly="readonly" value="<?php echo $ukuran;?>">
								</div>

								
								<button class="btn btn-danger" name="hapus" type="submit">Hapus</button>
							</form>
						</div>
						<!-- END card-body -->
					</div>
					