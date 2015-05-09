<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('notif_model');
    }

    public function index() {
        parent::cek_akses($this->router->class);
        $this->data['adanotif'] = $this->notif_model->get_total() > 0 ? TRUE : FALSE;
        $this->data['adaunread'] = $this->notif_model->get_total(array('notif_status' => 0)) > 0 ? TRUE : FALSE;
        $this->load->view('Backend/header_view', $this->datah);
        $this->load->view('Backend/Notifikasi/notifikasi_view', $this->data);
    }

	public function getnotifikasi() {
        $this->load->library('Datatables');

        $select = "n.notif_id, n.notif_status, n.notif_tanggal, n.notif_isi, REPLACE(REPLACE(n.notif_status,'0','Belum Dibaca'),'1','Sudah Dibaca') AS Nstatus";
        $opsi = '<input type="hidden" ng-model="baca" value="$2"><button class="btn btn-xs btn-flat btn-primary" data-toggle="modal" data-target="#modal-baca-notifikasi" data-id="'.utf8_encode("$1").'" ng-disabled="baca == \'1\'"><i class="fa fa-eye"></i></button>'
        		. ' <button class="btn btn-xs btn-flat btn-danger" data-toggle="modal" data-target="#modal-hapus-notifikasi" data-id="'.utf8_encode("$1").'" data-title="Notifikasi" title="Hapus Data"><i class="fa fa-close"></i></button>';
        $this->datatables->select($select)
            ->add_column('Nopsi', $opsi, 'notif_id,notif_status')
            ->from('tb_notifikasi n')
        	->join('tb_tipenotif t', 'n.tipenotif_id = t.tipenotif_id')
            ->unset_column('Nopsi');
 
        echo $this->datatables->generate();
	}

    public function getnotifwith() {
        $id = utf8_decode( $this->input->post('notif_id') );
        $data = $this->notif_model->select( array('notif_id' => $id) );
        $result = array();
        foreach ($data->result() as $key => $value) {
            $result = $value;
        }
        echo json_encode($result);
    }

    public function get_databox() {
        // data buat box
        $data['boxbelum'] = $this->notif_model->get_total(array('notif_status' => 0));
        $data['boxbaca'] = $this->notif_model->get_total(array('notif_status' => 1));
        $data['boxnotifikasi'] = $this->notif_model->get_total();

        echo json_encode($data);
    }

    public function baca() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('baca-id', 'ID Notifikasi','trim|required|strip_tags|is_natural_no_zero');

        if($this->form_validation->run() == TRUE){
            $id = addslashes($this->input->post('baca-id', TRUE));
            $this->notif_model->update($id, array('notif_status' => 1));

            $status['status'] = 1;
            $status['pesan'] = 'Notifikasi berhasil ditandai telah dibaca';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }

    public function bacasemua() {
        $this->notif_model->updateAll(array('notif_status' => 1));
        $this->logpush->insert($this->router->class, "menandai semua Notifikasi telah dibaca");

        $status['status'] = 1;
        $status['pesan'] = 'Semua Notifikasi berhasil ditandai telah dibaca';

        echo json_encode($status);
    }

    public function hapus() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('hapus-id', 'ID Notifikasi','trim|required|strip_tags|is_natural_no_zero');

        if($this->form_validation->run() == TRUE){
            $id = addslashes($this->input->post('hapus-id', TRUE));
        
            $this->notif_model->delete($id);
            $status['status'] = 1;
            $status['pesan'] = 'Notifikasi berhasil dihapus';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }

    public function hapusemua() {
        $this->notif_model->deleteAll();
        $this->logpush->insert($this->router->class, "menghapus semua Notifikasi");
        $status['status'] = 1;
        $status['pesan'] = 'Semua Notifikasi berhasil dihapus';

        echo json_encode($status);
    }

}