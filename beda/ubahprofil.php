<?php
if(isset($_POST['ubah'])){
	$query = mysqli_query($koneksi, "update login set username='".$_POST['username']."', password='".$_POST['password']."' where id='".$_SESSION['id']."'");	
	if(file_exists($_FILES['foto']['tmp_name'])){
		move_uploaded_file($_FILES['foto']['tmp_name'],'assets/img/user/'.$_POST['username'].'.jpg');
	}
?>
<script>alert('Foto Berhasil Diubah')</script>
<script>window.location='?nav=user'</script>
<?php
}
?>

<?php
$query = mysqli_query($koneksi, "select username, password from login where id='".$_SESSION['id']."'");
while($data = mysqli_fetch_array($query)){
	$username = $data['username'];
	$password = $data['password'];
	
}
?>



<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <h4 class="card-header-title">Ubah Profil</h4>
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
									<input type="text" id="demo-hor-inputemail" class="form-control" value="<?php echo $username;?>" name="username">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" id="demo-hor-inputpass" class="form-control" value="<?php echo $password;?>" name="password">
								</div>
								
								<div class="form-group">
									<label>Foto</label>
									<input type="file" class="form-control" name="foto">
								</div>
								
								<button class="btn btn-info" name="ubah" type="submit">Ubah</button>
							</form>
						</div>
						<!-- END card-body -->
					</div>
					