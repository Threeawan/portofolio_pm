<style>
input{
	width:100%;
}
</style>

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

							<label for="exampleInputName">Bandung, </label><input type="date" style="width:130px" name="tanggal" value="<?php echo $tanggal;?>" readonly="readonly" />
                       	
						  </div></label>
								
								
							<div class="form-group">

							<label for="exampleInputName">Nomor : W04/12.3/</label><input type="text" style="width:50px" name="nomor_surat" value="<?php echo $nomor_surat;?>" readonly="readonly" />
                       
									
								
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
							<input type="text" name="hal" value="<?php echo $hal;?>" style="width:150px" readonly="readonly">
								
						  </div>
                          
                          <div class="form-group">

							<label for="exampleInputName">Nomor Surat </label><input type="text" style="width:400px" name="surat_masuk" value="<?php echo $surat_masuk;?>" readonly="readonly" />
                       
									
								
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
                                    <td align="center"><?php echo $i1;?></td>
                                    <td align="center"><?php echo $i2;?></td>
                                    <td align="center"><?php echo $i3;?></td>
                                    
									<td align="center">
									<?php echo $i4;?>
                                    </td>
									
                                    <td align="center" width="50">
									<?php echo $i5;?>
                                    </td>
                                    <td align="center">
									<?php echo $i6;?>
																		</td>
                                  </tr>
                                  <tr>
                                    <td align="center"><?php echo $i7;?></td>
                                    <td align="center"><?php echo $i8;?></td>
                                    <td align="center"><?php echo $i9;?></td>
                                    <td align="center">
<?php echo $i10;?>     
                                    </td>
                                    <td align="center"><?php echo $i11;?>
                                   
                                    <td align="center"><?php echo $i12;?>
									</td>
                                    
                                  </tr>
                                  <tr>
                                    <td align="center"><?php echo $i13;?></td>
                                    <td align="center"><?php echo $i14;?></td>
                                    <td align="center"><?php echo $i15;?></td>
                                    <td align="center"> <?php echo $i16;?>    
                                    </td>
                                    <td align="center"><?php echo $i17;?>
                            
</td>
                                    <td align="center"><?php echo $i18;?></td>
                                  </tr>
                                  <tr>
                                    <td align="center">
									<?php echo $i19;?>
									</td>
                                    <td align="center"><?php echo $i20;?></td>
                                    <td align="center"><?php echo $i21;?></td>
                                    <td align="center"><?php echo $i22;?></td>
                                    <td align="center"><?php echo $i23;?>
                                    
</td>
                                     <td align="center"><?php echo $i24;?>
	</td>
                                  </tr>
                                  
                                  <tr>
                                    <td align="center">
									<?php echo $i25;?>
									</td>
                                    <td align="center"><?php echo $i26;?></td>
                                    <td align="center"><?php echo $i27;?></td>
                                    <td align="center"><?php echo $i28;?></td>
                                    <td align="center"><?php echo $i29;?>
                                    
</td>
                                     <td align="center"><?php echo $i30;?>
									</td>
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
                            
                            
                            
                            <u><strong><input type="text" style="width:100px" value="<?php echo $nama;?>"></strong></u><br />
                            <strong><input type="text" style="width:150px" value="<?php echo $jabatan;?>"></strong></p>
							 
							<a href="printsurat.php?id=<?php echo $_GET['id'];?>" target="_blank" class="btn btn-warning"><i class="fas fa-sm fa-fw m-r-10 fa-pen-alt"></i>Cetak</a>
							<a href="?nav=suratdata" class="btn btn-primary"><i class="fas fa-sm fa-fw m-r-10 fa-undo-alt"></i>Kembali</a>
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

					
