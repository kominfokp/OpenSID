<html>
	<?php $this->load->view('print/headjs.php');?>
	<body>
		<div id="content" class="container_12 clearfix">
			<div id="content-main" class="grid_7">
				<link href="<?= base_url()?>assets/css/surat.css" rel="stylesheet" type="text/css" />
				<div>
					<table width="100%">
						<?php $this->load->view('print/kop'); ?>
						<div align="center"><u><h4  class="kop">SURAT KETERANGAN PEGHASILAN ORANGTUA</h4></u></div>
						<div align="center"><h4 class="kop3">Nomor : <?= $input['nomor']?><!-- /Kesra/<?= date("Y")?> --></h4></div>
				</table>
				<div class="clear"></div>
				<table width="100%">
					<tr><td>Yang bertanda tangan dibawah ini menerangkan dengan sebenarnya bahwa :  </td></tr>
				</table>
				<div id="isi3">
					<table width="100%">
						<tr><td width="23%">Nama Lengkap</td><td width="3%">:</td><td width="64%"><b><?= unpenetration($kepalakk['nama'])?></td></tr>
						<tr><td width="23%">NIK / No KTP</td><td width="3%">:</td><td width="64%"><?= $kepalakk['nik']?></td></tr>
						<tr><td>Tempat dan Tgl. Lahir </td><td>:</td><td><?= ($kepalakk['tempatlahir'])?>, <?= tgl_indo($kepalakk['tanggallahir'])?> </td></tr>
						<tr><td>Jenis Kelamin</td><td>:</td><td><?= $kepalakk['sex']?></td></tr>
						<tr><td>Agama</td><td>:</td><td><?= $kepalakk['agama']?></td></tr>
						<tr><td>Pekerjaan</td><td>:</td><td><?= $kepalakk['pekerjaan']?></td></tr>
						<tr><td>Kewarganegaraan </td><td>:</td><td><?= $kepalakk['warganegara']?></td></tr>
						<tr><td>Alamat/ Tempat Tinggal</td><td>:</td><td>RT. <?= $data['no_rt']?>, RW. <?= $data['no_rw']?>, Pedukuhan <?= ununderscore(unpenetration($data['alamat_sekarang']))?>, <?= ucwords($this->setting->sebutan_desa)?> <?= unpenetration($desa['nama_desa'])?>, <?= ucwords($this->setting->sebutan_kecamatan_singkat)?> <?= unpenetration($desa['nama_kecamatan'])?>, <?= ucwords($this->setting->sebutan_kabupaten_singkat)?> <?= unpenetration($desa['nama_kabupaten'])?></td></tr>
					</table>
					<table width="100%">
						<tr>
							<td>Mengaku berpenghasilan rata-rata per bulan sebesar :</td>
						</tr>
					</table>
					<table width="100%">
						<tr><td width="23%">Penghasilan Ayah</td><td width="3%">:</td><td width="64%"><b>Rp. <?= number_format($input['hasil_ayah'])?></td></tr>
						<tr><td width="23%">Penghasilan Ibu</td><td width="3%">:</td><td width="64%"><b>Rp. <?= number_format($input['hasil_ibu'])?></td></tr>
					</table>
					<table width="100%">
						<tr>
							<td>Sehingga tidak mampu menanggung biaya sekolah anak-nya yang bersekolah di: </td>
						</tr>
					</table>
					<table width="100%">
						<tr><td width="23%">Sekolah/Perguruan Tinggi</td><td width="3%">:</td><td width="64%"><b><?= $input['sekolah_pt']?></td></tr>
						<tr><td width="23%">Nomor Induk</td><td width="3%">:</td><td width="64%"><b><?= $input['nomor_induk']?></td></tr>
						<tr><td width="23%">Kelas/Semester</td><td width="3%">:</td><td width="64%"><b><?= $input['kelas_semester']?></td></tr>
						<tr><td width="23%">Jurusan/Fakultas/Prodi</td><td width="3%">:</td><td width="64%"><b><?= $input['jurusan']?></td></tr>
					</table>
					<table width="100%">
							<tr><td>Surat Ini berlaku dari tanggal <?= $input['berlaku_dari']?> sampai <?= $input['berlaku_sampai']?>.</td></tr>
					</table>

					<table width="100%">
						<tr></tr>
						<tr><td>Demikian surat keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya</td></tr>
						<tr></tr>
					</table>
							
					</div>
						<?php $this->load->view('print/ttd.php');?>
					</div>
				</div>
			</div>
			<div id="aside"></div>
		</div>
	</body>
</html>
