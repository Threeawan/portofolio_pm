<style>
input{
	width:100%;
}
</style>

<?php
if(isset($_POST['ubah'])){
	 $sql = "update tandaterimabarang set tanggal='".$_POST['tanggal']."', cabang='".$_POST['cabang']."', alamat='".$_POST['alamat']."', i1='".$_POST['i1']."', i2='".$_POST['i2']."', i3='".$_POST['i3']."', i4='".$_POST['i4']."', i5='".$_POST['i5']."', i6='".$_POST['i6']."', i7='".$_POST['i7']."', i8='".$_POST['i8']."', i9='".$_POST['i9']."', i10='".$_POST['i10']."', i11='".$_POST['i11']."', i12='".$_POST['i12']."', i13='".$_POST['i13']."', i14='".$_POST['i14']."', i15='".$_POST['i15']."', i16='".$_POST['i16']."', i17='".$_POST['i17']."', i18='".$_POST['i18']."', i19='".$_POST['i19']."', i20='".$_POST['i20']."', i21='".$_POST['i21']."', i22='".$_POST['i22']."', i23='".$_POST['i23']."', i24='".$_POST['i24']."', i25='".$_POST['i25']."', i26='".$_POST['i26']."', i27='".$_POST['i27']."', i28='".$_POST['i28']."', i29='".$_POST['i29']."', i30='".$_POST['i30']."', i31='".$_POST['i31']."', i32='".$_POST['i32']."', i33='".$_POST['i33']."', i34='".$_POST['i34']."', i35='".$_POST['i35']."'   , i36='".$_POST['i36']."', i37='".$_POST['i37']."', i38='".$_POST['i38']."', i39='".$_POST['i39']."' , i40='".$_POST['i40']."', i41='".$_POST['i41']."', i42='".$_POST['i42']."', i43='".$_POST['i43']."', i44='".$_POST['i44']."', i45='".$_POST['i45']."', i46='".$_POST['i46']."', i47='".$_POST['i47']."', i48='".$_POST['i48']."'                                   where id='".$_GET['id']."'";
	$query = mysqli_query($koneksi, $sql);
?>

<script>alert('Data Berhasil Diubah')</script>
<script>window.location='penghubung.php?nav=tandaterimabarangdata'</script>

<?php
}
?>




<?php
$query = mysqli_query($koneksi, "SELECT id, tanggal, cabang, alamat, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36, i37, i38, i39, i40, i41, i42, i43, i44, i45, i46, i47, i48 FROM tandaterimabarang WHERE id='".$_GET['id']."'");
while($data = mysqli_fetch_array($query)){
$id = $data['id'];

$tanggal = $data['tanggal'];
$cabang = $data['cabang'];
$alamat = $data['alamat'];
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
}
?>


<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse"><strong>UBAH TANDA-TERIMA PENYERAHAN BARANG</strong></div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST">
							 
								<div class="form-group">
									<label for="exampleInputDate">Tanggal</label>
									<input type="date" class="form-control" id="exampleInputDate" name="tanggal" value="<?php echo $tanggal;?>">
								</div>
  Telah diserahkan sejumlah hardware/peralatan kepada :
                                <div class="form-group">
								  <label for="exampleInputName">Kantor Cabang/Kantor Kas/Unit</label><br>
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
								
									<option <?php echo ($cabang =='--Pilih Outlet--')? "selected":"" ?>>--Pilih Outlet--</option>
									<option <?php echo ($cabang =='Kantor Wilayah')? "selected":"" ?>>Kantor Wilayah</option>
									<option <?php echo ($cabang =='SBO BDG')? "selected":"" ?>>SBO BDG</option>
									<option <?php echo ($cabang =='SBE PRG')? "selected":"" ?>>SBE PRG</option>
									<option <?php echo ($cabang =='SBE BDG')? "selected":"" ?>>SBE BDG</option>
									<option <?php echo ($cabang =='SBK BDG')? "selected":"" ?>>SBK BDG</option>
									<option <?php echo ($cabang =='RRW BDG')? "selected":"" ?>>RRW BDG</option>
									<option <?php echo ($cabang =='RRW JJS')? "selected":"" ?>>RRW JJS</option>
									<option <?php echo ($cabang =='LGW BDG')? "selected":"" ?>>LGW BDG</option>
									<option <?php echo ($cabang =='KIW BDG')? "selected":"" ?>>KIW BDG</option>
									<option <?php echo ($cabang =='SDW BDG')? "selected":"" ?>>SDW BDG</option>
									<option <?php echo ($cabang =='HMW BDG')? "selected":"" ?>>HMW BDG</option>
									<option <?php echo ($cabang =='LPW BDG')? "selected":"" ?>>LPW BDG</option>
									<option <?php echo ($cabang =='ATW BDG')? "selected":"" ?>>ATW BDG</option>
									
									
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
									<option <?php echo ($cabang =='KCP Pasar Baru')? "selected":"" ?>>KCP Pasar Baru</option>
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
									<label for="exampleInputDate">Alamat</label>
									<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat;?>" readonly="readonly">
								</div>
								
								
								
								
								
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
                                
                                Yang terdiri dari :
                                
                                <table width="100%" cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse">
                                  <tr>
                                    <td><div align="center"><strong>Hardware</strong></div></td>
                                    <td><div align="center"><strong>Unit</strong></div></td>
                                    <td><div align="center"><strong>Serial Number</strong></div></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>"  value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                </table>
                                <br />
                            <button type="submit" name="ubah" class="btn btn-info"><i class="fas fa-sm fa-fw m-r-10 fa-pencil-alt"></i>Ubah</button>
                            <a href="penghubung.php?nav=tandaterimabarangdata" name="kembali" class="btn btn-warning"><i class="fas fa-sm fa-fw m-r-10 fa-undo-alt"></i>Kembali</button></a>
						  </form>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
