<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// is_loggedin();
	}

	public function index()
	{
		$data['info'] = $this->db->get_where('tb_user',['username'=>$this->session->userdata('username')])->row_array();
		$this->load->view('templates/header2',$data);
		$this->load->view('home');
		$this->load->view('templates/footer2');
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect('Home');
	}

}
