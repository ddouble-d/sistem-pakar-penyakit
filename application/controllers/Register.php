<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
    $this->load->model('m_user');
    $this->load->library('form_validation');
    $this->load->helper(array('form', 'url'));
		// is_loggedin();
	}

	public function index()
	{
		$this->load->view('templates/header2');
		$this->load->view('v_register');
		$this->load->view('templates/footer2');
	}

  public function save(){
		// $msg          = array('success'=>false,'messages'=>array());
		// $this->form_validation->set_rules('nama_pengguna', 'Nama', 'required');
		// $this->form_validation->set_rules('jk', 'Nama', 'required');
		// $this->form_validation->set_rules('umur', 'Nama', 'required');
		// $this->form_validation->set_rules('alamat', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|is_unique[tb_user.email]');
		// $this->form_validation->set_rules('username', 'Nama', 'required');
		// $this->form_validation->set_rules('password', 'Nama', 'required');
		// // $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		if($this->form_validation->run()==FALSE){
      $this->session->set_flashdata('message',
      '<div class="alert alert-danger alert-dismissible" role="alert">
      Email sudah terpakai!
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
      </button>
      </div>');
      redirect('Register');
			} else {
				$data = [
					'nama_pengguna' => $this->input->post('nama_pengguna',true),
					'email' => $this->input->post('email',true),
					'password' => password_hash($this->input->post('password',true), PASSWORD_DEFAULT),
					'level' => 'User'
				];
				$this->m_user->saveUser($data);
        $this->session->set_flashdata('message',
				'<div class="alert alert-success alert-dismissible" role="alert">
				Berhasil mendaftar! Silakan login
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
				</button>
				</div>');
        redirect('Login');
		}

}
}
