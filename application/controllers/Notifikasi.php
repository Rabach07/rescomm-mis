<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Notifikasi extends MY_Controller {

	public function __construct() {
        parent::__construct();
        //$this->load->model('notif_model');
    }

    public function index() {
        parent::cek_akses($this->router->class);
        $belum = "notif_status='0' AND notif_ke='" . $this->user_model->user_id() . "'";
        $notif = "notif_ke='" . $this->user_model->user_id() . "'";
        $this->data['adanotif'] = $this->notif_model->get_total($notif) > 0 ? TRUE : FALSE;
        $this->data['adaunread'] = $this->notif_model->get_total($belum) > 0 ? TRUE : FALSE;
        $this->load->view('Backend/header_view', $this->datah);
        $this->load->view('Backend/Notifikasi/notifikasi_view', $this->data);
    }

	public function getnotifikasi() {
        $this->load->library('Datatables');

        $select = "n.notif_id, SHA2(n.notif_id,'224') AS ID, DATE_FORMAT(n.notif_tanggal,'%d %b %Y %H:%i:%s') AS notif_tanggal, CONCAT( LEFT(n.notif_isi,'50'), IF( LENGTH(n.notif_isi) > 40,'...','') ) AS isi, REPLACE(REPLACE(n.notif_status,'0','Belum Dibaca'),'1','Sudah Dibaca') AS Nstatus, t.tipenotif_nama, t.tipenotif_teks";
        $opsi = '<button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modal-baca-notifikasi" data-id="$1" ><i class="fa fa-eye"></i></button>'
        		. ' <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-hapus-notifikasi" data-id="$1" ><i class="fa fa-close"></i></button>';
        $notif = '<span class="label label-$1">$2</span> $3';
        $this->datatables->select($select)
            ->add_column('Nopsi', $opsi, 'ID')
            ->add_column('Nisi', $notif, 'tipenotif_nama,tipenotif_teks,isi')
            ->from('tb_notifikasi n')
        	->join('tb_tipenotif t', 'n.tipenotif_id = t.tipenotif_id')
            ->where("notif_status='0' AND notif_ke='" . $this->user_model->user_id() . "'")
            ->unset_column('Nopsi');
 
        echo $this->datatables->generate();
	}

    public function getnotifikasilama() {
        $this->load->library('Datatables');

        $select = "n.notif_id, SHA2(n.notif_id,'224') AS ID, DATE_FORMAT(n.notif_tanggal,'%d %b %Y %H:%i:%s') AS notif_tanggal, CONCAT( LEFT(n.notif_isi,'35'), IF( LENGTH(n.notif_isi) > 40,'...','') ) AS isi, REPLACE(REPLACE(n.notif_status,'0','Belum Dibaca'),'1','Sudah Dibaca') AS Nstatus, t.tipenotif_nama, t.tipenotif_teks";
        $opsi = '<button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-hapus-notifikasi" data-id="$1" ><i class="fa fa-close"></i></button>';
        $notif = '<span class="label label-$1">$2</span> $3';
        $this->datatables->select($select)
            ->add_column('Nopsi', $opsi, 'ID')
            ->add_column('Nisi', $notif, 'tipenotif_nama,tipenotif_teks,isi')
            ->from('tb_notifikasi n')
            ->join('tb_tipenotif t', 'n.tipenotif_id = t.tipenotif_id')
            ->where("notif_status='1' AND notif_ke='" . $this->user_model->user_id() . "'")
            ->unset_column('Nopsi');
 
        echo $this->datatables->generate();
    }

    public function getnotifwith() {
        $id = $this->input->post('id');
        $data = $this->notif_model->select( array('SHA2(n.notif_id,224)' => $id) );
        $result = array();
        foreach ($data->result() as $key => $value) {
            $result = $value;
        }
        echo json_encode($result);
    }

    public function get_databox() {
        // data buat box
        $userid = $this->user_model->user_id();
        $data['boxbelum'] = $this->notif_model->get_total( array('notif_status' => 0,'notif_ke' => $userid) );
        $data['boxbaca'] = $this->notif_model->get_total( array('notif_status' => 1,'notif_ke' => $userid) );
        $data['boxnotifikasi'] = $data['boxbelum'] + $data['boxbaca'];

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
        $this->notif_model->updateAll( array('notif_status' => 1,'notif_ke' => $this->user_model->user_id() ));
        //$this->logpush->insert($this->router->class, "menandai semua Notifikasi telah dibaca");

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
        $this->notif_model->deleteWith(array( 'notif_ke' => $this->user_model->user_id() ));
        //$this->logpush->insert($this->router->class, "menghapus semua Notifikasi");
        $status['status'] = 1;
        $status['pesan'] = 'Semua Notifikasi berhasil dihapus';

        echo json_encode($status);
    }

}