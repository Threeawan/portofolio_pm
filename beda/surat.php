<style>
input{
	width:100%;
}
</style>

<?php
if(isset($_POST['simpan'])){
	$sql = "INSERT INTO surat(tanggal, nomor_surat, hal, surat_masuk, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, nama, jabatan)VALUES('".$_POST['tanggal']."', '".$_POST['nomor_surat']."', '".$_POST['hal']."', '".$_POST['surat_masuk']."', '".$_POST['i1']."', '".$_POST['i2']."', '".$_POST['i3']."', '".$_POST['i4']."', '".$_POST['i5']."', '".$_POST['i6']."', '".$_POST['i7']."', '".$_POST['i8']."', '".$_POST['i9']."', '".$_POST['i10']."', '".$_POST['i11']."', '".$_POST['i12']."', '".$_POST['i13']."', '".$_POST['i14']."', '".$_POST['i15']."', '".$_POST['i16']."', '".$_POST['i17']."', '".$_POST['i18']."', '".$_POST['i19']."', '".$_POST['i20']."', '".$_POST['i21']."', '".$_POST['i22']."', '".$_POST['i23']."', '".$_POST['i24']."', '".$_POST['i25']."', '".$_POST['i26']."', '".$_POST['i27']."', '".$_POST['i28']."', '".$_POST['i29']."', '".$_POST['i30']."', '".$_POST['nama']."', '".$_POST['jabatan']."' )";
	$query = mysqli_query($koneksi, $sql);

?>
<script>alert('Data Berhasi Disimpan')</script>
<script>window.location='penghubung.php?nav=suratdata'</script>
<?php
}
?>

<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <div align="center"><strong>INPUT SURAT</strong></div>
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

							<label for="exampleInputName">Bandung, </label><input type="date" style="width:130px" name="tanggal" />
                       	
						  </div></label>
								
								
							<div class="form-group">

							<label for="exampleInputName">Nomor : W04/12.3/</label><input type="text" style="width:50px" name="nomor_surat" />
                       
									
								
						  </div></label>
									
							                            
                                
                          <div class="form-group">
									<label for="exampleInputName">Lampiran : - </label>
							
						  </div>
                                
						    <p><strong>	
                                      
                           KEPADA :<br>
                     PT. BANK NEGARA INDONESIA (PERSERO) TBK
                     <br>
                     <u>DIVISI OPERASIONAL TEKNOLOGI INFORMASI</u> </br>
                 
                 
                 </strong></p>
						    <p><strong><em>UP. TEK-BRS</em></strong>
						      </center>
                          </p>
					      <div class="form-group">
							<label for="exampleInputName">Hal :</label>
									<select name="hal" id="hal" style="width:150px">
									<option value=""></option>
                                    <option value="Reposisi Jarkom ATM">Reposisi Jarkom ATM</option>
                                    <option value="Relokasi Jarkom ATM">Relokasi Jarkom ATM</option>
									</select>
								
						  </div>
                          
                          <div class="form-group">

							<label for="exampleInputName">Nomor Surat </label><input type="text" style="width:400px" name="surat_masuk" />
                       
									
								
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
                                    <td align="center"><input type="text" name="i1" style="width:50" /></td>
                                    <td align="center"><input type="text" name="i2"  /></td>
                                    <td align="center"><input type="text" name="i3" /></td>
                                    
									<td align="center">
									<input type="text" name="i4" />
                                    </td>
									
                                    <td align="center">
									<select name="i5" id="i5">
                                    <option value=""></option>
                                    <option value="Tangara">Tangara</option>
                                    <option value="SC Media">SC Media</option>
                                    <option value="Telkom">Telkom</option>
                                    <option value="Lintasarta">Lintasarta</option>
                                    <option value="Primacom">Primacom</option>
                                    </select>
                                    

									</td>
                                    <td align="center">
									<select name="i6" id="i6">
									<option value=""></option>
									<option value="Reposisi">Reposisi</option>
									<option value="Relokasi">Relokasi</option>
									</select>
									</td>
                                  </tr>
                                  <tr>
                                    <td align="center"><input type="text" name="i7" style="width:50" /></td>
                                    <td align="center"><input type="text" name="i8" /></td>
                                    <td align="center"><input type="text" name="i9" /></td>
                                    <td align="center">
                               <input type="text" name="i10" />     
                                    </td>
                                    <td align="center"><select name="i11" id="i11">
                                    <option value=""></option>
                                    <option value="Tangara">Tangara</option>
                                    <option value="SC Media">SC Media</option>
                                    <option value="Telkom">Telkom</option>
                                    <option value="Lintasarta">Lintasarta</option>
                                    <option value="Primacom">Primacom</option>
                                    </select>
                                    
</td>
                                    <td align="center"><select name="i12" id="i12">
									<option value=""></option>
									<option value="Reposisi">Reposisi</option>
									<option value="Relokasi">Relokasi</option>
									</select></td>
                                    
                                  </tr>
                                  <tr>
                                    <td align="center"><input type="text" name="i13" style="width:50" /></td>
                                    <td align="center"><input type="text" name="i14" /></td>
                                    <td align="center"><input type="text" name="i15" /></td>
                                    <td align="center">
                                <input type="text" name="i16" />    
                                    </td>
                                    <td align="center"><select name="i17" id="i17">
                                    <option value=""></option>
                                    <option value="Tangara">Tangara</option>
                                    <option value="SC Media">SC Media</option>
                                    <option value="Telkom">Telkom</option>
                                    <option value="Lintasarta">Lintasarta</option>
                                    <option value="Primacom">Primacom</option>
                                    </select>
                                    
</td>
                                    <td align="center"><select name="i18" id="i18">
									<option value=""></option>
									<option value="Reposisi">Reposisi</option>
									<option value="Relokasi">Relokasi</option>
									</select></td>
                                  </tr>
                                  <tr>
                                    <td align="center">
									<input type="text" name="i19" style="width:50"/>
									</td>
                                    <td align="center"><input type="text" name="i20" /></td>
                                    <td align="center"><input type="text" name="i21" /></td>
                                    <td align="center"><input type="text" name="i22" /></td>
                                    <td align="center"><select name="i23" id="i23">
                                    <option value=""></option>
                                    <option value="Tangara">Tangara</option>
                                    <option value="SC Media">SC Media</option>
                                    <option value="Telkom">Telkom</option>
                                    <option value="Lintasarta">Lintasarta</option>
                                    <option value="Primacom">Primacom</option>
                                    </select>
                                    
</td>
                                     <td align="center"><select name="i24" id="i24">
									<option value=""></option>
									<option value="Reposisi">Reposisi</option>
									<option value="Relokasi">Relokasi</option>
									</select></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i25" style="width:50" /></td>
                                    <td><input type="text" name="i26" /></td>
                                    <td><input type="text" name="i27" /></td>
                                    <td><input type="text" name="i28" /></td>
                                    <td align="center"><select name="i29" id="i29">
                                    <option value=""></option>
                                    <option value="Tangara">Tangara</option>
                                    <option value="SC Media">SC Media</option>
                                    <option value="Telkom">Telkom</option>
                                    <option value="Lintasarta">Lintasarta</option>
                                    <option value="Primacom">Primacom</option>
                                    </select>
                                    
</td>
                                    <td align="center"><select name="i30" id="i30">
									<option value=""></option>
									<option value="Reposisi">Reposisi</option>
									<option value="Relokasi">Relokasi</option>
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
                            
                            
                            
                            <u><strong><input type="text" style="width:100px" name="nama" /></strong></u><br />
                            <strong><input type="text" style="width:150px" name="jabatan" /></strong></p>
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

					
