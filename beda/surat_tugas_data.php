
<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse"><strong>SURAT TUGAS
						 
  </strong></div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <table  id="datatables-default" class="table  table-bordered m-b-0">
							  <thead>
									<tr>
										<th>No.</th>
										<th>Nama/Npp</th>
										
										<th>Pangkat/Jabatan</th>
										
                                        <th>Bepergian ke</th>
                                        
                                          <th>Tanggal Berangkat</th>
                                           <th>Tanggal Kembali</th>
                                           <th>Kendaraan</th>
                                           
                                           <th>Lain-lain (Pengikut)</th>
                                         <th>Aksi</th>
									</tr>
							</thead>
								<tbody>
                                
                                <?php
										$no = 1;
										$query = mysqli_query($koneksi, "select id, nama, pangkat, bepergian, tanggal_berangkat, tanggal_kembali, kendaraan, lain_lain, nomor_surat, a1, a2, a3, a4, a5, a6 from surat_tugas");
										while($data = mysqli_fetch_array($query)){
										
										 ?>
                               
                                
									<tr>
										<td><?php echo $no++;?></td>
										<td><?php echo $data['nama'];?></td>
										<td><?php echo $data['pangkat'];?></td>
										
										<td><?php echo $data['bepergian'];?></td>
                                        <td><?php echo $data['tanggal_berangkat'];?></td>
                                         <td><?php echo $data['tanggal_kembali'];?></td>
                                          <td><?php echo $data['kendaraan'];?></td>
                                          <td><?php echo $data['lain_lain'];?></td>
                                          
                                          
<td><a href="?nav=surat_tugas_detail&id=<?php echo $data['id']; ?>" class="btn btn-warning"><i class="far fa-sm fa-fw m-r-10 fa-clipboard"></i>Detail</a>
<a href="?nav=surat_tugas_ubah&id=<?php echo $data['id']; ?>" class="btn btn-info"><i class="fas fa-sm fa-fw m-r-10 fa-pencil-alt"></i>Ubah</a>
<a href="?nav=surat_tugas_hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger"><i class="fas fa-sm fa-fw m-r-10 fa-trash-alt"></i>Hapus</a>


								</tr>
<?php 
										}?>
									
								</tbody>
						  </table>
  </div>
						<!-- END card-body -->
</div>
					
