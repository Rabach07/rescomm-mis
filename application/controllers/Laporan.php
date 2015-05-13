<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('berkas_model');
    }

    public function index() {
        parent::cek_akses($this->router->class);
        // data content
        $this->data['adalaporan'] = $this->berkas_model->get_total("tipelaporan_id IS NOT NULL") > 0 ? TRUE : FALSE;
        $this->data['daftartipe'] = $this->berkas_model->selectTipe();

        $view = 'Backend/Laporan/Laporan_' . $this->user_model->get_user_role() . '_view';
        $this->load->view('Backend/header_view', $this->datah);
        $this->load->view($view, $this->data);
    }

	public function getlaporan() {
        $this->load->library('Datatables');
        $tipe = base64_decode( $this->input->post('tipe') );
        //$tipe = '1';

        if( $this->user_model->get_roleid() === 70 || $this->user_model->get_roleid() === 72 ) {
            $select = "b.berkas_id, SHA2(b.berkas_id,'224') AS ID, b.berkas_nama, DATE_FORMAT(b.berkas_waktu,'%d %b %Y %H:%i:%s') AS berkas_waktu, "
                        . "CONCAT( LEFT(b.berkas_pesan,'50'), IF( LENGTH(b.berkas_pesan) > 40,'...','') ) AS isi, REPLACE(REPLACE(b.berkas_status,'0','Tidak Aktif'),'1','Aktif') AS Lstatus, "
                        . "t.tipelaporan_nama, t.tipelaporan_teks, d.dosen_nama, p.pen_judul";
            $opsi = '<button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modal-baca-laporan" data-id="$1" ><i class="fa fa-eye"></i></button>'
                    . ' <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-hapus-laporan" data-id="$1" ><i class="fa fa-close"></i></button>';
            $this->datatables->select($select)
                ->add_column('Lopsi', $opsi, 'ID')
                ->from('tb_berkas b')
                ->join('tb_tipelaporan t', 'b.tipelaporan_id = t.tipelaporan_id')
                ->join('tb_penelitian p', 'b.pen_id = p.pen_id')
                ->join('tb_dosen d', 'p.dosen_id = d.dosen_id')
                ->where("b.berkas_status='1' AND b.tipelaporan_id='" . $tipe . "'")
                ->unset_column('Nopsi');

            echo $this->datatables->generate();

        } else if ($this->user_model->get_roleid() === 71) {
            $select = "n.notif_id, n.notif_status, DATE_FORMAT(n.notif_tanggal,'%d %b %Y %H:%i:%s') AS notif_tanggal, CONCAT( LEFT(n.notif_isi,'50'), IF( LENGTH(n.notif_isi) > 40,'...','') ) AS isi, REPLACE(REPLACE(n.notif_status,'0','Belum Dibaca'),'1','Sudah Dibaca') AS Nstatus, t.tipenotif_nama, t.tipenotif_teks";
            $opsi = '<button class="btn btn-xs btn-primary" data-toggle="modal" data-target="#modal-baca-notifikasi" data-id="'.utf8_encode("$1").'" ><i class="fa fa-eye"></i></button>'
                    . ' <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-hapus-notifikasi" data-id="'.utf8_encode("$1").'" data-title="Notifikasi" title="Hapus Data"><i class="fa fa-close"></i></button>';
            $notif = '<span class="label label-$1">$2</span> $3';
            $this->datatables->select($select)
                ->add_column('Nopsi', $opsi, 'notif_id')
                ->add_column('Nisi', $notif, 'tipenotif_nama,tipenotif_teks,isi')
                ->from('tb_notifikasi n')
                ->join('tb_tipenotif t', 'n.tipenotif_id = t.tipenotif_id')
                ->where("notif_status='0' AND (notif_ke='0' OR notif_user='" . $this->user_model->user_id() . "')")
                ->unset_column('Nopsi');
        }
 
        
    }

    public function getnotifikasilama() {
        $this->load->library('Datatables');

        $select = "n.notif_id, n.notif_status, DATE_FORMAT(n.notif_tanggal,'%d %b %Y %H:%i:%s') AS notif_tanggal, CONCAT( LEFT(n.notif_isi,'35'), IF( LENGTH(n.notif_isi) > 40,'...','') ) AS isi, REPLACE(REPLACE(n.notif_status,'0','Belum Dibaca'),'1','Sudah Dibaca') AS Nstatus, t.tipenotif_nama, t.tipenotif_teks";
        $opsi = '<button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-hapus-notifikasi" data-id="'.utf8_encode("$1").'" data-title="Notifikasi" title="Hapus Data"><i class="fa fa-close"></i></button>';
        $notif = '<span class="label label-$1">$2</span> $3';
        $this->datatables->select($select)
            ->add_column('Nopsi', $opsi, 'notif_id')
            ->add_column('Nisi', $notif, 'tipenotif_nama,tipenotif_teks,isi')
            ->from('tb_notifikasi n')
            ->join('tb_tipenotif t', 'n.tipenotif_id = t.tipenotif_id')
            ->where("notif_status='1' AND (notif_ke='0' OR notif_user='" . $this->user_model->user_id() . "')")
            ->unset_column('Nopsi');
 
        echo $this->datatables->generate();
    }

    public function getlaporanwith() {
        $id = $this->input->post('id');
        $data = $this->berkas_model->selectLaporan( array('SHA2(berkas_id,224)' => $id) );
        $result = array();
        foreach ($data->result() as $key => $value) {
            $result = $value;
        }
        echo json_encode($result);
    }

    public function download($id) {
        $data = $this->berkas_model->select( array('SHA2(berkas_id,224)' => $id) );
        $result = array();
        foreach ($data->result() as $key => $value) {
            $result = $value;
        }
        echo json_encode($result);
    }

    public function get_databox() {
        // data buat box
        $data['boxkemajuan'] = $this->berkas_model->get_total(array('tipelaporan_id' => 1));
        $data['boxanggaran'] = $this->berkas_model->get_total(array('tipelaporan_id' => 3));
        $data['boxakhir'] = $this->berkas_model->get_total(array('tipelaporan_id' => 2));
        $data['boxlaporan'] = $data['boxkemajuan'] + $data['boxanggaran'] + $data['boxakhir'];

        echo json_encode($data);
    }

    public function tambah() {
        $config['upload_path']          = './upload/laporan/';
        $config['allowed_types']        = 'pdf|doc|docx';
        $config['max_size']             = 50000;
        $config['file_ext_tolower']     = TRUE;

        $status['status'] = 1;
        $status['pesan'] = 'Laporan baru berhasil ditambahkan';

        $this->load->library('upload', $config);
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tambah-pesan', 'Pesan','trim|required|strip_tags|min_length[10]');
        $this->form_validation->set_rules('tambah-pen', 'Judul Penelitian','trim|required|strip_tags');
        $this->form_validation->set_rules('tambah-pen-id', 'Penelitian ID','trim|required|strip_tags');
        $this->form_validation->set_rules('tambah-tipe', 'Tipe Laporan','trim|required|strip_tags');

        if($this->form_validation->run() == TRUE){
            //$stringURL = str_replace(' ', '-', strtolower(addslashes($this->input->post('tambah-judul', TRUE)))); // Converts spaces to dashes
            if($_FILES['tambah-file']['size'] == 0) {
                $this->form_validation->set_rules('tambah-file', 'File Laporan','required');
            } else {
                if (!$this->upload->do_upload('tambah-file')) {
                    $status['status'] = 0;
                    $status['pesan'] = $this->upload->display_errors();
                } else {
                    $data = array(
                        'user_id' => $this->user_model->user_id(),
                        'tipelaporan_id' => (int) $this->input->post('tambah-tipe', TRUE),
                        'berkas_pesan' => (string) $this->upload->data('tambah-pesan'),
                        'berkas_nama' => $this->upload->data('file_name')
                    );

                    $this->berkas_model->insert($data);
                }
                @unlink($_FILES['tambah-file']);
            }

        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        if($status['status'] == 1) {
            $tipelaporan = $this->berkas_model->selectTipe( array('tipelaporan_id' => $data['tipelaporan_id']) )->row();
            $opt = $this->user_model->select( array('role_id' => 72) );

            if(!empty($opt)) {
                foreach ($opt->result() as $key) {
                    $each = array(
                                'notif_ke' => $key->user_id,
                                'notif_isi' => 'User mengirimkan Laporan ' . $tipelaporan->tipelaporan_teks . ' untuk Penelitian ' . $this->input->post('tambah-pen', TRUE) . '',
                                'tipenotif_id' => 1    
                            );
                    $notif[] = $each;    
                }

                //echo var_dump($notif);
            }

            $this->logpush->insert($this->router->class, "menambahkan koran baru '" . $data['berkas_pesan'] . "'");
            $this->notif_model->insertBatch($notif);
        }

        echo json_encode($status);
    }

    public function cekarray() {
        $tipelaporan = $this->berkas_model->selectTipe( array('tipelaporan_id' => 1) )->row();
        $opt = $this->user_model->select( array('u.role_id' => 72) );

        if(!empty($opt)) {
            foreach ($opt->result() as $key) {
                $each = array(
                            'notif_ke' => $key->user_id,
                            'notif_isi' => 'User mengirimkan Laporan ' . $tipelaporan->tipelaporan_teks . ' untuk Penelitian ' . $this->input->post('tambah-pen', TRUE) . '',
                            'tipenotif_id' => 1    
                        );
                $notif[] = $each;    
            }

            echo var_dump($notif);
        }

        echo NULL;
    }

    public function baca() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('baca-id', 'ID Laporan','trim|required|strip_tags|is_natural_no_zero');

        if($this->form_validation->run() == TRUE){
            $id = addslashes($this->input->post('baca-id', TRUE));
            $this->berkas_model->update($id, array('notif_status' => 1));

            $status['status'] = 1;
            $status['pesan'] = 'Laporan berhasil ditandai telah dibaca';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }

    public function bacasemua() {
        $this->berkas_model->updateAll(array('notif_status' => 1));
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
        $this->notif_model->deleteAll();
        //$this->logpush->insert($this->router->class, "menghapus semua Notifikasi");
        $status['status'] = 1;
        $status['pesan'] = 'Semua Notifikasi berhasil dihapus';

        echo json_encode($status);
    }

}