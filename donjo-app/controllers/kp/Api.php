<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	public function kunjungan() {
		$kunjungan_hari_ini = $this->db->query("SELECT Jumlah AS Visitor FROM sys_traffic WHERE Tanggal=DATE(NOW()) LIMIT 1")->row_array();

		echo json_encode($kunjungan_hari_ini);
		exit;
	}

}

/* End of file Api.php */
/* Location: .//D/laragon/www/kominfo/desaku/sid/donjo-app/controllers/kp/Api.php */