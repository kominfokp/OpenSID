<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * File ini:
 *
 * Model untuk modul Statistik Kependudukan
 *
 * donjo-app/models/Laporan_penduduk_model.php,
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

class Kp_laporan_penduduk_model extends MY_Model {

	private $lap;

	public function __construct()
	{
		parent::__construct();
	}

	public function get_data_desa()
	{
		$sql = "SELECT * FROM config WHERE 1";
		$query = $this->db->query($sql);
		return $query->row_array();
	}

	public function link_statistik_penduduk()
	{
		$statistik = [
			// "statistik/13" => "Umur (Rentang)",
			// "statistik/15" => "Umur (Kategori)",
			// "statistik/0" => "Pendidikan Dalam KK",
			// "statistik/14" => "Pendidikan Sedang Ditempuh",
			// "statistik/1" => "Pekerjaan",
			// "statistik/2" => "Status Perkawinan",
			// "statistik/3" => "Agama",
			// "statistik/4" => "Jenis Kelamin",
			// "statistik/5" => "Warga Negara",
			// "statistik/6" => "Status Penduduk",
			// "statistik/7" => "Golongan Darah",
			// "statistik/9" => "Penyandang Cacat",
			// "statistik/10" => "Penyakit Menahun",
			// "statistik/16" => "Akseptor KB",
			// "statistik/17" => "Akte Kelahiran",
			// "statistik/18" => "Kepemilikan KTP",
			// "statistik/19" => "Jenis Asuransi",
			// "statistik/covid" => "Status Covid",
			// "statistik/bantuan_penduduk" => "Penerima Bantuan (Penduduk)",
			//dari kulonprogo
			// "dpt" 			=> "Calon Pemilih",
			// "statistik/99"  => "Stat Hbkel", //statistik/19
			// "statistik/20"  => "Jenis Kelamin Kepala Keluarga",
			// "statistik/91"  => "Pendidikan Kepala Keluarga",
			// "statistik/22"  => "Pekerjaan Kepala Keluarga",
			// "statistik/23"  => "Umur Kepala Keluarga",
			
			// MODIF KULON PROGO
			"kp/statistik?kategori=penduduk&jenis_statistik=101"=>"Menurut Dusun",
			"kp/statistik?kategori=penduduk&jenis_statistik=102"=>"Menurut Agama ",
			"kp/statistik?kategori=penduduk&jenis_statistik=103"=>"Menurut Gol Darah ",
			"kp/statistik?kategori=penduduk&jenis_statistik=104"=>"Menurut Jenis Kelamin ",
			"kp/statistik?kategori=penduduk&jenis_statistik=105"=>"Menurut Pekerjaan ",
			"kp/statistik?kategori=penduduk&jenis_statistik=106"=>"Menurut Pendidikan ",
			"kp/statistik?kategori=penduduk&jenis_statistik=107"=>"Menurut Status Hubungan Keluarga ",
			"kp/statistik?kategori=penduduk&jenis_statistik=108"=>"Menurut Status Perkawinan ",
			"kp/statistik?kategori=penduduk&jenis_statistik=109"=>"Menurut Kategori Umur ",


			// "kp/statistik?jenis_statistik=105"=>"Menurut KK Jenis Kelamin ",
			// "kp/statistik?jenis_statistik=106"=>"Menurut KK Pekerjaan ",
			// "kp/statistik?jenis_statistik=107"=>"Menurut KK Pendidikan ",
			// "kp/statistik?jenis_statistik=108"=>"Menurut KK Umur ",
		];

		return $statistik;
	}

	public function link_statistik_keluarga()
	{
		$statistik = [
			"kp/statistik?kategori=keluarga&jenis_statistik=110"=>"Menurut KK Jenis Kelamin ",
			"kp/statistik?kategori=keluarga&jenis_statistik=111"=>"Menurut KK Pekerjaan ",
			"kp/statistik?kategori=keluarga&jenis_statistik=112"=>"Menurut KK Pendidikan ",
			"kp/statistik?kategori=keluarga&jenis_statistik=113"=>"Menurut KK Umur ",
		];

		return $statistik;
	}

	public function dukcapil_stat_per_dusun() {
		$data = $this->get_data_desa();

	
		$kodeProp = intval($data['kode_propinsi']);
		$kodeKab = intval($data['kode_kabupaten']);
		$kodeKec = intval($data['kode_kecamatan']);
		$kodeKel = intval($data['kode_desa']);
		// $urlDwhAgregat = $this->config->item('url_dwh_agregat');

		$url_statistik_dukcapil = "http://192.168.65.23/api/kategori/agregatDusun?noProp=".$kodeProp."&noKab=".$kodeKab."&noKec=".$kodeKec."&noKel=".$kodeKel;
		
		$ch = curl_init($url_statistik_dukcapil);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);                                                                
        $hasil = curl_exec($ch);

        if ($hasil === false)
        {
            return curl_error($ch); 
        } 
        else 
        { 
			$hasil_data = json_decode($hasil, true, 512);
		}

		curl_close($ch);
	
		return $hasil_data;
	}

	public function dukcapil_stat($kode_stat, $tahun=0, $semester=0) {
		$data = $this->get_data_desa();

	
		$kodeProp = intval($data['kode_propinsi']);
		$kodeKab = intval($data['kode_kabupaten']);
		$kodeKec = intval($data['kode_kecamatan']);
		$kodeKel = intval($data['kode_desa']);
		// $urlDwhAgregat = $this->config->item('url_dwh_agregat');
		
		if ($kode_stat == 102) {
			$url_statistik_dukcapil = "http://192.168.65.23/api/kategori/agama?tahun=".$tahun."&semester=".$semester."&noProp=".$kodeProp."&noKab=".$kodeKab."&noKec=".$kodeKec."&noKel=".$kodeKel;
		} else if ($kode_stat == 103) {
			$url_statistik_dukcapil = "http://192.168.65.23/api/kategori/golDarah?tahun=".$tahun."&semester=".$semester."&noProp=".$kodeProp."&noKab=".$kodeKab."&noKec=".$kodeKec."&noKel=".$kodeKel;
		} else if ($kode_stat == 104) {
			$url_statistik_dukcapil = "http://192.168.65.23/api/kategori/jenisKelamin?tahun=".$tahun."&semester=".$semester."&noProp=".$kodeProp."&noKab=".$kodeKab."&noKec=".$kodeKec."&noKel=".$kodeKel;
		} else if ($kode_stat == 105) {
			$url_statistik_dukcapil = "http://192.168.65.23/api/kategori/pekerjaan?tahun=".$tahun."&semester=".$semester."&noProp=".$kodeProp."&noKab=".$kodeKab."&noKec=".$kodeKec."&noKel=".$kodeKel;
		} else if ($kode_stat == 106) {
			$url_statistik_dukcapil = "http://192.168.65.23/api/kategori/pendidikan?tahun=".$tahun."&semester=".$semester."&noProp=".$kodeProp."&noKab=".$kodeKab."&noKec=".$kodeKec."&noKel=".$kodeKel;
		} else if ($kode_stat == 107) {
			$url_statistik_dukcapil = "http://192.168.65.23/api/kategori/statHbkel?tahun=".$tahun."&semester=".$semester."&noProp=".$kodeProp."&noKab=".$kodeKab."&noKec=".$kodeKec."&noKel=".$kodeKel;
		} else if ($kode_stat == 108) {
			$url_statistik_dukcapil = "http://192.168.65.23/api/kategori/statKawin?tahun=".$tahun."&semester=".$semester."&noProp=".$kodeProp."&noKab=".$kodeKab."&noKec=".$kodeKec."&noKel=".$kodeKel;
		} else if ($kode_stat == 109) {
			$url_statistik_dukcapil = "http://192.168.65.23/api/kategori/umur?tahun=".$tahun."&semester=".$semester."&noProp=".$kodeProp."&noKab=".$kodeKab."&noKec=".$kodeKec."&noKel=".$kodeKel;
		} else if ($kode_stat == 110) {
			$url_statistik_dukcapil = "http://192.168.65.23/api/kategori/kkJenisKelamin?tahun=".$tahun."&semester=".$semester."&noProp=".$kodeProp."&noKab=".$kodeKab."&noKec=".$kodeKec."&noKel=".$kodeKel;
		} else if ($kode_stat == 111) {
			$url_statistik_dukcapil = "http://192.168.65.23/api/kategori/kkPekerjaan?tahun=".$tahun."&semester=".$semester."&noProp=".$kodeProp."&noKab=".$kodeKab."&noKec=".$kodeKec."&noKel=".$kodeKel;
		} else if ($kode_stat == 112) {
			$url_statistik_dukcapil = "http://192.168.65.23/api/kategori/kkPendidikan?tahun=".$tahun."&semester=".$semester."&noProp=".$kodeProp."&noKab=".$kodeKab."&noKec=".$kodeKec."&noKel=".$kodeKel;
		} else if ($kode_stat == 113) {
			$url_statistik_dukcapil = "http://192.168.65.23/api/kategori/kkumur?tahun=".$tahun."&semester=".$semester."&noProp=".$kodeProp."&noKab=".$kodeKab."&noKec=".$kodeKec."&noKel=".$kodeKel;
		} 
		
		$ch = curl_init($url_statistik_dukcapil);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);                                                                
        $hasil = curl_exec($ch);

        if ($hasil === false)
        {
            return curl_error($ch); 
        } 
        else 
        { 
			$hasil_data = json_decode($hasil, true, 512);
		}

		curl_close($ch);
	
		return $hasil_data;
	}
}

?>
