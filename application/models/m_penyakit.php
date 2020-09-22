<?php
class m_penyakit extends CI_model
{
	public function getAllPenyakit(){
		return $this->db->get('tb_penyakit')->result_array();
	}

	public function getAllPenyakitOrder(){
		$this->db->from('tb_penyakit');
		$this->db->order_by('nama', 'ASC');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function savePenyakit($data){
		$this->db->insert('tb_penyakit',$data);
	}

	public function updatePenyakit($data,$id_p){
		$this->db->where('id_p',$id_p);
		$this->db->update('tb_penyakit',$data);
	}

	public function deletePenyakit($id_p){
		$this->db->where('id_p',$id_p);
		$this->db->delete('tb_penyakit');
	}

	public function autoNumber(){
		$kode = "P";

		$data = $this->db->query("SELECT MAX(kd_penyakit) AS last FROM tb_penyakit ")->row_array();

		$lastNo = $data['last'];

		$lastNoUrut   = substr($lastNo,1,3);

		$nextNoUrut   = $lastNoUrut+1;

		$nextNoUrut = $kode.sprintf('%03s',$nextNoUrut);

		return $nextNoUrut;

	}

}
