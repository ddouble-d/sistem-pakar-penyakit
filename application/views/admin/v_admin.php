<div class="header bg-gradient-info pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
      <div class="row">
                 <div class="col-xl-4 col-lg-6">
                   <div class="card card-stats mb-4 mb-xl-0">
                     <div class="card-body">
                       <div class="row">
                         <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Pakar</h5>
                           <span class="h2 font-weight-bold mb-0"><?= $user->num_rows(); ?></span>
                         </div>
                         <div class="col-auto">
                           <div class="icon icon-shape bg-red text-white rounded-circle shadow">
                             <i class="fas fa-users"></i>
                           </div>
                         </div>
                       </div>
                       <p class="mt-3 mb-0 text-sm">
                    <a class="text-nowrap" href="<?=base_url()?>Users">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                  </p>
                     </div>
                   </div>
                 </div>

                 <div class="col-xl-4 col-lg-6">
                   <div class="card card-stats mb-4 mb-xl-0">
                     <div class="card-body">
                       <div class="row">
                         <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Penyakit</h5>
                           <span class="h2 font-weight-bold mb-0"><?= $penyakit->num_rows(); ?></span>
                         </div>
                         <div class="col-auto">
                           <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                             <i class="fas fa-medkit"></i>
                           </div>
                         </div>
                       </div>
                       <p class="mt-3 mb-0 text-sm">
                    <a class="text-nowrap" href="<?=base_url()?>Penyakit">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                  </p>
                     </div>
                   </div>
                 </div>

                 <div class="col-xl-4 col-lg-6">
                   <div class="card card-stats mb-4 mb-xl-0">
                     <div class="card-body">
                       <div class="row">
                         <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Gejala</h5>
                           <span class="h2 font-weight-bold mb-0"><?= $gejala->num_rows(); ?></span>
                         </div>
                         <div class="col-auto">
                           <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                             <i class="fas fa-stethoscope"></i>
                           </div>
                         </div>
                       </div>
                       <p class="mt-3 mb-0 text-sm">
                    <a class="text-nowrap" href="<?=base_url()?>Gejala">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                  </p>
                     </div>
                   </div>
                 </div>

                 <!-- <div class="col-xl-3 col-lg-6">
                   <div class="card card-stats mb-4 mb-xl-0">
                     <div class="card-body">
                       <div class="row">
                         <div class="col">
                           <h5 class="card-title text-uppercase text-muted mb-0">Diagnosa</h5>
                           <span class="h2 font-weight-bold mb-0">< ?= $diagnosa->num_rows(); ?></span>
                         </div>
                         <div class="col-auto">
                           <div class="icon icon-shape bg-primary text-white rounded-circle shadow">
                             <i class="fas fa-stethoscope"></i>
                           </div>
                         </div>
                       </div>
                       <p class="mt-3 mb-0 text-sm">
                    <a class="text-nowrap" href="#">Selengkapnya <i class="fa fa-arrow-right"></i></a>
                  </p>
                     </div>
                   </div>
                 </div> -->


               </div>
    </div>
  </div>
</div>
