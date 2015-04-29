<?php defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Session extends CI_Session {

	public function __construct() {
	    parent::__construct();
	}

	function sess_destroy() {
	    //write your update here 
	    $this->CI->db->update('tb_user', array('user_status' => 1), array('user_id' => $this->user_model->userid()));

	    //call the parent 
	    parent::sess_destroy();
	}

}

?>