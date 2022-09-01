<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php';

class Attribut extends REST_Controller {

	public function __construct() {
        parent::__construct();     

        $this->load->config('jwt');
        $this->load->library('Authorization_Token');

        
    }


	public function agama_get(){
        $id_sekolah = $this->input->get('id_sekolah');
        if (!isset($id_sekolah)) {
            $response['status'] = 504;
            $response['error'] = true;
            $response['message']= 'Id sekolah tidak boleh kosong!';
            $this->response($response);
            exit(0);
        }
        $sekolah = $this->db->get_where('sekolah',['id_sekolah' => $id_sekolah,'status' => 'Y', 'deleted' => 'N'])->row();
        
        $result = $this->action_m->get_all($sekolah->server,'agama');
        $response['status'] = 200;
        $response['error'] = false;
        $response['data']= $result;
        $this->response($response);
        exit(0);
    }   
}