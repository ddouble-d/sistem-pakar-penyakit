<div class="header bg-gradient-info pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
    </div>
  </div>
</div>
<div class="container-fluid mt--9">
  <div class="col-12 mt-5">
    <div class="card">
      <div class="card-body">

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
        </div>
        <div class="flash-error" data-flasherror="<?= $this->session->flashdata('error'); ?>">
        </div>

        <button type="button" data-toggle="modal" data-target="#modal-form" class="btn btn-outline-primary" style="margin-bottom:10px;">
          <span data-toggle="tooltip" data-placement="top" title="Tambah Data" class="btn-inner--icon"> <i class="ni ni-fat-add"></i>
          </span>
        </button>
        <div class="table-responsive">
          <div class="box-header">
            <div class="box-body">
            <table id="example" class="table table-striped table-bordered data">
              <thead>
                <tr>
                  <th>Penyakit</th>
                  <th>Gejala</th>
                  <th width="10%">Aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php foreach ($relasi as $data):?>
                  <td><?= $data['kd_penyakit'] ?>-<?= $data['nama'] ?></td>
                  <td><?= $data['kd_gejala']?>-<?= $data['nm_gejala']?></td>
                  <td>
                    <a href="<?= base_url('relasi/delete/'.$data['id_r']); ?>" data-toggle="tooltip" data-placement="top" title="Hapus Data"
                      class="btn btn-icon btn-2 btn-danger tombol-hapus"><i class="ni ni-fat-remove"></i>
                    </a>
                  </td>

                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>

<!-- Modal Tambah -->
<div class="modal fade" id="modal-form" tabindex="-1"  aria-hidden="true">
	<div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
		<div class="modal-content">
			<form action="<?=base_url('relasi/save')?>" method="post" enctype="multipart/form-data" role="form">
				<div class="modal-header">
					<h3 class="modal-title" id="modal-title-default">Tambah Data Relasi</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>

				<div class="modal-body p-0">
					<div class="card bg-secondary shadow border-0">
						<div class="card-header bg-transparent pb-5">
							<div class="form-group mb-3">
								<h4>Kode Penyakit<h4>
									<div class="input-group input-group-alternative">
										<select class="custom-select" name="kd_penyakit">
                    <?php foreach ($penyakit as $data){ ?>
                      <option value="<?=$data['kd_penyakit']?>"><?php echo $data['kd_penyakit'] ?>-<?php echo $data['nama'] ?></option>
                          <?php } ?>
                        </select>
										<small class="text-danger"><?=form_error('kd_penyakit');?></small>
									</div>
								</div>
								<div class="form-group mb-3">
									<h4>Kode Gejala<h4>
										<div class="input-group input-group-alternative">
                      <select class="custom-select" name="kd_gejala">
                      <?php foreach ($gejala as $data){ ?>
                        <option value="<?=$data['kd_gejala']?>"><?php echo $data['kd_gejala'] ?>-<?php echo $data['nm_gejala'] ?></option>
                            <?php } ?>
                          </select>
										</div>
									</div>
									</div>
								</div>
							</div>

							<div class="modal-footer">
								<button type="submit" id="simpan" class="btn btn-primary">Simpan</button>
								<button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Tutup</button>
							</div>
						</form>
					</div>
				</div>
			</div>
