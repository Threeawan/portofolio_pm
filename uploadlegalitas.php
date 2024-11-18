<?php
if(isset($_POST['upload'])){
	$sql = mysqli_query($koneksi, "insert into legalitas (tanggal_upload, nama_outlet)values('".$_POST['tanggal_upload']."', '".$_POST['nama_outlet']."')");	
	
?>
<script>alert('File Berhasil Diupload')</script>
<script>window.location='penghubung.php?nav=tampillegalitas'</script>
<?php
}
?>



<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <h4 class="card-header-title">Upload File PDF</h4>
							<div class="card-header-btn">
								<a href="#" data-toggle="card-expand" class="btn btn-success"><i class="fa fa-expand"></i></a>
								<a href="#" data-toggle="card-refresh" class="btn btn-warning"><i class="fa fa-redo"></i></a>
								<a href="#" data-toggle="card-remove" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
							</div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						
							<form method="POST" enctype="multipart/form-data" action="uploadproseslegalitas.php" >
									
									
								<div class="form-group">
									<label for="exampleInputName">Tanggal Upload</label>
									<input type="date" id="demo-hor-inputemail" class="form-control" name="tanggal_upload">
								</div>
								
								
								<div class="form-group">
									<label for="exampleInputName">Kantor Cabang</label>
									<br>
									<select name="nama_outlet" id="nama_outlet">
									
									<option value="--Pilih Cabang--">--Pilih Cabang--</option>
									
									<option value="KC Bandung">KC Bandung</option>
									
									<option value="KC Cirebon">KC Cirebon</option>
									
									<option value="KC Tasikmalaya">KC Tasikmalaya</option>
							
									<option value="KC Majalaya">KC Majalaya</option>
									
									<option value="KC Sukabumi">KC Sukabumi</option>
									
									<option value="KC Banjar">KC Banjar</option>
									
									<option value="KC Garut">KC Garut</option>
									
									<option value="KC Cianjur">KC Cianjur</option>
									
									<option value="KC Indramayu">KC Indramayu</option>
									
									<option value="KC Kuningan">KC Kuningan</option>
									
									<option value="KC Purwakarta">KC Purwakarta</option>
									
									<option value="KC Sumedang">KC Sumedang</option>
								
									<option value="KC Subang">KC Subang</option>
																
									<option value="KC PTB">KC PTB</option>
									
									<option value="KC JPK">KC JPK</option>
									
									</select>
								
								</div>

								
								
								<div class="form-group">
									<label for="exampleInputName">Ijin Usaha</label>
									<input type="file" id="demo-hor-inputemail" class="form-control" name="ijin_usaha">
								</div>
								
								
								<div class="form-group">
									<label for="exampleInputName">IMB</label>
									<input type="file" id="demo-hor-inputemail" class="form-control" name="imb">
								</div>
								
								<div class="form-group">
									<label for="exampleInputName">Dokumen Kepemilikan</label>
									<input type="file" id="demo-hor-inputemail" class="form-control" name="dokumen_kepemilikan">
								</div>
								
								<div class="form-group">
									<label for="exampleInputName">PKS Sewa</label>
									<input type="file" id="demo-hor-inputemail" class="form-control" name="pks_sewa">
								</div>
								
								
								
															
								<button class="btn btn-info" name="upload" type="submit" value="upload">Upload</button>
							</form>
						</div>
						<!-- END card-body -->
					</div>
					