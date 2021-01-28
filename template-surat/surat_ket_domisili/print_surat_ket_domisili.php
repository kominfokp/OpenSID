<html>
	<?php $this->load->view('print/headjs.php');?>
	<body>
		<div id="content" class="container_12 clearfix">
			<div id="content-main" class="grid_7">
				<link href="<?= base_url()?>assets/css/surat.css" rel="stylesheet" type="text/css" />
				<div>
					<table width="100%">
						<?php $this->load->view('print/kop'); ?>
						<div align="center"><u><h4  class="kop">SURAT KETERANGAN DOMISILI</h4></u></div>
						<div align="center"><h4  class="kop">Nomor : <?= $input['nomor']?></h4></div>
					</table>
					<table width="100%">
						<tr>
							<td>	
								<p>Yang bertanda tangan dibawah ini Kepala <?= ucwords($this->setting->sebutan_desa)?> <?php echo unpenetration($desa['nama_desa'])?> <?= ucwords($this->setting->sebutan_kecamatan)?> <?php echo unpenetration($desa['nama_kecamatan'])?> <?= ucwords($this->setting->sebutan_kabupaten)?> <?php echo unpenetration($desa['nama_kabupaten'])?> Provinsi <?php echo unpenetration($desa['nama_propinsi'])?> menerangkan dengan sebenarnya bahwa :  </p>
							</td>
						</tr>
					</table>
					<div id="isi3">
					<table width="100%">
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr>
							<td>
								<table width="100%">
									<tr><td width="20%">Nama Lengkap</td><td width="2%">:</td><td width="64%"><?= unpenetration($data['nama'])?></td></tr>
									<tr><td>Nomor KTP</td><td>:</td><td><?= $data['nik']?></td></tr>
									<tr><td>Tempat dan Tgl. Lahir </td><td>:</td><td><?= ($data['tempatlahir'])?>, <?= tgl_indo($data['tanggallahir'])?> </td></tr>
									<tr><td>Jenis Kelamin</td><td>:</td><td><?= $data['sex']?></td></tr>
									<tr><td>Alamat / Tempat Tinggal</td><td>:</td><td>RT. <?= $data['no_rt']?>, RW. <?= $data['no_rw']?>, Pedukuhan <?= ununderscore(unpenetration($data['alamat_sekarang']))?>, <?= ucwords($this->setting->sebutan_desa)?> <?= unpenetration($desa['nama_desa'])?>, <?= ucwords($this->setting->sebutan_kecamatan_singkat)?> <?= unpenetration($desa['nama_kecamatan'])?>, <?= ucwords($this->setting->sebutan_kabupaten_singkat)?> <?= unpenetration($desa['nama_kabupaten'])?></td></tr>
									<tr><td>Agama</td><td>:</td><td><?= $data['agama']?></td></tr>
									<tr><td>Status</td><td>:</td><td><?= $data['status_kawin']?></td></tr>
									<tr><td>Pendidikan</td><td>:</td><td><?= $data['pendidikan']?></td></tr>
									<tr><td>Pekerjaan</td><td>:</td><td><?= $data['pekerjaan']?></td></tr>
									<tr><td>Kewarganegaraan </td><td>:</td><td><?= $data['warganegara']?></td></tr>
									<tr><td>Keperluan </td><td width="2%">:</td><td width="64%"><!-- Surat Keterangan ini dibuat untuk Keperluan --> <b><?php echo $input['keperluan']?></td></tr>
								</table>
								<table width="100%">
									<?php if($input['status_warga'] == 1){ ?>
									<tr><td>Orang tersebut diatas adalah benar-benar warga kami yang bertempat tinggal di RT. <?= $data['no_rt']?>, RW. <?= $data['no_rw']?>, Pedukuhan <?= ununderscore(unpenetration($data['alamat_sekarang']))?>, <?= ucwords($this->setting->sebutan_desa)?> <?= unpenetration($desa['nama_desa'])?>, <?= ucwords($this->setting->sebutan_kecamatan_singkat)?> <?= unpenetration($desa['nama_kecamatan'])?>, <?= ucwords($this->setting->sebutan_kabupaten_singkat)?> <?= unpenetration($desa['nama_kabupaten'])?> tercatat dalam No. KK: <?= $data['no_kk']?> dengan NIK: <?= $data['nik']?>.</td></tr>
									<?php }else{ ?>
									<tr><td>Orang tersebut diatas adalah bukan warga kami tetapi berdomisili di wilayah kami dengan bertempat tinggal di RT. <?= $data['no_rt']?>, RW. <?= $data['no_rw']?>, Pedukuhan <?= ununderscore(unpenetration($data['alamat_sekarang']))?>, <?= ucwords($this->setting->sebutan_desa)?> <?= unpenetration($desa['nama_desa'])?>, <?= ucwords($this->setting->sebutan_kecamatan_singkat)?> <?= unpenetration($desa['nama_kecamatan'])?>, <?= ucwords($this->setting->sebutan_kabupaten_singkat)?> <?= unpenetration($desa['nama_kabupaten'])?> tercatat dalam No. KK: <?= $data['no_kk']?> dengan NIK: <?= $data['nik']?>.</td></tr>
									<?php } ?>
									<!-- <tr><td>Berlaku mulai </td><td>:</td><td><?= tgl_indo(tgl_indo_in($input['berlaku_dari']))?> sampai dengan  <?= tgl_indo(tgl_indo_in($input['berlaku_sampai']))?></td></tr> -->
								</table>
								<table width="100%">
									<tr></tr>
									<tr></tr>
									<tr></tr>
									<tr><td>Demikian Surat Keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</td></tr>
									<tr></tr>
									<tr></tr>
									<tr></tr>
									<tr></tr>
									<tr></tr>
									<tr></tr>
								</table>
							</td>
						</tr>
					</table>
					</div>
					<?php $this->load->view('print/ttd.php');?>
					
				</div>
			</div>
			<div id="aside"></div>
			<div id="footer" class="container_12"></div>
		</div>
	</body>
</html>

