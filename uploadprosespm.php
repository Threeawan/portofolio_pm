<?php
//mengambil data gambar dan menyimpannya kedalam variabel
include "koneksi.php";
$cabang = $_POST['cabang'];
$alamat = $_POST['alamat'];
$tanggal_kunjungan = $_POST['tanggal_kunjungan'];
$inputer = $_POST['inputer'];
$h1a = $_POST['h1a'];
$h1b = $_POST['h1b'];
$h1c = $_POST['h1c'];
$h2a = $_POST['h2a'];
$h3a = $_POST['h3a'];
$h3b = $_POST['h3b'];
$h3c = $_POST['h3c'];
$h3d = $_POST['h3d'];
$h3e = $_POST['h3e'];
$h3f = $_POST['h3f'];
$h4a = $_POST['h4a'];
$h4b = $_POST['h4b'];
$h5a = $_POST['h5a'];
$h5b = $_POST['h5b'];
$h5c = $_POST['h5c'];
$h6a = $_POST['h6a'];
$h6b = $_POST['h6b'];
$h7a = $_POST['h7a'];
$h7b = $_POST['h7b'];
$h8a = $_POST['h8a'];
$h8b = $_POST['h8b'];
$h8c = $_POST['h8c'];
$h9a = $_POST['h9a'];
$h9b = $_POST['h9b'];
$k1a = $_POST['k1a'];	
$k1b = $_POST['k1b'];
$k1c = $_POST['k1c'];											
$k2a = $_POST['k2a'];	
$k3a = $_POST['k3a'];
$k3b = $_POST['k3b'];
$k3c = $_POST['k3c'];
$k3d = $_POST['k3d'];
$k3e = $_POST['k3e'];
$k3f = $_POST['k3f'];	
$k4a = $_POST['k4a'];
$k4b = $_POST['k4b'];
$k5a = $_POST['k5a'];
$k5b = $_POST['k5b'];
$k5c = $_POST['k5c'];
$k6a = $_POST['k6a'];
$k6b = $_POST['k6b'];
$k7a = $_POST['k7a'];
$k7b = $_POST['k7b'];
$k8a = $_POST['k8a'];
$k9a = $_POST['k9a'];
$k9b = $_POST['k9b'];
$l1a = $_POST['l1a'];
$l1b = $_POST['l1b'];
$l1c = $_POST['l1c'];
$l1d = $_POST['l1d'];
$l1e = $_POST['l1e'];
$l2a = $_POST['l2a'];
$l2b = $_POST['l2b'];
$l2c = $_POST['l2c'];
$l2d = $_POST['l2d'];
$l2e = $_POST['l2e'];
$m1a = $_POST['m1a'];
$m1b = $_POST['m1b'];
$m1c = $_POST['m1c'];
$m1d = $_POST['m1d'];
$m1e = $_POST['m1e'];
$m2a = $_POST['m2a'];
$m2b = $_POST['m2b'];
$m2c = $_POST['m2c'];
$m2d = $_POST['m2d'];
$m2e = $_POST['m2e'];
$n1a = $_POST['n1a'];
$n1b = $_POST['n1b'];
$n1c = $_POST['n1c'];
$n1d = $_POST['n1d'];
$n1e = $_POST['n1e'];
$n2a = $_POST['n2a'];
$n2b = $_POST['n2b'];
$n2c = $_POST['n2c'];
$n2d = $_POST['n2d'];
$n2e = $_POST['n2e'];
$o1a = $_POST['o1a'];
$o1b = $_POST['o1b'];
$o1c = $_POST['o1c'];
$o1d = $_POST['o1d'];
$o1e = $_POST['o1e'];
$o2a = $_POST['o2a'];
$o2b = $_POST['o2b'];
$o2c = $_POST['o2c'];
$o2d = $_POST['o2d'];
$o2e = $_POST['o2e'];
$p1a = $_POST['p1a'];
$p1b = $_POST['p1b'];
$p1c = $_POST['p1c'];
$p1d = $_POST['p1d'];
$p1e = $_POST['p1e'];
$p2a = $_POST['p2a'];
$p2b = $_POST['p2b'];
$p2c = $_POST['p2c'];
$p2d = $_POST['p2d'];
$p2e = $_POST['p2e'];
$q1a = $_POST['q1a'];
$q1b = $_POST['q1b'];
$q1c = $_POST['q1c'];
$q1d = $_POST['q1d'];
$q1e = $_POST['q1e'];
$q2a = $_POST['q2a'];
$q2b = $_POST['q2b'];
$q2c = $_POST['q2c'];
$q2d = $_POST['q2d'];
$q2e = $_POST['q2e'];
$r1a = $_POST['r1a'];
$r1b = $_POST['r1b'];
$r1c = $_POST['r1c'];
$r1d = $_POST['r1d'];
$r1e = $_POST['r1e'];
$r2a = $_POST['r2a'];
$r2b = $_POST['r2b'];
$r2c = $_POST['r2c'];
$r2d = $_POST['r2d'];
$r2e = $_POST['r2e'];
$s1a = $_POST['s1a'];
$s1b = $_POST['s1b'];
$s1c = $_POST['s1c'];
$s1d = $_POST['s1d'];
$s1e = $_POST['s1e'];
$s2a = $_POST['s2a'];
$s2b = $_POST['s2b'];
$s2c = $_POST['s2c'];
$s2d = $_POST['s2d'];
$s2e = $_POST['s2e'];
$t1a = $_POST['t1a'];
$t1b = $_POST['t1b'];
$t1c = $_POST['t1c'];
$t1d = $_POST['t1d'];
$t1e = $_POST['t1e'];
$t2a = $_POST['t2a'];
$t2b = $_POST['t2b'];
$t2c = $_POST['t2c'];
$t2d = $_POST['t2d'];
$t2e = $_POST['t2e'];
$u1a = $_POST['u1a'];
$u1b = $_POST['u1b'];
$u1c = $_POST['u1c'];
$u1d = $_POST['u1d'];
$u1e = $_POST['u1e'];
$u2a = $_POST['u2a'];
$u2b = $_POST['u2b'];
$u2c = $_POST['u2c'];
$u2d = $_POST['u2d'];
$u2e = $_POST['u2e'];
$v1a = $_POST['v1a'];
$v1b = $_POST['v1b'];
$v1c = $_POST['v1c'];
$v1d = $_POST['v1d'];
$v1e = $_POST['v1e'];
$v2a = $_POST['v2a'];
$v2b = $_POST['v2b'];
$v2c = $_POST['v2c'];
$v2d = $_POST['v2d'];
$v2e = $_POST['v2e'];
$w1a = $_POST['w1a'];
$w1b = $_POST['w1b'];
$w1c = $_POST['w1c'];
$w1d = $_POST['w1d'];
$w1e = $_POST['w1e'];
$w2a = $_POST['w2a'];
$w2b = $_POST['w2b'];
$w2c = $_POST['w2c'];
$w2d = $_POST['w2d'];
$w2e = $_POST['w2e'];
$x1a = $_POST['x1a'];
$x1b = $_POST['x1b'];
$x1c = $_POST['x1c'];
$x1d = $_POST['x1d'];
$x1e = $_POST['x1e'];
$x2a = $_POST['x2a'];
$x2b = $_POST['x2b'];
$x2c = $_POST['x2c'];
$x2d = $_POST['x2d'];
$x2e = $_POST['x2e'];
$y1a = $_POST['y1a'];
$y1b = $_POST['y1b'];
$y1c = $_POST['y1c'];
$y1d = $_POST['y1d'];
$y1e = $_POST['y1e'];
$y2a = $_POST['y2a'];
$y2b = $_POST['y2b'];
$y2c = $_POST['y2c'];
$y2d = $_POST['y2d'];
$y2e = $_POST['y2e'];
$z1a = $_POST['z1a'];
$z1b = $_POST['z1b'];
$z1c = $_POST['z1c'];
$z1d = $_POST['z1d'];
$z1e = $_POST['z1e'];
$z2a = $_POST['z2a'];
$z2b = $_POST['z2b'];
$a1a = $_POST['a1a'];
$a1b = $_POST['a1b'];
$a1c = $_POST['a1c'];
$a1d = $_POST['a1d'];
$b1a = $_POST['b1a'];
$b1b = $_POST['b1b'];	
$b1c = $_POST['b1c'];  
$b1d = $_POST['b1d'];  
$b1e = $_POST['b1e']; 
$b1f = $_POST['b1f'];   
$b1g = $_POST['b1g']; 
$c1a = $_POST['c1a']; 
$c1b = $_POST['c1b']; 
$c1c = $_POST['c1c']; 
$c1d = $_POST['c1d']; 
$c1e = $_POST['c1e']; 
$c1f = $_POST['c1f'];
$c1g = $_POST['c1g'];
    //$pakta_integritas = $_FILES['pakta_integritas']['name'];
    //$tmp_file_pakta_integritas = $_FILES['pakta_integritas']['tmp_name'];
    //$path_pakta_integritas = "file/pakta_integritas/".$pakta_integritas;
    //$ukuran_file = $_FILES['pakta_integritas']['size'];
	
	
	//$ijin_usaha = $_FILES['ijin_usaha']['name'];
    //$tmp_file_ijin_usaha = $_FILES['ijin_usaha']['tmp_name'];
    //$path_ijin_usaha = "file/ijin_usaha/".$ijin_usaha;
    //$ukuran_file = $_FILES['ijin_usaha']['size'];
	
	if(isset($_FILES['router_1'])){
    $router_1 = $_FILES['router_1']['name'];
    $tmp_file_router_1 = $_FILES['router_1']['tmp_name'];
    $path_router_1 = "file/router_1/".$router_1;
            move_uploaded_file($tmp_file_router_1, $path_router_1);
	}
	else{
		$path_router_1 = '';
	}
    
	if(isset($_FILES['router_2'])){
    $router_2 = $_FILES['router_2']['name'];
    $tmp_file_router_2 = $_FILES['router_2']['tmp_name'];
    $path_router_2 = "file/router_2/".$router_2;
            move_uploaded_file($tmp_file_router_2, $path_router_2);
	}
	else{
		$path_router_2 = '';
	}
	
	if(isset($_FILES['switch_1'])){
	$switch_1 = $_FILES['switch_1']['name'];
    $tmp_file_switch_1 = $_FILES['switch_1']['tmp_name'];
    $path_switch_1 = "file/switch_1/".$switch_1;
            move_uploaded_file($tmp_file_switch_1, $path_switch_1);
	}
	else{
		$path_switch_1 = '';
	}
	
	if(isset($_FILES['switch_2'])){
	$switch_2 = $_FILES['switch_2']['name'];
    $tmp_file_switch_2 = $_FILES['switch_2']['tmp_name'];
    $path_switch_2 = "file/switch_2/".$switch_2;
            move_uploaded_file($tmp_file_switch_2, $path_switch_2);
	}
	else{
		$path_switch_2 = '';
	}
	
	if(isset($_FILES['switch_3'])){
	$switch_3 = $_FILES['switch_3']['name'];
    $tmp_file_switch_3 = $_FILES['switch_3']['tmp_name'];
    $path_switch_3 = "file/switch_3/".$switch_3;
            move_uploaded_file($tmp_file_switch_3, $path_switch_3);
	}
	else{
		$path_switch_3 = '';
	}
	
	if(isset($_FILES['switch_4'])){
	$switch_4 = $_FILES['switch_4']['name'];
    $tmp_file_switch_4 = $_FILES['switch_4']['tmp_name'];
    $path_switch_4 = "file/switch_4/".$switch_4;
            move_uploaded_file($tmp_file_switch_4, $path_switch_4);
	}
	else{
		$path_switch_4 = '';
	}
	
	if(isset($_FILES['switch_5'])){
	$switch_5 = $_FILES['switch_5']['name'];
    $tmp_file_switch_5 = $_FILES['switch_5']['tmp_name'];
    $path_switch_5 = "file/switch_5/".$switch_5;
            move_uploaded_file($tmp_file_switch_5, $path_switch_5);
	}
	else{
		$path_switch_5 = '';
	}
	
	if(isset($_FILES['switch_6'])){
	$switch_6 = $_FILES['switch_6']['name'];
    $tmp_file_switch_6 = $_FILES['switch_6']['tmp_name'];
    $path_switch_6 = "file/switch_6/".$switch_6;
            move_uploaded_file($tmp_file_switch_6, $path_switch_6);
	}
	else{
		$path_switch_6 = '';
	}
	
	if(isset($_FILES['switch_7'])){
	$switch_7 = $_FILES['switch_7']['name'];
    $tmp_file_switch_7 = $_FILES['switch_7']['tmp_name'];
    $path_switch_7 = "file/switch_7/".$switch_7;
            move_uploaded_file($tmp_file_switch_7, $path_switch_7);
	}
	else{
		$path_switch_7 = '';
	}
	
	if(isset($_FILES['switch_8'])){
	$switch_8 = $_FILES['switch_8']['name'];
    $tmp_file_switch_8 = $_FILES['switch_8']['tmp_name'];
    $path_switch_8 = "file/switch_8/".$switch_8;
            move_uploaded_file($tmp_file_switch_8, $path_switch_8);
	}
	else{
		$path_switch_8 = '';
	}
	
	if(isset($_FILES['switch_9'])){
	$switch_9 = $_FILES['switch_9']['name'];
    $tmp_file_switch_9 = $_FILES['switch_9']['tmp_name'];
    $path_switch_9 = "file/switch_9/".$switch_9;
            move_uploaded_file($tmp_file_switch_9, $path_switch_9);
	}
	else{
		$path_switch_9 = '';
	}
    
	if(isset($_FILES['switch_10'])){
	$switch_10 = $_FILES['switch_10']['name'];
    $tmp_file_switch_10 = $_FILES['switch_10']['tmp_name'];
    $path_switch_10 = "file/switch_10/".$switch_10;
            move_uploaded_file($tmp_file_switch_10, $path_switch_10);
	}
	else{
		$path_switch_10 = '';
	}
	
	if(isset($_FILES['switch_11'])){
	$switch_11 = $_FILES['switch_11']['name'];
    $tmp_file_switch_11 = $_FILES['switch_11']['tmp_name'];
    $path_switch_11 = "file/switch_11/".$switch_11;
            move_uploaded_file($tmp_file_switch_11, $path_switch_11);
	}
	else{
		$path_switch_11 = '';
	}
    
	if(isset($_FILES['switch_12'])){
	$switch_12 = $_FILES['switch_12']['name'];
    $tmp_file_switch_12 = $_FILES['switch_12']['tmp_name'];
    $path_switch_12 = "file/switch_12/".$switch_12;
            move_uploaded_file($tmp_file_switch_12, $path_switch_12);
	}
	else{
		$path_switch_12 = '';
	}
	
	if(isset($_FILES['switch_13'])){
	$switch_13 = $_FILES['switch_13']['name'];
    $tmp_file_switch_13 = $_FILES['switch_13']['tmp_name'];
    $path_switch_13 = "file/switch_13/".$switch_13;
            move_uploaded_file($tmp_file_switch_13, $path_switch_13);
	}
	else{
		$path_switch_13 = '';
	}
	
	if(isset($_FILES['switch_14'])){
	$switch_14 = $_FILES['switch_14']['name'];
    $tmp_file_switch_14 = $_FILES['switch_14']['tmp_name'];
    $path_switch_14 = "file/switch_14/".$switch_14;
            move_uploaded_file($tmp_file_switch_14, $path_switch_14);
	}
	else{
		$path_switch_14 = '';
	}
	
	if(isset($_FILES['switch_15'])){
	$switch_15 = $_FILES['switch_15']['name'];
    $tmp_file_switch_15 = $_FILES['switch_15']['tmp_name'];
    $path_switch_15 = "file/switch_15/".$switch_15;
            move_uploaded_file($tmp_file_switch_15, $path_switch_15);
	}
	else{
		$path_switch_15 = '';
	}
	
	if(isset($_FILES['switch_16'])){
	$switch_16 = $_FILES['switch_16']['name'];
    $tmp_file_switch_16 = $_FILES['switch_16']['tmp_name'];
    $path_switch_16 = "file/switch_16/".$switch_16;
            move_uploaded_file($tmp_file_switch_16, $path_switch_16);
	}
	else{
		$path_switch_16 = '';
	}
	
	if(isset($_FILES['switch_17'])){
	$switch_17 = $_FILES['switch_17']['name'];
    $tmp_file_switch_17 = $_FILES['switch_17']['tmp_name'];
    $path_switch_17 = "file/switch_17/".$switch_17;
            move_uploaded_file($tmp_file_switch_17, $path_switch_17);
	}
	else{
		$path_switch_17 = '';
	}
	
	if(isset($_FILES['switch_18'])){
	$switch_18 = $_FILES['switch_18']['name'];
    $tmp_file_switch_18 = $_FILES['switch_18']['tmp_name'];
    $path_switch_18 = "file/switch_18/".$switch_18;
            move_uploaded_file($tmp_file_switch_18, $path_switch_18);
	}
	else{
		$path_switch_18 = '';
	}
	
	if(isset($_FILES['switch_19'])){
	$switch_19 = $_FILES['switch_19']['name'];
    $tmp_file_switch_19 = $_FILES['switch_19']['tmp_name'];
    $path_switch_19 = "file/switch_19/".$switch_19;
            move_uploaded_file($tmp_file_switch_19, $path_switch_19);
	}
	else{
		$path_switch_19 = '';
	}
	
	if(isset($_FILES['switch_20'])){
	$switch_20 = $_FILES['switch_20']['name'];
    $tmp_file_switch_20 = $_FILES['switch_20']['tmp_name'];
    $path_switch_20 = "file/switch_20/".$switch_20;
            move_uploaded_file($tmp_file_switch_20, $path_switch_20);
	}
	else{
		$path_switch_20 = '';
	}
	
	
	if(isset($_FILES['switch_21'])){
	$switch_21 = $_FILES['switch_21']['name'];
    $tmp_file_switch_21 = $_FILES['switch_21']['tmp_name'];
    $path_switch_21 = "file/switch_21/".$switch_21;
            move_uploaded_file($tmp_file_switch_21, $path_switch_21);
	}
	else{
		$path_switch_21 = '';
	}
	
	
	if(isset($_FILES['switch_22'])){
	$switch_22 = $_FILES['switch_22']['name'];
    $tmp_file_switch_22 = $_FILES['switch_22']['tmp_name'];
    $path_switch_22 = "file/switch_22/".$switch_22;
            move_uploaded_file($tmp_file_switch_22, $path_switch_22);
	}
	else{
		$path_switch_22 = '';
	}
	
	
	
	if(isset($_FILES['server_1'])){
	$server_1 = $_FILES['server_1']['name'];
    $tmp_file_server_1 = $_FILES['server_1']['tmp_name'];
    $path_server_1 = "file/server_1/".$server_1;
            move_uploaded_file($tmp_file_server_1, $path_server_1);
	}
	else{
		$path_server_1 = '';
	}
	
	if(isset($_FILES['server_2'])){
	$server_2 = $_FILES['server_2']['name'];
    $tmp_file_server_2 = $_FILES['server_2']['tmp_name'];
    $path_server_2 = "file/server_2/".$server_2;
            move_uploaded_file($tmp_file_server_2, $path_server_2);
	}
	else{
		$path_server_2 = '';
	}
	
	//$tdp = $_FILES['tdp']['name'];
    //$tmp_file_tdp = $_FILES['tdp']['tmp_name'];
    //$path_tdp = "file/tdp/".$tdp;
    
    //$shm = $_FILES['shm']['name'];
    //$tmp_file_shm = $_FILES['shm']['tmp_name'];
    //$path_shm = "file/shm/".$shm;
	
		
        // if($ukuran_file <= 5000000){ 

          //memindahkan lokasi gambar dari tempat asal ke dalam folder website
          //memiliki 2 parameter yang harus diisi, yaitu parameter tempat asal gambar dan paramter tempat tujuan gambar
          // if(move_uploaded_file($tmp_file_pakta_integritas, $path_pakta_integritas)){
            //move_uploaded_file($tmp_file_pakta_integritas, $path_pakta_integritas);
            //move_uploaded_file($tmp_file_ijin_usaha, $path_ijin_usaha);
          //  move_uploaded_file($tmp_file_router_1, $path_router_1);
          //  move_uploaded_file($tmp_file_router_2, $path_router_2);
          //  move_uploaded_file($tmp_file_switch_1, $path_switch_1);
          //  move_uploaded_file($tmp_file_switch_2, $path_switch_2);
          //  move_uploaded_file($tmp_file_switch_3, $path_switch_3);
          //  move_uploaded_file($tmp_file_switch_4, $path_switch_4);
          //  move_uploaded_file($tmp_file_switch_5, $path_switch_5);
          //  move_uploaded_file($tmp_file_switch_6, $path_switch_6);
          //  move_uploaded_file($tmp_file_switch_7, $path_switch_7);
          //  move_uploaded_file($tmp_file_switch_8, $path_switch_8);
          //  move_uploaded_file($tmp_file_switch_9, $path_switch_9);
          //  move_uploaded_file($tmp_file_switch_10, $path_switch_10);
          //  move_uploaded_file($tmp_file_switch_11, $path_switch_11);
          //  move_uploaded_file($tmp_file_switch_12, $path_switch_12);
          //  move_uploaded_file($tmp_file_switch_13, $path_switch_13);
          //  move_uploaded_file($tmp_file_switch_14, $path_switch_14);
          //  move_uploaded_file($tmp_file_switch_15, $path_switch_15);
          //  move_uploaded_file($tmp_file_switch_16, $path_switch_16);
          //  move_uploaded_file($tmp_file_switch_17, $path_switch_17);
          //  move_uploaded_file($tmp_file_switch_18, $path_switch_18);
          //  move_uploaded_file($tmp_file_switch_19, $path_switch_19);
          //  move_uploaded_file($tmp_file_switch_20, $path_switch_20);
          //  move_uploaded_file($tmp_file_server_1, $path_server_1);
          //  move_uploaded_file($tmp_file_server_2, $path_server_2);
         
            
            
            
            //move_uploaded_file($tmp_file_tdp, $path_tdp);
            //move_uploaded_file($tmp_file_shm, $path_shm);
            //query untuk memasukkan data ke dalam database
			
		//	echo $query = "insert into psk set cabang='$cabang', alamat='$alamat', tanggal_kunjungan='$tanggal_kunjungan', inputer='$inputer',
		//	h1a='$h1a', h1b='$h1b', h1c='$h1c', h2a='$h2a', h3a='$h3a', h3b='$h3b', h3c='$h3c', h3d='$h3d', h3e='$h3e', h3f='$h3f', h4a='$h4a', h4b='$h4b',   
		//	h5a='$h5a', h5b='$h5b', h5c='$h5c', h6a='$h6a', h6b='$h6b', h7a='$h7a', h7b='$h7b', h8a='$h8a', h8b='$h8b', h8c='$h8c', h9a='$h9a', h9b='$h9b', 
		//	k1a='$k1a', k1b='$k1b', k1c='$k1c', k2a='$k2a', k3a='$k3a', k3b='$k3b', k3c='$k3c', k3d='$k3d', k3e='$k3e', k3f='$k3f', k4a='$k4a', k4b='$k4b', 
		//	k5a='$k5a', k5b='$k5b', k5c='$k5c', k6a='$k6a', k6b='$k6b', k7a='$k7a', k7b='$k7b', k8a='$k8a', k9a='$k9a', k9b='$k9b', l1a='$l1a', l1b='$l1b', 
		//	l1c='$l1c', l1d='$l1d', l1e='$l1e', l2a='$l2a', l2b='$l2b', l2c='$l2c', l2d='$l2d', l2e='$l2e', m1a='$m1a', m1b='$m1b', m1c='$m1c', m1d='$m1d',
		//	m1e='$m1e', m2a='$m2a', m2b='$m2b', m2c='$m2c', m2d='$m2d', m2e='$m2e', n1a='$n1a', n1b='$n1b', n1c='$n1c', n1d='$n1d', n1e='$n1e', n2a='$n2a', 
		//	n2b='$n2b', n2c='$n2c', n2d='$n2d', n2e='$n2e', o1a='$o1a', o1b='$o1b', o1c='$o1c', o1d='$o1d', o1e='$o1e', o2a='$o2a', o2b='$o2b', o2c='$o2c', 
		//	o2d='$o2d', o2e='$o2e', p1a='$p1a', p1b='$p1b', p1c='$p1c', p1d='$p1d', p1e='$p1e', p2a='$p2a', p2b='$p2b', p2c='$p2c', p2d='$p2d', p2e='$p2e', 
		//	q1a='$q1a', q1b='$q1b', q1c='$q1c', q1d='$q1d', q1e='$q1e', q2a='$q2a', q2b='$q2b', q2c='$q2c', q2d='$q2d', q2e='$q2e', r1a='$r1a', r1b='$r1b', 
		//	r1c='$r1c', r1d='$r1d', r1e='$r1e', r2a='$r2a', r2b='$r2b', r2c='$r2c', r2d='$r2d', r2e='$r2e', s1a='$s1a', s1b='$s1b', s1c='$s1c', s1c='$s1c', 
		//	s1e='$s1e', s2a='$s2a', s2b='$s2b', s2c='$s2c', s2d='$s2d', s2e='$s2e', t1a='$t1a', t1b='$t1b', t1c='$t1c', t1d='$t1d', t1e='$t1e', t2a='$t2a', 
		//	t2b='$t2b', t2c='$t2c', t2d='$t2d', t2e='$t2e', u1a='$u1a', u1b='$u1b', u1c='$u1c', u1d='$u1d', u1e='$u1e', u2a='$u2a', u2b='$u2b', u2c='$u2c', 
		//	u2d='$u2d', u2e='$u2e', v1a='$v1a', v1b='$v1b', v1c='$v1c', v1d='$v1d', v1e='$v1e', v2a='$v2a', v2b='$v2b', v2c='$v2c', v2d='$v2d', v2e='$v2e', 
		//	w1a='$w1a', w1b='$w1b', w1c='$w1c', w1d='$w1d', w1e='$w1e', w2a='$w2a', w2b='$w2b', w2c='$w2c', w2d='$w2d', w2e='$w2e', x1a='$x1a', x1b='$x1b', 
		//	x1c='$x1c', x1d='$x1d', x1e='$x1e', x2a='$x2a', x2b='$x2b', x2c='$x2c', x2d='$x2d', x2e='$x2e', y1a='$y1a', y1b='$y1b', y1c='$y1c', y1d='$y1d',
		//	y1e='$y1e', y2a='$y2a', y2b='$y2b', y2c='$y2c', y2d='$y2d', y2e='$y2e', z1a='$z1a', z1b='$z1b', z1c='$z1c', z1d='$z1d', z1e='$z1e', z2a='$z2a', 
		//	z2b='$z2b', z2c='$z2c', z2d='$z2d', z2e='$z2e' , a1a='$a1a', a1b='$a1b', a1c='$a1c',a1d='$a1d', router_1='$path_router_1', router_2='$path_router_2',
		//	switch_1='$path_switch_1, switch_2='$path_switch_2', switch_3='$path_switch_3', switch_4='$path_switch_4', switch_5='$path_switch_5', switch_6='$path_switch_6', 
		//	switch_7='$path_switch_7', switch_8='$path_switch_8', switch_9='$path_switch_9', switch_10='$path_switch_10', switch_11='$path_switch_11', switch_12='$path_switch_12',
		//	switch_13='$path_switch_13', switch_14='$path_switch_14', switch_15='$path_switch_15', switch_16='$path_switch_16', switch_17='$path_switch_17', switch_18='$path_switch_18',
		//	switch_19='$path_switch_19', switch_20='$path_switch_20', server_1='$path_server_1', server_2='$path_server_2', server_3='$path_server_3'";
			
			$query = "INSERT INTO psk(cabang, alamat, tanggal_kunjungan, inputer, h1a, h1b, h1c, h2a, h3a, h3b, h3c, h3d, h3e, h3f, h4a, 
	h4b, h5a, h5b, h5c, h6a, h6b, h7a, h7b, h8a, h8b, h8c, h9a, h9b, k1a, k1b, k1c, k2a, k3a, k3b, k3c, k3d, k3e, k3f, k4a, k4b, 
	k5a, k5b, k5c, k6a, k6b, k7a, k7b, k8a, k9a, k9b, l1a, l1b, l1c, l1d, l1e, l2a, l2b, l2c, l2d, l2e, m1a, m1b, m1c, m1d, m1e, 
	m2a, m2b, m2c, m2d, m2e, n1a, n1b, n1c, n1d, n1e, n2a, n2b, n2c, n2d, n2e, o1a, o1b, o1c, o1d, o1e, o2a, o2b, o2c, o2d, o2e, 
	p1a, p1b, p1c, p1d, p1e, p2a, p2b, p2c, p2d, p2e, q1a, q1b, q1c, q1d, q1e, q2a, q2b, q2c, q2d, q2e, r1a, r1b, r1c, r1d, r1e, 
	r2a, r2b, r2c, r2d, r2e, s1a, s1b, s1c, s1d, s1e, s2a, s2b, s2c, s2d, s2e, t1a, t1b, t1c, t1d, t1e, t2a, t2b, t2c, t2d, t2e, 
	u1a, u1b, u1c, u1d, u1e, u2a, u2b, u2c, u2d, u2e, v1a, v1b, v1c, v1d, v1e, v2a, v2b, v2c, v2d, v2e, w1a, w1b, w1c, w1d, w1e, 
	w2a, w2b, w2c, w2d, w2e, x1a, x1b, x1c, x1d, x1e, x2a, x2b, x2c, x2d, x2e, y1a, y1b, y1c, y1d, y1e, y2a, y2b, y2c, y2d, y2e, 
	z1a, z1b, z1c, z1d, z1e, z2a, z2b, a1a, a1b, a1c, a1d, b1a, b1b, b1c, b1d, b1e, b1f, b1g, c1a, c1b, c1c, c1d, c1e, c1f, c1g, 
	router_1, router_2, switch_1, switch_2, switch_3, switch_4, switch_5, switch_6, switch_7,
	switch_8, switch_9, switch_10, switch_11, switch_12, switch_13, switch_14, switch_15, switch_16, switch_17, switch_18, switch_19, switch_20, switch_21, switch_22, 
	server_1, server_2) 
	VALUES ('".$_POST['cabang']."', '".$_POST['alamat']."', '".$_POST['tanggal_kunjungan']."', '".$_POST['inputer']."', '".$_POST['h1a']."', 
	'".$_POST['h1b']."', '".$_POST['h1c']."', '".$_POST['h2a']."', '".$_POST['h3a']."', '".$_POST['h3b']."', '".$_POST['h3c']."', '".$_POST['h3d']."', 
	'".$_POST['h3e']."', '".$_POST['h3f']."', '".$_POST['h4a']."', '".$_POST['h4b']."', '".$_POST['h5a']."', '".$_POST['h5b']."', '".$_POST['h5c']."',
	'".$_POST['h6a']."', '".$_POST['h6b']."', '".$_POST['h7a']."', '".$_POST['h7b']."', '".$_POST['h8a']."', '".$_POST['h8b']."', '".$_POST['h8c']."', 
	'".$_POST['h9a']."', '".$_POST['h9b']."', '".$_POST['k1a']."', '".$_POST['k1b']."', '".$_POST['k1c']."', '".$_POST['k2a']."', '".$_POST['k3a']."',
	'".$_POST['k3b']."', '".$_POST['k3c']."', '".$_POST['k3d']."', '".$_POST['k3e']."', '".$_POST['k3f']."', '".$_POST['k4a']."', '".$_POST['k4b']."', 
	'".$_POST['k5a']."', '".$_POST['k5b']."', '".$_POST['k5c']."', '".$_POST['k6a']."', '".$_POST['k6b']."', '".$_POST['k7a']."', '".$_POST['k7b']."', 
	'".$_POST['k8a']."', '".$_POST['k9a']."', '".$_POST['k9b']."', '".$_POST['l1a']."', '".$_POST['l1b']."', '".$_POST['l1c']."', '".$_POST['l1d']."', 
	'".$_POST['l1e']."', '".$_POST['l2a']."', '".$_POST['l2b']."', '".$_POST['l2c']."', '".$_POST['l2d']."', '".$_POST['l2e']."', '".$_POST['m1a']."',
	'".$_POST['m1b']."', '".$_POST['m1c']."', '".$_POST['m1d']."', '".$_POST['m1e']."', '".$_POST['m2a']."','".$_POST['m2b']."', '".$_POST['m2c']."', 
	'".$_POST['m2d']."', '".$_POST['m2e']."', '".$_POST['n1a']."', '".$_POST['n1b']."', '".$_POST['n1c']."', '".$_POST['n1d']."', '".$_POST['n1e']."', 
	'".$_POST['n2a']."', '".$_POST['n2b']."', '".$_POST['n2c']."', '".$_POST['n2d']."', '".$_POST['n2e']."', '".$_POST['o1a']."', '".$_POST['o1b']."', 
	'".$_POST['o1c']."', '".$_POST['o1d']."', '".$_POST['o1e']."', '".$_POST['o2a']."', '".$_POST['o2b']."', '".$_POST['o2c']."', '".$_POST['o2d']."', 
	'".$_POST['o2e']."', '".$_POST['p1a']."', '".$_POST['p1b']."', '".$_POST['p1c']."', '".$_POST['p1d']."', '".$_POST['p1e']."', '".$_POST['p2a']."', 
	'".$_POST['p2b']."', '".$_POST['p2c']."', '".$_POST['p2d']."', '".$_POST['p2e']."', '".$_POST['q1a']."', '".$_POST['q1b']."', '".$_POST['q1c']."', 
	'".$_POST['q1d']."', '".$_POST['q1e']."', '".$_POST['q2a']."', '".$_POST['q2b']."', '".$_POST['q2c']."', '".$_POST['q2d']."', '".$_POST['q2e']."', 
	'".$_POST['r1a']."', '".$_POST['r1b']."', '".$_POST['r1c']."', '".$_POST['r1d']."', '".$_POST['r1e']."', '".$_POST['r2a']."', '".$_POST['r2b']."', 
	'".$_POST['r2c']."', '".$_POST['r2d']."', '".$_POST['r2e']."', '".$_POST['s1a']."', '".$_POST['s1b']."', '".$_POST['s1c']."', '".$_POST['s1d']."', 
	'".$_POST['s1e']."', '".$_POST['s2a']."', '".$_POST['s2b']."', '".$_POST['s2c']."', '".$_POST['s2d']."', '".$_POST['s2e']."', '".$_POST['t1a']."', 
	'".$_POST['t1b']."', '".$_POST['t1c']."', '".$_POST['t1d']."', '".$_POST['t1e']."', '".$_POST['t2a']."', '".$_POST['t2b']."', '".$_POST['t2c']."', 
	'".$_POST['t2d']."', '".$_POST['t2e']."', '".$_POST['u1a']."', '".$_POST['u1b']."', '".$_POST['u1c']."', '".$_POST['u1d']."', '".$_POST['u1e']."', 
	'".$_POST['u2a']."', '".$_POST['u2b']."', '".$_POST['u2c']."', '".$_POST['u2d']."', '".$_POST['u2e']."', '".$_POST['v1a']."', '".$_POST['v1b']."', 
	'".$_POST['v1c']."', '".$_POST['v1d']."', '".$_POST['v1e']."', '".$_POST['v2a']."', '".$_POST['v2b']."', '".$_POST['v2c']."', '".$_POST['v2d']."', 
	'".$_POST['v2e']."', '".$_POST['w1a']."', '".$_POST['w1b']."', '".$_POST['w1c']."', '".$_POST['w1d']."', '".$_POST['w1e']."', '".$_POST['w2a']."', 
	'".$_POST['w2b']."', '".$_POST['w2c']."', '".$_POST['w2d']."', '".$_POST['w2e']."', '".$_POST['x1a']."', '".$_POST['x1b']."', '".$_POST['x1c']."', 
	'".$_POST['x1d']."', '".$_POST['x1e']."', '".$_POST['x2a']."', '".$_POST['x2b']."', '".$_POST['x2c']."', '".$_POST['x2d']."', '".$_POST['x2e']."', 
	'".$_POST['y1a']."', '".$_POST['y1b']."', '".$_POST['y1c']."', '".$_POST['y1d']."', '".$_POST['y1e']."', '".$_POST['y2a']."', '".$_POST['y2b']."', 
	'".$_POST['y2c']."', '".$_POST['y2d']."', '".$_POST['y2e']."', '".$_POST['z1a']."', '".$_POST['z1b']."', '".$_POST['z1c']."', '".$_POST['z1d']."', 
	'".$_POST['z1e']."', '".$_POST['z2a']."', '".$_POST['z2b']."', '".$_POST['a1a']."', 
	'".$_POST['a1b']."', '".$_POST['a1c']."', '".$_POST['a1d']."', '".$_POST['b1a']."',
	'".$_POST['b1b']."', '".$_POST['b1c']."', '".$_POST['b1d']."', '".$_POST['b1e']."', 
	'".$_POST['b1f']."', '".$_POST['b1g']."', '".$_POST['c1a']."', '".$_POST['c1b']."', 
	'".$_POST['c1c']."', '".$_POST['c1d']."', '".$_POST['c1e']."', '".$_POST['c1f']."', 
	'".$_POST['c1g']."', '".$path_router_1."', '".$path_router_2."', '".$path_switch_1."',
	'".$path_switch_2."', '".$path_switch_3."', '".$path_switch_4."', '".$path_switch_5."', '".$path_switch_6."', '".$path_switch_7."'
	, '".$path_switch_8."', '".$path_switch_9."', '".$path_switch_10."', '".$path_switch_11."', '".$path_switch_12."', '".$path_switch_13."'
	, '".$path_switch_14."', '".$path_switch_15."', '".$path_switch_16."', '".$path_switch_17."', '".$path_switch_18."', '".$path_switch_19."'
	, '".$path_switch_20."', '".$path_switch_21."', '".$path_switch_22."', '".$path_server_1."', '".$path_server_2."')";
			
            $sql = mysqli_query($koneksi,$query);
			
		
            //jika insert data berhasil, maka akan dikembalikan ke halaman tampilgambar.php
            if($sql){ 
?>

<script>alert('File Berhasil Disimpan')</script>
<script>window.location='penghubung.php?nav=powersystemdata'</script>


<?php
            }else{
              //jika gagal insert data ke database maka akan memunculkan pesan seperti di bawah ini
              echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
              //link menuju halaman insert gambar
              echo "<br><a href='penghubung.php?nav=powersystem.php'>Kembali Ke Form</a>";
            }
          // }else{
          //   echo "Maaf, Gambar gagal untuk diupload.";
          //   echo "<br><a href='nav=uploadlegalitas.php'>Kembali Ke Form</a>";
          // }
        // }else{
        //   //jika ukuran gambar lebih besar dari 1MB maka akan memunculkan pesan seperti di bawah ini
        //   echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
        //   echo "<br><a href='nav=uploadlegalitas.php'>Kembali Ke Form</a>";
        // }
      
?>