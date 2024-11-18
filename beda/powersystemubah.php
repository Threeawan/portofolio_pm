<?php
if(isset($_POST['ubah'])){
	$query = mysqli_query ($koneksi, "update psk set cabang='".$_POST['cabang']."', alamat='".$_POST['alamat']."', tanggal_kunjungan='".$_POST['tanggal_kunjungan']."', inputer='".$_POST['inputer']."', h1a='".$_POST['h1a']."', h1b='".$_POST['h1b']."', h1c='".$_POST['h1c']."', h2a='".$_POST['h2a']."', h3a='".$_POST['h3a']."', h3b='".$_POST['h3b']."', h3c='".$_POST['h3c']."', h3d='".$_POST['h3d']."', h3e='".$_POST['h3e']."', h3f='".$_POST['h3f']."', h4a='".$_POST['h4a']."', h4b='".$_POST['h4b']."', h5a='".$_POST['h5a']."', h5b='".$_POST['h5b']."', h5c='".$_POST['h5c']."', h6a='".$_POST['h6a']."' , h6b='".$_POST['h6b']."' , h7a='".$_POST['h7a']."', h7b='".$_POST['h7b']."', h8a='".$_POST['h8a']."', h8b='".$_POST['h8b']."' , h8c='".$_POST['h8c']."' , h9a='".$_POST['h9a']."', h9b='".$_POST['h9b']."', k1a='".$_POST['k1a']."', k1b='".$_POST['k1b']."' , k1c='".$_POST['k1c']."' , k2a='".$_POST['k2a']."', k3a='".$_POST['k3a']."', k3b='".$_POST['k3b']."', k3c='".$_POST['k3c']."', k3d='".$_POST['k3d']."' , k3e='".$_POST['k3e']."' , k3f='".$_POST['k3f']."' , k4a='".$_POST['k4a']."', k4b='".$_POST['k4b']."', k5a='".$_POST['k5a']."', k5b='".$_POST['k5b']."', k5c='".$_POST['k5c']."', k6a='".$_POST['k6a']."', k6b='".$_POST['k6b']."' , k7a='".$_POST['k7a']."' , k7b='".$_POST['k7b']."' , k8a='".$_POST['k8a']."' , k9a='".$_POST['k9a']."', k9b='".$_POST['k9b']."', l1a='".$_POST['l1a']."', l1b='".$_POST['l1b']."', l1c='".$_POST['l1c']."', l1d='".$_POST['l1d']."', l1e='".$_POST['l1e']."', l2a='".$_POST['l2a']."', l2b='".$_POST['l2b']."', l2c='".$_POST['l2c']."', l2d='".$_POST['l2d']."', l2e='".$_POST['l2e']."', m1a='".$_POST['m1a']."', m1b='".$_POST['m1b']."', m1c='".$_POST['m1c']."', m1d='".$_POST['m1d']."', m1e='".$_POST['m1e']."', m2a='".$_POST['m2a']."', m2b='".$_POST['m2b']."', m2c='".$_POST['m2c']."', m2d='".$_POST['m2d']."', m2e='".$_POST['m2e']."', n1a='".$_POST['n1a']."', n1b='".$_POST['n1b']."', n1c='".$_POST['n1c']."', n1d='".$_POST['n1d']."', n1e='".$_POST['n1e']."', n2a='".$_POST['n2a']."', n2b='".$_POST['n2b']."', n2c='".$_POST['n2c']."', n2d='".$_POST['n2d']."', n2e='".$_POST['n2e']."', o1a='".$_POST['o1a']."', o1b='".$_POST['o1b']."', o1c='".$_POST['o1c']."', o1d='".$_POST['o1d']."', o1e='".$_POST['o1e']."', o2a='".$_POST['o2a']."', o2b='".$_POST['o2b']."', o2c='".$_POST['o2c']."', o2d='".$_POST['o2d']."', o2e='".$_POST['o2e']."', p1a='".$_POST['p1a']."', p1b='".$_POST['p1b']."', p1c='".$_POST['p1c']."', p1d='".$_POST['p1d']."', p1e='".$_POST['p1e']."', p2a='".$_POST['p2a']."', p2b='".$_POST['p2b']."', p2c='".$_POST['p2c']."', p2d='".$_POST['p2d']."', p2e='".$_POST['p2e']."' , q1a='".$_POST['q1a']."' , q1b='".$_POST['q1b']."', q1c='".$_POST['q1c']."', q1d='".$_POST['q1d']."' , q1e='".$_POST['q1e']."', q2a='".$_POST['q2a']."' , q2b='".$_POST['q2b']."', q2c='".$_POST['q2c']."', q2d='".$_POST['q2d']."', q2e='".$_POST['q2e']."', r1a='".$_POST['r1a']."', r1b='".$_POST['r1b']."', r1c='".$_POST['r1c']."', r1d='".$_POST['r1d']."', r1e='".$_POST['r1e']."', r2a='".$_POST['r2a']."', r2b='".$_POST['r2b']."', r2c='".$_POST['r2c']."', r2d='".$_POST['r2d']."', r2e='".$_POST['r2e']."', s1a='".$_POST['s1a']."', s1b='".$_POST['s1b']."', s1c='".$_POST['s1c']."', s1d='".$_POST['s1d']."', s1e='".$_POST['s1e']."', s2a='".$_POST['s2a']."', s2b='".$_POST['s2b']."', s2c='".$_POST['s2c']."', s2d='".$_POST['s2d']."', s2e='".$_POST['s2e']."', t1a='".$_POST['t1a']."', t1b='".$_POST['t1b']."', t1c='".$_POST['t1c']."', t1d='".$_POST['t1d']."', t1e='".$_POST['t1e']."', t2a='".$_POST['t2a']."', t2b='".$_POST['t2b']."', t2c='".$_POST['t2c']."', t2d='".$_POST['t2d']."', t2e='".$_POST['t2e']."', u1a='".$_POST['u1a']."', u1b='".$_POST['u1b']."', u1c='".$_POST['u1c']."', u1d='".$_POST['u1d']."', u1e='".$_POST['u1e']."', u2a='".$_POST['u2a']."', u2b='".$_POST['u2b']."', u2c='".$_POST['u2c']."', u2d='".$_POST['u2d']."', u2e='".$_POST['u2e']."', v1a='".$_POST['v1a']."', v1b='".$_POST['v1b']."', v1c='".$_POST['v1c']."', v1d='".$_POST['v1d']."', v1e='".$_POST['v1e']."', v2a='".$_POST['v2a']."', v2b='".$_POST['v2b']."', v2c='".$_POST['v2c']."', v2d='".$_POST['v2d']."', v2e='".$_POST['v2e']."', w1a='".$_POST['w1a']."', w1b='".$_POST['w1b']."', w1c='".$_POST['w1c']."', w1d='".$_POST['w1d']."', w1e='".$_POST['w1e']."', w2a='".$_POST['w2a']."', w2b='".$_POST['w2b']."', w2c='".$_POST['w2c']."', w2d='".$_POST['w2d']."', w2e='".$_POST['w2e']."', x1a='".$_POST['x1a']."', x1b='".$_POST['x1b']."', x1c='".$_POST['x1c']."', x1d='".$_POST['x1d']."', x1e='".$_POST['x1e']."', x2b='".$_POST['x2b']."', x2c='".$_POST['x2c']."', x2d='".$_POST['x2d']."', x2e='".$_POST['x2e']."', y1a='".$_POST['y1a']."', y1b='".$_POST['y1b']."', y1c='".$_POST['y1c']."', y1d='".$_POST['y1d']."', y1e='".$_POST['y1e']."', y2a='".$_POST['y2a']."', y2b='".$_POST['y2b']."', y2c='".$_POST['y2c']."', y2d='".$_POST['y2d']."', y2e='".$_POST['y2e']."', z1a='".$_POST['z1a']."', z1b='".$_POST['z1b']."', z1c='".$_POST['z1c']."', z1d='".$_POST['z1d']."', z1e='".$_POST['z1e']."', z2a='".$_POST['z2a']."', z2b='".$_POST['z2b']."', a1a='".$_POST['a1a']."', a1b='".$_POST['a1b']."', a1c='".$_POST['a1c']."', a1d='".$_POST['a1d']."', b1a='".$_POST['b1a']."', b1b='".$_POST['b1b']."', b1c='".$_POST['b1c']."', b1d='".$_POST['b1d']."', b1e='".$_POST['b1e']."', b1f='".$_POST['b1f']."', b1g='".$_POST['b1g']."', c1a='".$_POST['c1a']."', c1b='".$_POST['c1b']."', c1c='".$_POST['c1c']."', c1d='".$_POST['c1d']."', c1e='".$_POST['c1e']."', c1f='".$_POST['c1f']."', c1g='".$_POST['c1g']."' where id='".$_GET['id']."'");
	
	
	if(file_exists($_FILES['router_1']['tmp_name'])){
	move_uploaded_file($_FILES['router_1']['tmp_name'],'file/router_1/'.$_FILES['router_1']['name']);
	mysqli_query ($koneksi, "update psk set router_1='file/router_1/".$_FILES['router_1']['name']."' where id='".$_GET['id']."'");
	}

	if(file_exists($_FILES['router_2']['tmp_name'])){
	move_uploaded_file($_FILES['router_2']['tmp_name'],'file/router_2/'.$_FILES['router_2']['name']);
	mysqli_query ($koneksi, "update psk set router_2='file/router_2/".$_FILES['router_2']['name']."' where id='".$_GET['id']."'");
	}
	
	if(file_exists($_FILES['switch_1']['tmp_name'])){
	move_uploaded_file($_FILES['switch_1']['tmp_name'],'file/switch_1/'.$_FILES['switch_1']['name']);
	mysqli_query ($koneksi, "update psk set switch_1='file/switch_1/".$_FILES['switch_1']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_2']['tmp_name'])){
	move_uploaded_file($_FILES['switch_2']['tmp_name'],'file/switch_2/'.$_FILES['switch_2']['name']);
	mysqli_query ($koneksi, "update psk set switch_2='file/switch_2/".$_FILES['switch_2']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_3']['tmp_name'])){
		move_uploaded_file($_FILES['switch_3']['tmp_name'],'file/switch_3/'.$_FILES['switch_3']['name']);
	mysqli_query ($koneksi, "update psk set switch_3='file/switch_3/".$_FILES['switch_3']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_4']['tmp_name'])){
		move_uploaded_file($_FILES['switch_4']['tmp_name'],'file/switch_4/'.$_FILES['switch_4']['name']);
	mysqli_query ($koneksi, "update psk set switch_4='file/switch_4/".$_FILES['switch_4']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_5']['tmp_name'])){
		move_uploaded_file($_FILES['switch_5']['tmp_name'],'file/switch_5/'.$_FILES['switch_5']['name']);
	mysqli_query ($koneksi, "update psk set switch_5='file/switch_5/".$_FILES['switch_5']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_6']['tmp_name'])){
		move_uploaded_file($_FILES['switch_6']['tmp_name'],'file/switch_6/'.$_FILES['switch_6']['name']);
	mysqli_query ($koneksi, "update psk set switch_6='file/switch_6/".$_FILES['switch_6']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_7']['tmp_name'])){
		move_uploaded_file($_FILES['switch_7']['tmp_name'],'file/switch_7/'.$_FILES['switch_7']['name']);
	mysqli_query ($koneksi, "update psk set switch_7='file/switch_7/".$_FILES['switch_7']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_8']['tmp_name'])){
		move_uploaded_file($_FILES['switch_8']['tmp_name'],'file/switch_8/'.$_FILES['switch_8']['name']);
	mysqli_query ($koneksi, "update psk set switch_8='file/switch_8/".$_FILES['switch_8']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_9']['tmp_name'])){
		move_uploaded_file($_FILES['switch_9']['tmp_name'],'file/switch_9/'.$_FILES['switch_9']['name']);
	mysqli_query ($koneksi, "update psk set switch_9='file/switch_9/".$_FILES['switch_9']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_10']['tmp_name'])){
		move_uploaded_file($_FILES['switch_10']['tmp_name'],'file/switch_10/'.$_FILES['switch_10']['name']);
	mysqli_query ($koneksi, "update psk set switch_10='file/switch_10/".$_FILES['switch_10']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_11']['tmp_name'])){
		move_uploaded_file($_FILES['switch_11']['tmp_name'],'file/switch_11/'.$_FILES['switch_11']['name']);
	mysqli_query ($koneksi, "update psk set switch_11='file/switch_11/".$_FILES['switch_11']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_12']['tmp_name'])){
		move_uploaded_file($_FILES['switch_12']['tmp_name'],'file/switch_12/'.$_FILES['switch_12']['name']);
	mysqli_query ($koneksi, "update psk set switch_12='file/switch_12/".$_FILES['switch_12']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_13']['tmp_name'])){
		move_uploaded_file($_FILES['switch_13']['tmp_name'],'file/switch_13/'.$_FILES['switch_13']['name']);
	mysqli_query ($koneksi, "update psk set switch_13='file/switch_13/".$_FILES['switch_13']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_14']['tmp_name'])){
		move_uploaded_file($_FILES['switch_14']['tmp_name'],'file/switch_14/'.$_FILES['switch_14']['name']);
	mysqli_query ($koneksi, "update psk set switch_14='file/switch_14/".$_FILES['switch_14']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_15']['tmp_name'])){
		move_uploaded_file($_FILES['switch_15']['tmp_name'],'file/switch_15/'.$_FILES['switch_15']['name']);
	mysqli_query ($koneksi, "update psk set switch_15='file/switch_15/".$_FILES['switch_15']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_16']['tmp_name'])){
		move_uploaded_file($_FILES['switch_16']['tmp_name'],'file/switch_16/'.$_FILES['switch_16']['name']);
	mysqli_query ($koneksi, "update psk set switch_16='file/switch_16/".$_FILES['switch_16']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_17']['tmp_name'])){
		move_uploaded_file($_FILES['switch_17']['tmp_name'],'file/switch_17/'.$_FILES['switch_17']['name']);
	mysqli_query ($koneksi, "update psk set switch_17='file/switch_17/".$_FILES['switch_17']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_18']['tmp_name'])){
		move_uploaded_file($_FILES['switch_18']['tmp_name'],'file/switch_18/'.$_FILES['switch_18']['name']);
	mysqli_query ($koneksi, "update psk set switch_18='file/switch_18/".$_FILES['switch_18']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_19']['tmp_name'])){
		move_uploaded_file($_FILES['switch_19']['tmp_name'],'file/switch_19/'.$_FILES['switch_19']['name']);
	mysqli_query ($koneksi, "update psk set switch_19='file/switch_19/".$_FILES['switch_19']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_20']['tmp_name'])){
		move_uploaded_file($_FILES['switch_20']['tmp_name'],'file/switch_20/'.$_FILES['switch_20']['name']);
	mysqli_query ($koneksi, "update psk set switch_20='file/switch_20/".$_FILES['switch_20']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_21']['tmp_name'])){
		move_uploaded_file($_FILES['switch_21']['tmp_name'],'file/switch_21/'.$_FILES['switch_21']['name']);
	mysqli_query ($koneksi, "update psk set switch_21='file/switch_21/".$_FILES['switch_21']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['switch_22']['tmp_name'])){
		move_uploaded_file($_FILES['switch_22']['tmp_name'],'file/switch_22/'.$_FILES['switch_22']['name']);
	mysqli_query ($koneksi, "update psk set switch_22='file/switch_22/".$_FILES['switch_22']['name']."' where id='".$_GET['id']."'");
	}
	if(file_exists($_FILES['server_1']['tmp_name'])){
		move_uploaded_file($_FILES['server_1']['tmp_name'],'file/server_1/'.$_FILES['server_1']['name']);
	mysqli_query ($koneksi, "update psk set server_1='file/server_1/".$_FILES['server_1']['name']."' where id='".$_GET['id']."'");
	}
	
	
?>
<script>alert('Data Berhasil Diubah')</script>
<script>window.location='penghubung.php?nav=powersystemdata'</script>

<?php
}
?>



<?php
$query = mysqli_query($koneksi, "SELECT id, cabang, alamat, tanggal_kunjungan, inputer, h1a, h1b, h1c, h2a, h3a, h3b, h3c, h3d, h3e, h3f, h4a, h4b, h5a, h5b, h5c, h6a, h6b, h7a, h7b, h8a, h8b, h8c, h9a, h9b, k1a, k1b, k1c, k2a, k3a, k3b, k3c, k3d, k3e, k3f, k4a, k4b, k5a, k5b, k5c, k6a, k6b, k7a, k7b, k8a, k9a, k9b, l1a, l1b, l1c, l1d, l1e, l2a, l2b, l2c, l2d, l2e, m1a, m1b, m1c, m1d, m1e, m2a, m2b, m2c, m2d, m2e, n1a, n1b, n1c, n1d, n1e, n2a, n2b, n2c, n2d, n2e, o1a, o1b, o1c, o1d, o1e, o2a, o2b, o2c, o2d, o2e, p1a, p1b, p1c, p1d, p1e, p2a, p2b, p2c, p2d, p2e, q1a, q1b, q1c, q1d, q1e, q2a, q2b, q2c, q2d, q2e, r1a, r1b, r1c, r1d, r1e, r2a, r2b, r2c, r2d, r2e, s1a, s1b, s1c, s1d, s1e, s2a, s2b, s2c, s2d, s2e, t1a, t1b, t1c, t1d, t1e, t2a, t2b, t2c, t2d, t2e, u1a, u1b, u1c, u1d, u1e, u2a, u2b, u2c, u2d, u2e, v1a, v1b, v1c, v1d, v1e, v2a, v2b, v2c, v2d, v2e, w1a, w1b, w1c, w1d, w1e, w2a, w2b, w2c, w2d, w2e, x1a, x1b, x1c, x1d, x1e, x2b, x2c, x2d, x2e, y1a, y1b, y1c, y1d, y1e, y2a, y2b, y2c, y2d, y2e, z1a, z1b, z1c, z1d, z1e, z2a, z2b, a1a, a1b, a1c, a1d, b1a, b1b, b1c, b1d, b1e, b1f, b1g, c1a, c1b, c1c, c1d, c1e, c1f, c1g FROM psk WHERE id='".$_GET['id']."'");

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
}
?>

<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse"><strong>UBAH PREVENTIVE MAINTENANCE</strong></div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST" enctype="multipart/form-data">
							<div class="form-group">
									<label for="exampleInputPassword1">Kantor Cabang/Kantor Kas</label><br>
									<select name="cabang" id="cabang" class="form-control" onchange="fcabangalamat();">
								  
								  
								  <script>
												function fcabangalamat(){
													alamat = document.getElementById("cabang").value;
													//document.getElementById("cabang").value = alamat;
													
													var xmlhttp = new XMLHttpRequest();
													xmlhttp.onreadystatechange = function() {
													if (this.readyState == 4 && this.status == 200) {
													//document.getElementById("txtHint").innerHTML = this.responseText;
													var myArr = JSON.parse(this.responseText);
													//alert(myArr[0].cabang);
													document.getElementById("alamat").value = myArr[0].alamat;
													
												}
												};
												xmlhttp.open("GET", "ajax/cabang.php?alamat=" + alamat, true);
												xmlhttp.send();
												}
												</script>
								
									<option <?php echo ($cabang =='Kantor Wilayah')? "selected":"" ?>>Kantor Wilayah</option>
									<option <?php echo ($cabang =='SBO BDG')? "selected":"" ?>>SBO BDG</option>
									<option <?php echo ($cabang =='SBE PRG')? "selected":"" ?>>SBE PRG</option>
									<option <?php echo ($cabang =='SBE BDG')? "selected":"" ?>>SBE BDG</option>
									<option <?php echo ($cabang =='SBK BDG')? "selected":"" ?>>SBK BDG</option>
									<option <?php echo ($cabang =='RRW BDG')? "selected":"" ?>>RRW BDG</option>
									<option <?php echo ($cabang =='RRW JJS')? "selected":"" ?>>RRW JJS</option>
									<option <?php echo ($cabang =='SKK')? "selected":"" ?>>SKK</option>
									<option <?php echo ($cabang =='LGW')? "selected":"" ?>>LGW</option>
									<option <?php echo ($cabang =='KIW')? "selected":"" ?>>KIW</option>
									<option <?php echo ($cabang =='SDW')? "selected":"" ?>>SDW</option>
									<option <?php echo ($cabang =='HMW')? "selected":"" ?>>HMW</option>
									<option <?php echo ($cabang =='LPW')? "selected":"" ?>>LPW</option>
									<option <?php echo ($cabang =='ATW')? "selected":"" ?>>ATW</option>
									<option <?php echo ($cabang =='BUW')? "selected":"" ?>>BUW</option>
									<option <?php echo ($cabang =='CTW')? "selected":"" ?>>CTW</option>
									<option <?php echo ($cabang =='TNW')? "selected":"" ?>>TNW</option>
									<option <?php echo ($cabang =='ARC BDG')? "selected":"" ?>>ARC BDG</option>
									<option <?php echo ($cabang =='TRA')? "selected":"" ?>>TRA</option>
									<option <?php echo ($cabang =='RCF')? "selected":"" ?>>RCF</option>
									<option <?php echo ($cabang =='OPW')? "selected":"" ?>>OPW</option>
									
									
									<option <?php echo ($cabang =='KC Bandung')? "selected":"" ?>>KC Bandung</option>
									<option <?php echo ($cabang =='KCP Ahmad Yani')? "selected":"" ?>>KCP Ahmad Yani</option>
									<option <?php echo ($cabang =='KCP Braga')? "selected":"" ?>>KCP Braga</option>
									<option <?php echo ($cabang =='KCP Buah Batu')? "selected":"" ?>>KCP Buah Batu</option>
									<option <?php echo ($cabang =='KCP Cicadas')? "selected":"" ?>>KCP Cicadas</option>
									<option <?php echo ($cabang =='KCP Japati')? "selected":"" ?>>KCP Japati</option>
									<option <?php echo ($cabang =='KCP Kiaracondong')? "selected":"" ?>>KCP Kiaracondong</option>
									<option <?php echo ($cabang =='KCP Pungkur')? "selected":"" ?>>KCP Pungkur</option>
									<option <?php echo ($cabang =='KCP Rancaekek')? "selected":"" ?>>KCP Rancaekek</option>
									<option <?php echo ($cabang =='KCP Riau')? "selected":"" ?>>KCP Riau</option>
									<option <?php echo ($cabang =='KCP Soekarno Hatta')? "selected":"" ?>>KCP Soekarno Hatta</option>
									<option <?php echo ($cabang =='KCP Supratman')? "selected":"" ?>>KCP Supratman</option>
									<option <?php echo ($cabang =='KCP Ujung Berung')? "selected":"" ?>>KCP Ujung Berung</option>
									<option <?php echo ($cabang =='KK Antapani')? "selected":"" ?>>KK Antapani</option>
									<option <?php echo ($cabang =='KK Arcamanik')? "selected":"" ?>>KK Arcamanik</option>
									<option <?php echo ($cabang =='KK Astana Anyar')? "selected":"" ?>>KK Astana Anyar</option>
									<option <?php echo ($cabang =='KK Batununggal')? "selected":"" ?>>KK Batununggal</option>
									<option <?php echo ($cabang =='KK Gatot Subroto')? "selected":"" ?>>KK Gatot Subroto</option>
									<option <?php echo ($cabang =='PP Imigrasi')? "selected":"" ?>>PP Imigrasi</option>
									<option <?php echo ($cabang =='PP PLN Braga')? "selected":"" ?>>PP PLN Braga</option>
									
									
									
									<option <?php echo ($cabang =='KC Cirebon')? "selected":"" ?>>KC Cirebon</option>
									<option <?php echo ($cabang =='KCP Tegalwangi')? "selected":"" ?>>KCP Tegalwangi</option>
									<option <?php echo ($cabang =='KCP Grage Mall')? "selected":"" ?>>KCP Grage Mall</option>
									<option <?php echo ($cabang =='KCP Arjawinangun')? "selected":"" ?>>KCP Arjawinangun</option>
									<option <?php echo ($cabang =='KCP Losari')? "selected":"" ?>>KCP Losari</option>
									<option <?php echo ($cabang =='KCP Sumber')? "selected":"" ?>>KCP Sumber</option>
									<option <?php echo ($cabang =='KK Pekalipan')? "selected":"" ?>>KK Pekalipan</option>
									<option <?php echo ($cabang =='KK Harjamukti')? "selected":"" ?>>KK Harjamukti</option>
									<option <?php echo ($cabang =='KK Sindanglaut')? "selected":"" ?>>KK Sindanglaut</option>
									<option <?php echo ($cabang =='KK Tuparev')? "selected":"" ?>>KK Tuparev</option>
									
									
									<option <?php echo ($cabang =='KC Tasikmalaya')? "selected":"" ?>>KC Tasikmalaya</option>
									<option <?php echo ($cabang =='KCP Ciawi')? "selected":"" ?>>KCP Ciawi</option>
									<option <?php echo ($cabang =='KCP Universitas Siliwangi')? "selected":"" ?>>KCP Universitas Siliwangi</option>
									<option <?php echo ($cabang =='KCP Ciamis')? "selected":"" ?>>KCP Ciamis</option>
									<option <?php echo ($cabang =='KCP Singaparna')? "selected":"" ?>>KCP Singaparna</option>
									<option <?php echo ($cabang =='KCP Karang Nunggal')? "selected":"" ?>>KCP Karang Nunggal</option>
									<option <?php echo ($cabang =='KCP Cikurubuk')? "selected":"" ?>>KCP Cikurubuk</option>
									<option <?php echo ($cabang =='KK Sutisna Senjaya')? "selected":"" ?>>KK Sutisna Senjaya</option>
									<option <?php echo ($cabang =='KK Kawali')? "selected":"" ?>>KK Kawali</option>
									<option <?php echo ($cabang =='PP BPJS Tasikmalaya')? "selected":"" ?>>PP BPJS Tasikmalaya</option>
									
									
									<option <?php echo ($cabang =='KC Majalaya')? "selected":"" ?>>KC Majalaya</option>
									<option <?php echo ($cabang =='KCP Soreang')? "selected":"" ?>>KCP Soreang</option>
									<option <?php echo ($cabang =='KCP Baleendah')? "selected":"" ?>>KCP Baleendah</option>
									<option <?php echo ($cabang =='KCP Banjaran')? "selected":"" ?>>KCP Banjaran</option>
									<option <?php echo ($cabang =='KCP Cicalengka')? "selected":"" ?>>KCP Cicalengka</option>
									<option <?php echo ($cabang =='KCP Cinunuk')? "selected":"" ?>>KCP Cinunuk</option>
									<option <?php echo ($cabang =='KK Taman Kopo Indah')? "selected":"" ?>>KK Taman Kopo Indah</option>
									<option <?php echo ($cabang =='KCP Ciwidey')? "selected":"" ?>>KK Ciwidey</option>
									<option <?php echo ($cabang =='KK Kopo Katapang')? "selected":"" ?>>KK Kopo Katapang</option>
									<option <?php echo ($cabang =='KK De Primaterra')? "selected":"" ?>>KK De Primaterra</option>
									<option <?php echo ($cabang =='KK Ciparay')? "selected":"" ?>>KK Ciparay</option>
									<option <?php echo ($cabang =='KK Cibaduyut')? "selected":"" ?>>KK Cibaduyut</option>
									<option <?php echo ($cabang =='PP Kahagroup')? "selected":"" ?>>PP Kahagroup</option>
									
									
									
									<option <?php echo ($cabang =='KC Sukabumi')? "selected":"" ?>>KC Sukabumi</option>
									<option <?php echo ($cabang =='KCP Ciwangi')? "selected":"" ?>>KCP Ciwangi</option>
									<option <?php echo ($cabang =='KCP Cibadak')? "selected":"" ?>>KCP Cibadak</option>
									<option <?php echo ($cabang =='KCP Cicurug')? "selected":"" ?>>KCP Cicurug</option>
									<option <?php echo ($cabang =='KCP Surade')? "selected":"" ?>>KCP Surade</option>
									<option <?php echo ($cabang =='KCP Pelabuhan Ratu')? "selected":"" ?>>KCP Pelabuhan Ratu</option>
									<option <?php echo ($cabang =='KK Pangleseran')? "selected":"" ?>>KK Pangleseran</option>
									<option <?php echo ($cabang =='PP Jamsostek Sukabumi')? "selected":"" ?>>PP Jamsostek Sukabumi</option>
									<option <?php echo ($cabang =='PP RS Hermina')? "selected":"" ?>>PP RS Hermina Sukabumi</option>
								
									
									<option <?php echo ($cabang =='KC Banjar')? "selected":"" ?>>KC Banjar</option>
									<option <?php echo ($cabang =='KCP Pangandaran')? "selected":"" ?>>KCP Pangandaran</option>
									<option <?php echo ($cabang =='KK Banjarsari')? "selected":"" ?>>KK Banjarsari</option>
									
									
									<option <?php echo ($cabang =='KC Garut')? "selected":"" ?>>KC Garut</option>
									<option <?php echo ($cabang =='KCP Cikajang')? "selected":"" ?>>KCP Cikajang</option>
									<option <?php echo ($cabang =='KCP Pameungpeuk')? "selected":"" ?>>KCP Pameungpeuk</option>
									<option <?php echo ($cabang =='KK Kadungora')? "selected":"" ?>>KK Kadungora</option>
									<option <?php echo ($cabang =='KK Limbangan')? "selected":"" ?>>KK Limbangan</option>
									<option <?php echo ($cabang =='KK Ciledug')? "selected":"" ?>>KK Ciledug</option>
								
									
									<option <?php echo ($cabang =='KC Cianjur')? "selected":"" ?>>KC Cianjur</option>
									<option <?php echo ($cabang =='KCP Cipanas')? "selected":"" ?>>KCP Cipanas</option>
									<option <?php echo ($cabang =='KCP Ciranjang')? "selected":"" ?>>KCP Ciranjang</option>
									<option <?php echo ($cabang =='KCP Tanggeung')? "selected":"" ?>>KCP Tanggeung</option>
									<option <?php echo ($cabang =='KK Hos Tjokroaminoto')? "selected":"" ?>>KK Hos Tjokroaminoto</option>
									
									
									<option <?php echo ($cabang =='KC Indramayu')? "selected":"" ?>>KC Indramayu</option>
									<option <?php echo ($cabang =='KCP Jatibarang')? "selected":"" ?>>KCP Jatibarang</option>
									<option <?php echo ($cabang =='KCP Patrol')? "selected":"" ?>>KCP Patrol</option>
									<option <?php echo ($cabang =='KCP Haurgeulis')? "selected":"" ?>>KCP Haurgeulis</option>
									<option <?php echo ($cabang =='KCP Karangampel')? "selected":"" ?>>KCP Karangampel</option>
									<option <?php echo ($cabang =='PP TPI Karangsong')? "selected":"" ?>>PP TPI Karangsong</option>
									
									
									<option <?php echo ($cabang =='KC Kuningan')? "selected":"" ?>>KC Kuningan</option>
									<option <?php echo ($cabang =='KCP Cikijing')? "selected":"" ?>>KCP Cikijing</option>
									<option <?php echo ($cabang =='KCP Majalengka')? "selected":"" ?>>KCP Majalengka</option>
									<option <?php echo ($cabang =='KCP Kadipaten')? "selected":"" ?>>KCP Kadipaten</option>
									<option <?php echo ($cabang =='KK Cilimus')? "selected":"" ?>>KK Cilimus</option>
									<option <?php echo ($cabang =='KK Jatiwangi')? "selected":"" ?>>KK Jatiwangi</option>
									<option <?php echo ($cabang =='KK BIJB Kertajati')? "selected":"" ?>>KK BIJB Kertajati</option>
									<option <?php echo ($cabang =='PP Pasar Baru Kuningan')? "selected":"" ?>>PP Pasar Baru Kuningan</option>
									<option <?php echo ($cabang =='PP Universitas Kuningan')? "selected":"" ?>>PP Universitas Kuningan</option>
									<option <?php echo ($cabang =='RSUD Majalengka')? "selected":"" ?>>RSUD Majalengka</option>
									
									
									<option <?php echo ($cabang =='KC Purwakarta')? "selected":"" ?>>KC Purwakarta</option>
									<option <?php echo ($cabang =='KCP Plered')? "selected":"" ?>>KCP Plered</option>
									<option <?php echo ($cabang =='KK Kota Bukit Indah')? "selected":"" ?>>KK Kota Bukit Indah</option>
									<option <?php echo ($cabang =='KK Jatiluhur')? "selected":"" ?>>KK Jatiluhur</option>
									<option <?php echo ($cabang =='KK Cikopo')? "selected":"" ?>>KK Cikopo</option>
									<option <?php echo ($cabang =='PP BPJS Purwakarta')? "selected":"" ?>>PP BPJS Purwakarta</option>
									
									
									<option <?php echo ($cabang =='KC Sumedang')? "selected":"" ?>>KC Sumedang</option>
									<option <?php echo ($cabang =='KK Tanjungsari')? "selected":"" ?>>KK Tanjungsari</option>
									
									
									<option <?php echo ($cabang =='KC Subang')? "selected":"" ?>>KC Subang</option>
									<option <?php echo ($cabang =='KCP Pamanukan')? "selected":"" ?>>KCP Pamanukan</option>
									<option <?php echo ($cabang =='KCP Kalijati')? "selected":"" ?>>KCP Kalijati</option>
									<option <?php echo ($cabang =='KK Cipeundeuy')? "selected":"" ?>>KK Cipeundeuy</option>
									
									
									<option <?php echo ($cabang =='KC PTB')? "selected":"" ?>>KC PTB</option>
									<option <?php echo ($cabang =='KCP Ganesha')? "selected":"" ?>>KCP Ganesha</option>
									<option <?php echo ($cabang =='KCP Setrasari')? "selected":"" ?>>KCP Setrasari</option>
									<option <?php echo ($cabang =='KCP LIPI')? "selected":"" ?>>KCP LIPI</option>
									<option <?php echo ($cabang =='KCP Cihampelas')? "selected":"" ?>>KCP Cihampelas</option>
									<option <?php echo ($cabang =='KCP UNIKOM')? "selected":"" ?>>KCP UNIKOM</option>
									<option <?php echo ($cabang =='KCP UNPAD')? "selected":"" ?>>KCP UNPAD</option>
									<option <?php echo ($cabang =='KCP Jatinangor')? "selected":"" ?>>KCP Jatinangor</option>
									<option <?php echo ($cabang =='KCP Dago')? "selected":"" ?>>KCP Dago</option>
									<option <?php echo ($cabang =='KCP UPI')? "selected":"" ?>>KCP UPI</option>
									<option <?php echo ($cabang =='KCP Lembang')? "selected":"" ?>>KCP Lembang</option>
									<option <?php echo ($cabang =='KCP Sukajadi')? "selected":"" ?>>KCP Sukajadi</option>
									<option <?php echo ($cabang =='KCP ITENAS')? "selected":"" ?>>KCP ITENAS</option>
									<option <?php echo ($cabang =='KCP Maranatha')? "selected":"" ?>>KCP Maranatha</option>
									<option <?php echo ($cabang =='KK Pasteur')? "selected":"" ?>>KK Pasteur</option>
									<option <?php echo ($cabang =='KK Setiabudhi')? "selected":"" ?>>KK Setiabudhi</option>
									<option <?php echo ($cabang =='KK Cipadung')? "selected":"" ?>>KK Cipadung</option>
									<option <?php echo ($cabang =='KK Rajawali')? "selected":"" ?>>KK Rajawali</option>
									<option <?php echo ($cabang =='KK Ciumbuleuit')? "selected":"" ?>>KK Ciumbuleuit</option>
									<option <?php echo ($cabang =='PP ITB Jatinangor')? "selected":"" ?>>PP ITB Jatinangor</option>
									<option <?php echo ($cabang =='PP RS Hasansadikin')? "selected":"" ?>>PP RS Hasansadikin</option>
									
									
									<option <?php echo ($cabang =='KC JPK')? "selected":"" ?>>KC JPK</option>
									<option <?php echo ($cabang =='KCP JJS')? "selected":"" ?>>KCP JJS</option>
									<option <?php echo ($cabang =='KCP PT. INTI')? "selected":"" ?>>KCP PT. INTI</option>
									<option <?php echo ($cabang =='KCP YDPP Telkom')? "selected":"" ?>>KCP YDPP Telkom</option>
									<option <?php echo ($cabang =='KCP PT. KAI')? "selected":"" ?>>KCP PT. KAI</option>
									<option <?php echo ($cabang =='KCP Kopo Mas')? "selected":"" ?>>KCP Kopo Mas</option>
									<option <?php echo ($cabang =='KCP Cijerah')? "selected":"" ?>>KCP Cijerah</option>
									<option <?php echo ($cabang =='KCP Moh. Toha')? "selected":"" ?>>KCP Moh. Toha</option>
									<option <?php echo ($cabang =='KCP Padalarang')? "selected":"" ?>>KCP Padalarang</option>
									<option <?php echo ($cabang =='KCP Posindo')? "selected":"" ?>>KCP Posindo</option>
									<option <?php echo ($cabang =='KCP Cimahi')? "selected":"" ?>>KCP Cimahi</option>
									<option <?php echo ($cabang =='KCP Otista')? "selected":"" ?>>KCP Otista</option>
									<option <?php echo ($cabang =='KCP Pajajaran')? "selected":"" ?>>KCP Pajajaran</option>
									<option <?php echo ($cabang =='KCP Immanuel')? "selected":"" ?>>KCP Immanuel</option>
									<option <?php echo ($cabang =='KK Dayeuhkolot')? "selected":"" ?>>KK Dayeuhkolot</option>
									<option <?php echo ($cabang =='KK UNJANI')? "selected":"" ?>>KK UNJANI</option>
									<option <?php echo ($cabang =='KK Sumbersari')? "selected":"" ?>>KK Sumbersari</option>
									<option <?php echo ($cabang =='KK Batujajar')? "selected":"" ?>>KK Batujajar</option>
									<option <?php echo ($cabang =='KK Ciwastra')? "selected":"" ?>>KK Ciwastra</option>
									<option <?php echo ($cabang =='KK Pojok Cimahi')? "selected":"" ?>>KK Pojok Cimahi</option>
									<option <?php echo ($cabang =='KK Karapitan')? "selected":"" ?>>KK Karapitan</option>
									<option <?php echo ($cabang =='e-Branch Paskal')? "selected":"" ?>>e-Branch Paskal</option>
									<option <?php echo ($cabang =='PP Jamsostek Cimahi')? "selected":"" ?>>PP Jamsostek Cimahi</option>
								
									
									</select>
							</div>
							
							
							
								<div class="form-group">
									<label for="exampleInputPassword1">Alamat</label>
									<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat; ?>" readonly="readonly">
								</div>
                                
                                <div class="form-group">
									<label for="exampleInputPassword1">Tanggal Kunjungan</label>
									<input type="date" class="form-control" id="exampleInputName" value="<?php echo $tanggal_kunjungan; ?>" name="tanggal_kunjungan">
								</div>
								
								
								<div class="form-group">
									<label for="exampleInputPassword1">Inputer</label>
									<input type="text" class="form-control" id="exampleInputName" value="<?php echo $_SESSION['nama']; ?>" name="inputer" readonly="readonly">
								</div>
<table cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse" class="table table-responsive">
								  <tr></tr>
								  <tr>
								    <td rowspan="3" align="left"><strong>ELECTRICITY</strong></td>
								    <td rowspan="3">Power</td>
							      </tr>
								  <tr>
								    <td>PLN
								      <input style="font-style:italic;font-size:12px;" type="text" name="h1a" placeholder="Voltage"  value="<?php echo $h1a;?>" class="form-control" /></td>
							      </tr>
								  <tr></tr>
								  <tr>
								    <td></td>
								    <td>Genset</td>
								    <td>
								      <select name="h1b" id="h1b" class="form-control" >
									<option <?php echo ($h1b=='')?"selected":""?>></option>
                                    <option <?php echo ($h1b=='OK')?"selected":""?>>OK</option>
									<option <?php echo ($h1b=='NOT')?"selected":""?>>NOT</option>
									
									
									</select></td>
							      </tr>
								  <tr>
								    <td rowspan="4" align="left"></td>
								    <td align="left">UPS</td>
								    <td><select name="h1c" id="h1c" class="form-control" >
									<option <?php echo($h1c=='')?"selected":""?>></option>
									<option <?php echo($h1c=='1 KVA')?"selected":""?>>1 KVA</option>
									<option <?php echo($h1c=='2 KVA')?"selected":""?>>2 KVA</option>
									<option <?php echo($h1c=='4 KVA')?"selected":""?>>4 KVA</option>
									
									</select>
								      <select name="h2a" id="h2a" class="form-control" >
									<option <?php echo($h2a=='')?"selected":""?>></option>
									<option <?php echo($h2a=='OK')?"selected":""?>>OK</option>
									<option <?php echo($h2a=='NOT')?"selected":""?>>NOT</option>
									
									</select></td>
								    <td>Grounding
								      <input style="font-style:italic;font-size:12px;" type="text" name="h3a" placeholder="Voltage" value="<?php echo $h3a;?>" class="form-control" /></td>
							      </tr>
								 
								  <tr></tr>
								  <tr></tr>
								  <tr></tr>
								  <tr>
								    <td rowspan="4" align="left"><strong>TEMPERATURE</strong></td>
								    <td align="left">Humidity</td>
								    <td><input type="text" size="10" name="h3b" value="<?php echo $h3b;?>" class="form-control" />
								      %</td>
							      </tr>
								  <tr>
								    <td align="left">Suhu</td>
								    <td><input type="text" size="10" name="h3c" value="<?php echo $h3c;?>" class="form-control" />
								      ˚C</td>
							      </tr>
								  <tr></tr>
								  <tr></tr>
								  <tr>
								    <td rowspan="2" align="left"><strong>PENANGKAL PETIR</strong></td>
								    <td></td>
								    <td align="left"><select name="h3d" id="h3d" class="form-control" >
									<option <?php echo($h3d=='')?"selected":""?>></option>
									<option <?php echo($h3d=='Ada')?"selected":""?>>Ada</option>
									<option <?php echo($h3d=='Tidak')?"selected":""?>>Tidak</option>
									
									</select></td>
							      </tr>
								  <tr></tr>
								  <tr>
								    <td rowspan="4" align="left"><strong>WIRE</strong></td>
								    <td>Power </td>
								    <td align="left"><select name="h3e" id="h3e" class="form-control" >
									<option <?php echo($h3e=='')?"selected":""?>></option>
									<option <?php echo($h3e=='Rapih')?"selected":""?>>Rapi</option>
									<option <?php echo($h3e=='Tidak')?"selected":""?>>Tidak</option>
									
									</select></td>
							      </tr>
								  <tr>
								    <td align="left">UTP</td>
								    <td><select name="h3f" id="h3f" class="form-control" >
									<option <?php echo($h3f=='')?"selected":""?>></option>
									<option <?php echo($h3f=='Rapih')?"selected":""?>>Rapih</option>
									<option <?php echo($h3f=='Tidak')?"selected":""?>>Tidak</option>
									
									</select></td>
							      </tr>
								  <tr></tr>
								  <tr></tr>
								  <tr></tr>
								  <tr>
								    <td rowspan="4" align="left"><strong>PREMISES</strong></td>
								    <td align="left">Room</td>
								    <td><select name="h4a" id="h4a" class="form-control" >
									<option <?php echo($h4a=='')?"selected":""?>></option>
									<option <?php echo($h4a=='Bersih')?"selected":""?>>Bersih</option>
									<option <?php echo($h4a=='Kotor')?"selected":""?>>Kotor</option>
									
									</select></td>
							      </tr>
								  <tr>
								    <td align="left">Space</td>
								    <td><select name="h4b" id="h4b" class="form-control" >
									<option <?php echo($h4b=='')?"selected":""?>></option>
									<option <?php echo($h4b=='Large')?"selected":""?>>Large</option>
									<option <?php echo($h4b=='Medium')?"selected":""?>>Medium</option>
                                    <option <?php echo($h4b=='Small')?"selected":""?>>Small</option>
									
									</select></td>
							      </tr>
								  <tr>
								    <td>Rack</td>
								    <td><select name="h5a" id="h5a" class="form-control" >
									<option <?php echo($h5a=='')?"selected":""?>></option>
									<option <?php echo($h5a=='Bersih')?"selected":""?>>Bersih</option>
									<option <?php echo($h5a=='Kotor')?"selected":""?>>Kotor</option>
                                    
									
									</select></td>
							      </tr>
								  <tr>
								    <td align="left">A.P.A.R</td>
								    <td><select name="h5b" id="h5b" class="form-control" >
									<option <?php echo($h5b=='')?"selected":""?>></option>
									<option <?php echo($h5b=='Ada')?"selected":""?>>Ada</option>
									<option <?php echo($h5b=='Tidak')?"selected":""?>>Tidak</option>
                                    
									
									</select></td>
							      </tr>
								  <tr>
								    <td rowspan="4" align="left"><strong>INVENTORY</strong></td>
								    <td align="left">Router</td>
								    <td>Router 1</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="h5c" placeholder="Cisco/Maipu/Other" value="<?php echo $h5c;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="h6a" value="<?php echo $h6a;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="h6b" value="<?php echo $h6b;?>" class="form-control" /></td>
                                       <td>Upload Router 1 <input type="file" name="router_1" class="form-control" /></td>
								    <td>Mainlink
								      <input style="font-style:italic;font-size:12px;" type="text" name="h7a" placeholder="Router Port" value="<?php echo $h7a;?>" class="form-control" /></td>
								    <td>Backuplink
								      <input style="font-style:italic;font-size:12px;" type="text" name="h7b" placeholder="Router Port" value="<?php echo $h7b;?>" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="h8a" placeholder="Router Port" value="<?php echo $h8a;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td align="left"></td>
								    <td>Router 2</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="h8b" placeholder="Cisco/Maipu/Other" value="<?php echo $h8b;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="h8c" value="<?php echo $h8c;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="h9a" value="<?php echo $h9a;?>" class="form-control" /></td>
                                       <td>Upload Router 2 <input type="file" name="router_2" class="form-control" /></td>
								    <td>Mainlink
								      <input style="font-style:italic;font-size:12px;" type="text" name="h9b" placeholder="Router Port" value="<?php echo $h9b;?>" class="form-control" /></td>
								    <td>Backuplink
								      <input style="font-style:italic;font-size:12px;" type="text" name="k1a" placeholder="Router Port" value="<?php echo $k1a;?>" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="k1b" placeholder="Router Port" value="<?php echo $k1b;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td>Switchub</td>
								    <td>Switch 1</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="k1c" placeholder="Cisco/Maipu/Other" value="<?php echo $k1c;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="k2a" value="<?php echo $k2a;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="k3a" value="<?php echo $k3a;?>" class="form-control" /></td>
                                       <td>Upload Switch 1 <input type="file" name="switch_1" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="k3b" placeholder="Switch Port" value="<?php echo $k3b;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="k3c" placeholder="Switch Port" value="<?php echo $k3c;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="k3d" placeholder="Switch Port" value="<?php echo $k3d;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="k3e" placeholder="Switch Port" value="<?php echo $k3e;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td align="left"></td>
								    <td>Switch 2</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="k3f" placeholder="Cisco/Maipu/Other" value="<?php echo $k3f;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="k4a" value="<?php echo $k4a;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="k4b" value="<?php echo $k4b;?>" class="form-control" /></td>
                                       <td>Upload Switch 2 <input type="file" name="switch_2" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="k5a" placeholder="Switch Port" value="<?php echo $k5a;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="k5b" placeholder="Switch Port" value="<?php echo $k5b;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="k5c" placeholder="Switch Port" value="<?php echo $k5c;?>" class="form-control"  /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="k6a" placeholder="Switch Port" value="<?php echo $k6a;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td rowspan="4" align="left"></td>
								    <td align="left"></td>
								    <td>Switch 3</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="k6b" placeholder="Cisco/Maipu/Other" value="<?php echo $k6b;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="k7a" value="<?php echo $k7a;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="k7b" value="<?php echo $k7b;?>" class="form-control" /></td>
                                       <td>Upload Switch 3 <input type="file" name="switch_3" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="k8a" placeholder="Switch Port" value="<?php echo $k8a;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="k9a" placeholder="Switch Port" value="<?php echo $k9a;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="k9b" placeholder="Switch Port" value="<?php echo $k9b;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="l1a" placeholder="Switch Port" value="<?php echo $l1a;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td align="left"></td>
								    <td>Switch 4</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="l1b" placeholder="Cisco/Maipu/Other" value="<?php echo $l1b;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="l1c" value="<?php echo $l1c;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="l1d" value="<?php echo $l1d;?>" class="form-control" /></td>
                                       <td>Upload Switch 4 <input type="file" name="switch_4" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="l1e" placeholder="Switch Port" value="<?php echo $l1e;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="l2a" placeholder="Switch Port" value="<?php echo $l2a;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="l2b" placeholder="Switch Port" value="<?php echo $l2b;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="l2c" placeholder="Switch Port" value="<?php echo $l2c;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td></td>
								    <td>Switch 5</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="l2d" placeholder="Cisco/Maipu/Other" value="<?php echo $l2d;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="l2e" value="<?php echo $l2e;?>" class="form-control" /></td>
								    <td>SN
								       <input type="text" name="m1a" value="<?php echo $m1a;?>" class="form-control" /></td>
                                       <td>Upload Switch 5 <input type="file" name="switch_5" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="m1b" placeholder="Switch Port" value="<?php echo $m1b;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="m1c" placeholder="Switch Port" value="<?php echo $m1c;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="m1d" placeholder="Switch Port" value="<?php echo $m1d;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="m1e" placeholder="Switch Port" value="<?php echo $m1e;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td align="left"></td>
								    <td>Switch 6</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="m2a" placeholder="Cisco/Maipu/Other" value="<?php echo $m2a;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="m2b" value="<?php echo $m2b;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="m2c" value="<?php echo $m2c;?>" class="form-control" /></td>
                                       <td>Upload Switch 6 <input type="file" name="switch_6" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="m2d" placeholder="Switch Port" value="<?php echo $m2d;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="m2e" placeholder="Switch Port" value="<?php echo $m2e;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="n1a" placeholder="Switch Port" value="<?php echo $n1a;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="n1b" placeholder="Switch Port" value="<?php echo $n1b;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td rowspan="4" align="left"></td>
								    <td align="left"></td>
								    <td>Switch 7</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="n1c" placeholder="Cisco/Maipu/Other" value="<?php echo $n1c;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="n1d" value="<?php echo $n1d;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="n1e" value="<?php echo $n1e;?>" class="form-control" /></td>
                                       <td>Upload Switch 7 <input type="file" name="switch_7" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="n2a" placeholder="Switch Port" value="<?php echo $n2a;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="n2b" placeholder="Switch Port" value="<?php echo $n2b;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="n2c" placeholder="Switch Port" value="<?php echo $n2c;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="n2d" placeholder="Switch Port" value="<?php echo $n2d;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td align="left"></td>
								    <td>Switch 8</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="n2e" placeholder="Cisco/Maipu/Other" value="<?php echo $n2e;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="o1a" value="<?php echo $o1a;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="o1b" value="<?php echo $o1b;?>" class="form-control" /></td>
                                       <td>Upload Switch 8 <input type="file" name="switch_8" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="o1c" placeholder="Switch Port" value="<?php echo $o1c;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="o1d" placeholder="Switch Port" value="<?php echo $o1d;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="o1e" placeholder="Switch Port" value="<?php echo $o1e;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="o2a" placeholder="Switch Port" value="<?php echo $o2a;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td></td>
								    <td>Switch 9</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="o2b" placeholder="Cisco/Maipu/Other" value="<?php echo $o2b;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="o2c" value="<?php echo $o2c;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="o2d" value="<?php echo $o2d;?>" class="form-control" /></td>
                                       <td>Upload Switch 9 <input type="file" name="switch_9" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="o2e" placeholder="Switch Port" value="<?php echo $o2e;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="p1a" placeholder="Switch Port" value="<?php echo $p1a;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="p1b" placeholder="Switch Port" value="<?php echo $p1b;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="p1c" placeholder="Switch Port" value="<?php echo $p1c;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td align="left"></td>
								    <td>Switch 10</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="p1d" placeholder="Cisco/Maipu/Other" value="<?php echo $p1d;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="p1e" value="<?php echo $p1e;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="p2a" value="<?php echo $p2a;?>" class="form-control" /></td>
                                       <td>Upload Switch 10 <input type="file" name="switch_10" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="p2b" placeholder="Switch Port" value="<?php echo $p2b;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="p2c" placeholder="Switch Port" value="<?php echo $p2c;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="p2d" placeholder="Switch Port" value="<?php echo $p2d;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="p2e" placeholder="Switch Port" value="<?php echo $p2e;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td rowspan="4" align="left"></td>
								    <td align="left"></td>
								    <td>Switch 11</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="q1a" placeholder="Cisco/Maipu/Other" value="<?php echo $q1a;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="q1b" value="<?php echo $q1b;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="q1c" value="<?php echo $q1c;?>" class="form-control" /></td>
                                        <td>Upload Switch 11 <input type="file" name="switch_11" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="q1d" placeholder="Switch Port" value="<?php echo $q1d;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="q1e" placeholder="Switch Port" value="<?php echo $q1e;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="q2a" placeholder="Switch Port" value="<?php echo $q2a;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="q2b" placeholder="Switch Port" value="<?php echo $q2b;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td align="left"></td>
								    <td>Switch 12</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="q2c" placeholder="Cisco/Maipu/Other" value="<?php echo $q2c;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="q2d" value="<?php echo $q2d;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="q2e" value="<?php echo $q2e;?>"/></td>
                                       <td>Upload Switch 12 <input type="file" name="switch_12" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="r1a" placeholder="Switch Port" value="<?php echo $r1a;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="r1b" placeholder="Switch Port" value="<?php echo $r1b;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="r1c" placeholder="Switch Port" value="<?php echo $r1c;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="r1d" placeholder="Switch Port" value="<?php echo $r1d;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td></td>
								    <td>Switch 13</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="r1e" placeholder="Cisco/Maipu/Other" value="<?php echo $r1e;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="r2a" value="<?php echo $r2a;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="r2b" value="<?php echo $r2b;?>" class="form-control" /></td>
                                       <td>Upload Switch 13 <input type="file" name="switch_13" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="r2c" placeholder="Switch Port" value="<?php echo $r2c;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="r2d" placeholder="Switch Port" value="<?php echo $r2d;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="r2e" placeholder="Switch Port" value="<?php echo $r2e;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="s1a" placeholder="Switch Port" value="<?php echo $s1a;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td></td>
								    <td>Switch 14</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="s1b" placeholder="Cisco/Maipu/Other" value="<?php echo $s1b;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="s1c" value="<?php echo $s1c;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="s1d" value="<?php echo $s1d;?>" class="form-control" /></td>
                                       <td>Upload Switch 14 <input type="file" name="switch_14" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="s1e" placeholder="Switch Port" value="<?php echo $s1e;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="s2a" placeholder="Switch Port" value="<?php echo $s2a;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="s2b" placeholder="Switch Port" value="<?php echo $s2b;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="s2c" placeholder="Switch Port" value="<?php echo $s2c;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td rowspan="4" align="left"></td>
								    <td align="left"></td>
								    <td>Switch 15</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="s2d" placeholder="Cisco/Maipu/Other" value="<?php echo $s2d;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="s2e" value="<?php echo $s2e;?>"/></td>
								    <td>SN
								      <input type="text" name="t1a" value="<?php echo $t1a;?>" class="form-control" /></td>
                                       <td>Upload Switch 15 <input type="file" name="switch_15" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="t1b" placeholder="Switch Port" value="<?php echo $t1b;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="t1c" placeholder="Switch Port" value="<?php echo $t1c;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="t1d" placeholder="Switch Port" value="<?php echo $t1d;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="t1e" placeholder="Switch Port" value="<?php echo $t1e;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td align="left"></td>
								    <td>Switch 16</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="t2a" placeholder="Cisco/Maipu/Other" value="<?php echo $t2a;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="t2b" value="<?php echo $t2b;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="t2c" value="<?php echo $t2c;?>" class="form-control" /></td>
                                       <td>Upload Switch 16 <input type="file" name="switch_16"/></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="t2d" placeholder="Switch Port" value="<?php echo $t2d;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="t2e" placeholder="Switch Port" value="<?php echo $t2e;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="u1a" placeholder="Switch Port" value="<?php echo $u1a;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="u1b" placeholder="Switch Port" value="<?php echo $u1b;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td></td>
								    <td>Switch 17</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="u1c" placeholder="Cisco/Maipu/Other" value="<?php echo $u1c;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="u1d" value="<?php echo $u1d;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="u1e" value="<?php echo $u1e;?>" class="form-control" /></td>
                                       <td>Upload Switch 17 <input type="file" name="switch_17" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="u2a" placeholder="Switch Port" value="<?php echo $u2a;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="u2b" placeholder="Switch Port" value="<?php echo $u2b;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="u2c" placeholder="Switch Port" value="<?php echo $u2c;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="u2d" placeholder="Switch Port" value="<?php echo $u2d;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td></td>
								    <td>Switch 18</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="u2e" placeholder="Cisco/Maipu/Other" value="<?php echo $u2e;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="v1a" value="<?php echo $v1a;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="v1b" value="<?php echo $v1b;?>" class="form-control" /></td>
                                       <td>Upload Switch 18 <input type="file" name="switch_18" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="v1c" placeholder="Switch Port" value="<?php echo $v1c;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="v1d" placeholder="Switch Port" value="<?php echo $v1d;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="v1e" placeholder="Switch Port" value="<?php echo $v1e;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="v2a" placeholder="Switch Port" value="<?php echo $v2a;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td></td>
								    <td></td>
								    <td>Switch 19</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="v2b" placeholder="Cisco/Maipu/Other" value="<?php echo $v2b;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="v2c" value="<?php echo $v2c;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="v2d" value="<?php echo $v2d;?>" class="form-control" /></td>
                                       <td>Upload Switch 19 <input type="file" name="switch_19" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="v2e" placeholder="Switch Port" value="<?php echo $v2e;?>" class="form-control" /></td>
								    <td>Server (2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="w1a" placeholder="Switch Port" value="<?php echo $w1a;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="w1b" placeholder="Switch Port" value="<?php echo $w1b;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="w1c" placeholder="Switch Port" value="<?php echo $w1c;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td></td>
								    <td></td>
								    <td>Switch 20</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="w1d" placeholder="Cisco/Maipu/Other" value="<?php echo $w1d;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="w1e" value="<?php echo $w1e;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="w2a" value="<?php echo $w2a;?>" class="form-control" /></td>
                                       <td>Upload Switch 20 <input type="file" name="switch_20" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="w2b" placeholder="Switch Port" value="<?php echo $w2b;?>" class="form-control" /></td>
								    <td>Server(2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="w2c" placeholder="Switch Port" value="<?php echo $w2c;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="w2d" placeholder="Switch Port" value="<?php echo $w2d;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="w2e" placeholder="Switch Port" value="<?php echo $w2e;?>" class="form-control" /></td>
							      </tr>
                                  
                                  <tr>
								    <td></td>
								    <td></td>
								    <td>Switch 21</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="b1a" placeholder="Cisco/Maipu/Other" value="<?php echo $b1a;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="b1b" value="<?php echo $b1b;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="b1c" value="<?php echo $b1c;?>" class="form-control" /></td>
                                       <td>Upload Switch 21 <input type="file" name="switch_21" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="b1d" placeholder="Switch Port" value="<?php echo $b1d;?>" class="form-control" /></td>
								    <td>Server(2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="b1e" placeholder="Switch Port" value="<?php echo $b1e;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="b1f" placeholder="Switch Port" value="<?php echo $b1f;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="b1g" placeholder="Switch Port" value="<?php echo $b1g;?>" class="form-control" /></td>
							      </tr>
                                  
                                  <tr>
								    <td></td>
								    <td></td>
								    <td>Switch 22</td>
								    <td>Merk
								      <input style="font-style:italic;font-size:12px;" type="text" name="c1a" placeholder="Cisco/Maipu/Other" value="<?php echo $c1a;?>" class="form-control" /></td>
								    <td>Type
								      <input type="text" name="c1b" value="<?php echo $c1b;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="c1c" value="<?php echo $c1c;?>" class="form-control" /></td>
                                       <td>Upload Switch 22 <input type="file" name="switch_22" class="form-control" /></td>
								    <td>Trunk (99)
								      <input style="font-style:italic;font-size:12px;" type="text" name="c1d" placeholder="Switch Port" value="<?php echo $c1d;?>" class="form-control" /></td>
								    <td>Server(2)
								      <input style="font-style:italic;font-size:12px;" type="text" name="c1e" placeholder="Switch Port" value="<?php echo $c1e;?>" class="form-control" /></td>
								    <td>Client (3,5,6,7,8)
								      <input style="font-style:italic;font-size:12px;" type="text" name="c1f" placeholder="Switch Port" value="<?php echo $c1f;?>" class="form-control" /></td>
								    <td>ATM(9)
								      <input style="font-style:italic;font-size:12px;" type="text" name="c1g" placeholder="Switch Port" value="<?php echo $c1g;?>" class="form-control" /></td>
							      </tr>
                                  
                                  
                                  
                                  
								  <tr>
								    <td align="left"><strong>SERVER HARDWARE</strong></td>
								    <td><input style="font-style:italic;font-size:12px;" type="text" name="x1a" placeholder="IP Server" value="<?php echo $x1a;?>" class="form-control" /></td>
								    <td><input style="font-style:italic;font-size:12px;" type="text" name="x1b" placeholder="Server Name" value="<?php echo $x1b;?>" class="form-control" /></td>
								    <td>Merk <select name="x1c" id="x1c" class="form-control" >
									<option <?php echo($x1c=='')?"selected":""?>></option>
									<option <?php echo($x1c=='HP')?"selected":""?>>HP</option>
									<option <?php echo($x1c=='LENOVO')?"selected":""?>>LENOVO</option>
                                    <option <?php echo($x1c=='ACER')?"selected":""?>>ACER</option>
                                     <option <?php echo($x1c=='OTHERS')?"selected":""?>>OTHERS</option>
                                    							
									</select></td>
								    
								    <td>Type
								      <input type="text" name="x1d" value="<?php echo $x1d;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" name="x1e" value="<?php echo $x1e;?>" class="form-control" /></td>
								   <td>Upload Server 1 <input type="file" name="server_1" class="form-control" /></td>
								    <td>Status
								      <select name="x2b" id="x2b" class="form-control" >
									<option <?php echo($x2b=='')?"selected":""?>></option>
									<option <?php echo($x2b=='OK')?"selected":""?>>OK</option>
									<option <?php echo($x2b=='NOT')?"selected":""?>>NOT</option>
                                    							
									</select></td>
							      </tr>
								  <tr>
								    <td align="left"></td>
								    <td></td>
								    <td></td>
								    <td>Processor
								      <input style="font-style:italic;font-size:12px;" type="text" name="x2c" placeholder="Intel Core i3 i5" value="<?php echo $x2c;?>" class="form-control" /></td>
								    <td>HDD
								      <select name="x2d" id="x2d" class="form-control" >
									<option <?php echo($x2d=='')?"selected":""?>></option>
									<option <?php echo($x2d=='500 GB')?"selected":""?>>500 GB</option>
									<option <?php echo($x2d=='1 TB')?"selected":""?>>1 TB</option>
                                   
                                    							
									</select></td>
								    <td>RAM
								      <select name="x2e" id="x2e" class="form-control" >
									<option <?php echo($x2e=='')?"selected":""?>></option>
									
                                    <option <?php echo($x2e=='2 GB')?"selected":""?>>2 GB</option>
                                    <option <?php echo($x2e=='4 GB')?"selected":""?>>4 GB</option>
                                    <option <?php echo($x2e=='8 GB')?"selected":""?>>8 GB</option>
                                    <option <?php echo($x2e=='16 GB')?"selected":""?>>16 GB</option>
                                   
                                    							
									</select></td>
								    <td>Free Space
								      <input style="font-style:italic;font-size:12px;" type="text" name="y1a" placeholder="Drive C:" value="<?php echo $y1a;?>" class="form-control" /></td>
								    <td>Free Space
								      <input style="font-style:italic;font-size:12px;" type="text" name="y1b" placeholder="Drive D:" value="<?php echo $y1b;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td align="left"></td>
								  
								    <td></td>
								    <td>Symantec AV
								      <input style="font-style:italic;font-size:12px;" type="text" name="y1c" placeholder="Symantec Version" value="<?php echo $y1c;?>" class="form-control" /></td>
								    <td>Update
								      <input style="font-style:italic;font-size:12px;" type="text" name="y1d" placeholder="Virus Definition File" value="<?php echo $y1d;?>" class="form-control" /></td>
								    <td></td>
								    <td></td></td>
							      </tr>
								  <tr>
								    <td align="left"></td>
								    <td></td>
								    <td></td>
								    <td>Ping 192.168.12.1
								      <select name="y1e" id="y1e" class="form-control" >
									<option <?php echo($y1e=='')?"selected":""?>></option>
									<option <?php echo($y1e=='REPLY')?"selected":""?>>REPLY</option>
									<option <?php echo($y1e=='RTO')?"selected":""?>>RTO</option>
                                    <option <?php echo($y1e=='DHU')?"selected":""?>>DHU</option>
                                    							
									</select></td>
								    <td>Time
								      <input style="font-style:italic;font-size:12px;" type="text" name="y2a" placeholder="Average Time" value="<?php echo $y2a;?>" class="form-control" /></td>
								    <td>Ping 10.164.xxx.126
								      <select name="y2b" id="y2b" class="form-control" >
									<option <?php echo($y2b=='')?"selected":""?>></option>
									<option <?php echo($y2b=='REPLY')?"selected":""?>>REPLY</option>
									<option <?php echo($y2b=='RTO')?"selected":""?>>RTO</option>
                                    <option <?php echo($y2b=='DHU')?"selected":""?>>DHU</option>
                                    							
									</select></td>
							      </tr>
								  <tr>
								    <td align="left"></td>
								    <td><input style="font-style:italic;font-size:12px;" type="text" name="y2c" placeholder="IP Other Server" value="<?php echo $y2c;?>" class="form-control" /></td>
								    <td><input style="font-style:italic;font-size:12px;" type="text" name="y2d" placeholder="Other Server Name" value="<?php echo $y2d;?>" class="form-control" /></td>
								    <td>Merk
								      <select name="y2e" id="y2e" class="form-control" >
									<option <?php echo($y2e=='')?"selected":""?>></option>
									<option <?php echo($y2e=='HP')?"selected":""?>>HP</option>
									<option <?php echo($y2e=='LENOVO')?"selected":""?>>LENOVO</option>
                                    <option <?php echo($y2e=='ACER')?"selected":""?>>ACER</option>
                                     <option <?php echo($y2e=='OTHERS')?"selected":""?>>OTHERS</option>
                                    							
									</select></td>
								    <td>Type
								      <input type="text" name="z1a" value="<?php echo $z1a;?>" class="form-control" /></td>
								    <td>SN
								      <input type="text" size="12" name="z1b" value="<?php echo $z1b;?>" class="form-control" /></td>
								    <td>OS
								      <input type="text" size="12" name="z1c" value="<?php echo $z1c;?>" class="form-control" /></td>
								    <td>Aplikasi
								      <input type="text" size="12" name="z1d" value="<?php echo $z1d;?>" class="form-control" /></td>
							      </tr>
								  <tr>
								    <td align="left"><strong>COMMUNICATION</strong></td>
								    <td>Mainlink
								      <select name="z1e" id="z1e" class="form-control" >
									<option <?php echo($z1e=='')?"selected":""?>></option>
									<option <?php echo($z1e=='TELKOM')?"selected":""?>>TELKOM</option>
									<option <?php echo($z1e=='LA')?"selected":""?>>LA</option>
                                    <option <?php echo($z1e=='TM')?"selected":""?>>TM</option>
                                     <option <?php echo($z1e=='SCM')?"selected":""?>>SCM</option>
                                     <option <?php echo($z1e=='SDWAN-XL')?"selected":""?>>SDWAN-XL</option>
                                     <option <?php echo($z1e=='SDWAN-FIBERSTART')?"selected":""?>>SDWAN-FIBERSTART</option>
									
									</select></td>
								    <td>Backuplink
								      <select name="z2a" id="z2a" class="form-control" >
									<option <?php echo($z2a=='')?"selected":""?>></option>
									<option <?php echo($z2a=='TELKOM')?"selected":""?>>TELKOM</option>
									<option <?php echo($z2a=='LA')?"selected":""?>>LA</option>
                                    <option <?php echo($z2a=='TM')?"selected":""?>>TM</option>
                                     <option <?php echo($z2a=='SCM')?"selected":""?>>SCM</option>
									     <option <?php echo($z2a=='CSM')?"selected":""?>>CSM</option>
										  <option <?php echo($z2a=='PRIMACOM')?"selected":""?>>PRIMACOM</option>
                                     <option <?php echo($z1e=='SDWAN-XL')?"selected":""?>>SDWAN-XL</option>
                                     <option <?php echo($z1e=='SDWAN-FIBERSTART')?"selected":""?>>SDWAN-FIBERSTART</option>
									
									</select></td>
								    <td>UTP Modem to Router
								      <select name="z2b" id="z2b" class="form-control" >
									<option <?php echo($z2b=='')?"selected":""?>></option>
									<option <?php echo($z2b=='ADA')?"selected":""?>>ADA</option>
									<option <?php echo($z2b=='TIDAK')?"selected":""?>>TIDAK</option>
                                    							
									</select></td>
								    <td>UTP Router to Switch
								      <select name="a1a" id="a1a" class="form-control" >
									<option <?php echo($a1a=='')?"selected":""?>></option>
									<option <?php echo($a1a=='ADA')?"selected":""?>>ADA</option>
									<option <?php echo($a1a=='TIDAK')?"selected":""?>>TIDAK</option>
                                    
									
									</select></td>
								   
                                   <td>UTP Swicth to Switch
								      <select name="a1b" id="a1b" class="form-control" >
									<option <?php echo($a1b=='')?"selected":""?>></option>
									<option <?php echo($a1b=='ADA')?"selected":""?>>ADA</option>
									<option <?php echo($a1b=='TIDAK')?"selected":""?>>TIDAK</option>
                                    
									
									</select></td>
                                   
								     <td>UTP ATM to Switch
								      <select name="a1c" id="a1c" class="form-control" >
									<option <?php echo($a1c=='')?"selected":""?>></option>
									<option <?php echo($a1c=='ADA')?"selected":""?>>ADA</option>
									<option <?php echo($a1c=='TIDAK')?"selected":""?>>TIDAK</option>
                                    							
									</select></td>
                                    
                                     <td>10.xxx.xxx.254
								      <select name="a1d" id="a1d" class="form-control" >
									<option <?php echo($a1d=='')?"selected":""?>></option>
									<option <?php echo($a1d=='REPLY')?"selected":""?>>REPLY</option>
									<option <?php echo($a1d=='RTO')?"selected":""?>>RTO</option>
                                    <option <?php echo($a1d=='DHU')?"selected":""?>>DHU</option>
                                    							
									</select></td>
                                    
                                    
                                    
							      </tr>
								  
						    </table>
								<br />
                          
                            <button type="submit" name="ubah" class="btn btn-info" value="ubah"><i class="fas fa-sm fa-fw m-r-10 fa-pencil-alt"></i>Ubah</button>
                             <a href="?nav=powersystemdata" class="btn btn-warning" name="kembali"><i class="fas fa-sm fa-fw m-r-10 fa-undo-alt"></i>Kembali</a></form></div>
						<!-- END card-body -->
					</div>
					<!-- END card -->

				</div>

				
					
