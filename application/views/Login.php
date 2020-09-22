     <div class="container pt-lg-md">
       <div class="row justify-content-center">
         <div class="col-lg-5">
           <div class="card bg-secondary shadow border-0">
             <div class="card-body px-lg-5 py-lg-5">
               <div class="text-center text-muted mb-4">
                 <small>Masuk</small>
               </div>
               <?= $this->session->flashdata('message'); ?>
               <form action="<?=base_url('login/auth')?>" method="post" enctype="multipart/form-data" role="form">
                 <div class="form-group mb-3">
                   <div class="input-group input-group-alternative">
                     <div class="input-group-prepend">
                       <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                     </div>
                     <input class="form-control" name="username" placeholder="Username" type="text" required="">
                   </div>
                 </div>
                 <div class="form-group">
                   <div class="input-group input-group-alternative">
                     <div class="input-group-prepend">
                       <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                     </div>
                     <input class="form-control" name="password" placeholder="Password" type="password"
                     required="">
                   </div>
                 </div>
                 <div class="text-center">
                   <button type="submit" class="btn btn-primary my-4">Masuk</button>
                 </div>
                 <!-- <br><div class="text-muted">
                   <small>Belum punya akun? <a href="<?=base_url('register')?>">Daftar</a></small>
                 </div> -->
               </form>
             </div>
           </div>
         </div>
       </div>
     </div>
   </section>
 </main>
