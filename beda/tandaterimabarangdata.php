
<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse"><strong>TANDA-TERIMA PENYERAHAN BARANG
						  
  </strong></div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <table  id="datatables-default" class="table table-bordered m-b-0">
							  <thead>
									<tr>
										<th>No.</th>
									
										<th>Tanggal</th>
										<th>Kantor Wilayah/Kantor Cabang/Kantor Kas</th>
										<th>Alamat</th>
                                         <th>Aksi</th>
									</tr>
							</thead>
								<tbody>
                                
                                <?php
										$no = 1;
										$query = mysqli_query($koneksi, "select id, tanggal, cabang, alamat from tandaterimabarang");
										while($data = mysqli_fetch_array($query)){
										
										 ?>
                               
                                
									<tr>
										<td><?php echo $no++;?></td>
										
										<td><?php echo $data['tanggal'];?></td>
										<td><?php echo $data['cabang'];?></td>
										<td><?php echo $data['alamat'];?></td>
<td><a href="?nav=tandaterimabarangdetail&id=<?php echo $data['id']; ?>" class="btn btn-warning"><i class="far fa-sm fa-fw m-r-10 fa-clipboard"></i>Detail</a>
<a href="?nav=tandaterimabarangubah&id=<?php echo $data['id']; ?>" class="btn btn-info"><i class="fas fa-sm fa-fw m-r-10 fa-pencil-alt"></i>Ubah</a>
<a href="?nav=tandaterimabaranghapus&id=<?php echo $data['id']; ?>" class="btn btn-danger"><i class="fas fa-sm fa-fw m-r-10 fa-trash-alt"></i>Hapus</a>
 </td>								</tr>
<?php 
										}?>
									
								</tbody>
						  </table>
  </div>
						<!-- END card-body -->
</div>
					
