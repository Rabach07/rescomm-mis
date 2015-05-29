<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	public function __construct() {
        parent::__construct();
        // load model yang digunakan secara umum
        $this->load->model('web_model');
        $this->load->model('log_model');
        $this->load->model('hak_model');
    }

    public function getuserwith($id) {
    	// isinya $this->user_model->selectBasic($parameter)
    	// function selectBasic($data, $no = 0) {
	    //     $this->db->select('*')
	    //         ->from('tb_user u')
	    //         ->join('tb_role r', 'u.role_id = r.role_id')
	    //         ->where($data)
	    //         ->limit($no);
	    //     $query = $this->db->get();
	    //     return ($query->num_rows() > 0 ? $query : NULL);
	    // }
	    
    	// akses ke model dengan kondisi id role, nanti bisa pakai id topik
        $data = $this->user_model->selectBasic(array('u.role_id' => $id));
        // looping data array 2 dimensi
        foreach ($data->result() as $key => $value) {
            $result[] = $value;
        }
        // return dalam bentuk json biar bisa dibaca si-ajax
        echo json_encode($result);
    }

	public function index() {

	}

	public function get_avatar() {
		echo base_url('public/avatar') . '/' . $this->user_model->get_avatar();
	}

	public function coba() {
		$this->load->view('Backend/quran');
	}

}
