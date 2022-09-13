<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Metode_model extends CI_Model
{
    public $table = 'metode_pembayaran';
    public $id 	  = 'id_metode';
    public $order = 'DESC';

    function __construct(){
        parent::__construct();
    }

    // get all
    function get_all(){
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result_array();
    }

    // get data by id
    function get_by_id($id){
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function getharga($id){
        $this->db->select('Harga');
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->result_array();
    }
    
    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('id_metode', $q);
		$this->db->or_like('nama_metode', $q);
		$this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('id_metode', $q);
		$this->db->or_like('nama_metode', $q);
		$this->db->limit($limit, $start);
        return $this->db->get($this->table)->result();
    }

    function get_json(){
         return $this->db->get($this->table)->result_array();
    }

    // insert data
    function insert($data){
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data){
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id){
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }
}
/* End of file Layanan_model.php */
/* Location: ./application/models/Layanan_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-07-29 06:10:02 */
/* http://harviacode.com */