<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* library untuk input pencacatan log
*/
class Jurusan {

	function __construct() {
		// get instance
		$this->CI = & get_instance();
        // load model 
        $this->CI->load->model('user_model');
        $this->user_model = & $this->CI->user_model;
	}

	/*
	* fungsi select
	*/
	function select() {
		$userid = $this->CI->session->userdata('user_id');
		$user = $this->CI->session->userdata('user_login');
		$role = $this->CI->session->userdata('role_id');
		$result = $this->user_model->select(array('user_id' => $userid))->row();
		$warna = '';

		switch ($result->jurusan_id) {
			case '1': $warna = 'yellow'; break; // elka
			case '2': $warna = 'green'; break; // telkom
			case '3': $warna = 'red'; break; // elin
			case '4': $warna = 'blue'; break; // it
			case '5': $warna = 'yellow'; break; // meka
			case '6': $warna = 'blue'; break; // tekkom
			case '7': $warna = 'purple'; break; // mmb
			case '8': $warna = 'green'; break; // spe
			case '9': $warna = 'purple'; break; // game
		}

		return $warna;
	}
}

?>