<?php
$selected = (array) $_POST['gejala'];
?>


  <?php
  $selected = (array) $_POST['gejala'];
  $this->session->set_userdata('gejala', $selected);?>
  <div class="container">
    <div class="col-7 mt-5 mx-auto">
      <div class="card">
        <div class="card-body">
          <h3>Gejala yang dipilih</h3><br>
          <!-- < ?php
          $no=1;
          foreach($selected as $kode_gejala): ? >
          < ?=$no++?>.
          < ?=$gejala[$kode_gejala]->nm_gejala?><br>
        < ?php endforeach;?> -->

        <?php $rules ?>
    </div>
  </div>
</div>
</div>
</section>
</div>
</main>
