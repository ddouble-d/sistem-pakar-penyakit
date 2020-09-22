<div class="flash-login" data-flashlogin="<?= $this->session->flashdata('login'); ?>">
</div>
<div class="flash-email" data-flashemail="<?= $this->session->flashdata('email'); ?>">
</div>
        <div class="container py-lg-md d-flex">
          <div class="col px-0">
            <div class="row">
              <div class="col-lg-6">
                <h1 class="display-3  text-white">Sistem Pakar Diagnosa<span>Penyakit Umum</span></h1>
                <p class="lead  text-white">Sistem pakar membantu anda untuk mendiagnosa kemungkinan penyakit yang anda derita
                  berdasarkan gejala yang anda rasakan.</p>
                <div class="btn-wrapper">
                  <a href="<?=base_url()?>CekDiagnosa" class="btn btn-info btn-icon mb-3 mb-sm-0">
                    <span class="btn-inner--icon"><i class="fa fa-stethoscope"></i></span>
                    <span class="btn-inner--text">Cek Diagnosa</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </main>
