			 <?php
            //memanggil file koneksi
            include "koneksi.php";
            //query mengambil data dari tabel gambar di database
			$no = 1;
            $tampil = mysqli_query($koneksi,"select * from psk");
			$sql = mysqli_num_rows($tampil);
            while($hasil = mysqli_fetch_array($tampil)){
            ?>
			
			
			<td><?php echo $no++;?></td>
            
			<td><?php echo $hasil['tanggal_upload'];?></td>
            
			<td><?php echo $hasil['cabang'];?></td>
			
			<td><?php echo $hasil['alamat'];?></td>
			
			<td><?php echo $hasil['tanggal_kunjungan'];?></td>
			
			<td><?php echo $hasil['inputer'];?></td>
			
			<td><?php echo $hasil['h1a'];?></td>
		
			<td><?php echo $hasil['h1b'];?></td>
			
			<td><?php echo $hasil['h1c'];?></td>

			<td><?php echo $hasil['h2a'];?></td>
			
			<td><?php echo $hasil['h3a'];?></td>
			
			<td><?php echo $hasil['h3b'];?></td>

			<td><?php echo $hasil['h3c'];?></td>

			<td><?php echo $hasil['h3d'];?></td>

			<td><?php echo $hasil['h3e'];?></td>

			<td><?php echo $hasil['h3f'];?></td>
		
			<td><?php echo $hasil['h4a'];?></td>

			<td><?php echo $hasil['h4b'];?></td>

			<td><?php echo $hasil['h5a'];?></td>

			<td><?php echo $hasil['h5b'];?></td>
			
			<td><?php echo $hasil['h5c'];?></td>
			
			<td><?php echo $hasil['h6a'];?></td>

			<td><?php echo $hasil['h6b'];?></td>
			
			<td><?php echo $hasil['h7a'];?></td>

			<td><?php echo $hasil['h7b'];?></td>
		
			<td><?php echo $hasil['h8a'];?></td>
		
			<td><?php echo $hasil['h8b'];?></td>

			<td><?php echo $hasil['h8c'];?></td>

			<td><?php echo $hasil['h9a'];?></td>

			<td><?php echo $hasil['h9b'];?></td>
		
			<td><?php echo $hasil['k1a'];?></td>

			<td><?php echo $hasil['k1b'];?></td>

			<td><?php echo $hasil['k1c'];?></td>
			
			<td><?php echo $hasil['k2a'];?></td>

			<td><?php echo $hasil['k3a'];?></td>

			<td><?php echo $hasil['k3b'];?></td>

			<td><?php echo $hasil['k3c'];?></td>

			<td><?php echo $hasil['k3d'];?></td>

			<td><?php echo $hasil['k3e'];?></td>

			<td><?php echo $hasil['k3f'];?></td>
		
			<td><?php echo $hasil['k4a'];?></td>

			<td><?php echo $hasil['k4b'];?></td>
		
			<td><?php echo $hasil['k5a'];?></td>

			<td><?php echo $hasil['k5b'];?></td>

			<td><?php echo $hasil['k5c'];?></td>

			<td><?php echo $hasil['k6a'];?></td>
			
			<td><?php echo $hasil['k6b'];?></td>

			<td><?php echo $hasil['k7a'];?></td>

			<td><?php echo $hasil['k7b'];?></td>

			<td><?php echo $hasil['k8a'];?></td>

			<td><?php echo $hasil['k9a'];?></td>

			<td><?php echo $hasil['k9b'];?></td>

			<td><?php echo $hasil['l1a'];?></td>

			<td><?php echo $hasil['l1b'];?></td>

			<td><?php echo $hasil['l1c'];?></td>

			<td><?php echo $hasil['l1d'];?></td>

			<td><?php echo $hasil['l1e'];?></td>
			
			<td><?php echo $hasil['l2a'];?></td>

			<td><?php echo $hasil['l2b'];?></td>

			<td><?php echo $hasil['l2c'];?></td>

			<td><?php echo $hasil['l2d'];?></td>

			<td><?php echo $hasil['l2e'];?></td>

			<td><?php echo $hasil['m1a'];?></td>

			<td><?php echo $hasil['m1b'];?></td>

			<td><?php echo $hasil['m1c'];?></td>
			
			<td><?php echo $hasil['m1d'];?></td>

			<td><?php echo $hasil['m1e'];?></td>

			<td><?php echo $hasil['m2a'];?></td>

			<td><?php echo $hasil['m2b'];?></td>

			<td><?php echo $hasil['m2c'];?></td>

			<td><?php echo $hasil['m2d'];?></td>
			
			<td><?php echo $hasil['m2e'];?></td>

			<td><?php echo $hasil['n1a'];?></td>

			<td><?php echo $hasil['n1b'];?></td>
			
			<td><?php echo $hasil['n1c'];?></td>

			<td><?php echo $hasil['n1d'];?></td>

			<td><?php echo $hasil['n1e'];?></td>

			<td><?php echo $hasil['n2a'];?></td>

			<td><?php echo $hasil['n2b'];?></td>

			<td><?php echo $hasil['n2c'];?></td>

			<td><?php echo $hasil['n2d'];?></td>

			<td><?php echo $hasil['n2e'];?></td>

			<td><?php echo $hasil['o1a'];?></td>

			<td><?php echo $hasil['o1b'];?></td>
			
			<td><?php echo $hasil['o1c'];?></td>

			<td><?php echo $hasil['o1d'];?></td>

			<td><?php echo $hasil['o1e'];?></td>

			<td><?php echo $hasil['o2a'];?></td>

			<td><?php echo $hasil['o2b'];?></td>
			
			<td><?php echo $hasil['o2c'];?></td>

			<td><?php echo $hasil['o2d'];?></td>

			<td><?php echo $hasil['o2e'];?></td>

			<td><?php echo $hasil['p1a'];?></td>

			<td><?php echo $hasil['p1b'];?></td>

			<td><?php echo $hasil['p1c'];?></td>

			<td><?php echo $hasil['p1d'];?></td>

			<td><?php echo $hasil['p1e'];?></td>

			<td><?php echo $hasil['p2a'];?></td>

			<td><?php echo $hasil['p2b'];?></td>

			<td><?php echo $hasil['p2c'];?></td>

			<td><?php echo $hasil['p2d'];?></td>

			<td><?php echo $hasil['p2e'];?></td>

			<td><?php echo $hasil['q1a'];?></td>
		
			<td><?php echo $hasil['q1b'];?></td>
		
			<td><?php echo $hasil['q1c'];?></td>

			<td><?php echo $hasil['q1d'];?></td>

			<td><?php echo $hasil['q1e'];?></td>

			<td><?php echo $hasil['q2a'];?></td>

			<td><?php echo $hasil['q2b'];?></td>

			<td><?php echo $hasil['q2c'];?></td>

			<td><?php echo $hasil['q2d'];?></td>

			<td><?php echo $hasil['q2e'];?></td>

			<td><?php echo $hasil['r1a'];?></td>

			<td><?php echo $hasil['r1b'];?></td>
			
			<td><?php echo $hasil['r1c'];?></td>

			<td><?php echo $hasil['r1d'];?></td>

			<td><?php echo $hasil['r1e'];?></td>
			
			<td><?php echo $hasil['r2a'];?></td>

			<td><?php echo $hasil['r2b'];?></td>

			<td><?php echo $hasil['r2c'];?></td>

			<td><?php echo $hasil['r2d'];?></td>

			<td><?php echo $hasil['r2e'];?></td>

			<td><?php echo $hasil['s1a'];?></td>
			
			<td><?php echo $hasil['s1b'];?></td>

			<td><?php echo $hasil['s1c'];?></td>

			<td><?php echo $hasil['s1d'];?></td>

			<td><?php echo $hasil['s1e'];?></td>

			<td><?php echo $hasil['s2a'];?></td>

			<td><?php echo $hasil['s2b'];?></td>

			<td><?php echo $hasil['s2c'];?></td>

			<td><?php echo $hasil['s2d'];?></td>

			<td><?php echo $hasil['s2e'];?></td>

			<td><?php echo $hasil['t1a'];?></td>

			<td><?php echo $hasil['t1b'];?></td>

			<td><?php echo $hasil['t1c'];?></td>

			<td><?php echo $hasil['t1d'];?></td>

			<td><?php echo $hasil['t1e'];?></td>
	
			<td><?php echo $hasil['t2a'];?></td>

			<td><?php echo $hasil['t2b'];?></td>

			<td><?php echo $hasil['t2c'];?></td>

			<td><?php echo $hasil['t2d'];?></td>

			<td><?php echo $hasil['t2e'];?></td>
			
			<td><?php echo $hasil['u1a'];?></td>

			<td><?php echo $hasil['u1b'];?></td>
			
			<td><?php echo $hasil['u1c'];?></td>

			<td><?php echo $hasil['u1d'];?></td>
			
			<td><?php echo $hasil['u1e'];?></td>

			<td><?php echo $hasil['u2a'];?></td>

			<td><?php echo $hasil['u2b'];?></td>
			
			<td><?php echo $hasil['u2c'];?></td>

			<td><?php echo $hasil['u2d'];?></td>

			<td><?php echo $hasil['u2e'];?></td>

			<td><?php echo $hasil['v1a'];?></td>

			<td><?php echo $hasil['v1b'];?></td>

			<td><?php echo $hasil['v1c'];?></td>
			
			<td><?php echo $hasil['v1d'];?></td>

			<td><?php echo $hasil['v1e'];?></td>

			<td><?php echo $hasil['v2a'];?></td>
			
			<td><?php echo $hasil['v2b'];?></td>

			<td><?php echo $hasil['v2c'];?></td>

			<td><?php echo $hasil['v2d'];?></td>

			<td><?php echo $hasil['v2e'];?></td>

			<td><?php echo $hasil['w1a'];?></td>
			
			<td><?php echo $hasil['w1b'];?></td>
		
			<td><?php echo $hasil['w1c'];?></td>

			<td><?php echo $hasil['w1d'];?></td>

			<td><?php echo $hasil['w1e'];?></td>

			<td><?php echo $hasil['w2a'];?></td>
			
			<td><?php echo $hasil['w2b'];?></td>
			
			<td><?php echo $hasil['w2c'];?></td>

			<td><?php echo $hasil['w2d'];?></td>

			<td><?php echo $hasil['w2e'];?></td>

			<td><?php echo $hasil['x1a'];?></td>

			<td><?php echo $hasil['x1b'];?></td>

			<td><?php echo $hasil['x1c'];?></td>
			
			<td><?php echo $hasil['x1d'];?></td>
			
			<td><?php echo $hasil['x1e'];?></td>

			<td><?php echo $hasil['x2a'];?></td>

			<td><?php echo $hasil['x2b'];?></td>

			<td><?php echo $hasil['x2c'];?></td>

			<td><?php echo $hasil['x2d'];?></td>
			
			<td><?php echo $hasil['x2e'];?></td>

			<td><?php echo $hasil['y1a'];?></td>

			<td><?php echo $hasil['y1b'];?></td>

			<td><?php echo $hasil['y1c'];?></td>

			<td><?php echo $hasil['y1d'];?></td>

			<td><?php echo $hasil['y1e'];?></td>

			<td><?php echo $hasil['y2a'];?></td>

			<td><?php echo $hasil['y2b'];?></td>
			
			<td><?php echo $hasil['y2c'];?></td>
			
			<td><?php echo $hasil['y2d'];?></td>
			
			<td><?php echo $hasil['y2e'];?></td>

			<td><?php echo $hasil['z1a'];?></td>

			<td><?php echo $hasil['z1b'];?></td>

			<td><?php echo $hasil['z1c'];?></td>
			
			<td><?php echo $hasil['z1d'];?></td>
			
			<td><?php echo $hasil['z1e'];?></td>

			<td><?php echo $hasil['z2a'];?></td>

			<td><?php echo $hasil['z2b'];?></td>

			<td><?php echo $hasil['z2c'];?></td>
			
			<td><?php echo $hasil['z2d'];?></td>
			
			<td><?php echo $hasil['z2e'];?></td>

			<td><?php echo $hasil['a1a'];?></td>

			<td><?php echo $hasil['a1b'];?></td>

			<td><?php echo $hasil['a1c'];?></td>

			<td><?php echo $hasil['a1d'];?></td>
			
			
			<td><?php if($hasil['router_1']!='file/router_1/'){ ?><a href="<?php echo $hasil['router_1']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['router_2']!='file/router_2/'){ ?><a href="<?php echo $hasil['router_2']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_1']!='file/switch_1/'){ ?><a href="<?php echo $hasil['switch_1']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_2']!='file/switch_2/'){ ?><a href="<?php echo $hasil['switch_2']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_3']!='file/switch_3/'){ ?><a href="<?php echo $hasil['switch_3']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_4']!='file/switch_4/'){ ?><a href="<?php echo $hasil['switch_4']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_5']!='file/switch_5/'){ ?><a href="<?php echo $hasil['switch_5']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_6']!='file/switch_6/'){ ?><a href="<?php echo $hasil['switch_6']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_7']!='file/switch_7/'){ ?><a href="<?php echo $hasil['switch_7']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_8']!='file/switch_8/'){ ?><a href="<?php echo $hasil['switch_8']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_9']!='file/switch_9/'){ ?><a href="<?php echo $hasil['switch_9']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_10']!='file/switch_10/'){ ?><a href="<?php echo $hasil['switch_10']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_11']!='file/switch_11/'){ ?><a href="<?php echo $hasil['switch_11']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_12']!='file/switch_12/'){ ?><a href="<?php echo $hasil['switch_12']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_13']!='file/switch_13/'){ ?><a href="<?php echo $hasil['switch_13']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_14']!='file/switch_14/'){ ?><a href="<?php echo $hasil['switch_14']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_15']!='file/switch_15/'){ ?><a href="<?php echo $hasil['switch_15']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_16']!='file/switch_16/'){ ?><a href="<?php echo $hasil['switch_16']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_17']!='file/switch_17/'){ ?><a href="<?php echo $hasil['switch_17']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_18']!='file/switch_18/'){ ?><a href="<?php echo $hasil['switch_18']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_19']!='file/switch_19/'){ ?><a href="<?php echo $hasil['switch_19']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['switch_20']!='file/switch_20/'){ ?><a href="<?php echo $hasil['switch_20']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['server_1']!='file/server_1/'){ ?><a href="<?php echo $hasil['server_1']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['server_2']!='file/server_2/'){ ?><a href="<?php echo $hasil['server_2']?>" target="_blank">Lihat</a><?php } ?></td>
			
			<td><?php if($hasil['server_3']!='file/server_3/'){ ?><a href="<?php echo $hasil['server_3']?>" target="_blank">Lihat</a><?php } ?></td>