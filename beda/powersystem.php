<style>
.italic {
   font-style: italic;
   font-size: 12px;
}
</style>
<?php
if(isset($_POST['simpan'])){
	
	$sql = "INSERT INTO psk(cabang, alamat, tanggal_kunjungan, inputer, h1a, h1b, h1c, h2a, h3a, h3b, h3c, h3d, h3e, h3f, h4a, 
	h4b, h5a, h5b, h5c, h6a, h6b, h7a, h7b, h8a, h8b, h8c, h9a, h9b, k1a, k1b, k1c, k2a, k3a, k3b, k3c, k3d, k3e, k3f, k4a, k4b, 
	k5a, k5b, k5c, k6a, k6b, k7a, k7b, k8a, k9a, k9b, l1a, l1b, l1c, l1d, l1e, l2a, l2b, l2c, l2d, l2e, m1a, m1b, m1c, m1d, m1e, 
	m2a, m2b, m2c, m2d, m2e, n1a, n1b, n1c, n1d, n1e, n2a, n2b, n2c, n2d, n2e, o1a, o1b, o1c, o1d, o1e, o2a, o2b, o2c, o2d, o2e, 
	p1a, p1b, p1c, p1d, p1e, p2a, p2b, p2c, p2d, p2e, q1a, q1b, q1c, q1d, q1e, q2a, q2b, q2c, q2d, q2e, r1a, r1b, r1c, r1d, r1e, 
	r2a, r2b, r2c, r2d, r2e, s1a, s1b, s1c, s1d, s1e, s2a, s2b, s2c, s2d, s2e, t1a, t1b, t1c, t1d, t1e, t2a, t2b, t2c, t2d, t2e, 
	u1a, u1b, u1c, u1d, u1e, u2a, u2b, u2c, u2d, u2e, v1a, v1b, v1c, v1d, v1e, v2a, v2b, v2c, v2d, v2e, w1a, w1b, w1c, w1d, w1e, 
	w2a, w2b, w2c, w2d, w2e, x1a, x1b, x1c, x1d, x1e, x2a, x2b, x2c, x2d, x2e, y1a, y1b, y1c, y1d, y1e, y2a, y2b, y2c, y2d, y2e, 
	z1a, z1b, z1c, z1d, z1e, z2a, z2b, a1a, a1b, a1c, a1d, b1a, b1b, b1c, b1d, b1e, b1f, b1g, c1a, c1b, c1c, c1d, c1e, c1f, c1g, id_user) 
	VALUES ('".$_POST['cabang']."', '".$_POST['alamat']."', '".$_POST['tanggal_kunjungan']."', '".$_POST['inputer']."', '".$_POST['h1a']."', 
	'".$_POST['h1b']."', '".$_POST['h1c']."', '".$_POST['h2a']."', '".$_POST['h3a']."', '".$_POST['h3b']."', '".$_POST['h3c']."', '".$_POST['h3d']."', 
	'".$_POST['h3e']."', '".$_POST['h3f']."', '".$_POST['h4a']."', '".$_POST['h4b']."', '".$_POST['h5a']."', '".$_POST['h5b']."', '".$_POST['h5c']."',
	'".$_POST['h6a']."', '".$_POST['h6b']."', '".$_POST['h7a']."', '".$_POST['h7b']."', '".$_POST['h8a']."', '".$_POST['h8b']."', '".$_POST['h8c']."', 
	'".$_POST['h9a']."', '".$_POST['h9b']."', '".$_POST['k1a']."', '".$_POST['k1b']."', '".$_POST['k1c']."', '".$_POST['k2a']."', '".$_POST['k3a']."',
	'".$_POST['k3b']."', '".$_POST['k3c']."', '".$_POST['k3d']."', '".$_POST['k3e']."', '".$_POST['k3f']."', '".$_POST['k4a']."', '".$_POST['k4b']."', 
	'".$_POST['k5a']."', '".$_POST['k5b']."', '".$_POST['k5c']."', '".$_POST['k6a']."', '".$_POST['k6b']."', '".$_POST['k7a']."', '".$_POST['k7b']."', 
	'".$_POST['k8a']."', '".$_POST['k9a']."', '".$_POST['k9b']."', '".$_POST['l1a']."', '".$_POST['l1b']."', '".$_POST['l1c']."', '".$_POST['l1d']."', 
	'".$_POST['l1e']."', '".$_POST['l2a']."', '".$_POST['l2b']."', '".$_POST['l2c']."', '".$_POST['l2d']."', '".$_POST['l2e']."', '".$_POST['m1a']."',
	'".$_POST['m1b']."', '".$_POST['m1c']."', '".$_POST['m1d']."', '".$_POST['m1e']."', '".$_POST['m2a']."','".$_POST['m2b']."', '".$_POST['m2c']."', 
	'".$_POST['m2d']."', '".$_POST['m2e']."', '".$_POST['n1a']."', '".$_POST['n1b']."', '".$_POST['n1c']."', '".$_POST['n1d']."', '".$_POST['n1e']."', 
	'".$_POST['n2a']."', '".$_POST['n2b']."', '".$_POST['n2c']."', '".$_POST['n2d']."', '".$_POST['n2e']."', '".$_POST['o1a']."', '".$_POST['o1b']."', 
	'".$_POST['o1c']."', '".$_POST['o1d']."', '".$_POST['o1e']."', '".$_POST['o2a']."', '".$_POST['o2b']."', '".$_POST['o2c']."', '".$_POST['o2d']."', 
	'".$_POST['o2e']."', '".$_POST['p1a']."', '".$_POST['p1b']."', '".$_POST['p1c']."', '".$_POST['p1d']."', '".$_POST['p1e']."', '".$_POST['p2a']."', 
	'".$_POST['p2b']."', '".$_POST['p2c']."', '".$_POST['p2d']."', '".$_POST['p2e']."', '".$_POST['q1a']."', '".$_POST['q1b']."', '".$_POST['q1c']."', 
	'".$_POST['q1d']."', '".$_POST['q1e']."', '".$_POST['q2a']."', '".$_POST['q2b']."', '".$_POST['q2c']."', '".$_POST['q2d']."', '".$_POST['q2e']."', 
	'".$_POST['r1a']."', '".$_POST['r1b']."', '".$_POST['r1c']."', '".$_POST['r1d']."', '".$_POST['r1e']."', '".$_POST['r2a']."', '".$_POST['r2b']."', 
	'".$_POST['r2c']."', '".$_POST['r2d']."', '".$_POST['r2e']."', '".$_POST['s1a']."', '".$_POST['s1b']."', '".$_POST['s1c']."', '".$_POST['s1d']."', 
	'".$_POST['s1e']."', '".$_POST['s2a']."', '".$_POST['s2b']."', '".$_POST['s2c']."', '".$_POST['s2d']."', '".$_POST['s2e']."', '".$_POST['t1a']."', 
	'".$_POST['t1b']."', '".$_POST['t1c']."', '".$_POST['t1d']."', '".$_POST['t1e']."', '".$_POST['t2a']."', '".$_POST['t2b']."', '".$_POST['t2c']."', 
	'".$_POST['t2d']."', '".$_POST['t2e']."', '".$_POST['u1a']."', '".$_POST['u1b']."', '".$_POST['u1c']."', '".$_POST['u1d']."', '".$_POST['u1e']."', 
	'".$_POST['u2a']."', '".$_POST['u2b']."', '".$_POST['u2c']."', '".$_POST['u2d']."', '".$_POST['u2e']."', '".$_POST['v1a']."', '".$_POST['v1b']."', 
	'".$_POST['v1c']."', '".$_POST['v1d']."', '".$_POST['v1e']."', '".$_POST['v2a']."', '".$_POST['v2b']."', '".$_POST['v2c']."', '".$_POST['v2d']."', 
	'".$_POST['v2e']."', '".$_POST['w1a']."', '".$_POST['w1b']."', '".$_POST['w1c']."', '".$_POST['w1d']."', '".$_POST['w1e']."', '".$_POST['w2a']."', 
	'".$_POST['w2b']."', '".$_POST['w2c']."', '".$_POST['w2d']."', '".$_POST['w2e']."', '".$_POST['x1a']."', '".$_POST['x1b']."', '".$_POST['x1c']."', 
	'".$_POST['x1d']."', '".$_POST['x1e']."', '".$_POST['x2a']."', '".$_POST['x2b']."', '".$_POST['x2c']."', '".$_POST['x2d']."', '".$_POST['x2e']."', 
	'".$_POST['y1a']."', '".$_POST['y1b']."', '".$_POST['y1c']."', '".$_POST['y1d']."', '".$_POST['y1e']."', '".$_POST['y2a']."', '".$_POST['y2b']."', 
	'".$_POST['y2c']."', '".$_POST['y2d']."', '".$_POST['y2e']."', '".$_POST['z1a']."', '".$_POST['z1b']."', '".$_POST['z1c']."', '".$_POST['z1d']."', 
	'".$_POST['z1e']."', '".$_POST['z2a']."', '".$_POST['z2b']."', '".$_POST['a1a']."', 
	'".$_POST['a1b']."', '".$_POST['a1c']."', '".$_POST['a1d']."', '".$_POST['b1a']."', '".$_POST['b1b']."', '".$_POST['b1c']."', '".$_POST['b1d']."', '".$_POST['b1e']."', '".$_POST['b1f']."', '".$_POST['b1g']."', '".$_POST['c1a']."', '".$_POST['c1b']."', '".$_POST['c1c']."', '".$_POST['c1d']."', '".$_POST['c1e']."', '".$_POST['c1f']."', '".$_POST['c1g']."', '".$_SESSION['id']."')";
	$query = mysqli_query($koneksi, $sql);

?>


<?php
}
?>

<?php

	$sql = "select cabang, alamat, tanggal_kunjungan, inputer, h1a, h1b, h1c, h2a, h3a, h3b, h3c, 
	h3d, h3e, h3f, h4a, h4b, h5a, h5b, h5c, h6a, h6b, h7a, h7b, h8a, h8b, h8c, h9a, h9b, k1a, k1b, 
	k1c, k2a, k3a, k3b, k3c, k3d, k3e, k3f, k4a, k4b, k5a, k5b, k5c, k6a, k6b, k7a, k7b, k8a, k9a, 
	k9b, l1a, l1b, l1c, l1d, l1e, l2a, l2b, l2c, l2d, l2e, m1a, m1b, m1c, m1d, m1e, m2a, m2b, m2c, 
	m2d, m2e, n1a, n1b, n1c, n1d, n1e, n2a, n2b, n2c, n2d, n2e, o1a, o1b, o1c, o1d, o1e, o2a, o2b, 
	o2c, o2d, o2e, p1a, p1b, p1c, p1d, p1e, p2a, p2b, p2c, p2d, p2e, q1a, q1b, q1c, q1d, q1e, q2a, 
	q2b, q2c, q2d, q2e, r1a, r1b, r1c, r1d, r1e, r2a, r2b, r2c, r2d, r2e, s1a, s1b, s1c, s1d, s1e, 
	s2a, s2b, s2c, s2d, s2e, t1a, t1b, t1c, t1d, t1e, t2a, t2b, t2c, t2d, t2e, u1a, u1b, u1c, u1d, 
	u1e, u2a, u2b, u2c, u2d, u2e, v1a, v1b, v1c, v1d, v1e, v2a, v2b, v2c, v2d, v2e, w1a, w1b, w1c, 
	w1d, w1e, w2a, w2b, w2c, w2d, w2e, x1a, x1b, x1c, x1d, x1e, x2a, x2b, x2c, x2d, x2e, y1a, y1b, 
	y1c, y1d, y1e, y2a, y2b, y2c, y2d, y2e, z1a, z1b, z1c, z1d, z1e, z2a, z2b, a1a, 
	a1b, a1c, a1d, b1a, b1b, b1c, b1d, b1e, b1f, b1g, c1a, c1b, c1c, c1d, c1e, c1f, c1g, id_user from psk";
	$qry = mysqli_query($koneksi, $sql);
	$no = 1;
	while($data = mysqli_fetch_array($qry)){
			
		
?>


<?php
	}
	?>




<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <div align="center"><strong>PREVENTIVE MAINTENANCE</strong></div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST" enctype="multipart/form-data" action="uploadprosespm.php" >
							<div class="form-group">
									<label for="exampleInputName">Kantor Cabang/Kantor Kas</label>
									<br>
									<select class="form-control" name="cabang" id="cabang" onchange="fcabangalamat();">
									
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
									
									
									
									<option value="--Pilih--">--Pilih Outlet--</option>
									<option value="KANTOR WILAYAH">KANTOR WILAYAH</option>
									<option value="SBO BDG">SBO BDG</option>
									<option value="SBE PRG">SBE PRG</option>
									<option value="SBE BDG">SBE BDG</option>
									<option value="SBK BDG">SBK BDG</option>
									<option value="RRW BDG">RRW BDG</option>
									<option value="RRW JJS">RRW JJS</option>
									<option value="SKK">SKK</option>
									<option value="LGW">LGW</option>
									<option value="KIW">KIW</option>
									<option value="SDW">SDW</option>
									<option value="HMW">HMW</option>
									<option value="LPW">LPW</option>
									<option value="ATW">ATW</option>
									<option value="BUW">BUW</option>
									<option value="CTW">CTW</option>
									<option value="TNW">TNW</option>
									<option value="ARC BDG">ARC BDG</option>
									<option value="TRA">TRA</option>
									<option value="RCF">RCF</option>
									<option value="OPW">OPW</option>
									
								
									<option value="KC BANDUNG">KC BANDUNG</option>
									<option value="KCP Ahmad Yani">KCP Ahmad Yani</option>
									<option value="KCP Braga">KCP Braga</option>
									<option value="KCP Buah Batu">KCP Buah Batu</option>
									<option value="KCP Cicadas">KCP Cicadas</option>
									<option value="KCP Japati">KCP Japati</option>
									<option value="KCP Kiaracondong">KCP Kiaracondong</option>
									<option value="KCP Pungkur">KCP Pungkur</option>
									<option value="KCP Rancaekek">KCP Rancaekek</option>
									<option value="KCP Riau">KCP Riau</option>
									<option value="KCP Soekarno Hatta">KCP Soekarno Hatta</option>
									<option value="KCP Supratman">KCP Supratman</option>
									<option value="KCP Ujung Berung">KCP Ujung Berung</option>
									<option value="KK Antapani">KK Antapani</option>
									<option value="KK Arcamanik">KK Arcamanik</option>
									<option value="KK Astana Anyar">KK Astana Anyar</option>
									<option value="KK Batununggal">KK Batununggal</option>
									<option value="KK Gatot Subroto">KK Gatot Subroto</option>
									
									
									
									<option value="KC CIREBON">KC CIREBON</option>
									<option value="KCP Tegalwangi">KCP Tegalwangi</option>
									<option value="KCP Grage Mall">KCP Grage Mall</option>
									<option value="KCP Arjawinangun">KCP Arjawinangun</option>
									<option value="KCP Losari">KCP Losari</option>
									<option value="KCP Sumber">KCP Sumber</option>
									<option value="KK Pekalipan">KK Pekalipan</option>
									<option value="KK Harjamukti">KK Harjamukti</option>
									<option value="KK Sindanglaut">KK Sindanglaut</option>
									<option value="KK Tuparev">KK Tuparev</option>
									
									
									<option value="KC TASIKMALAYA">KC TASIKMALAYA</option>
									<option value="KCP Ciawi">KCP Ciawi</option>
									<option value="KCP Universitas Siliwangi">KCP Universitas Siliwangi</option>
									<option value="KCP Ciamis">KCP Ciamis</option>
									<option value="KCP Singaparna">KCP Singaparna</option>
									<option value="KCP Karan Nunggal">KCP Karang Nunggal</option>
									<option value="KCP Cikuburuk">KCP Cikurubuk</option>
									<option value="KK Sutisna Senjaya">KK Sutisna Senjaya</option>
									<option value="KK Kawali">KK Kawali</option>
									
									
									
									<option value="KC MAJALAYA">KC MAJALAYA</option>
									<option value="KCP Soreang">KCP Soreang</option>
									<option value="KCP Baleendah">KCP Baleendah</option>
									<option value="KCP Banjaran">KCP Banjaran</option>
									<option value="KCP Cicalengka">KCP Cicalengka</option>
									<option value="KCP Cinunuk">KCP Cinunuk</option>
									<option value="KK Taman Kopo Indah">KK Taman Kopo Indah</option>
									<option value="KK Ciwidey">KK Ciwidey</option>
									<option value="KK Kopo Katapang">KK Kopo Katapang</option>
									<option value="KK De Prima Terra">KK De Prima Terra</option>
									<option value="KK Ciparay">KK Ciparay</option>
									<option value="KK Cibaduyut">KK Cibaduyut</option>
									
									
									
									
									<option value="KC SUKABUMI">KC SUKABUMI</option>
									<option value="KCP Ciwangi">KCP Ciwangi</option>
									<option value="KCP Cibadak">KCP Cibadak</option>
									<option value="KCP Cicurug">KCP Cicurug</option>
									<option value="KCP Surade">KCP Surade</option>
									<option value="KCP Pelabuhan Ratu">KCP Pelabuhan Ratu</option>
									<option value="KK Pangleseran">KK Pangleseran</option>
									
								
									
									<option value="KC BANJAR">KC BANJAR</option>
									<option value="KCP Pangandaran">KCP Pangandaran</option>
									<option value="KK Banjar">KK Banjarsari</option>
									
									
									<option value="KC GARUT">KC GARUT</option>
									<option value="KCP Cikajang">KCP Cikajang</option>
									<option value="KCP Pameungpeuk">KCP Pameungpeuk</option>
									<option value="KK Kadungora">KK Kadungora</option>
									<option value="KK Limbangan">KK Limbangan</option>
									<option value="KK Ciledug">KK Ciledug</option>
								
									
									<option value="KC CIANJUR">KC CIANJUR</option>
									<option value="KCP Cipanas">KCP Cipanas</option>
									<option value="KCP Ciranjang">KCP Ciranjang</option>
									<option value="KCP Cibeber">KCP Cibeber</option>
									<option value="Hos Tjokroaminoto">KK Hos Tjokroaminoto</option>
									
									
									<option value="KC INDRAMAYU">KC INDRAMAYU</option>
									<option value="KCP Jatibarang">KCP Jatibarang</option>
									<option value="KCP Patrol">KCP Patrol</option>
									<option value="KCP Haurgeulis">KCP Haurgeulis</option>
									<option value="KCP Karangampel">KCP Karangampel</option>
									
									
									
									<option value="KC KUNINGAN">KC KUNINGAN</option>
									<option value="KCP Cikijing">KCP Cikijing</option>
									<option value="KCP Majalengka">KCP Majalengka</option>
									<option value="KCP Kadipaten">KCP Kadipaten</option>
									<option value="KK Cilimus">KK Cilimus</option>
									<option value="KK Jatiwangi">KK Jatiwangi</option>
									<option value="KK BIJB Kertajati">KK BIJB Kertajati</option>
									<option value="PP Universitas Kuningan">PP Universitas Kuningan</option>
									
									
									
									<option value="KC PURWAKARTA">KC PURWAKARTA</option>
									<option value="KCP Plered">KCP Plered</option>
									<option value="KK Kota Bukit Indah">KK Kota Bukit Indah</option>
									<option value="KK Jatiluhur">KK Jatiluhur</option>
									<option value="KK Cikopo">KK Cikopo</option>
									
									
									
									<option value="KC SUMEDANG">KC SUMEDANG</option>
									<option value="KCP Tanjungsari">KCP Tanjungsari</option>
									
									
									<option value="KC SUBANG">KC SUBANG</option>
									<option value="KCP Pamanukan">KCP Pamanukan</option>
									<option value="KCP Kalijati">KCP Kalijati</option>
									<option value="KK Cipeundeuy">KK Cipeundeuy</option>
									
									
									<option value="KC PTB">KC PTB</option>
									<option value="KCP Ganesha">KCP Ganesha</option>
									<option value="KCP Setrasari">KCP Setrasari</option>
									<option value="KCP LIPI">KCP LIPI</option>
									<option value="KCP Cihampelas">KCP Cihampelas</option>
									<option value="KCP UNIKOM">KCP UNIKOM</option>
									<option value="KCP UNPAD">KCP UNPAD</option>
									<option value="KCP Jatinangor">KCP Jatinangor</option>
									<option value="KCP Dago">KCP Dago</option>
									<option value="KCP UPI">KCP UPI</option>
									<option value="KCP Lembang">KCP Lembang</option>
									<option value="KCP Sukajadi">KCP Sukajadi</option>
									<option value="KCP ITENAS">KCP ITENAS</option>
									<option value="KCP Maranatha">KCP Maranatha</option>
									<option value="KK Pasteur">KK Pasteur</option>
									<option value="KK Setiabudhi">KK Setiabudhi</option>
									<option value="KK Cipadung">KK Cipadung</option>
									<option value="KK Rajawali">KK Rajawali</option>
									<option value="KK Ciumbuleuit">KK Ciumbuleuit</option>
									
									<option value="PP RS Hasansadikin">PP RS Hasansadikin</option>
									
									
									<option value="KC JPK">KC JPK</option>
									<option value="KCP JJS">KCP JJS</option>
									<option value="KCP PT. INTI">KCP PT. INTI</option>
									<option value="KCP YDPP Telkom">KCP YDPP Telkom</option>
									<option value="KCP PT. KAI">KCP PT. KAI</option>
									<option value="KCP Kopo Mas">KCP Kopo Mas</option>
									<option value="KCP Cijerah">KCP Cijerah</option>
									<option value="KCP Moch. Toha">KCP Moh. Toha</option>
									<option value="KCP Padalarang">KCP Padalarang</option>
									<option value="KCP Posindo">KCP Posindo</option>
									<option value="KCP Cimahi">KCP Cimahi</option>
									<option value="KCP Otista">KCP Otista</option>
									<option value="KCP Pajajaran">KCP Pajajaran</option>
									<option value="KCP Immanuel">KCP Immanuel</option>
									<option value="KK Dayeuhkolot">KK Dayeuhkolot</option>
									<option value="KK UNJANI">KK UNJANI</option>
									<option value="KK Sumbersari">KK Sumbersari</option>
									<option value="KK Batujajar">KK Batujajar</option>
									<option value="KK Ciwastra">KK Ciwastra</option>
									<option value="KK Pojok Cimahi">KK Pojok Cimahi</option>
									<option value="KK Karapitan">KK Karapitan</option>
									<option value="e-Branch Paskal">e-Branch Paskal</option>
									
								
									
									
									</select>
								
								</div>
                                
								
								
								
								<div class="form-group">
									<label for="exampleInputPassword1">Alamat</label>
									<input type="text" class="form-control" id="alamat" name="alamat" readonly="readonly"
                                    >
									
								
									
								</div>
                                
                                <div class="form-group">
									<label for="exampleInputPassword1">Tanggal Kunjungan</label>
									<input type="date" class="form-control" id="exampleInputName" placeholder="" name="tanggal_kunjungan">
								</div>
								
								
								
								  <div class="form-group">
									<label for="exampleInputPassword1">Inputer</label><br>
									<input type="text" name="inputer" class="form-control" id="exampleInputName" value="<?php echo $_SESSION['nama'];?>" readonly>
								</div>
								
                                
                                <table cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse" class="table table-responsive">
                                  <tr>
                                   
                                   
                                  
                                    
                                    
                                  </tr>
                                  <tr>
                                    
                                    <td rowspan="3" align="left"><strong>ELECTRICITY</strong></td>
                                    <td rowspan="3">Power</td>
                                   
                                  </tr>
                                  <tr>
                                   
                                  <td>PLN
                                    <input style="font-style:italic;font-size:12px;" type="text" name="h1a"  placeholder="Voltage" class="form-control" /> Volt</td>
                                  
                                     
                                  </tr>
                                  
                                  <tr>
                                  
                                    
                                  </tr>
                                  <tr>
                                  
                                    <td></td>
                                   
                                    <td>Genset</td>
                                    <td> <select class="form-control" name="h1b">
                                      
                                      <option value=""></option>
                                      <option value="OK">OK</option>
                                      <option value="NOT">NOT</option>
                                      
                                      
                                    </select></td>
                                    
                                  </tr>
                                  <tr>
                                    
                                    <td rowspan="4" align="left"></td>
                                    
                                    <td align="left">UPS</td>
                                    <td><select name="h1c" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="1 KVA">1 KVA</option>
                                      <option value="2 KVA">2 KVA</option>
                                      <option value="4 KVA">4 KVA</option>
                                      
                                      
                                    </select> <select name="h2a" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="OK">OK</option>
                                      <option value="NOT">NOT</option>
                                      
                                      
                                    </select></td>
                                     
                                    <td>Grounding <input style="font-style:italic;font-size:12px;" type="text" size="5" name="h3a" placeholder="Voltage"  class="form-control" /> VA</td>
                                   
                                  </tr>
                                  
                                  
                                  
                                  <tr>
                                   
                                    
                                  </tr>
                                  <tr>
                                   
                                    
                                  </tr>
                                  <tr>
                                  
                                  </tr>
                                  <tr>
                                    <td rowspan="4" align="left"><strong>TEMPERATURE</strong></td>
                                  
                                    <td align="left">Humidity</td>
                                    <td><input type="text" size="10" name="h3b" class="form-control" />%</td>
                                  </tr>
                                  <tr>
                                   
                                    <td align="left">Suhu</td>
                                    <td><input type="text" size="10" name="h3c" class="form-control" />˚C</td>
                                  </tr>
                                  <tr>
                                    
                                    
                                   
                                  </tr>
                                  <tr>
                                   
                                  </tr>
                                  <tr>
                                   
                                    <td rowspan="2" align="left"><strong>PENANGKAL PETIR</strong></td>
                                   <td>
                                   </td>
                                    <td align="left"><select name="h3d" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="Ada">Ada</option>
                                      <option value="Tidak">Tidak</option>
                                      
                                      
                                    </select></td>
                                   
                                  </tr>
                                  <tr>
                                   
                                   
                                    
                                  </tr>
                                  <tr>
                                    
                                    <td rowspan="4" align="left"><strong>WIRE/CABLING</strong></td>
                                    <td>Power/Electrical
                                    </td>
                                  
                                    <td align="left"><select name="h3e" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="Rapih">Rapih</option>
                                      <option value="Tidak">Tidak</option>
                                      
                                      
                                    </select></td>
                                    
                                  </tr>
                                  <tr>
                                   
                                    <td align="left">UTP/LAN</td>
                                    <td><select name="h3f" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="Rapih">Rapih</option>
                                      <option value="Tidak">Tidak</option>
                                      
                                      
                                    </select></td>
                                  </tr>
                                  <tr>
                                    
                                    
                                   
                                  
                                  </tr>
                                  <tr>
                                    
                                  </tr>
                                  <tr>
                                   
                                   
                                  </tr>
                                  <tr>
                                    
                                    <td rowspan="4" align="left"><strong>SERVER PREMISES</strong></td>
                                  
                                    <td align="left">Room</td>
                                    <td><select name="h4a" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="Bersih">Bersih</option>
                                      <option value="Kotor">Kotor</option>
                                      
                                      
                                    </select></td>
                                  </tr>
                                  <tr>
                                   
                                    <td align="left">Space Area</td>
                                    
                                    <td><select name="h4b" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="Large">Large</option>
                                     <option value="Medium">Medium</option>
                                     <option value="Small">Small</option>
                                      
                                      
                                    </select></td>
                                  </tr>
                                  <tr>
                                    <td>Rack</td>
                                   <td><select name="h5a" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="Bersih">Bersih</option>
                                      <option value="Kotor">Kotor</option>
                                      
                                      
                                    </select></td>
                                    
                                  </tr>
                                  <tr>
                                   
                                    <td align="left">A.P.A.R.</td>
                                   <td><select name="h5b" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="Ada">Ada</option>
                                      <option value="Tidak">Tidak</option>
                                      
                                      
                                    </select></td>
                                    
                                  </tr>
                                  <tr>
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                  
                                    <td rowspan="4" align="left"><strong>INVENTORY</strong></td>
                                  
                                    <td align="left"><strong>Router</strong></td>
                                    <td>Router 1</td>
                                     <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="h5c" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                     
                                      <td>Type <input type="text" size="10" name="h6a" class="form-control" /></td>
                                      
                                      <td>SN <input type="text" size="10" name="h6b" class="form-control" /></td>
                                      <td>Upload Router 1 <input type="file" name="router_1"/></td>
                                      
                                       <td>Mainlink <input style="font-style:italic;font-size:12px;" type="text" size="8" name="h7a" placeholder="Router Port" class="form-control" /></td>
                                      
                                      <td>Backuplink <input style="font-style:italic;font-size:12px;" type="text" size="8" name="h7b" placeholder="Router Port" class="form-control" /></td>
                                      
                                      <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="h8a" placeholder="Router Port" class="form-control" /></td>
                                     
                                    
                                    
                                  </tr>
                                  <tr>
                                   
                                    <td align="left"></td>
                                    
                                    <td>Router 2</td>
                                    <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="h8b" size="15" placeholder="Cisco/Maipu/Other" class="form-control"  /></td>
                                      
                                    <td>Type <input type="text" size="10" name="h8c" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="h9a" class="form-control" /></td>
                                       <td>Upload Router 2 <input type="file" name="router_2"/></td>
                                      
                                      <td>Mainlink <input style="font-style:italic;font-size:12px;" type="text" name="h9b" size="8" placeholder="Router Port" class="form-control" /></td>
                                      
                                      <td>Backuplink <input style="font-style:italic;font-size:12px;" type="text" size="8" name="k1a" placeholder="Router Port" class="form-control" /></td>
                                      
                                      <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="k1b" placeholder="Router Port" class="form-control" /></td>
                                      
                                  </tr>
                                  <tr>
                                    <td><strong>Switchub</strong></td>
                                   <td>Switch 1</td>
                                   <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="k1c" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="k2a" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="k3a" class="form-control" /></td>
                                       <td>Upload Switch 1 <input type="file" name="switch_1"/></td>
                                      
                                      <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="k3b" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="k3c" placeholder="Switch Port" class="form-control" /></td>
                                      
                                       <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="k3d" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input style="font-style:italic;font-size:12px;" type="text" name="k3e" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      
                                    
                                  </tr>
                                  <tr>
                                   
                                    <td align="left"></td>
                                  <td>Switch 2</td>
                                  <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="k3f" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text"  size="10" name="k4a" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="k4b" class="form-control" /></td>
                                       <td>Upload Switch 2 <input type="file" name="switch_2"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="k5a" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="k5b" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="k5c" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input style="font-style:italic;font-size:12px;" type="text" name="k6a" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      

                                    
                                  </tr>
                                  
                                  <td rowspan="4" align="left"></td>
                                  
                                    <td align="left"></td>
                                    <td>Switch 3</td>
                                    <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="k6b" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="k7a" class="form-control" /></td>
                                       
                                      <td>SN <input type="text" size="10" name="k7b" class="form-control" /></td>
                                      <td>Upload Switch 3 <input type="file" name="switch_3"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="k8a" size="8" placeholder="Switch Port class="form-control" "/></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="k9a" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="k9b" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="l1a" placeholder="Switch Port" class="form-control" /></td>
                                      
                                  </tr>
                                  <tr>
                                   
                                    <td align="left"></td>
                                    
                                    <td>Switch 4</td>
                                    <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="l1b" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="l1c" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="l1d" class="form-control" /></td>
                                       <td>Upload Switch 4 <input type="file" name="switch_4"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="l1e" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="l2a" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="l2b" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input style="font-style:italic;font-size:12px;" type="text" name="l2c" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      

                                  </tr>
                                  <tr>
                                    <td></td>
                                   <td>Switch 5</td>
                                   <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="l2d" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="l2e" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="m1a" class="form-control" /></td>
                                       <td>Upload Switch 5 <input type="file" name="switch_5"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="m1b" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text"  size="8" name="m1c" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="m1d" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input  style="font-style:italic;font-size:12px;"type="text" name="m1e" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      

                                    
                                  </tr>
                                  <tr>
                                   
                                    <td align="left"></td>
                                  <td>Switch 6</td>
                                  <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="m2a" size="15" placeholder="Cisco/Maipu/Other"  class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="m2b" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="m2c" class="form-control" /></td>
                                        <td>Upload Switch 6 <input type="file" name="switch_6"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="m2d" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="m2e" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="n1a" placeholder="Switch Port" class="form-control"  /></td>
                                      
                                      <td>ATM(9) <input style="font-style:italic;font-size:12px;" type="text" name="n1b" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      

                                  
                                  <tr>
                                  
                                  
                                  
                                  
                                  <td rowspan="4" align="left"></td>
                                  
                                    <td align="left"></td>
                                    <td>Switch 7</td>
                                    <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="n1c" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                     
                                      <td>Type <input type="text" size="10" name="n1d" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="n1e" class="form-control" /></td>
                                       <td>Upload Switch 7 <input type="file" name="switch_7"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="n2a" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="n2b" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="n2c" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input style="font-style:italic;font-size:12px;" type="text" name="n2d" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      

                                    
                                    
                                  </tr>
                                  <tr>
                                   
                                    <td align="left"></td>
                                    
                                    <td>Switch 8</td>
                                    <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="n2e" size="15" placeholder="Cisco/Maipu/Other" class="form-control"  /></td>
                                      
                                      <td>Type <input type="text" size="10" name="o1a" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="o1b" class="form-control" /></td>
                                        <td>Upload Switch 8 <input type="file" name="switch_8"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="o1c" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="o1d" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="o1e" placeholder="Switch Port" class="form-control" /></td>
                                     
                                      <td>ATM(9) <input style="font-style:italic;font-size:12px;" type="text" name="o2a" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      

                                  </tr>
                                  <tr>
                                    <td></td>
                                   <td>Switch 9</td>
                                   <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="o2b" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="o2c" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="o2d" class="form-control" /></td>
                                       <td>Upload Switch 9 <input type="file" name="switch_9"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="o2e" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="p1a" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="p1b" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input  style="font-style:italic;font-size:12px;" type="text" name="p1c" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      

                                    
                                  </tr>
                                  <tr>
                                   
                                    <td align="left"></td>
                                  <td>Switch 10</td>
                                  <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="p1d" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="p1e" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="p2a" class="form-control" /></td>
                                       <td>Upload Switch 10 <input type="file" name="switch_10"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="p2b" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text"  size="8" name="p2c" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="p2d" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input  style="font-style:italic;font-size:12px;" type="text" name="p2e" size="8" placeholder="Switch Port" class="form-control" /></td>
                                     

                                  
                                  </tr>
                                  
                                  <td rowspan="4" align="left"></td>
                                  
                                    <td align="left"></td>
                                    <td>Switch 11</td>
                                    <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="q1a" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="q1b" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="q1c" class="form-control" /></td>
                                        <td>Upload Switch 11 <input type="file" name="switch_11"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="q1d" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;"  type="text" size="8" name="q1e" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="q2a" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input style="font-style:italic;font-size:12px;" type="text" name="q2b" size="8" placeholder="Switch Port" class="form-control" /></td>
                                  </tr>
                                  <tr>
                                   
                                    <td align="left"></td>
                                    
                                    <td>Switch 12</td>
                                    <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="q2c" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="q2d" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="q2e" class="form-control" /></td>
                                       <td>Upload Switch 12 <input type="file" name="switch_12"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="r1a" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="r1b" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="r1c" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input  style="font-style:italic;font-size:12px;" type="text" name="r1d" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      

                                  </tr>
                                  <tr>
                                    <td></td>
                                   <td>Switch 13</td>
                                   <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="r1e" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="r2a" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="r2b" class="form-control" /></td>
                                       <td>Upload Switch 13 <input type="file" name="switch_13"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="r2c" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="r2d" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="r2e" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input  style="font-style:italic;font-size:12px;" type="text" name="s1a" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      

                                  </tr>
                                  
                                  <tr>
                                    <td></td>
                                   <td>Switch 14</td>
                                   <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="s1b" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="s1c" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="s1d" class="form-control" /></td>
                                       <td>Upload Switch 14 <input type="file" name="switch_14"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="s1e" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="s2a" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="s2b" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input style="font-style:italic;font-size:12px;" type="text" name="s2c" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      

                                   
                                  </tr>
                                 
                                 <td rowspan="4" align="left"></td>
                                  
                                    <td align="left"></td>
                                    <td>Switch 15</td>
                                    <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="s2d" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="s2e" class="form-control" /></td>
                                     
                                       <td>SN <input type="text" size="10" name="t1a" class="form-control" /></td>
                                       <td>Upload Switch 15 <input type="file" name="switch_15"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="t1b" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="t1c" placeholder="Switch Port" class="form-control" /></td>
                                     
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="t1d" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input  style="font-style:italic;font-size:12px;" type="text" name="t1e" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      

                                    
                                    
                                  </tr>
                                  <tr>
                                   
                                    <td align="left"></td>
                                    
                                    <td>Switch 16</td>
                                    <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="t2a" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                     
                                      <td>Type <input type="text" size="10" name="t2b" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="t2c" class="form-control" /></td>
                                       <td>Upload Switch 16 <input type="file" name="switch_16"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="t2d" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="t2e" placeholder="Switch Port" class="form-control" /></td>
                                     
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="u1a" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input style="font-style:italic;font-size:12px;" type="text" name="u1b" size="8" placeholder="Switch Port" class="form-control" /></td>
                                    

                                  </tr>
                                  <tr>
                                    <td></td>
                                   <td>Switch 17</td>
                                   <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="u1c" size="15" placeholder="Cisco/Maipu/Other"  class="form-control"/></td>
                                      
                                      <td>Type <input type="text" size="10" name="u1d" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="u1e" class="form-control" /></td>
                                       <td>Upload Switch 17 <input type="file" name="switch_17"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="u2a" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="u2b" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="u2c" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input style="font-style:italic;font-size:12px;" type="text" name="u2d" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      

                                  </tr>
                                  
                                  <tr>
                                    <td></td>
                                   <td>Switch 18</td>
                                   <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="u2e" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                     
                                      <td>Type <input type="text" size="10" name="v1a" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="v1b" class="form-control" /></td>
                                       <td>Upload Switch 18 <input type="file" name="switch_18"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="v1c" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="v1d" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="v1e" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>ATM(9) <input  style="font-style:italic;font-size:12px;" type="text" name="v2a" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      

                                   
                                   <tr>
                                   <td></td>
                                   <td></td>
                                   <td>Switch 19</td>
                                   <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="v2b" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="v2c" class="form-control" /></td>
                                     
                                       <td>SN <input type="text" size="10" name="v2d" class="form-control" /></td>
                                       <td>Upload Switch 19 <input type="file" name="switch_19"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="v2e" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server (2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="w1a" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="w1b" placeholder="Switch Port" class="form-control" /></td>
                                     
                                      <td>ATM(9) <input  style="font-style:italic;font-size:12px;" type="text" name="w1c" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      

                                   <tr>
                                   <td></td>
                                   <td></td>
                                   <td>Switch 20</td>
                                   <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="w1d" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="w1e" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="w2a" class="form-control" /></td>
                                       <td>Upload Switch 20 <input type="file" name="switch_20"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="w2b" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server(2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="w2c" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="w2d" placeholder="Switch Port" class="form-control" /></td>
                                     
                                      <td>ATM(9) <input style="font-style:italic;font-size:12px;" type="text" name="w2e" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      
                                      
                                      <tr>
                                   <td></td>
                                   <td></td>
                                   <td>Switch 21</td>
                                   <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="b1a" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="b1b" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="b1c" class="form-control" /></td>
                                       <td>Upload Switch 21 <input type="file" name="switch_21"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="b1d" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server(2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="b1e" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="b1f" placeholder="Switch Port" class="form-control" /></td>
                                     
                                      <td>ATM(9) <input style="font-style:italic;font-size:12px;" type="text" name="b1g" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      
                                      <tr>
                                   <td></td>
                                   <td></td>
                                   <td>Switch 22</td>
                                   <td>Merk <input style="font-style:italic;font-size:12px;" type="text" name="c1a" size="15" placeholder="Cisco/Maipu/Other" class="form-control" /></td>
                                      
                                      <td>Type <input type="text" size="10" name="c1b" class="form-control" /></td>
                                      
                                       <td>SN <input type="text" size="10" name="c1c" class="form-control" /></td>
                                       <td>Upload Switch 22 <input type="file" name="switch_22"/></td>
                                      
                                       <td>Trunk (99) <input style="font-style:italic;font-size:12px;" type="text" name="c1d" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Server(2) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="c1e" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      <td>Client (3,5,6,7,8) <input style="font-style:italic;font-size:12px;" type="text" size="8" name="c1f" placeholder="Switch Port" class="form-control" /></td>
                                     
                                      <td>ATM(9) <input style="font-style:italic;font-size:12px;" type="text" name="c1g" size="8" placeholder="Switch Port" class="form-control" /></td>
                                      
                                      
                                  </tr>
                                  
                                  <td align="left"><strong>SERVER HARDWARE</strong></td>
                                  <td><input style="font-style:italic;font-size:12px;" type="text" name="x1a" size="12" placeholder="IP Server" class="form-control" /></td>
                                  <td><input style="font-style:italic;font-size:12px;" type="text" name="x1b" size="12" placeholder="Server Name" class="form-control" /></td>
                                  <td>Merk                                    <select name="x1c" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="HP">HP</option>
                                      <option value="LENOVO">LENOVO</option>
                                      <option value="ACER">ACER</option>
                                      <option value="OTHERS">OTHERS</option>
                                      
                                      
                                    </select></td>
                                      <td>Type <input type="text" size="10" name="x1d" class="form-control" /></td>
                                      <td>SN <input type="text" size="8" name="x1e" class="form-control" /></td>
                                    
                                    <td>Upload Server 1 <input type="file" name="server_1"/></td>
                                      
                                    
                                    <td>Restart Server <select name="x2a" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="OK">OK</option>
                                      <option value="NOT">NOT</option>
                                      
                                      
                                    </select></td>
                                      
                                      
<td>Status <select name="x2b" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="OK">OK</option>
                                      <option value="NOT">NOT</option>
                                      
                                      
                                    </select></td>
                                      
                                  
                                  <tr>
                                   
                                    <td align="left"></td>
                                  <td></td>
                                  <td></td>
                                  <td>Processor <input style="font-style:italic;font-size:12px;" type="text" name="x2c" size="15" placeholder="Intel Core i3 i5" class="form-control"  /></td>
                                   
                                    
                                    <td>HDD <select name="x2d" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="500 GB">500 GB</option>
                                      <option value="1 TB">1 TB</option>
                                   </select></td>
                                      
                                    
                                    <td>RAM <select name="x2e" class="form-control" >
                                      
                                      <option value=""></option>
                                      
                                      <option value="2 GB">2 GB</option>
                                      <option value="4 GB">4 GB</option>
                                      <option value="8 GB">8 GB</option>
                                      <option value="16 GB">16 GB</option>
                                   </select></td>
                                      
                                    
                                    <td>Free Space <input style="font-style:italic;font-size:12px;" type="text" name="y1a" size="8" placeholder="Drive C:" class="form-control" /></td>
                                      
                                      
 <td>Free Space <input style="font-style:italic;font-size:12px;" type="text" size="8" name="y1b" placeholder="Drive D:" class="form-control" /></td>
                                      
                                   
						<tr>
                        <td align="left"></td>
                                  <td></td>
                                  <td></td>
                                  <td>Symantec AV <input  style="font-style:italic;font-size:12px;" type="text" name="y1c" size="15" placeholder="Symantec Version" class="form-control"  /></td>
                                      
                                    
                                    <td>Update <input style="font-style:italic;font-size:12px;" type="text" size="12" name="y1d" placeholder="Virus Definition File" class="form-control" /></td>
                                      

                                    </td>
                                  
                                  <tr>
                                   
                                    <td align="left"></td>
                                  <td></td>
                                  <td></td>
                                  <td>Ping 192.168.12.1 <select name="y1e" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="REPLY">REPLY</option>
                                      <option value="RTO">RTO</option>
                                      <option value="DHU">DHU</option>
                                     
                                      
                                      
                                    </select></td>
                                    
                                    
                                    <td>Time <input style="font-style:italic;font-size:12px;" type="text" name="y2a" size="10" placeholder="Average Time" class="form-control" /> </td>
                                      
                                    
                                    <td>Ping 10.164.xxx.126 <select name="y2b" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="REPLY">REPLY</option>
                                      <option value="RTO">RTO</option>
                                      <option value="DHU">DHU</option>
                                     
                                      
                                      
                                    </select></td>
                                    
                                    
                                    
                        </tr>
                        <tr>
                        <td align="left"></td>
                          <td><input style="font-style:italic;font-size:12px;" type="text" name="y2c" size="12" placeholder="IP Other Server" class="form-control" /></td>
                          <td><input style="font-style:italic;font-size:12px;" type="text" name="y2d" size="15" placeholder="Other Server Name" class="form-control" /></td>
                                  <td>Merk <select name="y2e" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="HP">HP</option>
                                      <option value="LENOVO">LENOVO</option>
                                      <option value="ACER">ACER</option>
                                      <option value="OTHERS">OTHERS</option>
                                      
                                      
                                    </select></td>
                                      
                                    
                                    <td>Type <input type="text" size="10" name="z1a" class="form-control" /></td>
                                      
                                    
                                    <td>SN <input type="text" size="10" name="z1b" class="form-control" /></td>
                                     <td>Upload Server 2 <input type="file" name="server_2"/></td>
                                     
                                    
                                    <td>OS <input type="text" size="12" name="z1c" class="form-control" /></td>
                                      
                                      
<td>Aplikasi <input type="text" size="8" name="z1d" class="form-control" /></td>
                                      
                        </tr>
                        
                        <tr>
                        <td align="left"><strong>COMMUNICATION</strong></td>
                                  <td>Mainlink <select name="z1e" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="TELKOM">TELKOM</option>
                                      <option value="LA">LA</option>
                                      <option value="TM">TM</option>
                                      <option value="SCM">SCM</option>
                                       <option value="SDWAN-XL">SDWAN-XL</option>
                                       <option value="SDWAN-FIBERSTART">SDWAN-FIBERSTART</option>
                                      
                                      
                                    </select></td>
                                  
                                  <td>Backuplink <select name="z2a" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="TELKOM">TELKOM</option>
                                      <option value="LA">LA</option>
                                      <option value="TM">TM</option>
                                      <option value="SCM">SCM</option>
									   <option value="CSM">CSM</option>
									    <option value="PRIMACOM">PRIMACOM</option>
                                        <option value="SDWAN-XL">SDWAN-XL</option>
                                       <option value="SDWAN-FIBERSTART">SDWAN-FIBERSTART</option>
                                      
                                      
                                    </select></td>
                                      
                                    
                                    <td>UTP Modem to Router <select name="z2b" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="ADA">ADA</option>
                                      <option value="TIDAK">TIDAK</option>
                                     
                                     
                                      
                                      
                                    </select></td>
                                      
                                    
                                    <td>UTP Router to Switch <select name="a1a" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="ADA">ADA</option>
                                      <option value="TIDAK">TIDAK</option>
                                     
                                     
                                      
                                      
                                    </select></td>
                                     
                                    
                                   <td>UTP Switch to Switch <select name="a1b" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="ADA">ADA</option>
                                      <option value="TIDAK">TIDAK</option>
                                     
                                     
                                      
                                      
                                    </select></td>
                                      
                                      
									<td>UTP ATM to Switch <select name="a1c" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="ADA">ADA</option>
                                      <option value="TIDAK">TIDAK</option>
                                     
                                     
                                      
                                      
                                    </select></td>
                                    
                                    
                                   <td>10.xxx.xxx.254 <select name="a1d" class="form-control" >
                                      
                                      <option value=""></option>
                                      <option value="REPLY">REPLY</option>
                                      <option value="RTO">RTO</option>
                                      <option value="DHU">DHU</option>
                                     
                                      
                                      
                                    </select></td>
                                    
                                    
                                      
                        </tr>
                        



                                  
                                </table>
                                <br />
                            <button name="simpan" type="submit" class="btn btn-success" value="simpan"><i class="fa fa-fw fa-plus"></i> Simpan</button>
                            <button type="reset" name="reset" class="btn btn-danger"><i class="fas fa-sm fa-fw m-r-10 fa-redo-alt"></i>Reset</button>
						  </form>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
