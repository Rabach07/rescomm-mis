<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index() {
		if(!$this->user_model->is_logged_in()){
            if($this->session->userdata('p3m_pesan')) {
                $data['error'] = $this->session->userdata('p3m_pesan');
                $this->session->unset_userdata('p3m_pesan');
                $this->load->view('Backend/login_view',$data);
            } else {
                $this->load->view('Backend/login_view');
            }
		}else{
            redirect('dashboard');
		}
	}

	public function dologin() {
		$this->load->library('form_validation');
        // mengambil input dari form daftar dan menetapkan rule
        $this->form_validation->set_rules('l_username', 'Username','trim|required|strip_tags');
        $this->form_validation->set_rules('l_password', 'Password','trim|required|strip_tags');
        
        if ($this->form_validation->run() == TRUE) {
            //Jika sukses
            $username = addslashes($this->input->post('l_username', TRUE));
          	$password = addslashes($this->input->post('l_password', TRUE));
          	$ingat = addslashes($this->input->post('l_ingat', TRUE)) == "ingat" ? TRUE : FALSE;
            
            $flag = $this->user_model->login($username, $password, $ingat);

            if(!$flag) {
            	$this->session->set_userdata('p3m_pesan', $this->user_model->error_messages());
            	redirect('login');
            } else {
            	redirect('dashboard');
            }
            //redirect('daftar');

        } else {
        	$this->session->set_userdata('p3m_pesan', validation_errors());
            redirect('login');
        	// $this->load->view('Backend/daftar_view');
        }
	}

    public function lupa() {
        // ambil value dari form
        $uname = $this->input->post('username');
        $pass1 = $this->input->post('password');
        $pass2 = $this->input->post('password2');
        
        $cekuser = $cekpass = FALSE;
        $pesan = "";
        
        $data = array(
            'user_name' => $uname
        );
        $cek = $this->model_user->reset($data);
        if(!is_null($cek)) {
            $cekuser = TRUE;
            if($pass1 == $pass2) {
                $cekpass = TRUE;
                redirect('auth');
            }
        }
        
        if(!$cekuser) $pesan = "Username tidak terdaftar";
        elseif(!$cekpass) $pesan = "Password tidak sama";

        $newdata = array(
            'ukm_pesan' => $pesan
        );
        $this->session->set_userdata($newdata);
        redirect('auth/fals');
    }

}
