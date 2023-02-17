<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt"></i> Tambah Data Jurusan
    </h4>

	<form action="<?= base_url('administrator/jurusan/input_aksi') ?>" method="POST">
		<div class="form-group">
			<label>Kode Jurusan</label>
			<input type="text" name="kode_jurusan" placeholder="Masukkan kode jurusan" class="form-control">
			<?= form_error('kode_jurusan', '<p class="text-danger ml-3">','</p>') ?>
		</div>
		<div class="form-group">
			<label>Nama Jurusan</label>
			<input type="text" name="nama_jurusan" placeholder="Masukkan nama jurusan" class="form-control">
			<?= form_error('nama_jurusan', '<p class="text-danger ml-3">','</p>') ?>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>