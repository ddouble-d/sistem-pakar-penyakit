<div class="main-content-inner">
  <div class="row">
    <!-- data table start -->
    <div class="col-12 mt-5">
      <div class="card">
        <div class="card-body">
          <div class="table-responsive">
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-form">Tambah</button> -->
            <a href="<?= base_url();?>penyakit/tambah" class="btn btn-primary">Tambah</a></button>
            <table id="example" class="table table-striped table-bordered data">
              <thead class="bg-light text-capitalize">
                <tr>
                  <th>No</th>
                  <th>Kode Penyakit</th>
                  <th>Nama Penyakit</th>
                  <th>Solusi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $no =1; ?>
                <?php foreach ($penyakit as $data) : ?>
                  <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data['kd_penyakit'] ?></td>
                    <td><?= $data['nama'] ?></td>
                    <td><?= $data['keterangan'] ?></td>
                    <td>
                      <a
                      href="javascript:;"
                      data-id_p="<?= $data['id_p'] ?>"
                      data-kd_penyakit="<?= $data['kd_penyakit'] ?>"
                      data-nama="<?= $data['nama'] ?>"
                      data-keterangan="<?= $data['keterangan'] ?>"
                      data-toggle="modal" data-target="#edit-data">
                      <button  data-toggle="modal" data-target="#update-data" class="btn btn-info">Ubah</button>
                    </a>
                    <a href="#" class="btn btn-danger">Hapus</a>
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




<!-- Modal Tambah -->
<div class="modal fade" id="modal-form">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
<form action="<?=base_url('penyakit/save')?>" method="post" enctype="multipart/form-data" role="form">
      <div class="modal-header">
        <h5 class="modal-title">Tambah Data Penyakit</h5>
         <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
      </div>

        <div class="modal-body">
              <div class="form-group">
                <label for="example-text-input" class="col-form-label">Kode Penyakit</label>
                <input class="form-control" name="kd_penyakit" placeholder="Masukkan Kode Penyakit" type="text">
              </div>
              <div class="form-group">
                <label for="example-text-input" class="col-form-label">Nama Penyakit</label>
                <input class="form-control" name="nama" placeholder="Masukkan Nama Penyakit" type="text">
              </div>
              <div class="form-group">
                <label for="example-text-input" class="col-form-label">Keterangan</label>
                <textarea class="form-control" name="kd_penyakit" placeholder="Masukkan Keterangan" type="text"></textarea>
              </div>
              </div>

              <div class="modal-footer">
              <button type="submit" id="simpan" class="btn btn-primary">Save</button>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- End of Modal Tambah -->

      <!-- Modal Update -->
      <div class="modal fade" id="update-data" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
        <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
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
                    <div class="form-group mb-3">
                      <input type="hidden" id="id_p" name="id_p">
                      <h4>Kode Penyakit<h4>
                        <div class="input-group input-group-alternative">
                          <input class="form-control" id="kd_penyakit" name="kd_penyakit" placeholder="Masukkan Kode Penyakit" type="text">
                        </div>
                      </div>
                      <div class="form-group mb-3">
                        <h4>Nama Penyakit<h4>
                          <div class="input-group input-group-alternative">
                            <input class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Penyakit" type="text">
                          </div>
                        </div>
                        <div class="form-group mb-3">
                          <h4>Keterangan<h4>
                            <div class="input-group input-group-alternative">
                              <textarea class="form-control" rows="5" id="keterangan" name="keterangan" placeholder="Masukkan Keterangan" type="text"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button type="submit" class="btn btn-primary">Save</button>
                      <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <!-- End of Modal Update -->
