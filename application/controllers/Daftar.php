<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	
	public function index() {
        if($this->session->userdata('p3m_pesan_error')) {
            $data['error'] = $this->session->userdata('p3m_pesan_error');
            $this->session->unset_userdata('p3m_pesan_error');
            $this->load->view('Backend/daftar_view',$data);
        } else if($this->session->userdata('p3m_pesan_sukses')) {
            $data['sukses'] = $this->session->userdata('p3m_pesan_sukses');
            $this->session->unset_userdata('p3m_pesan_sukses');
            $this->load->view('Backend/daftar_view',$data);
        } else {
            $this->load->view('Backend/daftar_view');
        }
	}

	// fungsi untuk daftar
    public function buatakun() {
        $this->load->library('form_validation');
        // mengambil input dari form daftar dan menetapkan rule
        $this->form_validation->set_rules('d_email', 'Email','trim|required|strip_tags|valid_email|callback_cek_email');
        $this->form_validation->set_rules('d_username', 'Username','trim|required|strip_tags|min_length[3]|callback_cek_uname');
        $this->form_validation->set_rules('d_pass', 'Password','trim|required|strip_tags|matches[d_confpass]|min_length[5]');
        $this->form_validation->set_rules('d_confpass', 'Konfirmasi Password','trim|required|strip_tags');
        $this->form_validation->set_rules('d_cek', 'Menyetujui Persyaratan','required');
        
        if ($this->form_validation->run() == TRUE) {
            //Jika sukses
            $username = addslashes($this->input->post('d_username', TRUE));
          	$email = addslashes($this->input->post('d_email', TRUE));
          	$password = addslashes($this->input->post('d_pass', TRUE));
            
            $userid = $this->user_model->create_account($email, $username, $password, 71);

            //echo "<script>alert('Berhasil " . $userid . "');</script>";
            $this->session->set_userdata('p3m_pesan_sukses', validation_errors());
            redirect('daftar');

        } else {
        	$this->session->set_userdata('p3m_pesan_error', validation_errors());
            redirect('daftar');
        }
    }

    public function cek_uname($str) {
        if($this->user_model->user_exists($str)) {
            $this->form_validation->set_message('cek_uname', 'Username sudah digunakan.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

    public function cek_email($str) {
        if($this->user_model->email_exists($str)) {
            $this->form_validation->set_message('cek_email', 'Email sudah digunakan.');
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
