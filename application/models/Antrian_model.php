<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Antrian_model extends CI_Model {

    public $table = 'antrian';
    public $table2 = 'booking';
    public $id = 'no_antrian';
    public $id2 = 'id_booking';
    public $order = 'ASC';

    function __construct() {
        parent::__construct();
    }

    function tampil() {
        $this->db->join('data_pasien', $this->table . '.ID_pasien=data_pasien.ID_pasien');
        echo json_encode($this->db->get($this->table)->result());
    }

     function update_book($where,$data,$tabel){
        $this->db->where($where);        
        $this->db->update($tabel,$data);   
    }
    // get all
    function get_all() {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

    // get data by id
    function get_by_id($id) {
        $this->db->where($this->id, $id);
        return $this->db->get($this->table)->row();
    }

    function get_by_id_pasien($id) {
        $this->db->where('id_booking', $id);
        return $this->db->get($this->table)->row();
    }

    // get total rows
    function total_rows($q = NULL) {
        $this->db->like('no_antrian', $q);
        $this->db->or_like('ID_pasien', $q);
        $this->db->from($this->table);
        return $this->db->count_all_results();
    }

    // get data with limit and search
    function get_limit_data($limit, $start = 0, $q = NULL) {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('no_antrian', $q);
        $this->db->or_like('antrian.ID_pasien', $q);
        $this->db->limit($limit, $start);
        $this->db->join('data_pasien', $this->table . '.ID_pasien=data_pasien.ID_pasien');
        return $this->db->get($this->table)->result();
    }

    // insert data
    function insert($data) {
        $this->db->insert($this->table, $data);
    }

    // update data
    function update($id, $data) {
        $this->db->where($this->id, $id);
        $this->db->update($this->table, $data);
    }

    // delete data
    function delete($id) {
        $this->db->where($this->id, $id);
        $this->db->delete($this->table);
    }

    function delete_pasien($id) {
        $this->db->where('id_pasien', $id);
        $this->db->delete($this->table);
    }

    function get_json() {
        $this->db->order_by($this->id, $this->order);
        $this->db->like('no_antrian');
        $this->db->or_like('antrian.id_booking');

        $this->db->join('booking', $this->table . '.id_booking=booking.id_booking');
        return $this->db->get($this->table)->result_array();
        //return $query->result_array();
    }

}

/* End of file Antrian_model.php */
/* Location: ./application/models/Antrian_model.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2016-07-29 07:33:28 */
/* http://harviacode.com */