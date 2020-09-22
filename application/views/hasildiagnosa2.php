        <?php
        $selected = (array) $_POST['gejala'];
         // if (count($_POST['gejala'])<3){ ?>
           <!-- <div class="container">
             <div class="col-5 mt-5 mx-auto">
               <div class="card">
                 <div class="card-body" style="text-align:center;">
                   <h3>Pilih minimal 3 gejala!</h3>
                   <a href="< ?=base_url()?>CekDiagnosa" class="btn btn-primary btn-icon">
                     <span class="nav-link-inner--text">Kembali</span>
                   </a>
                 </div>
              </div>
             </div>
           </div> -->
        <!-- < ?php }else{?> -->


          <?php
          $selected = (array) $_POST['gejala'];
          $this->session->set_userdata('gejala', $selected);?>
          <div class="container">
            <div class="col-sm-7 mt-5 mx-auto">
              <div class="card">
                <div class="card-body">
                  <h3>Gejala yang dipilih</h3><br>
                  <?php
                  $no=1;
                  foreach($selected as $kode_gejala):?>
                  <?=$no++?>.
                  <?=$gejala[$kode_gejala]->nm_gejala?><br>
                <?php endforeach;?>

                <!-- buka php 1 -->
                <?php

                $GEJALA = $gejala;
                $DIAGNOSA = $diagnosa;

                $hasil[] = array(
                  'arr' => array_keys($DIAGNOSA),
                  'name' => implode(',', array_keys($DIAGNOSA)),
                  'value' => 1,
                );

                // buka foreach 1
                foreach ($selected as $kode):
                  $new_hasil = array();
                  $arr_diagnosa = $relasi[$kode];

                  // tutup php 1
                  ?>
                  <!-- <h3 class="panel-title"><=$GEJALA[$kode]->nm_gejala .' ( ' . implode(', ', $arr_diagnosa) .' )'?></h3>
                  <table class="table table-bordered table-hover table-striped">
                    <thead><tr>
                      <th>#</th>
                      <th><=implode(',', $arr_diagnosa) .' &raquo; ' . $GEJALA[$kode]->bobot?></th>
                      <th>&oslash; &raquo; <=1 - $GEJALA[$kode]->bobot?></th>
                    </tr></thead> -->
                    <!-- buka foreach 2 -->
                    <?php foreach($hasil as $row):
                      $arr = array_intersect($row['arr'], $arr_diagnosa);
                      $name =  implode(',', $arr);
                      $value = $row['value'] * $GEJALA[$kode]->bobot;
                      $new_hasil[] = array(
                        'arr' => $arr,
                        'name' => $name,
                        'value' => $value,
                      );

                      $arr2 = array_intersect($row['arr'], array_keys($DIAGNOSA));
                      $name2 =  implode(',', $arr2);
                      $value2 = $row['value'] * (1 - $GEJALA[$kode]->bobot);

                      $new_hasil[] = array(
                        'arr' => $arr2,
                        'name' => $name2,
                        'value' => $value2,
                      );

                      $hasil = $new_hasil;
                      $hasil_akhir = $new_hasil;
                      ?>
                      <!-- tutup foreach 2 -->
                    <?php endforeach;?>

                    <!-- buka foreach 3 -->
                  </table>
                  <?php
                  $unik = array();
                  foreach($hasil as $row){
                    $unik[$row['name']] = $row['arr'];
                  }

                  $new_hasil = DS_hitung($unik, $hasil);
                  $hasil = $new_hasil;
                  // tutup foreach 3
                  ?>



                  <!-- tutup foreach 1 -->
                <?php endforeach;

                $best = DS_get_best($hasil);
                $diags = array();
                foreach($best['arr'] as $val){
                  $diags[] =  $DIAGNOSA[$val];
                  $diagnosa_akhir = $DIAGNOSA[$val];
                  $ket_diag = $keterangan[$val];
                }
                // echo "<pre>";
                // var_dump($diags);
                // echo "</pre>";


                //proses simpan hasil df dsini
                //perbaiki ya...aku ngantuk
                //bagusnya buatkan tabel hasil df dan simpan kesitu
                //siyappppp
                // $user = $this->session->userdata('id_user');
                // $k = 0;
                // foreach ($best['arr'] as $key => $v) {
                //         $nm_penyakit = array_values($diags);
                //         $hasil_kepercayaan = round($best['value'] * 100);
                // $in = $this->db->query("INSERT INTO tb_hasilds (id_user, kd_penyakit, nama_penyakit, kepercayaan) VALUES(".$user.", '".$v."', '".$nm_penyakit[$k++]."', ".$hasil_kepercayaan." ) ");
                // }
                ?>
                <?php 
                if($best['value'] * 100 > 50){ ?>
                  <br><p>Berdasarkan gejala yang terpilih maka anda di prediksi mengidap penyakit <strong><?=implode(', ', $diags)?></strong> dengan persentase sebesar <strong><?=round($best['value'] * 100) ?>%</strong></p>
                  <?= $ket_diag ?>
				  <br><p style="color: red">*Konsultasi ke dokter untuk pemeriksaan lebih lanjut</p>
				  <br><a href="<?=base_url()?>CekDiagnosa" class="btn btn-primary btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--text">Diagnosa Lagi</span>
                  </a>
				  <a href="<?=base_url()?>InfoPenyakit" class="btn btn-info btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--text">Cek Informasi Penyakit Lainnya</span>
                  </a>
                <?php }else{?>
                  <br><p>Penyakit tidak dapat diprediksi karena tingkat kepercayaan gejala terlalu rendah</p>
				  <a href="<?=base_url()?>CekDiagnosa" class="btn btn-primary btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--text">Diagnosa Ulang</span>
                  </a>
                <?php }
                ?>

              <?php
            // }
              ?>
            </div>
          </div>
        </div>
        </div>
      </section>
    </div>
  </main>
