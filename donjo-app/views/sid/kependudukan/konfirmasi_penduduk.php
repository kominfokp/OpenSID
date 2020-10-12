<?php if($individu['status_data'] !=null) {?>
<div class="form-group konfirmasi">
<label for="keperluan"  class="col-sm-3 control-label"></label>
	<div class="col-sm-4 ">
		<p class="text-danger"><?php echo $individu['status_data']; ?></p>
	</div>
</div>
<?php } else { ?>
<div class="form-group konfirmasi">
<label for="keperluan"  class="col-sm-3 control-label">Nama Lengkap</label>
	<div class="col-sm-4">
		<input class="form-control input-sm" type="text" value="<?= strtoupper($individu['nama']);?> " disabled="">
	</div>
</div>
<div class="form-group konfirmasi">
	<label for="keperluan"  class="col-sm-3 control-label">Tempat  / Tanggal Lahir / Umur</label>
	<div class="col-sm-4">
		<input class="form-control input-sm" type="text" value="<?= strtoupper($individu['tempatlahir']);?> " disabled="">
	</div>
	<div class="col-sm-2">
  	<input class="form-control input-sm" type="text" value="<?= strtoupper(tgl_indo ($individu['tanggallahir']));?> " disabled="">
	</div>
	<div class="col-sm-2">
		<input class="form-control input-sm" type="text" value="<?= strtoupper($individu['umur']);?> TAHUN" disabled="">
	</div>
</div>
<div class="form-group konfirmasi">
	<label for="keperluan"  class="col-sm-3 control-label">Alamat</label>
	<div class="col-sm-8">
		<input class="form-control input-sm" type="text" value="<?= strtoupper($individu['alamat_wilayah']); ?>" disabled="">
	</div>
</div>
<div class="form-group konfirmasi">
	<label for="keperluan"  class="col-sm-3 control-label">Pekerjaan</label>
	<div class="col-sm-8">
		<input class="form-control input-sm" type="text" value="<?= strtoupper($individu['pekerjaan']); ?>" disabled="">
	</div>
</div>
<div class="form-group konfirmasi">
	<label for="keperluan"  class="col-sm-3 control-label">Pendidikan / Warga Negara /Agama</label>
	<div class="col-sm-4">
		<input class="form-control input-sm" type="text" value="<?= strtoupper($individu['pendidikan']);?>" disabled="">
	</div>
	<div class="col-sm-2">
		<input class="form-control input-sm" type="text" value="<?= strtoupper($individu['warganegara']);?>" disabled="">
	</div>
	<div class="col-sm-2">
		<input class="form-control input-sm" type="text" value=" <?= strtoupper($individu['agama']);?>" disabled="">
	</div>
</div>
<div class="form-group konfirmasi">
<input class="form-control input-sm" type="text" value="<?= $photo[data];?>"/>
	<label for="persyaratan"  class="col-sm-3 control-label">Photo</label>
	<div class="col-sm-8">
	<img src="data:image/png;base64, <?=$photo[content]?>" >
		<!-- <img src="http://192.168.65.226/api/faces/<?=$individu[nik]?>.jpg" width="25%">-->
	</div>
</div>
<?php } ?>