<style>
input{
	width:100%;
}
</style>
<?php
if(isset($_POST['simpan'])){
	$sql = "INSERT INTO komunikasi(cabang, alamat, tanggal_kunjungan, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36, i37, i38) VALUES ('".$_POST['cabang']."', '".$_POST['alamat']."', '".$_POST['tanggal_kunjungan']."','".$_POST['i1']."', '".$_POST['i2']."', '".$_POST['i3']."', '".$_POST['i4']."', '".$_POST['i5']."', '".$_POST['i6']."', '".$_POST['i7']."', '".$_POST['i8']."', '".$_POST['i9']."', '".$_POST['i10']."', '".$_POST['i11']."', '".$_POST['i12']."', '".$_POST['i13']."', '".$_POST['i14']."', '".$_POST['i15']."', '".$_POST['i16']."', '".$_POST['i17']."', '".$_POST['i18']."', '".$_POST['i19']."', '".$_POST['i20']."', '".$_POST['i21']."', '".$_POST['i22']."', '".$_POST['i23']."', '".$_POST['i24']."', '".$_POST['i25']."', '".$_POST['i26']."', '".$_POST['i27']."', '".$_POST['i28']."', '".$_POST['i29']."', '".$_POST['i30']."', '".$_POST['i31']."', '".$_POST['i32']."', '".$_POST['i33']."', '".$_POST['i34']."', '".$_POST['i35']."', '".$_POST['i36']."', '".$_POST['i37']."', '".$_POST['i38']."')";
	$query = mysqli_query($koneksi, $sql);

?>
<script>alert('Data Berhasil Disimpan')</script>
<?php
}
?>

<?php

	$sql = "select cabang, alamat, tanggal_kunjungan, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36, i37, i38 from komunikasi";
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
						  <div align="center"><strong>CHECKLIST KOMUNIKASI</strong></div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body"><form method="POST">
							 <div class="form-group">
									<label for="exampleInputName">Kantor Cabang/Kantor Kas</label>
									<br>
									<select>
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
								</div>
                                
                                <div class="form-group">
									<label for="exampleInputPassword1">Tanggal Kunjungan</label>
									<input type="date" class="form-control" id="exampleInputName" placeholder="" name="tanggal_kunjungan">
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
                                
                                
                                
                                
                                <table width="100%" cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse">
                                 
                                  <tr>
                                    <td><center><strong>No.</strong></center> </td>
                                    <td align="left"><center><strong>Kegiatan</strong></center></td>
                                 
                                    <td align="left" width="100"><center><strong>Hasil</strong></center></td>
                                    <td><center><strong>Keterangan</strong></center></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="11"><center>1</center></td>
                                    <td align="left">Cek koneksi dan label kabel</td>
                                    <td>&nbsp;</td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    
                                  </tr>
                                  <tr>
                                    <td>a. Koneksi kabel serial ke modem provider MPLS</td>
                                    <td>
                                    
                                    <select name="i<?php echo $input++; ?>" >
                                    <option value=""></option>
                                      <option value="Ada">Ada</option>
                                      <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                    
                                    
                                    
                                    </td>
                                    <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                   
                                  </tr>
                                  <tr>
                                    <td>b. Koneksi kabel UTP ke modem VSAT</td>
                                    
                                    
                                    <td>&nbsp;</td>
                                    <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  
                                  </tr>
                                  
                                    <tr>
                                    <td>-VSAT 1</td>
                           
                                    
                                    <td>
                                    
                                    <select name="i<?php echo $input++; ?>" >
                                        <option value=""></option>
                                      <option value="Ada">Ada </option>
                                      <option value="Tidak Ada">Tidak Ada</option>
                                    </select>
                                    
                                    </td>
                                  <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  
                                  </tr>
                                <tr>
                                    <td>-VSAT 2 (Link Backup)</td>
                               
                                  <td> <select name="i<?php echo $input++; ?>">
                                        <option value=""></option>
                                     
                                      <option value="Ada">Ada </option>
                                      <option value="Tidak Ada">Tidak Ada</option>
                                    </select></td>
                                   <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  
                                  </tr>
                                  
                                       <tr>
                                    <td>c. Koneksi kabel UTP dari router ke switch 1 ke</td>
                                    
                                    
                                    <td><select name="i<?php echo $input++; ?>">
                                        <option value=""></option>
                                     
                                      <option value="Ada">Ada </option>
                                      <option value="Tidak Ada">Tidak Ada</option>
                                    </select></td>
                                    <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  
                                  </tr>
                                  
                                  
                                     <tr>
                                    <td>- switch 2</td>
                                    
                                    
                                    <td><select name="i<?php echo $input++; ?> ">
                                        <option value=""></option>
                                     
                                      <option value="Ada">Ada </option>
                                      <option value="Tidak Ada">Tidak Ada</option>
                                    </select></td>
                                    <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  
                                  </tr>
                                  
                                  
                                   <tr>
                                    <td>- switch 3</td>
                                    
                                    
                                    <td><select name="i<?php echo $input++; ?> ">
                                        <option value=""></option>
                                     
                                      <option value="Ada">Ada </option>
                                      <option value="Tidak Ada">Tidak Ada</option>
                                    </select></td>
                                    <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  
                                  </tr>
                                  
                                  <tr>
                                    <td>- switch 4</td>
                                    
                                    
                                    <td><select name="i<?php echo $input++; ?> ">
                                        <option value=""></option>
                                     
                                      <option value="Ada">Ada</option>
                                      <option value="Tidak Ada">Tidak Ada</option>
                                    </select></td>
                                    <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  
                                  </tr>
                                  
                                  
                                  <tr>
                                    <td>- switch 5</td>
                                    
                                    
                                    <td><select name="i<?php echo $input++; ?> ">
                                        <option value=""></option>
                                     
                                      <option value="Ada">Ada </option>
                                      <option value="Tidak Ada">Tidak Ada</option>
                                    </select></td>
                                    <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  
                                  </tr>
                                  
                                  
                                    
                                  <tr>
                                    <td>e. Koneksi Kabel UTP dari ATM ke Switch</td>
                                    
                                    
                                    <td><select name="i<?php echo $input++; ?> ">
                                        <option value=""></option>
                                     
                                      <option value="Ada">Ada </option>
                                      <option value="Tidak Ada">Tidak Ada</option>
                                       
                                    </select><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  
                                  </tr>
                                  
                                  <tr>
                                    <td rowspan="2"><center>2</center></td>
                                    <td align="left">Konektivitas</td>
                                    <td></td>
                                    <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                   
                                  </tr>
                                  <tr>
                                    <td>a. Dari PC user ke gateway (ping x.x.x.254)</td>
                                    <td><select name="i<?php echo $input++; ?> ">
                                        <option value=""></option>
                                     
                                      <option value="reply">reply</option>
                                      <option value="timeout">timeout</option>
                                      <option value="unreachable">unreachable</option>
                                       
                                    </select></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    
                                  </tr>
                                  <tr>
                                    <td><center>3</center></td>
                                    <td align="left">Cek Fungsi Link Backup</td>
                                    <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    
                                  </tr>
                    
                                </table>
                                <br />
                               Note : Lingkari hasil pemeriksaan
                             <br />
                             <br />
                          <strong>Perangkat Network(Router & Switch)yang Tidak Terpakai
                          </strong><br />
                              
                                <form method="POST">
							 
								<table width="100%" cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse">
                                  <tr>
                                    <td width="30"><center><strong>No.</strong></center></td>
                                    <td align="left"><center><strong>Jenis Perangkat</strong></center></td>
                                 
                                    <td align="left"><center><strong>S N / Type</strong></center></td>
                                    <td><center><strong>Status</strong></center></td>
                                  </tr>
                                  <tr>
                                    <td><center><input type="text" name="i<?php echo $input++; ?>" /></center></td>
                                    <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                   
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    
                                    
                                    <td><input type="text" name="i<?php echo $input++; ?>" /></td>
                                    <td align="left"><input type="text" name="i<?php echo $input++; ?>" /></td>
                                  
                                  </tr>
                                  
        
                                </table>
                                
                                <p>* Jika terdapat Router / Switch yang tidak terpakai di cabang harap segera dilaporkan ke Tim BRS BNI                                </p>
                                <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
								 <button type="reset" name="reset" class="btn btn-danger">Reset</button>
						  </form>
                                
                                
                     
                          
                          </div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
