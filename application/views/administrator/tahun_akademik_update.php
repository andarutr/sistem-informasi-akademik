<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt"></i> Update Tahun Akademik
    </h4>

    <?php foreach($tahun_akademik as $taka) : ?>
	<form action="<?= base_url('administrator/tahun_akademik/update_aksi') ?>" method="POST">
		<div class="form-group">
			<label>Tahun Akademik</label>
			<input type="hidden" name="id" value="<?= $taka->id ?>">
			<input type="text" name="tahun_akademik" placeholder="Masukkan tahun akademik" class="form-control" value="<?= $taka->tahun_akademik ?>">
			<?= form_error('tahun_akademik', '<p class="text-danger ml-3">','</p>') ?>
		</div>
		<div class="form-group">
			<label>Semester</label>
			<select class="form-control" name="semester">
				<option><?= $taka->semester ?></option>
				<option>Ganjil</option>
				<option>Genap</option>
			</select>
			<?= form_error('semester', '<p class="text-danger ml-3">','</p>') ?>
		</div>
		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="status">
				<option><?= $taka->status ?></option>
				<option>Aktif</option>
				<option>Tidak Aktif</option>
			</select>
			<?= form_error('status', '<p class="text-danger ml-3">','</p>') ?>
		</div>
		<button type="submit" class="btn btn-success">Update</button>
	</form>
	<?php endforeach; ?>
</div>