<div class="content-wrapper">
	<section class="content-header">
    <h1>Pengelolaan Data <?= ucwords($this->setting->sebutan_dusun)?></h1>
		<ol class="breadcrumb">
			<li><a href="<?= site_url('hom_sid')?>"><i class="fa fa-home"></i> Home</a></li>
			<li><a href="<?= site_url('sid_core')?>"> Daftar <?= ucwords($this->setting->sebutan_dusun)?></a></li>
			<li class="active">Data <?= ucwords($this->setting->sebutan_dusun)?></li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<div class="row">
			<div class="col-md-12">
				<div class="box box-info">
					<div class="box-header with-border">
						<a href="<?= site_url("sid_core")?>" class="btn btn-social btn-flat btn-info btn-sm btn-sm visible-xs-block visible-sm-inline-block visible-md-inline-block visible-lg-inline-block"  title="Kembali Ke Daftar Wilayah">
							<i class="fa fa-arrow-circle-left "></i>Kembali ke Daftar <?= ucwords($this->setting->sebutan_dusun)?>
           				</a>
					</div>
					<div class="box-body">
						<div class="row">
							<div class="col-sm-12">
								<form action="" id="main" name="main" method="POST" class="form-horizontal">
									<div class="box-body">
										<div class="row">
											<div class="col-sm-12">
													<div class="form-group">
														<label for="nik"  class="col-sm-3 control-label">NIK Kepala Dusun</label>

														<div class="col-sm-4">
															<input class="form-control input-sm" id="id_kepala"  value="<?= $individu['nik']?>" name="id_kepala" style ="width:100%;">
														</div>
														<div class="col-sm-2">
																<button class="btn btn-sosial btn-flat btn-success btn-sm" onclick="formAction('main')"><i class="fa fa-plus"></i>Validasi</button>
														</div>

													</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							<div class="col-sm-12">
								<?php if(!empty($this->uri->segment(3))){ ?>
								<form id="validasi" action="update" method="POST" enctype="multipart/form-data"  class="form-horizontal">
								<?php }else{ ?>
								<form id="validasi" action="insert" method="POST" enctype="multipart/form-data"  class="form-horizontal">
								<?php } ?>
									<div class="box-body">
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group">
													<label class="col-sm-3 control-label" for="dusun">Nama  <?= ucwords($this->setting->sebutan_dusun)?></label>
													<div class="col-sm-7">
														<input  id="dusun" class="form-control input-sm nama_terbatas required" maxlength="100" type="text" placeholder="Nama  <?= ucwords($this->setting->sebutan_dusun)?>" name="dusun" value="<?= $dusun?>">
													</div>
												</div>
											</div>
											<?php if ($dusun): ?>
												<div class="col-sm-12">
													<div class="form-group">
														<label class="col-sm-3 control-label" for="kepala_lama">Kepala  <?= ucwords($this->setting->sebutan_dusun)?> Sebelumnya</label>
														<div class="col-sm-7">
															<p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
																<strong><?= $individu["nama"]?></strong>
																<br/>NIK - <?= $individu["nik"]?>
															</p>
														</div>
													</div>
												</div>
											<?php endif; ?>
											<div class="col-sm-12">
											<?php if ($individu): ?>
												<?php include("donjo-app/views/sid/wilayah/konfirmasi_pemohon.php"); ?>
											<?php	endif; ?>
											</div>
										</div>
									</div>
									<div class='box-footer'>
										<div class='col-xs-12'>
											<button type='reset' class='btn btn-social btn-flat btn-danger btn-sm invisible' ><i class='fa fa-times'></i> Batal</button>
											<button type='submit' class='btn btn-social btn-flat btn-info btn-sm pull-right'><i class='fa fa-check'></i> Simpan</button>
										</div>
									</div>
								</form>
							</div>
           				</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
<script src="<?= base_url()?>assets/js/validasi.js"></script>
<script src="<?= base_url()?>assets/js/jquery.validate.min.js"></script>
<script src="<?= base_url()?>assets/js/localization/messages_id.js"></script>
<script type="text/javascript">
	setTimeout(function() {
		$('#dusun').rules('add', {
			maxlength: 50
		})
	}, 500);
</script>
