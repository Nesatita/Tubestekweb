<?php

class Data_user extends CI_Controller{

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
		$data['user'] = $this->model_user->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/data_user', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi(){
		$id_user = $this->input->post('id_user');
		$nama_user = $this->input->post('nama_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$role_id = $this->input->post('role_id');

		$password1= $this->input->post('password',true);
		$data = array (
			'id_user'     => $id_user,
			'nama_user'     		=> $nama_user,
			'username'     => $username,
			'password'    		=> password_hash($password1,PASSWORD_DEFAULT),
			'email'    		=> $email,
			'no_hp'    	=> $no_hp,
			'role_id'    	=> $role_id,
		);

		$this->model_user->tambah_user($data, 'user');
		redirect('admin/data_user/index');

	}

	public function edit($id){
		$where = array('id_user' => $id);
		$data['user'] = $this->model_user->edit_user($where, 'user')->result();
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/edit_user', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id_user = $this->input->post('id_user');
		$nama_user = $this->input->post('nama_user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$role_id = $this->input->post('role_id');

		$password1= $this->input->post('password',true);
		$data = array (
			'id_user'     => $id_user,
			'nama_user'     		=> $nama_user,
			'username'     => $username,
			'password'    		=> password_hash($password1,PASSWORD_DEFAULT),
			'email'    		=> $email,
			'no_hp'    	=> $no_hp,
			'role_id'    	=> $role_id,
		);

		$where = array (
			'id_user' => $id_user
		);

		$this->model_user->update_data($where, $data, 'user');
		redirect('admin/data_user/index');
	}
	public function hapus ($id){
		$where = array('id_user' => $id);
		$this->model_user->hapus_data($where, 'user');
		redirect('admin/data_user/index');
	}
}
?>