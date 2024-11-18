<?php
if(isset($_POST['simpan'])){
	$query = mysqli_query($koneksi, "insert into login(username, password, hak_akses)values('".$_POST['username']."', '".$_POST['password']."', '".$_POST['hak_akses']."')");
	

?>
<script>alert('Username Berhasil Ditambahkan')</script>
<?php
}
?>

<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
							<h4 class="card-header-title">Tambah User</h4>
							<div class="card-header-btn">
								
							</div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						
							<form method="POST">
								<div class="form-group">
									<label for="exampleInputName">Username</label>
									<input type="text" class="form-control" id="exampleInputName" name="username" required>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Password</label>
									<input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
								</div>
								
								<div class="form-group">
									<label for="exampleInputHakakses">Hak Akses</label>
									 <div class="form-group">
									<select class="form-control" name="hak_akses" id="hak_akses" required>
									<option value="--Pilih Hak Akses--">--Pilih Hak Akses--</option>
									<option value="Admin">Admin</option>
									<option value="Cabang">Cabang</option>
									<option value="User">User</option>
									<option value="Viewer">Viewer</option>
									</select>
								</div>
								</div>
								
								<button name="simpan" type="submit" class="btn btn-success"><i class="fa fa-fw fa-plus"></i> Simpan</button>
								<button name="reset" type="reset" class="btn btn-danger"><i class="fas fa-sm fa-fw m-r-10 fa-redo-alt"></i>Reset</button>
							</form>
						</div>
						<!-- END card-body -->
					</div>
                    
                    
                    <div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
							<h4 class="card-header-title">Daftar User</h4>
							<div class="card-header-btn">
								
							</div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						
							 <table id="datatables-default" class="table table-bordered m-b-0">
								<thead>
									<tr>
										<th>No.</th>
										<th>Username</th>
										<th>Password</th>
										<th>Hak Akses</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
                                
                                  <?php
											$no = 1;
											$query = mysqli_query($koneksi, "select id, username, password, hak_akses from login");
											while($data = mysqli_fetch_array($query)){
											
						
											?>
                                
                                
									<tr>
										<td><?php echo $no++;?></td>
										<td><?php echo $data['username'];?></td>
										<td>***</td>
										<td><?php echo $data['hak_akses'];?></td>
										
										
										
										 <td><a href="?nav=ubahuser&id=<?php echo $data['id'];?>" class="btn btn-info"><i class="fas fa-sm fa-fw m-r-10 fa-pencil-alt"></i>Ubah</a>
										 <a href="?nav=hapususer&id=<?php echo $data['id'];?>" class="btn btn-danger"><i class="fas fa-sm fa-fw m-r-10 fa-trash-alt"></i>Hapus</a></td>
									</tr>
									 <?php
											}
										   ?>
								</tbody>
							</table>
						</div>
						<!-- END card-body -->
					</div>