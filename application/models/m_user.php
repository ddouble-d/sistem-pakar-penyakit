<?php
class m_user extends CI_model
{
	public function getAllUser()
	{
		return $this->db->get('tb_user')->result_array();
	}

	public function saveUser($data){
		$this->db->insert('tb_user',$data);
	}

	public function updateUser($data,$id){
		$this->db->where('id',$id);
		$this->db->update('tb_user',$data);
	}

	public function deleteUser($id){
		$this->db->where('id',$id);
		$this->db->delete('tb_user');
	}

}
