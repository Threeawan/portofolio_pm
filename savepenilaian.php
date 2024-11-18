<style>
input{
	width:100%;
}
</style>

<?php
$koneksi = mysqli_connect("localhost", "root", "", "pmbni");
header("Content-type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=Cheklist_Penilaian.xls");
$query = mysqli_query($koneksi, "SELECT id, periode_awal, periode_akhir, tahun, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, saran FROM penilaian WHERE id='".$_GET['id']."'");
										while($data = mysqli_fetch_array($query)){
$periode_awal = $data['periode_awal'];	
$periode_akhir = $data['periode_akhir'];											
$tahun = $data['tahun'];												
											
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




<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <div align="center"><strong>PENILAIAN TERHADAP KUALITAS UNIT TNR WBN</strong></div>
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
									<label for="exampleInputPassword1"><strong>Periode Awal :</strong></label>
									<?php echo $periode_awal;?>
						  </div>
								<div class="form-group">
									<label for="exampleInputPassword1"><strong>Periode Akhir :</strong></label>
									<?php echo $periode_akhir;?>
								</div>
                                
                                <div class="form-group">
									<label for="exampleInputPassword1"><strong>Tahun :</strong></label>
									<?php echo $tahun;?>
								</div>
						  <p><center>
						    <p><em>(mohon diisi dengan tanda (X) sesuai dengan penilaian</em>)						  </p>
						  </center>
                          
                          
                          
                          
                          
						  <table  border="1"  width="100%" cellspacing="0" cellpadding="0">
						    <col width="27" />
						    <col width="345" />
						    <col width="58" span="5" />
						    <tr>
						      <td rowspan="2" width="30"><div align=""><strong>NO.</strong></div></td>
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
						      <td><div align="left"><?php echo $i1; ?></div></td>
						       <td><div align="left"><?php echo $i2; ?></div></td>
						       <td><div align="left"><?php echo $i3; ?></div></td>
						     <td><div align="left"><?php echo $i4; ?></div></td>
						       <td><div align="left"><?php echo $i5; ?></div></td>
					        </tr>
						    <tr>
						      <td><div align="left">2</div></td>
						      <td width="345">Kualitas    pekerjaan yang diberikan dalam penyelesaian permasalahan teknologi</td>
						      <td><div align="left"><?php echo $i6; ?></div></td>
						      <td><div align="left"><?php echo $i7; ?></div></td>
						     <td><div align="left"><?php echo $i8; ?></div></td>
						      <td><div align="left"><?php echo $i9; ?></div></td>
						       <td><div align="left"><?php echo $i10; ?></div></td>
					        </tr>
					      </table>
						  <center>
                           
                              <tr>
                                <td colspan="7"><div align="center"><strong>SARAN/MASUKAN/FEEDBACK TERHADAP UNIT TNR WBN (secara keseluruhan):</strong></div></td>
                              </tr>
                              <tr>
                                <td colspan="7"><div align="center">(<em>mohon mengisi saran/masukan/feedback</em>)</div></td>
                              </tr>
                            </table>
                            <table width="100%" height="219" border="1">
                              <tr>
                                <td width="100%"><?php echo $saran; ?></td>
                              </tr>
                            </table>
                          </center>
                          <p>&nbsp;</p>
                          
                          <table width="100%" border="1">
                            <tr>
                              <td><strong><u>Unit Penilaian :</u></strong></td>
                              <td><div align="right"><strong>PT. Bank Negara Indonesia (Persero) Tbk.</strong></div></td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><p align="right"><strong>Kantor Utama Cabang/Sentra.....................</strong></p>
                              <p align="right">&nbsp;</p>
                              <p align="right">&nbsp;</p>
                              <p align="right"> (_____________________)</p></td>
                            </tr>
                          </table>
                          <p>&nbsp; 	                </p>
                          <p>&nbsp;</p>
                            <p align="center"><strong>==Terima kasih berpartisipasi dalam survey kepuasan kinerja Unit TNR WBN==</strong></p>
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

					
