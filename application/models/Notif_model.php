<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Notif_model extends CI_Model {

	function get_total($parameter = array()) {
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

    function delete($id) {
        $this->db->where('notif_id', $id)
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
        $this->db->select('*')
            ->from('tb_notifikasi n')
            ->where($data)
            ->order_by('notif_id', 'DESC')
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }
}

?>