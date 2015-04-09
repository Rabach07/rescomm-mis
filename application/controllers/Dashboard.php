<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	public function index() {
		$datah['menu'] = $this->user_model->get_menu($this->user_model->get_roleid());
		$this->load->view('Backend/header_view', $datah);
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
