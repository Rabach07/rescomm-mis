<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Topik_model extends CI_Model {

	function get_total($parameter = NULL) {
        if(!empty($parameter)){
            $this->db->select('count(*) AS Total')
                ->from('tb_topik')
                ->where($parameter);
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }else{
            $this->db->select('count(*) AS Total')
                ->from('tb_topik');
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }
    }

    function cek_akses($role,$akses) {
        $this->db->select('count(*) AS Total')
            ->from('tb_roleakses')
            ->where('lower(akses_id)',strtolower($akses))
            ->where('role_id',$role);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query->row()->Total : 0);
    }

    function insert($data) {
        $this->db->insert('tb_topik', $data);
    }

    function delete($id) {
        $this->db->where('topik_id', $id)
            ->delete('tb_topik');
    }

    function deleteWith($data) {
        $this->db->where($data)
            ->delete('tb_topik');
    }

    function deleteAll() {
        $this->db->empty_table('tb_topik');
    }

    function update($id, $data) {
        $this->db->where('topik_id', $id)
            ->update('tb_topik', $data);
    }

    function updateAll($data) {
        $this->db->update('tb_topik', $data);
    }

    function select($data, $no = 0) {
        $this->db->select('*')
            ->from('tb_topik')
            ->where($data)
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

    function get_list_topik(){
        $this->db->select("*")
            ->from('tb_topik')
            ->order_by('topik_nama');
        $query = $this->db->get();

        return ($query->num_rows() > 0 ? $query : NULL);
    }

    function buatcharthn($limit,$status) {
        $on = "YEAR(all_dates.Date) = YEAR(h.hispen_tanggal) AND h.pen_status = ". $status ."";

        $alldate = "(SELECT DATE_ADD(curdate(), INTERVAL 1 YEAR) - INTERVAL (a.a + (10 * b.a) ) YEAR as Date 
                    FROM (select 0 as a union all select 1 union all select 2 union all select 3 union all select 4 union all select 5 union all select 6 union all select 7 union all select 8 union all select 9) as a
                    CROSS JOIN (select 0 as a union all select 1 union all select 2 union all select 3 union all select 4 union all select 5 union all select 6 union all select 7 union all select 8 union all select 9) as b
                    LIMIT ". $limit .") AS all_dates";

        $this->db->select("YEAR(all_dates.Date) AS tahun, COALESCE(COUNT(h.histopik_id),'0') AS jumlah ")
            ->from($alldate)
            ->join("tb_historypenelitian h", $on,"left",FALSE)
            ->group_by('tahun')
            ->order_by('tahun','asc');

        $query = $this->db->get();
        return $query;
    }
}

?>