<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse"><strong>File PDF
						 
  </strong></div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <table  id="datatables-default" class="table table-bordered m-b-0">
							  <thead>
									<tr>
						
										<th>No.</th>
										<th>Tanggal Upload</th>
										<th>Kantor Cabang/Kantor Kas</th>
										<th>Alamat</th>
										<th>Ruang Server</th>
										<th>Rak Server Tampak Depan</th>
										<th>Rak Server Tampak Belakang</th>
										<th>Aksi</th>
									</tr>
							</thead>
								<tbody>
                                
                              <?php
            //memanggil file koneksi
            include "koneksi.php";
            //query mengambil data dari tabel gambar di database
			$no = 1;
            $tampil = mysqli_query($koneksi,"select * from server");
			$sql = mysqli_num_rows($tampil);
            while($hasil = mysqli_fetch_array($tampil)){
            ?>
            <tr>
            <td><?php echo $no++;?></td>
            
			<td><?php echo $hasil['tanggal_upload'];?></td>
            
			<td><?php echo $hasil['cabang'];?></td>
			
			<td><?php echo $hasil['alamat'];?></td>
			
			<td><?php if($hasil['ruang_server']!='file/ruang_server/'){ ?><a href="<?php echo $hasil['ruang_server']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['rak_server_depan']!='file/rak_server_depan/'){ ?><a href="<?php echo $hasil['rak_server_depan']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['rak_server_belakang']!='file/rak_server_belakang/'){ ?><a href="<?php echo $hasil['rak_server_belakang']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><a href="penghubung.php?nav=hapusserver&id=<?php echo $hasil['id']; ?>" class="btn btn-danger"><i class="fas fa-sm fa-fw m-r-10 fa-trash-alt"></i>Hapus</a> <a href="penghubung.php?nav=ubahserver&id=<?php echo $hasil['id']; ?>" class="btn btn-info"><i class="fas fa-sm fa-fw m-r-10 fa-pencil-alt"></i>Ubah</a>
			</td>
			
			</tr>
            <?php
                
                }
            ?>
									
								</tbody>
						  </table>
  </div>
						<!-- END card-body -->
</div>
					
