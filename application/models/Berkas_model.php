<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Berkas_model extends CI_Model {

	function get_total($parameter = NULL) {
        if(!empty($parameter)){
            $this->db->select('count(*) AS Total')
                ->from('tb_berkas')
                ->where($parameter);
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }else{
            $this->db->select('count(*) AS Total')
                ->from('tb_berkas');
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }
    }

    function get_totaldownload() {
        $this->db->select('IFNULL(SUM(berkas_download), "0") AS Jumlah')
            ->from('tb_berkas');
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query->row()->Jumlah : 0);
    }

    function insert($data) {
        $this->db->insert('tb_berkas', $data);
    }

    function delete($id) {
        $this->db->where('berkas_id', $id)
            ->delete('tb_berkas');
    }

    function update($id, $data) {
        $this->db->where('berkas_id', $id)
            ->update('tb_berkas', $data);
    }

    function select($data = array(), $no = 0) {
        $this->db->select('b.*, u.user_login')
            ->from('tb_berkas b')
            ->join('tb_user u','b.user_id = u.user_id')
            ->where($data)
            ->order_by('berkas_id', 'DESC')
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

    function selectTipe($data = array(), $no = 0) {
        $this->db->select('*')
            ->from('tb_tipelaporan')
            ->where($data)
            ->order_by('tipelaporan_teks','DESC')
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

    function selectLaporan($data = array(), $no = 0) {
        $select = "b.berkas_pesan, u.user_login, SHA2(b.berkas_id,'224') AS ID, DATE_FORMAT(b.berkas_waktu,'%d %b %Y %H:%i:%s') AS berkas_waktu,"
                . "to.topik_nama, REPLACE(REPLACE(b.berkas_status,'0','Tidak Aktif'),'1','Aktif') AS Lstatus, "
                . "t.tipelaporan_nama, t.tipelaporan_teks, d.dosen_nama, p.pen_judul, CONCAT('Penelitian Lokal Tingkat ', p.pen_tingkat, '') AS Tingkat";
        $this->db->select($select)
            ->from('tb_berkas b')
            ->join('tb_user u','b.user_id = u.user_id')
            ->join('tb_tipelaporan t', 'b.tipelaporan_id = t.tipelaporan_id')
            ->join('tb_penelitian p', 'b.pen_id = p.pen_id')
            ->join('tb_dosen d', 'p.dosen_id = d.dosen_id')
            ->join('tb_topik to', 'p.topik_id = to.topik_id')
            ->where($data)
            ->order_by('berkas_id', 'DESC')
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

}

?>