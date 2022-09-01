<?php defined('BASEPATH') or exit('No direct script access allowed');

class Function_ctl extends MY_Welcome
{
    public function __construct()
    {
        // Load the constructer from MY_Controller
        parent::__construct();
        $this->id_sekolah = $this->session->userdata('lms_siswa_id_siswa');
        $this->id_siswa = $this->session->userdata('lms_siswa_id_sekolah');
    }

    public function ubah_password_proses()
    {
        $arrVar['nowpassword']  = 'Kata sandi lama';
        $arrVar['newpassword'] = 'Kata sandi baru';
        $arrVar['repeat_newpassword'] = 'Konfirmasi';
        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);
            if (!$$var) {
                $data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
                $arrAccess[] = false;
            } else {
                $arrAccess[] = true;
            }
        }

        if (in_array(false, $arrAccess)) {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }

        $request_data = [
            "id_sekolah" => $this->id_sekolah,
            "id_siswa" => $this->id_siswa,
            "old_password" => $nowpassword,
            "new_password" => $newpassword,
            "repeat_password" => $repeat_newpassword
        ];

        $result = curl_post('profil/edit_password', $request_data);
        $data['status'] = !$result->error;

        if (!$result->error) {
            $data['status'] = TRUE;
            $data['alert']['title'] = 'PEMBERITAHUAN';
            $data['redirect'] = base_url('profil');
        } else {
            $data['status'] = FALSE;
            $data['alert']['title'] = 'PERINGATAN';
        }

        $data['alert']['message'] = $result->message;
        echo json_encode($data);
        exit;
    }

    public function edit_profil_proses()
    {
        $arrVar['email'] = 'Email';
        $arrVar['agama'] = 'Agama';
        $arrVar['nama'] = 'Nama';
        $arrVar['username'] = 'ID Pengguna';
        foreach ($arrVar as $var => $value) {
            $$var = $this->input->post($var);
            if (!$$var) {
                $data['required'][] = ['req_' . $var, $value . ' tidak boleh kosong !'];
                $arrAccess[] = false;
            } else {
                $arrAccess[] = true;
            }
        }

        if (in_array(false, $arrAccess)) {
            $data['status'] = false;
            echo json_encode($data);
            exit;
        }
        $request_data = [
            "id_sekolah" => $this->id_sekolah,
            "id_siswa" => $this->id_siswa,
            "nama" => $nama,
            "username" => $username,
            "alamat" => $this->input->post('alamat'),
            "telp" => $this->input->post('telp'),
            "email" => $email,
            "id_agama" => $agama,
        ];

        $result = curl_post('profil/edit', $request_data);
        $data['status'] = !$error;
        if (!$result->error) {
            $data['status'] = TRUE;
            $data['alert']['title'] = 'PEMBERITAHUAN';
            $data['alert']['message'] = $result->message;
            $data['redirect'] = base_url('profil');
        } else {
            $data['status'] = FALSE;
            $data['alert']['title'] = 'PERINGATAN';
            $data['alert']['message'] = $result->message;
        }
        echo json_encode($data);
        exit;
    }

    public function edit_foto()
    {
        $arr['id_sekolah'] = $this->id_sekolah;
        $arr['id_siswa'] = $this->id_siswa;
        $arrFile['foto'] = $_FILES['foto'];

        $result = curl_post('profil/edit_foto/', $arr, $arrFile);

        echo json_encode($result);
    }
}
