<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * File ini:
 *
 * Controller untuk modul Statistik Kependudukan
 *
 * donjo-app/controllers/statistik.php,
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

class Statistik extends Admin_Controller {

	private $_header;
	private $_list_session;

	public function __construct()
	{
		parent::__construct();
		$this->load->model([
			'kp/kp_laporan_penduduk_model'=>'kp_laporan_penduduk_model', 
			'header_model',
			'config_model'
		]);

		$this->_header = $this->header_model->get_data();
		$this->modul_ini = 3;
		$this->sub_modul_ini = 27;
	}

	public function index()
	{

		$data['list_statistik_penduduk'] = $this->kp_laporan_penduduk_model->link_statistik_penduduk();
		$data['list_statistik_keluarga'] = $this->kp_laporan_penduduk_model->link_statistik_keluarga();
		$data['kategori'] = $this->input->get('kategori');
		if (empty($data['kategori'])) {
			$data['kategori'] = "penduduk";
		}

		$jenis_statistik = intval($this->input->get('jenis_statistik'));
		$tahun = intval($this->input->get('tahun'));
		$semester = intval($this->input->get('semester'));

		if (empty($tahun)) {
			$tahun = date('Y')-1;
		}

		if (empty($semester)) {
			$semester = 2;
		}

		$combobox_tahun = [''=>'-'];
		for ($i = date('Y') - 5; $i <= date('Y'); $i++) {
			$combobox_tahun[$i] = $i;
		}

		$combobox_semester = [
			''=>'-',
			'1'=>'Semester 1',
			'2'=>'Semester 2'
		];

		$get = $this->input->get();

		$csrf = array(
			'name' => $this->security->get_csrf_token_name(),
			'hash' => $this->security->get_csrf_hash()
		);

		$url_filter = base_url().'index.php/kp/statistik?'.http_build_query($get);

		$data_statistik = $this->kp_laporan_penduduk_model->dukcapil_stat($jenis_statistik, $tahun, $semester);
		$enable_filter = true;

		if ($jenis_statistik == 101) {
			$data_statistik = $this->kp_laporan_penduduk_model->dukcapil_stat_per_dusun();
			$field_label = "alamat";
			$enable_filter = false;
		} else if ($jenis_statistik == 102) {
			$field_label = "kategori";
		} else if ($jenis_statistik == 103) {
			$field_label = "kategori";
		} else if ($jenis_statistik == 104) {
			$field_label = "kategori";
		} else if ($jenis_statistik == 105) {
			$field_label = "kategori";
		} else if ($jenis_statistik == 106) {
			$field_label = "kategori";
		} else if ($jenis_statistik == 107) {
			$field_label = "kategori";
		} else if ($jenis_statistik == 108) {
			$field_label = "kategori";
		} else if ($jenis_statistik == 109) {
			$field_label = "kategori";
		} else if ($jenis_statistik == 110) {
			$field_label = "kategori";
		} else if ($jenis_statistik == 111) {
			$field_label = "kategori";
		} else if ($jenis_statistik == 112) {
			$field_label = "kategori";
		} else if ($jenis_statistik == 113) {
			$field_label = "kategori";
		}

		// echo json_encode($data_statistik);
		// exit;

		$data['field_label'] = $field_label;
		$data['data_statistik'] = $data_statistik;

		$data['combobox_tahun'] = $combobox_tahun;
		$data['combobox_semester'] = $combobox_semester;
		$data['url_filter'] = $url_filter;
		$data['csrf'] = $csrf;
		$data['tahun'] = $tahun;
		$data['semester'] = $semester;
		$data['jenis_statistik'] = $jenis_statistik;
		$data['enable_filter'] = $enable_filter;

		$data['title_statistik'] = $data['list_statistik_penduduk']['kp/statistik?kategori=penduduk&jenis_statistik='.$jenis_statistik];
		if (empty($data['title_statistik'])) {
			$data['title_statistik'] = $data['list_statistik_keluarga']['kp/statistik?kategori=keluarga&jenis_statistik='.$jenis_statistik];
		}


		$this->load->view('header', $this->_header);
		$this->load->view('nav');
		$this->load->view('kp/statistik/penduduk', $data);
		$this->load->view('footer');
	}

}