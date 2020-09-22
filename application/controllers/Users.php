<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_user');
		$this->load->library('form_validation', 'Pdf');
		$this->load->helper(array('form', 'url'));
		// is_admin();
		is_loggedin();
	}

	public function index()
	{
		$data['info'] = $this->db->get_where('tb_user',['username'=>$this->session->userdata('username')])->row_array();
		$data['judul'] = "Data Pakar";
		$data['active1'] = "";
		$data['active2'] = "";
		$data['active3'] = "active";
		$data['active4'] = "";
		$data['active5'] = "";
		$data['active6'] = "";
		$data['user'] = $this->m_user->getAllUser();
		$this->load->view('templates/header', $data);
		$this->load->view('user/v_user');
		$this->load->view('templates/footer');
	}

	public function save(){
		$this->form_validation->set_rules('username', 'Username', 'required|is_unique[tb_user.username]');
		if($this->form_validation->run()==FALSE){
      $this->session->set_flashdata('error', 'Gagal');
      redirect('Users');
			} else {
				$data = [
					'nama' => $this->input->post('nama',true),
					'username' => $this->input->post('username',true),
					'password' => password_hash($this->input->post('password',true), PASSWORD_DEFAULT)
					// 'level' => $this->input->post('level',true)
				];
				$this->m_user->saveUser($data);
				$this->session->set_flashdata('flash', 'Ditambahkan');
				redirect('Users');
			}
		}

		public function update(){
			$id = $this->input->post('id');
			$data = [
				'nama' => $this->input->post('nama',true),
				'username' => $this->input->post('username',true),
				'password' => password_hash($this->input->post('password',true), PASSWORD_DEFAULT)
				// 'level' => $this->input->post('level',true)
			];
			$this->m_user->updateUser($data,$id);
			$this->session->set_flashdata('flash', 'Diubah');
			redirect('users');
		}

		public function delete($id){
			$this->m_user->deleteUser($id);
			$this->session->set_flashdata('flash', 'Dihapus');
			redirect('users');
		}

	}
