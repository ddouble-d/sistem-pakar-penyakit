<div class="header bg-gradient-info pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
    </div>
  </div>
</div>
<div class="container-fluid mt--9">
	<div class="col-12 mt-5">
		<div class="card shadow">
			<div class="card-body">

        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('flash'); ?>">
        </div>
        <div class="flash-username" data-flashusername="<?= $this->session->flashdata('error'); ?>">
        </div>

        <button type="button" data-toggle="modal" data-target="#modal-form" class="btn btn-outline-primary" style="margin-bottom:10px;">
          <span data-toggle="tooltip" data-placement="top" title="Tambah Data" class="btn-inner--icon"> <i class="ni ni-fat-add"></i>
          </span>
        </button>
				<div class="table-responsive">
					<div class="box-header">
						<!-- /.box-header -->
						<div class="box-body">
							<table id="example" class="table table-striped table-bordered data">
								<thead>
									<tr>
										<th>No</th>
										<th>Nama</th>
										<th>Username</th>
										<!-- <th>Level</th> -->
										<th width="10%">Aksi</th>
									</tr>
								</thead>
								<tbody>
									<?php $no =1; ?>
									<?php foreach ($user as $data) : ?>
										<td><?= $no++ ?></td>
										<td><?= $data['nama'] ?></td>
										<td><?= $data['username'] ?></td>
										<!-- <td>< ?= $data['level'] ?></td> -->
										<td>
                      <span data-toggle="modal" data-target="#update-data<?=$data['id']?>" class="btn btn-icon btn-2 btn-warning">
  										<a data-toggle="tooltip" data-placement="top" title="Edit Data" class="btn-inner--icon"><i class="ni ni-ruler-pencil"></i></a>
                      </span>
                      <a href="<?= base_url('users/delete/'.$data['id']); ?>" data-toggle="tooltip" data-placement="top" title="Hapus Data"
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
			<?php echo form_open_multipart('users/save'); ?>
			<!-- <form action="<=base_url('users/save')?>" method="post" enctype="multipart/form-data" role="form"> -->
				<div class="modal-header">
					<h3 class="modal-title" id="modal-title-default">Tambah Pakar</h3>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">×</span>
					</button>
				</div>

				<div class="modal-body p-0">
					<div class="card bg-secondary shadow border-0">
						<div class="card-header bg-transparent pb-5">
							<div class="form-group mb-3">
								<h4>Nama<h4>
									<div class="input-group input-group-alternative">
										<input class="form-control" name="nama" placeholder="Masukkan Nama" type="text" required=""
                    oninvalid="this.setCustomValidity('Nama Belum Terisi!')"
                    oninput="setCustomValidity('')">
									</div>
								</div>

											<div class="form-group mb-3">
												<h4>Username<h4>
													<div class="input-group input-group-alternative">
														<input class="form-control" name="username" placeholder="Masukkan Username" type="text" required="">
													</div>
												</div>
													<div class="form-group mb-3">
														<h4>Password<h4>
															<div class="input-group input-group-alternative">
																<input class="form-control" name="password" placeholder="Masukkan Password" type="password" required=""
                                oninvalid="this.setCustomValidity('Password Belum Terisi!')"
        		 										oninput="setCustomValidity('')">
															</div>
														</div>
														<!-- <div class="form-group mb-3">
															<h4>Level<h4>
																<div class="input-group input-group-alternative">
																	<select class="custom-select" name="level">
																		<option value="Admin">Admin</option>
																		<option value="User">User</option>
																	</select>
																</div>
															</div> -->
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

									<?php $no=0; foreach($user as $data): $no++; ?>
										<!-- Modal Update -->
										<div class="modal fade" id="update-data<?=$data['id']?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
											<div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
												<div class="modal-content">

													<div class="modal-header">
														<h3 class="modal-title" id="modal-title-default">Update Data Pakar</h3>
														<button type="button" class="close" data-dismiss="modal" aria-label="Close">
															<span aria-hidden="true">×</span>
														</button>

													</div>

													<form action="<?=base_url('users/update')?>" method="post" enctype="multipart/form-data" role="form">
														<div class="modal-body p-0">
															<div class="card bg-secondary shadow border-0">
																<div class="card-header bg-transparent pb-5">
																	<input type="hidden" id="id" name="id" class="form-control" value="<?=$data['id']?>" readonly>
																	<div class="form-group mb-3">
																		<h4>Nama<h4>
																			<div class="input-group input-group-alternative">
																				<input class="form-control" name="nama" placeholder="Masukkan Nama" type="text" value="<?=$data['nama']?>">
																			</div>
																		</div>
																		<!-- <div class="form-group mb-3">
																			<h4>Jenis Kelamin<h4>
																				<div class="input-group input-group-alternative">
																					<select class="custom-select" name="jk">
																						<option< ?php if ($data['jk'] == "L"): ?> selected="selected"< ?php endif; ?>>Laki-laki</option>
																						<option< ?php if ($data['jk'] == "P"): ?> selected="selected"< ?php endif; ?>>Perempuan</option>
																					</select>
																				</div>
																			</div> -->
																			<!-- <div class="form-group mb-3">
																				<h4>Tanggal Lahir<h4>
																					<div class="input-group input-group-alternative">
																						<input class="form-control" name="umur" type="date" value="< ?=$data['umur']?>">
																					</div>
																				</div>
																				<div class="form-group mb-3">
																					<h4>Alamat<h4>
																						<div class="input-group input-group-alternative">
																							<textarea class="form-control" rows="3" name="alamat" placeholder="Masukkan Alamat" type="text">< ?=$data['alamat']?></textarea>
																						</div>
																					</div> -->
																					<div class="form-group mb-3">
																						<h4>Username<h4>
																							<div class="input-group input-group-alternative">
																								<input class="form-control" name="username" placeholder="Masukkan username" type="text" value="<?=$data['username']?>">
																							</div>
																						</div>
																						<!-- <div class="form-group mb-3">
																							<h4>Username<h4>
																								<div class="input-group input-group-alternative">
																									<input class="form-control" name="username" placeholder="Masukkan Username" type="text" value="< ?=$data['username']?>">
																								</div>
																							</div> -->
																							<div class="form-group mb-3">
																								<h4>Password<h4>
																									<div class="input-group input-group-alternative">
																										<input class="form-control" name="password" placeholder="Masukkan Password" type="password" value="<?=$data['password']?>">
																									</div>
																								</div>
																								<!-- <div class="form-group mb-3">
																									<h4>Level<h4>
																										<div class="input-group input-group-alternative">
																											<select class="custom-select" name="level">
																												<option< ?php if ($data['level'] == "Admin"): ?> selected="selected"< ?php endif; ?>>Admin</option>
																												<option< ?php if ($data['level'] == "User"): ?> selected="selected"< ?php endif; ?>>User</option>
																											</select>
																										</div>
																									</div> -->
																									<!-- <div class="form-group mb-3">
																										<h4>Status<h4>
																											<div class="input-group input-group-alternative">
																												<select class="custom-select" name="status">
																													<option< ?php if ($data['status'] == "1"): ?> selected="selected"< ?php endif; ?>>Aktif</option>
																													<option< ?php if ($data['status'] == "0"): ?> selected="selected"< ?php endif; ?>>Tidak Aktif</option>
																												</select>
																											</div>
																										</div> -->
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
																			<!-- End of Modal Update -->
																		<?php endforeach; ?>
																	</div>
																</div>
															</div>
<script>
$('#modal-form').submit(function(e){
	e.preventDefault();
				// alert('submmit');
				var me = $(this);

				$.ajax({
					url 	:me.attr('action'),
					type	:'post',
					data 	: me.serialize(),
					dataType:'json',
					success:function(response){
						if(response.success == true){
							Swal.fire(
								'Good job!',
								'You clicked the button!',
								'success'
							)
							window.location.href='<?=base_url('users')?>';
						}else if(response.success == false){
							$.each(response.messages,function(key, value){
								var element = $('#' + key);
								element.closest('div.form-group')
								.removeClass('has-error')
								.addClass(value.length > 0 ? 'has-error' : 'has-success')
								.find('.text-danger')
								.remove();
								element.after(value);
							});
						}
					}
				})
			})
			</script>
