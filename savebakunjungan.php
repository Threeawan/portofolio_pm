<style>
input{
	width:100%;
}
</style>

<?php
$koneksi = mysqli_connect("localhost", "root", "", "pmbni");
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Cheklist_BA_Kunjungan.xls");
$query = mysqli_query($koneksi, "SELECT id, cabang, hari, tanggal, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36 FROM bakunjungan WHERE id='".$_GET['id']."'");
										while($data = mysqli_fetch_array($query)){
$id = $data['id'];
$cabang = $data['cabang'];
$hari = $data['hari'];
$tanggal = $data['tanggal'];
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
}
?>


<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
                        <br />
						  <p align="center"><strong>BERITA ACARA </strong></p>
						  <p align="center"><strong>KUNJUNGAN/SUPERVISI/MAINTENANCE </strong></p>
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
						
                          <p><strong>Tanggal : </strong><?php echo date('d-m-Y',strtotime($tanggal)); ?><br />
                            <strong>Hari :</strong> <?php echo $hari; ?><br />
                          <strong>Cabang :</strong> <?php echo $cabang; ?></p>
                          <table width="100%" cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse">
                              
                                  <tr>
                                    <td width="10"><div align="left"><strong>NO.</strong></div></td>
                                    <td align="left"><center><strong>JENIS KEGIATAN</strong></center></td>
                                 
                                    <td align="left"><center><strong>TINDAK LANJUT</strong></center></td>
                                    <td><center><strong>KETERANGAN</strong></center></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><?php echo $i1; ?>&nbsp;</div></td>
                                    <td align="left"><div align="left"><?php echo $i2; ?></div></td>
                                    <td><div align="left"><?php echo $i3; ?></div></td>
                                    <td><div align="left"><?php echo $i4; ?></div></td>
                                    
                                  </tr>
                                  <tr>
                                    <td><div align="left"><?php echo $i5; ?>&nbsp;</div></td>
                                    <td><div align="left"><?php echo $i6; ?></div></td>
                                   <td><div align="left"><?php echo $i7; ?></div></td>
                                    <td align="left"><div align="left"><?php echo $i8; ?></div></td>
                                   
                                  </tr>
                                  <tr>
                                    <td><div align="left"><?php echo $i9; ?>&nbsp;</div></td>
                                    <td><div align="left"><?php echo $i10; ?></div></td>
                                    
                                    
                                    <td><div align="left"><?php echo $i11; ?></div></td>
                                    <td align="left"><div align="left"><?php echo $i12; ?></div></td>
                                  
                                  </tr>
                                  
                                    <tr>
                                    <td><div align="left"><?php echo $i13; ?>&nbsp;</div></td>
                                    <td><div align="left"><?php echo $i14; ?></div></td>
                           
                                    
                                    <td><div align="left"><?php echo $i15; ?></div></td>
                                    <td align="left"><div align="left"><?php echo $i16; ?></div></td>
                                  
                                  </tr>
                                <tr>
                                  <td><div align="left"><?php echo $i17; ?>&nbsp;</div></td>
                                    <td><div align="left"><?php echo $i18; ?></div></td>
                               
                                  <td><div align="left"><?php echo $i19; ?></div></td>
                                    <td align="left"><div align="left"><?php echo $i20; ?></div></td>
                                  
                            </tr>
                                  
                                       <tr>
                                    <td><div align="left"><?php echo $i21; ?>&nbsp;</div></td>
                                    <td><div align="left"><?php echo $i22; ?></div></td>
                                    
                                    
                                    <td><div align="left"><?php echo $i23; ?></div></td>
                                    <td align="left"><div align="left"><?php echo $i24; ?></div></td>
                                  
                                  </tr>
                                  
                                  
                                     <tr>
                                    <td><div align="left"><?php echo $i25; ?>&nbsp;</div></td>
                                    <td><div align="left"><?php echo $i26; ?></div></td>
                                    
                                    
                                    <td><div align="left"><?php echo $i27; ?></div></td>
                                    <td align="left"><div align="left"><?php echo $i28; ?></div></td>
                                  
                                  </tr>
                                  
                                  
                                   <tr>
                                    <td><div align="left"><?php echo $i29; ?>&nbsp;</div></td>
                                    <td><div align="left"><?php echo $i30; ?></div></td>
                                    
                                    
                                    <td><div align="left"><?php echo $i31; ?></div></td>
                                    <td align="left"><div align="left"><?php echo $i32; ?></div></td>
                                  
                                  </tr>
                                  
                                  <tr>
                                    <td><div align="left"><?php echo $i33; ?>&nbsp;</div></td>
                                    <td><div align="left"><?php echo $i34; ?></div></td>
                                    
                                    
                                    <td><div align="left"><?php echo $i35; ?></div></td>
                                    <td align="left"><div align="left"><?php echo $i36; ?></div></td>
                                  
                                  </tr>
                     
                    
                                </table>
                                <p>&nbsp;</p>
                                <table width="100%" border="1">
                                  <tr>
                                    <td>TNR :</td>
                                    <td>OUTLET :</td>
                                    <td>SPR :</td>
                                  </tr>
                                  <tr>
                                    <td><p>&nbsp;</p>
                                      <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>(___________________)</p></td>
                                    <td><p>&nbsp;</p>
                                      <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>(___________________)</p></td>
                                    <td><p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>&nbsp;</p>
                                    <p>(___________________)</p></td>
                                  </tr>
                                </table>
                                <p>&nbsp;</p>
                          <p>&nbsp;</p>
                                <p><br />
                                </p>
                             
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

					
