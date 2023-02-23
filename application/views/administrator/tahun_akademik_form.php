<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt"></i> Tambah Tahun Akademik
    </h4>

	<form action="<?= base_url('administrator/tahun_akademik/tambah_tahun_akademik_aksi') ?>" method="POST">
		<div class="form-group">
			<label>Tahun Akademik</label>
			<input type="text" name="tahun_akademik" placeholder="Masukkan tahun akademik" class="form-control">
			<?= form_error('tahun_akademik', '<p class="text-danger ml-3">','</p>') ?>
		</div>
		<div class="form-group">
			<label>Semester</label>
			<select class="form-control" name="semester">
				<option value="">Pilih</option>
				<option>Ganjil</option>
				<option>Genap</option>
			</select>
			<?= form_error('semester', '<p class="text-danger ml-3">','</p>') ?>
		</div>
		<div class="form-group">
			<label>Status</label>
			<select class="form-control" name="status">
				<option value="">Pilih</option>
				<option>Aktif</option>
				<option>Tidak Aktif</option>
			</select>
			<?= form_error('status', '<p class="text-danger ml-3">','</p>') ?>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>