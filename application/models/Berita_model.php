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

    function get_totaltipe($parameter = array()) {
        if(!empty($parameter)){
            $this->db->select('count(*) AS Total')
                ->from('tb_tipeberita')
                ->where($parameter);
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }else{
            $this->db->select('count(*) AS Total')
                ->from('tb_tipeberita');
            $query = $this->db->get();
            return ($query->num_rows() > 0 ? $query->row()->Total : 0);
        }
    }

    function get_list_tipe() {
        $this->db->select('*')
            ->from('tb_tipeberita');
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

    function insert($data) {
        $this->db->insert('tb_berita', $data);
    }

    function insertTipe($data) {
        $this->db->insert('tb_tipeberita', $data);
    }

    function delete($id) {
        $this->db->where('SHA2(berita_id,224)', $id)
            ->delete('tb_berita');
    }

    function deleteTipe($id) {
        $this->db->where('SHA2(tipeberita_id,224)', $id)
            ->delete('tb_tipeberita');
    }

    function deleteAll() {
        $this->db->empty_table('tb_berita');
    }

    function update($id, $data) {
        $this->db->where('berita_id', $id)
            ->update('tb_berita', $data);
    }

    function updateBatch($table, $data, $primary) {
        $this->db->update_batch($table, $data, $primary);
    }

    function updateTipe($id, $data) {
        $this->db->where('tipeberita_id', $id)
            ->update('tb_tipeberita', $data);
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

    function selectTipe($data, $no = 0) {
        $this->db->select("*, SHA2(tipeberita_id,'224') AS ID")
            ->from('tb_tipeberita')
            ->where($data)
            ->order_by('tipeberita_id', 'DESC')
            ->limit($no);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

    function selectIn($field, $data) {
        $this->db->select('berita_judul')
            ->from('tb_berita')
            ->where_in($field, $data);
        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

    function selectWith($data) {
        $this->db->select("SHA2(b.berita_id,'224') AS ID, b.berita_id AS ori, b.berita_url AS url,  b.berita_judul AS judul, b.berita_tanggal AS tanggal, b.berita_isi AS isi, b.tipeberita_id, b.berita_status, t.tipeberita_nama AS tipe, u.user_login AS penulis")
            ->from('tb_berita b')
            ->join('tb_tipeberita t','b.tipeberita_id = t.tipeberita_id')
            ->join('tb_user u','b.user_id = u.user_id')
            ->where($data);

        $query = $this->db->get();
        return ($query->num_rows() > 0 ? $query : NULL);
    }

    function buatchartpg($limit) {
        $alldate = "( SELECT DATE_ADD(curdate()+1, INTERVAL - 1 day) - INTERVAL (a.a + (10 * b.a) ) DAY as Date 
                    FROM (select 0 as a union all select 1 union all select 2 union all select 3 union all select 4 union all select 5 union all select 6 union all select 7 union all select 8 union all select 9) as a
                    CROSS JOIN (select 0 as a union all select 1 union all select 2 union all select 3 union all select 4 union all select 5 union all select 6 union all select 7 union all select 8 union all select 9) as b
                    LIMIT ". $limit .") AS all_dates";

        $this->db->select("DATE_FORMAT(all_dates.Date, '%d %b %Y') AS tanggal, COALESCE(SUM(be.lihat_jumlah),'0') AS jumlah ")
            ->from($alldate)
            ->join("tb_beritalihat be", "DATE_FORMAT(all_dates.Date, '%Y-%m-%d') = DATE_FORMAT(be.lihat_tanggal, '%Y-%m-%d')","left",FALSE)
            ->group_by('tanggal')
            ->order_by('all_dates.Date','asc');

        $query = $this->db->get();
        // $output = array();
        // foreach ($query->result() as $key) {
        //     $output[] = $key->Jumlah;
        // }

        return $query;
    }
}

?>