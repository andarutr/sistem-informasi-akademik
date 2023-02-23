<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt mb-3"></i> Tahun Akademik
    </h4>

    <a href="<?= base_url('administrator/tahun_akademik/tambah_tahun_akademik') ?>" class="btn btn-sm btn-primary mb-3"><i class="fas fa-sm fa-plus"></i>Tambah Tahun Akademik</a>

    <?= $this->session->flashdata('pesan') ?>
	<table class="table table-bordered table-striped table-hover">
		<tr>
			<th>NO</th>
			<th>TAHUN AKADEMIK</th>
			<th>SEMESTER</th>
			<th>STATUS</th>
			<th colspan="2">AKSI</th>
		</tr>
		<?php $i = 1;
		foreach($tahun_akademik as $taka) : ?>
		<tr>	
			<td><?= $i++ ?></td>
			<td><?= $taka->tahun_akademik ?></td>
			<td><?= $taka->semester ?></td>
			<td><?= $taka->status ?></td>
			<td width="20px">
    			<a href="<?= base_url('administrator/tahun_akademik/update/').$taka->id ?>" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></a>
    		</td>
    		<td width="20px">
    			<a href="<?= base_url('administrator/tahun_akademik/delete/').$taka->id ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a>
    		</td>
		</tr>	
		<?php endforeach; ?>
	</table>
</div>