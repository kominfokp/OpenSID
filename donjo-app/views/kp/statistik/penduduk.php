<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * File ini:
 *
 * View untuk modul Statistik Kependudukan
 *
 * donjo-app/views/statistik/penduduk.php,
 *
 */

/**
 *
 * File ini bagian dari:
 *
 * OpenSID
 *
 * Sistem informasi desa sumber terbuka untuk memajukan desa
 *
 * Aplikasi dan source code ini dirilis berdasarkan lisensi GPL V3
 *
 * Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 *
 * Dengan ini diberikan izin, secara gratis, kepada siapa pun yang mendapatkan salinan
 * dari perangkat lunak ini dan file dokumentasi terkait ("Aplikasi Ini"), untuk diperlakukan
 * tanpa batasan, termasuk hak untuk menggunakan, menyalin, mengubah dan/atau mendistribusikan,
 * asal tunduk pada syarat berikut:
 *
 * Pemberitahuan hak cipta di atas dan pemberitahuan izin ini harus disertakan dalam
 * setiap salinan atau bagian penting Aplikasi Ini. Barang siapa yang menghapus atau menghilangkan
 * pemberitahuan ini melanggar ketentuan lisensi Aplikasi Ini.
 *
 * PERANGKAT LUNAK INI DISEDIAKAN "SEBAGAIMANA ADANYA", TANPA JAMINAN APA PUN, BAIK TERSURAT MAUPUN
 * TERSIRAT. PENULIS ATAU PEMEGANG HAK CIPTA SAMA SEKALI TIDAK BERTANGGUNG JAWAB ATAS KLAIM, KERUSAKAN ATAU
 * KEWAJIBAN APAPUN ATAS PENGGUNAAN ATAU LAINNYA TERKAIT APLIKASI INI.
 *
 * @package	OpenSID
 * @author	Tim Pengembang OpenDesa
 * @copyright	Hak Cipta 2009 - 2015 Combine Resource Institution (http://lumbungkomunitas.net/)
 * @copyright	Hak Cipta 2016 - 2020 Perkumpulan Desa Digital Terbuka (https://opendesa.id)
 * @license	http://www.gnu.org/licenses/gpl.html	GPL V3
 * @link 	https://github.com/OpenSID/OpenSID
 */
?>

<style type="text/css">
	.disabled {
		pointer-events: none;
		cursor: default;
	}

	.table, th {
		text-align: center;
	}
</style>
<div class="content-wrapper">
	<section class="content-header">
		<h1>Statistik Kependudukan</h1>
		<ol class="breadcrumb">
			<li><a href="<?=site_url('hom_sid')?>"><i class="fa fa-home"></i> Home</a></li>
			<li class="active">Statistik Kependudukan <?= $dusun; ?></li>
		</ol>
	</section>
	<section class="content" id="maincontent">
		<div class="row">
			<div class="col-md-4">
				<?php $this->load->view('kp/statistik/side_menu.php')?>
			</div>
			<div class="col-md-8">
				<div class="box box-info">
					<div class="box-header with-border">
						Statistik Penduduk <?=$title_statistik;?>
					</div>
					<div class="box-body">
						<?php 
						if ($enable_filter) 
						{
						?>
						<form action="<?=$url_filter;?>" method="get">
							<input type="hidden" name="kategori" value="<?=$kategori;?>" />
							<input type="hidden" name="jenis_statistik" value="<?=$jenis_statistik;?>" />
							<div class="row">
									<div class="col-sm-4 col-lg-4">
										<div class="form-group">
											<label for="nik" class="control-label">Tahun</label><br>
											<?=form_dropdown('tahun', $combobox_tahun, $tahun, 'id="tahun" class="form-control input-sm"');?>
										</div>
									</div>

									<div class="col-sm-4 col-lg-4">
										<div class="form-group">
											<label for="nik" class="control-label">Semester</label><br>
											<?=form_dropdown('semester', $combobox_semester, $semester, 'id="semester" class="form-control input-sm" ');?>
										</div>
									</div>

									<div class="col-sm-4 col-lg-2"><br>
										<button type="submit" class="btn btn-sosial btn-flat btn-success btn-sm" onclick="formAction('main')"><i class="fa fa-plus"></i>Tampilkan</button>
									</div>
							</div>
							<input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" />
						</form>
						<?php 
						}
						?>
						
						<div class="table-responsive">
							<table class="table table-bordered dataTable table-striped table-hover">
								<thead>
									<tr>
										<th width="5%">No</th>
										<th width="35%">Nama</th>
										<th width="20%">Laki-Laki</th>
										<th width="20%">Perempuan</th>
										<th width="20%">Jumlah</th>
									</tr>
								</thead>
								<tbody>
									<?php 
									
									if (!empty($data_statistik)) 
									{
										$no = 1;
										$jml_laki_laki = 0;
										$jml_perempuan = 0;
										$jml_jml = 0;
										foreach ($data_statistik as $val) 
										{
											$jml_laki_laki += $val['lakiLaki'];
											$jml_perempuan += $val['perempuan'];
											$jml_jml += $val['jumlah'];

											echo 
											'<tr>
											<td>'.$no.'</td>
											<td>'.$val[$field_label].'</td>
											<td>'.$val['lakiLaki'].'</td>
											<td>'.$val['perempuan'].'</td>
											<td>'.$val['jumlah'].'</td>
											</tr>';

											$no++; 
										}

										echo '
											<tr>
												<td colspan="2">JUMLAH</td>
												<td>'.$jml_laki_laki.'</td>
												<td>'.$jml_perempuan.'</td>
												<td>'.$jml_jml.'</td>
											</tr>';
									} 
									else 
									{
										echo '<tr><td colspan="5">-</td></tr>';
									}

									?>
								</tbody>
							</table>
						</div>	
					</div>
				</div>

				<!-- end col-md-8 -->
			</div>
		</div>
	</section>
</div>
<script type="text/javascript">
	var chart;

	function grafikType() {
		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'chart',
				defaultSeriesType: 'column'
			},
			title: 0,
			xAxis: {
				title: {
					text: '<?= $stat?>'
				},
				categories: [
				<?php $i=0; foreach ($main as $data): $i++;?>
				<?php if ($data['jumlah'] != "-"): ?><?= "'$i',";?><?php endif; ?>
			<?php endforeach;?>
			]
		},
		yAxis: {
			title: {
				text: 'Jumlah Populasi'
			}
		},
		legend: {
			layout: 'vertical',
			enabled: false
		},
		plotOptions: {
			series: {
				colorByPoint: true
			},
			column: {
				pointPadding: 0,
				borderWidth: 0
			}
		},
		series: [{
			shadow:1,
			border:1,
			data: [
			<?php foreach ($main as $data): ?>
				<?php if (!in_array($data['nama'], array("TOTAL", "JUMLAH", "PENERIMA"))): ?>
					<?php if ($data['jumlah'] != "-"): ?>
						['<?= strtoupper($data['nama'])?>',<?= $data['jumlah']?>],
					<?php endif; ?>
				<?php endif; ?>
				<?php endforeach;?>]
			}]
		});

		$('#chart').removeAttr('hidden');
	}

	function pieType() {
		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'chart',
				plotBackgroundColor: null,
				plotBorderWidth: null,
				plotShadow: false
			},
			title: 0,
			plotOptions: {
				index: {
					allowPointSelect: true,
					cursor: 'pointer',
					dataLabels:
					{
						enabled: true
					},
					showInLegend: true
				}
			},
			legend: {
				layout: 'vertical',
				backgroundColor: '#FFFFFF',
				align: 'right',
				verticalAlign: 'top',
				x: -30,
				y: 0,
				floating: true,
				shadow: true,
				enabled:true
			},
			series: [{
				type: 'pie',
				name: 'Populasi',
				data: [
				<?php foreach ($main as $data): ?>
					<?php if (!in_array($data['nama'], array("TOTAL", "JUMLAH", "PENERIMA"))): ?>
						<?php if ($data['jumlah'] != "-"): ?>
							["<?= strtoupper($data['nama'])?>",<?= $data['jumlah']?>],
						<?php endif; ?>
					<?php endif; ?>
				<?php endforeach;?>
				]
			}]
		});

		$('#chart').removeAttr('hidden');
	}
</script>
