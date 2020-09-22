<?php
class m_diagnosa extends CI_model
{
	protected $table = 'tb_penyakit';
	protected $kode = 'kd_penyakit';

	public function tampil( $search='')
	{
			$this->db->like( $this->kode, $search );
			$this->db->or_like( 'nama', $search );
			$this->db->or_like( 'keterangan', $search );
			$this->db->order_by( $this->kode );
			$query = $this->db->get($this->table);
			return $query->result();
	}

	public function getAllDiagnosa()
	{
		// return $this->db->join('tb_hasilds', 'tb_hasilds.id_user = tb_user.id');
		// return $this->db->get('')->result_array();
		return $this->db->query("SELECT * FROM tb_hasilds JOIN tb_user on tb_user.id = tb_hasilds.id_user")->result_array();
	}

}
