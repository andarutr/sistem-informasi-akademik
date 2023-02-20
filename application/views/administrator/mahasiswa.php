<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt mb-3"></i> Mahasiswa
    </h4>

    <a href="<?= base_url('administrator/mahasiswa/tambah_mahasiswa') ?>" class="btn btn-sm btn-primary mb-3"><i class="fas fa-sm fa-plus"></i>Tambah Mahasiswa</a>

    <?= $this->session->flashdata('pesan') ?>
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>NAMA LENGKAP</th>
			<th>ALAMAT</th>
			<th>EMAIL</th>
			<th colspan="3">AKSI</th>
		</tr>
		<?php 
		$i = 1;
		foreach($mahasiswa as $mhs) : ?>
		<tr>
			<td><?= $i++ ?></td>
			<td><?= $mhs->nama_lengkap ?></td>
			<td><?= $mhs->alamat ?></td>
			<td><?= $mhs->email ?></td>
			<td width="20px">
    			<a href="<?= base_url('administrator/mahasiswa/detail/').$mhs->id ?>" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
    		</td>
			<td width="20px">
    			<a href="<?= base_url('administrator/mahasiswa/update/').$mhs->id ?>" class="btn btn-sm btn-success"><i class="fa fa-edit"></i></a>
    		</td>
    		<td width="20px">
    			<a href="<?= base_url('administrator/mahasiswa/delete/').$mhs->id ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
    		</td>
		</tr>
		<?php endforeach; ?>
	</table>
</div>