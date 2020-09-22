<?php
class m_gejala extends CI_model
{
	protected $table = 'tb_gejala';
	protected $kode = 'kd_gejala';

	public function tampil()
	{
			return $this->db->get('tb_gejala')->result();;
	}

	public function getAllGejala()
	{
		return $this->db->get('tb_gejala')->result_array();
	}

	public function autoNumber(){
		$kode = "G";

		$data = $this->db->query("SELECT MAX(kd_gejala) AS last FROM tb_gejala ")->row_array();

		$lastNo = $data['last'];

		$lastNoUrut   = substr($lastNo,1,3);

		$nextNoUrut   = $lastNoUrut+1;

		$nextNoUrut = $kode.sprintf('%03s',$nextNoUrut);

		return $nextNoUrut;

	}

	public function get_list_by_id($id){
		$kd=  "'" . str_replace(",", "','", $id) . "'";
         $sql = "select id,kd_gejala,nama_gejala from tb_gejala where kd_gejala in (".$kd.")";
         return $this->db->query($sql);
     }

	public function saveGejala($data){
		$this->db->insert('tb_gejala',$data);
	}

	public function updateGejala($data,$id){
		$this->db->where('id',$id);
		$this->db->update('tb_gejala',$data);
	}

	public function deleteGejala($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_gejala');
	}

}
