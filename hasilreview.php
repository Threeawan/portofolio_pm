<link  href="bni.png" rel="shortcut icon" />

<?php
$koneksi = mysqli_connect("localhost","root","","pmbni");
$query = mysqli_query($koneksi, "SELECT id, cabang, alamat, tanggal_kunjungan, h1a, h1b, h1c, h2a, h3a, 
h3b, h3c, h3d, h3e, h3f, h4a, tanda_tangan, tanda_tangan_nama, komentar FROM review WHERE id='".$_GET['id']."'");
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
$tanda_tangan = $data['tanda_tangan'];
$tanda_tangan_nama = $data['tanda_tangan_nama'];
$komentar = $data['komentar'];

}
?>

<body onLoad="window.print()">

<p align="left"><strong>Laporan Preventive Maintenance I/II Tahun </strong><?php echo substr($tanggal_kunjungan,0,4); ?><br />
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
    <td rowspan="4" align="left"><strong>WIRE</strong></td>
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
    <td align="left">A.P.A.R</td>
    <td><input type="text" name="h4a" value="<?php echo $h4a;?>" readonly></td>
  </tr>
 
</table>

<br />
Isi komentar:<br/>  
 <form action="" method="post">  
 <textarea rows="5" cols="50" name="komentar" value="<?php echo $komentar;?>" readonly></textarea><br/>  
    

 </form>


                                <br />
                                <br />

                                
                                 &nbsp;&nbsp;&nbsp;<strong>&nbsp; &nbsp; Mengetahui, <br />
 &nbsp;  &nbsp; &nbsp; Wilayah/Cabang</strong>

</p>
</body>


<html>
    <head>
        
        
        <link rel="stylesheet" href="js-lib/jquery.signature.css" />
        <link rel="stylesheet" href="js-lib/jquery-ui.css" />
        <link rel="stylesheet" href="js-lib/jquery.signature.css" />
        
        <script src="js-lib/jquery.min.js" type="text/javascript" ></script>
        <script src="js-lib/jquery-ui.min.js" type="text/javascript" > </script>
        <script src="js-lib/jquery.signature.js" type="text/javascript" ></script>
        <script src="js-lib/jquery.ui.touch-punch.min.js" type="text/javascript" ></script>
        
        
        <!--[if IE]>
        <script type="text/javascript" src="js-lib/excanvas.js"></script>
        <![endif]-->
        
        <style>
            .kbw-signature{
                height: 100px;
                width: 200px;
            }
        </style>
        
        
    </head>
    
    <body>
        
        

        <p>
            
        </p>
        <img src="<?php echo $tanda_tangan ?>" class="kbw-signature">
		<br>   
<br />(<input type="text" name="a1e" style="width:200px;" readonly value="<?php echo $tanda_tangan_nama; ?>">)<br>
<br>
    </body>
</html>