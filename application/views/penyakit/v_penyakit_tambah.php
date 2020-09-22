<?php echo validation_errors(); ?>
    <?php echo form_open_multipart('penyakit/save2',array('id'=>'form-user')); ?>
    <!-- <form action="<=base_url('penyakit/save2')>" method="post" enctype="multipart/form-data" role="form"> -->
      <!-- Textual inputs start -->
      <div class="col-12 mt-5">
        <div class="card">
          <div class="card-body">
            <div class="form-group">
              <label for="example-text-input" class="col-form-label">Kode Penyakit</label>
              <input class="form-control" name="kd_penyakit" placeholder="Masukkan Kode Penyakit" type="text">
              <?= form_error('kd_penyakit','<small class="text-danger">','</small>') ?>
            </div>
            <div class="form-group">
              <label for="example-text-input" class="col-form-label">Nama Penyakit</label>
              <input class="form-control" name="nama" placeholder="Masukkan Nama Penyakit" type="text">
              <?= form_error('nama','<small class="text-danger">','</small>') ?>
            </div>
            <div class="form-group">
              <label for="example-text-input" class="col-form-label">Keterangan</label>
              <textarea class="form-control" name="kd_penyakit" placeholder="Masukkan Keterangan" type="text"></textarea>
              <?= form_error('keterangan','<small class="text-danger">','</small>') ?>
            </div>
            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Save</button>
        </div>
      </div>
    </div>
    </form>
    <script>
    	$('#form-user').submit(function(e){
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
    								alert('Data berhasil di tambah');
    								window.location.href='<?=base_url('penyakit')?>';
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
