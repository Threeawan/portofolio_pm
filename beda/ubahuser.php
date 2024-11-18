<?php
if(isset($_POST['ubah'])){
	$query = mysqli_query($koneksi,"update login set username='".$_POST['username']."', password='".$_POST['password']."', hak_akses='".$_POST['hak_akses']."' where id='".$_GET['id']."'");	
	
?>
<script>alert('Data Berhasil Diubah')</script>
<script>window.location='?nav=user'</script>
<?php
}
?>

<?php
$query = mysqli_query($koneksi, "select username, password, hak_akses from login where id='".$_GET['id']."'");
while($data = mysqli_fetch_array($query)){
	$username = $data['username'];
	$password = $data['password'];
	$hak_akses = $data['hak_akses'];
	

}
?>


<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <h4 class="card-header-title">Ubah User</h4>
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
									<label for="exampleInputName">Username</label>
									<input type="text" placeholder="" id="demo-hor-inputemail" class="form-control" value="<?php echo $username;?>" name="username">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" placeholder="Password" id="demo-hor-inputpass" class="form-control" value="<?php echo $password;?>" name="password">
								</div>
								
								
								
								
								
								
								
								<div class="form-group">
									<label for="exampleInputPassword1">Hak Akses</label><br>
									<select name="hak_akses" class="form-control" id="hak_akses">
									<option <?php echo ($hak_akses == '--Pilih Hak Akses--')? "selected":""?>>--Pilih Hak Akses--</option>
									<option <?php echo ($hak_akses == 'Admin')? "selected":""?>>Admin</option>
									<option <?php echo ($hak_akses == 'User')? "selected":""?>>User</option>
									<option <?php echo ($hak_akses == 'Viewer')? "selected":""?>>Viewer</option>
									</select>
								
								</div>
								
								
								
								
								
								<button class="btn btn-info" name="ubah" type="submit"><i class="fas fa-sm fa-fw m-r-10 fa-pencil-alt"></i>Ubah</button>
								<a href='?nav=user' class="btn btn-warning" name="kembali" type="submit"><i class="fas fa-sm fa-fw m-r-10 fa-undo-alt"></i>Kembali</button></a>
							</form>
						</div>
						<!-- END card-body -->
					</div>
