<link  href="bni.png" rel="shortcut icon" />
<style>
input{
	width:100%;
}
</style>

<?php
$koneksi = mysqli_connect("localhost","root","","pmbni");
$query = mysqli_query($koneksi, "SELECT id, tanggal, cabang, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36, i37, i38, i39, i40, i41, i42, i43, i44, i45, i46, i47, i48 FROM tandaterimabarang WHERE id='".$_GET['id']."'");
										while($data = mysqli_fetch_array($query)){
$id = $data['id'];
$tanggal = $data['tanggal'];
$cabang = $data['cabang'];
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
$i39 = $data['i39'];
$i40 = $data['i40'];
$i41 = $data['i41'];
$i42 = $data['i42'];
$i43 = $data['i43'];
$i44 = $data['i44'];
$i45 = $data['i45'];
$i46 = $data['i46'];
$i47 = $data['i47'];
$i48 = $data['i48'];
}
?>
<style>
.signature{
 width: 200px; height: 100px;
 border: 1px solid black;
}
</style>

<body onLoad="window.print()">

<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <div align="center"><strong>TANDA-TERIMA PENYERAHAN BARANG</strong></div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST">
							  <div class="form-group">
                              <br>
						 
  <strong>Tanggal :</strong> <?php echo date('d-m-Y',strtotime($tanggal)); ?><br />
  <strong>Cabang :</strong> <?php echo $cabang;?></br>
								</div>
                                
                                
                                
                                Yang terdiri dari :
                                
                                <table width="100%" cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse">
                                  <tr>
                                    <td><div align="center"><strong>Hardware</strong></div></td>
                                    <td><div align="center"><strong>Unit</strong></div></td>
                                    <td><div align="center"><strong>Serial Number</strong></div></td>
                                  </tr>
                                  <tr>
                                    <td><?php echo $i1; ?>&nbsp;</td>
                                   <td><?php echo $i2; ?>&nbsp;</td>
                                <td><?php echo $i3; ?>&nbsp;</td>
                                  </tr>
                                  <tr>
                                  <td><?php echo $i4; ?>&nbsp;</td>
                                    <td><?php echo $i5; ?>&nbsp;</td>
                                    <td><?php echo $i6; ?>&nbsp;</td>
                                  </tr>
                                  <tr>
                                   <td><?php echo $i7; ?>&nbsp;</td>
                                    <td><?php echo $i8; ?>&nbsp;</td>
                                    <td><?php echo $i9; ?>&nbsp;</td>
                                  </tr>
                                  <tr>
                                   <td><?php echo $i10; ?>&nbsp;</td>
                                    <td><?php echo $i11; ?>&nbsp;</td>
                                   <td><?php echo $i12; ?>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><?php echo $i13; ?>&nbsp;</td>
                                   <td><?php echo $i14; ?>&nbsp;</td>
                                    <td><?php echo $i15; ?>&nbsp;</td>
                                  </tr>
                                  <tr>
                                   <td><?php echo $i16; ?>&nbsp;</td>
                                    <td><?php echo $i17; ?>&nbsp;</td>
                                    <td><?php echo $i18; ?>&nbsp;</td>
                                  </tr>
                                  <tr>
                                   <td><?php echo $i19; ?>&nbsp;</td>
                                   <td><?php echo $i20; ?>&nbsp;</td>
                                    <td><?php echo $i21; ?>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><?php echo $i22; ?>&nbsp;</td>
                                   <td><?php echo $i23; ?>&nbsp;</td>
                                    <td><?php echo $i24; ?>&nbsp;</td>
                                  </tr>
                                  <tr>
                                   <td><?php echo $i25; ?>&nbsp;</td>
                                   <td><?php echo $i26; ?>&nbsp;</td>
                                   <td><?php echo $i27; ?>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><?php echo $i28; ?>&nbsp;</td>
                                    <td><?php echo $i29; ?>&nbsp;</td>
                                   <td><?php echo $i30; ?>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><?php echo $i31; ?>&nbsp;</td>
                                    <td><?php echo $i32; ?>&nbsp;</td>
                                   <td><?php echo $i33; ?>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><?php echo $i34; ?>&nbsp;</td>
                                    <td><?php echo $i35; ?>&nbsp;</td>
                                    <td><?php echo $i36; ?>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><?php echo $i37; ?>&nbsp;</td>
                                    <td><?php echo $i38; ?>&nbsp;</td>
                                    <td><?php echo $i39; ?>&nbsp;</td>
                                  </tr>
                                  <tr>
                                  <td><?php echo $i40; ?>&nbsp;</td>
                                   <td><?php echo $i41; ?>&nbsp;</td>
                                    <td><?php echo $i42; ?>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><?php echo $i43; ?>&nbsp;</td>
                                    <td><?php echo $i44; ?>&nbsp;</td>
                                   <td><?php echo $i45; ?>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td><?php echo $i46; ?>&nbsp;</td>
                                    <td><?php echo $i47; ?>&nbsp;</td>
                                    <td><?php echo $i48; ?>&nbsp;</td>
                                  </tr>
                                </table>
                               
                                <p>Demikian Tanda Terima ini dibuat untuk dapat dipergunakan sebagaimana mestinya.</p>
                                <table width="100%" border="1">
                                  <tr>
                                    <td>Yang Menerima, </td>
                                    <td>Yang Menyerahkan,</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td><strong>Div IT Infrastructur Management Department IT Wilayah 04</strong></td>
                                  </tr>
                                  <tr>
                                    <td>
<div class="signature" style=''>
 <canvas id="signature-pad" class="signature-pad" width="200px" height="100px"></canvas>
</div>
<br />(<input type="text" style="width:200px">)</td>
                                    <td><div class="signature" style=''>
 <canvas id="signature-pad2" class="signature-pad" width="200px" height="100px"></canvas>
</div>
<br />(Dadan Hardiansyah)</td>
                                    
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
				</div>
                
                
                <!-- Script -->
<script src='jquery-3.4.1.js' type='text/javascript'></script>
<script src="signature_pad.js"></script>
 
<script>
$(document).ready(function() {
 var signaturePad = new SignaturePad(document.getElementById('signature-pad'));
 var signaturePad2 = new SignaturePad(document.getElementById('signature-pad2'));
})
 </script>
				</body>	


					