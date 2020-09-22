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
                    <th style="width:100px">Kode</th>
                    <th>Nama Gejala</th>
                    <th style="width:100px">Bobot</th>
                    <th style="width:50px">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($gejala as $data) : ?>
                    <td><?= $data['kd_gejala'] ?></td>
                    <td><?= $data['nm_gejala'] ?></td>
                    <td><?= $data['bobot'] ?></td>
                    <td>
                      <span data-toggle="modal" data-target="#update-data<?=$data['id']?>" class="btn btn-icon btn-2 btn-warning">
  										<a data-toggle="tooltip" data-placement="top" title="Edit Data" class="btn-inner--icon"><i class="ni ni-ruler-pencil">
                        </i></a>
                      </span>
  										<a href="<?= base_url('gejala/delete/'.$data['id']); ?>" data-toggle="tooltip" data-placement="top" title="Hapus Data"
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
      <form action="<?=base_url('gejala/save')?>" method="post" enctype="multipart/form-data" role="form">
        <div class="modal-header">
          <h3 class="modal-title" id="modal-title-default">Tambah Data Gejala</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

        <div class="modal-body p-0">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="form-group mb-3">
                <h4>Kode Gejala<h4>
                  <div class="input-group input-group-alternative">
                    <input class="form-control" name="kd_gejala" type="text" value="<?= $autoid;?>"readonly>
                  </div>
                </div>
                <div class="form-group mb-3">
                  <h4>Nama Gejala<h4>
                    <div class="input-group input-group-alternative">
                      <input class="form-control" name="nm_gejala" placeholder="Masukkan Nama Gejala" type="text" required="">
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <h4>Bobot<h4>
                      <div class="input-group input-group-alternative">
                        <input class="form-control" name="bobot" placeholder="Masukkan Bobot" type="number" min="0.1" max="1"  step="0.1" required="">
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
      <?php $no=0; foreach($gejala as $data): $no++; ?>
        <!-- modal update -->
        <div class="modal fade" id="update-data<?=$data['id']?>" tabindex="-1"  aria-hidden="true">
          <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
            <div class="modal-content">
              <form action="<?=base_url('gejala/update')?>" method="post" enctype="multipart/form-data" role="form">
                <div class="modal-header">
                  <h3 class="modal-title" id="modal-title-default">Update Data Gejala</h3>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                  </button>
                </div>

                <div class="modal-body p-0">
                  <div class="card bg-secondary shadow border-0">
                    <div class="card-header bg-transparent pb-5">
                      <input type="hidden" id="id" name="id" class="form-control" value="<?=$data['id']?>" readonly>
                      <div class="form-group mb-3">
                        <h4>Kode Gejala<h4>
                          <div class="input-group input-group-alternative">
                            <input class="form-control" name="kd_gejala" placeholder="Masukkan Kode Gejala" type="text" value="<?=$data['kd_gejala']?>" readonly>
                          </div>
                        </div>
                        <div class="form-group mb-3">
                          <h4>Nama Gejala<h4>
                            <div class="input-group input-group-alternative">
                              <input class="form-control" name="nm_gejala" placeholder="Masukkan Nama Gejala" type="text" value="<?=$data['nm_gejala']?>">
                            </div>
                          </div>
                          <div class="form-group mb-3">
                            <h4>Bobot<h4>
                              <div class="input-group input-group-alternative">
                                <input class="form-control" name="bobot" placeholder="Masukkan Bobot" type="number" min="0.1" max="1"  step="0.1" required="" value="<?=$data['bobot']?>">
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
              <!-- end of modal edit -->
            <?php endforeach; ?>
          </div>
        </div>
      </div>

      <script>
      $('.hapus').click(function(){
        // var iddata = $(this).attr('id');
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
            // if (result.value) {
            //   $.ajax({
            //     url : "<///?= base_url('gejala/delete/')+iddata; ?>",
            //     type : 'post',
            //     success:function(){
            //   Swal.fire(
            //     'Deleted!',
            //     'Your file has been deleted.',
            //     'success'
            //   )
            // }
            //
            //   })
            // }
          })
      });
      </script>
