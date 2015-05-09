<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	protected $datah = array();
	protected $data = array();

	function __construct() {
		parent::__construct();
		if(!$this->user_model->is_logged_in()) {
			// di redirect ke bagian login
			$this->session->set_flashdata('p3m_pesan_error', "Anda harus login untuk mengakses halaman: " . ucfirst( $this->router->class ) . "");
            $this->session->set_userdata('p3m_urlke', current_url());
			redirect('login');
		}

        // load model yang digunakan secara umum
        $this->load->model('web_model');
        $this->load->model('log_model');
        $this->load->model('hak_model');

        // data header
		$this->datah['menu'] = $this->user_model->get_menu($this->user_model->get_roleid());
		$this->datah['title'] = ucfirst( $this->router->class );
		$this->datah['aktif'] = array(
			'parent' => '#parent-' . $this->router->class,
			'child' => '');
		$this->datah['menudesk'] = $this->hak_model->select(array('akses_nama' => strtolower($this->datah['title']) ), 1);
		$this->datah['daftarlog'] = $this->log_model->select(array(), 6);
		$this->datah['boxlognotif'] = $this->log_model->get_total(array('log_status' => 0));
		$this->datah['web'] = $this->web_model->select();

		// data content
		$this->data['web'] = $this->web_model->select();

		// generate menu list
		// $datah['menu'] = $this->user_model->get_menu($this->user_model->get_roleid());
	}

	function cek_akses($kode_menu){
		if(!$this->user_model->get_akses($kode_menu)){
			redirect('dashboard/lenyap');
		}
	}
}