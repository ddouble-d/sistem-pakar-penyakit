<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gejala extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_gejala');
		$this->load->library('form_validation', 'Pdf');
		$this->load->helper(array('form', 'url'));
		// is_admin();
		is_loggedin();
	}

	public function index()
	{
		$data['info'] = $this->db->get_where('tb_user',['username'=>$this->session->userdata('username')])->row_array();
		$data['judul'] = "Data Gejala";
		$data['active1'] = "";
		$data['active2'] = "";
		$data['active3'] = "";
		$data['active4'] = "active";
		$data['active5'] = "";
		$data['active6'] = "";
		$data['gejala'] = $this->m_gejala->getAllGejala();
		$data['autoid'] 	= $this->m_gejala->autoNumber();
		$this->load->view('templates/header', $data);
		$this->load->view('gejala/v_gejala');
		$this->load->view('templates/footer');
	}

	public function save(){
		$data = [
			'kd_gejala' => $this->input->post('kd_gejala',true),
			'nm_gejala' => $this->input->post('nm_gejala',true),
			'bobot' => $this->input->post('bobot',true)
		];
		$this->m_gejala->saveGejala($data);
		$this->session->set_flashdata('flash', 'Ditambahkan');
		redirect('Gejala');
	}

	public function update(){
		$id = $this->input->post('id');
		$data = [
			'kd_gejala' => $this->input->post('kd_gejala',true),
			'nm_gejala' => $this->input->post('nm_gejala',true),
			'bobot' => $this->input->post('bobot',true)
		];
		$this->m_gejala->updateGejala($data,$id);
		$this->session->set_flashdata('flash', 'Diubah');
		redirect('Gejala');
	}

	public function delete($id){
		$this->m_gejala->deleteGejala($id);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Gejala');
	}

}
