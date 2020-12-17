<?php $this->load->view('print/headjs.php');?>
<body>
	<div id="content" class="container_12 clearfix">
		<div id="content-main" class="grid_7">
			<link href="<?= base_url()?>assets/css/surat.css" rel="stylesheet" type="text/css" />
			<div>
				<table width="100%">
					<!-- <tr> <img src="<?= LogoDesa($desa['logo']);?>" alt=""  class="logo"></tr>
					<div class="header">
						<h4 class="kop">PEMERINTAH <?= strtoupper($this->setting->sebutan_kabupaten)?> <?= strtoupper(unpenetration($desa['nama_kabupaten']))?> </h4>
						<h4 class="kop">KECAMATAN <?= strtoupper(unpenetration($desa['nama_kecamatan']))?> </h4>
						<h4 class="kop"><?= strtoupper($this->setting->sebutan_desa)?> <?= strtoupper(unpenetration($desa['nama_desa']))?></h4>
						<h5 class="kop2"><?= (unpenetration($desa['alamat_kantor']))?> </h5>
						<div style="text-align: center;">
							<hr />
						</div>
					</div> -->
					<img src="<?php echo base_url(); ?>assets/images/KOP.jpg" style="width: 100%;">
					<div align="center"><u><h4 class="kop">SURAT KETERANGAN KTP DALAM PROSES</h4></u></div>
					<div align="center"><h4 class="kop3">Nomor : <?= $input['nomor']?></h4></div>
				</table>
				<div class="clear"></div>
				<div id="isi3">
					<table width="100%">
						<td class="indentasi">Yang bertanda tangan dibawah ini <?= unpenetration($input['jabatan'])?> <?= unpenetration($desa['nama_desa'])?>, Kecamatan <?= unpenetration($desa['nama_kecamatan'])?>, <?= ucwords($this->setting->sebutan_kabupaten)?> <?= unpenetration($desa['nama_kabupaten'])?>, Provinsi <?= unpenetration($desa['nama_propinsi'])?> menerangkan dengan sebenarnya bahwa:  </td></tr>
					</table>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<table width="100%">
						<tr><td width="23%">Nama Lengkap</td><td width="3%">:</td><td width="64%"><?= unpenetration($data['nama'])?></td></tr>
						<tr><td>Tempat dan Tgl. Lahir </td><td>:</td><td><?= ($data['tempatlahir'])?>, <?= tgl_indo($data['tanggallahir'])?></td></tr>
						<tr><td>Jenis Kelamin</td><td>:</td><td><?= $data['sex']?></td></tr>
						<tr><td>Alamat/ Tempat Tinggal</td><td>:</td><td>RT. <?= $data['rt']?>, RW. <?= $data['rw']?>, Dusun <?= unpenetration(ununderscore($data['alamat']))?>, <?= ucwords($this->setting->sebutan_desa)?> <?= unpenetration($data['kel_name'])?>, Kec. <?= unpenetration($data['kec_name'])?>, <?= ucwords($this->setting->sebutan_kabupaten_singkat)?> <?= unpenetration($data['kab_name'])?></td></tr>
						<tr><td>Agama</td><td>:</td><td><?= $data['agama']?></td></tr>
						<tr><td>Status</td><td>:</td><td><?= $data['status_kawin']?></td></tr>
						<tr><td>Pekerjaan</td><td>:</td><td><?= $data['pekerjaan']?></td></tr>
						<tr><td>Kewarganegaraan </td><td>:</td><td><?= $data['warganegara']?></td></tr>
						<table width="100%">
							<tr><td class="indentasi">Orang tersebut di atas adalah benar-benar warga kami yang bertempat tinggal di Dusun <?= unpenetration(ununderscore($data['alamat']))?>, Rt. <?= $data['rt']?>, <?= unpenetration($data['kel_name'])?>, <?= unpenetration($data['kec_name'])?>, <?= unpenetration($data['kab_name'])?> yang saat ini Kartu Tanda Penduduk  sedang dalam proses.</td></tr>
						</table>
						<div class="clear"></div>
						<table width="100%">
							<tr><td>
							<td class="indentasi">Demikian surat keterangan ini dibuat dengan sesungguhnya untuk dapat digunakan sebagaimana mestinya.</td>
						</table>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
						</table>
					</div>
					<table width="100%">
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr><td width="5%"></td><td width="43%"></td><td  align="center"><?= unpenetration($desa['nama_desa'])?>, <?= $tanggal_sekarang?></td></tr>
						<tr><td width="5%"></td><td width="43%"></td><td align="center"><?= unpenetration($input['jabatan'])?> <?= unpenetration($desa['nama_desa'])?></td></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr></tr>
						<tr><td> <td></td><td align="center">( <?= unpenetration($input['pamong'])?> )</td></tr>
					</table>
				</div>
			</div>
			<div id="aside"></div>
		</div>
	</body>
</html>
