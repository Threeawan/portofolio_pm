
<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse"><strong>PENILAIAN TERHADAP KUALITAS INTR WILAYAH 04
						
  </strong></div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
							<div class="card-body">
						  <table  id="datatables-default" class="table  table-bordered m-b-0">
							  <thead>
									<tr>
										<th>No.</th>
										<th>Periode Awal</th>
										<th>Periode Akhir</th>
										
                                         <th>Aksi</th>
									</tr>
							</thead>
								<tbody>
                                
                                <?php
										$no = 1;
										$query = mysqli_query($koneksi, "select id, periode_awal, periode_akhir from penilaian");
										while($data = mysqli_fetch_array($query)){
										
										 ?>
                               
                                
									<tr>
										<td><?php echo $no++;?></td>
										<td><?php echo $data['periode_awal'];?></td>
										<td><?php echo $data['periode_akhir'];?></td>
									
<td><a href="?nav=penilaiandetail&id=<?php echo $data['id']; ?>" class="btn btn-warning"><i class="far fa-sm fa-fw m-r-10 fa-clipboard"></i>Detail</a>
<a href="?nav=penilaianubah&id=<?php echo $data['id']; ?>" class="btn btn-info"><i class="fas fa-sm fa-fw m-r-10 fa-pencil-alt"></i>Ubah</a>
<a href="?nav=penilaianhapus&id=<?php echo $data['id']; ?>" class="btn btn-danger"><i class="fas fa-sm fa-fw m-r-10 fa-trash-alt"></i>Hapus</a>


								</tr>
<?php 
										}?>
									
								</tbody>
						  </table>
  </div>
						<!-- END card-body -->
</div>
						<!-- END card-body -->
</div>
					
