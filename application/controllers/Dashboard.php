<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function index() {
		$this->load->view('Backend/header_view');
		$this->load->view('Backend/dashboard_view');
	}

	public function log() {
		$this->load->view('Backend/header_view');
		$this->load->view('Backend/dashboard_view');
	}

	public function logout() {
		$this->user_model->logout();
		redirect('login');
	}

}
