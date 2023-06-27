<?php

class Dashboard extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
					  Anda belum Login !
					  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    <span aria-hidden="true">&times;</span>
					  </button>
					</div>');
					redirect('auth/login');
		}
	}

	public function pembayaran(){
		$this->load->view('templates_customer/header');
		$this->load->view('templates_customer/sidebar');
		$this->load->view('templates_customer/pembayaran');
		$this->load->view('templates_customer/footer');
	}
}
?>