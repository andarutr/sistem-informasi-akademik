<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt mb-3"></i> Mata Kuliah
    </h4>

    <a href="<?= base_url('administrator/matakuliah/tambah_matakuliah') ?>" class="btn btn-sm btn-primary mb-3"><i class="fas fa-sm fa-plus"></i>Tambah Mata Kuliah</a>

    <?= $this->session->flashdata('pesan') ?>
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>KODE MATA KULIAH</th>
			<th>NAMA MATA KULIAH</th>
			<th>PROGRAM STUDI</th>
			<th colspan="3">AKSI</th>
		</tr>

		<?php 
		$i = 1;
		foreach($matakuliah as $mth) : ?>
		<tr>
			<td><?= $i++ ?></td>
			<td><?= $mth->kode_matakuliah ?></td>
			<td><?= $mth->nama_matakuliah ?></td>
			<td><?= $mth->nama_prodi ?></td>
			<td width="20px">
    			<a href="<?= base_url('administrator/matakuliah/detail/').$mth->kode_matakuliah ?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
    		</td>
			<td width="20px">
    			<a href="<?= base_url('administrator/matakuliah/update/').$mth->kode_matakuliah ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
    		</td>
    		<td width="20px">
    			<a href="<?= base_url('administrator/matakuliah/delete/').$mth->kode_matakuliah ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
    		</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>