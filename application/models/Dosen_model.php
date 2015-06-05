<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen_model extends CI_Model {

	function get_total($parameter = array()) {
        if(!empty($parameter)){
            $this->db->select('count(*) AS Total')
                ->from('tb_dosen')
                ->where($parameter);
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }else{
            $this->db->select('count(*) AS Total')
                ->from('tb_dosen');
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }
    }

    function insert($data) {
        $this->db->insert('tb_dosen', $data);
    }

    function delete($id) {
        $this->db->where('dosen_id', $id)
            ->delete('tb_dosen');
    }

    function deleteAll() {
        $this->db->empty_table('tb_dosen');
    }

    function update($id, $data) {
        $this->db->where('dosen_id', $id)
            ->update('tb_dosen', $data);
    }

    function updateAll($data) {
        $this->db->update('tb_dosen', $data);
    }

    function select($data, $no = 0) {
        $this->db->select('*')
            ->from('tb_dosen')
            ->where($data)
            ->order_by('dosen_id', 'DESC')
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

    function get_list_pangkat($data = array()) {
        $this->db->select('*')
            ->from('tb_pangkat')
            ->where($data)
            ->order_by('pangkat_nama','DESC');

        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

    function get_list_jabatan($data = array()) {
        $this->db->select('*')
            ->from('tb_jabatan')
            ->where($data)
            ->order_by('jabatan_nama','DESC');
            
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

    function get_list_gol($data = array()) {
        $this->db->select('*')
            ->from('tb_golongan')
            ->where($data)
            ->order_by('gol_nama','DESC');
            
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

    function get_list_departemen($data = array()) {
        $this->db->select('*')
            ->from('tb_departemen')
            ->where($data)
            ->order_by('departemen_nama');
            
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }
}

?>