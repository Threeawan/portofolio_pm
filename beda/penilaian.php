<style>
input{
	width:100%;
}
</style>

<?php
if(isset($_POST['simpan'])){
	$sql = "INSERT INTO penilaian(periode_awal, periode_akhir, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, saran)VALUES('".$_POST['periode_awal']."', '".$_POST['periode_akhir']."','".$_POST['i1']."', '".$_POST['i2']."', '".$_POST['i3']."', '".$_POST['i4']."', '".$_POST['i5']."', '".$_POST['i6']."', '".$_POST['i7']."', '".$_POST['i8']."', '".$_POST['i9']."', '".$_POST['i10']."', '".$_POST['saran']."')";
	$query = mysqli_query($koneksi, $sql);

?>
<script>alert('Data Berhasi Disimpan')</script>
<script>window.location='penghubung.php?nav=penilaiandata'</script>
<?php
}
?>






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
                        
                       <div class="form-group">
									<label for="exampleInputName">Periode Awal</label>
									<input type="month" class="form-control" id="exampleInputName" name="periode_awal">
								</div>
                                
								<div class="form-group">
									<label for="exampleInputName">Periode Akhir</label>
									<input type="month" class="form-control" id="exampleInputName" name="periode_akhir">
								</div>
                                
                               
						 
						    <p><em>(mohon diisi dengan tanda (X) sesuai dengan penilaian</em>)						  </p>
						  </center>
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
						      <td><input type="text" name="i1" /></td>
						      <td><input type="text" name="i2" /></td>
						      <td><input type="text" name="i3" /></td>
						      <td><input type="text" name="i4" /></td>
						      <td><input type="text" name="i5" /></td>
					        </tr>
						    <tr>
						      <td><div align="center">2</div></td>
						      <td width="345">Kualitas    pekerjaan yang diberikan dalam penyelesaian permasalahan teknologi</td>
						      <td><input type="text" name="i6" /></td>
						      <td><input type="text" name="i7" /></td>
						      <td><input type="text" name="i8" /></td>
						      <td><input type="text" name="i9" /></td>
						      <td><input type="text" name="i10" /></td>
					        </tr>
					      </table>
						  
                             
                          <center>
                            <table cellspacing="0" cellpadding="0" width="100%">
                              <tr>
                              <br />
                                <td colspan="7"><div align="center">
                                  <p><strong>SARAN/ MASUKAN/FEEDBACK TERHADAP UNIT TNR WILAYAH 04 (secara keseluruhan): </strong></p>
                                </div></td>
                              </tr>
                              <tr>
                                <td colspan="7"><div align="center"><em>(mohon mengisi saran/masukan/feedback)</em></div></td>
                              </tr>
                            </table>
                               <br />
                            <table width="100%" height="219" border="1">
                              <tr>
                                <td width="100%"><textarea name="saran" style="width:100%;height:100%"></textarea></td>
                              </tr>
                            </table>
                            </center>
                            <br />
                            <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
							 <button type="reset" name="reset" class="btn btn-danger">Reset</button>
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

					
