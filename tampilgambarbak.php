<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse"><strong>Foto BAK
						 
  </strong></div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
						  <table  id="datatables-default" class="table table-bordered m-b-0">
							  <thead>
									<tr>
						
										<th>No.</th>
										<th>Tanggal Upload</th>
										<th>Uploader</th>
										<th>Gambar</th>
										<th>Nama File</th>
										<th>Ukuran File</th>
										<th>Aksi</th>
									</tr>
							</thead>
								<tbody>
                                
                               <?php
            //memanggil file koneksi
            include "koneksi.php";
            //query mengambil data dari tabel gambar di database
			$no = 1;
            $tampil = mysqli_query($koneksi,"select * from foto");
			$sql = mysqli_num_rows($tampil);
            while($hasil = mysqli_fetch_array($tampil)){
            ?>
            <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $hasil['tanggal_upload'];?></td>
            <td><?php echo $hasil['uploader'];?></td>
			<td><a href="<?php echo "images/".$hasil['nama'];?>" target="_blank"><img width="120" height="150" src="<?php echo "images/".$hasil['nama'];?>"></a></td>
            <td><?php echo $hasil['nama'];?></td>
            <td><?php echo $hasil['ukuran'];?></td>
            
			<td><a href="penghubung.php?nav=hapusfotobak&id=<?php echo $hasil['id']; ?>" class="btn btn-danger"><i class="fas fa-sm fa-fw m-r-10 fa-trash-alt"></i>Hapus</a>
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
					
