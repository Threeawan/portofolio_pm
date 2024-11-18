<?php
$tahun = date('Y');
if(isset($_GET['tahun'])){
    $tahun = $_GET['tahun'];
}
?>


<script src="highcharts.js"></script>
<script src="modules/exporting.js"></script>
<script src="modules/export-data.js"></script>
<script src="modules/accessibility.js"></script>

<form method="GET">
    <input type="hidden" name="nav" value="grafik">
    tahun : <select name="tahun">
        <?php
        for($i=date('Y');$i>=2021;$i--){
            ?>
            <option value="<?php echo $i; ?>" <?php if($i==$tahun){ ?>selected<?php } ?>><?php echo $i; ?></option>
            <?php
        }
        ?>
</select>
<button type="submit">Submit</button>
</form>
<figure class="highcharts-figure">
    <div id="container"></div>
    
</figure>

<script>



<?php
$total = 0;
$januari = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_psk where tahun_kunjungan='".$tahun."' and bulan_kunjungan='01'");
		while($data = mysqli_fetch_array($query)){
			$januari = $data['total_kunjungan'];
		}
$total_januari = $total+$januari;
$total = $total+$januari;


$februari = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_psk where tahun_kunjungan='".$tahun."' and bulan_kunjungan='02'");
		while($data = mysqli_fetch_array($query)){
			$februari = $data['total_kunjungan'];
		}
$total_februari = $total+$februari;
$total = $total+$februari;

$maret = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_psk where tahun_kunjungan='".$tahun."' and bulan_kunjungan='03'");
		while($data = mysqli_fetch_array($query)){
			$maret = $data['total_kunjungan'];
		}
$total_maret = $total+$maret;
$total = $total+$maret;


$april = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_psk where tahun_kunjungan='".$tahun."' and bulan_kunjungan='04'");
		while($data = mysqli_fetch_array($query)){
			$april = $data['total_kunjungan'];
		}
$total_april = $total+$april;
$total = $total+$april;


$mei = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_psk where tahun_kunjungan='".$tahun."' and bulan_kunjungan='05'");
		while($data = mysqli_fetch_array($query)){
			$mei = $data['total_kunjungan'];
		}
$total_mei = $total+$mei;
$total = $total+$mei;


$juni = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_psk where tahun_kunjungan='".$tahun."' and bulan_kunjungan='06'");
		while($data = mysqli_fetch_array($query)){
			$juni = $data['total_kunjungan'];
		}
$total_juni = $total+$juni;
$total = $total+$juni;

$juli = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_psk where tahun_kunjungan='".$tahun."' and bulan_kunjungan='07'");
		while($data = mysqli_fetch_array($query)){
			$juli = $data['total_kunjungan'];
		}
$total_juli = $total+$juli;
$total = $total+$juli;

$agustus = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_psk where tahun_kunjungan='".$tahun."' and bulan_kunjungan='08'");
		while($data = mysqli_fetch_array($query)){
			$agustus = $data['total_kunjungan'];
		}
$total_agustus = $total+$agustus;
$total = $total+$agustus;

$september = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_psk where tahun_kunjungan='".$tahun."' and bulan_kunjungan='09'");
		while($data = mysqli_fetch_array($query)){
			$september = $data['total_kunjungan'];
		}
$total_september = $total+$september;
$total = $total+$september;

$oktober = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_psk where tahun_kunjungan='".$tahun."' and bulan_kunjungan='10'");
		while($data = mysqli_fetch_array($query)){
			$oktober = $data['total_kunjungan'];
		}
$total_oktober = $total+$oktober;
$total = $total+$oktober;

$november = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_psk where tahun_kunjungan='".$tahun."' and bulan_kunjungan='11'");
		while($data = mysqli_fetch_array($query)){
			$november = $data['total_kunjungan'];
		}
$total_november = $total+$november;
$total = $total+$november;

$desember = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_psk where tahun_kunjungan='".$tahun."' and bulan_kunjungan='12'");
		while($data = mysqli_fetch_array($query)){
			$desember = $data['total_kunjungan'];
		}
$total_desember = $total+$desember;
$total = $total+$desember;


?>


Highcharts.chart('container', {
    chart: {
        type: 'line'
    },
    title: {
        text: 'Skala Preventive Maintenance <?php echo $tahun; ?>'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']
    },
    yAxis: {
        title: {
            text: ''
        }
    },
    plotOptions: {
        line: {
            dataLabels: {
                enabled: true
            },
            enableMouseTracking: false
        }
    },
    series: [{
        name: 'Pencapaian/Bulan (Persentase)',
//        data: [<?php echo round($januari/136*100, 2); ?>,<?php echo round($februari/136*100, 2); ?>, <?php echo round($maret/136*100, 2); ?>,<?php echo round($april/136*100, 2); ?>, <?php echo round($mei/136*100, 2); ?>, <?php echo round($juni/136*100, 2); ?>,<?php echo round($juli/136*100, 2); ?>, <?php echo round($agustus/136*100, 2); ?>, <?php echo round($september/136*100, 2); ?>, <?php echo round($oktober/136*100, 2); ?>, <?php echo round($november/136*100, 2); ?>,<?php echo round($desember/136*100, 2); ?>]
        data: [<?php echo round($total_januari/130*100,2); ?>,<?php echo round($total_februari/130*100,2); ?>, <?php echo round($total_maret/130*100,2); ?>,<?php echo round($total_april/130*100,2); ?>, <?php echo round($total_mei/130*100,2); ?>, <?php echo round($total_juni/130*100,2); ?>,<?php echo round($total_juli/130*100,2); ?>, <?php echo round($total_agustus/130*100,2); ?>, <?php echo round($total_september/130*100,2); ?>, <?php echo round($total_oktober/130*100,2); ?>, <?php echo round($total_november/130*100,2); ?>,<?php echo round($total_desember/130*100,2); ?>]
    }, {
        name: 'Pencapaian/Bulan (Jumlah)',
        data: [<?php echo $januari; ?>,<?php echo $februari; ?>, <?php echo $maret; ?>,<?php echo $april; ?>, <?php echo $mei; ?>, <?php echo $juni; ?>,<?php echo $juli; ?>, <?php echo $agustus; ?>, <?php echo $september; ?>, <?php echo $oktober; ?>, <?php echo $november; ?>,<?php echo $desember; ?>]
    }]
});
</script>

<script>
.highcharts-figure,
.highcharts-data-table table {
    min-width: 360px;
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

</script>
