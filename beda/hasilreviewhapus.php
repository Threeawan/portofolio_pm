<?php
if(isset($_POST['hapus'])){
	$query = mysqli_query($koneksi, "delete from review where id='".$_GET['id']."'");
?>
<script>alert('Data Berhasil Dihapus');</script>
<script>window.location='?nav=hasilreviewdata'</script>
<?php
}
?>
<?php
$query = mysqli_query($koneksi, "SELECT id, cabang, alamat, tanggal_kunjungan, inputer, h1a, h1b, h1c, h2a, h3a, h3b, h3c, h3d, h3e, h3f, h4a, komentar FROM review WHERE id='".$_GET['id']."'");
while($data = mysqli_fetch_array($query)){
$id = $data['id'];
$cabang = $data['cabang'];
$alamat = $data['alamat'];
$tanggal_kunjungan = $data['tanggal_kunjungan'];
$inputer = $data['inputer'];
$h1a = $data['h1a'];
$h1b = $data['h1b'];
$h1c = $data['h1c'];
$h2a = $data['h2a'];
$h3a = $data['h3a'];
$h3b = $data['h3b'];
$h3c = $data['h3c'];
$h3d = $data['h3d'];
$h3e = $data['h3e'];
$h3f = $data['h3f'];
$h4a = $data['h4a'];

$komentar = $data['komentar'];
}
?>

<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse"><strong>HAPUS HASIL REVIEW</strong></div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST">
							 <div class="form-group">
									<label for="exampleInputPassword1">Kantor Cabang/Kantor Kas</label>
									<input type="" class="form-control" id="exampleInputName" name="cabang" readonly="readonly" value="<?php echo $cabang; ?>">
							</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Alamat</label>
									<input type="" class="form-control" id="exampleInputName" name="alamat" readonly="readonly" value="<?php echo $alamat; ?>">
								</div>
                                
                                <div class="form-group">
									<label for="exampleInputPassword1">Tanggal Kunjungan</label>
									<input type="date" class="form-control" id="exampleInputName" placeholder="" name="tanggal_kunjungan" readonly="readonly" value="<?php echo $tanggal_kunjungan; ?>">
								</div>
								
								<div class="form-group">
									<label for="exampleInputPassword1">Inputer</label><br>
									<input type="text" class="form-control" id="exampleInputName" placeholder="" name="inputer" readonly="readonly" value="<?php echo $inputer; ?>">
								</div>
								<table cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse" class="table table-responsive">
								  <tr></tr>
								  <tr>
								    <td rowspan="3" align="left"><strong>ELECTRICITY</strong></td>
								    <td rowspan="3">Power</td>
							      </tr>
								  <tr>
								    <td>
								      <input type="text"  name="h1a" value="<?php echo $h1a;?>" readonly="readonly"></td>
							      </tr>
								  <tr></tr>
								  <tr>
								    <td></td>
								    <td>Genset</td>
								    <td><input type="text"  name="h1b2" value="<?php echo $h1b;?>" readonly="readonly" /></td>
							      </tr>
								  <tr>
								    <td rowspan="4" align="left"></td>
								    <td align="left">UPS</td>
								    <td><input type="text" name="h1c" value="<?php echo $h1c;?>" readonly="readonly" >								        </td>
							      </tr>
								  <tr>
								    <td></td>
							      </tr>
								  <tr></tr>
								  <tr></tr>
								  <tr></tr>
								  <tr>
								    <td rowspan="4" align="left"><strong>TEMPERATURE</strong></td>
								    <td align="left">Humidity</td>
								    <td><input type="text" name="h2a" value="<?php echo $h2a;?>" readonly="readonly" >								     </td>
							      </tr>
								  <tr>
								    <td align="left">Suhu</td>
								    <td><input type="text" name="h3a" value="<?php echo $h3a;?>" readonly="readonly">								     </td>
							      </tr>
								  <tr></tr>
								  <tr></tr>
								  <tr>
								    <td rowspan="2" align="left"><strong>PENANGKAL PETIR</strong></td>
								    <td></td>
								    <td align="left"><input type="text" name="h3b" value="<?php echo $h3b;?>" readonly="readonly">								      </td>
							      </tr>
								  <tr></tr>
								  <tr>
								    <td rowspan="4" align="left"><strong>WIRE/CABLING</strong></td>
								    <td>Power </td>
								    <td align="left"><input type="text" name="h3c" value="<?php echo $h3c;?>" readonly="readonly">								      </td>
							      </tr>
								  <tr>
								    <td align="left">UTP/LAN</td>
								    <td><input type="text" name="h3d" value="<?php echo $h3d;?>" readonly="readonly">								      </td>
							      </tr>
								  <tr></tr>
								  <tr></tr>
								  <tr></tr>
								  <tr>
								    <td rowspan="4" align="left"><strong>PREMISES</strong></td>
								    <td align="left">Room</td>
								    <td><input type="text" name="h3e" value="<?php echo $h3e;?>" readonly="readonly">								     </td>
							      </tr>
								  
								  <tr>
								    <td>Rack</td>
								    <td><input type="text" name="h3f" value="<?php echo $h3f;?>" readonly="readonly">								     </td>
							      </tr>
								  <tr>
								    <td align="left">A.P.A.R</td>
								    <td><input type="text" name="h4a" value="<?php echo $h4a;?>" readonly="readonly">								      </td>
							      </tr>
						    </table>
							
Isi komentar:<br/>  

 <textarea rows="5" cols="50" name="komentar" value="<?php echo $komentar;?>" readonly="readonly"></textarea><br/>  
    
								
								<br />
                          
                            <button type="submit" class="btn btn-danger" name="hapus"><i class="fas fa-sm fa-fw m-r-10 fa-trash-alt"></i>Hapus</button>
                            <a href="?nav=hasilreviewdata" class="btn btn-warning" name="kembali"><i class="fas fa-sm fa-fw m-r-10 fa-undo-alt"></i>Kembali</a>
                           
						  </form>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
