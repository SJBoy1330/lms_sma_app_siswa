<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH . 'libraries/REST_Controller.php';

class Profil extends REST_Controller {

	public function __construct() {
        parent::__construct();     

        $this->load->config('jwt');
        $this->load->library('Authorization_Token');

        
    }


	public function agama_get(){
        $result = $this->db->get_where('agama');
        $response['status'] = 200;
        $response['error'] = false;
        $response['data']= $result;
        $this->response($response);
        exit(0);
    }   
}