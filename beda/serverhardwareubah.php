<style>
input{
	width:100%;
}
</style>

<?php

/*
for($i=2;$i<=213;$i++){
	echo ", i".$i."='\".\$_POST['i$i'].\"'";
}

*/


if(isset($_POST['ubah'])){
	$query = mysqli_query($koneksi, "update serverhardware set cabang='".$_POST['cabang']."', alamat='".$_POST['alamat']."', tanggal_kunjungan='".$_POST['tanggal_kunjungan']."', i1='".$_POST['i1']."', i2='".$_POST['i2']."', i3='".$_POST['i3']."', i4='".$_POST['i4']."', i5='".$_POST['i5']."', i6='".$_POST['i6']."', i7='".$_POST['i7']."', i8='".$_POST['i8']."', i9='".$_POST['i9']."', i10='".$_POST['i10']."', i11='".$_POST['i11']."', i12='".$_POST['i12']."', i13='".$_POST['i13']."', i14='".$_POST['i14']."', i15='".$_POST['i15']."', i16='".$_POST['i16']."', i17='".$_POST['i17']."', i18='".$_POST['i18']."', i19='".$_POST['i19']."', i20='".$_POST['i20']."', i21='".$_POST['i21']."', i22='".$_POST['i22']."', i23='".$_POST['i23']."', i24='".$_POST['i24']."', i25='".$_POST['i25']."', i26='".$_POST['i26']."', i27='".$_POST['i27']."', i28='".$_POST['i28']."', i29='".$_POST['i29']."', i30='".$_POST['i30']."', i31='".$_POST['i31']."', i32='".$_POST['i32']."', i33='".$_POST['i33']."', i34='".$_POST['i34']."', i35='".$_POST['i35']."', i36='".$_POST['i36']."', i37='".$_POST['i37']."', i38='".$_POST['i38']."', i39='".$_POST['i39']."', i40='".$_POST['i40']."', i41='".$_POST['i41']."', i42='".$_POST['i42']."', i43='".$_POST['i43']."', i44='".$_POST['i44']."', i45='".$_POST['i45']."', i46='".$_POST['i46']."', i47='".$_POST['i47']."', i48='".$_POST['i48']."', i49='".$_POST['i49']."', i50='".$_POST['i50']."', i51='".$_POST['i51']."', i52='".$_POST['i52']."', i53='".$_POST['i53']."', i54='".$_POST['i54']."', i55='".$_POST['i55']."', i56='".$_POST['i56']."', i57='".$_POST['i57']."', i58='".$_POST['i58']."', i59='".$_POST['i59']."', i60='".$_POST['i60']."', i61='".$_POST['i61']."', i62='".$_POST['i62']."', i63='".$_POST['i63']."', i64='".$_POST['i64']."', i65='".$_POST['i65']."', i66='".$_POST['i66']."', i67='".$_POST['i67']."', i68='".$_POST['i68']."', i69='".$_POST['i69']."', i70='".$_POST['i70']."', i71='".$_POST['i71']."', i72='".$_POST['i72']."', i73='".$_POST['i73']."', i74='".$_POST['i74']."', i75='".$_POST['i75']."', i76='".$_POST['i76']."', i77='".$_POST['i77']."', i78='".$_POST['i78']."', i79='".$_POST['i79']."', i80='".$_POST['i80']."', i81='".$_POST['i81']."', i82='".$_POST['i82']."', i83='".$_POST['i83']."', i84='".$_POST['i84']."', i85='".$_POST['i85']."', i86='".$_POST['i86']."', i87='".$_POST['i87']."', i88='".$_POST['i88']."', i89='".$_POST['i89']."', i90='".$_POST['i90']."', i91='".$_POST['i91']."', i92='".$_POST['i92']."', i93='".$_POST['i93']."', i94='".$_POST['i94']."', i95='".$_POST['i95']."', i96='".$_POST['i96']."', i97='".$_POST['i97']."', i98='".$_POST['i98']."', i99='".$_POST['i99']."', i100='".$_POST['i100']."', i101='".$_POST['i101']."', i102='".$_POST['i102']."', i103='".$_POST['i103']."', i104='".$_POST['i104']."', i105='".$_POST['i105']."', i106='".$_POST['i106']."', i107='".$_POST['i107']."', i108='".$_POST['i108']."', i109='".$_POST['i109']."', i110='".$_POST['i110']."', i111='".$_POST['i111']."', i112='".$_POST['i112']."', i113='".$_POST['i113']."', i114='".$_POST['i114']."', i115='".$_POST['i115']."', i116='".$_POST['i116']."', i117='".$_POST['i117']."', i118='".$_POST['i118']."', i119='".$_POST['i119']."', i120='".$_POST['i120']."', i121='".$_POST['i121']."', i122='".$_POST['i122']."', i123='".$_POST['i123']."', i124='".$_POST['i124']."', i125='".$_POST['i125']."', i126='".$_POST['i126']."', i127='".$_POST['i127']."', i128='".$_POST['i128']."', i129='".$_POST['i129']."', i130='".$_POST['i130']."', i131='".$_POST['i131']."', i132='".$_POST['i132']."', i133='".$_POST['i133']."', i134='".$_POST['i134']."', i135='".$_POST['i135']."', i136='".$_POST['i136']."', i137='".$_POST['i137']."', i138='".$_POST['i138']."', i139='".$_POST['i139']."', i140='".$_POST['i140']."', i141='".$_POST['i141']."', i142='".$_POST['i142']."', i143='".$_POST['i143']."', i144='".$_POST['i144']."', i145='".$_POST['i145']."', i146='".$_POST['i146']."', i147='".$_POST['i147']."', i148='".$_POST['i148']."', i149='".$_POST['i149']."', i150='".$_POST['i150']."', i151='".$_POST['i151']."', i152='".$_POST['i152']."', i153='".$_POST['i153']."', i154='".$_POST['i154']."', i155='".$_POST['i155']."', i156='".$_POST['i156']."', i157='".$_POST['i157']."', i158='".$_POST['i158']."', i159='".$_POST['i159']."', i160='".$_POST['i160']."', i161='".$_POST['i161']."', i162='".$_POST['i162']."', i163='".$_POST['i163']."', i164='".$_POST['i164']."', i165='".$_POST['i165']."', i166='".$_POST['i166']."', i167='".$_POST['i167']."', i168='".$_POST['i168']."', i169='".$_POST['i169']."', i170='".$_POST['i170']."', i171='".$_POST['i171']."', i172='".$_POST['i172']."', i173='".$_POST['i173']."', i174='".$_POST['i174']."', i175='".$_POST['i175']."', i176='".$_POST['i176']."', i177='".$_POST['i177']."', i178='".$_POST['i178']."', i179='".$_POST['i179']."', i180='".$_POST['i180']."', i181='".$_POST['i181']."', i182='".$_POST['i182']."', i183='".$_POST['i183']."', i184='".$_POST['i184']."', i185='".$_POST['i185']."', i186='".$_POST['i186']."', i187='".$_POST['i187']."', i188='".$_POST['i188']."', i189='".$_POST['i189']."', i190='".$_POST['i190']."', i191='".$_POST['i191']."', i192='".$_POST['i192']."', i193='".$_POST['i193']."', i194='".$_POST['i194']."', i195='".$_POST['i195']."', i196='".$_POST['i196']."', i197='".$_POST['i197']."', i198='".$_POST['i198']."', i199='".$_POST['i199']."', i200='".$_POST['i200']."', i201='".$_POST['i201']."', i202='".$_POST['i202']."', i203='".$_POST['i203']."', i204='".$_POST['i204']."', i205='".$_POST['i205']."', i206='".$_POST['i206']."', i207='".$_POST['i207']."', i208='".$_POST['i208']."', i209='".$_POST['i209']."', i210='".$_POST['i210']."', i211='".$_POST['i211']."', i212='".$_POST['i212']."', i213='".$_POST['i213']."'                              where id='".$_GET['id']."'");
?>
<script>alert('Data Berhasil Diubah')</script>
<script>window.location='?nav=serverhardwaredata'</script>
<?php
}
?>

<?php
$query = mysqli_query($koneksi, "SELECT id, cabang, alamat, tanggal_kunjungan, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36, i37, i38, i39, i40, i41, i42, i43, i44, i45, i46, i47, i48, i49, i50, i51, i52, i53, i54, i55, i56, i57, i58, i59, i60, i61, i62, i63, i64, i65, i66, i67, i68, i69, i70, i71, i72, i73, i74, i75, i76, i77, i78, i79, i80, i81, i82, i83, i84, i85, i86, i87, i88, i89, i90, i91, i92, i93, i94, i95, i96, i97, i98, i99, i100, i101, i102, i103, i104, i105, i106, i107, i108, i109, i110, i111, i112, i113, i114, i115, i116, i117, i118, i119, i120, i121, i122, i123, i124, i125, i126, i127, i128, i129, i130, i131, i132, i133, i134, i135, i136, i137, i138, i139, i140, i141, i142, i143, i144, i145, i146, i147, i148, i149, i150, i151, i152, i153, i154, i155, i156, i157, i158, i159, i160, i161, i162, i163, i164, i165, i166, i167, i168, i169, i170, i171, i172, i173, i174, i175, i176, i177, i178, i179, i180, i181, i182, i183, i184, i185, i186, i187, i188, i189, i190, i191, i192, i193, i194, i195, i196, i197, i198, i199, i200, i201, i202, i203, i204, i205, i206, i207, i208, i209, i210, i211, i212, i213 FROM serverhardware WHERE id='".$_GET['id']."'");
										while($data = mysqli_fetch_array($query)){
$id = $data['id'];
$cabang = $data['cabang'];
$alamat = $data['alamat'];
$tanggal_kunjungan = $data['tanggal_kunjungan'];
$i[1] = $data['i1'];
$i[2] = $data['i2'];
$i[3] = $data['i3'];
$i[4] = $data['i4'];
$i[5] = $data['i5'];
$i[6] = $data['i6'];
$i[7] = $data['i7'];
$i[8] = $data['i8'];
$i[9] = $data['i9'];
$i[10] = $data['i10'];
$i[11] = $data['i11'];
$i[12] = $data['i12'];
$i[13] = $data['i13'];
$i[14] = $data['i14'];
$i[15] = $data['i15'];
$i[16] = $data['i16'];
$i[17] = $data['i17'];
$i[18] = $data['i18'];
$i[19] = $data['i19'];
$i[20] = $data['i20'];
$i[21] = $data['i21'];
$i[22] = $data['i22'];
$i[23] = $data['i23'];
$i[24] = $data['i24'];
$i[25] = $data['i25'];
$i[26] = $data['i26'];
$i[27] = $data['i27'];
$i[28] = $data['i28'];
$i[29] = $data['i29'];
$i[30] = $data['i30'];
$i[31] = $data['i31'];
$i[32] = $data['i32'];
$i[33] = $data['i33'];
$i[34] = $data['i34'];
$i[35] = $data['i35'];
$i[36] = $data['i36'];
$i[37] = $data['i37'];
$i[38] = $data['i38'];
$i[39] = $data['i39'];
$i[40] = $data['i40'];
$i[41] = $data['i41'];
$i[42] = $data['i42'];
$i[43] = $data['i43'];
$i[44] = $data['i44'];
$i[45] = $data['i45'];
$i[46] = $data['i46'];
$i[47] = $data['i47'];
$i[48] = $data['i48'];
$i[49] = $data['i49'];
$i[50] = $data['i50'];
$i[51] = $data['i51'];
$i[52] = $data['i52'];
$i[53] = $data['i53'];
$i[54] = $data['i54'];
$i[55] = $data['i55'];
$i[56] = $data['i56'];
$i[57] = $data['i57'];
$i[58] = $data['i58'];
$i[59] = $data['i59'];
$i[60] = $data['i60'];
$i[61] = $data['i61'];
$i[62] = $data['i62'];
$i[63] = $data['i63'];
$i[64] = $data['i64'];
$i[65] = $data['i65'];
$i[66] = $data['i66'];
$i[67] = $data['i67'];
$i[68] = $data['i68'];
$i[69] = $data['i69'];
$i[70] = $data['i70'];
$i[71] = $data['i71'];
$i[72] = $data['i72'];
$i[73] = $data['i73'];
$i[74] = $data['i74'];
$i[75] = $data['i75'];
$i[76] = $data['i76'];
$i[77] = $data['i77'];
$i[78] = $data['i78'];
$i[79] = $data['i79'];
$i[80] = $data['i80'];
$i[81] = $data['i81'];
$i[82] = $data['i82'];
$i[83] = $data['i83'];
$i[84] = $data['i84'];
$i[85] = $data['i85'];
$i[86] = $data['i86'];
$i[87] = $data['i87'];
$i[88] = $data['i88'];
$i[89] = $data['i89'];
$i[90] = $data['i90'];
$i[91] = $data['i91'];
$i[92] = $data['i92'];
$i[93] = $data['i93'];
$i[94] = $data['i94'];
$i[95] = $data['i95'];
$i[96] = $data['i96'];
$i[97] = $data['i97'];
$i[98] = $data['i98'];
$i[99] = $data['i99'];
$i[100] = $data['i100'];
$i[101] = $data['i101'];
$i[102] = $data['i102'];
$i[103] = $data['i103'];
$i[104] = $data['i104'];
$i[105] = $data['i105'];
$i[106] = $data['i106'];
$i[107] = $data['i107'];
$i[108] = $data['i108'];
$i[109] = $data['i109'];
$i[110] = $data['i110'];
$i[111] = $data['i111'];
$i[112] = $data['i112'];
$i[113] = $data['i113'];
$i[114] = $data['i114'];
$i[115] = $data['i115'];
$i[116] = $data['i116'];
$i[117] = $data['i117'];
$i[118] = $data['i118'];
$i[119] = $data['i119'];
$i[120] = $data['i120'];
$i[121] = $data['i121'];
$i[122] = $data['i122'];
$i[123] = $data['i123'];
$i[124] = $data['i124'];
$i[125] = $data['i125'];
$i[126] = $data['i126'];
$i[127] = $data['i127'];
$i[128] = $data['i128'];
$i[129] = $data['i129'];
$i[130] = $data['i130'];
$i[131] = $data['i131'];
$i[132] = $data['i132'];
$i[133] = $data['i133'];
$i[134] = $data['i134'];
$i[135] = $data['i135'];
$i[136] = $data['i136'];
$i[137] = $data['i137'];
$i[138] = $data['i138'];
$i[139] = $data['i139'];
$i[140] = $data['i140'];
$i[141] = $data['i141'];
$i[142] = $data['i142'];
$i[143] = $data['i143'];
$i[144] = $data['i144'];
$i[145] = $data['i145'];
$i[146] = $data['i146'];
$i[147] = $data['i147'];
$i[148] = $data['i148'];
$i[149] = $data['i149'];
$i[150] = $data['i150'];
$i[151] = $data['i151'];
$i[152] = $data['i152'];
$i[153] = $data['i153'];
$i[154] = $data['i154'];
$i[155] = $data['i155'];
$i[156] = $data['i156'];
$i[157] = $data['i157'];
$i[158] = $data['i158'];
$i[159] = $data['i159'];
$i[160] = $data['i160'];
$i[161] = $data['i161'];
$i[162] = $data['i162'];
$i[163] = $data['i163'];
$i[164] = $data['i164'];
$i[165] = $data['i165'];
$i[166] = $data['i166'];
$i[167] = $data['i167'];
$i[168] = $data['i168'];
$i[169] = $data['i169'];
$i[170] = $data['i170'];
$i[171] = $data['i171'];
$i[172] = $data['i172'];
$i[173] = $data['i173'];
$i[174] = $data['i174'];
$i[175] = $data['i175'];
$i[176] = $data['i176'];
$i[177] = $data['i177'];
$i[178] = $data['i178'];
$i[179] = $data['i179'];
$i[180] = $data['i180'];
$i[181] = $data['i181'];
$i[182] = $data['i182'];
$i[183] = $data['i183'];
$i[184] = $data['i184'];
$i[185] = $data['i185'];
$i[186] = $data['i186'];
$i[187] = $data['i187'];
$i[188] = $data['i188'];
$i[189] = $data['i189'];
$i[190] = $data['i190'];
$i[191] = $data['i191'];
$i[192] = $data['i192'];
$i[193] = $data['i193'];
$i[194] = $data['i194'];
$i[195] = $data['i195'];
$i[196] = $data['i196'];
$i[197] = $data['i197'];
$i[198] = $data['i198'];
$i[199] = $data['i199'];
$i[200] = $data['i200'];
$i[201] = $data['i201'];
$i[202] = $data['i202'];
$i[203] = $data['i203'];
$i[204] = $data['i204'];
$i[205] = $data['i205'];
$i[206] = $data['i206'];
$i[207] = $data['i207'];
$i[208] = $data['i208'];
$i[209] = $data['i209'];
$i[210] = $data['i210'];
$i[211] = $data['i211'];
$i[212] = $data['i212'];
$i[213] = $data['i213'];

}
?>




<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse"><strong>UBAH CHECKLIST SERVER  HARDWARE</strong></div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST">
						    <div class="form-group">
									<label for="exampleInputName">Cabang</label>
									<br>
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
									<input type="text" class="form-control" id="exampleInputName" name="alamat" ="" value="<?php echo $alamat; ?>">
								</div>
                                
                                <div class="form-group">
									<label for="exampleInputPassword1">Tanggal Kunjungan</label>
									<input type="date" class="form-control" id="exampleInputName" placeholder="" name="tanggal_kunjungan" ="" value="<?php echo $tanggal_kunjungan; ?>">
								</div>
                                
                                
                                
                            <p>&nbsp;</p>
                              <?php
							  /*create table
							  for($i=1;$i<=213;$i++){
								  echo ", i".$i." text";
							  }
							  */
							  /*create colom
							  for($i=1;$i<=213;$i++){
								  echo ", i".$i."";
							  }
							  */
							  /*create post
							  for($i=1;$i<=213;$i++){
								  echo ", '\".\$_POST['i".$i."'].\"'";
							  }		
							  */					  
							  
							  $input = 1;
							  ?>
                                <table border="1">
                                
                                  <tr>
                                    <td rowspan="2"><div align="center"><strong>No. </strong></div></td>
                                    <td colspan="4" rowspan="2"><div align="center"><strong>Item </strong></div></td>
                                    <td colspan="8"><div align="center"><strong>Hasil</strong></div></td>
                                    <td colspan="4" rowspan="2"><div align="center"><strong>Keterangan</strong></div></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2"><div align="center"><strong>Server    DC</strong></div></td>
                                    <td colspan="2"><div align="center"><strong>Server ICONS</strong></div></td>
                                    <td colspan="2"><div align="center"><strong>PC Server Icons</strong></div></td>
                                    <td colspan="2"><div align="center"><strong>Server SVS</strong></div></td>
                                  </tr>
                                  <tr>
                                    <td colspan="17"><strong>I.    Inventory Perangkat keras</strong></td>
                                  </tr>
                                  <tr>
                                    <td>1</td>
                                    <td colspan="4">Jenis (Server Name)</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td colspan="4">Merk</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td colspan="4">Type </td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td colspan="4">S/N</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td colspan="4">Restart Server</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>6</td>
                                    <td colspan="4">Status</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td colspan="17"><strong>II.    Detail Spesifikasi  perangkat Keras</strong></td>
                                  </tr>
                                  <tr>
                                    <td>7</td>
                                    <td colspan="4">Processor</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>8</td>
                                    <td colspan="4">Konfigurasi RAID</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>9</td>
                                    <td colspan="4">Kapasitas Hardisk</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>10</td>
                                    <td colspan="4">Free disk Space</td>
                                    <td colspan="2">drive C:<input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="2">drive C:<input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="2">drive C:<input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="2">drive C:<input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">&nbsp;</td>
                                    <td colspan="2">drive D:<input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="2">drive D:<input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="2">drive D:<input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="2">drive D:<input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>11</td>
                                    <td colspan="4">Kapasitas Memory</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>12</td>
                                    <td colspan="4">Kondisi SCSI Controler</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>13</td>
                                    <td colspan="4">Kondisi CD Writer</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>14</td>
                                    <td colspan="4">Kondisi KVM</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>15</td>
                                    <td colspan="4">Kondisi Keyboard</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>16</td>
                                    <td colspan="4">Kondisi  Mouse</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>17</td>
                                    <td colspan="4">Kondisi Monitor</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>18</td>
                                    <td colspan="4">Kondisi NIC</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>19</td>
                                    <td colspan="4">Cek Kabel Power dan Kabel data LAN di</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>20</td>
                                    <td colspan="4">Kondisi Power Supply/Fan</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>21</td>
                                    <td colspan="4">Pembersihan dari debu</td>
                                    <td colspan="2">&nbsp;</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td colspan="17"><strong>I.3 CHECKLIST SERVER     HARDWARE</strong></td>
                                  </tr>
                                  <tr>
                                    <td colspan="17"><strong>III.    Operating System &amp; Software</strong></td>
                                  </tr>
                                  <tr>
                                    <td>22</td>
                                    <td colspan="4">Check Microsoft Windows    2003 normally</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>23</td>
                                    <td colspan="4">Check SQL Server 2000 SP3</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>24</td>
                                    <td colspan="4">Pembersihan file garbage</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">-    Hapus file update AV yg lama (file XD9) di drive C dan D \icons</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4">Sisakan 1 file .XDB untuk tanggal yang tertera</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">- Hapus File ' At ' di    Schedule Task</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">-    Hapus File backup workflow di\icons\database</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>25</td>
                                    <td colspan="4">Synchronize    Time Server(dari command prompt ketik &quot;net time /query&quot;. Pastikan.    The current SNTP value mengarah ke 192.168.8.12)</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>26</td>
                                    <td colspan="4">Check Regional Setting (    English Australia)</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>27</td>
                                    <td colspan="4">Copy Folder ICONS ke PC    Server SVS</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4">Hanya KCU/atau yg ada Server SVS</td>
                                  </tr>
                                  <tr>
                                    <td>28</td>
                                    <td colspan="4">Check Symantec Antivirus</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4" rowspan="3">Lakukan Update AV dan file XUB    terbaru di\icons</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">a. Program version</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">b. Virus definition file</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>29</td>
                                    <td colspan="4">Pengecekan WSUS</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />
                                    <td colspan="4" rowspan="2">Lihat Panduan instalasi WSUS hal 12 s/d 15</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">a.    Pastikan server mengarah ke server update brwsus01' port    80</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">b. Check gpedil.msc</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4" rowspan="2">Lihat Panduan instalasi WSUS hal    16 s/d terakhir</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">c. Check services.msc</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td colspan="17"><strong>IV. Tes Koneksi</strong></td>
                                  </tr>
                                  <tr>
                                    <td>30</td>
                                    <td colspan="4">Test    Konektifitas dari server cabang ke Host BNI kantor besar (192.168.12.1)</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /><br />   Average Time = <input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />Ms</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /><br />Average Time = <input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />Ms</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /><br />Average Time = <input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" />Ms</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>31</td>
                                    <td colspan="4">Test    Konektifitas dari server cabang ke gateway (10.xxx.xxx.126)</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  
                            </table>
                                <p>&nbsp;</p>
                                <p><strong>V. Server di luar Icons</strong></p>
                                <table width="100%" border="1" cellspacing="0" cellpadding="0">
                                
                                  <tr>
                                    <td rowspan="2" width="20"><strong>No. </strong></td>
                                    <td colspan="4" rowspan="2"><div align="center"><strong>Server di luar iCONS</strong></div></td>
                                    <td colspan="2" rowspan="2"><div align="center"><strong>TYPE / SN</strong></div></td>
                                    <td colspan="4"><div align="center"><strong>Konfigurasi</strong></div></td>
                                    <td colspan="2" rowspan="2"><div align="center"><strong>Aplikasi</strong></div></td>
                                    <td colspan="4" rowspan="2"><div align="center"><strong>Status</strong></div></td>
                                  </tr>
                                  <tr>
                                    <td colspan="2"><div align="center"><strong>Hardware</strong></div></td>
                                    <td colspan="2"><div align="center"><strong>Software (OS)</strong></div></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" value="<?php echo $i[$input++];?>"  style="width:30px" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" value="<?php echo $i[$input++];?>"  style="width:30px" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" value="<?php echo $i[$input++];?>"  style="width:30px" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                </table>
                                <p>&nbsp;</p>
                            <button type="submit" name="ubah" class="btn btn-info">Ubah</button>
                            <a href="?nav=serverhardwaredata" name="kembali" class="btn btn-warning">Kembali</a>
						  </form>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
