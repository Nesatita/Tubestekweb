<?php

class Model_Pesan extends CI_Model{
	public function tampil_data(){
		return $this->db->get('pesan');
	}
	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function tambah_pesan($data, $table){
		$this->db->insert($table, $data);
	}
}