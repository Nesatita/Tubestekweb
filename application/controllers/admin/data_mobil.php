<?php

class Data_mobil extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda belum Login !
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
					redirect('auth/login');
		}
	}
	
	public function index(){
		$data['mobil'] = $this->model_mobil->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_mobil', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi(){
		$id_mobil = $this->input->post('id_mobil');
		$merk = $this->input->post('merk');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$warna = $this->input->post('warna');
		$gambar = $_FILES['gambar']['name'];
		if($gambar = ''){}else{
			$config ['upload_path'] = './uploads';
			$config ['allowed_types'] = 'jpg|jpeg|png|gif';

			$this->load->library('upload', $config);
			if(!$this->upload->do_upload('gambar')){
				echo "Gambar Gagal di Upload";
			}else{
			    	$gambar=$this->upload->data('file_name');
			}
	    }

		$data = array (
			'id_mobil'     => $id_mobil,
			'merk'     		=> $merk,
			'kategori'     => $kategori,
			'harga'    		=> $harga,
			'warna'    		=> $warna,
			'gambar'    	=> $gambar,
		);

		$this->model_mobil->tambah_mobil($data, 'mobil');
		redirect('admin/data_mobil/index');

	}

	public function edit($id){
		$where = array('id_mobil' => $id);
		$data['mobil'] = $this->model_mobil->edit_mobil($where, 'mobil')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_mobil', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id_mobil = $this->input->post('id_mobil');
		$merk = $this->input->post('merk');
		$kategori = $this->input->post('kategori');
		$harga = $this->input->post('harga');
		$warna = $this->input->post('warna');

		$data = array (
			'merk' => $merk,
			'kategori' => $kategori,
			'harga'    		=> $harga,
			'warna'    		=> $warna,
		);

		$where = array (
			'id_mobil' => $id_mobil
		);

		$this->model_mobil->update_data($where, $data, 'mobil');
		redirect('admin/data_mobil/index');
	}
	public function hapus ($id){
		$where = array('id_mobil' => $id);
		$this->model_mobil->hapus_data($where, 'mobil');
		redirect('admin/data_mobil/index');
	}
}
?>