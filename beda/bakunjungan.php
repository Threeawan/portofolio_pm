<style>
input{
	width:100%;
}
</style>


<?php
if(isset($_POST['simpan'])){
	$sql = "INSERT INTO bakunjungan(tanggal_kunjungan, inputer, cabang, alamat, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36) VALUES ('".$_POST['tanggal_kunjungan']."', '".$_POST['inputer']."','".$_POST['cabang']."', '".$_POST['alamat']."', '".$_POST['i1']."', '".$_POST['i2']."', '".$_POST['i3']."', '".$_POST['i4']."', '".$_POST['i5']."', '".$_POST['i6']."', '".$_POST['i7']."', '".$_POST['i8']."', '".$_POST['i9']."', '".$_POST['i10']."', '".$_POST['i11']."', '".$_POST['i12']."', '".$_POST['i13']."', '".$_POST['i14']."', '".$_POST['i15']."', '".$_POST['i16']."', '".$_POST['i17']."', '".$_POST['i18']."', '".$_POST['i19']."', '".$_POST['i20']."', '".$_POST['i21']."', '".$_POST['i22']."', '".$_POST['i23']."', '".$_POST['i24']."', '".$_POST['i25']."', '".$_POST['i26']."', '".$_POST['i27']."', '".$_POST['i28']."', '".$_POST['i29']."', '".$_POST['i30']."', '".$_POST['i31']."', '".$_POST['i32']."', '".$_POST['i33']."', '".$_POST['i34']."', '".$_POST['i35']."', '".$_POST['i36']."')";
	$query = mysqli_query($koneksi, $sql);

?>
<script>alert('Data Berhasil Disimpan')</script>
<script>window.location='penghubung.php?nav=bakunjungandata'</script>

<?php
}
?>

<?php
$sql = "select tanggal_kunjungan, cabang, alamat, inputer, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36 from bakunjungan";
$qry = mysqli_query($koneksi, $sql);
$no = 1;
while($data=mysqli_fetch_array($qry)){

?>
<?php
}
?>









<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <div align="center"><strong>BERITA ACARA KUNJUNGAN/SUPERVISI/MAINTENANCE </strong></div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body"><div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body"><form method="POST">
						  <div class="form-group">
								  <label for="exampleInputDate">Tanggal Kunjungan</label>
								  <input type="date" class="form-control" id="exampleInputDate" name="tanggal_kunjungan">
								</div>
								
								
                                <div class="form-group">
								  <label for="exampleInputName">Kantor Cabang/Kantor Kas/Unit</label>
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
									<option value="Kantor Wilayah">Kantor Wilayah</option>
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
									
									
									<option value="KC Tasikmalaya">KC Tasikmalaya</option>
									<option value="KCP Ciawi">KCP Ciawi</option>
									<option value="KCP Universitas Siliwangi">KCP Universitas Siliwangi</option>
									<option value="KCP Ciamis">KCP Ciamis</option>
									<option value="KCP Singaparna">KCP Singaparna</option>
									<option value="KCP Karan Nunggal">KCP Karang Nunggal</option>
									<option value="KCP Cikuburuk">KCP Cikurubuk</option>
									<option value="KK Sutisna Senjaya">KK Sutisna Senjaya</option>
									<option value="KK Kawali">KK Kawali</option>
									
									
									
									<option value="KC Majalaya">KC Majalaya</option>
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
									
									
									
									
									<option value="KC Sukabumi">KC Sukabumi</option>
									<option value="KCP Ciwangi">KCP Ciwangi</option>
									<option value="KCP Cibadak">KCP Cibadak</option>
									<option value="KCP Cicurug">KCP Cicurug</option>
									<option value="KCP Surade">KCP Surade</option>
									<option value="KCP Pelabuhan Ratu">KCP Pelabuhan Ratu</option>
									<option value="KK Pangleseran">KK Pangleseran</option>
									
								
									
									<option value="KC Banjar">KC Banjar</option>
									<option value="KCP Pangandaran">KCP Pangandaran</option>
									<option value="KK Banjar">KK Banjarsari</option>
									
									
									<option value="KC Garut">KC Garut</option>
									<option value="KCP Cikajang">KCP Cikajang</option>
									<option value="KCP Pameungpeuk">KCP Pameungpeuk</option>
									<option value="KK Kadungora">KK Kadungora</option>
									<option value="KK Limbangan">KK Limbangan</option>
									<option value="KK Ciledug">KK Ciledug</option>
								
									
									<option value="KC Cianjur">KC Cianjur</option>
									<option value="KCP Cipanas">KCP Cipanas</option>
									<option value="KCP Ciranjang">KCP Ciranjang</option>
									<option value="KCP Cibeber">KCP Cibeber</option>
									<option value="Hos Tjokroaminoto">KK Hos Tjokroaminoto</option>
									
									
									<option value="KC Indramayu">KC Indramayu</option>
									<option value="KCP Jatibarang">KCP Jatibarang</option>
									<option value="KCP Patrol">KCP Patrol</option>
									<option value="KCP Haurgeulis">KCP Haurgeulis</option>
									<option value="KCP Karangampel">KCP Karangampel</option>
									
									
									
									<option value="KC Kuningan">KC Kuningan</option>
									<option value="KCP Cikijing">KCP Cikijing</option>
									<option value="KCP Majalengka">KCP Majalengka</option>
									<option value="KCP Kadipaten">KCP Kadipaten</option>
									<option value="KK Cilimus">KK Cilimus</option>
									<option value="KK Jatiwangi">KK Jatiwangi</option>
									<option value="KK BIJB Kertajati">KK BIJB Kertajati</option>
									<option value="PP Universitas Kuningan">PP Universitas Kuningan</option>
									
									
									
									<option value="KC Purwakarta">KC Purwakarta</option>
									<option value="KCP Plered">KCP Plered</option>
									<option value="KK Kota Bukit Indah">KK Kota Bukit Indah</option>
									<option value="KK Jatiluhur">KK Jatiluhur</option>
									<option value="KK Cikopo">KK Cikopo</option>
									
									
									
									<option value="KC Sumedang">KC Sumedang</option>
									<option value="KCP Tanjungsari">KCP Tanjungsari</option>
									
									
									<option value="KC Subang">KC Subang</option>
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
								<label for="exampleInputDate">Alamat</label>
								  <input type="text" class="form-control" id="alamat" name="alamat">
								</div>
								
                                 <div class="form-group">
									<label for="exampleInputPassword1">Inputer</label><br>
									<input type="text" name="inputer" class="form-control" id="exampleInputName" value="<?php echo $_SESSION['nama'];?>" readonly>
								</div>
                                
                                
                                
                          <table width="100%" cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse">
                              
                                  <tr>
                                    <td width="40"><center><strong>No.</strong></center> </td>
                                    <td width="30" align="left"><center><strong>JENIS KEGIATAN</strong></center></td>
                                 
                                    <td align="left"><center><strong>TINDAK LANJUT</strong></center></td>
                                    <td><center><strong>KETERANGAN</strong></center></td>
                                  </tr>
                                  <tr>
                                    <td><center><input type="text" name="i1" class="form-control" /></center></td>
                                    <td align="left">
                                    <select name="i2" id="i2" class="form-control">
                                    <option value=""></option>	
                                    <option value="Handling Problem">Handling Problem</option>
                                    <option value="Preventive Maintenance">Preventive Maintenance</option>	
                                    <option value="Deployment/Relokasi">Deployment/Relokasi</option>	
                                    <option value="Remotting">Remotting</option>	
                                    </select>

                                	</td>
                                    <td><input type="text" name="i3" class="form-control" /></td>
                                    <td><input type="text" name="i4" class="form-control" /></td>
                                    
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i5" class="form-control" /></td>
                                    <td>
                                    <select name="i6" id="i6" class="form-control">
                                    <option value=""></option>	
									<option value="Handling Problem">Handling Problem</option>
                                    <option value="Preventive Maintenance">Preventive Maintenance</option>	
                                    <option value="Deployment/Relokasi">Deployment/Relokasi</option>	
                                    <option value="Remotting">Remotting</option>	
                                    </select>
                                	</td>
                                   <td><input type="text" name="i7" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i8" class="form-control"/></td>
                                   
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i9" class="form-control"/></td>
                                    <td>
                                    <select name="i10" id="i10" class="form-control">
                                    <option value=""></option>	
									<option value="Handling Problem">Handling Problem</option>
                                    <option value="Preventive Maintenance">Preventive Maintenance</option>	
                                    <option value="Deployment/Relokasi">Deployment/Relokasi</option>	
                                    <option value="Remotting">Remotting</option>	
                                    </select>
                                	</td>
                                    
                                    
                                    <td><input type="text" name="i11" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i12" class="form-control"/></td>
                                  
                                  </tr>
                                  
                                    <tr>
                                    <td><input type="text" name="i13" class="form-control"/></td>
                                    <td>
                                    <select name="i14" id="i14" class="form-control">
                                    <option value=""></option>	
									<option value="Handling Problem">Handling Problem</option>
                                    <option value="Preventive Maintenance">Preventive Maintenance</option>	
                                    <option value="Deployment/Relokasi">Deployment/Relokasi</option>	
                                    <option value="Remotting">Remotting</option>	
                                    </select>
                                	</td>
                           
                                    
                                    <td><input type="text" name="i15" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i16" class="form-control"/></td>
                                  
                                  </tr>
                                <tr>
                                  <td><input type="text" name="i17" class="form-control"/></td>
                                    <td>
                                    <select name="i18" id="i18" class="form-control">
                                    <option value=""></option>
									<option value="Handling Problem">Handling Problem</option>
                                    <option value="Preventive Maintenance">Preventive Maintenance</option>	
                                    <option value="Deployment/Relokasi">Deployment/Relokasi</option>	
                                    <option value="Remotting">Remotting</option>	
                                    </select>
                                	</td>
                               
                                  <td><input type="text" name="i19" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i20" class="form-control"/></td>
                                  
                            </tr>
                                  
                                       <tr>
                                    <td><input type="text" name="i21" class="form-control"/></td>
                                    <td>
                                    <select name="i22" id="i22" class="form-control">
                                    <option value=""></option>								
                                    <option value="Handling Problem">Handling Problem</option>
                                    <option value="Preventive Maintenance">Preventive Maintenance</option>	
                                    <option value="Deployment/Relokasi">Deployment/Relokasi</option>	
                                    <option value="Remotting">Remotting</option>	
                                    </select>
                                	</td>
                                    
                                    
                                    <td><input type="text" name="i23" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i24" class="form-control"/></td>
                                  
                                  </tr>
                                  
                                  
                                     <tr>
                                    <td><input type="text" name="i25" class="form-control"/></td>
                                    <td>
                                    <select name="i26" id="i26" class="form-control">
                                    <option value=""></option>	
									<option value="Handling Problem">Handling Problem</option>
                                    <option value="Preventive Maintenance">Preventive Maintenance</option>	
                                    <option value="Deployment/Relokasi">Deployment/Relokasi</option>	
                                    <option value="Remotting">Remotting</option>	
                                    </select>
                                	</td>
                                    
                                    
                                    <td><input type="text" name="i27" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i28" class="form-control"/></td>
                                  
                                  </tr>
                                  
                                  
                                   <tr>
                                    <td><input type="text" name="i29" class="form-control"/></td>
                                    <td>
                                    <select name="i30" id="i30" class="form-control">
                                    <option value=""></option>	
									<option value="Handling Problem">Handling Problem</option>
                                    <option value="Preventive Maintenance">Preventive Maintenance</option>	
                                    <option value="Deployment/Relokasi">Deployment/Relokasi</option>	
                                    <option value="Remotting">Remotting</option>	
                                    </select>
                                	</td>
                                    
                                    
                                    <td><input type="text" name="i31" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i32" class="form-control"/></td>
                                  
                                  </tr>
                                  
                                  <tr>
                                    <td><input type="text" name="i33" class="form-control"/></td>
                                    <td>
                                    <select name="i34" id="i34" class="form-control">
                                    <option value=""></option>	
									<option value="Handling Problem">Handling Problem</option>
                                    <option value="Preventive Maintenance">Preventive Maintenance</option>	
                                    <option value="Deployment/Relokasi">Deployment/Relokasi</option>	
                                    <option value="Remotting">Remotting</option>	
                                    </select>
                                	</td>
                                    
                                    
                                    <td><input type="text" name="i35" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i36" class="form-control"/></td>
                                  
                                  </tr>
                     
                    
                                </table>
                                <br />
                          <form method="POST">
                            <button name="simpan" type="submit" class="btn btn-success"><i class="fa fa-fw fa-plus"></i> Simpan</button>
							 <button type="reset" name="reset" class="btn btn-danger"><i class="fas fa-sm fa-fw m-r-10 fa-redo-alt"></i>Reset</button>
						  </form>
                                
                                
                     
                          
                      </div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div></div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					