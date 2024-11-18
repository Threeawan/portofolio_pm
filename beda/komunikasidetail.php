<style>
input{
	width:100%;
}
</style>
<?php
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
						<div class="card-header card-header-inverse">CHECKLIST KOMUNIKASI</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body"><form method="POST"><div class="form-group">
									<label for="exampleInputName">Cabang</label>
									<input type="" class="form-control" id="exampleInputName" name="cabang" readonly="readonly" value="<?php echo $cabang;?>">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Alamat</label>
									<input type="" class="form-control" id="exampleInputName" name="alamat" readonly="readonly" value="<?php echo $alamat;?>">
								</div>
                                
                                <div class="form-group">
									<label for="exampleInputPassword1">Tanggal Kunjungan</label>
									<input type="date" class="form-control" id="exampleInputName" placeholder="" name="tanggal_kunjungan" readonly="readonly" value="<?php echo $tanggal_kunjungan;?>">
								</div>
                                
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
                                    <td><input type="text" name="i1" value="<?php echo $i1;?>" readonly="readonly" /></td>
                                    
                                  </tr>
                                  <tr>
                                    <td>a. Koneksi kabel serial ke modem provider MPLS</td>
                                    <td><input type="text" name="i2" value="<?php echo $i2;?>" readonly="readonly" /></td>
                                    <td align="left"><input type="text" name="i3" value="<?php echo $i3;?>" readonly="readonly" /></td>
                                   
                                  </tr>
                                  <tr>
                                    <td>b. Koneksi kabel UTP ke modem VSAT</td>
                                    
                                    
                                    <td>&nbsp;</td>
                                    <td align="left"><input type="text" name="i4" value="<?php echo $i4;?>" readonly="readonly" /></td>
                                  
                                  </tr>
                                  
                                    <tr>
                                    <td>-VSAT 1</td>
                           
                                    
                                    <td><input type="text" name="i5" value="<?php echo $i5;?>" readonly="readonly" /></td>
                                    <td align="left"><input type="text" name="i6" value="<?php echo $i6;?>" readonly="readonly" /></td>
                                  
                                  </tr>
                                <tr>
                                    <td>-VSAT 2 (Link Backup)</td>
                               
                                  <td><input type="text" name="i7" value="<?php echo $i7;?>" readonly="readonly" /></td>
                                    <td align="left"><input type="text" name="i8" value="<?php echo $i8;?>" readonly="readonly" /></td>
                                  
                                  </tr>
                                  
                                       <tr>
                                    <td>c. Koneksi kabel UTP dari router ke switch 1 ke</td>
                                    
                                    
                                    <td><input type="text" name="i9" value="<?php echo $i9;?>" readonly="readonly" /></td>
                                    <td align="left"><input type="text" name="i10" value="<?php echo $i10;?>" readonly="readonly" /></td>
                                  
                                  </tr>
                                  
                                  
                                     <tr>
                                    <td>- switch 2</td>
                                    
                                    
                                    <td><input type="text" name="i11" value="<?php echo $i11;?>" readonly="readonly" /></td>
                                    <td align="left"><input type="text" name="i12" value="<?php echo $i12;?>" readonly="readonly" /></td>
                                  
                                  </tr>
                                  
                                  
                                   <tr>
                                    <td>- switch 3</td>
                                    
                                    
                                    <td><input type="text" name="i13" value="<?php echo $i13;?>" readonly="readonly" /></td>
                                    <td align="left"><input type="text" name="i14"  value="<?php echo $i14;?>" readonly="readonly" /></td>
                                  
                                  </tr>
                                  
                                  <tr>
                                    <td>- switch 4</td>
                                    
                                    
                                    <td><input type="text" name="i15" value="<?php echo $i15;?>" readonly="readonly" /></td>
                                    <td align="left"><input type="text" name="i16"  value="<?php echo $i16;?>" readonly="readonly"/></td>
                                  
                                  </tr>
                                  
                                  
                                  <tr>
                                    <td>- switch 5</td>
                                    
                                    
                                    <td><input type="text" name="i17" value="<?php echo $i17;?>" readonly="readonly" /></td>
                                    <td align="left"><input type="text" name="i18" value="<?php echo $i18;?>" readonly="readonly"/></td>
                                  
                                  </tr>
                                  
                                  
                                    
                                  <tr>
                                    <td>e. Koneksi Kabel UTP dari ATM ke Switch</td>
                                    
                                    
                                    <td><input type="text" name="i19" value="<?php echo $i19;?>" readonly="readonly"/>
                                     
                                    </select><input type="text" name="i20" value="<?php echo $i20;?>" readonly="readonly" /></td>
                                    <td align="left"><input type="text" name="i21" value="<?php echo $i21;?>" readonly="readonly" style="height:50px" /></td>
                                  
                                  </tr>
                                  
                                  <tr>
                                    <td rowspan="2"><center>2</center></td>
                                    <td align="left">Konektivitas</td>
                                    <td></td>
                                    <td align="left"><input type="text" name="i22" value="<?php echo $i22;?>" readonly="readonly" /></td>
                                   
                                  </tr>
                                  <tr>
                                    <td>a. Dari PC user ke gateway (ping x.x.x.254)</td>
                                    <td><input type="text" name="i23" value="<?php echo $i23;?>" readonly="readonly" /></td>
                                    <td><input type="text" name="i24" value="<?php echo $i24;?>" readonly="readonly" /></td>
                                    
                                  </tr>
                                  <tr>
                                    <td><center>3</center></td>
                                    <td align="left">Cek Fungsi Link Backup</td>
                                    <td align="left"><input type="text" name="i25" value="<?php echo $i25;?>" readonly="readonly" style="width:100%" /></td>
                                    <td align="left"><input type="text" name="i26" value="<?php echo $i26;?>" readonly="readonly" /></td>
                                    
                                  </tr>
                    
                                </table>
                                <br />
                               Note : Lingkari hasil pemeriksaan
                             <br />
                             <br />
                              
                                <form method="POST">
							 
								<table width="100%" cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse">
                                  <tr>
                                    <td width="30"><center><strong>No.</strong></center></td>
                                    <td align="left"><center><strong>Jenis Perangkat</strong></center></td>
                                 
                                    <td align="left"><center><strong>S N / Type</strong></center></td>
                                    <td><center><strong>Status</strong></center></td>
                                  </tr>
                                  <tr>
                                    <td><center><input type="text" name="i27" value="<?php echo $i27;?>" readonly="readonly" style="width:30px" /></center></td>
                                    <td align="left"><input type="text" name="i28" value="<?php echo $i28;?>" readonly="readonly" style="width:100%" /></td>
                                    <td><input type="text" name="i29" value="<?php echo $i29;?>" readonly="readonly" /></td>
                                    <td><input type="text" name="i30" value="<?php echo $i30;?>" readonly="readonly" /></td>
                                    
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i31" value="<?php echo $i31;?>" readonly="readonly" style="width:30px"/></td>
                                    <td><input type="text" name="i32" value="<?php echo $i32;?>" readonly="readonly" /></td>
                                    <td><input type="text" name="i33" value="<?php echo $i33;?>" readonly="readonly" /></td>
                                    <td align="left"><input type="text" name="i34" value="<?php echo $i34;?>" readonly="readonly" /></td>
                                   
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i35" value="<?php echo $i35;?>" readonly="readonly" style="width:30px" /></td>
                                    <td><input type="text" name="i36" value="<?php echo $i36;?>" readonly="readonly" /></td>
                                    
                                    
                                    <td><input type="text" name="i37" value="<?php echo $i37;?>" readonly="readonly" /></td>
                                    <td align="left"><input type="text" name="i38" value="<?php echo $i38;?>" readonly="readonly" /></td>
                                  
                                  </tr>
                                  
        
                                </table>
                                
                                <p>* Jika terdapat Router / Switch yang tidak terpakai di cabang harap segera dilaporkan ke Tim BRS BNI                                </p>
                                  
<a href="printkomunikasi.php?id=<?php echo $_GET['id']; ?>" target="_blank" class="btn btn-warning">Cetak</a>
<a href="?nav=komunikasidata" class="btn btn-primary">Kembali</a> 
						  </form>
                                
                                
                     
                          
                          </div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
