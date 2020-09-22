<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyakit extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_penyakit');
		$this->load->library('form_validation', 'Pdf');
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		// is_admin();
		is_loggedin();
	}

	public function index(){
		$data['info'] = $this->db->get_where('tb_user',['username'=>$this->session->userdata('username')])->row_array();
		$data['judul'] = "Data Penyakit";
		$data['active1'] = "";
		$data['active2'] = "active";
		$data['active3'] = "";
		$data['active4'] = "";
		$data['active5'] = "";
		$data['active6'] = "";
		$data['penyakit'] = $this->m_penyakit->getAllPenyakit();
		$data['autoid'] 	= $this->m_penyakit->autoNumber();
		$this->load->view('templates/header', $data);
		$this->load->view('penyakit/v_penyakit');
		$this->load->view('templates/footer');
	}

	public function save(){
		$this->form_validation->set_rules('nama','Nama','trim|required|is_unique[tb_penyakit.nama]');
		$data = [
			'kd_penyakit' => $this->input->post('kd_penyakit',true),
			'nama' => $this->input->post('nama',true),
			'deskripsi' => $this->input->post('deskripsi',true),
			'keterangan' => $this->input->post('keterangan',true)
		];
		if($this->form_validation->run()){
			$this->m_penyakit->savePenyakit($data);
			$this->session->set_flashdata('flash', 'Ditambahkan');
			redirect('Penyakit');
		} else {
			$this->session->set_flashdata('error', 'Gagal');
			redirect('Penyakit');
		}
	}

	public function update(){
		$id_p = $this->input->post('id_p');
		$data = [
			'kd_penyakit' => $this->input->post('kd_penyakit',true),
			'nama'		=> $this->input->post('nama',true),
			'deskripsi' => $this->input->post('deskripsi',true),
			'keterangan'	=> $this->input->post('keterangan',true)
		];
			$this->m_penyakit->updatePenyakit($data,$id_p);
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('Penyakit');
		}

	public function delete($id_p){
		$this->m_penyakit->deletePenyakit($id_p);
		$this->session->set_flashdata('flash', 'Dihapus');
		redirect('Penyakit');
	}

}
