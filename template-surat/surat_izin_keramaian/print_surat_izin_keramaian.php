<html>
	<?php if (!defined('BASEPATH')) exit('No direct script access allowed');?>
	<?php $this->load->view('print/headjs.php');?>
	<body>
		<div id="content" class="container_12 clearfix">
			<div id="content-main" class="grid_7">
				<link href="<?= base_url()?>assets/css/surat.css" rel="stylesheet" type="text/css" />
				<div>
					<table width="100%">
						<?php $this->load->view('print/kop'); ?>
						<div align="center"><u><h4 class="kop">SURAT PENGANTAR IZIN KERAMAIAN</h4></u></div>
						<div align="center"><h4 class="kop3">Nomor : <?= $input['nomor']?></h4></div>
					</table>
					<div class="clear"></div>
					<table width="100%">
						<tr>
							<!-- <td class="indentasi">Yang bertanda tangan dibawah ini <?= unpenetration($input['jabatan'])?> <?= unpenetration($desa['nama_desa'])?>, Kecamatan <?= unpenetration($desa['nama_kecamatan'])?>,
							<?= ucwords($this->setting->sebutan_kabupaten)?> <?= unpenetration($desa['nama_kabupaten'])?>, Provinsi <?= unpenetration($desa['nama_propinsi'])?> menerangkan dengan sebenarnya bahwa:  </td> -->
							<td>Yang bertanda tangan dibawah ini menerangkan dengan sebenarnya bahwa:  </td>
						</tr>
					</table>
					<div id="isi3">
						<table width="100%">
							<tr><td width="23%">Nama Lengkap</td><td width="3%">:</td><td width="64%"><?= unpenetration($data['nama'])?></td></tr>
							<tr><td width="23%">NIK/ No. KTP</td><td width="3%">:</td><td width="64%"><?= $data['nik']?></td></tr>
							<tr><td>Tempat dan Tgl. Lahir </td><td>:</td><td><?= ($data['tempatlahir'])?>, <?= tgl_indo($data['tanggallahir'])?> </td></tr>
							<tr><td>Jenis Kelamin</td><td>:</td><td><?= $data['sex']?></td></tr>
							<tr><td>Alamat/ Tempat Tinggal</td><td>:</td><td>RT. <?= $data['no_rt']?>, RW. <?= $data['no_rw']?>, Pedukuhan <?= ununderscore(unpenetration($data['alamat_sekarang']))?>, <?= ucwords($this->setting->sebutan_desa)?> <?= unpenetration($desa['nama_desa'])?>, <?= ucwords($this->setting->sebutan_kecamatan_singkat)?> <?= unpenetration($desa['nama_kecamatan'])?>, <?= ucwords($this->setting->sebutan_kabupaten_singkat)?> <?= unpenetration($desa['nama_kabupaten'])?></</td></tr>
							<tr><td>Agama</td><td>:</td><td><?= $data['agama']?></td></tr>
							<tr><td>Status</td><td>:</td><td><?= $data['status_kawin']?></td></tr>
							<tr><td>Pekerjaan</td><td>:</td><td><?= $data['pekerjaan']?></td></tr>
							<tr><td>Pendidikan</td><td>:</td><td><?= $data['pendidikan']?></td></tr>
							<tr><td>Kewarganegaraan </td><td>:</td><td><?= $data['warganegara']?></td></tr>
							<tr></tr>
							
							
						</table>
						<table width="100%">
			              <tr><td>Orang tersebut bermaksud akan mengadakan keramaian berupa : <?= $input['jenis_keramaian']?> pada tanggal <?= tgl_indo2(tgl_indo_in($input['tgl_mulai']))?> pukul <?= ($input['jam_mulai'])?> sampai dengan  <?= tgl_indo2(tgl_indo_in($input['tgl_akhir']))?>  pukul <?= ($input['jam_akhir'])?>, dan telah mendapat persetujuan dari lingkungan sekitar : </td></tr>
			              <tr></tr>
			              <tr></tr>
			            </table>
			            <table width="100%">
			              <tr></tr>
			              <tr><td width="5%"><b style="text-decoration: underline;">No</b></td> <td width="20%"> <b style="text-decoration: underline;">Lingkungan</b></td><td width="30%"> <b style="text-decoration: underline; text-align: center;">Nama</b></td><td width="15%"> <b style="text-decoration: underline;">Ttd</b></td></tr>
			              <tr></tr>
			            </table>
			            <table width="100%">
			              <tr></tr>
			              <tr><td width="5%">1.</td> <td width="20%"> Utara</td><td width="40%"> </td><td width="30%">(</td><td width="50%">)</td></tr>
			              <tr></tr>
			            </table>
			            <table></table>
			            <table width="100%">
			              <tr></tr>
			              <tr><td width="5%">2.</td> <td width="20%"> Selatan</td><td width="40%"> </td><td width="30%">(</td><td width="50%">)</td></tr>
			              <tr></tr>
			            </table>
			            <table></table>
			            <table width="100%">
			              <tr></tr>
			              <tr><td width="5%">3.</td> <td width="20%"> Timur</td><td width="40%"> </td><td width="30%">(</td><td width="50%">)</td></tr>
			              <tr></tr>
			            </table>
			            <table></table>
			            <table width="100%">
			              <tr></tr>
			              <tr><td width="5%">4.</td> <td width="20%"> Barat</td><td width="40%"> </td><td width="30%">(</td><td width="50%">)</td></tr>
			              <tr></tr>
			            </table>
			             <table width="100%">
			              <tr></tr>
			              <tr><td>dengan ketentuan bersedia menjaga ketertiban umum dan apabila mengganggu ketertiban umum bersedia menghentikan atau dihentikan oleh pihak yang berwenang.</td></tr>
			              <tr></tr>
			              <tr></tr>
			              <tr></tr>
			              <tr></tr>
			              <tr></tr>
			              <tr></tr>
			              <tr></tr>
			            </table>
						<table width="100%">
							<!-- <tr><td width="20%">Keterangan</td><td width="5%">:</td><td> <?= $input['keterangan']?>. </td></tr> -->
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr><td colspan="3">Demikian surat keterangan ini dibuat dengan sebenarnya agar dapat dipergunakan sebagaimana mestinya.</td></tr>
						</table>

						<?php $this->load->view('print/ttd.php');?>
					</div>
				</div>
			</div>
			<div id="aside"></div>
		</div>
	</body>
</html>
