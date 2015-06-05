<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Penelitian extends MY_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('penelitian_model');
        $this->load->model('topik_model');
        $this->load->model('dosen_model');
        $this->load->library('Datatables');
    }

    public function index() {
        parent::cek_akses($this->router->class);
        redirect('dashboard/penelitian/daftar');
    }

    public function daftar() {
        // cek akses tentu
        parent::cek_akses($this->router->class);
        // aktifin menu sublevel daftar
        $this->datah['aktif']['child'] = '#child-' . $this->router->method;
        // ada penelitian ?
        $this->data['adapenelitian'] = $this->penelitian_model->get_total() > 0 ? TRUE : FALSE;
        // daftar grup riset
        $this->data['daftargrup'] = $this->penelitian_model->get_list_grup();
        // daftar pusat riset
        $this->data['daftarpusat'] = $this->penelitian_model->get_list_pusat();
        // daftar topik
        $this->data['daftartopik'] = $this->topik_model->get_list_topik();
        // daftar pangkat
        $this->data['daftarpangkat'] = $this->dosen_model->get_list_pangkat();
        // daftar jabatan
        $this->data['daftarjabatan'] = $this->dosen_model->get_list_jabatan();
        // daftar golongan
        $this->data['daftargol'] = $this->dosen_model->get_list_gol();
        // daftar departemen
        $this->data['daftardepartemen'] = $this->dosen_model->get_list_departemen();
        // 71 = dosen; 14 = penelitian
        $this->data['bukapenelitian'] = (int) $this->user_model->cek_akses(71,'penelitian')->do_create === 1 ? TRUE : FALSE;
        // ambil view sesuai role
        $view = 'Backend/Penelitian/Daftar_' . $this->user_model->get_user_role() . '_view';
        // load header dan bagian konten
        $this->load->view('Backend/header_view', $this->datah);
        $this->load->view($view, $this->data);
    }

	public function getpenelitian() {
        $select = "p.pen_judul AS judul, d.dosen_nama AS ketua, SHA2(p.pen_id,'224') AS ID, DATE_FORMAT(p.pen_mulai,'%d %b %Y') AS mulai, "
                    . "t.topik_nama AS topik, CONCAT('Tingkat ', p.pen_tingkat, '') AS tingkat, REPLACE(REPLACE(REPLACE(p.pen_status,'0','Usulan'),'1','Dikerjakan'),'2','Selesai') AS status";
        $opsi = '<span data-toggle="modal" data-target="#modal-bacapen" data-id="$1"><button class="btn btn-xs btn-primary" data-toggle="tooltip" title="Lihat Data $2"><i class="fa fa-eye"></i></button></span>'
                . ' <span data-toggle="modal" data-target="#modal-editpen" data-id="$1"><button class="btn btn-xs btn-success" data-toggle="tooltip" title="Edit $2"><i class="fa fa-edit"></i></button></span>'
                . ' <span data-toggle="modal" data-target="#modal-hapuspen" data-id="$1"><button class="btn btn-xs btn-danger" data-toggle="tooltip" title="Hapus $2"><i class="fa fa-close"></i></button></span>';
        $this->datatables->select($select)
            ->add_column('opsi', $opsi, 'ID,judul')
            ->from('tb_penelitian p')
            ->join('tb_dosen d', 'p.dosen_id = d.dosen_id')
            ->join('tb_topik t', 'p.topik_id = t.topik_id')
            ->where('p.pen_status !=', 3 )
            ->unset_column('opsi');

        echo $this->datatables->generate();
        
    }

    public function getlogwith($id) {
        $data = $this->log_model->select(array('log_id' => utf8_decode($id)));
        $result = array();
        foreach ($data->result() as $key => $value) {
            $result = $value;
        }
        echo json_encode($result);
    }

    public function get_databox() {
        if($this->user_model->get_roleid() === 71) {
            // dosen
            // data buat box
            $data['boxrilis'] = $this->penelitian_model->get_total(array('berita_status' => 1, 'user_id' => $id));
            $data['boxdraft'] = $this->penelitian_model->get_total(array('berita_status' => 0, 'user_id' => $id));
            $data['boxberita'] = $data['boxrilis'] + $data['boxdraft'];
            $data['boxtipe'] = $this->penelitian_model->get_total();
        } else if($this->user_model->get_roleid() === 70 || $this->user_model->get_roleid() === 72) {
            // admin dan operator
            // data buat box
            $data['boxusulan'] = $this->penelitian_model->get_total(array('pen_status' => 0));
            $data['boxdikerjakan'] = $this->penelitian_model->get_total(array('pen_status' => 1));
            $data['boxselesai'] = $this->penelitian_model->get_total(array('pen_status' => 2));
            $data['boxpenelitian'] = $data['boxusulan'] + $data['boxdikerjakan'] + $data['boxselesai'];
        }

        echo json_encode($data);
    }

    public function baca() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('baca-id', 'ID Log','trim|required|strip_tags|is_natural_no_zero');

        if($this->form_validation->run() == TRUE){
            $id = addslashes($this->input->post('baca-id', TRUE));
            $this->log_model->update($id, array('log_status' => 1));

            $status['status'] = 1;
            $status['pesan'] = 'Log berhasil ditandai telah dibaca';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }

    public function bacasemua() {
        $this->log_model->updateAll(array('log_status' => 1));
        $this->logpush->insert($this->router->class, "menandai semua Log telah dibaca");

        $status['status'] = 1;
        $status['pesan'] = 'Semua Log berhasil ditandai telah dibaca';

        echo json_encode($status);
    }

    public function hapus() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('hapus-id', 'ID Log','trim|required|strip_tags|is_natural_no_zero');

        if($this->form_validation->run() == TRUE){
            $id = addslashes($this->input->post('hapus-id', TRUE));
        
            $this->log_model->delete($id);
            $status['status'] = 1;
            $status['pesan'] = 'Log berhasil dihapus';
        }else{
            $status['status'] = 0;
            $status['pesan'] = validation_errors();
        }

        echo json_encode($status);
    }

    public function hapusemua() {
        $this->log_model->deleteAll();
        $this->logpush->insert($this->router->class, "menghapus semua Log");
        $status['status'] = 1;
        $status['pesan'] = 'Semua Log berhasil dihapus';

        echo json_encode($status);
    }

    public function pencomp() {
        $this->load->view('Backend/Penelitian/auto_view');
    }

    public function getlist(){
        //$this->load->model('birds_model');
        // if (isset($_POST['term'])){
        //     $term = $this->input->post('term', TRUE);
        //     //$q = strtolower($_GET['term']);
        //     $this->penelitian_model->getlist($term);
        // }
        $keyword = $this->input->post('term');
        //if (isset($_GET['term'])){
            //$keyword = strtolower($_GET['term']);
            //$data['response'] = 'false'; //Set default response

            $query = $this->penelitian_model->getlist($keyword); //Model DB search

            if($query->num_rows() > 0){
                //$data['response'] = 'true'; //Set response
                //$data[] = array(); //Create array
                foreach($query->result() as $row){
                    $new_row['label']=htmlentities(stripslashes($row->pen_judul));
                    $new_row['value']=htmlentities(stripslashes($row->pen_id));
                    $data[] = $new_row; //build an array
                    //$data['message'][] = array('label'=> $row->pen_judul, 'value'=> $row->pen_id); //Add a row to array
                }
                echo json_encode($data);
            }
        //}
        
    }

    public function get_penlist(){
        
        if(isset($_GET['q'])) {
            $q = strtolower($_GET['q']);
            $query = $this->penelitian_model->getlist($q); //Model DB search

            $data['total_count'] = $query->num_rows();
            $data['incomplete_results'] = false;
            $data['items'] = array();

            if($query->num_rows() > 0) {
                foreach($query->result() as $row){
                    $new_row['text']=htmlentities(stripslashes($row->pen_judul));
                    $new_row['id']=htmlentities(stripslashes($row->pen_id));
                    $data['items'][] = $new_row; //build an array
                    //$data['message'][] = array('label'=> $row->pen_judul, 'value'=> $row->pen_id); //Add a row to array
                }
            } 
            echo json_encode($data);
        } else {
            $data['message'] = "Kesalahan validasi";
            $data['errors'][] = array(
                            'resource' => 'Search',
                            'field' => 'q',
                            'code' => 'missing');

            echo json_encode($data);    
        }

    }

    public function get_grupriset(){
        
        if(isset($_GET['q'])) {
            $q = strtolower($_GET['q']);
            $query = $this->penelitian_model->get_gruplist($q); //Model DB search

            $data['total_count'] = $query->num_rows();
            $data['incomplete_results'] = false;
            $data['items'] = array();

            if($query->num_rows() > 0) {
                foreach($query->result() as $row){
                    $new_row['text']=htmlentities(stripslashes($row->grupriset_nama));
                    $new_row['id']=htmlentities(stripslashes($row->grupriset_id));
                    $data['items'][] = $new_row; //build an array
                    //$data['message'][] = array('label'=> $row->pen_judul, 'value'=> $row->pen_id); //Add a row to array
                }
            } 
            echo json_encode($data);
        } else {
            $data['message'] = "Kesalahan validasi";
            $data['errors'][] = array(
                            'resource' => 'Search',
                            'field' => 'q',
                            'code' => 'missing');

            echo json_encode($data);    
        }

    }

    public function get_pusatriset(){
        
        if(isset($_GET['q'])) {
            $q = strtolower($_GET['q']);
            $query = $this->penelitian_model->get_pusatlist($q); //Model DB search

            $data['total_count'] = $query->num_rows();
            $data['incomplete_results'] = false;
            $data['items'] = array();

            if($query->num_rows() > 0) {
                foreach($query->result() as $row){
                    $new_row['text']=htmlentities(stripslashes($row->pusatriset_nama));
                    $new_row['id']=htmlentities(stripslashes($row->pusatriset_id));
                    $data['items'][] = $new_row; //build an array
                    //$data['message'][] = array('label'=> $row->pen_judul, 'value'=> $row->pen_id); //Add a row to array
                }
            } 
            echo json_encode($data);
        } else {
            $data['message'] = "Kesalahan validasi";
            $data['errors'][] = array(
                            'resource' => 'Search',
                            'field' => 'q',
                            'code' => 'missing');

            echo json_encode($data);    
        }

    }

    public function get_tahunchart() {
        //$tahun = $_REQUEST('tahun');
        $usulan = $this->penelitian_model->buatcharthn(7,0);
        $mulai = $this->penelitian_model->buatcharthn(7,1);
        $selesai = $this->penelitian_model->buatcharthn(7,2);

        $dataU = $dataM = $dataS = array();
        $label = array();

        foreach ($usulan->result() as $key) {
            $dataU[] = $key->jumlah;
            $label[] = $key->tahun;
        }

        foreach ($mulai->result() as $key) {
            $dataM[] = $key->jumlah;
        }

        foreach ($selesai->result() as $key) {
            $dataS[] = $key->jumlah;
        }

        $chartData = array();
        $chartData['labels'] = $label;
        //$chartData['datasets'] = array();
        $chartData['datasets'][] = array('label' => "Usulan",
              'fillColor' => "rgba(210, 214, 222,1)",
              'strokeColor' => "rgba(210, 214, 222,1)",
              'pointColor' => "rgb(210, 214, 222)",
              'pointStrokeColor' => "#fff",
              'pointHighlightFill' => "#fff",
              'pointHighlightStroke' => "rgb(210, 214, 222)",
              'data' => $dataU );
        $chartData['datasets'][] = array('label' => "Mulai",
              'fillColor' => "rgba(60,141,188,0.9)",
              'strokeColor' => "rgba(60,141,188,0.8)",
              'pointColor' => "rgb(60,141,188)",
              'pointStrokeColor' => "#fff",
              'pointHighlightFill' => "#fff",
              'pointHighlightStroke' => "rgba(60,141,188,1)",
              'data' => $dataM );
        $chartData['datasets'][] = array('label' => "Selesai",
              'fillColor' => "rgba(0,166,90,0.8)",
              'strokeColor' => "rgba(0,166,90,0.7)",
              'pointColor' => "rgb(0,166,90)",
              'pointStrokeColor' => "#fff",
              'pointHighlightFill' => "#fff",
              'pointHighlightStroke' => "rgba(0,166,90,1)",
              'data' => $dataS );

        echo json_encode($chartData);
    }

}