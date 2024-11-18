<?php
if(isset($_POST['ubah'])){
	$sql = "update server set tanggal_upload='".$_POST['tanggal_upload']."', cabang='".$_POST['cabang']."', alamat='".$_POST['alamat']."' where id='".$_GET['id']."'";
	$query = mysqli_query($koneksi, $sql);
	
?>

<script>alert('Data Berhasil Diubah')</script>
<script>window.location='penghubung.php?nav=tampilserver'</script>

<?php

}
?>

<?php
$query = mysqli_query($koneksi, "select id, tanggal_upload, cabang, alamat from server where id='".$_GET['id']."'");
while($data = mysqli_fetch_array($query)){
	$id = $data['id'];
	$tanggal_upload = $data['tanggal_upload'];
	$cabang = $data['cabang'];
	$alamat = $data['alamat'];
}
?>



<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <h4 class="card-header-title">Ubah Foto Server</h4>
							<div class="card-header-btn">
								<a href="#" data-toggle="card-expand" class="btn btn-success"><i class="fa fa-expand"></i></a>
								<a href="#" data-toggle="card-refresh" class="btn btn-warning"><i class="fa fa-redo"></i></a>
								<a href="#" data-toggle="card-remove" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
							</div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						
							<form method="POST">
								
								
								<div class="form-group">
									<label for="exampleInputName">Tanggal Upload</label>
									<input type="date" class="form-control" name="tanggal_upload" value="<?php echo $tanggal_upload;?>">
								</div>
								
								
								<div class="form-group">
									<label for="exampleInputName">Kantor Cabang/Kantor Kas</label><br>
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

									
									<option <?php echo ($cabang=='--Pilih Cabang--')?"selected":""?>>--Pilih Cabang--</option>
									<option <?php echo ($cabang=='KC Bandung')?"selected":""?>>KC Bandung</option>
									<option <?php echo ($cabang=='KCP Ahmad Yani')?"selected":""?>>KCP Ahmad Yani</option>
									<option <?php echo ($cabang=='KCP Braga')?"selected":""?>>KCP Braga</option>
									<option <?php echo ($cabang=='KCP Buah Batu')?"selected":""?>>KCP Buah Batu</option>
									<option <?php echo ($cabang=='KCP Cicadas')?"selected":""?>>KCP Cicadas</option>
									<option <?php echo ($cabang=='KCP Japati')?"selected":""?>>KCP Japati</option>
									<option <?php echo ($cabang=='KCP Kiaracondong')?"selected":""?>>KCP Kiaracondong</option>
									<option <?php echo ($cabang=='KCP Pungkur')?"selected":""?>>KCP Pungkur</option>
									<option <?php echo ($cabang=='KCP Rancaekek')?"selected":""?>>KCP Rancaekek</option>
									<option <?php echo ($cabang=='KCP Riau')?"selected":""?>>KCP Riau</option>
									<option <?php echo ($cabang=='KCP Soekarno Hatta')?"selected":""?>>KCP Soekarno Hatta</option>
									<option <?php echo ($cabang=='KCP Supratman')?"selected":""?>>KCP Supratman</option>
									<option <?php echo ($cabang=='KCP Ujung Berung')?"selected":""?>>KCP Ujung Berung</option>
									<option <?php echo ($cabang=='KK Antapani')?"selected":""?>>KK Antapani</option>
									<option <?php echo ($cabang=='KK Arcamanik')?"selected":""?>>KK Arcamanik</option>
									<option <?php echo ($cabang=='KK Astana Anyar')?"selected":""?>>KK Astana Anyar</option>
									<option <?php echo ($cabang=='KK Batununggal')?"selected":""?>>KK Batununggal</option>
									<option <?php echo ($cabang=='KK Gatot Subroto')?"selected":""?>>KK Gatot Subroto</option>
									<option <?php echo ($cabang=='PP Imigrasi')?"selected":""?>>PP Imigrasi</option>
									<option <?php echo ($cabang=='PP PLN Braga')?"selected":""?>>PP PLN Braga</option>
							
									<option <?php echo ($cabang=='KC Cirebon')?"selected":""?>>KC Cirebon</option>
									<option <?php echo ($cabang=='KCP Tegalwangi')?"selected":""?>>KCP Tegalwangi</option>
									<option <?php echo ($cabang=='KCP Grage Mall')?"selected":""?>>KCP Grage Mall</option>
									<option <?php echo ($cabang=='KCP Arjawinangun')?"selected":""?>>KCP Arjawinangun</option>
									<option <?php echo ($cabang=='KCP Losari')?"selected":""?>>KCP Losari</option>
									<option <?php echo ($cabang=='KCP Sumber')?"selected":""?>>KCP Sumber</option>
									<option <?php echo ($cabang=='KK Pekalipan')?"selected":""?>>KK Pekalipan</option>
									<option <?php echo ($cabang=='KK Harjamukti')?"selected":""?>>KK Harjamukti</option>
									<option <?php echo ($cabang=='KK Sindanglaut')?"selected":""?>>KK Sindanglaut</option>
									<option <?php echo ($cabang=='KK Tuparev')?"selected":""?>>KK Tuparev</option>
							
									<option <?php echo ($cabang=='KC Tasikmalaya')?"selected":""?>>KC Tasikmalaya</option>
									<option <?php echo ($cabang=='KCP Ciawi')?"selected":""?>>KCP Ciawi</option>
									<option <?php echo ($cabang=='KCP Universitas Siliwangi')?"selected":""?>>KCP Universitas Siliwangi</option>
									<option <?php echo ($cabang=='KCP Ciamis')?"selected":""?>>KCP Ciamis</option>
									<option <?php echo ($cabang=='KCP Singaparna')?"selected":""?>>KCP Singaparna</option>
									<option <?php echo ($cabang=='KCP Karang Nunggal')?"selected":""?>>KCP Karang Nunggal</option>
									<option <?php echo ($cabang=='KCP Cikuburuk')?"selected":""?>>KCP Cikuburuk</option>
									<option <?php echo ($cabang=='KK Sutisna Senjaya')?"selected":""?>>KK Sutisna Senjaya</option>
									<option <?php echo ($cabang=='KK Kawali')?"selected":""?>>KK Kawali</option>
									<option <?php echo ($cabang=='PP BPJS Tasikmalaya')?"selected":""?>>PP BPJS Tasikmalaya</option>
							
									<option <?php echo ($cabang=='KC Majalaya')?"selected":""?>>KC Majalaya</option>
									<option <?php echo ($cabang=='KCP Soreang')?"selected":""?>>KCP Soreang</option>
									<option <?php echo ($cabang=='KCP Baleendah')?"selected":""?>>KCP Baleendah</option>
									<option <?php echo ($cabang=='KCP Banjaran')?"selected":""?>>KCP Banjaran</option>
									<option <?php echo ($cabang=='KCP Cicalengka')?"selected":""?>>KCP Cicalengka</option>
									<option <?php echo ($cabang=='KCP Cinunuk')?"selected":""?>>KCP Cinunuk</option>
									<option <?php echo ($cabang=='KK Taman Kopo Indah')?"selected":""?>>KK Taman Kopo Indah</option>
									<option <?php echo ($cabang=='KK Ciwidey')?"selected":""?>>KK Ciwidey</option>
									<option <?php echo ($cabang=='KK Kopo Katapang')?"selected":""?>>KK Kopo Katapang</option>
									<option <?php echo ($cabang=='KK De Prima Terra')?"selected":""?>>KK De Prima Terra</option>
									<option <?php echo ($cabang=='KK Ciparay')?"selected":""?>>KK Ciparay</option>
									<option <?php echo ($cabang=='KK Cibaduyut')?"selected":""?>>KK Cibaduyut</option>
									<option <?php echo ($cabang=='PP Kahagroup')?"selected":""?>>PP Kahagroup</option>
									
									<option <?php echo ($cabang=='KC Sukabumi')?"selected":""?>>KC Sukabumi</option>
									<option <?php echo ($cabang=='KCP Ciwangi')?"selected":""?>>KCP Ciwangi</option>
									<option <?php echo ($cabang=='KCP Cibadak')?"selected":""?>>KCP Cibadak</option>
									<option <?php echo ($cabang=='KCP Cicurug')?"selected":""?>>KCP Cicurug</option>
									<option <?php echo ($cabang=='KCP Surade')?"selected":""?>>KCP Surade</option>
									<option <?php echo ($cabang=='KCP Pelabuhan Ratu')?"selected":""?>>KCP Pelabuhan Ratu</option>
									<option <?php echo ($cabang=='KK Pangleseran')?"selected":""?>>KK Pangleseran</option>
									<option <?php echo ($cabang=='PP Jamsostek Sukabumi')?"selected":""?>>PP Jamsostek Sukabumi</option>
									<option <?php echo ($cabang=='PP RS Hermina Sukabumi')?"selected":""?>>PP RS Hermina Sukabumi</option>
							
									
									<option <?php echo ($cabang=='KC Banjar')?"selected":""?>>KC Banjar</option>
									<option <?php echo ($cabang=='KCP Pangandaran')?"selected":""?>>KCP Pangandaran</option>
									<option <?php echo ($cabang=='KK Banjar')?"selected":""?>>KK Banjar</option>
									
									<option <?php echo ($cabang=='KC Garut')?"selected":""?>>KC Garut</option>
									<option <?php echo ($cabang=='KCP Cikajang')?"selected":""?>>KCP Cikajang</option>
									<option <?php echo ($cabang=='KCP Pameungpeuk')?"selected":""?>>KCP Pameungpeuk</option>
									<option <?php echo ($cabang=='KK Kadungora')?"selected":""?>>KK Kadungora</option>
									<option <?php echo ($cabang=='KK Limbangan')?"selected":""?>>KK Limbangan</option>
									<option <?php echo ($cabang=='KK Ciledug')?"selected":""?>>KK Ciledug</option>
									
									
									<option <?php echo ($cabang=='KC Cianjur')?"selected":""?>>KC Cianjur</option>
									<option <?php echo ($cabang=='KCP Cipanas')?"selected":""?>>KCP Cipanas</option>
									<option <?php echo ($cabang=='KCP Ciranjang')?"selected":""?>>KCP Ciranjang</option>
									<option <?php echo ($cabang=='KCP Tanggeung')?"selected":""?>>KCP Tanggeung</option>
									<option <?php echo ($cabang=='Hos Tjokroaminoto')?"selected":""?>>Hos Tjokroaminoto</option>
									
									<option <?php echo ($cabang=='KC Indramayu')?"selected":""?>>KC Indramayu</option>
									<option <?php echo ($cabang=='KCP Jatibarang')?"selected":""?>>KCP Jatibarang</option>
									<option <?php echo ($cabang=='KCP Patrol')?"selected":""?>>KCP Patrol</option>
									<option <?php echo ($cabang=='KCP Haurgeulis')?"selected":""?>>KCP Haurgeulis</option>
									<option <?php echo ($cabang=='KCP Karangampel')?"selected":""?>>KCP Karangampel</option>
									<option <?php echo ($cabang=='PP TPI Karangsong')?"selected":""?>>PP TPI Karangsong</option>
								
									
									<option <?php echo ($cabang=='KC Kuningan')?"selected":""?>>KC Kuningan</option>
									<option <?php echo ($cabang=='KCP Cikijing')?"selected":""?>>KCP Cikijing</option>
									<option <?php echo ($cabang=='KCP Majalengka')?"selected":""?>>KCP Majalengka</option>
									<option <?php echo ($cabang=='KCP Kadipaten')?"selected":""?>>KCP Kadipaten</option>
									<option <?php echo ($cabang=='KK Cilimus')?"selected":""?>>KK Cilimus</option>
									<option <?php echo ($cabang=='KK Jatiwangi')?"selected":""?>>KK Jatiwangi</option>
									<option <?php echo ($cabang=='KK BIJB Kertajati')?"selected":""?>>KK BIJB Kertajati</option>
									<option <?php echo ($cabang=='PP Pasar Baru Kuningan')?"selected":""?>>PP Pasar Baru Kuningan</option>
									<option <?php echo ($cabang=='PP Universitas Kuningan')?"selected":""?>>PP Universitas Kuningan</option>
									<option <?php echo ($cabang=='RSUD Majalengka')?"selected":""?>>RSUD Majalengka</option>
							
									<option <?php echo ($cabang=='KC Purwakarta')?"selected":""?>>KC Purwakarta</option>
									<option <?php echo ($cabang=='KCP Plered')?"selected":""?>>KCP Plered</option>
									<option <?php echo ($cabang=='KK Kota Bukit Indah')?"selected":""?>>KK Kota Bukit Indah</option>
									<option <?php echo ($cabang=='KK Jatiluhur')?"selected":""?>>KK Jatiluhur</option>
									<option <?php echo ($cabang=='KK Cikopo')?"selected":""?>>KK Cikopo</option>
									<option <?php echo ($cabang=='PP BPJS Purwakarta')?"selected":""?>>PP BPJS Purwakarta</option>
									
									<option <?php echo ($cabang=='KC Sumedang')?"selected":""?>>KC Sumedang</option>
									<option <?php echo ($cabang=='KK Tanjungsari')?"selected":""?>>KK Tanjungsari</option>
									
								
									<option <?php echo ($cabang=='KC Subang')?"selected":""?>>KC Subang</option>
									<option <?php echo ($cabang=='KCP Pamanukan')?"selected":""?>>KCP Pamanukan</option>
									<option <?php echo ($cabang=='KCP Kalijati')?"selected":""?>>KCP Kalijati</option>
									<option <?php echo ($cabang=='KK Cipeundeuy')?"selected":""?>>KK Cipeundeuy</option>
									
									<option <?php echo ($cabang=='KC PTB')?"selected":""?>>KC PTB</option>
									<option <?php echo ($cabang=='KCP Ganesha')?"selected":""?>>KCP Ganesha</option>
									<option <?php echo ($cabang=='KCP Setrasari')?"selected":""?>>KCP Setrasari</option>
									<option <?php echo ($cabang=='KCP LIPI')?"selected":""?>>KCP LIPI</option>
									<option <?php echo ($cabang=='KCP Cihampelas')?"selected":""?>>KCP Cihampelas</option>
									<option <?php echo ($cabang=='KCP UNIKOM')?"selected":""?>>KCP UNIKOM</option>
									<option <?php echo ($cabang=='KCP UNPAD')?"selected":""?>>KCP UNPAD</option>
									<option <?php echo ($cabang=='KCP Jatinangor')?"selected":""?>>KCP Jatinangor</option>
									<option <?php echo ($cabang=='KCP Dago')?"selected":""?>>KCP Dago</option>
									<option <?php echo ($cabang=='KCP UPI')?"selected":""?>>KCP UPI</option>
									<option <?php echo ($cabang=='KCP Lembang')?"selected":""?>>KCP Lembang</option>
									<option <?php echo ($cabang=='KCP Sukajadi')?"selected":""?>>KCP Sukajadi</option>
									<option <?php echo ($cabang=='KCP ITENAS')?"selected":""?>>KCP ITENAS</option>
									<option <?php echo ($cabang=='KCP Maranatha')?"selected":""?>>KCP Maranatha</option>
									<option <?php echo ($cabang=='KK Pasteur')?"selected":""?>>KK Pasteur</option>
									<option <?php echo ($cabang=='KK Setiabudhi')?"selected":""?>>KK Setiabudhi</option>
									<option <?php echo ($cabang=='KK Cipadung')?"selected":""?>>KK Cipadung</option>
									<option <?php echo ($cabang=='KK Rajawali')?"selected":""?>>KK Rajawali</option>
									<option <?php echo ($cabang=='KK Ciumbuleuit')?"selected":""?>>KK Ciumbuleuit</option>
									<option <?php echo ($cabang=='PP ITB Jatinangor')?"selected":""?>>PP ITB Jatinangor</option>
									<option <?php echo ($cabang=='PP RS Hasansadikin')?"selected":""?>>PP RS Hasansadikin</option>
							
									<option <?php echo ($cabang=='KC JPK')?"selected":""?>>KC JPK</option>
									<option <?php echo ($cabang=='KCP JJS')?"selected":""?>>KCP JJS</option>
									<option <?php echo ($cabang=='KCP PT. INTI')?"selected":""?>>KCP PT. INTI</option>
									<option <?php echo ($cabang=='KCP YDPP Telkom')?"selected":""?>>KCP YDPP Telkom</option>
									<option <?php echo ($cabang=='KCP PT. KAI')?"selected":""?>>KCP PT. KAI</option>
									<option <?php echo ($cabang=='KCP Kopo Mas')?"selected":""?>>KCP Kopo Mas</option>
									<option <?php echo ($cabang=='KCP Cijerah')?"selected":""?>>KCP Cijerah</option>
									<option <?php echo ($cabang=='KCP Moch. Toha')?"selected":""?>>KCP Moch. Toha</option>
									<option <?php echo ($cabang=='KCP Padalarang')?"selected":""?>>KCP Padalarang</option>
									<option <?php echo ($cabang=='KCP Posindo')?"selected":""?>>KCP Posindo</option>
									<option <?php echo ($cabang=='KCP Cimahi')?"selected":""?>>KCP Cimahi</option>
									<option <?php echo ($cabang=='KCP Pasar Baru')?"selected":""?>>KCP Pasar Baru</option>
									<option <?php echo ($cabang=='KCP Pajajaran')?"selected":""?>>KCP Pajajaran</option>
									<option <?php echo ($cabang=='KCP Immanuel')?"selected":""?>>KCP Immanuel</option>
									<option <?php echo ($cabang=='KK Dayeuhkolot')?"selected":""?>>KK Dayeuhkolot</option>
									<option <?php echo ($cabang=='KK UNJANI')?"selected":""?>>KK UNJANI</option>
									<option <?php echo ($cabang=='KK Sumbersari')?"selected":""?>>KK Sumbersari</option>
									<option <?php echo ($cabang=='KK Batujajar')?"selected":""?>>KK Batujajar</option>
									<option <?php echo ($cabang=='KK Ciwastra')?"selected":""?>>KK Ciwastra</option>
									<option <?php echo ($cabang=='KK Pojok Cimahi')?"selected":""?>>KK Pojok Cimahi</option>
									<option <?php echo ($cabang=='KK Karapitan')?"selected":""?>>KK Karapitan</option>
									<option <?php echo ($cabang=='e-Branch Paskal')?"selected":""?>>e-Branch Paskal</option>
									<option <?php echo ($cabang=='PP Jamsostek Cimahi')?"selected":""?>>PP Jamsostek Cimahi</option>
															
									</select>
								</div>
								
									<div class="form-group">
									<label for="exampleInputName">Alamat</label>
									<input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $alamat;?>">
								</div>
								
							<form method="POST">
                            <button type="submit" name="ubah" class="btn btn-info"><i class="fas fa-sm fa-fw m-r-10 fa-pencil-alt"></i>Ubah</button>
							<a href="penghubung.php?nav=tampilserver" type="submit" name="ubah" class="btn btn-warning"><i class="fas fa-sm fa-fw m-r-10 fa-undo-alt"></i>Kembali</a>
						  </form>
						</div>
						<!-- END card-body -->
					</div>
					