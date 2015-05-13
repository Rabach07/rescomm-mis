<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Notif_model extends CI_Model {

	function get_total($parameter = NULL) {
        if(!empty($parameter)){
            $this->db->select('count(*) AS Total')
                ->from('tb_notifikasi')
                ->where($parameter);
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }else{
            $this->db->select('count(*) AS Total')
                ->from('tb_notifikasi');
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }
    }

    function insert($data) {
        $this->db->insert('tb_notifikasi', $data);
    }

    function insertBatch($data) {
        $this->db->insert_batch('tb_notifikasi', $data);
    }

    function delete($id) {
        $this->db->where('notif_id', $id)
            ->delete('tb_notifikasi');
    }

    function deleteWith($data) {
        $this->db->where($data)
            ->delete('tb_notifikasi');
    }

    function deleteAll() {
        $this->db->empty_table('tb_notifikasi');
    }

    function update($id, $data) {
        $this->db->where('notif_id', $id)
            ->update('tb_notifikasi', $data);
    }

    function updateAll($data) {
        $this->db->update('tb_notifikasi', $data);
    }

    function select($data, $no = 0) {
        $select = "SHA2(n.notif_id,'224') AS ID, n.notif_isi, DATE_FORMAT(n.notif_tanggal,'%d %b %Y %H:%i:%s') AS notif_tanggal, "
                . "t.tipenotif_nama, t.tipenotif_teks, REPLACE(REPLACE(n.notif_status,'0','Belum Dibaca'),'1','Sudah Dibaca') AS Nstatus";
        $this->db->select($select)
            ->from('tb_notifikasi n')
            ->join('tb_tipenotif t','n.tipenotif_id = t.tipenotif_id')
            ->where($data)
            ->order_by('notif_id', 'DESC')
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }
}

?>