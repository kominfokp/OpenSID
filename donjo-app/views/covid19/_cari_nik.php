<!-- by angg
penambahan form validasi nik -->
<div class="form-group">
	<label for="nik"  class="col-sm-3 control-label">NIK / Nama <?= $pemohon?></label>
	<div class="col-sm-6 col-lg-4">
  		<input class="form-control required input-sm" name="nik" id="nik_didapatkan" value="<?=$individu['nik'];?>" id="nik" required>
	</div>
	<div class="col-sm-6 col-lg-2">
		<button type="submit" class="btn btn-primary btn-sm btn-flat"><i class="fa fa-check"></i> Cek NIK</button>
	</div>
</div>
