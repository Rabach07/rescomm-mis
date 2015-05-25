<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct() {
        parent::__construct();
        // load model yang digunakan secara umum
        $this->load->model('web_model');
        $this->load->model('log_model');
        $this->load->model('hak_model');
    }

	public function index() {

	}

	public function get_avatar() {
		echo base_url('public/avatar') . '/' . $this->user_model->get_avatar();
	}

	public function coba() {
		$this->load->view('Backend/coba_view');
	}

}
