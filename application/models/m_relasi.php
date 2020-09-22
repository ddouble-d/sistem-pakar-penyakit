<?php
class m_relasi extends CI_model
{

  public function tampil()
  {
      return $this->db->get('tb_relasi')->result();
  }

  public function getAllRelasi()
	{
		// return $this->db->join('tb_hasilds', 'tb_hasilds.id_user = tb_user.id');
		// return $this->db->get('')->result_array();
		return $this->db->query("SELECT * FROM tb_relasi JOIN tb_penyakit on tb_penyakit.kd_penyakit = tb_relasi.kd_penyakit
    JOIN tb_gejala on tb_gejala.kd_gejala = tb_relasi.kd_gejala")->result_array();
	}

  public function getRules()
  {
    return $this->db->query("SELECT GROUP_CONCAT(b.id_p), c.bobot
    FROM tb_relasi a
    JOIN tb_penyakit b ON a.id_r=b.id_p
    JOIN tb_gejala c on c.kd_gejala = b.kd_gejala
    WHERE a.id_r IN(".implode(',',$_POST['gejala']).")
    GROUP BY a.id_r")->result_array();
  }

  public function saveRelasi($data){
		$this->db->insert('tb_relasi',$data);
	}

  public function deleteRelasi($id_r){
		$this->db->where('id_r',$id_r);
		$this->db->delete('tb_relasi');
	}


  public function get_relasi( $kd_penyakit )
  {
      $relasi = $this->db->query("SELECT kd_gejala FROM tb_relasi WHERE kd_penyakit='$kd_penyakit'")->result();
      $kd_gejala = array();
      foreach($relasi as $row){
          $kd_gejala[] = $row->kd_gejala;
      }

      $gejala = $this->gejalads_model->tampil();
      $arr = array();
      foreach($gejala as $row_gejala){
          $arr[$row_gejala->kd_gejala] = array(
              'nm_gejala' => $row_gejala->nm_gejala,
              'related' => in_array($row_gejala->kd_gejala, $kd_gejala),
          );
      }
      return $arr;
  }

}
