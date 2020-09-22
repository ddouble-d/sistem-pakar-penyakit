<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CekDiagnosa extends CI_Controller {

  public function __construct()
  {
    parent::__construct();
    $this->load->model('m_gejala');
    $this->load->model('m_relasi');
    $this->load->model('m_diagnosa');
    $this->load->model('m_penyakit');
    $this->load->library('form_validation', 'Pdf');
    $this->load->helper(array('form', 'url'));
    // is_loggedin();
  }

  public function index()
  {
    // $data['judul'] = "Dashboard";
    // $data['active1'] = "active";
    // $data['active2'] = "";
    // $data['active3'] = "";
    // $data['active4'] = "";
    // $data['active5'] = "";
    // $data['active6'] = "";
    $data['info'] = $this->db->get_where('tb_user',['username'=>$this->session->userdata('username')])->row_array();
    $data['gejala']	= $this->m_gejala->getAllGejala();
    $this->load->view('templates/header2',$data);
    $this->load->view('cekdiagnosa2');
    $this->load->view('templates/footer2');
  }

  public function hitung()
  {
    $data['info'] = $this->db->get_where('tb_user',['username'=>$this->session->userdata('username')])->row_array();
    if (!$this->input->post('gejala')) {
      $this->session->set_flashdata('jmlgejala', 'Gagal');
      // redirect('CekDiagnosa');
    }
    if (count($_POST['gejala'])<3)
    {
      $this->session->set_flashdata('gjlkurang', 'Gagal');
      redirect('CekDiagnosa');
    }
    else
    {
    // $data['rules']	= $this->m_relasi->getRUles();
    $gejala = implode(",", $this->input->post("gejala"));
    $data["listGejala"] = $this->m_gejala->get_list_by_id($gejala);

    $DIAGNOSA = $this->m_diagnosa->tampil();
    $GEJALA = $this->m_gejala->tampil();
    $RELASI = $this->m_relasi->tampil();


    $data['diagnosa'] = array();
    $data['keterangan'] = array();
    $data['gejala'] = array();
    $data['relasi'] = array();


    foreach($DIAGNOSA as $row){
      $data['diagnosa'][$row->kd_penyakit] = $row->nama;
    }

    foreach($DIAGNOSA as $row){
      $data['keterangan'][$row->kd_penyakit] = $row->keterangan;
    }

    foreach($GEJALA as $row){
      $data['gejala'][$row->kd_gejala] = $row;
    }

    foreach ($RELASI as $row) {
      $data['relasi'][$row->kd_gejala][] = $row->kd_penyakit;
    }

    $this->load->view('templates/header2',$data);
    $this->load->view('hasildiagnosa2');
    $this->load->view('templates/footer2');
  }
  // }
  }

}
