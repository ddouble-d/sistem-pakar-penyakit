<div class="header bg-gradient-warning pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
    </div>
  </div>
</div>

<div class="container-fluid mt--9">
  <form action="<?=base_url('CekDiagnosa/hitung')?>" method="post" enctype="multipart/form-data" role="form">
	<div class="col-12 mt-5">
		<div class="card">
			<div class="card-body">
        <div class="title">
            <h3>Silakan pilih gejala yang dirasakan</h3><br>
          </div>
         <?php foreach ($gejala as $value): ?>
        <div class="custom-control custom-checkbox mb-3">
        <input class="custom-control-input" type="checkbox" id="gejala<?= $value['kd_gejala'] ?>" name="gejala[]" value="<?= $value['kd_gejala'] ?>" >
        <label class="custom-control-label" for="gejala<?= $value['kd_gejala'] ?>">
        <?= $value['nm_gejala'] ?></label>
      </div>
      <?php endforeach ?><hr>
              <p style="color: red">*Minimal pilih 3 Gejala</p>
              <button type="submit" id="hitung" class="btn btn-primary">Proses</button>
      </div>
    </div>
    </div>
    <form>
    </div>
