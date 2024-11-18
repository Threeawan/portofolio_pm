<style>
input{
	width:100%;
}
</style>


<?php
if(isset($_POST['simpan'])){
	//echo $sql = "INSERT INTO inventorynetwork(cabang, alamat, tanggal_kunjungan, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36, i37, i38, i39, i40, i41, i42, i43, i44, i45, i46, i47, i48, i49, i50, i51, i52, i53, i54, i55, i56, i57, i58, i59, i60, i61, i62, i63, i64, i65, i66, i67, i68, i69, i70, i71, i72, i73, i74, i75, i76, i77, i78, i79, i80, i81, i82, i83, i84, i85, i86, i87, i88, i89, i90, i91, i92, i93, i94, i95, i96, i97, i98, i99, i100, i101, i102, i103, i104, i105, i106, i107, i108, i109, i110, i111, i112, i113, i114, i115, i116, i117, i118, i119, i120, i121, i122, i123, i124, i125, i126, i127, i128, i129, i130, i131, i132, i133, i134, i135, i136, i137, i138, i139, i140, i141, i142, i143, i144, i146, i147, i148, i149, i150, i151, i152, i153, i154, i155, i156, i157, i158, i159, i160, i161, i162, i163, i164, i165, i166, i167, i168, i169, i170, i171, i172, i173, i174, i175, i176, i177, i178, i179, i180, i180, i181, i182, i183, i184, i185, i186, i187, i188, i189, i190, i191, i192, i193, i194, i195, i196, i197, i198, i199, i200, i201, i202, i203, i204, i205, i206, i207, i208, i209, i210, i211, i212, i213, i214, i215, i216, i217, i218, i219, i220, i221, i222, i223, i224, i225, i226, i227, i228, i229, i230, i231, i232, i233, i234, i234, i235, i236, i237, i238, i240, i241, i242, i243, i244, i245, i246, i247, i248, i249, i250, i251, i252, i253, i254, i255, i256, i257, i258, i259, i260, i261, i262, i263, i264, i265, i266, i267, i268, i269, i270, i271, i272, i273, i274, i275, i276, i277, i278, i279, i280, i281, i282, i283, i284, i285, i286, i287, i288, i289, i290, i291, i292, i293, i294, i295, i296, i297, i298, i299, i300, i301, i302, i303, i304, i305, i306, i307, i308, i309, i310, i311, i312, i313, i314, i315, i316, i317, i318, i319, i320, i321, i322, i323, i324, i325, i326, i327, i328, i329, i330, i331, i332, i333, i334, i335, i336, i337, i338, i339, i340, i341, i342, i343, i344, i345, i346, i347, i348, i349, i350, i351, i352, i353, i354, i355, i356, i357, i358, i359, i360, i361, i362, i363, i364, i365, i366, i367, i368, i369, i370, i371, i372, i373, i374, i375, i376, i377, i378, i379, i380, i381, i382, i383, i384, i385, i386, i387, i388, i389, i390, i391, i392, i393, i394, i395, i396, i397, i398, i399, i400, i401, i402, i403, i404, i405, i406, i407, i408, i409, i410, i411, i412, i413, i414, i415, i416, i417, i418, i419, i420, i421, i422, i423, i424, i425, i426, i427, i428, i429, i430, i431, i432, i433, i434, i435, i436, i437, i438, i439, i440, i441, i442, i443, i444, i445, i446, i447, i448, i449, i450, i451, i452, i453, i454, i455, i456, i457, i458, i459, i460, i461, i462, i463, i464, i465, i466, i467, i468, i469, i470, i471, i472, i473, i474, i475, i476, i477, i478, i479, i480, i481, i482, i483, i484, i485, i486, i487, i488, i489, i490, i491, i492, i493, i494, i495, i496, i497, i498, i499, i500, i501, i502, i503, i504, i505, i506, i507, i508, i509, i510, i511, i512, i513) VALUES ('".$_POST['cabang']."', '".$_POST['alamat']."', '".$_POST['tanggal_kunjungan']."', '".$_POST['i1']."', '".$_POST['i2']."', '".$_POST['i3']."', '".$_POST['i4']."', '".$_POST['i5']."', '".$_POST['i6']."', '".$_POST['i7']."', '".$_POST['i8']."', '".$_POST['i9']."', '".$_POST['i10']."', '".$_POST['i11']."', '".$_POST['i12']."', '".$_POST['i13']."', '".$_POST['i14']."', '".$_POST['i15']."', '".$_POST['i16']."', '".$_POST['i17']."', '".$_POST['i18']."', '".$_POST['i19']."', '".$_POST['i20']."', '".$_POST['i21']."', '".$_POST['i22']."', '".$_POST['i23']."', '".$_POST['i24']."', '".$_POST['i25']."', '".$_POST['i26']."', '".$_POST['i27']."', '".$_POST['i28']."', '".$_POST['i29']."', '".$_POST['i30']."', '".$_POST['i31']."', '".$_POST['i32']."', '".$_POST['i33']."', '".$_POST['i34']."', '".$_POST['i35']."', '".$_POST['i36']."', '".$_POST['i37']."', '".$_POST['i38']."', '".$_POST['i39']."', '".$_POST['i40']."', '".$_POST['i41']."', '".$_POST['i42']."', '".$_POST['i43']."', '".$_POST['i44']."', '".$_POST['i45']."', '".$_POST['i46']."', '".$_POST['i47']."', '".$_POST['i48']."', '".$_POST['i49']."', '".$_POST['i50']."', '".$_POST['i51']."', '".$_POST['i52']."', '".$_POST['i53']."', '".$_POST['i54']."', '".$_POST['i55']."', '".$_POST['i56']."', '".$_POST['i57']."', '".$_POST['i58']."', '".$_POST['i59']."', '".$_POST['i60']."', '".$_POST['i61']."', '".$_POST['i62']."', '".$_POST['i63']."', '".$_POST['i64']."', '".$_POST['i65']."', '".$_POST['i66']."', '".$_POST['i67']."', '".$_POST['i68']."', '".$_POST['i69']."', '".$_POST['i70']."', '".$_POST['i71']."', '".$_POST['i72']."', '".$_POST['i73']."', '".$_POST['i74']."', '".$_POST['i75']."', '".$_POST['i76']."', '".$_POST['i77']."', '".$_POST['i78']."', '".$_POST['i79']."', '".$_POST['i80']."', '".$_POST['i81']."', '".$_POST['i82']."', '".$_POST['i83']."', '".$_POST['i84']."', '".$_POST['i85']."', '".$_POST['i86']."', '".$_POST['i87']."', '".$_POST['i88']."', '".$_POST['i89']."', '".$_POST['i90']."', '".$_POST['i91']."', '".$_POST['i92']."', '".$_POST['i93']."', '".$_POST['i94']."', '".$_POST['i95']."', '".$_POST['i96']."', '".$_POST['i97']."', '".$_POST['i98']."', '".$_POST['i99']."', '".$_POST['i100']."', '".$_POST['i101']."', '".$_POST['i102']."', '".$_POST['i103']."', '".$_POST['i104']."', '".$_POST['i105']."', '".$_POST['i106']."', '".$_POST['i107']."', '".$_POST['i108']."', '".$_POST['i109']."', '".$_POST['i110']."', '".$_POST['i111']."', '".$_POST['i112']."', '".$_POST['i113']."', '".$_POST['i114']."', '".$_POST['i115']."', '".$_POST['i116']."', '".$_POST['i117']."', '".$_POST['i118']."', '".$_POST['i119']."', '".$_POST['i120']."', '".$_POST['i121']."', '".$_POST['i122']."', '".$_POST['i123']."', '".$_POST['i124']."', '".$_POST['i125']."', '".$_POST['i126']."', '".$_POST['i127']."', '".$_POST['i128']."', '".$_POST['i129']."', '".$_POST['i130']."', '".$_POST['i131']."', '".$_POST['i132']."', '".$_POST['i133']."', '".$_POST['i134']."', '".$_POST['i135']."', '".$_POST['i136']."', '".$_POST['i137']."', '".$_POST['i138']."', '".$_POST['i139']."', '".$_POST['i140']."', '".$_POST['i141']."', '".$_POST['i142']."', '".$_POST['i143']."', '".$_POST['i144']."', '".$_POST['i145']."', '".$_POST['i146']."', '".$_POST['i147']."', '".$_POST['i148']."', '".$_POST['i149']."', '".$_POST['i150']."', '".$_POST['i151']."', '".$_POST['i152']."', '".$_POST['i153']."', '".$_POST['i154']."', '".$_POST['i155']."', '".$_POST['i156']."', '".$_POST['i157']."', '".$_POST['i158']."', '".$_POST['i159']."', '".$_POST['i160']."', '".$_POST['i161']."', '".$_POST['i162']."', '".$_POST['i163']."', '".$_POST['i164']."', '".$_POST['i165']."', '".$_POST['i166']."', '".$_POST['i167']."', '".$_POST['i168']."', '".$_POST['i169']."', '".$_POST['i170']."', '".$_POST['i171']."', '".$_POST['i172']."', '".$_POST['i173']."', '".$_POST['i174']."', '".$_POST['i175']."', '".$_POST['i176']."', '".$_POST['i177']."', '".$_POST['i178']."', '".$_POST['i179']."', '".$_POST['i180']."', '".$_POST['i181']."', '".$_POST['i182']."', '".$_POST['i183']."', '".$_POST['i184']."', '".$_POST['i185']."', '".$_POST['i186']."', '".$_POST['i187']."', '".$_POST['i188']."', '".$_POST['i189']."', '".$_POST['i190']."', '".$_POST['i191']."', '".$_POST['i192']."', '".$_POST['i193']."', '".$_POST['i194']."', '".$_POST['i195']."', '".$_POST['i196']."', '".$_POST['i197']."', '".$_POST['i198']."', '".$_POST['i199']."', '".$_POST['i200']."', '".$_POST['i201']."', '".$_POST['i202']."', '".$_POST['i203']."', '".$_POST['i204']."', '".$_POST['i205']."', '".$_POST['i206']."', '".$_POST['i207']."', '".$_POST['i208']."', '".$_POST['i209']."', '".$_POST['i210']."', '".$_POST['i211']."', '".$_POST['i212']."', '".$_POST['i213']."', '".$_POST['i214']."', '".$_POST['i215']."', '".$_POST['i216']."', '".$_POST['i217']."', '".$_POST['i218']."', '".$_POST['i219']."', '".$_POST['i220']."', '".$_POST['i221']."', '".$_POST['i222']."', '".$_POST['i223']."', '".$_POST['i224']."', '".$_POST['i225']."', '".$_POST['i226']."', '".$_POST['i227']."', '".$_POST['i228']."', '".$_POST['i229']."', '".$_POST['i230']."', '".$_POST['i231']."', '".$_POST['i232']."', '".$_POST['i233']."', '".$_POST['i234']."', '".$_POST['i235']."', '".$_POST['i236']."', '".$_POST['i237']."', '".$_POST['i238']."', '".$_POST['i239']."', '".$_POST['i240']."', '".$_POST['i241']."', '".$_POST['i242']."', '".$_POST['i243']."', '".$_POST['i244']."', '".$_POST['i245']."', '".$_POST['i246']."', '".$_POST['i247']."', '".$_POST['i248']."', '".$_POST['i249']."', '".$_POST['i250']."', '".$_POST['i251']."', '".$_POST['i252']."', '".$_POST['i253']."', '".$_POST['i254']."', '".$_POST['i255']."', '".$_POST['i256']."', '".$_POST['i257']."', '".$_POST['i258']."', '".$_POST['i259']."', '".$_POST['i260']."', '".$_POST['i261']."', '".$_POST['i262']."', '".$_POST['i263']."', '".$_POST['i264']."', '".$_POST['i265']."', '".$_POST['i266']."', '".$_POST['i267']."', '".$_POST['i268']."', '".$_POST['i269']."', '".$_POST['i270']."', '".$_POST['i271']."', '".$_POST['i272']."', '".$_POST['i273']."', '".$_POST['i274']."', '".$_POST['i275']."', '".$_POST['i276']."', '".$_POST['i277']."', '".$_POST['i278']."', '".$_POST['i279']."', '".$_POST['i280']."', '".$_POST['i281']."', '".$_POST['i282']."', '".$_POST['i283']."', '".$_POST['i284']."', '".$_POST['i285']."', '".$_POST['i286']."', '".$_POST['i287']."', '".$_POST['i288']."', '".$_POST['i289']."', '".$_POST['i290']."', '".$_POST['i291']."', '".$_POST['i292']."', '".$_POST['i293']."', '".$_POST['i294']."', '".$_POST['i295']."', '".$_POST['i296']."', '".$_POST['i297']."', '".$_POST['i298']."', '".$_POST['i299']."', '".$_POST['i300']."', '".$_POST['i301']."', '".$_POST['i302']."', '".$_POST['i303']."', '".$_POST['i303']."', '".$_POST['i304']."', '".$_POST['i305']."', '".$_POST['i306']."', '".$_POST['i307']."', '".$_POST['i308']."', '".$_POST['i309']."', '".$_POST['i310']."', '".$_POST['i311']."', '".$_POST['i312']."', '".$_POST['i313']."', '".$_POST['i314']."', '".$_POST['i315']."', '".$_POST['i316']."', '".$_POST['i317']."', '".$_POST['i318']."', '".$_POST['i319']."', '".$_POST['i320']."', '".$_POST['i321']."', '".$_POST['i322']."', '".$_POST['i323']."', '".$_POST['i324']."', '".$_POST['i325']."', '".$_POST['i326']."', '".$_POST['i327']."', '".$_POST['i328']."', '".$_POST['i329']."', '".$_POST['i330']."', '".$_POST['i331']."', '".$_POST['i332']."', '".$_POST['i333']."', '".$_POST['i334']."', '".$_POST['i335']."', '".$_POST['i336']."', '".$_POST['i337']."', '".$_POST['i338']."', '".$_POST['i339']."', '".$_POST['i340']."', '".$_POST['i341']."', '".$_POST['i342']."', '".$_POST['i343']."', '".$_POST['i344']."', '".$_POST['i345']."', '".$_POST['i346']."', '".$_POST['i347']."', '".$_POST['i348']."', '".$_POST['i349']."', '".$_POST['i350']."', '".$_POST['i351']."', '".$_POST['i352']."', '".$_POST['i353']."', '".$_POST['i354']."', '".$_POST['i355']."', '".$_POST['i356']."', '".$_POST['i357']."', '".$_POST['i358']."', '".$_POST['i359']."', '".$_POST['i360']."', '".$_POST['i361']."', '".$_POST['i362']."', '".$_POST['i363']."', '".$_POST['i364']."', '".$_POST['i365']."', '".$_POST['i366']."', '".$_POST['i367']."', '".$_POST['i368']."', '".$_POST['i369']."', '".$_POST['i370']."', '".$_POST['i371']."', '".$_POST['i372']."', '".$_POST['i373']."', '".$_POST['i374']."', '".$_POST['i375']."', '".$_POST['i376']."', '".$_POST['i377']."', '".$_POST['i378']."', '".$_POST['i379']."', '".$_POST['i380']."', '".$_POST['i381']."', '".$_POST['i382']."', '".$_POST['i383']."', '".$_POST['i384']."', '".$_POST['i385']."', '".$_POST['i386']."', '".$_POST['i387']."', '".$_POST['i388']."', '".$_POST['i389']."', '".$_POST['i390']."', '".$_POST['i391']."', '".$_POST['i392']."', '".$_POST['i393']."', '".$_POST['i394']."', '".$_POST['i395']."', '".$_POST['i396']."', '".$_POST['i397']."', '".$_POST['i398']."', '".$_POST['i399']."', '".$_POST['i400']."', '".$_POST['i401']."', '".$_POST['i402']."', '".$_POST['i403']."', '".$_POST['i404']."', '".$_POST['i405']."', '".$_POST['i406']."', '".$_POST['i407']."', '".$_POST['i408']."', '".$_POST['i409']."', '".$_POST['i410']."', '".$_POST['i411']."', '".$_POST['i412']."', '".$_POST['i413']."', '".$_POST['i414']."', '".$_POST['i415']."', '".$_POST['i416']."', '".$_POST['i417']."', '".$_POST['i418']."', '".$_POST['i419']."', '".$_POST['i420']."', '".$_POST['i421']."', '".$_POST['i422']."', '".$_POST['i423']."', '".$_POST['i424']."', '".$_POST['i425']."', '".$_POST['i426']."', '".$_POST['i427']."', '".$_POST['i428']."', '".$_POST['i429']."', '".$_POST['i430']."', '".$_POST['i431']."', '".$_POST['i432']."', '".$_POST['i433']."', '".$_POST['i434']."', '".$_POST['i435']."', '".$_POST['i436']."', '".$_POST['i437']."', '".$_POST['i438']."', '".$_POST['i439']."', '".$_POST['i440']."', '".$_POST['i441']."', '".$_POST['i442']."', '".$_POST['i443']."', '".$_POST['i444']."', '".$_POST['i445']."', '".$_POST['i446']."', '".$_POST['i447']."', '".$_POST['i448']."', '".$_POST['i449']."', '".$_POST['i450']."', '".$_POST['i451']."', '".$_POST['i452']."', '".$_POST['i453']."', '".$_POST['i454']."', '".$_POST['i455']."', '".$_POST['i456']."', '".$_POST['i457']."', '".$_POST['i458']."', '".$_POST['i459']."', '".$_POST['i460']."', '".$_POST['i461']."', '".$_POST['i462']."', '".$_POST['i463']."', '".$_POST['i464']."', '".$_POST['i465']."', '".$_POST['i466']."', '".$_POST['i467']."', '".$_POST['i468']."', '".$_POST['i469']."', '".$_POST['i470']."', '".$_POST['i471']."', '".$_POST['i472']."', '".$_POST['i473']."', '".$_POST['i474']."', '".$_POST['i475']."', '".$_POST['i476']."', '".$_POST['i477']."', '".$_POST['i478']."', '".$_POST['i479']."', '".$_POST['i480']."', '".$_POST['i481']."', '".$_POST['i482']."', '".$_POST['i483']."', '".$_POST['i484']."', '".$_POST['i485']."', '".$_POST['i486']."', '".$_POST['i487']."', '".$_POST['i488']."', '".$_POST['i489']."', '".$_POST['i490']."', '".$_POST['i491']."', '".$_POST['i492']."', '".$_POST['i493']."', '".$_POST['i494']."', '".$_POST['i495']."', '".$_POST['i496']."', '".$_POST['i497']."', '".$_POST['i498']."', '".$_POST['i499']."', '".$_POST['i500']."', '".$_POST['i501']."', '".$_POST['i502']."', '".$_POST['i503']."', '".$_POST['i504']."', '".$_POST['i505']."', '".$_POST['i506']."', '".$_POST['i507']."', '".$_POST['i508']."', '".$_POST['i509']."', '".$_POST['i510']."', '".$_POST['i511']."', '".$_POST['i512']."', '".$_POST['i513']."')";
	
	$kolom ="";
	for($i=1;$i<=513;$i++){
		$kolom = $kolom.', i'.$i;
	}
	
	$post ="";
	for($i=1;$i<=513;$i++){
		$post = $post.", '".$_POST['i'.$i]."'";
	}
	
	
	$sql = "INSERT INTO inventorynetwork(cabang, alamat, tanggal_kunjungan".$kolom.") VALUES ('".$_POST['cabang']."', '".$_POST['alamat']."', '".$_POST['tanggal_kunjungan']."'".$post.")";
	
	$query = mysqli_query($koneksi, $sql);

?>
<script>alert('Data Berhasil Disimpan')</script>
<script>window.location='?nav=inventorynetworkdata'</script>
<?php
}
?>



<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <div align="center"><strong>CHECKLIST INVENTORY NETWORK</strong></div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST">
							  <div class="form-group">
									<label for="exampleInputName">Kantor Cabang/Kantor Kas</label>
									<br>
									<select name="cabang" id="cabang" onchange="fcabangalamat();">
									
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
									<label for="exampleInputPassword1">Alamat</label>
									<input type="" class="form-control" id="exampleInputName" name="alamat">
									
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
									
								
								</div>
                                
                                <div class="form-group">
									<label for="exampleInputPassword1">Tanggal Kunjungan</label>
									<input type="date" class="form-control" id="exampleInputName" placeholder="" name="tanggal_kunjungan">
								</div>
                                
                                <strong>Router</strong><br />
                                
                            <table width="100%" cellspacing="0" cellpadding="0" border="1" class="table table-responsive">
                                  
                              <tr>
                                    <td rowspan="2"><div align="center"><strong>Merk</strong></div></td>
                                    <td colspan="2" rowspan="2"><div align="center"><strong>Type</strong></div></td>
                                    <td colspan="2" rowspan="2"><div align="center"><strong>SN</strong></div></td>
                                    <td colspan="8"><div align="center"><strong>Modules    Port (Detail)</strong></div></td>
                                    <td colspan="2" rowspan="2"><div align="center"><strong>Garansi (Label)</strong></div></td>
                                    <td colspan="2" rowspan="2"><div align="center"><strong>Keterangan</strong></div></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2"><div align="center"><strong>Serial </strong></div></td>
                                    <td colspan="2"><div align="center"><strong>Voice (FXO)</strong></div></td>
                                    <td colspan="2"><div align="center"><strong>Voice    FXS)</strong></div></td>
                                    <td colspan="2"><div align="center"><strong>Fast Inthernet</strong></div></td>
                                  </tr>
                               <tr>
                                    <td><input type="text" name="i1" /></td>
                                    <td colspan="2"><input type="text" name="i2" /></td>
                                    <td colspan="2"><input type="text" name="i3" /></td>
                                  
                                   <td colspan="2"><select name="i4">
                                      <option value=""></option>
                                      <option value="Ada">Ada</option>
                                      <option value="Tidak Jumlah">Tidak Jumlah</option>
                                    </select></td>
                                    
                                    
                          
                                 <td colspan="2"> <select name="i5">
                                      <option value=""></option>
                                      <option value="Ada">Ada</option>
                                      <option value="Tidak Jumlah">Tidak Jumlah</option>
                                    </select></td>
                                    <td colspan="2"> <select name="i6">
                                      <option value=""></option>
                                      <option value="Ada">Ada</option>
                                      <option value="Tidak Jumlah">Tidak Jumlah</option>
                                    </select></td>
                                    <td colspan="2"> <select name="i7">
                                      <option value=""></option>
                                      <option value="Ada">Ada</option>
                                      <option value="Tidak Jumlah">Tidak Jumlah</option>
                                    </select></td>
                                    <td colspan="2"><input type="text" name="i8" /></td>
                                    <td colspan="2"><input type="text" name="i9" /></td>
                                  </tr>
                            </table>
                            <br />
                            <strong>Switches Summary</strong><br />
                            
                            
                            
                            <table width="100%" cellspacing="0" cellpadding="0" border="1">
                              <tr>
                                <td width="90"><div align="center"><strong>Switches No.</strong></div></td>
                                <td colspan="2"><div align="center"><strong>Merk</strong></div></td>
                                <td colspan="2"><div align="center"><strong>Type</strong></div></td>
                                <td colspan="2"><div align="center"><strong>SN</strong></div></td>
                                <td colspan="2"><div align="center"><strong>Garansi (Label)</strong></div></td>
                                <td colspan="8"><div align="center"><strong>Keterangan</strong></div></td>
                              </tr>
                              <tr>
                                <td><input type="text" name="i10"  /></td>
                                <td colspan="2"><input type="text" name="i11" /></td>
                                <td colspan="2"><input type="text" name="i12" /></td>
                                <td colspan="2"><input type="text" name="i13" /></td>
                                <td colspan="2"><input type="text" name="i14" /></td>
                                <td colspan="8"><input type="text" name="i15" /></td>
                              </tr>
                              <tr>
                                <td><input type="text" name="i16" /></td>
                                <td colspan="2"><input type="text" name="i17" /></td>
                                <td colspan="2"><input type="text" name="i18" /></td>
                                <td colspan="2"><input type="text" name="i19" /></td>
                                <td colspan="2"><input type="text" name="i20" /></td>
                                 <td colspan="2"><input type="text" name="i21" /></td>
                                
                              </tr>
                              <tr>
                                <td><input type="text" name="i22"  /></td>
                                <td colspan="2"><input type="text" name="i23"  /></td>
                                <td colspan="2"><input type="text" name="i24" /></td>
                                <td colspan="2"><input type="text" name="i25" /></td>
                                <td colspan="2"><input type="text" name="i26" /></td>
                                <td colspan="8"><input type="text" name="i27" /></td>
                              </tr>
                              <tr>
                                <td><input type="text" name="i28" /></td>
                                <td colspan="2"><input type="text" name="i29"  /></td>
                                <td colspan="2"><input type="text" name="i30"  /></td>
                                <td colspan="2"><input type="text" name="i31" /></td>
                                <td colspan="2"><input type="text" name="i32" /></td>
                                <td colspan="8"><input type="text" name="i33" /></td>
                              </tr>
                              <tr>
                                <td><input type="text" name="i34" /></td>
                                <td colspan="2"><input type="text" name="i35" /></td>
                                <td colspan="2"><input type="text" name="i36" /></td>
                                <td colspan="2"><input type="text" name="i37" /></td>
                                <td colspan="2"><input type="text" name="i38"  /></td>
                                <td colspan="8"><input type="text" name="i39"  /></td>
                              </tr>
                              <tr>
                                <td><input type="text" name="i40" /></td>
                                <td colspan="2"><input type="text" name="i41"  /></td>
                                <td colspan="2"><input type="text" name="i42" /></td>
                                <td colspan="2"><input type="text" name="i43" /></td>
                                <td colspan="2"><input type="text" name="i44" /></td>
                                <td colspan="2"><input type="text" name="i45"  /></td>
                              </tr>
                            </table>
                            <p><br />
                            <strong>Detail Spesifikasi Perangkat Keras</strong></p>
                            <p><strong>Swicthes..........No.1</strong></p>
                            <table width="100%" border="1" cellspacing="0" cellpadding="0">
                            
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 1</strong></div></td>
                                <td><div align="center"><strong>Port 3</strong></div></td>
                                <td><div align="center"><strong>Port 5</strong></div></td>
                                <td><div align="center"><strong>Port 7</strong></div></td>
                                <td><div align="center"><strong>Port 9</strong></div></td>
                                <td><div align="center"><strong>Port 11</strong></div></td>
                                <td><div align="center"><strong>Port 13</strong></div></td>
                                <td><div align="center"><strong>Port 15</strong></div></td>
                                <td><div align="center"><strong>Port 17</strong></div></td>
                                <td><div align="center"><strong>Port 19</strong></div></td>
                                <td><div align="center"><strong>Port 21</strong></div></td>
                                <td><div align="center"><strong>Port 23</strong></div></td>
                                <td><div align="center"><strong>Port 25</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><input type="text" name="i46"  /></td>
                                <td><input type="text" name="i47"  /></td>
                                <td><input type="text" name="i48" /></td>
                                <td><input type="text" name="i49" /></td>
                                <td><input type="text" name="i50" /></td>
                                <td><input type="text" name="i51" /></td>
                                <td><input type="text" name="i52" /></td>
                                <td><input type="text" name="i53"/></td>
                                <td><input type="text" name="i54"  /></td>
                                <td><input type="text" name="i55" /></td>
                                <td><input type="text" name="i56"  /></td>
                                <td><input type="text" name="i57"  /></td>
                                <td><input type="text" name="i58" /></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i59"  /></td>
                                <td><input type="text" name="i60"  /></td>
                                <td><input type="text" name="i61" /></td>
                                <td><input type="text" name="i62"  /></td>
                                <td><input type="text" name="i63"  /></td>
                                <td><input type="text" name="i64"  /></td>
                                <td><input type="text" name="i65"  /></td>
                                <td><input type="text" name="i66" /></td>
                                <td><input type="text" name="i67"  /></td>
                                <td><input type="text" name="i68"  /></td>
                                <td><input type="text" name="i69" /></td>
                                <td><input type="text" name="i70" /></td>
                                <td><input type="text" name="i71" /></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i72"  /></td>
                                <td><input type="text" name="i73"  /></td>
                                <td><input type="text" name="i74"  /></td>
                                <td><input type="text" name="i75" /></td>
                                <td><input type="text" name="i76"  /></td>
                                <td><input type="text" name="i77"  /></td>
                                <td><input type="text" name="i78"  /></td>
                                <td><input type="text" name="i79"  /></td>
                                <td><input type="text" name="i80"  /></td>
                                <td><input type="text" name="i81"  /></td>
                                <td><input type="text" name="i82" /></td>
                                <td><input type="text" name="i83" /></td>
                                <td><input type="text" name="i84" /></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 2</strong></div></td>
                                <td><div align="center"><strong>Port 4</strong></div></td>
                                <td><div align="center"><strong>Port 6</strong></div></td>
                                <td><div align="center"><strong>Port 8</strong></div></td>
                                <td><div align="center"><strong>Port 10</strong></div></td>
                                <td><div align="center"><strong>Port 12</strong></div></td>
                                <td><div align="center"><strong>Port 14</strong></div></td>
                                <td><div align="center"><strong>Port 16</strong></div></td>
                                <td><div align="center"><strong>Port 18</strong></div></td>
                                 <td><div align="center"><strong>Port 20</strong></div></td>
                                <td><div align="center"><strong>Port 22</strong></div></td>
                                <td><div align="center"><strong>Port 24</strong></div></td>
                                <td><div align="center"><strong>Port 26</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><input type="text" name="i85"  /></td>
                                <td><input type="text" name="i86"  /></td>
                                <td><input type="text" name="i87"  /></td>
                                <td><input type="text" name="i88" /></td>
                                <td><input type="text" name="i89"  /></td>
                                <td><input type="text" name="i90"  /></td>
                                <td><input type="text" name="i91"  /></td>
                                <td><input type="text" name="i92"  /></td>
                                <td><input type="text" name="i93" /></td>
                                <td><input type="text" name="i94" /></td>
                                <td><input type="text" name="i95"  /></td>
                                <td><input type="text" name="i96"  /></td>
                                <td><input type="text" name="i97" /></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i98"  /></td>
                                <td><input type="text" name="i99"  /></td>
                                <td><input type="text" name="i100"  /></td>
                                <td><input type="text" name="i101"  /></td>
                                <td><input type="text" name="i102" /></td>
                                <td><input type="text" name="i103"  /></td>
                                <td><input type="text" name="i104"  /></td>
                                <td><input type="text" name="i105" /></td>
                                <td><input type="text" name="i106" /></td>
                                <td><input type="text" name="i107" /></td>
                                <td><input type="text" name="i108" /></td>
                                <td><input type="text" name="i109"  /></td>
                                <td><input type="text" name="i110" /></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i111"  /></td>
                                <td><input type="text" name="i112"  /></td>
                                <td><input type="text" name="i113" /></td>
                                <td><input type="text" name="i114"  /></td>
                                <td><input type="text" name="i115" /></td>
                                <td><input type="text" name="i116"  /></td>
                                <td><input type="text" name="i117"  /></td>
                                <td><input type="text" name="i118" /></td>
                                <td><input type="text" name="i119"  /></td>
                                <td><input type="text" name="i120" /></td>
                                <td><input type="text" name="i121" /></td>
                                <td><input type="text" name="i122"  /></td>
                                <td><input type="text" name="i123" /></td>
                              </tr>
                            </table>
                            <br />
                            <p><strong>Switches........No.2</strong></p>
                            <table width="100%" border="1" cellspacing="0" cellpadding="0">
                             
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 1</strong></div></td>
                                <td><div align="center"><strong>Port 3</strong></div></td>
                                <td><div align="center"><strong>Port 5</strong></div></td>
                                <td><div align="center"><strong>Port 7</strong></div></td>
                                <td><div align="center"><strong>Port 9</strong></div></td>
                                <td><div align="center"><strong>Port 11</strong></div></td>
                                <td><div align="center"><strong>Port 13</strong></div></td>
                                <td><div align="center"><strong>Port 15</strong></div></td>
                                <td><div align="center"><strong>Port 17</strong></div></td>
                                <td><div align="center"><strong>Port 19</strong></div></td>
                                <td><div align="center"><strong>Port 21</strong></div></td>
                                <td><div align="center"><strong>Port 23</strong></div></td>
                                <td><div align="center"><strong>Port 25</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><input type="text" name="i124"  /></td>
                                <td><input type="text" name="i125" /></td>
                                <td><input type="text" name="i126"  /></td>
                                <td><input type="text" name="i127"  /></td>
                                <td><input type="text" name="i128" /></td>
                                <td><input type="text" name="i129"  /></td>
                                <td><input type="text" name="i130" /></td>
                                <td><input type="text" name="i131"  /></td>
                                <td><input type="text" name="i132" /></td>
                                <td><input type="text" name="i133"   /></td>
                                <td><input type="text" name="i134" /></td>
                                <td><input type="text" name="i135" /></td>
                                <td><input type="text" name="i136"/></td>
                                <td></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i137" /></td>
                                <td><input type="text" name="i138" /></td>
                                <td><input type="text" name="i139" /></td>
                                <td><input type="text" name="i140"  /></td>
                                <td><input type="text" name="i141" /></td>
                                <td><input type="text" name="i142" /></td>
                                <td><input type="text" name="i143" /></td>
                                <td><input type="text" name="i144" /></td>
                                <td><input type="text" name="i145" /></td>
                                <td><input type="text" name="i146" /></td>
                                <td><input type="text" name="i147"  /></td>
                                <td><input type="text" name="i148" /></td>
                                <td><input type="text" name="i149" /></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i150"  /></td>
                                <td><input type="text" name="i151" /></td>
                                <td><input type="text" name="i152" /></td>
                                <td><input type="text" name="i153" /></td>
                                <td><input type="text" name="i154" /></td>
                                <td><input type="text" name="i155" /></td>
                                <td><input type="text" name="i156" /></td>
                                <td><input type="text" name="i157" /></td>
                                <td><input type="text" name="i158" /></td>
                                <td><input type="text" name="i159" /></td>
                                <td><input type="text" name="i160"  /></td>
                                <td><input type="text" name="i161" /></td>
                                <td><input type="text" name="i162"/></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 2</strong></div></td>
                                <td><div align="center"><strong>Port 4</strong></div></td>
                                <td><div align="center"><strong>Port 6</strong></div></td>
                                <td><div align="center"><strong>Port 8</strong></div></td>
                                <td><div align="center"><strong>Port 10</strong></div></td>
                                <td><div align="center"><strong>Port 12</strong></div></td>
                                <td><div align="center"><strong>Port 14</strong></div></td>
                                <td><div align="center"><strong>Port 16</strong></div></td>
                                <td><div align="center"><strong>Port 18</strong></div></td>
                                <td><div align="center"><strong>Port 20</strong></div></td>
                                <td><div align="center"><strong>Port 22</strong></div></td>
                                <td><div align="center"><strong>Port 24</strong></div></td>
                                <td><div align="center"><strong>Port 26</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><input type="text" name="i163"  /></td>
                                <td><input type="text" name="i164" /></td>
                                <td><input type="text" name="i165"/></td>
                                <td><input type="text" name="i166"  /></td>
                                <td><input type="text" name="i167" /></td>
                                <td><input type="text" name="i168" /></td>
                                <td><input type="text" name="i169"  /></td>
                                <td><input type="text" name="i170"  /></td>
                                <td><input type="text" name="i171"/></td>
                                <td><input type="text" name="i172" /></td>
                                <td><input type="text" name="i173" /></td>
                                <td><input type="text" name="i174" /></td>
                                <td><input type="text" name="i175"  /></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i176"  /></td>
                                <td><input type="text" name="i177" /></td>
                                <td><input type="text" name="i178" /></td>
                                <td><input type="text" name="i179" ></td>
                                <td><input type="text" name="i180"  /></td>
                                <td><input type="text" name="i181"  /></td>
                                <td><input type="text" name="i182"   /></td>
                                <td><input type="text" name="i183"  /></td>
                                <td><input type="text" name="i184" /></td>
                                <td><input type="text" name="i185" /></td>
                                <td><input type="text" name="i186" /></td>
                                <td><input type="text" name="i187" /></td>
                                <td><input type="text" name="i188" /></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i189" /></td>
                                <td><input type="text" name="i190" /></td>
                                <td><input type="text" name="i191" /></td>
                                <td><input type="text" name="i192" /></td>
                                <td><input type="text" name="i193" /></td>
                                <td><input type="text" name="i194" /></td>
                                <td><input type="text" name="i195" /></td>
                                <td><input type="text" name="i196" /></td>
                                <td><input type="text" name="i197"/></td>
                                <td><input type="text" name="i198"/></td>
                                <td><input type="text" name="i199" /></td>
                                <td><input type="text" name="i200"/></td>
                                <td><input type="text" name="i201" /></td>
                              </tr>
                            </table>
                            <br />
                            <p><strong>Switches........No.3</strong></p>
                            <table width="100%" border="1" cellspacing="0" cellpadding="0">
                             
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 1</strong></div></td>
                                <td><div align="center"><strong>Port 3</strong></div></td>
                                <td><div align="center"><strong>Port 5</strong></div></td>
                                <td><div align="center"><strong>Port 7</strong></div></td>
                                <td><div align="center"><strong>Port 9</strong></div></td>
                                <td><div align="center"><strong>Port 11</strong></div></td>
                                <td><div align="center"><strong>Port 13</strong></div></td>
                                <td><div align="center"><strong>Port 15</strong></div></td>
                                <td><div align="center"><strong>Port 17</strong></div></td>
                                <td><div align="center"><strong>Port 19</strong></div></td>
                                <td><div align="center"><strong>Port 21</strong></div></td>
                                <td><div align="center"><strong>Port 23</strong></div></td>
                                <td><div align="center"><strong>Port 25</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><input type="text" name="i202"/></td>
                                <td><input type="text" name="i203" /></td>
                                <td><input type="text" name="i204"/></td>
                                <td><input type="text" name="i205" /></td>
                                <td><input type="text" name="i206" /></td>
                                <td><input type="text" name="i207"/></td>
                                <td><input type="text" name="i208" /></td>
                                <td><input type="text" name="i209" /></td>
                                <td><input type="text" name="i210"  /></td>
                                <td><input type="text" name="i211"  /></td>
                                <td><input type="text" name="i212"  /></td>
                                <td><input type="text" name="i213" /></td>
                                <td><input type="text" name="i214" /></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i215" /></td>
                                <td><input type="text" name="i216" /></td>
                                <td><input type="text" name="i217"/></td>
                                <td><input type="text" name="i218" /></td>
                                <td><input type="text" name="i219" /></td>
                                <td><input type="text" name="i220" /></td>
                                <td><input type="text" name="i221" /></td>
                                <td><input type="text" name="i222" /></td>
                                <td><input type="text" name="i223" /></td>
                                <td><input type="text" name="i224" /></td>
                                <td><input type="text" name="i225" /></td>
                                <td><input type="text" name="i226" /></td>
                                <td><input type="text" name="i227" /></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i228" /></td>
                                <td><input type="text" name="i229"  /></td>
                                <td><input type="text" name="i230"  /></td>
                                <td><input type="text" name="i231"/></td>
                                <td><input type="text" name="i232"  /></td>
                                <td><input type="text" name="i233"  /></td>
                                <td><input type="text" name="i234"  /></td>
                                <td><input type="text" name="i235" /></td>
                                <td><input type="text" name="i236"  /></td>
                                <td><input type="text" name="i237"  /></td>
                                <td><input type="text" name="i238" /></td>
                                <td><input type="text" name="i239"  /></td>
                                <td><input type="text" name="i240"/></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 2</strong></div></td>
                                <td><div align="center"><strong>Port 4</strong></div></td>
                                <td><div align="center"><strong>Port 6</strong></div></td>
                                <td><div align="center"><strong>Port 8</strong></div></td>
                                <td><div align="center"><strong>Port 10</strong></div></td>
                                <td><div align="center"><strong>Port 12</strong></div></td>
                                <td><div align="center"><strong>Port 14</strong></div></td>
                                <td><div align="center"><strong>Port 16</strong></div></td>
                                <td><div align="center"><strong>Port 18</strong></div></td>
                                <td><div align="center"><strong>Port 20</strong></div></td>
                                <td><div align="center"><strong>Port 22</strong></div></td>
                                <td><div align="center"><strong>Port 24</strong></div></td>
                                <td><div align="center"><strong>Port 26</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><input type="text" name="i241" /></td>
                                <td><input type="text" name="i242" /></td>
                                <td><input type="text" name="i243" /></td>
                                <td><input type="text" name="i244" /></td>
                                <td><input type="text" name="i245" /></td>
                                <td><input type="text" name="i246" /></td>
                                <td><input type="text" name="i247" /></td>
                                <td><input type="text" name="i248" /></td>
                                <td><input type="text" name="i249" /></td>
                                <td><input type="text" name="i250" /></td>
                                <td><input type="text" name="i251" /></td>
                                <td><input type="text" name="i252"/></td>
                                <td><input type="text" name="i253"/></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i254" /></td>
                                <td><input type="text" name="i255"  /></td>
                                <td><input type="text" name="i256" /></td>
                                <td><input type="text" name="i257"/></td>
                                <td><input type="text" name="i258" /></td>
                                <td><input type="text" name="i259" /></td>
                                <td><input type="text" name="i260"  /></td>
                                <td><input type="text" name="i261" /></td>
                                <td><input type="text" name="i262" /></td>
                                <td><input type="text" name="i263" /></td>
                                <td><input type="text" name="i264" /></td>
                                <td><input type="text" name="i265" /></td>
                                <td><input type="text" name="i266"/></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i267"  /></td>
                                <td><input type="text" name="i268" /></td>
                                <td><input type="text" name="i269" /></td>
                                <td><input type="text" name="i270" /></td>
                                <td><input type="text" name="i271" /></td>
                                <td><input type="text" name="i272"/></td>
                                <td><input type="text" name="i273"/></td>
                                <td><input type="text" name="i274" /></td>
                                <td><input type="text" name="i275"/></td>
                                <td><input type="text" name="i276" /></td>
                                <td><input type="text" name="i277"/></td>
                                <td><input type="text" name="i278" /></td>
                                <td><input type="text" name="i279"/></td>
                              </tr>
                            </table>
                            <br />
                            <p><strong>Switches........No.4</strong></p>
                            <table width="100%" border="1" cellspacing="0" cellpadding="0">
                            
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 1</strong></div></td>
                                <td><div align="center"><strong>Port 3</strong></div></td>
                                <td><div align="center"><strong>Port 5</strong></div></td>
                                <td><div align="center"><strong>Port 7</strong></div></td>
                                <td><div align="center"><strong>Port 9</strong></div></td>
                                <td><div align="center"><strong>Port 11</strong></div></td>
                                <td><div align="center"><strong>Port 13</strong></div></td>
                                <td><div align="center"><strong>Port 15</strong></div></td>
                                <td><div align="center"><strong>Port 17</strong></div></td>
                                <td><div align="center"><strong>Port 19</strong></div></td>
                                <td><div align="center"><strong>Port 21</strong></div></td>
                                <td><div align="center"><strong>Port 23</strong></div></td>
                                <td><div align="center"><strong>Port 25</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><input type="text" name="i280"  /></td>
                                <td><input type="text" name="i281"  /></td>
                                <td><input type="text" name="i282" /></td>
                                <td><input type="text" name="i283" /></td>
                                <td><input type="text" name="i284" /></td>
                                <td><input type="text" name="i285"/></td>
                                <td><input type="text" name="i286"  /></td>
                                <td><input type="text" name="i287" /></td>
                                <td><input type="text" name="i288" /></td>
                                <td><input type="text" name="i289"  /></td>
                                <td><input type="text" name="i290"  /></td>
                                <td><input type="text" name="i291"  /></td>
                                <td><input type="text" name="i292"/></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i293"/></td>
                                <td><input type="text" name="i294" /></td>
                                <td><input type="text" name="i295"  /></td>
                                <td><input type="text" name="i296" /></td>
                                <td><input type="text" name="i297" /></td>
                                <td><input type="text" name="i298"  /></td>
                                <td><input type="text" name="i299"  /></td>
                                <td><input type="text" name="i300"  /></td>
                                <td><input type="text" name="i301" /></td>
                               <td><input type="text" name="i302"  /></td>
                                <td><input type="text" name="i303"  /></td>
                                <td><input type="text" name="i304" /></td>
                               <td><input type="text" name="i305"  /></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                         <td><input type="text" name="i306" /></td>
                               <td><input type="text" name="i307" /></td>
                            <td><input type="text" name="i308"  /></td>
                          <td><input type="text" name="i309"  /></td>
                              <td><input type="text" name="i310"  /></td>
                               <td><input type="text" name="i311"  /></td>
                                <td><input type="text" name="i312"  /></td>
                                <td><input type="text" name="i313"  /></td>
                                <td><input type="text" name="i314" /></td>
                               <td><input type="text" name="i315" /></td>
                              <td><input type="text" name="i316"  /></td>
                            <td><input type="text" name="i317"  /></td>
                                <td><input type="text" name="i318" /></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 2</strong></div></td>
                                <td><div align="center"><strong>Port 4</strong></div></td>
                                <td><div align="center"><strong>Port 6</strong></div></td>
                                <td><div align="center"><strong>Port 8</strong></div></td>
                                <td><div align="center"><strong>Port 10</strong></div></td>
                                <td><div align="center"><strong>Port 12</strong></div></td>
                                <td><div align="center"><strong>Port 14</strong></div></td>
                                <td><div align="center"><strong>Port 16</strong></div></td>
                                <td><div align="center"><strong>Port 18</strong></div></td>
                                <td><div align="center"><strong>Port 20</strong></div></td>
                                <td><div align="center"><strong>Port 22</strong></div></td>
                                <td><div align="center"><strong>Port 24</strong></div></td>
                                <td><div align="center"><strong>Port 26</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><input type="text" name="i319" /></td>
                                <td><input type="text" name="i320" /></td>
                                <td><input type="text" name="i321" /></td>
                                 <td><input type="text" name="i322" /></td>
                                <td><input type="text" name="i323" /></td>
                                 <td><input type="text" name="i324" /></td>
                               <td><input type="text" name="i325" /></td>
                                <td><input type="text" name="i326"/></td>
                              <td><input type="text" name="i327" /></td>
                                <td><input type="text" name="i328" /></td>
                                <td><input type="text" name="i329" /></td>
                              <td><input type="text" name="i330"  /></td>
                                 <td><input type="text" name="i331" /></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                               
                                 <td><input type="text" name="i332" /></td>
                                
                                 <td><input type="text" name="i333" /></td>
                              
                                 <td><input type="text" name="i334"/></td>
                               
                                 <td><input type="text" name="i335" /></td>
                                
                                 <td><input type="text" name="i336"/></td>
                                
                                 <td><input type="text" name="i337" /></td>
                              
                                 <td><input type="text" name="i338"/></td>
                                
                                 <td><input type="text" name="i339"/></td>
                               
                                 <td><input type="text" name="i340"/></td>
                                
                                 <td><input type="text" name="i341" /></td>
                              
                                 <td><input type="text" name="i342"/></td>
                               
                                 <td><input type="text" name="i343"/></td>
                               
                                 <td><input type="text" name="i344"/></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                               <td><input type="text" name="i345"/></td>
                                <td><input type="text" name="i346"/></td>
                                <td><input type="text" name="i347" /></td>
                                <td><input type="text" name="i348"/></td>
                                <td><input type="text" name="i349"/></td>
                               <td><input type="text" name="i350" /></td>
                              <td><input type="text" name="i351" /></td>
                               <td><input type="text" name="i352"/></td>
                                <td><input type="text" name="i353"/></td>
                                <td><input type="text" name="i354" /></td>
                                <td><input type="text" name="i355"/></td>
                                <td><input type="text" name="i356"/></td>
                               <td><input type="text" name="i357"/></td>
                              </tr>
                            </table>
                            <br />
                            <p><strong>Switches........No.5</strong></p>
                            <table width="100%" border="1" cellspacing="0" cellpadding="0">
                              
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 1</strong></div></td>
                                <td><div align="center"><strong>Port 3</strong></div></td>
                                <td><div align="center"><strong>Port 5</strong></div></td>
                                <td><div align="center"><strong>Port 7</strong></div></td>
                                <td><div align="center"><strong>Port 9</strong></div></td>
                                <td><div align="center"><strong>Port 11</strong></div></td>
                                <td><div align="center"><strong>Port 13</strong></div></td>
                                <td><div align="center"><strong>Port 15</strong></div></td>
                                <td><div align="center"><strong>Port 17</strong></div></td>
                                <td><div align="center"><strong>Port 19</strong></div></td>
                                <td><div align="center"><strong>Port 21</strong></div></td>
                                <td><div align="center"><strong>Port 23</strong></div></td>
                                <td><div align="center"><strong>Port 25</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                 <td><input type="text" name="i358"/></td>
                                 <td><input type="text" name="i359"/></td>
                                <td><input type="text" name="i360" /></td>
                                <td><input type="text" name="i361" /></td>
                                <td><input type="text" name="i362" /></td>
                               <td><input type="text" name="i363" /></td>
                                <td><input type="text" name="i364"/></td>
                                <td><input type="text" name="i365" /></td>
                               <td><input type="text" name="i366" /></td>
                                <td><input type="text" name="i367" /></td>
                               <td><input type="text" name="i368" /></td>
                                <td><input type="text" name="i369" /></td>
                               <td><input type="text" name="i370" /></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                 <td><input type="text" name="i371"/></td>
                                 <td><input type="text" name="i372"/></td>
                                <td><input type="text" name="i373"/></td>
                             <td><input type="text" name="i374"/></td>
                             <td><input type="text" name="i375" /></td>
                              <td><input type="text" name="i376" /></td>
                                <td><input type="text" name="i377"/></td>
                                <td><input type="text" name="i378" /></td>
                                 <td><input type="text" name="i379" /></td>
                                <td><input type="text" name="i380" /></td>
                               <td><input type="text" name="i381" /></td>
                                <td><input type="text" name="i382" /></td>
                               <td><input type="text" name="i383"/></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                               <td><input type="text" name="i384"/></td>
                               <td><input type="text" name="i385"/></td>
                             <td><input type="text" name="i386"/></td>
                              <td><input type="text" name="i387"/></td>
                               <td><input type="text" name="i388"  /></td>
                               <td><input type="text" name="i389"/></td>
                             <td><input type="text" name="i390" /></td>
                              <td><input type="text" name="i391"/></td>
                            <td><input type="text" name="i392"/></td>
                               <td><input type="text" name="i393" /></td>
                                <td><input type="text" name="i394"/></td>
                               <td><input type="text" name="i395" /></td>
                                <td><input type="text" name="i396" /></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 2</strong></div></td>
                                <td><div align="center"><strong>Port 4</strong></div></td>
                                <td><div align="center"><strong>Port 6</strong></div></td>
                                <td><div align="center"><strong>Port 8</strong></div></td>
                                <td><div align="center"><strong>Port 10</strong></div></td>
                                <td><div align="center"><strong>Port 12</strong></div></td>
                                <td><div align="center"><strong>Port 14</strong></div></td>
                                <td><div align="center"><strong>Port 16</strong></div></td>
                                <td><div align="center"><strong>Port 18</strong></div></td>
                                <td><div align="center"><strong>Port 20</strong></div></td>
                                <td><div align="center"><strong>Port 22</strong></div></td>
                                <td><div align="center"><strong>Port 24</strong></div></td>
                                <td><div align="center"><strong>Port 26</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                <td><input type="text" name="i397"/></td>
                              <td><input type="text" name="i398" /></td>
                                <td><input type="text" name="i399"/></td>
                              <td><input type="text" name="i400" /></td>
                              <td><input type="text" name="i401" /></td>
                                <td><input type="text" name="i402" /></td>
                             <td><input type="text" name="i403"/></td>
                               <td><input type="text" name="i404" /></td>
                                <td><input type="text" name="i405" /></td>
                                <td><input type="text" name="i406" /></td>
                               <td><input type="text" name="i407" /></td>
                               <td><input type="text" name="i408" /></td>
                                <td><input type="text" name="i409"/></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                               <td><input type="text" name="i410"  /></td>
                              <td><input type="text" name="i411" /></td>
                                <td><input type="text" name="i412" /></td>
                                <td><input type="text" name="i413" /></td>
                               <td><input type="text" name="i414" /></td>
                               <td><input type="text" name="i415" /></td>
                                <td><input type="text" name="i416"  /></td>
                                <td><input type="text" name="i417" /></td>
                               <td><input type="text" name="i418"/></td>
                              <td><input type="text" name="i419" /></td>
                               <td><input type="text" name="i420"  /></td>
                                <td><input type="text" name="i421" /></td>
                              <td><input type="text" name="i422" /></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i423" /></td>
                                 <td><input type="text" name="i424" /></td>
                                <td><input type="text" name="i425" /></td>
                              <td><input type="text" name="i426" /></td>
                             <td><input type="text" name="i427"/></td>
                                <td><input type="text" name="i428"/></td>
                                 <td><input type="text" name="i429" /></td>
                                 <td><input type="text" name="i430"/></td>
                                 <td><input type="text" name="i431" ></td>
                                 <td><input type="text" name="i432" /></td>
                              <td><input type="text" name="i433" /></td>
                             <td><input type="text" name="i434" /></td>
                                 <td><input type="text" name="i435"/></td>
                              </tr>
                            </table>
                            <p><br />
                            <strong>Switches........No.6</strong></p>
                            <table width="100%" border="1" cellspacing="0" cellpadding="0">
                            
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 1</strong></div></td>
                                <td><div align="center"><strong>Port 3</strong></div></td>
                                <td><div align="center"><strong>Port 5</strong></div></td>
                                <td><div align="center"><strong>Port 7</strong></div></td>
                                <td><div align="center"><strong>Port 9</strong></div></td>
                                <td><div align="center"><strong>Port 11</strong></div></td>
                                <td><div align="center"><strong>Port 13</strong></div></td>
                                <td><div align="center"><strong>Port 15</strong></div></td>
                                <td><div align="center"><strong>Port 17</strong></div></td>
                                <td><div align="center"><strong>Port 19</strong></div></td>
                                <td><div align="center"><strong>Port 21</strong></div></td>
                                <td><div align="center"><strong>Port 23</strong></div></td>
                                <td><div align="center"><strong>Port 25</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                                 <td><input type="text" name="i436" /></td>
                                 <td><input type="text" name="i437" /></td>
                                <td><input type="text" name="i438"/></td>
                                <td><input type="text" name="i439" /></td>
                                <td><input type="text" name="i440"  /></td>
                                <td><input type="text" name="i441"/></td>
                                <td><input type="text" name="i442"/></td>
                             <td><input type="text" name="i443" /></td>
                                <td><input type="text" name="i444" /></td>
                                <td><input type="text" name="i445" /></td>
                              <td><input type="text" name="i446" /></td>
                               <td><input type="text" name="i447"/></td>
                               <td><input type="text" name="i448"/></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                 <td><input type="text" name="i449"/></td>
                                <td><input type="text" name="i450"  /></td>
                                 <td><input type="text" name="i451"/></td>
                                 <td><input type="text" name="i452"/></td>
                                <td><input type="text" name="i453" /></td>
                              <td><input type="text" name="i454" /></td>
                                 <td><input type="text" name="i455" /></td>
                                 <td><input type="text" name="i456" /></td>
                                <td><input type="text" name="i457" /></td>
                                 <td><input type="text" name="i458"/></td>
                                <td><input type="text" name="i459" /></td>
                                 <td><input type="text" name="i460"/></td>
                                <td><input type="text" name="i461" /></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                              <td><input type="text" name="i462" /></td>
                                <td><input type="text" name="i463"/></td>
                                 <td><input type="text" name="i464"/></td>
                                 <td><input type="text" name="i465" /></td>
                             <td><input type="text" name="i466"/></td>
                                 <td><input type="text" name="i467" /></td>
                                <td><input type="text" name="i468" /></td>
                                <td><input type="text" name="i469" /></td>
                              <td><input type="text" name="i470"/></td>
                               <td><input type="text" name="i471"/></td>
                               <td><input type="text" name="i472" /></td>
                                 <td><input type="text" name="i473"/></td>
                                 <td><input type="text" name="i474"/></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><div align="center"><strong>Port 2</strong></div></td>
                                <td><div align="center"><strong>Port 4</strong></div></td>
                                <td><div align="center"><strong>Port 6</strong></div></td>
                                <td><div align="center"><strong>Port 8</strong></div></td>
                                <td><div align="center"><strong>Port 10</strong></div></td>
                                <td><div align="center"><strong>Port 12</strong></div></td>
                                <td><div align="center"><strong>Port 14</strong></div></td>
                                <td><div align="center"><strong>Port 16</strong></div></td>
                                <td><div align="center"><strong>Port 18</strong></div></td>
                                <td><div align="center"><strong>Port 20</strong></div></td>
                                <td><div align="center"><strong>Port 22</strong></div></td>
                                <td><div align="center"><strong>Port 24</strong></div></td>
                                <td><div align="center"><strong>Port 26</strong></div></td>
                              </tr>
                              <tr>
                                <td><strong>Status</strong></td>
                               <td><input type="text" name="i475"  /></td>
                               <td><input type="text" name="i476"/></td>
                                 <td><input type="text" name="i477"/></td>
                                 <td><input type="text" name="i478"/></td>
                                 <td><input type="text" name="i479"/></td>
                             <td><input type="text" name="i480"/></td>
                                 <td><input type="text" name="i481" v /></td>
                               <td><input type="text" name="i482" /></td>
                                 <td><input type="text" name="i483" /></td>
                               <td><input type="text" name="i484"/></td>
                               <td><input type="text" name="i485"/></td>
                                 <td><input type="text" name="i486"/></td>
                                 <td><input type="text" name="i487"/></td>
                              </tr>
                              <tr>
                                <td><strong>Lable cable</strong></td>
                                <td><input type="text" name="i488" /></td>
                               <td><input type="text" name="i489" /></td>
                              <td><input type="text" name="i490"  /></td>
                                <td><input type="text" name="i491" /></td>
                             <td><input type="text" name="i492"  /></td>
                                <td><input type="text" name="i493" /></td>
                            <td><input type="text" name="i494" /></td>
                               <td><input type="text" name="i495" /></td>
                               <td><input type="text" name="i496" /></td>
                              <td><input type="text" name="i497"/></td>
                              <td><input type="text" name="i498"/></td>
                              <td><input type="text" name="i499" /></td>
                               <td><input type="text" name="i500" /></td>
                              </tr>
                              <tr>
                                <td><strong>VLAN*</strong></td>
                                <td><input type="text" name="i501" /></td>
                                <td><input type="text" name="i502" /></td>
                              <td><input type="text" name="i503" /></td>
                                <td><input type="text" name="i504" /></td>
                              <td><input type="text" name="i505"/></td>
                                <td><input type="text" name="i506"/></td>
                               <td><input type="text" name="i507" /></td>
                               <td><input type="text" name="i508"/></td>
                                <td><input type="text" name="i509" /></td>
                                <td><input type="text" name="i510"  /></td>
                              <td><input type="text" name="i511" /></td>
                                <td><input type="text" name="i512"/></td>
                                <td><input type="text" name="i513"/></td>
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

					
