<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt"></i> Tambah Data Prodi
    </h4>

	<form action="<?= base_url('administrator/prodi/tambah_prodi_aksi') ?>" method="POST">
		<div class="form-group">
			<label>Kode Prodi</label>
			<input type="text" name="kode_prodi" placeholder="Masukkan kode prodi" class="form-control">
			<?= form_error('kode_prodi', '<p class="text-danger ml-3">','</p>') ?>
		</div>
		<div class="form-group">
			<label>Nama Prodi</label>
			<input type="text" name="nama_prodi" placeholder="Masukkan nama prodi" class="form-control">
			<?= form_error('nama_prodi', '<p class="text-danger ml-3">','</p>') ?>
		</div>
		<div class="form-group">
			<label>Nama Jurusan</label>
			<select class="form-control" name="nama_jurusan">
				<option value="">Pilih jurusan</option>
				<?php foreach($jurusan as $jrs) : ?>
				<option value="<?= $jrs->nama_jurusan ?>"><?= $jrs->nama_jurusan ?></option>
				<?php endforeach; ?>
			</select>
			<?= form_error('nama_jurusan', '<p class="text-danger ml-3">','</p>') ?>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>