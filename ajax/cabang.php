<?php
include("../koneksi.php");

$alamat = $_GET['alamat'];

$sql = "select * from outlet where cabang like '%".$alamat."%'";
$qry = mysqli_query($koneksi, $sql);
$rows = array();
while($r = mysqli_fetch_assoc($qry)) {
    $rows[] = $r;
}
print json_encode($rows);
?>
