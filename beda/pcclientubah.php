<style>
input{
	width:100%;
}
</style>



<?php
/*
for($i=48;$i<=329;$i++){
	echo ", i".$i."='\".\$_POST['i$i'].\"'";
}
*/
?>



<?php
if(isset($_POST['ubah'])){
	 $sql = "update pmclient set cabang='".$_POST['cabang']."', alamat='".$_POST['alamat']."', tanggal_kunjungan='".$_POST['tanggal_kunjungan']."', i1='".$_POST['i1']."', i2='".$_POST['i2']."', i3='".$_POST['i3']."', i4='".$_POST['i4']."', i5='".$_POST['i5']."', i6='".$_POST['i6']."', i7='".$_POST['i7']."', i8='".$_POST['i8']."', i9='".$_POST['i9']."', i10='".$_POST['i10']."', i11='".$_POST['i11']."', i12='".$_POST['i12']."', i13='".$_POST['i13']."', i14='".$_POST['i14']."', i15='".$_POST['i15']."', i16='".$_POST['i16']."', i17='".$_POST['i17']."', i18='".$_POST['i18']."', i19='".$_POST['i19']."', i20='".$_POST['i20']."', i21='".$_POST['i21']."', i22='".$_POST['i22']."', i23='".$_POST['i23']."', i24='".$_POST['i24']."', i25='".$_POST['i25']."', i26='".$_POST['i26']."', i27='".$_POST['i27']."', i28='".$_POST['i28']."', i29='".$_POST['i29']."', i30='".$_POST['i30']."', i31='".$_POST['i31']."', i32='".$_POST['i32']."', i33='".$_POST['i33']."', i34='".$_POST['i34']."', i35='".$_POST['i35']."'   , i36='".$_POST['i36']."', i37='".$_POST['i37']."', i38='".$_POST['i38']."', i39='".$_POST['i39']."' , i40='".$_POST['i40']."', i41='".$_POST['i41']."', i42='".$_POST['i42']."', i43='".$_POST['i43']."', i44='".$_POST['i44']."', i45='".$_POST['i45']."', i46='".$_POST['i46']."', i47='".$_POST['i47']."', i48='".$_POST['i48']."', i49='".$_POST['i49']."', i50='".$_POST['i50']."', i51='".$_POST['i51']."', i52='".$_POST['i52']."', i53='".$_POST['i53']."', i54='".$_POST['i54']."', i55='".$_POST['i55']."', i56='".$_POST['i56']."', i57='".$_POST['i57']."', i58='".$_POST['i58']."', i59='".$_POST['i59']."', i60='".$_POST['i60']."', i61='".$_POST['i61']."', i62='".$_POST['i62']."', i63='".$_POST['i63']."', i64='".$_POST['i64']."', i65='".$_POST['i65']."', i66='".$_POST['i66']."', i67='".$_POST['i67']."', i68='".$_POST['i68']."', i69='".$_POST['i69']."', i70='".$_POST['i70']."', i71='".$_POST['i71']."', i72='".$_POST['i72']."', i73='".$_POST['i73']."', i74='".$_POST['i74']."', i75='".$_POST['i75']."', i76='".$_POST['i76']."', i77='".$_POST['i77']."', i78='".$_POST['i78']."', i79='".$_POST['i79']."', i80='".$_POST['i80']."', i81='".$_POST['i81']."', i82='".$_POST['i82']."', i83='".$_POST['i83']."', i84='".$_POST['i84']."', i85='".$_POST['i85']."', i86='".$_POST['i86']."', i87='".$_POST['i87']."', i88='".$_POST['i88']."', i89='".$_POST['i89']."', i90='".$_POST['i90']."', i91='".$_POST['i91']."', i92='".$_POST['i92']."', i93='".$_POST['i93']."', i94='".$_POST['i94']."', i95='".$_POST['i95']."', i96='".$_POST['i96']."', i97='".$_POST['i97']."', i98='".$_POST['i98']."', i99='".$_POST['i99']."', i100='".$_POST['i100']."', i101='".$_POST['i101']."', i102='".$_POST['i102']."', i103='".$_POST['i103']."', i104='".$_POST['i104']."', i105='".$_POST['i105']."', i106='".$_POST['i106']."', i107='".$_POST['i107']."', i108='".$_POST['i108']."', i109='".$_POST['i109']."', i110='".$_POST['i110']."', i111='".$_POST['i111']."', i112='".$_POST['i112']."', i113='".$_POST['i113']."', i114='".$_POST['i114']."', i115='".$_POST['i115']."', i116='".$_POST['i116']."', i117='".$_POST['i117']."', i118='".$_POST['i118']."', i119='".$_POST['i119']."', i120='".$_POST['i120']."', i121='".$_POST['i121']."', i122='".$_POST['i122']."', i123='".$_POST['i123']."', i124='".$_POST['i124']."', i125='".$_POST['i125']."', i126='".$_POST['i126']."', i127='".$_POST['i127']."', i128='".$_POST['i128']."', i129='".$_POST['i129']."', i130='".$_POST['i130']."', i131='".$_POST['i131']."', i132='".$_POST['i132']."', i133='".$_POST['i133']."', i134='".$_POST['i134']."', i135='".$_POST['i135']."', i136='".$_POST['i136']."', i137='".$_POST['i137']."', i138='".$_POST['i138']."', i139='".$_POST['i139']."', i140='".$_POST['i140']."', i141='".$_POST['i141']."', i142='".$_POST['i142']."', i143='".$_POST['i143']."', i144='".$_POST['i144']."', i145='".$_POST['i145']."', i146='".$_POST['i146']."', i147='".$_POST['i147']."', i148='".$_POST['i148']."', i149='".$_POST['i149']."', i150='".$_POST['i150']."', i151='".$_POST['i151']."', i152='".$_POST['i152']."', i153='".$_POST['i153']."', i154='".$_POST['i154']."', i155='".$_POST['i155']."', i156='".$_POST['i156']."', i157='".$_POST['i157']."', i158='".$_POST['i158']."', i159='".$_POST['i159']."', i160='".$_POST['i160']."', i161='".$_POST['i161']."', i162='".$_POST['i162']."', i163='".$_POST['i163']."', i164='".$_POST['i164']."', i165='".$_POST['i165']."', i166='".$_POST['i166']."', i167='".$_POST['i167']."', i168='".$_POST['i168']."', i169='".$_POST['i169']."', i170='".$_POST['i170']."', i171='".$_POST['i171']."', i172='".$_POST['i172']."', i173='".$_POST['i173']."', i174='".$_POST['i174']."', i175='".$_POST['i175']."', i176='".$_POST['i176']."', i177='".$_POST['i177']."', i178='".$_POST['i178']."', i179='".$_POST['i179']."', i180='".$_POST['i180']."', i181='".$_POST['i181']."', i182='".$_POST['i182']."', i183='".$_POST['i183']."', i184='".$_POST['i184']."', i185='".$_POST['i185']."', i186='".$_POST['i186']."', i187='".$_POST['i187']."', i188='".$_POST['i188']."', i189='".$_POST['i189']."', i190='".$_POST['i190']."', i191='".$_POST['i191']."', i192='".$_POST['i192']."', i193='".$_POST['i193']."', i194='".$_POST['i194']."', i195='".$_POST['i195']."', i196='".$_POST['i196']."', i197='".$_POST['i197']."', i198='".$_POST['i198']."', i199='".$_POST['i199']."', i200='".$_POST['i200']."', i201='".$_POST['i201']."', i202='".$_POST['i202']."', i203='".$_POST['i203']."', i204='".$_POST['i204']."', i205='".$_POST['i205']."', i206='".$_POST['i206']."', i207='".$_POST['i207']."', i208='".$_POST['i208']."', i209='".$_POST['i209']."', i210='".$_POST['i210']."', i211='".$_POST['i211']."', i212='".$_POST['i212']."', i213='".$_POST['i213']."', i214='".$_POST['i214']."', i215='".$_POST['i215']."', i216='".$_POST['i216']."', i217='".$_POST['i217']."', i218='".$_POST['i218']."', i219='".$_POST['i219']."', i220='".$_POST['i220']."', i221='".$_POST['i221']."', i222='".$_POST['i222']."', i223='".$_POST['i223']."', i224='".$_POST['i224']."', i225='".$_POST['i225']."', i226='".$_POST['i226']."', i227='".$_POST['i227']."', i228='".$_POST['i228']."', i229='".$_POST['i229']."', i230='".$_POST['i230']."', i231='".$_POST['i231']."', i232='".$_POST['i232']."', i233='".$_POST['i233']."', i234='".$_POST['i234']."', i235='".$_POST['i235']."', i236='".$_POST['i236']."', i237='".$_POST['i237']."', i238='".$_POST['i238']."', i239='".$_POST['i239']."', i240='".$_POST['i240']."', i241='".$_POST['i241']."', i242='".$_POST['i242']."', i243='".$_POST['i243']."', i244='".$_POST['i244']."', i245='".$_POST['i245']."', i246='".$_POST['i246']."', i247='".$_POST['i247']."', i248='".$_POST['i248']."', i249='".$_POST['i249']."', i250='".$_POST['i250']."', i251='".$_POST['i251']."', i252='".$_POST['i252']."', i253='".$_POST['i253']."', i254='".$_POST['i254']."', i255='".$_POST['i255']."', i256='".$_POST['i256']."', i257='".$_POST['i257']."', i258='".$_POST['i258']."', i259='".$_POST['i259']."', i260='".$_POST['i260']."', i261='".$_POST['i261']."', i262='".$_POST['i262']."', i263='".$_POST['i263']."', i264='".$_POST['i264']."', i265='".$_POST['i265']."', i266='".$_POST['i266']."', i267='".$_POST['i267']."', i268='".$_POST['i268']."', i269='".$_POST['i269']."', i270='".$_POST['i270']."', i271='".$_POST['i271']."', i272='".$_POST['i272']."', i273='".$_POST['i273']."', i274='".$_POST['i274']."', i275='".$_POST['i275']."', i276='".$_POST['i276']."', i277='".$_POST['i277']."', i278='".$_POST['i278']."', i279='".$_POST['i279']."', i280='".$_POST['i280']."', i281='".$_POST['i281']."', i282='".$_POST['i282']."', i283='".$_POST['i283']."', i284='".$_POST['i284']."', i285='".$_POST['i285']."', i286='".$_POST['i286']."', i287='".$_POST['i287']."', i288='".$_POST['i288']."', i289='".$_POST['i289']."', i290='".$_POST['i290']."', i291='".$_POST['i291']."', i292='".$_POST['i292']."', i293='".$_POST['i293']."', i294='".$_POST['i294']."', i295='".$_POST['i295']."', i296='".$_POST['i296']."', i297='".$_POST['i297']."', i298='".$_POST['i298']."', i299='".$_POST['i299']."', i300='".$_POST['i300']."', i301='".$_POST['i301']."', i302='".$_POST['i302']."', i303='".$_POST['i303']."', i304='".$_POST['i304']."', i305='".$_POST['i305']."', i306='".$_POST['i306']."', i307='".$_POST['i307']."', i308='".$_POST['i308']."', i309='".$_POST['i309']."', i310='".$_POST['i310']."', i311='".$_POST['i311']."', i312='".$_POST['i312']."', i313='".$_POST['i313']."', i314='".$_POST['i314']."', i315='".$_POST['i315']."', i316='".$_POST['i316']."', i317='".$_POST['i317']."', i318='".$_POST['i318']."', i319='".$_POST['i319']."', i320='".$_POST['i320']."', i321='".$_POST['i321']."', i322='".$_POST['i322']."', i323='".$_POST['i323']."', i324='".$_POST['i324']."', i325='".$_POST['i325']."', i326='".$_POST['i326']."', i327='".$_POST['i327']."', i328='".$_POST['i328']."', i329='".$_POST['i329']."'                                   where id='".$_GET['id']."'";
	$query = mysqli_query($koneksi, $sql);
?>
<script>alert('Data Berhasil Diubah')</script>
<script>window.location='penghubung.php?nav=pcclientdata'</script>

<?php
}
?>


<?php
$query = mysqli_query($koneksi, "SELECT id, cabang, alamat, tanggal_kunjungan, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36, i37, i38, i39, i40, i41, i42, i43, i44, i45, i46, i47, i48, i49, i50, i51, i52, i53, i54, i55, i56, i57, i58, i59, i60, i61, i62, i63, i64, i65, i66, i67, i68, i69, i70, i71, i72, i73, i74, i75, i76, i77, i78, i79, i80, i81, i82, i83, i84, i85, i86, i87, i88, i89, i90, i91, i92, i93, i94, i95, i96, i97, i98, i99, i100, i101, i102, i103, i104, i105, i106, i107, i108, i109, i110, i111, i112, i113, i114, i115, i116, i117, i118, i119, i120, i121, i122, i123, i124, i125, i126, i127, i128, i129, i130, i131, i132, i133, i134, i135, i136, i137, i138, i139, i140, i141, i142, i143, i144, i145, i146, i147, i148, i149, i150, i151, i152, i153, i154, i155, i156, i157, i158, i159, i160, i161, i162, i163, i164, i165, i166, i167, i168, i169, i170, i171, i172, i173, i174, i175, i176, i177, i178, i179, i180, i181, i182, i183, i184, i185, i186, i187, i188, i189, i190, i191, i192, i193, i194, i195, i196, i197, i198, i199, i200, i201, i202, i203, i204, i205, i206, i207, i208, i209, i210, i211, i212, i213, i214, i215, i216, i217, i218, i219, i220, i221, i222, i223, i224, i225, i226, i227, i228, i229, i230, i231, i232, i233, i234, i235, i236, i237, i238, i239, i240, i241, i242, i243, i244, i245, i246, i247, i248, i249, i250, i251, i252, i253, i254, i255, i256, i257, i258, i259, i260, i261, i262, i263, i264, i265, i266, i267, i268, i269, i270, i271, i272, i273, i274, i275, i276, i277, i278, i279, i280, i281, i282, i283, i284, i285, i286, i287, i288, i289, i290, i291, i292, i293, i294, i295, i296, i297, i298, i299, i300, i301, i302, i303, i304, i305, i306, i307, i308, i309, i310, i311, i312, i313, i314, i315, i316, i317, i318, i319, i320, i321, i322, i323, i324, i325, i326, i327, i328, i329 FROM pmclient WHERE id='".$_GET['id']."'");
										while($data = mysqli_fetch_array($query)){
$id = $data['id'];
$cabang = $data['cabang'];
$alamat = $data['alamat'];
$tanggal_kunjungan = $data['tanggal_kunjungan'];

for ($j=1;$j<=329;$j++){
$i[$j] = $data['i'.$j];
}

}

$input = 1;
?>




<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse"><strong>UBAH CHECKLIST PC CLIENT</strong></div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST">
							  <div class="form-group">
									<label for="exampleInputPassword1">Cabang</label><br>
									<select name="cabang" id="cabang">
								
									<option <?php echo ($cabang =='--Pilih Outlet--')? "selected":"" ?>>--Pilih Outlet--</option>
									<option <?php echo ($cabang =='--KC Bandung--')? "selected":"" ?>>--KC Bandung--</option>
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
									
									
									<option <?php echo ($cabang =='--KC Cirebon--')? "selected":"" ?>>--KC Cirebon--</option>
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
									
									<option <?php echo ($cabang =='--KC Tasikmalaya--')? "selected":"" ?>>--KC Tasikmalaya--</option>
									<option <?php echo ($cabang =='KC Tasikmalaya')? "selected":"" ?>>KK Tuparev</option>>KC Tasikmalaya</option>
									<option <?php echo ($cabang =='KCP Ciawi')? "selected":"" ?>></option>KCP Ciawi</option>
									<option <?php echo ($cabang =='KCP Universitas Siliwangi')? "selected":"" ?>>KCP Universitas Siliwangi</option>
									<option <?php echo ($cabang =='KCP Ciamis')? "selected":"" ?>>KCP Ciamis</option>
									<option <?php echo ($cabang =='KCP Singaparna')? "selected":"" ?>>KCP Singaparna</option>
									<option <?php echo ($cabang =='KCP Karang Nunggal')? "selected":"" ?>>KCP Karang Nunggal</option>
									<option <?php echo ($cabang =='KCP Cikurubuk')? "selected":"" ?>>KCP Cikurubuk</option>
									<option <?php echo ($cabang =='KK Sutisna Senjaya')? "selected":"" ?>>KK Sutisna Senjaya</option>
									<option <?php echo ($cabang =='KK Kawali')? "selected":"" ?>>KK Kawali</option>
									<option <?php echo ($cabang =='PP BPJS Tasikmalaya')? "selected":"" ?>>PP BPJS Tasikmalaya</option>
									
									<option <?php echo ($cabang =='--KC Majalaya--')? "selected":"" ?>>--KC Majalaya--</option>
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
									
									
									<option <?php echo ($cabang =='--KC Sukabumi--')? "selected":"" ?>>--KC Sukabumi--</option>
									<option <?php echo ($cabang =='KC Sukabumi')? "selected":"" ?>>KC Sukabumi</option>
									<option <?php echo ($cabang =='KCP Ciwangi')? "selected":"" ?>>KCP Ciwangi</option>
									<option <?php echo ($cabang =='KCP Cibadak')? "selected":"" ?>>KCP Cibadak</option>
									<option <?php echo ($cabang =='KCP Cicurug')? "selected":"" ?>>KCP Cicurug</option>
									<option <?php echo ($cabang =='KCP Surade')? "selected":"" ?>>KCP Surade</option>
									<option <?php echo ($cabang =='KCP Pelabuhan Ratu')? "selected":"" ?>>KCP Pelabuhan Ratu</option>
									<option <?php echo ($cabang =='KK Pangleseran')? "selected":"" ?>>KK Pangleseran</option>
									<option <?php echo ($cabang =='PP Jamsostek Sukabumi')? "selected":"" ?>>PP Jamsostek Sukabumi</option>
									<option <?php echo ($cabang =='PP RS Hermina')? "selected":"" ?>>PP RS Hermina Sukabumi</option>
								
									<option <?php echo ($cabang =='--KC Banjar--')? "selected":"" ?>>--KC Banjar--</option>
									<option <?php echo ($cabang =='KC Banjar')? "selected":"" ?>>KC Banjar</option>
									<option <?php echo ($cabang =='KCP Pangandaran')? "selected":"" ?>>KCP Pangandaran</option>
									<option <?php echo ($cabang =='KK Banjarsari')? "selected":"" ?>>KK Banjarsari</option>
									
									<option <?php echo ($cabang =='--KC Garut--')? "selected":"" ?>>--KC Garut--</option>
									<option <?php echo ($cabang =='KC Garut')? "selected":"" ?>>KC Garut</option>
									<option <?php echo ($cabang =='KCP Cikajang')? "selected":"" ?>>KCP Cikajang</option>
									<option <?php echo ($cabang =='KCP Pameungpeuk')? "selected":"" ?>>KCP Pameungpeuk</option>
									<option <?php echo ($cabang =='KK Kadungora')? "selected":"" ?>>KK Kadungora</option>
									<option <?php echo ($cabang =='KK Limbangan')? "selected":"" ?>>KK Limbangan</option>
									<option <?php echo ($cabang =='KK Ciledug')? "selected":"" ?>>KK Ciledug</option>
								
									<option <?php echo ($cabang =='--KCP Cianjur--')? "selected":"" ?>>--KC Cianjur--</option>
									<option <?php echo ($cabang =='KC Cianjur')? "selected":"" ?>>KC Cianjur</option>
									<option <?php echo ($cabang =='KCP Cipanas')? "selected":"" ?>>KCP Cipanas</option>
									<option <?php echo ($cabang =='KCP Ciranjang')? "selected":"" ?>>KCP Ciranjang</option>
									<option <?php echo ($cabang =='KCP Tanggeung')? "selected":"" ?>>KCP Tanggeung</option>
									<option <?php echo ($cabang =='KK Hos Tjokroaminoto')? "selected":"" ?>>KK Hos Tjokroaminoto</option>
									
									<option <?php echo ($cabang =='--KC Indramayu--')? "selected":"" ?>>--KC Indramayu--</option>
									<option <?php echo ($cabang =='KC Indramayu')? "selected":"" ?>>KC Indramayu</option>
									<option <?php echo ($cabang =='KCP Jatibarang')? "selected":"" ?>>KCP Jatibarang</option>
									<option <?php echo ($cabang =='KCP Patrol')? "selected":"" ?>>KCP Patrol</option>
									<option <?php echo ($cabang =='KCP Haurgeulis')? "selected":"" ?>>KCP Haurgeulis</option>
									<option <?php echo ($cabang =='KCP Karangampel')? "selected":"" ?>>KCP Karangampel</option>
									<option <?php echo ($cabang =='PP TPI Karangsong')? "selected":"" ?>>PP TPI Karangsong</option>
									
									<option <?php echo ($cabang =='--KC Kuningan--')? "selected":"" ?>>--KC Kuningan--</option>
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
									
									<option <?php echo ($cabang =='--KC Purwakarta--')? "selected":"" ?>>--KC Purwakarta--</option>
									<option <?php echo ($cabang =='KC Purwakarta')? "selected":"" ?>>KC Purwakarta</option>
									<option <?php echo ($cabang =='KCP Plered')? "selected":"" ?>>KCP Plered</option>
									<option <?php echo ($cabang =='KK Kota Bukit Indah')? "selected":"" ?>>KK Kota Bukit Indah</option>
									<option <?php echo ($cabang =='KK Jatiluhur')? "selected":"" ?>>KK Jatiluhur</option>
									<option <?php echo ($cabang =='KK Cikopo')? "selected":"" ?>>KK Cikopo</option>
									<option <?php echo ($cabang =='PP BPJS Purwakarta')? "selected":"" ?>>PP BPJS Purwakarta</option>
									
									<option <?php echo ($cabang =='--KC Sumedang--')? "selected":"" ?>>--KC Sumedang--</option>
									<option <?php echo ($cabang =='KC Sumedang')? "selected":"" ?>>KC Sumedang</option>
									<option <?php echo ($cabang =='KK Tanjungsari')? "selected":"" ?>>KK Tanjungsari</option>
									
									<option <?php echo ($cabang =='--KC Subang--')? "selected":"" ?>>--KC Subang--</option>
									<option <?php echo ($cabang =='KC Subang')? "selected":"" ?>>KC Subang</option>
									<option <?php echo ($cabang =='KCP Pamanukan')? "selected":"" ?>>KCP Pamanukan</option>
									<option <?php echo ($cabang =='KCP Kalijati')? "selected":"" ?>>KCP Kalijati</option>
									<option <?php echo ($cabang =='KK Cipeundeuy')? "selected":"" ?>>KK Cipeundeuy</option>
									
									<option <?php echo ($cabang =='--KC PTB--')? "selected":"" ?>>--KC PTB--</option>
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
									
									<option <?php echo ($cabang =='--KC JPK--')? "selected":"" ?>>--KC JPK--</option>
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
									<option <?php echo ($cabang =='KCP Pasar Baru')? "selected":"" ?>>KCP Pasar Baru</option>
									<option <?php echo ($cabang =='KCP Pajajaran')? "selected":"" ?>>KCP Pajajaran</option>
									<option <?php echo ($cabang =='KCP Immanuel')? "selected":"" ?>>KCP Immanuel</option>
									<option <?php echo ($cabang =='KK Dayeuhkolot')? "selected":"" ?>>KK Dayeuhkolot</option>
									<option <?php echo ($cabang =='KK UNJANI')? "selected":"" ?>>KK UNJANI</option>
									<option <?php echo ($cabang =='KK Sumbersari')? "selected":"" ?>>KK Sumbersari</option>
									<option <?php echo ($cabang =='KK Batujajar')? "selected":"" ?>>KK Batujajar</option>
									<option <?php echo ($cabang =='KK Ciwastra')? "selected":"" ?>>KK Ciwastra</option>
									<option <?php echo ($cabang =='KK Pojok Cimahi')? "selected":"" ?>>KK Pojok Cimahi</option>
									<option <?php echo ($cabang =='e-Branch Paskal')? "selected":"" ?>>e-Branch Paskal</option>
									<option <?php echo ($cabang =='PP Jamsostek Cimahi')? "selected":"" ?>>PP Jamsostek Cimahi</option>
								
									
									</select>
							</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Alamat</label>
									<input type="text" class="form-control" id="exampleInputName" name="alamat" value="<?php echo $alamat;?>">
								</div>
                                
                                <div class="form-group">
									<label for="exampleInputPassword1">Tanggal Kunjungan</label>
									<input type="date" class="form-control" id="exampleInputName" placeholder="" name="tanggal_kunjungan" value="<?php echo $tanggal_kunjungan;?>">
								</div>
                                <?php
								$input = 1;
								?>
                                <table width="100%" cellspacing="0" cellpadding="0" border="1" style="border-collapse:">
                                  <tr>
                                    <td><div align="center"><strong>No.</strong></div></td>
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
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">2</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">3</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"   /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">4</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"   /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"   /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"   /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"   /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">5</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />                                      
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"  /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">6</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>"/></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">7</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">8</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i233" /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">9</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />                                   
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">10</td>
                                    <td rowspan="4"><input type="text" style="height:100px" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td align="left">CPU</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Monitor</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Printer</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Pinpad</td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                </table>
                                <br />
                            <button type="submit" name="ubah" class="btn btn-info">Ubah</button>
							<a href="?nav=pcclientdata" class="btn btn-warning">Kembali</a>
						  </form>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
