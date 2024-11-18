<?php
include ("koneksi.php"); 
$data = mysql_query ("select * from legalitas where id=" . $_REQUEST['id']);
if ($row = mysql_fetch_assoc($data)) 
{
$tanggal_upload = $row['tanggal_upload']; 
$nama_outlet = $row['nama_outlet'];
$nama = $row['nama']; 
$ukuran = $row['ukuran']; 
 
}
header('Content-type: ' . $filetype); 
header('Content-length: ' . $filesize);
header("Content-Transfer-Encoding: binarynn"); 
header("Pragma: no-cache"); header("Expires: 0");
header('Content-Disposition: attachment; filename="' . $filename . '"');
echo $filedata; exit();
?>