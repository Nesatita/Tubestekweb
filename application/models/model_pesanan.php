<?php

class Model_Pesanan extends CI_Model{
	public function tampil_data(){
		return $this->db->get('pesanan');
	}
	public function get_data_by_value() {
        $this->db->select('*');
        $this->db->from('pesanan');
        $query = $this->db->get();
        return $query->result();
    }
    public function tambah_pesanan($data, $table){
        $this->db->insert($table, $data);
    }
}