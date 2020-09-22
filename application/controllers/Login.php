<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_loggedin();
	}

	public function index()
	{
		$this->load->view('templates/header2');
		$this->load->view('login');
		$this->load->view('templates/footer2');
	}

  public function auth()
	{
		$username 	= $this->input->post('username');
		$pass 	= $this->input->post('password');
		$cek = $this->db->get_where('tb_user', ['username' => $username])->row_array();		
		if($cek){
			if(password_verify($pass, $cek['password'])){
				$data = [
							'username' => $cek['username'],
							// 'level' => $cek['level']
						];
				$tes = $this->session->set_userdata($data);
				// if($cek['level'] == "Admin"){
					redirect('Admin');
				// } else {
				//	redirect('Home');
				// }
			} else {
        $this->session->set_flashdata('message',
				'<div class="alert alert-danger alert-dismissible" role="alert">
				Username/Password salah!
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
				</button>
				</div>');
				redirect('Login');
			}
		}
		else {
      $this->session->set_flashdata('message',
      '<div class="alert alert-danger alert-dismissible" role="alert">
      User belum terdaftar!
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×
      </button>
      </div>');
			redirect('Login');
		}
	}

}
