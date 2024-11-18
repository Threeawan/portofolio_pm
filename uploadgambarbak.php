<?php
if(isset($_POST['upload'])){
	$sql = mysqli_query($koneksi, "insert into foto (tanggal_upload, uploader)values('".$_POST['tanggal_upload']."', '".$_POST['uploader']."')");	
	
?>
<script>alert('Foto Berhasil Diupload')</script>
<script>window.location='penghubung.php?nav=tampilgambarbak'</script>
<?php
}
?>



<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <h4 class="card-header-title">Upload Foto BAK</h4>
							<div class="card-header-btn">
								<a href="#" data-toggle="card-expand" class="btn btn-success"><i class="fa fa-expand"></i></a>
								<a href="#" data-toggle="card-refresh" class="btn btn-warning"><i class="fa fa-redo"></i></a>
								<a href="#" data-toggle="card-remove" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
							</div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						
							<form method="POST" enctype="multipart/form-data" action="uploadprosesbak.php" >
									
									
								<div class="form-group">
									<label for="exampleInputName">Tanggal Upload</label>
									<input type="date" id="demo-hor-inputemail" class="form-control" name="tanggal_upload">
								</div>
								
								
								<div class="form-group">
									<label for="exampleInputName">Uploader</label><br>
									<select name="uploader" id="uploader">
									<option value="--Pilih Uploader--">--Pilih Uploader--</option>
									<option value="Dwi">Dwi</option>
									<option value="Gusti">Gusti</option>
									<option value="Tryawan">Tryawan</option>
									</select>
								</div>

								
								
								<div class="form-group">
									<label for="exampleInputName">Foto</label>
									<input type="file" id="demo-hor-inputemail" class="form-control" name="foto">
								</div>
								
								
															
								<button class="btn btn-info" name="upload" type="submit" value="upload">Upload</button>
							</form>
						</div>
						<!-- END card-body -->
					</div>
					