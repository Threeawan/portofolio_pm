<style>
input{
	width:100%;
}
</style>



<?php
if(isset($_POST['simpan'])){
	$sql = "INSERT INTO pmclient(cabang, alamat, tanggal_kunjungan, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36, i37, i38, i39, i40, i41, i42, i43, i44, i45, i46, i47, i48, i49, i50, i51, i52, i53, i54, i55, i56, i57, i58, i59, i60, i61, i62, i63, i64, i65, i66, i67, i68, i69, i70, i71, i72, i73, i74, i75, i76, i77, i78, i79, i80, i81, i82, i83, i84, i85, i86, i87, i88, i89, i90, i91, i92, i93, i94, i95, i96, i97, i98, i99, i100, i101, i102, i103, i104, i105, i106, i107, i108, i109, i110, i111, i112, i113, i114, i115, i116, i117, i118, i119, i120, i121, i122, i123, i124, i125, i126, i127, i128, i129, i130, i131, i132, i133, i134, i135, i136, i137, i138, i139, i140, i141, i142, i143, i144, i145, i146, i147, i148, i149, i150, i151, i152, i153, i154, i155, i156, i157, i158, i159, i160, i161, i162, i163, i164, i165, i166, i167, i168, i169, i170, i171, i172, i173, i174, i175, i176, i177, i178, i179, i180, i181, i182, i183, i184, i185, i186, i187, i188, i189, i190, i191, i192, i193, i194, i195, i196, i197, i198, i199, i200, i201, i202, i203, i204, i205, i206, i207, i208, i209, i210, i211, i212, i213, i214, i215, i216, i217, i218, i219, i220, i221, i222, i223, i224, i225, i226, i227, i228, i229, i230, i231, i232, i233, i234, i235, i236, i237, i238, i239, i240, i241, i242, i243, i244, i245, i246, i247, i248, i249, i250, i251, i252, i253, i254, i255, i256, i257, i258, i259, i260, i261, i262, i263, i264, i265, i266, i267, i268, i269, i270, i271, i272, i273, i274, i275, i276, i277, i278, i279, i280, i281, i282, i283, i284, i285, i286, i287, i288, i289, i290, i291, i292, i293, i294, i295, i296, i297, i298, i299, i300, i301, i302, i303, i304, i305, i306, i307, i308, i309, i310, i311, i312, i313, i314, i315, i316, i317, i318, i319, i320, i321, i322, i323, i324, i325, i326, i327, i328, i329) VALUES ('".$_POST['cabang']."', '".$_POST['alamat']."', '".$_POST['tanggal_kunjungan']."', '".$_POST['i1']."', '".$_POST['i2']."', '".$_POST['i3']."', '".$_POST['i4']."', '".$_POST['i5']."', '".$_POST['i6']."', '".$_POST['i7']."', '".$_POST['i8']."', '".$_POST['i9']."', '".$_POST['i10']."', '".$_POST['i11']."', '".$_POST['i12']."', '".$_POST['i13']."', '".$_POST['i14']."', '".$_POST['i15']."', '".$_POST['i16']."', '".$_POST['i17']."', '".$_POST['i18']."', '".$_POST['i19']."', '".$_POST['i20']."', '".$_POST['i21']."', '".$_POST['i22']."', '".$_POST['i23']."', '".$_POST['i24']."', '".$_POST['i25']."', '".$_POST['i26']."', '".$_POST['i27']."', '".$_POST['i28']."', '".$_POST['i29']."', '".$_POST['i30']."', '".$_POST['i31']."', '".$_POST['i32']."', '".$_POST['i33']."', '".$_POST['i34']."', '".$_POST['i35']."', '".$_POST['i36']."', '".$_POST['i37']."', '".$_POST['i38']."', '".$_POST['i39']."', '".$_POST['i40']."', '".$_POST['i41']."', '".$_POST['i42']."', '".$_POST['i43']."', '".$_POST['i44']."', '".$_POST['i45']."', '".$_POST['i46']."', '".$_POST['i47']."', '".$_POST['i48']."', '".$_POST['i49']."', '".$_POST['i50']."', '".$_POST['i51']."', '".$_POST['i52']."', '".$_POST['i53']."', '".$_POST['i54']."', '".$_POST['i55']."', '".$_POST['i56']."', '".$_POST['i57']."', '".$_POST['i58']."', '".$_POST['i59']."', '".$_POST['i60']."', '".$_POST['i61']."', '".$_POST['i62']."', '".$_POST['i63']."', '".$_POST['i64']."', '".$_POST['i65']."', '".$_POST['i66']."', '".$_POST['i67']."', '".$_POST['i68']."', '".$_POST['i69']."', '".$_POST['i70']."', '".$_POST['i71']."', '".$_POST['i72']."', '".$_POST['i73']."', '".$_POST['i74']."', '".$_POST['i75']."', '".$_POST['i76']."', '".$_POST['i77']."', '".$_POST['i78']."', '".$_POST['i79']."', '".$_POST['i80']."', '".$_POST['i81']."', '".$_POST['i82']."', '".$_POST['i83']."', '".$_POST['i84']."', '".$_POST['i85']."', '".$_POST['i86']."', '".$_POST['i87']."', '".$_POST['i88']."', '".$_POST['i89']."', '".$_POST['i90']."', '".$_POST['i91']."', '".$_POST['i92']."', '".$_POST['i93']."', '".$_POST['i94']."', '".$_POST['i95']."', '".$_POST['i96']."', '".$_POST['i97']."', '".$_POST['i98']."', '".$_POST['i99']."', '".$_POST['i100']."', '".$_POST['i101']."', '".$_POST['i102']."', '".$_POST['i103']."', '".$_POST['i104']."', '".$_POST['i105']."', '".$_POST['i106']."', '".$_POST['i107']."', '".$_POST['i108']."', '".$_POST['i109']."', '".$_POST['i110']."', '".$_POST['i111']."', '".$_POST['i112']."', '".$_POST['i113']."', '".$_POST['i114']."', '".$_POST['i115']."', '".$_POST['i116']."', '".$_POST['i117']."', '".$_POST['i118']."', '".$_POST['i119']."', '".$_POST['i120']."', '".$_POST['i121']."', '".$_POST['i122']."', '".$_POST['i123']."', '".$_POST['i124']."', '".$_POST['i125']."', '".$_POST['i126']."', '".$_POST['i127']."', '".$_POST['i128']."', '".$_POST['i129']."', '".$_POST['i130']."', '".$_POST['i131']."', '".$_POST['i132']."', '".$_POST['i133']."', '".$_POST['i134']."', '".$_POST['i135']."', '".$_POST['i136']."', '".$_POST['i137']."', '".$_POST['i138']."', '".$_POST['i139']."', '".$_POST['i140']."', '".$_POST['i141']."', '".$_POST['i142']."', '".$_POST['i143']."', '".$_POST['i144']."', '".$_POST['i145']."', '".$_POST['i146']."', '".$_POST['i147']."', '".$_POST['i148']."', '".$_POST['i149']."', '".$_POST['i150']."', '".$_POST['i151']."', '".$_POST['i152']."', '".$_POST['i153']."', '".$_POST['i154']."', '".$_POST['i155']."', '".$_POST['i156']."', '".$_POST['i157']."', '".$_POST['i158']."', '".$_POST['i159']."', '".$_POST['i160']."', '".$_POST['i161']."', '".$_POST['i162']."', '".$_POST['i163']."', '".$_POST['i164']."', '".$_POST['i165']."', '".$_POST['i166']."', '".$_POST['i167']."', '".$_POST['i168']."', '".$_POST['i169']."', '".$_POST['i170']."', '".$_POST['i171']."', '".$_POST['i172']."', '".$_POST['i173']."', '".$_POST['i174']."', '".$_POST['i175']."', '".$_POST['i176']."', '".$_POST['i177']."', '".$_POST['i178']."', '".$_POST['i179']."', '".$_POST['i180']."', '".$_POST['i181']."', '".$_POST['i182']."', '".$_POST['i183']."', '".$_POST['i184']."', '".$_POST['i185']."', '".$_POST['i186']."', '".$_POST['i187']."', '".$_POST['i188']."', '".$_POST['i189']."', '".$_POST['i190']."', '".$_POST['i191']."', '".$_POST['i192']."', '".$_POST['i193']."', '".$_POST['i194']."', '".$_POST['i195']."', '".$_POST['i196']."', '".$_POST['i197']."', '".$_POST['i198']."', '".$_POST['i199']."', '".$_POST['i200']."', '".$_POST['i201']."', '".$_POST['i202']."', '".$_POST['i203']."', '".$_POST['i204']."', '".$_POST['i205']."', '".$_POST['i206']."', '".$_POST['i207']."', '".$_POST['i208']."', '".$_POST['i209']."', '".$_POST['i210']."', '".$_POST['i211']."', '".$_POST['i212']."', '".$_POST['i213']."', '".$_POST['i214']."', '".$_POST['i215']."', '".$_POST['i216']."', '".$_POST['i217']."', '".$_POST['i218']."', '".$_POST['i219']."', '".$_POST['i220']."', '".$_POST['i221']."', '".$_POST['i222']."', '".$_POST['i223']."', '".$_POST['i224']."', '".$_POST['i225']."', '".$_POST['i226']."', '".$_POST['i227']."', '".$_POST['i228']."', '".$_POST['i229']."', '".$_POST['i230']."', '".$_POST['i231']."', '".$_POST['i232']."', '".$_POST['i233']."', '".$_POST['i234']."', '".$_POST['i235']."', '".$_POST['i236']."', '".$_POST['i237']."', '".$_POST['i238']."', '".$_POST['i239']."', '".$_POST['i240']."', '".$_POST['i241']."', '".$_POST['i242']."', '".$_POST['i243']."', '".$_POST['i244']."', '".$_POST['i245']."', '".$_POST['i246']."', '".$_POST['i247']."', '".$_POST['i248']."', '".$_POST['i249']."', '".$_POST['i250']."', '".$_POST['i251']."', '".$_POST['i252']."', '".$_POST['i253']."', '".$_POST['i254']."', '".$_POST['i255']."', '".$_POST['i256']."', '".$_POST['i257']."', '".$_POST['i258']."', '".$_POST['i259']."', '".$_POST['i260']."', '".$_POST['i261']."', '".$_POST['i262']."', '".$_POST['i263']."', '".$_POST['i264']."', '".$_POST['i265']."', '".$_POST['i266']."', '".$_POST['i267']."', '".$_POST['i268']."', '".$_POST['i269']."', '".$_POST['i270']."', '".$_POST['i271']."', '".$_POST['i272']."', '".$_POST['i273']."', '".$_POST['i274']."', '".$_POST['i275']."', '".$_POST['i276']."', '".$_POST['i277']."', '".$_POST['i278']."', '".$_POST['i279']."', '".$_POST['i280']."', '".$_POST['i281']."', '".$_POST['i282']."', '".$_POST['i283']."', '".$_POST['i284']."', '".$_POST['i285']."', '".$_POST['i286']."', '".$_POST['i287']."', '".$_POST['i288']."', '".$_POST['i289']."', '".$_POST['i290']."', '".$_POST['i291']."', '".$_POST['i292']."', '".$_POST['i293']."', '".$_POST['i294']."', '".$_POST['i295']."', '".$_POST['i296']."', '".$_POST['i297']."', '".$_POST['i298']."', '".$_POST['i299']."', '".$_POST['i300']."', '".$_POST['i301']."', '".$_POST['i302']."', '".$_POST['i303']."', '".$_POST['i304']."', '".$_POST['i305']."', '".$_POST['i306']."', '".$_POST['i307']."', '".$_POST['i308']."', '".$_POST['i309']."', '".$_POST['i310']."', '".$_POST['i311']."', '".$_POST['i312']."', '".$_POST['i313']."', '".$_POST['i314']."', '".$_POST['i315']."', '".$_POST['i316']."', '".$_POST['i317']."', '".$_POST['i318']."', '".$_POST['i319']."', '".$_POST['i320']."', '".$_POST['i321']."', '".$_POST['i322']."', '".$_POST['i323']."', '".$_POST['i324']."', '".$_POST['i325']."', '".$_POST['i326']."', '".$_POST['i327']."', '".$_POST['i328']."', '".$_POST['i329']."')";
	$query = mysqli_query($koneksi, $sql);


/*create table
							  for($i=1;$i<=327;$i++){
								  echo ", i".$i." text";
							  }
							  */
							  /*create colom
							  for($i=1;$i<=327;$i++){
								  echo ", i".$i."";
							  }
							  */
							  /*create post
							  for($i=1;$i<=327;$i++){
								  echo ", '\".\$_POST['i".$i."'].\"'";
							  }	
							  */	
?>
<script>alert('Data Berhasil Disimpan')</script>
<script>window.location='penghubung.php?nav=pcclientdata'</script>
<?php
}
?>

<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <div align="center"><strong>CHECKLIST PC CLIENT</strong></div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST">
							  	<div class="form-group">
								  <label for="exampleInputName">Kantor Cabang/Kantor Kas</label>
								  <br>
								  <select name="cabang" id="cabang">
									<option value="--Pilih Cabang--">--Pilih Cabang--</option>
									<option value="--KC Bandung">--KC Bandung--</option>
									<option value="KC Bandung">KC Bandung</option>
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
									<option value="PP Imigrasi">PP Imigrasi</option>
									<option value="PP PLN Braga">PP PLN Braga</option>
									
									<option value="--KC Cirebon--">--KC Cirebon--</option>
									<option value="KC Cirebon">KC Cirebon</option>
									<option value="KCP Tegalwangi">KCP Tegalwangi</option>
									<option value="KCP Grage Mall">KCP Grage Mall</option>
									<option value="KCP Arjawinangun">KCP Arjawinangun</option>
									<option value="KCP Losari">KCP Losari</option>
									<option value="KCP Sumber">KCP Sumber</option>
									<option value="KK Pekalipan">KK Pekalipan</option>
									<option value="KK Harjamukti">KK Harjamukti</option>
									<option value="KK Sindanglaut">KK Sindanglaut</option>
									<option value="KK Tuparev">KK Tuparev</option>
									
									<option value="--KC Tasikmalaya--">--KC Tasikmalaya--</option>
									<option value="KC Tasikmalaya">KC Tasikmalaya</option>
									<option value="KCP Ciawi">KCP Ciawi</option>
									<option value="KCP Universitas Siliwangi">KCP Universitas Siliwangi</option>
									<option value="KCP Ciamis">KCP Ciamis</option>
									<option value="KCP Singaparna">KCP Singaparna</option>
									<option value="KCP Karan Nunggal">KCP Karang Nunggal</option>
									<option value="KCP Cikuburuk">KCP Cikurubuk</option>
									<option value="KK Sutisna Senjaya">KK Sutisna Senjaya</option>
									<option value="KK Kawali">KK Kawali</option>
									<option value="PP BPJS Tasikmalaya">PP BPJS Tasikmalaya</option>
									
									<option value="--KC Majalaya--">--KC Majalaya--</option>
									<option value="KC Majalaya">KC Majalaya</option>
									<option value="KCP Soreang">KCP Soreang</option>
									<option value="KCP Baleendah">KCP Baleendah</option>
									<option value="KCP Banjaran">KCP Banjaran</option>
									<option value="KCP Cicalengka">KCP Cicalengka</option>
									<option value="KCP Cinunuk">KCP Cinunuk</option>
									<option value="KK Taman Kopo Indah">KK Taman Kopo Indah</option>
									<option value="KK Ciwidey">KK Ciwidey</option>
									<option value="KK Kopo Katapang">KK Kopo Katapang</option>
									<option value="KK De Primaterra">KK De Primaterra</option>
									<option value="KK Ciparay">KK Ciparay</option>
									<option value="KK Cibaduyut">KK Cibaduyut</option>
									<option value="PP Kahagroup">PP Kahagroup</option>
									
									
									<option value="--KC Sukabumi--">--KC Sukabumi--</option>
									<option value="KC Sukabumi">KC Sukabumi</option>
									<option value="KCP Ciwangi">KCP Ciwangi</option>
									<option value="KCP Cibadak">KCP Cibadak</option>
									<option value="KCP Cicurug">KCP Cicurug</option>
									<option value="KCP Surade">KCP Surade</option>
									<option value="KCP Pelabuhan Ratu">KCP Pelabuhan Ratu</option>
									<option value="KK Pangleseran">KK Pangleseran</option>
									<option value="PP Jamsostek Sukabumi">PP Jamsostek Sukabumi</option>
									<option value="PP RS Hermina Sukabumi">PP RS Hermina Sukabumi</option>
								
									<option value="--KC Banjar--">--KC Banjar--</option>
									<option value="KC Banjar">KC Banjar</option>
									<option value="KCP Pangandaran">KCP Pangandaran</option>
									<option value="KK Banjar">KK Banjarsari</option>
									
									<option value="--KC Garut--">--KC Garut--</option>
									<option value="KC Garut">KC Garut</option>
									<option value="KCP Cikajang">KCP Cikajang</option>
									<option value="KCP Pameungpeuk">KCP Pameungpeuk</option>
									<option value="KK Kadungora">KK Kadungora</option>
									<option value="KK Limbangan">KK Limbangan</option>
									<option value="KK Ciledug">KK Ciledug</option>
								
									<option value="--KC Cianjur--">--KC Cianjur--</option>
									<option value="KC Cianjur">KC Cianjur</option>
									<option value="KCP Cipanas">KCP Cipanas</option>
									<option value="KCP Ciranjang">KCP Ciranjang</option>
									<option value="KCP Tanggeung">KCP Tanggeung</option>
									<option value="Hos Tjokroaminoto">KK Hos Tjokroaminoto</option>
									
									<option value="--KC Indramayu--">--KC Indramayu--</option>
									<option value="KC Indramayu">KC Indramayu</option>
									<option value="KCP Jatibarang">KCP Jatibarang</option>
									<option value="KCP Patrol">KCP Patrol</option>
									<option value="KCP Haurgeulis">KCP Haurgeulis</option>
									<option value="KCP Karangampel">KCP Karangampel</option>
									<option value="PP TPI Karangsong">PP TPI Karangsong</option>
									
									<option value="--KC Kuningan--">--KC Kuningan--</option>
									<option value="KC Kuningan">KC Kuningan</option>
									<option value="KCP Cikijing">KCP Cikijing</option>
									<option value="KCP Majalengka">KCP Majalengka</option>
									<option value="KCP Kadipaten">KCP Kadipaten</option>
									<option value="KK Cilimus">KK Cilimus</option>
									<option value="KK Jatiwangi">KK Jatiwangi</option>
									<option value="KK BIJB Kertajati">KK BIJB Kertajati</option>
									<option value="PP Pasar Baru Kuningan">PP Pasar Baru Kuningan</option>
									<option value="PP Universitas Kuningan">PP Universitas Kuningan</option>
									<option value="RSUD Majalengka">RSUD Majalengka</option>
									
									<option value="--KC Purwakarta--">--KC Purwakarta--</option>
									<option value="KC Purwakarta">KC Purwakarta</option>
									<option value="KCP Plered">KCP Plered</option>
									<option value="KK Kota Bukit Indah">KK Kota Bukit Indah</option>
									<option value="KK Jatiluhur">KK Jatiluhur</option>
									<option value="KK Cikopo">KK Cikopo</option>
									<option value="PP BPJS Purwakarta">PP BPJS Purwakarta</option>
									
									<option value="--KC Sumedang--">--KC Sumedang--</option>
									<option value="KC Sumedang">KC Sumedang</option>
									<option value="KK Tanjungsari">KK Tanjungsari</option>
									
									<option value="--KC Subang--">--KC Subang--</option>
									<option value="KC Subang">KC Subang</option>
									<option value="KCP Pamanukan">KCP Pamanukan</option>
									<option value="KCP Kalijati">KCP Kalijati</option>
									<option value="KK Cipeundeuy">KK Cipeundeuy</option>
									
									<option value="--KC PTB--">--KC PTB--</option>
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
									<option value="PP ITB Jatinangor">PP ITB Jatinangor</option>
									<option value="PP RS Hasansadikin">PP RS Hasansadikin</option>
									
									<option value="--KC JPK--">--KC JPK--</option>
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
									<option value="KCP Pasar Baru">KCP Pasar Baru</option>
									<option value="KCP Pajajaran">KCP Pajajaran</option>
									<option value="KCP Immanuel">KCP Immanuel</option>
									<option value="KK Dayeuhkolot">KK Dayeuhkolot</option>
									<option value="KK UNJANI">KK UNJANI</option>
									<option value="KK Sumbersari">KK Sumbersari</option>
									<option value="KK Batujajar">KK Batujajar</option>
									<option value="KK Ciwastra">KK Ciwastra</option>
									<option value="KK Pojok Cimahi">KK Pojok Cimahi</option>
									<option value="e-Branch Paskal">e-Branch Paskal</option>
									<option value="PP Jamsostek Cimahi">PP Jamsostek Cimahi</option>
								  </select>
								</div>
								<div class="form-group">
									<label for="exampleInputName">Alamat</label>
									<input type="" class="form-control" id="exampleInputName" name="alamat">
								</div>
                                
                                <div class="form-group">
									<label for="exampleInputPassword1">Tanggal Kunjungan</label>
									<input type="date" class="form-control" id="exampleInputName" placeholder="" name="tanggal_kunjungan">
								</div>
                                <?php
								$input = 1;
								?>
                                <table width="100%" cellspacing="0" cellpadding="0" border="1" style="border-collapse:">
                                  <tr>
                                    <td><div align="center"><strong>No</strong></div></td>
                                    <td><div align="center"><strong>Unit</strong></div></td>
                                    <td><div align="center"><strong>Item</strong></div></td>
                                    <td><div align="center"><strong>Merk</strong></div></td>
                                    <td><div align="center"><strong>Type</strong></div></td>
                                    <td><div align="center"><strong>S/N</strong></div></td>
                                    <td><div align="center"><strong>OS</strong></div></td>
                                    <td><div align="center"><strong>HDD</strong></div></td>
                                    <td><div align="center"><strong>RAM</strong></div></td>
                                    <td><div align="center"><strong>Status</strong></div></td>
                                    <td><div align="center"><strong>Keterangan</strong></div></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">1</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input++; ?>" /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                    <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">2</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input++; ?>" /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>" id="select">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">3</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input++; ?>" /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text"name="i<?php echo $input++; ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text"name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text"name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text"name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text"name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text"name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text"name="i<?php echo $input++; ?>"  /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"   /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">4</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input++; ?>"   /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"   /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"   /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"   /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text"  name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">5</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input++; ?>" />                                      
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">6</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input++; ?>" /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>"/></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">7</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input++; ?>" /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">8</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i233" /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">9</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input++; ?>" />                                   
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                    <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                    <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                     <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">10</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input++; ?>" /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><select name="i<?php echo $input++; ?>">
                                      <option value=""></option>
                                      <option value="Ok">Ok</option>
                                      <option value="Not Ok">Not Ok</option>
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  </tr>
                                </table>
                                <br />
                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
							 <button type="reset" name="reset" class="btn btn-danger">Reset</button>
						  </form>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
