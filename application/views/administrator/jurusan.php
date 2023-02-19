<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt mb-3"></i> Jurusan
    </h4>

    <a href="<?= base_url('administrator/jurusan/input') ?>" class="btn btn-sm btn-primary mb-3"><i class="fas fa-sm fa-plus"></i>Tambah Jurusan</a>

    <?= $this->session->flashdata('pesan') ?>

    <table class="table table-bordered table-striped table-hover">
    	<tr>
    		<th>NO</th>
    		<th>KODE JURUSAN</th>
    		<th>NAMA JURUSAN</th>
    		<th colspan="2">AKSI</th>
    	</tr>

    	<?php 
    	$i = 1;
    	foreach($jurusan as $jrs) : ?>
    	<tr>
    		<td><?= $i++ ?></td>
    		<td><?= $jrs->kode_jurusan ?></td>
    		<td><?= $jrs->nama_jurusan ?></td>
    		<td width="20px">
    			<a href="<?= base_url('administrator/jurusan/update/').$jrs->id_jurusan ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
    		</td>
    		<td width="20px">
    			<a href="<?= base_url('administrator/jurusan/delete/').$jrs->id_jurusan ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
    		</td>
    	</tr>
    	<?php endforeach; ?>
    </table>
</div>