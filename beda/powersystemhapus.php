<?php
if(isset($_POST['hapus'])){
	$query = mysqli_query($koneksi, "delete from psk where id='".$_GET['id']."'");
?>
<script>alert('Data Berhasil Dihapus');</script>
<script>window.location='?nav=powersystemdata'</script>
<?php
}
?>

<?php
$query = mysqli_query($koneksi, "SELECT id, cabang, alamat, tanggal_kunjungan, inputer, h1a, h1b, h1c, h2a, h3a, h3b, h3c, h3d, h3e, 
h3f, h4a, h4b, h5a, h5b, h5c, h6a, h6b, h7a, h7b, h8a, h8b, h8c, h9a, h9b, k1a, k1b, k1c, k2a, k3a, k3b, 
k3c, k3d, k3e, k3f, k4a, k4b, k5a, k5b, k5c, k6a, k6b, k7a, k7b, k8a, k9a, k9b, l1a, l1b, l1c, l1d, l1e, 
l2a, l2b, l2c, l2d, l2e, m1a, m1b, m1c, m1d, m1e, m2a, m2b, m2c, m2d, m2e, n1a, n1b, n1c, n1d, n1e, n2a, 
n2b, n2c, n2d, n2e, o1a, o1b, o1c, o1d, o1e, o2a, o2b, o2c, o2d, o2e, p1a, p1b, p1c, p1d, p1e, p2a, p2b, 
p2c, p2d, p2e, q1a, q1b, q1c, q1d, q1e, q2a, q2b, q2c, q2d, q2e, r1a, r1b, r1c, r1d, r1e, r2a, r2b, r2c, 
r2d, r2e, s1a, s1b, s1c, s1d, s1e, s2a, s2b, s2c, s2d, s2e, t1a, t1b, t1c, t1d, t1e, t2a, t2b, t2c, t2d, 
t2e, u1a, u1b, u1c, u1d, u1e, u2a, u2b, u2c, u2d, u2e, v1a, v1b, v1c, v1d, v1e, v2a, v2b, v2c, v2d, v2e, 
w1a, w1b, w1c, w1d, w1e, w2a, w2b, w2c, w2d, w2e, x1a, x1b, x1c, x1d, x1e, x2a, x2b, x2c, x2d, x2e, y1a, 
y1b, y1c, y1d, y1e, y2a, y2b, y2c, y2d, y2e, z1a, z1b, z1c, z1d, z1e, z2a, z2b, a1a, a1b, a1c, a1d, b1a, 
b1b, b1c, b1d, b1e, b1f, b1g, c1a, c1b, c1c, c1d, c1e, c1f, c1g, router_1, router_2, switch_1, switch_2, 
switch_3, switch_4, switch_5, switch_6, switch_7, switch_8, switch_9, switch_10, switch_11, switch_12, 
switch_13, switch_14, switch_15, switch_16, switch_17, switch_18, switch_19, switch_20, switch_21, switch_22, 
server_1, server_2 FROM psk WHERE id='".$_GET['id']."'");

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
$h4b = $data['h4b'];
$h5a = $data['h5a'];
$h5b = $data['h5b'];
$h5c = $data['h5c'];
$h6a = $data['h6a'];
$h6b = $data['h6b'];
$h7a = $data['h7a'];
$h7b = $data['h7b'];
$h8a = $data['h8a'];
$h8b = $data['h8b'];
$h8c = $data['h8c'];
$h9a = $data['h9a'];
$h9b = $data['h9b'];
$k1a = $data['k1a'];	
$k1b = $data['k1b'];
$k1c = $data['k1c'];											
$k2a = $data['k2a'];	
$k3a = $data['k3a'];
$k3b = $data['k3b'];
$k3c = $data['k3c'];
$k3d = $data['k3d'];
$k3e = $data['k3e'];
$k3f = $data['k3f'];	
$k4a = $data['k4a'];
$k4b = $data['k4b'];
$k5a = $data['k5a'];
$k5b = $data['k5b'];
$k5c = $data['k5c'];
$k6a = $data['k6a'];
$k6b = $data['k6b'];
$k7a = $data['k7a'];
$k7b = $data['k7b'];
$k8a = $data['k8a'];
$k9a = $data['k9a'];
$k9b = $data['k9b'];
$l1a = $data['l1a'];
$l1b = $data['l1b'];
$l1c = $data['l1c'];
$l1d = $data['l1d'];
$l1e = $data['l1e'];
$l2a = $data['l2a'];
$l2b = $data['l2b'];
$l2c = $data['l2c'];
$l2d = $data['l2d'];
$l2e = $data['l2e'];
$m1a = $data['m1a'];
$m1b = $data['m1b'];
$m1c = $data['m1c'];
$m1d = $data['m1d'];
$m1e = $data['m1e'];
$m2a = $data['m2a'];
$m2b = $data['m2b'];
$m2c = $data['m2c'];
$m2d = $data['m2d'];
$m2e = $data['m2e'];
$n1a = $data['n1a'];
$n1b = $data['n1b'];
$n1c = $data['n1c'];
$n1d = $data['n1d'];
$n1e = $data['n1e'];
$n2a = $data['n2a'];
$n2b = $data['n2b'];
$n2c = $data['n2c'];
$n2d = $data['n2d'];
$n2e = $data['n2e'];
$o1a = $data['o1a'];
$o1b = $data['o1b'];
$o1c = $data['o1c'];
$o1d = $data['o1d'];
$o1e = $data['o1e'];
$o2a = $data['o2a'];
$o2b = $data['o2b'];
$o2c = $data['o2c'];
$o2d = $data['o2d'];
$o2e = $data['o2e'];
$p1a = $data['p1a'];
$p1b = $data['p1b'];
$p1c = $data['p1c'];
$p1d = $data['p1d'];
$p1e = $data['p1e'];
$p2a = $data['p2a'];
$p2b = $data['p2b'];
$p2c = $data['p2c'];
$p2d = $data['p2d'];
$p2e = $data['p2e'];
$q1a = $data['q1a'];
$q1b = $data['q1b'];
$q1c = $data['q1c'];
$q1d = $data['q1d'];
$q1e = $data['q1e'];
$q2a = $data['q2a'];
$q2b = $data['q2b'];
$q2c = $data['q2c'];
$q2d = $data['q2d'];
$q2e = $data['q2e'];
$r1a = $data['r1a'];
$r1b = $data['r1b'];
$r1c = $data['r1c'];
$r1d = $data['r1d'];
$r1e = $data['r1e'];
$r2a = $data['r2a'];
$r2b = $data['r2b'];
$r2c = $data['r2c'];
$r2d = $data['r2d'];
$r2e = $data['r2e'];
$s1a = $data['s1a'];
$s1b = $data['s1b'];
$s1c = $data['s1c'];
$s1d = $data['s1d'];
$s1e = $data['s1e'];
$s2a = $data['s2a'];
$s2b = $data['s2b'];
$s2c = $data['s2c'];
$s2d = $data['s2d'];
$s2e = $data['s2e'];
$t1a = $data['t1a'];
$t1b = $data['t1b'];
$t1c = $data['t1c'];
$t1d = $data['t1d'];
$t1e = $data['t1e'];
$t2a = $data['t2a'];
$t2b = $data['t2b'];
$t2c = $data['t2c'];
$t2d = $data['t2d'];
$t2e = $data['t2e'];
$u1a = $data['u1a'];
$u1b = $data['u1b'];
$u1c = $data['u1c'];
$u1d = $data['u1d'];
$u1e = $data['u1e'];
$u2a = $data['u2a'];
$u2b = $data['u2b'];
$u2c = $data['u2c'];
$u2d = $data['u2d'];
$u2e = $data['u2e'];
$v1a = $data['v1a'];
$v1b = $data['v1b'];
$v1c = $data['v1c'];
$v1d = $data['v1d'];
$v1e = $data['v1e'];
$v2a = $data['v2a'];
$v2b = $data['v2b'];
$v2c = $data['v2c'];
$v2d = $data['v2d'];
$v2e = $data['v2e'];
$w1a = $data['w1a'];
$w1b = $data['w1b'];
$w1c = $data['w1c'];
$w1d = $data['w1d'];
$w1e = $data['w1e'];
$w2a = $data['w2a'];
$w2b = $data['w2b'];
$w2c = $data['w2c'];
$w2d = $data['w2d'];
$w2e = $data['w2e'];
$x1a = $data['x1a'];
$x1b = $data['x1b'];
$x1c = $data['x1c'];
$x1d = $data['x1d'];
$x1e = $data['x1e'];
$x2a = $data['x2a'];
$x2b = $data['x2b'];
$x2c = $data['x2c'];
$x2d = $data['x2d'];
$x2e = $data['x2e'];
$y1a = $data['y1a'];
$y1b = $data['y1b'];
$y1c = $data['y1c'];
$y1d = $data['y1d'];
$y1e = $data['y1e'];
$y2a = $data['y2a'];
$y2b = $data['y2b'];
$y2c = $data['y2c'];
$y2d = $data['y2d'];
$y2e = $data['y2e'];
$z1a = $data['z1a'];
$z1b = $data['z1b'];
$z1c = $data['z1c'];
$z1d = $data['z1d'];
$z1e = $data['z1e'];
$z2a = $data['z2a'];
$z2b = $data['z2b'];
$a1a = $data['a1a'];
$a1b = $data['a1b'];
$a1c = $data['a1c'];
$a1d = $data['a1d'];
$b1a = $data['b1a'];
$b1b = $data['b1b'];
$b1c = $data['b1c'];
$b1d = $data['b1d'];
$b1e = $data['b1e'];
$b1f = $data['b1f'];
$b1g = $data['b1g'];
$c1a = $data['c1a'];
$c1b = $data['c1b'];
$c1c = $data['c1c'];
$c1d = $data['c1d'];
$c1e = $data['c1e'];
$c1f = $data['c1f'];
$c1g = $data['c1g'];
$router_1 = $data['router_1'];
$router_2 = $data['router_2'];
$switch_1 = $data['switch_1'];
$switch_2 = $data['switch_2'];
$switch_3 = $data['switch_3'];
$switch_4 = $data['switch_4'];
$switch_5 = $data['switch_5'];
$switch_6 = $data['switch_6'];
$switch_7 = $data['switch_7'];
$switch_8 = $data['switch_8'];
$switch_9 = $data['switch_9'];
$switch_10 = $data['switch_10'];
$switch_11 = $data['switch_11'];
$switch_12 = $data['switch_12'];
$switch_13 = $data['switch_13'];
$switch_14 = $data['switch_14'];
$switch_15 = $data['switch_15'];
$switch_16 = $data['switch_16'];
$switch_17 = $data['switch_17'];
$switch_18 = $data['switch_18'];
$switch_19 = $data['switch_19'];
$switch_20 = $data['switch_20'];
$switch_21 = $data['switch_21'];
$switch_22 = $data['switch_22'];
$server_1 = $data['server_1'];
$server_2 = $data['server_2'];


}
?>

                               
                                
			<tr>
            
            <?php
            //memanggil file koneksi
            include "koneksi.php";
            //query mengambil data dari tabel gambar di database
			
            $tampil = mysqli_query($koneksi,"select * from psk");
			$sql = mysqli_num_rows($tampil);
            while($hasil = mysqli_fetch_array($tampil)){
            ?>
			<?php	
			}
			?>
			
			
			
		

<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <div align="center"><strong>HAPUS PREVENTIVE MAINTENANCE</strong></div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST">
						<div class="form-group">
									<label for="exampleInputName">Kantor Cabang/Kantor Kas</label>
									<input type="" class="form-control" id="exampleInputName" name="cabang" readonly="readonly" value="<?php echo $cabang; ?>">
							</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Alamat</label>
									<input type="" class="form-control" id="exampleInputName" name="alamat" readonly="readonly" value="<?php echo $alamat; ?>">
								</div>
                                
                                <div class="form-group">
									<label for="exampleInputPassword1">Tanggal Kunjungan</label>
									<input type="date" class="form-control" id="exampleInputName" name="tanggal_kunjungan" readonly="readonly" value="<?php echo $tanggal_kunjungan; ?>">
								</div>
								
								
							<div class="form-group">
									<label for="exampleInputPassword1">Inputer</label>
									<input type="text" class="form-control" id="exampleInputName" name="inputer" readonly="readonly" value="<?php echo $inputer; ?>">
								</div>
							<table cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse" class="table table-responsive">
							  <tr></tr>
							  <tr>
							    <td rowspan="3" align="left"><strong>ELECTRICITY</strong></td>
							    <td rowspan="3">Power</td>
						      </tr>
							  <tr>
							    <td>PLN
							      <input style="font-style:italic;font-size:12px;"  type="text" name="h1a" size="10"  value="<?php echo $h1a;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr></tr>
							  <tr>
							    <td></td>
							    <td>Genset</td>
							    <td>
							      <input type="text" name="h1b" value="<?php echo $h1b;?>" readonly="readonly" class="form-control" >
						        </td>
						      </tr>
							  <tr>
							    <td rowspan="4" align="left"></td>
							    <td align="left">UPS</td>
							    <td><input type="text" name="h1c" value="<?php echo $h1c;?>" readonly="readonly" class="form-control" >
								        
							      <input type="text" name="h2a" value="<?php echo $h2a;?>" readonly="readonly" class="form-control" >
						        </td>
							    <td>Grounding
							      <input style="font-style:italic;font-size:12px;" type="text" name="h3a" size="5" value="<?php echo $h3a;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							 
							  <tr></tr>
							  <tr></tr>
							  <tr></tr>
							  <tr>
							    <td rowspan="4" align="left"><strong>TEMPERATURE</strong></td>
							    <td align="left">Humidity</td>
							    <td><input type="text" size="10" name="h3b" value="<?php echo $h3b;?>" readonly="readonly" class="form-control" />
							      %</td>
						      </tr>
							  <tr>
							    <td align="left">Suhu</td>
							    <td><input type="text" size="10" name="h3c" value="<?php echo $h3c;?>" readonly="readonly" class="form-control" />
							      ˚C</td>
						      </tr>
							  <tr></tr>
							  <tr></tr>
							  <tr>
							    <td rowspan="2" align="left"><strong>PENANGKAL PETIR</strong></td>
							    <td></td>
							    <td align="left"><input type="text" name="h3d" value="<?php echo $h3d;?>" readonly="readonly" class="form-control" >
						        </td>
						      </tr>
							  <tr></tr>
							  <tr>
							    <td rowspan="4" align="left"><strong>WIRE</strong></td>
							    <td>Power </td>
							    <td align="left"><input type="text" name="h3e" value="<?php echo $h3e;?>" readonly="readonly" class="form-control" >
						        </td>
						      </tr>
							  <tr>
							    <td align="left">UTP</td>
							    <td><input type="text" name="h3f" value="<?php echo $h3f;?>" readonly="readonly" class="form-control" >
						        </td>
						      </tr>
							  <tr></tr>
							  <tr></tr>
							  <tr></tr>
							  <tr>
							    <td rowspan="4" align="left"><strong>PREMISES</strong></td>
							    <td align="left">Room</td>
							    <td><input type="text" name="h4a" value="<?php echo $h4a;?>" readonly="readonly" class="form-control" >
						        </td>
						      </tr>
							  <tr>
							    <td align="left">Space</td>
							    <td><input type="text" name="h4b" value="<?php echo $h4b;?>" readonly="readonly" class="form-control" >
						        </td>
						      </tr>
							  <tr>
							    <td>Rack</td>
							    <td><input type="text" name="h5a" value="<?php echo $h5a;?>" readonly="readonly" class="form-control" >
						        </td>
						      </tr>
							  <tr>
							    <td align="left">A.P.A.R</td>
							    <td><input type="text" name="h5b" value="<?php echo $h5b;?>" readonly="readonly" class="form-control" >
						        </td>
						      </tr>
							  <tr>
							    <td rowspan="4" align="left"><strong>INVENTORY</strong></td>
							    <td align="left">Router</td>
							    <td>Router 1</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="h5c" size="15"  value="<?php echo $h5c;?>" readonly="readonly"  class="form-control" /></td>
							    <td>Type
							      <input type="text" name="h6a" value="<?php echo $h6a;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="h6b" value="<?php echo $h6b;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  <td>
							      <?php if($router_1!=''){ ?><a href="<?php echo $router_1; ?>" target="_blank">Lihat Router 1</a><?php } ?></td>
                                  
                                  
							    <td>Mainlink
							      <input style="font-style:italic;font-size:12px;" type="text" name="h7a"  size="8" value="<?php echo $h7a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Backuplink
							      <input style="font-style:italic;font-size:12px;" type="text" name="h7b" size="8" value="<?php echo $h7b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="h8a"  size="8" value="<?php echo $h8a;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td align="left"></td>
							    <td>Router 2</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="h8b" size="15"  value="<?php echo $h8b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="h8c" value="<?php echo $h8c;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="h9a" value="<?php echo $h9a;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  
                                  <td>
							      <?php if($router_2!=''){ ?><a href="<?php echo $router_2; ?>" target="_blank">Lihat Router 2</a><?php } ?></td>
                                  
							    <td>Mainlink
							      <input style="font-style:italic;font-size:12px;" type="text" name="h9b"  size="8" value="<?php echo $h9b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Backuplink
							      <input style="font-style:italic;font-size:12px;" type="text" name="k1a"  size="8" value="<?php echo $k1a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="k1b"  size="8" value="<?php echo $k1b;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td>Switchub</td>
							    <td>Switch 1</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="k1c" size="15"  value="<?php echo $k1c;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="k2a" value="<?php echo $k2a;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="k3a" value="<?php echo $k3a;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  
                                   <td>
							     <?php if($switch_1!=''){ ?><a href="<?php echo $switch_1; ?>" target="_blank">Lihat Switch 1</a><?php } ?></td>
                                  
                                  
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="k3b"  size="8" value="<?php echo $k3b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="k3c"  size="8" value="<?php echo $k3c;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="k3d"  size="8" value="<?php echo $k3d;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="k3e"  size="8" value="<?php echo $k3e;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td align="left"></td>
							    <td>Switch 2</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="k3f" size="15"  value="<?php echo $k3f;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="k4a" value="<?php echo $k4a;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="k4b" value="<?php echo $k4b;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  
                                  <td>
							       <?php if($switch_2!=''){ ?><a href="<?php echo $switch_2; ?>" target="_blank">Lihat Switch 2</a><?php } ?></td>
                                  
                                  
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="k5a"  size="8" value="<?php echo $k5a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="k5b"  size="8" value="<?php echo $k5b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="k5c"  size="8" value="<?php echo $k5c;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="k6a"  size="8" value="<?php echo $k6a;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td rowspan="4" align="left"></td>
							    <td align="left"></td>
							    <td>Switch 3</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="k6b" size="15"  value="<?php echo $k6b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="k7a" value="<?php echo $k7a;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="k7b" value="<?php echo $k7b;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  <td>
							      <?php if($switch_3!=''){ ?><a href="<?php echo $switch_3; ?>" target="_blank">Lihat Switch 3</a><?php } ?></td>
                                  
                                  
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="k8a"  size="8" value="<?php echo $k8a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="k9a" size="8" value="<?php echo $k9a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="k9b" size="8" value="<?php echo $k9b;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="l1a"  size="8" value="<?php echo $l1a;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td align="left"></td>
							    <td>Switch 4</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="l1b" size="15"  value="<?php echo $l1b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="l1c" value="<?php echo $l1c;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="l1d" value="<?php echo $l1d;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  
                                  <td>
							       <?php if($switch_4!=''){ ?><a href="<?php echo $switch_4; ?>" target="_blank">Lihat Switch 4</a><?php } ?></td>
                                  
                                  
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="l1e"  size="8" value="<?php echo $l1e;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="l2a" size="8" value="<?php echo $l2a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="l2b"  size="8" value="<?php echo $l2b;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="l2c"  size="8" value="<?php echo $l2c;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td></td>
							    <td>Switch 5</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="l2d" size="15"  value="<?php echo $l2d;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="l2e" value="<?php echo $l2e;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="m1a" value="<?php echo $m1a;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  
                                  <td>
							       <?php if($switch_5!=''){ ?><a href="<?php echo $switch_5; ?>" target="_blank">Lihat Switch 5</a><?php } ?></td>
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="m1b" size="8" value="<?php echo $m1b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="m1c"  size="8" value="<?php echo $m1c;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="m1d" size="8" value="<?php echo $m1d;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="m1e"  size="8" value="<?php echo $m1e;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td align="left"></td>
							    <td>Switch 6</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="m2a" size="15"  value="<?php echo $m2a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="m2b" value="<?php echo $m2b;?>" size="10" readonly="readonly"  class="form-control" /></td>
							    <td>SN
							      <input type="text" name="m2c" value="<?php echo $m2c;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  <td>
							       <?php if($switch_6!=''){ ?><a href="<?php echo $switch_6; ?>" target="_blank">Lihat Switch 6</a><?php } ?></td>
                                  
                                  
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="m2d"  size="8" value="<?php echo $m2d;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="m2e"  size="8" value="<?php echo $m2e;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="n1a"  size="8" value="<?php echo $n1a;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="n1b"  size="8" value="<?php echo $n1b;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td rowspan="4" align="left"></td>
							    <td align="left"></td>
							    <td>Switch 7</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="n1c" size="15" value="<?php echo $n1c;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="n1d" value="<?php echo $n1d;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="n1e" value="<?php echo $n1e;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  
                                  <td>
							       <?php if($switch_7!=''){ ?><a href="<?php echo $switch_7; ?>" target="_blank">Lihat Switch 7</a><?php } ?></td>
                                  
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="n2a"  size="8" value="<?php echo $n2a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="n2b"  size="8" value="<?php echo $n2b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="n2c"  size="8" value="<?php echo $n2c;?>" readonly="readonly" class="form-control" / ></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="n2d" size="8" value="<?php echo $n2d;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td align="left"></td>
							    <td>Switch 8</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="n2e" size="15"  value="<?php echo $n2e;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="o1a" value="<?php echo $o1a;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="o1b" value="<?php echo $o1b;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  <td>
							       <?php if($switch_8!=''){ ?><a href="<?php echo $switch_8; ?>" target="_blank">Lihat Switch 8</a><?php } ?></td>
                                  
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="o1c"  size="8" value="<?php echo $o1c;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="o1d" size="8" value="<?php echo $o1d;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="o1e" size="8" value="<?php echo $o1e;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="o2a"  size="8" value="<?php echo $o2a;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td></td>
							    <td>Switch 9</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="o2b" size="15"  value="<?php echo $o2b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="o2c" value="<?php echo $o2c;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="o2d" value="<?php echo $o2d;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  
                                  <td>
							      <?php if($switch_9!=''){ ?><a href="<?php echo $switch_9; ?>" target="_blank">Lihat Switch 9</a><?php } ?></td>
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="o2e"  size="8" value="<?php echo $o2e;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="p1a"  size="8" value="<?php echo $p1a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="p1b" size="8" value="<?php echo $p1b;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="p1c"  size="8" value="<?php echo $p1c;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td align="left"></td>
							    <td>Switch 10</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="p1d" size="15" value="<?php echo $p1d;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="p1e" value="<?php echo $p1e;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="p2a" value="<?php echo $p2a;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  <td>
							       <?php if($switch_10!=''){ ?><a href="<?php echo $switch_10; ?>" target="_blank">Lihat Switch 10</a><?php } ?></td>
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="p2b"  size="8" value="<?php echo $p2b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="p2c"  size="8" value="<?php echo $p2c;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="p2d"  size="8" value="<?php echo $p2d;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;"  type="text" name="p2e"  size="8" value="<?php echo $p2e;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td rowspan="4" align="left"></td>
							    <td align="left"></td>
							    <td>Switch 11</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="q1a" size="15"  value="<?php echo $q1a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="q1b" value="<?php echo $q1b;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="q1c" value="<?php echo $q1c;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  
                                  <td>
							       <?php if($switch_11!=''){ ?><a href="<?php echo $switch_11; ?>" target="_blank">Lihat Switch 11</a><?php } ?></td>
                                  
                                  
                                  
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="q1d" size="8"  value="<?php echo $q1d;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="q1e"  size="8" value="<?php echo $q1e;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="q2a"  size="8" value="<?php echo $q2a;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="q2b"  size="8" value="<?php echo $q2b;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td align="left"></td>
							    <td>Switch 12</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="q2c" size="15"  value="<?php echo $q2c;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="q2d" value="<?php echo $q2d;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="q2e" value="<?php echo $q2e;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  <td>
							       <?php if($switch_12!=''){ ?><a href="<?php echo $switch_12; ?>" target="_blank">Lihat Switch 12</a><?php } ?></td>
                                  
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="r1a"  size="8" value="<?php echo $r1a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="r1b"  size="8" value="<?php echo $r1b;?>" readonly="readonly"/></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="r1c" size="8" value="<?php echo $r1c;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="r1d"  size="8" value="<?php echo $r1d;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td></td>
							    <td>Switch 13</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="r1e" size="15" value="<?php echo $r1e;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="r2a" value="<?php echo $r2a;?>"size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="r2b" value="<?php echo $r2b;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  
                                  <td>
							     <?php if($switch_13!=''){ ?><a href="<?php echo $switch_13; ?>" target="_blank">Lihat Switch 13</a><?php } ?></td>
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="r2c"  size="8" value="<?php echo $r2c;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="r2d" size="8" value="<?php echo $r2d;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="r2e" size="8" value="<?php echo $r2e;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="s1a"  size="8" value="<?php echo $s1a;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td></td>
							    <td>Switch 14</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="s1b" size="15" value="<?php echo $s1b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="s1c" value="<?php echo $s1c;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="s1d" value="<?php echo $s1d;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  
                                  
                                  <td>
							      <?php if($switch_14!=''){ ?><a href="<?php echo $switch_14; ?>" target="_blank">Lihat Switch 14</a><?php } ?></td>
                                  
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="s1e"  size="8" value="<?php echo $s1e;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="s2a" size="8" value="<?php echo $s2a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="s2b" size="8" value="<?php echo $s2b;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="s2c"  size="8" value="<?php echo $s2c;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td rowspan="4" align="left"></td>
							    <td align="left"></td>
							    <td>Switch 15</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="s2d" size="15"  value="<?php echo $s2d;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="s2e" value="<?php echo $s2e;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="t1a" value="<?php echo $t1a;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  <td>
							       <?php if($switch_15!=''){ ?><a href="<?php echo $switch_15; ?>" target="_blank">Lihat Switch 15</a><?php } ?></td>
                                  
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="t1b"  size="8" value="<?php echo $t1b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="t1c"  size="8" value="<?php echo $t1c;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="t1d" size="8" value="<?php echo $t1d;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="t1e"  size="8" value="<?php echo $t1e;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td align="left"></td>
							    <td>Switch 16</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="t2a" size="15" value="<?php echo $t2a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="t2b" value="<?php echo $t2b;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="t2c" value="<?php echo $t2c;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  
                                  <td>
							      <?php if($switch_16!=''){ ?><a href="<?php echo $switch_16; ?>" target="_blank">Lihat Switch 16</a><?php } ?></td>
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="t2d" size="8" value="<?php echo $t2d;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="t2e"  size="8" value="<?php echo $t2e;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="u1a"  size="8" value="<?php echo $u1a;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="u1b"  size="8" value="<?php echo $u1b;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td></td>
							    <td>Switch 17</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="u1c" size="15" value="<?php echo $u1c;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="u1d" value="<?php echo $u1d;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="u1e" value="<?php echo $u1e;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  
                                  <td>
							      <?php if($switch_17!=''){ ?><a href="<?php echo $switch_17; ?>" target="_blank">Lihat Switch 17</a><?php } ?></td>
                                  
                                  
							    <td>Trunk (99)
   							      <input style="font-style:italic;font-size:12px;" type="text" name="u2a"  value="<?php echo $u2a;?>" size="8" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="u2b" size="8" value="<?php echo $u2b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="u2c" size="8" value="<?php echo $u2c;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="u2d"  size="8" value="<?php echo $u2d;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td></td>
							    <td>Switch 18</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="u2e" size="15" value="<?php echo $u2e;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="v1a" value="<?php echo $v1a;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="v1b" value="<?php echo $v1b;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  <td>
							       <?php if($switch_18!=''){ ?><a href="<?php echo $switch_18; ?>" target="_blank">Lihat Switch 18</a><?php } ?></td>
                                  
                                  
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="v1c"  size="8" value="<?php echo $v1c;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="v1d"  size="8" value="<?php echo $v1d;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="v1e"  size="8" value="<?php echo $v1e;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="v2a"  size="8" value="<?php echo $v2a;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td></td>
							    <td></td>
							    <td>Switch 19</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="v2b" size="15"  value="<?php echo $v2b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="v2c" value="<?php echo $v2c;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="v2d" value="<?php echo $v2d;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  <td>
							      <?php if($switch_19!=''){ ?><a href="<?php echo $switch_19; ?>" target="_blank">Lihat Switch 19</a><?php } ?></td>
                                  
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="v2e" size="8" value="<?php echo $v2e;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server (2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="w1a"  size="8" value="<?php echo $w1a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="w1b" size="8" value="<?php echo $w1b;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9) <input style="font-style:italic;font-size:12px;" type="text" name="w1c"  size="8" value="<?php echo $w1c;?>" readonly="readonly" class="form-control" />							      </td>
						      </tr>
							  <tr>
							    <td></td>
							    <td></td>
							    <td>Switch 20</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="w1d"  size="15"  value="<?php echo $w1d;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="w1e" value="<?php echo $w1e;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="w2a" value="<?php echo $w2a;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  <td>
							      <?php if($switch_20!=''){ ?><a href="<?php echo $switch_20; ?>" target="_blank">Lihat Switch 20</a><?php } ?></td>
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="w2b"  size="8" value="<?php echo $w2b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server(2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="w2c" size="8" value="<?php echo $w2c;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="w2d"  size="8" value="<?php echo $w2d;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="w2e" size="8" value="<?php echo $w2e;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
                              
                              <tr>
							    <td></td>
							    <td></td>
							    <td>Switch 21</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="b1a"  size="15"  value="<?php echo $b1a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="b1b" value="<?php echo $b1b;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="b1c" value="<?php echo $b1c;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  <td>
							      <?php if($switch_21!=''){ ?><a href="<?php echo $switch_21; ?>" target="_blank">Lihat Switch 21</a><?php } ?></td>
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="b1d"  size="8" value="<?php echo $b1d;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server(2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="b1e" size="8" value="<?php echo $b1e;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="b1f" size="8" value="<?php echo $b1f;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="b1g"  size="8" value="<?php echo $b1g;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
                              
                              
                              <tr>
							    <td></td>
							    <td></td>
							    <td>Switch 22</td>
							    <td>Merk
							      <input style="font-style:italic;font-size:12px;" type="text" name="c1a"  size="15"  value="<?php echo $c1a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Type
							      <input type="text" name="c1b" value="<?php echo $c1b;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="c1c" value="<?php echo $c1c;?>" size="10" readonly="readonly" class="form-control" /></td>
                                  <td>
							      <?php if($switch_22!=''){ ?><a href="<?php echo $switch_22; ?>" target="_blank">Lihat Switch 22</a><?php } ?></td>
                                  
							    <td>Trunk (99)
							      <input style="font-style:italic;font-size:12px;" type="text" name="c1d" size="8" value="<?php echo $c1d;?>" readonly="readonly" class="form-control" /></td>
							    <td>Server(2)
							      <input style="font-style:italic;font-size:12px;" type="text" name="c1e"  size="8" value="<?php echo $c1e;?>" readonly="readonly" class="form-control" /></td>
							    <td>Client (3,5,6,7,8)
							      <input style="font-style:italic;font-size:12px;" type="text" name="c1f"  size="8" value="<?php echo $c1f;?>" readonly="readonly" class="form-control" /></td>
							    <td>ATM(9)
							      <input style="font-style:italic;font-size:12px;" type="text" name="c1g" size="8" value="<?php echo $c1g;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
                              
							  <tr>
							    <td align="left"><strong>SERVER HARDWARE</strong></td>
							    <td><input style="font-style:italic;font-size:12px;" type="text" name="x1a" size="12" value="<?php echo $x1a;?>" readonly="readonly" class="form-control" /></td>
							    <td><input style="font-style:italic;font-size:12px;" type="text" name="x1b" size="12" value="<?php echo $x1b;?>" readonly="readonly" class="form-control" /></td>
							    <td>Merk <input type="text" name="x1c" value="<?php echo $x1c;?>" size="10" readonly="readonly" class="form-control" ></td>
							    
							    <td>Type
							      <input type="text" name="x1d" value="<?php echo $x1d;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" name="x1e" value="<?php echo $x1e;?>" size="8" readonly="readonly" class="form-control" /></td>
                                  
                                  <td>
							       <?php if($server_1!=''){ ?><a href="<?php echo $server_1; ?>" target="_blank">Lihat Server 1</a><?php } ?></td>
                                  
                                  
							    <td>Restart Server
							      <input type="text"  name="x2a" value="<?php echo $x2a;?>" size="8" readonly="readonly" class="form-control" >
						        </td>
							    <td>Status
							      <input type="text" name="x2b" value="<?php echo $x2b;?>" size="8" readonly="readonly" class="form-control" >
						        </td>
						      </tr>
							  <tr>
							    <td align="left"></td>
							    <td></td>
							    <td></td>
							    <td>Processor
							      <input style="font-style:italic;font-size:12px;" type="text" name="x2c" size="15"  value="<?php echo $x2c;?>" readonly="readonly" class="form-control" /></td>
							    <td>HDD
							      <input type="text"  name="x2d" value="<?php echo $x2d;?>" size="10" readonly="readonly" class="form-control" >
						        </td>
							    <td>RAM
							      <input type="text"  name="x2e" value="<?php echo $x2e;?>" size="10" readonly="readonly" class="form-control" >
						        </td>
							    <td>Free Space
							      <input style="font-style:italic;font-size:12px;" type="text" name="y1a" size="8" value="<?php echo $y1a;?>" readonly="readonly" class="form-control" /></td>
							    <td>Free Space
							      <input style="font-style:italic;font-size:12px;" type="text" name="y1b" size="8" value="<?php echo $y1b;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td align="left"></td>
							    <td></td>
							    <td></td>
							    <td>Symantec AV
							      <input style="font-style:italic;font-size:12px;" type="text" name="y1c" size="15"  value="<?php echo $y1c;?>" readonly="readonly" class="form-control" /></td>
							    <td>Update
							      <input style="font-style:italic;font-size:12px;" type="text" name="y1d"  size="12" value="<?php echo $y1d;?>" readonly="readonly" class="form-control" /></td>
							    <td></td></td>
						      </tr>
							  <tr>
							    <td align="left"></td>
							    <td></td>
							    <td></td>
							    <td>Ping 192.168.12.1
							      <input type="text"  name="y1e" size="15" value="<?php echo $y1e;?>" readonly="readonly" class="form-control" >
						        </td>
							    <td>Time
							      <input style="font-style:italic;font-size:12px;" type="text" name="y2a" size="10" value="<?php echo $y2a;?>"readonly="readonly" class="form-control" /></td>
							    <td>Ping 10.164.xxx.126
							      <input type="text" name="y2b" value="<?php echo $y2b;?>" size="10" readonly="readonly" class="form-control" >
						        </td>
						      </tr>
							  <tr>
							    <td align="left"></td>
							    <td><input style="font-style:italic;font-size:12px;" type="text" name="y2c"  size="12"  value="<?php echo $y2c;?>" readonly="readonly" class="form-control" /></td>
							    <td><input style="font-style:italic;font-size:12px;" type="text" name="y2d" size="15"  value="<?php echo $y2d;?>" readonly="readonly" class="form-control" /></td>
							    <td>Merk
							      <input type="text"  name="y2e" size="15" value="<?php echo $y2e;?>" readonly="readonly" class="form-control" >
						        </td>
							    <td>Type
							      <input type="text" name="z1a" value="<?php echo $z1a;?>" size="10" readonly="readonly" class="form-control" /></td>
							    <td>SN
							      <input type="text" size="10" name="z1b" value="<?php echo $z1b;?>" readonly="readonly" class="form-control" /></td>
                                  <td>
							      <?php if($server_2!=''){ ?><a href="<?php echo $server_2; ?>" target="_blank">Lihat Server 2</a><?php } ?></td>
                                  
							    <td>OS
							      <input type="text" size="12" name="z1c" value="<?php echo $z1c;?>" readonly="readonly" class="form-control" /></td>
							    <td>Aplikasi
							      <input type="text" size="8" name="z1d"  value="<?php echo $z1d;?>" readonly="readonly" class="form-control" /></td>
						      </tr>
							  <tr>
							    <td align="left"><strong>COMMUNICATION</strong></td>
							    <td>Mainlink
							      <input type="text" name="z1e" value="<?php echo $z1e;?>" readonly="readonly" class="form-control" >
						        </td>
							    <td>Backuplink
							      <input type="text"  name="z2a" value="<?php echo $z2a;?>" readonly="readonly" class="form-control" >
						        </td>
							    <td>UTP Modem to Router
							      <input type="text" name="z2b" value="<?php echo $z2b;?>" size="15" readonly="readonly" class="form-control" >
						        </td>
							   <td>UTP Router to Switch
							      <input type="text" name="a1a" value="<?php echo $a1a;?>" readonly="readonly" class="form-control" >
						        </td>
                                  <td>UTP Switch to Switch
							      <input type="text"  name="a1b" value="<?php echo $a1b;?>" readonly="readonly" class="form-control" >
						        </td>
                                  
							    <td>UTP ATM to Switch
							      <input type="text"  name="a1c" size="15" value="<?php echo $a1c;?>" readonly="readonly" class="form-control" >
						        </td>
							   <td>10.xxx.xxx.254
							      <input type="text"  name="a1d" value="<?php echo $a1d;?>" size="10" readonly="readonly" class="form-control" >
						        </td>
						      </tr>
							 
						    </table>
							<br />
                           <button type="submit" class="btn btn-danger" name="hapus"><i class="fas fa-sm fa-fw m-r-10 fa-trash-alt"></i>Hapus</button>
                            <a href="?nav=powersystemdata" class="btn btn-warning" name="kembali"><i class="fas fa-sm fa-fw m-r-10 fa-undo-alt"></i>Kembali</a> 
							
						
						  </form>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
