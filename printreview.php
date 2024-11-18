<link  href="bni.png" rel="shortcut icon" />

<?php
$koneksi = mysqli_connect("localhost","root","","pmbni");
$query = mysqli_query($koneksi, "SELECT id, cabang, alamat, tanggal_kunjungan, h1a, h1b, h1c, h2a, h3a, h3b, 
h3c, h3d, h3e, h3f, h4a, komentar FROM review WHERE id='".$_GET['id']."'");
while($data = mysqli_fetch_array($query)){
$id = $data['id'];
$cabang = $data['cabang'];
$alamat = $data['alamat'];
$tanggal_kunjungan = $data['tanggal_kunjungan'];
$h1a = $data['h1a'];
$h1b = $data['h1b'];
$h1c = $data['h1c'];
$h2a = $data['h2a'];
$h3a = $data['h3a'];
$h3b = $data['h3b'];
$h3c = $data['h3c'];
$h3d = $data['h3d'];
$h3e = $data['h3e'];
$h3f = $data['h3f'];
$h4a = $data['h4a'];
$komentar = $data['komentar'];
}
?>

<p align="left"><strong> Laporan Preventive Maintenance I/II Tahun </strong><?php echo substr($tanggal_kunjungan,0,4); ?><br />
  <br />
  <center>
    <strong>LAPORAN HASIL REVIEW</strong>
  </center>
  <br />
  <strong>Cabang :</strong> <?php echo $cabang; ?><br />
  <strong>Alamat :</strong> <?php echo $alamat; ?><br />
  <strong>Tanggal Kunjungan :</strong><?php echo date('d-m-Y',strtotime($tanggal_kunjungan)); ?><br />
  <br />
</p>
<table cellspacing="0" cellpadding="0" border="1" style="border-collapse:collapse" class="table table-responsive">
  <tr></tr>
  <tr>
    <td rowspan="3" align="left"><strong>ELECTRICITY</strong></td>
    <td rowspan="3">Power</td>
  </tr>
  <tr>
    <td>
      <input type="text" name="h1a" value="<?php echo $h1a;?>" readonly/></td>
  </tr>
  <tr></tr>
  <tr>
    <td></td>
    <td>Genset</td>
    <td><input type="text" name="h1b" value="<?php echo $h1b;?>" readonly></td>
  </tr>
  <tr>
    <td rowspan="4" align="left"></td>
    <td align="left">UPS</td>
    <td><input type="text" name="h1c" value="<?php echo $h1c;?>" readonly>
      </td>
    
  </tr>
  <tr>
    <td></td>
  </tr>
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr>
    <td rowspan="4" align="left"><strong>TEMPERATURE</strong></td>
    <td align="left">Humidity</td>
    <td><input type="text" name="h2a" value="<?php echo $h2a;?>" readonly>
      </td>
  </tr>
  <tr>
    <td align="left">Suhu</td>
    <td><input type="text" name="h3a" value="<?php echo $h3a;?>" readonly>
      </td>
  </tr>
  <tr></tr>
  <tr></tr>
  <tr>
    <td rowspan="2" align="left"><strong>PENANGKAL PETIR</strong></td>
    <td></td>
    <td align="left"><input type="text" name="h3b" value="<?php echo $h3b;?>" readonly></td>
  </tr>
  <tr></tr>
  <tr>
    <td rowspan="4" align="left"><strong>WIRE/CABLING</strong></td>
    <td>Power </td>
    <td align="left"><input type="text" name="h3c" value="<?php echo $h3c;?>" readonly></td>
  </tr>
  <tr>
    <td align="left">UTP/LAN</td>
    <td><input type="text" name="h3d" value="<?php echo $h3d;?>" readonly></td>
  </tr>
  <tr></tr>
  <tr></tr>
  <tr></tr>
  <tr>
    <td rowspan="4" align="left"><strong>PREMISES</strong></td>
    <td align="left">Room</td>
    <td><input type="text" name="h3e" value="<?php echo $h3e;?>" readonly></td>
  </tr>
  
  <tr>
    <td>Rack</td>
    <td><input type="text" name="h3f" value="<?php echo $h3f;?>" readonly></td>
  </tr>
  
  <tr>
    <td>A.P.A.R</td>
    <td><input type="text" name="h4a" value="<?php echo $h4a;?>" readonly></td>
  </tr>
  
</table>
<br />
Isi komentar:<br/>  
 <form action="" method="post">  
 <textarea rows="5" cols="50" name="komentar" value="<?php echo $komentar;?>" readonly="readonly"></textarea><br/>  
    

 </form>


                                <br />

                                
                                 &nbsp;&nbsp;&nbsp;<strong>&nbsp; &nbsp; Mengetahui, <br />
 &nbsp;  &nbsp; &nbsp; Wilayah/Cabang</strong>

</p>
   
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
   <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/south-street/jquery-ui.css" rel="stylesheet"> 
   <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  
   <script type="text/javascript" src="js/jquery.signature.min.js"></script>
   <script type="text/javascript" src="js/jquery.ui.touch-punch.min.js"></script>
   <link rel="stylesheet" type="text/css" href="css/jquery.signature.css">
  
   <style>
       .kbw-signature { 
         
        height: 100px;
                width: 200px;
       }
       #sig canvas{
           width: 100% !important;
           height: auto;
       }
   </style>

        
    <?php
    if(isset($_POST['tanda_tangan'])){

    $image_parts = explode(";base64,", $_POST['tanda_tangan']); 
    $image_type_aux = explode("image/", $image_parts[0]);
    $image_type = $image_type_aux[1];
    $image_base64 = base64_decode($image_parts[1]);
    $file = "tanda_tangan/" . uniqid() . '.'.$image_type;
    file_put_contents($file, $image_base64);

    $sql = "update review set tanda_tangan='".$file."', tanda_tangan_nama='".$_POST['tanda_tangan_nama']."' where id='".$_GET['id']."'";
    mysqli_query($koneksi, $sql);
    ?>
    <script>alert('Tandatangan Tersimpan');</script>
    <script>window.close()</script>
    <?php

    }
    ?>

    <form method="POST">
        
        <div id="tandatangan"></div>
        <textarea id="signature64" name="tanda_tangan" style="display: none"></textarea>
<br>   
<br />(<input type="text" name="tanda_tangan_nama" style="width:200px;">)<br>

        <p>
            <button id="clear">Hapus</button>
            <button id="draw" type="submit">Simpan</button>
            
			
        </p>
          </form>
        <p>
            
        </p>
<script type="text/javascript">
    var sig = $('#tandatangan').signature({syncField: '#signature64', syncFormat: 'PNG'});
    $('#clear').click(function(e) {
        e.preventDefault();
        sig.signature('clear');
        $("#signature64").val('');
    });
</script>       
		
    </body>
</html>