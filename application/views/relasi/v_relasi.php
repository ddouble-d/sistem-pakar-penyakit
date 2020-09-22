<div class="container-fluid mt--9">
 <div class="col-12 mt-5">
   <div class="card">
     <div class="card-body">

      <div class="table-responsive">
         <div class="box-header">
           <div class="box-body">
             <?php
                 $diagnosa = array();
                 foreach($DIAGNOSA as $row){
                     $diagnosa[$row->kd_penyakit] = $row->nama;
                 }

                 $gejala = array();
                 foreach($GEJALA as $row){
                     $gejala[$row->kd_gejala] = $row->nm_gejala;
                 }
                 $relasi = array();
                 foreach ($RELASI as $row) {
                     $relasi[$row->kd_penyakit][$row->kd_gejala] = 1;
                 }
             ?>
             <table id="example" class="table table-striped table-bordered data">
               <thead>
                 <tr>
                   <!-- <th>No</th> -->
                   <th>Kode Penyakit</th>
                   <th>Nama Penyakit</th>
                   <!-- <th>Kode Gejala</th> -->
                   <!-- <th>Nama Gejala</th> -->
                   <?php foreach ($gejala as $key => $val):?>
                   <th><?=$key?> <?=$val?></th>
                   <?php endforeach ?>
                   <th width="10%">Aksi</th>
                 </tr>
               </thead>
               <!-- <tbody> -->
                 <!-- <php $no =1; > -->
                 	<!-- <php foreach ($relasi as $data) : > -->
                    <?php foreach ($diagnosa as $key => $val):?>
                  <tr>
                   <!-- <td><= $no++ ?></td>
                   <td><= $data['kd_penyakit'] ?></td>
                   <td><= $data['nama'] ?></td>
                   <td><= $data['kd_gejala'] ?></td>
                   <td><= $data['nm_gejala'] ?></td> -->
                   <td><?=$key?></td>
                   <td><?=$val?></td>
                   <?php foreach ($gejala as $k => $v):?>
                   <td><?=isset($relasi[$key][$k]) ? '&#10004;' : ''?></td>
                   <?php endforeach ?>
                   <td>
                   <a data-toggle="modal" data-target="#update-data<?=$key?>" class="btn btn-info">Ubah</a>
                   </td>
               </tr>
             <?php endforeach ?>
           <!-- </tbody> -->
         </table>
       </div>
     </div>
   </div>
 </div>
</div>
</div>
</div>

<!-- Modal Update -->
<?php $no=0; foreach($DIAGNOSA as $row): $no++; ?>
  <!-- Modal Update -->
  <div class="modal fade" id="update-data<?=$key?>" tabindex="-1" role="dialog" aria-labelledby="modal-form" aria-hidden="true">
    <div class="modal-dialog modal- modal-dialog-centered modal-" role="document">
      <div class="modal-content">

        <div class="modal-header">
          <h3 class="modal-title" id="modal-title-default">Update Relasi</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>

        </div>

        <form action="<?=base_url('relasi/update')?>" method="post" enctype="multipart/form-data" role="form">
          <div class="modal-body p-0">
            <div class="card bg-secondary shadow border-0">
              <div class="card-header bg-transparent pb-5">
                <div class="form-group mb-3">
                  <h4>Kode Penyakit<h4>
                    <div class="input-group input-group-alternative">
                      <input class="form-control" id="kd_penyakit" name="kd_penyakit" placeholder="Masukkan Kode Penyakit" type="text" value="<?=set_value('kd_penyakit', $row->kd_penyakit)?>" readonly="" required=""
                      oninvalid="this.setCustomValidity('Kode Penyakit Belum Terisi!')"
                      oninput="setCustomValidity('')"></input>
                    </div>
                  </div>
                  <div class="form-group mb-3">
                    <h4>Nama Penyakit<h4>
                      <div class="input-group input-group-alternative">
                        <input class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Penyakit" type="text" value="<?=set_value('nama', $row->nama)?>" readonly="" required=""
                        oninvalid="this.setCustomValidity('Nama Penyakit Belum Terisi!')"
                        oninput="setCustomValidity('')"></input>
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
      <?php endforeach; ?>
    </div>
  </div>
</div>
