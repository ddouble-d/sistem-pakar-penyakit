<?php
class m_admin extends CI_model
{

  public function jumlahUser(){
  		$query =  $this->db->query("SELECT id FROM tb_user");
  		return $query;
  }

  public function jumlahPenyakit(){
      $query =  $this->db->query("SELECT id_p FROM tb_penyakit");
      return $query;
  }

  public function jumlahGejala(){
  		$query =  $this->db->query("SELECT id FROM tb_gejala");
  		return $query;
  }

  public function jumlahDiagnosa(){
  		$query =  $this->db->query("SELECT id_hasilds FROM tb_hasilds");
  		return $query;
  }

}
