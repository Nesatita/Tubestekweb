<?php 

class Registrasi extends CI_Controller{

	public function index(){

		$this->form_validation->set_rules('nama_user','Nama', 'required', ['required' => 'Nama Wajib Diisi!']);
		$this->form_validation->set_rules('username','Username', 'required', ['required' => 'Username Wajib Diisi!']);
		$this->form_validation->set_rules('password_1','Password', 'required|matches[password_2]', ['required' => 'Password Wajib Diisi!', 'matches' => 'Password Tidak Cocok']);
		$this->form_validation->set_rules('password_2','Password', 'required|matches[password_1]');
		$this->form_validation->set_rules('email','Email', 'required', ['required' => 'Email Wajib Diisi!']);
		$this->form_validation->set_rules('no_hp','No_HP', 'required', ['required' => 'No HP Wajib Diisi!']);
		
		


		if($this->form_validation->run() == FALSE){
			$this->load->view('templates_admin/header');
			$this->load->view('registrasi');
			$this->load->view('templates_admin/footer');

		}else{

			$password1= $this->input->post('password_1',true);
			$data = array (

				'id_user'      => '',
				'nama_user'    => $this->input->post('nama_user'),
				'username'    => $this->input->post('username'),
			    'password'    => password_hash($password1,PASSWORD_DEFAULT),
			    'email'    => $this->input->post('email'),
			    'no_hp'    => $this->input->post('no_hp'),
				'role_id'    => 2,
			);

			$this->db->insert('user', $data);
			redirect('auth/login');
		}
		
	}
}

?>