<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Berita_model extends CI_Model {

	function get_total($parameter = array()) {
        if(!empty($parameter)){
            $this->db->select('count(*) AS Total')
                ->from('tb_berita')
                ->where($parameter);
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }else{
            $this->db->select('count(*) AS Total')
                ->from('tb_berita');
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }
    }

    function insert($data) {
        $this->db->insert('tb_berita', $data);
    }

    function delete($id) {
        $this->db->where('berita_id', $id)
            ->delete('tb_berita');
    }

    function deleteAll() {
        $this->db->empty_table('tb_berita');
    }

    function update($id, $data) {
        $this->db->where('berita_id', $id)
            ->update('tb_berita', $data);
    }

    function updateAll($data) {
        $this->db->update('tb_berita', $data);
    }

    function select($data, $no = 0) {
        $this->db->select('*')
            ->from('tb_berita')
            ->where($data)
            ->order_by('berita_id', 'DESC')
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }
}

?>