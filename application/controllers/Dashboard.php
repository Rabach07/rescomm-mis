<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {
	private $datah = array();
	private $data = array();

	public function __construct() {
        parent::__construct();
        // load model yang digunakan secara umum
        $this->load->model('web_model');
        $this->load->model('log_model');
        $this->load->model('hak_model');

        // data header
		$this->datah['menu'] = $this->user_model->get_menu($this->user_model->get_roleid());
		$this->datah['title'] = ucfirst( $this->router->method == 'index' ? $this->router->class : $this->router->method );
		$this->datah['aktif'] = array(
			'parent' => '#parent-' . ( $this->router->method == 'index' ? $this->router->class : $this->router->method ),
			'child' => '');
		$this->datah['menudesk'] = $this->hak_model->select(array('akses_nama' => strtolower($this->datah['title']) ), 1);
		$this->datah['daftarlog'] = $this->log_model->select(array(), 6);
		$this->datah['boxlognotif'] = $this->log_model->get_total(array('log_status' => 0));

		// data content
		$this->data['web'] = $this->web_model->select();
    }

	public function index() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/Dashboard/dashboard_view');
	}

	public function log() {
		$this->load->view('Backend/header_view', $this->datah);
		$this->load->view('Backend/dashboard_view');
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

	public function penelitian($param) {
		$this->datah['aktif']['child'] = '#child-' . $param;
		//echo "<script>alert('" . $param . "')</script>";
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
		$this->session->set_userdata('p3m_pesan_sukses', "Session Anda berhasil diakhiri");
		redirect('login');
	}

}
