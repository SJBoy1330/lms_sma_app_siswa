<?php defined('BASEPATH') or exit('No direct script access allowed');

class Controller_ctl extends MY_Frontend
{
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
		$mydata['title'] = 'Jadwal';
		// LOAD DATA
		if ($this->input->get('hari')) {
			$day = $this->input->get('hari');
		} else {
			$day = date('N');
		}
		$mydata['result'] = curl_get('jadwal/lengkap', ['id_sekolah' => $this->id_sekolah, 'id_kelas' => 1])->data;

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/kbm/jadwal.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('jadwal', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_kbm($id_pelajaran = NULL, $id_kelas = NULL, $id_staf = NULL)
	{
		if ($id_pelajaran == NULL || $id_kelas == NULL || $id_staf == NULL) {
			redirect('home');
		}
		// LOAD TITLE
		$mydata['title'] = 'Detail KBM';

		// LOAD CONFIG PAGE
		$this->data['judul_halaman'] = 'Detail KBM';
		$this->data['button_back'] = base_url('home');
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;

		// LOAD API
		$request['id_sekolah'] = $this->id_sekolah;
		$request['id_pelajaran'] = $id_pelajaran;
		$request['id_staf'] = $id_staf;
		$request['id_kelas'] = $id_kelas;
		$request['tanggal'] = date('Y-m-d');
		$result = curl_get('kbm/today', $request);
		// LOAD MYDATA
		$mydata['tanggal'] = day_from_number(date('N')) . ', ' . date('d') . ' ' . month_from_number(date('m')) . ' ' . date('Y');
		$mydata['result'] = $result->data;
		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/kbm/detail_kbm.css') . '">';
		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_kbm', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
