<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Diagnosa extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_diagnosa');
		$this->load->library('form_validation', 'Pdf');
		$this->load->helper(array('form', 'url'));
		// is_loggedin();
	}

	public function index()
	{
		$data['judul'] = "Data Diagnosa";
		$data['active1'] = "";
		$data['active2'] = "";
		$data['active3'] = "";
		$data['active4'] = "";
		$data['active5'] = "";
		$data['active6'] = "active";
		$data['diagnosa'] = $this->m_diagnosa->getAllDiagnosa();
		$this->load->view('templates/header', $data);
		$this->load->view('diagnosa/v_diagnosa');
		$this->load->view('templates/footer');
	}
}
