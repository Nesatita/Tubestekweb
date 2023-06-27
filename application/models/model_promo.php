<?php

class Model_Promo extends CI_Model{
	public function tampil_data(){
		return $this->db->get('promo');
	}

	public function tambah_promo($data, $table){
		$this->db->insert($table, $data);
	}

	public function edit_promo($where, $table){
		return $this->db->get_where($table,$where);
	}

	public function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}

}