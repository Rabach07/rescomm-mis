<?php  defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	function __construct() {
		parent::__construct();
		if(!$this->user_model->is_logged_in()) {
			// di redirect ke bagian login
			$newdata = array(
                'p3m_pesan_error' => "Anda harus login untuk mengakses halaman: " . $this->router->class . "",
                'p3m_urlke' => current_url()
            );
            $this->session->set_userdata($newdata);
			redirect('login');
		} 
	}
}