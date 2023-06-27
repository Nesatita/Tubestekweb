<?php

class pesan extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '3'){
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
		$data['pesan'] = $this->model_pesan->tampil_data()->result();
		$this->load->view('templates_admin/header');
		$this->load->view('cs/sidebarcs');
		$this->load->view('cs/pesan', $data);
		$this->load->view('templates_admin/footer');
	}

	public function update(){
		$id_pesan = $this->input->post('id_pesan');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$no_hp = $this->input->post('no_hp');
		$pesan_bantuan = $this->input->post('pesan_bantuan');	
		$pesan_balasan = $this->input->post('pesan_balasan');
		$data = array (
			'nama' => $nama,
			'email' => $email,
			'no_hp' => $no_hp,
			'pesan_bantuan' => $pesan_bantuan,
			'pesan_balasan' => $pesan_balasan,
		);

		$where = array (
			'id_pesan' => $id_pesan
		);

		$this->model_pesan->update_data($where, $data, 'pesan');
		redirect('cs/pesan/index');
	}
}
?>