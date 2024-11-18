<style>
input{
	width:100%;
}
</style>

<?php
$query = mysqli_query($koneksi, "SELECT id, cabang, alamat, tanggal_kunjungan, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36, i37, i38, i39, i40, i41, i42, i43, i44, i45, i46, i47, i48, i49, i50, i51, i52, i53, i54, i55, i56, i57, i58, i59, i60, i61, i62, i63, i64, i65, i66, i67, i68, i69, i70, i71, i72, i73, i74, i75, i76, i77, i78, i79, i80, i81, i82, i83, i84, i85, i86, i87, i88, i89, i90, i91, i92, i93, i94, i95, i96, i97, i98, i99, i100, i101, i102, i103, i104, i105, i106, i107, i108, i109, i110, i111, i112, i113, i114, i115, i116, i117, i118, i119, i120, i121, i122, i123, i124, i125, i126, i127, i128, i129, i130, i131, i132, i133, i134, i135, i136, i137, i138, i139, i140, i141, i142, i143, i144, i145, i146, i147, i148, i149, i150, i151, i152, i153, i154, i155, i156, i157, i158, i159, i160, i161, i162, i163, i164, i165, i166, i167, i168, i169, i170, i171, i172, i173, i174, i175, i176, i177, i178, i179, i180, i181, i182, i183, i184, i185, i186, i187, i188, i189, i190, i191, i192, i193, i194, i195, i196, i197, i198, i199, i200, i201, i202, i203, i204, i205, i206, i207, i208, i209, i210, i211, i212, i213, i214, i215, i216 FROM serverhardware WHERE id='".$_GET['id']."'");
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
$i[214] = $data['i214'];
$i[215] = $data['i215'];
$i[216] = $data['i216'];
}
?>




<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">CHECKLIST SERVER  HARDWARE</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST">
							 <div class="form-group">
									<label for="exampleInputPassword1">Cabang</label>
									<input type="" class="form-control" id="exampleInputName" name="cabang" readonly="readonly" value="<?php echo $cabang; ?>">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Alamat</label>
									<input type="" class="form-control" id="exampleInputName" name="alamat" readonly="readonly" value="<?php echo $alamat; ?>">
								</div>
                                
                                <div class="form-group">
									<label for="exampleInputPassword1">Tanggal Kunjungan</label>
									<input type="date" class="form-control" id="exampleInputName" placeholder="" name="tanggal_kunjungan" readonly="readonly" value="<?php echo $tanggal_kunjungan; ?>">
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
                                </div>
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
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>2</td>
                                    <td colspan="4">Merk</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>3</td>
                                    <td colspan="4">Type </td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>4</td>
                                    <td colspan="4">S/N</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>5</td>
                                    <td colspan="4">Restart Server</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" />
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>6</td>
                                    <td colspan="4">Status</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td colspan="17"><strong>II.    Detail Spesifikasi  perangkat Keras</strong></td>
                                  </tr>
                                  <tr>
                                    <td>7</td>
                                    <td colspan="4">Processor</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>8</td>
                                    <td colspan="4">Konfigurasi RAID</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>9</td>
                                    <td colspan="4">Kapasitas Hardisk</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>10</td>
                                    <td colspan="4">Free disk Space</td>
                                    <td colspan="2">drive C:<input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="2">drive C:<input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="2">drive C:<input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="2">drive C:<input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">&nbsp;</td>
                                    <td colspan="2">drive D:<input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="2">drive D:<input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="2">drive D:<input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="2">drive D:<input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" />GB</td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>11</td>
                                    <td colspan="4">Kapasitas Memory</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>12</td>
                                    <td colspan="4">Kondisi SCSI Controler</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>13</td>
                                    <td colspan="4">Kondisi CD Writer</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>14</td>
                                    <td colspan="4">Kondisi KVM</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>15</td>
                                    <td colspan="4">Kondisi Keyboard</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>16</td>
                                    <td colspan="4">Kondisi  Mouse</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>17</td>
                                    <td colspan="4">Kondisi Monitor</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>18</td>
                                    <td colspan="4">Kondisi NIC</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>19</td>
                                    <td colspan="4">Cek Kabel Power dan Kabel data LAN di</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>20</td>
                                    <td colspan="4">Kondisi Power Supply/Fan</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>21</td>
                                    <td colspan="4">Pembersihan dari debu</td>
                                    <td colspan="2">&nbsp;</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
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
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>23</td>
                                    <td colspan="4">Check SQL Server 2000 SP3</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>24</td>
                                    <td colspan="4">Pembersihan file garbage</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">-    Hapus file update AV yg lama (file XD9) di drive C dan D \icons</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4">Sisakan 1 file .XDB untuk tanggal yang tertera</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">- Hapus File ' At ' di    Schedule Task </td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">-    Hapus File backup workflow di\icons\database</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>25</td>
                                    <td colspan="4">Synchronize    Time Server(dari command prompt ketik &quot;net time /query&quot;. Pastikan.    The current SNTP value mengarah ke 192.168.8.12)</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>26</td>
                                    <td colspan="4">Check Regional Setting (    English Australia)</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>27</td>
                                    <td colspan="4">Copy Folder ICONS ke PC    Server SVS</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4">Hanya KCU/atau yg ada Server SVS</td>
                                  </tr>
                                  <tr>
                                    <td>28</td>
                                    <td colspan="4">Check Symantec Antivirus</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4" rowspan="3">Lakukan Update AV dan file XUB    terbaru di\icons</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">a. Program version</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" />
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">b. Virus definition file</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>29</td>
                                    <td colspan="4">Pengecekan WSUS</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" />
                                    <td colspan="4" rowspan="2">Lihat Panduan instalasi WSUS hal 12 s/d 15</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">a.    Pastikan server mengarah ke server update brwsus01' port    80</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" />
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">b. Check gpedil.msc</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4" rowspan="2">Lihat Panduan instalasi WSUS hal    16 s/d terakhir</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td colspan="4">c. Check services.msc</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td colspan="17"><strong>IV. Tes Koneksi</strong></td>
                                  </tr>
                                  <tr>
                                    <td>30</td>
                                    <td colspan="4">Test    Konektifitas dari server cabang ke Host BNI kantor besar (192.168.12.1)</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /><br />   Average Time = <input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" />Ms</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /><br />Average Time = <input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" />Ms</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /><br />Average Time = <input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" />Ms</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td>31</td>
                                    <td colspan="4">Test    Konektifitas dari server cabang ke gateway (10.xxx.xxx.126)</td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
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
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" value="<?php echo $i[$input++];?>"  style="width:30px" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" value="<?php echo $i[$input++];?>"  style="width:30px" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="2"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td colspan="4"><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                </table>
                                <br />
                          
<a href="printserverhardware.php?id=<?php echo $_GET['id']; ?>" target="_blank" class="btn btn-warning">Cetak</a>
<a href="?nav=serverhardwaredata" class="btn btn-primary">Kembali</a> 
						  </form>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
