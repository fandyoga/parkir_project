<?php
class Allmod extends CI_Model {
 
 	// pesan error
 	var $pesan_error = array(
        1451 => 'Sibuk'
    );

 	// constructor
    public function __construct() {
        parent::__construct();
    }

    // tambah data
    function tambah_data($tabel, $data) {
        if (empty($tabel) || empty($data))
            return false;
        return $this->db->insert($tabel, $data);
    }

    // tambah data batch
    function tambah_data_batch($tabel, $data) {
        if (empty($tabel) || empty($data))
            return false;
        return $this->db->insert_batch($tabel, $data);
    }

    // ubah data
    function ubah_data($tabel, $kolom, $id = null, $data) {
        if (empty($tabel) || empty($data) || empty($kolom))
            return false;

        if (is_array($kolom)) {
            $this->db->update($tabel, $data, $kolom);
            return $this->db->affected_rows();
        }
        $this->db->where($kolom, $id);
        $this->db->update($tabel, $data);
        return $this->db->affected_rows();
    }

    // menghapus data
    function hapus_data($tabel, $parameter) {
        if (empty($tabel) OR empty($parameter))
            return false;
        return $this->db->delete($tabel, $parameter);
    }

    // get data
    function get_data($tabel)
    {
    	if (empty($tabel))
            return false;

    	$data = $this->db->get($tabel);
		return $data;
    }

    // get baris
    function get_baris($tabel, $kolom, $id)
    {
    	if (empty($tabel) || empty($kolom))
            return false;

    	$this->db->where($kolom, $id);
    	$baris = $this->db->get($tabel);
		return $baris;
    }

    // pesan error
    function get_error_message() {
        $get_error = $this->db->error();
        if (isset($this->pesan_error[$get_error['code']]))
            return $this->pesan_error[$get_error['code']];
        else
            return $get_error['message'];
    }

    // database error
    function get_db_error() {
        return $this->db->error();
    }

    // mendapatkan id terakhir
    function id_terakhir() {
        return $this->db->insert_id();
    }

    // check ketersediaan data
    public function is_data_exist($table, $params) {
        $query = $this->db->get_where($table, $params, 1);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return false;
        }
    }
}
