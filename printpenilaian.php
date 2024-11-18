<link  href="bni.png" rel="shortcut icon" />
<style>
input{
	width:100%;
}
</style>


<?php
$koneksi = mysqli_connect("localhost","root","","pmbni");
$query = mysqli_query($koneksi, "SELECT id, periode_awal, periode_akhir, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, saran FROM penilaian WHERE id='".$_GET['id']."'");
										while($data = mysqli_fetch_array($query)){
$periode_awal = $data['periode_awal'];	
$periode_akhir = $data['periode_akhir'];											
											
											
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
$saran = $data['saran'];

}
?>

<body onLoad="window.print()">


<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <div align="center"><strong>PENILAIAN TERHADAP KUALITAS UNIT TNR WILAYAH 04</strong></div>
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
						 <br />
                            <strong>Periode Awal :</strong> <?php echo $periode_awal; ?><br />
                            <strong>Periode Akhir :</strong> <?php echo $periode_akhir; ?><br />
                          
						    <p><em>(mohon diisi dengan tanda (X) sesuai dengan penilaian</em>)						  </p>
						  </center>
                          
                          
                          
                          
                          
						  <table  border="1"  width="100%" cellspacing="0" cellpadding="0">
						    <col width="27" />
						    <col width="345" />
						    <col width="58" span="5" />
						    <tr>
						      <td rowspan="2"><div align="center"><strong>NO.</strong></div></td>
						      <td rowspan="2" width="345"><div align="center"><strong>ITEM</strong></div></td>
						      <td width="58"><div align="center"><strong>SANGAT TIDAK PUAS</strong></div></td>
						      <td width="58"><div align="center"><strong>TIDAK PUAS</strong></div></td>
						      <td width="58"><div align="center"><strong>CUKUP PUAS</strong></div></td>
						      <td width="58"><div align="center"><strong>PUAS</strong></div></td>
						      <td width="58"><div align="center"><strong>SANGAT PUAS</strong></div></td>
					        </tr>
						    <tr>
						      <td><div align="center"><strong>1</strong></div></td>
						      <td><div align="center"><strong>2</strong></div></td>
						      <td><div align="center"><strong>3</strong></div></td>
						      <td><div align="center"><strong>4</strong></div></td>
						      <td><div align="center"><strong>5</strong></div></td>
					        </tr>
						    
						    <tr>
						      <td><div align="left">1</div></td>
						      <td width="345">Respon dalam    melakukan follow up terhadap    pengelolaan permasalahan teknologi</td>
						      <td><?php echo $i1;?></td>
						      <td><?php echo $i2;?></td>
						      <td><?php echo $i3;?></td>
						      <td><?php echo $i4;?></td>
						      <td><?php echo $i5;?></td>
					        </tr>
						    <tr>
						      <td><div align="left">2</div></td>
						      <td width="345">Kualitas    pekerjaan yang diberikan dalam penyelesaian permasalahan teknologi</td>
						      <td><?php echo $i6;?></td>
						      <td><?php echo $i7;?></td>
						      <td><?php echo $i8;?></td>
						      <td><?php echo $i9;?></td>
						      <td><?php echo $i10;?></td>
					        </tr>
					      </table>
						  <center>
                            <table cellspacing="0" cellpadding="0" width="100%">
                              <tr>
                              <br />
                                <td colspan="7"><div align="center"><strong>SARAN/MASUKAN/FEEDBACK TERHADAP UNIT TNR WILAYAH 04 (secara keseluruhan):</strong></div></td>
                              </tr>
                              <tr>
                                <td colspan="7"><div align="center">
                                  <p>(<em>mohon mengisi saran/masukan/feedback</em>)                                </p>
                                  <p>&nbsp;</p>
                                </div></td>
                              </tr>
                            </table>
                            <table width="100%" height="219" border="1">
                              <tr>
                                <td width="100%"><textarea name="saran" style="width:100%;height:100%" readonly><?php echo $saran; ?></textarea></td>
                              </tr>
                            </table>
                          </center>
                          <p>&nbsp;</p>
                            <table width="100%" border="1">
                              <tr>
                                <td width="45%"><strong><u>Unit Penilaian :</u></strong></td>
                                <td width="55%"><div align="right"><strong>PT. Bank Negara Indonesia (Persero) Tbk.</strong></div></td>
                              </tr>
                              <tr>
                                <td>&nbsp;</td>
                                <td><p align="right"><strong>Kantor Utama Cabang/Sentra<input type="text" style="width:130px;"></strong></p> 
  <div align="right">
								
								
								<style>
#signature{
 width: 200px; height: 100px;
 border: 1px solid black;
}
</style>
<div id="signature" style='' align="right">
 <canvas id="signature-pad" class="signature-pad" width="200px" height="100px"></canvas>
</div>
<!--
<input type='button' id='click' value='preview'><br/>
<textarea id='output'></textarea><br/>
-->
<!-- Script -->
<script src='jquery-3.4.1.js' type='text/javascript'></script>
<script src="signature_pad.js"></script>
 
<script>
$(document).ready(function() {
 var signaturePad = new SignaturePad(document.getElementById('signature-pad'));

 $('#click').click(function(){
  var data = signaturePad.toDataURL('image/png');
  $('#output').val(data);

  $("#sign_prev").show();
  $("#sign_prev").attr("src",data);
  // Open image in the browser
  //window.open(data);
 });
})
 </script>
<br />(<input type="text" style="width:200px;">)</td>
                              </tr>
                            </table>
                            <p align="center"><strong>==Terima kasih berpartisipasi dalam survey kepuasan kinerja Unit TNR WILAYAH 04==</strong></p>
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

					
