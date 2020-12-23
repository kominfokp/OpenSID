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
						<div align="center"><u><h4 class="kop">SURAT KETERANGAN BEDA IDENTITAS</h4></u></div>
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
							<tr><td colspan="3">I. Identitas yang terdaftar di kependudukan</td></tr>
							<tr><td width="40%">Nama Lengkap</td><td width="3%">:</td><td width="64%"><?= unpenetration($data['nama'])?></td></tr>
							<tr><td width="40%">NIK/ No. KTP</td><td width="3%">:</td><td width="64%"><?= $data['nik']?></td></tr>
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
						
						<?php if(!empty($input['kartu3'])){ ?> 
							<table width="100%">
								<tr><td colspan="3">II. Identitas dalam <?= $input['kartu1']?></td><td width="3%"></td><td width="64%"></td></tr>
								<tr><td width="40%">NIK</td><td width="3%">:</td><td width="64%">
									<?= unpenetration($data['nik'])?>
								</td></tr>
								<tr><td width="40%">Nama</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan1']=='Nama'){echo $input['perbedaan1'];}else{echo $data['nama'];} ?>
								</td></tr>
								<tr><td width="40%">Tempat Tanggal Lahir</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan1']=='TTL'){echo $input['tempatlahir1']. ', '.$input['tanggallahir1'];}else{echo $data['tempatlahir']. ', '.tgl_indo($data['tanggallahir']);} ?>
								</td></tr>
								<tr><td width="40%">Alamat</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan1']=='Alamat'){echo $input['perbedaan1'];}else{echo 'RT ' .$data['no_rt'].', RW '.$data['no_rw'].', Pedukuhan '.$data['alamat_sekarang'].', Kepanewon '.$desa['nama_kecamatan'].', Kabupaten '.$desa['nama_kabupaten'];} ?>
								</td></tr>
							</table>
							<table width="100%">
								<tr><td colspan="3">III. Identitas dalam <?= $input['kartu2']?></td><td width="3%"></td><td width="64%"></td></tr>
								<tr><td width="40%">NIK</td><td width="3%">:</td><td width="64%">
									<?= unpenetration($data['nik'])?>
								</td></tr>
								<tr><td width="40%">Nama</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan2']=='Nama'){echo $input['perbedaan2'];}else{echo $data['nama'];} ?>
								</td></tr>
								<tr><td width="40%">Tempat Tanggal Lahir</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan2']=='TTL'){echo $input['tempatlahir2']. ', '.$input['tanggallahir2'];}else{echo $data['tempatlahir']. ', '.tgl_indo($data['tanggallahir']);} ?>
								</td></tr>
								<tr><td width="40%">Alamat</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan2']=='Alamat'){echo $input['perbedaan2'];}else{echo 'RW ' .$data['rw'].', RT '.$data['rt'].', Kalurahan '.$data['kel_name'].', Kepanewon '.$data['nama_kecamatan'].', Kabupaten '.$data['kab_name'];} ?>
								</td></tr>
							</table>
							<table width="100%">
								<tr><td colspan="3">IV. Identitas dalam <?= $input['kartu3']?></td><td width="3%"></td><td width="64%"></td></tr>
								<tr><td width="40%">NIK</td><td width="3%">:</td><td width="64%">
									<?= unpenetration($data['nik'])?>
								</td></tr>
								<tr><td width="40%">Nama</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan3']=='Nama'){echo $input['perbedaan3'];}else{echo $data['nama'];} ?>
								</td></tr>
								<tr><td width="40%">Tempat Tanggal Lahir</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan3']=='TTL'){echo $input['tempatlahir3']. ', '.$input['tanggallahir3'];}else{echo $data['tempatlahir']. ', '.tgl_indo($data['tanggallahir']);} ?>
								</td></tr>
								<tr><td width="40%">Alamat</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan3']=='Alamat'){echo $input['perbedaan3'];}else{echo 'RW ' .$data['rw'].', RT '.$data['rt'].', Kalurahan '.$data['kel_name'].', Kepanewon '.$data['kec_name'].', Kabupaten '.$data['kab_name'];} ?>
								</td></tr>
							</table>
						<?php }elseif(!empty($input['kartu2'])) { ?>
							<table width="100%">
								<tr><td colspan="3">II. Identitas dalam <?= $input['kartu1']?></td><td width="3%"></td><td width="64%"></td></tr>
								<tr><td width="40%">NIK</td><td width="3%">:</td><td width="64%">
									<?= unpenetration($data['nik'])?>
								</td></tr>
								<tr><td width="40%">Nama</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan1']=='Nama'){echo $input['perbedaan1'];}else{echo $data['nama'];} ?>
								</td></tr>
								<tr><td width="40%">Tempat Tanggal Lahir</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan1']=='TTL'){echo $input['tempatlahir1']. ', '.$input['tanggallahir1'];}else{echo $data['tempatlahir']. ', '.tgl_indo($data['tanggallahir']);} ?>
								</td></tr>
								<tr><td width="40%">Alamat</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan1']=='Alamat'){echo $input['perbedaan1'];}else{echo 'RW ' .$data['rw'].', RT '.$data['rt'].', Kalurahan '.$data['kel_name'].', Kepanewon '.$data['kec_name'].', Kabupaten '.$data['kab_name'];} ?>
								</td></tr>
							</table>
							<table width="100%">
								<tr><td colspan="3">III. Identitas dalam <?= $input['kartu2']?></td><td width="3%"></td><td width="64%"></td></tr>
								<tr><td width="40%">NIK</td><td width="3%">:</td><td width="64%">
									<?= unpenetration($data['nik'])?>
								</td></tr>
								<tr><td width="40%">Nama</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan2']=='Nama'){echo $input['perbedaan2'];}else{echo $data['nama'];} ?>
								</td></tr>
								<tr><td width="40%">Tempat Tanggal Lahir</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan2']=='TTL'){echo $input['tempatlahir2']. ', '.$input['tanggallahir2'];}else{echo $data['tempatlahir']. ', '.tgl_indo($data['tanggallahir']);} ?>
								</td></tr>
								<tr><td width="40%">Alamat</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan2']=='Alamat'){echo $input['perbedaan2'];}else{echo 'RW ' .$data['rw'].', RT '.$data['rt'].', Kalurahan '.$data['kel_name'].', Kepanewon '.$data['kec_name'].', Kabupaten '.$data['kab_name'];} ?>
								</td></tr>
							</table>
						<?php }else{ ?>
							<table width="100%">
								<tr><td colspan="3">II. Identitas dalam <?= $input['kartu1']?></td><td width="3%"></td><td width="64%"></td></tr>
								<tr><td width="40%">NIK</td><td width="3%">:</td><td width="64%">
									<?= unpenetration($data['nik'])?>
								</td></tr>
								<tr><td width="40%">Nama</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan1']=='Nama'){echo $input['perbedaan1'];}else{echo $data['nama'];} ?>
								</td></tr>
								<tr><td width="40%">Tempat Tanggal Lahir</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan1']=='TTL'){echo $input['tempatlahir1']. ', '.$input['tanggallahir1'];}else{echo $data['tempatlahir']. ', '.tgl_indo($data['tanggallahir']);} ?>
								</td></tr>
								<tr><td width="40%">Alamat</td><td width="3%">:</td><td width="64%">
									<?php if($input['opsi_perbedaan1']=='Alamat'){echo $input['perbedaan1'];}else{echo 'RW ' .$data['rw'].', RT '.$data['rt'].', Kalurahan '.$data['kel_name'].', Kepanewon '.$data['kec_name'].', Kabupaten '.$data['kab_name'];} ?>
								</td></tr>
							</table>
						<?php } ?>
						<table width="100%">
							<tr></tr>
							<tr></tr>
							<tr>
								<td>
									<p style="text-align: justify;">Adalah benar-benar warga desa kami, adapun perbedaan identitas tersebut disebabkan karena 
										<?php if(!empty($input['sebab3']))
										{echo $input['sebab1'].', '.$input['sebab2'].', '.$input['sebab3'];}
										elseif(!empty($input['sebab2']))
										{echo $input['sebab1'].', '.$input['sebab2'];}
										else
										{echo $input['sebab1'];} ?> 
									namun kedua data tersebut menerangkan identitas orang yang sama. </p>
								</td>
							</tr>
							<tr><td>Demikian surat keterangan ini dibuat dengan sesungguhnya agar dapat dipergunakan sebagaimana mestinya</td></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
							<tr></tr>
						</table>

						<?php $this->load->view('print/ttd.php');?>
					</div>
				</div>
			</div>
			<div id="aside"></div>
		</div>
	</body>
</html>
