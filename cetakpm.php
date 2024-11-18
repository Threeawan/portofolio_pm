<?php
$query = mysqli_query($koneksi, "SELECT id, cabang, alamat, tanggal_kunjungan, h1a, h1b, h1c, h2a, h3a, h3b, h3c, h3d, h3e, h3f, h4a, h4b, h5a, h5b, h5c, h6a, h6b, h7a, h7b, h8a, h8b, h8c, h9a, h9b, k1a, k1b, k1c, k2a, k3a, k3b, k3c, k3d, k3e, k3f, k4a, k4b, k5a, k5b, k5c, k6a, k6b, k7a, k7b, k8a, k9a, k9b FROM psk WHERE id='".$_GET['id']."'");
										while($data = mysqli_fetch_array($query)){
$id = $data['id'];
$cabang = $data['cabang'];
$alamat = $data['alamat'];
$tanggal_kunjungan = $data['tanggal_kunjungan'];
$h1a = $data['h1a'];
$h1b = $data['h1b'];
$h1c = $data['h1c'];
$h2a = $data['h2a'];
$h3a = $data['h3a'];
$h3b = $data['h3b'];
$h3c = $data['h3c'];
$h3d = $data['h3d'];
$h3e = $data['h3e'];
$h3f = $data['h3f'];
$h4a = $data['h4a'];
$h4b = $data['h4b'];
$h5a = $data['h5a'];
$h5b = $data['h5b'];
$h5c = $data['h5c'];
$h6a = $data['h6a'];
$h6b = $data['h6b'];
$h7a = $data['h7a'];
$h7b = $data['h7b'];
$h8a = $data['h8a'];
$h8b = $data['h8b'];
$h8c = $data['h8c'];
$h9a = $data['h9a'];
$h9b = $data['h9b'];
$k1a = $data['k1a'];	
$k1b = $data['k1b'];
$k1c = $data['k1c'];											
$k2a = $data['k2a'];	
$k3a = $data['k3a'];
$k3b = $data['k3b'];
$k3c = $data['k3c'];
$k3d = $data['k3d'];
$k3e = $data['k3e'];
$k3f = $data['k3f'];	
$k4a = $data['k4a'];
$k4b = $data['k4b'];
$k5a = $data['k5a'];
$k5b = $data['k5b'];
$k5c = $data['k5c'];
$k6a = $data['k6a'];
$k6b = $data['k6b'];
$k7a = $data['k7a'];
$k7b = $data['k7b'];
$k8a = $data['k8a'];
$k9a = $data['k9a'];
$k9b = $data['k9b'];
}
?>




<div class="col-lg-12">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
						  <div align="center"><strong>CHECKLIST POWER SYSTEM & KELISTRIKAN</strong></div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <form method="POST">
						<div class="form-group">
									<label for="exampleInputName">Cabang</label>
									<input type="" class="form-control" id="exampleInputName" name="cabang" readonly="readonly" value="<?php echo $cabang; ?>">
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1">Alamat</label>
									<input type="" class="form-control" id="exampleInputName" name="alamat" readonly="readonly" value="<?php echo $alamat; ?>">
								</div>
                                
                                <div class="form-group">
									<label for="exampleInputPassword1">Tanggal Kunjungan</label>
									<input type="date" class="form-control" id="exampleInputName" placeholder="" name="tanggal_kunjungan" readonly="readonly" value="<?php echo $tanggal_kunjungan; ?>">
								</div>
                                
                                <table cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse" class="table table-responsive">
                                  <col width="64" />
                                  <col width="258" />
                                  <col width="108" />
                                  <col width="203" />
                                  <col width="219" />
                                  <tr>
                                    <td width="64"><div align="center"><strong>No. </strong></div></td>
                                    <td align="left" width="258"><div align="center"><strong>Kegiatan</strong></div></td>
                                    <td width="108"><div align="center"><strong>Rekomendasi</strong></div></td>
                                    <td align="left" width="203"><div align="center"><strong>Hasil </strong></div></td>
                                    <td width="219"><div align="center"><strong>Keterangan </strong></div></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4"><div align="left">1</div>                                      <div align="left"></div>                                      <div align="left"></div>                                      <div align="left"></div></td>
                                    <td rowspan="4" align="left">Check    Grounding dan tegangan dari PLN</td>
                                    <td rowspan="4">&nbsp;</td>
                                    <td align="left">Phase    -to-Netral = <?php echo $h1a; ?> V</td>
                                    <td> <?php echo $k1a; ?> </td>
                                  </tr>
                                  <tr>
                                    <td align="left">Phase    -to-ground  = <?php echo $h1b; ?> V</td>
                                    <td><?php echo $k1b; ?></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Netral    -to-Ground = <?php echo $h1c; ?> V</td>
                                    <td><?php echo $k1c; ?></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td rowspan="2">2</td>
                                    <td rowspan="2" align="left">Rata-rata    mati listrik dalam 1 minggu</td>
                                    <td>Never</td>
                                    <td align="left"><?php echo $h2a; ?></td>
                                    <td><?php echo $k2a; ?></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td rowspan="8">3</td>
                                    <td rowspan="4" align="left">Check UPS    Server</td>
                                    <td align="left">Tegangan 200 - 230 V</td>
                                    <td align="left">Phase    -to-Netral    =  <?php echo $h3a; ?> V</td>
                                    <td><?php echo $k3a; ?></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Tegangan 200 - 230 V</td>
                                    <td align="left">Phase    -to-ground  =<?php echo $h3b; ?> V</td>
                                    <td><?php echo $k3b; ?></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Graounding &lt; 1 V</td>
                                    <td align="left">Netral    -to-Ground =<?php echo $h3c; ?> V</td>
                                    <td><?php echo $k3c; ?></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4" align="left">Check UPS    Network</td>
                                    <td align="left">Tegangan 200 - 230 V</td>
                                    <td align="left">Phase    -to-Netral    = <?php echo $h3d; ?> V</td>
                                    <td><?php echo $k3d; ?></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Tegangan 200 - 230 V</td>
                                    <td align="left">Phase    -to-ground  =<?php echo $h3e; ?> V</td>
                                    <td><?php echo $k3e; ?></td>
                                  </tr>
                                  <tr>
                                    <td align="left">Graounding &lt; 1 V</td>
                                    <td align="left">Netral    -to-Ground =<?php echo $h3f; ?> V</td>
                                    <td><?php echo $k3f; ?></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td rowspan="3">4</td>
                                    <td rowspan="3" align="left">Check suhu    AC ruang server</td>
                                    <td align="left">humidity 8 - 80 % </td>
                                    <td align="left">Humidity    =<?php echo $h4a; ?> %</td>
                                    <td><?php echo $k4a; ?></td>
                                  </tr>
                                  <tr>
                                    <td rowspan="2" align="left">suhu 20 - 27  ͦ</td>
                                    <td align="left">Suhu         =<?php echo $h4b; ?> ͦC</td>
                                    <td><?php echo $k4b; ?></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td rowspan="5">5</td>
                                    <td align="left">Check    Penangkal petir</td>
                                    <td rowspan="5">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td align="left">- Check    physical perangkat anti-petir</td>
                                    <td align="left"><?php echo $h5a; ?></td>
                                    <td><?php echo $k5a; ?></td>
                                  </tr>
                                  <tr>
                                    <td align="left">- Check    wire</td>
                                    <td align="left"><?php echo $h5b; ?></td>
                                    <td><?php echo $k5b; ?></td>
                                  </tr>
                                  <tr>
                                    <td align="left">- Check    panel</td>
                                    <td align="left"><?php echo $h5c; ?></td>
                                    <td><?php echo $k5c; ?></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">6</td>
                                    <td align="left">Check    Genset</td>
                                    <td rowspan="4">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="left">- Check    physical mesin genset</td>
                                    <td align="left"><?php echo $h6a; ?></td>
                                    <td><?php echo $k6a; ?></td>
                                  </tr>
                                  <tr>
                                    <td align="left">- Check    functionality mesin</td>
                                    <td align="left"><?php echo $h6b; ?></td>
                                    <td><?php echo $k6b; ?></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">7</td>
                                    <td align="left">Check    Kabel</td>
                                    <td rowspan="4">&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="left">- Check    kondisi kabel kelistrikan</td>
                                    <td align="left"><?php echo $h7a; ?></td>
                                    <td align="left"><?php echo $k7a; ?></td>
                                  </tr>
                                  <tr>
                                    <td align="left">- Check    kondisi kabel UTP</td>
                                    <td align="left"><?php echo $h7b; ?></td>
                                    <td align="left"><?php echo $k7b; ?></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td rowspan="6">8</td>
                                    <td align="left">Ruang    Server &amp; Rak Server</td>
                                    <td rowspan="6" width="108">Pastikan pintu rak server dapat ditutup rapat,    dan kunci rak server dititipkan ke pemimpin</td>
                                    <td>&nbsp;</td>
                                    <td rowspan="5" width="219"><?php echo $k8a; ?></td>
                                  </tr>
                                  <tr>
                                    <td align="left">- Check    kebersihan ruangan</td>
                                    <td align="left"><?php echo $h8a; ?></td>
                                  </tr>
                                  <tr>
                                    <td align="left">- Check    kelayakan ruangan</td>
                                    <td align="left"><?php echo $h8b; ?></td>
                                  </tr>
                                  <tr>
                                    <td align="left">- Check    Rak Server</td>
                                    <td align="left"><?php echo $h8c; ?></td>
                                  </tr>
                                  <tr>
                                    <td width="258">&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td rowspan="4">9</td>
                                    <td align="left">Alat    Pemadam Kebakaran</td>
                                    <td rowspan="4">Di Ruang Server</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="left">- Posisi    penempatan alat pemadam </td>
                                    <td><?php echo $h9a; ?></td>
                                    <td><?php echo $k9a; ?></td>
                                  </tr>
                                  <tr>
                                    <td align="left">- Tanggal    kadaluarsa/expired</td>
                                    <td><?php echo $h9b; ?></td>
                                    <td><?php echo $k9b; ?></td>
                                  </tr>
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                  </tr>
                                </table>
                                <br />
                            <a href="?nav=powersystemdata" class="btn btn-primary">Kembali</a>  <a href="printpsk.php?id=<?php echo $_GET['id']; ?>" target="_blank" class="btn btn-warning">Cetak</a>
						
						  </form>
						</div>
						<!-- END card-body -->
					</div>
					<!-- END card -->
				</div>

					
