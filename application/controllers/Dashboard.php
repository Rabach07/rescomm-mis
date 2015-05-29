<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	public function __construct() {
        parent::__construct();
        
    }

	public function index() {
		$view = 'Backend/Dashboard/' . $this->user_model->get_user_role() . '_view';
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view($view);
	}

	public function log() {
		$this->data['adalog'] = $this->log_model->get_total() > 0 ? TRUE : FALSE;
		$this->data['adaunread'] = $this->log_model->get_total(array('log_status' => 0)) > 0 ? TRUE : FALSE;
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/Log/log_view', $this->data);
	}

	public function notifikasi() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function laporan() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function reminder() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function berita() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function agenda() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function manajemen($param) {
		$this->datah['aktif']['child'] = '#child-' . $param;
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function berkas() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
	}

	public function logout() {
		$this->user_model->logout();
		$this->session->set_flashdata('p3m_pesan_sukses', "Session Anda berhasil diakhiri");
		redirect('login');
	}

}
