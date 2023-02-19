<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt mb-3"></i> Prodi
    </h4>

    <a href="<?= base_url('administrator/prodi/tambah_prodi') ?>" class="btn btn-sm btn-primary mb-3"><i class="fas fa-sm fa-plus"></i>Tambah Prodi</a>

    <?= $this->session->flashdata('pesan') ?>

	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>KODE PRODI</th>
			<th>NAMA PRODI</th>
			<th>NAMA JURUSAN</th>
			<th colspan="2">AKSI</th>
		</tr>

		<?php 
		$i = 1;
		foreach($prodi as $prd) : ?>
		<tr>
			<td><?= $i++ ?></td>
			<td><?= $prd->kode_prodi ?></td>
			<td><?= $prd->nama_prodi ?></td>
			<td><?= $prd->nama_jurusan ?></td>
			<td width="20px">
    			<a href="<?= base_url('administrator/prodi/update/').$prd->id_prodi ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
    		</td>
    		<td width="20px">
    			<a href="<?= base_url('administrator/prodi/delete/').$prd->id_prodi ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
    		</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>