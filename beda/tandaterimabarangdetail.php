<style>
input{
	width:100%;
}
</style>

<?php
$query = mysqli_query($koneksi, "SELECT id, tanggal, cabang, alamat, i1, i2, i3, i4, i5, i6, i7, i8, i9, i10, i11, i12, i13, i14, i15, i16, i17, i18, i19, i20, i21, i22, i23, i24, i25, i26, i27, i28, i29, i30, i31, i32, i33, i34, i35, i36, i37, i38, i39, i40, i41, i42, i43, i44, i45, i46, i47, i48 FROM tandaterimabarang WHERE id='".$_GET['id']."'");
										while($data = mysqli_fetch_array($query)){
$id = $data['id'];

$tanggal = $data['tanggal'];
$cabang = $data['cabang'];
$alamat = $data['alamat'];
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
$i[11] = $data['i11'];
$i[12] = $data['i12'];
$i[13] = $data['i13'];
$i[14] = $data['i14'];
$i[15] = $data['i15'];
$i[16] = $data['i16'];
$i[17] = $data['i17'];
$i[18] = $data['i18'];
$i[19] = $data['i19'];
$i[20] = $data['i20'];
$i[21] = $data['i21'];
$i[22] = $data['i22'];
$i[23] = $data['i23'];
$i[24] = $data['i24'];
$i[25] = $data['i25'];
$i[26] = $data['i26'];
$i[27] = $data['i27'];
$i[28] = $data['i28'];
$i[29] = $data['i29'];
$i[30] = $data['i30'];
$i[31] = $data['i31'];
$i[32] = $data['i32'];
$i[33] = $data['i33'];
$i[34] = $data['i34'];
$i[35] = $data['i35'];
$i[36] = $data['i36'];
$i[37] = $data['i37'];
$i[38] = $data['i38'];
$i[39] = $data['i39'];
$i[40] = $data['i40'];
$i[41] = $data['i41'];
$i[42] = $data['i42'];
$i[43] = $data['i43'];
$i[44] = $data['i44'];
$i[45] = $data['i45'];
$i[46] = $data['i46'];
$i[47] = $data['i47'];
$i[48] = $data['i48'];
}
?>


<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">TANDA-TERIMA PENYERAHAN BARANG</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST">
							  
								<div class="form-group">
									<label for="exampleInputDate">Tanggal</label>
									<input type="date" class="form-control" id="exampleInputDate" name="tanggal" value="<?php echo $tanggal;?>" readonly="readonly">
								</div>
  Telah diserahkan sejumlah hardware/peralatan kepada :
                                <div class="form-group">
									<label for="exampleInputName">Kantor Wilayah/Kantor Cabang/Kantor Kas</label>
									<input type="text" class="form-control" id="exampleInputName" placeholder="" name="cabang" value="<?php echo $cabang;?>" readonly="readonly">
								</div>
								
								<div class="form-group">
									<label for="exampleInputName">Alamat</label>
									<input type="text" class="form-control" id="exampleInputName" name="alamat" value="<?php echo $alamat;?>" readonly="readonly">
								</div>
                                
                                
                                <?php
								$input = 1;
								 ?>
                                Yang terdiri dari :
                                
                                <table width="100%" cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse">
                                  <tr>
                                    <td><div align="center"><strong>Hardware</strong></div></td>
                                    <td><div align="center"><strong>Unit</strong></div></td>
                                    <td><div align="center"><strong>Serial Number</strong></div></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" align="center" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                  <tr>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                    <td><input type="text" name="i<?php echo $input; ?>" readonly value="<?php echo $i[$input++]; ?>" /></td>
                                  </tr>
                                </table>
                                <br />
                             
<a href="printtandaterimabarang.php?id=<?php echo $_GET['id']; ?>" target="_blank" class="btn btn-warning"><i class="fas fa-sm fa-fw m-r-10 fa-pen-alt"></i>Cetak</a>
  <a href="?nav=tandaterimabarangdata" class="btn btn-primary"><i class="fas fa-sm fa-fw m-r-10 fa-undo-alt"></i>Kembali</a> 
						  </form>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
