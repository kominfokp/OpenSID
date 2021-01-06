<?php  if(!defined('BASEPATH')) exit('No direct script access allowed');

class Umkm extends Admin_Controller {

	public function __construct()
	{
		parent::__construct();
		session_start();
		$this->load->helper(array('form', 'url','download'));
		$this->load->model('header_model');
		$this->load->model('web_dokumen_model');
		$this->load->model('config_model');
		$this->load->model('pamong_model');
		$this->load->model('referensi_model');
	}

	public function get_data() {
        // $url = 'http://sidoharjo-kulonprogo.desa.id/index.php/apis/get_nik/' . $nik;
        $url = 'http://umkm.kulonprogokab.go.id/index.php/front/api_produkumkm';

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

        $hasil = curl_exec($ch);
        if ($hasil === false) {
            echo curl_error($ch);
        }
        error_reporting(0);

        return $hasil;
  	}

	public function produk_umkm()
	{
		$data = $this->includes;
		$this->_get_common_data($data);

		$ambil_data = $this->get_data();
		echo j($ambil_data); exit();
        $data['datalist'] = json_decode($ambil_data, true);
       	exit();
		$data['p'] = "produk_umkm";
		$this->set_template('layouts/perangkat_desa.tpl.php');
		$this->load->view($this->template,$data);
	}
}