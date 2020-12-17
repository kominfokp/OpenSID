<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * File ini:
 *
 * View untuk modul Statistik Kependudukan
 *
 * donjo-app/views/statistik/penduduk_grafik_web.php,
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

<script type="text/javascript">
	const rawData_<?=$lap?> = Object.values(<?= json_encode($stat) ?>);
	const type_<?=$lap?> = '<?= $tipe == 1 ? 'column' : 'pie' ?>';
	const legend_<?=$lap?> = Boolean(!<?= ($tipe) ?>);
	let categories_<?=$lap?> = [];
	let data_<?=$lap?> = [];
	let i_<?=$lap?> = 1;
	let status_tampilkan_<?=$lap?> = true;
	for (const stat of rawData_<?=$lap?>) {
		if (stat.nama !== 'TOTAL' && stat.nama !== 'JUMLAH' && stat.nama != 'PENERIMA') {
			let filteredData = [stat.nama, parseInt(stat.jumlah)];
			categories_<?=$lap?>.push(i_<?=$lap?>);
			data_<?=$lap?>.push(filteredData);
			i_<?=$lap?>++;
		}
	}

	function tampilkan_nol(tampilkan = false) {
		if (tampilkan) {
			$(".nol").parent().show();
		} else {
			$(".nol").parent().hide();
		}
	}

	function toggle_tampilkan_<?=$lap?>() {
		$('#showData').click();
		tampilkan_nol(status_tampilkan_<?=$lap?>);
		status_tampilkan_<?=$lap?> = !status_tampilkan_<?=$lap?>;
		if (status_tampilkan_<?=$lap?>) $('#tampilkan').text('Tampilkan Nol');
		else $('#tampilkan').text('Sembunyikan Nol');
	}

	function switchType_<?=$lap?>() {
		var chartType = chart_<?=$lap?>.series[0].type;
		chart_<?=$lap?>.series[0].update({
			type: (chartType === 'pie') ? 'column' : 'pie'
		});

		$("#barType_<?=$lap?>").html((chartType === 'pie') ? 'Pie Cart' : 'Bar Graph');
	}

	$(document).ready(function () {
		tampilkan_nol(false);
		if (<?=$this->setting->statistik_chart_3d?>) {
			chart_<?=$lap?> = new Highcharts.Chart({
				chart: {
					renderTo: 'container_<?=$lap?>',
					options3d: {
						enabled: true,
						alpha: 45
					}
				},
				title: 0,
				yAxis: {
					showEmpty: false,
				},
				xAxis: {
					categories: categories_<?=$lap?>,
				},
				plotOptions: {
					series: {
						colorByPoint: true
					},
					column: {
						pointPadding: -0.1,
						borderWidth: 0,
						showInLegend: false,
						depth: 45
					},
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						showInLegend: true,
						depth: 45,
						innerSize: 70
					}
				},
				legend: {
					enabled: legend_<?=$lap?>
				},
				series: [{
					type: type_<?=$lap?>,
					name: 'Jumlah Populasi',
					shadow: 1,
					border: 1,
					data: data_<?=$lap?>
				}]
			});
		} else {
			chart_<?=$lap?> = new Highcharts.Chart({
				chart: {
					renderTo: 'container_<?=$lap?>'
				},
				title: 0,
				yAxis: {
					showEmpty: false,
				},
				xAxis: {
					categories: categories_<?=$lap?>,
				},
				plotOptions: {
					series: {
						colorByPoint: true
					},
					column: {
						pointPadding: -0.1,
						borderWidth: 0,
						showInLegend: false,
					},
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						showInLegend: true,
					}
				},
				legend: {
					enabled: legend_<?=$lap?>
				},
				series: [{
					type: type_<?=$lap?>,
					name: 'Jumlah Populasi',
					shadow: 1,
					border: 1,
					data: data_<?=$lap?>
				}]
			});
		}

		$('#showData').click(function () {
			$('tr.lebih').show();
			$('#showData').hide();
			tampilkan_nol(false);
		});

	});
</script>
<style>
	tr.lebih {
		display: none;
	}
</style>
<style>
	.input-sm {
		padding: 4px 4px;
	}

	@media (max-width:780px) {
		.btn-group-vertical {
			display: block;
		}
	}

	.table-responsive {
		min-height:275px;
	}
</style>

<!-- <div class="box box-danger">
	<div class="box-header with-border">
		<h3 class="box-title"> Grafik <?= $heading ?></h3>
		<div class="box-tools pull-right">
			<div class="btn-group-xs">
				<a class="btn btn-primary btn-xs" id="barType_<?=$lap?>" onclick="switchType_<?=$lap?>();">Bar Graph</a>
			</div>
		</div>
	</div>
	<div class="box-body">
		<div id="container_<?=$lap?>"></div>
		<div id="contentpane">
			<div class="ui-layout-north panel top"></div>
		</div>
	</div>
</div> -->

<div class="box box-danger">
	<div class="box-header with-border">
		<h3 class="box-title">Statistik Penduduk <?= $title_statistik ?></h3>
	</div>
	<div class="box-body">
		<div class="">
			<?php 
			if ($enable_filter) 
			{
			?>
			<form action="<?=$url_filter;?>" method="get">
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
				<!-- <input type="hidden" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" /> -->
			</form>
			<?php 
			}
			?>
		</div>
		<div class="table-responsive">
		<table class="table table-striped table-hover">
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
						<td class="text-right">'.nf($val['lakiLaki']).'</td>
						<td class="text-right">'.nf($val['perempuan']).'</td>
						<td class="text-right">'.nf($val['jumlah']).'</td>
						</tr>';

						$no++; 
					}

					echo '
						<tr>
							<td colspan="2">JUMLAH</td>
							<td class="text-right">'.nf($jml_laki_laki).'</td>
							<td class="text-right">'.nf($jml_perempuan).'</td>
							<td class="text-right">'.nf($jml_jml).'</td>
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
