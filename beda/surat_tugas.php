<style>
input{
	width:100%;
}
</style>

<?php
if(isset($_POST['simpan'])){
	$sql = "INSERT INTO surat_tugas(nama, pangkat, bepergian, tanggal_berangkat, tanggal_kembali, kendaraan, lain_lain, nomor_surat, a1, a2, a3, a4, a5, a6, name, jabatan) VALUES ('".$_POST['nama']."', '".$_POST['pangkat']."','".$_POST['bepergian']."', '".$_POST['tanggal_berangkat']."', '".$_POST['tanggal_kembali']."', '".$_POST['kendaraan']."', '".$_POST['lain_lain']."', '".$_POST['nomor_surat']."', '".$_POST['a1']."', '".$_POST['a2']."', '".$_POST['a3']."', '".$_POST['a4']."', '".$_POST['a5']."', '".$_POST['a6']."', '".$_POST['name']."', '".$_POST['jabatan']."')";
	$query = mysqli_query($koneksi, $sql);

?>


<script>alert('Surat Tugas Berhasil Dibuat')</script>
<script>window.location='?nav=surat_tugas_data'</script>

<?php
}
?>

<?php
$sql = "select nama, pangkat, bepergian, tanggal_berangkat, tanggal_kembali, kendaraan, lain_lain, nomor_surat, a1, a2, a3, a4, a5, a6, name, jabatan from surat_tugas";
$qry = mysqli_query($koneksi, $sql);
$no = 1;
while($data=mysqli_fetch_array($qry)){

?>
<?php
}
?>




<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <div align="center"><strong>INPUT SURAT TUGAS</strong></div>
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
					      <p><strong>PT. BANK NEGARA INDONESIA (PERSERO) TBK
                          <br />KANTOR WILAYAH 04
                          </strong></p>
                          <br /><p align="center">
                          <div align="center"><strong><u>SURAT KETERANGAN JALAN/TUGAS</u><br />
                          </strong></div>
                          <strong></strong>
                          <div class="form-group">

							<center>
							  
							  <p>
							    <label for="exampleInputName"><strong>NO. W04/12.4/</strong></label>
							    <input type="text" style="width:50px" name="nomor_surat" />
							  </p>
							</center>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">1.</div></td>
							    <td width="130"><div align="">Nama/NPP</div></td>
							    <td><div align=""><input type="text" style="width:200px" name="nama" /></div></td>
						      </tr>
						    </table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">2.</div></td>
							    <td width="130">Umur</td>
							    <td><div align="">Dewasa
							      
							      </div></td>
						      </tr>
						    </table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">3.</div></td>
							    <td width="130"><div align="">Pangkat/Jabatan</div></td>
							    <td><div align="">
							      <input type="text" style="width:200px" name="pangkat" />
							      </div></td>
						      </tr>
						    </table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">4.</div></td>
							    <td width="130"><div align="">Tempat Tinggal</div></td>
							    <td><div align="">Bandung</div></td>
						      </tr>
						    </table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">5.</div></td>
							    <td width="130"><div align="">Bepergian ke</div></td>
							    <td><div align="">
							      <input type="text" style="width:200px" name="bepergian" />
							      </div></td>
						      </tr>
						    </table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">6.</div></td>
							    <td width="130"><div align="">Keperluan</div></td>
							    <td><div align="">
							      Dinas
							      </div></td>
						      </tr>
						    </table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">7.</div></td>
							    <td width="130"><div align="">Tanggal Berangkat</div></td>
							    <td><div align="">
							      <input type="date" style="width:150px" name="tanggal_berangkat" />
							      </div></td>
						      </tr>
						    </table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">8.</div></td>
							    <td width="130"><div align="">Tanggal Kembali</div></td>
							    <td><div align="">
							      Sampai dengan selesai
							     <input type="date" style="width:150px" name="tanggal_kembali" /> </div></td>
						      </tr>
						    </table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">9.</div></td>
							    <td width="130"><div align="">Kendaraan</div></td>
							    <td><div align="">
							      Dinas/Sopir <input type="text" style="width:100px" name="kendaraan" />
							      </div></td>
						      </tr>
						    </table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">10.</div></td>
							    <td width="130"><div align="">Unit Organisasi</div></td>
							    <td><div align="">PT. Bank Negara Indonesia (Persero) Tbk</div>
                                KANTOR WILAYAH 04
                  <br />  Jl. Perintis Kemerdekaan No. 3 Bandung
                                </td>
						      </tr>
						    </table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">11.</div></td>
							    <td width="130"><div align="">Lain-lain (Pengikut)</div></td>
							    <td><div align="">
							      <input type="text" style="width:200px" name="lain_lain" />
							      </div></td>
						      </tr>
						    </table>
							<p>&nbsp;</p>
							<p>Untuk melaksanakan perjanalan dinas ke <input type="text" style="width:100px" />
							  <br />
							  Biaya perjalanan dinas tersebut dibebankan pada Sub. Rekening Biaya perjalanan Dinas/Pindah Sandi .604.360550401-001							</p>
                              <div align="right"></div>
                              <table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							   
							    <td><div align="left"><strong>Tanda tangan</strong></div></td>
                                    <td><strong>PT. Bank Negara Indonesia (Persero) Tbk</strong></td>
                                  </tr>
                                  <tr>
                                    <td><strong>Pegawai Yang Bersangkutan</strong></td>
                                    <td><strong>KANTOR WILAYAH 04</strong></td>
                                  </tr>
                                  <tr>
                                    <td height="149">
<div class="signature" style=''>
 <canvas id="signature-pad" class="signature-pad" width="200px" height="100px"></canvas>
 <br />(<input type="text" readonly="readonly" style="width:200px"  />)</div></td>
                                    <td><div class="signature" style=''>
 <canvas id="signature-pad2" class="signature-pad" width="200px" height="100px"></canvas>
</div>
                                    <p><strong><u><input type="text" name="name" style="width:100px"  /></u><br /><input type="text" name="jabatan" style="width:150px" /></strong></p>
                                    <p>&nbsp;</p></td>
                                   


							   
							   
						      </tr>
						    </table>
							
						    <table width="100%" border="1" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							    <tr>
							      <td width="40"><div align="center">TANGGAL</div></td>
							      <td width="130"><div align="center">BERANGKAT DARI</div></td>
                                  <td width="130"><div align="center">SINGGAH/BERMALAM DI</div></td>
                                  <td width="130"><div align="center">DATANG DI</div></td>
                                    <td width="130"><div align="center">JUMLAH PERSEKOT YG DIBERIKAN</div></td>
                                     <td width="130"><div align="center">TANDA TANGAN CAP/KB/WIL/CAB</div></td>
							      
							      
							      
							     
						      </tr>
							    <tr>
							      <td align="center"><input type="date" name="a1" style="width:150px" /></td>
                                   
							      <td align="center"><input type="text" name="a2"  /></td>
                                  <td align="center"><input type="text" name="a3"  /></td>
                                  <td align="center"><input type="text" name="a4"  /></td>
                                  <td align="center"><input type="text" name="a5"  /></td>
                                  <td align="center"><input type="text" name="a6"  /></td>
							    
						      </tr>
							    <tr>
							      
							     
						     
							      
							      <td align="center"></td>
						     
						      </tr>
						    </table>
                            
						    <p>&nbsp;</p>
							<p>&nbsp;</p>
							
                          </div>
<button name="simpan" type="submit" class="btn btn-success"><i class="fa fa-fw fa-plus"></i> Simpan</button>
							 <button type="reset" name="reset" class="btn btn-danger"><i class="fas fa-sm fa-fw m-r-10 fa-redo-alt"></i>Reset</button>
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

					
