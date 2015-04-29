<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Lenyap extends MY_Controller {
	public function __construct() {
        parent::__construct();
        
    }

    public function index() {
    	$this->load->view('Backend/header_view', $this->datah);
        $this->load->view('Backend/lenyap_view', $this->data);
    }

}