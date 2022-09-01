<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
	protected $id_sekolah = '';
	protected $id_siswa = '';
	public function __construct()
	{
		// Load the constructer from MY_Controller
		parent::__construct();
		$this->id_sekolah = $this->session->userdata('lms_siswa_id_sekolah');
		$this->id_siswa = $this->session->userdata('lms_siswa_id_siswa');
	}


	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Materi';

		// LOAD CONFIG PAGE
		$this->data['button_back'] = base_url('home');
		$this->data['judul_halaman'] = 'Materi Pelajaran';
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;

		// LOAD API 
		$result = curl_get('materi/pelajaran', ['id_sekolah' => $this->id_sekolah, 'id_siswa' => $this->id_siswa]);
		$mydata['result'] = $result->data;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_bab($id_pelajaran = NULL)
	{
		if ($id_pelajaran == NULL) {
			redirect('materi');
		}
		// LOAD API 
		$arr['id_sekolah'] = $this->id_sekolah;
		$arr['id_pelajaran'] = $id_pelajaran;
		$result = curl_get('materi/bab_materi/', $arr);
		// LOAD CONFIG PAGE
		$this->data['button_back'] = base_url('materi');
		$this->data['judul_halaman'] = 'Detail Bab';
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;
		// LOAD TITLE
		$mydata['title'] = 'Detail Bab';
		// LOAD MYDATA 
		$mydata['result'] = $result->data;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_bab', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_materi($id_materi = NULL)
	{
		if ($id_materi == NULL) {
			redirect('home');
		}
		// LOAD TITLE
		$mydata['title'] = 'Detail KBM';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/kbm/detail_materi.js"></script>';

		// LOAD CONFIG PAGE
		if ($_SERVER['HTTP_REFERER'] == NULL || $_SERVER['HTTP_REFERER'] == base_url('materi/detail_materi/' . $id_materi)) {

			$this->data['button_back'] = base_url('materi/detail_bab');
		} else {
			$this->data['button_back'] = $_SERVER['HTTP_REFERER'];
		}
		// LOAD API 
		$result = curl_get('materi/detail_materi', ['id_sekolah' => $this->id_sekolah, 'id_materi' => $id_materi]);
		$this->data['judul_halaman'] = 'Detail Materi';
		$this->data['config_hidden']['notifikasi'] = true;
		$this->data['config_hidden']['footer'] = true;

		// LOAD MYDATA
		$mydata['result'] = $result->data;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_materi', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
