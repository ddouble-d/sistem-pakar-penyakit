<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
		$this->load->library('form_validation', 'Pdf');
		$this->load->helper(array('form', 'url'));
		// is_admin();
		is_loggedin();
	}

	public function index()
	{
		$data['info'] = $this->db->get_where('tb_user',['username'=>$this->session->userdata('username')])->row_array();
		$data['judul'] = "Dasbor";
		$data['active1'] = "active";
		$data['active2'] = "";
		$data['active3'] = "";
		$data['active4'] = "";
		$data['active5'] = "";
		$data['active6'] = "";
		$data['user']    	= $this->m_admin->jumlahUser();
		$data['penyakit'] = $this->m_admin->jumlahPenyakit();
		$data['gejala']		= $this->m_admin->jumlahGejala();
		$data['diagnosa']	= $this->m_admin->jumlahDiagnosa();
		$this->load->view('templates/header',$data);
		$this->load->view('admin/v_admin');
		$this->load->view('templates/footer');
	}

	public function logout()
	{
		$this->session->unset_userdata('username');
		redirect('Home');
	}
}
