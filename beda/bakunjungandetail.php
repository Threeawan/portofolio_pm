<style>
input{
	width:100%;
}
</style>

<?php
$query = mysqli_query($koneksi, "SELECT id, cabang, alamat, tanggal_kunjungan, inputer, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36 FROM bakunjungan WHERE id='".$_GET['id']."'");
										while($data = mysqli_fetch_array($query)){
$id = $data['id'];
$cabang = $data['cabang'];
$alamat = $data['alamat'];
$tanggal_kunjungan = $data['tanggal_kunjungan'];
$inputer = $data['inputer'];
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
						<div class="card-header card-header-inverse">BERITA ACARA KUNJUNGAN/SUPERVISI/MAINTENANCE </div>
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
								  <label for="exampleInputName">Tanggal Kunjungan</label>
								  <input type="date" class="form-control" id="exampleInputDate" name="tanggal_kunjungan" value="<?php echo $tanggal_kunjungan;?>" readonly="readonly">
								</div>
								
                                
                                <div class="form-group">
								  <label for="exampleInputName">Kantor Cabang/Kantor Kas/Unit</label>
								  <input type="" class="form-control" id="exampleInputName" placeholder="" name="cabang" value="<?php echo $cabang;?>" readonly="readonly">
								</div>
								
								
								<div class="form-group">
								  <label for="exampleInputName">Alamat</label>
								  <input type="text" class="form-control" id="exampleInputDate" name="alamat" value="<?php echo $alamat;?>" readonly="readonly">
								</div>
								
								
								 <div class="form-group">
								  <label for="exampleInputName">Inputer</label>
								  <input type="" class="form-control" id="exampleInputName" placeholder="" name="inputer" value="<?php echo $inputer;?>" readonly="readonly">
								</div>
                                
                                
                                
                                
                                
                                
                                
                          <table width="100%" cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse">
                              
                                  <tr>
                                    <td width="40"><center><strong>NO.</strong></center> </td>
                                    <td align="left"><center><strong>JENIS KEGIATAN</strong></center></td>
                                 
                                    <td align="left"><center><strong>TINDAK LANJUT</strong></center></td>
                                    <td><center><strong>KETERANGAN</strong></center></td>
                                  </tr>
                                  <tr>
                                    <td><center><input type="text" name="i1" value="<?php echo $i1; ?>" readonly="readonly" class="form-control"/></center></td>
                                    <td align="left"><input type="text" name="i2" value="<?php echo $i2; ?>" readonly="readonly" class="form-control"/></td>
                                    <td><input type="text" name="i3" value="<?php echo $i3; ?>" readonly="readonly" class="form-control"/></td>
                                    <td><input type="text" name="i4" value="<?php echo $i4; ?>" readonly="readonly" class="form-control"/></td>
                                    
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i5" value="<?php echo $i5; ?>" readonly="readonly" class="form-control"/></td>
                                    <td><input type="text" name="i6" value="<?php echo $i6; ?>" readonly="readonly" class="form-control"/></td>
                                   <td><input type="text" name="i7" value="<?php echo $i7; ?>" readonly="readonly" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i8" value="<?php echo $i8; ?>" readonly="readonly" class="form-control"/></td>
                                   
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i9" value="<?php echo $i9; ?>" readonly="readonly" class="form-control"/></td>
                                    <td><input type="text" name="i10" value="<?php echo $i10; ?>" readonly="readonly" class="form-control"/></td>
                                    
                                    
                                    <td><input type="text" name="i11" value="<?php echo $i11; ?>" readonly="readonly" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i12" value="<?php echo $i12; ?>" readonly="readonly" class="form-control"/></td>
                                  
                                  </tr>
                                  
                                    <tr>
                                    <td><input type="text" name="i13" value="<?php echo $i13; ?>" readonly="readonly" class="form-control"/></td>
                                    <td><input type="text" name="i14" value="<?php echo $i14; ?>" readonly="readonly" class="form-control"/></td>
                           
                                    
                                    <td><input type="text" name="i15" value="<?php echo $i15; ?>" readonly="readonly" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i16" value="<?php echo $i16; ?>" readonly="readonly" class="form-control"/></td>
                                  
                                  </tr>
                                <tr>
                                  <td><input type="text" name="i17" value="<?php echo $i17; ?>" readonly="readonly" class="form-control"/></td>
                                    <td><input type="text" name="i18" value="<?php echo $i18; ?>" readonly="readonly" class="form-control"/></td>
                               
                                  <td><input type="text" name="i19" value="<?php echo $i19; ?>" readonly="readonly" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i20" value="<?php echo $i20; ?>" readonly="readonly" class="form-control"/></td>
                                  
                            </tr>
                                  
                                       <tr>
                                    <td><input type="text" name="i21" value="<?php echo $i21; ?>" readonly="readonly" class="form-control"/></td>
                                    <td><input type="text" name="i22" value="<?php echo $i22; ?>" readonly="readonly" class="form-control"/></td>
                                    
                                    
                                    <td><input type="text" name="i23" value="<?php echo $i23; ?>" readonly="readonly" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i24" value="<?php echo $i24; ?>" readonly="readonly" class="form-control"/></td>
                                  
                                  </tr>
                                  
                                  
                                     <tr>
                                    <td><input type="text" name="i25" value="<?php echo $i25; ?>" readonly="readonly" class="form-control"/></td>
                                    <td><input type="text" name="i26" value="<?php echo $i26; ?>" readonly="readonly" class="form-control"/></td>
                                    
                                    
                                    <td><input type="text" name="i27" value="<?php echo $i27; ?>" readonly="readonly" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i28" value="<?php echo $i28; ?>" readonly="readonly" class="form-control"/></td>
                                  
                                  </tr>
                                  
                                  
                                   <tr>
                                    <td><input type="text" name="i29" value="<?php echo $i29; ?>" readonly="readonly" class="form-control"/></td>
                                    <td><input type="text" name="i30" value="<?php echo $i30; ?>" readonly="readonly" class="form-control"/></td>
                                    
                                    
                                    <td><input type="text" name="i31" value="<?php echo $i31; ?>" readonly="readonly" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i32" value="<?php echo $i32; ?>" readonly="readonly" class="form-control"/></td>
                                  
                                  </tr>
                                  
                                  <tr>
                                    <td><input type="text" name="i33" value="<?php echo $i33; ?>" readonly="readonly" class="form-control"/></td>
                                    <td><input type="text" name="i34" value="<?php echo $i34; ?>" readonly="readonly" class="form-control"/></td>
                                    
                                    
                                    <td><input type="text" name="i35" value="<?php echo $i35; ?>" readonly="readonly" class="form-control"/></td>
                                    <td align="left"><input type="text" name="i36" value="<?php echo $i36; ?>" readonly="readonly" class="form-control"/></td>
                                  
                                  </tr>
                     
                    
                                </table>
                                <br />
                            
<a href="printbakunjungan.php?id=<?php echo $_GET['id']; ?>" target="_blank" class="btn btn-warning"><i class="fas fa-sm fa-fw m-r-10 fa-pen-alt"></i>Lihat</a>
<a href="hasilbakunjungan.php?id=<?php echo $_GET['id']; ?>" target="_blank" class="btn btn-success"><i class="fas fa-sm fa-fw m-r-10 fa-pencil-alt"></i>Hasil</a>
 <a href="?nav=bakunjungandata" class="btn btn-primary"><i class="fas fa-sm fa-fw m-r-10 fa-undo-alt"></i>Kembali</a> 
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

					
