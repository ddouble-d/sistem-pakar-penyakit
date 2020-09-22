<div class="header bg-gradient-info pb-8 pt-5 pt-md-8">
  <div class="container-fluid">
    <div class="header-body">
    </div>
  </div>
</div>
<div class="box">
<div class="table-responsive">
	<div class="box-header">
		<!-- /.box-header -->
		<div class="box-body">
		<table id="example" class="table table-striped table-bordered data">
			<thead>
				<tr>
					<th>No</th>
          <th>Nama Pengguna</th>
					<th>Kode Penyakit</th>
					<th>Nama Penyakit</th>
          <th>Tanggal Diagnosa</th>
          <th>Hasil Diagnosa</th>
          <th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php $no =1; ?>
				<?php foreach ($diagnosa as $data) : ?>
					<tr id="data_<?= $data['id'] ?>">
						<td><?= $no++ ?></td>
            <td><?= $data['nama_pengguna'] ?></td>
						<td><?= $data['kd_penyakit'] ?></td>
						<td><?= $data['nama_penyakit'] ?></td>
						<td><?= $data['created_at'] ?></td>
            <td><?= $data['kepercayaan'] ?>%</td>
						<td>
							<a href="///" name="ubah" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i>Ubah</a>
							<a onclick="///" id="hapus" data-placement="bottom" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> Delete</a>
						</td>
						<input type="hidden" value="<?= $data['id']; ?>">
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>
</div>
</div>
