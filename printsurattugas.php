<style>
input{
	width:100%;
}
</style>
<link href="bni.png" rel="shortcut icon"/>


<?php
$koneksi = mysqli_connect("localhost","root","","pmbni");
$query = mysqli_query($koneksi, "select id, nama, pangkat, bepergian, tanggal_berangkat, tanggal_kembali, kendaraan, lain_lain, nomor_surat, 
a1, a2, a3, a4, a5, a6, name, jabatan from surat_tugas where id='".$_GET['id']."'");
while($data = mysqli_fetch_array($query)){

$id = $data['id'];
$nama = $data['nama'];
$pangkat = $data['pangkat'];
$bepergian = $data['bepergian'];
$tanggal_berangkat = $data['tanggal_berangkat'];
$tanggal_kembali = $data['tanggal_kembali'];
$kendaraan = $data['kendaraan'];
$lain_lain = $data['lain_lain'];
$nomor_surat = $data['nomor_surat'];
$a1 = $data['a1'];
$a2 = $data['a2'];
$a3 = $data['a3'];
$a4 = $data['a4'];
$a5 = $data['a5'];
$a6 = $data['a6'];
$name = $data['name'];
$jabatan = $data['jabatan'];
?>

<?php
}
?>

<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <div align="center"></div>
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
                          <p><img src="bni.png"
 alt="bni.png" align="right" style="width:200px;height:200px"></p>
					      <p>&nbsp;</p>
					      <p>&nbsp;</p>
					      <p>&nbsp;</p>
					      <p>&nbsp;</p>
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
							    <?php echo $nomor_surat;?>
							  </p>
							</center>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">1.</div></td>
							    <td width="130"><div align="">Nama/NPP</div></td>
							    <td><div align=""><?php echo $nama;?></div></td>
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
							      <?php echo $pangkat;?>
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
							      <?php echo $bepergian;?>
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
							      <?php echo $tanggal_berangkat;?>
							      </div></td>
						      </tr>
						    </table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">8.</div></td>
							    <td width="130"><div align="">Tanggal Kembali</div></td>
							    <td><div align="">
							      Sampai dengan selesai
							     <?php echo $tanggal_kembali;?> </div></td>
						      </tr>
						    </table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">9.</div></td>
							    <td width="130"><div align="">Kendaraan</div></td>
							    <td><div align="">
							      Dinas/Sopir <?php echo $kendaraan;?>
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
							      <?php echo $lain_lain;?>
							      </div></td>
						      </tr>
						    </table>
							<p>&nbsp;</p>
							<p>Untuk melaksanakan perjanalan dinas ke <?php echo $bepergian;?> 
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
 <br /><strong>(<?php echo $nama;?>)</strong></div></td>
                                    <td><div class="signature" style=''>
 <canvas id="signature-pad2" class="signature-pad" width="200px" height="100px"></canvas>
</div>
                                    <p><strong><u><?php echo $name;?></u><br /><?php echo $jabatan;?></strong></p>
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
							      <br /><td align="center"><?php echo $a1;?></td>
                                   
							     <td align="center"><?php echo $a2;?></td>
                                  <td align="center"><?php echo $a3;?></td>
                                 <td align="center"><?php echo $a4;?></td>
                                  <td align="center"><?php echo $a5;?></td>
                                 <td align="center"><?php echo $a6;?></td>
							    
						      </tr>
							    <tr>
							      
							     
						     
							      
							      <td align="center"></td>
						     
						      </tr>
						    </table>
                            
						   
							
                          </div>
						  </form>
                                
                     <br />
                      <img src="kopsurat.jpg" alt="kopsurat.jpg" align="right">           
                     
                          
                      </div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div></div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
