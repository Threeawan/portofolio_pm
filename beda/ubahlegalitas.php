<?php
if(isset($_POST['ubah'])){
	$sql = "update legalitas set tanggal_upload='".$_POST['tanggal_upload']."', nama_outlet='".$_POST['nama_outlet']."' where id='".$_GET['id']."'";
	$query = mysqli_query($koneksi, $sql);
	
?>

<script>alert('Data Berhasil Diubah')</script>
<script>window.location='penghubung.php?nav=tampillegalitas'</script>

<?php

}
?>

<?php
$query = mysqli_query($koneksi, "select id, tanggal_upload, nama_outlet from legalitas where id='".$_GET['id']."'");
while($data = mysqli_fetch_array($query)){
	$id = $data['id'];
	$tanggal_upload = $data['tanggal_upload'];
	$nama_outlet = $data['nama_outlet'];
}
?>



<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <h4 class="card-header-title">Ubah File PDF</h4>
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
									<input type="date" class="form-control" name="tanggal_upload" value="<?php echo $tanggal_upload;?>">
								</div>
								
								
								<div class="form-group">
									<label for="exampleInputName">Nama Outlet</label><br>
									<select name="nama_outlet" id="nama_outlet">
									<option <?php echo ($nama_outlet=='KC Bandung')?"selected":""?>>KC Bandung</option>
									<option <?php echo ($nama_outlet=='KC Cirebon')?"selected":""?>>KC Cirebon</option>
									<option <?php echo ($nama_outlet=='KC Tasikmalaya')?"selected":""?>>KC Tasikmalaya</option>
									<option <?php echo ($nama_outlet=='KC Majalaya')?"selected":""?>>KC Majalaya</option>
									<option <?php echo ($nama_outlet=='KC Sukabumi')?"selected":""?>>KC Sukabumi</option>
									<option <?php echo ($nama_outlet=='KC Banjar')?"selected":""?>>KC Banjar</option>
									<option <?php echo ($nama_outlet=='KC Garut')?"selected":""?>>KC Garut</option>
									<option <?php echo ($nama_outlet=='KC Cianjur')?"selected":""?>>KC Cianjur</option>
									<option <?php echo ($nama_outlet=='KC Indramayu')?"selected":""?>>KC Indramayu</option>
									<option <?php echo ($nama_outlet=='KC Kuningan')?"selected":""?>>KC Kuningan</option>
									<option <?php echo ($nama_outlet=='KC Purwakarta')?"selected":""?>>KC Purwakarta</option>
									<option <?php echo ($nama_outlet=='KC Sumedang')?"selected":""?>>KC Sumedang</option>
									<option <?php echo ($nama_outlet=='KC Subang')?"selected":""?>>KC Subang</option>
									<option <?php echo ($nama_outlet=='KC PTB')?"selected":""?>>KC PTB</option>
									<option <?php echo ($nama_outlet=='KC JPK')?"selected":""?>>KC JPK</option>
									
									</select>
								</div>
							<form method="POST">
                            <button type="submit" name="ubah" class="btn btn-info">Ubah</button>
							<a href="penghubung.php?nav=tampillegalitas" type="submit" name="ubah" class="btn btn-warning">Kembali</a>
						  </form>
						</div>
						<!-- END card-body -->
					</div>
					