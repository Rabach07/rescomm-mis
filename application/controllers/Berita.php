<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('berita_model');
        $this->load->library('Datatables');
    }

    public function index() {
        parent::cek_akses($this->router->class);
        // data content
        $this->data['adaberita'] = $this->berita_model->get_total() > 0 ? TRUE : FALSE;
        $this->data['daftartipe'] = $this->berita_model->get_list_tipe();

        $this->load->view('Backend/header_view', $this->datah);
        $this->load->view('Backend/Berita/Berita_view', $this->data);
        // $this->output->cache(60);
    }

	public function getberita() {
        $select = "b.berita_judul AS judul, b.berita_url AS url, SHA2(b.berita_id,'224') AS ID, DATE_FORMAT(b.berita_tanggal,'%d %b %Y %H:%i') AS tanggal, "
                    . "t.tipeberita_nama AS tipe, u.user_login AS penulis, COALESCE(SUM(l.lihat_jumlah),'0') AS dilihat, REPLACE(REPLACE(b.berita_status,'0','Draft'),'1','Rilis') AS status";
        $opsi = '<a class="btn btn-xs btn-primary" href="'. base_url() . '$2" target="_blank" data-toggle="tooltip" title="Lihat $3"><i class="fa fa-eye"></i></a>'
                . ' <span data-toggle="modal" data-target="#modal-editberita" data-id="$1"><button class="btn btn-xs btn-success" data-toggle="tooltip" title="Edit $3"><i class="fa fa-edit"></i></button></span>'
                . ' <span data-toggle="modal" data-target="#modal-hapusberita" data-id="$1"><button class="btn btn-xs btn-danger" data-toggle="tooltip" title="Hapus $3"><i class="fa fa-close"></i></button></span>';
        $this->datatables->select($select)
            ->add_column('opsi', $opsi, 'ID,url,judul')
            ->from('tb_berita b')
            ->join('tb_tipeberita t', 'b.tipeberita_id = t.tipeberita_id')
            ->join('tb_user u', 'b.user_id = u.user_id')
            ->join('tb_beritalihat l','b.berita_id = l.berita_id','left')
            ->where('b.user_id', $this->user_model->user_id() )
            ->where('b.berita_status !=', 3 )
            ->group_by('b.berita_judul')
            ->unset_column('opsi');

        echo $this->datatables->generate();
        
    }

    public function getipe() {
        $opsi = '<button class="btn btn-xs btn-success" data-toggle="modal" data-target="#modal-editipe" data-id="$1"><i class="fa fa-edit"></i></button>'
                . ' <button class="btn btn-xs btn-danger" data-toggle="modal" data-target="#modal-hapustipe" data-id="$1"><i class="fa fa-close"></i></button>';
        $this->datatables->select("SHA2(tipeberita_id,'224') AS ID, tipeberita_nama AS tipe")
            ->add_column('opsi', $opsi, 'ID')
            ->from('tb_tipeberita')
            ->unset_column('opsi');

        echo $this->datatables->generate();
        
    }

    public function getwith() {
        $id = $this->input->post('id');
        $data = $this->berita_model->selectWith( array('SHA2(berita_id,224)' => $id) );
        $result = array();
        foreach ($data->result() as $key => $value) {
            $result = $value;
        }
        echo json_encode($result);
    }

    public function getipewith() {
        $id = $this->input->post('id');
        $data = $this->berita_model->selectTipe( array('SHA2(tipeberita_id,224)' => $id) );
        $result = array();
        foreach ($data->result() as $key => $value) {
            $result = $value;
        }
        echo json_encode($result);
    }

    public function getSelected() {
        $id = $this->input->post('id');
        //$id = explode(',', $this->input->post('id') );
        $data = $this->berita_model->selectIn( "SHA2(berita_id,'224')",$id );
        //$result = array();
        foreach ($data->result() as $key => $value) {
            $result[]  = $value;
        }
        echo json_encode($result);
    }

    public function get_databox() {
        $id = $this->user_model->user_id();
        // data buat box
        $data['boxrilis'] = $this->berita_model->get_total(array('berita_status' => 1, 'user_id' => $id));
        $data['boxdraft'] = $this->berita_model->get_total(array('berita_status' => 0, 'user_id' => $id));
        $data['boxberita'] = $data['boxrilis'] + $data['boxdraft'];
        $data['boxtipe'] = $this->berita_model->get_totaltipe();

        echo json_encode($data);
    }

    public function tambah() {
        $status['status'] = 1;
        $status['pesan'] = 'Berita baru berhasil dibuat';

        $this->load->library('form_validation');
        $this->form_validation->set_rules('berita-judul', 'Judul','trim|required|strip_tags|min_length[10]|max_length[80]');
        $this->form_validation->set_rules('berita-tanggal', 'Tanggal Berita','trim|required|strip_tags');
        $this->form_validation->set_rules('berita-isi', 'Isi Berita','trim|required');
        $this->form_validation->set_rules('berita-status', 'Status Berita','trim|required|strip_tags');
        $this->form_validation->set_rules('berita-tipe', 'Tipe Berita','trim|required|strip_tags');

        if($this->form_validation->run() === TRUE){
            $count = (int) $this->berita_model->get_total();
            $url = "blog/" . str_replace(' ', '-', strtolower(addslashes( $this->input->post('berita-judul', TRUE) ))) . "--" . ( $count + 1 );
            $data = array(
                'berita_id' => ( $count + 1),
                'user_id' => $this->user_model->user_id(),
                'tipeberita_id' => (int) $this->input->post('berita-tipe', TRUE),
                'berita_judul' => (string) $this->input->post('berita-judul', TRUE),
                'berita_url' => (string) $url,
                'berita_isi' => (string) $this->input->post('berita-isi', TRUE),
                'berita_tanggal' => $this->input->post('berita-tanggal', TRUE),
                'berita_status' => (int) $this->input->post('berita-status', TRUE)
            );

            $this->berita_model->insert($data);
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        if($status['status'] === 1) {
            $opt = $this->user_model->select( array('u.role_id' => 71) );

            if(!empty($opt)) {
                foreach ($opt->result() as $key) {
                    $each = array(
                                'notif_ke' => $key->user_id,
                                'notif_isi' => 'Berita baru tentang "' . $this->input->post('berita-judul', TRUE) . '" buka <a href="' . site_url($url) . '" target="_blank">di sini</a>',
                                'tipenotif_id' => 1    
                            );
                    $notif[] = $each;    
                }

                //echo var_dump($notif);
            }

            $this->logpush->insert($this->router->class, "menambahkan berita baru '" . $this->input->post('berita-judul', TRUE) . "'");
            $this->notif_model->insertBatch($notif);
        }

        echo json_encode($status);
    }

    public function tambahtipe() {
        $status['status'] = 1;
        $status['pesan'] = 'Tipe baru berhasil dibuat';

        $this->load->library('form_validation');
        $this->form_validation->set_rules('tipe-nama', 'Nama Tipe','trim|required|strip_tags|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('tipe-icon', 'Icon Tipe','trim|required|strip_tags');

        if($this->form_validation->run() === TRUE){
            $count = (int) $this->berita_model->get_totaltipe();
            $data = array(
                'tipeberita_id' => ( $count + 1),
                'tipeberita_nama' => (string) $this->input->post('tipe-nama', TRUE),
                'tipeberita_icon' => (string) $this->input->post('tipe-icon', TRUE)
            );

            $this->berita_model->insertTipe($data);
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        $this->logpush->insert($this->router->class, "menambahkan tipe berita baru '" . $this->input->post('tipe-nama', TRUE) . "'");

        echo json_encode($status);
    }

    public function edit() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('berita-judul', 'Judul','trim|required|strip_tags|min_length[10]|max_length[80]');
        $this->form_validation->set_rules('berita-tanggal', 'Tanggal Berita','trim|required|strip_tags');
        $this->form_validation->set_rules('berita-isi', 'Isi Berita','trim|required');
        $this->form_validation->set_rules('berita-status', 'Status Berita','trim|required|strip_tags');
        $this->form_validation->set_rules('berita-tipe', 'Tipe Berita','trim|required|strip_tags');
        $this->form_validation->set_rules('berita-id', 'ID Berita','required|strip_tags');

        if($this->form_validation->run() === TRUE){
            $id = $this->input->post('berita-id', TRUE);
            $count = (int) $this->berita_model->get_total();
            $url = "blog/" . str_replace(' ', '-', strtolower(addslashes( $this->input->post('berita-judul', TRUE) ))) . "--" . $id;
            $data = array(
                'tipeberita_id' => (int) $this->input->post('berita-tipe', TRUE),
                'berita_judul' => (string) $this->input->post('berita-judul', TRUE),
                'berita_url' => (string) $url,
                'berita_isi' => (string) $this->input->post('berita-isi', TRUE),
                'berita_tanggal' => $this->input->post('berita-tanggal', TRUE),
                'berita_status' => (int) $this->input->post('berita-status', TRUE)
            );

            $this->berita_model->update($id,$data);

            $status['status'] = 1;
            $status['pesan'] = 'Berita "'. $data['berita_judul'] . '" berhasil diperbarui';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        if($status['status'] === 1) {
            $opt = $this->user_model->select( array('u.role_id' => 71) );

            if(!empty($opt)) {
                foreach ($opt->result() as $key) {
                    $each = array(
                                'notif_ke' => $key->user_id,
                                'notif_isi' => 'Berita baru tentang "' . $this->input->post('berita-judul', TRUE) . '" buka <a href="' . site_url($url) . '" target="_blank">di sini</a>',
                                'tipenotif_id' => 1    
                            );
                    $notif[] = $each;    
                }

                //echo var_dump($notif);
            }

            $this->logpush->insert($this->router->class, "menambahkan berita baru '" . $this->input->post('berita-judul', TRUE) . "'");
            $this->notif_model->insertBatch($notif);
        }

        echo json_encode($status);
    }

    public function editipe() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tipe-nama', 'Nama Tipe','trim|required|strip_tags|min_length[3]|max_length[30]');
        $this->form_validation->set_rules('tipe-icon', 'Icon Tipe','trim|required|strip_tags');
        $this->form_validation->set_rules('tipe-id', 'ID Tipe','trim|required');

        $status['status'] = 1;
        $status['pesan'] = 'Tipe berhasil diubah';

        if($this->form_validation->run() === TRUE){
            $id = $this->input->post('tipe-id', TRUE);
            if($this->input->post('tipe-nama', TRUE) === $this->input->post('tipe-lama', TRUE)) {
                $data = array(
                    'tipeberita_icon' => (string) $this->input->post('tipe-icon', TRUE)
                );

                $this->berita_model->updateTipe($id,$data);
            } else {
                $this->form_validation->set_rules('tipe-nama', 'Nama Tipe','callback_cek_tipe');

                if($this->form_validation->run() === TRUE){
                    $data = array(
                        'tipeberita_nama' => (string) $this->input->post('tipe-nama', TRUE),
                        'tipeberita_icon' => (string) $this->input->post('tipe-icon', TRUE)
                    );

                    $this->berita_model->updateTipe($id,$data);
                } else {
                    $status['status'] = 0;
                    $status['pesan'] = validation_errors();
                }
                
            }
            
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        $this->logpush->insert($this->router->class, "memodifikasi data tipe '". $this->input->post('tipe-lama', TRUE) ."'");

        echo json_encode($status);
    }

    public function cek_tipe($str) {
        $data = $this->berita_model->get_totaltipe(array('lower(tipeberita_nama)' => strtolower($str) ));
        if ($data > 0) {
            $this->form_validation->set_message('cek_tipe', 'Nama Tipe "'. $str .'" sudah dipakai');
            return FALSE;
        }
        else {
            return TRUE;
        }
    }

    public function rilis() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('berita-id', 'ID Berita','trim|required');

        if($this->form_validation->run() == TRUE){
            $id = explode(',', $this->input->post('berita-id') );
            foreach ($id as $value) {
                $arr[] = array("SHA2(berita_id,'224')" => $value, 'berita_status' => 1);
            }
            $this->berita_model->updateBatch('tb_berita', $arr, "SHA2(berita_id,'224')");

            $status['status'] = 1;
            $status['pesan'] = 'Status berita berhasil diubah menjadi Rilis';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }

    public function draft() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('berita-id', 'ID Berita','trim|required');

        if($this->form_validation->run() == TRUE){
            $id = explode(',', $this->input->post('berita-id') );
            foreach ($id as $value) {
                $arr[] = array("SHA2(berita_id,'224')" => $value, 'berita_status' => 0);
            }
            $this->berita_model->updateBatch('tb_berita', $arr, "SHA2(berita_id,'224')");

            $status['status'] = 1;
            $status['pesan'] = 'Status berita berhasil diubah menjadi Draft';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }

    public function hapuspilih() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('berita-id', 'ID Berita','trim|required');

        if($this->form_validation->run() == TRUE){
            $id = explode(',', $this->input->post('berita-id') );
            foreach ($id as $value) {
                $arr[] = array("SHA2(berita_id,'224')" => $value, 'berita_status' => 3);
            }
            $this->berita_model->updateBatch('tb_berita', $arr, "SHA2(berita_id,'224')");

            $status['status'] = 1;
            $status['pesan'] = 'Berita berhasil dihapus';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }

    public function hapus() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('berita-id', 'ID Berita','trim|required');

        if($this->form_validation->run() == TRUE){
            $id = $this->input->post('berita-id', TRUE);
        
            //$this->berita_model->delete($id);
            $this->berita_model->update($id, array('berita_status' => 3));
            $status['status'] = 1;
            $status['pesan'] = 'Berita berhasil dihapus';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        $this->logpush->insert($this->router->class, "menghapus berita '". $this->input->post('berita-judul', TRUE) ."'");

        echo json_encode($status);
    }

    public function hapustipe() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('tipe-id', 'ID Tipe','trim|required');

        if($this->form_validation->run() == TRUE){
            $id = $this->input->post('tipe-id', TRUE);
        
            $this->berita_model->deleteTipe($id);
            $status['status'] = 1;
            $status['pesan'] = 'Tipe berhasil dihapus';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        $this->logpush->insert($this->router->class, "menghapus tipe '". $this->input->post('tipe-nama', TRUE) ."'");

        echo json_encode($status);
    }

    public function hapusemua() {
        $this->notif_model->deleteAll();
        //$this->logpush->insert($this->router->class, "menghapus semua Notifikasi");
        $status['status'] = 1;
        $status['pesan'] = 'Semua Notifikasi berhasil dihapus';

        echo json_encode($status);
    }

    public function get_pgchart() {
        //$tahun = $_REQUEST('tahun');
        $query = $this->berita_model->buatchartpg(7);
        $data = array();
        $label = array();

        foreach ($query->result() as $key) {
            $data[] = $key->jumlah;
            $label[] = $key->tanggal;
        }

        $chartData = array();
        $chartData['labels'] = $label;
        //$chartData['datasets'] = array();
        $chartData['datasets'][] = array('label' => "Pageview",
              'fillColor' => "rgba(0,192,239,0.7)",
              'strokeColor' => "rgba(0,192,239,1)",
              'pointColor' => "rgb(0,192,239)",
              'pointStrokeColor' => "#fff",
              'pointHighlightFill' => "#fff",
              'pointHighlightStroke' => "rgb(0,192,239)",
              'data' => $data );

        echo json_encode($chartData);
    }

}