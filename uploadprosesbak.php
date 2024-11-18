<?php
    //mengambil data gambar dan menyimpannya kedalam variabel
	include "koneksi.php";
	$tanggal_upload = $_POST['tanggal_upload'];
	$uploader = $_POST['uploader'];
    $nama_file = $_FILES['foto']['name'];
    $ukuran_file = $_FILES['foto']['size'];
    $tmp_file = $_FILES['foto']['tmp_name'];

    $path = "images/".$nama_file;

	
     
        if($ukuran_file <= 1000000){ 

          //memindahkan lokasi gambar dari tempat asal ke dalam folder website
          //memiliki 2 parameter yang harus diisi, yaitu parameter tempat asal gambar dan paramter tempat tujuan gambar
          if(move_uploaded_file($tmp_file, $path)){ 
            //query untuk memasukkan data ke dalam database
            $sql = mysqli_query($koneksi,"insert into foto set tanggal_upload='$tanggal_upload', uploader='$uploader',nama='$nama_file', ukuran='$ukuran_file'");
            //jika insert data berhasil, maka akan dikembalikan ke halaman tampilgambar.php
            if($sql){ 
              header("location:penghubung.php?nav=tampilgambarbak"); 
            }else{
              //jika gagal insert data ke database maka akan memunculkan pesan seperti di bawah ini
              echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
              //link menuju halaman insert gambar
              echo "<br><a href='form.php'>Kembali Ke Form</a>";
            }
          }else{
            echo "Maaf, Gambar gagal untuk diupload.";
            echo "<br><a href='form.php'>Kembali Ke Form</a>";
          }
        }else{
          //jika ukuran gambar lebih besar dari 1MB maka akan memunculkan pesan seperti di bawah ini
          echo "Maaf, Ukuran gambar yang diupload tidak boleh lebih dari 1MB";
          echo "<br><a href='form.php'>Kembali Ke Form</a>";
        }
      
?>