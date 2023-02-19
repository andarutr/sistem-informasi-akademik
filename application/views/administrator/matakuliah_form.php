<div class="container-fluid">
	<h4>
        <i class="fas fa-tachometer-alt"></i> Tambah Data Matakuliah
    </h4>
	<form action="<?= base_url('administrator/matakuliah/tambah_matakuliah_aksi') ?>" method="POST">
		<div class="form-group">
			<label>Kode Mata Kuliah</label>
			<input type="text" name="kode_matakuliah" class="form-control">
			<?= form_error('kode_matakuliah','<p class="text-danger ml-3">','</p>') ?>
		</div>
		<div class="form-group">
			<label>Nama Mata Kuliah</label>
			<input type="text" name="nama_matakuliah" class="form-control">
			<?= form_error('nama_matakuliah','<p class="text-danger ml-3">','</p>') ?>
		</div>
		<div class="form-group">
			<label>SKS</label>
			<select class="form-control" name="sks">
				<option value="">Pilih</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
			</select>
			<?= form_error('sks','<p class="text-danger ml-3">','</p>') ?>
		</div>
		<div class="form-group">
			<label>Semester</label>
			<select class="form-control" name="semester">
				<option value="">Pilih</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				<option>6</option>
				<option>7</option>
				<option>8</option>
			</select>
			<?= form_error('semester','<p class="text-danger ml-3">','</p>') ?>
		</div>
		<div class="form-group">
			<label>Program Studi</label>
			<select class="form-control" name="nama_prodi">
				<option value="">Pilih Prodi</option>
				<?php foreach($prodi as $prd) : ?>
				<option value="<?= $prd->nama_prodi ?>"><?= $prd->nama_prodi ?></option>
				<?php endforeach; ?>
			</select>
			<?= form_error('semester','<p class="text-danger ml-3">','</p>') ?>
		</div>
		<button type="submit" class="btn btn-primary">Simpan</button>
	</form>
</div>