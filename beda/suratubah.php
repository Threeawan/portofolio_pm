<style>
input{
	width:100%;
}
</style>

<?php
if(isset($_POST['ubah'])){
	$query = mysqli_query($koneksi, "update surat set tanggal='".$_POST['tanggal']."', nomor_surat='".$_POST['nomor_surat']."', hal='".$_POST['hal']."', surat_masuk='".$_POST['surat_masuk']."', i1='".$_POST['i1']."', i2='".$_POST['i2']."', i3='".$_POST['i3']."', i4='".$_POST['i4']."', i5='".$_POST['i5']."', i6='".$_POST['i6']."', i7='".$_POST['i7']."', i8='".$_POST['i8']."', i9='".$_POST['i9']."', i10='".$_POST['i10']."', i11='".$_POST['i11']."', i12='".$_POST['i12']."', i13='".$_POST['i13']."', i14='".$_POST['i14']."', i15='".$_POST['i15']."', i16='".$_POST['i16']."', i17='".$_POST['i17']."', i18='".$_POST['i18']."', i19='".$_POST['i19']."', i20='".$_POST['i20']."', i21='".$_POST['i21']."', i22='".$_POST['i22']."', i23='".$_POST['i23']."', i24='".$_POST['i24']."', i25='".$_POST['i25']."', i26='".$_POST['i26']."', i27='".$_POST['i27']."', i28='".$_POST['i28']."', i29='".$_POST['i29']."', i30='".$_POST['i30']."', nama='".$_POST['nama']."', jabatan='".$_POST['jabatan']."' where id='".$_GET['id']."'");
?>
<script>alert('Data Berhasil Diubah')</script>
<script>window.location='?nav=suratdata'</script>
<?php
}
?>




<?php
$query = mysqli_query($koneksi, "select id, tanggal, nomor_surat, hal, surat_masuk, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, nama, jabatan from surat where id='".$_GET['id']."'");
while($data = mysqli_fetch_array($query)){

$id = $data['id'];
$tanggal = $data['tanggal'];
$nomor_surat = $data['nomor_surat'];
$hal = $data['hal'];
$surat_masuk = $data['surat_masuk'];

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
$nama = $data['nama'];	
$jabatan = $data['jabatan'];
}
?>

<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <div align="center"><strong>UBAH SURAT</strong></div>
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

							<label for="exampleInputName">Bandung, </label><input type="date" style="width:130px" name="tanggal" value="<?php echo $tanggal;?>" />
                       	
						  </div></label>
								
								
							<div class="form-group">

							<label for="exampleInputName">Nomor : W04/12.3/</label><input type="text" style="width:50px" name="nomor_surat" value="<?php echo $nomor_surat;?>"/>
                       
									
								
						  </div></label>
									
							                            
                                
                          <div class="form-group">
									<label for="exampleInputName">Lampiran : - </label>
							
						  </div>
                                
						    <p><strong>	
                                      
                           KEPADA :<br>
                     PT. BANK NEGARA INDONESIA (PERSERO)TBK
                     <br>
                     <u>DIVISI OPERASIONAL TEKNOLOGI INFORMASI</u> </br>
                 
                 
                 </strong></p>
						    <p><strong><em>UP. TEK-BRS</em></strong>
						      </center>
                          </p>
					      <div class="form-group">
							<label for="exampleInputName">Hal :</label>
							<select name="hal" id="hal" value="<?php echo $hal;?>">
                                    <option <?php echo($hal=='')?"selected":""?>></option>
                                    <option <?php echo($hal=='Reposisi Jarkom ATM')?"selected":""?>>Reposisi Jarkom ATM</option>
                                    <option <?php echo($hal=='Relokasi Jarkom ATM')?"selected":""?>>Relokasi Jarkom ATM</option>
                                    
                                    </select>
								
						  </div>
                          
                          <div class="form-group">

							<label for="exampleInputName">Nomor Surat </label><input type="text" style="width:400px" name="surat_masuk" value="<?php echo $surat_masuk;?>"  />
                       
									
								
						  </div></label>

                      
                          <p>Berdasarkan surat-surat tersebut diatas, dengan ini kami sampaikan permohonan reposisi Jarkom ATM dengan detail sebagai berikut :                           </p>
                          <table width="100%" cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse">
                                  <tr>
                                    <td width="40"><div align="center"><strong>No.</strong></div></td>
                                    <td width="130"><div align="center"><strong>ATM ID</strong></div></td>
                                    <td><div align="center"><strong>Lokasi Lama</strong></div></td>
                                    <td><div align="center"><strong>Lokasi Baru</strong></div></td>
                                    <td width="100"><div align="center"><strong>Jarkom</strong></div></td>
                                    <td width="100"><div align="center"><strong>Pelaksanaan</strong></div></td>
                                  </tr>
                                  <tr>
                                    <td align="center"><input type="text" name="i1" value="<?php echo $i1;?>" style="width:40" /></td>
                                    <td align="center"><input type="text" name="i2" value="<?php echo $i2;?>" /></td>
                                    <td align="center"><input type="text" name="i3" value="<?php echo $i3;?>"/></td>
                                    
									<td align="center">
									<input type="text" name="i4" value="<?php echo $i4;?>" />
                                    </td>
									
                                    <td align="center">
									<select name="i5" id="i5" value="<?php echo $i5;?>">
                                    <option <?php echo($i5=='')?"selected":""?>></option>
                                    <option <?php echo($i5=='Tangara')?"selected":""?>>Tangara</option>
                                    <option <?php echo($i5=='SC Media')?"selected":""?>>SC Media</option>
                            <option <?php echo($i5=='Telkom')?"selected":""?>>Telkom</option>
                         <option <?php echo($i5=='Lintasarta')?"selected":""?>>Lintasarta</option>
                                    <option <?php echo($i5=='Primacom')?"selected":""?>>Primacom</option>
                                    
                                    </select>
                                    

									</td>
                                    <td align="center">
									<select name="i6" id="i6" value="<?php echo $i6;?>">
                                    <option <?php echo($i6=='')?"selected":""?>></option>
									
									<option <?php echo($i6=='Reposisi')?"selected":""?>>Reposisi</option>
									<option <?php echo($i6=='Relokasi')?"selected":""?>>Relokasi</option>
									</select>
									</td>
                                  </tr>
                                  <tr>
                                    <td align="center"><input type="text" name="i7" value="<?php echo $i7;?>" style="width:50" /></td>
                                    <td align="center"><input type="text" name="i8" value="<?php echo $i8;?>" /></td>
                                    <td align="center"><input type="text" name="i9"  value="<?php echo $i9;?>"/></td>
                                    <td align="center">
                               <input type="text" name="i10" value="<?php echo $i10;?>" />     
                                    </td>
                                    <td align="center"><select name="i11" id="i11" value="<?php echo $i11;?>">
                                    <option <?php echo($i11=='')?"selected":""?>></option>
                                    <option <?php echo($i11=='Tangara')?"selected":""?>>Tangara</option>
                                    <option <?php echo($i11=='SC Media')?"selected":""?>>SC Media</option>
                            <option <?php echo($i11=='Telkom')?"selected":""?>>Telkom</option>
                         <option <?php echo($i11=='Lintasarta')?"selected":""?>>Lintasarta</option>
                                    <option <?php echo($i11=='Primacom')?"selected":""?>>Primacom</option>
                                    
                                    </select>
                                    
</td>
                                    <td align="center"><select name="i12" id="i12" value="<?php echo $i12;?>">
                                    <option <?php echo($i12=='')?"selected":""?>></option>
									
									<option <?php echo($i12=='Reposisi')?"selected":""?>>Reposisi</option>
									<option <?php echo($i12=='Relokasi')?"selected":""?>>Relokasi</option>
									</select></td>
                                    
                                  </tr>
                                  <tr>
                                    <td align="center"><input type="text" name="i13" value="<?php echo $i13;?>" style="width:50" /></td>
                                    <td align="center"><input type="text" name="i14" value="<?php echo $i14;?>" /></td>
                                    <td align="center"><input type="text" name="i15" value="<?php echo $i15;?>" /></td>
                                    <td align="center">
                                <input type="text" name="i16" value="<?php echo $i16;?>" />    
                                    </td>
                                    <td align="center"><select name="i17" id="i17" value="<?php echo $i17;?>">
                                    <option <?php echo($i17=='')?"selected":""?>></option>
                                    <option <?php echo($i17=='Tangara')?"selected":""?>>Tangara</option>
                                    <option <?php echo($i17=='SC Media')?"selected":""?>>SC Media</option>
                            <option <?php echo($i17=='Telkom')?"selected":""?>>Telkom</option>
                         <option <?php echo($i17=='Lintasarta')?"selected":""?>>Lintasarta</option>
                                    <option <?php echo($i17=='Primacom')?"selected":""?>>Primacom</option>
                                    
                                    </select>
                                    
</td>
                                    <td align="center"><select name="i18" id="i18" value="<?php echo $i18;?>">
                                    <option <?php echo($i18=='')?"selected":""?>></option>
									
									<option <?php echo($i18=='Reposisi')?"selected":""?>>Reposisi</option>
									<option <?php echo($i18=='Relokasi')?"selected":""?>>Relokasi</option>
									</select></td>
                                  </tr>
                                  <tr>
                                    <td align="center">
									<input type="text" name="i19" value="<?php echo $i19;?>" style="width:50"/>
									</td>
                                    <td align="center"><input type="text" name="i20" value="<?php echo $i20;?>" /></td>
                                    <td align="center"><input type="text" name="i21"  value="<?php echo $i21;?>"/></td>
                                    <td align="center"><input type="text" name="i22"  value="<?php echo $i22;?>"/></td>
                                    <td align="center"><select name="i23" id="i23" value="<?php echo $i23;?>">
                                    <option <?php echo($i23=='')?"selected":""?>></option>
                                    <option <?php echo($i23=='Tangara')?"selected":""?>>Tangara</option>
                                    <option <?php echo($i23=='SC Media')?"selected":""?>>SC Media</option>
                            <option <?php echo($i23=='Telkom')?"selected":""?>>Telkom</option>
                         <option <?php echo($i23=='Lintasarta')?"selected":""?>>Lintasarta</option>
                                    <option <?php echo($i23=='Primacom')?"selected":""?>>Primacom</option>
                                    
                                    </select>
                                    
</td>
                                     <td align="center"><select name="i24" id="i24" value="<?php echo $i24;?>">
                                    <option <?php echo($i24=='')?"selected":""?>></option>
									
									<option <?php echo($i24=='Reposisi')?"selected":""?>>Reposisi</option>
									<option <?php echo($i24=='Relokasi')?"selected":""?>>Relokasi</option>
									</select></td>
                                  </tr>
                                  
                                  <tr>
                                    <td align="center">
									<input type="text" name="i25" value="<?php echo $i25;?>" style="width:50"/>
									</td>
                                    <td align="center"><input type="text" name="i26" value="<?php echo $i26;?>" /></td>
                                    <td align="center"><input type="text" name="i27"  value="<?php echo $i27;?>"/></td>
                                    <td align="center"><input type="text" name="i28"  value="<?php echo $i28;?>"/></td>
                                    <td align="center"><select name="i29" id="i29" value="<?php echo $i29;?>">
                                    <option <?php echo($i29=='')?"selected":""?>></option>
                                    <option <?php echo($i29=='Tangara')?"selected":""?>>Tangara</option>
                                    <option <?php echo($i29=='SC Media')?"selected":""?>>SC Media</option>
                            <option <?php echo($i29=='Telkom')?"selected":""?>>Telkom</option>
                         <option <?php echo($i29=='Lintasarta')?"selected":""?>>Lintasarta</option>
                                    <option <?php echo($i29=='Primacom')?"selected":""?>>Primacom</option>
                                    
                                    </select>
                                    
</td>
                                     <td align="center"><select name="i30" id="i30" value="<?php echo $i30;?>">
                                    <option <?php echo($i30=='')?"selected":""?>></option>
									
									<option <?php echo($i30=='Reposisi')?"selected":""?>>Reposisi</option>
									<option <?php echo($i30=='Relokasi')?"selected":""?>>Relokasi</option>
									</select></td>
                                  </tr>
                                  
                                  
                                  
                                  
                                  
                                                                    
                                </table><br />
                          <p>Apabila memerlukan korespondensi lebih lanjut, Saudara dapat menghubungi PIC kami yaitu, Tek WBN : Sdr. Gusti Rahim (08122332409), Sdr. Dwi Bekti SM (081381111321), Sdr. Moch. Tryawan  (082128621428), Sdr. Ricko (08112070900).<br />
 <br />
Kami harapkan bantuan dan hubungan teknis dari team Divisi Teknologi Informasi guna kelancaran dan pemasangan link jarkom dimaksud pada kesempatan pertama. Atas perhatian dan kerja samanya kami ucapkan terima kasih.
<br />
<strong><br />
                PT. BANK NEGARA INDONESIA (PERSERO) TBK</strong><br />
                <strong>KANTOR WILAYAH 04</strong> </p>
                          <p>&nbsp;</p>
                          <p><br />
                            
                            
                            
                            <u><strong><input type="text" style="width:100px" name="nama" value="<?php echo $nama;?>"/></strong></u><br />
                            <strong><input type="text" style="width:150px" name="jabatan" value="<?php echo $jabatan;?>"/></strong></p>
							 <button type="submit" name="ubah" class="btn btn-info"><i class="fas fa-sm fa-fw m-r-10 fa-pencil-alt"></i>Ubah</button>
							 <a href="?nav=suratdata" class="btn btn-warning"><i class="fas fa-sm fa-fw m-r-10 fa-undo-alt"></i>Kembali</a>
							 
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

					
