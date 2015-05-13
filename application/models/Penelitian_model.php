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
        $select = "SHA2(n.pen_id,'224') AS ID, n.notif_isi, DATE_FORMAT(n.notif_tanggal,'%d %b %Y %H:%i:%s') AS notif_tanggal, "
                . "t.tipenotif_nama, t.tipenotif_teks, REPLACE(REPLACE(n.notif_status,'0','Belum Dibaca'),'1','Sudah Dibaca') AS Nstatus";
        $this->db->select($select)
            ->from('tb_penelitian n')
            ->join('tb_tipenotif t','n.tipepen_id = t.tipepen_id')
            ->where($data)
            ->order_by('pen_id', 'DESC')
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

    function getlist($q){
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