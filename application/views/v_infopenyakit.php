<div class="container">
  <div class="col-7 mt-5 mx-auto">
    <div class="card">
      <div class="card-body">
        <div class="row">
          <?php foreach ($penyakit as $data): ?>
          <div class="col-sm-6"><span>
        <a data-toggle="modal" data-target="#select-data<?=$data['id_p']?>" class="btn"><?= $data['nama'] ?></a>
      </span></div>
    <?php endforeach ?>
      </div>
    </div>
    </div>
    </div>
    </div>
</section>
</div>
</main>
<?php $no=0; foreach($penyakit as $data): $no++; ?>
  <!-- Modal Update -->
  <div class="modal fade" id="select-data<?=$data['id_p']?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal-lg modal- modal-dialog-centered modal-" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h4 class="modal-title" id="modal-title-default"><?= $data['nama'] ?></h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>

          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-transparent pb-5">
                <div class="form-group mb-3">
                    <h5><?=$data['deskripsi']?></h5>
                  </div>
                    <div class="form-group mb-3">
                        <h5><?=$data['keterangan']?></h5>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="modal-footer">
                  <button type="button" class="btn btn-link  ml-auto" data-dismiss="modal">Close</button>
                </div> -->
            </div>
          </div>
        <!-- </div> -->
        <!-- End of Modal Update -->
      <?php endforeach; ?>
