<script src="highcharts.js"></script>
<script src="highcharts-more.js"></script>
<script src="modules/exporting.js"></script>
<script src="modules/export-data.js"></script>
<script src="modules/accessibility.js"></script>

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
$query = mysqli_query($koneksi, "select nilai from grafik_bak where bulan='Januari'");
		while($data = mysqli_fetch_array($query)){
			$januari = $data['nilai'];
		}


$februari = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_bak where bulan='Februari'");
		while($data = mysqli_fetch_array($query)){
			$februari = $data['nilai'];
		}

$maret = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_bak where bulan='Maret'");
		while($data = mysqli_fetch_array($query)){
			$maret = $data['nilai'];
		}



$april = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_bak where bulan='April'");
		while($data = mysqli_fetch_array($query)){
			$april = $data['nilai'];
		}


$mei = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_bak where bulan='Mei'");
		while($data = mysqli_fetch_array($query)){
			$mei = $data['nilai'];
		}


$juni = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_bak where bulan='Juni'");
		while($data = mysqli_fetch_array($query)){
			$juni = $data['nilai'];
		}

$juli = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_bak where bulan='Juli'");
		while($data = mysqli_fetch_array($query)){
			$juli = $data['nilai'];
		}

$agustus = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_bak where bulan='Agustus'");
		while($data = mysqli_fetch_array($query)){
			$agustus = $data['nilai'];
		}

$september = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_bak where bulan='September'");
		while($data = mysqli_fetch_array($query)){
			$september = $data['nilai'];
		}

$oktober = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_bak where bulan='Oktober'");
		while($data = mysqli_fetch_array($query)){
			$oktober = $data['nilai'];
		}

$november = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_bak where bulan='November'");
		while($data = mysqli_fetch_array($query)){
			$november = $data['nilai'];
		}

$desember = 0;
$query = mysqli_query($koneksi, "select nilai from grafik_bak where bulan='Desember'");
		while($data = mysqli_fetch_array($query)){
			$desember = $data['nilai'];
		}


?>

const chart = Highcharts.chart('container', {
    title: {
        text: 'Grafik Berita Acara Kunjungan 2021 (%)'
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