<?php

class pemesananmobil extends CI_Controller{

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
	
	public function index(){
		$this->load->model('model_pesanan');
        $data['pesanan'] = $this->model_pesanan->get_data_by_value();
		$this->load->view('templates_admin/header');
		$this->load->view('customer/sidebarcustomer');
		$this->load->view('customer/pemesanan', $data);
		$this->load->view('templates_admin/footer');
	}

	public function tambah_aksi(){
		$id_pesanan = $this->input->post('id_pesanan');
		$id_mobil = $this->input->post('id_mobil');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$no_hp = $this->input->post('no_hp');
		$merk = $this->input->post('merk');
		$harga = $this->input->post('harga');
		$data = array (
			'id_pesanan'     => $id_pesanan,
			'id_mobil'     	=> $id_mobil,
			'nama'     		=> $nama,
			'alamat'    	=> $alamat,
			'no_hp'    		=> $no_hp,
			'merk'    		=> $merk,
			'harga'    		=> $harga,
		);

		$this->model_pesanan->tambah_pesanan($data, 'pesanan');
		redirect('customer/pemesananmobil/index');

	}

}
?>