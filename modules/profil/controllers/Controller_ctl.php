<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	protected $id_sekolah = '';
	protected $id_siswa = '';
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		$this->id_sekolah = $this->session->userdata('lms_siswa_id_siswa');
		$this->id_siswa = $this->session->userdata('lms_siswa_id_sekolah');
	}


	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Profil';

		// Meta Data
		$mydata['id_sekolah'] = $this->id_sekolah;
		$mydata['id_siswa'] = $this->id_siswa;

		$mydata['data'] = curl_get("profil", array('id_sekolah' => $this->id_sekolah, 'id_siswa' => $this->id_siswa))->data;

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-dewa.css') . '">';
		// $this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/loader.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/profil/uploadfoto.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function ubah_profil()
	{
		// LOAD TITLE
		$mydata['title'] = 'Ubah Profil';

		$result = curl_get(
			'profil',
			[
				"id_sekolah" => $this->id_sekolah,
				"id_siswa" => $this->id_siswa
			]
		);
		$mydata['result'] = $result->data;

		$agama = curl_get(
			'attribut/agama',
			[
				"id_sekolah" => $this->id_sekolah
			]
		);
		$mydata['agama'] = $agama->data;

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-dewa.css') . '">';

		// LOAD CONFIG PAGE 
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;
		$this->data['button_back'] = base_url('profil');
		$this->data['judul_halaman'] = 'Ubah Profil';
		$this->data['right_button']['profil'] = true;

		// LOAD VIEW
		$this->data['content'] = $this->load->view('ubah_profil', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function ubah_password()
	{
		// LOAD TITLE
		$mydata['title'] = 'Ubah Kata Sandi';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-dewa.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/profil/ubahpassword.js"></script>';

		// LOAD CONFIG HALAMAN
		$this->data['judul_halaman'] = 'Ubah Kata Sandi';
		$this->data['button_back'] = base_url('profil');
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;
		$this->data['right_button']['ubah_password'] = true;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('ubah_password', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function laporan_presensi()
	{
		// LOAD TITLE
		$mydata['title'] = 'Laporan Presensi';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/laporan/laporan_presensi.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/laporan/laporan_presensi.js"></script>';

		// LOAD CONFIG PAGE
		$this->data['judul_halaman'] = 'Laporan Presensi';
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;
		$this->data['button_back'] = base_url('profil');
		// LOAD VIEW
		$this->data['content'] = $this->load->view('laporan_presensi', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function laporan_ujian()
	{
		// LOAD TITLE
		$mydata['title'] = 'Laporan Ujian';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-dewa.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/laporan/laporan_ujian.js"></script>';


		// LOAD CONFIG PAGE
		$this->data['judul_halaman'] = 'Laporan Ujian';
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['right_button']['laporan_ujian'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;
		$this->data['button_back'] = base_url('profil');

		// LOAD API 
		$result = curl_get('ujian/laporan/', ['id_sekolah' => $this->id_sekolah, 'id_siswa' => $this->id_siswa]);

		$mydata['result'] = $result->data;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('laporan_ujian', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function tentang_sekolah()
	{
		// LOAD TITLE
		$mydata['title'] = 'Tentang Sekolah';

		$result = curl_get(
			'profil/tentang_sekolah',
			[
				"id_sekolah" => $this->id_sekolah,
			]
		);
		$mydata['data_sekolah'] = $result->data->sekolah;
		$mydata['count_siswa'] = $result->data->jumlah->siswa;
		$mydata['count_staf'] = $result->data->jumlah->staf;

		// LOAD CONFIG HALAMAN
		$this->data['button_back'] = base_url('profil');
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;
		$this->data['judul_halaman'] = 'Tentang Sekolah';

		// HIDDEN FOOTER
		$mydata['config_hidden']['footer'] = true;
		$mydata['config_hidden']['button_back'] = true;

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-dewa.css') . '">';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('tentang_sekolah', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function bantuan()
	{
		// LOAD TITLE
		$mydata['title'] = 'Bantuan';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/style-dewa.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/profil/bantuan.js"></script>';


		// LOAD API 
		$result = curl_get(
			'attribut/bantuan/',
			NULL
		);
		$mydata['result'] = $result->data;
		// LOAD CONFIG HALAMAN
		$this->data['button_back'] = base_url('profil');
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['judul_halaman'] = 'Bantuan';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('bantuan', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function get_report_absen()
	{
		$date = strtotime($this->input->post('date'));
		$hari = day_from_number(date('N', $date));
		$bulan = month_from_number(date('m', $date));
		$mydata['tanggal'] = $hari . ', ' . date('d', $date) . ' ' . $bulan . ' ' . date('Y', $date);

		// LOAD API 
		$data = curl_get(
			'presensi/report_siswa/',
			[
				'id_sekolah' => $this->id_sekolah,
				'id_siswa' => $this->id_siswa,
				'tanggal' => date('Y-m-d', $date)
			]
		);
		$mydata['result'] = $data->data;
		$this->load->view('display/laporan_presensi_siswa', $mydata);
	}

	public function get_detail_bantuan()
	{
		$id_bantuan = $this->input->post('id_bantuan');
		// LOAD API 
		$result = curl_get(
			'attribut/bantuan/',
			['id_bantuan' => $id_bantuan]
		);

		$this->load->view('display/modal_detail_bantuan', $result->data);
	}
}
