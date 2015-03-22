<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		$this->load->view('welcome_message');
	}

	public function db() {
		//using our mysql db config, like we normally do	
		//$query = $this->db->query("SELECT * FROM up_dosen");
		//var_dump($query->result());

		//load the pdo db config 
		$this->pdo = $this->load->database('pdo', true);

		//using the pdo config
		$stmt = $this->pdo->query("SELECT * FROM up_dosen");  
		var_dump($stmt->result());

		//using the pdo config with active record
		$stmt = $this->pdo->get("up_dosen");  
		var_dump($stmt->result());	
	}
}
