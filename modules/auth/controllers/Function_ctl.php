<?php defined('BASEPATH') or exit('No direct script access allowed');

class Function_ctl extends MY_Welcome
{
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
    }

    public function login_proses()
    {
        $arrVar['kode_sekolah']         = 'Kode sekolah';
        $arrVar['username']    = 'ID Pengguna';
        $arrVar['kata_sandi'] = 'Kata sandi';
        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);

            if (!$$var) {
                $data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
                $arrAccess[] = false;
            } else {
                $arrAccess[] = true;
            }
        }

        if (!in_array(false, $arrAccess)) {
            // CURL POST
            $arrPost['kode_sekolah'] = $kode_sekolah;
            $arrPost['username'] = $username;
            $arrPost['password'] = $kata_sandi;
            $response = curl_post('login', $arrPost, 0);
            if ($response->status == 200) {
                $arrSession['lms_siswa_id_siswa'] = $response->data->id_siswa;
                $arrSession['lms_siswa_id_sekolah'] = $response->data->id_sekolah;
                $arrSession['lms_siswa_role'] = $response->data->role;


                $this->session->set_userdata($arrSession);
                $data['status'] = TRUE;
                $data['alert']['title'] = 'PEMBERITAHUAN';
                $data['alert']['message'] = $response->message;
                $data['redirect'] = base_url('home');
                echo json_encode($data);
                exit;
            } else {
                $data['status'] = FALSE;
                $data['alert']['title'] = 'PERINGATAN';
                $data['alert']['message'] = $response->message;
                echo json_encode($data);
                exit;
            }
        } else {
            $data['status'] = FALSE;
            echo json_encode($data);
            exit;
        }
    }
}
