<style>
input{
	width:100%;
}
</style>

<?php
if(isset($_POST['hapus'])){
	$query = mysqli_query($koneksi, "delete from surat_tugas where id='".$_GET['id']."'");
?>
<script>alert('Surat Tugas Berhasil Dihapus')</script>
<script>window.location='?nav=surat_tugas_data'</script>
<?php
}
?>

<?php
$query = mysqli_query($koneksi, "select id, nama, pangkat, bepergian, tanggal_berangkat, tanggal_kembali, kendaraan, lain_lain, nomor_surat, a1, a2, a3, a4, a5, a6, name, jabatan from surat_tugas where id='".$_GET['id']."'");
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
						  <div align="center"><strong>HAPUS SURAT TUGAS</strong></div>
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
							    <input type="text" style="width:50px" name="nomor_surat" value="<?php echo $nomor_surat;?>" readonly="readonly"/>
							  </p>
							</center>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">1.</div></td>
							    <td width="130"><div align="">Nama/NPP</div></td>
							    <td><div align=""><input type="text" style="width:200px" name="nama" value="<?php echo $nama;?>" readonly="readonly" /></div></td>
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
							      <input type="text" style="width:200px" name="pangkat" value="<?php echo $pangkat;?>" readonly="readonly"/>
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
							      <input type="text" style="width:200px" name="bepergian" value="<?php echo $bepergian;?>" readonly="readonly" />
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
							      <input type="date" style="width:150px" name="tanggal_berangkat" value="<?php echo $tanggal_berangkat;?>" readonly="readonly" />
							      </div></td>
						      </tr>
						    </table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">8.</div></td>
							    <td width="130"><div align="">Tanggal Kembali</div></td>
							    <td><div align="">
							      Sampai dengan selesai
							     <input type="date" style="width:150px" name="tanggal_kembali" value="<?php echo $tanggal_kembali;?>" readonly="readonly" /> </div></td>
						      </tr>
						    </table>
							<table width="100%" border="0" cellpadding="0" cellspacing="0" style="border-collapse:collapse">
							  <tr>
							    <td width="40"><div align="center">9.</div></td>
							    <td width="130"><div align="">Kendaraan</div></td>
							    <td><div align="">
							      Dinas/Sopir <input type="text" style="width:100px" name="kendaraan" value="<?php echo $kendaraan;?>" readonly="readonly" />
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
							      <input type="text" style="width:200px" name="lain_lain" value="<?php echo $lain_lain;?>" readonly="readonly" />
							      </div></td>
						      </tr>
						    </table>
							<p>&nbsp;</p>
							<p>Untuk melaksanakan perjanalan dinas ke <input type="text" style="width:100px" name="bepergian" value="<?php echo $bepergian;?>" readonly="readonly" />
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
 <br />(<input type="text" name="nama" style="width:200px" value="<?php echo $nama;?>">)</div></td>
                                    <td><div class="signature" style=''>
 <canvas id="signature-pad2" class="signature-pad" width="200px" height="100px"></canvas>
</div>
                                    <p><strong><u><input type="text" style="width:100px" name="name" value="<?php echo $name;?>"></u><br /><input type="text" style="width:150px" name="jabatan" value="<?php echo $jabatan;?>"></strong></p>
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
							      <td align="center"><input type="date" name="a1" style="width:150px" value="<?php echo $a1;?>" readonly="readonly" /></td>
                                   
							      <td align="center"><input type="text" name="a2" value="<?php echo $a2;?>" readonly="readonly"  /></td>
                                  <td align="center"><input type="text" name="a3" value="<?php echo $a3;?>" readonly="readonly"  /></td>
                                  <td align="center"><input type="text" name="a4" value="<?php echo $a4;?>" readonly="readonly"  /></td>
                                  <td align="center"><input type="text" name="a5" value="<?php echo $a5;?>" readonly="readonly" /></td>
                                  <td align="center"><input type="text" name="a6" value="<?php echo $a6;?>" readonly="readonly"  /></td>
							    
						      </tr>
							    <tr>
							      
							     
						     
							      
							      <td align="center"></td>
						     
						      </tr>
						    </table>
                            
						    <p>&nbsp;</p>
							<p>&nbsp;</p>
							
                          </div>
<button type="submit" name="hapus" class="btn btn-danger"><i class="fas fa-sm fa-fw m-r-10 fa-trash-alt"></i>Hapus</button>
							 <a href="?nav=surat_tugas_data" class="btn btn-warning"><i class="fas fa-sm fa-fw m-r-10 fa-undo-alt"></i>Kembali</a>
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

					
