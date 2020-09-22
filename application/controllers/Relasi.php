<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Relasi extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_diagnosa');
    $this->load->model('m_relasi');
    $this->load->model('m_gejala');
    $this->load->model('m_penyakit');
    $this->load->library('form_validation', 'Pdf');
    $this->load->helper(array('form', 'url'));
    // is_admin();
    is_loggedin();
  }

  public function index(){
    $data['info'] = $this->db->get_where('tb_user',['username'=>$this->session->userdata('username')])->row_array();
    $data['judul'] = "Data Relasi";
		$data['active1'] = "";
		$data['active2'] = "";
		$data['active3'] = "";
		$data['active4'] = "";
		$data['active5'] = "active";
    $data['active6'] = "";
    // $data['DIAGNOSA'] = $this->m_diagnosa->tampil($this->input->get('search'));
    // $data['GEJALA'] = $this->m_gejala->tampil();
    // $data['RELASI'] = $this->m_relasi->tampil($this->input->get('search'));
    $data['penyakit'] = $this->m_penyakit->getAllPenyakit();
    $data['gejala'] = $this->m_gejala->getAllGejala();
    $data['relasi'] = $this->m_relasi->getAllRelasi();
    $this->load->view('templates/header', $data);
		$this->load->view('relasi/v_relasi2');
		$this->load->view('templates/footer');
  }

  public function save() {
    $this->form_validation->set_rules('kd_penyakit', 'Kode Penyakit', 'callback_cek_relasi');
    $data = [
			'kd_penyakit' => $this->input->post('kd_penyakit',true),
			'kd_gejala' => $this->input->post('kd_gejala',true)
		];
    if($this->form_validation->run()){
      $this->m_relasi->saveRelasi($data);
      $this->session->set_flashdata('flash', 'Ditambahkan');
      redirect('Relasi');
    }
    else {
      $this->session->set_flashdata('error', 'Gagal');
      redirect('Relasi');
    }
  }

  function cek_relasi() {
    $kd_penyakit = $this->input->post('kd_penyakit');// get fiest name
    $kd_gejala = $this->input->post('kd_gejala');// get last name
    $this->db->select('*');
    $this->db->from('tb_relasi');
    $this->db->where('kd_penyakit', $kd_penyakit);
    $this->db->where('kd_gejala', $kd_gejala);
    $query = $this->db->get();
    $num = $query->num_rows();
    if ($num > 0) {
        return FALSE;
    } else {
        return TRUE;
    }
}

  public function delete($id_r){
    $this->m_relasi->deleteRelasi($id_r);
    $this->session->set_flashdata('flash', 'Dihapus');
		redirect('Relasi');
  }

}
