<style>
input{
	width:100%;
}
</style>


<?php
$query = mysqli_query($koneksi, "SELECT id, periode_awal, periode_akhir, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, saran FROM penilaian WHERE id='".$_GET['id']."'");
										while($data = mysqli_fetch_array($query)){
$periode_awal = $data['periode_awal'];	
$periode_akhir = $data['periode_akhir'];											
												
											
$i[1] = $data['i1'];
$i[2] = $data['i2'];
$i[3] = $data['i3'];
$i[4] = $data['i4'];
$i[5] = $data['i5'];
$i[6] = $data['i6'];
$i[7] = $data['i7'];
$i[8] = $data['i8'];
$i[9] = $data['i9'];
$i[10] = $data['i10'];
$saran = $data['saran'];

}
?>




<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">PENILAIAN TERHADAP KUALITAS UNIT TNR WBN</div>
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
									<label for="exampleInputPassword1">Periode Awal</label>
									<input type="" class="form-control" id="exampleInputName" name="periode_awal" value="<?php echo $periode_awal;?>" readonly="readonly">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Periode Akhir</label>
									<input type="" class="form-control" id="exampleInputName" name="periode_akhir" value="<?php echo $periode_akhir;?>" readonly="readonly">
								</div>
                                
                                
						  <p><center>
						    <p><em>(mohon diisi dengan tanda (X) sesuai dengan penilaian</em>)						  </p>
						  </center>
                          
                          <?php
							  /*create table
							  for($i=1;$i<=213;$i++){
								  echo ", i".$i." text";
							  }
							  */
							  /*create colom
							  for($i=1;$i<=213;$i++){
								  echo ", i".$i."";
							  }
							  */
							  /*create post
							  for($i=1;$i<=213;$i++){
								  echo ", '\".\$_POST['i".$i."'].\"'";
							  }		
							  */					  
							  
							  $input = 1;
							  ?>
                          
                          
                          
						  <table  border="1"  width="100%" cellspacing="0" cellpadding="0">
						    <col width="27" />
						    <col width="345" />
						    <col width="58" span="5" />
						    <tr>
						      <td rowspan="2" width="27"><div align="center"><strong>NO.</strong></div></td>
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
						      <td><div align="center">1</div></td>
						      <td width="345">Respon dalam    melakukan follow up terhadap    pengelolaan permasalahan teknologi</td>
						      <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
						      <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
						      <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
						      <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
						      <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
					        </tr>
						    <tr>
						      <td><div align="center">2</div></td>
						      <td width="345">Kualitas    pekerjaan yang diberikan dalam penyelesaian permasalahan teknologi</td>
						      <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
						      <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
						      <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
						      <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
						      <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
					        </tr>
					      </table>
						  <center>
                            <table cellspacing="0" cellpadding="0" width="100%">
                              <tr>
                              <br />
                                <td colspan="7"><div align="center"><strong>SARAN/MASUKAN/FEEDBACK TERHADAP UNIT TNR WBN (secara keseluruhan): </strong></div></td>
                              </tr>
                              <tr>
                              
                                <td colspan="7"><div align="center">(<em>mohon    mengisi saran/masukan/feedback</em>)</div></td>
                             
                              </tr>
                            </table>
                               <br />
                            <table width="100%" height="219" border="1">
                              <tr>
                                <td width="100%"><textarea name="saran" style="width:100%;height:100%" readonly="readonly"><?php echo $saran; ?></textarea></td>
                              </tr>
                            </table>
                            </center>
                            <br />
  <a href="printpenilaian.php?id=<?php echo $_GET['id']; ?>" target="_blank" class="btn btn-warning">Cetak</a>
  <a href="?nav=penilaiandata" class="btn btn-primary">Kembali</a>
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

					
