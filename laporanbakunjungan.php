<?php
if(isset($_POST['bcetak'])){
	echo "Proses yang dilakukan server";
?>
<script>window.location="cetakbakunjungan";
</script>
<?php
}
?>


<div class="col-lg-11">
					<!-- BEGIN card -->
					<div class="card m-b-15">
						<!-- BEGIN card-header -->
						<div class="card-header card-header-inverse">
							<h4 class="card-header-title">Cetak Laporan Berita Acara Kunjungan</h4>
							<div class="card-header-btn">
								<a href="#" data-toggle="card-expand" class="btn btn-success"><i class="fa fa-expand"></i></a>
								<a href="#" data-toggle="card-refresh" class="btn btn-warning"><i class="fa fa-redo"></i></a>
								<a href="#" data-toggle="card-remove" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
							</div>
						</div>
						<!-- END card-header -->
						<!-- BEGIN card-body -->
						<div class="card-body">
							
							<form class="form-horizontal m-t-20">
								<div class="form-group row m-b-10">
									
									
								</div>
								<div class="form-group row m-b-5">
									<label for="inputPassword3" class="col-sm-10 col-form-label">Tanggal Kunjungan</label>
									<div class="col-sm-12">
										<input type="date" class="form-control" id="tanggal_kunjungan">
									</div>
								</div>
								<div class="form-group row m-b-10">
									<div class="offset-sm-3 col-sm-9">
										<div class="checkbox">
											<input type="checkbox" id="remember_me">
											
										</div>
									</div>
								</div>
								
								<script>
								function cetak(){
									window.open('cetakbakunjungan.php?tanggal_kunjungan='+document.getElementById('tanggal_kunjungan').value);
									
								}
								</script>
								
								
								<div class="form-group row m-b-0">
									<div class="offset-sm-11 col-sm-5">
										<button name="bcetak" type="button" class="btn btn-purple" onclick="cetak();">Cetak</button>
									</div>
								</div>
							</form>
						</div>
						<!-- END card-body -->
					</div>
				</div>