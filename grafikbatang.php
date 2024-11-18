<?php
$tahun = date('Y');
if(isset($_GET['tahun'])){
    $tahun = $_GET['tahun'];
}
?>

<script src="highcharts.js"></script>
<script src="highcharts-more.js"></script>
<script src="modules/exporting.js"></script>
<script src="modules/export-data.js"></script>
<script src="modules/accessibility.js"></script>

<form method="GET">
    <input type="hidden" name="nav" value="grafikbatang">
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

#container {
    height: 400px;
}

.highcharts-figure,
.highcharts-data-table table {
    min-width: 320px;
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

<script>

<?php
$januari = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_bakunjungan where tahun_kunjungan='".$tahun."' and bulan_kunjungan='01'");
		while($data = mysqli_fetch_array($query)){
			$januari = $data['total_kunjungan'];
		}


$februari = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_bakunjungan where tahun_kunjungan='".$tahun."' and bulan_kunjungan='02'");
		while($data = mysqli_fetch_array($query)){
			$februari = $data['total_kunjungan'];
		}

$maret = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_bakunjungan where tahun_kunjungan='".$tahun."' and bulan_kunjungan='03'");
		while($data = mysqli_fetch_array($query)){
			$maret = $data['total_kunjungan'];
		}



$april = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_bakunjungan where tahun_kunjungan='".$tahun."' and bulan_kunjungan='04'");
		while($data = mysqli_fetch_array($query)){
			$april = $data['total_kunjungan'];
		}


$mei = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_bakunjungan where tahun_kunjungan='".$tahun."' and bulan_kunjungan='05'");
		while($data = mysqli_fetch_array($query)){
			$mei = $data['total_kunjungan'];
		}


$juni = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_bakunjungan where tahun_kunjungan='".$tahun."' and bulan_kunjungan='06'");
		while($data = mysqli_fetch_array($query)){
			$juni = $data['total_kunjungan'];
		}

$juli = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_bakunjungan where tahun_kunjungan='".$tahun."' and bulan_kunjungan='07'");
		while($data = mysqli_fetch_array($query)){
			$juli = $data['total_kunjungan'];
		}

$agustus = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_bakunjungan where tahun_kunjungan='".$tahun."' and bulan_kunjungan='08'");
		while($data = mysqli_fetch_array($query)){
			$agustus = $data['total_kunjungan'];
		}

$september = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_bakunjungan where tahun_kunjungan='".$tahun."' and bulan_kunjungan='09'");
		while($data = mysqli_fetch_array($query)){
			$september = $data['total_kunjungan'];
		}

$oktober = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_bakunjungan where tahun_kunjungan='".$tahun."' and bulan_kunjungan='10'");
		while($data = mysqli_fetch_array($query)){
			$oktober = $data['total_kunjungan'];
		}

$november = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_bakunjungan where tahun_kunjungan='".$tahun."' and bulan_kunjungan='11'");
		while($data = mysqli_fetch_array($query)){
			$november = $data['total_kunjungan'];
		}

$desember = 0;
$query = mysqli_query($koneksi, "select total_kunjungan from total_bakunjungan where tahun_kunjungan='".$tahun."' and bulan_kunjungan='12'");
		while($data = mysqli_fetch_array($query)){
			$desember = $data['total_kunjungan'];
		}


?>

const chart = Highcharts.chart('container', {
    title: {
        text: 'Grafik Berita Acara Kunjungan <?php echo $tahun; ?>'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember']
    },
    series: [{
        type: 'column',
        colorByPoint: true,
        data: [<?php echo $januari; ?>,<?php echo $februari; ?>, <?php echo $maret; ?>,<?php echo $april; ?>, <?php echo $mei; ?>, <?php echo $juni; ?>,<?php echo $juli; ?>, <?php echo $agustus; ?>, <?php echo $september; ?>, <?php echo $oktober; ?>, <?php echo $november; ?>,<?php echo $desember; ?>],
        showInLegend: false
    }]
});

document.getElementById('plain').addEventListener('click', () => {
    chart.update({
        chart: {
            inverted: false,
            polar: false
        },
        subtitle: {
            text: 'Plain'
        }
    });
});

document.getElementById('inverted').addEventListener('click', () => {
    chart.update({
        chart: {
            inverted: true,
            polar: false
        },
        subtitle: {
            text: 'Inverted'
        }
    });
});

document.getElementById('polar').addEventListener('click', () => {
    chart.update({
        chart: {
            inverted: false,
            polar: true
        },
        subtitle: {
            text: 'Polar'
        }
    });
});



</script>