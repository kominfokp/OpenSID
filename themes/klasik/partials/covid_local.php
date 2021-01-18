<?php  if(!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- <?php
//API Local Data COVID19
$odp = $covid[0]; //"Orang Dalam Pemantauan (ODP)" => "ODP",
$pdp = $covid[1]; //"Pasien Dalam Pengawasan (PDP)" => "PDP",
$odr = $covid[2]; //"Orang Dalam Resiko (ODR)" => "ODR"
$otg = $covid[3]; //"Orang Tanpa Gejala (OTG)" => "OTG",
$positif = $covid[4]; //"Positif Covid-19" => "POSITIF",
?> -->

<?php
//API Local Data COVID19
$suspek = $covid[0];
$probable = $covid[1];
$konfirmasi = $covid[2];
$discarded = $covid[3];
$sembuh = $covid[4];
$meninggal = $covid[5];
?>


<style type="text/css">
	#covid_local {
		margin-right: 8px;
		margin-left: 7px;
	}
	#covid_local .panel {
		background-color: inherit;
		margin-bottom: 0px;
	}
	#covid_local .panel-body {
		background-color: white;
	}
	#covid_local .panel-body.sub {
		background-color: inherit;
		padding-top: 10px;
	}
	#covid_local .row .panel-heading {
		height: 50px;
		padding: 1px;
	}
</style>

<div id="covid_local">
  <div class="panel">
    <div class="box-header with-border">
      <h3 class="box-title">
        <span class="bold_line"><span></span></span> <span class="solid_line"></span> <span class="title_text">Status COVID-19 di <?= ucwords($this->setting->sebutan_desa); ?> <?=$desa['nama_desa']; ?></span>
      </h3>
    </div>
    <div class="panel-body sub">
		  <div class="row">
	      	<div class="col-lg-3 col-md-3 col-sm-3">
				<div class="panel panel-danger">
					<div style="padding:1px" class="panel-heading text-center"><h4>SUSPEK<br>&nbsp;<br>&nbsp;</h4></div>
					<div style="height: 40px;padding:1px" class="panel-body text-center">
						<h4><?= number_format($suspek['jumlah']); ?> <small>Orang</small></h4>
					</div>
				</div>
			</div>
		    <div class="col-lg-3 col-md-3 col-sm-3">
					<div class="panel panel-warning">
            			<div style="padding:1px" class="panel-heading text-center"><h4>PROBABLE<br>&nbsp;</h4></div>
						<div style="height: 40px;padding:1px" class="panel-body text-center">
							<h4><?= number_format($probable['jumlah']); ?> <small>Orang</small></h4>
						</div>
					</div>
				</div>
		    <div class="col-lg-3 col-md-3 col-sm-3">
					<div class="panel panel-info">
            			<div style="padding:1px" class="panel-heading text-center"><h4>KONFIRMASI<br>&nbsp;</h4></div>
						<div style="height: 40px;padding:1px" class="panel-body text-center">
							<h4><?= number_format($konfirmasi['jumlah']); ?> <small>Orang</small></h4>
						</div>
					</div>
				</div>
		    <div class="col-lg-3 col-md-3 col-sm-3">
					<div class="panel panel-success">
           				<div style="padding:1px" class="panel-heading text-center"><h4>DISCARDED<br>&nbsp;</h4></div>
						<div style="height: 40px;padding:1px" class="panel-body text-center">
							<h4><?= number_format($discarded['jumlah']); ?> <small>Orang</small></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
  </div>

  <div class="row">
    <div class="col-md-12">
      <div class="progress-group">
          <a href="<?= site_url('first/statistik/covid')?>">
          <button type="button" class="btn btn-info btn-block">Lihat info lengkap di Statistik COVID19</button>
        </a>
      </div>
    </div>
  </div>
</div>
