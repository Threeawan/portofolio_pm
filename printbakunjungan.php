<link  href="bni.png" rel="shortcut icon" />
<style>
input{
	width:100%;
}
</style>

<?php
$koneksi = mysqli_connect("localhost","root","","pmbni");
?>


						  
								  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
   <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  
   <script type="text/javascript" src="js/jquery.signature.min.js"></script>
   <script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/jquery.signature.css">
  
   <style>
       .kbw-signature { 
         
        height: 100px;
                width: 200px;
       }
       #sig canvas{
           width: 100% !important;
           height: auto;
       }
   </style>

        
    <?php
    if(isset($_POST['simpan'])){

    $image_parts = explode(";base64,", $_POST['tanda_tangan_1']); 
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $tanda_tangan_1 = "tanda_tangan/" . uniqid() . '.'.$image_type;
    file_put_contents($tanda_tangan_1, $image_base64);

    $image_parts = explode(";base64,", $_POST['tanda_tangan_2']); 
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $tanda_tangan_2 = "tanda_tangan/" . uniqid() . '.'.$image_type;
    file_put_contents($tanda_tangan_2, $image_base64);
	
	 

    $sql = "update bakunjungan set 
	tanda_tangan_1='".$tanda_tangan_1."', tanda_tangan_nama_1='".$_POST['tanda_tangan_nama_1']."', 
	tanda_tangan_2='".$tanda_tangan_2."', tanda_tangan_nama_2='".$_POST['tanda_tangan_nama_2']."' 
	 
	
	where id='".$_GET['id']."'";
    mysqli_query($koneksi, $sql);
    ?>
    <script>alert('Tandatangan Tersimpan');</script>
    <script>window.close()</script>
    <?php

    }
    ?>
	
	<?php
$query = mysqli_query($koneksi, "SELECT id, cabang, tanggal_kunjungan, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, 
i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, 
i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36 FROM bakunjungan WHERE id='".$_GET['id']."'");
										while($data = mysqli_fetch_array($query)){
$id = $data['id'];
$cabang = $data['cabang'];
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
}
?>
<style>
.signature{
 width: 200px; height: 100px;
 border: 1px solid black;
}
</style>

<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
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
						
                          <p><strong>Tanggal : </strong><?php echo date('d-m-Y',strtotime($tanggal_kunjungan)); ?><br />
												<strong>Cabang :</strong> <?php echo $cabang; ?></p>
                          <table width="100%" cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse">
                              
                                  <tr>
                                    <td width="30"><strong>No.</strong></td>
                                    <td align="left"><center><strong>JENIS KEGIATAN</strong></center></td>
                                 
                                    <td align="left"><center><strong>TINDAK LANJUT</strong></center></td>
                                    <td><center><strong>KETERANGAN</strong></center></td>
                                  </tr>
                                  <tr>
                                    <td><center><input type="text" name="i1" value="<?php echo $i1; ?>" readonly/></center></td>
                                    <td align="left"><input type="text" name="i2" value="<?php echo $i2; ?>" readonly /></td>
                                    <td><input type="text" name="i3" value="<?php echo $i3; ?>" readonly/></td>
                                    <td><input type="text" name="i4" value="<?php echo $i4; ?>" readonly/></td>
                                    
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i5" value="<?php echo $i5; ?>" readonly /></td>
                                    <td><input type="text" name="i6" value="<?php echo $i6; ?>" readonly /></td>
                                   <td><input type="text" name="i7" value="<?php echo $i7; ?>" readonly /></td>
                                    <td align="left"><input type="text" name="i8" value="<?php echo $i8; ?>" readonly /></td>
                                   
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i9" value="<?php echo $i9; ?>" readonly /></td>
                                    <td><input type="text" name="i10" value="<?php echo $i10; ?>" readonly /></td>
                                    
                                    
                                    <td><input type="text" name="i11" value="<?php echo $i11; ?>" readonly /></td>
                                    <td align="left"><input type="text" name="i12" value="<?php echo $i12; ?>" readonly /></td>
                                  
                                  </tr>
                                  
                                    <tr>
                                    <td><input type="text" name="i13" value="<?php echo $i13; ?>" readonly /></td>
                                    <td><input type="text" name="i14" value="<?php echo $i14; ?>" readonly /></td>
                           
                                    
                                    <td><input type="text" name="i15" value="<?php echo $i15; ?>" readonly/></td>
                                    <td align="left"><input type="text" name="i16" value="<?php echo $i16; ?>" readonly /></td>
                                  
                                  </tr>
                                <tr>
                                  <td><input type="text" name="i17" value="<?php echo $i17; ?>" readonly /></td>
                                    <td><input type="text" name="i18" value="<?php echo $i18; ?>" readonly /></td>
                               
                                  <td><input type="text" name="i19" value="<?php echo $i19; ?>" readonly /></td>
                                    <td align="left"><input type="text" name="i20" value="<?php echo $i20; ?>" readonly /></td>
                                  
                            </tr>
                                  
                                       <tr>
                                    <td><input type="text" name="i21" value="<?php echo $i21; ?>" readonly /></td>
                                    <td><input type="text" name="i22" value="<?php echo $i22; ?>" readonly /></td>
                                    
                                    
                                    <td><input type="text" name="i23" value="<?php echo $i23; ?>" readonly /></td>
                                    <td align="left"><input type="text" name="i24" value="<?php echo $i24; ?>" readonly /></td>
                                  
                                  </tr>
                                  
                                  
                                     <tr>
                                    <td><input type="text" name="i25" value="<?php echo $i25; ?>" readonly /></td>
                                    <td><input type="text" name="i26" value="<?php echo $i26; ?>" readonly /></td>
                                    
                                    
                                    <td><input type="text" name="i27" value="<?php echo $i27; ?>" readonly /></td>
                                    <td align="left"><input type="text" name="i28" value="<?php echo $i28; ?>" readonly /></td>
                                  
                                  </tr>
                                  
                                  
                                   <tr>
                                    <td><input type="text" name="i29" value="<?php echo $i29; ?>" readonly /></td>
                                    <td><input type="text" name="i30" value="<?php echo $i30; ?>" readonly /></td>
                                    
                                    
                                    <td><input type="text" name="i31" value="<?php echo $i31; ?>" readonly /></td>
                                    <td align="left"><input type="text" name="i32" value="<?php echo $i32; ?>" readonly /></td>
                                  
                                  </tr>
                                  
                                  <tr>
                                    <td><input type="text" name="i33" value="<?php echo $i33; ?>" readonly /></td>
                                    <td><input type="text" name="i34" value="<?php echo $i34; ?>" readonly /></td>
                                    
                                    
                                    <td><input type="text" name="i35" value="<?php echo $i35; ?>" readonly /></td>
                                    <td align="left"><input type="text" name="i36" value="<?php echo $i36; ?>" readonly /></td>
                                  
                                  </tr>
                     
                    
                                </table>
                                <p>&nbsp;</p>
                                <table width="100%" border="1">
                                  <tr>
                                    <td>TNW :</td>
                                    <td>UNIT :</td>
                                    
                                   
                                  </tr>
		
	
								  
                                  <tr>
                                    <td> 
        <div id="tandatangan1"></div>
        <textarea id="tanda_tangan_1" name="tanda_tangan_1" style="display: none"></textarea>
		
<br />(<input type="text" name="tanda_tangan_nama_1" style="width:200px">)
</td>
                                    <td> 
        <div id="tandatangan2"></div>
        <textarea id="tanda_tangan_2" name="tanda_tangan_2" style="display: none"></textarea>
		
<br />(<input type="text" name="tanda_tangan_nama_2" style="width:200px">)
</td>


                                   
                                  </tr>
                                </table>
                                <p>&nbsp;</p>
                          
								 <button id="clear">Hapus</button>
            <button id="draw" type="submit" name="simpan">Simpan</button>
                             
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

<!-- Script -->
<script type="text/javascript">
    $('#tandatangan1').signature({syncField: '#tanda_tangan_1', syncFormat: 'PNG'});
    $('#tandatangan2').signature({syncField: '#tanda_tangan_2', syncFormat: 'PNG'});
    
   
</script>  
				</body>	