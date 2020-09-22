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
				<!-- <a href="<?= base_url();?>penyakit/tambah" class="btn btn-primary">Tambah</a></button> -->
				<div class="table-responsive">
					<div class="box-header">
						<div class="box-body">
							<table id="example" class="table table-striped table-bordered data">
								<thead>
									<tr>
										<!-- <th>No</th> -->
										<th style="width:100px">Kode Penyakit</th>
										<th>Nama Penyakit</th>
										<th style="width:50px">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no =1; ?>
									<?php foreach ($penyakit as $data) : ?>

										<!-- <td>< ?= $no++ ?></td> -->
										<td><?= $data['kd_penyakit'] ?></td>
										<td><?= $data['nama'] ?></td>
										<td>
                    <span data-toggle="modal" data-target="#update-data<?=$data['id_p']?>" class="btn btn-icon btn-2 btn-warning">
										<a data-toggle="tooltip" data-placement="top" title="Edit Data" class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></a>
                    </span>
                    <a href="<?= base_url('penyakit/delete/'.$data['id_p']); ?>" data-toggle="tooltip" data-placement="top" title="Hapus Data"
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
	<div class="modal-dialog modal-lg modal- modal-dialog-centered modal-" role="document">
		<div class="modal-content">
			<form action="<?=base_url('penyakit/save')?>" method="post" enctype="multipart/form-data" role="form">
				<div class="modal-header">
					<h3 class="modal-title" id="modal-title-default">Tambah Data Penyakit</h3>
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
										<input class="form-control" name="kd_penyakit" type="text" value="<?= $autoid;?>"readonly>
										<small class="text-danger"><?=form_error('kd_penyakit');?></small>
									</div>
								</div>
								<div class="form-group mb-3">
									<h4>Nama Penyakit<h4>
										<div class="input-group input-group-alternative">
											<input class="form-control" name="nama" placeholder="Masukkan Nama Penyakit" type="text" required=""
											></input>
										</div>
									</div>
									<div class="form-group mb-3">
										<h4>Deskripsi<h4>
											<div class="input-group input-group-alternative">
												<textarea class="form-control" rows="5" name="deskripsi" placeholder="Masukkan Deskripsi" type="text" required=""
												oninvalid="this.setCustomValidity('Deskripsi Belum Terisi!')"
		 										oninput="setCustomValidity('')"></textarea>
											</div>
										</div>
									<div class="form-group mb-3">
										<h4>Solusi<h4>
											<div class="input-group input-group-alternative">
												<textarea class="form-control" rows="5" name="keterangan" placeholder="Masukkan Solusi" type="text" required=""
												oninvalid="this.setCustomValidity('Solusi Belum Terisi!')"
		 										oninput="setCustomValidity('')"></textarea>
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
			<!-- End of Modal Tambah -->
			<?php $no=0; foreach($penyakit as $data): $no++; ?>
				<!-- Modal Update -->
				<div class="modal fade" id="update-data<?=$data['id_p']?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
					<div class="modal-dialog modal-lg modal- modal-dialog-centered modal-" role="document">
						<div class="modal-content">

							<div class="modal-header">
								<h3 class="modal-title" id="modal-title-default">Update Data Penyakit</h3>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>

							</div>

							<form action="<?=base_url('penyakit/update')?>" method="post" enctype="multipart/form-data" role="form">
								<div class="modal-body p-0">
									<div class="card bg-secondary shadow border-0">
										<div class="card-header bg-transparent pb-5">
											<input type="hidden" id="id_p" name="id_p" class="form-control" value="<?=$data['id_p']?>" readonly>
											<div class="form-group mb-3">
												<h4>Kode Penyakit<h4>
													<div class="input-group input-group-alternative">
														<input class="form-control" id="kd_penyakit" name="kd_penyakit" placeholder="Masukkan Kode Penyakit" type="text" value="<?=$data['kd_penyakit']?>" readonly>
													</div>
												</div>
												<div class="form-group mb-3">
													<h4>Nama Penyakit<h4>
														<div class="input-group input-group-alternative">
															<input class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Penyakit" type="text" value="<?=$data['nama']?>" required=""
															oninvalid="this.setCustomValidity('Nama Penyakit Belum Terisi!')"
					 										oninput="setCustomValidity('')"></input>
														</div>
													</div>
													<div class="form-group mb-3">
														<h4>Deskripsi<h4>
															<div class="input-group input-group-alternative">
																<textarea class="form-control" rows="5" id="deskripsi" name="deskripsi" placeholder="Masukkan Deskripsi" type="text" required=""
																oninvalid="this.setCustomValidity('Deskripsi Belum Terisi!')"
						 										oninput="setCustomValidity('')"><?=$data['deskripsi']?></textarea>
															</div>
														</div>
													<div class="form-group mb-3">
														<h4>Solusi<h4>
															<div class="input-group input-group-alternative">
																<textarea class="form-control" rows="5" id="keterangan" name="keterangan" placeholder="Masukkan Solusi" type="text" required=""
																oninvalid="this.setCustomValidity('Solusi Belum Terisi!')"
						 										oninput="setCustomValidity('')"><?=$data['keterangan']?></textarea>
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="modal-footer">
												<button type="submit" class="btn btn-primary">Simpan</button>
												<button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Tutup</button>
											</div>
										</form>
									</div>
								</div>
							</div>
							<!-- End of Modal Update -->
						<?php endforeach; ?>
					</div>
				</div>
			</div>
