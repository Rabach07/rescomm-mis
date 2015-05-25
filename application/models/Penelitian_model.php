<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Penelitian_model extends CI_Model {

	function get_total($parameter = NULL) {
        if(!empty($parameter)){
            $this->db->select('count(*) AS Total')
                ->from('tb_penelitian')
                ->where($parameter);
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }else{
            $this->db->select('count(*) AS Total')
                ->from('tb_penelitian');
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }
    }

    function insert($data) {
        $this->db->insert('tb_penelitian', $data);
    }

    function delete($id) {
        $this->db->where('pen_id', $id)
            ->delete('tb_penelitian');
    }

    function deleteWith($data) {
        $this->db->where($data)
            ->delete('tb_penelitian');
    }

    function deleteAll() {
        $this->db->empty_table('tb_penelitian');
    }

    function update($id, $data) {
        $this->db->where('pen_id', $id)
            ->update('tb_penelitian', $data);
    }

    function updateAll($data) {
        $this->db->update('tb_penelitian', $data);
    }

    function select($data, $no = 0) {
        $this->db->select('*')
            ->from('tb_penelitian')
            ->where($data)
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

    function getlist($q = ""){
        $this->db->select("*")
            ->from('tb_penelitian')
            ->where('pen_status', 1)
            ->like('pen_judul', $q);
        $query = $this->db->get();
        
        // if($query->num_rows > 0){
        //     foreach ($query->result() as $row){
        //         $new_row['label']=htmlentities(stripslashes($row->user_login));
        //         $new_row['value']=htmlentities(stripslashes($row->user_id));
        //         $row_set[] = $new_row; //build an array
        //     }
        //     echo json_encode($row_set); //format the array into json data
        // }

        return $query;
    }
}

?>