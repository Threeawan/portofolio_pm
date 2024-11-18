
<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse"><strong>CHECKLIST POWER SYSTEM & KELISTRIKAN
						 
  </strong></div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <table  id="datatables-default" class="table  table-bordered m-b-0">
							  <thead>
									<tr>
										<th>No.</th>
										<th>Kantor Cabang/Kantor Kas</th>
										<th>Alamat</th>
										<th>Tanggal Kunjungan</th>
										<th>Inputer</th>
                                         <th>Aksi</th>
									</tr>
							</thead>
								<tbody>
                                
                                <?php
										$no = 1;
										$query = mysqli_query($koneksi, "select id, cabang, alamat, tanggal_kunjungan, inputer from psk");
										while($data = mysqli_fetch_array($query)){
										
										 ?>
                               
                                
									<tr>
										<td><?php echo $no++;?></td>
										<td><?php echo $data['cabang'];?></td>
										<td><?php echo $data['alamat'];?></td>
										<td><?php echo $data['tanggal_kunjungan'];?></td>
										<td><?php echo $data['inputer'];?></td>
<td><a href="?nav=powersystemdetail&id=<?php echo $data['id']; ?>" class="btn btn-warning"><i class="far fa-sm fa-fw m-r-10 fa-clipboard"></i>Detail</a>
<a href="?nav=powersystemubah&id=<?php echo $data['id']; ?>" class="btn btn-info"><i class="fas fa-sm fa-fw m-r-10 fa-pencil-alt"></i>Ubah</a>
<a href="?nav=powersystemhapus&id=<?php echo $data['id']; ?>" class="btn btn-danger"><i class="fas fa-sm fa-fw m-r-10 fa-trash-alt"></i>Hapus</a>


								</tr>
<?php 
										}?>
									
								</tbody>
						  </table>
  </div>
						<!-- END card-body -->
</div>
					
