<?php
if(isset($_POST['hapus'])){
	$query = mysqli_query($koneksi, "delete from server where id='".$_GET['id']."'");	
	
?>
<script>alert('File Berhasil Dihapus')</script>
<script>window.location='penghubung.php?nav=tampilserver'</script>

<?php
}
?>

<?php
$query = mysqli_query($koneksi, "select tanggal_upload, cabang, alamat, ruang_server, rak_server_depan, rak_server_belakang from server where id='".$_GET['id']."'");
while($data = mysqli_fetch_array($query)){

	$tanggal_upload = $data['tanggal_upload'];
	$cabang = $data['cabang'];
	$alamat = $data['alamat'];
	//$pakta_integritas = $data['pakta_integritas'];
	$ruang_server = $data['ruang_server'];
	$rak_server_depan = $data['rak_server_depan'];
	$rak_server_belakang = $data['rak_server_belakang'];

	//$dokumen_kepemilikan = $data['dokumen_kepemilikan'];
	//$pks_sewa = $data['pks_sewa'];
	//$tdp = $data['tdp'];
	//$shm = $data['shm'];
	
}
?>



<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <h4 class="card-header-title">Hapus Foto Server</h4>
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
									<input type="date" class="form-control" value="<?php echo $tanggal_upload;?>"  readonly="tanggal_upload">
								</div>
								
								
								<div class="form-group">
									<label for="exampleInputName">Kantor Cabang/Kantor Kas</label><br>
									
									<select name="cabang" id="cabang">
									
									<option <?php echo ($cabang=='--Pilih Cabang--')?"selected":""?>readonly="readonly">--Pilih Cabang--</option>
									<option <?php echo ($cabang=='KC Bandung')?"selected":""?> readonly="readonly">KC Bandung</option>
									<option <?php echo ($cabang=='KCP Ahmad Yani')?"selected":""?> readonly="readonly">KCP Ahmad Yani</option>
									<option <?php echo ($cabang=='KCP Braga')?"selected":""?> readonly="readonly">KCP Braga</option>
									<option <?php echo ($cabang=='KCP Buah Batu')?"selected":""?> readonly="readonly">KCP Buah Batu</option>
									<option <?php echo ($cabang=='KCP Cicadas')?"selected":""?> readonly="readonly">KCP Cicadas</option>
									<option <?php echo ($cabang=='KCP Japati')?"selected":""?> readonly="readonly">KCP Japati</option>
									<option <?php echo ($cabang=='KCP Kiaracondong')?"selected":""?> readonly="readonly">KCP Kiaracondong</option>
									<option <?php echo ($cabang=='KCP Pungkur')?"selected":""?> readonly="readonly">KCP Pungkur</option>
									<option <?php echo ($cabang=='KCP Rancaekek')?"selected":""?> readonly="readonly">KCP Rancaekek</option>
									<option <?php echo ($cabang=='KCP Riau')?"selected":""?> readonly="readonly">KCP Riau</option>
									<option <?php echo ($cabang=='KCP Soekarno Hatta')?"selected":""?> readonly="readonly">KCP Soekarno Hatta</option>
									<option <?php echo ($cabang=='KCP Supratman')?"selected":""?> readonly="readonly">KCP Supratman</option>
									<option <?php echo ($cabang=='KCP Ujung Berung')?"selected":""?> readonly="readonly">KCP Ujung Berung</option>
									<option <?php echo ($cabang=='KK Antapani')?"selected":""?> readonly="readonly">KK Antapani</option>
									<option <?php echo ($cabang=='KK Arcamanik')?"selected":""?> readonly="readonly">KK Arcamanik</option>
									<option <?php echo ($cabang=='KK Astana Anyar')?"selected":""?> readonly="readonly">KK Astana Anyar</option>
									<option <?php echo ($cabang=='KK Batununggal')?"selected":""?> readonly="readonly">KK Batununggal</option>
									<option <?php echo ($cabang=='KK Gatot Subroto')?"selected":""?> readonly="readonly">KK Gatot Subroto</option>
									<option <?php echo ($cabang=='PP Imigrasi')?"selected":""?> readonly="readonly">PP Imigrasi</option>
									<option <?php echo ($cabang=='PP PLN Braga')?"selected":""?> readonly="readonly">PP PLN Braga</option>
							
									<option <?php echo ($cabang=='KC Cirebon')?"selected":""?> readonly="readonly">KC Cirebon</option>
									<option <?php echo ($cabang=='KCP Tegalwangi')?"selected":""?> readonly="readonly">KCP Tegalwangi</option>
									<option <?php echo ($cabang=='KCP Grage Mall')?"selected":""?> readonly="readonly">KCP Grage Mall</option>
									<option <?php echo ($cabang=='KCP Arjawinangun')?"selected":""?> readonly="readonly">KCP Arjawinangun</option>
									<option <?php echo ($cabang=='KCP Losari')?"selected":""?> readonly="readonly">KCP Losari</option>
									<option <?php echo ($cabang=='KCP Sumber')?"selected":""?> readonly="readonly">KCP Sumber</option>
									<option <?php echo ($cabang=='KK Pekalipan')?"selected":""?> readonly="readonly">KK Pekalipan</option>
									<option <?php echo ($cabang=='KK Harjamukti')?"selected":""?> readonly="readonly">KK Harjamukti</option>
									<option <?php echo ($cabang=='KK Sindanglaut')?"selected":""?> readonly="readonly">KK Sindanglaut</option>
									<option <?php echo ($cabang=='KK Tuparev')?"selected":""?> readonly="readonly">KK Tuparev</option>
							
									<option <?php echo ($cabang=='KC Tasikmalaya')?"selected":""?> readonly="readonly">KC Tasikmalaya</option>
									<option <?php echo ($cabang=='KCP Ciawi')?"selected":""?> readonly="readonly">KCP Ciawi</option>
									<option <?php echo ($cabang=='KCP Universitas Siliwangi')?"selected":""?> readonly="readonly">KCP Universitas Siliwangi</option>
									<option <?php echo ($cabang=='KCP Ciamis')?"selected":""?> readonly="readonly">KCP Ciamis</option>
									<option <?php echo ($cabang=='KCP Singaparna')?"selected":""?> readonly="readonly">KCP Singaparna</option>
									<option <?php echo ($cabang=='KCP Karang Nunggal')?"selected":""?> readonly="readonly">KCP Karang Nunggal</option>
									<option <?php echo ($cabang=='KCP Cikuburuk')?"selected":""?> readonly="readonly">KCP Cikuburuk</option>
									<option <?php echo ($cabang=='KK Sutisna Senjaya')?"selected":""?> readonly="readonly">KK Sutisna Senjaya</option>
									<option <?php echo ($cabang=='KK Kawali')?"selected":""?> readonly="readonly">KK Kawali</option>
									<option <?php echo ($cabang=='PP BPJS Tasikmalaya')?"selected":""?> readonly="readonly">PP BPJS Tasikmalaya</option>
							
									<option <?php echo ($cabang=='KC Majalaya')?"selected":""?> readonly="readonly">KC Majalaya</option>
									<option <?php echo ($cabang=='KCP Soreang')?"selected":""?> readonly="readonly">KCP Soreang</option>
									<option <?php echo ($cabang=='KCP Baleendah')?"selected":""?> readonly="readonly">KCP Baleendah</option>
									<option <?php echo ($cabang=='KCP Banjaran')?"selected":""?> readonly="readonly">KCP Banjaran</option>
									<option <?php echo ($cabang=='KCP Cicalengka')?"selected":""?> readonly="readonly">KCP Cicalengka</option>
									<option <?php echo ($cabang=='KCP Cinunuk')?"selected":""?> readonly="readonly">KCP Cinunuk</option>
									<option <?php echo ($cabang=='KK Taman Kopo Indah')?"selected":""?> readonly="readonly">KK Taman Kopo Indah</option>
									<option <?php echo ($cabang=='KK Ciwidey')?"selected":""?> readonly="readonly">KK Ciwidey</option>
									<option <?php echo ($cabang=='KK Kopo Katapang')?"selected":""?> readonly="readonly">KK Kopo Katapang</option>
									<option <?php echo ($cabang=='KK De Prima Terra')?"selected":""?> readonly="readonly">KK De Prima Terra</option>
									<option <?php echo ($cabang=='KK Ciparay')?"selected":""?> readonly="readonly">KK Ciparay</option>
									<option <?php echo ($cabang=='KK Cibaduyut')?"selected":""?> readonly="readonly">KK Cibaduyut</option>
									<option <?php echo ($cabang=='PP Kahagroup')?"selected":""?> readonly="readonly">PP Kahagroup</option>
									
									<option <?php echo ($cabang=='KC Sukabumi')?"selected":""?> readonly="readonly">KC Sukabumi</option>
									<option <?php echo ($cabang=='KCP Ciwangi')?"selected":""?> readonly="readonly">KCP Ciwangi</option>
									<option <?php echo ($cabang=='KCP Cibadak')?"selected":""?> readonly="readonly">KCP Cibadak</option>
									<option <?php echo ($cabang=='KCP Cicurug')?"selected":""?> readonly="readonly">KCP Cicurug</option>
									<option <?php echo ($cabang=='KCP Surade')?"selected":""?> readonly="readonly">KCP Surade</option>
									<option <?php echo ($cabang=='KCP Pelabuhan Ratu')?"selected":""?> readonly="readonly">KCP Pelabuhan Ratu</option>
									<option <?php echo ($cabang=='KK Pangleseran')?"selected":""?>>KK Pangleseran</option>
									<option <?php echo ($cabang=='PP Jamsostek Sukabumi')?"selected":""?> readonly="readonly">PP Jamsostek Sukabumi</option>
									<option <?php echo ($cabang=='PP RS Hermina Sukabumi')?"selected":""?> readonly="readonly">PP RS Hermina Sukabumi</option>
							
									
									<option <?php echo ($cabang=='KC Banjar')?"selected":""?> readonly="readonly">KC Banjar</option>
									<option <?php echo ($cabang=='KCP Pangandaran')?"selected":""?> readonly="readonly">KCP Pangandaran</option>
									<option <?php echo ($cabang=='KK Banjar')?"selected":""?> readonly="readonly">KK Banjar</option>
									
									<option <?php echo ($cabang=='KC Garut')?"selected":""?> readonly="readonly">KC Garut</option>
									<option <?php echo ($cabang=='KCP Cikajang')?"selected":""?> readonly="readonly">KCP Cikajang</option>
									<option <?php echo ($cabang=='KCP Pameungpeuk')?"selected":""?> readonly="readonly">KCP Pameungpeuk</option>
									<option <?php echo ($cabang=='KK Kadungora')?"selected":""?> readonly="readonly">KK Kadungora</option>
									<option <?php echo ($cabang=='KK Limbangan')?"selected":""?> readonly="readonly">KK Limbangan</option>
									<option <?php echo ($cabang=='KK Ciledug')?"selected":""?> readonly="readonly">KK Ciledug</option>
									
									
									<option <?php echo ($cabang=='KC Cianjur')?"selected":""?> readonly="readonly">KC Cianjur</option>
									<option <?php echo ($cabang=='KCP Cipanas')?"selected":""?> readonly="readonly">KCP Cipanas</option>
									<option <?php echo ($cabang=='KCP Ciranjang')?"selected":""?> readonly="readonly">KCP Ciranjang</option>
									<option <?php echo ($cabang=='KCP Tanggeung')?"selected":""?> readonly="readonly">KCP Tanggeung</option>
									<option <?php echo ($cabang=='Hos Tjokroaminoto')?"selected":""?> readonly="readonly">Hos Tjokroaminoto</option>
									
									<option <?php echo ($cabang=='KC Indramayu')?"selected":""?> readonly="readonly">KC Indramayu</option>
									<option <?php echo ($cabang=='KCP Jatibarang')?"selected":""?> readonly="readonly">KCP Jatibarang</option>
									<option <?php echo ($cabang=='KCP Patrol')?"selected":""?> readonly="readonly">KCP Patrol</option>
									<option <?php echo ($cabang=='KCP Haurgeulis')?"selected":""?> readonly="readonly">KCP Haurgeulis</option>
									<option <?php echo ($cabang=='KCP Karangampel')?"selected":""?> readonly="readonly">KCP Karangampel</option>
									<option <?php echo ($cabang=='PP TPI Karangsong')?"selected":""?> readonly="readonly">PP TPI Karangsong</option>
								
									
									<option <?php echo ($cabang=='KC Kuningan')?"selected":""?> readonly="readonly">KC Kuningan</option>
									<option <?php echo ($cabang=='KCP Cikijing')?"selected":""?> readonly="readonly">KCP Cikijing</option>
									<option <?php echo ($cabang=='KCP Majalengka')?"selected":""?> readonly="readonly">KCP Majalengka</option>
									<option <?php echo ($cabang=='KCP Kadipaten')?"selected":""?> readonly="readonly">KCP Kadipaten</option>
									<option <?php echo ($cabang=='KK Cilimus')?"selected":""?> readonly="readonly">KK Cilimus</option>
									<option <?php echo ($cabang=='KK Jatiwangi')?"selected":""?> readonly="readonly">KK Jatiwangi</option>
									<option <?php echo ($cabang=='KK BIJB Kertajati')?"selected":""?> readonly="readonly">KK BIJB Kertajati</option>
									<option <?php echo ($cabang=='PP Pasar Baru Kuningan')?"selected":""?> readonly="readonly">PP Pasar Baru Kuningan</option>
									<option <?php echo ($cabang=='PP Universitas Kuningan')?"selected":""?> readonly="readonly">PP Universitas Kuningan</option>
									<option <?php echo ($cabang=='RSUD Majalengka')?"selected":""?> readonly="readonly">RSUD Majalengka</option>
							
									<option <?php echo ($cabang=='KC Purwakarta')?"selected":""?> readonly="readonly">KC Purwakarta</option>
									<option <?php echo ($cabang=='KCP Plered')?"selected":""?> readonly="readonly">KCP Plered</option>
									<option <?php echo ($cabang=='KK Kota Bukit Indah')?"selected":""?> readonly="readonly">KK Kota Bukit Indah</option>
									<option <?php echo ($cabang=='KK Jatiluhur')?"selected":""?> readonly="readonly">KK Jatiluhur</option>
									<option <?php echo ($cabang=='KK Cikopo')?"selected":""?> readonly="readonly">KK Cikopo</option>
									<option <?php echo ($cabang=='PP BPJS Purwakarta')?"selected":""?> readonly="readonly">PP BPJS Purwakarta</option>
									
									<option <?php echo ($cabang=='KC Sumedang')?"selected":""?> readonly="readonly">KC Sumedang</option>
									<option <?php echo ($cabang=='KK Tanjungsari')?"selected":""?> readonly="readonly">KK Tanjungsari</option>
									
								
									<option <?php echo ($cabang=='KC Subang')?"selected":""?> readonly="readonly">KC Subang</option>
									<option <?php echo ($cabang=='KCP Pamanukan')?"selected":""?> readonly="readonly">KCP Pamanukan</option>
									<option <?php echo ($cabang=='KCP Kalijati')?"selected":""?> readonly="readonly">KCP Kalijati</option>
									<option <?php echo ($cabang=='KK Cipeundeuy')?"selected":""?> readonly="readonly">KK Cipeundeuy</option>
									
									<option <?php echo ($cabang=='KC PTB')?"selected":""?> readonly="readonly">KC PTB</option>
									<option <?php echo ($cabang=='KCP Ganesha')?"selected":""?> readonly="readonly">KCP Ganesha</option>
									<option <?php echo ($cabang=='KCP Setrasari')?"selected":""?> readonly="readonly">KCP Setrasari</option>
									<option <?php echo ($cabang=='KCP LIPI')?"selected":""?> readonly="readonly">KCP LIPI</option>
									<option <?php echo ($cabang=='KCP Cihampelas')?"selected":""?> readonly="readonly">KCP Cihampelas</option>
									<option <?php echo ($cabang=='KCP UNIKOM')?"selected":""?> readonly="readonly">KCP UNIKOM</option>
									<option <?php echo ($cabang=='KCP UNPAD')?"selected":""?> readonly="readonly">KCP UNPAD</option>
									<option <?php echo ($cabang=='KCP Jatinangor')?"selected":""?> readonly="readonly">KCP Jatinangor</option>
									<option <?php echo ($cabang=='KCP Dago')?"selected":""?> readonly="readonly">KCP Dago</option>
									<option <?php echo ($cabang=='KCP UPI')?"selected":""?> readonly="readonly">KCP UPI</option>
									<option <?php echo ($cabang=='KCP Lembang')?"selected":""?> readonly="readonly">KCP Lembang</option>
									<option <?php echo ($cabang=='KCP Sukajadi')?"selected":""?> readonly="readonly">KCP Sukajadi</option>
									<option <?php echo ($cabang=='KCP ITENAS')?"selected":""?> readonly="readonly">KCP ITENAS</option>
									<option <?php echo ($cabang=='KCP Maranatha')?"selected":""?> readonly="readonly">KCP Maranatha</option>
									<option <?php echo ($cabang=='KK Pasteur')?"selected":""?> readonly="readonly">KK Pasteur</option>
									<option <?php echo ($cabang=='KK Setiabudhi')?"selected":""?> readonly="readonly">KK Setiabudhi</option>
									<option <?php echo ($cabang=='KK Cipadung')?"selected":""?> readonly="readonly">KK Cipadung</option>
									<option <?php echo ($cabang=='KK Rajawali')?"selected":""?> readonly="readonly">KK Rajawali</option>
									<option <?php echo ($cabang=='KK Ciumbuleuit')?"selected":""?> readonly="readonly">KK Ciumbuleuit</option>
									<option <?php echo ($cabang=='PP ITB Jatinangor')?"selected":""?> readonly="readonly">PP ITB Jatinangor</option>
									<option <?php echo ($cabang=='PP RS Hasansadikin')?"selected":""?> readonly="readonly">PP RS Hasansadikin</option>
							
									<option <?php echo ($cabang=='KC JPK')?"selected":""?> readonly="readonly">KC JPK</option>
									<option <?php echo ($cabang=='KCP JJS')?"selected":""?> readonly="readonly">KCP JJS</option>
									<option <?php echo ($cabang=='KCP PT. INTI')?"selected":""?> readonly="readonly">KCP PT. INTI</option>
									<option <?php echo ($cabang=='KCP YDPP Telkom')?"selected":""?> readonly="readonly">KCP YDPP Telkom</option>
									<option <?php echo ($cabang=='KCP PT. KAI')?"selected":""?> readonly="readonly">KCP PT. KAI</option>
									<option <?php echo ($cabang=='KCP Kopo Mas')?"selected":""?> readonly="readonly">KCP Kopo Mas</option>
									<option <?php echo ($cabang=='KCP Cijerah')?"selected":""?> readonly="readonly">KCP Cijerah</option>
									<option <?php echo ($cabang=='KCP Moch. Toha')?"selected":""?> readonly="readonly">KCP Moch. Toha</option>
									<option <?php echo ($cabang=='KCP Padalarang')?"selected":""?> readonly="readonly">KCP Padalarang</option>
									<option <?php echo ($cabang=='KCP Posindo')?"selected":""?> readonly="readonly">KCP Posindo</option>
									<option <?php echo ($cabang=='KCP Cimahi')?"selected":""?> readonly="readonly">KCP Cimahi</option>
									<option <?php echo ($cabang=='KCP Pasar Baru')?"selected":""?> readonly="readonly">KCP Pasar Baru</option>
									<option <?php echo ($cabang=='KCP Pajajaran')?"selected":""?> readonly="readonly">KCP Pajajaran</option>
									<option <?php echo ($cabang=='KCP Immanuel')?"selected":""?> readonly="readonly">KCP Immanuel</option>
									<option <?php echo ($cabang=='KK Dayeuhkolot')?"selected":""?> readonly="readonly">KK Dayeuhkolot</option>
									<option <?php echo ($cabang=='KK UNJANI')?"selected":""?> readonly="readonly">KK UNJANI</option>
									<option <?php echo ($cabang=='KK Sumbersari')?"selected":""?> readonly="readonly">KK Sumbersari</option>
									<option <?php echo ($cabang=='KK Batujajar')?"selected":""?> readonly="readonly">KK Batujajar</option>
									<option <?php echo ($cabang=='KK Ciwastra')?"selected":""?> readonly="readonly">KK Ciwastra</option>
									<option <?php echo ($cabang=='KK Pojok Cimahi')?"selected":""?> readonly="readonly">KK Pojok Cimahi</option>
									<option <?php echo ($cabang=='KK Karapitan')?"selected":""?> readonly="readonly">KK Karapitan</option>
									<option <?php echo ($cabang=='e-Branch Paskal')?"selected":""?> readonly="readonly">e-Branch Paskal</option>
									<option <?php echo ($cabang=='PP Jamsostek Cimahi')?"selected":""?> readonly="readonly">PP Jamsostek Cimahi</option>
						
									
									</select>
								</div>
								
								
								<div class="form-group">
									<label for="exampleInputName">Alamat</label>
									<input type="text" class="form-control" value="<?php echo $alamat;?>" readonly="readonly">
								</div>
							
							
								<div class="form-group">
									<label for="exampleInputName">Ruang Server</label>
									<input type="text" class="form-control" readonly="readonly" value="<?php echo $ruang_server;?>">
								</div>
										
								<div class="form-group">
									<label for="exampleInputName">Rak Server Tampak Depan</label>
									<input type="text" class="form-control" readonly="readonly" value="<?php echo $rak_server_depan;?>">
								</div>

								<div class="form-group">
									<label for="exampleInputName">Rak Server Tampak Belakang</label>
									<input type="text" class="form-control" readonly="readonly" value="<?php echo $rak_server_belakang;?>">
								</div>

								
								<button class="btn btn-danger" name="hapus" type="submit"><i class="fas fa-sm fa-fw m-r-10 fa-trash-alt"></i>Hapus</button>
								<a href="penghubung.php?nav=tampilserver" type="submit" name="ubah" class="btn btn-warning"><i class="fas fa-sm fa-fw m-r-10 fa-undo-alt"></i>Kembali</a>
							</form>
						</div>
						<!-- END card-body -->
					</div>
					