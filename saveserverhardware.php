<style>
input{
	width:100%;
}
</style>


<?php
$koneksi = mysqli_connect("localhost", "root", "", "pmbni");
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Cheklist_Server_Hardware.xls");
$query = mysqli_query($koneksi, "SELECT id, cabang, alamat, tanggal_kunjungan, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36, i37, i38, i39, i40, i41, i42, i43, i44, i45, i46, i47, i48, i49, i50, i51, i52, i53, i54, i55, i56, i57, i58, i59, i60, i61, i62, i63, i64, i65, i66, i67, i68, i69, i70, i71, i72, i73, i74, i75, i76, i77, i78, i79, i80, i81, i82, i83, i84, i85, i86, i87, i88, i89, i90, i91, i92, i93, i94, i95, i96, i97, i98, i99, i100, i101, i102, i103, i104, i105, i106, i107, i108, i109, i110, i111, i112, i113, i114, i115, i116, i117, i118, i119, i120, i121, i122, i123, i124, i125, i126, i127, i128, i129, i130, i131, i132, i133, i134, i135, i136, i137, i138, i139, i140, i141, i142, i143, i144, i145, i146, i147, i148, i149, i150, i151, i152, i153, i154, i155, i156, i157, i158, i159, i160, i161, i162, i163, i164, i165, i166, i167, i168, i169, i170, i171, i172, i173, i174, i175, i176, i177, i178, i179, i180, i181, i182, i183, i184, i185, i186, i187, i188, i189, i190, i191, i192, i193, i194, i195, i196, i197, i198, i199, i200, i201, i202, i203, i204, i205, i206, i207, i208, i209, i210, i211, i212, i213 FROM serverhardware WHERE id='".$_GET['id']."'");
										while($data = mysqli_fetch_array($query)){
$id = $data['id'];
$cabang = $data['cabang'];
$alamat = $data['alamat'];
$tanggal_kunjungan = $data['tanggal_kunjungan'];
$i1 = $data['i1'];
$i2 = $data['i2'];
$i3 = $data['i3'];
$i4 = $data['i4'];
$i5 = $data['i5'];
$i6 = $data['i6'];
$i7 = $data['i7'];
$i8 = $data['i8'];
$i9 = $data['i9'];
$i10 = $data['i10'];
$i11 = $data['i11'];
$i12 = $data['i12'];
$i13 = $data['i13'];
$i14 = $data['i14'];
$i15 = $data['i15'];
$i16 = $data['i16'];
$i17 = $data['i17'];
$i18 = $data['i18'];
$i19 = $data['i19'];
$i20 = $data['i20'];
$i21 = $data['i21'];
$i22 = $data['i22'];
$i23 = $data['i23'];
$i24 = $data['i24'];
$i25 = $data['i25'];
$i26 = $data['i26'];
$i27 = $data['i27'];
$i28 = $data['i28'];
$i29 = $data['i29'];
$i30 = $data['i30'];
$i31 = $data['i31'];
$i32 = $data['i32'];
$i33 = $data['i33'];
$i34 = $data['i34'];
$i35 = $data['i35'];
$i36 = $data['i36'];
$i37 = $data['i37'];
$i38 = $data['i38'];
$i39 = $data['i39'];
$i40 = $data['i40'];
$i41 = $data['i41'];
$i42 = $data['i42'];
$i43 = $data['i43'];
$i44 = $data['i44'];
$i45 = $data['i45'];
$i46 = $data['i46'];
$i47 = $data['i47'];
$i48 = $data['i48'];
$i49 = $data['i49'];
$i50 = $data['i50'];
$i51 = $data['i51'];
$i52 = $data['i52'];
$i53 = $data['i53'];
$i54 = $data['i54'];
$i55 = $data['i55'];
$i56 = $data['i56'];
$i57 = $data['i57'];
$i58 = $data['i58'];
$i59 = $data['i59'];
$i60 = $data['i60'];
$i61 = $data['i61'];
$i62 = $data['i62'];
$i63 = $data['i63'];
$i64 = $data['i64'];
$i65 = $data['i65'];
$i66 = $data['i66'];
$i67 = $data['i67'];
$i68 = $data['i68'];
$i69 = $data['i69'];
$i70 = $data['i70'];
$i71 = $data['i71'];
$i72 = $data['i72'];
$i73 = $data['i73'];
$i74 = $data['i74'];
$i75 = $data['i75'];
$i76 = $data['i76'];
$i77 = $data['i77'];
$i78 = $data['i78'];
$i79 = $data['i79'];
$i80 = $data['i80'];
$i81 = $data['i81'];
$i82 = $data['i82'];
$i83 = $data['i83'];
$i84 = $data['i84'];
$i85 = $data['i85'];
$i86 = $data['i86'];
$i87 = $data['i87'];
$i88 = $data['i88'];
$i89 = $data['i89'];
$i90 = $data['i90'];
$i91 = $data['i91'];
$i92 = $data['i92'];
$i93 = $data['i93'];
$i94 = $data['i94'];
$i95 = $data['i95'];
$i96 = $data['i96'];
$i97 = $data['i97'];
$i98 = $data['i98'];
$i99 = $data['i99'];
$i100 = $data['i100'];
$i101 = $data['i101'];
$i102 = $data['i102'];
$i103 = $data['i103'];
$i104 = $data['i104'];
$i105 = $data['i105'];
$i106 = $data['i106'];
$i107 = $data['i107'];
$i108 = $data['i108'];
$i109 = $data['i109'];
$i110 = $data['i110'];
$i111 = $data['i111'];
$i112 = $data['i112'];
$i113 = $data['i113'];
$i114 = $data['i114'];
$i115 = $data['i115'];
$i116 = $data['i116'];
$i117 = $data['i117'];
$i118 = $data['i118'];
$i119 = $data['i119'];
$i120 = $data['i120'];
$i121 = $data['i121'];
$i122 = $data['i122'];
$i123 = $data['i123'];
$i124 = $data['i124'];
$i125 = $data['i125'];
$i126 = $data['i126'];
$i127 = $data['i127'];
$i128 = $data['i128'];
$i129 = $data['i129'];
$i130 = $data['i130'];
$i131 = $data['i131'];
$i132 = $data['i132'];
$i133 = $data['i133'];
$i134 = $data['i134'];
$i135 = $data['i135'];
$i136 = $data['i136'];
$i137 = $data['i137'];
$i138 = $data['i138'];
$i139 = $data['i139'];
$i140 = $data['i140'];
$i141 = $data['i141'];
$i142 = $data['i142'];
$i143 = $data['i143'];
$i144 = $data['i144'];
$i145 = $data['i145'];
$i146 = $data['i146'];
$i147 = $data['i147'];
$i148 = $data['i148'];
$i149 = $data['i149'];
$i150 = $data['i150'];
$i151 = $data['i151'];
$i152 = $data['i152'];
$i153 = $data['i153'];
$i154 = $data['i154'];
$i155 = $data['i155'];
$i156 = $data['i156'];
$i157 = $data['i157'];
$i158 = $data['i158'];
$i159 = $data['i159'];
$i160 = $data['i160'];
$i161 = $data['i161'];
$i162 = $data['i162'];
$i163 = $data['i163'];
$i164 = $data['i164'];
$i165 = $data['i165'];
$i166 = $data['i166'];
$i167 = $data['i167'];
$i168 = $data['i168'];
$i169 = $data['i169'];
$i170 = $data['i170'];
$i171 = $data['i171'];
$i172 = $data['i172'];
$i173 = $data['i173'];
$i174 = $data['i174'];
$i175 = $data['i175'];
$i176 = $data['i176'];
$i177 = $data['i177'];
$i178 = $data['i178'];
$i179 = $data['i179'];
$i180 = $data['i180'];
$i181 = $data['i181'];
$i182 = $data['i182'];
$i183 = $data['i183'];
$i184 = $data['i184'];
$i185 = $data['i185'];
$i186 = $data['i186'];
$i187 = $data['i187'];
$i188 = $data['i188'];
$i189 = $data['i189'];
$i190 = $data['i190'];
$i191 = $data['i191'];
$i192 = $data['i192'];
$i193 = $data['i193'];
$i194 = $data['i194'];
$i195 = $data['i195'];    
$i196 = $data['i196'];
$i197 = $data['i197'];
$i198 = $data['i198'];
$i199 = $data['i199'];
$i200 = $data['i200'];
$i201 = $data['i201'];
$i202 = $data['i202'];
$i203 = $data['i203'];
$i204 = $data['i204'];
$i205 = $data['i205'];
$i206 = $data['i206'];
$i207 = $data['i207'];
$i208 = $data['i208'];
$i209 = $data['i209'];
$i210 = $data['i210'];
$i211 = $data['i211'];
$i212 = $data['i212'];
$i213 = $data['i213'];
}
?>

<p><strong>Laporan Preventive Maintenance I/II Tahun </strong><?php echo substr($tanggal_kunjungan,0,4); ?>
<p>
  <center>
    <strong>I.3 CHECKLIST SERVER HARDWARE</strong>
  </center>
  <br />
  <strong>Cabang :</strong> <?php echo $cabang; ?><br />
  <strong>Alamat :</strong> <?php echo $alamat; ?><br />
 <strong>Tanggal Kunjungan : </strong><?php echo date('d-m-Y',strtotime($tanggal_kunjungan)); ?><br />
<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header --><!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST">
							 
								
                                
                                <div class="form-group">
									
									<br />
									
                                </div>
                                <table border="1">
                                
                                  <tr>
                                    <td rowspan="2"><div align="center"><strong>No.</strong></div></td>
                                    <td colspan="4" rowspan="2"><div align="center"><strong>Item</strong></div></td>
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
                                    <td><div align="left">1</div></td>
                                    <td colspan="4">Jenis (Server Name)</td>
                                    <td colspan="2"><?php echo $i1; ?></td>
                                    <td colspan="2"><?php echo $i2; ?></td>
                                    <td colspan="2"><?php echo $i3; ?></td>
                                    <td colspan="2"><?php echo $i4; ?></td>
                                    <td colspan="4"><?php echo $i5; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">2</div></td>
                                    <td colspan="4">Merk</td>
                                    <td colspan="2"><?php echo $i6; ?></td>
                                    <td colspan="2"><?php echo $i7; ?></td>
                                    <td colspan="2"><?php echo $i8; ?></td>
                                    <td colspan="2"><?php echo $i9; ?></td>
                                    <td colspan="4"><?php echo $i10; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">3</div></td>
                                    <td colspan="4">Type</td>
                                    <td colspan="2"><?php echo $i11; ?></td>
                                    <td colspan="2"><?php echo $i12; ?></td>
                                    <td colspan="2"><?php echo $i13; ?></td>
                                    <td colspan="2"><?php echo $i14; ?></td>
                                    <td colspan="4"><?php echo $i15; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">4</div></td>
                                    <td colspan="4">S/N</td>
                                    <td colspan="2"><?php echo $i16; ?></td>
                                    <td colspan="2"><?php echo $i17; ?></td>
                                    <td colspan="2"><?php echo $i18; ?></td>
                                    <td colspan="2"><?php echo $i19; ?></td>
                                    <td colspan="4"><?php echo $i20; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">5</div></td>
                                    <td colspan="4">Restart Server</td>
                                    <td colspan="2"><?php echo $i21; ?></td>
                                    <td colspan="2"><?php echo $i22; ?>
                                    <td colspan="2"><?php echo $i23; ?></td>
                                    <td colspan="2"><?php echo $i24; ?></td>
                                    <td colspan="4"><?php echo $i25; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">6</div></td>
                                    <td colspan="4">Status</td>
                                    <td colspan="2"><?php echo $i26; ?></td>
                                    <td colspan="2"><?php echo $i27; ?></td>
                                    <td colspan="2"><?php echo $i28; ?></td>
                                    <td colspan="2"><?php echo $i29; ?></td>
                                    <td colspan="4"><?php echo $i30; ?></td>
                                  </tr>
                                  <tr>
                                    <td colspan="17"><strong>II. Detail Spesifikasi Perangkat Keras</strong></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">7</div></td>
                                    <td colspan="4">Processor</td>
                                    <td colspan="2"><?php echo $i31; ?></td>
                                    <td colspan="2"><?php echo $i32; ?></td>
                                    <td colspan="2"><?php echo $i33; ?></td>
                                    <td colspan="2"><?php echo $i34; ?></td>
                                    <td colspan="4"><?php echo $i35; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">8</div></td>
                                    <td colspan="4">Konfigurasi RAID</td>
                                    <td colspan="2"><?php echo $i36; ?></td>
                                    <td colspan="2"><?php echo $i37; ?></td>
                                    <td colspan="2"><?php echo $i38; ?></td>
                                    <td colspan="2"><?php echo $i39; ?></td>
                                    <td colspan="4"><?php echo $i40; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">9</div></td>
                                    <td colspan="4">Kapasitas Hardisk</td>
                                    <td colspan="2"><?php echo $i41; ?></td>
                                    <td colspan="2"><?php echo $i42; ?></td>
                                    <td colspan="2"><?php echo $i43; ?></td>
                                    <td colspan="2"><?php echo $i44; ?></td>
                                    <td colspan="4">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">10</div></td>
                                    <td colspan="4">Free disk Space</td>
                                    <td colspan="2">drive C:<?php echo $i45; ?>GB</td>
                                    <td colspan="2">drive C:<?php echo $i46; ?>GB</td>
                                    <td colspan="2">drive C:<?php echo $i47; ?>GB</td>
                                    <td colspan="2">drive C:<?php echo $i48; ?>GB</td>
                                    <td colspan="4"><?php echo $i49; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                    <td colspan="4">&nbsp;</td>
                                    <td colspan="2">drive D:<?php echo $i50; ?>GB</td>
                                    <td colspan="2">drive D:<?php echo $i51; ?>GB</td>
                                    <td colspan="2">drive D:<?php echo $i52; ?>GB</td>
                                    <td colspan="2">drive D:<?php echo $i53; ?>GB</td>
                                    <td colspan="4"><?php echo $i54; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">11</div></td>
                                    <td colspan="4">Kapasitas Memory</td>
                                    <td colspan="2"><?php echo $i55; ?></td>
                                    <td colspan="2"><?php echo $i56; ?></td>
                                    <td colspan="2"><?php echo $i57; ?></td>
                                    <td colspan="2"><?php echo $i58; ?></td>
                                    <td colspan="4"><?php echo $i59; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">12</div></td>
                                    <td colspan="4">Kondisi SCSI Controler</td>
                                    <td colspan="2"><?php echo $i60; ?></td>
                                    <td colspan="2"><?php echo $i61; ?></td>
                                    <td colspan="2"><?php echo $i62; ?></td>
                                    <td colspan="2"><?php echo $i63; ?></td>
                                    <td colspan="4"><?php echo $i64; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">13</div></td>
                                    <td colspan="4">Kondisi CD Writer</td>
                                    <td colspan="2"><?php echo $i65; ?></td>
                                    <td colspan="2"><?php echo $i66; ?></td>
                                    <td colspan="2"><?php echo $i67; ?></td>
                                    <td colspan="2"><?php echo $i68; ?></td>
                                    <td colspan="4"><?php echo $i69; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">14</div></td>
                                    <td colspan="4">Kondisi KVM</td>
                                    <td colspan="2"><?php echo $i70; ?></td>
                                    <td colspan="2"><?php echo $i71; ?></td>
                                    <td colspan="2"><?php echo $i72; ?></td>
                                    <td colspan="2"><?php echo $i73; ?></td>
                                    <td colspan="4"><?php echo $i74; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">15</div></td>
                                    <td colspan="4">Kondisi Keyboard</td>
                                    <td colspan="2"><?php echo $i75; ?></td>
                                    <td colspan="2"><?php echo $i76; ?></td>
                                    <td colspan="2"><?php echo $i77; ?></td>
                                    <td colspan="2"><?php echo $i78; ?></td>
                                    <td colspan="4"><?php echo $i79; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">16</div></td>
                                    <td colspan="4">Kondisi Mouse</td>
                                    <td colspan="2"><?php echo $i80; ?></td>
                                    <td colspan="2"><?php echo $i81; ?></td>
                                    <td colspan="2"><?php echo $i82; ?></td>
                                    <td colspan="2"><?php echo $i83; ?></td>
                                    <td colspan="4"><?php echo $i84; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">17</div></td>
                                    <td colspan="4">Kondisi Monitor</td>
                                    <td colspan="2"><?php echo $i85; ?></td>
                                    <td colspan="2"><?php echo $i86; ?></td>
                                    <td colspan="2"><?php echo $i87; ?></td>
                                    <td colspan="2"><?php echo $i88; ?></td>
                                   <td colspan="4"><?php echo $i89; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">18</div></td>
                                    <td colspan="4">Kondisi NIC</td>
                                    <td colspan="2"><?php echo $i90; ?></td>
                                    <td colspan="2"><?php echo $i91; ?></td>
                                    <td colspan="2"><?php echo $i92; ?></td>
                                    <td colspan="2"><?php echo $i93; ?></td>
                                    <td colspan="4"><?php echo $i94; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">19</div></td>
                                    <td colspan="4">Cek Kabel Power dan Kabel data LAN di</td>
                                    <td colspan="2"><?php echo $i95; ?></td>
                                    <td colspan="2"><?php echo $i96; ?></td>
                                    <td colspan="2"><?php echo $i97; ?></td>
                                    <td colspan="2"><?php echo $i98; ?></td>
                                    <td colspan="4"><?php echo $i99; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">20</div></td>
                                    <td colspan="4">Kondisi Power Supply/Fan</td>
                                    <td colspan="2"><?php echo $i100; ?></td>
                                    <td colspan="2"><?php echo $i101; ?></td>
                                    <td colspan="2"><?php echo $i102; ?></td>
                                    <td colspan="2"><?php echo $i103; ?></td>
                                    <td colspan="4"><?php echo $i104; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">21</div></td>
                                    <td colspan="4">Pembersihan dari debu</td>
                                    <td colspan="2">&nbsp;</td>
                                    <td colspan="2"><?php echo $i105; ?></td>
                                    <td colspan="2"><?php echo $i106; ?></td>
                                    <td colspan="2"><?php echo $i107; ?></td>
                                    <td colspan="4"><?php echo $i108; ?></td>
                                  </tr>
                                
                                  <tr>
                                    <td colspan="17"><strong>I.3 CHECKLIST SERVER HARDWARE</strong></td>
                                  </tr>
                                  <tr>
                                    <td colspan="17"><strong>III.    Operating System &amp; Software</strong></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">22</div></td>
                                    <td colspan="4">Check Microsoft Windows    2003 normally</td>
                                    <td colspan="2"><?php echo $i109; ?></td>
                                    <td colspan="2"><?php echo $i110; ?></td>
                                    <td colspan="2"><?php echo $i111; ?></td>
                                    <td colspan="2"><?php echo $i112; ?></td>
                                    <td colspan="4"><?php echo $i113; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">23</div></td>
                                    <td colspan="4">Check SQL Server 2000 SP3</td>
                                    <td colspan="2"><?php echo $i114; ?></td>
                                    <td colspan="2"><?php echo $i115; ?></td>
                                    <td colspan="2"><?php echo $i116; ?></td>
                                    <td colspan="2"><?php echo $i117; ?></td>
                                    <td colspan="4"><?php echo $i118; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">24</div></td>
                                    <td colspan="4">Pembersihan file garbage</td>
                                    <td colspan="2"><?php echo $i119; ?></td>
                                    <td colspan="2"><?php echo $i120; ?></td>
                                    <td colspan="2"><?php echo $i121; ?></td>
                                    <td colspan="2"><?php echo $i122; ?></td>
                                    <td colspan="4"><?php echo $i123; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                    <td colspan="4">-    Hapus file update AV yg lama (file XD9) di drive C dan d \icons</td>
                                    <td colspan="2"><?php echo $i124; ?></td>
                                    <td colspan="2"><?php echo $i125; ?></td>
                                    <td colspan="2"><?php echo $i126; ?></td>
                                    <td colspan="2"><?php echo $i127; ?></td>
                                    <td colspan="4">Sisakan 1 file .XDB untuk tanggal yang tertera</td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                    <td colspan="4">- Hapus File ' At ' di    Schedule Task </td>
                                    <td colspan="2"><?php echo $i128; ?></td>
                                    <td colspan="2"><?php echo $i129; ?></td>
                                    <td colspan="2"><?php echo $i130; ?></td>
                                    <td colspan="2"><?php echo $i131; ?></td>
                                    <td colspan="4"><?php echo $i132; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                    <td colspan="4">-    Hapus File backup workflow di\icons\database</td>
                                    <td colspan="2"><?php echo $i133; ?></td>
                                    <td colspan="2"><?php echo $i134; ?></td>
                                    <td colspan="2"><?php echo $i135; ?></td>
                                    <td colspan="2"><?php echo $i136; ?></td>
                                    <td colspan="4"><?php echo $i137; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">25</div></td>
                                    <td colspan="4">Synchronize    Time Server(dari command prompt ketik &quot;net time /query&quot;. Pastikan.    The current SNTP value mengarah ke 192.168.8.12)</td>
                                    <td colspan="2"><?php echo $i138; ?></td>
                                    <td colspan="2"><?php echo $i139; ?></td>
                                    <td colspan="2"><?php echo $i140; ?></td>
                                    <td colspan="2"><?php echo $i141; ?></td>
                                    <td colspan="4"><?php echo $i142; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">26</div></td>
                                    <td colspan="4">Check Regional Setting (    English Australia)</td>
                                    <td colspan="2"><?php echo $i143; ?></td>
                                    <td colspan="2"><?php echo $i144; ?></td>
                                    <td colspan="2"><?php echo $i145; ?></td>
                                    <td colspan="2"><?php echo $i146; ?></td>
                                    <td colspan="4"><?php echo $i147; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">27</div></td>
                                    <td colspan="4">Copy Folder ICONS ke PC    Server SVS</td>
                                    <td colspan="2"><?php echo $i148; ?></td>
                                    <td colspan="2"><?php echo $i149; ?></td>
                                    <td colspan="2"><?php echo $i150; ?></td>
                                    <td colspan="2"><?php echo $i151; ?></td>
                                    <td colspan="4">Hanya KCU/atau yg ada Server SVS</td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">28</div></td>
                                    <td colspan="4">Check Symantec Antivirus</td>
                                    <td colspan="2"><?php echo $i152; ?></td>
                                    <td colspan="2"><?php echo $i153; ?></td>
                                    <td colspan="2"><?php echo $i154; ?></td>
                                    <td colspan="2"><?php echo $i155; ?></td>
                                    <td colspan="4" rowspan="3">Lakukan Update AV dan file XUB    terbaru di\icons</td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                    <td colspan="4">a. Program version</td>
                                    <td colspan="2"><?php echo $i156; ?></td>
                                    <td colspan="2"><?php echo $i157; ?></td>
                                    <td colspan="2"><?php echo $i158; ?></td>
                                    <td colspan="2"><?php echo $i159; ?>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                    <td colspan="4">b. Virus definition file</td>
                                    <td colspan="2"><?php echo $i160; ?></td>
                                    <td colspan="2"><?php echo $i161; ?></td>
                                    <td colspan="2"><?php echo $i162; ?></td>
                                    <td colspan="2"><?php echo $i163; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">29</div></td>
                                    <td colspan="4">Pengecekan WSUS</td>
                                    <td colspan="2"><?php echo $i164; ?></td>
                                    <td colspan="2"><?php echo $i165; ?></td>
                                    <td colspan="2"><?php echo $i166; ?></td>
                                    <td colspan="2"><?php echo $i167; ?>
                                    <td colspan="4" rowspan="2">Lihat Panduan instalasi WSUS hal 12 s/d 15</td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                    <td colspan="4">a.    Pastikan server mengarah ke server update brwsus01' port    80</td>
                                    <td colspan="2"><?php echo $i168; ?></td>
                                    <td colspan="2"><?php echo $i169; ?></td>
                                    <td colspan="2"><?php echo $i170; ?></td>
                                    <td colspan="2"><?php echo $i171; ?>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                    <td colspan="4">b. Check gpedil.msc</td>
                                    <td colspan="2"><?php echo $i172; ?></td>
                                    <td colspan="2"><?php echo $i173; ?></td>
                                    <td colspan="2"><?php echo $i174; ?></td>
                                    <td colspan="2"><?php echo $i175; ?></td>
                                    <td colspan="4" rowspan="2">Lihat Panduan instalasi WSUS hal    16 s/d terakhir</td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"></div></td>
                                    <td colspan="4">c. Check services.msc</td>
                                    <td colspan="2"><?php echo $i176; ?></td>
                                    <td colspan="2"><?php echo $i177; ?></td>
                                    <td colspan="2"><?php echo $i178; ?></td>
                                    <td colspan="2"><?php echo $i179; ?></td>
                                  </tr>
                                  <tr>
                                    <td colspan="17"><strong>IV. Tes Koneksi</strong></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">30</div></td>
                                    <td colspan="4">Test    Konektifitas dari server cabang ke Host BNI kantor besar (192.168.12.1)</td>
                                    <td colspan="2"><?php echo $i180; ?><br />Average Time = <?php echo $i181; ?>Ms</td>
                                    <td colspan="2"><?php echo $i182; ?><br />Average Time = <?php echo $i183; ?>Ms</td>
                                    <td colspan="2"><?php echo $i184; ?><br />Average Time = <?php echo $i185; ?>Ms</td>
                                    <td colspan="2"><?php echo $i186; ?></td>
                                    <td colspan="4"><?php echo $i187; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left">31</div></td>
                                    <td colspan="4">Test    Konektifitas dari server cabang ke gateway (10.xxx.xxx.126)</td>
                                    <td colspan="2"><?php echo $i188; ?></td>
                                    <td colspan="2"><?php echo $i189; ?></td>
                                    <td colspan="2"><?php echo $i190; ?></td>
                                    <td colspan="2"><?php echo $i191; ?></td>
                                    <td colspan="4"><?php echo $i192; ?></td>
                                  </tr>
                                  
                            </table>
                                <p><strong>V. Server di luar Icons</strong></p>
                            <table width="100%" border="1" cellspacing="0" cellpadding="0">
                                
                                  <tr>
                                    <td rowspan="2" width="20"><strong>No.</strong></td>
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
                                    <td><div align="left"><?php echo $i193; ?>&nbsp;</div></td>
                                    <td colspan="4"><?php echo $i194; ?>&nbsp;</td>
                                    <td colspan="2"><?php echo $i195; ?></td>
                                    <td colspan="2"><?php echo $i196; ?></td>
                                    <td colspan="2"><?php echo $i197; ?></td>
                                    <td colspan="2"><?php echo $i198; ?></td>
                                    <td colspan="4"><?php echo $i199; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><?php echo $i200; ?>&nbsp;</div></td>
                                    <td colspan="4"><?php echo $i201; ?>&nbsp;</td>
                                    <td colspan="2"><?php echo $i202; ?></td>
                                    <td colspan="2"><?php echo $i203; ?></td>
                                    <td colspan="2"><?php echo $i204; ?></td>
                                    <td colspan="2"><?php echo $i205; ?></td>
                                    <td colspan="4"><?php echo $i206; ?></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><?php echo $i207;?>&nbsp;</div></td>
                                    <td colspan="4"><?php echo $i208; ?>&nbsp;</td>
                                    <td colspan="2"><?php echo $i209; ?></td>
                                    <td colspan="2"><?php echo $i210; ?></td>
                                    <td colspan="2"><?php echo $i211; ?></td>
                                    <td colspan="2"><?php echo $i212; ?></td>
                                    <td colspan="4"><?php echo $i213; ?></td>
                                  </tr>
                            </table>
                                <p><strong>*<em>Note lingkari hasil pemeriksaan</em></strong><em></em></p>
                                <p align="right">&nbsp;</p>
                                <p align="right"><strong>BNI Cabang/Capem</strong></p>
                                <p align="right">&nbsp;</p>
                                <p align="right">&nbsp;</p>
                                <p align="right">(_________________)<br />
                                </p>
                       
						  </form>
					  </div>
						<!-- END card-body -->
  </div>
					<!-- END card -->
</div>

					
