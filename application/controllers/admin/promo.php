<?php

class promo extends CI_Controller{

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
		$data['promo'] = $this->model_promo->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebaradmin');
		$this->load->view('admin/promo', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi(){
		$id_promo = $this->input->post('id_promo');
		
		$data = array (
			'id_promo'     => $id_promo,
			'nama_promo'     		=> $nama_promo,
			'promoname'     => $promoname,
			'password'    		=> password_hash($password1,PASSWORD_DEFAULT),
			'email'    		=> $email,
			'no_hp'    	=> $no_hp,
			'role_id'    	=> $role_id,
		);

		$this->model_promo->tambah_promo($data, 'promo');
		redirect('admin/data_promo/index');

	}

	public function edit($id){
		$where = array('id_promo' => $id);
		$data['promo'] = $this->model_promo->edit_promo($where, 'promo')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_promo', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id_promo = $this->input->post('id_promo');
		$nama_promo = $this->input->post('nama_promo');
		$promoname = $this->input->post('promoname');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$role_id = $this->input->post('role_id');

		$password1= $this->input->post('password',true);
		$data = array (
			'id_promo'     => $id_promo,
			'nama_promo'     		=> $nama_promo,
			'promoname'     => $promoname,
			'password'    		=> password_hash($password1,PASSWORD_DEFAULT),
			'email'    		=> $email,
			'no_hp'    	=> $no_hp,
			'role_id'    	=> $role_id,
		);

		$where = array (
			'id_promo' => $id_promo
		);

		$this->model_promo->update_data($where, $data, 'promo');
		redirect('admin/data_promo/index');
	}
	public function hapus ($id){
		$where = array('id_promo' => $id);
		$this->model_promo->hapus_data($where, 'promo');
		redirect('admin/data_promo/index');
	}
}
?>