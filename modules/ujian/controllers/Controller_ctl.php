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
		is_logged_in();
	}


	public function index()
	{
		// LOAD TITLE
		$mydata['title'] = 'Materi';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/ujian/ujian.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/tablink_1.js"></script>';
		// LOAD API
		$result = curl_get('ujian', ['id_sekolah' => $this->id_sekolah, 'id_siswa' => $this->id_siswa]);
		// CONFIG HALAMAN
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;
		$this->data['judul_halaman'] = 'Ujian';
		$this->data['khusus']['ujian'] = TRUE;
		$this->data['text']['white'] = TRUE;
		$this->data['button_back'] = base_url('home');
		// LOAD MYDATA
		$mydata['result_fresh'] = $result->data->fresh;
		$mydata['result_old'] = $result->data->old;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('index', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function detail_ujian($id_paket_ujian = NULL)
	{
		if ($id_paket_ujian == NULL) {
			redirect('ujian');
		}
		// LOAD TITLE
		$mydata['title'] = 'Detail Ujian';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/ujian/ujian.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/tablink_1.js"></script>';
		// LOAD CONFIG
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;
		$this->data['judul_halaman'] = 'Detail ujian';
		$this->data['khusus']['detail_ujian'] = TRUE;
		$this->data['text']['white'] = TRUE;
		$this->data['button_back'] = base_url('ujian');
		// LOAD API
		$result = curl_get('ujian/detail/', ['id_sekolah' => $this->id_sekolah, 'id_paket_ujian' => $id_paket_ujian]);

		// LOAD MYDATA 
		$mydata['result'] = $result->data;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('detail_ujian', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function exam()
	{
		// LOAD TITLE
		$mydata['title'] = 'Exam';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/ujian/ujian.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/tablink_2.js"></script>';
		// LOAD CONFIG
		$this->data['config_hidden']['notifikasi'] = TRUE;
		$this->data['config_hidden']['footer'] = TRUE;
		$this->data['judul_halaman'] = 'Paket ujian 1';
		$this->data['button_back']['khusus']['ujian'] = true;
		// LOAD VIEW
		$this->data['content'] = $this->load->view('exam', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}

	public function pembahasan()
	{
		// LOAD TITLE
		$mydata['title'] = 'Pembahasan';

		// LOAD CSS
		$this->data['css_add'][] = '<link rel="stylesheet" href="' . base_url('assets/css/page/ujian/ujian.css') . '">';

		// LOAD JS
		$this->data['js_add'][] = '<script src="' . base_url() . 'assets/js/page/ujian/tablink_3.js"></script>';

		// LOAD VIEW
		$this->data['content'] = $this->load->view('pembahasan', $mydata, TRUE);
		$this->display($this->input->get('routing'));
	}
}
