<style>
input{
	width:100%;
}
</style>



<?php
$koneksi = mysqli_connect("localhost", "root", "", "pmbni");
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Cheklist_Komunikasi.xls");
$query = mysqli_query($koneksi, "SELECT id, cabang, alamat, tanggal_kunjungan, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36, i37, i38 FROM komunikasi WHERE id='".$_GET['id']."'");
										while($data = mysqli_fetch_array($query)){
$id = $data['id'];
$cabang = $data['cabang'];
$alamat = $data['alamat'];
$tanggal_kunjungan = $data['tanggal_kunjungan'];
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
$i37 = $data['i37'];
$i38 = $data['i38'];
}
?>







<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body"><form method="POST"><div class="form-group">
						  <strong>Laporan Preventive Maintenance I/II Tahun </strong><?php echo substr($tanggal_kunjungan,0,4); ?><br />
                          <br />
                          <center>
                            <strong>I.4 CHECKLIST KOMUNIKASI</strong>
                          </center>
                          <p><br />
                            <strong>Cabang :</strong> <?php echo $cabang; ?><br />
                            <strong>Alamat :</strong> <?php echo $alamat; ?><br />
                          <strong>Tanggal Kunjungan :</strong> <?php echo date('d-m-Y',strtotime($tanggal_kunjungan)); ?></p>
                          <table width="100%" cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse">
                                 
                <tr>
                                    <td><center><strong>No.</strong></center></td>
                                    <td align="left"><center><strong>Kegiatan</strong></center></td>
                                 
                                    <td align="left" width="100"><center><strong>Hasil</strong></center></td>
                                    <td><center><strong>Keterangan</strong></center></td>
        </tr>
                                  <tr>
                                    <td rowspan="11"><div align="left">1</div></td>
                                    <td align="left">Cek koneksi dan label kabel</td>
                                    <td>&nbsp;</td>
                                    <td><?php echo $i1;?> </td>
                                    
                                  </tr>
                                  <tr>
                                    <td>a. Koneksi kabel serial ke modem provider MPLS</td>
                                    <td><?php echo $i2;?></td>
                                    <td align="left"><?php echo $i3;?></td>
                                   
                                  </tr>
                                  <tr>
                                    <td>b. Koneksi kabel UTP ke modem VSAT</td>
                                    
                                    
                                    <td>&nbsp;</td>
                                    <td align="left"><?php echo $i4;?> </td>
                                  
                                  </tr>
                                  
                                    <tr>
                                    <td>-VSAT 1</td>
                           
                                    
                                    <td><?php echo $i5;?> </td>
                                    <td align="left"><?php echo $i6;?></td>
                                  
                                  </tr>
                                <tr>
                                    <td>-VSAT 2 (Link Backup)</td>
                               
                                  <td><?php echo $i7;?></td>
                                    <td align="left"><?php echo $i8;?></td>
                                  
        </tr>
                                  
                                       <tr>
                                    <td>c. Koneksi kabel UTP dari router ke switch 1 ke</td>
                                    
                                    
                                    <td><?php echo $i9;?></td>
                                    <td align="left"><?php echo $i10;?></td>
                                  
                                  </tr>
                                  
                                  
                                     <tr>
                                    <td>- switch 2</td>
                                    
                                    
                                    <td><?php echo $i11;?> </td>
                                    <td align="left"><?php echo $i12;?></td>
                                  
                                  </tr>
                                  
                                  
                                   <tr>
                                    <td>- switch 3</td>
                                    
                                    
                                    <td><?php echo $i13;?></td>
                                    <td align="left"><?php echo $i14;?></td>
                                  
                                  </tr>
                                  
                                  <tr>
                                    <td>- switch 4</td>
                                    
                                    
                                    <td><?php echo $i15;?></td>
                                    <td align="left"><?php echo $i16;?></td>
                                  
                                  </tr>
                                  
                                  
                                  <tr>
                                    <td>- switch 5</td>
                                    
                                    
                                    <td><?php echo $i17;?> </td>
                                    <td align="left"><?php echo $i18;?></td>
                                  
                                  </tr>
                                  
                                  
                                    
                                  <tr>
                                    <td>e. Koneksi Kabel UTP dari ATM ke Switch</td>
                                    
                                    
                                    <td>
  <?php echo $i19;?>
  
  <?php echo $i20;?></td>
                                    <td align="left"><?php echo $i21;?></td>
                                  
                                  </tr>
                                  
                                  <tr>
                                    <td rowspan="2"><div align="left">2</div></td>
                                    <td align="left">Konektivitas</td>
                                    <td></td>
                                    <td align="left"><?php echo $i22;?></td>
                                   
                                  </tr>
                                  <tr>
                                    <td>a. Dari PC user ke gateway (ping x.x.x.254)</td>
                                    <td><?php echo $i23;?></td>
                                    <td><?php echo $i24;?></td>
                                    
                                  </tr>
                                  <tr>
                                    <td><div align="left">3</div></td>
                                    <td align="left">Cek Fungsi Link Backup</td>
                                    <td align="left"><?php echo $i25;?></td>
                                    <td align="left"><?php echo $i26;?></td>
                                    
                                  </tr>
                    
                          </table>
                          <p><br />
                            Note : Lingkari hasil pemeriksaan
                          <br />
                            <br />
                            <strong>Perangkat Network (Router &amp; Switch) yang Tidak Terpakai</strong></p>
                                <form method="POST">
							 
								<table width="100%" cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse">
                                  <tr>
                                    <td width="30"><center><strong>No.</strong></center></td>
                                    <td align="left"><center><strong>Jenis Perangkat</strong></center></td>
                                 
                                    <td align="left"><center><strong>S N / Type</strong></center></td>
                                    <td><center><strong>Status</strong></center></td>
                                  </tr>
                                  <tr>
                                    <td><div align="left"><?php echo $i27;?>&nbsp;
                                      </center>
                                    </div></td>
                                    <td align="left"><?php echo $i28;?></td>
                                    <td><?php echo $i29;?></td>
                                    <td><?php echo $i30;?></td>
                                    
                                  </tr>
                                  <tr>
                                    <td><div align="left"><?php echo $i31;?>&nbsp;</div></td>
                                    <td><?php echo $i32;?></td>
                                    <td><?php echo $i33;?> </td>
                                    <td align="left"><?php echo $i34;?></td>
                                   
                                  </tr>
                                  <tr>
                                    <td><div align="left"><?php echo $i35;?>&nbsp;</div></td>
                                    <td><?php echo $i36;?></td>
                                    
                                    
                                    <td><?php echo $i37;?></td>
                                    <td align="left"><?php echo $i38;?></td>
                                  
                                  </tr>
                                  
        
                                </table>
                                
                                <p>* Jika terdapat Router / Switch yang tidak terpakai di cabang harap segera dilaporkan ke Tim BRS BNI                                </p>
                                <p>&nbsp;</p>
                                <p align="right"><strong>BNI Cabang/Capem</strong></p>
                                <p align="right">&nbsp;</p>
                                <p align="right">&nbsp;</p>
                                <p align="right">(________________)                          </p>
                          </form>
                                
                                
                     
                          
                      </div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
