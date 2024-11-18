<?php
if(isset($_POST['hapus'])){
	$query = mysqli_query($koneksi, "delete from login where id='".$_GET['id']."'");
?>

<script>alert('Data Berhasil Dihapus')</script>
<script>window.location='?nav=user'</script>
<?php
}
?>


<?php
$query = mysqli_query($koneksi, "select username, password from login where id='".$_GET['id']."'");
while($data = mysqli_fetch_array($query)){
	$username = $data['username'];
	$password = $data['password'];
}
?>



<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <h4 class="card-header-title"> Hapus User</h4>
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
									<label for="exampleInputName">Username</label>
									<input type="text" placeholder="" id="demo-hor-inputemail" class="form-control" value="<?php echo $username;?>" name="username">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" placeholder="Password" id="demo-hor-inputpass" class="form-control" value="<?php echo $password;?>" name="password">
								</div>
								
								<button class="btn btn-danger" name="hapus" type="submit"><i class="fas fa-sm fa-fw m-r-10 fa-trash-alt"></i>Hapus</button>
								<a href="?nav=user" class="btn btn-warning" name="kembali" type="submit"><i class="fas fa-sm fa-fw m-r-10 fa-undo-alt"></i>Kembali</a>
								
								
								
							</form>
						</div>
						<!-- END card-body -->
					</div>