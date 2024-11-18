<style>
.italic {
   font-style: italic;
   font-size: 12px;
}
</style>
<?php
if(isset($_POST['simpan'])){
	
	$sql = "INSERT INTO review(cabang, alamat, tanggal_kunjungan, inputer, h1a, h1b, h1c, h2a, h3a, h3b, h3c, h3d, h3e, h3f, h4a, komentar) 
	VALUES ('".$_POST['cabang']."', '".$_POST['alamat']."', '".$_POST['tanggal_kunjungan']."', '".$_POST['inputer']."', '".$_POST['h1a']."', 
	'".$_POST['h1b']."', '".$_POST['h1c']."', '".$_POST['h2a']."', '".$_POST['h3a']."', '".$_POST['h3b']."', '".$_POST['h3c']."', '".$_POST['h3d']."', 
	'".$_POST['h3e']."', '".$_POST['h3f']."', '".$_POST['h4a']."', '".$_POST['komentar']."')";
	$query = mysqli_query($koneksi, $sql);

?>

<script>alert('Data Berhasil Disimpan')</script>
<script>window.location='penghubung.php?nav=hasilreviewdata'</script>



<?php
}
?>

<?php

	$sql = "select cabang, alamat, tanggal_kunjungan, inputer, h1a, h1b, h1c, h2a, h3a, h3b, h3c, 
	h3d, h3e, h3f, h4a, komentar from review";
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
						  <div align="center"><strong>HASIL REVIEW</strong></div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST" enctype="multipart/form-data">
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
									<option value="KCP Pasar Baru">KCP Pasar Baru</option>
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
									<input type="text" class="form-control" id="alamat" name="alamat" readonly="readonly">
									
								
									
								</div>
                                
                                <div class="form-group">
									<label for="exampleInputPassword1">Tanggal Kunjungan</label>
									<input type="date" class="form-control" id="exampleInputName" placeholder="" name="tanggal_kunjungan">
								</div>
								
								
								
								 <div class="form-group">
									<label for="exampleInputPassword1">Inputer</label>
									<input type="text" class="form-control" id="exampleInputName" placeholder="" name="inputer" value="<?php echo $_SESSION['nama'];?>" readonly="readonly">
								</div>
								
                                
                                <table cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse" class="table table-responsive">
                                  <tr>
                                   
                                   
                                  </tr>
                                  <tr>
                                    
                                    <td rowspan="3" align="left"><strong>ELECTRICITY</strong></td>
                                    <td rowspan="3">Power</td>
                                   
                                  </tr>
                                  <tr>
                                   
                                  <td>
                                    <select class="form-control" name="h1a">
                                      
                                      <option value=""></option>
                                      <option value="OK">OK</option>
                                      <option value="NOT">NOT</option>
                                      
                                      
                                    </select></td>
                                  
                                     
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
                                    <td><select class="form-control" name="h1c">
                                      
                                      <option value=""></option>
                                      <option value="Befungsi">Berfungsi</option>
                                      <option value="Tidak">Tidak</option>
                                             
                                      
                                    </select> </td>
                                     
                                   
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
                                    <td><select class="form-control" name="h2a">
                                      
                                      <option value=""></option>
                                      <option value="Nyala">Nyala</option>
                                      <option value="Tidak">Tidak</option>
                                      
                                      
                                    </select></td>
                                  </tr>
                                  <tr>
                                   
                                    <td align="left">Suhu</td>
                                    <td><select class="form-control" name="h3a">
                                      
                                      <option value=""></option>
                                      <option value="Nyala">Nyala</option>
                                      <option value="Tidak">Tidak</option>
                                      
                                      
                                    </select></td>
                                  </tr>
                                  <tr>
                                    
                                    
                                   
                                  </tr>
                                  <tr>
                                   
                                  </tr>
                                  <tr>
                                   
                                    <td rowspan="2" align="left"><strong>PENANGKAL PETIR</strong></td>
                                   <td>
                                   </td>
                                    <td align="left"><select  class="form-control" name="h3b">
                                      
                                      <option value=""></option>
                                      <option value="Berfungsi">Berfungsi</option>
                                      <option value="Tidak">Tidak</option>
                                      
                                      
                                    </select></td>
                                   
                                  </tr>
                                  <tr>
                                   
                                   
                                    
                                  </tr>
                                  <tr>
                                    
                                    <td rowspan="4" align="left"><strong>WIRE/CABLING</strong></td>
                                    <td>Power/Electrical
                                    </td>
                                  
                                    <td align="left"><select  class="form-control" name="h3c">
                                      
                                      <option value=""></option>
                                      <option value="Rapih">Rapih</option>
                                      <option value="Tidak">Tidak</option>
                                      
                                      
                                    </select></td>
                                    
                                  </tr>
                                  <tr>
                                   
                                    <td align="left">UTP/LAN</td>
                                    <td><select class="form-control" name="h3d">
                                      
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
                                    <td><select class="form-control" name="h3e">
                                      
                                      <option value=""></option>
                                      <option value="Bersih">Bersih</option>
                                      <option value="Kotor">Kotor</option>
                                      
                                      
                                    </select></td>
                                  </tr>
                                  <tr>
                                   
                                    
                                  </tr>
                                  <tr>
                                    <td>Rack</td>
                                   <td><select class="form-control" name="h3f">
                                      
                                      <option value=""></option>
                                      <option value="Bersih">Bersih</option>
                                      <option value="Kotor">Kotor</option>
                                      
                                      
                                    </select></td>
                                    
                                  </tr>
                                  <tr>
                                   
                                    <td align="left">A.P.A.R.</td>
                                   <td><select class="form-control" name="h4a">
                                      
                                      <option value=""></option>
                                      <option value="Berfungsi">Berfungsi</option>
                                      <option value="Tidak">Tidak</option>
                                      
                                      
                                    </select></td>
                                    
                                  </tr>
                                  
                            
                            </table>
							
Silahkan isi komentar:<br/>  

 <textarea rows="5" cols="50" name="komentar"></textarea><br/>  

							<br />
							
							
                            <button name="simpan" type="submit" class="btn btn-success" value="simpan"><i class="fa fa-fw fa-plus"></i> Simpan</button>
                            <button type="reset" name="reset" class="btn btn-danger"><i class="fas fa-sm fa-fw m-r-10 fa-redo-alt"></i>Reset</button>
						  </form>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
