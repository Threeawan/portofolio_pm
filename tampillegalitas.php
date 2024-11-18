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
										<th>Nama Outlet</th>
										<th>Ijin Usaha</th>
										<th>IMB</th>
										<th>Dokumen Kepemilikan Asset</th>
										<th>PKS Sewa</th>
										<th>Aksi</th>
									</tr>
							</thead>
								<tbody>
                                
                              <?php
            //memanggil file koneksi
            include "koneksi.php";
            //query mengambil data dari tabel gambar di database
			$no = 1;
            $tampil = mysqli_query($koneksi,"select * from legalitas");
			$sql = mysqli_num_rows($tampil);
            while($hasil = mysqli_fetch_array($tampil)){
            ?>
            <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $hasil['tanggal_upload'];?></td>
            <td><?php echo $hasil['nama_outlet'];?></td>
			
			<td><?php if($hasil['ijin_usaha']!='file/ijin_usaha/'){ ?><a href="<?php echo $hasil['ijin_usaha']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['imb']!='file/imb/'){ ?><a href="<?php echo $hasil['imb']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['dokumen_kepemilikan']!='file/dokumen_kepemilikan/'){ ?><a href="<?php echo $hasil['dokumen_kepemilikan']?>" target="_blank">Lihat</a><?php } ?></td>
			
			
			<td><?php if($hasil['pks_sewa']!='file/pks_sewa/'){ ?><a href="<?php echo $hasil['pks_sewa']?>" target="_blank">Lihat</a><?php } ?></td>
			
			
            
			<td><a href="penghubung.php?nav=hapuslegalitas&id=<?php echo $hasil['id']; ?>" class="btn btn-danger"><i class="fas fa-sm fa-fw m-r-10 fa-trash-alt"></i>Hapus</a> <a href="penghubung.php?nav=ubahlegalitas&id=<?php echo $hasil['id']; ?>" class="btn btn-info"><i class="fas fa-sm fa-fw m-r-10 fa-pencil-alt"></i>Ubah</a>
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
					
