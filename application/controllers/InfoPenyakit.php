<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class InfoPenyakit extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_penyakit');
	}

	public function index(){
		$data['info'] = $this->db->get_where('tb_user',['username'=>$this->session->userdata('username')])->row_array();
		$data['penyakit'] = $this->m_penyakit->getAllPenyakitOrder();
		$this->load->view('templates/header2', $data);
		$this->load->view('v_infopenyakit');
		$this->load->view('templates/footer2');
	}

}
