<?php
    //mengambil data gambar dan menyimpannya kedalam variabel
    include "koneksi.php";
	$tanggal_upload = $_POST['tanggal_upload'];
	$cabang = $_POST['cabang'];
	$alamat = $_POST['alamat'];
    //$pakta_integritas = $_FILES['pakta_integritas']['name'];
    //$tmp_file_pakta_integritas = $_FILES['pakta_integritas']['tmp_name'];
    //$path_pakta_integritas = "file/pakta_integritas/".$pakta_integritas;
    //$ukuran_file = $_FILES['pakta_integritas']['size'];
	
	
	//$ijin_usaha = $_FILES['ijin_usaha']['name'];
    //$tmp_file_ijin_usaha = $_FILES['ijin_usaha']['tmp_name'];
    //$path_ijin_usaha = "file/ijin_usaha/".$ijin_usaha;
    //$ukuran_file = $_FILES['ijin_usaha']['size'];
	
    $ruang_server = $_FILES['ruang_server']['name'];
    $tmp_file_ruang_server = $_FILES['ruang_server']['tmp_name'];
    $path_ruang_server = "file/ruang_server/".$ruang_server;
    
    $rak_server_depan = $_FILES['rak_server_depan']['name'];
    $tmp_file_rak_server_depan = $_FILES['rak_server_depan']['tmp_name'];
    $path_rak_server_depan = "file/rak_server_depan/".$rak_server_depan;
	
	$rak_server_belakang = $_FILES['rak_server_belakang']['name'];
    $tmp_file_rak_server_belakang = $_FILES['rak_server_belakang']['tmp_name'];
    $path_rak_server_belakang = "file/rak_server_belakang/".$rak_server_belakang;
	
	
    
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
            move_uploaded_file($tmp_file_ruang_server, $path_ruang_server);
            move_uploaded_file($tmp_file_rak_server_depan, $path_rak_server_depan);
            move_uploaded_file($tmp_file_rak_server_belakang, $path_rak_server_belakang);
            
            //move_uploaded_file($tmp_file_tdp, $path_tdp);
            //move_uploaded_file($tmp_file_shm, $path_shm);
            //query untuk memasukkan data ke dalam database
            $sql = mysqli_query($koneksi,"insert into server set tanggal_upload='$tanggal_upload', cabang='$cabang', 
			alamat='$alamat', ruang_server='$path_ruang_server', rak_server_depan='$path_rak_server_depan', 
			rak_server_belakang='$path_rak_server_belakang'");
			
		
            //jika insert data berhasil, maka akan dikembalikan ke halaman tampilgambar.php
            if($sql){ 
?>
<script>alert('File Berhasil Diupload')</script>
<script>window.location='penghubung.php?nav=tampilserver'</script>

<?php
            }else{
              //jika gagal insert data ke database maka akan memunculkan pesan seperti di bawah ini
              echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
              //link menuju halaman insert gambar
              echo "<br><a href='penghubung.php?nav=uploadserver.php'>Kembali Ke Form</a>";
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